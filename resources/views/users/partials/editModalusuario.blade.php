<!-- Agregar Modal -->
<div class="modal fade" id="editModalusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color:#F2F2F2 !important;">
            <h5 class="modal-title" id="exampleModalLongTitle">
               <i class="fas fw fa-plus-circle"></i>
               Editar usuario
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="{{ route('usuario.store') }}" method="POST" name="formMotivo">
               
               <div class="form-group required">
                  <label for="" class="control-label">Nombre: </label>
                  <input  type="text" id="nameEdit" name="name"
                     class="form-control"   placeholder="Ingrese el nombre"  required autofocus>
               </div>
               <div class="form-group required">
                <label for="" class="control-label">Email: </label>
                <input  type="text" id="emailEdit" name="email"
                   class="form-control"   placeholder="email@ejemplo.com"  required autofocus>
             </div>
             <div class="form-group required">
                <label for="" class="control-label">Contraseña: </label>
                <input  type="text" id="passEdit" name="password"
                   class="form-control"   placeholder="Ingrese el nombre"  required autofocus>
             </div>
                <input type="hidden" name="estado" value="Disponible">
             
                      
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