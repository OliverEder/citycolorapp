<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accesorios extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
		$this->load->model('areas_model'); 
		$this->load->model('accesorios_model');
  }


// ****** Inicia funcion ver_accesorio_cliente ******
   public function ver_accesorio_cliente($accesorio)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
     	$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      
      $Accesorio = $this->accesorios_model->ver_accesorio($accesorio);
    	$data['accesorio'] = array(
        'IdAccesorio' =>$Accesorio[0]->IdAccesorio,
        'IdArea' =>$Accesorio[0]->IdArea,
        'NombreAccesorio' =>$Accesorio[0]->NombreAccesorio,
        'MarcaAccesorio' =>$Accesorio[0]->MarcaAccesorio,
        'EstadoAccesorio' =>$Accesorio[0]->EstadoAccesorio,
        'FechaUltimoMantoAccesorio' =>$Accesorio[0]->FechaUltimoMantoAccesorio,
        'DescripcionAccesorio' =>$Accesorio[0]->DescripcionAccesorio,
        );
		  //carga vistas, enviando el arreglo data como parametro.
		  $this->load->view('header',$data);
		  $this->load->view('navbar');
			$this->load->view('accesorios/ver_accesorio_cliente');
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
// ****** Termina funcion ver_accesorio_cliente ******

// ****** Inicia funcion panel_control_accesorio ******
	public function panel_control_accesorio()
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
		    	$data['accesorios'] = $this->accesorios_model->todos_accesorios();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('accesorios/panel_control_accesorio');
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

// ****** Termina funcion panel_control_accesorio ******

// ****** Inicia funcion ver_accesorio ******
	public function ver_accesorio($accesorio)
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
		    	$Accesorio = $this->accesorios_model->ver_accesorio($accesorio);
		    	$data['accesorio'] = array(
		        'IdAccesorio' =>$Accesorio[0]->IdAccesorio,
		        'IdArea' =>$Accesorio[0]->IdArea,
		        'NombreAccesorio' =>$Accesorio[0]->NombreAccesorio,
		        'MarcaAccesorio' =>$Accesorio[0]->MarcaAccesorio,
		        'EstadoAccesorio' =>$Accesorio[0]->EstadoAccesorio,
		        'FechaUltimoMantoAccesorio' =>$Accesorio[0]->FechaUltimoMantoAccesorio,
		        'DescripcionAccesorio' =>$Accesorio[0]->DescripcionAccesorio,
		        );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('accesorios/ver_accesorio');
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

// ****** Termina funcion ver_accesorio ******

// ****** Inicia funcion editar_accesorio ******
	public function editar_accesorio($accesorio)
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
		    	$Accesorio = $this->accesorios_model->ver_accesorio($accesorio);
		    	$data['accesorio'] = array(
		        'IdAccesorio' =>$Accesorio[0]->IdAccesorio,
		        'IdArea' =>$Accesorio[0]->IdArea,
		        'NombreArea' =>$Accesorio[0]->NombreArea,
		        'NombreAccesorio' =>$Accesorio[0]->NombreAccesorio,
		        'MarcaAccesorio' =>$Accesorio[0]->MarcaAccesorio,
		        'EstadoAccesorio' =>$Accesorio[0]->EstadoAccesorio,
		        'FechaUltimoMantoAccesorio' =>$Accesorio[0]->FechaUltimoMantoAccesorio,
		        'DescripcionAccesorio' =>$Accesorio[0]->DescripcionAccesorio,
		        );
       		$data['areas'] = $this->areas_model->todos_areas();
       		//carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('accesorios/editar_accesorio');
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

// ****** Termina funcion editar_accesorio******

// ****** Inicia funcion guardar_cambios_accesorio******
 	public function guardar_cambios_accesorio()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreAccesorio','NombreAccesorio', 'required');
    $this->form_validation->set_rules('MarcaAccesorio','MarcaAccesorio', 'required');
    $this->form_validation->set_rules('EstadoAccesorio','EstadoAccesorio', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoAccesorio','FechaUltimoMantoAccesorio', 'required');
    $this->form_validation->set_rules('DescripcionAccesorio','DescripcionAccesorio', 'required');
   
				
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdAccesorio']= $this->input->post('IdAccesorio');
      $data['NombreAccesorio']= $this->input->post('NombreAccesorio');
      $data['MarcaAccesorio']= $this->input->post('MarcaAccesorio');
      $data['EstadoAccesorio']= $this->input->post('EstadoAccesorio');
      $data['DescripcionAccesorio']= $this->input->post('DescripcionAccesorio');
      $data['IdArea']= $this->input->post('IdArea');  
      
      $this->load->helper('date');
            
      $fechaultimomantoaccesorio  = explode('/',$this->input->post('FechaUltimoMantoAccesorio')); 
      $day = $fechaultimomantoaccesorio[1];
      $month = $fechaultimomantoaccesorio[0];
     	$year = $fechaultimomantoaccesorio[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoAccesorio']=$datestring;
         
        $result_editar_accesorio=$this->accesorios_model->editar_accesorio($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
     

		}
  }
// ****** Termina funcion guardar_cambios_accesorio ******

// ****** Inicia funcion nuevo_accesorio ******
	public function nuevo_accesorio()
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
					$this->load->view('accesorios/nuevo_accesorio');
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

// ****** Termina funcion nuevo_accesorio ******

// ****** Inicia funcion registro_accesorio  ******
 	public function registro_accesorio()
  {
    $this->load->library('form_validation');
   	$this->form_validation->set_rules('NombreAccesorio','NombreAccesorio', 'required');
    $this->form_validation->set_rules('MarcaAccesorio','MarcaAccesorio', 'required');
    $this->form_validation->set_rules('EstadoAccesorio','EstadoAccesorio', 'required');
    $this->form_validation->set_rules('FechaUltimoMantoAccesorio','FechaUltimoMantoAccesorio', 'required');
    $this->form_validation->set_rules('DescripcionAccesorio','DescripcionAccesorio', 'required');
			
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 echo 'no';
		}
		else
		{

 
      $data['NombreAccesorio']= $this->input->post('NombreAccesorio');
      $data['MarcaAccesorio']= $this->input->post('MarcaAccesorio');
      $data['EstadoAccesorio']= $this->input->post('EstadoAccesorio');
      $data['DescripcionAccesorio']= $this->input->post('DescripcionAccesorio');
      $data['IdArea']= $this->input->post('IdArea');
      
      $this->load->helper('date');
            
      $fechaultimomantoaccesorio  = explode('/',$this->input->post('FechaUltimoMantoAccesorio')); 
      $day = $fechaultimomantoaccesorio[1];
      $month = $fechaultimomantoaccesorio[0];
     	$year = $fechaultimomantoaccesorio[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
			$data['FechaUltimoMantoAccesorio']=$datestring;
      
      
      
      $result_registro_accesorio=$this->accesorios_model->registro_accesorio($data);
      //redirect('principal', 'refresh');
			echo 'si';
			return FALSE;
     
		}
  }
// ****** Termina funcion registro_accesorio ******



// ****** Inicia funcion eliminar_accesorio******
	public function eliminar_accesorio($accesorio)
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
		    	
		    	$data['accesorio']=$accesorio;
		    	$this->load->view('accesorios/alerta',$data);
					
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

// ****** Termina funcion eliminar_accesorio ******


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
		    	
		    	$accesorio= $this->input->post('IdAccesorio');
		    	$Accesorio = $this->accesorios_model->eliminar_accesorio($accesorio);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('accesorios/panel_control_accesorio', 'refresh');
					
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
