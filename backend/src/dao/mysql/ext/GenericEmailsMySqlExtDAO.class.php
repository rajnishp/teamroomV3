<?php
/**
 * Class that operate on table 'generic_emails'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-08-15 13:59
 */
class GenericEmailsMySqlExtDAO extends GenericEmailsMySqlDAO{

	public function getNotificationEmail(){
		$sql = "SELECT * FROM mailing_engine.generic_emails WHERE `type`='Notification' ;";
		$sqlQuery = new SqlQuery($sql);
		
		return $this->getList($sqlQuery);
	}

	public function getFollowUpEmail(){
		$sql = "SELECT * FROM mailing_engine.generic_emails WHERE `type`='FollowUp' ;";
		$sqlQuery = new SqlQuery($sql);
		
		return $this->getList($sqlQuery);
	}

	public function getInvitationEmails(){
		$sql = "SELECT * FROM mailing_engine.generic_emails WHERE `type`='Invitation' ;";
		$sqlQuery = new SqlQuery($sql);
		
		return $this->getList($sqlQuery);
	}

	public function getUserNotFollowUp(){
		$sql = "SELECT * FROM ninjasTeamRoom2.user_info AS user WHERE user.id NOT IN ( SELECT user_id FROM mailing_engine.user_follow_up )
					AND TIMESTAMPDIFF( HOUR , user.last_login_time, now( ) ) >72";
		$sqlQuery = new SqlQuery($sql);
		
		return $this->getList($sqlQuery);
	}
}
?>