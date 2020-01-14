
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Electrico/ver foco</small></h1>
						
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
										<li><a href="<? $segments = array('electrico', 'panel_control_electrico'); echo site_url($segments)?>">Electrico</a></li>
										<li class="active">Nuevo foco</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
											
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formNuevoFoco','name' => 'formNuevoFoco'); echo form_open('electrico/registro_foco',$attributes); ?>
												<div class="form-group">
													<label for="recipient-name" class="control-label" id="MensajeMarca" >Marca:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lightbulb-o"></i></span>
														    <input type="text" class="form-control input-lg" id="MarcaFoco" name="MarcaFoco" placeholder="Marca de el foco">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeTipo">Tipo:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lightbulb-o"></i></span>
														    <input type="text" class="form-control input-lg" id="TipoFoco" name="TipoFoco" placeholder="Tipo">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeForma">Forma:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lightbulb-o"></i></span>
														    <input type="text" class="form-control input-lg" id="FormaFoco" name="FormaFoco" placeholder="Forma">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeTemepratura">Temperatura:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lightbulb-o"></i></span>
														    <input type="text" class="form-control input-lg" id="TemperaturaColorFoco" name="TemperaturaColorFoco" placeholder="Temepratura">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeWatss">Watss:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lightbulb-o"></i></span>
														    <input type="number" class="form-control input-lg" id="WattsFoco" name="WattsFoco" placeholder="Watss">
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

