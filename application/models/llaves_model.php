<?php

class Llaves_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

	public function areas_panel($data)
  {
  	$idarea=$data;
    $this->db->select('IdLlave,IdArea,NombreLlave,TipoLlave,EstadoLlave,FechaUltimoMantoLlave,DescripcionLlave');
    $this->db->from('llaves');
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
  

	public function todos_llaves()
  {
    $this->db->select('l.IdLlave,l.IdArea,l.NombreLlave,l.TipoLlave,l.EstadoLlave,l.FechaUltimoMantoLlave,l.DescripcionLlave,a.NombreArea');
    $this->db->from('llaves l');
    $this->db->join('areas a', 'l.IdArea = a.IdArea');
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
  
   public function ver_llave($data)
  {
    $idllave=$data;
    $this->db->select('l.IdLlave,l.IdArea,l.NombreLlave,l.TipoLlave,l.EstadoLlave,l.FechaUltimoMantoLlave,l.DescripcionLlave,a.NombreArea');
    $this->db->from('llaves l');
    $this->db->join('areas a', 'l.IdArea = a.IdArea');
    $this->db->where('IdLlave',$idllave);
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
  
  public function registro_llave($data)
  {
    $this->db->insert('llaves', $data);
    return true;
  }
  
  public function editar_llave($data)
  {
    $idllave=$data['IdLlave'];
   
    $this->db->where('IdLlave',$idllave);
    $this->db->update('llaves',$data);
    

  }
  
  public function eliminar_llave($data)
  {
    $idllave=$data;
   
    $this->db->where('IdLlave',$idllave);
    $this->db->delete('llaves');
    

  }		

}
