<?php
/**
 * Class that operate on table 'job_preference'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
class JobPreferenceMySqlDAO implements JobPreferenceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return JobPreferenceMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM job_preference WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM job_preference';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM job_preference ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param jobPreference primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM job_preference WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param JobPreferenceMySql jobPreference
 	 */
	public function insert($jobPreference){
		$sql = 'INSERT INTO job_preference (user_id, location_id, current_ctc, expected_ctc, notice_period, added_on, last_update_on) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($jobPreference->getUserId());
		$sqlQuery->setNumber($jobPreference->getLocationId());
		$sqlQuery->set($jobPreference->getCurrentCtc());
		$sqlQuery->set($jobPreference->getExpectedCtc());
		$sqlQuery->set($jobPreference->getNoticePeriod());
		$sqlQuery->set($jobPreference->getAddedOn());
		$sqlQuery->set($jobPreference->getLastUpdateOn());

		$id = $this->executeInsert($sqlQuery);	
		$jobPreference-> setId($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param JobPreferenceMySql jobPreference
 	 */
	public function update($jobPreference){
		$sql = 'UPDATE job_preference SET user_id = ?, location_id = ?, current_ctc = ?, expected_ctc = ?, notice_period = ?, added_on = ?, last_update_on = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($jobPreference->getUserId());
		$sqlQuery->setNumber($jobPreference->getLocationId());
		$sqlQuery->set($jobPreference->getCurrentCtc());
		$sqlQuery->set($jobPreference->getExpectedCtc());
		$sqlQuery->set($jobPreference->getNoticePeriod());
		$sqlQuery->set($jobPreference->getAddedOn());
		$sqlQuery->set($jobPreference->getLastUpdateOn());


		$sqlQuery->setNumber($jobPreference->getId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM job_preference';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM job_preference WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLocationId($value){
		$sql = 'SELECT * FROM job_preference WHERE location_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCurrentCtc($value){
		$sql = 'SELECT * FROM job_preference WHERE current_ctc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExpectedCtc($value){
		$sql = 'SELECT * FROM job_preference WHERE expected_ctc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNoticePeriod($value){
		$sql = 'SELECT * FROM job_preference WHERE notice_period = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddedOn($value){
		$sql = 'SELECT * FROM job_preference WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastUpdateOn($value){
		$sql = 'SELECT * FROM job_preference WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM job_preference WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLocationId($value){
		$sql = 'DELETE FROM job_preference WHERE location_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCurrentCtc($value){
		$sql = 'DELETE FROM job_preference WHERE current_ctc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExpectedCtc($value){
		$sql = 'DELETE FROM job_preference WHERE expected_ctc = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNoticePeriod($value){
		$sql = 'DELETE FROM job_preference WHERE notice_period = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddedOn($value){
		$sql = 'DELETE FROM job_preference WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastUpdateOn($value){
		$sql = 'DELETE FROM job_preference WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return JobPreferenceMySql 
	 */
	protected function readRow($row){
		$jobPreference = new JobPreference($row['user_id'], $row['location_id'], $row['current_ctc'], $row['expected_ctc'], $row['notice_period'], $row['added_on'], $row['last_update_on'], $row['id']);
		
		return $jobPreference;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return JobPreferenceMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>