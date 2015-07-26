<?php
/**
 * Class that operate on table 'working_locations'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
class WorkingLocationsMySqlExtDAO extends WorkingLocationsMySqlDAO{

	public function availableJobLocations($userId){
		$sql = 'SELECT * FROM working_locations WHERE id NOT IN ( SELECT location_id AS id FROM user_locations WHERE user_id = ? )';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		
		return $this->getList($sqlQuery);
	}

	public function getUserJobPreferredJobLocations($userId){
		$sql = "SELECT * FROM working_locations as locations JOIN user_locations as user_location 
					WHERE locations.id = user_location.location_id 
						AND user_location.user_id = ?";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		
		return $this->getList($sqlQuery);
	}

}
?>