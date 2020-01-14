
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-12" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('inmuebles/ver_inmueble',$IdInmueble); echo site_url($segments)?>">Inmueble</a></li>
						<li class="active"> Generadoras</li>
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
					<h1 class="text-center">Generadoras</h1>
					<table class="table table-hover">
							<tr>
								<td><strong>Id</strong></td>
								<td><strong>Antes</strong></td>
								<td><strong>Generadora</strong></td>
								<td><strong>Despues</strong></td>
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
									<td><img src="<?=base_url()?>images/generadoras/antes/<?echo $generadora->IdGeneradora?>.jpg" width="50px" alt="" class="img-responsive img-thumbnail"/></td>
									<td><?echo $generadora->ConceptoGeneradora?></td>
									<td><img src="<?=base_url()?>images/generadoras/despues/<?echo $generadora->IdGeneradora?>.jpg" width="50px" alt="" class="img-responsive img-thumbnail"/></td>
									<td>
										<center>
										<a href="<? $segments = array('generadoras/ver_generadora_cliente',$generadora->IdGeneradora); echo site_url($segments)?>"><i class="fa fa-eye"></i></a>
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
    
