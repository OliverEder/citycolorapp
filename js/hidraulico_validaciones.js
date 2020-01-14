$(document).ready(function(){

 

//Validacion rapida de campos

	
	$('#NombreHidraulico').focusout( function(){
			if( $("#NombreHidraulico").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#CantidadHidraulico').focusout( function(){
			if( $("#CantidadHidraulico").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>La cantidad debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
		
	$('#UnidadHidraulico').focusout( function(){
			if( $("#UnidadHidraulico").val().length <= 1)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
		
	$('#PeriodicidadMantoHidraulico').focusout( function(){
			if( $("#PeriodicidadMantoHidraulico").val().length <= 0)
			{
				$('#MensajePeriodicidadManto').html("Periodicidad: <span style='color:#f00'>La periodicidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadManto').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#FechaUltimoMantoHidraulico').focusout( function(){
			if( $("#FechaUltimoMantoHidraulico").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento: <span style='color:#f00'>El ultimo mantenimiento deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	$('#DescripcionHidraulico').focusout( function(){
			if( $("#DescripcionHidraulico").val().length <= 1)
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
	


	//Validacion de nuenvo hidraulico

	$('#formNuevoHidraulico').submit(function(e){
		e.preventDefault();
		
	
		if( $("#NombreHidraulico").val().length <= 2 || $("#CantidadHidraulico").val().length <= 0 || $("#UnidadHidraulico").val().length <= 1 ||  $("#PeriodicidadMantoHidraulico").val().length <= 0 || $("#FechaUltimoMantoHidraulico").val().length <= 1 ||$("#DescripcionHidraulico").val().length <= 1 )
		{
			if( $("#NombreHidraulico").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#CantidadHidraulico").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>La cantidad debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#UnidadHidraulico").val().length <= 1)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#PeriodicidadMantoHidraulico").val().length <= 0)
			{
				$('#MensajePeriodicidadManto').html("Periodicidad: <span style='color:#f00'>La periodicidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadManto').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaUltimoMantoHidraulico").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento: <span style='color:#f00'>El ultimo mantenimiento deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#DescripcionHidraulico").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/hidraulico/registro_hidraulico",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/hidraulico/panel_control_hidraulico";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese hidraulico ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarHidraulico').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreHidraulico").val().length <= 2 || $("#CantidadHidraulico").val().length <= 0 || $("#UnidadHidraulico").val().length <= 1 ||  $("#PeriodicidadMantoHidraulico").val().length <= 0 || $("#FechaUltimoMantoHidraulico").val().length <= 1 ||$("#DescripcionHidraulico").val().length <= 1)
		{
			if( $("#NombreHidraulico").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#CantidadHidraulico").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>La cantidad debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#UnidadHidraulico").val().length <= 1)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#PeriodicidadMantoHidraulico").val().length <= 0)
			{
				$('#MensajePeriodicidadManto').html("Periodicidad: <span style='color:#f00'>La periodicidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadManto').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaUltimoMantoHidraulico").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento: <span style='color:#f00'>El ultimo mantenimiento deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#DescripcionHidraulico").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/hidraulico/guardar_cambios_hidraulico",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/hidraulico/panel_control_hidraulico";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese hidraulico ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	

});
