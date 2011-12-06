<?php   require 'include/pre.php'; ?>
<h2>Equipos</h2>
<?php
        foreach (UIFacade::retrieveAll('Equipo') as $e) {
                $img = $e->get('URL del logo') or $img = 'generico.jpg';
?>
<div>
        <form action="Datos_Eq.php" method="post">
                <input type="hidden" name="id" value="<?php echo $e->get('id'); ?>"/>
                <h3><?php echo $e->get('nombre completo'); ?></h3>
                <br/>
                <img src="static/images/equipo/<?php echo $img; ?>"/>
                <p><strong>Siglas:</strong>           <?php echo $e->get('siglas'          ); ?></p>
                <p><strong>Año de fundacion:</strong> <?php echo $e->get('año de fundación'); ?></p>
        </form>
</div>
<?php   }
        if (has_auth('admin')) { ?>
<form id="form" action="equipo_insert.php" method="post">
        <input type="submit" value="Agregar equipo"/>
</form>
<?php }
      require('include/post.html'); ?>
