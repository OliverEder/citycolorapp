<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
		$this->load->model('clientes_model');
  }


 
 

// ****** Inicia funcion panel_control_cliente ******
	public function panel_control_cliente()
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
      	if($permiso->NombreModulo=="clientes")
      	{
		    	$data['clientes'] = $this->clientes_model->todos_clientes();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('clientes/panel_control_clientes');
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

// ****** Termina funcion panel_control_cliente ******

// ****** Inicia funcion ver_cliente ******
	public function ver_cliente($cliente)
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
      	if($permiso->NombreModulo=="clientes")
      	{
		    	$Cliente = $this->clientes_model->ver_cliente($cliente);
		    	$data['cliente'] = array(
		        'IdCliente' =>$Cliente[0]->IdCliente,
		        'IdUsuario' =>$Cliente[0]->IdUsuario,
		        'NombreUsuario' =>$Cliente[0]->NombreUsuario,
		        'NombreCliente' =>$Cliente[0]->NombreCliente,
		        'RfcCliente' =>$Cliente[0]->RfcCliente,
		        'DireccionCliente' =>$Cliente[0]->DireccionCliente,
       		 );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('clientes/ver_cliente');
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

// ****** Termina funcion ver_cliente ******

// ****** Inicia funcion editar_cliente ******
	public function editar_cliente($cliente_argumento)
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
      	if($permiso->NombreModulo=="clientes")
      	{
		    	$Cliente = $this->clientes_model->ver_cliente($cliente_argumento);
		    	$data['cliente'] = array(
		        'IdCliente' =>$Cliente[0]->IdCliente,
		        'IdUsuario' =>$Cliente[0]->IdUsuario,
		        'NombreUsuario' =>$Cliente[0]->NombreUsuario,
		        'NombreCliente' =>$Cliente[0]->NombreCliente,
		        'RfcCliente' =>$Cliente[0]->RfcCliente,
		        'DireccionCliente' =>$Cliente[0]->DireccionCliente,
		       );
       		 
       		$data['usuarios'] = $this->usuarios_model->todos_usuarios();
       	
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('clientes/editar_cliente');
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

// ****** Termina funcion editar_cliente ******

// ****** Inicia funcion registro_cliente ******
 	public function guardar_cambios_cliente()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreCliente', 'NombreCliente', 'required');
		$this->form_validation->set_rules('RfcCliente', 'RfcCliente', 'required');
		$this->form_validation->set_rules('DireccionCliente', 'DireccionCliente', 'required');
		
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdCliente']= $this->input->post('IdCliente');
      $data['NombreCliente']= $this->input->post('NombreCliente');
      $data['RfcCliente']= $this->input->post('RfcCliente');
      $data['DireccionCliente']= $this->input->post('DireccionCliente');
      $data['IdUsuario']= $this->input->post('IdUsuario');
      //$result_cliente_existente=$this->clientes_model->cliente_existente($data);

			$result_editar_cliente=$this->clientes_model->editar_cliente($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
			/*	
      if($result_cliente_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_editar_cliente=$this->clientes_model->editar_cliente($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }
*/
		}
  }
// ****** Termina funcion registro_cliente ******

// ****** Inicia funcion guardar_cambios_cliente_imagen ******
 	public function guardar_cambios_cliente_imagen()
  {
    
		

    $data['IdCliente']= $this->input->post('IdCliente');
    $file = "./images/clientes/". $data['IdCliente'].".jpg";
		$do = unlink($file);
    
    $config['upload_path'] = './images/clientes/';
  	$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
    $config['max_width'] = '2024';
    $config['max_height'] = '2008';
    $config['file_name'] =$data['IdCliente'];
    $this->load->library('upload', $config);
    $nombreimg=$data['IdCliente'];
   
    
    
    	if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('clientes/nuevo_cliente');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/clientes/'.$nombreimg.'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}  
      
        
        
        
     
  }
// ****** Termina funcion guardar_cambios_cliente_imagen ******


// ****** Inicia funcion nuevo_cliente******
	public function nuevo_cliente()
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
      	if($permiso->NombreModulo=="clientes")
      	{
		    	$data['usuarios'] = $this->usuarios_model->todos_usuarios();
		    	
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('clientes/nuevo_cliente');
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

// ****** Termina funcion nuevo_cliente ******

// ****** Inicia funcion registro_cliente******
 	public function registro_cliente()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('NombreCliente', 'NombreCliente', 'required');
		$this->form_validation->set_rules('RfcCliente', 'RfcCliente', 'required');
		$this->form_validation->set_rules('DireccionCliente', 'DireccionCliente', 'required');
		
		$config['upload_path'] = './images/clientes/';
  	$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
    $config['max_width'] = '2024';
    $config['max_height'] = '2008';
    
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{
			
      $data['NombreCliente']= $this->input->post('NombreCliente');
      $data['RfcCliente']= $this->input->post('RfcCliente');
      $data['DireccionCliente']= $this->input->post('DireccionCliente');
      $data['IdUsuario']= $this->input->post('IdUsuario');
           
      $result_cliente_existente=$this->clientes_model->cliente_existente($data);

      if($result_cliente_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
        //registrar el cliente en la base de datos
        $result_registro_cliente=$this->clientes_model->registro_cliente($data);
        //buscar el cliente recien ingresaro para buscar el ID que se genero automaticamente
        $result_cliente=$this->clientes_model->cliente_existente($data);
        //pasar el resultado a un arreglo
       	$datacliente = array(
          'IdCliente' =>$result_cliente[0]->IdCliente,  
        );
       	
       	$config['file_name'] =$datacliente['IdCliente'];
        $this->load->library('upload', $config);
       	
       	if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('clientes/nuevo_cliente');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/clientes/'.$datacliente['IdCliente'].'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}
        
        
      }

		}
  }
// ****** Termina funcion registro_cliente ******



// ****** Inicia funcion eliminar_cliente******
	public function eliminar_cliente($cliente_argumento)
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
      	if($permiso->NombreModulo=="clientes")
      	{
		    	
		    	$data['cliente']=$cliente_argumento;
		    	$this->load->view('clientes/alerta',$data);
					
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

// ****** Termina funcion eliminar_cliente******


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
      	if($permiso->NombreModulo=="clientes")
      	{
		    	
		    	$idcliente= $this->input->post('IdCliente');
		    	$Cliente = $this->clientes_model->eliminar_cliente($idcliente);
		    	$file = "./images/clientes/".$idcliente.".jpg";
					$do = unlink($file);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('clientes/panel_control_cliente', 'refresh');
					
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
