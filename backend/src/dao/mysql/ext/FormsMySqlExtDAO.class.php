<?php
/**
 * Class that operate on table 'forms'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-08-10 11:13
 */
class FormsMySqlExtDAO extends FormsMySqlDAO{

	public function getPushForm($userId){
		$sql = 'SELECT form.* FROM  teamroom_push_forms.forms as form JOIN teamroom_push_forms.user_forms as user_push_form 
					WHERE user_push_form.user_id = ? AND form.id = user_push_form.form_id AND user_push_form.status = 0';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		return $this->getRow($sqlQuery);
	}
}
?>