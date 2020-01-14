
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-12" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('inmuebles/ver_inmueble',$IdInmueble); echo site_url($segments)?>">Inmueble</a></li>
						<li class="active"> Area</li>
					</ol>
            <br>
            <h1 class="text-center"><? echo $NombreArea?></font></h1>
        </div>
        <div class="row">
            <div class="col-md-12"> <center><img src="<?=base_url()?>images/areas/<?echo $IdArea?>.jpg" width="500px" alt="" class="img-responsive img-thumbnail"/></center></div>
        </div>
      </div><!-- /.first row ends -->
      <br>
      <div class="row" id="icons"><!-- /.second row starts -->
      	
        <div class="col-md-2 col-md-offset-1 iconos_modulos" >
        	<a href="#camaras" aria-controls="camaras" role="tab" data-toggle="tab" id="camarasLiga" class="liga">	
          	<h1 class="text-center "><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span></h1>
         </a> 
          <h4 class="text-center ligas_modulos">Camaras ip</h4>
 		  </div>
       
        <div class="col-md-2 iconos_modulos ">
        	<a href="#electrico" aria-controls="electrico" role="tab" data-toggle="tab">
          <h1 class="text-center"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span></h1>
          </a>
          <h4 class="text-center ligas_modulos">Electricidad</h4>
          
        </div>
        <div class="col-md-2 iconos_modulos">
        	<a href="#hidraulico" aria-controls="hidraulico" role="tab" data-toggle="tab">
          <h1 class="text-center"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span></h1>
         </a> 
          <h4 class="text-center ligas_modulos">Hidraulica</h4>
        </div>
        <div class="col-md-2 iconos_modulos">
        	<a href="#fisico" aria-controls="fisico" role="tab" data-toggle="tab">
          <h1 class="text-center"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></h1>
         </a>
          <h4 class="text-center ligas_modulos">Mantenimiento</h4>
        </div>
        <div class="col-md-2 iconos_modulos">
        	<a href="<? $segments = array('contacto/contacto_visitante'); echo site_url($segments)?>">
          <h1 class="text-center"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></h1>
         </a>
          <h4 class="text-center">Contacto </h4>
        </div>


      </div><!-- /.second row ends -->
       <br>
    </div><!-- /.Second container ends -->
    <div class="container-fluid tab-content" ><!-- /.thirth  container starts -->
		<div class="row" id="camaras" role="tabpanel" class="tab-pane active">
			<div id="row">
				<div class="col-md-10 col-md-offset-1 page-header">
					<h3><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> Camaras IP</h3>
		      </div>
         </div>
         <div id="row">
				<div class="col-md-10 col-md-offset-1">
					<table class="table table-hover">
				      

		       </table>
		      </div>
         </div>	
		</div>		
      <div class="row" id="electrico"role="tabpanel" class="tab-pane">
		   <div id="row">
				<div class="col-md-10 col-md-offset-1 page-header ">
					<h3><span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Electricidad</h3>
		    </div>
		    
		    
		   </div>
		   <div id="row">
				<div class="col-md-10 col-md-offset-1 ">
					<h4><i class="fa fa-lightbulb-o"></i> Electrico <? echo count($electrico);?></h4>
					<table class="table table-hover">
				      <tr>
				        <td><strong>Id</strong></td>
							  <td><strong>Nombre</strong></td>
								<td><strong>Unidad</strong></td>
								<td><strong>Cantidad</strong></td>
								<td><strong>Ultimo Manto</strong></td>
								<td><strong>Periodicidad</strong></td>
								<td><strong>Ver</strong></td>
				      </tr>
				      <?if($electrico){?>  
						<?foreach($electrico as $fisic){?>
				      <tr>
				        <td><?echo $fisic->IdElectrico?></td>
								<td><?echo $fisic->NombreElectrico?></td>
								<td><?echo $fisic->UnidadElectrico?></td>
								<td><?echo $fisic->CantidadElectrico?></td>
								<td><?echo $fisic->FechaUltimoMantoElectrico?></td>
								<td><?echo $fisic->PeriodicidadMantoElectrico?></td>
				        <td>
				        	<center>
									<a href="<? $segments = array('electrico/ver_electrico_cliente', $fisic->IdElectrico); echo site_url($segments)?>"><i class="fa fa-eye"></i></a>
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
		<div class="row" id="hidraulico"role="tabpanel" class="tab-pane">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 page-header">
					<h3><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Hidraulico</h3>
		      </div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1 page-header">
					<h4><i class="fa fa-tint"></i> Hidraulico <? echo count($hidraulico);?></h4>
									
									
									<table class="table table-hover">
										<tr>
											<td><strong>Id</strong></td>
										  <td><strong>Nombre</strong></td>
											<td><strong>Unidad</strong></td>
											<td><strong>Cantidad</strong></td>
											<td><strong>Ultimo Manto</strong></td>
											<td><strong>Periodicidad</strong></td>
											<td><center><strong>Opciones</strong></center></td>
										</tr>
										<?if($hidraulico){?>
											<?foreach($hidraulico as $fisic){?>
											<tr>
												<td><?echo $fisic->IdHidraulico?></td>
												<td><?echo $fisic->NombreHidraulico?></td>
												<td><?echo $fisic->UnidadHidraulico?></td>
												<td><?echo $fisic->CantidadHidraulico?></td>
												<td><?echo $fisic->FechaUltimoMantoHidraulico?></td>
												<td><?echo $fisic->PeriodicidadMantoHidraulico?></td>
												<td>
													<center>
													<a href="<? $segments = array('hidraulico/ver_hidraulico_cliente',$fisic->IdHidraulico); echo site_url($segments)?>"><i class="fa fa-eye"></i></a>
													</center>	
												</td>
											</tr>
											<?}?>
										<?}else{?>
											<center><h4>Sin registros</h4></center>
										<?}?>

								 </table>
								 <br>
								 
		       
				</div>
			</div>		
		</div>
		<div class="row" id="fisico"role="tabpanel" class="tab-pane">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 page-header">
					<h3><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Mantenimiento</h3>
		       
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1 page-header">
					
		       <h4><i class="fa fa-wrench"></i> Mantenimiento <? echo count($fisico);?></h4>
									
									<table class="table table-hover">
										<tr>
											<td><strong>Id</strong></td>
										  <td><strong>Nombre</strong></td>
											<td><strong>Unidad</strong></td>
											<td><strong>Cantidad</strong></td>
											<td><strong>Ultimo Manto</strong></td>
											<td><strong>Periodicidad</strong></td>
											<td><center><strong>Opciones</strong></center></td>
										</tr>
										<?if($fisico){?>
											<?foreach($fisico as $fisic){?>
											<tr>
												<td><?echo $fisic->IdFisico?></td>
												<td><?echo $fisic->NombreFisico?></td>
												<td><?echo $fisic->UnidadFisico?></td>
												<td><?echo $fisic->CantidadFisico?></td>
												<td><?echo $fisic->FechaUltimoMantoFisico?></td>
												<td><?echo $fisic->PeriodicidadMantoFisico?></td>
												
												<td>
													<center>
													<a href="<? $segments = array('fisico/ver_fisico_cliente',$fisic->IdFisico); echo site_url($segments)?>"><i class="fa fa-eye"></i></a>
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
		

    </div><!-- /.thirth  container ends -->
    <br>
    <br>
    <br>
    
