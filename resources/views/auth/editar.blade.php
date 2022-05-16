@extends('layouts.app')

@section('title','Home')

@section('content')

@foreach ($persona as $persona)
<form action="{{route('guardardatos',$persona)}}" method="POST">
    @csrf
    @method('put')
    <div class="w-2/4 bg-gray-300 m-auto">
        <h1 class="text-2xl text-bold text-center w-full">Editar Persona</h1>
    </div>
    <div class="w-2/4 bg-green-300 h-full m-auto flow-root">
    
     <div class="m-auto">
        <label class="ml-5" for="nombre">Nombre</label>
        <br>
        <textarea  name="nombre" id="nombre" rows="10" cols="80">
            {!! $persona->nombre !!}
        </textarea>
    </div>
    <div>
        <label class="ml-5" for="edad">Edad</label><br>
        <input class="ml-5 shadow rounded w-3/4" type="text" name="edad" value="{{$persona->edad}}" required>
    </div>
    <a class="mt-10">
        <button type="submit" class="mt-8 border border-2px bg-gray-300 p-2 shadow rounded ml-8 mb-5 hover:bg-blue-300 float-left">guardar</button>
    </a>
    <a href="{{route('verpersonas')}}" class="mt-10">
        <button type="button" class="mt-8 border border-2px bg-gray-300 p-2 pl-8 pr-8 shadow rounded mr-8 mb-5 hover:bg-blue-300 float-right">Salir</button>
    </a>
</div>
</form>
@endforeach
<script src="he.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
var editor = CKEDITOR.replace( 'nombre' );
CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;

</script>
    
    
@endsection