$(document).ready(function(){

 

//Validacion rapida de campos

	
	$('#MarcaFoco').focusout( function(){
			if( $("#MarcaFoco").val().length <= 2)
			{
				$('#MensajeMarca').html("Marca: <span style='color:#f00'>La marca debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeMarca').html("Marca:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#TipoFoco').focusout( function(){
			if( $("#TipoFoco").val().length <= 2)
			{
				$('#MensajeTipo').html("Tipo: <span style='color:#f00'>El tipo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeTipo').html("Tipo:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#FormaFoco').focusout( function(){
			if( $("#FormaFoco").val().length <= 2)
			{
				$('#MensajeForma').html("Forma: <span style='color:#f00'>La forma debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeForma').html("Forma:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#TemperaturaColorFoco').focusout( function(){
			if( $("#TemperaturaColorFoco").val().length <= 1)
			{
				$('#MensajeTemepratura').html("Temperatura: <span style='color:#f00'>La temeperatura debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeTemepratura').html("Temperatura:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#WattsFoco').focusout( function(){
			if( $("#WattsFoco").val().length <= 1)
			{
				$('#MensajeWatss').html("Watss: <span style='color:#f00'>Los watss deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeWatss').html("Watss:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
//Validacion rapida de campos  //	
	


	//Validacion de nuenvo rango

	$('#formNuevoFoco').submit(function(e){
		e.preventDefault();
		
	
		if( $("#MarcaFoco").val().length <= 2 || $("#TipoFoco").val().length <= 2 || $("#FormaFoco").val().length <= 2 || $("#TemperaturaColorFoco").val().length <= 1 || $("#WattsFoco").val().length <= 1)
		{
			if( $("#MarcaFoco").val().length <= 2)
			{
				$('#MensajeMarca').html("Marca: <span style='color:#f00'>La marca debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeMarca').html("Marca:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#TipoFoco").val().length <= 2)
			{
				$('#MensajeTipo').html("Tipo: <span style='color:#f00'>El tipo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeTipo').html("Tipo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FormaFoco").val().length <= 2)
			{
				$('#MensajeForma').html("Forma: <span style='color:#f00'>La forma debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeForma').html("Forma:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#TemperaturaColorFoco").val().length <= 1)
			{
				$('#MensajeTemepratura').html("Temperatura: <span style='color:#f00'>La temeperatura debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeTemepratura').html("Temperatura:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#WattsFoco").val().length <= 1)
			{
				$('#MensajeWatss').html("Watss: <span style='color:#f00'>Los watss deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeWatss').html("Watss:");
				NombreUsuario= $("#NombreRango").val();
			}
			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/electrico/registro_foco",
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
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese rango ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarFoco').submit(function(e){
		e.preventDefault();
		
	
		if($("#MarcaFoco").val().length <= 2 || $("#TipoFoco").val().length <= 2 || $("#FormaFoco").val().length <= 2 || $("#TemperaturaColorFoco").val().length <= 1 || $("#WattsFoco").val().length <= 1 )
		{
			if( $("#MarcaFoco").val().length <= 2)
			{
				$('#MensajeMarca').html("Marca: <span style='color:#f00'>La marca debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeMarca').html("Marca:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#TipoFoco").val().length <= 2)
			{
				$('#MensajeTipo').html("Tipo: <span style='color:#f00'>El tipo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeTipo').html("Tipo:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FormaFoco").val().length <= 2)
			{
				$('#MensajeForma').html("Forma: <span style='color:#f00'>La forma debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeForma').html("Forma:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#TemperaturaColorFoco").val().length <= 1)
			{
				$('#MensajeTemepratura').html("Temperatura: <span style='color:#f00'>La temeperatura debe ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeTemepratura').html("Temperatura:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#WattsFoco").val().length <= 1)
			{
				$('#MensajeWatss').html("Watss: <span style='color:#f00'>Los watss deben ser mayor a 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeWatss').html("Watss:");
				NombreUsuario= $("#NombreRango").val();
			}
			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/electrico/guardar_cambios_foco",
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
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese rango ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	

});
