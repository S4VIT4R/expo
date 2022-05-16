@extends('layouts.app')

@section('title','Home')

@section('content')


<div class="w-2/4 bg-gray-300 m-auto flow-root">
    <h1 class="text-2xl text-bold text-center w-full">Usuarios</h1>
</div>
<div class="w-2/4 bg-green-300 h-full m-auto flow-root">
    @foreach ($personas as $persona)
    <div class="m-auto flow-root bg-blue-300 mb-5 mt-2">
        <label class="ml-5 font-bold text-2xl" >Nombre:</label>
        <div class="ml-5">
            {!!$persona->nombre!!}
        </div>
        <label class="ml-5 font-bold text-2xl" >Edad:</label>
        <label class="ml-5">{{$persona->edad}}</label>
        <div class="titulo">
            <div class="ml-2 title">
                <form action="{{route('eliminarusuario',$persona)}}" method="POST">
                    @csrf
                    @method('delete')
                        <button type="submit" class=" border border-2px bg-gray-300 p-2 pl-8 pr-8 shadow rounded ml-2 mr-8 mb-5 hover:bg-blue-300 float-right">Eliminar</button>
                </form>
            </div>
            <div class="mr-2 title"> 
                <a href="{{route('inicio')}}" class="mr-1 float-right">
                    <button type="button" class="border border-2px bg-gray-300 p-2 pl-8 pr-8 shadow rounded ml-8 hover:bg-blue-300 float-right">Salir</button></a>
            </div>
            <div class="ml-2 title"> 
                <a href="{{route('editardatos',$persona)}}" class="float-right">
                    <button type="button" class="border border-2px bg-gray-300 p-2 pl-8 pr-8 shadow rounded ml-8 hover:bg-blue-300 float-right">Editar</button>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection()