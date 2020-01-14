<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contenedores extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
		$this->load->model('areas_model'); 
		$this->load->model('contenedores_model');
  }


// ****** Inicia funcion ver_contenedor_cliente ******
   public function ver_contenedor_cliente($contenedor)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
     	$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      
      $Contenedor = $this->contenedores_model->ver_contenedor($contenedor);
    	$data['contenedor'] = array(
        'IdContenedor' =>$Contenedor[0]->IdContenedor,
        'IdArea' =>$Contenedor[0]->IdArea,
        'NombreContenedor' =>$Contenedor[0]->NombreContenedor,
        'TipoContenedor' =>$Contenedor[0]->TipoContenedor,
        'CapacidadContenedor' =>$Contenedor[0]->CapacidadContenedor,
        'EstadoContenedor' =>$Contenedor[0]->EstadoContenedor,
        'FlotadorContenedor' =>$Contenedor[0]->FlotadorContenedor,
        'PeriodicidadAsceoContenedor' =>$Contenedor[0]->PeriodicidadAsceoContenedor,
        'FechaUltimoAsceoContenedor' =>$Contenedor[0]->FechaUltimoAsceoContenedor,
        'DescripcionContenedor' =>$Contenedor[0]->DescripcionContenedor,
        );
		  //carga vistas, enviando el arreglo data como parametro.
		  $this->load->view('header',$data);
		  $this->load->view('navbar');
			$this->load->view('contenedores/ver_contenedor_cliente');
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
// ****** Termina funcion ver_contenedor_cliente ******

// ****** Inicia funcion panel_control_hidraulico ******
	public function panel_control_contenedor()
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
      	if($permiso->NombreModulo=='hidraulico')
      	{
		    	$data['contenedores'] = $this->contenedores_model->todos_contenedores();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('contenedores/panel_control_contenedor');
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

// ****** Termina funcion panel_control_hidraulico ******

// ****** Inicia funcion ver_contenedor ******
	public function ver_contenedor($contenedor)
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
      	if($permiso->NombreModulo=="hidraulico")
      	{
		    	$Contenedor = $this->contenedores_model->ver_contenedor($contenedor);
		    	$data['contenedor'] = array(
		        'IdContenedor' =>$Contenedor[0]->IdContenedor,
		        'IdArea' =>$Contenedor[0]->IdArea,
		        'NombreContenedor' =>$Contenedor[0]->NombreContenedor,
		        'TipoContenedor' =>$Contenedor[0]->TipoContenedor,
		        'CapacidadContenedor' =>$Contenedor[0]->CapacidadContenedor,
		        'EstadoContenedor' =>$Contenedor[0]->EstadoContenedor,
		        'FlotadorContenedor' =>$Contenedor[0]->FlotadorContenedor,
		        'PeriodicidadAsceoContenedor' =>$Contenedor[0]->PeriodicidadAsceoContenedor,
		        'FechaUltimoAsceoContenedor' =>$Contenedor[0]->FechaUltimoAsceoContenedor,
		        'DescripcionContenedor' =>$Contenedor[0]->DescripcionContenedor,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('contenedores/ver_contenedor');
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

// ****** Termina funcion ver_contenedor ******

// ****** Inicia funcion editar_contenedor ******
	public function editar_contenedor($contenedor)
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
      	if($permiso->NombreModulo=="hidraulico")
      	{
		    	$Contenedor = $this->contenedores_model->ver_contenedor($contenedor);
		    	$data['contenedor'] = array(
		        'IdContenedor' =>$Contenedor[0]->IdContenedor,
		        'IdArea' =>$Contenedor[0]->IdArea,
		        'NombreArea' =>$Contenedor[0]->NombreArea,
		        'NombreContenedor' =>$Contenedor[0]->NombreContenedor,
		        'TipoContenedor' =>$Contenedor[0]->TipoContenedor,
		        'CapacidadContenedor' =>$Contenedor[0]->CapacidadContenedor,
		        'EstadoContenedor' =>$Contenedor[0]->EstadoContenedor,
		        'FlotadorContenedor' =>$Contenedor[0]->FlotadorContenedor,
		        'PeriodicidadAsceoContenedor' =>$Contenedor[0]->PeriodicidadAsceoContenedor,
		        'FechaUltimoAsceoContenedor' =>$Contenedor[0]->FechaUltimoAsceoContenedor,
		        'DescripcionContenedor' =>$Contenedor[0]->DescripcionContenedor,
		        );
       		$data['areas'] = $this->areas_model->todos_areas();
       		//carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('contenedores/editar_contenedor');
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

// ****** Termina funcion editar_contenedor******

// ****** Inicia funcion guardar_cambios_contenedor******
 	public function guardar_cambios_contenedor()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreContenedor','NombreContenedor', 'required');
    $this->form_validation->set_rules('TipoContenedor','TipoContenedor', 'required');
    $this->form_validation->set_rules('CapacidadContenedor','CapacidadContenedor', 'required');
    $this->form_validation->set_rules('EstadoContenedor','EstadoContenedor', 'required');
    $this->form_validation->set_rules('FlotadorContenedor','FlotadorContenedor', 'required');
    $this->form_validation->set_rules('PeriodicidadAsceoContenedor','PeriodicidadAsceoContenedor', 'required');
    $this->form_validation->set_rules('FechaUltimoAsceoContenedor','FechaUltimoAsceoContenedor', 'required');
    $this->form_validation->set_rules('DescripcionContenedor','DescripcionContenedor', 'required');
    $this->form_validation->set_rules('FlotadorContenedor','FlotadorContenedor', 'required');
				
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdContenedor']= $this->input->post('IdContenedor');
      $data['NombreContenedor']= $this->input->post('NombreContenedor');
      $data['TipoContenedor']= $this->input->post('TipoContenedor');
      $data['CapacidadContenedor']= $this->input->post('CapacidadContenedor');
      $data['EstadoContenedor']= $this->input->post('EstadoContenedor');
      $data['FlotadorContenedor']= $this->input->post('FlotadorContenedor');
      $data['PeriodicidadAsceoContenedor']= $this->input->post('PeriodicidadAsceoContenedor');
      //$data['FechaUltimoAsceoContenedor']= $this->input->post('FechaUltimoAsceoContenedor');
      $data['DescripcionContenedor']= $this->input->post('DescripcionContenedor');
      $data['IdArea']= $this->input->post('IdArea');  
      
      $this->load->helper('date');
      
      $fechaultimoasceocontenedor  = explode('/',$this->input->post('FechaUltimoAsceoContenedor')); 
      $day = $fechaultimoasceocontenedor[1];
      $month = $fechaultimoasceocontenedor[0];
     	$year = $fechaultimoasceocontenedor[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoAsceoContenedor']=$datestring;
         
        $result_editar_contenedor=$this->contenedores_model->editar_contenedor($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
     

		}
  }
// ****** Termina funcion guardar_cambios_contenedor ******

// ****** Inicia funcion nuevo_contenedor ******
	public function nuevo_contenedor()
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
      	if($permiso->NombreModulo=="hidraulico")
      	{
		    	$data['areas'] = $this->areas_model->todos_areas();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('contenedores/nuevo_contenedor');
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

// ****** Termina funcion nuevo_contenedor ******

// ****** Inicia funcion registro_contenedor  ******
 	public function registro_contenedor()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreContenedor','NombreContenedor', 'required');
    $this->form_validation->set_rules('TipoContenedor','TipoContenedor', 'required');
    $this->form_validation->set_rules('CapacidadContenedor','CapacidadContenedor', 'required');
    $this->form_validation->set_rules('EstadoContenedor','EstadoContenedor', 'required');
    $this->form_validation->set_rules('FlotadorContenedor','FlotadorContenedor', 'required');
    $this->form_validation->set_rules('PeriodicidadAsceoContenedor','PeriodicidadAsceoContenedor', 'required');
    $this->form_validation->set_rules('FechaUltimoAsceoContenedor','FechaUltimoAsceoContenedor', 'required');
    $this->form_validation->set_rules('DescripcionContenedor','DescripcionContenedor', 'required');
    $this->form_validation->set_rules('FlotadorContenedor','FlotadorContenedor', 'required');
			
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 echo 'no';
		}
		else
		{

      $data['NombreContenedor']= $this->input->post('NombreContenedor');
      $data['TipoContenedor']= $this->input->post('TipoContenedor');
      $data['CapacidadContenedor']= $this->input->post('CapacidadContenedor');
      $data['EstadoContenedor']= $this->input->post('EstadoContenedor');
      $data['FlotadorContenedor']= $this->input->post('FlotadorContenedor');
      $data['PeriodicidadAsceoContenedor']= $this->input->post('PeriodicidadAsceoContenedor');
      $data['DescripcionContenedor']= $this->input->post('DescripcionContenedor');
      $data['IdArea']= $this->input->post('IdArea');
      
      $this->load->helper('date');
      
      $fechaultimoasceocontenedor  = explode('/',$this->input->post('FechaUltimoAsceoContenedor')); 
      $day = $fechaultimoasceocontenedor[1];
      $month = $fechaultimoasceocontenedor[0];
     	$year = $fechaultimoasceocontenedor[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoAsceoContenedor']=$datestring;
      
      
      
      $result_registro_contenedor=$this->contenedores_model->registro_contenedor($data);
      //redirect('principal', 'refresh');
			echo 'si';
			return FALSE;
     
		}
  }
// ****** Termina funcion registro_contenedor ******



// ****** Inicia funcion eliminar_contenedor******
	public function eliminar_contenedor($contenedor)
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
      	if($permiso->NombreModulo=="hidraulico")
      	{
		    	
		    	$data['contenedor']=$contenedor;
		    	$this->load->view('contenedores/alerta',$data);
					
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

// ****** Termina funcion eliminar_contenedor ******


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
      	if($permiso->NombreModulo=="hidraulico")
      	{
		    	
		    	$contenedor= $this->input->post('IdContenedor');
		    	$Contenedor = $this->contenedores_model->eliminar_contenedor($contenedor);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('contenedores/panel_control_contenedor', 'refresh');
					
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
