<?php
/**
 * Class that operate on table 'challenges'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-03-03 14:48
 */
class ChallengesMySqlExtDAO extends ChallengesMySqlDAO{


	public function getByChallengeId($challengeId){
		$sql = "(SELECT challenge.id, challenge.project_id, challenge.title, challenge.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.creation_time, user.first_name, user.last_name, user.username 
					FROM challenges as challenge JOIN user_info as user 
						WHERE challenge.id = ? AND challenge.status != 3 
							AND challenge.status != 7 AND user.id = challenge.user_id AND challenge.blob_id = 0)
				UNION
				(SELECT challenge.id, challenge.project_id, challenge.title, blob.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.creation_time, user.first_name, user.last_name, user.username 
					FROM challenges as challenge JOIN user_info as user JOIN blobs as `blob` 
						WHERE challenge.id = ? AND challenge.status != 3 
							AND challenge.status != 7 AND user.id = challenge.user_id 
							AND challenge.blob_id = blob.id)
				";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($challengeId);
		$sqlQuery->setNumber($challengeId);
		
		$activity = $this->getRowChallenge($sqlQuery);

		$DAOFactory = new DAOFactory();
		$challengeResponsesDAO = $DAOFactory->getChallengeResponsesDAO();

		if ($activity ) {
			$activity -> setResponses ( $challengeResponsesDAO -> getResponses ( $activity -> getId () ) );
		}

		return $activity;
	}

	public function getTopActivities () {
		//for right panel, to show more view activity
		//current its working on random bases

		$sql = "(SELECT challenge.id, challenge.project_id, challenge.title, challenge.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.creation_time, user.first_name, user.last_name, user.username 
					FROM challenges as challenge JOIN user_info as user
						WHERE challenge.status != 3 AND challenge.status != 7 AND user.id = challenge.user_id  AND challenge.blob_id = 0 ORDER BY rand() LIMIT 5)
				UNION
				(SELECT challenge.id, challenge.project_id, challenge.title, blob.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.creation_time, user.first_name, user.last_name, user.username 
					FROM challenges as challenge JOIN user_info as user JOIN blobs as `blob`
						WHERE challenge.status != 3 AND challenge.status != 7 AND user.id = challenge.user_id 
							AND challenge.blob_id = blob.id ORDER BY rand() LIMIT 5)
						";
	
		$sqlQuery = new SqlQuery($sql);
		return $this->getListChallenge($sqlQuery);
	}

	/**
	 * Get user challenge records from table
	 */
	public function getUserChallenge($id, $userId){
		$sql = 'SELECT challenge.id, challenge.project_id, challenge.title, challenge.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.creation_time, user.first_name, user.last_name, user.username 
				FROM challenges as challenge JOIN user_info as user 
				WHERE challenge.id = ? AND challenge.user_id = ? AND challenge.status != 3 AND challenge.status != 7 AND user.id = challenge.user_id';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		$sqlQuery->setNumber($userId);
		return $this->getRowChallenge($sqlQuery);
	}


	/**
	 * Get recent activities records from table challenge
	*/

	public function getRecentActivities () {
		$sql = "(SELECT challenge.id, challenge.project_id, challenge.title, challenge.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.creation_time, 
						user.first_name, user.last_name, user.username 
					FROM challenges as challenge JOIN user_info as user
						WHERE challenge.status != 3 AND challenge.status != 7 AND user.id = challenge.user_id AND challenge.blob_id = 0 ORDER BY challenge.creation_time DESC LIMIT 0, 10 )
				UNION
				(SELECT challenge.id, challenge.project_id, challenge.title, challenge.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.creation_time, 
						user.first_name, user.last_name, user.username 
					FROM challenges as challenge JOIN user_info as user JOIN blobs as `blob`
						WHERE challenge.status != 3 AND challenge.status != 7 AND user.id = challenge.user_id 
							AND challenge.blob_id = blob.id ORDER BY challenge.creation_time DESC LIMIT 0, 10)";
	
		$sqlQuery = new SqlQuery($sql);
		return $this->getListChallenge($sqlQuery);
	}


	/**
	 * Get all user challenges records from table
	 */
	public function  getUserActivities ($userId, $start, $limit){
		$sql = "(SELECT challenge.id, challenge.project_id, challenge.title, challenge.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.creation_time, user.first_name, user.last_name, user.username 
					FROM challenges as challenge JOIN user_info as user 
						WHERE challenge.user_id = ? AND challenge.status != 3 AND challenge.status != 7 AND user.id = challenge.user_id AND challenge.blob_id = 0 ORDER BY creation_time DESC) 
				UNION
				(SELECT challenge.id, challenge.project_id, challenge.title, challenge.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.creation_time, user.first_name, user.last_name, user.username 
					FROM challenges as challenge JOIN user_info as user JOIN blobs as `blob`
						WHERE challenge.user_id = ? AND challenge.status != 3 AND challenge.status != 7 AND user.id = challenge.user_id
							AND challenge.blob_id = blob.id ORDER BY creation_time DESC )";
		
		if(isset($start) && isset($limit)){
			$sql .= " LIMIT $start,$limit ;";
		}
		else {
			$sql .= ";";
		}

		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		return $this->getListChallenge($sqlQuery);
	}

	/**
	 * Get challenge records from table
	 */
	public function loadChallenge($id){
		$sql = "SELECT challenge.id, challenge.project_id, challenge.title, challenge.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.creation_time, user.first_name, user.last_name, user.username 
				FROM challenges as challenge JOIN user_info as user JOIN projects as project
				WHERE challenge.id = ? AND challenge.status != 3 AND challenge.status != 7 
					AND challenge.type != 2 AND challenge.type != 5 
					AND project.type = 'Public' AND user.id = challenge.user_id";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRowChallenge($sqlQuery);
	}

	/**
	 * Get all challenges records from table
	 */
	public function queryAllChallenges($start = 0, $limit = 10){
		$sql = "(SELECT user.id, challenge.id, challenge.project_id, challenge.title, challenge.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.last_update_time, 
						user.first_name, user.last_name, user.username 
					FROM challenges as challenge JOIN user_info as user JOIN projects as project
						WHERE challenge.status != 3 AND challenge.status != 7 
							AND challenge.type != 2 AND challenge.type != 5 
							AND project.id = challenge.project_id
							AND challenge.blob_id = 0
							AND project.type = 'Public' AND user.id = challenge.user_id)
				UNION
				(SELECT user.id, challenge.id, challenge.project_id, challenge.title, challenge.stmt, challenge.creation_time, challenge.type, challenge.status, challenge.likes, challenge.dislikes, challenge.last_update_time,
						user.first_name, user.last_name, user.username 
					FROM challenges as challenge JOIN user_info as user JOIN projects as project JOIN blobs as `blob`
						WHERE challenge.status != 3 AND challenge.status != 7 
							AND challenge.type != 2 AND challenge.type != 5
							AND project.id = challenge.project_id 
							AND project.type = 'Public' AND user.id = challenge.user_id
							AND challenge.blob_id = blob.id )  
					ORDER BY last_update_time DESC ";

		if(isset($start) && isset($limit)){
			$sql .= " LIMIT $start,$limit ;";
		}
		else {
			$sql .= ";";
		}

		$sqlQuery = new SqlQuery($sql);

		$activitities = $this->getListChallenge($sqlQuery);

		$DAOFactory = new DAOFactory();
		$challengeResponsesDAO = $DAOFactory->getChallengeResponsesDAO();

		foreach ($activitities as $activity) {
			if ($activity ) {
				$activity -> setResponses ( $challengeResponsesDAO -> getResponses ( $activity -> getId () ) );
			}
		}
		//var_dump($activitities); die();
		return $activitities;
	}

	/**
	 * Get project challenge records from table
	 */
	public function loadProjectChallenge($id, $projectId){
		$sql = 'SELECT * FROM challenges WHERE id = ? AND project_id = ? AND status != 3 AND status != 7';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		$sqlQuery->setNumber($projectId);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all project challenges records from table
	 */
	public function queryAllProjectChallenges($projectId){
		$sql = 'SELECT * FROM challenges WHERE project_id = ? AND status != 3 AND status != 7';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($projectId);
		return $this->getList($sqlQuery);
	}

	public function deleteChallenge($challengeId){
		$sql = 'UPDATE challenges SET status = 5 WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($challengeId);
		return $this->executeUpdate($sqlQuery);
	}

	/**
	 * Get project challenge records from table
	 */
	public function queryAllTasks($userId, $userId){
		$sql = "(SELECT DISTINCT challenge.id, challenge.title, challenge.type, challenge.status, challenge.creation_time, user.first_name, user.last_name, user.username 
					FROM challenges AS challenge JOIN user_info AS user JOIN challenge_ownership AS owner 
						WHERE owner.user_id = ? 
							AND (challenge.type = '5' OR challenge.type = '1' OR challenge.type = '2' OR challenge.type = '3') 
							AND challenge.user_id = user.id 
							AND challenge.id = owner.challenge_id
				)
				UNION
				(SELECT DISTINCT challenge.id, challenge.title, challenge.type, challenge.status, challenge.creation_time, user.first_name, user.last_name, user.username 
					FROM challenges AS challenge JOIN user_info AS user JOIN challenge_ownership AS owner 
						WHERE challenge.user_id = ?
							AND challenge.type = '5' 
							AND owner.user_id = user.id 
							AND challenge.id = owner.challenge_id
				)";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		return $this->getListUserTasks($sqlQuery);
	}

	/**
	 * Read row
	 *
	 * @return ChallengesMySql 
	 */
	protected function readRowChallenge($row){
		$challenge = new Challenge($row['user_id'], $row['project_id'],0,0,$row['title'], $row['stmt'],$row['type'],$row['status'],$row['likes'],$row['dislikes'],$row['creation_time'],0, $row['first_name'], $row['last_name'], $row['username'], $row['id']);
	
		return $challenge;
	}

	/**
	 * Read row
	 *
	 * @return ChallengesMySql 
	 */
	protected function readRowUserTasks($row){
		$challenge = new Challenge(0,0,0,0,$row['title'],0,$row['type'],$row['status'],0,0,$row['creation_time'],0, $row['first_name'], $row['last_name'], $row['username'], $row['id']);
	
		return $challenge;
	}

	protected function getListChallenge($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRowChallenge($tab[$i]);
		}
		return $ret;
	}
	
	protected function getListUserTasks($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRowUserTasks($tab[$i]);
		}
		return $ret;
	}

	/**
	 * Get row
	 *
	 * @return ChallengesMySql 
	 */
	protected function getRowChallenge($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRowChallenge($tab[0]);		
	}
}
?>