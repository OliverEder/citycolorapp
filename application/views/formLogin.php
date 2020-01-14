<!-- /.Formulario log in -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Inicio de sesion</h4>
      </div>
      <div class="modal-body">
        <?php echo validation_errors(); ?>
        <?php $attributes = array('id' => 'formularioLogIn','name' => 'formularioLogIn'); echo form_open('usuarios/login',$attributes); ?>
          <div class="form-group">
            <label for="recipient-name" class="control-label" id="MensajeUsuario" >Usuario:<div > </div></label>
            <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                  <input type="text" class="form-control input-lg" id="NombreUsuario" name="NombreUsuario" placeholder="Nombre de usuario">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label" id="PassUsuario">Password:<div > </div></label>
            <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                  <input type="password" class="form-control input-lg" id="PasswordUsuario" name="PasswordUsuario" placeholder="Password">
            </div>
          </div>
				<div id="MesajeFormulario"></div>	
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-warning">Ingresar</button>
      </form>
      </div>
    </div>
  </div>
</div>
      </div>
