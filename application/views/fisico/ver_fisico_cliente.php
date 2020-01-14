
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('areas/ver_area',$fisico['IdArea']); echo site_url($segments)?>">Area</a></li>
						<li class="active"> Fisico</li>
					</ol>
        	<div class="page-header">
						<h1> Fisico</h1>
					
					</div>
           <table class="table table-hover">
							<tr>
								<td><strong>Atributo</strong></td>
								<td><strong>Valor</strong></td>
							</tr>
							<tr>
								<td><strong>Id</strong></td>
								<td><strong><? echo $fisico['IdFisico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Nombre</strong></td>
								<td><strong><? echo $fisico['NombreFisico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Cantidad</strong></td>
								<td><strong><? echo $fisico['CantidadFisico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Unidad</strong></td>
								<td><strong><? echo $fisico['UnidadFisico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Periodicidad de mantenimiento</strong></td>
								<td><strong><? echo $fisico['PeriodicidadMantoFisico']?> dias</strong></td>
							</tr>
							<tr>
								<td><strong>Ultimo mantenimiento</strong></td>
								<td><strong><? echo $fisico['FechaUltimoMantoFisico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Proximo mantenimiento</strong></td>
								<td><strong><? echo date('Y-m-d', strtotime($fisico['FechaUltimoMantoFisico']."+".$fisico['PeriodicidadMantoFisico']."day"));?></strong></td>
							</tr>
							<tr>
								<td><strong>Descripcion</strong></td>
								<td><strong><? echo $fisico['DescripcionFisico']?></strong></td>
							</tr>
					
					 </table>
								
        </div>
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
