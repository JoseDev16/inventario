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
<

<!-- Venta Modal -->
@include('bodega.partials.ventaModal')
<!-- Fin Agregar Modal -->
<





@if(count($productos) > 0)
<!-- Table -->
<table class="table">
   <thead class="thead-dark">
      <tr>
         <th scope="col">#</th>
         <th scope="col">SKU</th>
         <th scope="col">Nombre</th>
         <th scope="col">Precio</th>
         
         <th scope="col">Bodega</th>
         <th scope="col">Area</th>
         <th scope="col">Cantidad</th>
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
         <td> {{ $producto->nombre_bodega }} </td>
         <td> {{ $producto->area }} </td>
         <td> {{ $producto->cantidad }} </td>
        
         <td style="display: flex">
            
        

               <button type="button" title="Realizar venta" data-toggle="modal" data-target="#ventaModal"
               class="fas fa-comment-dollar"
               style="color:gray !important; background-color:transparent; border: 0px solid;"
               onclick="fun_add($producto->id)"></button>
            
         </td>
      </tr>
      @endforeach
   </thead>
</table>
<!-- Fin Table -->



<!-- Editar Modal-->

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
                <form action="{{ route('producto.delete') }}" method="DELETE">
                   
                    
                    <div style="text-align: center">
                        <br>
                        <i class='fas fa-exclamation-circle' style='font-size:80px;color: gray;'></i>
                        <br>
                        <br>
                        <strong>
                            <h3>¿Estás seguro que deseas eliminar el producto?</h3>
                        </strong>
                        <strong>Recuerde que al eliminar este producto se eliminaran sus existencias de todas las bodegas</strong>
                        
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
   //Función para calcular total
   function total()
   {
      var cantIngresada = parseFloat(document.getElementById("cantidad").value);
      var precio = parseFloat(document.getElementById("precio").value);
      console.log(precio);
       document.getElementById(total).value = precio * cantIngresada
   }
 
</script>
@endsection