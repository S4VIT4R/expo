@extends('layouts.app')

@section('title','Home')

@section('content')

<div class="w-2/4 bg-gray-300 m-auto">
    <h1 class="text-2xl text-bold text-center w-full">Usuarios</h1>
</div>
<div class="w-2/4 bg-green-300 h-full m-auto flow-root">
    <a class="mt-10" href="{{route('agregarpersona')}}">
        <button class="mt-8 border border-2px bg-gray-300 p-2 shadow rounded ml-8 mb-5 hover:bg-blue-300 float-left">Agregar Persona</button>
    </a>
    <a href="{{route('verpersonas')}}" class="mt-10">
        <button class="mt-8 border border-2px bg-gray-300 p-2 pl-8 pr-8 shadow rounded mr-8 mb-5 hover:bg-blue-300 float-right">Ver Personas</button>
    </a>
</div>
    
    
@endsection