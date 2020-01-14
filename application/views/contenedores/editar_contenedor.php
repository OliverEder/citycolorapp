
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Hidraulico/editar contenedor</small></h1>
						
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
										<li><a href="<? $segments = array('contenedores/panel_control_contenedor'); echo site_url($segments)?>">Contenedores</a></li>
										<li class="active">Editar contenedor</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<?
												$this->load->helper('date');
            
												$fechaultimomantoaccesorio  = explode('-',$contenedor['FechaUltimoAsceoContenedor']); 
												$day = $fechaultimomantoaccesorio[2];
												$month = $fechaultimomantoaccesorio[1];
											 	$year = $fechaultimomantoaccesorio[0];
												$datestring =$month."/".$day ."/".$year;
												$time = time();
												$contenedor['FechaUltimoAsceoContenedor']=$datestring;
											
											?>
											
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarContenedor','name' => 'formEditarContenedor'); echo form_open('contenedores/guardar_cambios_contenedor',$attributes); ?>
												<div class="form-group">
													<label for="recipient-name" class="control-label" id="MensajeNombre" >Nombre:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="NombreContenedor" name="NombreContenedor" placeholder="Nombre" value="<? echo $contenedor['NombreContenedor']?>">
														    <input type="hidden" class="form-control input-lg" id="IdContenedor" name="IdContenedor" value="<? echo $contenedor['IdContenedor']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeTipo">Tipo:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="TipoContenedor" name="TipoContenedor" placeholder="Tipo" value="<? echo $contenedor['TipoContenedor']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCapacidad">Capacidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="CapacidadContenedor" name="CapacidadContenedor" placeholder="Capacidad en litros" value="<? echo $contenedor['CapacidadContenedor']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeEstado">Estado:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="EstadoContenedor" name="EstadoContenedor" placeholder="Estado fisco/higienico" value="<? echo $contenedor['EstadoContenedor']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeFlotador">Flotador:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="FlotadorContenedor" name="FlotadorContenedor" placeholder="Flotador" value="<? echo $contenedor['FlotadorContenedor']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePeriodicidadAsceo">Periodicidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="number" class="form-control input-lg" id="PeriodicidadAsceoContenedor" name="PeriodicidadAsceoContenedor" placeholder="Periodicidad de asceo en dias" value="<? echo $contenedor['PeriodicidadAsceoContenedor']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeFechaUltimoAsceo">Ultimo asceo:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
														    <input type="date" class="form-control input-lg date-piker" id="FechaUltimoAsceoContenedor" name="FechaUltimoAsceoContenedor" placeholder="Fecha de asceo" value="<? echo $contenedor['FechaUltimoAsceoContenedor']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <textarea class="form-control" id="DescripcionContenedor" name="DescripcionContenedor" placeholder="Descripccion" rows="3"><? echo $contenedor['DescripcionContenedor']?></textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeArea">Area:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-camera"></i></span>
														    <select class="form-control" id="IdArea" name="IdArea">
																	<option value="<? echo $contenedor['IdArea']?>"><? echo $contenedor['NombreArea']?></option>
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

