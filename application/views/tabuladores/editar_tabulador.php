
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Tabuladores/editar tabulador</small></h1>
						
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
										<li><a href="<? $segments = array('tabuladores', 'panel_control_tabulador'); echo site_url($segments)?>">Tabuladores</a></li>
										<li class="active">Editar tabulador</li>
									</ol>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
										
										
									
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarTabulador','name' => 'formEditarTabulador'); echo form_open_multipart('tabuladores/guardar_cambios_tabulador',$attributes); ?>																											
											
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeServicios">Servicios:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="ServiciosTabulador" name="ServiciosTabulador" placeholder="Servicios" value="<? echo $tabulador['ServiciosTabulador']?>" >
														    <input type="hidden" class="form-control input-lg" id="IdTabulador" name="IdTabulador" value="<? echo $tabulador['IdTabulador']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeClave">Clave:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="ClaveTabulador" name="ClaveTabulador" placeholder="Clave" value="<? echo $tabulador['ClaveTabulador']?>">
													</div>
												</div>
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeUnidad">Unidad:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="UnidadTabulador" name="UnidadTabulador" placeholder="Unidad" value="<? echo $tabulador['UnidadTabulador']?>">
													</div>
												</div>
												
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajePrecioUnitario">Precio unitario:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <input type="text" class="form-control input-lg" id="PrecioUnitarioTabulador" name="PrecioUnitarioTabulador" placeholder="Precio Unitario" value="<? echo $tabulador['PrecioUnitarioTabulador']?>">
													</div>
												</div>
												
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeDescripcion">Descripcion:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calculator"></i></span>
														    <textarea class="form-control" id="DescripcionTabulador" name="DescripcionTabulador" placeholder="Descripccion" rows="3"><? echo $tabulador['DescripcionTabulador']?> </textarea>
													</div>
												</div>
												
												<div class="form-group">
													<label for="message-text" class="control-label" id="MensajeInmueble">Inmueble:<div > </div></label>
													<div class="input-group">
														    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-building"></i></span>
														    <select class="form-control" id="IdInmueble" name="IdInmueble">
																	<option value="<? echo $tabulador['IdInmueble']?>"><? echo $tabulador['NombreInmueble']?></option>
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
										  <div class="col-md-12" id="imagen"> <center><img id="myimg" src="<?=base_url()?>images/tabuladores/<?=$tabulador['IdTabulador'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail before"/></center></div>
												
									</div>
									
									<div class="row">
										<div class="col-md-6 col-md-offset-3">
											<?php echo validation_errors(); ?>
											<?php $attributes = array('id' => 'formEditarTabuladorImagenAntes','name' => 'formEditarTabuladorImagenAntes'); echo form_open_multipart('tabuladores/guardar_cambios_imagen_antes',$attributes);?>
											<label for="message-text" class="control-label" id="MensajeImagenAntes">Imagen antes:<div > </div></label>
											<input type="file" class="antes" id="userfile" name="userfile" size="20" />
											<input type="hidden" class="form-control input-lg" id="IdTabulador" name="IdTabulador" value="<? echo $tabulador['IdTabulador']?>">
											<br />
											<div id="MesajeFormularioImagenAntes"></div>	
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
    </div><!-- /.Administrador de cuentas de usuario container ends -->
    
    

      <br><br><br>

