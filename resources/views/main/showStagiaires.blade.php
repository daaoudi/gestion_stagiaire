@extends('master.layout')

@section('content')
<div class="row my-3 h-100">
    <div class="col-md-12  ">
   <h1 class="text-center text-white">EPG</h1>
   @if (session()->has('success'))
   <div class="alert alert-success">
    {{session()->get('success')}}
   </div>
   @endif
    </div>
</div>
<div class="row my-5">
    <div class="col-xl-12 ">
        <div class="row">
            
            <div class="col-xl-12">
 
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>CIN</th>
                        <th>Filiere</th>
                        <th>Date_Naissane</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($stagiaires as $stagiaire)
                      <tr>
                        <td>{{$stagiaire->nom}}</td>
                        <td>{{$stagiaire->prenom}}</td>
                        <td>{{$stagiaire->cin}}</td>
                        <td>{{$stagiaire->filiere}}</td>
                        <td>{{$stagiaire->date_naissance}}</td>
                        <td>@if(auth()->check())
                            @if(auth()->user()->is_admin)
                          <button title="Modifier" class="btn btn-success"><a href="{{route('stagiaires.edit',$stagiaire->id)}}"><span class="material-symbols-outlined">
                            edit
                            </span></a></button>
                            <form action="{{route('stagiaires.destroy',$stagiaire->id)}}" style="display: inline-block;" method="post" id="{{$stagiaire->id}}">
                            @csrf
                            @method('DELETE')
                            </form>
    
                            <button title="Supprimer" class="btn btn-danger" onclick="event.preventDefault();
                            if(confirm('vous etez sure pour la suppression ?'))
                            document.getElementById('{{$stagiaire->id}}').submit();" type="submit"><span class="material-symbols-outlined">
                            delete
                            </span> </button>
                            <button title="View" class="btn btn-warning"> <a href="{{route('stagiaires.show',$stagiaire->id)}}"> <span class="material-symbols-outlined">
                              visibility
                              </span></a></button>
                                @else
                               <span style="color:red;"> vous n'êtes pas l'accès pour les actions !</span>
                              @endif
                              @endif</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
        
    
            </div>
          
        </div>
        
        


    
    </div>
</div>


@endsection