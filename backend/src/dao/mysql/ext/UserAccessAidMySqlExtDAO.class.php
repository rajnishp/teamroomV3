<?php
/**
 * Class that operate on table 'user_access_aid'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-03-03 14:48
 */
class UserAccessAidMySqlExtDAO extends UserAccessAidMySqlDAO{

	public function queryByUserIdStatus($userId){
		$sql = 'SELECT * FROM user_access_aid WHERE user_id = ? AND status = 0 ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		return $this->getList($sqlQuery);
	}

	public function queryByHashKeyAidId($hashKey, $userId){
		$sql = 'SELECT * FROM user_access_aid WHERE hash_key = ? AND user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		return $this->getList($sqlQuery);
	}

}
?>