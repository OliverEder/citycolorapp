<?php

class Clientes_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  public function login($data)
  {
    $idusuario=$data['IdUsuario'];

    $this->db->select('IdCliente,NombreCliente,RfcCliente,DireccionCliente');
    $this->db->from('clientes');
    $this->db->where('IdUsuario',$idusuario);
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

	public function todos_clientes()
  {
    
   $query = $this->db->get('clientes');

   if($query -> num_rows() >= 1)
    {
      return $query->result();
    }
    else
    {
      return false;
    }
    
  }
  
  public function ver_cliente($data)
  {
    $idcliente=$data;
    $this->db->select('c.IdCliente,c.IdUsuario,c.NombreCliente,c.RfcCliente,c.DireccionCliente, u.NombreUsuario');
    $this->db->from('clientes c');
    $this->db->join('usuarios u', 'c.IdUsuario = c.IdUsuario');
    $this->db->where('IdCliente',$idcliente);
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
  
  public function cliente_existente($data)
  {
    $nombrecliente=$data['NombreCliente'];
    $rfccliente=$data['RfcCliente'];
    $idusuario=$data['IdUsuario'];
 
    $this->db->select('IdCliente,NombreCliente, RfcCliente,DireccionCliente,IdUsuario');
    $this->db->from('clientes');
    $this->db->where('NombreCliente',$nombrecliente);
    $this->db->where('IdUsuario',$idusuario);
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
  
  
  
  
  public function registro_cliente($data)
  {
    $this->db->insert('clientes', $data);
    return true;
  }
  
  public function editar_cliente($data)
  {
    $idcliente=$data['IdCliente'];
   
    $this->db->where('IdCliente',$idcliente);
    $this->db->update('clientes',$data);
    

  }
  
  public function eliminar_cliente($data)
  {
    $idcliente=$data;
   
    $this->db->where('IdCliente',$idcliente);
    $this->db->delete('clientes');
    

  }	
  
}
