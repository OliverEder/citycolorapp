$(document).ready(function(){

 

//Validacion rapida de campos
 
  $("#CantidadGeneradora[type='text']").change( function(){
    $('#MensajeFecha').html("Fecha: <span style='color:#f00'>Selecciona una fecha</span>");
  });
 
	$('#ConceptoGeneradora').focusout( function(){
			if( $("#ConceptoGeneradora").val().length <= 2)
			{
				$('#MensajeConcepto').html("Concepto: <span style='color:#f00'>El concepto de la generadora debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeConcepto').html("Concepto:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#FechaGeneradora').focusout( function(){
			if( $("#FechaGeneradora").val().length <= 2)
			{
				$('#MensajeFecha').html("Fecha: <span style='color:#f00'>Selecciona una fecha</span>");
			}
			else
			{
				$('#MensajeFecha').html("Fecha:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#UnidadGeneradora').focusout( function(){
			if( $("#UnidadGeneradora").val().length <= 0)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad de la generadora debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#CantidadGeneradora').focusout( function(){
			if( $("#CantidadGeneradora").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#PrecioUnitarioGeneradora').focusout( function(){
			if( $("#PrecioUnitarioGeneradora").val().length <= 0)
			{
				$('#MensajePrecioUnitario').html("Precio unitario: <span style='color:#f00'>ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajePrecioUnitario').html("Precio unitario:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	$('#PecioTotalGeneradora').focusout( function(){
			if( $("#PecioTotalGeneradora").val().length <= 0)
			{
				$('#MensajePecioTotal').html("Pecio total: <span style='color:#f00'>ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajePecioTotal').html("Pecio total:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	$('#DescripcionGeneradora').focusout( function(){
			if( $("#DescripcionGeneradora").val().length <= 2)
			{
				$('#MensajeDescripcion').html("Descripcion: <span style='color:#f00'>La descripcion debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeDescripcion').html("Descripcion:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
//Validacion rapida de campos  //	
	


	//Validacion de nuenvo generadora

	$('#formNuevoGeneradora').submit(function(e){
		e.preventDefault();
		
	
		if($("#ConceptoGeneradora").val().length <= 2 || $("#DescripcionGeneradora").val().length <= 2 || $("#FechaGeneradora").val().length <= 2 || $("#CantidadGeneradora").val().length <= 0 || $("#PrecioUnitarioGeneradora").val().length <= 0 || $("#UnidadGeneradora").val().length <= 2 || $("#PecioTotalGeneradora").val().length <= 0)
		{
			if( $("#ConceptoGeneradora").val().length <= 2)
			{
				$('#MensajeConcepto').html("Generadora: <span style='color:#f00'>El concepto de la generadora debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeConcepto').html("Generadora:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaGeneradora").val().length <= 2)
			{
				$('#MensajeFecha').html("Fecha: <span style='color:#f00'>Selecciona una fecha</span>");
			}
			else
			{
				$('#MensajeFecha').html("Fecha:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#UnidadGeneradora").val().length <= 2)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad de la generadora debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#CantidadGeneradora").val().length <= 0)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			
			if( $("#PrecioUnitarioGeneradora").val().length <= 0)
			{
				$('#MensajePrecioUnitario').html("Precio unitario: <span style='color:#f00'>ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajePrecioUnitario').html("Precio unitario:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#PecioTotalGeneradora").val().length <= 0)
			{
				$('#MensajePecioTotal').html("Pecio total: <span style='color:#f00'>ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajePecioTotal').html("Pecio total:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			
			if( $("#DescripcionGeneradora").val().length <= 2)
			{
				$('#MensajeDescripcion').html("Descripcion: <span style='color:#f00'>La descripcion debe ser mayor a 3 caracteres.</span>");
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
		    url:"http://localhost/citycolorApp/index.php/generadoras/registro_generadora",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/generadoras/panel_control_generadora";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Esa generadora ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de nuenvo generadora

//Validacion de editar generadora

	$('#formEditarGeneradora').submit(function(e){
		e.preventDefault();
		
	
		if($("#ConceptoGeneradora").val().length <= 2 || $("#DescripcionGeneradora").val().length <= 2 || $("#FechaGeneradora").val().length <= 2 || $("#CantidadGeneradora").val().length <= 0 || $("#PrecioUnitarioGeneradora").val().length <= 0 || $("#UnidadGeneradora").val().length <= 2 || $("#PecioTotalGeneradora").val().length <= 0)
		{
			if( $("#ConceptoGeneradora").val().length <= 2)
			{
				$('#MensajeConcepto').html("Generadora: <span style='color:#f00'>El concepto de la generadora debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeConcepto').html("Generadora:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#FechaGeneradora").val().length <= 2)
			{
				$('#MensajeFecha').html("Fecha: <span style='color:#f00'>Selecciona una fecha</span>");
			}
			else
			{
				$('#MensajeFecha').html("Fecha:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#UnidadGeneradora").val().length <= 2)
			{
				$('#MensajeUnidad').html("Unidad: <span style='color:#f00'>La unidad de la generadora debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeUnidad').html("Unidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#CantidadGeneradora").val().length <= 1)
			{
				$('#MensajeCantidad').html("Cantidad: <span style='color:#f00'>ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajeCantidad').html("Cantidad:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#PrecioUnitarioGeneradora").val().length <= 0)
			{
				$('#MensajePrecioUnitario').html("Precio unitario: <span style='color:#f00'>ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajePrecioUnitario').html("Precio unitario:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#PecioTotalGeneradora").val().length <= 0)
			{
				$('#MensajePecioTotal').html("Pecio total: <span style='color:#f00'>ingresa una cantidad.</span>");
			}
			else
			{
				$('#MensajePecioTotal').html("Pecio total:");
				NombreUsuario= $("#NombreRango").val();
			}
			
			if( $("#DescripcionGeneradora").val().length <= 2)
			{
				$('#MensajeDescripcion').html("Descripcion: <span style='color:#f00'>La descripcion debe ser mayor a 3 caracteres.</span>");
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
		    url:"http://localhost/citycolorApp/index.php/generadoras/guardar_cambios_generadora",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fueron guardados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/generadoras/panel_control_generadora";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Esa generadora ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar area


//Validacion de editar area

	$('#formEditarGeneradoraImagenAntes').submit(function(e){
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
			var formData = new FormData(document.getElementById("formEditarGeneradoraImagenAntes"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/generadoras/guardar_cambios_imagen_antes",
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
	
	
	$('#formEditarGeneradoraImagenDespues').submit(function(e){
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
			var formData = new FormData(document.getElementById("formEditarGeneradoraImagenDespues"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/generadoras/guardar_cambios_imagen_despues",
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
