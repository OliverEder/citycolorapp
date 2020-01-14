$(document).ready(function(){


//Validacion rapida de campos
 $('#NombreContacto').focusout( function(){
        if( $("#NombreContacto").val().length <= 2)
        {
            $('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe contener mas de 2 caracteres.</span>");
        }
        else
        {
        		$('#MensajeNombre').html("Nombre:");
        }
	});
	
	$('#TelefonoContacto').focusout( function(){
        if( $("#TelefonoContacto").val().length <= 9)
        {
            $('#MensajeTelefono').html("Telefono: <span style='color:#f00'>El telefono debe contener mas de 10 digitos.</span>");
        }
        else
        {
        		$('#MensajeTelefono').html("Telefono:");
        }
	});
	
/*	
	$('#CorreoContacto').focusout( function(){
		var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;			
        if( !filter.test($('#EmailUsuario').val()))
        {
            $('#MensajeCorreo').html("Correo: <span style='color:#f00'>No es una direccion de correo valida</span>");
        }
        else
        {
        		$('#MensajeCorreo').html("Correo:");
        }
	});
*/	
	$('#MensajeContacto').focusout( function(){
        if( $("#MensajeContacto").val().length <= 10)
        {
            $('#MensajeMensaje').html("Mensaje: <span style='color:#f00'>El mensaje debe contener mas de 10 caracteres.</span>");
        }
        else
        {
        		$('#MensajeMensaje').html("Mensaje:");
        }
	});
//Validacion rapida de campos  //	
	
//Inicia validacion de login

	$('#formContactoVisitante').submit(function(e){
		e.preventDefault();
	
		if($("#NombreContacto").val().length <= 2 || $("#TelefonoContacto").val().length <= 9 || $("#MensajeContacto").val().length <= 10)
		{
			if( $("#NombreContacto").val().length <= 2)
			{
				$('#MensajeNombre').html("Nombre: <span style='color:#f00'>El nombre debe contener mas de 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeNombre').html("Nombre:");
				NombreContacto= $("#NombreContacto").val();
			}

			if( $("#TelefonoContacto").val().length <= 9)
			{
				$('#MensajeTelefono').html("Telefono: <span style='color:#f00'>El telefono debe contener mas de 10 digitos.</span>");
			}
			else
			{
				$('#MensajeTelefono').html("Telefono:");
				MensajeTelefono=$("#TelefonoContacto").val();
				
			} 
			
			/*
			var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;			
      if( !filter.test($('#EmailUsuario').val()))
      {
          $('#MensajeCorreo').html("Correo: <span style='color:#f00'>No es una direccion de correo valida</span>");
      }
      else
      {
      		$('#MensajeCorreo').html("Correo:");
      }
			*/
			
			if( $("#MensajeContacto").val().length <= 10)
      {
          $('#MensajeMensaje').html("Mensaje: <span style='color:#f00'>El mensaje debe contener mas de 10 caracteres.</span>");
      }
      else
      {
      		$('#MensajeMensaje').html("Mensaje:");
      }
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://citycolorapp.com/index.php/contacto/enviar_mensaje_visitante",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	
				  	$('#MesajeFormulario').html("<span style='color:#f00'>El mensaje se envio con exito</span>");
				  
				  	window.location.href = "http://citycolorapp.com/";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los datos no son validos invalidos, intentalo nuevamente por favor</span>");
				  
				  }
				  
		    }
      });
		}
   
	
	});

//Termina validacion de login

});
