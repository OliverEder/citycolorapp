
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Inmuebles/ver inmueble</small></h1>
						
					</div>
				</div>
		  </div> 
		</div><!-- /.first container ends -->
		
    <div class="container-fluid principal"><!-- /.Administrador de cuentas de usuario container starts -->
		  <div class="row">
				<div class="col-md-12">	
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-cog"></i> Administrador de cuentas de clientes</h3>
							
						</div>
						<div class="panel-body">
							<div class="row"  id="icons">
								<div class="col-md-12">
									<ol class="breadcrumb">
										<li><a href="<? $segments = array('paneldecontrol/inicio'); echo site_url($segments)?>">Panel de control</a></li>
										<li><a href="<? $segments = array('inmuebles', 'panel_control_inmueble'); echo site_url($segments)?>">Inmuebles</a></li>
										<li class="active">Ver inmueble</li>
									</ol>
									
									<div class="row">
										  <div class="col-md-12"> <center><img src="<?=base_url()?>images/inmuebles/<?=$inmueble['IdInmueble'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/></center></div>
									</div>
									<table class="table table-hover">
										<tr>
											<td><strong>Atributo</strong></td>
											<td><strong>Valor</strong></td>
										</tr>
										<tr>
											<td><strong>Id</strong></td>
											<td><strong><? echo $inmueble['IdInmueble']?></strong></td>
										</tr>
										<tr>
											<td><strong>Cliente</strong></td>
											<td><strong><? echo $inmueble['NombreCliente']?></strong></td>
										</tr>
										<tr>
											<td><strong>Inmueble</strong></td>
											<td><strong><? echo $inmueble['NombreInmueble']?></strong></td>
										</tr>
										<tr>
											<td><strong>Direccion</strong></td>
											<td><strong><? echo $inmueble['DireccionInmueble']?></strong></td>
										</tr>
										
								 </table>
								 <h4><a href="<? $segments = array('areas/nuevo_area'); echo site_url($segments)?>"><i class="fa fa-plus"></i>Nuevo</a></h4>
									<table class="table table-hover">
										<tr>
											<td><strong>Id</strong></td>
											<td><strong>Area</strong></td>
											<td><strong>Inmueble</strong></td>
											<td><center><strong>Opciones</strong></center></td>
										</tr>
										<?if($areas){?>
											<?foreach($areas as $area){?>
											<tr>
												<td><?echo $area->IdArea?></td>
												<td><?echo $area->NombreArea?></td>
												<td><?echo $inmueble['NombreInmueble']?></td>
												<td>
													<center>
													<a href="<? $segments = array('areas/ver_area_panel',$area->IdArea); echo site_url($segments)?>"><i class="fa fa-eye"></i></a>
													<a href="<? $segments = array('areas', 'editar_area',$area->IdArea); echo site_url($segments)?>"><i class="fa fa-pencil-square-o"></i></a>
													<a href="<? $segments = array('areas', 'eliminar_area',$area->IdArea); echo site_url($segments)?>" class="eliminar_usuario" data-toggle="modal" data-target="#alerta"><i class="fa fa-times"></i></a>
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

