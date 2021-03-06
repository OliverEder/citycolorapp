
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Fisico/editar fisico</small></h1>
						
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
										<li><a href="<? $segments = array('fisico/panel_control_fisico'); echo site_url($segments)?>">Fisico</a></li>
										<li class="active">Editar fisico</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										<?
												$this->load->helper('date');
            
												$fechaultimomantofisico  = explode('-',$fisico['FechaUltimoMantoFisico']); 
												$day = $fechaultimomantofisico[2];
												$month = $fechaultimomantofisico[1];
											 	$year = $fechaultimomantofisico[0];
												$datestring =$month."/".$day ."/".$year;
												$time = time();
												$fisico['FechaUltimoMantoFisico']=$datestring;
											
											?>
											
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarFisico','name' => 'formEditarFisico'); echo form_open('fisico/guardar_cambios_fisico',$attributes); ?>
												<div class="form-group">
													<label for="recipient-name" class="control-label" id="MensajeNombre" >Nombre:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></span>
														    <input type="text" class="form-control input-lg" id="NombreFisico" name="NombreFisico" placeholder="Nombre" value="<? echo $fisico['NombreFisico']?>">
														    <input type="hidden" class="form-control input-lg" id="IdFisico" name="IdFisico" value="<? echo $fisico['IdFisico']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeUnidad">Unidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></span>
														    <input type="text" class="form-control input-lg" id="UnidadFisico" name="UnidadFisico" placeholder="Unidad" value="<? echo $fisico['UnidadFisico']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCantidad">Cantidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-wrench"></i></span>
														    <input type="number" class="form-control input-lg" id="CantidadFisico" name="CantidadFisico" placeholder="Cantidad" value="<? echo $fisico['CantidadFisico']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePeriodicidadMando">Periodicidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-wrench"></i></span>
														    <input type="number" class="form-control input-lg" id="PeriodicidadMantoFisico" name="PeriodicidadMantoFisico" placeholder="Periodicidad de mantenimiento en dias" value="<? echo $fisico['PeriodicidadMantoFisico']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeFechaUltimoManto">Ultimo mantenimiento:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
														    <input type="date" class="form-control input-lg date-piker" id="FechaUltimoMantoFisico" name="FechaUltimoMantoFisico" placeholder="Fecha de mantenimiento" value="<? echo $fisico['FechaUltimoMantoFisico']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-wrench"></i></span>
														    <textarea class="form-control" id="DescripcionFisico" name="DescripcionFisico" placeholder="Descripccion" rows="3"><? echo $fisico['DescripcionFisico']?></textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeArea">Area:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-camera"></i></span>
														    <select class="form-control" id="IdArea" name="IdArea">
																	<option value="<? echo $fisico['IdArea']?>"><? echo $fisico['NombreArea']?></option>
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

