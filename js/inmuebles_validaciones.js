$(document).ready(function(){

 

//Validacion rapida de campos
 
	$('#NombreInmueble').focusout( function(){
			if( $("#NombreInmueble").val().length <= 2)
			{
				$('#MensajeInmueble').html("Inmueble: <span style='color:#f00'>El nombre de el inmueble debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeInmueble').html("Inmueble:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#DireccionInmueble').focusout( function(){
			if( $("#DireccionInmueble").val().length <= 2)
			{
				$('#MensajeDireccion').html("Direccion: <span style='color:#f00'>La direccion debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeDireccion').html("Direccion:");
				NombreUsuario= $("#NombreModulo").val();
			}
	
	});
	
//Validacion rapida de campos  //	
	


	//Validacion de nuenvo rango

	$('#formNuevoInmueble').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreInmueble").val().length <= 2 || $("#DireccionInmueble").val().length <= 2 || $("#userfile").val().length < 1)
		{
			if( $("#NombreInmueble").val().length <= 2)
			{
				$('#MensajeInmueble').html("Inmueble: <span style='color:#f00'>El nombre de el inmueble debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeInmueble').html("Inmueble:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#DireccionInmueble").val().length <= 2)
			{
				$('#MensajeDireccion').html("Direccion: <span style='color:#f00'>La direccion debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeDireccion').html("Direccion:");
				NombreUsuario= $("#NombreModulo").val();
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
			var formData = new FormData(document.getElementById("formNuevoInmueble"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/inmuebles/registro_inmueble",
		    data: formData,
		    contentType: false,
			  processData: false,
			  cache: false,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/inmuebles/panel_control_inmueble";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Ese inmueble ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de login	

//Validacion de editar rango

	$('#formEditarInmueble').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreInmueble").val().length <= 2 || $("#DireccionInmueble").val().length <= 2)
		{
			if( $("#NombreInmueble").val().length <= 2)
			{
				$('#MensajeInmueble').html("Inmueble: <span style='color:#f00'>El nombre de el inmueble debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeInmueble').html("Inmueble:");
				NombreUsuario= $("#NombreRango").val();
			}

			if( $("#DireccionInmueble").val().length <= 2)
			{
				$('#MensajeDireccion').html("Direccion: <span style='color:#f00'>La direccion debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeDireccion').html("Direccion:");
				NombreUsuario= $("#NombreModulo").val();
			}
			       
		}
		else
		{
			var data=$(this).serializeArray();
			var formData = new FormData(document.getElementById("formEditarInmueble"));
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/inmuebles/guardar_cambios_inmueble",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fueron guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/inmuebles/panel_control_inmueble";
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


//Validacion de editar rango

	$('#formEditarInmuebleImagen').submit(function(e){
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
			var formData = new FormData(document.getElementById("formEditarInmuebleImagen"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/inmuebles/guardar_cambios_inmueble_imagen",
		   	data: formData,
		    contentType: false,
			  processData: false,
			  cache: false,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormularioImagen').html("<span style='color:#f00'>Los cambios fueron guradados con exito</span>");
				  	//window.location.href = "http://localhost/citycolorApp/index.php/inmuebles/panel_control_inmueble";
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

$('#userfile').change(function(e) {
      addImage(e); 
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;
    
      if (!file.type.match(imageType))
       return;
  
      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }
  
     function fileOnload(e) {
      var result=e.target.result;
      $('#myimg').attr("src",result);
     }
 


});
