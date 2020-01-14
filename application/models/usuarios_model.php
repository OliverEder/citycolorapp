<?php

class Usuarios_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  public function login($data)
  {
    $nombreusuario=$data['NombreUsuario'];
    $passwordusuario=$data['PasswordUsuario'];
    $this->db->select('IdUsuario,IdRango,NombreUsuario,PasswordUsuario,EmailUsuario');
    $this->db->from('usuarios');
    $this->db->where('NombreUsuario',$nombreusuario);
    $this->db->where('PasswordUsuario',$passwordusuario);
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

	public function todos_usuarios()
  {
    $this->db->select('u.IdUsuario,u.NombreUsuario,u.EmailUsuario,r.NombreRango');
    $this->db->from('usuarios u');
    $this->db->join('rangos r', 'u.IdRango = r.IdRango');
    $this->db->order_by("r.NombreRango", "asc");
    $this->db->order_by("u.IdUsuario", "asc"); 
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
  
	public function ver_usuario($data)
  {
    $idusuario=$data;
    $this->db->select('u.IdUsuario,u.NombreUsuario,u.PasswordUsuario,u.EmailUsuario,u.IdRango,r.NombreRango');
    $this->db->from('usuarios u');
    $this->db->join('rangos r', 'u.IdRango = r.IdRango');
    $this->db->where('IdUsuario',$idusuario);
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

	public function usuario_existente($data)
  {
    $nombreusuario=$data['NombreUsuario'];
    $emailusuario=$data['EmailUsuario'];
    $this->db->select('IdUsuario,IdRango,NombreUsuario,PasswordUsuario,EmailUsuario');
    $this->db->from('usuarios');
    $this->db->where('NombreUsuario',$nombreusuario);
    $this->db->or_where('EmailUsuario',$emailusuario);
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
  
  public function usuario_existente_editar($data)
  {
    $nombreusuario=$data['NombreUsuario'];
    $emailusuario=$data['EmailUsuario'];
    $idrango=$data['IdRango'];
    $this->db->select('IdUsuario,IdRango,NombreUsuario,PasswordUsuario,EmailUsuario');
    $this->db->from('usuarios');
    $this->db->where('NombreUsuario',$nombreusuario);
    $this->db->where('EmailUsuario',$emailusuario);
     $this->db->where('IdRango',$idrango);
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
  
  public function editar_usuario($data)
  {
    $idusuario=$data['IdUsuario'];
   
    $this->db->where('IdUsuario',$idusuario);
    $this->db->update('usuarios',$data);
    

  }	
  
  

	public function eliminar_usuario($data)
  {
    $idusuario=$data;
   
    $this->db->where('IdUsuario',$idusuario);
    $this->db->delete('usuarios');
    

  }	
	
  public function registro_usuario($data)
  {
    $this->db->insert('usuarios', $data);
    return true;
  }
}
