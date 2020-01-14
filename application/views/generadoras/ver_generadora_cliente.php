
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-8 col-md-offset-2" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('generadoras/ver_generadoras_inmueble',$generadora['IdInmueble']); echo site_url($segments)?>">Generadoras</a></li>
						<li class="active"> Generadora</li>
					</ol>
        	<div class="page-header">
						<h1> Generadora</h1>
					
					</div>
					
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
        
      </div><!-- /.first row ends -->
      <br>
      
    </div><!-- /.Second container ends -->
    

    <br>
    <br>
    <br>
    
