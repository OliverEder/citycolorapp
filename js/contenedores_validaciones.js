$(document).ready(function(){

 

//Validacion rapida de campos

	
	$('#NombreContenedor').focusout( function(){
			if( $("#NombreContenedor").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#TipoContenedor').focusout( function(){
			if( $("#TipoContenedor").val().length <= 2)
			{
				$('#MensajeTipo').html("Tipo: <span style='color:#f00'>El tipo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeTipo').html("Tipo:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#CapacidadContenedor').focusout( function(){
			if( $("#CapacidadContenedor").val().length <= 2)
			{
				$('#MensajeCapacidad').html("Capacidad: <span style='color:#f00'>La capacidad debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCapacidad').html("Capacidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#EstadoContenedor').focusout( function(){
			if( $("#EstadoContenedor").val().length <= 1)
			{
				$('#MensajeEstado').html("Estado: <span style='color:#f00'>El estado debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeEstado').html("Estado:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#FlotadorContenedor').focusout( function(){
			if( $("#FlotadorContenedor").val().length <= 1)
			{
				$('#MensajeFlotador').html("Flotador: <span style='color:#f00'>el flotador debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFlotador').html("Flotador:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#PeriodicidadAsceoContenedor').focusout( function(){
			if( $("#PeriodicidadAsceoContenedor").val().length <= 1)
			{
				$('#MensajePeriodicidadAsceo').html("Periodicidad: <span style='color:#f00'>la periodicidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadAsceo').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#FechaUltimoAsceoContenedor').focusout( function(){
			if( $("#FechaUltimoAsceoContenedor").val().length <= 1)
			{
				$('#MensajeFechaUltimoAsceo').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoAsceo').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	$('#DescripcionContenedor').focusout( function(){
			if( $("#DescripcionContenedor").val().length <= 1)
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
	


	//Validacion de nuenvo contenedor

	$('#formNuevoContenedor').submit(function(e){
		e.preventDefault();
		
	
		if( $("#NombreContenedor").val().length <= 2 || $("#TipoContenedor").val().length <= 2 || $("#CapacidadContenedor").val().length <= 2 || $("#EstadoContenedor").val().length <= 1 || $("#FlotadorContenedor").val().length <= 1 || $("#PeriodicidadAsceoContenedor").val().length <= 1 || $("#FechaUltimoAsceoContenedor").val().length <= 1 ||$("#DescripcionContenedor").val().length <= 1 )
		{
			if( $("#NombreContenedor").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>el nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#TipoContenedor").val().length <= 2)
			{
				$('#MensajeTipo').html("Tipo: <span style='color:#f00'>El tipo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeTipo').html("Tipo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#CapacidadContenedor").val().length <= 2)
			{
				$('#MensajeCapacidad').html("Capacidad: <span style='color:#f00'>La Capacidad debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCapacidad').html("Capacidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#EstadoContenedor").val().length <= 1)
			{
				$('#MensajeEstado').html("Estado: <span style='color:#f00'>El estado debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeEstado').html("Estado:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FlotadorContenedor").val().length <= 1)
			{
				$('#MensajeFlotador').html("Flotador: <span style='color:#f00'>Los Flotador deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFlotador').html("Flotador:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#PeriodicidadAsceoContenedor").val().length <= 1)
			{
				$('#MensajePeriodicidadAsceo').html("Periodicidad: <span style='color:#f00'>la periodicidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadAsceo').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaUltimoAsceoContenedor").val().length <= 1)
			{
				$('#MensajeFechaUltimoAsceo').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoAsceo').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaUltimoAsceoContenedor").val().length <= 1)
			{
				$('#MensajeFechaUltimoAsceo').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoAsceo').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#DescripcionContenedor").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/contenedores/registro_contenedor",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/contenedores/panel_control_contenedor";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese contenedor ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarContenedor').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreContenedor").val().length <= 2 || $("#TipoContenedor").val().length <= 2 || $("#CapacidadContenedor").val().length <= 2 || $("#EstadoContenedor").val().length <= 1 || $("#FlotadorContenedor").val().length <= 1 || $("#PeriodicidadAsceoContenedor").val().length <= 1 || $("#FechaUltimoAsceoContenedor").val().length <= 1 ||$("#DescripcionContenedor").val().length <= 1)
		{
			if( $("#NombreContenedor").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>La Nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#TipoContenedor").val().length <= 2)
			{
				$('#MensajeTipo').html("Tipo: <span style='color:#f00'>El tipo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeTipo').html("Tipo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#CapacidadContenedor").val().length <= 2)
			{
				$('#MensajeCapacidad').html("Capacidad: <span style='color:#f00'>La Capacidad debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCapacidad').html("Capacidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#EstadoContenedor").val().length <= 1)
			{
				$('#MensajeEstado').html("Estado: <span style='color:#f00'>La temeperatura debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeEstado').html("Estado:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FlotadorContenedor").val().length <= 1)
			{
				$('#MensajeFlotador').html("Flotador: <span style='color:#f00'>Los Flotador deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFlotador').html("Flotador:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#PeriodicidadAsceoContenedor").val().length <= 1)
			{
				$('#MensajePeriodicidadAsceo').html("Periodicidad: <span style='color:#f00'>la periodicidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadAsceo').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaUltimoAsceoContenedor").val().length <= 1)
			{
				$('#MensajeFechaUltimoAsceo').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoAsceo').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaUltimoAsceoContenedor").val().length <= 1)
			{
				$('#MensajeFechaUltimoAsceo').html("Ultimo asceo: <span style='color:#f00'>El ultimo asceo deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoAsceo').html("Ultimo asceo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#DescripcionContenedor").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/contenedores/guardar_cambios_contenedor",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/contenedores/panel_control_contenedor";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese contenedor ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	

});
