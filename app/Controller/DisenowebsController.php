<?php
class DisenowebsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');

	public function index() {
    	$this->set('title_for_layout', 'Diseño web Barranquilla, Colombia - Planes y Precios');    	    	                
    }
}