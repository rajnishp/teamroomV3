<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
interface WorkingLocationsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return WorkingLocations 
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
 	 * @param workingLocation primary key
 	 */
	public function delete($id, $locationName);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param WorkingLocations workingLocation
 	 */
	public function insert($workingLocation);
	
	/**
 	 * Update record in table
 	 *
 	 * @param WorkingLocations workingLocation
 	 */
	public function update($workingLocation);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByAddedOn($value);


	public function deleteByAddedOn($value);


}
?>