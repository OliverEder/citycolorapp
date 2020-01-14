$(document).ready(function(){

	//Validacion de nuenvo Permiso

	$('#formNuevoPermiso').submit(function(e){
		e.preventDefault();
		
	
		
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/permisos/registro_permiso",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/permisos/panel_control_permiso";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese permiso ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		
   
	
	});
	

//Validacion de editar Permiso

	$('#formEditarPermiso').submit(function(e){
		e.preventDefault();
		
	
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/permisos/guardar_cambios_permiso",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/permisos/panel_control_permiso";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese modulo ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		
   
	
	});
	
//Termina validacion de editar Permiso

  $("#buscar").on('keyup',function()
  {
	 if( $("#buscar").val().length == 0)
	 {
	  $('#resultadoBusqueda').html("")
	 }
	 else{
	  var info = $(this).val();
	  $('#resultadoBusqueda').html(info)
	  var data=$(this).serializeArray();
	  $.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/permisos/busqueda",
		    data: data,
		    success: function(data)
		    {
				  
				  if(data!='no')
				  {
				  	
				  	$('#resultadoBusqueda').html(data)
				  	
				  }
				  else
				  {
				    $('#resultadoBusqueda').html("no hay resultados")
				  	
				  }
				  
		    }
      });
     } 
      
	  
  });
	

});
