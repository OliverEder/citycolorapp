
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Hidraulico/Accesorios</small></h1>
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
										<li><a href="<? $segments = array('hidraulico/panel_control_hidraulico'); echo site_url($segments)?>">Hidraulico</a></li>
										<li class="active">Accesorios</li>
									</ol>
									<h4><i class="fa fa-tint"></i> Accesorios <? echo count($accesorios);?></h4>
									<h4><a href="<? $segments = array('accesorios/nuevo_accesorio'); echo site_url($segments)?>"><i class="fa fa-plus"></i>Nuevo</a></h4>
									
									<table class="table table-hover">
										<tr>
											<td><strong>Id</strong></td>
										  <td><strong>Nombre</strong></td>
											<td><strong>Marca</strong></td>
											<td><strong>Estado</strong></td>
											<td><strong>Ultimo manto</strong></td>
											<td><center><strong>Opciones</strong></center></td>
										</tr>
										<?if($accesorios){?>
											<?foreach($accesorios as $accesorio){?>
											<?
												$this->load->helper('date');
            
												$fechaultimomantoaccesorio  = explode('-',$accesorio->FechaUltimoMantoAccesorio); 
												$day = $fechaultimomantoaccesorio[2];
												$month = $fechaultimomantoaccesorio[1];
											 	$year = $fechaultimomantoaccesorio[0];
												$datestring =$month."/".$day ."/".$year;
												$time = time();
												$FechaUltimoMantoAccesorio=$datestring;
											
											?>
											<tr>
												<td><?echo $accesorio->IdAccesorio?></td>
												<td><?echo $accesorio->NombreAccesorio?></td>
												<td><?echo $accesorio->MarcaAccesorio?></td>
												<td><?echo $accesorio->EstadoAccesorio?></td>
												<td><?echo $FechaUltimoMantoAccesorio?></td>
												<td>
													<center>
													<a href="<? $segments = array('accesorios/ver_accesorio',$accesorio->IdAccesorio); echo site_url($segments)?>"><i class="fa fa-eye"></i></a>
													<a href="<? $segments = array('accesorios', 'editar_accesorio',$accesorio->IdAccesorio); echo site_url($segments)?>"><i class="fa fa-pencil-square-o"></i></a>
													<a href="<? $segments = array('accesorios', 'eliminar_accesorio',$accesorio->IdAccesorio); echo site_url($segments)?>" class="eliminar_usuario" data-toggle="modal" data-target="#alerta"><i class="fa fa-times"></i></a>
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

