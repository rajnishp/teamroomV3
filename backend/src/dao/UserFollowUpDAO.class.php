<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-08-15 14:32
 */
interface UserFollowUpDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserFollowUp 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param userFollowUp primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserFollowUp userFollowUp
 	 */
	public function insert($userFollowUp);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserFollowUp userFollowUp
 	 */
	public function update($userFollowUp);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByEmail($value);

	public function queryByState($value);

	public function queryByStatus($value);

	public function queryByAddedOn($value);

	public function queryByLastUpdateOn($value);


	public function deleteByUserId($value);

	public function deleteByEmail($value);

	public function deleteByState($value);

	public function deleteByStatus($value);

	public function deleteByAddedOn($value);

	public function deleteByLastUpdateOn($value);


}
?>