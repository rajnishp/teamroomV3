<?php
/**
 * Class that operate on table 'forms'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-08-10 11:13
 */
class FormsMySqlDAO implements FormsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return FormsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM teamroom_push_forms.forms WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM teamroom_push_forms.forms';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM teamroom_push_forms.forms ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param form primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM teamroom_push_forms.forms WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param FormsMySql form
 	 */
	public function insert($form){
		$sql = 'INSERT INTO teamroom_push_forms.forms (form, type, added_on) VALUES (?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($form->getForm());
		$sqlQuery->set($form->getType());
		$sqlQuery->set($form->getAddedOn());

		$id = $this->executeInsert($sqlQuery);	
		$form-> setId($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param FormsMySql form
 	 */
	public function update($form){
		$sql = 'UPDATE teamroom_push_forms.forms SET form = ?, type = ?, added_on = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($form->getForm());
		$sqlQuery->set($form->getType());
		$sqlQuery->set($form->getAddedOn());

		$sqlQuery->setNumber($form->getId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM teamroom_push_forms.forms';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByForm($value){
		$sql = 'SELECT * FROM teamroom_push_forms.forms WHERE form = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM teamroom_push_forms.forms WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddedOn($value){
		$sql = 'SELECT * FROM teamroom_push_forms.forms WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByForm($value){
		$sql = 'DELETE FROM teamroom_push_forms.forms WHERE form = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM teamroom_push_forms.forms WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddedOn($value){
		$sql = 'DELETE FROM teamroom_push_forms.forms WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return FormsMySql 
	 */
	protected function readRow($row){
		$form = new Form($row['form'], $row['type'], $row['added_on'], $row['id']);
		
		return $form;
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
	 * @return FormsMySql 
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