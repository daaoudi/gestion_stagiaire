@extends('master.layout')

@section('content')
<div class="row my-3">
    <div class="col-md-12 mx-auto ">
   <h1 class="text-center text-white">Modifier Stagiaire </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

   <div class="card">
    <div class="card-header">
        <h3 class="card-title text-center">
            le stagiaire : {{$stagiaire->nom . ' ' . $stagiaire->prenom}}
        </h3>
    </div>
    <div class="card-body">
      <form action="{{route('stagiaires.update',$stagiaire->id)}}" enctype="multipart/form-data" method="post">
      @csrf
      @method('PUT')
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="text" class="form-control" value="{{$stagiaire->nom}}" name="nom" id="exampleFormControlInput1" placeholder="Nom" required>
        </div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Prenom</label>
    <input type="text" class="form-control" value="{{$stagiaire->prenom}}" name="prenom" id="exampleFormControlInput1" placeholder="Prenom" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Filiere</label>
        <input type="text" class="form-control" value="{{$stagiaire->filiere}}" name="filiere" id="exampleFormControlInput1" placeholder="Filiere" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">CIN</label>
            <input type="text" class="form-control" value="{{$stagiaire->cin}}" name="cin" id="exampleFormControlInput1" placeholder="CIN" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date de Naissance</label>
                <input type="date" class="form-control" value="{{$stagiaire->date_naissance}}" name="date_naissance" id="exampleFormControlInput1" required>
                </div>
    
   
    
    
    <div class="col-12">
        <button class="btn btn-warning"  type="submit">Modifier</button>
    </div>
      </form>  
    </div>
   </div>
    </div>
</div>


@endsection