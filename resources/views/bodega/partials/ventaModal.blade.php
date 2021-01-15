<!-- Agregar Modal -->
<div class="modal fade" id="ventaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color:#F2F2F2 !important;">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="fas fw fa-plus-circle"></i>
               Realizar venta
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="{{ route('producto.store') }}" method="POST" name="formMotivo">
               
            
             <div class="form-group required">
                <label for="" class="control-label">Cantidad: </label>
                <input  type="number" id="cantidadIng" name="cantidadIng" class="form-control" 
                  required autofocus min="0" onchange="total()" >
             </div>
             <div class="form-group required">
                <label for="" class="control-label">Total: </label>
                <input  type="text" id="total" name="total" class="form-control" 
                  required autofocus disabled>
             </div>
              <div class="form-group required">
                <label for="" class="control-label">Concepto: </label>
                <input  type="text" id="concepto" name="concepto" class="form-control" 
                  required autofocus>
             </div>
           
                
             
                      
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