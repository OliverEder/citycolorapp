$(document).ready(function(){

 

//Validacion rapida de campos

	
	$('#NombreCliente').focusout( function(){
			if( $("#NombreCliente").val().length <= 2)
			{
				$('#MensajeCliente').html("Cliente: <span style='color:#f00'>El nombre de el cliente debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCliente').html("Cliente:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#RfcCliente').focusout( function(){
			if( $("#RfcCliente").val().length <= 9)
			{
				$('#MensajeRfc').html("RFC: <span style='color:#f00'>El RFC debe tener por lo menos 10 caracteres.</span>");
			}
			else
			{
				$('#MensajeRfc').html("RFC:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#DireccionCliente').focusout( function(){
			if( $("#DireccionCliente").val().length <= 9)
			{
				$('#MensajeDireccion').html("Direccion: <span style='color:#f00'>La direccion debe tener por lo menos 10 caracteres.</span>");
			}
			else
			{
				$('#MensajeDireccion').html("Direccion:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	
//Validacion rapida de campos  //	
	


	//Validacion de nuenvo rango

	$('#formNuevoCliente').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreCliente").val().length <= 2 || $("#RfcCliente").val().length <= 9 || $("#DireccionCliente").val().length <= 9 || $("#userfile").val().length < 1)
		{
			if( $("#NombreCliente").val().length <= 2)
			{
				$('#MensajeCliente').html("Cliente: <span style='color:#f00'>El nombre de el cliente debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCliente').html("Cliente:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#RfcCliente").val().length <= 9)
			{
				$('#MensajeRfc').html("RFC: <span style='color:#f00'>El RFC debe tener por lo menos 10 caracteres.</span>");
			}
			else
			{
				$('#MensajeRfc').html("RFC:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#DireccionCliente").val().length <= 9)
			{
				$('#MensajeDireccion').html("Direccion: <span style='color:#f00'>La direccion debe tener por lo menos 10 caracteres.</span>");
			}
			else
			{
				$('#MensajeDireccion').html("Direccion:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#userfile").val().length <1)
			{
				$('#MensajeImagen').html("Imagen: <span style='color:#f00'>Selecciona una imagen</span>");
			}
			else
			{
				$('#MensajeImagen').html("Imagen:");
				NombreUsuario= $("#NombreRango").val();
			}
			       
		}
		else
		{
			var data=$(this).serializeArray();
			var formData = new FormData(document.getElementById("formNuevoCliente"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://citycolorapp.com/index.php/clientes/registro_cliente",
		    data: formData,
		    contentType: false,
			  processData: false,
			  cache: false,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://citycolorapp.com/index.php/clientes/panel_control_cliente";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Este cliente ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarCliente').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreCliente").val().length <= 2 || $("#RfcCliente").val().length <= 9 || $("#DireccionCliente").val().length <= 9)
		{
			if( $("#NombreCliente").val().length <= 2)
			{
				$('#MensajeCliente').html("Cliente: <span style='color:#f00'>El nombre de el cliente debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeCliente').html("Cliente:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#RfcCliente").val().length <= 9)
			{
				$('#MensajeRfc').html("RFC: <span style='color:#f00'>El RFC debe tener por lo menos 10 caracteres.</span>");
			}
			else
			{
				$('#MensajeRfc').html("RFC:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#DireccionCliente").val().length <= 9)
			{
				$('#MensajeDireccion').html("Direccion: <span style='color:#f00'>La direccion debe tener por lo menos 10 caracteres.</span>");
			}
			else
			{
				$('#MensajeDireccion').html("Direccion:");
				NombreUsuario= $("#NombreRango").val();
			}
			       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://citycolorapp.com/index.php/clientes/guardar_cambios_cliente",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fuero guradados con exito</span>");
				  	window.location.href = "http://citycolorapp.com/index.php/clientes/panel_control_cliente";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese cliente ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
	
	$('#formEditarClienteImagen').submit(function(e){
		e.preventDefault();
		
	
		if($("#userfile").val().length < 1)
		{
			if( $("#userfile").val().length <1)
			{
				$('#MensajeImagen').html("Imagen: <span style='color:#f00'>Selecciona una imagen</span>");
			}
			else
			{
				$('#MensajeImagen').html("Imagen:");
				NombreUsuario= $("#NombreRango").val();
			}

		
			       
		}
		else
		{
			var data=$(this).serializeArray();
			var formData = new FormData(document.getElementById("formEditarClienteImagen"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://citycolorapp.com/index.php/clientes/guardar_cambios_cliente_imagen",
		   	data: formData,
		    contentType: false,
			  processData: false,
			  cache: false,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormularioImagen').html("<span style='color:#f00'>Los cambios fueron guradados con exito</span>");
				  	//window.location.href = "http://citycolorapp.com/index.php/inmuebles/panel_control_inmueble";
				  }
				  else
				  {
				  	$('#MesajeFormularioImagen').html("<span style='color:#f00'>Ese la imagen ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar usuario
	
	


});
