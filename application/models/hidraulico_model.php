<?php

class Hidraulico_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

 public function areas_panel($data)
  {
  	$idarea=$data;
    $this->db->select('IdHidraulico,IdArea,UnidadHidraulico,CantidadHidraulico,NombreHidraulico,FechaUltimoMantoHidraulico,PeriodicidadMantoHidraulico,DescripcionHidraulico');
    $this->db->from('hidraulicos');
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

	public function todos_hidraulico()
  {
    $this->db->select('f.IdHidraulico,f.IdArea,f.NombreHidraulico,f.CantidadHidraulico,f.UnidadHidraulico,f.FechaUltimoMantoHidraulico,f.PeriodicidadMantoHidraulico,f.DescripcionHidraulico,a.NombreArea');
    $this->db->from('hidraulicos f');
    $this->db->join('areas a', 'f.IdArea = a.IdArea');
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
  
   public function ver_hidraulico($data)
  {
    $idhidraulico=$data;
    $this->db->select('f.IdHidraulico,f.IdArea,f.NombreHidraulico,f.CantidadHidraulico,f.UnidadHidraulico,f.FechaUltimoMantoHidraulico,f.PeriodicidadMantoHidraulico,f.DescripcionHidraulico,a.NombreArea');
    $this->db->from('hidraulicos f');
    $this->db->join('areas a', 'f.IdArea = a.IdArea');
    $this->db->where('IdHidraulico',$idhidraulico);
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
  
  public function registro_hidraulico($data)
  {
    $this->db->insert('hidraulicos', $data);
    return true;
  }
  
  public function editar_hidraulico($data)
  {
    $idhidraulico=$data['IdHidraulico'];
   
    $this->db->where('IdHidraulico',$idhidraulico);
    $this->db->update('hidraulicos',$data);
    

  }
  
  public function eliminar_hidraulico($data)
  {
    $idhidraulico=$data;
   
    $this->db->where('IdHidraulico',$idhidraulico);
    $this->db->delete('hidraulicos');
    

  }		

}
