
  <body>
  


    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Generadoras/ver generadora</small></h1>
						
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
										<li><a href="<? $segments = array('generadoras', 'panel_control_generadora'); echo site_url($segments)?>">Generadoras</a></li>
										<li class="active">Ver generadora</li>
									</ol>
									<?
										//Fechas
										$this->load->helper('date');
        
										$FechaGeneradora  = explode('-',$generadora['FechaGeneradora']); 
										$day = $FechaGeneradora[2];
										$month = $FechaGeneradora[1];
									 	$year = $FechaGeneradora[0];
										$datestring =$day."/".$month ."/".$year;
										$time = time();
										$generadora['FechaGeneradora']=$datestring;
									
									?>
									
									<table class="table table-hover">
										<tr>
											<td><strong>Id</strong></td>
											<td><strong><? echo $generadora['IdGeneradora']?></strong></td>
										</tr>
										<tr>
											<td><strong>Inmueble</strong></td>
											<td><strong><? echo $generadora['NombreInmueble']?></strong></td>
										</tr>
										<tr>
											<td><strong>Concepto</strong></td>
											<td><strong><? echo $generadora['ConceptoGeneradora']?></strong></td>
										</tr>
										<tr>
											<td><strong>Fecha</strong></td>
											<td><strong><? echo $generadora['FechaGeneradora']?></strong></td>
										</tr>
										<tr>
											<td><strong>Unidad</strong></td>
											<td><strong><? echo $generadora['UnidadGeneradora']?></strong></td>
										</tr> 
										<tr>
											<td><strong>Cantidad</strong></td>
											<td><strong><? echo $generadora['CantidadGeneradora']?></strong></td>
										</tr> 
										<tr>
											<td><strong>Precio unitario</strong></td>
											<td><strong>$ <? echo $generadora['PrecioUnitarioGeneradora']?></strong></td>
										</tr> 
										<tr>
											<td><strong>Preco total</strong></td>
											<td><strong>$ <? echo $generadora['PecioTotalGeneradora']?></strong></td>
										</tr>  
										<tr>
											<td><strong>Descripcion</strong></td>
											<td><strong><? echo $generadora['DescripcionGeneradora']?></strong></td>
										</tr>
										
																				
								 </table>
								 <div class="row">
										  <div class="col-md-12"> 
										  	<center>
										  		<h4>Antes</h4>
										  		<img src="<?=base_url()?>images/generadoras/antes/<?=$generadora['IdGeneradora'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/>
										  	</center>
										 	</div>
									</div>
									<div class="row">
										  <div class="col-md-12"> 
										  	<center>
										  		<h4>Despues</h4>
										  		<img src="<?=base_url()?>images/generadoras/despues/<?=$generadora['IdGeneradora'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/>
										  	</center>
										  </div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div> 
			</div>
    </div><!-- /.Administrador de cuentas de usuario container ends -->
    
    

      <br><br><br>

