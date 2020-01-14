$(document).ready(function(){

 

//Validacion rapida de campos

	
	$('#NombreLlave').focusout( function(){
			if( $("#NombreLlave").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#TipoLlave').focusout( function(){
			if( $("#TipoLlave").val().length <= 2)
			{
				$('#MensajeTipo').html("Tipo: <span style='color:#f00'>El tipo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeTipo').html("Tipo:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	
	$('#EstadoLlave').focusout( function(){
			if( $("#EstadoLlave").val().length <= 1)
			{
				$('#MensajeEstado').html("Estado: <span style='color:#f00'>El estado debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeEstado').html("Estado:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
		
	
	$('#FechaUltimoMantoLlave').focusout( function(){
			if( $("#FechaUltimoMantoLlave").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	$('#DescripcionLlave').focusout( function(){
			if( $("#DescripcionLlave").val().length <= 1)
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
	


	//Validacion de nuenvo llave

	$('#formNuevoLlave').submit(function(e){
		e.preventDefault();
		
	
		if( $("#NombreLlave").val().length <= 2 || $("#TipoLlave").val().length <= 2 ||$("#EstadoLlave").val().length <= 1 ||$("#FechaUltimoMantoLlave").val().length <= 1 ||$("#DescripcionLlave").val().length <= 1)
		{
			if( $("#NombreLlave").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>el nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#TipoLlave").val().length <= 2)
			{
				$('#MensajeTipo').html("Tipo: <span style='color:#f00'>El tipo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeTipo').html("Tipo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#EstadoLlave").val().length <= 1)
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
			
				
			if( $("#DescripcionLlave").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/llaves/registro_llave",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/llaves/panel_control_llave";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese llave ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarLlave').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreLlave").val().length <= 2 || $("#TipoLlave").val().length <= 2 ||$("#EstadoLlave").val().length <= 1 ||$("#FechaUltimoMantoLlave").val().length <= 1 ||$("#DescripcionLlave").val().length <= 1 )
		{
			if( $("#NombreLlave").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>La Nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#TipoLlave").val().length <= 2)
			{
				$('#MensajeTipo').html("Tipo: <span style='color:#f00'>El tipo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeTipo').html("Tipo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			
			if( $("#EstadoLlave").val().length <= 1)
			{
				$('#MensajeEstado').html("Estado: <span style='color:#f00'>La temeperatura debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeEstado').html("Estado:");
				NombreUsuario= $("#NombreRango").val();
			}
			
									
			if( $("#FechaUltimoMantoLlave").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#DescripcionLlave").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/llaves/guardar_cambios_llave",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/llaves/panel_control_llave";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese llave ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	

});
