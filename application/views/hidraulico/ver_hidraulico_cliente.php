
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('areas/ver_area',$hidraulico['IdArea']); echo site_url($segments)?>">Area</a></li>
						<li class="active"> Hidraulico</li>
					</ol>
        	<div class="page-header">
						<h1> Hidraulico</h1>
					
					</div>
           <table class="table table-hover">
							<tr>
								<td><strong>Atributo</strong></td>
								<td><strong>Valor</strong></td>
							</tr>
							<tr>
								<td><strong>Id</strong></td>
								<td><strong><? echo $hidraulico['IdHidraulico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Nombre</strong></td>
								<td><strong><? echo $hidraulico['NombreHidraulico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Cantidad</strong></td>
								<td><strong><? echo $hidraulico['CantidadHidraulico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Unidad</strong></td>
								<td><strong><? echo $hidraulico['UnidadHidraulico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Periodicidad de mantenimiento</strong></td>
								<td><strong><? echo $hidraulico['PeriodicidadMantoHidraulico']?> dias</strong></td>
							</tr>
							<tr>
								<td><strong>Ultimo mantenimiento</strong></td>
								<td><strong><? echo $hidraulico['FechaUltimoMantoHidraulico']?></strong></td>
							</tr>
							<tr>
								<td><strong>Proximo mantenimiento</strong></td>
								<td><strong><? echo date('Y-m-d', strtotime($hidraulico['FechaUltimoMantoHidraulico']."+".$hidraulico['PeriodicidadMantoHidraulico']."day"));?></strong></td>
							</tr>
							<tr>
								<td><strong>Descripcion</strong></td>
								<td><strong><? echo $hidraulico['DescripcionHidraulico']?></strong></td>
							</tr>
					
					 </table>
								
        </div>
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
