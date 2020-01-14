
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Generadoras/editar generadora</small></h1>
						
					</div>
				</div>
		  </div> 
		</div><!-- /.first container ends -->
		
    <div class="container-fluid principal"><!-- /.Administrador de cuentas de usuario container starts -->
		  <div class="row">
				<div class="col-md-12">	
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-cog"></i> Administrador de cuentas de clientes</h3>
							
						</div>
						<div class="panel-body">
							<div class="row"  id="icons">
								<div class="col-md-12">
									<ol class="breadcrumb">
										<li><a href="<? $segments = array('paneldecontrol/inicio'); echo site_url($segments)?>">Panel de control</a></li>
										<li><a href="<? $segments = array('generadoras', 'panel_control_generadora'); echo site_url($segments)?>">Generadoras</a></li>
										<li class="active">Editar generadora</li>
									</ol>
									
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										<?
												//Fechas
												$this->load->helper('date');
            
												$FechaGeneradora  = explode('-',$generadora['FechaGeneradora']); 
												$day = $FechaGeneradora[2];
												$month = $FechaGeneradora[1];
											 	$year = $FechaGeneradora[0];
												$datestring =$month."/".$day ."/".$year;
												$time = time();
												$generadora['FechaGeneradora']=$datestring;
											
											?>
											
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarGeneradora','name' => 'formEditarGeneradora'); echo form_open_multipart('generadoras/guardar_cambios_generadora',$attributes); ?>
												
																																				
											<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeConcepto">Concepto:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-ticket"></i></span>
														    <input type="text" class="form-control input-lg" id="ConceptoGeneradora" name="ConceptoGeneradora" placeholder="Concepto" value="<? echo $generadora['ConceptoGeneradora']?>">
														     <input type="hidden" class="form-control input-lg" id="IdGeneradora" name="IdGeneradora" value="<? echo $generadora['IdGeneradora']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeFecha">Fecha:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar"></i></span>
														    <input type="date" class="form-control input-lg date-piker" id="FechaGeneradora" name="FechaGeneradora" placeholder="Fecha de mantenimiento" value="<? echo $generadora['FechaGeneradora']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeUnidad">Unidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-ticket"></i></span>
														    <input type="text" class="form-control input-lg" id="UnidadGeneradora" name="UnidadGeneradora" placeholder="Unidad" value="<? echo $generadora['UnidadGeneradora']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCantidad">Cantidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-ticket"></i></span>
														    <input type="text" class="form-control input-lg" id="CantidadGeneradora" name="CantidadGeneradora" placeholder="Cantidad" value="<? echo $generadora['CantidadGeneradora']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePrecioUnitario">Precio unitario:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-ticket"></i></span>
														    <input type="text" class="form-control input-lg" id="PrecioUnitarioGeneradora" name="PrecioUnitarioGeneradora" placeholder="Precio unitario" value="<? echo $generadora['PrecioUnitarioGeneradora']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePecioTotal">Pecio total:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-ticket"></i></span>
														    <input type="text" class="form-control input-lg " id="PecioTotalGeneradora" name="PecioTotalGeneradora" placeholder="Pecio total" value="<? echo $generadora['PecioTotalGeneradora']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripccion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-ticket"></i></span>
														    <textarea class="form-control" id="DescripcionGeneradora" name="DescripcionGeneradora" placeholder="Descripccion" rows="3" ><? echo $generadora['DescripcionGeneradora']?></textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeInmueble">Inmueble:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-building"></i></span>
														    <select class="form-control" id="IdInmueble" name="IdInmueble">
														    	<option value="<? echo $generadora['IdInmueble']?>"><? echo $generadora['NombreInmueble']?></option>
																	<?foreach($inmuebles as $inmueble){ ?>
																	<option value="<?echo $inmueble->IdInmueble?>"><?echo $inmueble->NombreInmueble?></option>
																	<?}?>
																	
																</select>
													</div>
												</div>
											<div id="MesajeFormulario"></div>	
																			
											<button type="submit" class="btn btn-warning">Guardar</button>
										<br /><br />
										</form>
										</div>
									<div class="row" >
										  <div class="col-md-12" id="imagen"> <center><img id="myimg" src="<?=base_url()?>images/generadoras/antes/<?=$generadora['IdGeneradora'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail before"/></center></div>
												
									</div>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarGeneradoraImagenAntes','name' => 'formEditarGeneradoraImagenAntes'); echo form_open_multipart('generadoras/guardar_cambios_imagen_antes',$attributes);?>
											<label for="message-text" class="control-label" id="MensajeImagenAntes">Imagen antes:<div > </div></label>
											<input type="file" class="antes" id="userfile" name="userfile" size="20" />
											<input type="hidden" class="form-control input-lg" id="IdGeneradora" name="IdGeneradora" value="<? echo $generadora['IdGeneradora']?>">
											<br />
											<div id="MesajeFormularioImagenAntes"></div>	
											<button type="submit" class="btn btn-warning">Guardar imagen</button>
											<br><br /><br />
											</form>
										</div>
									</div>	
									
									
									<div class="row" >
										  <div class="col-md-12" id="imagen"> <center><img id="dmyimg" src="<?=base_url()?>images/generadoras/despues/<?=$generadora['IdGeneradora'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail after"/></center></div>
												
									</div>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarGeneradoraImagenDespues','name' => 'formEditarGeneradoraImagenDespues'); echo form_open_multipart('generadoras/guardar_cambios_imagen_despues',$attributes);?>
											<label for="message-text" class="control-label" id="MensajeImagenDespues">Imagen despues:<div > </div></label>
											<input type="file" class="despues" id="userfile" name="userfile" size="20" />
											<input type="hidden" class="form-control input-lg" id="IdGeneradora" name="IdGeneradora" value="<? echo $generadora['IdGeneradora']?>">
											<br />
											<div id="MesajeFormularioImagenDespues"></div>	
											<button type="submit" class="btn btn-warning">Guardar imagen</button>
											<br><br /><br />
											</form>
										</div>
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

