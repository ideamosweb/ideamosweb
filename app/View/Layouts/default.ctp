<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->html->meta('description', 'diseño de paginas web barranquilla, empresa de diseño de paginas web barranquilla, diseño de paginas web desde Barranquilla para toda colombia, diseño web barranquilla, diseno web barranquilla, paginas web informativas, aplicaciones web, tienda virtual con carrito de compra, html5 y aplicaciones para moviles.');

		echo $this->Html->css(array('default', 'colorbox'));
		echo $this->fetch('css');		

		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js');		
		echo $this->fetch('script');
		echo $this->Html->script('jquery-javascript');
		echo $this->Html->script('http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.74.js');
		echo $this->Html->script('google_analytics_script');
		echo $this->Html->script('jquery.colorbox');
	?>
	<script type="application/javascript">
		$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
			$(".group1").colorbox({rel:'group1'});
						
			//Example of preserving a JavaScript event for inline calls.
			$("#click").click(function(){ 
				$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
				return false;
			});
		});
	</script>	
</head>
<body>
	<!-- start header -->
	<div id="wrapper"> 
		<?php echo $this->element('header'); ?>
	</div>
	<!-- end header -->

	<!-- start Main Banner -->
	<?php echo $this->fetch('main_banner'); ?>
	<!-- end Main Banner -->

	<!-- start page --> 
	<div id="page">
		<!-- start content -->  
		<div id="contenido">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<!-- end content -->

		<!-- start sidebar -->  
  		<div id="sidebar">
  			<?php echo $this->element('sidebar'); ?>
  		</div>  
  		<!-- end sidebar -->  		  
  		<div style="clear: both;">&nbsp;</div>

		<!-- start footer -->  
  		<div id="footer">
			<?php echo $this->element('footer'); ?>
		</div>
	</div>
	<!-- end page -->
</body>
</html>
