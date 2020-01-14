<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hidraulico extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
		$this->load->model('areas_model'); 
		$this->load->model('hidraulico_model');
  }

// ****** Inicia funcion ver_hidraulico_cliente ******
   public function ver_hidraulico_cliente($hidraulico)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
     	$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      
      $Hidraulico = $this->hidraulico_model->ver_hidraulico($hidraulico);
		    	$data['hidraulico'] = array(
		        'IdHidraulico' =>$Hidraulico[0]->IdHidraulico,
		        'IdArea' =>$Hidraulico[0]->IdArea,
		        'NombreArea' =>$Hidraulico[0]->NombreArea,
		        'NombreHidraulico' =>$Hidraulico[0]->NombreHidraulico,
		        'UnidadHidraulico' =>$Hidraulico[0]->UnidadHidraulico,
		        'CantidadHidraulico' =>$Hidraulico[0]->CantidadHidraulico,
		        'FechaUltimoMantoHidraulico' =>$Hidraulico[0]->FechaUltimoMantoHidraulico,
		        'PeriodicidadMantoHidraulico' =>$Hidraulico[0]->PeriodicidadMantoHidraulico,
		        'DescripcionHidraulico' =>$Hidraulico[0]->DescripcionHidraulico,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('hidraulico/ver_hidraulico_cliente');
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
// ****** Termina funcion ver_hidraulico_cliente ******



// ****** Inicia funcion panel_control_hidraulico ******
	public function panel_control_hidraulico()
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
		    	$data['hidraulico'] = $this->hidraulico_model->todos_hidraulico();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('hidraulico/panel_control_hidraulico');
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

// ****** Inicia funcion ver_hidraulico ******
	public function ver_hidraulico($hidraulico)
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
		    	$Hidraulico = $this->hidraulico_model->ver_hidraulico($hidraulico);
		    	$data['hidraulico'] = array(
		        'IdHidraulico' =>$Hidraulico[0]->IdHidraulico,
		        'IdArea' =>$Hidraulico[0]->IdArea,
		        'NombreArea' =>$Hidraulico[0]->NombreArea,
		        'NombreHidraulico' =>$Hidraulico[0]->NombreHidraulico,
		        'UnidadHidraulico' =>$Hidraulico[0]->UnidadHidraulico,
		        'CantidadHidraulico' =>$Hidraulico[0]->CantidadHidraulico,
		        'FechaUltimoMantoHidraulico' =>$Hidraulico[0]->FechaUltimoMantoHidraulico,
		        'PeriodicidadMantoHidraulico' =>$Hidraulico[0]->PeriodicidadMantoHidraulico,
		        'DescripcionHidraulico' =>$Hidraulico[0]->DescripcionHidraulico,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('hidraulico/ver_hidraulico');
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

// ****** Termina funcion ver_hidraulico ******

// ****** Inicia funcion editar_hidraulico ******
	public function editar_hidraulico($hidraulico)
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
		    	$Hidraulico = $this->hidraulico_model->ver_hidraulico($hidraulico);
		    	$data['hidraulico'] = array(
		        'IdHidraulico' =>$Hidraulico[0]->IdHidraulico,
		        'IdArea' =>$Hidraulico[0]->IdArea,
		        'NombreArea' =>$Hidraulico[0]->NombreArea,
		        'NombreHidraulico' =>$Hidraulico[0]->NombreHidraulico,
		        'UnidadHidraulico' =>$Hidraulico[0]->UnidadHidraulico,
		        'CantidadHidraulico' =>$Hidraulico[0]->CantidadHidraulico,
		        'FechaUltimoMantoHidraulico' =>$Hidraulico[0]->FechaUltimoMantoHidraulico,
		        'PeriodicidadMantoHidraulico' =>$Hidraulico[0]->PeriodicidadMantoHidraulico,
		        'DescripcionHidraulico' =>$Hidraulico[0]->DescripcionHidraulico,
		        );
       		$data['areas'] = $this->areas_model->todos_areas();
       		//carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('hidraulico/editar_hidraulico');
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

// ****** Termina funcion editar_hidraulico******

// ****** Inicia funcion guardar_cambios_hidraulico******
 	public function guardar_cambios_hidraulico()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreHidraulico','NombreHidraulico', 'required');
    $this->form_validation->set_rules('CantidadHidraulico','CantidadHidraulico', 'required');
    $this->form_validation->set_rules('UnidadHidraulico','UnidadHidraulico', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoHidraulico','FechaUltimoMantoHidraulico', 'required');
    $this->form_validation->set_rules('PeriodicidadMantoHidraulico','PeriodicidadMantoHidraulico', 'required');
    $this->form_validation->set_rules('DescripcionHidraulico','DescripcionHidraulico', 'required');
   
				
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdHidraulico']= $this->input->post('IdHidraulico');
      $data['NombreHidraulico']= $this->input->post('NombreHidraulico');
      $data['CantidadHidraulico']= $this->input->post('CantidadHidraulico');
      $data['UnidadHidraulico']= $this->input->post('UnidadHidraulico');
    	$data['PeriodicidadMantoHidraulico']= $this->input->post('PeriodicidadMantoHidraulico');
      $data['DescripcionHidraulico']= $this->input->post('DescripcionHidraulico');
      $data['IdArea']= $this->input->post('IdArea');  
      
      $this->load->helper('date');
      
      $fechaultimomantohidraulico  = explode('/',$this->input->post('FechaUltimoMantoHidraulico')); 
      $day = $fechaultimomantohidraulico[1];
      $month = $fechaultimomantohidraulico[0];
     	$year = $fechaultimomantohidraulico[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoHidraulico']=$datestring;
         
        $result_editar_hidraulico=$this->hidraulico_model->editar_hidraulico($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
     

		}
  }
// ****** Termina funcion guardar_cambios_hidraulico ******

// ****** Inicia funcion nuevo_hidraulico ******
	public function nuevo_hidraulico()
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
					$this->load->view('hidraulico/nuevo_hidraulico');
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

// ****** Termina funcion nuevo_hidraulico ******

// ****** Inicia funcion registro_hidraulico  ******
 	public function registro_hidraulico()
  {
    $this->load->library('form_validation');
   	$this->form_validation->set_rules('NombreHidraulico','NombreHidraulico', 'required');
    $this->form_validation->set_rules('CantidadHidraulico','CantidadHidraulico', 'required');
    $this->form_validation->set_rules('UnidadHidraulico','UnidadHidraulico', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoHidraulico','FechaUltimoMantoHidraulico', 'required');
    $this->form_validation->set_rules('PeriodicidadMantoHidraulico','PeriodicidadMantoHidraulico', 'required');
    $this->form_validation->set_rules('DescripcionHidraulico','DescripcionHidraulico', 'required');
			
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 echo 'no';
		}
		else
		{

 
      $data['IdHidraulico']= $this->input->post('IdHidraulico');
      $data['NombreHidraulico']= $this->input->post('NombreHidraulico');
      $data['CantidadHidraulico']= $this->input->post('CantidadHidraulico');
      $data['UnidadHidraulico']= $this->input->post('UnidadHidraulico');
    	$data['PeriodicidadMantoHidraulico']= $this->input->post('PeriodicidadMantoHidraulico');
      $data['DescripcionHidraulico']= $this->input->post('DescripcionHidraulico');
      $data['IdArea']= $this->input->post('IdArea');  
      
      $this->load->helper('date');
            
      $fechaultimomantohidraulico  = explode('/',$this->input->post('FechaUltimoMantoHidraulico')); 
      $day = $fechaultimomantohidraulico[1];
      $month = $fechaultimomantohidraulico[0];
     	$year = $fechaultimomantohidraulico[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoHidraulico']=$datestring;
      
      
      
      $result_registro_hidraulico=$this->hidraulico_model->registro_hidraulico($data);
      //redirect('principal', 'refresh');
			echo 'si';
			return FALSE;
     
		}
  }
// ****** Termina funcion registro_hidraulico ******



// ****** Inicia funcion eliminar_hidraulico******
	public function eliminar_hidraulico($hidraulico)
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
		    	
		    	$data['hidraulico']=$hidraulico;
		    	$this->load->view('hidraulico/alerta',$data);
					
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

// ****** Termina funcion eliminar_hidraulico ******


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
		    	
		    	$hidraulico= $this->input->post('IdHidraulico');
		    	$Hidraulico = $this->hidraulico_model->eliminar_hidraulico($hidraulico);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('hidraulico/panel_control_hidraulico', 'refresh');
					
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
