<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
interface EducationDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Education 
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
 	 * @param education primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Education education
 	 */
	public function insert($education);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Education education
 	 */
	public function update($education);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByInstitute($value);

	public function queryByDegree($value);

	public function queryByBranch($value);

	public function queryByFrom($value);

	public function queryByTo($value);

	public function queryByAddedOn($value);

	public function queryByLastUpdateOn($value);


	public function deleteByUserId($value);

	public function deleteByInstitute($value);

	public function deleteByDegree($value);

	public function deleteByBranch($value);

	public function deleteByFrom($value);

	public function deleteByTo($value);

	public function deleteByAddedOn($value);

	public function deleteByLastUpdateOn($value);


}
?>