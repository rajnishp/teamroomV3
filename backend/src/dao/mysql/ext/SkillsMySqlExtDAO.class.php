<?php
/**
 * Class that operate on table 'skills'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-03-03 14:48
 */
class SkillsMySqlExtDAO extends SkillsMySqlDAO{

	/**
 	 * Insert record to table
 	 *
 	 * @param UserSkillsMySql userSkill
 	 */
	public function insertUserSkill($userSkill){
		$sql = 'INSERT INTO user_skills (user_id, skill_id) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->setNumber($userSkill->getUserId());
		$sqlQuery->setNumber($userSkill->getSkillId());

		$id = $this->executeInsert($sqlQuery);	
		$userSkill-> setId($id);
		return $id;
	}

	public function getUserSkills($id){
		$sql = 'SELECT b.id, a.name FROM skills as a JOIN user_skills as b WHERE b.user_id = ? AND a.id = b.skill_id';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getList($sqlQuery);
	}

		public function availableUserSkills($userId){
		$sql = "SELECT * FROM `skills` WHERE id NOT IN ( SELECT skill_id AS id FROM user_skills WHERE user_id = ? )";
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		return $this->getList($sqlQuery);
	}

	/**
 	 * Delete record from table
 	 * @param skill primary key
 	 */
	public function deleteUserSkill($id, $userId){
		$sql = 'DELETE FROM user_skills WHERE id = ? AND user_id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		$sqlQuery->setNumber($userId);
		return $this->executeUpdate($sqlQuery);
	}
}
?>