<?php
/**
 * Class that operate on table 'user_follow_up'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-08-15 14:32
 */
class UserFollowUpMySqlExtDAO extends UserFollowUpMySqlDAO{

		public function getUserUnderFollowUp(){
		$sql = "SELECT * FROM mailing_engine.user_follow_up ORDER BY state ;";
		$sqlQuery = new SqlQuery($sql);
		
		return $this->getList($sqlQuery);
	}

}
?>