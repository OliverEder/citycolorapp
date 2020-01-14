<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inmuebles extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
    $this->load->model('clientes_model');
    $this->load->model('inmuebles_model');
    $this->load->model('areas_model'); 
    $this->load->model('generadoras_model'); 
    
  }



// ****** Inicia funcion inmueble ******
   public function ver_inmueble($inmueble)
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

        $result_areas=$this->areas_model->inmuebles_panel($inmueble);
        $result_generadoras=$this->generadoras_model->inmuebles_panel($inmueble);
		  
		  if($result_areas)
        {
          $data['areas']=$result_areas;
          $data['generadoras']=$result_generadoras;
          $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
          $data['permisos'] = $session_data['permisos'];
          //carga vistas, enviando el arreglo data como parametro.
          $this->load->view('header',$data);
          $this->load->view('navbar');
          $this->load->view('inmueble');
          $this->load->view('footer');

        }
        else
        {
          $data['areas']=$result_areas;
          $data['generadoras']=$result_generadoras;
          $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
          $data['permisos'] = $session_data['permisos'];
          //carga vistas, enviando el arreglo data como parametro.
          $this->load->view('header',$data);
          $this->load->view('navbar');
          $this->load->view('inmueble');
          $this->load->view('footer');
        }
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
// ****** Termina funcion inmueble ******

	// ****** Inicia funcion panel_control_inmueble******
	public function panel_control_inmueble()
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
      	if($permiso->NombreModulo=="inmuebles")
      	{
		    	$data['inmuebles'] = $this->inmuebles_model->todos_inmuebles();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('inmuebles/panel_control_inmuebles');
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

// ****** Termina funcion panel_control_inmueble******

// ****** Inicia funcion ver_inmueble ******
	public function ver_inmueble_panel($inmueble)
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
      	if($permiso->NombreModulo=="inmuebles")
      	{
		    	$Inmueble = $this->inmuebles_model->ver_inmueble($inmueble);
		    	$data['inmueble'] = array(
		        'IdInmueble' =>$Inmueble[0]->IdInmueble,
		        'IdCliente' =>$Inmueble[0]->IdCliente,
		        'NombreCliente' =>$Inmueble[0]->NombreCliente,
		        'NombreInmueble' =>$Inmueble[0]->NombreInmueble,
		        'DireccionInmueble' =>$Inmueble[0]->DireccionInmueble,
		      );
		      
		      $result_areas=$this->areas_model->inmuebles_panel($inmueble);
		      $data['areas']=$result_areas;
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('inmuebles/ver_inmueble');
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

// ****** Termina funcion ver_inmueble ******


// ****** Inicia funcion nuevo_inmueble*****
	public function nuevo_inmueble()
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
      	if($permiso->NombreModulo=="inmuebles")
      	{
		    	$data['clientes'] = $this->clientes_model->todos_clientes();
		    		
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header', $data);
				  $this->load->view('navbar');
					$this->load->view('inmuebles/nuevo_inmueble');
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

// ****** Termina funcion nuevo_inmueble ******

// ****** Inicia funcion registro_inmueble******
 	public function registro_inmueble()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreInmueble', 'NombreInmueble', 'required');
		$this->form_validation->set_rules('DireccionInmueble', 'DireccionInmueble', 'required');
    
    
    $config['upload_path'] = './images/inmuebles/';
  	$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
    $config['max_width'] = '2024';
    $config['max_height'] = '2008';
		
		 if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{
		
			$data['NombreInmueble']= $this->input->post('NombreInmueble');
      $data['DireccionInmueble']= $this->input->post('DireccionInmueble');
      $data['IdCliente']= $this->input->post('IdCliente');
      $result_inmueble_existente=$this->inmuebles_model->inmueble_existente($data);
      
      if($result_inmueble_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
      	//registrar el inmueble en la base de datos
        $result_registro_inmueble=$this->inmuebles_model->registro_inmueble($data);
        //buscar el inmueble recien ingresaro para buscar el ID que se genero automaticamente
        $result_inmueble=$this->inmuebles_model->inmueble_existente($data);
        
        //pasar el resultado a un arreglo
       	$datainmueble = array(
          'IdInmueble' =>$result_inmueble[0]->IdInmueble,          
        );
        $config['file_name'] =$datainmueble['IdInmueble'];
        $this->load->library('upload', $config);
	
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('inmuebles/nuevo_inmueble');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/inmuebles/'.$datainmueble['IdInmueble'].'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}
        
      }
		}
		
	
  }
// ****** Termina funcion registro_inmueble ******

// ****** Inicia funcion editar_inmueble******
	public function editar_inmueble($inmueble)
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
      	if($permiso->NombreModulo=="inmuebles")
      	{
		    	$Inmueble = $this->inmuebles_model->ver_inmueble($inmueble);
		    	$data['inmueble'] = array(
		        'IdInmueble' =>$Inmueble[0]->IdInmueble,
		        'IdCliente' =>$Inmueble[0]->IdCliente,
		        'NombreCliente' =>$Inmueble[0]->NombreCliente,
		        'NombreInmueble' =>$Inmueble[0]->NombreInmueble,
		        'DireccionInmueble' =>$Inmueble[0]->DireccionInmueble,
		      );
		      
		      
       		$data['clientes'] = $this->clientes_model->todos_clientes(); 
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('inmuebles/editar_inmueble');
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

// ****** Termina funcion editar_inmueble ******

// ****** Inicia funcion guardar_cambios_inmueble ******
 	public function guardar_cambios_inmueble()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreInmueble', 'NombreInmueble', 'required');
		$this->form_validation->set_rules('DireccionInmueble', 'DireccionInmueble', 'required');
		
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 
		}
		else
		{

      $data['IdInmueble']= $this->input->post('IdInmueble');
     	$data['NombreInmueble']= $this->input->post('NombreInmueble');
      $data['DireccionInmueble']= $this->input->post('DireccionInmueble');
      $data['IdCliente']= $this->input->post('IdCliente');
      $result_inmueble_existente=$this->inmuebles_model->inmueble_existente($data);
			
      
      if($result_inmueble_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_editar_inmueble=$this->inmuebles_model->editar_inmueble($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }
      

		}
  }
// ****** Termina funcion guardar_cambios_inmueble ******

// ****** Inicia funcion guardar_cambios_inmueble_imagen ******
 	public function guardar_cambios_inmueble_imagen()
  {
    
		

    $data['IdInmueble']= $this->input->post('IdInmueble');
    $file = "./images/inmuebles/". $data['IdInmueble'].".jpg";
		$do = unlink($file);
    
    $config['upload_path'] = './images/inmuebles/';
  	$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
    $config['max_width'] = '2024';
    $config['max_height'] = '2008';
    $config['file_name'] =$data['IdInmueble'];
    $this->load->library('upload', $config);
    $nombreimg=$data['IdInmueble'];
   
    
    
    	if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('inmuebles/nuevo_inmueble');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/inmuebles/'.$nombreimg.'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}  
      
        
        
        
     
  }
// ****** Termina funcion guardar_cambios_inmueble_imagen ******


// ****** Inicia funcion eliminar_inmueble******
	public function eliminar_inmueble($inmueble_argumento)
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
      	if($permiso->NombreModulo=="inmuebles")
      	{
		    	
		    	$data['inmueble']=$inmueble_argumento;
		    	$this->load->view('inmuebles/alerta',$data);
					
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
      	if($permiso->NombreModulo=="inmuebles")
      	{
		    	
		    	$idinmueble= $this->input->post('IdInmueble');
		    	$Inmueble = $this->inmuebles_model->eliminar_inmueble($idinmueble);
		    	
		    	$file = "./images/inmuebles/".$idinmueble.".jpg";
					$do = unlink($file);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('inmuebles/panel_control_inmueble', 'refresh');
					
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
