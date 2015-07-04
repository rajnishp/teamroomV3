<?php
/**
 * Class that operate on table 'projects'. Database Mysql.
 *
 * @author: rajnish
 * @date: 2015-03-03 14:48
 */
class ProjectsMySqlExtDAO extends ProjectsMySqlDAO{

	public function getUserProject($projectId, $userId){

		$sql = 'SELECT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user WHERE project.id = ? AND project.user_id = ? AND project.user_id = user.id';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($projectId);
		$sqlQuery->setNumber($userId);
		return $this->getRowProject($sqlQuery);
	}

	
	public function getByUserIdProjectId($userId, $projectId){

		$sql = 'SELECT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user WHERE project.id = ? AND project.user_id = ? AND project.user_id = user.id';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($projectId);
		$sqlQuery->setNumber($userId);
		return $this->getRowProject($sqlQuery);
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

	
	public function getUserProjects($userId, $start, $noOf){
		$sql = "SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN teams as team 
					WHERE (project.user_id = ? OR team.user_id = ?) AND project.user_id = user.id AND project.type != 'Deleted' AND team.member_status = 1 ORDER BY creation_time DESC";
		if(isset($start) && isset($end)){
			$sql .= " LIMIT $start,$noOf ";
		}
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		return $this->getListProjects($sqlQuery);
	}
	public function queryAllUserProjects($userId){
		$sql = "SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN teams as team 
					WHERE (project.user_id = ? OR team.user_id = ?) AND project.user_id = user.id AND project.type != 'Deleted' AND team.member_status = 1 ORDER BY creation_time DESC";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		return $this->getListProjects($sqlQuery);
	}

	public function getTopProjects() {
		$sql = 'SELECT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user WHERE ';
		//Add Where constraint
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