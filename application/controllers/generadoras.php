<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Generadoras extends CI_Controller {

	public function __construct(){//Metodo constructor
    parent::__construct();
    $this->load->model('usuarios_model');
    $this->load->model('clientes_model');
    $this->load->model('inmuebles_model');
    $this->load->model('areas_model'); 
    $this->load->model('focos_model');
    $this->load->model('generadoras_model');
  }

	// ****** Inicia funcion ver_generadoras_inmueble******
   public function ver_generadoras_inmueble($inmueble)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
      $result_inmueble=$this->inmuebles_model->inmueble($inmueble);//Envia cliente a el modelo inmuebles para buscar la informacion de los inmuebles que correspondan al cliente.
			
      if($result_inmueble)
      {
        $data = array(
          'IdInmueble' =>$result_inmueble[0]->IdInmueble,
          'NombreInmueble' =>$result_inmueble[0]->NombreInmueble,
          'DireccionInmueble' =>$result_inmueble[0]->DireccionInmueble,
        );

        
        $result_generadoras=$this->generadoras_model->inmuebles_panel($inmueble);
		    $data['generadoras']=$result_generadoras;
        $data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
        $data['permisos'] = $session_data['permisos'];
        //carga vistas, enviando el arreglo data como parametro.
        $this->load->view('header',$data);
        $this->load->view('navbar');
        $this->load->view('generadoras/panel_generadoras_cliente');
        $this->load->view('footer');

      }
      else
      {
        //carga vistas, enviando el arreglo data como parametro.
        $this->load->view('header',$data);
        $this->load->view('navbar');
        $this->load->view('inmueble');
        $this->load->view('footer');
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
// ****** Termina funcion ver_generadoras_inmueble ******


// ****** Inicia funcion ver_generadora_cliente ******
   public function ver_generadora_cliente($generadora)
  {
    if($this->session->userdata('logged_in'))//si existe el valor logged_in en la sesion
    {
      $session_data = $this->session->userdata('logged_in');//guarda el calor de la sesion en la variable session_data
     	$data['NombreUsuario'] = $session_data['NombreUsuario'];//asigna el valor nombre de usuario de la sesion al arreglo data.
      $data['permisos'] = $session_data['permisos'];
      
      $Generadora = $this->generadoras_model->ver_generadora($generadora);
    	$data['generadora'] = array(
        'IdGeneradora' =>$Generadora[0]->IdGeneradora,
        'IdInmueble' =>$Generadora[0]->IdInmueble,
        'NombreInmueble' =>$Generadora[0]->NombreInmueble,
        'ConceptoGeneradora' =>$Generadora[0]->ConceptoGeneradora,
        'DescripcionGeneradora' =>$Generadora[0]->DescripcionGeneradora,
       	'FechaGeneradora' =>$Generadora[0]->FechaGeneradora,
       	'UnidadGeneradora' =>$Generadora[0]->UnidadGeneradora,
       	'CantidadGeneradora' =>$Generadora[0]->CantidadGeneradora,
       	'PrecioUnitarioGeneradora' =>$Generadora[0]->PrecioUnitarioGeneradora,
       	'PecioTotalGeneradora' =>$Generadora[0]->PecioTotalGeneradora,
      );
		  //carga vistas, enviando el arreglo data como parametro.
		  $this->load->view('header',$data);
		  $this->load->view('navbar');
			$this->load->view('generadoras/ver_generadora_cliente');
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
// ****** Termina funcion ver_generadora_cliente ******

// ****** Inicia funcion panel_control_generadora******
	public function panel_control_generadora()
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
      	if($permiso->NombreModulo=="generadoras")
      	{
		    	$data['generadoras'] = $this->generadoras_model->todos_generadoras();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('generadoras/panel_control_generadoras');
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

// ****** Termina funcion panel_control_area******

// ****** Inicia funcion ver_generadora ******
	public function ver_generadora_panel($generadora)
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
      	if($permiso->NombreModulo=="generadoras")
      	{
		    	$Generadora = $this->generadoras_model->ver_generadora($generadora);
		    	$data['generadora'] = array(
		        'IdGeneradora' =>$Generadora[0]->IdGeneradora,
		        'IdInmueble' =>$Generadora[0]->IdInmueble,
		        'NombreInmueble' =>$Generadora[0]->NombreInmueble,
		        'ConceptoGeneradora' =>$Generadora[0]->ConceptoGeneradora,
		        'DescripcionGeneradora' =>$Generadora[0]->DescripcionGeneradora,
		       	'FechaGeneradora' =>$Generadora[0]->FechaGeneradora,
		       	'UnidadGeneradora' =>$Generadora[0]->UnidadGeneradora,
		       	'CantidadGeneradora' =>$Generadora[0]->CantidadGeneradora,
		       	'PrecioUnitarioGeneradora' =>$Generadora[0]->PrecioUnitarioGeneradora,
		       	'PecioTotalGeneradora' =>$Generadora[0]->PecioTotalGeneradora,

		      );
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('generadoras/ver_generadora');
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

// ****** Termina funcion ver_generadora******

// ****** Inicia funcion nuevo_generadora *****
	public function nuevo_generadora()
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
      	if($permiso->NombreModulo=="generadoras")
      	{
		    	$data['inmuebles'] = $this->inmuebles_model->todos_inmuebles();
		    		
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header', $data);
				  $this->load->view('navbar');
					$this->load->view('generadoras/nuevo_generadora');
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

// ****** Termina funcion nuevo_generadora ******

// ****** Inicia funcion registro_generadora******
 	public function registro_generadora()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ConceptoGeneradora', 'ConceptoGeneradora', 'required');
    $this->form_validation->set_rules('FechaGeneradora', 'FechaGeneradora', 'required');
    $this->form_validation->set_rules('UnidadGeneradora', 'UnidadGeneradora', 'required');
    $this->form_validation->set_rules('CantidadGeneradora', 'CantidadGeneradora', 'required');
    $this->form_validation->set_rules('PrecioUnitarioGeneradora', 'PrecioUnitarioGeneradora', 'required');
    $this->form_validation->set_rules('PecioTotalGeneradora', 'PecioTotalGeneradora', 'required');
    $this->form_validation->set_rules('DescripcionGeneradora', 'DescripcionGeneradora', 'required');
		   
		
		if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
		}
		else
		{
		
			$data['ConceptoGeneradora']= $this->input->post('ConceptoGeneradora');
			//$data['FechaGeneradora']= $this->input->post('FechaGeneradora');
			$data['UnidadGeneradora']= $this->input->post('UnidadGeneradora');
			$data['CantidadGeneradora']= $this->input->post('CantidadGeneradora');
			$data['PrecioUnitarioGeneradora']= $this->input->post('PrecioUnitarioGeneradora');
			$data['PecioTotalGeneradora']= $this->input->post('PecioTotalGeneradora');
			$data['DescripcionGeneradora']= $this->input->post('DescripcionGeneradora');
      $data['IdInmueble']= $this->input->post('IdInmueble');
      
      $this->load->helper('date');
      $UnidadGeneradora=explode('/',$this->input->post('FechaGeneradora'));
      
      $day = $UnidadGeneradora[1];
      $month = $UnidadGeneradora[0];
     	$year = $UnidadGeneradora[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
      $data['FechaGeneradora']=$datestring;
      $result_registro_generadora=$this->generadoras_model->registro_generadora($data);
      echo 'si';
			return FALSE;
      
      /*$result_generadora_existente=$this->generadoras_model->generadora_existente($data);
      
      if($result_generadora_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
      	//registrar el area en la base de datos
       
        $result_registro_generadora=$this->generadoras_model->registro_generadora($data);
        echo 'si';
				return FALSE;
         			
        
      }*/
		}
		
	
  }
// ****** Termina funcion registro_generadora ******

// ****** Inicia funcion editar_area******
	public function editar_generadora($generadora)
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
      	if($permiso->NombreModulo=="generadoras")
      	{
		    	$Generadora = $this->generadoras_model->ver_generadora($generadora);
		    	$data['generadora'] = array(
		        'IdGeneradora' =>$Generadora[0]->IdGeneradora,
		        'IdInmueble' =>$Generadora[0]->IdInmueble,
		        'NombreInmueble' =>$Generadora[0]->NombreInmueble,
		        'ConceptoGeneradora' =>$Generadora[0]->ConceptoGeneradora,
		        'DescripcionGeneradora' =>$Generadora[0]->DescripcionGeneradora,
		       	'FechaGeneradora' =>$Generadora[0]->FechaGeneradora,
		       	'UnidadGeneradora' =>$Generadora[0]->UnidadGeneradora,
		       	'CantidadGeneradora' =>$Generadora[0]->CantidadGeneradora,
		       	'PrecioUnitarioGeneradora' =>$Generadora[0]->PrecioUnitarioGeneradora,
		       	'PecioTotalGeneradora' =>$Generadora[0]->PecioTotalGeneradora,
		      );
		      
		      
       		$data['inmuebles'] = $this->inmuebles_model->todos_inmuebles();
				  //carga vistas, enviando el arreglo data como parametro.
				  $this->load->view('header',$data);
				  $this->load->view('navbar');
					$this->load->view('generadoras/editar_generadora');
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

// ****** Termina funcion editar_generadora ******

// ****** Inicia funcion guardar_cambios_generadora ******
 	public function guardar_cambios_generadora()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('ConceptoGeneradora', 'ConceptoGeneradora', 'required');
    $this->form_validation->set_rules('FechaGeneradora', 'FechaGeneradora', 'required');
    $this->form_validation->set_rules('UnidadGeneradora', 'UnidadGeneradora', 'required');
    $this->form_validation->set_rules('CantidadGeneradora', 'CantidadGeneradora', 'required');
    $this->form_validation->set_rules('PrecioUnitarioGeneradora', 'PrecioUnitarioGeneradora', 'required');
    $this->form_validation->set_rules('PecioTotalGeneradora', 'PecioTotalGeneradora', 'required');
    $this->form_validation->set_rules('DescripcionGeneradora', 'DescripcionGeneradora', 'required');
		
    if ($this->form_validation->run() == FALSE)
		{
			 return FALSE;
			 
		}
		else
		{

      $data['IdGeneradora']= $this->input->post('IdGeneradora');
      $data['ConceptoGeneradora']= $this->input->post('ConceptoGeneradora');
			//$data['FechaGeneradora']= $this->input->post('FechaGeneradora');
			$data['UnidadGeneradora']= $this->input->post('UnidadGeneradora');
			$data['CantidadGeneradora']= $this->input->post('CantidadGeneradora');
			$data['PrecioUnitarioGeneradora']= $this->input->post('PrecioUnitarioGeneradora');
			$data['PecioTotalGeneradora']= $this->input->post('PecioTotalGeneradora');
			$data['DescripcionGeneradora']= $this->input->post('DescripcionGeneradora');
      $data['IdInmueble']= $this->input->post('IdInmueble');
      
      $this->load->helper('date');
      $UnidadGeneradora=explode('/',$this->input->post('FechaGeneradora'));
      
      $day = $UnidadGeneradora[1];
      $month = $UnidadGeneradora[0];
     	$year = $UnidadGeneradora[2];
      $datestring = $year."-".$month."-".$day ;
			$time = time();
      $data['FechaGeneradora']=$datestring;
     
     
       $result_editar_generadora=$this->generadoras_model->editar_generadora($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      
     /*
      $result_generadora_existente=$this->generadoras_model->generadora_existente($data);
			
      
      if($result_generadora_existente)
      {
				echo 'no';
        return TRUE;
        //redirect('principal', 'refresh');
        
      }
      else
      {
         
        $result_editar_generadora=$this->generadoras_model->editar_generadora($data);
        //redirect('principal', 'refresh');
				echo 'si';
				return FALSE;
      }
      */

		}
  }
// ****** Termina funcion guardar_cambios_generadora ******

// ****** Inicia funcion guardar_cambios_imagen_antes ******
 	public function guardar_cambios_imagen_antes()
  {
    
		

    $data['IdGeneradora']= $this->input->post('IdGeneradora');
    $file = "./images/generadoras/antes/". $data['IdGeneradora'].".jpg";
		
		if(file_exists($file))
		{
			$do = unlink($file);
			
		}
		
    
    $config['upload_path'] = './images/generadoras/antes/';
  	$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
    $config['max_width'] = '2024';
    $config['max_height'] = '2008';
    $config['file_name'] =$data['IdGeneradora'];
    $this->load->library('upload', $config);
    $nombreimg=$data['IdGeneradora'];
   
    
    
    	if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('generadoras/nuevo_generadora');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/generadoras/antes/'.$nombreimg.'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}  
      
        
        
        
     
  }
// ****** Termina funcion guardar_cambios_imagen_antes ******

// ****** Inicia funcion guardar_cambios_imagen_despues ******
 	public function guardar_cambios_imagen_despues()
  {
    
		

    $data['IdGeneradora']= $this->input->post('IdGeneradora');
    $file = "./images/generadoras/despues/". $data['IdGeneradora'].".jpg";
		
		if(file_exists($file))
		{
			$do = unlink($file);
			
		}
		
    
    $config['upload_path'] = './images/generadoras/despues/';
  	$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '2000';
    $config['max_width'] = '2024';
    $config['max_height'] = '2008';
    $config['file_name'] =$data['IdGeneradora'];
    $this->load->library('upload', $config);
    $nombreimg=$data['IdGeneradora'];
   
    
    
    	if ( ! $this->upload->do_upload())
				{
					$error = array('error' => $this->upload->display_errors());
			
					$this->load->view('header',$data);
					$this->load->view('navbar');
					$this->load->view('generadoras/nuevo_generadora');
					$this->load->view('footer');
				}	
				else
				{
					$data = array('upload_data' => $this->upload->data());
					$dir='./images/generadoras/despues/'.$nombreimg.'.jpg';
					chmod($dir, 0777);	
					echo 'si';
					return FALSE;
				}  
      
        
        
        
     
  }
// ****** Termina funcion guardar_cambios_imagen_despues ******

// ****** Inicia funcion eliminar_area******
	public function eliminar_generadora($generadora_argumento)
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
      	if($permiso->NombreModulo=="generadoras")
      	{
		    	
		    	$data['generadora']=$generadora_argumento;
		    	$this->load->view('generadoras/alerta',$data);
					
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

// ****** Termina funcion eliminar_inmueble******


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
      	if($permiso->NombreModulo=="generadoras")
      	{
		    	
		    	$idgeneradora= $this->input->post('IdGeneradora');
		    	$Generadora = $this->generadoras_model->eliminar_generadora($idgeneradora);
		    	
		    	$fileAntes = "./images/generadoras/antes/".$idgeneradora.".jpg";
					
					
		    	if(file_exists($fileAntes))
					{
						$doAntes = unlink($fileAntes);
			
					}
		    	
		    	$fileDespues = "./images/generadoras/despues/".$idgeneradora.".jpg";
		    	
		    	if(file_exists($fileDespues))
					{
						$doDespues = unlink($fileDespues);
			
					}
		    	
		    	 //carga vistas, enviando el arreglo data como parametro.
				  redirect('generadoras/panel_control_generadora', 'refresh');
					
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
