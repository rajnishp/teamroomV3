<?php
/**
 * Class that operate on table 'mailing_engine.invitations'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-08-15 14:32
 */
class InvitationsMySqlDAO implements InvitationsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return InvitationsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM mailing_engine.invitations WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM mailing_engine.invitations';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM mailing_engine.invitations ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param invitation primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM mailing_engine.invitations WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param mailing_engine.invitationsMySql invitation
 	 */
	public function insert($invitation){
		$sql = 'INSERT INTO mailing_engine.invitations (user_id, email, count, status, added_on, last_update_on) VALUES (?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($invitation->getUserId());
		$sqlQuery->set($invitation->getEmail());
		$sqlQuery->setNumber($invitation->getCount());
		$sqlQuery->setNumber($invitation->getStatus());
		$sqlQuery->set($invitation->getSddedOn());
		$sqlQuery->set($invitation->getLastUpdateOn());

		$id = $this->executeInsert($sqlQuery);	
		$invitation->setId($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param mailing_engine.invitationsMySql invitation
 	 */
	public function update($invitation){
		$sql = 'UPDATE mailing_engine.invitations SET user_id = ?, email = ?, count = ?, status = ?, added_on = ?, last_update_on = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($invitation->getUserId());
		$sqlQuery->set($invitation->getEmail());
		$sqlQuery->setNumber($invitation->getCount());
		$sqlQuery->setNumber($invitation->getStatus());
		$sqlQuery->set($invitation->getSddedOn());
		$sqlQuery->set($invitation->getLastUpdateOn());

		$sqlQuery->setNumber($invitation->getId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM mailing_engine.invitations';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM mailing_engine.invitations WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM mailing_engine.invitations WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCount($value){
		$sql = 'SELECT * FROM mailing_engine.invitations WHERE count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByStatus($value){
		$sql = 'SELECT * FROM mailing_engine.invitations WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAddedOn($value){
		$sql = 'SELECT * FROM mailing_engine.invitations WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLastUpdateOn($value){
		$sql = 'SELECT * FROM mailing_engine.invitations WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM mailing_engine.invitations WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM mailing_engine.invitations WHERE email = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCount($value){
		$sql = 'DELETE FROM mailing_engine.invitations WHERE count = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByStatus($value){
		$sql = 'DELETE FROM mailing_engine.invitations WHERE status = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAddedOn($value){
		$sql = 'DELETE FROM mailing_engine.invitations WHERE added_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLastUpdateOn($value){
		$sql = 'DELETE FROM mailing_engine.invitations WHERE last_update_on = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return InvitationsMySql 
	 */
	protected function readRow($row){
		$invitation = new Invitation($row['user_id'], $row['email'], $row['count'], $row['status'], $row['added_on'], $row['last_update_on'], $row['id']);

		return $invitation;
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
	 * @return InvitationsMySql 
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