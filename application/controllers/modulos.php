<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modulos extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
  }




// ****** Inicia funcion panel_control_modulo ******
	public function panel_control_modulo()
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
      	if($permiso->NombreModulo=='modulos')
      	{
		    	$data['modulos'] = $this->modulos_model->todos_modulos();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('modulos/panel_control_modulos');
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

// ****** Termina funcion panel_control_modulo ******

// ****** Inicia funcion ver_modulo ******
	public function ver_modulo($modulo)
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
      	if($permiso->NombreModulo=="modulos")
      	{
		    	$Modulo = $this->modulos_model->ver_modulo($modulo);
		    	$data['modulo'] = array(
		        'IdModulo' =>$Modulo[0]->IdModulo,
		        'NombreModulo' =>$Modulo[0]->NombreModulo,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('modulos/ver_modulo');
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

// ****** Termina funcion ver_modulo ******

// ****** Inicia funcion editar_modulo ******
	public function editar_modulo($modulo)
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
      	if($permiso->NombreModulo=="modulos")
      	{
		    	$Modulo = $this->modulos_model->ver_modulo($modulo);
		    	$data['modulo'] = array(
		        'IdModulo' =>$Modulo[0]->IdModulo,
		        'NombreModulo' =>$Modulo[0]->NombreModulo,
		      );
       		
       		//carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('modulos/editar_modulo');
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

// ****** Termina funcion editar_modulo******

// ****** Inicia funcion registro_modulo******
 	public function guardar_cambios_modulo()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreModulo','NombreModulo', 'required');
				
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdModulo']= $this->input->post('IdModulo');
      $data['NombreModulo']= $this->input->post('NombreModulo');
      
      $result_modulo_existente=$this->modulos_model->modulo_existente($data);

      if($result_modulo_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_editar_modulo=$this->modulos_model->editar_modulo($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }

		}
  }
// ****** Termina funcion registro_Modulo ******

// ****** Inicia funcion nuevo_Modulo ******
	public function nuevo_modulo()
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
      	if($permiso->NombreModulo=="modulos")
      	{
		    	
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('modulos/nuevo_modulo');
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

// ****** Termina funcion nuevo_rango ******

// ****** Inicia funcion registro_modulo******
 	public function registro_modulo()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreModulo','NombreModulo', 'required');
			
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['NombreModulo']= $this->input->post('NombreModulo');
      
      $result_modulo_existente=$this->modulos_model->modulo_existente($data);

      if($result_modulo_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_registro_modulo=$this->modulos_model->registro_modulo($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }
     

		}
  }
// ****** Termina funcion registro_modulo ******



// ****** Inicia funcion eliminar_modulo ******
	public function eliminar_modulo($modulo)
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
      	if($permiso->NombreModulo=="modulos")
      	{
		    	
		    	$data['modulo']=$modulo;
		    	$this->load->view('modulos/alerta',$data);
					
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

// ****** Termina funcion eliminar_usuario ******


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
      	if($permiso->NombreModulo=="modulos")
      	{
		    	
		    	$modulo= $this->input->post('IdModulo');
		    	$Modulo = $this->modulos_model->eliminar_modulo($modulo);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('modulos/panel_control_modulo', 'refresh');
					
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
