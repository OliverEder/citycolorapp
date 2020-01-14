
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Usuarios/ver usuario</small></h1>
						
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
										<li><a href="<? $segments = array('usuarios', 'panel_control_usuario'); echo site_url($segments)?>">Usuarios</a></li>
										<li class="active">Ver usuario</li>
									</ol>
									<table class="table table-hover">
										<tr>
											<td><strong>Atributo</strong></td>
											<td><strong>Valor</strong></td>
										</tr>
										<tr>
											<td><strong>Id</strong></td>
											<td><strong><? echo $usuario['IdUsuario']?></strong></td>
										</tr>
										<tr>
											<td><strong>Usuario</strong></td>
											<td><strong><? echo $usuario['NombreUsuario']?></strong></td>
										</tr>
										<tr>
											<td><strong>Password</strong></td>
											<td><strong><? echo $usuario['PasswordUsuario']?></strong></td>
										</tr>
										<tr>
											<td><strong>Email</strong></td>
											<td><strong><? echo $usuario['EmailUsuario']?></strong></td>
										</tr>
										<tr>
											<td><strong>Rango</strong></td>
											<td><strong><? echo $usuario['NombreRango']?></strong></td>
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

