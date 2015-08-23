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
		private $type;
		private $addedOn;
		
		function __construct ($form, $type, $addedOn, $id = null) {
			$this-> id= $id;
			$this-> form= $form;
			$this-> type= $type;
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

		function setType($type){
			$this -> type= $type;
		}
		function getType(){
			return $this-> type;		
		}

		function setAddedOn($addedOn){
			$this -> addedOn = $addedOn;
		}
		function getAddedOn(){
			return $this-> addedOn;
		}
	}
?>