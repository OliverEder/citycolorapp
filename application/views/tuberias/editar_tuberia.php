
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Hidraulico/editar tuberia</small></h1>
						
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
										<li><a href="<? $segments = array('hidraulico', 'panel_control_hidraulico'); echo site_url($segments)?>">Hidraulico</a></li>
										<li><a href="<? $segments = array('tuberias/panel_control_tuberia'); echo site_url($segments)?>">Tuberias</a></li>
										<li class="active">Editar tuberia</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
											<?
												$this->load->helper('date');
            
												$fechaultimomantotuberia  = explode('-',$tuberia['FechaUltimoMantoTuberia']); 
												$day = $fechaultimomantotuberia[2];
												$month = $fechaultimomantotuberia[1];
											 	$year = $fechaultimomantotuberia[0];
												$datestring =$month."/".$day ."/".$year;
												$time = time();
												$tuberia['FechaUltimoMantoTuberia']=$datestring;
											
											?>
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarTuberia','name' => 'formEditarTuberia'); echo form_open('tuberias/guardar_cambios_tuberia',$attributes); ?>
												<div class="form-group">
													<label for="recipient-name" class="control-label" id="MensajeMaterial" >Material:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="MaterialTuberia" name="MaterialTuberia" placeholder="Material" value="<? echo $tuberia['MaterialTuberia']?>">
														    <input type="hidden" class="form-control input-lg" id="IdTuberia" name="IdTuberia" value="<? echo $tuberia['IdTuberia']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeLongitud">Longitud:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="LongitudTuberia" name="LongitudTuberia" placeholder="Longitud" value="<? echo $tuberia['LongitudTuberia']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeEstado">Estado:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="EstadoTuberia" name="EstadoTuberia" placeholder="Estado fisco/higienico" value="<? echo $tuberia['EstadoTuberia']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeFechaUltimoManto">Ultimo Manto:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
														    <input type="date" class="form-control input-lg date-piker" id="FechaUltimoMantoTuberia" name="FechaUltimoMantoTuberia" placeholder="Fecha de mantenimiento" value="<? echo $tuberia['FechaUltimoMantoTuberia']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <textarea class="form-control" id="DescripcionTuberia" name="DescripcionTuberia" placeholder="Descripccion" rows="3"><? echo $tuberia['DescripcionTuberia']?></textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeArea">Area:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-camera"></i></span>
														    <select class="form-control" id="IdArea" name="IdArea">
																	<option value="<? echo $tuberia['IdArea']?>"><? echo $tuberia['NombreArea']?></option>
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

