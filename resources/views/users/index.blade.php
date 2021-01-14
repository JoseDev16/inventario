@extends('base')
@section('content')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Listado Usuarios </li>
   </ol>
</nav>
<!-- Boton agregar usuario modal -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModalusuario">
      Agregar usuario
   </button>
</div>
<!-- Fin Boton agregar usuario modal -->

<!-- Agregar Modal -->
@include('users.partials.addModalusuario')
<!-- Fin Agregar Modal -->

<!-- Mensaje Exito -->

<!-- Fin Mensaje Exito -->

<!-- Fin Boton agregar categoria modal -->
@if(count($usuarios) > 0)
<!-- Table -->
<table class="table">
   <thead class="thead-dark">
      <tr>
         <th scope="col">#</th>
         <th scope="col">Nombre</th>
         <th scope="col">Email</th>
         <th scope="col">Estado</th>
         <th scope="col">Acciones</th>
      </tr>
      <?php $i = 0 ?>
      @foreach ($usuarios as $usuario )
      <?php $i++ ?>
      <tr>
         <td> {{ $i}} </td>
         <td> {{ $usuario->name }} </td>
         <td> {{ $usuario->email }} </td>
         <td> {{ $usuario->estado }} </td>
         <td style="display: flex">
            
            <button type="button" title="Editar" data-toggle="modal" data-target="#editModalusuario" class="fas fa-w fa-edit"
               style="color:gray !important; background-color:transparent; border: 0px solid;"
               onclick="fun_edit('{{$usuario->id}}')"></button>

               <button type="button" title="Eliminar" data-toggle="modal" data-target="#deleteModal"
               class="fas fa-w fa-trash"
               style="color:gray !important; background-color:transparent; border: 0px solid;"
               onclick="fun_delete('{{$usuario->id}}')"></button>
            
         </td>
      </tr>
      @endforeach
   </thead>
</table>
<!-- Fin Table -->



<!-- Editar Modal-->
@include('users.partials.editModalusuario')
<!-- Fin Editar Modal-->

@else
<!--Mensaje cuando no hay motivos de sustitución registrados-->
<div class="alert alert-danger">
   <strong>¡Opps! Parece que no tienes ningún usuario registrado.</strong>
</div>
<!--Fin del Mensaje -->
@endif

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body align-self-center">
                <form action="{{ route('usuario.destroy') }}" method="POST">
                   
                    
                    <div style="text-align: center">
                        <br>
                        <i class='fas fa-exclamation-circle' style='font-size:80px;color: gray;'></i>
                        <br>
                        <br>
                        <strong>
                            <h3>¿Estás seguro que deseas eliminar el usuario?</h3>
                        </strong>
                        
                        <input type="hidden" id="delete_id" name="delete_id">
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">
                            <i class='fas fa-check-circle'></i>
                            Eliminar
                        </button>
                        <a href="" class="btn btn-primary" data-dismiss="modal">
                            <i class='fa fa-times'></i>
                            Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
   //Función para editar un motivo de sustitución en especifico
   function fun_edit(id)
   {
      var view_url= '{{ route("usuario.edit_view", ":id") }}';
      view_url = view_url.replace(':id', id);
      
      $.ajax({
         url: view_url,
         type:"GET", 
         data: {"id":id},
         success: function(user){
             console.log(user);
            $("#edit_id").val(result.id);
            $('#nameEdit').val(result.name);
            $('#emailEdit').val(result.email);
            $('#passwordEdit').val(result.password);
            $('#estadoEdit').val(result.estado);
         }
      })
   }
   function fun_delete(id)
    {
        $("#delete_id").val(id); 
    }
</script>
@endsection