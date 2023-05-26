@extends('layouts.admin')

@section('title', 'Sepcialite | admin')

@section('title-page-cat', 'Sepcialite page')

@section('content')
    <div class="card">
        <h3 class="card-text">Specialite </h3>
        <div class="card-body">
            <form action="{{ route('edit.specialite', $specialite->id)}}" method="POST" class="row g-3 " enctype="multipart/form-data" >
                @csrf
                <div class="col-md-6">
                    <label  class="form-label">Titre Specialite</label>
                    <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre"  value="{{ $specialite->titre, old('titre')}}"  placeholder="Enter titre le specialite">
                    @error('titre')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputGroupFile02" class="form-label">photo Specialite </label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" aria-label="file example" required>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Ajouter Specialite</button>
                </div>
            </form>
            <div class="d-flex justify-content-center">
                <img src="{{ asset('photos/specialite/'. $specialite->photo )}}" width="320px" alt="{{ $specialite->photo }}">
            </div>

        </div>
    </div>
@endsection
