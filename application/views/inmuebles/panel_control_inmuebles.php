
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Inmuebles</small></h1>
					</div>
				</div>
		  </div> 
		</div><!-- /.first container ends -->
		
    <div class="container-fluid principal"><!-- /.Administrador de cuentas de usuario container starts -->
		  <div class="row">
				<div class="col-md-12">	
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-cog"></i> Administrador de cuentas de inmuebles</h3>
						</div>
						<div class="panel-body">
							<div class="row"  id="icons">
								<div class="col-md-12">
									<ol class="breadcrumb">
										<li><a href="<? $segments = array('paneldecontrol/inicio'); echo site_url($segments)?>">Panel de control</a></li>
										<li class="active">Inmuebles</li>
									</ol>
									
									<h4><a href="<? $segments = array('inmuebles/nuevo_inmueble'); echo site_url($segments)?>"><i class="fa fa-plus"></i>Nuevo</a></h4>
									<table class="table table-hover">
										<tr>
											<td><strong>Id</strong></td>
											<td><strong>Inmueble</strong></td>
											<td><strong>Direccion</strong></td>
											<td><center><strong>Opciones</strong></center></td>
										</tr>
										
										<?if($inmuebles){?>
											<?foreach($inmuebles as $inmueble){?>
											<tr>
												<td><?echo $inmueble->IdInmueble?></td>
												<td><?echo $inmueble->NombreInmueble?></td>
												<td><?echo $inmueble->DireccionInmueble?></td>
												<td>
													<center>
													<a href="<? $segments = array('inmuebles/ver_inmueble_panel',$inmueble->IdInmueble); echo site_url($segments)?>"><i class="fa fa-eye"></i></a>
													<a href="<? $segments = array('inmuebles', 'editar_inmueble',$inmueble->IdInmueble); echo site_url($segments)?>"><i class="fa fa-pencil-square-o"></i></a>
													<a href="<? $segments = array('inmuebles', 'eliminar_inmueble',$inmueble->IdInmueble); echo site_url($segments)?>" class="eliminar_usuario" data-toggle="modal" data-target="#alerta"><i class="fa fa-times"></i></a>
													</center>	
												</td>
											</tr>
											<?}?>
										<?}else{?>
											<center><h4>Sin registros</h4></center>
										<?}?>

								 </table>
								</div>
								
							</div>
						</div>
					</div>
					
				</div> 
			</div>
    </div><!-- /.Administrador de cuentas de usuario container ends -->
    
    

      <br><br><br>

