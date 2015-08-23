<?php
/**
 * Class that operate on table 'user_forms'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-08-10 11:13
 */
class UserFormsMySqlExtDAO extends UserFormsMySqlDAO{

	public function deleteByFormIdUserId($userId, $formId){
		$sql = 'DELETE FROM teamroom_push_forms.user_forms WHERE user_id = ? AND form_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($formId);
		return $this->executeUpdate($sqlQuery);
	}
	
}
?>