
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('areas/ver_area',$foco['IdArea']); echo site_url($segments)?>">Area</a></li>
						<li class="active">Foco</li>
					</ol>
        	<div class="page-header">
						<h1> Foco</h1>
					
					</div>
           <table class="table table-hover">
						<tr>
							<td><strong>Atributo</strong></td>
							<td><strong>Valor</strong></td>
						</tr>
						<tr>
							<td><strong>Id</strong></td>
							<td><strong><? echo $foco['IdFoco']?></strong></td>
						</tr>
						<tr>
							<td><strong>Area</strong></td>
							<td><strong><? echo $foco['NombreArea']?></strong></td>
						</tr>
						<tr>
							<td><strong>Marca</strong></td>
							<td><strong><? echo $foco['MarcaFoco']?></strong></td>
						</tr>
						<tr>
							<td><strong>Tipo</strong></td>
							<td><strong><? echo $foco['TipoFoco']?></strong></td>
						</tr>
						<tr>
							<td><strong>Temperatura</strong></td>
							<td><strong><? echo $foco['TemperaturaColorFoco']?></strong></td>
						</tr>
						<tr>
							<td><strong>Watss</strong></td>
							<td><strong><? echo $foco['WattsFoco']?></strong></td>
						</tr>
					
				 </table>
								
        </div>
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
