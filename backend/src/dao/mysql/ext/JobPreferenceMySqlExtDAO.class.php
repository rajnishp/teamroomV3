<?php
/**
 * Class that operate on table 'job_preference'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-07-15 12:50
 */
class JobPreferenceMySqlExtDAO extends JobPreferenceMySqlDAO{

	public function getUserJobPreference ($userId) {
		$sql = "SELECT * FROM job_preference WHERE user_id = ?  ORDER BY last_update_on DESC;";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);

		$jobPreference = $this->getList($sqlQuery);

		return $jobPreference;
	}
}
?>