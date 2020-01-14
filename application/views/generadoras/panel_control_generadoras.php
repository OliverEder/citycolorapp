
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Generadoras</small></h1>
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
										<li class="active">Generadoras</li>
									</ol>
									
									<h4><a href="<? $segments = array('generadoras/nuevo_generadora'); echo site_url($segments)?>"><i class="fa fa-plus"></i>Nuevo</a></h4>
									<table class="table table-hover">
										<tr>
											<td><strong>Id</strong></td>
											<td><strong>Inmueble</strong></td>
											<td><strong>Fecha</strong></td>
											<td><strong>Concepto</strong></td>
											<td><center><strong>Opciones</strong></center></td>
										</tr>
										
										<?if($generadoras){?>
										
											<?foreach($generadoras as $generadora){?>
											<?
												//Fechas
												$this->load->helper('date');
            
												$FechaGeneradora  = explode('-',$generadora->FechaGeneradora); 
												$day = $FechaGeneradora[2];
												$month = $FechaGeneradora[1];
											 	$year = $FechaGeneradora[0];
												$datestring =$day."/".$month ."/".$year;
												$time = time();
												$FechaGeneradora=$datestring;
											
											?>
											
											<tr>
												<td><?echo $generadora->IdGeneradora?></td>
												<td><?echo $generadora->NombreInmueble?></td>
												<td><?echo $FechaGeneradora?></td>
												<td><?echo $generadora->ConceptoGeneradora?></td>
												<td>
													<center>
													<a href="<? $segments = array('generadoras/ver_generadora_panel',$generadora->IdGeneradora); echo site_url($segments)?>"><i class="fa fa-eye"></i></a>
													<a href="<? $segments = array('generadoras', 'editar_generadora',$generadora->IdGeneradora); echo site_url($segments)?>"><i class="fa fa-pencil-square-o"></i></a>
													<a href="<? $segments = array('generadoras', 'eliminar_generadora',$generadora->IdGeneradora); echo site_url($segments)?>" class="eliminar_usuario" data-toggle="modal" data-target="#alerta"><i class="fa fa-times"></i></a>
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

