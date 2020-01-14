
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('areas/ver_area',$electrico['IdArea']); echo site_url($segments)?>">Area</a></li>
						<li class="active"> Electrico</li>
					</ol>
        	<div class="page-header">
						<h1> Electrico</h1>
					
					</div>
           <table class="table table-hover">
							<tr>
								<td><strong>Atributo</strong></td>
								<td><strong>Valor</strong></td>
							</tr>
							<tr>
								<td><strong>Id</strong></td>
								<td><strong><? echo $electrico['IdElectrico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Nombre</strong></td>
								<td><strong><? echo $electrico['NombreElectrico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Cantidad</strong></td>
								<td><strong><? echo $electrico['CantidadElectrico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Unidad</strong></td>
								<td><strong><? echo $electrico['UnidadElectrico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Periodicidad de mantenimiento</strong></td>
								<td><strong><? echo $electrico['PeriodicidadMantoElectrico']?> dias</strong></td>
							</tr>
							<tr>
								<td><strong>Ultimo mantenimiento</strong></td>
								<td><strong><? echo $electrico['FechaUltimoMantoElectrico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Proximo mantenimiento</strong></td>
								<td><strong><? echo date('Y-m-d', strtotime($electrico['FechaUltimoMantoElectrico']."+".$electrico['PeriodicidadMantoElectrico']."day"));?></strong></td>
							</tr>
							<tr>
								<td><strong>Descripcion</strong></td>
								<td><strong><? echo $electrico['DescripcionElectrico']?></strong></td>
							</tr>
					
					 </table>
								
        </div>
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
