<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paneldecontrol extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
    $this->load->model('clientes_model');
    $this->load->model('inmuebles_model');
    
  }

// ****** Inicia funcion index ******
	public function inicio()
	{

    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      //carga vistas, enviando el arreglo data como parametro.
      $this->load->view('header',$data);
      $this->load->view('navbar');
			$this->load->view('panel_control');
			$this->load->view('footer');
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

// ****** Termina funcion index ******

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
