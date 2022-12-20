<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cliente.css') }}"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Gym Riachuelo</title>
</head>
<body>
@if(isset($usuario))
@include('header',['usuario' => $usuario->username])
@else
@include('header')
@endif
@yield('header')

<section class="contentTable">
@if(isset($clase))
<h2 id="title">Editar Clase</h2>
@else
<h2 id="title">Crear Clase</h2>
@endif

<form role="form" @if(isset($clase)) action="{{route('clases.update', $clase->idclase)}}" @else action="{{route('clases.store')}}" @endif method="POST"  autocomplete="off">
<input type="hidden" name="_method" value="{{ isset($clase) ? 'PUT' : 'POST' }}">
    @csrf

    <a href="{{ route('clases.index') }}" class="box__button float-right" style="background:#a193ab!important; padding-top:10px; padding-bottom:10px;"> <span class="fa-duotone fa-angles-left"></span>< Volver </a>


    <div class="box" style="margin-top:20px";>
        <h1>Detalles de la Clase</h1>
    </div>

    <div class="box">
        <label></label><input style=opacity:0%;pointer-events:none;>
    </div>

    <div class="box">
    <label>Profesor</label>
    <select name="id"  class="inputdata" @if(isset($clase))  value="{{$clase->nombre}} {{$clase->apellido}}" @endif>
        @foreach($profesores as $profesor)
        <option value="{{$profesor->id}}" @if(isset($clase)) <?php if($clase->id == $profesor->id) echo 'selected="selected"';?> @endif>{{$profesor->nombre}} {{$profesor->apellido}}</option>
        @endforeach
    </select>
    </div>

    <div class="box">
        <label>Clase</label>
        <input type="text" name="nombre_clase"  class="inputdata"
        @if(isset($clase))  value="{{$clase->nombre_clase}}" @endif 
        @if(!is_null(old('nombre_clase'))) value="{{old('nombre_clase')}}" @endif>
    </div>

    <div class="box">
    <label>Dia</label>
    <select name="dia"  class="inputdata" @if(isset($clase))  value="{{$clase->dia}} {{$clase->dia}}" @endif>
        <option value="lunes">lunes</option>
        <option value="martes">martes</option>
        <option value="miercoles">miercoles</option>
        <option value="jueves">jueves</option>
        <option value="viernes">viernes</option>
        <option value="sabado">sabado</option>
        <option value="domingo">domingo</option>
    </select>
    </div>
    
    <div class="box">
        <label>Hora de Inicio</label>
        <input type="time" name="hora_inicio"  class="inputdata"
        @if(isset($clase))  value="{{$clase->hora_inicio}}" @endif 
        @if(!is_null(old('hora_inicio'))) value="{{old('hora_inicio')}}" @endif>
    </div>
    
    <div class="box">
        <label>Hora de Fin</label>
        <input type="time" name="hora_fin"  class="inputdata"
        @if(isset($clase))  value="{{$clase->hora_fin}}" @endif 
        @if(!is_null(old('hora_fin'))) value="{{old('hora_fin')}}" @endif>
    </div>

    <div class="box">
        <label>Cupos</label>
        <input type="number" name="cupos"  class="inputdata"
        @if(isset($clase))  value="{{$clase->cupos}}" @endif 
        @if(!is_null(old('cupos'))) value="{{old('cupos')}}" @endif>
    </div>

   <div class="box">
        <label></label><input style=opacity:0%;pointer-events:none;>
    </div>


    <div class="box">
        <button type="submit" class="box__button botonCrear" >Guardar cambios</button>
    </div>

</form>
</section>
</body>
</html>