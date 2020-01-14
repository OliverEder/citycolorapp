
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('areas/ver_area',$llave['IdArea']); echo site_url($segments)?>">Area</a></li>
						<li class="active">Llave</li>
					</ol>
        	<div class="page-header">
						<h1> Llave</h1>
					
					</div>
           <table class="table table-hover">
							<tr>
								<td><strong>Atributo</strong></td>
								<td><strong>Valor</strong></td>
							</tr>
							<tr>
								<td><strong>Id</strong></td>
								<td><strong><? echo $llave['IdLlave']?></strong></td>
							</tr>
							<tr>
								<td><strong>Nombre</strong></td>
								<td><strong><? echo $llave['NombreLlave']?></strong></td>
							</tr>
							<tr>
								<td><strong>Tipo</strong></td>
								<td><strong><? echo $llave['TipoLlave']?></strong></td>
							</tr>
							<tr>
								<td><strong>Estado</strong></td>
								<td><strong><? echo $llave['EstadoLlave']?></strong></td>
							</tr>
							<tr>
								<td><strong>Ultimo manto</strong></td>
								<td><strong><? echo $llave['FechaUltimoMantoLlave']?></strong></td>
							</tr>
							<tr>
								<td><strong>Descripcion</strong></td>
								<td><strong><? echo $llave['DescripcionLlave']?></strong></td>
							</tr>
						
					 </table>
								
        </div>
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
