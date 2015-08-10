<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-07-28 14:31
 */
interface UserSocialLinksDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return UserSocialLinks 
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
 	 * @param userSocialLink primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param UserSocialLinks userSocialLink
 	 */
	public function insert($userSocialLink);
	
	/**
 	 * Update record in table
 	 *
 	 * @param UserSocialLinks userSocialLink
 	 */
	public function update($userSocialLink);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByUserId($value);

	public function queryByLinkUrl($value);

	public function queryByType($value);


	public function deleteByUserId($value);

	public function deleteByLinkUrl($value);

	public function deleteByType($value);


}
?>