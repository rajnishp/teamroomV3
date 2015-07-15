<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
interface WorkingHistoryDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WorkingHistory 
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
 	 * @param workingHistory primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WorkingHistory workingHistory
 	 */
	public function insert($workingHistory);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WorkingHistory workingHistory
 	 */
	public function update($workingHistory);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByCompanyName($value);

	public function queryByDesignation($value);

	public function queryByFrom($value);

	public function queryByTo($value);

	public function queryByAddedOn($value);

	public function queryByLastUpdateOn($value);


	public function deleteByUserId($value);

	public function deleteByCompanyName($value);

	public function deleteByDesignation($value);

	public function deleteByFrom($value);

	public function deleteByTo($value);

	public function deleteByAddedOn($value);

	public function deleteByLastUpdateOn($value);


}
?>