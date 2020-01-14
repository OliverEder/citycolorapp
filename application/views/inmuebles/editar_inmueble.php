
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Inmuebles/editar inmueble</small></h1>
						
					</div>
				</div>
		  </div> 
		</div><!-- /.first container ends -->
		
    <div class="container-fluid principal"><!-- /.Administrador de cuentas de usuario container starts -->
		  <div class="row">
				<div class="col-md-12">	
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-cog"></i> Administrador de cuentas de clientes</h3>
							
						</div>
						<div class="panel-body">
							<div class="row"  id="icons">
								<div class="col-md-12">
									<ol class="breadcrumb">
										<li><a href="<? $segments = array('paneldecontrol/inicio'); echo site_url($segments)?>">Panel de control</a></li>
										<li><a href="<? $segments = array('inmuebles', 'panel_control_inmueble'); echo site_url($segments)?>">Inmuebles</a></li>
										<li class="active">Editar inmueble</li>
									</ol>
									<div class="row" >
										  <div class="col-md-12" id="imagen"> <center><img id="myimg" src="<?=base_url()?>images/inmuebles/<?=$inmueble['IdInmueble'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/></center></div>
												
									</div>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarInmuebleImagen','name' => 'formEditarInmuebleImagen'); echo form_open_multipart('inmuebles/guardar_cambios_inmueble_imagen',$attributes);?>
											<label for="message-text" class="control-label" id="MensajeImagen">Imagen:<div > </div></label>
											<input type="file" id="userfile" name="userfile" size="20" />
											<input type="hidden" class="form-control input-lg" id="IdInmueble" name="IdInmueble" value="<? echo $inmueble['IdInmueble']?>">
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
											<?php $attributes = array('id' => 'formEditarInmueble','name' => 'formEditarInmueble'); echo form_open_multipart('inmuebles/guardar_cambios_inmueble',$attributes); ?>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeInmueble">Inmueble:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-building"></i></span>
														    <input type="text" class="form-control input-lg" id="NombreInmueble" name="NombreInmueble" placeholder="Nombre de inmueble" value="<? echo $inmueble['NombreInmueble']?>">
														    <input type="hidden" class="form-control input-lg" id="IdInmueble" name="IdInmueble" value="<? echo $inmueble['IdInmueble']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDireccion">Direccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-building"></i></span>
														    <input type="text" class="form-control input-lg" id="DireccionInmueble" name="DireccionInmueble" placeholder="Direccion de inmueble" value="<? echo $inmueble['DireccionInmueble']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCliente">Cliente:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-child"></i></span>
														    <select class="form-control" id="IdCliente" name="IdCliente">
														    	<option value="<? echo $inmueble['IdCliente']?>"><? echo $inmueble['NombreCliente']?></option>
																	<?foreach($clientes as $cliente){ ?>
																	<option value="<?echo $cliente->IdCliente?>"><?echo $cliente->NombreCliente?></option>
																	<?}?>
																	
																</select>
													</div>
												</div>
											<div id="MesajeFormulario"></div>	
																			
											<button type="submit" class="btn btn-warning">Guardar</button>
										<br /><br />
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

