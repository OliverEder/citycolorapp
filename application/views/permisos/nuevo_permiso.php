
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Permisos/nuevo permiso</small></h1>
						
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
										<li><a href="<? $segments = array('permisos', 'panel_control_permiso'); echo site_url($segments)?>">Permisos</a></li>
										<li class="active">Nuevo permiso</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formNuevoPermiso','name' => 'formNuevoPermiso'); echo form_open('usuarios/login',$attributes); ?>
												<div class="form-group">
													<label for="message-text" class="control-label" id="IdRangoM">Rangos:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-users"></i></span>
														    <select class="form-control" id="IdRango" name="IdRango">
																	<?foreach($rangos as $rango){ ?>
																	<option value="<?echo $rango->IdRango?>"><?echo $rango->NombreRango?></option>
																	<?}?>
																	
																</select>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="IdModuloM">Modulos:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-sitemap"></i></span>
														    <select class="form-control" id="IdModulo" name="IdModulo">
																	<?foreach($modulos as $modulo){ ?>
																	<option value="<?echo $modulo->IdModulo?>"><?echo $modulo->NombreModulo?></option>
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

