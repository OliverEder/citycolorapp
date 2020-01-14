
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('tabuladores/ver_tabuladores_inmueble',$tabulador['IdInmueble']); echo site_url($segments)?>">Tabuladores</a></li>
						<li class="active"> Tabulador</li>
					</ol>
        	<div class="page-header">
						<h1> Tabulador</h1>
					
					</div>
					
					<div class="row">
										  <div class="col-md-12"> 
										  	<center>
										  		<h4>Fotos</h4>
										  		<img src="<?=base_url()?>images/tabuladores/<?=$tabulador['IdTabulador'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/>
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
								<td><strong><? echo $tabulador['IdTabulador']?></strong></td>
							</tr>
							<tr>
								<td><strong>Servicios</strong></td>
								<td><strong><? echo $tabulador['ServiciosTabulador']?></strong></td>
							</tr>
							<tr>
								<td><strong>Clave</strong></td>
								<td><strong><? echo $tabulador['ClaveTabulador']?></strong></td>
							</tr>
							<tr>
								<td><strong>Unidad</strong></td>
								<td><strong><? echo $tabulador['UnidadTabulador']?></strong></td>
							</tr>
							
							<tr>
								<td><strong>Precio unitario</strong></td>
								<td><strong><? echo $tabulador['PrecioUnitarioTabulador']?></strong></td>
							</tr>
							
							<tr>
								<td><strong>Inmueble</strong></td>
								<td><strong><? echo $tabulador['NombreInmueble']?></strong></td>
							</tr>
							<tr>
								<td><strong>Descripcion</strong></td>
								<td><strong><? echo $tabulador['DescripcionTabulador']?></strong></td>
							</tr>
							
																	
					 </table>
								 
        </div>
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
