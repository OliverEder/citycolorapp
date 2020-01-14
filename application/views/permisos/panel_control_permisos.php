
  <body>

    <div class="container-fluid"><!-- /.first container starts -->
		  <div class="row">
				<div class="col-md-12">  
					<div class="page-header">
						<h1><i class="fa fa-cogs"></i> Panel de control <small>Permisos</small></h1>
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
										<li class="active">Permisos</li>
									</ol>
									<!-- Formulario de busqueda-->
									<div class="row">
									  <div class="col-md-4 col-md-offset-4">
									    <?php $attributes = array('id' => 'formBusqueda','name' => 'formBusqueda'); echo form_open('permisos/busqueda',$attributes); ?>
									      <div class="form-group">
									        <div class="input-group">
									            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
									            <input type="text" id="buscar" name="buscar" class="form-control input-lg" placeholder="Buscar"></input>
									        </div>
									      </div>
									      </form>
									    </div>
									</div>
                  <!-- Formulario de busqueda-->
                  
									<div id="resultadoBusqueda">
									
									</div>
									
									<h4><a href="<? $segments = array('permisos/nuevo_permiso'); echo site_url($segments)?>"><i class="fa fa-plus"></i>Nuevo</a></h4>
									<table class="table table-hover">
										<tr>
											<td><strong>Id</strong></td>
											<td><strong>Rango</strong></td>
											<td><strong>Modulo</strong></td>
											<td><center><strong>Opciones</strong></center></td>
										</tr>
										<?if($permisos){?>
											<?foreach($permisos as $permiso){?>
											<tr>
												<td><?echo $permiso->IdPermiso?></td>
												<td><?echo $permiso->NombreRango?></td>
												<td><?echo $permiso->NombreModulo?></td>
												<td>
													<center>
													<a href="<? $segments = array('permisos/ver_permiso',$permiso->IdPermiso); echo site_url($segments)?>"><i class="fa fa-eye"></i></a>
													<a href="<? $segments = array('permisos', 'editar_permiso',$permiso->IdPermiso); echo site_url($segments)?>"><i class="fa fa-pencil-square-o"></i></a>
													<a href="<? $segments = array('permisos', 'eliminar_permiso',$permiso->IdPermiso); echo site_url($segments)?>" class="eliminar_usuario" data-toggle="modal" data-target="#alerta"><i class="fa fa-times"></i></a>
													</center>	
												</td>
											</tr>
											<?}?>
										<?}else{?>
											<center><h4>Sin registros</h4></center>
										<?}?>
    
								 </table>
								 <center><? echo $paginacion;?></center>
								</div>
								
							</div>
						</div>
					</div>
					
				</div> 
			</div>
    </div><!-- /.Administrador de cuentas de usuario container ends -->
    
    

      <br><br><br>

