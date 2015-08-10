<?php
/**
 * Class that operate on table 'working_locations'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
class WorkingLocationsMySqlDAO implements WorkingLocationsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return WorkingLocationsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM working_locations WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		//$sqlQuery->setNumber($locationName);

		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM working_locations';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM working_locations ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param workingLocation primary key
 	 */
	public function delete($id, $locationName){
		$sql = 'DELETE FROM working_locations WHERE id = ?  AND location_name = ? ';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		$sqlQuery->setNumber($locationName);

		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WorkingLocationsMySql workingLocation
 	 */
	public function insert($workingLocation){
		$sql = 'INSERT INTO working_locations (location_name, added_on, id) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		
		$sqlQuery->setNumber($workingLocation->getId());
		$sqlQuery->setNumber($workingLocation->getLocationName());
		$sqlQuery->set($workingLocation->getAddedOn());

		$this->executeInsert($sqlQuery);
		$workingLocation -> setId ($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param WorkingLocationsMySql workingLocation
 	 */
	public function update($workingLocation){
		$sql = 'UPDATE working_locations SET location_name = ?, added_on = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($workingLocation->getLocationName());
		$sqlQuery->set($workingLocation->getAddedOn());

		$sqlQuery->setNumber($workingLocation->getId());

		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM working_locations';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByAddedOn($value){
		$sql = 'SELECT * FROM working_locations WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByAddedOn($value){
		$sql = 'DELETE FROM working_locations WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return WorkingLocationsMySql 
	 */
	protected function readRow($row){
		$workingLocation = new WorkingLocation($row['location_name'], $row['added_on'], $row['id']);

		return $workingLocation;
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
	 * @return WorkingLocationsMySql 
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