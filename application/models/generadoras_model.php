<?php

class Generadoras_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

 public function inmuebles_panel($data)
  {
    $idinmueble=$data;

    $this->db->select('IdGeneradora,IdInmueble,ConceptoGeneradora,DescripcionGeneradora,FechaGeneradora,UnidadGeneradora,CantidadGeneradora,PrecioUnitarioGeneradora,PecioTotalGeneradora');
    $this->db->from('generadoras');
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
  


	public function todos_generadoras()
  {
    
  	$this->db->select('g.IdGeneradora,g.IdInmueble,g.ConceptoGeneradora,g.DescripcionGeneradora,g.FechaGeneradora,g.UnidadGeneradora,g.CantidadGeneradora,g.PrecioUnitarioGeneradora,g.PecioTotalGeneradora, i.NombreInmueble');
    $this->db->from('generadoras g' );
    $this->db->join('Inmuebles i', 'g.IdInmueble = i.IdInmueble');
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
  
  public function ver_generadora($data)
  {
    $idgeneradora=$data;
    $this->db->select('g.IdGeneradora,g.IdInmueble,g.ConceptoGeneradora,g.DescripcionGeneradora,g.FechaGeneradora,g.UnidadGeneradora,g.CantidadGeneradora,g.PrecioUnitarioGeneradora,g.PecioTotalGeneradora, i.NombreInmueble');
    $this->db->from('generadoras g');
    $this->db->join('Inmuebles i', 'g.IdInmueble = i.IdInmueble');
    $this->db->where('IdGeneradora',$idgeneradora);
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
  
  public function generadora_existente($data)
  {
    $Conceptogeneradora=$data['ConceptoGeneradora'];
    $Descripciongeneradora=$data['DescripcionGeneradora'];
    $this->db->select('IdGeneradora,IdInmueble,ConceptoGeneradora');
    $this->db->from('generadoras');
    $this->db->where('ConceptoGeneradora',$Conceptogeneradora);
    $this->db->where('DescripcionGeneradora',$Descripciongeneradora);
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
  
	public function registro_generadora($data)
  {
    $this->db->insert('generadoras', $data);
    return true;
  }
  
  public function editar_generadora($data)
  {
    $idgeneradora=$data['IdGeneradora'];
   
    $this->db->where('IdGeneradora',$idgeneradora);
    $this->db->update('generadoras',$data);
    

  }

	public function eliminar_generadora($data)
  {
    $idgeneradora=$data;
   
    $this->db->where('IdGeneradora',$idgeneradora);
    $this->db->delete('generadoras');
    

  }	
}
