@extends('layout')
@section('title','filiere')
@section('heading','ISTA NTIC SYBA Rechereche')
@section('content')
    <h1>Liste de Recherche</h1>
    <a href="{{ route('Recherche.RechercheGroupeStagiairesAnneeFormation')}}">Recherche Par Groupe Stagiaires Annee Formation</a>
    <br>
    <a href="{{ route('Recherche.RechercheGroupe')}}">Recherche  Stagiaires Par Groupe</a>
    <br>
    <a href="{{ route('Recherche.RechercheFormateur')}}">Recherche  Formateur Par Matricule</a>
    <br>
    <a href="{{ route('Recherche.RechercheNbstagairePargroupe')}}">Recherche Nb stagaire Par groupe</a>
    <br>
    <a href="{{ route('Recherche.RechercherFormateurMaxsalaire')}}">Recherche  Formateur max et min salaire</a>
    <br>
    <a href="{{ route('Recherche.RechercheFormateurParsalaire')}}">Recherche Formateur Par salaire</a>

    @endsection

<!--  -->
