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

	public function getNotificationNotLogin24Hours(){
		$sql = 'SELECT notice.*, user.first_name, user.last_name, user.email, TIMESTAMPDIFF( HOUR , user.last_login_time, now( ) ) AS login_before FROM notifications AS notice JOIN user_info AS user
					WHERE notice.user_id = user.id
						AND TIMESTAMPDIFF( HOUR , user.last_login_time, now( ) ) >24
						ORDER BY login_before';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userId);
		return $this->getList($sqlQuery);
	}
	
}
?>