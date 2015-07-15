<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
interface TechnicalStrengthDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return TechnicalStrength 
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
 	 * @param technicalStrength primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param TechnicalStrength technicalStrength
 	 */
	public function insert($technicalStrength);
	
	/**
 	 * Update record in table
 	 *
 	 * @param TechnicalStrength technicalStrength
 	 */
	public function update($technicalStrength);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByStrength($value);

	public function queryByAddedOn($value);

	public function queryByLastUpdateOn($value);


	public function deleteByUserId($value);

	public function deleteByStrength($value);

	public function deleteByAddedOn($value);

	public function deleteByLastUpdateOn($value);


}
?>