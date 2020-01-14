
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Areas/ver area</small></h1>
						
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
										<li><a href="<? $segments = array('areas', 'panel_control_area'); echo site_url($segments)?>">Areas</a></li>
										<li class="active">Ver area</li>
									</ol>
									
									<div class="row">
										  <div class="col-md-12"> <center><img src="<?=base_url()?>images/areas/<?=$area['IdArea'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/></center></div>
									</div>
									<table class="table table-hover">
										<tr>
											<td><strong>Atributo</strong></td>
											<td><strong>Valor</strong></td>
										</tr>
										<tr>
											<td><strong>Id</strong></td>
											<td><strong><? echo $area['IdArea']?></strong></td>
										</tr>
										<tr>
											<td><strong>Inmueble</strong></td>
											<td><strong><? echo $area['NombreInmueble']?></strong></td>
										</tr>
										<tr>
											<td><strong>Area</strong></td>
											<td><strong><? echo $area['NombreArea']?></strong></td>
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

