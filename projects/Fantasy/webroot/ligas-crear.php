<?php
        require_once 'include/config.php';
        require_once 'include/dbconn-user.php';
        require_once 'include/model/entity/Liga.php';
        require_once 'include/model/facade/FacadeLiga.php';
        require_once 'include/model/entity/Usuario.php';
        require_once 'include/model/facade/FacadeUsuario.php';
        require      'include/pre.php';
?>
<div id="contenido_interno">
        <div id="Layer1" style="width:580px; height:500px; overflow: scroll;">
                <h2>Mis ligas</h2>
                <form id="form" action="agregar_equipo.php" method="post">
                        <input type="submit" value="crear"/>
                </form>                </div>
</div>
<?php require('include/post.html'); ?>
