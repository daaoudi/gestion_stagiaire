@extends('master.layout')
@section('content')

<div class="row my-5 mx-5 d-flex justify-content-center align-items-center" style="min-height:50ch;position:relative;top:50px">
    <div class="col-xl-12">
        <h4>le Nom de Stagiaire : {{$stagiaire->nom}}</h4>
        <h4>le Prenom de Stagiaire : {{$stagiaire->prenom}}</h4>
        <p>le Filiere de Stagiaire : {{$stagiaire->filiere}}</p>
        <p>CIN de Stagiaire : {{$stagiaire->cin}}</p>
        <p>Date de Naissance : {{$stagiaire->date_naissance}}</p>
        <div>
            <button class="btn btn-primary" onclick="window.print();">Imprimer</button>
        </div>
    </div>
</div>


@endsection