<?php
	/**
	 * Object represents table 'forms'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-08-10 11:13	 
	 */
	class Form{
		
		private $id;
		private $form;
		private $addedOn;
		
		function __construct ($form, $addedOn, $id = null) {
			$this-> id= $id;
			$this-> form= $form;
			$this-> addedOn= $addedOn;

		}

		function setId($id){
			$this -> id = $id;
		}
		function getId(){
			return $this->id;
		}

		function setForm($form){
			$this -> form = $form;
		}
		function getForm(){
			return $this-> form;
		}

		function setAddedOn($addedOn){
			$this -> addedOn = $addedOn;
		}
		function getAddedOn(){
			return $this-> addedOn;
		}
	}
?>