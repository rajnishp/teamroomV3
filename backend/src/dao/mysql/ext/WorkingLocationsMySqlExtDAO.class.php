<?php
/**
 * Class that operate on table 'working_locations'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
class WorkingLocationsMySqlExtDAO extends WorkingLocationsMySqlDAO{

	public function availableJobLocations($userId){
		$sql = 'SELECT * FROM working_locations WHERE id NOT IN ( SELECT location_id AS id FROM job_preference WHERE user_id = ? )';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		
		return $this->getList($sqlQuery);
	}

}
?>