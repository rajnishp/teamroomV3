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
		$sql = 'SELECT * FROM user_access_aid WHERE id = ? AND hash_key = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->set($hashKey);

		return $this->getList($sqlQuery);
	}

	public function updateStatus($id){
		$sql = 'UPDATE user_access_aid SET status=1 WHERE id = ?;';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);

		return $this->executeUpdate($sqlQuery);
	}

}
?>