<?php
/**
 * Class that operate on table 'user_info'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-03-03 14:48
 */
class UserInfoMySqlExtDAO extends UserInfoMySqlDAO{


	public function getUsersLinks($userId) {
		$sql = "(SELECT a.first_name, a.last_name, a.email, a.phone, a.username, a.rank, a.id FROM user_info as a JOIN known_peoples as b WHERE b.requesting_id = ? AND b.status != 4)
				UNION 
				(SELECT a.first_name, a.last_name, a.email, a.phone, a.username, a.rank, a.id FROM user_info as a JOIN known_peoples as b WHERE b.knowing_id = ? AND b.status = 2)
				UNION 
				(SELECT a.first_name, a.last_name, a.email, a.phone, a.username, a.rank, a.id FROM user_info as a join 
						(SELECT DISTINCT b.user_id FROM teams as a join teams as b 
							WHERE a.user_id = ? and a.team_name = b.team_name and b.user_id != ? AND a.project_id = b.project_id)
						as b 
					WHERE a.id = b.user_id);";
		$sqlQuery = new sqlQuery($sql);
		$sqlQuery -> setNumber($userId);
		$sqlQuery -> setNumber($userId);
		$sqlQuery -> setNumber($userId);
		$sqlQuery -> setNumber($userId);

		return $this -> getListUsers($sqlQuery);
	}

	public function getByUsernamePassword($username, $password){
		$sql = "SELECT * FROM user_info WHERE (username = ? OR email = ?) AND password = ?;";

		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($username);
		$sqlQuery->set($username);
		$sqlQuery->set($password);
		
		return $this->getRow($sqlQuery);
	}
	public function getTopUsers() {
		$sql = 'SELECT * FROM user_info ORDER BY rank DESC Limit 0, 10;';
		$sqlQuery = new sqlQuery($sql);
		$sqlQuery -> setNumber($userId);

		return $this -> getListUsers($sqlQuery);
	}


	public function updateNewPassword($password, $userId){
		$sql = "UPDATE user_info SET password = ? WHERE id = ?";

		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($password);
		$sqlQuery->set($userId);
		
		return $this -> executeUpdate($sqlQuery);
	}

	/**
	 * Read row
	 *
	 * @return UserInfoMySql 
	 */
	protected function readUserRow($row){
		$userInfo = new UserInfo(isset( $row['first_name'] ) ? $row['first_name'] : null,
								isset( $row['last_name'] ) ? $row['last_name'] : null,
								$row['email'],$row['phone'],
								isset( $row['username'] ) ? $row['username'] : null,
								0, $row['rank'],
								isset( $row['user_type'] ) ? $row['user_type'] : null,
								0, 0, 0, 
								isset( $row['working_org_name'] ) ? $row['working_org_name'] : null,
								isset( $row['living_town'] ) ? $row['living_town'] : null,
								isset( $row['about_user'] ) ? $row['about_user'] : null,
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