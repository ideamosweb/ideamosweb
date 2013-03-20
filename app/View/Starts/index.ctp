<!-- meta tags !-->
<?php echo $this->html->meta('keywords', 'barranquilla, empresa, diseño, web, diseño web, colombia, diseno, cms, pagina web, precio, cuesta, servicio, sitio, html, html5, css, moviles', array('inline' => false)); ?>
<!-- end meta tags !-->

<!-- css styles !-->
<?php echo $this->Html->css('skin', null, array('inline' => false)); ?>
<?php echo $this->Html->css('slideshow', null, array('inline' => false)); ?>
<!-- end css styles !-->

<!-- scripts JS !-->
<?php echo $this->Html->script('jquery.jcarousel', array('inline' => false)); ?>
<?php echo $this->Html->scriptStart(array('inline' => false)); ?>
function mycarousel_initCallback(carousel)

{

    /* Disable autoscrolling if the user clicks the prev or next button.

    carousel.buttonNext.bind('click', function() {

        carousel.startAuto(0);

    });

    carousel.buttonPrev.bind('click', function() {

        carousel.startAuto(0);

    });

  */

    // Pause autoscrolling if the user moves with the cursor over the clip.

    carousel.clip.hover(function() {

        carousel.stopAuto();

    }, function() {

        carousel.startAuto();

    });

};

jQuery(document).ready(function() {

    jQuery('#mycarousel').jcarousel({

        // Configuration goes here

    auto:7,

    wrap: 'last',

    initCallback: mycarousel_initCallback

    });

});
<?php echo $this->Html->scriptEnd(); ?>

<?php echo $this->Html->scriptBlock('{lang: \'es-419\'}', array('src' => 'https://apis.google.com/js/plusone.js', 'inline' => false)); ?>
<!-- end scripts JS !-->

<?php $this->start('main_banner'); ?>
<div id="info" style="background:url(img/fondo-inicio-sl6.jpg);">
  <div id="info_letra">Somos una empresa ubicada en Barranquilla <!--<span class="palabra_grande">-->Colombia<!--</span>--><br />
    de <!--<span class="palabra_grande">-->desarrollo<!--</span>--> y diseño de páginas web de gran calidad<br />
    y totalmente profesionales con el fin de hacer realidad<br />
    las ideas de nuestros <!--<span class="palabra_grande">-->clientes.<!--</span>--> Nuestros servicios son <br />
    llevados a cabo con suma responsabilidad y <!--<span class="palabra_grande">-->profesionalismo<!--</span>--><br />
    para que el cliente encuentre en nosostros total <!-- <span class="palabra_grande">-->satisfacción<!--</span>--><br />
    ya sea en proyectos básicos o muy <!--<span class="palabra_grande">-->complejos.<!--</span>--></div>
</div>
<?php $this->end(); ?>

<div class="jcarousel-skin-tango">
  <div class="jcarousel-container">
    <div class="jcarousel-clip">
      <ul id="mycarousel" class="jcarousel-list">
        <li class="jcarousel-item-1">
          <div class="cajas_carrousel">
            <div class="tiulo_post">
              <h1 class="titulo">Diseño Web Básico</h1>
            </div>
            <div class="entry">
              <p class="estilo2">Dirigido a empresas o negocios que desen darse a conocer en Internet.</p>
              <ul style="float:left;">
                <li>Hasta 5 páginas</li>
                <li>1 banner superior o lateral en flash básico</li>
                <li>1 formulario de contacto</li>
                <li>Diseño personalizado de acuerdo a tu empresa </li>
              </ul>
              <img src="img/greenhouse01.png" alt="" width="154" height="190" style="margin-top:-40px;" />
              <div style="clear:left;"></div>
            </div>
            <div class="meta">
              <center>
                <a href="contacto.html"><img src="img/cotizacion.png" alt="" width="243" height="49" /></a>
              </center>
            </div>
          </div>
        </li>
        <li class="jcarousel-item-2">
          <div class="cajas_carrousel">
            <div class="tiulo_post">
              <h1 class="titulo">Diseño Web Sofisticado</h1>
            </div>
            <div class="entry">
              <p class="estilo2">Ideal para empresas que desean un sitio más animado con zonas administrables.</p>
              <ul style="float:left; margin-top:-20px;">
                <li>Diseño Web profesional</li>
                <li>2 banner superior o lateral en flash básico</li>
                <li>Aplicaciones adicionales, galería de imágenes</li>
                <li>Contenido DHTML</li>
                <li>Diversos lenguajes (Javascript-PHP-CSS-XHTML-Flash)</li>
                <li>Formularios de contacto</li>
              </ul>
              <img src="img/greenhouse02.png" alt="" width="141" height="190" style="margin-top:-50px;" />
              <div style="clear:left;"></div>
            </div>
            <div class="meta">
              <center>
                <a href="contacto.html"><img src="img/cotizacion.png" alt="" width="243" height="49" /></a>
              </center>
            </div>
          </div>
        </li>
        <li class="jcarousel-item-3">
          <div class="cajas_carrousel">
            <div class="tiulo_post">
              <h1 class="titulo">Diseño Web Administrable</h1>
            </div>
            <div class="entry">
              <p class="estilo2">Diseñado para empresas que buscan sitios dinámicos con zonas administrables que no requieren conocimiento de programación por parte del cliente</p>
              <ul style="float:left; margin-top:-30px;">
                <li>Tienda virtual</li>
                <li>Administración de contenido</li>
                <li>Carrito de compras</li>
                <li>Sección de usuarios</li>
                <li>Buscador de productos</li>
              </ul>
              <img src="img/greenhouse03.png" alt="" width="137" height="190" style="margin:-65px 0 0 130px;" />
              <div style="clear:left;"></div>
            </div>
            <div class="meta">
              <center>
                <a href="contacto.html"><img src="img/cotizacion.png" alt="" width="243" height="49" /></a>
              </center>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="jcarousel-prev jcarousel-prev-disabled"></div>
    <div class="jcarousel-next"></div>
  </div>
</div>
<hr style="width:600px; margin-left:20px; color:#CCC; border-bottom:1px inset #EFEFEF;" />
<div class="borde_entry">
  <div class="tiulo_post">
    <h1 class="titulo">Tecnología</h1>
  </div>
  <div class="entry">
    <p class="estilo2">Nuestros proyectos están desarrollados con las últimas herramientas tecnológicas, luciendo así un estilo moderno y totalmente profesional.</p>
    <img src="img/Iconos-lenguajes.jpg" width="540" height="186" alt="Lenguajes" /></div>
</div>
