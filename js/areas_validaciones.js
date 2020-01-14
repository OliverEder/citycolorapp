$(document).ready(function(){

 

//Validacion rapida de campos
 
	$('#NombreArea').focusout( function(){
			if( $("#NombreArea").val().length <= 2)
			{
				$('#MensajeArea').html("Area: <span style='color:#f00'>El nombre de la area debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeArea').html("Area:");
				NombreUsuario= $("#NombreRango").val();
			}
	
	});
	
	
	
//Validacion rapida de campos  //	
	


	//Validacion de nuenvo area

	$('#formNuevoArea').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreArea").val().length <= 2 || $("#userfile").val().length < 1)
		{
			if( $("#NombreArea").val().length <= 2)
			{
				$('#MensajeArea').html("Area: <span style='color:#f00'>El nombre de la area debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeArea').html("Area:");
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
			var formData = new FormData(document.getElementById("formNuevoArea"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/areas/registro_area",
		    data: formData,
		    contentType: false,
			  processData: false,
			  cache: false,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Registro exitoso</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/areas/panel_control_area";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Esa area ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de nuenvo area

//Validacion de editar area

	$('#formEditarArea').submit(function(e){
		e.preventDefault();
		
	
		if($("#NombreArea").val().length <= 2)
		{
			if( $("#NombreArea").val().length <= 2)
			{
				$('#MensajeArea').html("Area: <span style='color:#f00'>El nombre de la area debe ser mayor a 3 caracteres.</span>");
			}
			else
			{
				$('#MensajeArea').html("Area:");
				NombreUsuario= $("#NombreRango").val();
			}

						       
		}
		else
		{
			var data=$(this).serializeArray();
			var formData = new FormData(document.getElementById("formEditarArea"));
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/areas/guardar_cambios_area",
		    data: data,
		    success: function(data)
		    {
				  if(data=='si')
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Los cambios fueron guradados con exito</span>");
				  	window.location.href = "http://localhost/citycolorApp/index.php/areas/panel_control_area";
				  }
				  else
				  {
				  	$('#MesajeFormulario').html("<span style='color:#f00'>Esa area ya existe en la base de datos</span>");
				  	
				  }
				  
		    }
      });
		}
   
	
	});
	
//Termina validacion de editar area


//Validacion de editar area

	$('#formEditarAreaImagen').submit(function(e){
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
			var formData = new FormData(document.getElementById("formEditarAreaImagen"));
			formData.append("dato", "valor");
			$.ajax(
			{
		    type: "POST",
		    url:"http://localhost/citycolorApp/index.php/areas/guardar_cambios_area_imagen",
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
