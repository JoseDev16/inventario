<!-- Agregar Modal -->
<div class="modal fade" id="addProductoBodega" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color:#F2F2F2 !important;">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="fas fw fa-plus-circle"></i>
               Agregar producto a bodega.
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="{{ route('producto.bodega') }}" method="POST" name="formMotivo">
               
           
             <div class="form-group required">
                <label for="" class="control-label">Cantidad: </label>
                <input  type="number" id="cantidad" name="cantidad" class="form-control" 
                  required autofocus min="1" step="1">
             </div>
             <div class="form-group required">
                <label for="" class="control-label">Bodega: </label>
                <select class="form-control" name="bodega_id" id="bodega_id">
                    @foreach ($bodegas as $bodega )
                        <option value={{ $bodega->id }}>{{ $bodega->nombre_bodega }}</option>
                    @endforeach
                    
                    
                </select>

             <div class="form-group required">
                <label for="" class="control-label">Area: </label>
                <input  type="text" id="area" name="area" class="form-control" 
                  required autofocus>
             </div>
             </div>
             <input type="hidden" name="producto_id2" id="producto_id2">                       
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