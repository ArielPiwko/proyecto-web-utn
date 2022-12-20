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
    <title>Listado de Profesores</title>
</head>
<body>
@if(isset($usuario))
@include('header',['usuario' => $usuario->username, 'rol' => $usuario->rol])
@else
@include('header')
@endif
@yield('header')
    <section class="contentTable">
    <h2 id="title">Listado de Entrenadores Personales</h2>
    
    <a href="{{ route('entrenadores.create') }}" class="box__button botonCrear">Registrar Entrenador</a>
    <br><br>

    <table class="table">
  <thead>
    <tr>
            <th scope="col">Nombre de usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefono</th>
            <th scope="col">Fecha de Ingreso</th>
            <th scope="col">Salario</th>
            <th scope="col">Detalle</th>
            <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($entrenadores as $entrenador)
        <tr>
            <td>{{$entrenador->username}}</td>
            <td>{{$entrenador->nombre}}</td>
            <td>{{$entrenador->apellido}}</td>
            <td>{{$entrenador->fecha_de_nacimiento}}</td>
            <td>{{$entrenador->email}}</td>
            <td>{{$entrenador->telefono}}</td>
            <td>{{$entrenador->fecha_ingreso}}</td>
            <td>{{$entrenador->salario}}</td>
            <td> 
                <a href="{{ route('entrenadores.show', $entrenador->id) }}" class="box__button vermas" style="background:#a193ab!important;"> Ver más </a>
            </td> 
            <td>
            <form action="{{ route('entrenadores.show', $entrenador->id)}}" method="POST">
                @method('DELETE')
                @csrf
            <button type="button" class="btn box__button eliminarButton delete-button" style="background:#cb4e53;" data-form-action="{{route('entrenadores.show', $entrenador->id)}}"> 
            <span class="fa fa-regular fa-trash"></span>  Eliminar </button>        
            </td>  
        </tr>
    @endforeach
    </tr>
    

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content" id="deleteStudentForm" >
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Entrenador</h5>
              </div>
              <div class="modal-body" style="font-weight:bold; font-size:large;"><br>
                ¿Está seguro que desea eliminar el entrenador? Esta acción no se puede deshacer
                </div>
              <div class="modal-footer">
                <button type="button"  class="btn box__button botonCancelar" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn box__button eliminarButton" style="background:#cb4e53;">
                <span class="fa fa-regular fa-trash"></span>  Eliminar</button>
              </div>
            </div>
          </div>
        </div>
        </form>
  </tbody>
</table>

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