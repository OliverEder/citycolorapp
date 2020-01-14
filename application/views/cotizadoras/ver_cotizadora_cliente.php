
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('cotizadoras/ver_cotizadoras_inmueble',$cotizadora['IdInmueble']); echo site_url($segments)?>">Cotizadoras</a></li>
						<li class="active"> Cotizadora</li>
					</ol>
        	<div class="page-header">
						<h1> Cotizadora</h1>
					
					</div>
					
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
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
