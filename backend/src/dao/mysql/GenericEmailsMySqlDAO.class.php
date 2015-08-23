<?php
/**
 * Class that operate on table 'generic_emails'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-08-15 14:32
 */
class GenericEmailsMySqlDAO implements GenericEmailsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return GenericEmailsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM mailing_engine.generic_emails WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM mailing_engine.generic_emails';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM mailing_engine.generic_emails ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param genericEmail primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM mailing_engine.generic_emails WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param GenericEmailsMySql genericEmail
 	 */
	public function insert($genericEmail){
		$sql = 'INSERT INTO mailing_engine.generic_emails (subject, body, type, status, added_on, last_update_on) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($genericEmail->getSubject());
		$sqlQuery->set($genericEmail->getBody());
		$sqlQuery->set($genericEmail->getType());
		$sqlQuery->setNumber($genericEmail->getStatus());
		$sqlQuery->set($genericEmail->getAddedOn());
		$sqlQuery->set($genericEmail->getLastUpdateOn());

		$id = $this->executeInsert($sqlQuery);	
		$genericEmail-> setId($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param GenericEmailsMySql genericEmail
 	 */
	public function update($genericEmail){
		$sql = 'UPDATE mailing_engine.generic_emails SET subject = ?, body = ?, type = ?, status = ?, added_on = ?, last_update_on = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($genericEmail->getSubject());
		$sqlQuery->set($genericEmail->getBody());
		$sqlQuery->set($genericEmail->getType());
		$sqlQuery->setNumber($genericEmail->getStatus());
		$sqlQuery->set($genericEmail->getAddedOn());
		$sqlQuery->set($genericEmail->getLastUpdateOn());

		$sqlQuery->setNumber($genericEmail->getId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM mailing_engine.generic_emails';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySubject($value){
		$sql = 'SELECT * FROM mailing_engine.generic_emails WHERE subject = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByBody($value){
		$sql = 'SELECT * FROM mailing_engine.generic_emails WHERE body = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM mailing_engine.generic_emails WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM mailing_engine.generic_emails WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddedOn($value){
		$sql = 'SELECT * FROM mailing_engine.generic_emails WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastUpdateOn($value){
		$sql = 'SELECT * FROM mailing_engine.generic_emails WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteBySubject($value){
		$sql = 'DELETE FROM mailing_engine.generic_emails WHERE subject = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByBody($value){
		$sql = 'DELETE FROM mailing_engine.generic_emails WHERE body = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM mailing_engine.generic_emails WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM mailing_engine.generic_emails WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddedOn($value){
		$sql = 'DELETE FROM mailing_engine.generic_emails WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastUpdateOn($value){
		$sql = 'DELETE FROM mailing_engine.generic_emails WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return GenericEmailsMySql 
	 */
	protected function readRow($row){
		$genericEmail = new GenericEmail($row['subject'], $row['body'], $row['type'], $row['status'], $row['added_on'], $row['last_update_on'], $row['id']);
		
		return $genericEmail;
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
	 * @return GenericEmailsMySql 
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