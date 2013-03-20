<!-- start header -->
<div id="logo"> <a href="index.html"><img id="logo_img" src="img/logo-ideamosweb.jpg" width="364" height="107" alt="ideamosweb" /></a>
  <h2> &raquo;Tus ideas en la Red</h2>
  <div class="ban-contacto"> <img src="img/img-contact4.png" width="250" height="80" alt="telefono: 3026046 Celular: 3013442116" title="telefono: 3026046 Celular: 3013442116" /> </div>
</div>
<div id="header">  
  <div>
    <ul class="nav current-home">
      <li class="home"><?php echo $this->html->link('Inicio', array('controller' => 'starts', 'action' => 'index')) ?></li>
      <li class="design" style="background-image:none;"><?php echo $this->html->link('DiseÑo web', array('controller' => 'disenowebs', 'action' => 'index')) ?></li>
      <li class="positionweb" style="background-image:none;"><?php echo $this->html->link('Posicionamiento', array('controller' => 'seoposicionamientowebbarranquilla', 'action' => 'index')) ?></li>
      <li class="ourcompany" style="background-image:none;"><?php echo $this->html->link('Nosotros', array('controller' => 'diseñowebs', 'action' => 'index')) ?></li>
      <li class="otherservices" style="background-image:none;"><?php echo $this->html->link('Otros Servicios', array('controller' => 'diseñowebs', 'action' => 'index')) ?></li>
      <li class="contactmenu" style="background-image:none;"><?php echo $this->html->link('Contacto', array('controller' => 'diseñowebs', 'action' => 'index')) ?></li>
    </ul>
  </div>
</div>
<!-- end header -->