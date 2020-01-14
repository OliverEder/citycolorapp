$(document).ready(function(){


//Validacion rapida de campos
 $('#NombreUsuario').focusout( function(){
        if( $("#NombreUsuario").val().length <= 2)
        {
            $('#MensajeUsuario').html("Usuario: <span style='color:#f00'>El nick debe contener mas de 2 caracteres.</span>");
        }
        else
        {
        		$('#MensajeUsuario').html("Usuario:");
        }
	});
	
	$('#PasswordUsuario').focusout( function(){
        if( $("#PasswordUsuario").val().length <= 2)
        {
            $('#PassUsuario').html("Password: <span style='color:#f00'>El password debe contener mas de 2 caracteres.</span>");
        }
        else
        {
        		$('#PassUsuario').html("Password:");
        }
	});
	
	$('#ConfirmaPassUsuario').focusout( function(){
        if( $("#PasswordUsuario").val() != $("#ConfirmaPassUsuario").val())
        {
            $('#Confirma_PassUsuario').html("Confirma contraseña: <span style='color:#f00'>El password no coincide</span>");
        }
        else
        {
        		$('#Confirma_PassUsuario').html("Confirma contraseña:");
        }
	});

	$('#EmailUsuario').focusout( function(){
		var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;			
        if( !filter.test($('#EmailUsuario').val()))
        {
            $('#MailUsuario').html("Email: <span style='color:#f00'>No es una direccion de correo valida</span>");
        }
        else
        {
        		$('#MailUsuario').html("Email:");
        }
	});
//Validacion rapida de campos  //	
	
//Inicia validacion de login

	$('#formularioLogIn').submit(function(e){
		e.preventDefault();
	
		if($("#NombreUsuario").val().length <= 2 || $("#PasswordUsuario").val().length <= 2)
		{
			if( $("#NombreUsuario").val().length <= 2)
			{
				$('#MensajeUsuario').html("Usuario:| <span style='color:#f00'>El nick debe contener mas de 2 caracteres.</span>");
			}
			else
			{
				$('#MensajeUsuario').html("Usuario:");
				NombreUsuario= $("#NombreUsuario").val();
			}

			if( $("#PasswordUsuario").val().length <= 2)
			{
				$('#PassUsuario').html("Password: <span style='color:#f00'>El password debe contener mas de 2 caracteres.</span>");
			}
			else
			{
				$('#PassUsuario').html("Password:");
				PassUsuario=$("#PasswordUsuario").val();
			} 
			
			
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/usuarios/login",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	window.location.href = "http://localhost/citycolorApp/";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Usuario o contraseña invalidos, intentalo nuevamente por favor</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});

//Termina validacion de login

});
