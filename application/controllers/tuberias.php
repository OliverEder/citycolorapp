<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tuberias extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
		$this->load->model('areas_model'); 
		$this->load->model('tuberias_model');
  }


// ****** Inicia funcion ver_tuberia_cliente ******
   public function ver_tuberia_cliente($tuberia)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
     	$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      
      $Tuberia = $this->tuberias_model->ver_tuberia($tuberia);
    	$data['tuberia'] = array(
        'IdTuberia' =>$Tuberia[0]->IdTuberia,
        'IdArea' =>$Tuberia[0]->IdArea,
        'MaterialTuberia' =>$Tuberia[0]->MaterialTuberia,
        'LongitudTuberia' =>$Tuberia[0]->LongitudTuberia,
        'EstadoTuberia' =>$Tuberia[0]->EstadoTuberia,
        'FechaUltimoMantoTuberia' =>$Tuberia[0]->FechaUltimoMantoTuberia,
        'DescripcionTuberia' =>$Tuberia[0]->DescripcionTuberia,
        );
		  //carga vistas, enviando el arreglo data como parametro.
		  $this->load->view('header',$data);
		  $this->load->view('navbar');
			$this->load->view('tuberias/ver_tuberia_cliente');
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
// ****** Termina funcion ver_tuberia_cliente ******

// ****** Inicia funcion panel_control_tuberia ******
	public function panel_control_tuberia()
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
		    	$data['tuberias'] = $this->tuberias_model->todos_tuberias();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('tuberias/panel_control_tuberia');
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

// ****** Termina funcion panel_control_tuberia ******

// ****** Inicia funcion ver_tuberia ******
	public function ver_tuberia($tuberia)
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
		    	$Tuberia = $this->tuberias_model->ver_tuberia($tuberia);
		    	$data['tuberia'] = array(
		        'IdTuberia' =>$Tuberia[0]->IdTuberia,
		        'IdArea' =>$Tuberia[0]->IdArea,
		        'MaterialTuberia' =>$Tuberia[0]->MaterialTuberia,
		        'LongitudTuberia' =>$Tuberia[0]->LongitudTuberia,
		        'EstadoTuberia' =>$Tuberia[0]->EstadoTuberia,
		        'FechaUltimoMantoTuberia' =>$Tuberia[0]->FechaUltimoMantoTuberia,
		        'DescripcionTuberia' =>$Tuberia[0]->DescripcionTuberia,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('tuberias/ver_tuberia');
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

// ****** Termina funcion ver_tuberia ******

// ****** Inicia funcion editar_tuberia ******
	public function editar_tuberia($tuberia)
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
		    	$Tuberia = $this->tuberias_model->ver_tuberia($tuberia);
		    	$data['tuberia'] = array(
		        'IdTuberia' =>$Tuberia[0]->IdTuberia,
		        'IdArea' =>$Tuberia[0]->IdArea,
		        'NombreArea' =>$Tuberia[0]->NombreArea,
		        'MaterialTuberia' =>$Tuberia[0]->MaterialTuberia,
		        'LongitudTuberia' =>$Tuberia[0]->LongitudTuberia,
		        'EstadoTuberia' =>$Tuberia[0]->EstadoTuberia,
		        'FechaUltimoMantoTuberia' =>$Tuberia[0]->FechaUltimoMantoTuberia,
		        'DescripcionTuberia' =>$Tuberia[0]->DescripcionTuberia,
		        );
       		$data['areas'] = $this->areas_model->todos_areas();
       		//carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('tuberias/editar_tuberia');
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

// ****** Termina funcion editar_tuberia******

// ****** Inicia funcion guardar_cambios_tuberia******
 	public function guardar_cambios_tuberia()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('MaterialTuberia','MaterialTuberia', 'required');
    $this->form_validation->set_rules('LongitudTuberia','LongitudTuberia', 'required');
    $this->form_validation->set_rules('EstadoTuberia','EstadoTuberia', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoTuberia','FechaUltimoMantoTuberia', 'required');
    $this->form_validation->set_rules('DescripcionTuberia','DescripcionTuberia', 'required');
   
				
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdTuberia']= $this->input->post('IdTuberia');
      $data['MaterialTuberia']= $this->input->post('MaterialTuberia');
      $data['LongitudTuberia']= $this->input->post('LongitudTuberia');
      $data['EstadoTuberia']= $this->input->post('EstadoTuberia');
      $data['DescripcionTuberia']= $this->input->post('DescripcionTuberia');
      $data['IdArea']= $this->input->post('IdArea');  
      
      $this->load->helper('date');
            
      $fechaultimomantotuberia  = explode('/',$this->input->post('FechaUltimoMantoTuberia')); 
      $day = $fechaultimomantotuberia[1];
      $month = $fechaultimomantotuberia[0];
     	$year = $fechaultimomantotuberia[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoTuberia']=$datestring;
         
        $result_editar_tuberia=$this->tuberias_model->editar_tuberia($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
     

		}
  }
// ****** Termina funcion guardar_cambios_tuberia ******

// ****** Inicia funcion nuevo_tuberia ******
	public function nuevo_tuberia()
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
					$this->load->view('tuberias/nuevo_tuberia');
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

// ****** Termina funcion nuevo_tuberia ******

// ****** Inicia funcion registro_tuberia  ******
 	public function registro_tuberia()
  {
    $this->load->library('form_validation');
   	$this->form_validation->set_rules('MaterialTuberia','MaterialTuberia', 'required');
    $this->form_validation->set_rules('LongitudTuberia','LongitudTuberia', 'required');
    $this->form_validation->set_rules('EstadoTuberia','EstadoTuberia', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoTuberia','FechaUltimoMantoTuberia', 'required');
    $this->form_validation->set_rules('DescripcionTuberia','DescripcionTuberia', 'required');
			
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 echo 'no';
		}
		else
		{

 
      $data['MaterialTuberia']= $this->input->post('MaterialTuberia');
      $data['LongitudTuberia']= $this->input->post('LongitudTuberia');
      $data['EstadoTuberia']= $this->input->post('EstadoTuberia');
      $data['DescripcionTuberia']= $this->input->post('DescripcionTuberia');
      $data['IdArea']= $this->input->post('IdArea');
      
      $this->load->helper('date');
            
      $fechaultimomantotuberia  = explode('/',$this->input->post('FechaUltimoMantoTuberia')); 
      $day = $fechaultimomantotuberia[1];
      $month = $fechaultimomantotuberia[0];
     	$year = $fechaultimomantotuberia[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoTuberia']=$datestring;
      
      
      
      $result_registro_tuberia=$this->tuberias_model->registro_tuberia($data);
      //redirect('principal', 'refresh');
			echo 'si';
			return FALSE;
     
		}
  }
// ****** Termina funcion registro_tuberia ******



// ****** Inicia funcion eliminar_tuberia******
	public function eliminar_tuberia($tuberia)
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
		    	
		    	$data['tuberia']=$tuberia;
		    	$this->load->view('tuberias/alerta',$data);
					
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

// ****** Termina funcion eliminar_tuberia ******


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
		    	
		    	$tuberia= $this->input->post('IdTuberia');
		    	$Tuberia = $this->tuberias_model->eliminar_tuberia($tuberia);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('tuberias/panel_control_tuberia', 'refresh');
					
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
