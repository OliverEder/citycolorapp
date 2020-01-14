$(document).ready(function(){

 

//Validacion rapida de campos
 
	$('#ServiciosTabulador').focusout( function(){
			if( $("#ServiciosTabulador").val().length <= 2)
			{
				$('#MensajeServicios').html("Servicios: <span style='color:#f00'>Servicios debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajePartida').html("Servicios:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#ClaveTabulador').focusout( function(){
			if( $("#ClaveTabulador").val().length <= 2)
			{
				$('#MensajeClave').html("Clave: <span style='color:#f00'>La clave debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeClave').html("Clave:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	$('#UnidadTabulador').focusout( function(){
			if( $("#UnidadTabulador").val().length <= 2)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>la unidad  debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	
	$('#PrecioUnitarioTabulador').focusout( function(){
			if( $("#PrecioUnitarioTabulador").val().length <= 0)
			{
				$('#MensajePrecioUnitario').html("Precio unitario: <span style='color:#f00'>El precio unitario debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePrecioUnitario').html("Precio unitario:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
		
	$('#DescripcionTabulador').focusout( function(){
			if( $("#DescripcionTabulador").val().length <= 3)
			{
				$('#MensajeDescripcion').html("Descripcion: <span style='color:#f00'>La descripcion debe ser mayor a 4 caracteres.</span>");
			}
			else
			{
				$('#MensajeDescripcion').html("Descripcion:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	
	
//Validacion rapida de campos  //	
	


	//Validacion de nuenvo tabulador

	$('#formNuevoTabulador').submit(function(e){
		e.preventDefault();
		
	
		if($("#ServiciosTabulador").val().length <= 2 || $("#ClaveTabulador").val().length <= 2 || $("#UnidadTabulador").val().length <= 2 || $("#PrecioUnitarioTabulador").val().length <= 0 || $("#DescripcionTabulador").val().length <= 3)
		{
			if( $("#ServiciosTabulador").val().length <= 2)
			{
				$('#MensajeServicios').html("Servicios: <span style='color:#f00'>Servicios debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajePartida').html("Servicios:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#ClaveTabulador").val().length <= 2)
			{
				$('#MensajeClave').html("Clave: <span style='color:#f00'>La clave debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeClave').html("Clave:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#UnidadTabulador").val().length <= 2)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad  debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			
			
			if( $("#PrecioUnitarioTabulador").val().length <= 0)
			{
				$('#MensajePrecioUnitario').html("Precio unitario: <span style='color:#f00'>El precio unitario debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePrecioUnitario').html("Precio unitario:");
				NombreUsuario= $("#NombreRango").val();
			}
			
					
			if( $("#DescripcionTabulador").val().length <= 3)
			{
				$('#MensajeDescripcion').html("Descripcion: <span style='color:#f00'>La descripcion debe ser mayor a 4 caracteres.</span>");
			}
			else
			{
				$('#MensajeDescripcion').html("Descripcion:");
				NombreUsuario= $("#NombreRango").val();
			}
						       
		}
		else
		{
			var data=$(this).serializeArray();
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/tabuladores/registro_tabulador",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/tabuladores/panel_control_tabulador";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Esa tabulador ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de nuenvo tabulador

//Validacion de editar tabulador

	$('#formEditarTabulador').submit(function(e){
		e.preventDefault();
		
	
		if($("#ServiciosTabulador").val().length <= 2 || $("#ClaveTabulador").val().length <= 2 || $("#UnidadTabulador").val().length <= 2 ||$("#PrecioUnitarioTabulador").val().length <= 0 || $("#DescripcionTabulador").val().length <= 3)
		{
			if( $("#ServiciosTabulador").val().length <= 2)
			{
				$('#MensajeServicios').html("Servicios: <span style='color:#f00'>Servicios debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajePartida').html("Servicios:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#ClaveTabulador").val().length <= 2)
			{
				$('#MensajeClave').html("Clave: <span style='color:#f00'>La clave debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeClave').html("Clave:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#UnidadTabulador").val().length <= 2)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad  debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#PrecioUnitarioTabulador").val().length <= 0)
			{
				$('#MensajePrecioUnitario').html("Precio unitario: <span style='color:#f00'>El precio unitario debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePrecioUnitario').html("Precio unitario:");
				NombreUsuario= $("#NombreRango").val();
			}
			
						
			if( $("#DescripcionTabulador").val().length <= 3)
			{
				$('#MensajeDescripcion').html("Descripcion: <span style='color:#f00'>La descripcion debe ser mayor a 4 caracteres.</span>");
			}
			else
			{
				$('#MensajeDescripcion').html("Descripcion:");
				NombreUsuario= $("#NombreRango").val();
			}

						       
		}
		else
		{
			var data=$(this).serializeArray();
			
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/tabuladores/guardar_cambios_tabulador",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fueron guardados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/tabuladores/panel_control_tabulador";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Esa tabulador ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar area


//Validacion de editar area

	$('#formEditarTabuladorImagenAntes').submit(function(e){
		e.preventDefault();
		
	
		if($("#userfile").val().length < 1)
		{
			if( $("#userfile").val().length <1)
			{
				$('#MensajeImagenAntes').html("Imagen: <span style='color:#f00'>Selecciona una imagen</span>");
			}
			else
			{
				$('#MensajeImagenAntes').html("Imagen:");
				NombreUsuario= $("#NombreRango").val();
			}

		
			       
		}
		else
		{
			var data=$(this).serializeArray();
			var formData = new FormData(document.getElementById("formEditarTabuladorImagenAntes"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/tabuladores/guardar_cambios_imagen_antes",
		   	data: formData,
		    contentType: false,
			  processData: false,
			  cache: false,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormularioImagenAntes').html("<span style='color:#f00'>Los cambios fueron guradados con exito</span>");
				  	//window.location.href = "http://localhost/citycolorApp/index.php/inmuebles/panel_control_inmueble";
				  }
				  else
				  {
				  	$('#MesajeFormularioImagenAntes').html("<span style='color:#f00'>Ese la imagen ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
	
	
//Termina validacion de editar usuario
/*
		$('.antes').change(function(e) {
      addImage(e); 
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*//*;
    
      if (!file.type.match(imageType))
       return;
  
      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }
  
     function fileOnload(e) {
      var result=e.target.result;
      $('.before').attr("src",result);
     }
 */
 
 		$('.despues').change(function(e) {
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
      $('.after').attr("src",result);
     }


});
