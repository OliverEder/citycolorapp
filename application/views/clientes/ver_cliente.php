
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Clientes/ver cliente</small></h1>
						
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
										<li><a href="<? $segments = array('clientes', 'panel_control_cliente'); echo site_url($segments)?>">Clientes</a></li>
										<li class="active">Ver cliente</li>
									</ol>
									<div class="row">
										  <div class="col-md-12"> <center><img src="<?=base_url()?>images/clientes/<?=$cliente['IdCliente'];?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/></center></div>
									</div>
									<table class="table table-hover">
										<tr>
											<td><strong>Atributo</strong></td>
											<td><strong>Valor</strong></td>
										</tr>
										<tr>
											<td><strong>Id</strong></td>
											<td><strong><? echo $cliente['IdCliente']?></strong></td>
										</tr>
										<tr>
											<td><strong>Cliente</strong></td>
											<td><strong><? echo $cliente['NombreCliente']?></strong></td>
										</tr>
										<tr>
											<td><strong>RFC</strong></td>
											<td><strong><? echo $cliente['RfcCliente']?></strong></td>
										</tr>
										<tr>
											<td><strong>Direccion</strong></td>
											<td><strong><? echo $cliente['DireccionCliente']?></strong></td>
										</tr>
										<tr>
											<td><strong>Usuario</strong></td>
											<td><strong><? echo $cliente['NombreUsuario']?></strong></td>
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

