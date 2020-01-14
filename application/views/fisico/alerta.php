<!-- /.Formulario log in -->

  
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Precaucion</h4>
      </div>
      <div class="modal-body">
        <?php echo validation_errors(); ?>
        <?php $attributes = array('id' => 'alerta','name' => 'alerta'); echo form_open('fisico/eliminar',$attributes); ?>
          <div class="form-group">
            <label for="recipient-name" class="control-label" id="MensajeUsuario" >¿Deseas eliminar este registro? <div > </div></label>
            <div class="input-group">
                  
                  <input type="hidden" class="form-control input-lg" id="IdFisico" name="IdFisico" value="<? echo $fisico?>">
            </div>
          </div>
          
				<div id="MesajeFormulario"></div>	
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-warning">Continuar</button>
      </form>
      </div>
    </div>
  </div>


