@extends('layout')
@section('title','groupes')
@section('heading', $groupe->libelle. ' Edit')
@section('content')
<!-- Registration 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5">
      <div class="container">
            <div class="row justify-content-md-center">
                  <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                              <div class="row">
                                    <div class="col-12">
                                          <div class="mb-5">
                                                <h2 class="h3">Editing Groupe</h2>
                                          </div>
                                    </div>
                              </div>
                              @if ($errors->any())
                              <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                    @endforeach
                              </div>
                              @endif
                              <form action="{{route('groupes.update', $groupe->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row gy-3 gy-md-4 overflow-hidden">
                                          <div class="col-12">
                                                <label for="libelle" class="form-label">Titre <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="libelle" id="libelle" value="{{$groupe->libelle}}" placeholder="Groupe Titre" required>
                                          </div>
                                          <div class="col-12">
                                                <label for="filiere" class="form-label">Filiere<span class="text-danger">*</span></label>
                                                <select name="filiere_id" id="filiere_id" class="form-control" required>
                                                      @foreach ($filiers as $filiere)
                                                      <option value="{{ $filiere->id }}" @if($groupe->filiere_id === $filiere->id) selected @endif>
                                                            {{ $filiere->titre }}
                                                      </option>
                                                      @endforeach
                                                </select>
                                          </div>

                                          <div class="col-12">
                                                <div class="d-grid">
                                                      <button class="btn btn-lg btn-primary" type="submit">Update</button>
                                                </div>
                                          </div>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
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