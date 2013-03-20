<?php
class StartsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');

	public function index() {
    	$this->set('title_for_layout', 'Diseño de paginas web Barranquilla');    	    	                
    }
}