<?php

namespace App\Http\Controllers;
use App\models\Groupe;
use App\models\Filiere;


use Illuminate\Http\Request;

class GroupeController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groupes = Groupe::all();
        return view('groupes.index', compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filieres = Filiere::all();
        return view('groupes.create', compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate(([
            'libelle' => 'required',
            'filiere_id' => 'required',
        ]));
        Groupe::create($data);
        return redirect()->route('groupes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $groupe = Groupe::find($id);
        $nom_filiere = Filiere::find($groupe->filiere_id)->titre;
        return view('groupes.show', compact('groupe','nom_filiere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $groupe = Groupe::find($id);
        $filiers = Filiere::all();
        return view('groupes.edit', compact('groupe', 'filiers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $groupe = Groupe::find($id);
        $data = $request->validate(([
            'libelle' => 'required',
            'filiere_id' => 'required',
        ]));
        $groupe->update($data);
        return redirect()->route('groupes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $groupe = Groupe::find($id);

        if ($groupe) {
            $groupe->delete();
            return back()->with('success', 'Groupe deleted successfully!');
        } else {
            return back()->with('error', 'Groupe not found!');
        }
    }
}
