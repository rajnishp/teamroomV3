<?php
/**
 * Class that operate on table 'user_info'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-03-03 14:48
 */
class UserInfoMySqlExtDAO extends UserInfoMySqlDAO{


	public function getUsersLinks($userId) {
		$sql = '';
		$sqlQuery = new sqlQuery($sql);
		$sqlQuery -> setNumber($userId);

		return $this -> getListUsers($sqlQuery);
	}

	public function getTopUsers() {
		$sql = '';
		$sqlQuery = new sqlQuery($sql);
		$sqlQuery -> setNumber($userId);

		return $this -> getListUsers($sqlQuery);
	}
	
}
?>