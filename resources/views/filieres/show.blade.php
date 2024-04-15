@extends('layout')
@section('title','filiere')
@section('heading', $filiere->titre. ' Details')
@section('content')
<div class="column">
     
      <div class="col-sm-8">
            <h2>Details filiere:</h2>
      </div>
      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>crerated at</th>
                        <th>updated at</th>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td>{{$filiere->id}}</td>
                        <td>{{$filiere->titre}}</td>
                        <td>{{$filiere->description}}</td>
                        <td>{{$filiere->created_at}}</td>
                        <td>{{$filiere->updated_at}}</td>
                        
                  </tr>


            </tbody>
      </table>
</div>
@endsection
@section('back')
<h3>
      <a class="details" href="{{route('filieres.index')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>
@endsection