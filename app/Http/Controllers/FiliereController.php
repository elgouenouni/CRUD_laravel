<?php

namespace App\Http\Controllers;
use App\models\Filiere;

use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function index()
    {
        $filieres = Filiere::all();
        return view('filieres.index', compact('filieres'));
        //  $filieres = Filiere::find(1);
        // $groupe=$filieres->groupes;
        // dd($groupe);
        // return response()->json($filieres);0
    }

    public function create()
    {
        return view('filieres.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|unique:filieres,titre',
            'description' => 'required',
        ],
        [
            'titre.required' => 'champ Obligatoire',
            'titre.unique' => 'titre deja exist',
            'description.required' => 'champ Obligatoire',
        ]);
        
        // $titre = $request->input('titre');
        // $description = $request->input('description');


        // Filiere::create([
        //                     'titre' =>$titre,
        //                     'description' =>$description,
        //                 ]);
        Filiere::create($data);
     return redirect()->route('filieres.index')->with('success', 'Filiere bien ajoute');
    }

    public function show(string $id)
    {
        $filiere = Filiere::find($id);
        return view('filieres.show', compact('filiere'));
    }

    public function edit(string $id)
    {
        $filiere = Filiere::find($id);
        return view('filieres.edit', compact('filiere'));
    }

    public function update(Request $request, string $id)
    {
        $filiere = Filiere::find($id);

        $filiere->titre = $request->input('titre');
        $filiere->description = $request->input('description');

        $filiere->save();
        return redirect()->route('filieres.index');
    }

    public function destroy(string $id)
    {
        $filiere = Filiere::find($id);
        $filiere->delete();
        return redirect()->route('filieres.index');

    }
}
