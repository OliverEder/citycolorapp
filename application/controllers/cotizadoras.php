<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cotizadoras extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
    $this->load->model('clientes_model');
    $this->load->model('inmuebles_model');
    $this->load->model('areas_model'); 
    $this->load->model('focos_model');
    $this->load->model('cotizadoras_model');
  }

// ****** Inicia funcion ver_cotizadoras_inmueble******
   public function ver_cotizadoras_inmueble($inmueble)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $result_inmueble=$this->inmuebles_model->inmueble($inmueble);//Envia cliente a el modelo inmuebles para buscar la informacion de los inmuebles que correspondan al cliente.
			
      if($result_inmueble)
      {
        $data = array(
          'IdInmueble' =>$result_inmueble[0]->IdInmueble,
          'NombreInmueble' =>$result_inmueble[0]->NombreInmueble,
          'DireccionInmueble' =>$result_inmueble[0]->DireccionInmueble,
        );

        
        $result_cotizadoras=$this->cotizadoras_model->inmuebles_panel($inmueble);
		    $data['cotizadoras']=$result_cotizadoras;
        $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
        $data['permisos'] = $session_data['permisos'];
        //carga vistas, enviando el arreglo data como parametro.
        $this->load->view('header',$data);
        $this->load->view('navbar');
        $this->load->view('cotizadoras/panel_cotizadoras_cliente');
        $this->load->view('footer');

      }
      else
      {
        //carga vistas, enviando el arreglo data como parametro.
        $this->load->view('header',$data);
        $this->load->view('navbar');
        $this->load->view('inmueble');
        $this->load->view('footer');
      }




    }
    else//si no
    {
      //se cargan vistas
      $this->load->view('header');
	  	$this->load->view('index');
	  	$this->load->view('footer');
    }

  }
// ****** Termina funcion ver_cotizadoras_inmueble ******


// ****** Inicia funcion ver_cotizadora_cliente ******
   public function ver_cotizadora_cliente($cotizadora)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
     	$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      
      $Cotizadora = $this->cotizadoras_model->ver_cotizadora($cotizadora);
    	$data['cotizadora'] = array(
		        'IdCotizadora' =>$Cotizadora[0]->IdCotizadora,
		        'IdInmueble' =>$Cotizadora[0]->IdInmueble,
		        'NombreInmueble' =>$Cotizadora[0]->NombreInmueble,
		        'PartidaCotizadora' =>$Cotizadora[0]->PartidaCotizadora,
		        'DescripcionCotizadora' =>$Cotizadora[0]->DescripcionCotizadora,
		       	'ConceptoCotizadora' =>$Cotizadora[0]->ConceptoCotizadora,
		       	'UnidadCotizadora' =>$Cotizadora[0]->UnidadCotizadora,
		       	'CantidadCotizadora' =>$Cotizadora[0]->CantidadCotizadora,
		       	'PrecioUnitarioCotizadora' =>$Cotizadora[0]->PrecioUnitarioCotizadora,
		       	'PecioTotalCotizadora' =>$Cotizadora[0]->PecioTotalCotizadora,
		      );
		  //carga vistas, enviando el arreglo data como parametro.
		  $this->load->view('header',$data);
		  $this->load->view('navbar');
			$this->load->view('cotizadoras/ver_cotizadora_cliente');
			$this->load->view('footer');
					
      
    }
    else//si no
    {
      //se cargan vistas
      $this->load->view('header');
	  	$this->load->view('index');
	  	$this->load->view('footer');
    }

  }
// ****** Termina funcion ver_cotizadora_cliente ******

// ****** Inicia funcion panel_control_cotizadora******
	public function panel_control_cotizadora()
	{

    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      $permisos=$session_data['permisos'];
      $NumeroDePermisos=count($permisos);
      $contador=0;
      foreach($permisos as $permiso)
      {
      	$contador++;
      	if($permiso->NombreModulo=="cotizadoras")
      	{
		    	$data['cotizadoras'] = $this->cotizadoras_model->todos_cotizadoras();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('cotizadoras/panel_control_cotizadoras');
					$this->load->view('footer');
					$this->load->view('alerta_eliminar_usuario');
					break;
      	}
      	if($contador==$NumeroDePermisos)
      	{
      		redirect('principal', 'refresh');
      	}
      	
      }	
      
      
    }
    else//si no
    {
      //se cargan vistas
      $this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
			$this->load->view('formLogin');
    }
	}

// ****** Termina funcion panel_control_area******

// ****** Inicia funcion ver_cotizadora ******
	public function ver_cotizadora_panel($cotizadora)
	{

    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      $permisos=$session_data['permisos'];
      $NumeroDePermisos=count($permisos);
      $contador=0;
      foreach($permisos as $permiso)
      {
      	$contador++;
      	if($permiso->NombreModulo=="cotizadoras")
      	{
		    	$Cotizadora = $this->cotizadoras_model->ver_cotizadora($cotizadora);
		    	$data['cotizadora'] = array(
		        'IdCotizadora' =>$Cotizadora[0]->IdCotizadora,
		        'IdInmueble' =>$Cotizadora[0]->IdInmueble,
		        'NombreInmueble' =>$Cotizadora[0]->NombreInmueble,
		        'PartidaCotizadora' =>$Cotizadora[0]->PartidaCotizadora,
		        'DescripcionCotizadora' =>$Cotizadora[0]->DescripcionCotizadora,
		       	'ConceptoCotizadora' =>$Cotizadora[0]->ConceptoCotizadora,
		       	'UnidadCotizadora' =>$Cotizadora[0]->UnidadCotizadora,
		       	'CantidadCotizadora' =>$Cotizadora[0]->CantidadCotizadora,
		       	'PrecioUnitarioCotizadora' =>$Cotizadora[0]->PrecioUnitarioCotizadora,
		       	'PecioTotalCotizadora' =>$Cotizadora[0]->PecioTotalCotizadora,
		      );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('cotizadoras/ver_cotizadora');
					$this->load->view('footer');
					break;
      	}
      	if($contador==$NumeroDePermisos)
      	{
      		redirect('principal', 'refresh');
      	}
      	
      }	
      
      
    }
    else//si no
    {
      //se cargan vistas
      $this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
			$this->load->view('formLogin');
    }
	}

// ****** Termina funcion ver_cotizadora******

// ****** Inicia funcion nuevo_cotizadora *****
	public function nuevo_cotizadora()
	{

    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      $permisos=$session_data['permisos'];
      $NumeroDePermisos=count($permisos);
      $contador=0;
      foreach($permisos as $permiso)
      {
      	$contador++;
      	if($permiso->NombreModulo=="cotizadoras")
      	{
		    	$data['inmuebles'] = $this->inmuebles_model->todos_inmuebles();
		    		
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header', $data);
				  $this->load->view('navbar');
					$this->load->view('cotizadoras/nuevo_cotizadora');
					$this->load->view('footer');
					break;
      	}
      	
      	if($contador==$NumeroDePermisos)
      	{
      		redirect('principal', 'refresh');
      	}
      	
      }	
      
      
    }
    else//si no
    {
      //se cargan vistas
      $this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
			$this->load->view('formLogin');
    }
	}

// ****** Termina funcion nuevo_cotizadora ******

// ****** Inicia funcion registro_cotizadora******
 	public function registro_cotizadora()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('PartidaCotizadora', 'PartidaCotizadora', 'required');
    $this->form_validation->set_rules('ConceptoCotizadora', 'ConceptoCotizadora', 'required');
    $this->form_validation->set_rules('UnidadCotizadora', 'UnidadCotizadora', 'required');
    $this->form_validation->set_rules('CantidadCotizadora', 'CantidadCotizadora', 'required');
    $this->form_validation->set_rules('PrecioUnitarioCotizadora', 'PrecioUnitarioCotizadora', 'required');
    $this->form_validation->set_rules('PecioTotalCotizadora', 'PecioTotalCotizadora', 'required');
    $this->form_validation->set_rules('DescripcionCotizadora', 'DescripcionCotizadora', 'required');
		   
		
		if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{
		
			$data['PartidaCotizadora']= $this->input->post('PartidaCotizadora');
			$data['ConceptoCotizadora']= $this->input->post('ConceptoCotizadora');
			$data['UnidadCotizadora']= $this->input->post('UnidadCotizadora');
			$data['CantidadCotizadora']= $this->input->post('CantidadCotizadora');
			$data['PrecioUnitarioCotizadora']= $this->input->post('PrecioUnitarioCotizadora');
			$data['PecioTotalCotizadora']= $this->input->post('PecioTotalCotizadora');
			$data['DescripcionCotizadora']= $this->input->post('DescripcionCotizadora');
			$data['IdInmueble']= $this->input->post('IdInmueble');
      /*
      $result_cotizadora_existente=$this->cotizadoras_model->cotizadora_existente($data);
      
      if($result_cotizadora_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
      	//registrar el area en la base de datos
        $result_registro_cotizadora=$this->cotizadoras_model->registro_cotizadora($data);
        echo 'si';
				return FALSE;
         			
        
      }
      */
      $result_registro_cotizadora=$this->cotizadoras_model->registro_cotizadora($data);
      echo 'si';
			return FALSE;
      
		}
		
	
  }
// ****** Termina funcion registro_cotizadora ******

// ****** Inicia funcion editar_area******
	public function editar_cotizadora($cotizadora)
	{

    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      $permisos=$session_data['permisos'];
      $NumeroDePermisos=count($permisos);
      $contador=0;
      foreach($permisos as $permiso)
      {
      	$contador++;
      	if($permiso->NombreModulo=="cotizadoras")
      	{
		    	$Cotizadora = $this->cotizadoras_model->ver_cotizadora($cotizadora);
		    	$data['cotizadora'] = array(
		        'IdCotizadora' =>$Cotizadora[0]->IdCotizadora,
		        'IdInmueble' =>$Cotizadora[0]->IdInmueble,
		        'NombreInmueble' =>$Cotizadora[0]->NombreInmueble,
		        'PartidaCotizadora' =>$Cotizadora[0]->PartidaCotizadora,
		        'DescripcionCotizadora' =>$Cotizadora[0]->DescripcionCotizadora,
		       	'ConceptoCotizadora' =>$Cotizadora[0]->ConceptoCotizadora,
		       	'UnidadCotizadora' =>$Cotizadora[0]->UnidadCotizadora,
		       	'CantidadCotizadora' =>$Cotizadora[0]->CantidadCotizadora,
		       	'PrecioUnitarioCotizadora' =>$Cotizadora[0]->PrecioUnitarioCotizadora,
		       	'PecioTotalCotizadora' =>$Cotizadora[0]->PecioTotalCotizadora,
		      );
		      
		      
       		$data['inmuebles'] = $this->inmuebles_model->todos_inmuebles();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('cotizadoras/editar_cotizadora');
					$this->load->view('footer');
					break;
      	}
      	if($contador==$NumeroDePermisos)
      	{
      		redirect('principal', 'refresh');
      	}
      	
      }	
      
      
    }
    else//si no
    {
      //se cargan vistas
      $this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
			$this->load->view('formLogin');
    }
	}

// ****** Termina funcion editar_cotizadora ******

// ****** Inicia funcion guardar_cambios_cotizadora ******
 	public function guardar_cambios_cotizadora()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('PartidaCotizadora', 'PartidaCotizadora', 'required');
    $this->form_validation->set_rules('ConceptoCotizadora', 'ConceptoCotizadora', 'required');
    $this->form_validation->set_rules('UnidadCotizadora', 'UnidadCotizadora', 'required');
    $this->form_validation->set_rules('CantidadCotizadora', 'CantidadCotizadora', 'required');
    $this->form_validation->set_rules('PrecioUnitarioCotizadora', 'PrecioUnitarioCotizadora', 'required');
    $this->form_validation->set_rules('PecioTotalCotizadora', 'PecioTotalCotizadora', 'required');
    $this->form_validation->set_rules('DescripcionCotizadora', 'DescripcionCotizadora', 'required');
		
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 
		}
		else
		{

      $data['IdCotizadora']= $this->input->post('IdCotizadora');
     	$data['PartidaCotizadora']= $this->input->post('PartidaCotizadora');
			$data['ConceptoCotizadora']= $this->input->post('ConceptoCotizadora');
			$data['UnidadCotizadora']= $this->input->post('UnidadCotizadora');
			$data['CantidadCotizadora']= $this->input->post('CantidadCotizadora');
			$data['PrecioUnitarioCotizadora']= $this->input->post('PrecioUnitarioCotizadora');
			$data['PecioTotalCotizadora']= $this->input->post('PecioTotalCotizadora');
			$data['DescripcionCotizadora']= $this->input->post('DescripcionCotizadora');
			$data['IdInmueble']= $this->input->post('IdInmueble');
      /*
      $result_cotizadora_existente=$this->cotizadoras_model->cotizadora_existente($data);
			
      
      if($result_cotizadora_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_editar_cotizadora=$this->cotizadoras_model->editar_cotizadora($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }
      */
      $result_editar_cotizadora=$this->cotizadoras_model->editar_cotizadora($data);
      //redirect('principal', 'refresh');
			echo 'si';
			return FALSE;
      

		}
  }
// ****** Termina funcion guardar_cambios_cotizadora ******

// ****** Inicia funcion guardar_cambios_imagen_antes ******
 	public function guardar_cambios_imagen_antes()
  {
    
		

    $data['IdCotizadora']= $this->input->post('IdCotizadora');
    $file = "./images/cotizadoras/primera/". $data['IdCotizadora'].".jpg";
		
		if(file_exists($file))
		{
			$do = unlink($file);
			
		}
		
    
    $config['upload_path'] = './images/cotizadoras/primera/';
  	$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
    $config['max_width'] = '2024';
    $config['max_height'] = '2008';
    $config['file_name'] =$data['IdCotizadora'];
    $this->load->library('upload', $config);
    $nombreimg=$data['IdCotizadora'];
   
    
    
    	if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('cotizadoras/nuevo_cotizadora');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/cotizadoras/primera/'.$nombreimg.'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}  
      
        
        
        
     
  }
// ****** Termina funcion guardar_cambios_imagen_antes ******

// ****** Inicia funcion guardar_cambios_imagen_despues ******
 	public function guardar_cambios_imagen_despues()
  {
    
		

    $data['IdCotizadora']= $this->input->post('IdCotizadora');
    $file = "./images/cotizadoras/segunda/". $data['IdCotizadora'].".jpg";
		
		if(file_exists($file))
		{
			$do = unlink($file);
			
		}
		
    
    $config['upload_path'] = './images/cotizadoras/segunda/';
  	$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
    $config['max_width'] = '2024';
    $config['max_height'] = '2008';
    $config['file_name'] =$data['IdCotizadora'];
    $this->load->library('upload', $config);
    $nombreimg=$data['IdCotizadora'];
   
    
    
    	if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('cotizadoras/nuevo_cotizadora');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/cotizadoras/segunda/'.$nombreimg.'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}  
      
        
        
        
     
  }
// ****** Termina funcion guardar_cambios_imagen_despues ******

// ****** Inicia funcion eliminar_area******
	public function eliminar_cotizadora($cotizadora_argumento)
	{

    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      $permisos=$session_data['permisos'];
      $NumeroDePermisos=count($permisos);
      $contador=0;
      foreach($permisos as $permiso)
      {
      	$contador++;
      	if($permiso->NombreModulo=="cotizadoras")
      	{
		    	
		    	$data['cotizadora']=$cotizadora_argumento;
		    	$this->load->view('cotizadoras/alerta',$data);
					
					break;
      	}
     		if($contador==$NumeroDePermisos)
      	{
      		redirect('principal', 'refresh');
      	}
      }	
      
      
    }
    else//si no
    {
      //se cargan vistas
      $this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
			$this->load->view('formLogin');
    }
	}

// ****** Termina funcion eliminar_inmueble******


// ****** Inicia funcion eliminar******
	public function eliminar()
	{

    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      $permisos=$session_data['permisos'];
      $NumeroDePermisos=count($permisos);
      $contador=0;
      foreach($permisos as $permiso)
      {
      	$contador++;
      	if($permiso->NombreModulo=="cotizadoras")
      	{
		    	
		    	$idcotizadora= $this->input->post('IdCotizadora');
		    	$Cotizadora = $this->cotizadoras_model->eliminar_cotizadora($idcotizadora);
		    	
		    	$fileAntes = "./images/cotizadoras/antes/".$idcotizadora.".jpg";
					
					
		    	if(file_exists($fileAntes))
					{
						$doAntes = unlink($fileAntes);
			
					}
		    	
		    	$fileDespues = "./images/cotizadoras/despues/".$idcotizadora.".jpg";
		    	
		    	if(file_exists($fileDespues))
					{
						$doDespues = unlink($fileDespues);
			
					}
		    	
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('cotizadoras/panel_control_cotizadora', 'refresh');
					
					break;
      	}
      	if($contador==$NumeroDePermisos)
      	{
      		redirect('principal', 'refresh');
      	}
      	
      }	
      
      
    }
    else//si no
    {
      //se cargan vistas
      $this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
			$this->load->view('formLogin');
    }
	}

// ****** Termina funcion eliminar ******
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
