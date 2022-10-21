@extends('layouts.app')

@section('content')

      <h2>
         Ajout image/vidéo 
      </h2>

  
      <div class="formulaire">
      
         <form method="POST" action="{{ route('images.store'), ('store.video')}}" 
               enctype="multipart/form-data">
            @csrf

            <div class="image">
         
            <input type="text" name="nomVideo" class="form-control" placeholder="Nom de la vidéo…"> <br>
            <input type="file" class="form-control" required name="image">
            {{--  <label>Select Video:</label>
                     <input type="file" name="video" class="form-control"/> --}}
         
            </div>
            <br>
            <div class="post_button">
            <button type="submit" class="btn btn-success"> <div class="boutonajout"> Ajouter vidéo </div></button>
            </div>

         </form>

      </div>


 
@endsection
