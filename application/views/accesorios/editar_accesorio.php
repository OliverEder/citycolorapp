
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Hidraulico/editar accesorio</small></h1>
						
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
										<li><a href="<? $segments = array('accesorios/panel_control_accesorio'); echo site_url($segments)?>">Accesorios</a></li>
										<li class="active">Editar accesorio</li>
									</ol>
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
											<?
												$this->load->helper('date');
            
												$fechaultimomantoaccesorio  = explode('-',$accesorio['FechaUltimoMantoAccesorio']); 
												$day = $fechaultimomantoaccesorio[2];
												$month = $fechaultimomantoaccesorio[1];
											 	$year = $fechaultimomantoaccesorio[0];
												$datestring =$month."/".$day ."/".$year;
												$time = time();
												$accesorio['FechaUltimoMantoAccesorio']=$datestring;
											
											?>
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarAccesorio','name' => 'formEditarAccesorio'); echo form_open('accesorios/guardar_cambios_accesorio',$attributes); ?>
												<div class="form-group">
													<label for="recipient-name" class="control-label" id="MensajeNombre" >Nombre:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="NombreAccesorio" name="NombreAccesorio" placeholder="Nombre" value="<? echo $accesorio['NombreAccesorio']?>">
														    <input type="hidden" class="form-control input-lg" id="IdAccesorio" name="IdAccesorio" value="<? echo $accesorio['IdAccesorio']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeMarca">Marca:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="MarcaAccesorio" name="MarcaAccesorio" placeholder="Marca" value="<? echo $accesorio['MarcaAccesorio']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeEstado">Estado:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <input type="text" class="form-control input-lg" id="EstadoAccesorio" name="EstadoAccesorio" placeholder="Estado fisco/higienico" value="<? echo $accesorio['EstadoAccesorio']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeFechaUltimoManto">Ultimo Manto:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
														    <input type="date" class="form-control input-lg date-piker" id="FechaUltimoMantoAccesorio" name="FechaUltimoMantoAccesorio" placeholder="Fecha de mantenimiento" value="<? echo $accesorio['FechaUltimoMantoAccesorio']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-tint"></i></span>
														    <textarea class="form-control" id="DescripcionAccesorio" name="DescripcionAccesorio" placeholder="Descripccion" rows="3"><? echo $accesorio['DescripcionAccesorio']?></textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeArea">Area:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-camera"></i></span>
														    <select class="form-control" id="IdArea" name="IdArea">
																	<option value="<? echo $accesorio['IdArea']?>"><? echo $accesorio['NombreArea']?></option>
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

