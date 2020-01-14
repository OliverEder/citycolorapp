<?php

class Contenedores_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  public function areas_panel($data)
  {
  	$idarea=$data;
    $this->db->select('IdContenedor,IdArea,NombreContenedor,TipoContenedor,CapacidadContenedor,EstadoContenedor,FlotadorContenedor,PeriodicidadAsceoContenedor,FechaUltimoAsceoContenedor,DescripcionContenedor');
    $this->db->from('contenedores');
    $this->db->where('IdArea',$idarea);
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

	public function todos_contenedores()
  {
    $this->db->select('c.IdContenedor,c.IdArea,c.NombreContenedor,c.TipoContenedor,c.CapacidadContenedor,c.EstadoContenedor,c.FlotadorContenedor,c.PeriodicidadAsceoContenedor,c.FechaUltimoAsceoContenedor,c.DescripcionContenedor,a.NombreArea');
    $this->db->from('contenedores c');
    $this->db->join('areas a', 'c.IdArea = a.IdArea');
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
  
   public function ver_contenedor($data)
  {
    $idcontenedor=$data;
    $this->db->select('c.IdContenedor,c.IdArea,c.NombreContenedor,c.TipoContenedor,c.CapacidadContenedor,c.EstadoContenedor,c.FlotadorContenedor,c.PeriodicidadAsceoContenedor,c.FechaUltimoAsceoContenedor,c.DescripcionContenedor,a.NombreArea');
    $this->db->from('contenedores c');
    $this->db->join('areas a', 'c.IdArea = a.IdArea');
    $this->db->where('IdContenedor',$idcontenedor);
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
  
  public function permiso_existente($data)
  {
    $idrango=$data['IdRango'];
    $idmodulo=$data['IdModulo'];
    $this->db->select('IdPermiso, IdRango,IdModulo');
    $this->db->from('permisos');
    $this->db->where('IdRango',$idrango);
    $this->db->where('IdModulo',$idmodulo);
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
  
  public function registro_contenedor($data)
  {
    $this->db->insert('contenedores', $data);
    return true;
  }
  
  public function editar_contenedor($data)
  {
    $idcontenedor=$data['IdContenedor'];
   
    $this->db->where('IdContenedor',$idcontenedor);
    $this->db->update('contenedores',$data);
    

  }
  
  public function eliminar_contenedor($data)
  {
    $idcontenedor=$data;
   
    $this->db->where('IdContenedor',$idcontenedor);
    $this->db->delete('contenedores');
    

  }		

}
