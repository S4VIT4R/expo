@extends('layouts.app')

@section('title','Home')

@section('content')

<form action="{{route('guardarpersona')}}" method="POST">
    @csrf
    <div class="w-2/4 bg-gray-300 m-auto">
        <h1 class="text-2xl text-bold text-center w-full">Agregar Persona</h1>
    </div>
    <div class="w-2/4 bg-green-300 h-full m-auto flow-root">
        <div class="m-auto">
            <label class="ml-5" for="nombre">Nombre</label>
            <br>
            <input class="ml-5 shadow rounded w-3/4" type="text" name="nombre" placeholder="Ingrese su nombre" required>
        </div>
        <div>
            <label class="ml-5" for="edad">Edad</label><br>
            <input class="ml-5 shadow rounded w-3/4" type="text" name="edad" placeholder="Ingrese su edad" required>
        </div>
        <a class="mt-10">
            <button type="submit" class="mt-8 border border-2px bg-gray-300 p-2 shadow rounded ml-8 mb-5 hover:bg-blue-300 float-left">Agregar</button>
        </a>
        <a href="{{route('inicio')}}" class="mt-10">
            <button type="button" class="mt-8 border border-2px bg-gray-300 p-2 pl-8 pr-8 shadow rounded mr-8 mb-5 hover:bg-blue-300 float-right">Salir</button>
        </a>
    </div>
</form>

    
    
@endsection