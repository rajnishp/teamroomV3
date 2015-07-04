<?php
/**
 * Class that operate on table 'challenge_responses'. Database Mysql.
 *
 * @author: rajnish
 * @date: 2015-03-03 14:48
 */
class ChallengeResponsesMySqlExtDAO extends ChallengeResponsesMySqlDAO{

	public function loadResponse($id, $challengeId) {
		$sql = 'SELECT * FROM challenge_responses WHERE id = ? AND challenge_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		$sqlQuery->setNumber($challengeId);
		return $this->getRowResponse($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function getResponses($challengeId){
		$sql = "SELECT response.*, user.first_name, user.last_name, user.username 
					FROM challenge_responses as response JOIN user_info as user
						WHERE response.challenge_id = ? AND response.user_id = user.id ORDER BY response.creation_time DESC ;";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($challengeId);
		return $this->getListReponse($sqlQuery);
	}


	/**
	 * Read row
	 *
	 * @return ChallengeResponsesMySql 
	 */
	protected function readRowResponse($row){
		$challengeResponse = new ChallengeResponse($row['challenge_id'], $row['blob_id'], $row['stmt'], $row['status'], $row['creation_time'], 
													$row['first_name'], $row['last_name'], $row['username'], 
													$row['id']
												);

		return $challengeResponse;
	}
	
	protected function getListReponse($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRowResponse($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return ChallengeResponsesMySql 
	 */
	protected function getRowResponse($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRowResponse($tab[0]);		
	}
	
}
?>