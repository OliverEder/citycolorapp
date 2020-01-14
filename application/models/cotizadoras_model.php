<?php

class Cotizadoras_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

 public function inmuebles_panel($data)
  {
    $idinmueble=$data;

    $this->db->select('IdCotizadora,IdInmueble,PartidaCotizadora,ConceptoCotizadora,DescripcionCotizadora,UnidadCotizadora,CantidadCotizadora,PrecioUnitarioCotizadora,PecioTotalCotizadora');
    $this->db->from('cotizadoras');
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
  

	public function todos_cotizadoras()
  {
    
  	$this->db->select('c.IdCotizadora,c.IdInmueble,c.PartidaCotizadora,c.ConceptoCotizadora,c.DescripcionCotizadora,c.UnidadCotizadora,c.CantidadCotizadora,c.PrecioUnitarioCotizadora,c.PecioTotalCotizadora,i.NombreInmueble');
    $this->db->from('cotizadoras c');
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
  
  public function ver_cotizadora($data)
  {
    $idcotizadora=$data;
    $this->db->select('c.IdCotizadora,c.IdInmueble,c.PartidaCotizadora,c.ConceptoCotizadora,c.DescripcionCotizadora,c.UnidadCotizadora,c.CantidadCotizadora,c.PrecioUnitarioCotizadora,c.PecioTotalCotizadora,i.NombreInmueble');
    $this->db->from('cotizadoras c');
    $this->db->join('Inmuebles i', 'c.IdInmueble = i.IdInmueble');
    $this->db->where('IdCotizadora',$idcotizadora);
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
  
  public function cotizadora_existente($data)
  {
    $Titulocotizadora=$data['TituloCotizadora'];
    $Descripcioncotizadora=$data['DescripcionCotizadora'];
    $this->db->select('IdCotizadora,IdInmueble,TituloCotizadora');
    $this->db->from('cotizadoras');
    $this->db->where('TituloCotizadora',$Titulocotizadora);
    $this->db->where('DescripcionCotizadora',$Descripcioncotizadora);
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
  
	public function registro_cotizadora($data)
  {
    $this->db->insert('cotizadoras', $data);
    return true;
  }
  
  public function editar_cotizadora($data)
  {
    $idcotizadora=$data['IdCotizadora'];
   
    $this->db->where('IdCotizadora',$idcotizadora);
    $this->db->update('cotizadoras',$data);
    

  }

	public function eliminar_cotizadora($data)
  {
    $idcotizadora=$data;
   
    $this->db->where('IdCotizadora',$idcotizadora);
    $this->db->delete('cotizadoras');
    

  }	
}
