
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-12" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('inmuebles/ver_inmueble',$IdInmueble); echo site_url($segments)?>">Inmueble</a></li>
						<li class="active"> Tabuladores</li>
					</ol>
            <br>
            <h1 class="text-center"><? echo $NombreInmueble?></font></h1>
        </div>
        <div class="row">
            <div class="col-md-12"> <center><img src="<?=base_url()?>images/inmuebles/<?echo $IdInmueble?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/></center></div>
        </div>
      </div><!-- /.first row ends -->
      <br>
      <div class="row"><!-- / Secund row starts -->
        <div class="col-md-4 col-md-offset-4">
         <table class="table table-hover">
            <tr>
              <td><strong>Atributo</strong></td>
              <td><strong>Informacion</strong></td>

            </tr>

            <tr>
              <td>Direccion</td>
              <td><? echo $DireccionInmueble?></td>

            </tr>

            <tr>
              <td>Descripcion</td>
              <td>Edificio de ofinas con 4 plantas, fallada en color blanco, frente a oxxo</td>

            </tr>

            

          </table>
        </div>
      </div><!-- /.Second row ends -->
    </div><!-- /.Second container ends -->
    <div class="container-fluid"><!-- /.thirth  container starts -->
    	
			<div class="row" >
				<div class="col-md-8 col-md-offset-2" >
					<h1 class="text-center">Tabuladores</h1>
					<table class="table table-hover">
						<tr>
							<td><strong>Id</strong></td>
							<td><strong>Servicios</strong></td>
							<td><strong>Clave</strong></td>
							<td><strong>Descripcion</strong></td>
							<td><center><strong>Opciones</strong></center></td>
						</tr>
						
						<?if($tabuladores){?>
						
							<?foreach($tabuladores as $tabulador){?>
							<tr>
								<td><?echo $tabulador->IdTabulador?></td>
								<td><?echo $tabulador->ServiciosTabulador?></td>
								<td><?echo $tabulador->ClaveTabulador?></td>
								<td><?echo $tabulador->DescripcionTabulador?></td>
								<td>
									<center>
									<a href="<? $segments = array('tabuladores/ver_tabulador_cliente',$tabulador->IdTabulador); echo site_url($segments)?>"><i class="fa fa-eye"></i></a>
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
      

    </div><!-- /.thirth  container ends -->
    <br>
    <br>
    <br>
    
