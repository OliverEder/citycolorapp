<?php

class Permisos_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();

  }

  public function buscar_permisos($data)
  {
    $idrango=$data;

    $this->db->select('p.IdPermiso,m.NombreModulo');
    $this->db->from('permisos p');
    $this->db->join('modulos m', 'p.IdModulo = m.IdModulo');
    $this->db->where('IdRango',$idrango);


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

  //obtenemos el total de filas para hacer la paginación
  function filas()
	{
		$consulta = $this->db->get('permisos');
		return  $consulta->num_rows() ;
	}
  
  //obtenemos todas las provincias a paginar con la función
  //total_posts_paginados pasando la cantidad por página y el segmento
  //como parámetros de la misma
  function total_paginados($por_pagina,$segmento) 
  {
    $this->db->select('p.IdPermiso,p.IdRango,p.IdModulo,m.NombreModulo, m.UrlModulo,r.NombreRango');
    $this->db->from('permisos p');
   
    $this->db->join('modulos m', 'p.IdModulo = m.IdModulo');
    $this->db->join('rangos r', 'p.IdRango = r.IdRango');
    $consulta = $this->db->get('permisos',$por_pagina,$segmento);
    if($consulta->num_rows()>0)
    {
        foreach($consulta->result() as $fila)
	      {
	          $data[] = $fila;
	      }
        return $data;
    }
	}	  
	
  
  //busqueda 
  public function buscar($data)
  {
    
    $this->db->select('p.IdPermiso,p.IdRango, p.IdModulo,r.NombreRango, m.NombreModulo');
    $this->db->from('permisos p');
    $this->db->join('modulos m', 'p.IdModulo = m.IdModulo');
    $this->db->join('rangos r', 'p.IdRango = r.IdRango');
    $this->db->like('NombreRango',$data,'both');
    $this->db->or_like('NombreRango',$data,'before');
    $this->db->or_like('NombreRango',$data,'after');
    
    $this->db->or_like('NombreModulo',$data,'both');
    $this->db->or_like('NombreModulo',$data,'before');
    $this->db->or_like('NombreModulo',$data,'after');
    
 
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
  
	public function todos_permisos()
  {
    $this->db->select('p.IdPermiso,p.IdRango,p.IdModulo,m.NombreModulo, m.UrlModulo,r.NombreRango');
    $this->db->from('permisos p');
   
    $this->db->join('modulos m', 'p.IdModulo = m.IdModulo');
    $this->db->join('rangos r', 'p.IdRango = r.IdRango');
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
  
  public function ver_permiso($data)
  {
    $idpermiso=$data;
    $this->db->select('p.IdPermiso,p.IdRango, p.IdModulo,r.NombreRango, m.NombreModulo');
    $this->db->from('permisos p');
    $this->db->join('modulos m', 'p.IdModulo = m.IdModulo');
    $this->db->join('rangos r', 'p.IdRango = r.IdRango');
    $this->db->where('IdPermiso',$idpermiso);
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
  
  public function registro_permiso($data)
  {
    $this->db->insert('permisos', $data);
    return true;
  }
  
  public function editar_permiso($data)
  {
    $idpermiso=$data['IdPermiso'];
   
    $this->db->where('IdPermiso',$idpermiso);
    $this->db->update('permisos',$data);
    

  }
  
  public function eliminar_permiso($data)
  {
    $idpermiso=$data;
   
    $this->db->where('IdPermiso',$idpermiso);
    $this->db->delete('permisos');
    

  }		

}
