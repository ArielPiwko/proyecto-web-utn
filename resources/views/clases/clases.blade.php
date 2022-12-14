<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/clientes.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Listado de Clases - Gym Riachuelo</title>
</head>
<body>
@if(isset($usuario))
@include('header',['usuario' => $usuario->username, 'rol' => $usuario->rol])
@else
@include('header')
@endif
@yield('header')
    <section class="contentTable">
    <h2 id="title">Listado de Clases</h2>
    
    @if($usuario->rol == 4)
    <a href="{{ route('clases.create') }}" class="box__button botonCrear">Clase Nueva</a>
    @endif
    <br><br>

    <table class="table">
  <thead>
    <tr>
            <th scope="col">Clase</th>
            <th scope="col">Profesor</th>
            <th scope="col">Dia</th>
            <th scope="col">Horario</th>
            <th scope="col">Cupos</th>
            <th scope="col">Anotate!</th>
            @if($usuario->rol == 4)
            <th scope="col">Detalle</th>
            <th scope="col">Eliminar</th>
            @endif
    </tr>
  </thead>
  <tbody>
    @foreach($clases as $clase)
        <tr>
            <td>{{$clase->nombre_clase}}</td>
            <td>{{$clase->nombre}} {{$clase->apellido}}</td>
            <td>{{$clase->dia}}</td>
            <td>{{$clase->hora_inicio}} a {{$clase->hora_fin}}</td>
            <td>{{$clase->cupos}}</td>
            <td><a href="{{route('clases.anotarse', $clase->idclase) }}" class="bi bi-person-plus-fill" style="color:green; font-size:25px;"></a></td>
            @if($usuario->rol == 4)
            <td> 
                <a href="{{ route('clases.show', $clase->idclase) }}" class="box__button vermas" style="background:#a193ab!important;"> Ver m??s </a>
            </td> 
            <td>
            <form action="{{ route('clases.show', $clase->idclase) }}" method="POST">
                @method('DELETE')
                @csrf
            <button type="button" class="btn box__button eliminarButton delete-button" style="background:#cb4e53;" data-form-action="{{route('clases.show', $clase->idclase)}}"> 
            <span class="fa fa-regular fa-trash"></span>?? Eliminar </button>        
            </td> 
            @endif 
        </tr>
    @endforeach
    </tr>
    

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content" id="deleteStudentForm" >
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Clase</h5>
              </div>
              <div class="modal-body" style="font-weight:bold; font-size:large;"><br>
                ??Est?? seguro que desea eliminar la clase? Esta acci??n no se puede deshacer
                </div>
              <div class="modal-footer">
                <button type="button"  class="btn box__button botonCancelar" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn box__button eliminarButton" style="background:#cb4e53;">
                <span class="fa fa-regular fa-trash"></span>?? Eliminar</button>
              </div>
            </div>
          </div>
        </div>
        </form>
  </tbody>
</table>

@if($usuario->rol == 4)
<a href="{{ route('profesores.index')}}" class="box__button vermas" style="background:#ececec!important; color:#39313f!important;"> Ver Profesores </a>
@endif

<br><br>
    <a href="{{ route('index') }}" class="box__button float-right" style="background:#a193ab!important; padding-top:10px; padding-bottom:10px;"> <span class="fa-duotone fa-angles-left"></span>< Volver </a>
<br><br>

</section>

<script>
let buttons = document.querySelectorAll('.delete-button');
let form = document.querySelector('form');

buttons.forEach(button => {
    button.addEventListener('click', event => {
        event.preventDefault();

        form.setAttribute('action', event.target.dataset.formAction);

        $('#exampleModal').modal('show');
    });
});



</script>
</body>
</html>