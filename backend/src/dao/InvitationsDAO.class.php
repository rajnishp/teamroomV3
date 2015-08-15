<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-08-15 14:32
 */
interface InvitationsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Invitations 
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
 	 * @param invitation primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Invitations invitation
 	 */
	public function insert($invitation);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Invitations invitation
 	 */
	public function update($invitation);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByEmail($value);

	public function queryByCount($value);

	public function queryByStatus($value);

	public function queryByAddedOn($value);

	public function queryByLastUpdateOn($value);


	public function deleteByUserId($value);

	public function deleteByEmail($value);

	public function deleteByCount($value);

	public function deleteByStatus($value);

	public function deleteByAddedOn($value);

	public function deleteByLastUpdateOn($value);


}
?>