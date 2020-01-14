$(document).ready(function(){

  // Toggle tranparent navbar when the user scrolls the page

  $(window).scroll(function() {
    if($(this).scrollTop() > 50)  
    {
        $('.opaque-navbar').addClass('opaque');
        $('.dropdown-menu').addClass('opaque');
    } else {
        $('.opaque-navbar').removeClass('opaque');
        
    }
});

	//  //

//Validacion rapida de campos
 $('#NombreUsuario').focusout( function(){
        if( $("#NombreUsuario").val().length <= 2)
        {
            $('#MensajeUsuario').html("Usuario: <span style='color:#f00'>El nick debe contener mas de 2 carácteres.</span>");
        }
        else
        {
        		$('#MensajeUsuario').html("Usuario:");
        }
	});
	
	$('#PasswordUsuario').focusout( function(){
        if( $("#PasswordUsuario").val().length <= 2)
        {
            $('#PassUsuario').html("Password: <span style='color:#f00'>El password debe contener mas de 2 carácteres.</span>");
        }
        else
        {
        		$('#PassUsuario').html("Password:");
        }
	});
	
	$('#ConfirmaPassUsuario').focusout( function(){
        if( $("#PasswordUsuario").val() != $("#ConfirmaPassUsuario").val())
        {
            $('#Confirma_PassUsuario').html("Confirma password: <span style='color:#f00'>El password no coincide</span>");
        }
        else
        {
        		$('#Confirma_PassUsuario').html("Confirma password:");
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
	

	//Validacion de nuenvo usuario

	$('#formNuevoUsuario').submit(function(e){
		e.preventDefault();
		var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;	
	
		if($("#NombreUsuario").val().length <= 2 || $("#PasswordUsuario").val().length <= 2 || !filter.test($('#EmailUsuario').val()))
		{
			if( $("#NombreUsuario").val().length <= 2)
			{
				$('#MensajeUsuario').html("Usuario: <span style='color:#f00'>El nick debe contener mas de 2 carácteres.</span>");
			}
			else
			{
				$('#MensajeUsuario').html("Usuario:");
				NombreUsuario= $("#NombreUsuario").val();
			}

			if( $("#PasswordUsuario").val().length <= 2)
			{
				$('#PassUsuario').html("Password: <span style='color:#f00'>El password debe contener mas de 2 carácteres.</span>");
			}
			else
			{
				$('#PassUsuario').html("Password:");
				PassUsuario=$("#PasswordUsuario").val();
			} 
			
			var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;	
			if( !filter.test($('#EmailUsuario').val()))
      {
      	$('#MailUsuario').html("Email: <span style='color:#f00'>No es una direccion de correo valida</span>");
      }
      else
      {
      	$('#MailUsuario').html("Email:");
      }
			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://citycolorapp.com/index.php/usuarios/registro_usuario",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://citycolorapp.com/index.php/usuarios/panel_control_usuario";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese usuario ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar usuario

	$('#formEditarUsuario').submit(function(e){
		e.preventDefault();
		var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;	
	
		if($("#NombreUsuario").val().length <= 2 || $("#PasswordUsuario").val().length <= 2 || !filter.test($('#EmailUsuario').val()))
		{
			if( $("#NombreUsuario").val().length <= 2)
			{
				$('#MensajeUsuario').html("Usuario: <span style='color:#f00'>El nick debe contener mas de 2 carácteres.</span>");
			}
			else
			{
				$('#MensajeUsuario').html("Usuario:");
				NombreUsuario= $("#NombreUsuario").val();
			}

			if( $("#PasswordUsuario").val().length <= 2)
			{
				$('#PassUsuario').html("Password: <span style='color:#f00'>El password debe contener mas de 2 carácteres.</span>");
			}
			else
			{
				$('#PassUsuario').html("Password:");
				PassUsuario=$("#PasswordUsuario").val();
			} 
			
			var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;	
			if( !filter.test($('#EmailUsuario').val()))
      {
      	$('#MailUsuario').html("Email: <span style='color:#f00'>No es una direccion de correo valida</span>");
      }
      else
      {
      	$('#MailUsuario').html("Email:");
      }
			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://citycolorapp.com/index.php/usuarios/guardar_cambios_usuario",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://citycolorapp.com/index.php/usuarios/panel_control_usuario";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese usuario ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	
$('#camaras').hide();	
$('#electrico').hide();
$('#hidraulico').hide();
$('#fisico').hide();
$('#contacto').hide();

	$('a[href="#camaras"]').click(function (e) {
		e.preventDefault()
		$('#camaras').slideToggle("slow");
		
	})
	
	$('a[href="#electrico"]').click(function (e) {
		e.preventDefault()
		$('#electrico').slideToggle( "slow" );
		
	})
	
	$('a[href="#hidraulico"]').click(function (e) {
		e.preventDefault()
		$('#hidraulico').slideToggle( "slow" );
		
	})
	
	$('a[href="#fisico"]').click(function (e) {
		e.preventDefault()
		$('#fisico').slideToggle( "slow" );
		
	})
	
	$('a[href="#contacto"]').click(function (e) {
		e.preventDefault()
		$('#contacto').slideToggle( "slow" );
		
	})


   $('.areaPie').fadeOut(1);

  $('.area').click(function() {
      $(this).find('.areaPie').slideToggle( "slow" );
   });


    $('.date-piker').datepicker({
		  clearBtn: true,
		  language: "es",
		  autoclose: true,
		  todayHighlight: true
    });
});
