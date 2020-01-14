<?php

class Fisico_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

 public function areas_panel($data)
  {
  	$idarea=$data;
    $this->db->select('IdFisico,IdArea,UnidadFisico,CantidadFisico,NombreFisico,FechaUltimoMantoFisico,PeriodicidadMantoFisico,DescripcionFisico');
    $this->db->from('fisico');
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

	public function todos_fisico()
  {
    $this->db->select('f.IdFisico,f.IdArea,f.NombreFisico,f.CantidadFisico,f.UnidadFisico,f.FechaUltimoMantoFisico,f.PeriodicidadMantoFisico,f.DescripcionFisico,a.NombreArea');
    $this->db->from('fisico f');
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
  
   public function ver_fisico($data)
  {
    $idfisico=$data;
    $this->db->select('f.IdFisico,f.IdArea,f.NombreFisico,f.CantidadFisico,f.UnidadFisico,f.FechaUltimoMantoFisico,f.PeriodicidadMantoFisico,f.DescripcionFisico,a.NombreArea');
    $this->db->from('fisico f');
    $this->db->join('areas a', 'f.IdArea = a.IdArea');
    $this->db->where('IdFisico',$idfisico);
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
  
  public function registro_fisico($data)
  {
    $this->db->insert('fisico', $data);
    return true;
  }
  
  public function editar_fisico($data)
  {
    $idfisico=$data['IdFisico'];
   
    $this->db->where('IdFisico',$idfisico);
    $this->db->update('fisico',$data);
    

  }
  
  public function eliminar_fisico($data)
  {
    $idfisico=$data;
   
    $this->db->where('IdFisico',$idfisico);
    $this->db->delete('fisico');
    

  }		

}
