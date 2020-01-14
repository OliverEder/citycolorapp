<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Llaves extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
		$this->load->model('areas_model'); 
		$this->load->model('llaves_model');
  }


// ****** Inicia funcion ver_llave_cliente ******
   public function ver_llave_cliente($llave)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
     	$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      
      $Llave = $this->llaves_model->ver_llave($llave);
    	$data['llave'] = array(
        'IdLlave' =>$Llave[0]->IdLlave,
        'IdArea' =>$Llave[0]->IdArea,
        'NombreLlave' =>$Llave[0]->NombreLlave,
        'TipoLlave' =>$Llave[0]->TipoLlave,
        'EstadoLlave' =>$Llave[0]->EstadoLlave,
        'FechaUltimoMantoLlave' =>$Llave[0]->FechaUltimoMantoLlave,
        'DescripcionLlave' =>$Llave[0]->DescripcionLlave,
        );
		  //carga vistas, enviando el arreglo data como parametro.
		  $this->load->view('header',$data);
		  $this->load->view('navbar');
			$this->load->view('llaves/ver_llave_cliente');
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
// ****** Termina funcion ver_llave_cliente ******

// ****** Inicia funcion panel_control_llave ******
	public function panel_control_llave()
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
		    	$data['llaves'] = $this->llaves_model->todos_llaves();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('llaves/panel_control_llave');
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

// ****** Termina funcion panel_control_llave ******

// ****** Inicia funcion ver_llave ******
	public function ver_llave($llave)
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
		    	$Llave = $this->llaves_model->ver_llave($llave);
		    	$data['llave'] = array(
		        'IdLlave' =>$Llave[0]->IdLlave,
		        'IdArea' =>$Llave[0]->IdArea,
		        'NombreLlave' =>$Llave[0]->NombreLlave,
		        'TipoLlave' =>$Llave[0]->TipoLlave,
		        'EstadoLlave' =>$Llave[0]->EstadoLlave,
		        'FechaUltimoMantoLlave' =>$Llave[0]->FechaUltimoMantoLlave,
		        'DescripcionLlave' =>$Llave[0]->DescripcionLlave,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('llaves/ver_llave');
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

// ****** Termina funcion ver_llave ******

// ****** Inicia funcion editar_llave ******
	public function editar_llave($llave)
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
		    	$Llave = $this->llaves_model->ver_llave($llave);
		    	$data['llave'] = array(
		        'IdLlave' =>$Llave[0]->IdLlave,
		        'IdArea' =>$Llave[0]->IdArea,
		        'NombreArea' =>$Llave[0]->NombreArea,
		        'NombreLlave' =>$Llave[0]->NombreLlave,
		        'TipoLlave' =>$Llave[0]->TipoLlave,
		        'EstadoLlave' =>$Llave[0]->EstadoLlave,
		        'FechaUltimoMantoLlave' =>$Llave[0]->FechaUltimoMantoLlave,
		        'DescripcionLlave' =>$Llave[0]->DescripcionLlave,
		        );
       		$data['areas'] = $this->areas_model->todos_areas();
       		//carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('llaves/editar_llave');
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

// ****** Termina funcion editar_llave******

// ****** Inicia funcion guardar_cambios_llave******
 	public function guardar_cambios_llave()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreLlave','NombreLlave', 'required');
    $this->form_validation->set_rules('TipoLlave','TipoLlave', 'required');
    $this->form_validation->set_rules('EstadoLlave','EstadoLlave', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoLlave','FechaUltimoMantoLlave', 'required');
    $this->form_validation->set_rules('DescripcionLlave','DescripcionLlave', 'required');
   
				
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdLlave']= $this->input->post('IdLlave');
      $data['NombreLlave']= $this->input->post('NombreLlave');
      $data['TipoLlave']= $this->input->post('TipoLlave');
      $data['EstadoLlave']= $this->input->post('EstadoLlave');
     //$data['FechaUltimoAsceoLlave']= $this->input->post('FechaUltimoAsceoLlave');
      $data['DescripcionLlave']= $this->input->post('DescripcionLlave');
      $data['IdArea']= $this->input->post('IdArea');  
      
      $this->load->helper('date');
      
      $fechaultimomantollave  = explode('/',$this->input->post('FechaUltimoMantoLlave')); 
      $day = $fechaultimomantollave[1];
      $month = $fechaultimomantollave[0];
     	$year = $fechaultimomantollave[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoLlave']=$datestring;
         
        $result_editar_llave=$this->llaves_model->editar_llave($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
     

		}
  }
// ****** Termina funcion guardar_cambios_llave ******

// ****** Inicia funcion nuevo_llave ******
	public function nuevo_llave()
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
					$this->load->view('llaves/nuevo_llave');
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

// ****** Termina funcion nuevo_llave ******

// ****** Inicia funcion registro_llave  ******
 	public function registro_llave()
  {
    $this->load->library('form_validation');
   	$this->form_validation->set_rules('NombreLlave','NombreLlave', 'required');
    $this->form_validation->set_rules('TipoLlave','TipoLlave', 'required');
    $this->form_validation->set_rules('EstadoLlave','EstadoLlave', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoLlave','FechaUltimoMantoLlave', 'required');
    $this->form_validation->set_rules('DescripcionLlave','DescripcionLlave', 'required');
			
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 echo 'no';
		}
		else
		{

 
      $data['NombreLlave']= $this->input->post('NombreLlave');
      $data['TipoLlave']= $this->input->post('TipoLlave');
      $data['EstadoLlave']= $this->input->post('EstadoLlave');
      $data['DescripcionLlave']= $this->input->post('DescripcionLlave');
      $data['IdArea']= $this->input->post('IdArea');
      
      $this->load->helper('date');
            
      $fechaultimomantollave  = explode('/',$this->input->post('FechaUltimoMantoLlave')); 
      $day = $fechaultimomantollave[1];
      $month = $fechaultimomantollave[0];
     	$year = $fechaultimomantollave[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoLlave']=$datestring;
      
      
      
      $result_registro_llave=$this->llaves_model->registro_llave($data);
      //redirect('principal', 'refresh');
			echo 'si';
			return FALSE;
     
		}
  }
// ****** Termina funcion registro_llave ******



// ****** Inicia funcion eliminar_llave******
	public function eliminar_llave($llave)
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
		    	
		    	$data['llave']=$llave;
		    	$this->load->view('llaves/alerta',$data);
					
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

// ****** Termina funcion eliminar_llave ******


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
		    	
		    	$llave= $this->input->post('IdLlave');
		    	$Llave = $this->llaves_model->eliminar_llave($llave);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('llaves/panel_control_llave', 'refresh');
					
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
