
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Cotizadoras/nueva cotizadora</small></h1>
						
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
										<li class="active">Nueva cotizadora</li>
									</ol>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
										
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formNuevoCotizadora','name' => 'formNuevoCotizadora'); echo form_open_multipart('cotizadoras/registro_cotizadora',$attributes); ?>																											
											
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePartida">Partida:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="PartidaCotizadora" name="PartidaCotizadora" placeholder="Partida">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeConcepto">Concepto:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="ConceptoCotizadora" name="ConceptoCotizadora" placeholder="Concepto">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeUnidad">Unidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="UnidadCotizadora" name="UnidadCotizadora" placeholder="Unidad">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeCantidad">Cantidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="CantidadCotizadora" name="CantidadCotizadora" placeholder="Cantidad">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePrecioUnitario">Precio unitario:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="PrecioUnitarioCotizadora" name="PrecioUnitarioCotizadora" placeholder="Precio Unitario">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePecioTotal">Precio total:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="PecioTotalCotizadora" name="PecioTotalCotizadora" placeholder="Pecio total">
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripcion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <textarea class="form-control" id="DescripcionCotizadora" name="DescripcionCotizadora" placeholder="Descripccion" rows="3"></textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeInmueble">Inmueble:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-building"></i></span>
														    <select class="form-control" id="IdInmueble" name="IdInmueble">
																	<?foreach($inmuebles as $inmueble){ ?>
																	<option value="<?echo $inmueble->IdInmueble?>"><?echo $inmueble->NombreInmueble?></option>
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

