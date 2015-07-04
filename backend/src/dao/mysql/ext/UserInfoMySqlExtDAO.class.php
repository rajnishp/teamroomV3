<?php
/**
 * Class that operate on table 'user_info'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-03-03 14:48
 */
class UserInfoMySqlExtDAO extends UserInfoMySqlDAO{


	public function getUsersLinks($userId) {
		$sql = "(SELECT a.first_name, a.last_name, a.email, a.phone, a.username, a.rank, a.user_id FROM user_info as a JOIN known_peoples as b WHERE b.requesting_id = ? AND b.status != 4)
				UNION 
				(SELECT a.first_name, a.last_name, a.email, a.phone, a.username, a.rank, a.user_id FROM user_info as a JOIN known_peoples as b WHERE b.knowing_id = ? AND b.status = 2)
				UNION 
				(SELECT a.first_name, a.last_name, a.email, a.phone, a.username, a.rank, a.user_id FROM user_info as a join (SELECT DISTINCT b.user_id FROM teams as a join teams as b 
											where a.user_id = $user_id and a.team_name = b.team_name and b.user_id != '$user_id')
											as b where a.user_id = b.user_id);";
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
								0, $row['rank'],$row['user_type'], 0, 0, 0, $row['working_org_name'],$row['living_town'],$row['about_user'],
								0, 0, $row['id']);
		
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