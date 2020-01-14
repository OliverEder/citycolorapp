
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Hidraulico/editar llave</small></h1>
						
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
										<li><a href="<? $segments = array('llaves/panel_control_llave'); echo site_url($segments)?>">Llaves</a></li>
										<li class="active">Editar llave</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<?
												$this->load->helper('date');
            
												$fechaultimomantoaccesorio  = explode('-',$llave['FechaUltimoMantoLlave']); 
												$day = $fechaultimomantoaccesorio[2];
												$month = $fechaultimomantoaccesorio[1];
											 	$year = $fechaultimomantoaccesorio[0];
												$datestring =$month."/".$day ."/".$year;
												$time = time();
												$llave['FechaUltimoMantoLlave']=$datestring;
											
											?>
											
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarLlave','name' => 'formEditarLlave'); echo form_open('llaves/guardar_cambios_llave',$attributes); ?>
												<div class="form-group">
													<label for="recipient-name" class="control-label" id="MensajeNombre" >Nombre:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="NombreLlave" name="NombreLlave" placeholder="Nombre" value="<? echo $llave['NombreLlave']?>">
														    <input type="hidden" class="form-control input-lg" id="IdLlave" name="IdLlave" value="<? echo $llave['IdLlave']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeTipo">Tipo:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="TipoLlave" name="TipoLlave" placeholder="Tipo" value="<? echo $llave['TipoLlave']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeEstado">Estado:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="EstadoLlave" name="EstadoLlave" placeholder="Estado fisco/higienico" value="<? echo $llave['EstadoLlave']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeFechaUltimoManto">Ultimo asceo:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
														    <input type="date" class="form-control input-lg date-piker" id="FechaUltimoMantoLlave" name="FechaUltimoMantoLlave" placeholder="Fecha de asceo" value="<? echo $llave['FechaUltimoMantoLlave']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <textarea class="form-control" id="DescripcionLlave" name="DescripcionLlave" placeholder="Descripccion" rows="3"><? echo $llave['DescripcionLlave']?></textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeArea">Area:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-camera"></i></span>
														    <select class="form-control" id="IdArea" name="IdArea">
																	<option value="<? echo $llave['IdArea']?>"><? echo $llave['NombreArea']?></option>
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

