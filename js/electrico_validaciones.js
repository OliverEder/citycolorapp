$(document).ready(function(){

 

//Validacion rapida de campos

	
	$('#NombreElectrico').focusout( function(){
			if( $("#NombreElectrico").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#CantidadElectrico').focusout( function(){
			if( $("#CantidadElectrico").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>Ingresa una cantidad</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
		
	$('#UnidadElectrico').focusout( function(){
			if( $("#UnidadElectrico").val().length <= 1)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
		
	$('#PeriodicidadMantoElectrico').focusout( function(){
			if( $("#PeriodicidadMantoElectrico").val().length <= 0)
			{
				$('#MensajePeriodicidadManto').html("Periodicidad: <span style='color:#f00'>La periodicidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadManto').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#FechaUltimoMantoElectrico').focusout( function(){
			if( $("#FechaUltimoMantoElectrico").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento: <span style='color:#f00'>El ultimo mantenimiento deben ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	$('#DescripcionElectrico').focusout( function(){
			if( $("#DescripcionElectrico").val().length <= 1)
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
	


	//Validacion de nuenvo electrico

	$('#formNuevoElectrico').submit(function(e){
		e.preventDefault();
		
	
		if( $("#NombreElectrico").val().length <= 2 || $("#CantidadElectrico").val().length <= 0 || $("#UnidadElectrico").val().length <= 1 ||  $("#PeriodicidadMantoElectrico").val().length <= 0 || $("#FechaUltimoMantoElectrico").val().length <= 1 ||$("#DescripcionElectrico").val().length <= 1 )
		{
			if( $("#NombreElectrico").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#CantidadElectrico").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>Ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#UnidadElectrico").val().length <= 1)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#PeriodicidadMantoElectrico").val().length <= 0)
			{
				$('#MensajePeriodicidadManto').html("Periodicidad: <span style='color:#f00'>La periodicidad debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadManto').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaUltimoMantoElectrico").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento: <span style='color:#f00'>El ultimo mantenimiento deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#DescripcionElectrico").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/electrico/registro_electrico",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/electrico/panel_control_electrico";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese electrico ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarElectrico').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreElectrico").val().length <= 2 || $("#CantidadElectrico").val().length <= 0 || $("#UnidadElectrico").val().length <= 1 ||  $("#PeriodicidadMantoElectrico").val().length <= 0 || $("#FechaUltimoMantoElectrico").val().length <= 1 ||$("#DescripcionElectrico").val().length <= 1)
		{
			if( $("#NombreElectrico").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#CantidadElectrico").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>Ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#UnidadElectrico").val().length <= 1)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#PeriodicidadMantoElectrico").val().length <= 0)
			{
				$('#MensajePeriodicidadManto').html("Periodicidad: <span style='color:#f00'>La periodicidad debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadManto').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaUltimoMantoElectrico").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento: <span style='color:#f00'>El ultimo mantenimiento deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#DescripcionElectrico").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/electrico/guardar_cambios_electrico",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/electrico/panel_control_electrico";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese electrico ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	

});
