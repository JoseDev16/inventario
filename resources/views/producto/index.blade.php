@extends('base')
@section('content')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">Listado productos </li>
   </ol>
</nav>
<!-- Boton agregar producto modal -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModalproducto">
      Agregar producto
   </button>
</div>
<!-- Fin Boton agregar producto modal -->

<!-- Agregar Modal -->
@include('producto.partials.addModalproducto')
<!-- Fin Agregar Modal -->
<!-- agregar producto a bodega-->
@include('producto.partials.addProductoBodegaModal')
<!-- fin producto a bodega modal-->



<!-- Fin Boton agregar categoria modal -->
@if(count($productos) > 0)
<!-- Table -->
<table class="table">
   <thead class="thead-dark">
      <tr>
         <th scope="col">#</th>
         <th scope="col">SKU</th>
         <th scope="col">Nombre</th>
         <th scope="col">Precio</th>
         <th scope="col">Disponible</th>
         <th scope="col">Acciones</th>
      </tr>
      <?php $i = 0 ?>
      @foreach ($productos as $producto )
      <?php $i++ ?>
      <tr>
         <td> {{ $i}} </td>
         <td> {{ $producto->sku }} </td>
         <td> {{ $producto->nombre_producto }} </td>
         <td> {{ $producto->precio }} </td>
         <td> @if($producto->inStock) 
              <label class="text-success">Disponible</label>
              
              @else
             
              <label class="text-danger">Agotado</label>
            @endif
        
          </td>
         <td style="display: flex">
            
            <button type="button" title="Editar" data-toggle="modal" data-target="#editModalproducto" class="fas fa-w fa-edit"
               style="color:gray !important; background-color:transparent; border: 0px solid;"
               onclick="fun_edit('{{$producto->id}}')"></button>

               <button type="button" title="Eliminar" data-toggle="modal" data-target="#deleteModal"
               class="fas fa-w fa-trash"
               style="color:gray !important; background-color:transparent; border: 0px solid;"
               onclick="fun_delete('{{$producto->id}}')"></button>

               <button type="button" title="Agregar a bodega" data-toggle="modal" data-target="#addProductoBodega"
               class="fas fa-boxes"
               style="color:gray !important; background-color:transparent; border: 0px solid;"
               onclick="fun_add('{{$producto->id}}')"></button>
            
         </td>
      </tr>
      @endforeach
   </thead>
</table>
<!-- Fin Table -->



<!-- Editar Modal-->
@include('producto.partials.editModalproducto')
<!-- Fin Editar Modal-->

@else
<!--Mensaje cuando no hay motivos de sustitución registrados-->
<div class="alert alert-danger">
   <strong>¡Opps! Parece que no tienes ningún producto registrado.</strong>
</div>
<!--Fin del Mensaje -->
@endif

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body align-self-center">
                <form action="{{ route('producto.delete') }}" method="POST">
                   
                    
                    <div style="text-align: center">
                        <br>
                        <i class='fas fa-exclamation-circle' style='font-size:80px;color: gray;'></i>
                        <br>
                        <br>
                        <strong>
                            <h3>¿Estás seguro que deseas eliminar el producto?</h3>
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
      var view_url= '{{ route("producto.edit_view", ":id") }}';
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
   function fun_add(id)
    {
        console.log(id);
        $("#producto_id2").val(id); 
    }
   function fun_delete(id)
    {
        $("#delete_id").val(id); 
    }
</script>
@endsection