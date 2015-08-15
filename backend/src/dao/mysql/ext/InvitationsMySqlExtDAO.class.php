<?php
/**
 * Class that operate on table 'invitations'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-08-15 13:59
 */
class InvitationsMySqlExtDAO extends InvitationsMySqlDAO{

	public function getUsersToInvite(){
		$sql = "SELECT * FROM mailing_engine.invitations ORDER BY `count` ;";
		$sqlQuery = new SqlQuery($sql);
		
		return $this->getList($sqlQuery);
	}
}
?>