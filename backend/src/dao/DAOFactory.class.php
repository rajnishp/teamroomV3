<?php

/**
 * DAOFactory
 * @author: rajnish
 * @date: ${date}
 */
require_once('utils/sql/Connection.class.php');
require_once('utils/sql/ConnectionFactory.class.php');
require_once('utils/sql/ConnectionProperty.class.php');
require_once('utils/sql/QueryExecutor.class.php');
require_once('utils/sql/Transaction.class.php');
require_once('utils/sql/SqlQuery.class.php');
require_once('utils/ArrayList.class.php');

class DAOFactory{
	
	/**
	 * @return BlobsDAO
	 */
	public static function getBlobsDAO(){
		return new BlobsMySqlExtDAO();
	}

	/**
	 * @return ChallengeOwnershipDAO
	 */
	public static function getChallengeOwnershipDAO(){
		
		require_once('ChallengeOwnershipDAO.class.php');
		require_once('models/ChallengeOwnership.class.php');
		require_once('mysql/ChallengeOwnershipMySqlDAO.class.php');
		require_once('mysql/ext/ChallengeOwnershipMySqlExtDAO.class.php');

		return new ChallengeOwnershipMySqlExtDAO();
	}

	/**
	 * @return ChallengeResponsesDAO
	 */
	public static function getChallengeResponsesDAO(){
		
		require_once('ChallengeResponsesDAO.class.php');
		require_once('models/ChallengeResponse.class.php');
		require_once('mysql/ChallengeResponsesMySqlDAO.class.php');
		require_once('mysql/ext/ChallengeResponsesMySqlExtDAO.class.php');

		return new ChallengeResponsesMySqlExtDAO();
	}

	/**
	 * @return ChallengesDAO
	 */
	public static function getChallengesDAO(){

		require_once('ChallengesDAO.class.php');
		require_once('models/Challenge.class.php');
		require_once('mysql/ChallengesMySqlDAO.class.php');
		require_once('mysql/ext/ChallengesMySqlExtDAO.class.php');

		return new ChallengesMySqlExtDAO();
	}

	/**
	 * @return ChatDAO
	 */
	public static function getChatDAO(){

		require_once('ChatDAO.class.php');
		require_once('models/Chat.class.php');
		require_once('mysql/ChatMySqlDAO.class.php');
		require_once('mysql/ext/ChatMySqlExtDAO.class.php');

		return new ChatMySqlExtDAO();
	}


	/**
	 * @return EducationDAO
	 */
	public static function getEducationDAO(){
		
		require_once('EducationDAO.class.php');
		require_once('models/Education.class.php');
		require_once('mysql/EducationMySqlDAO.class.php');
		require_once('mysql/ext/EducationMySqlExtDAO.class.php');

		return new EducationMySqlExtDAO();
	}

	/**
	 * @return EventsDAO
	 */
	public static function getEventsDAO(){
		return new EventsMySqlExtDAO();
	}

	/**
	 * @return FormsDAO
	 */
	public static function getFormsDAO(){
		
		require_once('FormsDAO.class.php');
		require_once('models/Form.class.php');
		require_once('mysql/FormsMySqlDAO.class.php');
		require_once('mysql/ext/FormsMySqlExtDAO.class.php');
		
		return new FormsMySqlExtDAO();
	}


	/**
	 * @return InvestmentInfoDAO
	 */
	public static function getInvestmentInfoDAO(){
		return new InvestmentInfoMySqlExtDAO();
	}

	/**
	 * @return InvolveInDAO
	 */
	public static function getInvolveInDAO(){
		require_once('InvolveInDAO.class.php');
		require_once('models/InvolveIn.class.php');
		require_once('mysql/InvolveInMySqlDAO.class.php');
		require_once('mysql/ext/InvolveInMySqlExtDAO.class.php');

		return new InvolveInMySqlExtDAO();
	}

	/**
	 * @return JobPreferenceDAO
	 */
	public static function getJobPreferenceDAO(){

		require_once('JobPreferenceDAO.class.php');
		require_once('models/JobPreference.class.php');
		require_once('mysql/JobPreferenceMySqlDAO.class.php');
		require_once('mysql/ext/JobPreferenceMySqlExtDAO.class.php');

		return new JobPreferenceMySqlExtDAO();
	}

	/**
	 * @return KeywordsDAO
	 */
	public static function getKeywordsDAO(){

		require_once('KeywordsDAO.class.php');
		require_once('models/Keyword.class.php');
		require_once('mysql/KeywordsMySqlDAO.class.php');
		require_once('mysql/ext/KeywordsMySqlExtDAO.class.php');

		return new KeywordsMySqlExtDAO();
	}

	/**
	 * @return KnownPeoplesDAO
	 */
	public static function getKnownPeoplesDAO(){

		require_once('KnownPeoplesDAO.class.php');
		require_once('models/KnownPeople.class.php');
		require_once('mysql/KnownPeoplesMySqlDAO.class.php');
		require_once('mysql/ext/KnownPeoplesMySqlExtDAO.class.php');

		return new KnownPeoplesMySqlExtDAO();
	}

	/**
	 * @return NotificationsDAO
	 */
	public static function getNotificationsDAO(){
		
		require_once('NotificationsDAO.class.php');
		require_once('models/Notification.class.php');
		require_once('mysql/NotificationsMySqlDAO.class.php');
		require_once('mysql/ext/NotificationsMySqlExtDAO.class.php');

		return new NotificationsMySqlExtDAO();
	}

	/**
	 * @return OrganisationsDAO
	 */
	public static function getOrganisationsDAO(){
		return new OrganisationsMySqlExtDAO();
	}

	/**
	 * @return ProfessionsDAO
	 */
	public static function getProfessionsDAO(){
		
		require_once('ProfessionsDAO.class.php');
		require_once('models/Profession.class.php');
		require_once('models/UserProfession.class.php');
		require_once('mysql/ProfessionsMySqlDAO.class.php');
		require_once('mysql/ext/ProfessionsMySqlExtDAO.class.php');

		return new ProfessionsMySqlExtDAO();
	}

	/**
	 * @return ProjectResponsesDAO
	 */
	public static function getProjectResponsesDAO(){

		require_once('ProjectResponsesDAO.class.php');
		require_once('models/ProjectResponse.class.php');
		require_once('mysql/ProjectResponsesMySqlDAO.class.php');
		require_once('mysql/ext/ProjectResponsesMySqlExtDAO.class.php');

		return new ProjectResponsesMySqlExtDAO();
	}

	/**
	 * @return ProjectsDAO
	 */
	public static function getProjectsDAO(){
		
		require_once('ProjectsDAO.class.php');
		require_once('models/Project.class.php');
		require_once('mysql/ProjectsMySqlDAO.class.php');
		require_once('mysql/ext/ProjectsMySqlExtDAO.class.php');

		return new ProjectsMySqlExtDAO();
	}

	/**
	 * @return RemindersDAO
	 */
	public static function getRemindersDAO(){

		require_once('RemindersDAO.class.php');
		require_once('models/Reminder.class.php');
		require_once('mysql/RemindersMySqlDAO.class.php');
		require_once('mysql/ext/RemindersMySqlExtDAO.class.php');

		return new RemindersMySqlExtDAO();
	}

	/**
	 * @return SkillsDAO
	 */
	public static function getSkillsDAO(){

		require_once('SkillsDAO.class.php');
		require_once('models/Skill.class.php');
		require_once('models/UserSkill.class.php');
		require_once('mysql/SkillsMySqlDAO.class.php');
		require_once('mysql/ext/SkillsMySqlExtDAO.class.php');
		return new SkillsMySqlExtDAO();
	}

	/**
	 * @return SpamsDAO
	 */
	public static function getSpamsDAO(){
		return new SpamsMySqlExtDAO();
	}

	/**
	 * @return TargetsDAO
	 */
	public static function getTargetsDAO(){
		return new TargetsMySqlExtDAO();
	}

	/**
	 * @return TeamTasksDAO
	 */
	public static function getTeamTasksDAO(){
		return new TeamTasksMySqlExtDAO();
	}

	/**
	 * @return TeamsDAO
	 */
	public static function getTeamsDAO(){

		require_once('TeamsDAO.class.php');
		require_once('models/Team.class.php');
		require_once('models/TeamMembers.class.php');
		require_once('mysql/TeamsMySqlDAO.class.php');
		require_once('mysql/ext/TeamsMySqlExtDAO.class.php');

		return new TeamsMySqlExtDAO();
	}


	/**
	 * @return TechnicalStrengthDAO
	 */
	public static function getTechnicalStrengthDAO(){

		require_once('TechnicalStrengthDAO.class.php');
		require_once('models/TechnicalStrength.class.php');
		require_once('mysql/TechnicalStrengthMySqlDAO.class.php');
		require_once('mysql/ext/TechnicalStrengthMySqlExtDAO.class.php');

		return new TechnicalStrengthMySqlExtDAO();
	}

	/**
	 * @return UserAccessAidDAO
	 */
	public static function getUserAccessAidDAO(){
		return new UserAccessAidMySqlExtDAO();
	}

	/**
	 * @return UserCollaborativeRoleDAO
	 */
	public static function getUserCollaborativeRoleDAO(){
		require_once('UserCollaborativeRoleDAO.class.php');
		require_once('models/UserCollaborativeRole.class.php');
		require_once('mysql/UserCollaborativeRoleMySqlDAO.class.php');
		require_once('mysql/ext/UserCollaborativeRoleMySqlExtDAO.class.php');
		
		return new UserCollaborativeRoleMySqlExtDAO();
	}

	/**
	 * @return UserExternalProfilesDAO
	 */
	public static function getUserExternalProfilesDAO(){
		return new UserExternalProfilesMySqlExtDAO();
	}


	/**
	 * @return UserFormsDAO
	 */
	public static function getUserFormsDAO(){
		
		require_once('UserFormsDAO.class.php');
		require_once('models/UserForm.class.php');
		require_once('mysql/UserFormsMySqlDAO.class.php');
		require_once('mysql/ext/UserFormsMySqlExtDAO.class.php');
		
		return new UserFormsMySqlExtDAO();
	}

	/**
	 * @return UserInfoDAO
	 */
	public static function getUserInfoDAO(){
		
		require_once('UserInfoDAO.class.php');
		require_once('models/UserInfo.class.php');
		require_once('mysql/UserInfoMySqlDAO.class.php');
		require_once('mysql/ext/UserInfoMySqlExtDAO.class.php');

		return new UserInfoMySqlExtDAO();
	}

	/**
	 * @return UserLocationsDAO
	 */
	public static function getUserLocationsDAO(){

		require_once('UserLocationsDAO.class.php');
		require_once('models/UserLocation.class.php');
		require_once('mysql/UserLocationsMySqlDAO.class.php');
		require_once('mysql/ext/UserLocationsMySqlExtDAO.class.php');

		return new UserLocationsMySqlExtDAO();
	}

	/**
	 * @return UserProfessionsDAO
	 */
	public static function getUserProfessionsDAO(){
		return new UserProfessionsMySqlExtDAO();
	}

	/**
	 * @return UserSkillsDAO
	 */
	public static function getUserSkillsDAO(){

		require_once('UserSkillsDAO.class.php');
		require_once('models/UserSkill.class.php');
		require_once('mysql/UserSkillsMySqlDAO.class.php');
		require_once('mysql/ext/UserSkillsMySqlExtDAO.class.php');

		return new UserSkillsMySqlExtDAO();

	}


	/**
	 * @return UserSocialLinksDAO
	 */
	public static function getUserSocialLinksDAO(){

		require_once('UserSocialLinksDAO.class.php');
		require_once('models/UserSocialLink.class.php');
		require_once('mysql/UserSocialLinksMySqlDAO.class.php');
		require_once('mysql/ext/UserSocialLinksMySqlExtDAO.class.php');

		return new UserSocialLinksMySqlExtDAO();
	}

	/**
	 * @return WorkingHistoryDAO
	 */
	public static function getWorkingHistoryDAO(){
		
		require_once('WorkingHistoryDAO.class.php');
		require_once('models/WorkingHistory.class.php');
		require_once('mysql/WorkingHistoryMySqlDAO.class.php');
		require_once('mysql/ext/WorkingHistoryMySqlExtDAO.class.php');

		return new WorkingHistoryMySqlExtDAO();
	}

	/**
	 * @return WorkingLocationsDAO
	 */
	public static function getWorkingLocationsDAO(){

		require_once('WorkingLocationsDAO.class.php');
		require_once('models/WorkingLocation.class.php');
		require_once('mysql/WorkingLocationsMySqlDAO.class.php');
		require_once('mysql/ext/WorkingLocationsMySqlExtDAO.class.php');
		
		return new WorkingLocationsMySqlExtDAO();
	}

	/**
	 * @return GenericEmailsDAO
	 */
	public static function getGenericEmailsDAO(){
		
		require_once('GenericEmailsDAO.class.php');
		require_once('models/GenericEmail.class.php');
		require_once('mysql/GenericEmailsMySqlDAO.class.php');
		require_once('mysql/ext/GenericEmailsMySqlExtDAO.class.php');

		return new GenericEmailsMySqlExtDAO();
	}

	/**
	 * @return InvitationsDAO
	 */
	public static function getInvitationsDAO(){

		require_once('InvitationDAO.class.php');
		require_once('models/Invitations.class.php');
		require_once('mysql/InvitationsMySqlDAO.class.php');
		require_once('mysql/ext/InvitationsMySqlExtDAO.class.php');

		return new InvitationsMySqlExtDAO();
	}

	/**
	 * @return UserFollowUpDAO
	 */
	public static function getUserFollowUpDAO(){

		require_once('UserFollowUpDAO.class.php');
		require_once('models/UserFollowUp.class.php');
		require_once('mysql/UserFollowUpMySqlDAO.class.php');
		require_once('mysql/ext/UserFollowUpMySqlExtDAO.class.php');		

		return new UserFollowUpMySqlExtDAO();
	}

}
?>