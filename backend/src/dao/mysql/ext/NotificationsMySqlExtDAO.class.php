<?php
/**
 * Class that operate on table 'notifications'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-03-03 14:48
 */
class NotificationsMySqlExtDAO extends NotificationsMySqlDAO{

	public function getByUserId($userId){
		$sql = 'SELECT * FROM notifications WHERE user_id = ? ORDER BY time DESC LIMIT 0 , 10';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userId);
		return $this->getList($sqlQuery);
	}
	
}
?>