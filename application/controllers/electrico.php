<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Electrico extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
		$this->load->model('areas_model'); 
		$this->load->model('electrico_model');
  }

// ****** Inicia funcion ver_electrico_cliente ******
   public function ver_electrico_cliente($electrico)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
     	$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      
      $Electrico = $this->electrico_model->ver_electrico($electrico);
		    	$data['electrico'] = array(
		        'IdElectrico' =>$Electrico[0]->IdElectrico,
		        'IdArea' =>$Electrico[0]->IdArea,
		        'NombreArea' =>$Electrico[0]->NombreArea,
		        'NombreElectrico' =>$Electrico[0]->NombreElectrico,
		        'UnidadElectrico' =>$Electrico[0]->UnidadElectrico,
		        'CantidadElectrico' =>$Electrico[0]->CantidadElectrico,
		        'FechaUltimoMantoElectrico' =>$Electrico[0]->FechaUltimoMantoElectrico,
		        'PeriodicidadMantoElectrico' =>$Electrico[0]->PeriodicidadMantoElectrico,
		        'DescripcionElectrico' =>$Electrico[0]->DescripcionElectrico,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('electrico/ver_electrico_cliente');
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
// ****** Termina funcion ver_electrico_cliente ******



// ****** Inicia funcion panel_control_electrico ******
	public function panel_control_electrico()
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
		    	$data['electrico'] = $this->electrico_model->todos_electrico();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('electrico/panel_control_electrico');
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

// ****** Termina funcion panel_control_electrico ******

// ****** Inicia funcion ver_electrico ******
	public function ver_electrico($electrico)
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
		    	$Electrico = $this->electrico_model->ver_electrico($electrico);
		    	$data['electrico'] = array(
		        'IdElectrico' =>$Electrico[0]->IdElectrico,
		        'IdArea' =>$Electrico[0]->IdArea,
		        'NombreArea' =>$Electrico[0]->NombreArea,
		        'NombreElectrico' =>$Electrico[0]->NombreElectrico,
		        'UnidadElectrico' =>$Electrico[0]->UnidadElectrico,
		        'CantidadElectrico' =>$Electrico[0]->CantidadElectrico,
		        'FechaUltimoMantoElectrico' =>$Electrico[0]->FechaUltimoMantoElectrico,
		        'PeriodicidadMantoElectrico' =>$Electrico[0]->PeriodicidadMantoElectrico,
		        'DescripcionElectrico' =>$Electrico[0]->DescripcionElectrico,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('electrico/ver_electrico');
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

// ****** Termina funcion ver_electrico ******

// ****** Inicia funcion editar_electrico ******
	public function editar_electrico($electrico)
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
		    	$Electrico = $this->electrico_model->ver_electrico($electrico);
		    	$data['electrico'] = array(
		        'IdElectrico' =>$Electrico[0]->IdElectrico,
		        'IdArea' =>$Electrico[0]->IdArea,
		        'NombreArea' =>$Electrico[0]->NombreArea,
		        'NombreElectrico' =>$Electrico[0]->NombreElectrico,
		        'UnidadElectrico' =>$Electrico[0]->UnidadElectrico,
		        'CantidadElectrico' =>$Electrico[0]->CantidadElectrico,
		        'FechaUltimoMantoElectrico' =>$Electrico[0]->FechaUltimoMantoElectrico,
		        'PeriodicidadMantoElectrico' =>$Electrico[0]->PeriodicidadMantoElectrico,
		        'DescripcionElectrico' =>$Electrico[0]->DescripcionElectrico,
		        );
       		$data['areas'] = $this->areas_model->todos_areas();
       		//carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('electrico/editar_electrico');
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

// ****** Termina funcion editar_electrico******

// ****** Inicia funcion guardar_cambios_electrico******
 	public function guardar_cambios_electrico()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreElectrico','NombreElectrico', 'required');
    $this->form_validation->set_rules('CantidadElectrico','CantidadElectrico', 'required');
    $this->form_validation->set_rules('UnidadElectrico','UnidadElectrico', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoElectrico','FechaUltimoMantoElectrico', 'required');
    $this->form_validation->set_rules('PeriodicidadMantoElectrico','PeriodicidadMantoElectrico', 'required');
    $this->form_validation->set_rules('DescripcionElectrico','DescripcionElectrico', 'required');
   
				
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdElectrico']= $this->input->post('IdElectrico');
      $data['NombreElectrico']= $this->input->post('NombreElectrico');
      $data['CantidadElectrico']= $this->input->post('CantidadElectrico');
      $data['UnidadElectrico']= $this->input->post('UnidadElectrico');
    	$data['PeriodicidadMantoElectrico']= $this->input->post('PeriodicidadMantoElectrico');
      $data['DescripcionElectrico']= $this->input->post('DescripcionElectrico');
      $data['IdArea']= $this->input->post('IdArea');  
      
      $this->load->helper('date');
      
      $fechaultimomantoelectrico  = explode('/',$this->input->post('FechaUltimoMantoElectrico')); 
      $day = $fechaultimomantoelectrico[1];
      $month = $fechaultimomantoelectrico[0];
     	$year = $fechaultimomantoelectrico[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoElectrico']=$datestring;
         
        $result_editar_electrico=$this->electrico_model->editar_electrico($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
     

		}
  }
// ****** Termina funcion guardar_cambios_electrico ******

// ****** Inicia funcion nuevo_electrico ******
	public function nuevo_electrico()
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
					$this->load->view('electrico/nuevo_electrico');
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

// ****** Termina funcion nuevo_electrico ******

// ****** Inicia funcion registro_electrico  ******
 	public function registro_electrico()
  {
    $this->load->library('form_validation');
   	$this->form_validation->set_rules('NombreElectrico','NombreElectrico', 'required');
    $this->form_validation->set_rules('CantidadElectrico','CantidadElectrico', 'required');
    $this->form_validation->set_rules('UnidadElectrico','UnidadElectrico', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoElectrico','FechaUltimoMantoElectrico', 'required');
    $this->form_validation->set_rules('PeriodicidadMantoElectrico','PeriodicidadMantoElectrico', 'required');
    $this->form_validation->set_rules('DescripcionElectrico','DescripcionElectrico', 'required');
			
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 echo 'no';
		}
		else
		{

 
      $data['IdElectrico']= $this->input->post('IdElectrico');
      $data['NombreElectrico']= $this->input->post('NombreElectrico');
      $data['CantidadElectrico']= $this->input->post('CantidadElectrico');
      $data['UnidadElectrico']= $this->input->post('UnidadElectrico');
    	$data['PeriodicidadMantoElectrico']= $this->input->post('PeriodicidadMantoElectrico');
      $data['DescripcionElectrico']= $this->input->post('DescripcionElectrico');
      $data['IdArea']= $this->input->post('IdArea');  
      
      $this->load->helper('date');
            
      $fechaultimomantoelectrico  = explode('/',$this->input->post('FechaUltimoMantoElectrico')); 
      $day = $fechaultimomantoelectrico[1];
      $month = $fechaultimomantoelectrico[0];
     	$year = $fechaultimomantoelectrico[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoElectrico']=$datestring;
      
      
      
      $result_registro_electrico=$this->electrico_model->registro_electrico($data);
      //redirect('principal', 'refresh');
			echo 'si';
			return FALSE;
     
		}
  }
// ****** Termina funcion registro_electrico ******



// ****** Inicia funcion eliminar_electrico******
	public function eliminar_electrico($electrico)
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
		    	
		    	$data['electrico']=$electrico;
		    	$this->load->view('electrico/alerta',$data);
					
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

// ****** Termina funcion eliminar_electrico ******


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
		    	
		    	$electrico= $this->input->post('IdElectrico');
		    	$Electrico = $this->electrico_model->eliminar_electrico($electrico);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('electrico/panel_control_electrico', 'refresh');
					
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
