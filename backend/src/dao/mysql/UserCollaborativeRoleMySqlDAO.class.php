<?php
/**
 * Class that operate on table 'user_collaborative_role'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-08-02 16:09
 */
class UserCollaborativeRoleMySqlDAO implements UserCollaborativeRoleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return UserCollabrativeRoleMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM user_collaborative_role WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM user_collaborative_role';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM user_collaborative_role ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param userCollabrativeRole primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM user_collaborative_role WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserCollabrativeRoleMySql userCollabrativeRole
 	 */
	public function insert($userCollabrativeRole){
		$sql = 'INSERT INTO user_collaborative_role (user_id, type, added_on, last_update_on) VALUES (?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userCollabrativeRole->getUserId());
		$sqlQuery->set($userCollabrativeRole->getType());
		$sqlQuery->set($userCollabrativeRole->getAddedOn());
		$sqlQuery->set($userCollabrativeRole->getLastUpdateOn());

		$id = $this->executeInsert($sqlQuery);	
		$userCollabrativeRole-> setId($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserCollabrativeRoleMySql userCollabrativeRole
 	 */
	public function update($userCollabrativeRole){
		$sql = 'UPDATE user_collaborative_role SET user_id = ?, type = ?, added_on = ?, last_update_on = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);

		$sqlQuery->setNumber($userCollabrativeRole->getUserId());
		$sqlQuery->set($userCollabrativeRole->getType());
		$sqlQuery->set($userCollabrativeRole->getAddedOn());
		$sqlQuery->set($userCollabrativeRole->getLastUpdateOn());

		$sqlQuery->setNumber($userCollabrativeRole->getId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM user_collaborative_role';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM user_collaborative_role WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM user_collaborative_role WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddedOn($value){
		$sql = 'SELECT * FROM user_collaborative_role WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastUpdateOn($value){
		$sql = 'SELECT * FROM user_collaborative_role WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM user_collaborative_role WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM user_collaborative_role WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddedOn($value){
		$sql = 'DELETE FROM user_collaborative_role WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastUpdateOn($value){
		$sql = 'DELETE FROM user_collaborative_role WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return UserCollabrativeRoleMySql 
	 */
	protected function readRow($row){
		$userCollabrativeRole = new UserCollaborativeRole($row['user_id'], $row['type'],$row['added_on'], $row['last_update_on'], $row['id']);

		return $userCollabrativeRole;
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
	 * @return UserCollabrativeRoleMySql 
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