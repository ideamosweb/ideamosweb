<!-- meta tags !-->
<?php echo $this->html->meta('diseño, paginas, web, diseno, barranquilla, diseño web, desarrollo, webs, colombia, pagina, una, cuanto, precio, precios, economico', array('inline' => false)); ?>
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
<!-- end scripts JS !-->

<?php $this->start('main_banner'); ?>
<div id="info" style="background:url(img/fondo-disenoweb-sl.jpg)">
  <div id="info_letra">En el mundo <span class="letra_grande1">competitivo</span> de hoy en dia la necesidad de desarrollar una página web ya no es una opción sino una<span class="letra_grande1"> obligación.</span> IDEAMOSWEB te ofrece soluciones para crear, editar y mejorar páginas webs activas y así lograr la mejor promoción de su empresa en internet. <span class="letra_grande1">Analizamos</span> todas las necesidades de su empresa para diseñarle un sitio web profesional con todas las herramientas para que de este modo, su empresa sea mas <span class="letra_grande1">competitiva</span> en el <span class="letra_grande1">mercado.</span></div>
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
    <h1 class="titulo">Precios Diseño Web</h1>
  </div>
  <div class="entry">
    <p class="estilo2">Nuestros planes están sujetos de acuerdo a las necesidades del cliente, precios de diseño web económicos, a continuación se ofrecen productos individuales</p>
    <table cellpadding="4" cellspacing="0" border="0" width="80%" align="center">
      <tr>
        <td align="left">Precio Página adicional</td>
        <td align="right"><a href="contacto.html">Cotizar</a></td>
      </tr>
      <tr>
        <td align="left">Precio Formulario de contacto</td>
        <td align="right"><a href="contacto.html">Cotizar</a></td>
      </tr>
      <tr>
        <td align="left">Precio Imagenes profesionales</td>
        <td align="right"><a href="contacto.html">Cotizar</a></td>
      </tr>
      <tr>
        <td align="left">Precio Banner en Flash</td>
        <td align="right"><a href="contacto.html">Cotizar</a></td>
      </tr>
      <tr>
        <td align="left">Precio Banner sofisticado</td>
        <td align="right"><a href="contacto.html">Cotizar</a></td>
      </tr>
      <tr>
        <td align="left">Precio Intro en Flash</td>
        <td align="right"><a href="contacto.html">Cotizar</a></td>
      </tr>
      <tr>
        <td align="left">Precio Tecnología Javascript</td>
        <td align="right"><a href="contacto.html">Cotizar</a></td>
      </tr>
    </table>
    <br/>
    <hr/>
    <br/>
    <div>
      <p class="diseno_w">Ideamosweb es un estudio ubicado en Barranquilla - Colombia. Nuestro principal servicio es de diseño y desarrollo de páginas de Internet. Estos precios no incluyen el valor de Dominio y Hosting. Adicionalmente ofrecemos servicios como: creación de sitios de comercio electrónico, implementación de carritos de compra y aplicaciones Web.</p>
      <p class="diseno_w">En cuanto a pequeñas empresas que quieran tener un sitio web, brindamos precios económicos con un aspecto moderno y atractivo, además brindamos servicios a grandes empresas utilizando lenguaje avanzado y de última tecnología desarrollando páginas web totalmente profesionales con un aspecto moderno e internacional. Así que nuestros servicios te brindan una gran oportunidad a ser parte de la gran red de Internet y así ser visto en todo el mundo.</p>
    </div>
  </div>
</div>