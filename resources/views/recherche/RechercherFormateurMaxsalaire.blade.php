@extends('layout')
@section('title','filiere')
@section('heading','ISTA NTIC SYBA Rechereche')
@section('content')
      <div class="col-sm-8">
            <h4>Recherche Formateur min salaire </h2>
      </div>
      <table class="table table-bordered">
            <thead>
            <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Salaire</th>
              </tr>
            </thead>
            <tbody>
                  @foreach ($formateutminsalaire as $resultat)
                  <tr>
                  <td>{{$resultat->matricule}}</td>
                <td>{{$resultat->nom}}</td>
                <td>{{$resultat->prenom}}</td>
               
                <td>{{$resultat->salaire}}</td>                     
                  </tr>
                  @endforeach
            </tbody>
      </table>
      <div class="col-sm-8">
            <h4>Recherche Formateur mix salaire </h2>
      </div>
      <table class="table table-bordered">
            <thead>
            <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Salaire</th>
              </tr>
            </thead>
            <tbody>
                  @foreach ($formateutmaxsalaire as $resultat)
                  <tr>
                  <td>{{$resultat->matricule}}</td>
                <td>{{$resultat->nom}}</td>
                <td>{{$resultat->prenom}}</td>
               
                <td>{{$resultat->salaire}}</td>                     
                  </tr>
                  @endforeach
            </tbody>
      </table>
@endsection
@section('back')
<h3>
      <a class="details" href="{{route('Recherche')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>
@endsection