
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Rangos/editar rango</small></h1>
						
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
										<li><a href="<? $segments = array('rangos', 'panel_control_rango'); echo site_url($segments)?>">Rangos</a></li>
										<li class="active">Editar rango</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
											
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarRango','name' => 'formEditarRango'); echo form_open('rangos/guardar_cambios_rango',$attributes); ?>
												
												
												<div class="form-group">
													<label for="recipient-name" class="control-label" id="MensajeRango" >Rango:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-users"></i></span>
														    <input type="text" class="form-control input-lg" id="NombreRango" name="NombreRango" placeholder="Nombre de rango" value="<? echo $rango['NombreRango']?>">
														    <input type="hidden" class="form-control input-lg" id="IdRango" name="IdRango" value="<? echo $rango['IdRango']?>">
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

