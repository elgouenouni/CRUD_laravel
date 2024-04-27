@extends('layout')
@section('title','filiere')
@section('heading','ISTA NTIC SYBA Rechereche')
@section('content')
      <div class="col-sm-8">
            <h4>Recherche Formateur Par salaire</h2>
      </div>
      <form action="{{route('Recherche.RechercheFormateurTranchsalaire')}}" method="post">
        @csrf
        @method('POST')
        <div class="row gy-3 gy-md-4 overflow-hidden">
            <div class="col-4">
                <input type="text" class="form-control" name="minsalaire" id="minsalaire" placeholder="minsalaire">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" name="maxsalaire" id="maxsalaire" placeholder="maxsalaire">
            </div>
            <div class="col-3">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Rechercher</button>
                </div>
            </div>
        </div>
    </form>
    @isset($formateur)
       </br>
    <h5>nombre de formateur {{count($formateur)}}</h5>
    </br>
    <table class="table table-bordered">
        <thead>
              <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Genre</th>
                    <th>Date de naissance</th>
                    <th>Salaire</th>
              </tr>
        </thead>
        <tbody>
        @foreach($formateur as $form)
        <tr>
            <td>{{ $form->matricule }}</td>
            <td>{{ $form->nom }}</td>
            <td>{{ $form->prenom }}</td>
            <td>{{ $form->genre }}</td>
            <td>{{ $form->date_naissance }}</td>
            <td>{{ $form->salaire }}</td>
        </tr>
        @endforeach
        </tbody>
</table>
@else
<table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="6">Aucun Formateur Trouvé</th>
        </tr>
    </thead>
  </table>
@endisset
@endsection
@section('back')
<h3>
      <a class="details" href="{{route('Recherche')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>

@endsection