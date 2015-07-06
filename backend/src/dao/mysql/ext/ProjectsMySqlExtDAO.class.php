<?php
/**
 * Class that operate on table 'projects'. Database Mysql.
 *
 * @author: rajnish
 * @date: 2015-03-03 14:48
 */
class ProjectsMySqlExtDAO extends ProjectsMySqlDAO{

	/*public function getUserProject($projectId, $userId){

		$sql = "SELECT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user WHERE project.id = ? AND project.user_id = ? AND project.user_id = user.id;";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($projectId);
		$sqlQuery->setNumber($userId);
		return $this->getRowProject($sqlQuery);
	}
*/
	function checkProject($projectId, $userId){
			//returns true in case of public
			$type = mysqli_query($db_handle,"SELECT project_type FROM projects where id = '$projectId';") ;
			$typerow = mysqli_fetch_array($type) ;
			$usertype = mysqli_query($db_handle, "SELECT * FROM user_info where id = '$userId' ;") ;
			$usertypeRow = mysqli_fetch_array($usertype) ;
			$TypeUser = $usertypeRow['user_type'] ;
			if ($typerow['project_type'] == 1) {
				return true ;
			}
			else if ($typerow['project_type'] == 2) {
				if(isset($_SESSION['user_id'])){
					$access = mysqli_query($db_handle,"(SELECT user_id from projects where id = '$projectId' and user_id = '$userId')
														UNION 
														(SELECT DISTINCT a.user_id FROM teams as a join projects as b WHERE a.user_id = '$userId' and a.project_id = b.id and b.project_id = '$projectId' and a.member_status = '1') ;") ;
					if (mysqli_num_rows($access) > 0) {
						return true ;
					}
					else return false ;
				}
				else return false ;
			}
			else if ($typerow['project_type'] == 4) { 
				if(isset($_SESSION['user_id'])){
					if($TypeUser == "investor" || $TypeUser == "collaboratorInvestor" || $TypeUser == "fundsearcherInvestor" || $TypeUser == "collaboratorInvestorFundsearcher"){
						return true ;
					} 
					else {
						$check = mysqli_query($db_handle,"(SELECT user_id FROM projects WHERE id = '$projectId' AND user_id = '$userId')
															UNION 
															(SELECT DISTINCT a.user_id FROM teams as a JOIN projects as b WHERE a.user_id = '$userId' AND a.project_id = b.id AND b.id = '$projectId' AND a.member_status = '1') ;") ;
						if (mysqli_num_rows($check) > 0) {
							return true ;
						}
						else return false ;
					}
				}
				else return false ;
			}
			else return false ;
				//check user have access if access the return true
		}

	public function getByUserIdProjectId($userId, $projectId){


		if ($this-> checkProject($projectId, $userId)) {


			$sql = 'SELECT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
						FROM projects as project JOIN user_info as user WHERE project.id = ? AND project.user_id = ? AND project.user_id = user.id';
			$sqlQuery = new SqlQuery($sql);
			$sqlQuery->setNumber($projectId);
			$sqlQuery->setNumber($userId);
			return $this->getRowProject($sqlQuery);
		}
	}


	public function getByProjectId ($projectId) {
		$sql = 'SELECT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user WHERE project.id = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($projectId);
		return $this->getRowProject($sqlQuery);	
	}

	public function getByUserId ($userId){
		$sql = "SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user
						WHERE project.user_id = user.id AND project.type != 'Deleted' ORDER BY creation_time DESC";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		return $this->getListProjects($sqlQuery);
	}

	/**
	 * Get all records from table
	 */

	
	public function getUserProjects($userId, $start, $limit){
		$sql = "SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN teams as team 
					WHERE (project.user_id = ? OR team.user_id = ?) AND project.user_id = user.id AND project.type != 'Deleted' AND team.member_status = 1 ORDER BY creation_time DESC ";
		
		if(isset($start) && isset($limit)){
			$sql .= " LIMIT $start,$limit ;";
		}
		else {
			$sql .= " ;";
		}
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		return $this->getListProjects($sqlQuery);
	}

	public function getUserPublicProjects($userId, $start, $limit){
		$sql = "SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN teams as team 
					WHERE (project.user_id = ? OR team.user_id = ?) AND project.user_id = user.id AND project.type = 'Public' AND team.member_status = 1 ORDER BY creation_time DESC ";
		
		if(isset($start) && isset($limit)){
			$sql .= " LIMIT $start,$limit ;";
		}
		else {
			$sql .= " ;";
		}
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		return $this->getListProjects($sqlQuery);
	}

	public function queryAllUserProjects($userId){
		$sql = "SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN teams as team 
					WHERE (project.user_id = ? OR team.user_id = ?) AND project.user_id = user.id AND project.type != 'Deleted' AND team.member_status = 1 ORDER BY creation_time DESC;";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		return $this->getListProjects($sqlQuery);
	}

	public function getTopProjects() {
		$sql = "SELECT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username, 
						(SELECT COUNT(user_id) FROM teams WHERE teams.project_id = project.id GROUP BY project_id ORDER BY COUNT(user_id) DESC LIMIT 0, 10) as project_members
						FROM projects as project JOIN user_info as user 
							GROUP BY project.id ORDER BY project_members DESC LIMIT 0, 10;";

		$sqlQuery = new SqlQuery($sql);
		return $this->getListProjects($sqlQuery);

	}

	/**
	 * Read row
	 *
	 * @return ProjectsMySql 
	 */
	protected function readRowProjects($row){
		$project = new Project(0, 0, $row['title'], $row['statement'],$row['type'],0,0, $row['creation_time'],0,0,0, $row['first_name'], $row['last_name'], $row['username'], $row['id']);
		
		return $project;
	}
	
	protected function getListProjects($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRowProjects($tab[$i]);
		}
		return $ret;
	}

	/**
	 * Get row
	 *
	 * @return ProjectsMySql 
	 */
	protected function getRowUserProject($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRowProjects($tab[0]);		
	}
}
?>