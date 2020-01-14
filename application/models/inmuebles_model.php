<?php

class Inmuebles_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  public function usuario_panel($data)
  {
    $idcliente=$data['IdCliente'];

    $this->db->select('IdInmueble,NombreInmueble,DireccionInmueble');
    $this->db->from('Inmuebles');
    $this->db->where('IdCliente',$idcliente);


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

  public function inmueble($data)
  {
    $idinmueble=$data;

    $this->db->select('IdInmueble,NombreInmueble,DireccionInmueble');
    $this->db->from('Inmuebles');
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
  
  public function todos_inmuebles()
  {
    
   $query = $this->db->get('Inmuebles');

   if($query -> num_rows() >= 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
    
  }

	public function ver_inmueble($data)
  {
    $idinmueble=$data;
    $this->db->select('i.IdInmueble,i.IdCliente,i.NombreInmueble,i.DireccionInmueble, c.NombreCliente');
    $this->db->from('Inmuebles i');
    $this->db->join('clientes c', 'i.IdCliente = c.IdCliente');
    $this->db->where('IdInmueble',$idinmueble);
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

	public function inmueble_existente($data)
  {
    $nombreinmueble=$data['NombreInmueble'];
    //$direccioninmueble=$data['DireccionInmueble'];
    $this->db->select('IdInmueble,NombreInmueble,DireccionInmueble');
    $this->db->from('Inmuebles');
    $this->db->where('NombreInmueble',$nombreinmueble);
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
  
  public function registro_inmueble($data)
  {
    $this->db->insert('Inmuebles', $data);
    return true;
  }
  
  public function editar_inmueble($data)
  {
    $idinmueble=$data['IdInmueble'];
   
    $this->db->where('IdInmueble',$idinmueble);
    $this->db->update('Inmuebles',$data);
    

  }
  
  public function eliminar_inmueble($data)
  {
    $idinmueble=$data;
   
    $this->db->where('IdInmueble',$idinmueble);
    $this->db->delete('Inmuebles');
    

  }	
}
