$(document).ready(function(){

 

//Validacion rapida de campos

	
	$('#NombreFisico').focusout( function(){
			if( $("#NombreFisico").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#CantidadFisico').focusout( function(){
			if( $("#CantidadFisico").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>La cantidad debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
		
	$('#UnidadFisico').focusout( function(){
			if( $("#UnidadFisico").val().length <= 1)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
		
	$('#PeriodicidadMantoFisico').focusout( function(){
			if( $("#PeriodicidadMantoFisico").val().length <= 0)
			{
				$('#MensajePeriodicidadManto').html("Periodicidad: <span style='color:#f00'>La periodicidad debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadManto').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#FechaUltimoMantoFisico').focusout( function(){
			if( $("#FechaUltimoMantoFisico").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento: <span style='color:#f00'>El ultimo mantenimiento deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	$('#DescripcionFisico').focusout( function(){
			if( $("#DescripcionFisico").val().length <= 1)
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
	


	//Validacion de nuenvo fisico

	$('#formNuevoFisico').submit(function(e){
		e.preventDefault();
		
	
		if( $("#NombreFisico").val().length <= 2 || $("#CantidadFisico").val().length <= 0 || $("#UnidadFisico").val().length <= 1 ||  $("#PeriodicidadMantoFisico").val().length <= 0 || $("#FechaUltimoMantoFisico").val().length <= 1 ||$("#DescripcionFisico").val().length <= 1 )
		{
			if( $("#NombreFisico").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#CantidadFisico").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>La cantidad debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#UnidadFisico").val().length <= 1)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#PeriodicidadMantoFisico").val().length <= 0)
			{
				$('#MensajePeriodicidadManto').html("Periodicidad: <span style='color:#f00'>La periodicidad debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadManto').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaUltimoMantoFisico").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento: <span style='color:#f00'>El ultimo mantenimiento deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#DescripcionFisico").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/fisico/registro_fisico",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/fisico/panel_control_fisico";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese fisico ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarFisico').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreFisico").val().length <= 2 || $("#CantidadFisico").val().length <= 0 || $("#UnidadFisico").val().length <= 1 ||  $("#PeriodicidadMantoFisico").val().length <= 0 || $("#FechaUltimoMantoFisico").val().length <= 1 ||$("#DescripcionFisico").val().length <= 1)
		{
			if( $("#NombreFisico").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#CantidadFisico").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>La cantidad debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#UnidadFisico").val().length <= 1)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#PeriodicidadMantoFisico").val().length <= 0)
			{
				$('#MensajePeriodicidadManto').html("Periodicidad: <span style='color:#f00'>La periodicidad debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePeriodicidadManto').html("Periodicidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaUltimoMantoFisico").val().length <= 1)
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento: <span style='color:#f00'>El ultimo mantenimiento deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeFechaUltimoManto').html("Ultimo mantenimiento:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#DescripcionFisico").val().length <= 1)
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
		    url:"http://localhost/citycolorApp/index.php/fisico/guardar_cambios_fisico",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/fisico/panel_control_fisico";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese fisico ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	

});
