<?php

class Modulos_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  public function buscar_modulos($data)
  {
    $idmodulo=$data;

    $this->db->select('IdModulo,NombreModulo,UrlModulo ');
    $this->db->from('modulos');
    $this->db->where('IdModulo',$idmodulo);


    $query = $this->db->get();

    if($query -> num_rows() > 0)
    {
      return $query->result();
    }
    else
    {
      return false;
    }

  }

	public function todos_modulos()
  {
    
   $query = $this->db->get('modulos');

   if($query -> num_rows() >= 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
    
  }
  
  public function ver_modulo($data)
  {
    $idmodulo=$data;
    $this->db->select('IdModulo,NombreModulo');
    $this->db->from('modulos');
    $this->db->where('IdModulo',$idmodulo);
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
  
  public function modulo_existente($data)
  {
    $nombremodulo=$data['NombreModulo'];
    
    $this->db->select('IdModulo,NombreModulo');
    $this->db->from('modulos');
    $this->db->where('NombreModulo',$nombremodulo);
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

	public function editar_modulo($data)
  {
    $idmodulo=$data['IdModulo'];
   
    $this->db->where('IdModulo',$idmodulo);
    $this->db->update('modulos',$data);
    

  }	
  
  public function registro_modulo($data)
  {
    $this->db->insert('modulos', $data);
    return true;
  }
  
  public function eliminar_modulo($data)
  {
    $idmodulo=$data;
   
    $this->db->where('IdModulo',$idmodulo);
    $this->db->delete('modulos');
    

  }	
}
