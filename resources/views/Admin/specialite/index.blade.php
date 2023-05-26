@extends('layouts.admin')

@section('title', 'Sepcialite | admin')

@section('title-page-cat', 'Sepcialite page')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="card-text">Specialite </h3>
            <a href="{{ route('specialite.ajouter') }}" class="btn btn-outline-primary">Ajouter Specialite</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($specialite as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->titre }}</td>
                            <td>
                                <img src="{{ asset('photos/specialite/'.$item->photo)}}" width="150px" alt="{{ $item->photo }}">
                            </td>
                            <td>
                                <a href="{{ route('index.edit.specialite', $item->id )}}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$item->id}}">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Supprimer</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Êtes-vous sûr de supprimer ce {{ $item->titre}}?
                                    </div>
                                    <form action="{{ route('supp.specialite', $item->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-footer">
                                            <input type="hidden" value="{{ $item->id }}" name="id_spe" >
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
