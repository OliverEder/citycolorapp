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
	
	$('#NombreModulo').focusout( function(){
			if( $("#NombreModulo").val().length <= 2)
			{
				$('#MensajeModulo').html("Modulo: <span style='color:#f00'>El nombre de el modulo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeModulo').html("Modulo:");
				NombreUsuario= $("#NombreModulo").val();
			}
	
	});
	
//Validacion rapida de campos  //	
	


	//Validacion de nuenvo rango

	$('#formNuevoModulo').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreModulo").val().length <= 2 )
		{
			if( $("#NombreModulo").val().length <= 2)
			{
				$('#MensajeModulo').html("Modulo: <span style='color:#f00'>El nombre de el modulo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeModulo').html("Modulo:");
				NombreUsuario= $("#NombreModulo").val();
			}

			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/modulos/registro_modulo",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/modulos/panel_control_modulo";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese modulo ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarModulo').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreModulo").val().length <= 2 )
		{
			if( $("#NombreModulo").val().length <= 2)
			{
				$('#MensajeModulo').html("Modulo: <span style='color:#f00'>El nombre de el modulo debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeModulo').html("Modulo:");
				NombreUsuario= $("#NombreModulo").val();
			}
			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/modulos/guardar_cambios_modulo",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/modulos/panel_control_modulo";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese modulo ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	
	


});
