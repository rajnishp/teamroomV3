<?php
/**
 * Class that operate on table 'project_responses'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-03-03 14:48
 */
class ProjectResponsesMySqlExtDAO extends ProjectResponsesMySqlDAO{

	public function loadResponse($id, $projectId){
		$sql = 'SELECT * FROM project_responses WHERE id = ? AND project_id = ? AND status = 1';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		$sqlQuery->setNumber($projectId);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAllResponse($projectId){
		$sql = "SELECT response.*, user.first_name, user.last_name, user.username 
					FROM project_responses as response JOIN user_info as user
						WHERE response.project_id = ? AND response.user_id = user.id AND response.status = 1 ORDER BY response.creation_time ASC ;";
		
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($projectId);
		return $this->getList($sqlQuery);
	}

	public function loadConversation($id, $projectId){
		$sql = 'SELECT * FROM project_responses WHERE id = ? AND project_id = ? AND status = 5';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		$sqlQuery->setNumber($projectId);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAllConversation($projectId){
		$sql = 'SELECT * FROM project_responses WHERE project_id = ? AND status = 5';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($projectId);
		return $this->getList($sqlQuery);
	}
	
}
?>