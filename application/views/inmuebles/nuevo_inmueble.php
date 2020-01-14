
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Inmuebles/nuevo inmueble</small></h1>
						
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
										<li><a href="<? $segments = array('inmuebles', 'panel_control_inmueble'); echo site_url($segments)?>">Inmuebles</a></li>
										<li class="active">Nuevo inmueble</li>
									</ol>
									<div class="row" >
										  <div class="col-md-12" id="imagen"> <center><img id="myimg" src="" width="500px" alt="" class="img-responsive img-thumbnail"/></center></div>
												
									</div>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
										
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formNuevoInmueble','name' => 'formNuevoInmueble'); echo form_open_multipart('inmuebles/registro_inmueble',$attributes); ?>
												
												
												<label for="message-text" class="control-label" id="MensajeImagen">Imagen:<div > </div></label>
												<input type="file" id="userfile" name="userfile" size="20" />
												<br /><br />
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeInmueble">Inmueble:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-building"></i></span>
														    <input type="text" class="form-control input-lg" id="NombreInmueble" name="NombreInmueble" placeholder="Nombre de inmueble">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDireccion">Direccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-building"></i></span>
														    <input type="text" class="form-control input-lg" id="DireccionInmueble" name="DireccionInmueble" placeholder="Direccion de inmueble">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCliente">Cliente:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-child"></i></span>
														    <select class="form-control" id="IdCliente" name="IdCliente">
																	<?foreach($clientes as $cliente){ ?>
																	<option value="<?echo $cliente->IdCliente?>"><?echo $cliente->NombreCliente?></option>
																	<?}?>
																	
																</select>
													</div>
												</div>
											<div id="MesajeFormulario"></div>	
																			
											<button type="submit" class="btn btn-warning">Guardar</button>
									
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

