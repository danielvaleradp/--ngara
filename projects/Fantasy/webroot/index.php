<?php   require 'include/pre.php'; ?>
<!-- Starting slider... -->
<script type="text/javascript" src="static/js/jquery.js"></script>
<script type="text/javascript" src="static/js/s3SliderPacked.js"></script>
<script type="text/javascript" src="static/js/s3Slider.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
                $('#slider').s3Slider({
                        timeOut: 4000
                });
        });
</script>

<div id="slider">
  <ul id="sliderContent">
    <li class="sliderImage">
      <a href=""><img src="static/images/slider/01.jpg" alt="1" width="600" height="300"/></a>
      <span class="left">
        <strong>Vive...</strong>
        <br/>
        La emoción de el béisbol...
      </span>
    </li>
    <li class="sliderImage">
      <a href=""><img src="static/images/slider/02.jpg" alt="2" width="600" height="300"/></a>
      <span class="right">
        <strong>Diseña...</strong>
        <br/>
        El equipo de tus sueños...
      </span>
    </li>
    <li class="sliderImage">
      <img src="static/images/slider/03.jpg" alt="3" width="600" height="300"/>
      <span class="right">
        <strong>Juega...</strong>
        <br/>
        El Fantasy de la LPBV
      </span>
    </li>
    <div class="clear sliderImage"></div>
  </ul>
</div>
<!-- Slider ended. -->

<h2>Noticias</h2>
<div id="search">
  <form>
    <input type="text" name="text"/>
    <button type="submit" name="noticia_search" value="1">Buscar</button>
  </form>
</div>
<div id="else">
<?
        foreach (UIFacade::retrieveAll('Contenido') as $c) {
                if ($c->get('tipo') == 'noticia') {
                        $id   = $c->get('id'           );
                        $tags = $c->get('tags'         );
                        $img  = $c->get('URL de imagen');
                        if ($img and !filter_var($img, FILTER_VALIDATE_URL)) $img = 'static/images/contenido/' . $img;
?>
  <div>
    <div class="admin-options">
      <form method="post" action="controller">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <button type="submit" name="action" value="contenido_remove">Eliminar</button>
      </form>
      <form method="post" action="contenido_update">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <button type="submit" name="contenido_update" value="1">Modificar</button>
      </form>
    </div>
    <h3><?php echo $c->get('título'); ?></h3>
    <h4><?php echo $c->get('fecha'); ?></h4>
    <br/>
<?php                   if ($img) { ?>
    <img src="<?php echo $img; ?>"/>
<?php                   } ?>
    <?php echo $c->get('texto'); ?>
<?php                   if ($tags) { ?>
    <p><strong>Etiquetas:</strong> <?php echo $tags; ?></p>
<?php                   } ?>
  </div>
<?php
                }
        }
?>
</div>
<?php   require 'include/post.html'; ?>
