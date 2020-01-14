
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('areas/ver_area',$contenedor['IdArea']); echo site_url($segments)?>">Area</a></li>
						<li class="active">Contenedor</li>
					</ol>
        	<div class="page-header">
						<h1> Contenedor</h1>
					
					</div>
           <table class="table table-hover">
							<tr>
								<td><strong>Atributo</strong></td>
								<td><strong>Valor</strong></td>
							</tr>
							<tr>
								<td><strong>Id</strong></td>
								<td><strong><? echo $contenedor['IdContenedor']?></strong></td>
							</tr>
							<tr>
								<td><strong>Nombre</strong></td>
								<td><strong><? echo $contenedor['NombreContenedor']?></strong></td>
							</tr>
							<tr>
								<td><strong>Tipo</strong></td>
								<td><strong><? echo $contenedor['TipoContenedor']?></strong></td>
							</tr>
							<tr>
								<td><strong>Capacidad</strong></td>
								<td><strong><? echo $contenedor['CapacidadContenedor']?> litros</strong></td>
							</tr>
							<tr>
								<td><strong>Estado</strong></td>
								<td><strong><? echo $contenedor['EstadoContenedor']?></strong></td>
							</tr>
							<tr>
								<td><strong>Flotador</strong></td>
								<td><strong><? echo $contenedor['FlotadorContenedor']?></strong></td>
							</tr>
							<tr>
								<td><strong>Periodicidad de asceo</strong></td>
								<td><strong><? echo $contenedor['PeriodicidadAsceoContenedor']?> dias</strong></td>
							</tr>
							<tr>
								<td><strong>Ultimo asceo</strong></td>
								<td><strong><? echo $contenedor['FechaUltimoAsceoContenedor']?></strong></td>
							</tr>
							<tr>
								<td><strong>Proximo asceo</strong></td>
								<td><strong><? echo date('Y-m-d', strtotime($contenedor['FechaUltimoAsceoContenedor']."+".$contenedor['PeriodicidadAsceoContenedor']."day"));?></strong></td>
							</tr>
							<tr>
								<td><strong>Descripcion</strong></td>
								<td><strong><? echo $contenedor['DescripcionContenedor']?></strong></td>
							</tr>
						
					 </table>
								
        </div>
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
