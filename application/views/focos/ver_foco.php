
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Electrico/ver foco</small></h1>
						
					</div>
				</div>
		  </div> 
		</div><!-- /.first container ends -->
		
    <div class="container-fluid principal"><!-- /.Administrador de cuentas de usuario container starts -->
		  <div class="row">
				<div class="col-md-12">	
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-cog"></i> Administrador de cuentas de usuarios</h3>
							
						</div>
						<div class="panel-body">
							<div class="row"  id="icons">
								<div class="col-md-12">
									<ol class="breadcrumb">
										<li><a href="<? $segments = array('paneldecontrol/inicio'); echo site_url($segments)?>">Panel de control</a></li>
										<li><a href="<? $segments = array('electrico', 'panel_control_electrico'); echo site_url($segments)?>">Electrico</a></li>
										<li class="active">Ver Foco</li>
									</ol>
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
								
							</div>
						</div>
					</div>
					
				</div> 
			</div>
    </div><!-- /.Administrador de cuentas de usuario container ends -->
    
    

      <br><br><br>

