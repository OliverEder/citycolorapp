<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tabuladores extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
    $this->load->model('clientes_model');
    $this->load->model('inmuebles_model');
    $this->load->model('areas_model'); 
    $this->load->model('focos_model');
    $this->load->model('tabuladores_model');
  }

// ****** Inicia funcion ver_tabulador_inmueble******
   public function ver_tabuladores_inmueble($inmueble)
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

        
        $result_tabulador=$this->tabuladores_model->inmuebles_panel($inmueble);
		    $data['tabuladores']=$result_tabulador;
        $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
        $data['permisos'] = $session_data['permisos'];
        //carga vistas, enviando el arreglo data como parametro.
        $this->load->view('header',$data);
        $this->load->view('navbar');
        $this->load->view('tabuladores/panel_tabuladores_cliente');
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
// ****** Termina funcion ver_tabulador_inmueble ******


// ****** Inicia funcion ver_tabulador_cliente ******
   public function ver_tabulador_cliente($tabulador)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
     	$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      
      $Tabulador = $this->tabuladores_model->ver_tabulador($tabulador);
    	$data['tabulador'] = array(
		        'IdTabulador' =>$Tabulador[0]->IdTabulador,
		        'IdInmueble' =>$Tabulador[0]->IdInmueble,
		        'NombreInmueble' =>$Tabulador[0]->NombreInmueble,
		        'ServiciosTabulador' =>$Tabulador[0]->ServiciosTabulador,
		        'ClaveTabulador' =>$Tabulador[0]->ClaveTabulador,
		        'DescripcionTabulador' =>$Tabulador[0]->DescripcionTabulador,
		       	'UnidadTabulador' =>$Tabulador[0]->UnidadTabulador,
		       	'PrecioUnitarioTabulador' =>$Tabulador[0]->PrecioUnitarioTabulador,
		       	);
		  //carga vistas, enviando el arreglo data como parametro.
		  $this->load->view('header',$data);
		  $this->load->view('navbar');
			$this->load->view('tabuladores/ver_tabulador_cliente');
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
// ****** Termina funcion ver_tabulador_cliente ******

// ****** Inicia funcion panel_control_tabulador******
	public function panel_control_tabulador()
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
      	if($permiso->NombreModulo=="tabuladores")
      	{
		    	$data['tabuladores'] = $this->tabuladores_model->todos_tabuladores();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('tabuladores/panel_control_tabuladores');
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

// ****** Inicia funcion ver_tabulador ******
	public function ver_tabulador_panel($tabulador)
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
      	if($permiso->NombreModulo=="tabuladores")
      	{
		    	$Tabulador = $this->tabuladores_model->ver_tabulador($tabulador);
		    	$data['tabulador'] = array(
		        'IdTabulador' =>$Tabulador[0]->IdTabulador,
		        'IdInmueble' =>$Tabulador[0]->IdInmueble,
		        'NombreInmueble' =>$Tabulador[0]->NombreInmueble,
		        'ServiciosTabulador' =>$Tabulador[0]->ServiciosTabulador,
		        'ClaveTabulador' =>$Tabulador[0]->ClaveTabulador,
		        'DescripcionTabulador' =>$Tabulador[0]->DescripcionTabulador,
		       	'UnidadTabulador' =>$Tabulador[0]->UnidadTabulador,
		       	'CantidadTabulador' =>$Tabulador[0]->CantidadTabulador,
		       	'PrecioUnitarioTabulador' =>$Tabulador[0]->PrecioUnitarioTabulador,
		      );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('tabuladores/ver_tabulador');
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

// ****** Termina funcion ver_tabulador******

// ****** Inicia funcion nuevo_tabulador *****
	public function nuevo_tabulador()
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
      	if($permiso->NombreModulo=="tabuladores")
      	{
		    	$data['inmuebles'] = $this->inmuebles_model->todos_inmuebles();
		    		
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header', $data);
				  $this->load->view('navbar');
					$this->load->view('tabuladores/nuevo_tabulador');
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

// ****** Termina funcion nuevo_tabulador ******

// ****** Inicia funcion registro_tabulador******
 	public function registro_tabulador()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ServiciosTabulador', 'ServiciosTabulador', 'required');
    $this->form_validation->set_rules('ClaveTabulador', 'ClaveTabulador', 'required');
    $this->form_validation->set_rules('UnidadTabulador', 'UnidadTabulador', 'required');
    $this->form_validation->set_rules('DescripcionTabulador', 'DescripcionTabulador', 'required');
    $this->form_validation->set_rules('PrecioUnitarioTabulador', 'PrecioUnitarioTabulador', 'required');
   		   
		
		if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{
		
			$data['ServiciosTabulador']= $this->input->post('ServiciosTabulador');
			$data['ClaveTabulador']= $this->input->post('ClaveTabulador');
			$data['UnidadTabulador']= $this->input->post('UnidadTabulador');
			$data['PrecioUnitarioTabulador']= $this->input->post('PrecioUnitarioTabulador');
			$data['DescripcionTabulador']= $this->input->post('DescripcionTabulador');
			$data['IdInmueble']= $this->input->post('IdInmueble');
      /*
      $result_tabulador_existente=$this->tabuladores_model->tabulador_existente($data);
      
      if($result_tabulador_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
      	//registrar el area en la base de datos
        $result_registro_tabulador=$this->tabuladores_model->registro_tabulador($data);
        echo 'si';
				return FALSE;
         			
        
      }
      */
      $result_registro_tabulador=$this->tabuladores_model->registro_tabulador($data);
      echo 'si';
			return FALSE;
      
		}
		
	
  }
// ****** Termina funcion registro_tabulador ******

// ****** Inicia funcion editar_area******
	public function editar_tabulador($tabulador)
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
      	if($permiso->NombreModulo=="tabuladores")
      	{
		    	$Tabulador = $this->tabuladores_model->ver_tabulador($tabulador);
		    	$data['tabulador'] = array(
		       'IdTabulador' =>$Tabulador[0]->IdTabulador,
		        'IdInmueble' =>$Tabulador[0]->IdInmueble,
		        'NombreInmueble' =>$Tabulador[0]->NombreInmueble,
		        'ServiciosTabulador' =>$Tabulador[0]->ServiciosTabulador,
		        'ClaveTabulador' =>$Tabulador[0]->ClaveTabulador,
		        'DescripcionTabulador' =>$Tabulador[0]->DescripcionTabulador,
		       	'UnidadTabulador' =>$Tabulador[0]->UnidadTabulador,
		       	'PrecioUnitarioTabulador' =>$Tabulador[0]->PrecioUnitarioTabulador,
		      );
		      
		      
       		$data['inmuebles'] = $this->inmuebles_model->todos_inmuebles();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('tabuladores/editar_tabulador');
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

// ****** Termina funcion editar_tabulador ******

// ****** Inicia funcion guardar_cambios_tabulador ******
 	public function guardar_cambios_tabulador()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ServiciosTabulador', 'ServiciosTabulador', 'required');
    $this->form_validation->set_rules('ClaveTabulador', 'ClaveTabulador', 'required');
    $this->form_validation->set_rules('UnidadTabulador', 'UnidadTabulador', 'required');
    $this->form_validation->set_rules('DescripcionTabulador', 'DescripcionTabulador', 'required');
    $this->form_validation->set_rules('PrecioUnitarioTabulador', 'PrecioUnitarioTabulador', 'required');
		
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 
		}
		else
		{

      $data['IdTabulador']= $this->input->post('IdTabulador');
     	$data['ServiciosTabulador']= $this->input->post('ServiciosTabulador');
			$data['ClaveTabulador']= $this->input->post('ClaveTabulador');
			$data['UnidadTabulador']= $this->input->post('UnidadTabulador');
			$data['PrecioUnitarioTabulador']= $this->input->post('PrecioUnitarioTabulador');
			$data['DescripcionTabulador']= $this->input->post('DescripcionTabulador');
			$data['IdInmueble']= $this->input->post('IdInmueble');
      /*
      $result_tabulador_existente=$this->tabuladores_model->tabulador_existente($data);
			
      
      if($result_tabulador_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_editar_tabulador=$this->tabuladores_model->editar_tabulador($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }
      */
      $result_editar_tabulador=$this->tabuladores_model->editar_tabulador($data);
      //redirect('principal', 'refresh');
			echo 'si';
			return FALSE;
      

		}
  }
// ****** Termina funcion guardar_cambios_tabulador ******

// ****** Inicia funcion guardar_cambios_imagen_antes ******
 	public function guardar_cambios_imagen_antes()
  {
    
		

    $data['IdTabulador']= $this->input->post('IdTabulador');
    $file = "./images/tabuladores/". $data['IdTabulador'].".jpg";
		
		if(file_exists($file))
		{
			$do = unlink($file);
			
		}
		
    
    $config['upload_path'] = './images/tabuladores/';
  	$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
    $config['max_width'] = '2024';
    $config['max_height'] = '2008';
    $config['file_name'] =$data['IdTabulador'];
    $this->load->library('upload', $config);
    $nombreimg=$data['IdTabulador'];
   
    
    
    	if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('tabuladores/nuevo_tabulador');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/tabuladores/'.$nombreimg.'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}  
      
        
        
        
     
  }
// ****** Termina funcion guardar_cambios_imagen_antes ******



// ****** Inicia funcion eliminar_area******
	public function eliminar_tabulador($tabulador_argumento)
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
      	if($permiso->NombreModulo=="tabuladores")
      	{
		    	
		    	$data['tabulador']=$tabulador_argumento;
		    	$this->load->view('tabuladores/alerta',$data);
					
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
      	if($permiso->NombreModulo=="tabuladores")
      	{
		    	
		    	$idtabulador= $this->input->post('IdTabulador');
		    	$Tabulador = $this->tabuladores_model->eliminar_tabulador($idtabulador);
		    	
		    	$fileAntes = "./images/tabuladores/".$idtabulador.".jpg";
					
					
		    	if(file_exists($fileAntes))
					{
						$doAntes = unlink($fileAntes);
			
					}
		    	
		    	
		    	
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('tabuladores/panel_control_tabulador', 'refresh');
					
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
