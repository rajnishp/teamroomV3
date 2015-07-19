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
	
	function checkAuth($projectId, $userId){
		
		//returns true in case of public
		
		$sql = "SELECT type FROM projects where id = ? ;";

		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($projectId);
		
		$projectType = $this->getRowUserProject($sqlQuery);			
		
		if($projectType){
			
			if ($projectType -> getType() == 'Public')
				return true;

			else if ($projectType -> getType() == 'Classified') {
			
				if(isset($userId)) {
					$sql = "(SELECT user_id from projects where id = ? and user_id = ?)
							UNION 
							(SELECT DISTINCT team.user_id FROM teams as team join projects as project 
									WHERE team.user_id = ? and team.project_id = project.id and project.id = ? and team.member_status = '1')
							;";

					$sqlQuery = new SqlQuery($sql);
					$sqlQuery->setNumber($projectId);
					$sqlQuery->setNumber($userId);
					$sqlQuery->setNumber($userId);
					$sqlQuery->setNumber($projectId);
				
					$projectAccess = $this->getListProjects($sqlQuery);

					if (count($projectAccess) > 0) {
						return true ;
					}
					else return false ;
				}
				else return false ;
			}

			else if ($projectType -> getType() == 'Private') { 
				
				if(isset($userId)) {
				
					$sql = "SELECT user_type FROM user_info where id = ? ;";
			
					$sqlQuery = new SqlQuery($sql);
					
					$sqlQuery->setNumber($userId);
					
					$DAOFactory = new DAOFactory();
					$userInfoDAO = $DAOFactory->getUserInfoDAO();

					$userType = $userInfoDAO -> readUserRow($sqlQuery);

					if($userType -> getUserType() == "investor" || $userType -> getUserType() == "collaboratorInvestor" || $userType -> getUserType() == "fundsearcherInvestor" || $userType -> getUserType() == "collaboratorInvestorFundsearcher"){
						return true ;
					} 
					else {

						if (count($projectAccess) > 0) {
								return true ;
						}
						else return false ;
					}
				}
				else return false ;
			}
			else return false ;
		}
		else return false ;

		

		//check user have access if access the return true
	}

	public function getByUserIdProjectId($userId, $projectId){


			$sql = "(SELECT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
						FROM projects as project JOIN user_info as user 
							WHERE project.id = ? AND project.user_id = ? AND project.user_id = user.id AND project.blob_id = 0)
					UNION
					(SELECT project.id, project.project_title as title, blob.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
						FROM projects as project JOIN user_info as user JOIN blobs as `blob`
							WHERE project.id = ? AND project.user_id = ? AND project.user_id = user.id
								AND project.blob_id = blob.id)
						";
			$sqlQuery = new SqlQuery($sql);
			$sqlQuery->setNumber($projectId);
			$sqlQuery->setNumber($userId);
			$sqlQuery->setNumber($projectId);
			$sqlQuery->setNumber($userId);
			
			$project = $this->getRowProject($sqlQuery);

			$DAOFactory = new DAOFactory();
			$projectResponsesDAO = $DAOFactory->getProjectResponsesDAO();

			if ($project ) {
				$project -> setResponses ( $projectResponsesDAO -> queryAllResponse ( $project -> getId () ) );
			}
			return $project;
		
	}


	public function getByProjectId ($projectId) {
		//var_dump($projectId); die();
		$sql = "(SELECT project.user_id, project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user 
						WHERE project.id = ? AND project.user_id = user.id AND project.blob_id = 0
							AND project.type != 'Deleted') 
				UNION
				(SELECT project.user_id, project.id, project.project_title as title, blob.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN blobs as `blob`
						WHERE project.id = ? AND project.user_id = user.id
							AND project.blob_id = blob.id
							AND project.type != 'Deleted')";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($projectId);
		$sqlQuery->setNumber($projectId);

		$project = $this->getRowUserProject($sqlQuery);

		$DAOFactory = new DAOFactory();
		$projectResponsesDAO = $DAOFactory->getProjectResponsesDAO();

		if ($project ) {
			$project -> setResponses ( $projectResponsesDAO -> queryAllResponse ( $project -> getId () ) );
		}
		return $project;
		
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
		$sql = "(SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN teams as team 
					WHERE (project.user_id = ? OR team.user_id = ?) AND project.user_id = user.id AND project.type != 'Deleted' AND team.member_status = 1 AND project.blob_id = 0 ORDER BY creation_time DESC) 
				UNION
				(SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN teams as team JOIN blobs as `blob`
					WHERE (project.user_id = ? OR team.user_id = ?) AND project.user_id = user.id AND project.type != 'Deleted' AND team.member_status = 1 
						AND project.blob_id = blob.id ORDER BY creation_time DESC )";
		
		if(isset($start) && isset($limit)){
			$sql .= " LIMIT $start,$limit ;";
		}
		else {
			$sql .= " ;";
		}
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		return $this->getListProjects($sqlQuery);
	}

	public function getUserPublicProjects($userId, $start, $limit){
		$sql = "(SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, 
					user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN teams as team 
					WHERE (project.user_id = ? OR team.user_id = ?) 
						AND project.user_id = user.id 
						AND project.type = 'Public' 
						AND team.member_status = 1
						AND project.blob_id = 0)
				UNION
				(SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN teams as team JOIN blobs as `blob` 
					WHERE (project.user_id = ? OR team.user_id = ?) 
						AND project.user_id = user.id 
						AND project.type = 'Public' AND team.member_status = 1
						AND project.blob_id = blob.id)
					ORDER BY creation_time DESC ";
		
		if(isset($start) && isset($limit)){
			$sql .= " LIMIT $start,$limit ;";
		}
		else {
			$sql .= " ;";
		}
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		return $this->getListProjects($sqlQuery);

		$projects = $this->getListProjects($sqlQuery);

		$DAOFactory = new DAOFactory();
		$projectResponsesDAO = $DAOFactory->getProjectResponsesDAO();
		foreach ($projects as $project) {
	
			if ($project ) {
				$project -> setResponses ( $projectResponsesDAO -> queryAllResponse ( $project -> getId () ) );
			}
		}
		return $projects;
	}

	public function queryAllUserProjects($userId){
		$sql = "SELECT DISTINCT project.id, project.project_title as title, project.stmt as statement, project.type, project.creation_time, 
								user.first_name, user.last_name, user.username 
					FROM projects as project JOIN user_info as user JOIN teams as team 
						WHERE (project.user_id = ? OR team.user_id = ?) 
							AND project.user_id = user.id 
							AND project.type != 'Deleted' AND team.member_status = 1 
							ORDER BY creation_time DESC;";
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

	public function getRecommendedProjects($userId) {
		$sql = "SELECT DISTINCT *, project_title as title
					FROM projects
						WHERE user_id != ?
							AND type = 'Public'
							AND id NOT
							IN ( SELECT DISTINCT project_id
									FROM teams
										WHERE user_id = ?)
				ORDER BY rand( ) LIMIT 10 ;";

		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);

		return $this->getListProjects($sqlQuery);

	}

	

	/**
	 * Read row
	 *
	 * @return ProjectsMySql 
	 */
	protected function readRowProjects($row){
		$project = new Project($row['user_id'], 0, $row['title'], $row['statement'],$row['type'],0,0, 
								$row['creation_time'],0,0,0, 
								$row['technical_skills'], $row['my_role'], $row['team_size'], $row['duration_from'], $row['duration_to'],
								$row['first_name'], $row['last_name'], $row['username'], $row['id']);
		
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