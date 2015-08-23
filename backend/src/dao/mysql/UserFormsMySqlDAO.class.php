<?php
/**
 * Class that operate on table 'teamroom_push_forms.user_forms'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-08-10 11:13
 */
class UserFormsMySqlDAO implements UserFormsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return UserFormsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM teamroom_push_forms.user_forms WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM teamroom_push_forms.user_forms';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM teamroom_push_forms.user_forms ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param userForm primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM teamroom_push_forms.user_forms WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserFormsMySql userForm
 	 */
	public function insert($userForm){
		$sql = 'INSERT INTO teamroom_push_forms.user_forms (user_id, form_id, status, priority, added_on, last_update_on) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userForm->getUserId());
		$sqlQuery->setNumber($userForm->getFormId());
		$sqlQuery->setNumber($userForm->getStatus());
		$sqlQuery->setNumber($userForm->getPriority());
		$sqlQuery->set($userForm->getAddedOn());
		$sqlQuery->set($userForm->getLastUpdateOn());

		$id = $this->executeInsert($sqlQuery);	
		$userForm-> setId($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserFormsMySql userForm
 	 */
	public function update($userForm){
		$sql = 'UPDATE teamroom_push_forms.user_forms SET user_id = ?, form_id = ?, status = ?, priority = ?, added_on = ?, last_update_on = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userForm->getUserId());
		$sqlQuery->setNumber($userForm->getFormId());
		$sqlQuery->setNumber($userForm->getStatus());
		$sqlQuery->setNumber($userForm->getPriority());
		$sqlQuery->set($userForm->getAddedOn());
		$sqlQuery->set($userForm->getLastUpdateOn());

		$sqlQuery->setNumber($userForm->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM teamroom_push_forms.user_forms';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM teamroom_push_forms.user_forms WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFormId($value){
		$sql = 'SELECT * FROM teamroom_push_forms.user_forms WHERE form_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM teamroom_push_forms.user_forms WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPriority($value){
		$sql = 'SELECT * FROM teamroom_push_forms.user_forms WHERE priority = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddedOn($value){
		$sql = 'SELECT * FROM teamroom_push_forms.user_forms WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastUpdateOn($value){
		$sql = 'SELECT * FROM teamroom_push_forms.user_forms WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM teamroom_push_forms.user_forms WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFormId($value){
		$sql = 'DELETE FROM teamroom_push_forms.user_forms WHERE form_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM teamroom_push_forms.user_forms WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPriority($value){
		$sql = 'DELETE FROM teamroom_push_forms.user_forms WHERE priority = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddedOn($value){
		$sql = 'DELETE FROM teamroom_push_forms.user_forms WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastUpdateOn($value){
		$sql = 'DELETE FROM teamroom_push_forms.user_forms WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return UserFormsMySql 
	 */
	protected function readRow($row){
		$userForm = new UserForm($row['user_id'], $row['form_id'], $row['status'], $row['priority'], $row['added_on'], $row['last_update_on'], $row['id']);

		return $userForm;
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
	 * @return UserFormsMySql 
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