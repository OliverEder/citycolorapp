$(document).ready(function(){

 

//Validacion rapida de campos

	
	$('#MaterialTuberia').focusout( function(){
			if( $("#MaterialTuberia").val().length <= 2)
			{
				$('#MensajeMaterial').html("Material: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeMaterial').html("Material:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#LongitudTuberia').focusout( function(){
			if( $("#LongitudTuberia").val().length <= 1)
			{
				$('#MensajeLongitud').html("Longitud: <span style='color:#f00'>Longitud debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeLongitud').html("Longitud:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	
	$('#EstadoTuberia').focusout( function(){
			if( $("#EstadoTuberia").val().length <= 1)
			{
				$('#MensajeEstado').html("Estado: <span style='color:#f00'>El estado debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeEstado').html("Estado:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
		
	
	$('#FechaUltimoMantoTuberia').focusout( function(){
			if( $("#FechaUltimoMantoTuberia").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	$('#DescripcionTuberia').focusout( function(){
			if( $("#DescripcionTuberia").val().length <= 1)
			{
				$('#MensajeDescripcion').html("Descripccion: <span style='color:#f00'>La descripccion deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeDescripcion').html("Descripccion:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
//Validacion rapida de campos  //	
	


	//Validacion de nuenvo tuberia

	$('#formNuevoTuberia').submit(function(e){
		e.preventDefault();
		
	
		if( $("#MaterialTuberia").val().length <= 2 || $("#LongitudTuberia").val().length <= 1 ||$("#EstadoTuberia").val().length <= 1 ||$("#FechaUltimoMantoTuberia").val().length <= 1 ||$("#DescripcionTuberia").val().length <= 1)
		{
			if( $("#MaterialTuberia").val().length <= 2)
			{
				$('#MensajeMaterial').html("Material: <span style='color:#f00'>el Material debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeMaterial').html("Material:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#LongitudTuberia").val().length <= 1)
			{
				$('#MensajeLongitud').html("Longitud: <span style='color:#f00'>Longitud debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeLongitud').html("Longitud:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#EstadoTuberia").val().length <= 1)
			{
				$('#MensajeEstado').html("Estado: <span style='color:#f00'>El estado debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeEstado').html("Estado:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
				
			if( $("#MensajeFechaUltimoManto").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
				
			if( $("#DescripcionTuberia").val().length <= 1)
			{
				$('#MensajeDescripcion').html("Descripccion: <span style='color:#f00'>La descripccion deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeDescripcion').html("Descripccion:");
				NombreUsuario= $("#NombreRango").val();
			}
			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/tuberias/registro_tuberia",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/tuberias/panel_control_tuberia";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese tuberia ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarTuberia').submit(function(e){
		e.preventDefault();
		
	
		if($("#MaterialTuberia").val().length <= 2 || $("#LongitudTuberia").val().length <= 1 ||$("#EstadoTuberia").val().length <= 1 ||$("#FechaUltimoMantoTuberia").val().length <= 1 ||$("#DescripcionTuberia").val().length <= 1 )
		{
			if( $("#MaterialTuberia").val().length <= 2)
			{
				$('#MensajeMaterial').html("Material: <span style='color:#f00'>La Material debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeMaterial').html("Material:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#LongitudTuberia").val().length <= 1)
			{
				$('#MensajeLongitud').html("Longitud: <span style='color:#f00'>Longitud debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeLongitud').html("Longitud:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			
			if( $("#EstadoTuberia").val().length <= 1)
			{
				$('#MensajeEstado').html("Estado: <span style='color:#f00'>La temeperatura debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeEstado').html("Estado:");
				NombreUsuario= $("#NombreRango").val();
			}
			
									
			if( $("#FechaUltimoMantoTuberia").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#DescripcionTuberia").val().length <= 1)
			{
				$('#MensajeDescripcion').html("Descripccion: <span style='color:#f00'>La descripccion deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeDescripcion').html("Descripccion:");
				NombreUsuario= $("#NombreRango").val();
			}
			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/tuberias/guardar_cambios_tuberia",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/tuberias/panel_control_tuberia";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese tuberia ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	

});
