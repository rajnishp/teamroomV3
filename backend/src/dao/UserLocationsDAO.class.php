<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-07-26 12:11
 */
interface UserLocationsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserLocations 
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
 	 * @param userLocation primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserLocations userLocation
 	 */
	public function insert($userLocation);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserLocations userLocation
 	 */
	public function update($userLocation);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByLocationId($value);

	public function queryByPriority($value);


	public function deleteByUserId($value);

	public function deleteByLocationId($value);

	public function deleteByPriority($value);


}
?>