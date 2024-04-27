@extends('layout')
@section('title','formateurs')
@section('heading','ISTA NTIC SYBA Stagiaires')
@section('content')
<div class="container-lg">
      <div class="table-responsive">
            <div class="table-wrapper">
                  <div class="table-title">
                        <div class="row">
                              <div class="col-sm-8">
                                    <h2>Liste de <b>Formateurs</b></h2>
                              </div>
                              <div class="col-sm-4">
                                    <a href="{{route('formateursGroupes.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                              </div>
                        </div>
                  </div>
                  <table class="table table-bordered">
                        <thead>
                              <tr>
                                    <th>Nom complet</th>
                                    <th>dtae de naissance</th>
                                    <th>Groupe </th>
                                    <th>Actions</th>
                              </tr>
                        </thead>
                        <tbody>
                              @if (count($resultats)>0)
                              @foreach ( $resultats as $formateur )
                              <tr>
                              <td>{{$formateur->nom_complet}}</td>
                                    <td>{{$formateur->annee_formation}}</td>
                                    
                                    <td>{{$formateur->libelle}}</td>
                                    <td style="width: 130px;">
                                    <a class="edit" href="{{route('formateursGroupes.edit',$formateur->id)}}" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                          <form action="{{route('formateursGroupes.destroy',$formateur->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"onclick="return confirm('voulez vous supprimer ce formateur')" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                                          </form>
                                    </td>
                              </tr>
                              @endforeach
                              @else
                                  <tr style="text-align: center">
                                    <td colspan="5">
                                          Aucune Formateur Trouve
                                    </td>
                                  </tr>
                              @endif


                        </tbody>
                  </table>
            </div>
      </div>
</div>
@endsection