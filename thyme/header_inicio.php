<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consultorio Dr Lafaurie</title>
    <link rel="stylesheet" href="../thyme/css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../thyme/css/superfish.css" media="screen">
    <script type="text/javascript" src="../thyme/js/jQuery.js"></script>
	<script type="text/javascript" src="../thyme/slide/slide.js"></script>
	<script type="text/javascript" src="../thyme/js/funciones.js"></script>
    <script type="text/javascript" src="../thyme/js/hoverIntent.js"></script>
	<script type="text/javascript" src="../thyme/js/superfish.js"></script>
</head>
<?php  if($_SESSION["tipo"]=="ADMINISTRADOR"){$tipo = "Administrador";}elseif($_SESSION["tipo"]=="ASISTENTE"){$tipo="Asistente";}?>

<html>
<body>

<table id="header" width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="1">
        <div style="position:absolute; width:302px; top:30px; background:url(../thyme/images/cn-bg.gif);">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="1"><img src="../thyme/images/logo_normal.png" alt="" width="268" height="61" class="logo"/></td>
  </tr>
</table>
        </div>
       <div id="slogan">
</div>
      <td class="hbg">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>

<!-- Menu -->
<div id="navigator">

<ul class="sf-menu">
			<li class="current">
				<a href="../home/index.php">Inicio</a>
			</li>
			
			<li>
				<a href="">Registros</a>
				<ul>
					<li>
						<a href="">Administración del Sistema</a>
						<ul>
							<li><a href="../users/reg_usu.php">Registrar Usuario Medico y Profecional</a></li>
							<li><a href="../users/act_usu.php">Configuracion de Usuari&oacute;s</a></li>
							<li><a href="../users/cam_usu.php">Cambiar Contrase&#241;a Usuari&oacute;s</a></li>
						</ul>
					</li>
					
					<li>
						<a href="">Registro Para Pacientes</a>
						<ul>
							<li><a href="../reg/reg_est.php">Registrar Paciente</a></li>
							<li><a href="../reg/act_est.php">Acualizar Datos de un Paciente</a></li>
							<li><a href="../reg/bus_est.php">Ubicar Paciente</a></li>
						</ul>
					</li>
					
					<li>
						<a href="">Historial</a>
						<ul>
							<li><a href="../history/reg_his.php">Registrar Historial</a></li>
							<li><a href="../history/act_his.php">Editar Historial</a></li>
							<li><a href="../history/bus_his.php">Buscar Historial </a></li>
						</ul>
					</li>
					
					
				</ul>			
			
			<li>
				<a href="">Información</a>
				<ul>
					<li>
						<a href="../emferm/enfermedad.php">Enfermedades</a>
					</li>
										
				</ul>
			</li>
            
            <li>
				<a href="">acerca de</a>
				<ul>
					<li>
						<a href="../credits/creditos.php">Medico Cirujano</a>
					</li>
										
				</ul>
			</li>
			<li>
				<a href="../config/login.php">Cerrar sesion</a>
			</li>
			
		</ul>
</div>

