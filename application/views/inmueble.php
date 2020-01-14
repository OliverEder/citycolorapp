
    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-12" >
        	<ol class="breadcrumb">
						<li><a href="<? $segments = array('principal/usuario_panel'); echo site_url($segments)?>">Panel de usuario</a></li>
						<li class="active"> Inmueble</li>
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

            <tr>
              <td>Areas</td>
              <td><? echo count($areas);?></td>

            </tr>

          </table>
        </div>
      </div><!-- /.Second row ends -->
    </div><!-- /.Second container ends -->
    <div class="container-fluid"><!-- /.thirth  container starts -->
    	<div class="row" id="icons">
    		<div class="col-md-2 iconos_modulos col-md-offset-3">
					<a href="<? $segments = array('generadoras/ver_generadoras_inmueble',$IdInmueble); echo site_url($segments)?>">
						<h1 class="text-center"><i class="fa fa-ticket"></i></h1>
						<h4 class="text-center">Generadoras</h4>
					</a>
				</div>
				<div class="col-md-2 iconos_modulos">
					<a href="<? $segments = array('cotizadoras/ver_cotizadoras_inmueble',$IdInmueble ); echo site_url($segments)?>">
						<h1 class="text-center"><i class="fa fa-calculator"></i></h1>
						<h4 class="text-center">Cotizacion</h4>
					</a>
				</div>
				<div class="col-md-2 iconos_modulos">
					<a href="<? $segments = array('tabuladores/ver_tabuladores_inmueble',$IdInmueble ); echo site_url($segments)?>">
						<h1 class="text-center"><i class="fa fa-th-list"></i></h1>
						<h4 class="text-center">Tabulacion</h4>
					</a>
				</div>
    	</div>
			
      <div class="row" ><!-- /.first row starts -->
        <div class="col-md-12">
        
        
          <br>
          <h1 class="text-center">Areas</h1>

        </div><!-- /.first row ends -->
      <?if($areas){?>  
      <?$contador_areas=0;?>
		 <?foreach($areas as $area){
      	if($contador_areas==0)
      	{?>
      	<!-- /.Contador en 0 Nueva linea -->  
      </div><!-- /.Second row ends -->
      </div>
     <div class="row" ><!-- /.thirth row starts -->
        
        <div class="col-md-2 col-md-offset-3 area"><!-- /.area starts -->
           <div class="row">
              <div class="col-md-12 view view-first" >
              	<div class="row">
              	 <div class="col-md-12" >
                  <center>
                      <a href="<? $segments = array('areas/ver_area',$area->IdArea); echo site_url($segments)?>">
                         <img src="<?=base_url()?>images/areas/<?echo $area->IdArea?>.jpg" width="300px" alt="" class="img-responsive img-thumbnail areaImg " />
                      </a>
                  </center>
               </div>   
               </div> 
               <div class="row  "> 
               
               	 <div class="col-md-10 col-md-offset-1" >
                    <center>

                        <a href="<? $segments = array('areas/ver_area',$area->IdArea); echo site_url($segments)?>">
		                      <h4><?echo $area->NombreArea?></h4>
	                      
                        </a>
                    </center>
                </div>
                  
               	
               </div>   
              </div>
          </div>
        </div><!-- /.area ends -->
         <?

        		$contador_areas++;
      	}
      	else
		   {
		     if($contador_areas!=2)
		     {?>
		     
		     
        <div class="col-md-2 area"><!-- /.area starts -->
           <div class="row">
              <div class="col-md-12 view view-first" >
              	<div class="row">
              	 <div class="col-md-12" >
                  <center>
                      <a href="<? $segments = array('areas/ver_area',$area->IdArea); echo site_url($segments)?>">
                         <img src="<?=base_url()?>images/areas/<?echo $area->IdArea?>.jpg" width="300px" alt="" class="img-responsive img-thumbnail areaImg " />
                      </a>
                  </center>
               </div>   
               </div> 
               <div class="row  ">   
               	<div class="col-md-10 col-md-offset-1" >
                    <center>

                        <a href="<? $segments = array('areas/ver_area',$area->IdArea); echo site_url($segments)?>">
		                      <h4><?echo $area->NombreArea?></h4>
	                      
                        </a>
                    </center>
                </div>
               </div>   
              </div>
          </div>
          </div><!-- /.area ends -->
          
         <?

		       $contador_areas++;
		     }
		     else
		     {?>  
        <div class="col-md-2 area"><!-- /.area starts -->
           <div class="row">
              <div class="col-md-12 view view-first" >
              	<div class="row">
              	 <div class="col-md-12" >
                  <center>
                      <a href="<? $segments = array('areas/ver_area',$area->IdArea); echo site_url($segments)?>">
                         <img src="<?=base_url()?>images/areas/<?echo $area->IdArea?>.jpg" width="300px" alt="" class="img-responsive img-thumbnail areaImg " />
                      </a>
                  </center>
               </div>   
               </div> 
               <div class="row  ">   
               	<div class="col-md-10 col-md-offset-1" >
                    <center>

                        <a href="<? $segments = array('areas/ver_area',$area->IdArea); echo site_url($segments)?>">
		                      <h4><?echo $area->NombreArea?></h4>
	                      
                        </a>
                    </center>
                </div>
               </div>   
              </div>
          </div>
          
        </div><!-- /.area ends -->
        </div> <br>
			<?

          $contador_areas=0;
        }
      }


      ?>

      <?}?>
      <?}else{?>
											<center><h4>Sin registros</h4></center>
										<?}?>


    </div><!-- /.thirth  container ends -->
    <br>
    <br>
    <br>
    
