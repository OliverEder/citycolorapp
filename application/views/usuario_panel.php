

    <div class="container-fluid" id="cabecera"><!-- /.Second container starts -->
      <div class="row"><!-- /.first row starts -->
        <div class="col-md-12" >
            <br>
            <h1 class="text-center">Panel de usuario</font></h1>
        </div>
        <div class="row">
            <div class="col-md-12"> <center><img src="<?=base_url()?>images/clientes/<?echo $IdCliente?>.jpg" width="200px" alt="" class="img-responsive img-thumbnail"/></center></div>
        </div>
      </div><!-- /.first row ends -->
      <br>
      <div class="row"><!-- / Secund row starts -->
        <div class="col-md-3 col-md-offset-5">
         <table class="table table-hover">
            <tr>
              <td><strong>Atributo</strong></td>
              <td><strong>Informacion</strong></td>

            </tr>

            <tr>
              <td>Usuario</td>
              <td><? echo $NombreCliente?></td>

            </tr>

            <tr>
              <td>RFC</td>
              <td><? echo $RfcCliente?></td>

            </tr>

            <tr>
              <td>Direccion</td>
              <td><? echo $DireccionCliente?></td>

            </tr>

            <tr>
              <td>Cuenta</td>
              <td>Residencial/Comercial</td>

            </tr>
				<tr>
              <td>Inmuebles</td>
              <td><? echo count($inmuebles);?></td>

            </tr>
          </table>
        </div>
      </div><!-- /.Second row ends -->
    </div><!-- /.Second container ends -->
    <div class="container-fluid"><!-- /.thirth  container starts -->

      <div class="row" ><!-- /.first row starts -->
        <div class="col-md-12">
          <br>
          <h1 class="text-center">Inmuebles<h1>

        </div><!-- /.first row ends -->
      </div><!-- /.Second row ends -->
      </div>
      <?if($inmuebles){?>
      <?$contador_inmuebles=0;?>
      <?foreach($inmuebles as $inmueble){
      if($contador_inmuebles==0)
      {?>
        <!-- /.Contador en 0 Nueva linea -->
        <div class="row" id="icons"><!-- /.thirth row starts -->
          <div class="col-md-3" ></div>
          <div class="col-md-2  area" id="area">
            <div class="row">
                <div class="col-md-12" >
                    <center>
                        <a href="<? $segments = array('inmuebles/ver_inmueble',$inmueble->IdInmueble); echo site_url($segments)?>">
                           <img src="<?=base_url()?>images//inmuebles/<?echo $inmueble->IdInmueble?>.jpg" width="300px" alt="" class="img-responsive img-thumbnail areaImg" />
                        </a>
                    </center>
                </div>
            </div>
            <div class="row">

                <div class="col-md-10 col-md-offset-1" >
                    <center>

                        <a href="<? $segments = array('inmuebles/ver_inmueble',$inmueble->IdInmueble); echo site_url($segments)?>">
		                      <h4><?echo $inmueble->NombreInmueble;?></h4>
	                      
                        </a>
                    </center>
                </div>

            </div>
          </div>


        <?

        $contador_inmuebles++;
      }
      else
      {
        if($contador_inmuebles!=2)
        {?>
          <div class="col-md-2  area" id="area">
            <div class="row">
                <div class="col-md-12" >
                    <center>
                        <a href="<? $segments = array('inmuebles/ver_inmueble',$inmueble->IdInmueble); echo site_url($segments)?>">
                           <img src="<?=base_url()?>images//inmuebles/<?echo $inmueble->IdInmueble?>.jpg" width="300px" alt="" class="img-responsive img-thumbnail areaImg" />
                        </a>
                    </center>
                </div>
            </div>
            <div class="row">

                <div class="col-md-10 col-md-offset-1" >
                    <center>

                        <a href="<? $segments = array('inmuebles/ver_inmueble',$inmueble->IdInmueble); echo site_url($segments)?>">
                          <h4><?echo $inmueble->NombreInmueble;?></h4>
                        </a>
                    </center>
                </div>

            </div>
          </div>

          <?

          $contador_inmuebles++;
        }
        else
        {?>
         <div class="col-md-2  area" id="area">
            <div class="row">
                <div class="col-md-12" >
                    <center>
                        <a href="<? $segments = array('inmuebles/ver_inmueble',$inmueble->IdInmueble); echo site_url($segments)?>">
                           <img src="<?=base_url()?>images//inmuebles/<?echo $inmueble->IdInmueble?>.jpg" width="300px" alt="" class="img-responsive img-thumbnail areaImg" />
                        </a>
                    </center>
                </div>
            </div>
            <div class="row">

                <div class="col-md-10 col-md-offset-1" >
                    <center>

                        
                        <a href="<? $segments = array('inmuebles/ver_inmueble',$inmueble->IdInmueble); echo site_url($segments)?>">
                          <h4><?echo $inmueble->NombreInmueble;?></h4>
                        </a>
                    </center>
                </div>

            </div>
          </div>

          </div><!-- /.Second row ends -->
          <br>
          <?

          $contador_inmuebles=0;
        }
      }


      }?>
			<?}else{?>
											<center><h4>Sin registros</h4></center>
										<?}?>
      


    </div><!-- /.thirth  container ends -->
    <br>
    <br>
    <br>
    
