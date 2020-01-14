
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Clientes/nuevo cliente</small></h1>
						
					</div>
				</div>
		  </div> 
		</div><!-- /.first container ends -->
		
    <div class="container-fluid principal"><!-- /.Administrador de cuentas de usuario container starts -->
		  <div class="row">
				<div class="col-md-12">	
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-cog"></i> Administrador de cuentas de usuarios</h3>
							
						</div>
						<div class="panel-body">
							<div class="row"  id="icons">
								<div class="col-md-12">
									<ol class="breadcrumb">
										<li><a href="<? $segments = array('paneldecontrol/inicio'); echo site_url($segments)?>">Panel de control</a></li>
										<li><a href="<? $segments = array('clientes', 'panel_control_cliente'); echo site_url($segments)?>">Clientes</a></li>
										<li class="active">Nuevo cliente</li>
									</ol>
									<div class="row" >
										  <div class="col-md-12" id="imagen"> <center><img id="myimg" src="" width="500px" alt="" class="img-responsive img-thumbnail"/></center></div>
												
									</div>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
											<?php echo validation_errors(); ?>
											<?$attributes = array('id' => 'formNuevoCliente','name' => 'formNuevoCliente'); echo form_open_multipart('clientes/registro_cliente',$attributes);?>
												<label for="message-text" class="control-label" id="MensajeImagen">Imagen:<div > </div></label>
												<input type="file" id="userfile" name="userfile" size="20" />
												<br /><br />
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCliente">Cliente:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-child"></i></span>
														    <input type="text" class="form-control input-lg" id="NombreCliente" name="NombreCliente" placeholder="Nombre de cliente">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeRfc">RFC:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-child"></i></span>
														    <input type="text" class="form-control input-lg" id="RfcCliente" name="RfcCliente" placeholder="RFC de cliente">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDireccion">Direccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-child"></i></span>
														    <input type="text" class="form-control input-lg" id="DireccionCliente" name="DireccionCliente" placeholder="Direccion de cliente">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeUsuario">Usuario:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
														    <select class="form-control" id="IdUsuario" name="IdUsuario">
																	<?foreach($usuarios as $usuario){ ?>
																	<option value="<?echo $usuario->IdUsuario?>"><?echo $usuario->NombreUsuario?></option>
																	<?}?>
																	
																</select>
													</div>
												</div>
												
											<div id="MesajeFormulario"></div>	
																			
											<button type="submit" class="btn btn-warning">Guardar</button>
										</form>
										</div>
									</div>	
								</div>
								
							</div>
						</div>
					</div>
					
				</div> 
			</div>
    </div><!-- /.Administrador de cuentas de usuario container ends -->
    
    

      <br><br><br>

