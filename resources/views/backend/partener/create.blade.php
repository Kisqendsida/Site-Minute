@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Ajouter un partenaire</h5>
    <div class="card-body">
      <form method="post" action="{{route('partener.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="name" class="col-form-label">Nom <span class="text-danger">*</span></label>
        <input id="name" type="text" name="name" placeholder="Entrer le Nom"  value="{{old('name')}}" class="form-control">
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="prenom" class="col-form-label">Prénom <span class="text-danger">*</span></label>
        <input id="prenom" type="text" name="prenom" placeholder="Entrer le Prénom"  value="{{old('prenom')}}" class="form-control">
        @error('prenom')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="email" class="col-form-label">Email <span class="text-danger">*</span></label>
        <input id="email" type="text" name="email" placeholder="Entrer l'adresse e-mail"  value="{{old('email')}}" class="form-control">
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="phone" class="col-form-label">Téléphone <span class="text-danger">*</span></label>
        <input id="phone" type="number" name="phone" placeholder="Entrer le Téléphone"  value="{{old('phone')}}" class="form-control">
        @error('type')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="depart" class="col-form-label">Ville de départ <span class="text-danger">*</span></label>
        <input id="depart" type="text" name="depart" placeholder="Entrer la ville de départ"  value="{{old('depart')}}" class="form-control">
        @error('depart')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="arrivee" class="col-form-label">Ville d'arrivée <span class="text-danger">*</span></label>
        <input id="arrivee" type="text" name="arrivee" placeholder="Entrer la ville d'arrivée"  value="{{old('arrivee')}}" class="form-control">
        @error('arrivee')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="vehicule" class="col-form-label">Type de Véhicule <span class="text-danger">*</span></label>
        <input id="vehicule" type="text" name="vehicule" placeholder="Entrer le type de véhicule"  value="{{old('vehicule')}}" class="form-control">
        @error('vehicule')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="etat" class="col-form-label">Etat du véhicule<span class="text-danger">*</span></label>
        <input id="etat" type="text" name="etat" placeholder="Entrer l'état du véhicule"  value="{{old('etat')}}" class="form-control">
        @error('etat')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">
          <label for="capacity" class="col-form-label">Capacité<span class="text-danger">*</span></label>
        <input id="capacity" type="number" name="capacity" placeholder="Entrer la capacité"  value="{{old('capacity')}}" class="form-control">
        @error('capacity')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        
        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Réinitialiser</button>
           <button class="btn btn-success" type="submit">Soumettre</button>
        </div>
      </form>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
    $('#description').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endpush