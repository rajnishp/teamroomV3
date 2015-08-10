<?php
	/**
	 * Object represents table 'user_social_links'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-07-28 14:31	 
	 */
	class UserSocialLink{
		
		private $id;
		private $userId;

		private $linkUrl;

		private $fbLink;
		private $twitterLink;
		private $linkedinLink;
		
		private $type;
		
		function __construct( $userId, $linkUrl, $fbLink, $twitterLink, $linkedinLink, $type, $id = null) {
			$this -> id = $id;
			$this -> userId = $userId;
			$this -> linkUrl = $linkUrl;
			$this -> fbLink = $fbLink;
			$this -> twitterLink = $twitterLink;
			$this -> linkedinLink = $linkedinLink;
			$this -> type = $type;
		}
		
		function setId($id){
			$this -> id = $id;
		}
		function getId(){
			return $this -> id;
		}

		function setUserId($userId){
			$this -> userId = $userId;
		}
		function getUserId(){
			return $this-> userId;
		}
	
		function setLinkUrl($linkUrl){
			$this -> linkUrl = $linkUrl;
		}
		function getLinkUrl(){
			return $this -> linkUrl;
		}

		function setFbLink($fbLink){
			$this -> fbLink = $fbLink;
		}
		function getFbLink(){
			return $this -> fbLink;
		}

		function setTwitterLink($twitterLink){
			$this -> twitterLink = $twitterLink;
		}
		function getTwitterLink(){
			return $this -> twitterLink;
		}

		function setLinkedinLink($linkedinLink){
			$this -> linkedinLink = $linkedinLink;
		}
		function getLinkedinLink(){
			return $this -> linkedinLink;
		}

		function setType($type){
			$this -> type = $type;
		}
		function getType(){
			return $this -> type;
		}
	}
?>