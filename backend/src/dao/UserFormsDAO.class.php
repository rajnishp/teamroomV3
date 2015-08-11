<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-08-10 11:13
 */
interface UserFormsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserForms 
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
 	 * @param userForm primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserForms userForm
 	 */
	public function insert($userForm);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserForms userForm
 	 */
	public function update($userForm);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByFormId($value);

	public function queryByStatus($value);

	public function queryByPriority($value);

	public function queryByAddedOn($value);

	public function queryByLastUpdateOn($value);


	public function deleteByUserId($value);

	public function deleteByFormId($value);

	public function deleteByStatus($value);

	public function deleteByPriority($value);

	public function deleteByAddedOn($value);

	public function deleteByLastUpdateOn($value);


}
?>