<?php

class Tuberias_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  public function areas_panel($data)
  {
  	$idarea=$data;
    $this->db->select('IdTuberia,IdArea,MaterialTuberia,EstadoTuberia,LongitudTuberia,FechaUltimoMantoTuberia,DescripcionTuberia');
    $this->db->from('tuberias');
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
  
  
	public function todos_tuberias()
  {
    $this->db->select('t.IdTuberia,t.IdArea,t.MaterialTuberia,t.EstadoTuberia,t.LongitudTuberia,t.FechaUltimoMantoTuberia,t.DescripcionTuberia,a.NombreArea');
    $this->db->from('tuberias t');
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
  
   public function ver_tuberia($data)
  {
    $idtuberia=$data;
    $this->db->select('t.IdTuberia,t.IdArea,t.MaterialTuberia,t.EstadoTuberia,t.LongitudTuberia,t.FechaUltimoMantoTuberia,t.DescripcionTuberia,a.NombreArea');
    $this->db->from('tuberias t');
    $this->db->join('areas a', 't.IdArea = a.IdArea');
    $this->db->where('IdTuberia',$idtuberia);
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
  
  public function registro_tuberia($data)
  {
    $this->db->insert('tuberias', $data);
    return true;
  }
  
  public function editar_tuberia($data)
  {
    $idtuberia=$data['IdTuberia'];
   
    $this->db->where('IdTuberia',$idtuberia);
    $this->db->update('tuberias',$data);
    return true;

  }
  
  public function eliminar_tuberia($data)
  {
    $idtuberia=$data;
   
    $this->db->where('IdTuberia',$idtuberia);
    $this->db->delete('tuberias');
    

  }		

}
