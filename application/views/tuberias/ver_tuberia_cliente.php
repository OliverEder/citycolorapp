
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('areas/ver_area',$tuberia['IdArea']); echo site_url($segments)?>">Area</a></li>
						<li class="active">Tuberia</li>
					</ol>
        	<div class="page-header">
						<h1> Tuberia</h1>
					
					</div>
           <table class="table table-hover">
							<tr>
								<td><strong>Atributo</strong></td>
								<td><strong>Valor</strong></td>
							</tr>
							<tr>
								<td><strong>Id</strong></td>
								<td><strong><? echo $tuberia['IdTuberia']?></strong></td>
							</tr>
							<tr>
								<td><strong>Material</strong></td>
								<td><strong><? echo $tuberia['MaterialTuberia']?></strong></td>
							</tr>
							<tr>
								<td><strong>Longitud</strong></td>
								<td><strong><? echo $tuberia['LongitudTuberia']?></strong></td>
							</tr>
							<tr>
								<td><strong>Estado</strong></td>
								<td><strong><? echo $tuberia['EstadoTuberia']?></strong></td>
							</tr>
							<tr>
								<td><strong>Ultimo manto</strong></td>
								<td><strong><? echo $tuberia['FechaUltimoMantoTuberia']?></strong></td>
							</tr>
							<tr>
								<td><strong>Descripcion</strong></td>
								<td><strong><? echo $tuberia['DescripcionTuberia']?></strong></td>
							</tr>
						
					 </table>
								
        </div>
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
