
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('areas/ver_area',$accesorio['IdArea']); echo site_url($segments)?>">Area</a></li>
						<li class="active">Accesorio</li>
					</ol>
        	<div class="page-header">
						<h1> Accesorio</h1>
					
					</div>
           <table class="table table-hover">
										<tr>
											<td><strong>Atributo</strong></td>
											<td><strong>Valor</strong></td>
										</tr>
										<tr>
											<td><strong>Id</strong></td>
											<td><strong><? echo $accesorio['IdAccesorio']?></strong></td>
										</tr>
										<tr>
											<td><strong>Nombre</strong></td>
											<td><strong><? echo $accesorio['NombreAccesorio']?></strong></td>
										</tr>
										<tr>
											<td><strong>Marca</strong></td>
											<td><strong><? echo $accesorio['MarcaAccesorio']?></strong></td>
										</tr>
										<tr>
											<td><strong>Estado</strong></td>
											<td><strong><? echo $accesorio['EstadoAccesorio']?></strong></td>
										</tr>
										<tr>
											<td><strong>Ultimo manto</strong></td>
											<td><strong><? echo $accesorio['FechaUltimoMantoAccesorio']?></strong></td>
										</tr>
										<tr>
											<td><strong>Descripcion</strong></td>
											<td><strong><? echo $accesorio['DescripcionAccesorio']?></strong></td>
										</tr>
									
								 </table>
								
        </div>
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
