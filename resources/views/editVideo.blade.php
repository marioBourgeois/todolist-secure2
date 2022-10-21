@extends('layouts.app')

@section('content')

<form action="/editVideo/{{$video->id}}" method="POST" class="add">
    @csrf
      <input value="{{$video->nomVideo}}"
        id="nomVideo"
        name="nomVideo"
        type="text"
        class="form-control"
        placeholder="Prendre une note…"
     
      />

      <input value="{{$video->image}}"
      id="image"
      name="image"
      type="file"
      class="form-control"
    />
      <input 
      type='submit'
      name='envoyer' >
    </div>
</form>

@endsection