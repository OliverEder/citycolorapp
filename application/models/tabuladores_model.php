<?php

class Tabuladores_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

 public function inmuebles_panel($data)
  {
    $idinmueble=$data;

    $this->db->select('IdTabulador,IdInmueble,ServiciosTabulador,ClaveTabulador,DescripcionTabulador,UnidadTabulador,PrecioUnitarioTabulador');
    $this->db->from('tabuladores');
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
  

	public function todos_tabuladores()
  {
    
  	$this->db->select('c.IdTabulador,c.IdInmueble,c.ServiciosTabulador,c.ClaveTabulador,c.DescripcionTabulador,c.UnidadTabulador,c.PrecioUnitarioTabulador,i.NombreInmueble');
    $this->db->from('tabuladores c');
    $this->db->join('Inmuebles i', 'c.IdInmueble = i.IdInmueble');
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
  
  public function ver_tabulador($data)
  {
    $idtabulador=$data;
    $this->db->select('c.IdTabulador,c.IdInmueble,c.ServiciosTabulador,c.ClaveTabulador,c.DescripcionTabulador,c.UnidadTabulador,c.PrecioUnitarioTabulador,i.NombreInmueble');
    $this->db->from('tabuladores c');
    $this->db->join('Inmuebles i', 'c.IdInmueble = i.IdInmueble');
    $this->db->where('IdTabulador',$idtabulador);
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
  
  public function tabulador_existente($data)
  {
    $Titulotabulador=$data['TituloTabulador'];
    $Descripciontabulador=$data['DescripcionTabulador'];
    $this->db->select('IdTabulador,IdInmueble,TituloTabulador');
    $this->db->from('tabuladores');
    $this->db->where('TituloTabulador',$Titulotabulador);
    $this->db->where('DescripcionTabulador',$Descripciontabulador);
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
  
	public function registro_tabulador($data)
  {
    $this->db->insert('tabuladores', $data);
    return true;
  }
  
  public function editar_tabulador($data)
  {
    $idtabulador=$data['IdTabulador'];
   
    $this->db->where('IdTabulador',$idtabulador);
    $this->db->update('tabuladores',$data);
    

  }

	public function eliminar_tabulador($data)
  {
    $idtabulador=$data;
   
    $this->db->where('IdTabulador',$idtabulador);
    $this->db->delete('tabuladores');
    

  }	
}
