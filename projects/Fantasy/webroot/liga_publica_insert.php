<?php
        require_once 'include/config.php';
        require_once 'include/dbconn/user.php';
        require_once 'include/UIFacade.php';

        require 'include/pre.php';
?>
<h2>Crear liga pública</h2>
<form action="controller_liga_insert" method="post">
        <p>Nombre: <input type="text" name="nombre"/></p>
        <input type="hidden" name="creador"    value="1"    /><!-- FIXME: tomar de sesión -->
        <input type="hidden" name="es pública" value="t"    />
        <input type="submit" name="insertLiga" value="Crear"/>
</form>
<?php   require('include/post.html'); ?>
