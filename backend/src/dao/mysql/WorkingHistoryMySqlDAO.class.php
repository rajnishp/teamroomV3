<?php
/**
 * Class that operate on table 'working_history'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
class WorkingHistoryMySqlDAO implements WorkingHistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WorkingHistoryMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM working_history WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM working_history';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM working_history ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param workingHistory primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM working_history WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WorkingHistoryMySql workingHistory
 	 */
	public function insert($workingHistory){
		$sql = 'INSERT INTO working_history (user_id, company_name, designation, `from`, `to`, added_on, last_update_on) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($workingHistory->getUserId());
		$sqlQuery->set($workingHistory->getCompanyName());
		$sqlQuery->set($workingHistory->getDesignation());
		$sqlQuery->set($workingHistory->getFrom());
		$sqlQuery->set($workingHistory->getTo());
		$sqlQuery->set($workingHistory->getAddedOn());
		$sqlQuery->set($workingHistory->getLastUpdateOn());

		$id = $this->executeInsert($sqlQuery);	
		$workingHistory-> setId ($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WorkingHistoryMySql workingHistory
 	 */
	public function update($workingHistory){
		$sql = 'UPDATE working_history SET user_id = ?, company_name = ?, designation = ?, `from` = ?, `to` = ?, added_on = ?, last_update_on = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($workingHistory->getUserId());
		$sqlQuery->set($workingHistory->getCompanyName());
		$sqlQuery->set($workingHistory->getDesignation());
		$sqlQuery->set($workingHistory->getFrom());
		$sqlQuery->set($workingHistory->getTo());
		$sqlQuery->set($workingHistory->getAddedOn());
		$sqlQuery->set($workingHistory->getLastUpdateOn());

		$sqlQuery->setNumber($workingHistory->getId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM working_history';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM working_history WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCompanyName($value){
		$sql = 'SELECT * FROM working_history WHERE company_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDesignation($value){
		$sql = 'SELECT * FROM working_history WHERE designation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFrom($value){
		$sql = 'SELECT * FROM working_history WHERE `from` = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTo($value){
		$sql = 'SELECT * FROM working_history WHERE `to` = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddedOn($value){
		$sql = 'SELECT * FROM working_history WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastUpdateOn($value){
		$sql = 'SELECT * FROM working_history WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM working_history WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCompanyName($value){
		$sql = 'DELETE FROM working_history WHERE company_name = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDesignation($value){
		$sql = 'DELETE FROM working_history WHERE designation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFrom($value){
		$sql = 'DELETE FROM working_history WHERE `from` = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTo($value){
		$sql = 'DELETE FROM working_history WHERE `to` = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddedOn($value){
		$sql = 'DELETE FROM working_history WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastUpdateOn($value){
		$sql = 'DELETE FROM working_history WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WorkingHistoryMySql 
	 */
	protected function readRow($row){
		$workingHistory = new WorkingHistory( $row['user_id'],$row['company_name'], $row['designation'], $row['from'], $row['to'], $row['added_on'], $row['last_update_on'], $row['id'] );
		
		return $workingHistory;
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
	 * @return WorkingHistoryMySql 
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