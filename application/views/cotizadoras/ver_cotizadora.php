
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Cotizadoras/ver cotizadora</small></h1>
						
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
										<li><a href="<? $segments = array('cotizadoras', 'panel_control_cotizadora'); echo site_url($segments)?>">Cotizadoras</a></li>
										<li class="active">Ver cotizadora</li>
									</ol>
									
									<div class="row">
										  <div class="col-md-12"> 
										  	<center>
										  		<h4>Fotos</h4>
										  		<img src="<?=base_url()?>images/cotizadoras/primera/<?=$cotizadora['IdCotizadora'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/>
										  	</center>
										 	</div>
									</div>
									<div class="row">
										  <div class="col-md-12"> 
										  	<center>
										  		<img src="<?=base_url()?>images/cotizadoras/segunda/<?=$cotizadora['IdCotizadora'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/>
										  	</center>
										  </div>
									</div>
									
									<table class="table table-hover">
										<tr>
											<td><strong>Atributo</strong></td>
											<td><strong>Valor</strong></td>
										</tr>
										<tr>
											<td><strong>Id</strong></td>
											<td><strong><? echo $cotizadora['IdCotizadora']?></strong></td>
										</tr>
										<tr>
											<td><strong>Partida</strong></td>
											<td><strong><? echo $cotizadora['PartidaCotizadora']?></strong></td>
										</tr>
										<tr>
											<td><strong>Concepto</strong></td>
											<td><strong><? echo $cotizadora['ConceptoCotizadora']?></strong></td>
										</tr>
										<tr>
											<td><strong>Unidad</strong></td>
											<td><strong><? echo $cotizadora['UnidadCotizadora']?></strong></td>
										</tr>
										<tr>
											<td><strong>Cantidad</strong></td>
											<td><strong><? echo $cotizadora['CantidadCotizadora']?></strong></td>
										</tr>
										<tr>
											<td><strong>Precio unitario</strong></td>
											<td><strong><? echo $cotizadora['PrecioUnitarioCotizadora']?></strong></td>
										</tr>
										<tr>
											<td><strong>Pecio total</strong></td>
											<td><strong><? echo $cotizadora['PecioTotalCotizadora']?></strong></td>
										</tr>
										<tr>
											<td><strong>Inmueble</strong></td>
											<td><strong><? echo $cotizadora['NombreInmueble']?></strong></td>
										</tr>
										<tr>
											<td><strong>Descripcion</strong></td>
											<td><strong><? echo $cotizadora['DescripcionCotizadora']?></strong></td>
										</tr>
										
																				
								 </table>
								 
								</div>
								
							</div>
						</div>
					</div>
					
				</div> 
			</div>
    </div><!-- /.Administrador de cuentas de usuario container ends -->
    
    

      <br><br><br>

