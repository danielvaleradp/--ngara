<?php   require 'include/pre.php'; ?>
<h2>Ligas privadas</h2>
<?php
        foreach (UIFacade::ligas() as $l) { // FIXME: condicionar a que el usuario esté en la liga, sea su creador, o esté invitado, o sea administrador
                $id  = $l['liga'   ]->get('id'            );
                $img = $l['usuario']->get('URL de la foto');
                if ($img and !filter_var($img, FILTER_VALIDATE_URL)) $img = 'static/images/usuario/' . $img;
?>
<div>
  <h3><a href="#"><?php echo $l['liga']->get('nombre'); ?></a></h3>
  <img class="imagen" src="<?php echo $img; ?>"/>
  <p><strong>Creador:</strong> <a href="#"><?php echo $l['usuario']->get('username'); ?></a></p>
  <form action="liga_invitar" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <input type="submit" name="liga_invitar" value="Invitar"/>
  </form>
  <form action="liga_update" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <input type="submit" name="liga_update" value="Modificar"/>
  </form>
  <form action="controller" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <input type="hidden" name="goto" value="ligas"/>
    <button type="submit" name="action" value="liga_remove">Eliminar</button>
  </form>
</div>
<?php   } ?>
<h2><a href="ligas_publicas">Ver ligas públicas</a></h2>
<h2><a href="ligas_privadas">Ver ligas privadas</a></h2>
<form action="liga_insert">
  <input type="submit" value="Crear liga"/>
</form>
<?php   require 'include/post.html'; ?>
