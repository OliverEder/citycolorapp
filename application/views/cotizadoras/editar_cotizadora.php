
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Cotizadoras/editar cotizadora</small></h1>
						
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
										<li><a href="<? $segments = array('cotizadoras', 'panel_control_cotizadora'); echo site_url($segments)?>">Cotizadoras</a></li>
										<li class="active">Editar cotizadora</li>
									</ol>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
										
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarCotizadora','name' => 'formEditarCotizadora'); echo form_open_multipart('cotizadoras/guardar_cambios_cotizadora',$attributes); ?>																											
											
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePartida">Partida:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="PartidaCotizadora" name="PartidaCotizadora" placeholder="Partida" value="<? echo $cotizadora['PartidaCotizadora']?>" >
														    <input type="hidden" class="form-control input-lg" id="IdCotizadora" name="IdCotizadora" value="<? echo $cotizadora['IdCotizadora']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeConcepto">Concepto:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="ConceptoCotizadora" name="ConceptoCotizadora" placeholder="Concepto" value="<? echo $cotizadora['ConceptoCotizadora']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeUnidad">Unidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="UnidadCotizadora" name="UnidadCotizadora" placeholder="Unidad" value="<? echo $cotizadora['UnidadCotizadora']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCantidad">Cantidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="CantidadCotizadora" name="CantidadCotizadora" placeholder="Cantidad" value="<? echo $cotizadora['CantidadCotizadora']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePrecioUnitario">Precio unitario:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="PrecioUnitarioCotizadora" name="PrecioUnitarioCotizadora" placeholder="Precio Unitario" value="<? echo $cotizadora['PrecioUnitarioCotizadora']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePecioTotal">Precio total:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="PecioTotalCotizadora" name="PecioTotalCotizadora" placeholder="Pecio total" value="<? echo $cotizadora['PecioTotalCotizadora']?>">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripcion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <textarea class="form-control" id="DescripcionCotizadora" name="DescripcionCotizadora" placeholder="Descripccion" rows="3"><? echo $cotizadora['DescripcionCotizadora']?> </textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeInmueble">Inmueble:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-building"></i></span>
														    <select class="form-control" id="IdInmueble" name="IdInmueble">
																	<option value="<? echo $cotizadora['IdInmueble']?>"><? echo $cotizadora['NombreInmueble']?></option>
																	<?foreach($inmuebles as $inmueble){ ?>
																	<option value="<?echo $inmueble->IdInmueble?>"><?echo $inmueble->NombreInmueble?></option>
																	<?}?>
																	
																</select>
													</div>
												</div>
											<div id="MesajeFormulario"></div>	
																			
											<button type="submit" class="btn btn-warning">Guardar</button>
										</form>
										</div>
										<div class="row" >
										  <div class="col-md-12" id="imagen"> <center><img id="myimg" src="<?=base_url()?>images/cotizadoras/primera/<?=$cotizadora['IdCotizadora'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail before"/></center></div>
												
									</div>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarCotizadoraImagenAntes','name' => 'formEditarCotizadoraImagenAntes'); echo form_open_multipart('cotizadoras/guardar_cambios_imagen_antes',$attributes);?>
											<label for="message-text" class="control-label" id="MensajeImagenAntes">Imagen antes:<div > </div></label>
											<input type="file" class="antes" id="userfile" name="userfile" size="20" />
											<input type="hidden" class="form-control input-lg" id="IdCotizadora" name="IdCotizadora" value="<? echo $cotizadora['IdCotizadora']?>">
											<br />
											<div id="MesajeFormularioImagenAntes"></div>	
											<button type="submit" class="btn btn-warning">Guardar imagen</button>
											<br><br /><br />
											</form>
										</div>
									</div>	
									<div class="row" >
										  <div class="col-md-12" id="imagen"> <center><img id="dmyimg" src="<?=base_url()?>images/cotizadoras/segunda/<?=$cotizadora['IdCotizadora'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail after"/></center></div>
												
									</div>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarCotizadoraImagenDespues','name' => 'formEditarCotizadoraImagenDespues'); echo form_open_multipart('cotizadoras/guardar_cambios_imagen_despues',$attributes);?>
											<label for="message-text" class="control-label" id="MensajeImagenDespues">Imagen despues:<div > </div></label>
											<input type="file" class="despues" id="userfile" name="userfile" size="20" />
											<input type="hidden" class="form-control input-lg" id="IdCotizadora" name="IdCotizadora" value="<? echo $cotizadora['IdCotizadora']?>">
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

