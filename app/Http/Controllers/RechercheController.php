<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Groupe;
use \App\Models\Stagiaire;
use \App\Models\Formateur;

class RechercheController extends Controller
{
    public function RechercheGroupeStagiairesAnneeFormation() {
        
        $resultats = Groupe::join('stagiaires','groupes.id','=','stagiaires.groupe_id')
        ->join('formateur_groupe','groupes.id','=','formateur_groupe.groupe_id')
        ->select('stagiaires.nom','stagiaires.prenom','groupes.libelle','formateur_groupe.annee_formation')
        // ->orderby('groupes.libelle')
        // ->orderby('formateur_groupe.annee_formation')
        ->get();
        // return response()->json($resultat);
        // dd($resultat);
        return view('recherche.RechercheGroupeStagiairesAnneeFormation', compact('resultats'));

    }
    public function RechercheGroupe() {
        $groupes = Groupe::all();
        return view('recherche.RechercheStagiairesParGroupe',compact('groupes'));
        // return response()->json($resultat);
        // dd($t);
    }
    public function RechercheStagiairesParGroupe(Request $request) {
        $groupes = Groupe::all();
        $groupe_id = $request->groupe_id;
        $old_groupe_id = $groupe_id;
        $stagiaires = Stagiaire::where('groupe_id',$groupe_id)->get();
        return view('recherche.RechercheStagiairesParGroupe',compact('groupes','stagiaires','old_groupe_id'));
        // return response()->json($resultat);
    }
    public function RechercheFormateur() {
        return view('recherche.RechercheFormateurParMatricule');

    }
    public function RechercheFormateurParMatricule(Request $request) {
        $matricule = $request->matricule; 
        
        $formateur = Formateur::where('matricule',$matricule)->first();
        return view('recherche.RechercheFormateurParMatricule',compact('formateur'));
        // dd($formateur);
    }
    public function RechercheNbstagairePargroupe(){
       $nbstagiaire=Stagiaire::join('groupes' ,'stagiaires.groupe_id','=','groupe_id')
       ->selectRaw('groupes.libelle,count(*) as nbInscrit')
       ->groupby('groupes.libelle')
       ->get();
       return view('recherche.RechercheNbstagairePargroupe',compact('nbstagiaire'));
}
public  function RechercherFormateurMaxsalaire(){
       $formateutminsalaire=Formateur::where('salaire','=',Formateur::min('salaire'))->get();
       $formateutmaxsalaire=Formateur::where('salaire','=',Formateur::max('salaire'))->get();
       return view('recherche.RechercherFormateurMaxsalaire',compact('formateutminsalaire','formateutmaxsalaire'));
}

public function RechercheFormateurParsalaire() {
       return view('recherche.RechercheFormateurTranchsalaire');

   }
   public function RechercheFormateurTranchsalaire(Request $request) {
       $minsalaire = $request->minsalaire; 
       $maxsalaire = $request->maxsalaire; 
       
       $formateur = Formateur::whereBetween('salaire',[$minsalaire,$maxsalaire])->get();
       return view('recherche.RechercheFormateurTranchsalaire',compact('formateur'));
       // dd($formateur);
   }
}