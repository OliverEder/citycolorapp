<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Permisos extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
		$this->load->model('rangos_model');
		$this->load->model('permisos_model');
		$this->load->model('modulos_model');
  }


 
 

// ****** Inicia funcion panel_control_permiso ******
	public function panel_control_permiso()
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
      	if($permiso->NombreModulo=="permisos")
      	{
      	  $pages=5;
		    	$data['permisos'] = $this->permisos_model->todos_permisos();
		    	$this->load->library('pagination');
          $config['base_url'] = base_url().'index.php/permisos/panel_control_permiso/';
          $config['total_rows']=$this->permisos_model->filas();//calcula el número de filas
          $config['per_page']=$pages;
          $config['num_links'] = 2;
          $config['first_link'] = 'Primera';//primer link
		      $config['last_link'] = 'Última';//último link
          $config["uri_segment"] = 3;//el segmento de la paginación
		      $config['next_link'] = 'Siguiente';//siguiente link
		      $config['prev_link'] = 'Anterior';//anterior link
          
          
          
          $this->pagination->initialize($config);//inicializamos la paginación	 
          
          $data['permisos']=$this->permisos_model->total_paginados($config['per_page'],$this->uri->segment(3));
          
          $data['paginacion']=$this->pagination->create_links();
          
		  
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('permisos/panel_control_permisos');
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

// ****** Termina funcion panel_control_permiso ******


  //inicia la funcion de busqueda
  public function busqueda()
  {
    $buscar= $this->security->xss_clean($this->input->post('buscar'));
    $resultados=$this->permisos_model->buscar($buscar);
    if($resultados)
    {
      $permisosver_permiso="permisos/ver_permiso";
      foreach($resultados as $permiso)
      {
        $segments_ver_permiso = array('permisos/ver_permiso',$permiso->IdPermiso); 
        $segments_editar_permiso = array('permisos', 'editar_permiso',$permiso->IdPermiso); 
        $segments_eliminar_permiso = array('permisos', 'eliminar_permiso',$permiso->IdPermiso); 
        echo '<tr>
						<td>'.$permiso->IdPermiso.'</td>
						<td>'.$permiso->NombreRango.'</td>
						<td>'.$permiso->NombreModulo.'</td>
						<td>
						<center>'.'<a href="'.site_url($segments_ver_permiso).'"><i class="fa fa-eye"></i></a>
						<a href="'.site_url($segments_editar_permiso).'"><i class="fa fa-pencil-square-o"></i></a>
				    <a href="'.site_url($segments_eliminar_permiso).'" class="eliminar_usuario" data-toggle="modal" data-target="#alerta"><i class="fa fa-times"></i></a>
						</center>	
						</td>
					</tr>  ';
						 
						
      }
      
      
    }   
    else 
    {
      echo "no";
    }
  }
  //termina la funcion de busqueda
// ****** Inicia funcion ver_permiso  ******
	public function ver_permiso($permiso_argumento)
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
      	if($permiso->NombreModulo=="permisos")
      	{
		    	$Permiso = $this->permisos_model->ver_permiso($permiso_argumento);
		    	$data['permiso'] = array(
		        'IdPermiso' =>$Permiso[0]->IdPermiso,
		        'NombreRango' =>$Permiso[0]->NombreRango,
		        'NombreModulo' =>$Permiso[0]->NombreModulo,
		        
       		 );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('permisos/ver_permiso');
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

// ****** Termina funcion ver_permiso ******

// ****** Inicia funcion editar_permiso ******
	public function editar_permiso($permiso_argumento)
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
      	if($permiso->NombreModulo=="permisos")
      	{
		    	$Permiso = $this->permisos_model->ver_permiso($permiso_argumento);
		    	$data['permiso'] = array(
		        'IdPermiso' =>$Permiso[0]->IdPermiso,
		        'IdRango' =>$Permiso[0]->IdRango,
		        'IdModulo' =>$Permiso[0]->IdModulo,
		        'NombreRango' =>$Permiso[0]->NombreRango,
		        'NombreModulo' =>$Permiso[0]->NombreModulo,
		        
       		 );
       		$data['rangos'] = $this->rangos_model->todos_rangos();
       		$data['modulos'] = $this->modulos_model->todos_modulos(); 
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('permisos/editar_permiso');
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

// ****** Termina funcion editar_permiso ******

// ****** Inicia funcion registro_permiso ******
 	public function guardar_cambios_permiso()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('IdRango', 'IdRango', 'required');
		$this->form_validation->set_rules('IdModulo', 'IdModulo', 'required');
		
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdPermiso']= $this->input->post('IdPermiso');
      $data['IdRango']= $this->input->post('IdRango');
      $data['IdModulo']= $this->input->post('IdModulo');
      $result_permiso_existente=$this->permisos_model->permiso_existente($data);

      if($result_permiso_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_editar_permiso=$this->permisos_model->editar_permiso($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }

		}
  }
// ****** Termina funcion registro_permiso ******

// ****** Inicia funcion nuevo_permiso******
	public function nuevo_permiso()
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
      	if($permiso->NombreModulo=="permisos")
      	{
		    	$data['rangos'] = $this->rangos_model->todos_rangos();
		    	$data['modulos'] = $this->modulos_model->todos_modulos();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('permisos/nuevo_permiso');
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

// ****** Termina funcion nuevo_permiso ******

// ****** Inicia funcion registro_permiso ******
 	public function registro_permiso()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('IdRango', 'IdRango', 'required');
		$this->form_validation->set_rules('IdModulo', 'IdModulo', 'required');
		
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{

      $data['IdRango']= $this->input->post('IdRango');
      $data['IdModulo']= $this->input->post('IdModulo');
      $result_permiso_existente=$this->permisos_model->permiso_existente($data);

      if($result_permiso_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_registro_permiso=$this->permisos_model->registro_permiso($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }

		}
  }
// ****** Termina funcion registro_usuario ******



// ****** Inicia funcion eliminar_permiso ******
	public function eliminar_permiso($permiso_argumento)
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
      	if($permiso->NombreModulo=="permisos")
      	{
		    	
		    	$data['permiso']=$permiso_argumento;
		    	$this->load->view('permisos/alerta',$data);
					
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
      	if($permiso->NombreModulo=="permisos")
      	{
		    	
		    	$idpermiso= $this->input->post('IdPermiso');
		    	$Permiso = $this->permisos_model->eliminar_permiso($idpermiso);
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('permisos/panel_control_permiso', 'refresh');
					
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
