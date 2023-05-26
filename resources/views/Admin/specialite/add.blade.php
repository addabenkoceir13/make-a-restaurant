@extends('layouts.admin')

@section('title', 'Sepcialite | admin')

@section('title-page-cat', 'Sepcialite page')

@section('content')
    <div class="card">
        <h3 class="card-text">Specialite page</h3>
        <div class="card-body">
            <form action="{{ route('add.specialite') }}" method="POST" class="row g-3 " >
                @csrf
                <div class="col-md-6">
                    <label  class="form-label">Titre Specialite</label>
                    <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre"  value="{{ old('titre')}}"  placeholder="Enter titre le specialite">
                    @error('titre')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="inputGroupFile02" class="form-label">photo Specialite </label>
                    <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" id="inputGroupFile02">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Ajouter Specialite</button>
                </div>
            </form>
        </div>
    </div>
@endsection
