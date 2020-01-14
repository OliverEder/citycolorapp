<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
    $this->load->model('clientes_model');
    $this->load->model('inmuebles_model');
    
  }

// ****** Inicia funcion contacto_visitante ******
	public function contacto_visitante()
	{

    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      //carga vistas, enviando el arreglo data como parametro.
      $this->load->view('header',$data);
      $this->load->view('navbar');
			$this->load->view('contacto_visitante');
			$this->load->view('footer');
    }
    else//si no
    {
      //se cargan vistas
      $this->load->view('header');
      $this->load->view('contacto_visitante');
			$this->load->view('footer');
			$this->load->view('formLogin');
    }
	}

// ****** Termina funcion visitante******


// ****** Inicia funcion enviar_mensaje_visitante  ******
 	public function enviar_mensaje_visitante()
  {
    $this->load->library('form_validation');
   	$this->form_validation->set_rules('NombreContacto','NombreContacto', 'required');
    $this->form_validation->set_rules('TelefonoContacto','TelefonoContacto', 'required');
    $this->form_validation->set_rules('CorreoContacto','CorreoContacto', 'required');
    $this->form_validation->set_rules('MensajeContacto','MensajeContacto', 'required');
    			
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 echo 'no';
		}
		else
		{

 
      $data['NombreContacto']= $this->input->post('NombreContacto');
      $data['TelefonoContacto']= $this->input->post('TelefonoContacto');
      $data['CorreoContacto']= $this->input->post('CorreoContacto');
      $data['MensajeContacto']= $this->input->post('MensajeContacto');
           
      $this->load->helper('email');
      
      $this->load->library('email');

			$this->email->from($data['CorreoContacto'], $data['NombreContacto']);
			$this->email->to('proyectos@citycolor.com.mx');
			$this->email->cc('soporte@citycolorapp.com');
			$this->email->bcc('oliver.espinosa.meneses@gmail.com');

			$this->email->subject('Mensaje de un visitante de citycolorapp.com');
			$this->email->message($data['MensajeContacto']);

				
			if ( ! $this->email->send())
			{
					echo 'no';
					return FALSE;
			}
      //redirect('principal', 'refresh');
      $this->email->clear();
			echo 'si';
			return FALSE;
     
		}
  }
// ****** Termina funcion enviar_mensaje_visitante******

// ****** inicia funcion usuario panel******
  public function usuario_panel()
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el valor de la sesion en la variable session_data
      $usuario['IdUsuario'] = $session_data['IdUsuario'];//asigna el valor Id de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
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

					$data['permisos'] = $session_data['permisos'];
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





}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
