
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Hidraulico/ver hidraulico</small></h1>
						
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
										<li><a href="<? $segments = array('hidraulico', 'panel_control_hidraulico'); echo site_url($segments)?>">Hidraulico</a></li>
										<li class="active">Ver Hidraulico</li>
									</ol>
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
								
							</div>
						</div>
					</div>
					
				</div> 
			</div>
    </div><!-- /.Administrador de cuentas de usuario container ends -->
    
    

      <br><br><br>

