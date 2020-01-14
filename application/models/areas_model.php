<?php

class Areas_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  public function inmuebles_panel($data)
  {
    $idinmueble=$data;

    $this->db->select('IdArea,IdInmueble,NombreArea');
    $this->db->from('areas');
    $this->db->where('IdInmueble',$idinmueble);


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

  public function area($data)
  {
    $idarea=$data;

    $this->db->select('IdArea,IdInmueble, NombreArea');
    $this->db->from('areas');
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

	public function todos_areas()
  {
    
   $query = $this->db->get('areas');

   if($query -> num_rows() >= 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
    
  }
  
  public function ver_area($data)
  {
    $idarea=$data;
    $this->db->select('a.IdArea,i.IdInmueble,i.NombreInmueble,a.NombreArea');
    $this->db->from('areas a');
    $this->db->join('Inmuebles i', 'a.IdInmueble = i.IdInmueble');
    $this->db->where('IdArea',$idarea);
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
  
  public function area_existente($data)
  {
    $nombrearea=$data['NombreArea'];
    $idinmueble=$data['IdInmueble'];
    $this->db->select('IdArea,IdInmueble,NombreArea');
    $this->db->from('areas');
    $this->db->where('NombreArea',$nombrearea);
    //$this->db->or_where('DireccionInmueble',$direccioninmueble);
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
  
	public function registro_area($data)
  {
    $this->db->insert('areas', $data);
    return true;
  }
  
  public function editar_area($data)
  {
    $idarea=$data['IdArea'];
   
    $this->db->where('IdArea',$idarea);
    $this->db->update('areas',$data);
    

  }

	public function eliminar_area($data)
  {
    $idarea=$data;
   
    $this->db->where('IdArea',$idarea);
    $this->db->delete('areas');
    

  }	
}
