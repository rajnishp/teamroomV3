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
		$sql = 'SELECT * FROM user_info ORDER BY rank DESC Limit 0, 10;';
		$sqlQuery = new sqlQuery($sql);
		$sqlQuery -> setNumber($userId);

		return $this -> getListUsers($sqlQuery);
	}

	/**
	 * Read row
	 *
	 * @return UserInfoMySql 
	 */
	protected function readUserRow($row){
		$userInfo = new UserInfo($row['first_name'],$row['last_name'],$row['email'],$row['phone'],$row['username'],
								$row['rank'],$row['user_type'],$row['working_org_name'],$row['living_town'],$row['about_user'],$row['id']);
		
		return $userInfo;
	}
	
	protected function getListUsers($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readUserRow($tab[$i]);
		}
		return $ret;
	}
	
}
?>