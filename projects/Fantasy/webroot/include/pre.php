<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <title>Liga Fantástica</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="keywords"    content="fantasy, beisbol venezolano, liga venezolana de beisbol profesional, lvbp" />
                <meta name="description" content="Fantasy de la liga venezolana de beisbol profesional." />
                <link rel="stylesheet" href="static/styles/main_style.css" type="text/css" />
                <link rel="Shortcut Icon" href="static/images/favicon.ico" />
        </head>
        <body id="<?php echo basename($_SERVER['SCRIPT_NAME'], '.php') ?>">
                <div id="wrapper">
                        <div id="header">
                                <div id="logo">
                                        <img src="static/images/LogoGrande.png" alt="logo" width="48" height="48"/>
                                        <h1><a href="index.php">Liga Fantástica</a></h1>
                                </div>
                                <div id="login">         
                                    <form id="loginform" action="loginAction.php" method="POST">
                                        <input name="username" type="text" value="Nombre de usuario" onclick="if ( value == \'Nombre de usuario\' ) { value = \'\'; }" />
                                        <input name="password" type="password" value="Contraseña" onclick="if ( value == \'Contraseña\' ) { value = \'\'; }"/> 
                                        <input name="TIPO" type="hidden" value="Usuario" />
                                        <input name="Login" type="submit" value="Acceder" tabindex="3" />
                                    </form>
                                    <form action="l./Registro_Usr.php">
                                        <input name="Login" type="submit" value="Regístrate" tabindex="3" />
                                    </form>
                                </div>
                                <div id="updates">
                                    <span><strong>Novedades:</strong> <marquee behavior="scroll" direction="left" scrollamount="3">Esto es un marquee de prueba.</marquee></span>
                                </div>
                        <div id="navigation">
                                <ul>
<?php
        $vs = array(
                'Noticias'    => 'index',
                'Jugadores'   => 'jugadores',
                'Equipos'     => 'equipos',
                'Estadios'    => 'estadios',
                'Calendario'  => 'calendario',
                'Resultados'  => 'resultados',
                'Ligas'       => 'ligas'
        );

        foreach ($vs as $v => $f) {
                $on = '';
                if ($f == basename($_SERVER['SCRIPT_NAME'], '.php')) $on = ' class="on"';
?>
                                <li<?php echo $on; ?>><a href="<?php echo $f . ".php"; ?>"><?php echo $v; ?></a></li>
<?php   } ?>
                                </ul>
                        </div>
                        </div>
                        <div id="content">
                                <div id="main">
