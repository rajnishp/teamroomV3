<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-08-15 14:32
 */
interface GenericEmailsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return GenericEmails 
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
 	 * @param genericEmail primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param GenericEmails genericEmail
 	 */
	public function insert($genericEmail);
	
	/**
 	 * Update record in table
 	 *
 	 * @param GenericEmails genericEmail
 	 */
	public function update($genericEmail);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySubject($value);

	public function queryByBody($value);

	public function queryByType($value);

	public function queryByStatus($value);

	public function queryByAddedOn($value);

	public function queryByLastUpdateOn($value);


	public function deleteBySubject($value);

	public function deleteByBody($value);

	public function deleteByType($value);

	public function deleteByStatus($value);

	public function deleteByAddedOn($value);

	public function deleteByLastUpdateOn($value);


}
?>