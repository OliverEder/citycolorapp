
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Cliente/editar cliente</small></h1>
						
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
										<li class="active">Editar cliente</li>
									</ol>
									
									<div class="row" >
										  <div class="col-md-12" id="imagen"> <center><img id="myimg" src="<?=base_url()?>images/clientes/<?=$cliente['IdCliente'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/></center></div>
												
									</div>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarClienteImagen','name' => 'formEditarClienteImagen'); echo form_open_multipart('clientes/guardar_cambios_cliente_imagen',$attributes);?>
											<label for="message-text" class="control-label" id="MensajeImagen">Imagen:<div > </div></label>
											<input type="file" id="userfile" name="userfile" size="20" />
											<input type="hidden" class="form-control input-lg" id="IdCliente" name="IdCliente" value="<? echo $cliente['IdCliente']?>">
											<br />
											<div id="MesajeFormularioImagen"></div>	
											<button type="submit" class="btn btn-warning">Guardar imagen</button>
											<br><br /><br />
											</form>
										</div>
									</div>	
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
											
									
											<?php echo validation_errors(); ?>
											
											<?php $attributes = array('id' => 'formEditarCliente','name' => 'formEditarCliente'); echo form_open('clientes/guardar_cambios_cliente',$attributes); ?>
												
												
												
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCliente">Cliente:<div > </div></label>
													
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-child"></i></span>
														    <input type="text" class="form-control input-lg" id="NombreCliente" name="NombreCliente" placeholder="Nombre de cliente" value="<? echo $cliente['NombreCliente']?>">
														    <input type="hidden" class="form-control input-lg" id="IdCliente" name="IdCliente" value="<? echo $cliente['IdCliente']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeRfc">RFC:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-child"></i></span>
														    <input type="text" class="form-control input-lg" id="RfcCliente" name="RfcCliente" placeholder="RFC de cliente" value="<? echo $cliente['RfcCliente']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDireccion">Direccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-child"></i></span>
														    <input type="text" class="form-control input-lg" id="DireccionCliente" name="DireccionCliente" placeholder="Direccion de cliente" value="<? echo $cliente['DireccionCliente']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeUsuario">Usuario:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
														    <select class="form-control" id="IdUsuario" name="IdUsuario">
																	<option value="<? echo $cliente['IdUsuario']?>"><? echo $cliente['NombreUsuario']?></option>
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

