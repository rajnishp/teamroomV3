<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-08-02 16:09
 */
interface UserCollaborativeRoleDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserCollaborativeRole 
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
 	 * @param userCollabrativeRole primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserCollabrativeRole userCollabrativeRole
 	 */
	public function insert($userCollabrativeRole);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserCollabrativeRole userCollabrativeRole
 	 */
	public function update($userCollabrativeRole);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByType($value);

	public function queryByAddedOn($value);

	public function queryByLastUpdateOn($value);


	public function deleteByUserId($value);

	public function deleteByType($value);

	public function deleteByAddedOn($value);

	public function deleteByLastUpdateOn($value);


}
?>