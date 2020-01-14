$(document).ready(function(){

 

//Validacion rapida de campos
 
	$('#PartidaCotizadora').focusout( function(){
			if( $("#PartidaCotizadora").val().length <= 2)
			{
				$('#MensajePartida').html("Partida: <span style='color:#f00'>La partida debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajePartida').html("Partida:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#ConceptoCotizadora').focusout( function(){
			if( $("#ConceptoCotizadora").val().length <= 2)
			{
				$('#MensajeConcepto').html("Concepto: <span style='color:#f00'>El concepto debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeConcepto').html("Concepto:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	$('#UnidadCotizadora').focusout( function(){
			if( $("#UnidadCotizadora").val().length <= 2)
			{
				$('#MensajeUnidad').html("Concepto: <span style='color:#f00'>la unidad  debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Concepto:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#CantidadCotizadora').focusout( function(){
			if( $("#CantidadCotizadora").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>La cantidad debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#PrecioUnitarioCotizadora').focusout( function(){
			if( $("#PrecioUnitarioCotizadora").val().length <= 0)
			{
				$('#MensajePrecioUnitario').html("Precio unitario: <span style='color:#f00'>El precio unitario debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePrecioUnitario').html("Precio unitario:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#PecioTotalCotizadora').focusout( function(){
			if( $("#PecioTotalCotizadora").val().length <= 0)
			{
				$('#MensajePecioTotal').html("Precio total: <span style='color:#f00'>El precio total debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePecioTotal').html("Precio total:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#DescripcionCotizadora').focusout( function(){
			if( $("#DescripcionCotizadora").val().length <= 3)
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
	


	//Validacion de nuenvo cotizadora

	$('#formNuevoCotizadora').submit(function(e){
		e.preventDefault();
		
	
		if($("#PartidaCotizadora").val().length <= 2 || $("#ConceptoCotizadora").val().length <= 2 || $("#UnidadCotizadora").val().length <= 2 || $("#CantidadCotizadora").val().length <= 0 || $("#PrecioUnitarioCotizadora").val().length <= 0 || $("#PecioTotalCotizadora").val().length <= 0 || $("#DescripcionCotizadora").val().length <= 3)
		{
			if( $("#PartidaCotizadora").val().length <= 2)
			{
				$('#MensajePartida').html("Partida: <span style='color:#f00'>La partida debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajePartida').html("Partida:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#ConceptoCotizadora").val().length <= 2)
			{
				$('#MensajeConcepto').html("Concepto: <span style='color:#f00'>El concepto debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeConcepto').html("Concepto:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#UnidadCotizadora").val().length <= 2)
			{
				$('#MensajeUnidad').html("Concepto: <span style='color:#f00'>La unidad  debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Concepto:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#CantidadCotizadora").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>la cantidad debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#PrecioUnitarioCotizadora").val().length <= 0)
			{
				$('#MensajePrecioUnitario').html("Precio unitario: <span style='color:#f00'>El precio unitario debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePrecioUnitario').html("Precio unitario:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#PecioTotalCotizadora").val().length <= 0)
			{
				$('#MensajePecioTotal').html("Precio total: <span style='color:#f00'>El precio total debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePecioTotal').html("Precio total:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#DescripcionCotizadora").val().length <= 3)
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
		    url:"http://localhost/citycolorApp/index.php/cotizadoras/registro_cotizadora",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/cotizadoras/panel_control_cotizadora";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Esa cotizadora ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de nuenvo cotizadora

//Validacion de editar cotizadora

	$('#formEditarCotizadora').submit(function(e){
		e.preventDefault();
		
	
		if($("#PartidaCotizadora").val().length <= 2 || $("#ConceptoCotizadora").val().length <= 2 || $("#UnidadCotizadora").val().length <= 2 || $("#CantidadCotizadora").val().length <= 0 || $("#PrecioUnitarioCotizadora").val().length <= 0 || $("#PecioTotalCotizadora").val().length <= 0 || $("#DescripcionCotizadora").val().length <= 3)
		{
			if( $("#PartidaCotizadora").val().length <= 2)
			{
				$('#MensajePartida').html("Partida: <span style='color:#f00'>La partida debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajePartida').html("Partida:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#ConceptoCotizadora").val().length <= 2)
			{
				$('#MensajeConcepto').html("Concepto: <span style='color:#f00'>El concepto debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeConcepto').html("Concepto:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#UnidadCotizadora").val().length <= 2)
			{
				$('#MensajeUnidad').html("Concepto: <span style='color:#f00'>La unidad  debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Concepto:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#CantidadCotizadora").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>la cantidad debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#PrecioUnitarioCotizadora").val().length <= 0)
			{
				$('#MensajePrecioUnitario').html("Precio unitario: <span style='color:#f00'>El precio unitario debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePrecioUnitario').html("Precio unitario:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#PecioTotalCotizadora").val().length <= 0)
			{
				$('#MensajePecioTotal').html("Precio total: <span style='color:#f00'>El precio total debe ser mayor a 1 caracteres.</span>");
			}
			else
			{
				$('#MensajePecioTotal').html("Precio total:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#DescripcionCotizadora").val().length <= 3)
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
		    url:"http://localhost/citycolorApp/index.php/cotizadoras/guardar_cambios_cotizadora",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fueron guardados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/cotizadoras/panel_control_cotizadora";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Esa cotizadora ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar area


//Validacion de editar area

	$('#formEditarCotizadoraImagenAntes').submit(function(e){
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
			var formData = new FormData(document.getElementById("formEditarCotizadoraImagenAntes"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/cotizadoras/guardar_cambios_imagen_antes",
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
	
	
	$('#formEditarCotizadoraImagenDespues').submit(function(e){
		e.preventDefault();
		
	
		if($("#userfile").val().length < 1)
		{
			if( $("#userfile").val().length <1)
			{
				$('#MensajeImagenDespues').html("Imagen: <span style='color:#f00'>Selecciona una imagen</span>");
			}
			else
			{
				$('#MensajeImagenDespues').html("Imagen:");
				NombreUsuario= $("#NombreRango").val();
			}

		
			       
		}
		else
		{
			var data=$(this).serializeArray();
			var formData = new FormData(document.getElementById("formEditarCotizadoraImagenDespues"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/cotizadoras/guardar_cambios_imagen_despues",
		   	data: formData,
		    contentType: false,
			  processData: false,
			  cache: false,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormularioImagenDespues').html("<span style='color:#f00'>Los cambios fueron guradados con exito</span>");
				  	//window.location.href = "http://localhost/citycolorApp/index.php/inmuebles/panel_control_inmueble";
				  }
				  else
				  {
				  	$('#MesajeFormularioImagenDespues').html("<span style='color:#f00'>Ese la imagen ya existe en la base de datos</span>");
				  	
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
