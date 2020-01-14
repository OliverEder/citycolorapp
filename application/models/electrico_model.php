<?php

class Electrico_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

 public function areas_panel($data)
  {
  	$idarea=$data;
    $this->db->select('IdElectrico,IdArea,UnidadElectrico,CantidadElectrico,NombreElectrico,FechaUltimoMantoElectrico,PeriodicidadMantoElectrico,DescripcionElectrico');
    $this->db->from('electricos');
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

	public function todos_electrico()
  {
    $this->db->select('f.IdElectrico,f.IdArea,f.NombreElectrico,f.CantidadElectrico,f.UnidadElectrico,f.FechaUltimoMantoElectrico,f.PeriodicidadMantoElectrico,f.DescripcionElectrico,a.NombreArea');
    $this->db->from('electricos f');
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
  
   public function ver_electrico($data)
  {
    $idelectrico=$data;
    $this->db->select('f.IdElectrico,f.IdArea,f.NombreElectrico,f.CantidadElectrico,f.UnidadElectrico,f.FechaUltimoMantoElectrico,f.PeriodicidadMantoElectrico,f.DescripcionElectrico,a.NombreArea');
    $this->db->from('electricos f');
    $this->db->join('areas a', 'f.IdArea = a.IdArea');
    $this->db->where('IdElectrico',$idelectrico);
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
  
  public function registro_electrico($data)
  {
    $this->db->insert('electricos', $data);
    return true;
  }
  
  public function editar_electrico($data)
  {
    $idelectrico=$data['IdElectrico'];
   
    $this->db->where('IdElectrico',$idelectrico);
    $this->db->update('electricos',$data);
    

  }
  
  public function eliminar_electrico($data)
  {
    $idelectrico=$data;
   
    $this->db->where('IdElectrico',$idelectrico);
    $this->db->delete('electricos');
    

  }		

}
