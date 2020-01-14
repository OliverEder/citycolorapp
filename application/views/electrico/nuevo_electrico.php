
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Electrico/nuevo electrico</small></h1>
						
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
										<li><a href="<? $segments = array('electrico/panel_control_electrico'); echo site_url($segments)?>">Electrico</a></li>
										<li class="active">Nuevo electrico</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
											
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formNuevoElectrico','name' => 'formNuevoElectrico'); echo form_open('electrico/registro_electrico',$attributes); ?>
												<div class="form-group">
													<label for="recipient-name" class="control-label" id="MensajeNombre" >Nombre:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></span>
														    <input type="text" class="form-control input-lg" id="NombreElectrico" name="NombreElectrico" placeholder="Nombre">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeUnidad">Unidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></span>
														    <input type="text" class="form-control input-lg" id="UnidadElectrico" name="UnidadElectrico" placeholder="Unidad">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCantidad">Cantidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-wrench"></i></span>
														    <input type="text" class="form-control input-lg" id="CantidadElectrico" name="CantidadElectrico" placeholder="Cantidad">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePeriodicidadManto">Periodicidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-wrench"></i></span>
														    <input type="number" class="form-control input-lg" id="PeriodicidadMantoElectrico" name="PeriodicidadMantoElectrico" placeholder="Periodicidad de mantenimiento en dias">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeFechaUltimoManto">Ultimo mantenimiento:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
														    <input type="date" class="form-control input-lg date-piker" id="FechaUltimoMantoElectrico" name="FechaUltimoMantoElectrico" placeholder="Fecha de mantenimiento">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-wrench"></i></span>
														    <textarea class="form-control" id="DescripcionElectrico" name="DescripcionElectrico" placeholder="Descripccion" rows="3"></textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeArea">Area:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-camera"></i></span>
														    <select class="form-control" id="IdArea" name="IdArea">
																	<?foreach($areas as $area){ ?>
																	<option value="<?echo $area->IdArea?>"><?echo $area->NombreArea?></option>
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

