<?php
/**
 * Class that operate on table 'user_social_links'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-07-28 14:31
 */
class UserSocialLinksMySqlDAO implements UserSocialLinksDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return UserSocialLinksMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM user_social_links WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM user_social_links';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM user_social_links ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param userSocialLink primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM user_social_links WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserSocialLinksMySql userSocialLink
 	 */
	public function insert($userSocialLink){
		$sql = 'INSERT INTO user_social_links (user_id, link_url, type) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE link_url= ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($userSocialLink->getUserId());
		$sqlQuery->set($userSocialLink->getLinkUrl());
		$sqlQuery->set($userSocialLink->getType());
		$sqlQuery->set($userSocialLink->getLinkUrl());

		$id = $this->executeInsert($sqlQuery);	
		$userSocialLink-> setId($id);
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserSocialLinksMySql userSocialLink
 	 */
	public function update($userSocialLink){
		$sql = 'UPDATE user_social_links SET user_id = ?, link_url = ?, type = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userSocialLink->getUserId());
		$sqlQuery->set($userSocialLink->getLinkUrl());
		$sqlQuery->set($userSocialLink->getType());

		$sqlQuery->setNumber($userSocialLink->getId());
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM user_social_links';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByUserId($value){
		$sql = 'SELECT * FROM user_social_links WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLinkUrl($value){
		$sql = 'SELECT * FROM user_social_links WHERE link_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByType($value){
		$sql = 'SELECT * FROM user_social_links WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByUserId($value){
		$sql = 'DELETE FROM user_social_links WHERE user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLinkUrl($value){
		$sql = 'DELETE FROM user_social_links WHERE link_url = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByType($value){
		$sql = 'DELETE FROM user_social_links WHERE type = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return UserSocialLinksMySql 
	 */
	protected function readRow($row){
		$userSocialLink = new UserSocialLink($row['user_id'], null, $row['fb_link'], $row['twitter_link'], $row['linkedin_link'], $row['type'], $row['id']);
		
		return $userSocialLink;
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
	 * @return UserSocialLinksMySql 
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