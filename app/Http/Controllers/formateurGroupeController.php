<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Models\FormateurGroupe;
use App\Models\Groupe;
use Illuminate\Http\Request;
use App\Http\Requests\FormateurGroupeRequest;

class formateurGroupeController extends Controller
{
   public function index(){
            $resultats=Formateur::join('formateur_groupe','formateurs.id','=','formateur_groupe.formateur_id')
            ->join('groupes','formateur_groupe.groupe_id','=','groupes.id')
            ->selectRaw('
                    formateur_groupe.id,
                    concat(formateurs.nom," ",formateurs.prenom) as nom_complet, 
                    groupes.libelle,
                    formateur_groupe.annee_formation
                    ')
            ->orderby('groupes.libelle')
            // ->orderby('formateur_groupe.annee_formation','DESC')
            ->get();
            return view('formateursGroupes.index',compact('resultats'));
   }
   public function create(){
            $formateurs= Formateur::all();
            $groupes=Groupe::all();
            return view('formateursGroupes.create',compact('formateurs','groupes'));
   }
   public function affecter(FormateurGroupeRequest $request){
    $formateurId= $request->input('formateur_id');
    $groupeId=$request->input('groupe_id');
    $anneeFormation= $request->input('annee_formation');

    // FormateurGroupe::create(
    //     [
    //         'formateur_id' =>$formateurId ,
    //         'groupe_id'=>$groupeId,
    //         'annee_formation'=>$anneeFormation

    //     ]
    //     );
        $formateur = Formateur::find($formateurId);
        $groupe = Groupe::find($groupeId);
        $formateur->groupes()->attach($groupe,
            [
                'annee_formation' => $anneeFormation,
                'created_at' => now(),
                'updated_at' => now()
            ]   
        );
   
    return redirect()->route('formateursGroupes.index')->with('success','affectation bien enregirtrer');

}
public function destroy($id){
    $affectation=FormateurGroupe::find($id);
    $affectation->delete();
    // $formateur = Formateur::find($formateur_id);
    // $groupe = Groupe::find($groupe_id);
    // $formateur->groupes()->detach($groupe);
    return redirect()->route('formateursGroupes.index')->with('success','affectation bien supprime');

}

public function edit($id){
    $affectation = FormateurGroupe::find($id);
    $formateurs = Formateur::all();
    $groupes = Groupe::all();
    // dd($affectation);
    return view('formateursGroupes.edit',compact('affectation','formateurs','groupes'));
}
public function update(FormateurGroupeRequest $request, string $id)
    {
        // dd($request);
        // $affectation = Formateur_Groupe::find($id);
        // $affectation->update($request->all());
        $formateurID = $request->formateur_id;
        $groupeID = $request->groupe_id;
        $formateur = Formateur::find($formateurID);
        $groupe = Groupe::find($groupeID);

        $formateur->groupes()->updateExistingPivot(
            $groupe, 
            [
            'groupe_id' => $request->groupe_id,
            'annee_formation' => $request->annee_formation,
            ]
    );
        return redirect()->route('formateursGroupes.index')->with('success', 'affectation bien modifie');
    }
   
}
