
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Areas/editar area</small></h1>
						
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
										<li><a href="<? $segments = array('areas', 'panel_control_area'); echo site_url($segments)?>">Areas</a></li>
										<li class="active">Editar area</li>
									</ol>
									<div class="row" >
										  <div class="col-md-12" id="imagen"> <center><img id="myimg" src="<?=base_url()?>images/areas/<?=$area['IdArea'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/></center></div>
												
									</div>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarAreaImagen','name' => 'formEditarAreaImagen'); echo form_open_multipart('areas/guardar_cambios_area_imagen',$attributes);?>
											<label for="message-text" class="control-label" id="MensajeImagen">Imagen:<div > </div></label>
											<input type="file" id="userfile" name="userfile" size="20" />
											<input type="hidden" class="form-control input-lg" id="IdArea" name="IdArea" value="<? echo $area['IdArea']?>">
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
											<?php $attributes = array('id' => 'formEditarArea','name' => 'formEditarArea'); echo form_open_multipart('areas/guardar_cambios_area',$attributes); ?>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeArea">Area:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-camera"></i></span>
														    <input type="text" class="form-control input-lg" id="NombreArea" name="NombreArea" placeholder="Nombre de inmueble" value="<? echo $area['NombreArea']?>">
														    <input type="hidden" class="form-control input-lg" id="IdArea" name="IdArea" value="<? echo $area['IdArea']?>">
													</div>
												</div>
																								
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeInmueble">Inmueble:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-building"></i></span>
														    <select class="form-control" id="IdInmueble" name="IdInmueble">
														    	<option value="<? echo $area['IdInmueble']?>"><? echo $area['NombreInmueble']?></option>
																	<?foreach($inmuebles as $inmueble){ ?>
																	<option value="<?echo $inmueble->IdInmueble?>"><?echo $inmueble->NombreInmueble?></option>
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

