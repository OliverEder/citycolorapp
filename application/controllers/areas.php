<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Areas extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
    $this->load->model('clientes_model');
    $this->load->model('inmuebles_model');
    $this->load->model('areas_model'); 
    $this->load->model('electrico_model');
    $this->load->model('hidraulico_model');
    $this->load->model('fisico_model');
  }


// ****** Inicia funcion areas ******
   public function ver_area($area)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $result_area=$this->areas_model->area($area);//Envia cliente a el modelo inmuebles para buscar la informacion de los inmuebles que correspondan al cliente.

      if($result_area)
      {
        $data = array(
          'IdArea' =>$result_area[0]->IdArea,
          'NombreArea' =>$result_area[0]->NombreArea,
          'IdInmueble' =>$result_area[0]->IdInmueble,
        );
			
			
			$result_electrico=$this->electrico_model->areas_panel($area);
			$result_hidraulico=$this->hidraulico_model->areas_panel($area);
			$result_fisico=$this->fisico_model->areas_panel($area);
			$data['electrico']=$result_electrico;  
			$data['hidraulico']=$result_hidraulico;  
			$data['fisico']=$result_fisico;
			$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
     //carga vistas, enviando el arreglo data como parametro.
     $this->load->view('header',$data);
     $this->load->view('navbar');
     $this->load->view('area');
     $this->load->view('footer');
       
        
      }
      else
      {
        //carga vistas, enviando el arreglo data como parametro.
        $this->load->view('header',$data);
        $this->load->view('navbar');
        $this->load->view('area');
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
// ****** Termina funcion areas ******

// ****** Inicia funcion panel_control_area******
	public function panel_control_area()
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
      	if($permiso->NombreModulo=="areas")
      	{
		    	$data['areas'] = $this->areas_model->todos_areas();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('areas/panel_control_areas');
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

// ****** Inicia funcion ver_area ******
	public function ver_area_panel($area)
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
      	if($permiso->NombreModulo=="areas")
      	{
		    	$Area = $this->areas_model->ver_area($area);
		    	$data['area'] = array(
		        'IdArea' =>$Area[0]->IdArea,
		        'IdInmueble' =>$Area[0]->IdInmueble,
		        'NombreInmueble' =>$Area[0]->NombreInmueble,
		        'NombreArea' =>$Area[0]->NombreArea,
		       
		      );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('areas/ver_area');
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

// ****** Termina funcion ver_area ******

// ****** Inicia funcion nuevo_area *****
	public function nuevo_area()
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
      	if($permiso->NombreModulo=="areas")
      	{
		    	$data['inmuebles'] = $this->inmuebles_model->todos_inmuebles();
		    		
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header', $data);
				  $this->load->view('navbar');
					$this->load->view('areas/nuevo_area');
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

// ****** Termina funcion nuevo_area ******

// ****** Inicia funcion registro_area******
 	public function registro_area()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreArea', 'NombreArea', 'required');
		    
    
    $config['upload_path'] = './images/areas/';
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
		
			$data['NombreArea']= $this->input->post('NombreArea');
      $data['IdInmueble']= $this->input->post('IdInmueble');
      $result_area_existente=$this->areas_model->area_existente($data);
      
      if($result_area_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
      	//registrar el area en la base de datos
        $result_registro_area=$this->areas_model->registro_area($data);
        //buscar el area recien ingresaro para buscar el ID que se genero automaticamente
        $result_area=$this->areas_model->area_existente($data);
        
        //pasar el resultado a un arreglo
       	$dataarea= array(
          'IdArea' =>$result_area[0]->IdArea,          
        );
        $config['file_name'] =$dataarea['IdArea'];
        $this->load->library('upload', $config);
	
				if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('areas/nuevo_area');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/areas/'.$dataarea['IdArea'].'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}
        
      }
		}
		
	
  }
// ****** Termina funcion registro_area ******

// ****** Inicia funcion editar_area******
	public function editar_area($area)
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
      	if($permiso->NombreModulo=="areas")
      	{
		    	$Area = $this->areas_model->ver_area($area);
		    	$data['area'] = array(
		        'IdArea' =>$Area[0]->IdArea,
		        'IdInmueble' =>$Area[0]->IdInmueble,
		        'NombreInmueble' =>$Area[0]->NombreInmueble,
		        'NombreArea' =>$Area[0]->NombreArea,
		       
		      );
		      
		      
       		$data['inmuebles'] = $this->inmuebles_model->todos_inmuebles();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('areas/editar_area');
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

// ****** Termina funcion editar_area ******

// ****** Inicia funcion guardar_cambios_area ******
 	public function guardar_cambios_area()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreArea', 'NombreArea', 'required');
		
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 
		}
		else
		{

      $data['IdArea']= $this->input->post('IdArea');
     	$data['NombreArea']= $this->input->post('NombreArea');
      $data['IdInmueble']= $this->input->post('IdInmueble');
      $result_area_existente=$this->areas_model->area_existente($data);
			
      
      if($result_area_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_editar_area=$this->areas_model->editar_area($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }
      

		}
  }
// ****** Termina funcion guardar_cambios_area ******

// ****** Inicia funcion guardar_cambios_area_imagen ******
 	public function guardar_cambios_area_imagen()
  {
    
		

    $data['IdArea']= $this->input->post('IdArea');
    $file = "./images/areas/". $data['IdArea'].".jpg";
		$do = unlink($file);
    
    $config['upload_path'] = './images/areas/';
  	$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
    $config['max_width'] = '2024';
    $config['max_height'] = '2008';
    $config['file_name'] =$data['IdArea'];
    $this->load->library('upload', $config);
    $nombreimg=$data['IdArea'];
   
    
    
    	if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('areas/nuevo_area');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/areas/'.$nombreimg.'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}  
      
        
        
        
     
  }
// ****** Termina funcion guardar_cambios_area_imagen ******

// ****** Inicia funcion eliminar_area******
	public function eliminar_area($area_argumento)
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
      	if($permiso->NombreModulo=="areas")
      	{
		    	
		    	$data['area']=$area_argumento;
		    	$this->load->view('areas/alerta',$data);
					
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
      	if($permiso->NombreModulo=="areas")
      	{
		    	
		    	$idarea= $this->input->post('IdArea');
		    	$Area = $this->areas_model->eliminar_area($idarea);
		    	
		    	$file = "./images/areas/".$idarea.".jpg";
					$do = unlink($file);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('areas/panel_control_area', 'refresh');
					
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
