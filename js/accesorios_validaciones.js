$(document).ready(function(){

 

//Validacion rapida de campos

	
	$('#NombreAccesorio').focusout( function(){
			if( $("#NombreAccesorio").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#MarcaAccesorio').focusout( function(){
			if( $("#MarcaAccesorio").val().length <= 1)
			{
				$('#MensajeMarca').html("Marca: <span style='color:#f00'>Marca debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeMarca').html("Marca:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	
	$('#EstadoAccesorio').focusout( function(){
			if( $("#EstadoAccesorio").val().length <= 1)
			{
				$('#MensajeEstado').html("Estado: <span style='color:#f00'>El estado debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeEstado').html("Estado:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
		
	
	$('#FechaUltimoMantoAccesorio').focusout( function(){
			if( $("#FechaUltimoMantoAccesorio").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	$('#DescripcionAccesorio').focusout( function(){
			if( $("#DescripcionAccesorio").val().length <= 1)
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
	


	//Validacion de nuenvo accesorio

	$('#formNuevoAccesorio').submit(function(e){
		e.preventDefault();
		
	
		if( $("#NombreAccesorio").val().length <= 2 || $("#MarcaAccesorio").val().length <= 1 ||$("#EstadoAccesorio").val().length <= 1 ||$("#FechaUltimoMantoAccesorio").val().length <= 1 ||$("#DescripcionAccesorio").val().length <= 1)
		{
			if( $("#NombreAccesorio").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>el Nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#MarcaAccesorio").val().length <= 1)
			{
				$('#MensajeMarca').html("Marca: <span style='color:#f00'>Marca debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeMarca').html("Marca:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#EstadoAccesorio").val().length <= 1)
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
			
				
			if( $("#DescripcionAccesorio").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/accesorios/registro_accesorio",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/accesorios/panel_control_accesorio";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese accesorio ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarAccesorio').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreAccesorio").val().length <= 2 || $("#MarcaAccesorio").val().length <= 1 ||$("#EstadoAccesorio").val().length <= 1 ||$("#FechaUltimoMantoAccesorio").val().length <= 1 ||$("#DescripcionAccesorio").val().length <= 1 )
		{
			if( $("#NombreAccesorio").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>La Nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#MarcaAccesorio").val().length <= 1)
			{
				$('#MensajeMarca').html("Marca: <span style='color:#f00'>Marca debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeMarca').html("Marca:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			
			if( $("#EstadoAccesorio").val().length <= 1)
			{
				$('#MensajeEstado').html("Estado: <span style='color:#f00'>La temeperatura debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeEstado').html("Estado:");
				NombreUsuario= $("#NombreRango").val();
			}
			
									
			if( $("#FechaUltimoMantoAccesorio").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#DescripcionAccesorio").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/accesorios/guardar_cambios_accesorio",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/accesorios/panel_control_accesorio";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese accesorio ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	

});
