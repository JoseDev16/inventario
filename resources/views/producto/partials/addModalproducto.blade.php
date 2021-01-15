<!-- Agregar Modal -->
<div class="modal fade" id="addModalproducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color:#F2F2F2 !important;">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="fas fw fa-plus-circle"></i>
               Agregar usuario
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="{{ route('producto.store') }}" method="POST" name="formMotivo">
               
               <div class="form-group required">
                  <label for="" class="control-label">SKU: </label>
                  <input  type="text" id="sku" name="sku"
                     class="form-control"   placeholder="Ingrese el nombre"  required autofocus>
               </div>
               <div class="form-group required">
                <label for="" class="control-label">Nombre producto: </label>
                <input  type="text" id="nombre" name="nombre_producto"
                   class="form-control"   placeholder="email@ejemplo.com"  required autofocus>
             </div>
             <div class="form-group required">
                <label for="" class="control-label">Precio: </label>
                <input  type="number" id="precio" name="precio" class="form-control" 
                  required autofocus min="0.0" step="0.1">
             </div>
             <div class="form-group required">
                <label for="" class="control-label">Estado: </label>
                <select class="form-control" name="inStock" id="estado">
                    <option value="1">Disponible</option>
                    <option value="0">Agotado</option>
                </select>
             </div>
                <input type="hidden" name="producto_id" id="producto_id">
             
                      
               <div class="modal-footer d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary" id="agregarNuevo">
                     <i class='fas fa-check-circle'></i>
                     Guardar
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
<!-- Fin Agregar Modal -->