<?php
/**
 * Class that operate on table 'technical_strength'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
class TechnicalStrengthMySqlDAO implements TechnicalStrengthDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return TechnicalStrengthMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM technical_strength WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM technical_strength';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM technical_strength ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param technicalStrength primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM technical_strength WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechnicalStrengthMySql technicalStrength
 	 */
	public function insert($technicalStrength){
		$sql = 'INSERT INTO technical_strength (user_id, strength, added_on, last_update_on) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($technicalStrength->getUserId());
		$sqlQuery->set($technicalStrength->getStrength());
		$sqlQuery->set($technicalStrength->getAddedOn());
		$sqlQuery->set($technicalStrength->getLastUpdateOn());

		$id = $this->executeInsert($sqlQuery);	
		$technicalStrength-> setId($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechnicalStrengthMySql technicalStrength
 	 */
	public function update($technicalStrength){
		$sql = 'UPDATE technical_strength SET user_id = ?, strength = ?, added_on = ?, last_update_on = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($technicalStrength->getUserId());
		$sqlQuery->set($technicalStrength->getStrength());
		$sqlQuery->set($technicalStrength->getAddedOn());
		$sqlQuery->set($technicalStrength->getLastUpdateOn());


		$sqlQuery->setNumber($technicalStrength->getId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM technical_strength';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM technical_strength WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStrength($value){
		$sql = 'SELECT * FROM technical_strength WHERE strength = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddedOn($value){
		$sql = 'SELECT * FROM technical_strength WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastUpdateOn($value){
		$sql = 'SELECT * FROM technical_strength WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM technical_strength WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStrength($value){
		$sql = 'DELETE FROM technical_strength WHERE strength = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddedOn($value){
		$sql = 'DELETE FROM technical_strength WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastUpdateOn($value){
		$sql = 'DELETE FROM technical_strength WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return TechnicalStrengthMySql 
	 */
	protected function readRow($row){
		$technicalStrength = new TechnicalStrength($row['user_id'], $row['strength'], $row['added_on'], $row['last_update_on'], $row['id']);
		
		return $technicalStrength;
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
	 * @return TechnicalStrengthMySql 
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