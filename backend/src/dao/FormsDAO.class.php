<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-08-10 11:13
 */
interface FormsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Forms 
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
 	 * @param form primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Forms form
 	 */
	public function insert($form);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Forms form
 	 */
	public function update($form);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByForm($value);

	public function queryByAddedOn($value);


	public function deleteByForm($value);

	public function deleteByAddedOn($value);


}
?>