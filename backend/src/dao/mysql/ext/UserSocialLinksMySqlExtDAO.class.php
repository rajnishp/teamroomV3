<?php
/**
 * Class that operate on table 'user_social_links'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-07-28 14:31
 */
class UserSocialLinksMySqlExtDAO extends UserSocialLinksMySqlDAO{

	public function getUserSocialLinks($userId){
		$sql = "SELECT fb.id, fb.user_id, fb.link_url AS fb_link, twitter.link_url AS twitter_link, linkedin.link_url AS linkedin_link
					FROM `user_social_links` AS fb
						JOIN `user_social_links` AS twitter
							JOIN `user_social_links` AS linkedin
						WHERE fb.user_id = ? AND fb.type = 'Facebook'
							AND twitter.user_id = ? AND twitter.type = 'Twitter'
							AND linkedin.user_id = ? AND linkedin.type = 'Linkedin' ";
		
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		$sqlQuery->setNumber($userId);
		return $this->getRow($sqlQuery);
	}

	/**
 	 * Update record in table
 	 *
 	 * @param UserSocialLinksMySql userSocialLink
 	 */
	public function updateSocialLink($userId, $linkUrl, $type){
		$sql = 'UPDATE user_social_links SET link_url = ? WHERE user_id = ? AND type = ? ';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($linkUrl);
		$sqlQuery->setNumber($userId);
		$sqlQuery->set($type);

		return $this->executeUpdate($sqlQuery);
	}
	
}
?>