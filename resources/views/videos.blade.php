@extends('layouts.app')

@section('content')



<div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
	<div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
        <div class="mb-4">

                <h1 class="text-grey-darkest">- Vidéos -</h1>

                <a href="/ajoutImage"> Ajouter une vidéo</a>
                <br>

                <br>
                @foreach($videos as $infosVideo)

                {{$infosVideo->nomVideo}}
                 <img src="{{ url('public/images/'.$infosVideo->image) }} "alt="Image non disponible"
                 style="height: 250px; width: 400px;">

                 <a href="/editVideo/{{$infosVideo->id }}"> Modifier</a>
                 <a href="/deleteVideo/{{$infosVideo->id }}"> Supprimer</a>




                
<br>
                @endforeach
                <br>

        </div>
    </div>
</div> 


@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
        @endif


        @endsection