<?php
	/**
	 * Object represents table 'working_locations'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-07-15 12:50	 
	 */
	class WorkingLocation{
		
		private $id;
		private $locationName;
		private $addedOn;
		
		function __construct ($locationName, $addedOn, $id = null) {
			$this -> id = $id;
			$this -> locationName = $locationName;
			$this -> addedOn = $addedOn;

		}

		function setId($id){
			$this -> id = $id;
		}
		function getId(){
			return $this->id;
		}

		function setLocationName($locationName){
			$this -> locationName = $locationName;
		}
		function getLocationName(){
			return $this-> locationName;
		}

		function setAddedOn($addedOn){
			$this -> addedOn = $addedOn;
		}
		function getAddedOn(){
			return $this-> addedOn;
		}
	}
?>