<?php

class Rangos_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

 	public function todos_rangos()
  {
    
    $query = $this->db->get('rangos');

   if($query -> num_rows() >= 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
    
  }

	public function ver_rango($data)
  {
    $idrango=$data;
    $this->db->select('IdRango,NombreRango');
    $this->db->from('rangos');
    $this->db->where('IdRango',$idrango);
    $query = $this->db->get();

   if($query -> num_rows() >= 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
    
  }

	public function rango_existente($data)
  {
    $nombrerango=$data['NombreRango'];
    
    $this->db->select('IdRango,NombreRango');
    $this->db->from('rangos');
    $this->db->where('NombreRango',$nombrerango);
    $this -> db -> limit(1);

    $query = $this->db->get();

    if($query -> num_rows() == 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }

  }

	public function registro_rango($data)
  {
    $this->db->insert('rangos', $data);
    return true;
  }


	public function editar_rango($data)
  {
    $idrango=$data['IdRango'];
   
    $this->db->where('IdRango',$idrango);
    $this->db->update('rangos',$data);
    

  }	
  
	public function eliminar_rango($data)
  {
    $idrango=$data;
   
    $this->db->where('IdRango',$idrango);
    $this->db->delete('rangos');
    

  }	

 

}
