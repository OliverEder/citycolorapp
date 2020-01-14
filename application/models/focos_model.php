<?php

class Focos_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  public function areas_panel($data)
  {
    $idarea=$data;

    $this->db->select('IdFoco,MarcaFoco,TipoFoco,FormaFoco,TemperaturaColorFoco,WattsFoco');
    $this->db->from('focos');
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

 	public function todos_focos()
  {
    $this->db->select('f.IdFoco,f.IdArea,f.MarcaFoco, f.TipoFoco,f.FormaFoco,f.TemperaturaColorFoco,f.WattsFoco, a.NombreArea');
    $this->db->from('focos f');
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

	public function ver_foco($data)
  {
    $idfoco=$data;
    $this->db->select('f.IdFoco,f.IdArea,f.MarcaFoco, f.TipoFoco,f.FormaFoco,f.TemperaturaColorFoco,f.WattsFoco, a.NombreArea');
    $this->db->from('focos f');
    $this->db->join('areas a', 'f.IdArea = a.IdArea');
    $this->db->where('IdFoco',$idfoco);
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
  
   public function registro_foco($data)
  {
    $this->db->insert('focos', $data);
    return true;
  }
  
  public function editar_foco($data)
  {
    $idfoco=$data['IdFoco'];
   
    $this->db->where('IdFoco',$idfoco);
    $this->db->update('focos',$data);
    

  }
  
  public function eliminar_foco($data)
  {
    $idfoco=$data;
   
    $this->db->where('IdFoco',$idfoco);
    $this->db->delete('focos');
    

  }	
}
