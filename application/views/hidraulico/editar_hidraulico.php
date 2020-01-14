
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Hidraulico/editar hidraulico</small></h1>
						
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
										<li><a href="<? $segments = array('hidraulico/panel_control_hidraulico'); echo site_url($segments)?>">Hidraulico</a></li>
										<li class="active">Editar hidraulico</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										<?
												$this->load->helper('date');
            
												$fechaultimomantohidraulico  = explode('-',$hidraulico['FechaUltimoMantoHidraulico']); 
												$day = $fechaultimomantohidraulico[2];
												$month = $fechaultimomantohidraulico[1];
											 	$year = $fechaultimomantohidraulico[0];
												$datestring =$month."/".$day ."/".$year;
												$time = time();
												$hidraulico['FechaUltimoMantoHidraulico']=$datestring;
											
											?>
											
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarHidraulico','name' => 'formEditarHidraulico'); echo form_open('hidraulico/guardar_cambios_hidraulico',$attributes); ?>
												<div class="form-group">
													<label for="recipient-name" class="control-label" id="MensajeNombre" >Nombre:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></span>
														    <input type="text" class="form-control input-lg" id="NombreHidraulico" name="NombreHidraulico" placeholder="Nombre" value="<? echo $hidraulico['NombreHidraulico']?>">
														    <input type="hidden" class="form-control input-lg" id="IdHidraulico" name="IdHidraulico" value="<? echo $hidraulico['IdHidraulico']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeUnidad">Unidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></span>
														    <input type="text" class="form-control input-lg" id="UnidadHidraulico" name="UnidadHidraulico" placeholder="Unidad" value="<? echo $hidraulico['UnidadHidraulico']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCantidad">Cantidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-wrench"></i></span>
														    <input type="number" class="form-control input-lg" id="CantidadHidraulico" name="CantidadHidraulico" placeholder="Cantidad" value="<? echo $hidraulico['CantidadHidraulico']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePeriodicidadMando">Periodicidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-wrench"></i></span>
														    <input type="number" class="form-control input-lg" id="PeriodicidadMantoHidraulico" name="PeriodicidadMantoHidraulico" placeholder="Periodicidad de mantenimiento en dias" value="<? echo $hidraulico['PeriodicidadMantoHidraulico']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeFechaUltimoManto">Ultimo mantenimiento:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
														    <input type="date" class="form-control input-lg date-piker" id="FechaUltimoMantoHidraulico" name="FechaUltimoMantoHidraulico" placeholder="Fecha de mantenimiento" value="<? echo $hidraulico['FechaUltimoMantoHidraulico']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-wrench"></i></span>
														    <textarea class="form-control" id="DescripcionHidraulico" name="DescripcionHidraulico" placeholder="Descripccion" rows="3"><? echo $hidraulico['DescripcionHidraulico']?></textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeArea">Area:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-camera"></i></span>
														    <select class="form-control" id="IdArea" name="IdArea">
																	<option value="<? echo $hidraulico['IdArea']?>"><? echo $hidraulico['NombreArea']?></option>
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

