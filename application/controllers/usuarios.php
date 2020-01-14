<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
  }


   //Metodo login
  public function login()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreUsuario', 'Username', 'required');
		$this->form_validation->set_rules('PasswordUsuario', 'Password', 'required');

    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['NombreUsuario']= $this->input->post('NombreUsuario');
      $data['PasswordUsuario']= $this->input->post('PasswordUsuario');
      $result_usuario=$this->usuarios_model->login($data);

      if($result_usuario)
      {

        $data = array(
          'IdUsuario' =>$result_usuario[0]->IdUsuario,
          'IdRango' =>$result_usuario[0]->IdRango,
          'NombreUsuario' =>$result_usuario[0]->NombreUsuario,
          'EmailUsuario' =>$result_usuario[0]->EmailUsuario,
        );
        
        $data['permisos']=$this->permisos_model->buscar_permisos($result_usuario[0]->IdRango);
        $this->session->set_userdata('logged_in',$data);
				echo 'si';
				return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         echo 'no';
         return FALSE;
      }

		}
  }

   //Metodo log out
  public function logout()
  {
    $this->session->unset_userdata('logged_in');
    $this->session->sess_destroy();
    redirect('principal', 'refresh');
  }
  
  // ****** inicia funcion usuario panel******
  public function usuario_panel()
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el valor de la sesion en la variable session_data
      $usuario['IdUsuario'] = $session_data['IdUsuario'];//asigna el valor Id de usuario de la sesion al arreglo data.
      $result_clientes=$this->clientes_model->login($usuario);//Envia usuario a el modelo clientes para buscar la informacion de el cliente.

      if($result_clientes)
      {

        $data = array(
          'IdCliente' =>$result_clientes[0]->IdCliente,
          'NombreCliente' =>$result_clientes[0]->NombreCliente,
          'RfcCliente' =>$result_clientes[0]->RfcCliente,
          'DireccionCliente' =>$result_clientes[0]->DireccionCliente,
        );
        $data['IdUsuario'] = $session_data['IdUsuario'];
        $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
        $cliente['IdCliente']=$data['IdCliente'];//asiga a cliente el id de el cliente
        $result_inmuebles=$this->inmuebles_model->usuario_panel($cliente);//Envia cliente a el modelo inmuebles para buscar la informacion de los inmuebles que correspondan al cliente.

        if($result_inmuebles)
        {

          $data['inmuebles']=$result_inmuebles;


          //carga vistas, enviando el arreglo data como parametro.
          $this->load->view('header',$data);
          $this->load->view('navbar');
          $this->load->view('usuario_panel');
          $this->load->view('footer');
        }
        else
        {
          //carga vistas, enviando el arreglo data como parametro.
          $this->load->view('header',$data);
          $this->load->view('navbar');
          $this->load->view('usuario_panel');
          $this->load->view('footer');
        }

      }
      else
      {
        redirect('principal', 'refresh');
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



// ****** Termina funcion usuario_panel ******

// ****** Inicia funcion panel_control_usuario ******
	public function panel_control_usuario()
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
      	if($permiso->NombreModulo=="usuarios")
      	{
		    	$data['users'] = $this->usuarios_model->todos_usuarios();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('usuarios/panel_control_usuarios');
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

// ****** Termina funcion panel_control_usuario ******

// ****** Inicia funcion ver_usuario ******
	public function ver_usuario($usuario)
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
      	if($permiso->NombreModulo=="usuarios")
      	{
		    	$Usuario = $this->usuarios_model->ver_usuario($usuario);
		    	$data['usuario'] = array(
		        'IdUsuario' =>$Usuario[0]->IdUsuario,
		        'NombreUsuario' =>$Usuario[0]->NombreUsuario,
		        'PasswordUsuario' =>$Usuario[0]->PasswordUsuario,
		        'EmailUsuario' =>$Usuario[0]->EmailUsuario,
		        'NombreRango' =>$Usuario[0]->NombreRango,
       		 );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('usuarios/ver_usuario');
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

// ****** Termina funcion ver_usuario ******

// ****** Inicia funcion editar_usuario ******
	public function editar_usuario($usuario)
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
      	if($permiso->NombreModulo=="usuarios")
      	{
		    	$Usuario = $this->usuarios_model->ver_usuario($usuario);
		    	$data['usuario'] = array(
		        'IdUsuario' =>$Usuario[0]->IdUsuario,
		        'NombreUsuario' =>$Usuario[0]->NombreUsuario,
		        'PasswordUsuario' =>$Usuario[0]->PasswordUsuario,
		        'EmailUsuario' =>$Usuario[0]->EmailUsuario,
		        'IdRango' =>$Usuario[0]->IdRango,
		        'NombreRango' =>$Usuario[0]->NombreRango,
       		 );
       		$data['rangos'] = $this->rangos_model->todos_rangos(); 
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('usuarios/editar_usuario');
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

// ****** Termina funcion editar_usuario ******

// ****** Inicia funcion registro_usuario ******
 	public function guardar_cambios_usuario()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreUsuario', 'Username', 'required');
		$this->form_validation->set_rules('PasswordUsuario', 'Password', 'required');
		$this->form_validation->set_rules('ConfirmaPassUsuario', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('EmailUsuario', 'Email', 'required');
		
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdUsuario']= $this->input->post('IdUsuario');
      $data['NombreUsuario']= $this->input->post('NombreUsuario');
      $data['PasswordUsuario']= $this->input->post('PasswordUsuario');
      $data['EmailUsuario']= $this->input->post('EmailUsuario');
      $data['IdRango']= $this->input->post('RangoUsuario');
      $result_usuario_existente=$this->usuarios_model->usuario_existente_editar($data);

      if($result_usuario_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_editar_usuario=$this->usuarios_model->editar_usuario($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }

		}
  }
// ****** Termina funcion registro_usuario ******

// ****** Inicia funcion nuevo_usuario ******
	public function nuevo_usuario()
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
      	if($permiso->NombreModulo=="usuarios")
      	{
		    	$data['rangos'] = $this->rangos_model->todos_rangos();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('usuarios/nuevo_usuario');
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

// ****** Termina funcion nuevo_usuario ******

// ****** Inicia funcion registro_usuario ******
 	public function registro_usuario()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreUsuario', 'Username', 'required');
		$this->form_validation->set_rules('PasswordUsuario', 'Password', 'required');
		$this->form_validation->set_rules('ConfirmaPassUsuario', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('EmailUsuario', 'Email', 'required');
		
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['NombreUsuario']= $this->input->post('NombreUsuario');
      $data['PasswordUsuario']= $this->input->post('PasswordUsuario');
      $data['EmailUsuario']= $this->input->post('EmailUsuario');
      $data['IdRango']= $this->input->post('RangoUsuario');
      $result_usuario_existente=$this->usuarios_model->usuario_existente($data);

      if($result_usuario_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_registro_usuario=$this->usuarios_model->registro_usuario($data);
        $result_usuario=$this->usuarios_model->usuario_existente($data);
       	$datausuario= array(
        	'IdUsuario' =>$result_usuario[0]->IdUsuario,
        );
       		
       		$dir='./images/usuarios/'.$datausuario['IdUsuario'];
		      if (!file_exists($dir)) 
		      {
		      	error_reporting(E_ERROR);
		      	mkdir($dir,0777);
		        chmod($dir, 0777);
		        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
		      }
        
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }

		}
  }
// ****** Termina funcion registro_usuario ******



// ****** Inicia funcion eliminar_usuario ******
	public function eliminar_usuario($usuario)
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
      	if($permiso->NombreModulo=="usuarios")
      	{
		    	
		    	$data['usuario']=$usuario;
		    	$this->load->view('usuarios/alerta',$data);
					
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
      	if($permiso->NombreModulo=="usuarios")
      	{
		    	
		    	$usuario= $this->input->post('IdUsuario');
		    	$Usuario = $this->usuarios_model->eliminar_usuario($usuario);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('usuarios/panel_control_usuario', 'refresh');
					
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
