<?php

class Accesorios_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

 public function areas_panel($data)
  {
  	$idarea=$data;
    $this->db->select('IdAccesorio,IdArea,NombreAccesorio,EstadoAccesorio,MarcaAccesorio,FechaUltimoMantoAccesorio,DescripcionAccesorio');
    $this->db->from('accesorios');
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


	public function todos_accesorios()
  {
    $this->db->select('t.IdAccesorio,t.IdArea,t.NombreAccesorio,t.EstadoAccesorio,t.MarcaAccesorio,t.FechaUltimoMantoAccesorio,t.DescripcionAccesorio,a.NombreArea');
    $this->db->from('accesorios t');
    $this->db->join('areas a', 't.IdArea = a.IdArea');
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
  
   public function ver_accesorio($data)
  {
    $idaccesorio=$data;
    $this->db->select('t.IdAccesorio,t.IdArea,t.NombreAccesorio,t.EstadoAccesorio,t.MarcaAccesorio,t.FechaUltimoMantoAccesorio,t.DescripcionAccesorio,a.NombreArea');
    $this->db->from('accesorios t');
    $this->db->join('areas a', 't.IdArea = a.IdArea');
    $this->db->where('IdAccesorio',$idaccesorio);
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
  
  public function registro_accesorio($data)
  {
    $this->db->insert('accesorios', $data);
    return true;
  }
  
  public function editar_accesorio($data)
  {
    $idaccesorio=$data['IdAccesorio'];
   
    $this->db->where('IdAccesorio',$idaccesorio);
    $this->db->update('accesorios',$data);
    return true;

  }
  
  public function eliminar_accesorio($data)
  {
    $idaccesorio=$data;
   
    $this->db->where('IdAccesorio',$idaccesorio);
    $this->db->delete('accesorios');
    

  }		

}
