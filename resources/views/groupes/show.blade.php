@extends('layout')
@section('title','groupes')
@section('heading', $groupe->libelle. ' Details')
@section('content')
<div class="column">
      <h2><span>{{$groupe->libelle}}</span></h2>
      <p>
            {{$groupe->libelle}}
      </p>
      <div class="col-sm-8">
            <h2>Stagiaires Associated to <b>{{$groupe->libelle}}</b></h2>
      </div>
      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>libelle</th>
                        <th>Filiere</th>
                        <th>created at</th>
                        <th>updated at</th>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td>{{$groupe->libelle}}</td>
                        <td>{{$nom_filiere}}</td>
                        <td>{{$groupe->created_at}}</td>
                        <td>{{$groupe->updated_at}}</td>
                        
                  </tr>
            </tbody>
      </table>
</div>
@endsection
@section('back')
<h3>
      <a class="details" href="{{route('groupes.index')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>
@endsection