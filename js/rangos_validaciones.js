$(document).ready(function(){

 

//Validacion rapida de campos

	
	$('#NombreRango').focusout( function(){
			if( $("#NombreRango").val().length <= 2)
			{
				$('#MensajeRango').html("Rango: <span style='color:#f00'>El nombre de el rango debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeRango').html("Rango:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	
//Validacion rapida de campos  //	
	


	//Validacion de nuenvo rango

	$('#formNuevoRango').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreRango").val().length <= 2 )
		{
			if( $("#NombreRango").val().length <= 2)
			{
				$('#MensajeRango').html("Rango: <span style='color:#f00'>El nombre de el rango debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeRango').html("Rango:");
				NombreUsuario= $("#NombreRango").val();
			}

			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/rangos/registro_rango",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/rangos/panel_control_rango";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese rango ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarRango').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreRango").val().length <= 2 )
		{
			if( $("#NombreRango").val().length <= 2)
			{
				$('#MensajeRango').html("Rango: <span style='color:#f00'>El nombre de el rango debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeRango').html("Rango:");
				NombreUsuario= $("#NombreRango").val();
			}
			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/rangos/guardar_cambios_rango",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/rangos/panel_control_rango";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese rango ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	

});
