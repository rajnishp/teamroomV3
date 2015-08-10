<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-07-26 12:11
 */
interface JobPreferenceDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return JobPreference 
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
 	 * @param jobPreference primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param JobPreference jobPreference
 	 */
	public function insert($jobPreference);
	
	/**
 	 * Update record in table
 	 *
 	 * @param JobPreference jobPreference
 	 */
	public function update($jobPreference);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByCurrentCtc($value);

	public function queryByExpectedCtc($value);

	public function queryByNoticePeriod($value);

	public function queryByAddedOn($value);

	public function queryByLastUpdateOn($value);


	public function deleteByUserId($value);

	public function deleteByCurrentCtc($value);

	public function deleteByExpectedCtc($value);

	public function deleteByNoticePeriod($value);

	public function deleteByAddedOn($value);

	public function deleteByLastUpdateOn($value);


}
?>