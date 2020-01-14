<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fisico extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
		$this->load->model('areas_model'); 
		$this->load->model('fisico_model');
  }

// ****** Inicia funcion ver_fisico_cliente ******
   public function ver_fisico_cliente($fisico)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
     	$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      
      $Fisico = $this->fisico_model->ver_fisico($fisico);
		    	$data['fisico'] = array(
		        'IdFisico' =>$Fisico[0]->IdFisico,
		        'IdArea' =>$Fisico[0]->IdArea,
		        'NombreArea' =>$Fisico[0]->NombreArea,
		        'NombreFisico' =>$Fisico[0]->NombreFisico,
		        'UnidadFisico' =>$Fisico[0]->UnidadFisico,
		        'CantidadFisico' =>$Fisico[0]->CantidadFisico,
		        'FechaUltimoMantoFisico' =>$Fisico[0]->FechaUltimoMantoFisico,
		        'PeriodicidadMantoFisico' =>$Fisico[0]->PeriodicidadMantoFisico,
		        'DescripcionFisico' =>$Fisico[0]->DescripcionFisico,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('fisico/ver_fisico_cliente');
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
// ****** Termina funcion ver_fisico_cliente ******



// ****** Inicia funcion panel_control_fisico ******
	public function panel_control_fisico()
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
		    	$data['fisico'] = $this->fisico_model->todos_fisico();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('fisico/panel_control_fisico');
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

// ****** Termina funcion panel_control_fisico ******

// ****** Inicia funcion ver_fisico ******
	public function ver_fisico($fisico)
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
		    	$Fisico = $this->fisico_model->ver_fisico($fisico);
		    	$data['fisico'] = array(
		        'IdFisico' =>$Fisico[0]->IdFisico,
		        'IdArea' =>$Fisico[0]->IdArea,
		        'NombreArea' =>$Fisico[0]->NombreArea,
		        'NombreFisico' =>$Fisico[0]->NombreFisico,
		        'UnidadFisico' =>$Fisico[0]->UnidadFisico,
		        'CantidadFisico' =>$Fisico[0]->CantidadFisico,
		        'FechaUltimoMantoFisico' =>$Fisico[0]->FechaUltimoMantoFisico,
		        'PeriodicidadMantoFisico' =>$Fisico[0]->PeriodicidadMantoFisico,
		        'DescripcionFisico' =>$Fisico[0]->DescripcionFisico,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('fisico/ver_fisico');
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

// ****** Termina funcion ver_fisico ******

// ****** Inicia funcion editar_fisico ******
	public function editar_fisico($fisico)
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
		    	$Fisico = $this->fisico_model->ver_fisico($fisico);
		    	$data['fisico'] = array(
		        'IdFisico' =>$Fisico[0]->IdFisico,
		        'IdArea' =>$Fisico[0]->IdArea,
		        'NombreArea' =>$Fisico[0]->NombreArea,
		        'NombreFisico' =>$Fisico[0]->NombreFisico,
		        'UnidadFisico' =>$Fisico[0]->UnidadFisico,
		        'CantidadFisico' =>$Fisico[0]->CantidadFisico,
		        'FechaUltimoMantoFisico' =>$Fisico[0]->FechaUltimoMantoFisico,
		        'PeriodicidadMantoFisico' =>$Fisico[0]->PeriodicidadMantoFisico,
		        'DescripcionFisico' =>$Fisico[0]->DescripcionFisico,
		        );
       		$data['areas'] = $this->areas_model->todos_areas();
       		//carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('fisico/editar_fisico');
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

// ****** Termina funcion editar_fisico******

// ****** Inicia funcion guardar_cambios_fisico******
 	public function guardar_cambios_fisico()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreFisico','NombreFisico', 'required');
    $this->form_validation->set_rules('CantidadFisico','CantidadFisico', 'required');
    $this->form_validation->set_rules('UnidadFisico','UnidadFisico', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoFisico','FechaUltimoMantoFisico', 'required');
    $this->form_validation->set_rules('PeriodicidadMantoFisico','PeriodicidadMantoFisico', 'required');
    $this->form_validation->set_rules('DescripcionFisico','DescripcionFisico', 'required');
   
				
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdFisico']= $this->input->post('IdFisico');
      $data['NombreFisico']= $this->input->post('NombreFisico');
      $data['CantidadFisico']= $this->input->post('CantidadFisico');
      $data['UnidadFisico']= $this->input->post('UnidadFisico');
    	$data['PeriodicidadMantoFisico']= $this->input->post('PeriodicidadMantoFisico');
      $data['DescripcionFisico']= $this->input->post('DescripcionFisico');
      $data['IdArea']= $this->input->post('IdArea');  
      
      $this->load->helper('date');
      
      $fechaultimomantofisico  = explode('/',$this->input->post('FechaUltimoMantoFisico')); 
      $day = $fechaultimomantofisico[1];
      $month = $fechaultimomantofisico[0];
     	$year = $fechaultimomantofisico[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoFisico']=$datestring;
         
        $result_editar_fisico=$this->fisico_model->editar_fisico($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
     

		}
  }
// ****** Termina funcion guardar_cambios_fisico ******

// ****** Inicia funcion nuevo_fisico ******
	public function nuevo_fisico()
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
					$this->load->view('fisico/nuevo_fisico');
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

// ****** Termina funcion nuevo_fisico ******

// ****** Inicia funcion registro_fisico  ******
 	public function registro_fisico()
  {
    $this->load->library('form_validation');
   	$this->form_validation->set_rules('NombreFisico','NombreFisico', 'required');
    $this->form_validation->set_rules('CantidadFisico','CantidadFisico', 'required');
    $this->form_validation->set_rules('UnidadFisico','UnidadFisico', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoFisico','FechaUltimoMantoFisico', 'required');
    $this->form_validation->set_rules('PeriodicidadMantoFisico','PeriodicidadMantoFisico', 'required');
    $this->form_validation->set_rules('DescripcionFisico','DescripcionFisico', 'required');
			
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 echo 'no';
		}
		else
		{

 
      $data['IdFisico']= $this->input->post('IdFisico');
      $data['NombreFisico']= $this->input->post('NombreFisico');
      $data['CantidadFisico']= $this->input->post('CantidadFisico');
      $data['UnidadFisico']= $this->input->post('UnidadFisico');
    	$data['PeriodicidadMantoFisico']= $this->input->post('PeriodicidadMantoFisico');
      $data['DescripcionFisico']= $this->input->post('DescripcionFisico');
      $data['IdArea']= $this->input->post('IdArea');  
      
      $this->load->helper('date');
            
      $fechaultimomantofisico  = explode('/',$this->input->post('FechaUltimoMantoFisico')); 
      $day = $fechaultimomantofisico[1];
      $month = $fechaultimomantofisico[0];
     	$year = $fechaultimomantofisico[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoFisico']=$datestring;
      
      
      
      $result_registro_fisico=$this->fisico_model->registro_fisico($data);
      //redirect('principal', 'refresh');
			echo 'si';
			return FALSE;
     
		}
  }
// ****** Termina funcion registro_fisico ******



// ****** Inicia funcion eliminar_fisico******
	public function eliminar_fisico($fisico)
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
		    	
		    	$data['fisico']=$fisico;
		    	$this->load->view('fisico/alerta',$data);
					
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

// ****** Termina funcion eliminar_fisico ******


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
		    	
		    	$fisico= $this->input->post('IdFisico');
		    	$Fisico = $this->fisico_model->eliminar_fisico($fisico);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('fisico/panel_control_fisico', 'refresh');
					
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
