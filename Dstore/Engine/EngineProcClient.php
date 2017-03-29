<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Dstore\Engine {

  class EngineProcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Dstore\Engine\Ac_ChangeActionState_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_ChangeActionState_Ad(\Dstore\Engine\Ac_ChangeActionState_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_ChangeActionState_Ad',
      $argument,
      ['\Dstore\Engine\Ac_ChangeActionState_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_GetActionLogs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_GetActionLogs_Ad(\Dstore\Engine\Ac_GetActionLogs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_GetActionLogs_Ad',
      $argument,
      ['\Dstore\Engine\Ac_GetActionLogs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_GetActionStatusCategs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_GetActionStatusCategs_Ad(\Dstore\Engine\Ac_GetActionStatusCategs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_GetActionStatusCategs_Ad',
      $argument,
      ['\Dstore\Engine\Ac_GetActionStatusCategs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_GetActionStatusValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_GetActionStatusValues_Ad(\Dstore\Engine\Ac_GetActionStatusValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_GetActionStatusValues_Ad',
      $argument,
      ['\Dstore\Engine\Ac_GetActionStatusValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_GetActions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_GetActions_Ad(\Dstore\Engine\Ac_GetActions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_GetActions_Ad',
      $argument,
      ['\Dstore\Engine\Ac_GetActions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_GetCommandSettingEntry\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_GetCommandSettingEntry(\Dstore\Engine\Ac_GetCommandSettingEntry\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_GetCommandSettingEntry',
      $argument,
      ['\Dstore\Engine\Ac_GetCommandSettingEntry\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_GetCommandSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_GetCommandSettings_Ad(\Dstore\Engine\Ac_GetCommandSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_GetCommandSettings_Ad',
      $argument,
      ['\Dstore\Engine\Ac_GetCommandSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_GetCommands_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_GetCommands_Ad(\Dstore\Engine\Ac_GetCommands_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_GetCommands_Ad',
      $argument,
      ['\Dstore\Engine\Ac_GetCommands_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_InsertActionLog_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_InsertActionLog_Ad(\Dstore\Engine\Ac_InsertActionLog_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_InsertActionLog_Ad',
      $argument,
      ['\Dstore\Engine\Ac_InsertActionLog_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_InsertAction_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_InsertAction_Ad(\Dstore\Engine\Ac_InsertAction_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_InsertAction_Ad',
      $argument,
      ['\Dstore\Engine\Ac_InsertAction_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_ModifyActionStatusValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_ModifyActionStatusValues_Ad(\Dstore\Engine\Ac_ModifyActionStatusValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_ModifyActionStatusValues_Ad',
      $argument,
      ['\Dstore\Engine\Ac_ModifyActionStatusValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_ModifyCommandSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_ModifyCommandSettings_Ad(\Dstore\Engine\Ac_ModifyCommandSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_ModifyCommandSettings_Ad',
      $argument,
      ['\Dstore\Engine\Ac_ModifyCommandSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Ac_ModifyCommands_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ac_ModifyCommands_Ad(\Dstore\Engine\Ac_ModifyCommands_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/ac_ModifyCommands_Ad',
      $argument,
      ['\Dstore\Engine\Ac_ModifyCommands_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_CheckStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_CheckStatistics_Ad(\Dstore\Engine\Co_CheckStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_CheckStatistics_Ad',
      $argument,
      ['\Dstore\Engine\Co_CheckStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_CreateNewCommunityMember_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_CreateNewCommunityMember_Pu(\Dstore\Engine\Co_CreateNewCommunityMember_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_CreateNewCommunityMember_Pu',
      $argument,
      ['\Dstore\Engine\Co_CreateNewCommunityMember_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_CreateNewMessage_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_CreateNewMessage_Pu(\Dstore\Engine\Co_CreateNewMessage_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_CreateNewMessage_Pu',
      $argument,
      ['\Dstore\Engine\Co_CreateNewMessage_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_DeleteCommunityBinary_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_DeleteCommunityBinary_Ad(\Dstore\Engine\Co_DeleteCommunityBinary_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_DeleteCommunityBinary_Ad',
      $argument,
      ['\Dstore\Engine\Co_DeleteCommunityBinary_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_DeleteCommunityBinary_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_DeleteCommunityBinary_Pu(\Dstore\Engine\Co_DeleteCommunityBinary_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_DeleteCommunityBinary_Pu',
      $argument,
      ['\Dstore\Engine\Co_DeleteCommunityBinary_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_DeleteInactiveMembers_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_DeleteInactiveMembers_Ad(\Dstore\Engine\Co_DeleteInactiveMembers_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_DeleteInactiveMembers_Ad',
      $argument,
      ['\Dstore\Engine\Co_DeleteInactiveMembers_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_DeleteMessage_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_DeleteMessage_Pu(\Dstore\Engine\Co_DeleteMessage_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_DeleteMessage_Pu',
      $argument,
      ['\Dstore\Engine\Co_DeleteMessage_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_DeleteUsersOnlineTime_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_DeleteUsersOnlineTime_Ad(\Dstore\Engine\Co_DeleteUsersOnlineTime_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_DeleteUsersOnlineTime_Ad',
      $argument,
      ['\Dstore\Engine\Co_DeleteUsersOnlineTime_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetBinQuotaInformation_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetBinQuotaInformation_Pu(\Dstore\Engine\Co_GetBinQuotaInformation_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetBinQuotaInformation_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetBinQuotaInformation_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetBinariesOfOneMember_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetBinariesOfOneMember_Ad(\Dstore\Engine\Co_GetBinariesOfOneMember_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetBinariesOfOneMember_Ad',
      $argument,
      ['\Dstore\Engine\Co_GetBinariesOfOneMember_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetBinaryCatAccessLevels\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetBinaryCatAccessLevels(\Dstore\Engine\Co_GetBinaryCatAccessLevels\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetBinaryCatAccessLevels',
      $argument,
      ['\Dstore\Engine\Co_GetBinaryCatAccessLevels\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetBinaryCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetBinaryCategories_Ad(\Dstore\Engine\Co_GetBinaryCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetBinaryCategories_Ad',
      $argument,
      ['\Dstore\Engine\Co_GetBinaryCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetCommunities_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetCommunities_Ad(\Dstore\Engine\Co_GetCommunities_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetCommunities_Ad',
      $argument,
      ['\Dstore\Engine\Co_GetCommunities_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetCommunityForums_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetCommunityForums_Ad(\Dstore\Engine\Co_GetCommunityForums_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetCommunityForums_Ad',
      $argument,
      ['\Dstore\Engine\Co_GetCommunityForums_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetCommunityForums_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetCommunityForums_Pu(\Dstore\Engine\Co_GetCommunityForums_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetCommunityForums_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetCommunityForums_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetCommunityMemberSettings\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetCommunityMemberSettings(\Dstore\Engine\Co_GetCommunityMemberSettings\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetCommunityMemberSettings',
      $argument,
      ['\Dstore\Engine\Co_GetCommunityMemberSettings\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetCommunitySettings\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetCommunitySettings(\Dstore\Engine\Co_GetCommunitySettings\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetCommunitySettings',
      $argument,
      ['\Dstore\Engine\Co_GetCommunitySettings\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetCommunityStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetCommunityStatistics_Ad(\Dstore\Engine\Co_GetCommunityStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetCommunityStatistics_Ad',
      $argument,
      ['\Dstore\Engine\Co_GetCommunityStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetCommunityStatistics_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetCommunityStatistics_Pu(\Dstore\Engine\Co_GetCommunityStatistics_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetCommunityStatistics_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetCommunityStatistics_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetCurrentlyUsersOnline_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetCurrentlyUsersOnline_Pu(\Dstore\Engine\Co_GetCurrentlyUsersOnline_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetCurrentlyUsersOnline_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetCurrentlyUsersOnline_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetLostPasswordQuestion_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetLostPasswordQuestion_Pu(\Dstore\Engine\Co_GetLostPasswordQuestion_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetLostPasswordQuestion_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetLostPasswordQuestion_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetLostPassword_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetLostPassword_Pu(\Dstore\Engine\Co_GetLostPassword_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetLostPassword_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetLostPassword_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetMD5ForBinaryID_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetMD5ForBinaryID_Pu(\Dstore\Engine\Co_GetMD5ForBinaryID_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetMD5ForBinaryID_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetMD5ForBinaryID_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetMemberBinaries_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetMemberBinaries_Pu(\Dstore\Engine\Co_GetMemberBinaries_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetMemberBinaries_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetMemberBinaries_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetMemberInformation_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetMemberInformation_Pu(\Dstore\Engine\Co_GetMemberInformation_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetMemberInformation_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetMemberInformation_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetMemberProperties_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetMemberProperties_Pu(\Dstore\Engine\Co_GetMemberProperties_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetMemberProperties_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetMemberProperties_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetMemberSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetMemberSettings_Ad(\Dstore\Engine\Co_GetMemberSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetMemberSettings_Ad',
      $argument,
      ['\Dstore\Engine\Co_GetMemberSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetMemberSettings_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetMemberSettings_Pu(\Dstore\Engine\Co_GetMemberSettings_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetMemberSettings_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetMemberSettings_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetMemberStatistics_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetMemberStatistics_Pu(\Dstore\Engine\Co_GetMemberStatistics_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetMemberStatistics_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetMemberStatistics_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetMessagesOfOneMember_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetMessagesOfOneMember_Ad(\Dstore\Engine\Co_GetMessagesOfOneMember_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetMessagesOfOneMember_Ad',
      $argument,
      ['\Dstore\Engine\Co_GetMessagesOfOneMember_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetMessages_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetMessages_Pu(\Dstore\Engine\Co_GetMessages_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetMessages_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetMessages_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetNewestMembers_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetNewestMembers_Pu(\Dstore\Engine\Co_GetNewestMembers_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetNewestMembers_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetNewestMembers_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetOnlineStatus_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetOnlineStatus_Pu(\Dstore\Engine\Co_GetOnlineStatus_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetOnlineStatus_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetOnlineStatus_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetOnlineTimeOfMembers_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetOnlineTimeOfMembers_Pu(\Dstore\Engine\Co_GetOnlineTimeOfMembers_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetOnlineTimeOfMembers_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetOnlineTimeOfMembers_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetPublicCommunityStats_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetPublicCommunityStats_Pu(\Dstore\Engine\Co_GetPublicCommunityStats_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetPublicCommunityStats_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetPublicCommunityStats_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetRelatedMembers_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetRelatedMembers_Pu(\Dstore\Engine\Co_GetRelatedMembers_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetRelatedMembers_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetRelatedMembers_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_GetSentMessages_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_GetSentMessages_Pu(\Dstore\Engine\Co_GetSentMessages_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_GetSentMessages_Pu',
      $argument,
      ['\Dstore\Engine\Co_GetSentMessages_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_InsertCommunityMembers_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_InsertCommunityMembers_Ad(\Dstore\Engine\Co_InsertCommunityMembers_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_InsertCommunityMembers_Ad',
      $argument,
      ['\Dstore\Engine\Co_InsertCommunityMembers_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_InsertCommunityMembers_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_InsertCommunityMembers_Pu(\Dstore\Engine\Co_InsertCommunityMembers_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_InsertCommunityMembers_Pu',
      $argument,
      ['\Dstore\Engine\Co_InsertCommunityMembers_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_InsertNewCommunity_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_InsertNewCommunity_Ad(\Dstore\Engine\Co_InsertNewCommunity_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_InsertNewCommunity_Ad',
      $argument,
      ['\Dstore\Engine\Co_InsertNewCommunity_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_InsertNewMemberBinary_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_InsertNewMemberBinary_Pu(\Dstore\Engine\Co_InsertNewMemberBinary_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_InsertNewMemberBinary_Pu',
      $argument,
      ['\Dstore\Engine\Co_InsertNewMemberBinary_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_LoginIntoCommunity_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_LoginIntoCommunity_Pu(\Dstore\Engine\Co_LoginIntoCommunity_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_LoginIntoCommunity_Pu',
      $argument,
      ['\Dstore\Engine\Co_LoginIntoCommunity_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_LogoutCommunityMember_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_LogoutCommunityMember_Ad(\Dstore\Engine\Co_LogoutCommunityMember_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_LogoutCommunityMember_Ad',
      $argument,
      ['\Dstore\Engine\Co_LogoutCommunityMember_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_LogoutOffCommunity_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_LogoutOffCommunity_Pu(\Dstore\Engine\Co_LogoutOffCommunity_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_LogoutOffCommunity_Pu',
      $argument,
      ['\Dstore\Engine\Co_LogoutOffCommunity_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_ModifyBinaryCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_ModifyBinaryCategories_Ad(\Dstore\Engine\Co_ModifyBinaryCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_ModifyBinaryCategories_Ad',
      $argument,
      ['\Dstore\Engine\Co_ModifyBinaryCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_ModifyCommunities_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_ModifyCommunities_Ad(\Dstore\Engine\Co_ModifyCommunities_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_ModifyCommunities_Ad',
      $argument,
      ['\Dstore\Engine\Co_ModifyCommunities_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_ModifyCommunityForums_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_ModifyCommunityForums_Ad(\Dstore\Engine\Co_ModifyCommunityForums_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_ModifyCommunityForums_Ad',
      $argument,
      ['\Dstore\Engine\Co_ModifyCommunityForums_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_ModifyCommunitySettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_ModifyCommunitySettings_Ad(\Dstore\Engine\Co_ModifyCommunitySettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_ModifyCommunitySettings_Ad',
      $argument,
      ['\Dstore\Engine\Co_ModifyCommunitySettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_ModifyMemberSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_ModifyMemberSettings_Ad(\Dstore\Engine\Co_ModifyMemberSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_ModifyMemberSettings_Ad',
      $argument,
      ['\Dstore\Engine\Co_ModifyMemberSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_ModifyMemberSettings_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_ModifyMemberSettings_Pu(\Dstore\Engine\Co_ModifyMemberSettings_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_ModifyMemberSettings_Pu',
      $argument,
      ['\Dstore\Engine\Co_ModifyMemberSettings_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_SearchMemberSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_SearchMemberSettings_Ad(\Dstore\Engine\Co_SearchMemberSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_SearchMemberSettings_Ad',
      $argument,
      ['\Dstore\Engine\Co_SearchMemberSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_SearchMembers_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_SearchMembers_Ad(\Dstore\Engine\Co_SearchMembers_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_SearchMembers_Ad',
      $argument,
      ['\Dstore\Engine\Co_SearchMembers_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Co_SearchMembers_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function co_SearchMembers_Pu(\Dstore\Engine\Co_SearchMembers_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/co_SearchMembers_Pu',
      $argument,
      ['\Dstore\Engine\Co_SearchMembers_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetGlossary_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetGlossary_Ad(\Dstore\Engine\Do_GetGlossary_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetGlossary_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetGlossary_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcResSortConditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcResSortConditions_Ad(\Dstore\Engine\Do_GetProcResSortConditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcResSortConditions_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcResSortConditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcResultConditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcResultConditions_Ad(\Dstore\Engine\Do_GetProcResultConditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcResultConditions_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcResultConditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcedureCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcedureCategories_Ad(\Dstore\Engine\Do_GetProcedureCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcedureCategories_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcedureCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcedureDependencies_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcedureDependencies_Ad(\Dstore\Engine\Do_GetProcedureDependencies_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcedureDependencies_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcedureDependencies_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcedureDocu_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcedureDocu_Ad(\Dstore\Engine\Do_GetProcedureDocu_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcedureDocu_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcedureDocu_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcedureHistory_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcedureHistory_Ad(\Dstore\Engine\Do_GetProcedureHistory_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcedureHistory_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcedureHistory_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcedureNames_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcedureNames_Ad(\Dstore\Engine\Do_GetProcedureNames_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcedureNames_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcedureNames_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcedureParameters_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcedureParameters_Ad(\Dstore\Engine\Do_GetProcedureParameters_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcedureParameters_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcedureParameters_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcedureResultSets_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcedureResultSets_Ad(\Dstore\Engine\Do_GetProcedureResultSets_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcedureResultSets_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcedureResultSets_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcedureReturnCodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcedureReturnCodes_Ad(\Dstore\Engine\Do_GetProcedureReturnCodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcedureReturnCodes_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcedureReturnCodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetProcedureTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetProcedureTypes_Ad(\Dstore\Engine\Do_GetProcedureTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetProcedureTypes_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetProcedureTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetReturnCodeCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetReturnCodeCategories_Ad(\Dstore\Engine\Do_GetReturnCodeCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetReturnCodeCategories_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetReturnCodeCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetReturnCodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetReturnCodes_Ad(\Dstore\Engine\Do_GetReturnCodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetReturnCodes_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetReturnCodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetSQLFunctionParameters_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetSQLFunctionParameters_Ad(\Dstore\Engine\Do_GetSQLFunctionParameters_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetSQLFunctionParameters_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetSQLFunctionParameters_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetSettingsDescriptions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetSettingsDescriptions_Ad(\Dstore\Engine\Do_GetSettingsDescriptions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetSettingsDescriptions_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetSettingsDescriptions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetSettingsEntryCats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetSettingsEntryCats_Ad(\Dstore\Engine\Do_GetSettingsEntryCats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetSettingsEntryCats_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetSettingsEntryCats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetSortOrderForResultSet_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetSortOrderForResultSet_Ad(\Dstore\Engine\Do_GetSortOrderForResultSet_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetSortOrderForResultSet_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetSortOrderForResultSet_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetTableCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetTableCategories_Ad(\Dstore\Engine\Do_GetTableCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetTableCategories_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetTableCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetdStoreLanguages_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetdStoreLanguages_Ad(\Dstore\Engine\Do_GetdStoreLanguages_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetdStoreLanguages_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetdStoreLanguages_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetdStoreTables_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetdStoreTables_Ad(\Dstore\Engine\Do_GetdStoreTables_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetdStoreTables_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetdStoreTables_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Do_GetdStoreVersions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function do_GetdStoreVersions_Ad(\Dstore\Engine\Do_GetdStoreVersions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/do_GetdStoreVersions_Ad',
      $argument,
      ['\Dstore\Engine\Do_GetdStoreVersions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_CheckForumAccess_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_CheckForumAccess_Pu(\Dstore\Engine\Fo_CheckForumAccess_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_CheckForumAccess_Pu',
      $argument,
      ['\Dstore\Engine\Fo_CheckForumAccess_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_CopyPosting_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_CopyPosting_Pu(\Dstore\Engine\Fo_CopyPosting_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_CopyPosting_Pu',
      $argument,
      ['\Dstore\Engine\Fo_CopyPosting_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_DeletePostingBinary_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_DeletePostingBinary_Pu(\Dstore\Engine\Fo_DeletePostingBinary_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_DeletePostingBinary_Pu',
      $argument,
      ['\Dstore\Engine\Fo_DeletePostingBinary_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForumAccessLevelIDs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForumAccessLevelIDs_Ad(\Dstore\Engine\Fo_GetForumAccessLevelIDs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForumAccessLevelIDs_Ad',
      $argument,
      ['\Dstore\Engine\Fo_GetForumAccessLevelIDs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForumAccessLevelIDs_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForumAccessLevelIDs_Pu(\Dstore\Engine\Fo_GetForumAccessLevelIDs_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForumAccessLevelIDs_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetForumAccessLevelIDs_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForumAccessLevels\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForumAccessLevels(\Dstore\Engine\Fo_GetForumAccessLevels\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForumAccessLevels',
      $argument,
      ['\Dstore\Engine\Fo_GetForumAccessLevels\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForumAccessMatrix_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForumAccessMatrix_Ad(\Dstore\Engine\Fo_GetForumAccessMatrix_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForumAccessMatrix_Ad',
      $argument,
      ['\Dstore\Engine\Fo_GetForumAccessMatrix_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForumCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForumCategories_Ad(\Dstore\Engine\Fo_GetForumCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForumCategories_Ad',
      $argument,
      ['\Dstore\Engine\Fo_GetForumCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForumCategories_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForumCategories_Pu(\Dstore\Engine\Fo_GetForumCategories_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForumCategories_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetForumCategories_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForumSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForumSettings_Ad(\Dstore\Engine\Fo_GetForumSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForumSettings_Ad',
      $argument,
      ['\Dstore\Engine\Fo_GetForumSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForumSettings_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForumSettings_Pu(\Dstore\Engine\Fo_GetForumSettings_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForumSettings_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetForumSettings_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForumStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForumStatistics_Ad(\Dstore\Engine\Fo_GetForumStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForumStatistics_Ad',
      $argument,
      ['\Dstore\Engine\Fo_GetForumStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForumStatistics_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForumStatistics_Pu(\Dstore\Engine\Fo_GetForumStatistics_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForumStatistics_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetForumStatistics_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForums_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForums_Ad(\Dstore\Engine\Fo_GetForums_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForums_Ad',
      $argument,
      ['\Dstore\Engine\Fo_GetForums_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetForums_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetForums_Pu(\Dstore\Engine\Fo_GetForums_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetForums_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetForums_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetMainPostSortCriteria_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetMainPostSortCriteria_Ad(\Dstore\Engine\Fo_GetMainPostSortCriteria_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetMainPostSortCriteria_Ad',
      $argument,
      ['\Dstore\Engine\Fo_GetMainPostSortCriteria_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetMainPostings_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetMainPostings_Pu(\Dstore\Engine\Fo_GetMainPostings_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetMainPostings_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetMainPostings_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPostingBinaries_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPostingBinaries_Pu(\Dstore\Engine\Fo_GetPostingBinaries_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPostingBinaries_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetPostingBinaries_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPostingCharacs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPostingCharacs_Ad(\Dstore\Engine\Fo_GetPostingCharacs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPostingCharacs_Ad',
      $argument,
      ['\Dstore\Engine\Fo_GetPostingCharacs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPostingCharacs_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPostingCharacs_Pu(\Dstore\Engine\Fo_GetPostingCharacs_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPostingCharacs_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetPostingCharacs_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPostingProperties_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPostingProperties_Pu(\Dstore\Engine\Fo_GetPostingProperties_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPostingProperties_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetPostingProperties_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPostingReplies_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPostingReplies_Pu(\Dstore\Engine\Fo_GetPostingReplies_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPostingReplies_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetPostingReplies_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPostingThread_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPostingThread_Pu(\Dstore\Engine\Fo_GetPostingThread_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPostingThread_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetPostingThread_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPostingVisibilities\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPostingVisibilities(\Dstore\Engine\Fo_GetPostingVisibilities\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPostingVisibilities',
      $argument,
      ['\Dstore\Engine\Fo_GetPostingVisibilities\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPosting_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPosting_Pu(\Dstore\Engine\Fo_GetPosting_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPosting_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetPosting_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPostingsOfOnePerson_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPostingsOfOnePerson_Ad(\Dstore\Engine\Fo_GetPostingsOfOnePerson_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPostingsOfOnePerson_Ad',
      $argument,
      ['\Dstore\Engine\Fo_GetPostingsOfOnePerson_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPostingsOfOnePerson_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPostingsOfOnePerson_Pu(\Dstore\Engine\Fo_GetPostingsOfOnePerson_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPostingsOfOnePerson_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetPostingsOfOnePerson_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPredValsForCharacs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPredValsForCharacs_Ad(\Dstore\Engine\Fo_GetPredValsForCharacs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPredValsForCharacs_Ad',
      $argument,
      ['\Dstore\Engine\Fo_GetPredValsForCharacs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_GetPredValsForCharacs_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_GetPredValsForCharacs_Pu(\Dstore\Engine\Fo_GetPredValsForCharacs_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_GetPredValsForCharacs_Pu',
      $argument,
      ['\Dstore\Engine\Fo_GetPredValsForCharacs_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_InsertBinaryForPosting_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_InsertBinaryForPosting_Pu(\Dstore\Engine\Fo_InsertBinaryForPosting_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_InsertBinaryForPosting_Pu',
      $argument,
      ['\Dstore\Engine\Fo_InsertBinaryForPosting_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_InsertPosting_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_InsertPosting_Pu(\Dstore\Engine\Fo_InsertPosting_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_InsertPosting_Pu',
      $argument,
      ['\Dstore\Engine\Fo_InsertPosting_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyCharacForForumCats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyCharacForForumCats_Ad(\Dstore\Engine\Fo_ModifyCharacForForumCats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyCharacForForumCats_Ad',
      $argument,
      ['\Dstore\Engine\Fo_ModifyCharacForForumCats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyCharacsForForums_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyCharacsForForums_Ad(\Dstore\Engine\Fo_ModifyCharacsForForums_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyCharacsForForums_Ad',
      $argument,
      ['\Dstore\Engine\Fo_ModifyCharacsForForums_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyForumAccess_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyForumAccess_Ad(\Dstore\Engine\Fo_ModifyForumAccess_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyForumAccess_Ad',
      $argument,
      ['\Dstore\Engine\Fo_ModifyForumAccess_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyForumAccess_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyForumAccess_Pu(\Dstore\Engine\Fo_ModifyForumAccess_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyForumAccess_Pu',
      $argument,
      ['\Dstore\Engine\Fo_ModifyForumAccess_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyForumCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyForumCategories_Ad(\Dstore\Engine\Fo_ModifyForumCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyForumCategories_Ad',
      $argument,
      ['\Dstore\Engine\Fo_ModifyForumCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyForumSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyForumSettings_Ad(\Dstore\Engine\Fo_ModifyForumSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyForumSettings_Ad',
      $argument,
      ['\Dstore\Engine\Fo_ModifyForumSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyForumsInCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyForumsInCategories_Ad(\Dstore\Engine\Fo_ModifyForumsInCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyForumsInCategories_Ad',
      $argument,
      ['\Dstore\Engine\Fo_ModifyForumsInCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyForums_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyForums_Ad(\Dstore\Engine\Fo_ModifyForums_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyForums_Ad',
      $argument,
      ['\Dstore\Engine\Fo_ModifyForums_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyMainPostSortCrit_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyMainPostSortCrit_Ad(\Dstore\Engine\Fo_ModifyMainPostSortCrit_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyMainPostSortCrit_Ad',
      $argument,
      ['\Dstore\Engine\Fo_ModifyMainPostSortCrit_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyPostingBinary_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyPostingBinary_Pu(\Dstore\Engine\Fo_ModifyPostingBinary_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyPostingBinary_Pu',
      $argument,
      ['\Dstore\Engine\Fo_ModifyPostingBinary_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyPostingCharacs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyPostingCharacs_Ad(\Dstore\Engine\Fo_ModifyPostingCharacs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyPostingCharacs_Ad',
      $argument,
      ['\Dstore\Engine\Fo_ModifyPostingCharacs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyPostingProperties_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyPostingProperties_Pu(\Dstore\Engine\Fo_ModifyPostingProperties_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyPostingProperties_Pu',
      $argument,
      ['\Dstore\Engine\Fo_ModifyPostingProperties_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyPostingVisibility_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyPostingVisibility_Pu(\Dstore\Engine\Fo_ModifyPostingVisibility_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyPostingVisibility_Pu',
      $argument,
      ['\Dstore\Engine\Fo_ModifyPostingVisibility_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyPosting_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyPosting_Pu(\Dstore\Engine\Fo_ModifyPosting_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyPosting_Pu',
      $argument,
      ['\Dstore\Engine\Fo_ModifyPosting_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_ModifyPredValsForCharacs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_ModifyPredValsForCharacs_Ad(\Dstore\Engine\Fo_ModifyPredValsForCharacs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_ModifyPredValsForCharacs_Ad',
      $argument,
      ['\Dstore\Engine\Fo_ModifyPredValsForCharacs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_MovePosting_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_MovePosting_Pu(\Dstore\Engine\Fo_MovePosting_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_MovePosting_Pu',
      $argument,
      ['\Dstore\Engine\Fo_MovePosting_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Fo_SearchPostings_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function fo_SearchPostings_Pu(\Dstore\Engine\Fo_SearchPostings_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/fo_SearchPostings_Pu',
      $argument,
      ['\Dstore\Engine\Fo_SearchPostings_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_AddBinaryToNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_AddBinaryToNodes_Ad(\Dstore\Engine\Im_AddBinaryToNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_AddBinaryToNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_AddBinaryToNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_AddBinaryToValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_AddBinaryToValues_Ad(\Dstore\Engine\Im_AddBinaryToValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_AddBinaryToValues_Ad',
      $argument,
      ['\Dstore\Engine\Im_AddBinaryToValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_AlphabetizeCharacValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_AlphabetizeCharacValues_Ad(\Dstore\Engine\Im_AlphabetizeCharacValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_AlphabetizeCharacValues_Ad',
      $argument,
      ['\Dstore\Engine\Im_AlphabetizeCharacValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_CheckConditionsForTNIDs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_CheckConditionsForTNIDs_Ad(\Dstore\Engine\Im_CheckConditionsForTNIDs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_CheckConditionsForTNIDs_Ad',
      $argument,
      ['\Dstore\Engine\Im_CheckConditionsForTNIDs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_CountBinariesForTreeNode\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_CountBinariesForTreeNode(\Dstore\Engine\Im_CountBinariesForTreeNode\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_CountBinariesForTreeNode',
      $argument,
      ['\Dstore\Engine\Im_CountBinariesForTreeNode\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_CreateProductRatSubjects_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_CreateProductRatSubjects_Ad(\Dstore\Engine\Im_CreateProductRatSubjects_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_CreateProductRatSubjects_Ad',
      $argument,
      ['\Dstore\Engine\Im_CreateProductRatSubjects_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_DeActivateNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_DeActivateNodes_Ad(\Dstore\Engine\Im_DeActivateNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_DeActivateNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_DeActivateNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_DeleteBinaryForNode_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_DeleteBinaryForNode_Ad(\Dstore\Engine\Im_DeleteBinaryForNode_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_DeleteBinaryForNode_Ad',
      $argument,
      ['\Dstore\Engine\Im_DeleteBinaryForNode_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_DeleteInterfaceTables_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_DeleteInterfaceTables_Ad(\Dstore\Engine\Im_DeleteInterfaceTables_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_DeleteInterfaceTables_Ad',
      $argument,
      ['\Dstore\Engine\Im_DeleteInterfaceTables_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_DeleteNodeCharacValue_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_DeleteNodeCharacValue_Ad(\Dstore\Engine\Im_DeleteNodeCharacValue_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_DeleteNodeCharacValue_Ad',
      $argument,
      ['\Dstore\Engine\Im_DeleteNodeCharacValue_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_DeletePageTreeNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_DeletePageTreeNodes_Ad(\Dstore\Engine\Im_DeletePageTreeNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_DeletePageTreeNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_DeletePageTreeNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_DeleteTemplateUsage_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_DeleteTemplateUsage_Ad(\Dstore\Engine\Im_DeleteTemplateUsage_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_DeleteTemplateUsage_Ad',
      $argument,
      ['\Dstore\Engine\Im_DeleteTemplateUsage_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_DeleteTreeNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_DeleteTreeNodes_Ad(\Dstore\Engine\Im_DeleteTreeNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_DeleteTreeNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_DeleteTreeNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_FuzzySearch_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_FuzzySearch_Ad(\Dstore\Engine\Im_FuzzySearch_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_FuzzySearch_Ad',
      $argument,
      ['\Dstore\Engine\Im_FuzzySearch_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GenerateVariants_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GenerateVariants_Ad(\Dstore\Engine\Im_GenerateVariants_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GenerateVariants_Ad',
      $argument,
      ['\Dstore\Engine\Im_GenerateVariants_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetBinariesForValues\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetBinariesForValues(\Dstore\Engine\Im_GetBinariesForValues\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetBinariesForValues',
      $argument,
      ['\Dstore\Engine\Im_GetBinariesForValues\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetBinaryCharacteristics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetBinaryCharacteristics_Ad(\Dstore\Engine\Im_GetBinaryCharacteristics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetBinaryCharacteristics_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetBinaryCharacteristics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetBinaryCodeIDsForNode_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetBinaryCodeIDsForNode_Pu(\Dstore\Engine\Im_GetBinaryCodeIDsForNode_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetBinaryCodeIDsForNode_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetBinaryCodeIDsForNode_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetBinaryCodeIDsForValue_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetBinaryCodeIDsForValue_Pu(\Dstore\Engine\Im_GetBinaryCodeIDsForValue_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetBinaryCodeIDsForValue_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetBinaryCodeIDsForValue_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetBinaryPredefinedVals_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetBinaryPredefinedVals_Ad(\Dstore\Engine\Im_GetBinaryPredefinedVals_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetBinaryPredefinedVals_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetBinaryPredefinedVals_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetBinaryPredefinedVals_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetBinaryPredefinedVals_Pu(\Dstore\Engine\Im_GetBinaryPredefinedVals_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetBinaryPredefinedVals_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetBinaryPredefinedVals_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetBinaryProperties_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetBinaryProperties_Ad(\Dstore\Engine\Im_GetBinaryProperties_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetBinaryProperties_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetBinaryProperties_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetBinaryProperties_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetBinaryProperties_Pu(\Dstore\Engine\Im_GetBinaryProperties_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetBinaryProperties_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetBinaryProperties_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetBinary_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetBinary_Ad(\Dstore\Engine\Im_GetBinary_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetBinary_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetBinary_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetBinary_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetBinary_Pu(\Dstore\Engine\Im_GetBinary_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetBinary_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetBinary_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetCommonNodeProperties_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetCommonNodeProperties_Ad(\Dstore\Engine\Im_GetCommonNodeProperties_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetCommonNodeProperties_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetCommonNodeProperties_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetCorrespondingValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetCorrespondingValues_Ad(\Dstore\Engine\Im_GetCorrespondingValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetCorrespondingValues_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetCorrespondingValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetDirectSuccessors_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetDirectSuccessors_Ad(\Dstore\Engine\Im_GetDirectSuccessors_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetDirectSuccessors_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetDirectSuccessors_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetDirectSuccessors_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetDirectSuccessors_Pu(\Dstore\Engine\Im_GetDirectSuccessors_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetDirectSuccessors_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetDirectSuccessors_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetDirectSuccessors_Tree_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetDirectSuccessors_Tree_Ad(\Dstore\Engine\Im_GetDirectSuccessors_Tree_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetDirectSuccessors_Tree_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetDirectSuccessors_Tree_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetDirectSuccessors_Tree_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetDirectSuccessors_Tree_Pu(\Dstore\Engine\Im_GetDirectSuccessors_Tree_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetDirectSuccessors_Tree_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetDirectSuccessors_Tree_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetHTreeNodeID_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetHTreeNodeID_Pu(\Dstore\Engine\Im_GetHTreeNodeID_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetHTreeNodeID_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetHTreeNodeID_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetHTreeNodeIDs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetHTreeNodeIDs_Ad(\Dstore\Engine\Im_GetHTreeNodeIDs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetHTreeNodeIDs_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetHTreeNodeIDs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetImportErrors_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetImportErrors_Ad(\Dstore\Engine\Im_GetImportErrors_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetImportErrors_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetImportErrors_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetItemConditionGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetItemConditionGroups_Ad(\Dstore\Engine\Im_GetItemConditionGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetItemConditionGroups_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetItemConditionGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetItemConditionParts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetItemConditionParts_Ad(\Dstore\Engine\Im_GetItemConditionParts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetItemConditionParts_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetItemConditionParts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetItemConditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetItemConditions_Ad(\Dstore\Engine\Im_GetItemConditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetItemConditions_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetItemConditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetLevelForNode_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetLevelForNode_Pu(\Dstore\Engine\Im_GetLevelForNode_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetLevelForNode_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetLevelForNode_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetLevels_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetLevels_Ad(\Dstore\Engine\Im_GetLevels_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetLevels_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetLevels_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetLevels_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetLevels_Pu(\Dstore\Engine\Im_GetLevels_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetLevels_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetLevels_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetLockedNodeCharacs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetLockedNodeCharacs_Ad(\Dstore\Engine\Im_GetLockedNodeCharacs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetLockedNodeCharacs_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetLockedNodeCharacs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetModifiedNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetModifiedNodes_Ad(\Dstore\Engine\Im_GetModifiedNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetModifiedNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetModifiedNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNewCharacsForNode_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNewCharacsForNode_Ad(\Dstore\Engine\Im_GetNewCharacsForNode_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNewCharacsForNode_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetNewCharacsForNode_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeCharacCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeCharacCategories_Ad(\Dstore\Engine\Im_GetNodeCharacCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeCharacCategories_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetNodeCharacCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeCharacDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeCharacDescr_Ad(\Dstore\Engine\Im_GetNodeCharacDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeCharacDescr_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetNodeCharacDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeCharacSettings\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeCharacSettings(\Dstore\Engine\Im_GetNodeCharacSettings\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeCharacSettings',
      $argument,
      ['\Dstore\Engine\Im_GetNodeCharacSettings\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeCharacValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeCharacValues_Ad(\Dstore\Engine\Im_GetNodeCharacValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeCharacValues_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetNodeCharacValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeCharacValues_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeCharacValues_Pu(\Dstore\Engine\Im_GetNodeCharacValues_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeCharacValues_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetNodeCharacValues_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeCharacteristics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeCharacteristics_Ad(\Dstore\Engine\Im_GetNodeCharacteristics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeCharacteristics_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetNodeCharacteristics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeCharacteristics_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeCharacteristics_Pu(\Dstore\Engine\Im_GetNodeCharacteristics_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeCharacteristics_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetNodeCharacteristics_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeDescriptions_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeDescriptions_Pu(\Dstore\Engine\Im_GetNodeDescriptions_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeDescriptions_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetNodeDescriptions_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeMetaInformation_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeMetaInformation_Ad(\Dstore\Engine\Im_GetNodeMetaInformation_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeMetaInformation_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetNodeMetaInformation_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeProperties\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeProperties(\Dstore\Engine\Im_GetNodeProperties\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeProperties',
      $argument,
      ['\Dstore\Engine\Im_GetNodeProperties\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodePropertiesHistory_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodePropertiesHistory_Ad(\Dstore\Engine\Im_GetNodePropertiesHistory_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodePropertiesHistory_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetNodePropertiesHistory_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNodeSymbols_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNodeSymbols_Ad(\Dstore\Engine\Im_GetNodeSymbols_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNodeSymbols_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetNodeSymbols_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetNumberOfNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetNumberOfNodes_Ad(\Dstore\Engine\Im_GetNumberOfNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetNumberOfNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetNumberOfNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetPageTreeNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetPageTreeNodes_Ad(\Dstore\Engine\Im_GetPageTreeNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetPageTreeNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetPageTreeNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetPredecessors\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetPredecessors(\Dstore\Engine\Im_GetPredecessors\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetPredecessors',
      $argument,
      ['\Dstore\Engine\Im_GetPredecessors\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetRandomProduct_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetRandomProduct_Pu(\Dstore\Engine\Im_GetRandomProduct_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetRandomProduct_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetRandomProduct_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetRootNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetRootNodes_Ad(\Dstore\Engine\Im_GetRootNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetRootNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetRootNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetSimpleProductInfo_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetSimpleProductInfo_Pu(\Dstore\Engine\Im_GetSimpleProductInfo_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetSimpleProductInfo_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetSimpleProductInfo_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetSuccessors_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetSuccessors_Ad(\Dstore\Engine\Im_GetSuccessors_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetSuccessors_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetSuccessors_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetSuccessors_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetSuccessors_Pu(\Dstore\Engine\Im_GetSuccessors_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetSuccessors_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetSuccessors_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetTNodeMetaInformation_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetTNodeMetaInformation_Ad(\Dstore\Engine\Im_GetTNodeMetaInformation_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetTNodeMetaInformation_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetTNodeMetaInformation_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetTemplates_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetTemplates_Ad(\Dstore\Engine\Im_GetTemplates_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetTemplates_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetTemplates_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetTemplates_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetTemplates_Pu(\Dstore\Engine\Im_GetTemplates_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetTemplates_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetTemplates_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetThumbnailForNode_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetThumbnailForNode_Ad(\Dstore\Engine\Im_GetThumbnailForNode_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetThumbnailForNode_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetThumbnailForNode_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetThumbnailForValue_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetThumbnailForValue_Ad(\Dstore\Engine\Im_GetThumbnailForValue_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetThumbnailForValue_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetThumbnailForValue_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetTreeNodeInformation_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetTreeNodeInformation_Ad(\Dstore\Engine\Im_GetTreeNodeInformation_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetTreeNodeInformation_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetTreeNodeInformation_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetTreeNodeInformation_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetTreeNodeInformation_Pu(\Dstore\Engine\Im_GetTreeNodeInformation_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetTreeNodeInformation_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetTreeNodeInformation_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetUsedValues_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetUsedValues_Pu(\Dstore\Engine\Im_GetUsedValues_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetUsedValues_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetUsedValues_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetValueCategories\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetValueCategories(\Dstore\Engine\Im_GetValueCategories\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetValueCategories',
      $argument,
      ['\Dstore\Engine\Im_GetValueCategories\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetValueDetails_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetValueDetails_Ad(\Dstore\Engine\Im_GetValueDetails_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetValueDetails_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetValueDetails_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetValueDetails_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetValueDetails_Pu(\Dstore\Engine\Im_GetValueDetails_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetValueDetails_Pu',
      $argument,
      ['\Dstore\Engine\Im_GetValueDetails_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetValuesInCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetValuesInCategories_Ad(\Dstore\Engine\Im_GetValuesInCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetValuesInCategories_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetValuesInCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetVariantMatrix\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetVariantMatrix(\Dstore\Engine\Im_GetVariantMatrix\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetVariantMatrix',
      $argument,
      ['\Dstore\Engine\Im_GetVariantMatrix\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_GetVariantMatrix_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_GetVariantMatrix_Ad(\Dstore\Engine\Im_GetVariantMatrix_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_GetVariantMatrix_Ad',
      $argument,
      ['\Dstore\Engine\Im_GetVariantMatrix_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ImportBinaries_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ImportBinaries_Ad(\Dstore\Engine\Im_ImportBinaries_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ImportBinaries_Ad',
      $argument,
      ['\Dstore\Engine\Im_ImportBinaries_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ImportItemData_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ImportItemData_Ad(\Dstore\Engine\Im_ImportItemData_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ImportItemData_Ad',
      $argument,
      ['\Dstore\Engine\Im_ImportItemData_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_InsertNewNode_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_InsertNewNode_Ad(\Dstore\Engine\Im_InsertNewNode_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_InsertNewNode_Ad',
      $argument,
      ['\Dstore\Engine\Im_InsertNewNode_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_InsertNewValueCategory_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_InsertNewValueCategory_Ad(\Dstore\Engine\Im_InsertNewValueCategory_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_InsertNewValueCategory_Ad',
      $argument,
      ['\Dstore\Engine\Im_InsertNewValueCategory_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_InsertNodeBinary_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_InsertNodeBinary_Ad(\Dstore\Engine\Im_InsertNodeBinary_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_InsertNodeBinary_Ad',
      $argument,
      ['\Dstore\Engine\Im_InsertNodeBinary_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_InsertNodePredefinedVal_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_InsertNodePredefinedVal_Ad(\Dstore\Engine\Im_InsertNodePredefinedVal_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_InsertNodePredefinedVal_Ad',
      $argument,
      ['\Dstore\Engine\Im_InsertNodePredefinedVal_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_InsertNodeSymbol_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_InsertNodeSymbol_Ad(\Dstore\Engine\Im_InsertNodeSymbol_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_InsertNodeSymbol_Ad',
      $argument,
      ['\Dstore\Engine\Im_InsertNodeSymbol_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_InsertPageTreeNode_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_InsertPageTreeNode_Ad(\Dstore\Engine\Im_InsertPageTreeNode_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_InsertPageTreeNode_Ad',
      $argument,
      ['\Dstore\Engine\Im_InsertPageTreeNode_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_InsertValueBinary_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_InsertValueBinary_Ad(\Dstore\Engine\Im_InsertValueBinary_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_InsertValueBinary_Ad',
      $argument,
      ['\Dstore\Engine\Im_InsertValueBinary_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_MaintainStatisticProps_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_MaintainStatisticProps_Ad(\Dstore\Engine\Im_MaintainStatisticProps_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_MaintainStatisticProps_Ad',
      $argument,
      ['\Dstore\Engine\Im_MaintainStatisticProps_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyBinaryCharacValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyBinaryCharacValues_Ad(\Dstore\Engine\Im_ModifyBinaryCharacValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyBinaryCharacValues_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyBinaryCharacValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyBinaryProperties_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyBinaryProperties_Ad(\Dstore\Engine\Im_ModifyBinaryProperties_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyBinaryProperties_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyBinaryProperties_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyCondPartsInGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyCondPartsInGroups_Ad(\Dstore\Engine\Im_ModifyCondPartsInGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyCondPartsInGroups_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyCondPartsInGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyConditionGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyConditionGroups_Ad(\Dstore\Engine\Im_ModifyConditionGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyConditionGroups_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyConditionGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyConditionParts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyConditionParts_Ad(\Dstore\Engine\Im_ModifyConditionParts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyConditionParts_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyConditionParts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyConditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyConditions_Ad(\Dstore\Engine\Im_ModifyConditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyConditions_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyConditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyCorrespondingVals_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyCorrespondingVals_Ad(\Dstore\Engine\Im_ModifyCorrespondingVals_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyCorrespondingVals_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyCorrespondingVals_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyGroupsPerItemCond_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyGroupsPerItemCond_Ad(\Dstore\Engine\Im_ModifyGroupsPerItemCond_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyGroupsPerItemCond_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyGroupsPerItemCond_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyLevels_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyLevels_Ad(\Dstore\Engine\Im_ModifyLevels_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyLevels_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyLevels_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyLockedNodeCharacs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyLockedNodeCharacs_Ad(\Dstore\Engine\Im_ModifyLockedNodeCharacs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyLockedNodeCharacs_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyLockedNodeCharacs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyNodeCharacCats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyNodeCharacCats_Ad(\Dstore\Engine\Im_ModifyNodeCharacCats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyNodeCharacCats_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyNodeCharacCats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyNodeCharacDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyNodeCharacDescr_Ad(\Dstore\Engine\Im_ModifyNodeCharacDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyNodeCharacDescr_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyNodeCharacDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyNodeCharacSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyNodeCharacSettings_Ad(\Dstore\Engine\Im_ModifyNodeCharacSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyNodeCharacSettings_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyNodeCharacSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyNodeCharacsInCat_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyNodeCharacsInCat_Ad(\Dstore\Engine\Im_ModifyNodeCharacsInCat_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyNodeCharacsInCat_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyNodeCharacsInCat_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyNodeCharacs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyNodeCharacs_Ad(\Dstore\Engine\Im_ModifyNodeCharacs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyNodeCharacs_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyNodeCharacs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyNodeDescription_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyNodeDescription_Ad(\Dstore\Engine\Im_ModifyNodeDescription_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyNodeDescription_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyNodeDescription_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyNodeProperties_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyNodeProperties_Ad(\Dstore\Engine\Im_ModifyNodeProperties_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyNodeProperties_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyNodeProperties_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyPredefinedValue_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyPredefinedValue_Ad(\Dstore\Engine\Im_ModifyPredefinedValue_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyPredefinedValue_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyPredefinedValue_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyValueCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyValueCategories_Ad(\Dstore\Engine\Im_ModifyValueCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyValueCategories_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyValueCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyValueDetails_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyValueDetails_Ad(\Dstore\Engine\Im_ModifyValueDetails_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyValueDetails_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyValueDetails_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ModifyValuesInCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ModifyValuesInCategories_Ad(\Dstore\Engine\Im_ModifyValuesInCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ModifyValuesInCategories_Ad',
      $argument,
      ['\Dstore\Engine\Im_ModifyValuesInCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_MoveNodeCharacValue_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_MoveNodeCharacValue_Ad(\Dstore\Engine\Im_MoveNodeCharacValue_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_MoveNodeCharacValue_Ad',
      $argument,
      ['\Dstore\Engine\Im_MoveNodeCharacValue_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_MoveTreeNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_MoveTreeNodes_Ad(\Dstore\Engine\Im_MoveTreeNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_MoveTreeNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_MoveTreeNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_RemoveBinaryFromNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_RemoveBinaryFromNodes_Ad(\Dstore\Engine\Im_RemoveBinaryFromNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_RemoveBinaryFromNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_RemoveBinaryFromNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_RemoveBinaryFromValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_RemoveBinaryFromValues_Ad(\Dstore\Engine\Im_RemoveBinaryFromValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_RemoveBinaryFromValues_Ad',
      $argument,
      ['\Dstore\Engine\Im_RemoveBinaryFromValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_ResetSymbolIDs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_ResetSymbolIDs_Ad(\Dstore\Engine\Im_ResetSymbolIDs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_ResetSymbolIDs_Ad',
      $argument,
      ['\Dstore\Engine\Im_ResetSymbolIDs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SearchBinaries_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SearchBinaries_Ad(\Dstore\Engine\Im_SearchBinaries_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SearchBinaries_Ad',
      $argument,
      ['\Dstore\Engine\Im_SearchBinaries_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SearchCharacteristics_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SearchCharacteristics_Pu(\Dstore\Engine\Im_SearchCharacteristics_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SearchCharacteristics_Pu',
      $argument,
      ['\Dstore\Engine\Im_SearchCharacteristics_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SearchProductTreeNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SearchProductTreeNodes_Ad(\Dstore\Engine\Im_SearchProductTreeNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SearchProductTreeNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_SearchProductTreeNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SearchProductTreeNodes_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SearchProductTreeNodes_Pu(\Dstore\Engine\Im_SearchProductTreeNodes_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SearchProductTreeNodes_Pu',
      $argument,
      ['\Dstore\Engine\Im_SearchProductTreeNodes_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SearchTreeNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SearchTreeNodes_Ad(\Dstore\Engine\Im_SearchTreeNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SearchTreeNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_SearchTreeNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SearchTreeNodes_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SearchTreeNodes_Pu(\Dstore\Engine\Im_SearchTreeNodes_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SearchTreeNodes_Pu',
      $argument,
      ['\Dstore\Engine\Im_SearchTreeNodes_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SetLevelOfNodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SetLevelOfNodes_Ad(\Dstore\Engine\Im_SetLevelOfNodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SetLevelOfNodes_Ad',
      $argument,
      ['\Dstore\Engine\Im_SetLevelOfNodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SetProductDescriptions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SetProductDescriptions_Ad(\Dstore\Engine\Im_SetProductDescriptions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SetProductDescriptions_Ad',
      $argument,
      ['\Dstore\Engine\Im_SetProductDescriptions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SetTemplate_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SetTemplate_Ad(\Dstore\Engine\Im_SetTemplate_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SetTemplate_Ad',
      $argument,
      ['\Dstore\Engine\Im_SetTemplate_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SortNodesAlphabetically_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SortNodesAlphabetically_Ad(\Dstore\Engine\Im_SortNodesAlphabetically_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SortNodesAlphabetically_Ad',
      $argument,
      ['\Dstore\Engine\Im_SortNodesAlphabetically_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SortTreeNodes_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SortTreeNodes_Pu(\Dstore\Engine\Im_SortTreeNodes_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SortTreeNodes_Pu',
      $argument,
      ['\Dstore\Engine\Im_SortTreeNodes_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_SynchronizeItemBinaries_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_SynchronizeItemBinaries_Ad(\Dstore\Engine\Im_SynchronizeItemBinaries_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_SynchronizeItemBinaries_Ad',
      $argument,
      ['\Dstore\Engine\Im_SynchronizeItemBinaries_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_TraverseTreeView_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_TraverseTreeView_Pu(\Dstore\Engine\Im_TraverseTreeView_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_TraverseTreeView_Pu',
      $argument,
      ['\Dstore\Engine\Im_TraverseTreeView_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Im_UpdateLockedTreeNodeIDs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function im_UpdateLockedTreeNodeIDs_Ad(\Dstore\Engine\Im_UpdateLockedTreeNodeIDs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/im_UpdateLockedTreeNodeIDs_Ad',
      $argument,
      ['\Dstore\Engine\Im_UpdateLockedTreeNodeIDs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_AnalyseObjectContTSQL_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_AnalyseObjectContTSQL_Ad(\Dstore\Engine\Mi_AnalyseObjectContTSQL_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_AnalyseObjectContTSQL_Ad',
      $argument,
      ['\Dstore\Engine\Mi_AnalyseObjectContTSQL_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ChangedStoreUserPassword_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ChangedStoreUserPassword_Ad(\Dstore\Engine\Mi_ChangedStoreUserPassword_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ChangedStoreUserPassword_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ChangedStoreUserPassword_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_CheckFieldTypeOfValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_CheckFieldTypeOfValues_Ad(\Dstore\Engine\Mi_CheckFieldTypeOfValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_CheckFieldTypeOfValues_Ad',
      $argument,
      ['\Dstore\Engine\Mi_CheckFieldTypeOfValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_CheckPerformance_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_CheckPerformance_Ad(\Dstore\Engine\Mi_CheckPerformance_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_CheckPerformance_Ad',
      $argument,
      ['\Dstore\Engine\Mi_CheckPerformance_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_CreatedStoreUser_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_CreatedStoreUser_Ad(\Dstore\Engine\Mi_CreatedStoreUser_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_CreatedStoreUser_Ad',
      $argument,
      ['\Dstore\Engine\Mi_CreatedStoreUser_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_DatatypeTest_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_DatatypeTest_Ad(\Dstore\Engine\Mi_DatatypeTest_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_DatatypeTest_Ad',
      $argument,
      ['\Dstore\Engine\Mi_DatatypeTest_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_DeadlockTest_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_DeadlockTest_Ad(\Dstore\Engine\Mi_DeadlockTest_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_DeadlockTest_Ad',
      $argument,
      ['\Dstore\Engine\Mi_DeadlockTest_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_DeleteFromTempdbTable\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_DeleteFromTempdbTable(\Dstore\Engine\Mi_DeleteFromTempdbTable\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_DeleteFromTempdbTable',
      $argument,
      ['\Dstore\Engine\Mi_DeleteFromTempdbTable\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_DeletedStoreUser_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_DeletedStoreUser_Ad(\Dstore\Engine\Mi_DeletedStoreUser_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_DeletedStoreUser_Ad',
      $argument,
      ['\Dstore\Engine\Mi_DeletedStoreUser_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_DumpDatabase_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_DumpDatabase_Ad(\Dstore\Engine\Mi_DumpDatabase_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_DumpDatabase_Ad',
      $argument,
      ['\Dstore\Engine\Mi_DumpDatabase_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_DumpTransactionLog_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_DumpTransactionLog_Ad(\Dstore\Engine\Mi_DumpTransactionLog_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_DumpTransactionLog_Ad',
      $argument,
      ['\Dstore\Engine\Mi_DumpTransactionLog_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ExportLogins_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ExportLogins_Ad(\Dstore\Engine\Mi_ExportLogins_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ExportLogins_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ExportLogins_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GarbageCollect_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GarbageCollect_Ad(\Dstore\Engine\Mi_GarbageCollect_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GarbageCollect_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GarbageCollect_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetAllDatabaseUsers_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetAllDatabaseUsers_Ad(\Dstore\Engine\Mi_GetAllDatabaseUsers_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetAllDatabaseUsers_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetAllDatabaseUsers_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetAppPartsTreeSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetAppPartsTreeSettings_Ad(\Dstore\Engine\Mi_GetAppPartsTreeSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetAppPartsTreeSettings_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetAppPartsTreeSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetAppPartsTreeSettings_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetAppPartsTreeSettings_Pu(\Dstore\Engine\Mi_GetAppPartsTreeSettings_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetAppPartsTreeSettings_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetAppPartsTreeSettings_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetApplicPartSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetApplicPartSettings_Ad(\Dstore\Engine\Mi_GetApplicPartSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetApplicPartSettings_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetApplicPartSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetApplicPartSettings_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetApplicPartSettings_Pu(\Dstore\Engine\Mi_GetApplicPartSettings_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetApplicPartSettings_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetApplicPartSettings_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetApplicationPartsTree_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetApplicationPartsTree_Ad(\Dstore\Engine\Mi_GetApplicationPartsTree_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetApplicationPartsTree_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetApplicationPartsTree_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetApplicationPartsTree_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetApplicationPartsTree_Pu(\Dstore\Engine\Mi_GetApplicationPartsTree_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetApplicationPartsTree_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetApplicationPartsTree_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetApplicationParts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetApplicationParts_Ad(\Dstore\Engine\Mi_GetApplicationParts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetApplicationParts_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetApplicationParts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetApplicationParts_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetApplicationParts_Pu(\Dstore\Engine\Mi_GetApplicationParts_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetApplicationParts_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetApplicationParts_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetApplicationSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetApplicationSettings_Ad(\Dstore\Engine\Mi_GetApplicationSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetApplicationSettings_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetApplicationSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetApplicationSettings_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetApplicationSettings_Pu(\Dstore\Engine\Mi_GetApplicationSettings_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetApplicationSettings_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetApplicationSettings_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetApplications_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetApplications_Ad(\Dstore\Engine\Mi_GetApplications_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetApplications_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetApplications_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetApplications_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetApplications_Pu(\Dstore\Engine\Mi_GetApplications_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetApplications_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetApplications_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetBatchJobs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetBatchJobs_Ad(\Dstore\Engine\Mi_GetBatchJobs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetBatchJobs_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetBatchJobs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetBinaryProperties_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetBinaryProperties_Ad(\Dstore\Engine\Mi_GetBinaryProperties_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetBinaryProperties_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetBinaryProperties_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetBinaryProperties_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetBinaryProperties_Pu(\Dstore\Engine\Mi_GetBinaryProperties_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetBinaryProperties_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetBinaryProperties_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetConvertFactor\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetConvertFactor(\Dstore\Engine\Mi_GetConvertFactor\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetConvertFactor',
      $argument,
      ['\Dstore\Engine\Mi_GetConvertFactor\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetCountries\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetCountries(\Dstore\Engine\Mi_GetCountries\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetCountries',
      $argument,
      ['\Dstore\Engine\Mi_GetCountries\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetCurrentDate\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetCurrentDate(\Dstore\Engine\Mi_GetCurrentDate\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetCurrentDate',
      $argument,
      ['\Dstore\Engine\Mi_GetCurrentDate\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetCurrentLocks_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetCurrentLocks_Ad(\Dstore\Engine\Mi_GetCurrentLocks_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetCurrentLocks_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetCurrentLocks_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetCurrentProcesses_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetCurrentProcesses_Ad(\Dstore\Engine\Mi_GetCurrentProcesses_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetCurrentProcesses_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetCurrentProcesses_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetDBObjects_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetDBObjects_Ad(\Dstore\Engine\Mi_GetDBObjects_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetDBObjects_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetDBObjects_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetDBSessionInformation\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetDBSessionInformation(\Dstore\Engine\Mi_GetDBSessionInformation\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetDBSessionInformation',
      $argument,
      ['\Dstore\Engine\Mi_GetDBSessionInformation\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetExecuteRights_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetExecuteRights_Ad(\Dstore\Engine\Mi_GetExecuteRights_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetExecuteRights_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetExecuteRights_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetFieldTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetFieldTypes_Ad(\Dstore\Engine\Mi_GetFieldTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetFieldTypes_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetFieldTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetFieldTypes_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetFieldTypes_Pu(\Dstore\Engine\Mi_GetFieldTypes_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetFieldTypes_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetFieldTypes_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetIndexDDL_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetIndexDDL_Ad(\Dstore\Engine\Mi_GetIndexDDL_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetIndexDDL_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetIndexDDL_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetIndexDLL_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetIndexDLL_Ad(\Dstore\Engine\Mi_GetIndexDLL_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetIndexDLL_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetIndexDLL_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetInformationTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetInformationTypes_Ad(\Dstore\Engine\Mi_GetInformationTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetInformationTypes_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetInformationTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetLanguageDescriptions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetLanguageDescriptions_Ad(\Dstore\Engine\Mi_GetLanguageDescriptions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetLanguageDescriptions_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetLanguageDescriptions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetLanguageIcons_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetLanguageIcons_Ad(\Dstore\Engine\Mi_GetLanguageIcons_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetLanguageIcons_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetLanguageIcons_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetLanguageIcons_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetLanguageIcons_Pu(\Dstore\Engine\Mi_GetLanguageIcons_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetLanguageIcons_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetLanguageIcons_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetLanguages\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetLanguages(\Dstore\Engine\Mi_GetLanguages\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetLanguages',
      $argument,
      ['\Dstore\Engine\Mi_GetLanguages\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetLicenceKeyData\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetLicenceKeyData(\Dstore\Engine\Mi_GetLicenceKeyData\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetLicenceKeyData',
      $argument,
      ['\Dstore\Engine\Mi_GetLicenceKeyData\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetLocales\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetLocales(\Dstore\Engine\Mi_GetLocales\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetLocales',
      $argument,
      ['\Dstore\Engine\Mi_GetLocales\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetLockDependencies_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetLockDependencies_Ad(\Dstore\Engine\Mi_GetLockDependencies_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetLockDependencies_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetLockDependencies_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetMetaInformationTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetMetaInformationTypes_Ad(\Dstore\Engine\Mi_GetMetaInformationTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetMetaInformationTypes_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetMetaInformationTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetProcExecRestrForGroup_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetProcExecRestrForGroup_Ad(\Dstore\Engine\Mi_GetProcExecRestrForGroup_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetProcExecRestrForGroup_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetProcExecRestrForGroup_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetProcExecRestrForUsers_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetProcExecRestrForUsers_Ad(\Dstore\Engine\Mi_GetProcExecRestrForUsers_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetProcExecRestrForUsers_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetProcExecRestrForUsers_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetProcExecRights_Group_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetProcExecRights_Group_Ad(\Dstore\Engine\Mi_GetProcExecRights_Group_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetProcExecRights_Group_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetProcExecRights_Group_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetProcExecRights_User_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetProcExecRights_User_Ad(\Dstore\Engine\Mi_GetProcExecRights_User_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetProcExecRights_User_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetProcExecRights_User_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetProcMetaProperties_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetProcMetaProperties_Ad(\Dstore\Engine\Mi_GetProcMetaProperties_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetProcMetaProperties_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetProcMetaProperties_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetProcedureCode_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetProcedureCode_Ad(\Dstore\Engine\Mi_GetProcedureCode_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetProcedureCode_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetProcedureCode_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetProcedureDependencies_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetProcedureDependencies_Ad(\Dstore\Engine\Mi_GetProcedureDependencies_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetProcedureDependencies_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetProcedureDependencies_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetProcedureExecutionLog_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetProcedureExecutionLog_Ad(\Dstore\Engine\Mi_GetProcedureExecutionLog_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetProcedureExecutionLog_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetProcedureExecutionLog_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetProcedureParameters\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetProcedureParameters(\Dstore\Engine\Mi_GetProcedureParameters\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetProcedureParameters',
      $argument,
      ['\Dstore\Engine\Mi_GetProcedureParameters\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetRegions\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetRegions(\Dstore\Engine\Mi_GetRegions\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetRegions',
      $argument,
      ['\Dstore\Engine\Mi_GetRegions\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetRegisteredProcedures_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetRegisteredProcedures_Ad(\Dstore\Engine\Mi_GetRegisteredProcedures_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetRegisteredProcedures_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetRegisteredProcedures_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetRessourceUsage\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetRessourceUsage(\Dstore\Engine\Mi_GetRessourceUsage\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetRessourceUsage',
      $argument,
      ['\Dstore\Engine\Mi_GetRessourceUsage\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetReturnCodeMessage\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetReturnCodeMessage(\Dstore\Engine\Mi_GetReturnCodeMessage\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetReturnCodeMessage',
      $argument,
      ['\Dstore\Engine\Mi_GetReturnCodeMessage\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetSQLFunctMetaProps_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetSQLFunctMetaProps_Ad(\Dstore\Engine\Mi_GetSQLFunctMetaProps_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetSQLFunctMetaProps_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetSQLFunctMetaProps_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetSQLFunctionCode_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetSQLFunctionCode_Ad(\Dstore\Engine\Mi_GetSQLFunctionCode_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetSQLFunctionCode_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetSQLFunctionCode_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetSQLFunctionParameters\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetSQLFunctionParameters(\Dstore\Engine\Mi_GetSQLFunctionParameters\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetSQLFunctionParameters',
      $argument,
      ['\Dstore\Engine\Mi_GetSQLFunctionParameters\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetSearchItemLacks_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetSearchItemLacks_Ad(\Dstore\Engine\Mi_GetSearchItemLacks_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetSearchItemLacks_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetSearchItemLacks_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetSearchItems_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetSearchItems_Ad(\Dstore\Engine\Mi_GetSearchItems_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetSearchItems_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetSearchItems_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetSessionManagement_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetSessionManagement_Pu(\Dstore\Engine\Mi_GetSessionManagement_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetSessionManagement_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetSessionManagement_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetSettingEntry\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetSettingEntry(\Dstore\Engine\Mi_GetSettingEntry\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetSettingEntry',
      $argument,
      ['\Dstore\Engine\Mi_GetSettingEntry\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetSettings_Ad(\Dstore\Engine\Mi_GetSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetSettings_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetSourceCodeHistory_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetSourceCodeHistory_Ad(\Dstore\Engine\Mi_GetSourceCodeHistory_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetSourceCodeHistory_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetSourceCodeHistory_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetSourceTemplates_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetSourceTemplates_Ad(\Dstore\Engine\Mi_GetSourceTemplates_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetSourceTemplates_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetSourceTemplates_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetStorageAllocInfo_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetStorageAllocInfo_Ad(\Dstore\Engine\Mi_GetStorageAllocInfo_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetStorageAllocInfo_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetStorageAllocInfo_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTRITriggerCode_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTRITriggerCode_Ad(\Dstore\Engine\Mi_GetTRITriggerCode_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTRITriggerCode_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTRITriggerCode_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTRITriggerConditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTRITriggerConditions_Ad(\Dstore\Engine\Mi_GetTRITriggerConditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTRITriggerConditions_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTRITriggerConditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTRITriggerReplFuncts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTRITriggerReplFuncts_Ad(\Dstore\Engine\Mi_GetTRITriggerReplFuncts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTRITriggerReplFuncts_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTRITriggerReplFuncts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTRITriggerToDos_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTRITriggerToDos_Ad(\Dstore\Engine\Mi_GetTRITriggerToDos_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTRITriggerToDos_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTRITriggerToDos_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTRITriggerTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTRITriggerTypes_Ad(\Dstore\Engine\Mi_GetTRITriggerTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTRITriggerTypes_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTRITriggerTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTRITriggerWorkflow_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTRITriggerWorkflow_Ad(\Dstore\Engine\Mi_GetTRITriggerWorkflow_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTRITriggerWorkflow_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTRITriggerWorkflow_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTRITrigger_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTRITrigger_Ad(\Dstore\Engine\Mi_GetTRITrigger_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTRITrigger_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTRITrigger_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTableDDL_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTableDDL_Ad(\Dstore\Engine\Mi_GetTableDDL_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTableDDL_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTableDDL_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTableDLL_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTableDLL_Ad(\Dstore\Engine\Mi_GetTableDLL_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTableDLL_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTableDLL_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTabsRefInOtherTabs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTabsRefInOtherTabs_Ad(\Dstore\Engine\Mi_GetTabsRefInOtherTabs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTabsRefInOtherTabs_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTabsRefInOtherTabs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTaxRates\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTaxRates(\Dstore\Engine\Mi_GetTaxRates\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTaxRates',
      $argument,
      ['\Dstore\Engine\Mi_GetTaxRates\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTemplateCombinations_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTemplateCombinations_Ad(\Dstore\Engine\Mi_GetTemplateCombinations_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTemplateCombinations_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTemplateCombinations_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTemplates_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTemplates_Ad(\Dstore\Engine\Mi_GetTemplates_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTemplates_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTemplates_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetTriggerCode_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetTriggerCode_Ad(\Dstore\Engine\Mi_GetTriggerCode_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetTriggerCode_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetTriggerCode_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetUnitCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetUnitCategories_Ad(\Dstore\Engine\Mi_GetUnitCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetUnitCategories_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetUnitCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetUnitConverts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetUnitConverts_Ad(\Dstore\Engine\Mi_GetUnitConverts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetUnitConverts_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetUnitConverts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetUnits\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetUnits(\Dstore\Engine\Mi_GetUnits\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetUnits',
      $argument,
      ['\Dstore\Engine\Mi_GetUnits\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetUnits_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetUnits_Ad(\Dstore\Engine\Mi_GetUnits_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetUnits_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetUnits_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetUsageOfTables_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetUsageOfTables_Ad(\Dstore\Engine\Mi_GetUsageOfTables_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetUsageOfTables_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetUsageOfTables_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetUserGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetUserGroups_Ad(\Dstore\Engine\Mi_GetUserGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetUserGroups_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetUserGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetUserInfo\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetUserInfo(\Dstore\Engine\Mi_GetUserInfo\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetUserInfo',
      $argument,
      ['\Dstore\Engine\Mi_GetUserInfo\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetUserInfo_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetUserInfo_Ad(\Dstore\Engine\Mi_GetUserInfo_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetUserInfo_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetUserInfo_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetVisitorInformation_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetVisitorInformation_Pu(\Dstore\Engine\Mi_GetVisitorInformation_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetVisitorInformation_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetVisitorInformation_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetVisitorProperties_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetVisitorProperties_Pu(\Dstore\Engine\Mi_GetVisitorProperties_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetVisitorProperties_Pu',
      $argument,
      ['\Dstore\Engine\Mi_GetVisitorProperties_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_GetdStoreUser_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_GetdStoreUser_Ad(\Dstore\Engine\Mi_GetdStoreUser_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_GetdStoreUser_Ad',
      $argument,
      ['\Dstore\Engine\Mi_GetdStoreUser_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_InsertTemp_CharacConditions\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_InsertTemp_CharacConditions(\Dstore\Engine\Mi_InsertTemp_CharacConditions\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_InsertTemp_CharacConditions',
      $argument,
      ['\Dstore\Engine\Mi_InsertTemp_CharacConditions\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_InsertTempdb_AdditionalInfo\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_InsertTempdb_AdditionalInfo(\Dstore\Engine\Mi_InsertTempdb_AdditionalInfo\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_InsertTempdb_AdditionalInfo',
      $argument,
      ['\Dstore\Engine\Mi_InsertTempdb_AdditionalInfo\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_InsertTempdb_AnyValues\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_InsertTempdb_AnyValues(\Dstore\Engine\Mi_InsertTempdb_AnyValues\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_InsertTempdb_AnyValues',
      $argument,
      ['\Dstore\Engine\Mi_InsertTempdb_AnyValues\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_InsertTempdb_CharacValues\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_InsertTempdb_CharacValues(\Dstore\Engine\Mi_InsertTempdb_CharacValues\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_InsertTempdb_CharacValues',
      $argument,
      ['\Dstore\Engine\Mi_InsertTempdb_CharacValues\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_InsertTempdb_ImageData\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_InsertTempdb_ImageData(\Dstore\Engine\Mi_InsertTempdb_ImageData\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_InsertTempdb_ImageData',
      $argument,
      ['\Dstore\Engine\Mi_InsertTempdb_ImageData\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_InsertTempdb_OneID\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_InsertTempdb_OneID(\Dstore\Engine\Mi_InsertTempdb_OneID\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_InsertTempdb_OneID',
      $argument,
      ['\Dstore\Engine\Mi_InsertTempdb_OneID\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_InsertTempdb_TextData\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_InsertTempdb_TextData(\Dstore\Engine\Mi_InsertTempdb_TextData\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_InsertTempdb_TextData',
      $argument,
      ['\Dstore\Engine\Mi_InsertTempdb_TextData\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_InsertTempdb_ThreeIDs\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_InsertTempdb_ThreeIDs(\Dstore\Engine\Mi_InsertTempdb_ThreeIDs\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_InsertTempdb_ThreeIDs',
      $argument,
      ['\Dstore\Engine\Mi_InsertTempdb_ThreeIDs\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_InsertTempdb_TwoIDs\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_InsertTempdb_TwoIDs(\Dstore\Engine\Mi_InsertTempdb_TwoIDs\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_InsertTempdb_TwoIDs',
      $argument,
      ['\Dstore\Engine\Mi_InsertTempdb_TwoIDs\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_InsertVisitorInformation_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_InsertVisitorInformation_Pu(\Dstore\Engine\Mi_InsertVisitorInformation_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_InsertVisitorInformation_Pu',
      $argument,
      ['\Dstore\Engine\Mi_InsertVisitorInformation_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_LoadDatabase_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_LoadDatabase_Ad(\Dstore\Engine\Mi_LoadDatabase_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_LoadDatabase_Ad',
      $argument,
      ['\Dstore\Engine\Mi_LoadDatabase_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyAppPartSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyAppPartSettings_Ad(\Dstore\Engine\Mi_ModifyAppPartSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyAppPartSettings_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyAppPartSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyAppPartTreeSetts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyAppPartTreeSetts_Ad(\Dstore\Engine\Mi_ModifyAppPartTreeSetts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyAppPartTreeSetts_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyAppPartTreeSetts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyAppSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyAppSettings_Ad(\Dstore\Engine\Mi_ModifyAppSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyAppSettings_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyAppSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyApplicPartsTree_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyApplicPartsTree_Ad(\Dstore\Engine\Mi_ModifyApplicPartsTree_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyApplicPartsTree_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyApplicPartsTree_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyApplicationParts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyApplicationParts_Ad(\Dstore\Engine\Mi_ModifyApplicationParts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyApplicationParts_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyApplicationParts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyApplications_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyApplications_Ad(\Dstore\Engine\Mi_ModifyApplications_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyApplications_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyApplications_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyCountriesInRegions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyCountriesInRegions_Ad(\Dstore\Engine\Mi_ModifyCountriesInRegions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyCountriesInRegions_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyCountriesInRegions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyCountries_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyCountries_Ad(\Dstore\Engine\Mi_ModifyCountries_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyCountries_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyCountries_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyInformationTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyInformationTypes_Ad(\Dstore\Engine\Mi_ModifyInformationTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyInformationTypes_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyInformationTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyLanguageDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyLanguageDescr_Ad(\Dstore\Engine\Mi_ModifyLanguageDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyLanguageDescr_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyLanguageDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyLanguages_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyLanguages_Ad(\Dstore\Engine\Mi_ModifyLanguages_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyLanguages_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyLanguages_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyLocales_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyLocales_Ad(\Dstore\Engine\Mi_ModifyLocales_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyLocales_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyLocales_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyProcExRestForGroup_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyProcExRestForGroup_Ad(\Dstore\Engine\Mi_ModifyProcExRestForGroup_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyProcExRestForGroup_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyProcExRestForGroup_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyProcExRestForUser_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyProcExRestForUser_Ad(\Dstore\Engine\Mi_ModifyProcExRestForUser_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyProcExRestForUser_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyProcExRestForUser_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyProcExRight_Group_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyProcExRight_Group_Ad(\Dstore\Engine\Mi_ModifyProcExRight_Group_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyProcExRight_Group_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyProcExRight_Group_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyProcExRight_User_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyProcExRight_User_Ad(\Dstore\Engine\Mi_ModifyProcExRight_User_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyProcExRight_User_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyProcExRight_User_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyRegions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyRegions_Ad(\Dstore\Engine\Mi_ModifyRegions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyRegions_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyRegions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyRegisteredProcs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyRegisteredProcs_Ad(\Dstore\Engine\Mi_ModifyRegisteredProcs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyRegisteredProcs_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyRegisteredProcs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifySearchItems_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifySearchItems_Ad(\Dstore\Engine\Mi_ModifySearchItems_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifySearchItems_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifySearchItems_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifySessionManagement_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifySessionManagement_Pu(\Dstore\Engine\Mi_ModifySessionManagement_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifySessionManagement_Pu',
      $argument,
      ['\Dstore\Engine\Mi_ModifySessionManagement_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifySettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifySettings_Ad(\Dstore\Engine\Mi_ModifySettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifySettings_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifySettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyTRITriggerConds_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyTRITriggerConds_Ad(\Dstore\Engine\Mi_ModifyTRITriggerConds_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyTRITriggerConds_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyTRITriggerConds_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyTRITriggerReplFunc_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyTRITriggerReplFunc_Ad(\Dstore\Engine\Mi_ModifyTRITriggerReplFunc_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyTRITriggerReplFunc_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyTRITriggerReplFunc_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyTRITriggerToDos_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyTRITriggerToDos_Ad(\Dstore\Engine\Mi_ModifyTRITriggerToDos_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyTRITriggerToDos_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyTRITriggerToDos_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyTRITriggerWorkflow_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyTRITriggerWorkflow_Ad(\Dstore\Engine\Mi_ModifyTRITriggerWorkflow_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyTRITriggerWorkflow_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyTRITriggerWorkflow_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyTRITrigger_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyTRITrigger_Ad(\Dstore\Engine\Mi_ModifyTRITrigger_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyTRITrigger_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyTRITrigger_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyTaxRates_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyTaxRates_Ad(\Dstore\Engine\Mi_ModifyTaxRates_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyTaxRates_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyTaxRates_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyTemplates_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyTemplates_Ad(\Dstore\Engine\Mi_ModifyTemplates_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyTemplates_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyTemplates_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyUnitCategoryDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyUnitCategoryDescr_Ad(\Dstore\Engine\Mi_ModifyUnitCategoryDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyUnitCategoryDescr_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyUnitCategoryDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyUnitConverts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyUnitConverts_Ad(\Dstore\Engine\Mi_ModifyUnitConverts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyUnitConverts_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyUnitConverts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyUnitsInCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyUnitsInCategories_Ad(\Dstore\Engine\Mi_ModifyUnitsInCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyUnitsInCategories_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyUnitsInCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyUnits_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyUnits_Ad(\Dstore\Engine\Mi_ModifyUnits_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyUnits_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyUnits_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyUserGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyUserGroups_Ad(\Dstore\Engine\Mi_ModifyUserGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyUserGroups_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyUserGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyUserInfo_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyUserInfo_Ad(\Dstore\Engine\Mi_ModifyUserInfo_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyUserInfo_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyUserInfo_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ModifyUsersInGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ModifyUsersInGroups_Ad(\Dstore\Engine\Mi_ModifyUsersInGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ModifyUsersInGroups_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ModifyUsersInGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ResetBatchJob_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ResetBatchJob_Ad(\Dstore\Engine\Mi_ResetBatchJob_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ResetBatchJob_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ResetBatchJob_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_RestoreDefaultValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_RestoreDefaultValues_Ad(\Dstore\Engine\Mi_RestoreDefaultValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_RestoreDefaultValues_Ad',
      $argument,
      ['\Dstore\Engine\Mi_RestoreDefaultValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_SearchBinaries_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_SearchBinaries_Ad(\Dstore\Engine\Mi_SearchBinaries_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_SearchBinaries_Ad',
      $argument,
      ['\Dstore\Engine\Mi_SearchBinaries_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_SearchSourceCode_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_SearchSourceCode_Ad(\Dstore\Engine\Mi_SearchSourceCode_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_SearchSourceCode_Ad',
      $argument,
      ['\Dstore\Engine\Mi_SearchSourceCode_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_UpdateVisitorProperties_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_UpdateVisitorProperties_Pu(\Dstore\Engine\Mi_UpdateVisitorProperties_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_UpdateVisitorProperties_Pu',
      $argument,
      ['\Dstore\Engine\Mi_UpdateVisitorProperties_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Mi_ValidateTRITrigger_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function mi_ValidateTRITrigger_Ad(\Dstore\Engine\Mi_ValidateTRITrigger_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/mi_ValidateTRITrigger_Ad',
      $argument,
      ['\Dstore\Engine\Mi_ValidateTRITrigger_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_AcknowledgeOrders_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_AcknowledgeOrders_Ad(\Dstore\Engine\Om_AcknowledgeOrders_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_AcknowledgeOrders_Ad',
      $argument,
      ['\Dstore\Engine\Om_AcknowledgeOrders_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ChangeOrderState_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ChangeOrderState_Ad(\Dstore\Engine\Om_ChangeOrderState_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ChangeOrderState_Ad',
      $argument,
      ['\Dstore\Engine\Om_ChangeOrderState_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ChangeOrderState_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ChangeOrderState_Pu(\Dstore\Engine\Om_ChangeOrderState_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ChangeOrderState_Pu',
      $argument,
      ['\Dstore\Engine\Om_ChangeOrderState_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_CheckCampCondsForTNIDs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_CheckCampCondsForTNIDs_Ad(\Dstore\Engine\Om_CheckCampCondsForTNIDs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_CheckCampCondsForTNIDs_Ad',
      $argument,
      ['\Dstore\Engine\Om_CheckCampCondsForTNIDs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ClearTrolley_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ClearTrolley_Pu(\Dstore\Engine\Om_ClearTrolley_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ClearTrolley_Pu',
      $argument,
      ['\Dstore\Engine\Om_ClearTrolley_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ConvertCurrency\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ConvertCurrency(\Dstore\Engine\Om_ConvertCurrency\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ConvertCurrency',
      $argument,
      ['\Dstore\Engine\Om_ConvertCurrency\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_CopyFromPOQueueToOrder_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_CopyFromPOQueueToOrder_Ad(\Dstore\Engine\Om_CopyFromPOQueueToOrder_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_CopyFromPOQueueToOrder_Ad',
      $argument,
      ['\Dstore\Engine\Om_CopyFromPOQueueToOrder_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_CopyFromTrolleyToOrder_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_CopyFromTrolleyToOrder_Pu(\Dstore\Engine\Om_CopyFromTrolleyToOrder_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_CopyFromTrolleyToOrder_Pu',
      $argument,
      ['\Dstore\Engine\Om_CopyFromTrolleyToOrder_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_CreateCustomerCashAcc_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_CreateCustomerCashAcc_Pu(\Dstore\Engine\Om_CreateCustomerCashAcc_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_CreateCustomerCashAcc_Pu',
      $argument,
      ['\Dstore\Engine\Om_CreateCustomerCashAcc_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_CreateNewBill_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_CreateNewBill_Ad(\Dstore\Engine\Om_CreateNewBill_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_CreateNewBill_Ad',
      $argument,
      ['\Dstore\Engine\Om_CreateNewBill_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_CreateSimpleCampItemCond_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_CreateSimpleCampItemCond_Ad(\Dstore\Engine\Om_CreateSimpleCampItemCond_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_CreateSimpleCampItemCond_Ad',
      $argument,
      ['\Dstore\Engine\Om_CreateSimpleCampItemCond_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_CreateVoucherCodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_CreateVoucherCodes_Ad(\Dstore\Engine\Om_CreateVoucherCodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_CreateVoucherCodes_Ad',
      $argument,
      ['\Dstore\Engine\Om_CreateVoucherCodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_CustomerWhoBoughtAlsoBought\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_CustomerWhoBoughtAlsoBought(\Dstore\Engine\Om_CustomerWhoBoughtAlsoBought\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_CustomerWhoBoughtAlsoBought',
      $argument,
      ['\Dstore\Engine\Om_CustomerWhoBoughtAlsoBought\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ExportOrders_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ExportOrders_Ad(\Dstore\Engine\Om_ExportOrders_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ExportOrders_Ad',
      $argument,
      ['\Dstore\Engine\Om_ExportOrders_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetAllowedOrderStates\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetAllowedOrderStates(\Dstore\Engine\Om_GetAllowedOrderStates\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetAllowedOrderStates',
      $argument,
      ['\Dstore\Engine\Om_GetAllowedOrderStates\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetBenefitTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetBenefitTypes_Ad(\Dstore\Engine\Om_GetBenefitTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetBenefitTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetBenefitTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetBillContentInfoRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetBillContentInfoRules_Ad(\Dstore\Engine\Om_GetBillContentInfoRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetBillContentInfoRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetBillContentInfoRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetBillContentInfoTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetBillContentInfoTypes_Ad(\Dstore\Engine\Om_GetBillContentInfoTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetBillContentInfoTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetBillContentInfoTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetBillContentInfo_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetBillContentInfo_Ad(\Dstore\Engine\Om_GetBillContentInfo_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetBillContentInfo_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetBillContentInfo_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetBillInformationRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetBillInformationRules_Ad(\Dstore\Engine\Om_GetBillInformationRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetBillInformationRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetBillInformationRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetBillInformationTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetBillInformationTypes_Ad(\Dstore\Engine\Om_GetBillInformationTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetBillInformationTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetBillInformationTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetBillInformation_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetBillInformation_Ad(\Dstore\Engine\Om_GetBillInformation_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetBillInformation_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetBillInformation_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetBonusItemSets_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetBonusItemSets_Ad(\Dstore\Engine\Om_GetBonusItemSets_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetBonusItemSets_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetBonusItemSets_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetBundleItemSets_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetBundleItemSets_Ad(\Dstore\Engine\Om_GetBundleItemSets_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetBundleItemSets_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetBundleItemSets_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetBundlePricingTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetBundlePricingTypes_Ad(\Dstore\Engine\Om_GetBundlePricingTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetBundlePricingTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetBundlePricingTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCamPeriodStatusValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCamPeriodStatusValues_Ad(\Dstore\Engine\Om_GetCamPeriodStatusValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCamPeriodStatusValues_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCamPeriodStatusValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampCondCriteriaTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampCondCriteriaTypes_Ad(\Dstore\Engine\Om_GetCampCondCriteriaTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampCondCriteriaTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampCondCriteriaTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampOrderSurchDisc_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampOrderSurchDisc_Ad(\Dstore\Engine\Om_GetCampOrderSurchDisc_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampOrderSurchDisc_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampOrderSurchDisc_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampPaymentTypeConds_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampPaymentTypeConds_Ad(\Dstore\Engine\Om_GetCampPaymentTypeConds_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampPaymentTypeConds_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampPaymentTypeConds_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampPersonGroupConds_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampPersonGroupConds_Ad(\Dstore\Engine\Om_GetCampPersonGroupConds_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampPersonGroupConds_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampPersonGroupConds_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampShippingTypeConds_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampShippingTypeConds_Ad(\Dstore\Engine\Om_GetCampShippingTypeConds_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampShippingTypeConds_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampShippingTypeConds_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampTrolleyValueCond_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampTrolleyValueCond_Ad(\Dstore\Engine\Om_GetCampTrolleyValueCond_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampTrolleyValueCond_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampTrolleyValueCond_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampVoucherCodeConds_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampVoucherCodeConds_Ad(\Dstore\Engine\Om_GetCampVoucherCodeConds_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampVoucherCodeConds_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampVoucherCodeConds_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignBenefits_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignBenefits_Ad(\Dstore\Engine\Om_GetCampaignBenefits_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignBenefits_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignBenefits_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignBonusItems_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignBonusItems_Ad(\Dstore\Engine\Om_GetCampaignBonusItems_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignBonusItems_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignBonusItems_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignBonusItems_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignBonusItems_Pu(\Dstore\Engine\Om_GetCampaignBonusItems_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignBonusItems_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignBonusItems_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignBundlePricing_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignBundlePricing_Ad(\Dstore\Engine\Om_GetCampaignBundlePricing_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignBundlePricing_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignBundlePricing_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignBundlePricing_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignBundlePricing_Pu(\Dstore\Engine\Om_GetCampaignBundlePricing_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignBundlePricing_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignBundlePricing_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignCategories_Ad(\Dstore\Engine\Om_GetCampaignCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignCategories_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignConditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignConditions_Ad(\Dstore\Engine\Om_GetCampaignConditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignConditions_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignConditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignItemConGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignItemConGroups_Ad(\Dstore\Engine\Om_GetCampaignItemConGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignItemConGroups_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignItemConGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignItemCondParts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignItemCondParts_Ad(\Dstore\Engine\Om_GetCampaignItemCondParts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignItemCondParts_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignItemCondParts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignItemConds_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignItemConds_Ad(\Dstore\Engine\Om_GetCampaignItemConds_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignItemConds_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignItemConds_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignPeriodDefs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignPeriodDefs_Ad(\Dstore\Engine\Om_GetCampaignPeriodDefs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignPeriodDefs_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignPeriodDefs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignPeriods_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignPeriods_Ad(\Dstore\Engine\Om_GetCampaignPeriods_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignPeriods_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignPeriods_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignSettingEntry\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignSettingEntry(\Dstore\Engine\Om_GetCampaignSettingEntry\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignSettingEntry',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignSettingEntry\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignSurcharges_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignSurcharges_Ad(\Dstore\Engine\Om_GetCampaignSurcharges_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignSurcharges_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignSurcharges_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignTypeRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignTypeRules_Ad(\Dstore\Engine\Om_GetCampaignTypeRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignTypeRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignTypeRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignTypes_Ad(\Dstore\Engine\Om_GetCampaignTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaignsInCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaignsInCategories_Ad(\Dstore\Engine\Om_GetCampaignsInCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaignsInCategories_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaignsInCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCampaigns_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCampaigns_Ad(\Dstore\Engine\Om_GetCampaigns_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCampaigns_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCampaigns_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCashAccTransactTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCashAccTransactTypes_Ad(\Dstore\Engine\Om_GetCashAccTransactTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCashAccTransactTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCashAccTransactTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCashAccTransactions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCashAccTransactions_Ad(\Dstore\Engine\Om_GetCashAccTransactions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCashAccTransactions_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCashAccTransactions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCashAccTransactions_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCashAccTransactions_Pu(\Dstore\Engine\Om_GetCashAccTransactions_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCashAccTransactions_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetCashAccTransactions_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCashAccountTypes\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCashAccountTypes(\Dstore\Engine\Om_GetCashAccountTypes\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCashAccountTypes',
      $argument,
      ['\Dstore\Engine\Om_GetCashAccountTypes\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetChangeOStateTrigger_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetChangeOStateTrigger_Ad(\Dstore\Engine\Om_GetChangeOStateTrigger_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetChangeOStateTrigger_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetChangeOStateTrigger_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCurrentCampaigns\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCurrentCampaigns(\Dstore\Engine\Om_GetCurrentCampaigns\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCurrentCampaigns',
      $argument,
      ['\Dstore\Engine\Om_GetCurrentCampaigns\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCustomerCashAccounts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCustomerCashAccounts_Ad(\Dstore\Engine\Om_GetCustomerCashAccounts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCustomerCashAccounts_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetCustomerCashAccounts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetCustomerCashAccounts_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetCustomerCashAccounts_Pu(\Dstore\Engine\Om_GetCustomerCashAccounts_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetCustomerCashAccounts_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetCustomerCashAccounts_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetGroupPaymentForShip_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetGroupPaymentForShip_Ad(\Dstore\Engine\Om_GetGroupPaymentForShip_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetGroupPaymentForShip_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetGroupPaymentForShip_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetGroupSurcharges_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetGroupSurcharges_Ad(\Dstore\Engine\Om_GetGroupSurcharges_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetGroupSurcharges_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetGroupSurcharges_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetNodePaymentForShip_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetNodePaymentForShip_Ad(\Dstore\Engine\Om_GetNodePaymentForShip_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetNodePaymentForShip_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetNodePaymentForShip_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderContentInfoRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderContentInfoRules_Ad(\Dstore\Engine\Om_GetOrderContentInfoRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderContentInfoRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderContentInfoRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderContentInfoTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderContentInfoTypes_Ad(\Dstore\Engine\Om_GetOrderContentInfoTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderContentInfoTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderContentInfoTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderContentInfo_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderContentInfo_Ad(\Dstore\Engine\Om_GetOrderContentInfo_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderContentInfo_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderContentInfo_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderContentInfo_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderContentInfo_Pu(\Dstore\Engine\Om_GetOrderContentInfo_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderContentInfo_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetOrderContentInfo_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderInformationRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderInformationRules_Ad(\Dstore\Engine\Om_GetOrderInformationRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderInformationRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderInformationRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderInformationTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderInformationTypes_Ad(\Dstore\Engine\Om_GetOrderInformationTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderInformationTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderInformationTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderInformation_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderInformation_Ad(\Dstore\Engine\Om_GetOrderInformation_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderInformation_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderInformation_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderInformation_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderInformation_Pu(\Dstore\Engine\Om_GetOrderInformation_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderInformation_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetOrderInformation_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderStateCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderStateCategories_Ad(\Dstore\Engine\Om_GetOrderStateCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderStateCategories_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderStateCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderStateDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderStateDescr_Ad(\Dstore\Engine\Om_GetOrderStateDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderStateDescr_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderStateDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderStateHistory_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderStateHistory_Ad(\Dstore\Engine\Om_GetOrderStateHistory_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderStateHistory_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderStateHistory_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderStateHistory_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderStateHistory_Pu(\Dstore\Engine\Om_GetOrderStateHistory_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderStateHistory_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetOrderStateHistory_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderStateRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderStateRules_Ad(\Dstore\Engine\Om_GetOrderStateRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderStateRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderStateRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderStatesInCats\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderStatesInCats(\Dstore\Engine\Om_GetOrderStatesInCats\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderStatesInCats',
      $argument,
      ['\Dstore\Engine\Om_GetOrderStatesInCats\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderStatesInCats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderStatesInCats_Ad(\Dstore\Engine\Om_GetOrderStatesInCats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderStatesInCats_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderStatesInCats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderStates_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderStates_Ad(\Dstore\Engine\Om_GetOrderStates_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderStates_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderStates_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderSurchInfoTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderSurchInfoTypes_Ad(\Dstore\Engine\Om_GetOrderSurchInfoTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderSurchInfoTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderSurchInfoTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderSurchargeInfo_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderSurchargeInfo_Ad(\Dstore\Engine\Om_GetOrderSurchargeInfo_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderSurchargeInfo_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderSurchargeInfo_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderSurchargeInfo_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderSurchargeInfo_Pu(\Dstore\Engine\Om_GetOrderSurchargeInfo_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderSurchargeInfo_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetOrderSurchargeInfo_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderSurcharges_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderSurcharges_Ad(\Dstore\Engine\Om_GetOrderSurcharges_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderSurcharges_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrderSurcharges_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrderSurcharges_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrderSurcharges_Pu(\Dstore\Engine\Om_GetOrderSurcharges_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrderSurcharges_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetOrderSurcharges_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrders_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrders_Ad(\Dstore\Engine\Om_GetOrders_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrders_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrders_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrders_Conditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrders_Conditions_Ad(\Dstore\Engine\Om_GetOrders_Conditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrders_Conditions_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOrders_Conditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOrders_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOrders_Pu(\Dstore\Engine\Om_GetOrders_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOrders_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetOrders_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOtherBillContInfRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOtherBillContInfRules_Ad(\Dstore\Engine\Om_GetOtherBillContInfRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOtherBillContInfRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOtherBillContInfRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetOtherBillContInfTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetOtherBillContInfTypes_Ad(\Dstore\Engine\Om_GetOtherBillContInfTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetOtherBillContInfTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetOtherBillContInfTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPaymentAndShipping_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPaymentAndShipping_Pu(\Dstore\Engine\Om_GetPaymentAndShipping_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPaymentAndShipping_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetPaymentAndShipping_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPaymentCost_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPaymentCost_Pu(\Dstore\Engine\Om_GetPaymentCost_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPaymentCost_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetPaymentCost_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPaymentForShipping_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPaymentForShipping_Ad(\Dstore\Engine\Om_GetPaymentForShipping_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPaymentForShipping_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPaymentForShipping_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPaymentForShipping_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPaymentForShipping_Pu(\Dstore\Engine\Om_GetPaymentForShipping_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPaymentForShipping_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetPaymentForShipping_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPaymentTypeDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPaymentTypeDescr_Ad(\Dstore\Engine\Om_GetPaymentTypeDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPaymentTypeDescr_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPaymentTypeDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPaymentTypeSurcharges_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPaymentTypeSurcharges_Ad(\Dstore\Engine\Om_GetPaymentTypeSurcharges_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPaymentTypeSurcharges_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPaymentTypeSurcharges_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPaymentTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPaymentTypes_Ad(\Dstore\Engine\Om_GetPaymentTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPaymentTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPaymentTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPersonInfoForOrders_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPersonInfoForOrders_Ad(\Dstore\Engine\Om_GetPersonInfoForOrders_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPersonInfoForOrders_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPersonInfoForOrders_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPersonSurcharges_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPersonSurcharges_Ad(\Dstore\Engine\Om_GetPersonSurcharges_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPersonSurcharges_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPersonSurcharges_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPredefinedBillContent_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPredefinedBillContent_Ad(\Dstore\Engine\Om_GetPredefinedBillContent_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPredefinedBillContent_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPredefinedBillContent_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPrepaidCodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPrepaidCodes_Ad(\Dstore\Engine\Om_GetPrepaidCodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPrepaidCodes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPrepaidCodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPrices_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPrices_Ad(\Dstore\Engine\Om_GetPrices_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPrices_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPrices_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPrices_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPrices_Pu(\Dstore\Engine\Om_GetPrices_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPrices_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetPrices_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPurchaseOrderQueues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPurchaseOrderQueues_Ad(\Dstore\Engine\Om_GetPurchaseOrderQueues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPurchaseOrderQueues_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPurchaseOrderQueues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPurchaseOrderTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPurchaseOrderTypes_Ad(\Dstore\Engine\Om_GetPurchaseOrderTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPurchaseOrderTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPurchaseOrderTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetPurchasePrices_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetPurchasePrices_Ad(\Dstore\Engine\Om_GetPurchasePrices_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetPurchasePrices_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetPurchasePrices_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetRequiredInfoForPay_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetRequiredInfoForPay_Ad(\Dstore\Engine\Om_GetRequiredInfoForPay_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetRequiredInfoForPay_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetRequiredInfoForPay_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetSetsForBonItBenefits_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetSetsForBonItBenefits_Ad(\Dstore\Engine\Om_GetSetsForBonItBenefits_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetSetsForBonItBenefits_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetSetsForBonItBenefits_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetSetsForBundleBenefits_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetSetsForBundleBenefits_Ad(\Dstore\Engine\Om_GetSetsForBundleBenefits_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetSetsForBundleBenefits_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetSetsForBundleBenefits_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetShippTypeSurcharges_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetShippTypeSurcharges_Ad(\Dstore\Engine\Om_GetShippTypeSurcharges_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetShippTypeSurcharges_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetShippTypeSurcharges_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetShippingCost_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetShippingCost_Pu(\Dstore\Engine\Om_GetShippingCost_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetShippingCost_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetShippingCost_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetShippingTypeDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetShippingTypeDescr_Ad(\Dstore\Engine\Om_GetShippingTypeDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetShippingTypeDescr_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetShippingTypeDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetShippingTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetShippingTypes_Ad(\Dstore\Engine\Om_GetShippingTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetShippingTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetShippingTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetSupplierConfiguration_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetSupplierConfiguration_Ad(\Dstore\Engine\Om_GetSupplierConfiguration_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetSupplierConfiguration_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetSupplierConfiguration_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetSurchargeTypeCategories\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetSurchargeTypeCategories(\Dstore\Engine\Om_GetSurchargeTypeCategories\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetSurchargeTypeCategories',
      $argument,
      ['\Dstore\Engine\Om_GetSurchargeTypeCategories\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetSurchargeTypeTaxes\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetSurchargeTypeTaxes(\Dstore\Engine\Om_GetSurchargeTypeTaxes\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetSurchargeTypeTaxes',
      $argument,
      ['\Dstore\Engine\Om_GetSurchargeTypeTaxes\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetSurchargeTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetSurchargeTypes_Ad(\Dstore\Engine\Om_GetSurchargeTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetSurchargeTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetSurchargeTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetSurcharges_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetSurcharges_Pu(\Dstore\Engine\Om_GetSurcharges_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetSurcharges_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetSurcharges_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTaxTypes\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTaxTypes(\Dstore\Engine\Om_GetTaxTypes\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTaxTypes',
      $argument,
      ['\Dstore\Engine\Om_GetTaxTypes\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTaxes\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTaxes(\Dstore\Engine\Om_GetTaxes\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTaxes',
      $argument,
      ['\Dstore\Engine\Om_GetTaxes\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTimeUnitsForCPeriods_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTimeUnitsForCPeriods_Ad(\Dstore\Engine\Om_GetTimeUnitsForCPeriods_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTimeUnitsForCPeriods_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetTimeUnitsForCPeriods_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTransactionMetaInfo_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTransactionMetaInfo_Ad(\Dstore\Engine\Om_GetTransactionMetaInfo_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTransactionMetaInfo_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetTransactionMetaInfo_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTrolleyAsMatrix_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTrolleyAsMatrix_Pu(\Dstore\Engine\Om_GetTrolleyAsMatrix_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTrolleyAsMatrix_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetTrolleyAsMatrix_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTrolleyContInfoTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTrolleyContInfoTypes_Ad(\Dstore\Engine\Om_GetTrolleyContInfoTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTrolleyContInfoTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetTrolleyContInfoTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTrolleyContentInfo_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTrolleyContentInfo_Pu(\Dstore\Engine\Om_GetTrolleyContentInfo_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTrolleyContentInfo_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetTrolleyContentInfo_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTrolleyInfoTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTrolleyInfoTypes_Ad(\Dstore\Engine\Om_GetTrolleyInfoTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTrolleyInfoTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetTrolleyInfoTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTrolleyInformation_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTrolleyInformation_Pu(\Dstore\Engine\Om_GetTrolleyInformation_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTrolleyInformation_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetTrolleyInformation_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTrolleySurchInfoTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTrolleySurchInfoTypes_Ad(\Dstore\Engine\Om_GetTrolleySurchInfoTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTrolleySurchInfoTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetTrolleySurchInfoTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTrolleySurchargeInfo_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTrolleySurchargeInfo_Pu(\Dstore\Engine\Om_GetTrolleySurchargeInfo_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTrolleySurchargeInfo_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetTrolleySurchargeInfo_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTrolleySurcharges_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTrolleySurcharges_Pu(\Dstore\Engine\Om_GetTrolleySurcharges_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTrolleySurcharges_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetTrolleySurcharges_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTrolley_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTrolley_Pu(\Dstore\Engine\Om_GetTrolley_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTrolley_Pu',
      $argument,
      ['\Dstore\Engine\Om_GetTrolley_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetTrolleys_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetTrolleys_Ad(\Dstore\Engine\Om_GetTrolleys_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetTrolleys_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetTrolleys_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetUsedVoucherCodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetUsedVoucherCodes_Ad(\Dstore\Engine\Om_GetUsedVoucherCodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetUsedVoucherCodes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetUsedVoucherCodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetVCodeOriginTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetVCodeOriginTypes_Ad(\Dstore\Engine\Om_GetVCodeOriginTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetVCodeOriginTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetVCodeOriginTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetVoucherCodes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetVoucherCodes_Ad(\Dstore\Engine\Om_GetVoucherCodes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetVoucherCodes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetVoucherCodes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetVoucherTypeStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetVoucherTypeStatistics_Ad(\Dstore\Engine\Om_GetVoucherTypeStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetVoucherTypeStatistics_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetVoucherTypeStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetVoucherTypeSurcharges_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetVoucherTypeSurcharges_Ad(\Dstore\Engine\Om_GetVoucherTypeSurcharges_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetVoucherTypeSurcharges_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetVoucherTypeSurcharges_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_GetVoucherTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_GetVoucherTypes_Ad(\Dstore\Engine\Om_GetVoucherTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_GetVoucherTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_GetVoucherTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_InsertIntoTrolley_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_InsertIntoTrolley_Pu(\Dstore\Engine\Om_InsertIntoTrolley_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_InsertIntoTrolley_Pu',
      $argument,
      ['\Dstore\Engine\Om_InsertIntoTrolley_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyBonusItemSets_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyBonusItemSets_Ad(\Dstore\Engine\Om_ModifyBonusItemSets_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyBonusItemSets_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyBonusItemSets_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyBundleItemSets_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyBundleItemSets_Ad(\Dstore\Engine\Om_ModifyBundleItemSets_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyBundleItemSets_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyBundleItemSets_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampBundlePricing_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampBundlePricing_Ad(\Dstore\Engine\Om_ModifyCampBundlePricing_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampBundlePricing_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampBundlePricing_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampItemConGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampItemConGroups_Ad(\Dstore\Engine\Om_ModifyCampItemConGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampItemConGroups_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampItemConGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampItemCondParts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampItemCondParts_Ad(\Dstore\Engine\Om_ModifyCampItemCondParts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampItemCondParts_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampItemCondParts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampOrderSurchDisc_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampOrderSurchDisc_Ad(\Dstore\Engine\Om_ModifyCampOrderSurchDisc_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampOrderSurchDisc_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampOrderSurchDisc_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampPaymentCond_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampPaymentCond_Ad(\Dstore\Engine\Om_ModifyCampPaymentCond_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampPaymentCond_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampPaymentCond_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampPersGroupCond_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampPersGroupCond_Ad(\Dstore\Engine\Om_ModifyCampPersGroupCond_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampPersGroupCond_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampPersGroupCond_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampShippingCond_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampShippingCond_Ad(\Dstore\Engine\Om_ModifyCampShippingCond_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampShippingCond_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampShippingCond_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampTrolleyValCond_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampTrolleyValCond_Ad(\Dstore\Engine\Om_ModifyCampTrolleyValCond_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampTrolleyValCond_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampTrolleyValCond_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampVouchCodeConds_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampVouchCodeConds_Ad(\Dstore\Engine\Om_ModifyCampVouchCodeConds_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampVouchCodeConds_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampVouchCodeConds_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaignBenefits_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaignBenefits_Ad(\Dstore\Engine\Om_ModifyCampaignBenefits_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaignBenefits_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaignBenefits_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaignBonusItems_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaignBonusItems_Ad(\Dstore\Engine\Om_ModifyCampaignBonusItems_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaignBonusItems_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaignBonusItems_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaignCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaignCategories_Ad(\Dstore\Engine\Om_ModifyCampaignCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaignCategories_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaignCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaignConditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaignConditions_Ad(\Dstore\Engine\Om_ModifyCampaignConditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaignConditions_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaignConditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaignItemConds_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaignItemConds_Ad(\Dstore\Engine\Om_ModifyCampaignItemConds_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaignItemConds_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaignItemConds_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaignPeriodDefs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaignPeriodDefs_Ad(\Dstore\Engine\Om_ModifyCampaignPeriodDefs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaignPeriodDefs_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaignPeriodDefs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaignSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaignSettings_Ad(\Dstore\Engine\Om_ModifyCampaignSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaignSettings_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaignSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaignSurcharges_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaignSurcharges_Ad(\Dstore\Engine\Om_ModifyCampaignSurcharges_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaignSurcharges_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaignSurcharges_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaignTypeRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaignTypeRules_Ad(\Dstore\Engine\Om_ModifyCampaignTypeRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaignTypeRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaignTypeRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaignTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaignTypes_Ad(\Dstore\Engine\Om_ModifyCampaignTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaignTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaignTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampaigns_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampaigns_Ad(\Dstore\Engine\Om_ModifyCampaigns_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampaigns_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampaigns_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCampsInCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCampsInCategories_Ad(\Dstore\Engine\Om_ModifyCampsInCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCampsInCategories_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCampsInCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyChangeOStatTrigger_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyChangeOStatTrigger_Ad(\Dstore\Engine\Om_ModifyChangeOStatTrigger_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyChangeOStatTrigger_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyChangeOStatTrigger_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyCustomerCashAcc_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyCustomerCashAcc_Ad(\Dstore\Engine\Om_ModifyCustomerCashAcc_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyCustomerCashAcc_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyCustomerCashAcc_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyGroupPayForShip_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyGroupPayForShip_Ad(\Dstore\Engine\Om_ModifyGroupPayForShip_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyGroupPayForShip_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyGroupPayForShip_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyGroupSurcharges_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyGroupSurcharges_Ad(\Dstore\Engine\Om_ModifyGroupSurcharges_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyGroupSurcharges_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyGroupSurcharges_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyNodePaymentForShip_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyNodePaymentForShip_Ad(\Dstore\Engine\Om_ModifyNodePaymentForShip_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyNodePaymentForShip_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyNodePaymentForShip_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderContInfoRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderContInfoRules_Ad(\Dstore\Engine\Om_ModifyOrderContInfoRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderContInfoRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderContInfoRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderContInfoTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderContInfoTypes_Ad(\Dstore\Engine\Om_ModifyOrderContInfoTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderContInfoTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderContInfoTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderContentInfo_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderContentInfo_Ad(\Dstore\Engine\Om_ModifyOrderContentInfo_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderContentInfo_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderContentInfo_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderContent_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderContent_Ad(\Dstore\Engine\Om_ModifyOrderContent_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderContent_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderContent_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderInfoRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderInfoRules_Ad(\Dstore\Engine\Om_ModifyOrderInfoRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderInfoRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderInfoRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderInfoTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderInfoTypes_Ad(\Dstore\Engine\Om_ModifyOrderInfoTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderInfoTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderInfoTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderInformation_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderInformation_Ad(\Dstore\Engine\Om_ModifyOrderInformation_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderInformation_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderInformation_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderInformation_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderInformation_Pu(\Dstore\Engine\Om_ModifyOrderInformation_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderInformation_Pu',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderInformation_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderStateCats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderStateCats_Ad(\Dstore\Engine\Om_ModifyOrderStateCats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderStateCats_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderStateCats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderStateDescTran_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderStateDescTran_Ad(\Dstore\Engine\Om_ModifyOrderStateDescTran_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderStateDescTran_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderStateDescTran_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderStateRules_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderStateRules_Ad(\Dstore\Engine\Om_ModifyOrderStateRules_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderStateRules_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderStateRules_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderStatesInCats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderStatesInCats_Ad(\Dstore\Engine\Om_ModifyOrderStatesInCats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderStatesInCats_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderStatesInCats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderStates_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderStates_Ad(\Dstore\Engine\Om_ModifyOrderStates_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderStates_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderStates_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrderSurchInfTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrderSurchInfTypes_Ad(\Dstore\Engine\Om_ModifyOrderSurchInfTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrderSurchInfTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrderSurchInfTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyOrder_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyOrder_Ad(\Dstore\Engine\Om_ModifyOrder_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyOrder_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyOrder_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyPayForShipDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyPayForShipDescr_Ad(\Dstore\Engine\Om_ModifyPayForShipDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyPayForShipDescr_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyPayForShipDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyPaymentForShipping_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyPaymentForShipping_Ad(\Dstore\Engine\Om_ModifyPaymentForShipping_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyPaymentForShipping_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyPaymentForShipping_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyPaymentTypeDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyPaymentTypeDescr_Ad(\Dstore\Engine\Om_ModifyPaymentTypeDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyPaymentTypeDescr_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyPaymentTypeDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyPaymentTypeSurch_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyPaymentTypeSurch_Ad(\Dstore\Engine\Om_ModifyPaymentTypeSurch_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyPaymentTypeSurch_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyPaymentTypeSurch_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyPaymentTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyPaymentTypes_Ad(\Dstore\Engine\Om_ModifyPaymentTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyPaymentTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyPaymentTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyPersonSurcharges_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyPersonSurcharges_Ad(\Dstore\Engine\Om_ModifyPersonSurcharges_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyPersonSurcharges_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyPersonSurcharges_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyPredefBillContent_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyPredefBillContent_Ad(\Dstore\Engine\Om_ModifyPredefBillContent_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyPredefBillContent_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyPredefBillContent_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyPurchaseOrderQueue_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyPurchaseOrderQueue_Ad(\Dstore\Engine\Om_ModifyPurchaseOrderQueue_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyPurchaseOrderQueue_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyPurchaseOrderQueue_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyPurchaseOrderTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyPurchaseOrderTypes_Ad(\Dstore\Engine\Om_ModifyPurchaseOrderTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyPurchaseOrderTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyPurchaseOrderTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyRequiredInfoForPay_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyRequiredInfoForPay_Ad(\Dstore\Engine\Om_ModifyRequiredInfoForPay_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyRequiredInfoForPay_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyRequiredInfoForPay_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifySetsForBonItBenefs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifySetsForBonItBenefs_Ad(\Dstore\Engine\Om_ModifySetsForBonItBenefs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifySetsForBonItBenefs_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifySetsForBonItBenefs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifySetsForBunBenefits_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifySetsForBunBenefits_Ad(\Dstore\Engine\Om_ModifySetsForBunBenefits_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifySetsForBunBenefits_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifySetsForBunBenefits_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyShippingTypeDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyShippingTypeDescr_Ad(\Dstore\Engine\Om_ModifyShippingTypeDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyShippingTypeDescr_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyShippingTypeDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyShippingTypeSurch_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyShippingTypeSurch_Ad(\Dstore\Engine\Om_ModifyShippingTypeSurch_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyShippingTypeSurch_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyShippingTypeSurch_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyShippingTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyShippingTypes_Ad(\Dstore\Engine\Om_ModifyShippingTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyShippingTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyShippingTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifySurchargeTypeCats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifySurchargeTypeCats_Ad(\Dstore\Engine\Om_ModifySurchargeTypeCats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifySurchargeTypeCats_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifySurchargeTypeCats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifySurchargeTypeDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifySurchargeTypeDescr_Ad(\Dstore\Engine\Om_ModifySurchargeTypeDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifySurchargeTypeDescr_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifySurchargeTypeDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifySurchargeTypeTaxes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifySurchargeTypeTaxes_Ad(\Dstore\Engine\Om_ModifySurchargeTypeTaxes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifySurchargeTypeTaxes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifySurchargeTypeTaxes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifySurchargeTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifySurchargeTypes_Ad(\Dstore\Engine\Om_ModifySurchargeTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifySurchargeTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifySurchargeTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyTaxTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyTaxTypes_Ad(\Dstore\Engine\Om_ModifyTaxTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyTaxTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyTaxTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyTaxes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyTaxes_Ad(\Dstore\Engine\Om_ModifyTaxes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyTaxes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyTaxes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyTrolleyCInfoTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyTrolleyCInfoTypes_Ad(\Dstore\Engine\Om_ModifyTrolleyCInfoTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyTrolleyCInfoTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyTrolleyCInfoTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyTrolleyContentInfo_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyTrolleyContentInfo_Pu(\Dstore\Engine\Om_ModifyTrolleyContentInfo_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyTrolleyContentInfo_Pu',
      $argument,
      ['\Dstore\Engine\Om_ModifyTrolleyContentInfo_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyTrolleyInfoTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyTrolleyInfoTypes_Ad(\Dstore\Engine\Om_ModifyTrolleyInfoTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyTrolleyInfoTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyTrolleyInfoTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyTrolleyInformation_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyTrolleyInformation_Pu(\Dstore\Engine\Om_ModifyTrolleyInformation_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyTrolleyInformation_Pu',
      $argument,
      ['\Dstore\Engine\Om_ModifyTrolleyInformation_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyTrolleySurInfTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyTrolleySurInfTypes_Ad(\Dstore\Engine\Om_ModifyTrolleySurInfTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyTrolleySurInfTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyTrolleySurInfTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyVoucherCodeValid_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyVoucherCodeValid_Ad(\Dstore\Engine\Om_ModifyVoucherCodeValid_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyVoucherCodeValid_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyVoucherCodeValid_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyVoucherTypeSurch_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyVoucherTypeSurch_Ad(\Dstore\Engine\Om_ModifyVoucherTypeSurch_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyVoucherTypeSurch_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyVoucherTypeSurch_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ModifyVoucherTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ModifyVoucherTypes_Ad(\Dstore\Engine\Om_ModifyVoucherTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ModifyVoucherTypes_Ad',
      $argument,
      ['\Dstore\Engine\Om_ModifyVoucherTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_PerformCashAccTransact_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_PerformCashAccTransact_Ad(\Dstore\Engine\Om_PerformCashAccTransact_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_PerformCashAccTransact_Ad',
      $argument,
      ['\Dstore\Engine\Om_PerformCashAccTransact_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_RedeemPrepaidCode_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_RedeemPrepaidCode_Pu(\Dstore\Engine\Om_RedeemPrepaidCode_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_RedeemPrepaidCode_Pu',
      $argument,
      ['\Dstore\Engine\Om_RedeemPrepaidCode_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_RemoveVoucherFromTrolley_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_RemoveVoucherFromTrolley_Pu(\Dstore\Engine\Om_RemoveVoucherFromTrolley_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_RemoveVoucherFromTrolley_Pu',
      $argument,
      ['\Dstore\Engine\Om_RemoveVoucherFromTrolley_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_SearchOrderNo_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_SearchOrderNo_Ad(\Dstore\Engine\Om_SearchOrderNo_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_SearchOrderNo_Ad',
      $argument,
      ['\Dstore\Engine\Om_SearchOrderNo_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_UpdateTrolley_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_UpdateTrolley_Pu(\Dstore\Engine\Om_UpdateTrolley_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_UpdateTrolley_Pu',
      $argument,
      ['\Dstore\Engine\Om_UpdateTrolley_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Om_ValidateVoucherCode_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function om_ValidateVoucherCode_Pu(\Dstore\Engine\Om_ValidateVoucherCode_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/om_ValidateVoucherCode_Pu',
      $argument,
      ['\Dstore\Engine\Om_ValidateVoucherCode_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_AdressenCheck_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_AdressenCheck_Pu(\Dstore\Engine\Pm_AdressenCheck_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_AdressenCheck_Pu',
      $argument,
      ['\Dstore\Engine\Pm_AdressenCheck_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_AlphabetizeCharacValues_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_AlphabetizeCharacValues_Ad(\Dstore\Engine\Pm_AlphabetizeCharacValues_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_AlphabetizeCharacValues_Ad',
      $argument,
      ['\Dstore\Engine\Pm_AlphabetizeCharacValues_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_CheckPersonIdentity_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_CheckPersonIdentity_Pu(\Dstore\Engine\Pm_CheckPersonIdentity_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_CheckPersonIdentity_Pu',
      $argument,
      ['\Dstore\Engine\Pm_CheckPersonIdentity_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_CloseARelationship_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_CloseARelationship_Pu(\Dstore\Engine\Pm_CloseARelationship_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_CloseARelationship_Pu',
      $argument,
      ['\Dstore\Engine\Pm_CloseARelationship_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_CloseVisitorPersons_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_CloseVisitorPersons_Pu(\Dstore\Engine\Pm_CloseVisitorPersons_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_CloseVisitorPersons_Pu',
      $argument,
      ['\Dstore\Engine\Pm_CloseVisitorPersons_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ConfigureValueColumns_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ConfigureValueColumns_Ad(\Dstore\Engine\Pm_ConfigureValueColumns_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ConfigureValueColumns_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ConfigureValueColumns_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ConsistencyCheck_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ConsistencyCheck_Ad(\Dstore\Engine\Pm_ConsistencyCheck_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ConsistencyCheck_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ConsistencyCheck_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_DeleteAllPersonsOfPType_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_DeleteAllPersonsOfPType_Ad(\Dstore\Engine\Pm_DeleteAllPersonsOfPType_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_DeleteAllPersonsOfPType_Ad',
      $argument,
      ['\Dstore\Engine\Pm_DeleteAllPersonsOfPType_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_DeleteDispensablePersons_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_DeleteDispensablePersons_Ad(\Dstore\Engine\Pm_DeleteDispensablePersons_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_DeleteDispensablePersons_Ad',
      $argument,
      ['\Dstore\Engine\Pm_DeleteDispensablePersons_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_DeleteInterfaceTables_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_DeleteInterfaceTables_Ad(\Dstore\Engine\Pm_DeleteInterfaceTables_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_DeleteInterfaceTables_Ad',
      $argument,
      ['\Dstore\Engine\Pm_DeleteInterfaceTables_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_DeletePerson_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_DeletePerson_Ad(\Dstore\Engine\Pm_DeletePerson_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_DeletePerson_Ad',
      $argument,
      ['\Dstore\Engine\Pm_DeletePerson_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_DeletePerson_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_DeletePerson_Pu(\Dstore\Engine\Pm_DeletePerson_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_DeletePerson_Pu',
      $argument,
      ['\Dstore\Engine\Pm_DeletePerson_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ExportPersonData_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ExportPersonData_Ad(\Dstore\Engine\Pm_ExportPersonData_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ExportPersonData_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ExportPersonData_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_FormARelationship_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_FormARelationship_Pu(\Dstore\Engine\Pm_FormARelationship_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_FormARelationship_Pu',
      $argument,
      ['\Dstore\Engine\Pm_FormARelationship_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetEncryptionAlgorithm_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetEncryptionAlgorithm_Pu(\Dstore\Engine\Pm_GetEncryptionAlgorithm_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetEncryptionAlgorithm_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetEncryptionAlgorithm_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetGroupConditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetGroupConditions_Ad(\Dstore\Engine\Pm_GetGroupConditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetGroupConditions_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetGroupConditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetGroupsForOnePerson_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetGroupsForOnePerson_Pu(\Dstore\Engine\Pm_GetGroupsForOnePerson_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetGroupsForOnePerson_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetGroupsForOnePerson_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetGroups_Ad(\Dstore\Engine\Pm_GetGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetGroups_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetImportErrors_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetImportErrors_Ad(\Dstore\Engine\Pm_GetImportErrors_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetImportErrors_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetImportErrors_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetLockedPersonTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetLockedPersonTypes_Ad(\Dstore\Engine\Pm_GetLockedPersonTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetLockedPersonTypes_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetLockedPersonTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetMostRecentUniqueID_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetMostRecentUniqueID_Pu(\Dstore\Engine\Pm_GetMostRecentUniqueID_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetMostRecentUniqueID_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetMostRecentUniqueID_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPChAccRestrForGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPChAccRestrForGroups_Ad(\Dstore\Engine\Pm_GetPChAccRestrForGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPChAccRestrForGroups_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPChAccRestrForGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPChAccRestrForUsers_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPChAccRestrForUsers_Ad(\Dstore\Engine\Pm_GetPChAccRestrForUsers_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPChAccRestrForUsers_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPChAccRestrForUsers_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPeriodsForPredefVals_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPeriodsForPredefVals_Ad(\Dstore\Engine\Pm_GetPeriodsForPredefVals_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPeriodsForPredefVals_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPeriodsForPredefVals_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonAccessCharacs_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonAccessCharacs_Pu(\Dstore\Engine\Pm_GetPersonAccessCharacs_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonAccessCharacs_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonAccessCharacs_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonBinaries_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonBinaries_Ad(\Dstore\Engine\Pm_GetPersonBinaries_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonBinaries_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonBinaries_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonBinaries_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonBinaries_Pu(\Dstore\Engine\Pm_GetPersonBinaries_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonBinaries_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonBinaries_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonCharacCats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonCharacCats_Ad(\Dstore\Engine\Pm_GetPersonCharacCats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonCharacCats_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonCharacCats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonCharacDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonCharacDescr_Ad(\Dstore\Engine\Pm_GetPersonCharacDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonCharacDescr_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonCharacDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonCharacValueID_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonCharacValueID_Ad(\Dstore\Engine\Pm_GetPersonCharacValueID_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonCharacValueID_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonCharacValueID_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonCharacsInCats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonCharacsInCats_Ad(\Dstore\Engine\Pm_GetPersonCharacsInCats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonCharacsInCats_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonCharacsInCats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonCharacteristics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonCharacteristics_Ad(\Dstore\Engine\Pm_GetPersonCharacteristics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonCharacteristics_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonCharacteristics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonCharacteristics_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonCharacteristics_Pu(\Dstore\Engine\Pm_GetPersonCharacteristics_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonCharacteristics_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonCharacteristics_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonDetails_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonDetails_Ad(\Dstore\Engine\Pm_GetPersonDetails_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonDetails_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonDetails_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonDetails_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonDetails_Pu(\Dstore\Engine\Pm_GetPersonDetails_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonDetails_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonDetails_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonIdentCharacs_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonIdentCharacs_Pu(\Dstore\Engine\Pm_GetPersonIdentCharacs_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonIdentCharacs_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonIdentCharacs_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonMetaInformation_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonMetaInformation_Ad(\Dstore\Engine\Pm_GetPersonMetaInformation_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonMetaInformation_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonMetaInformation_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonOutputCharacs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonOutputCharacs_Ad(\Dstore\Engine\Pm_GetPersonOutputCharacs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonOutputCharacs_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonOutputCharacs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonPredefinedVals_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonPredefinedVals_Ad(\Dstore\Engine\Pm_GetPersonPredefinedVals_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonPredefinedVals_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonPredefinedVals_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonPredefinedVals_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonPredefinedVals_Pu(\Dstore\Engine\Pm_GetPersonPredefinedVals_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonPredefinedVals_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonPredefinedVals_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonPropertiesHist_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonPropertiesHist_Ad(\Dstore\Engine\Pm_GetPersonPropertiesHist_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonPropertiesHist_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonPropertiesHist_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonProperties_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonProperties_Ad(\Dstore\Engine\Pm_GetPersonProperties_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonProperties_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonProperties_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonProperties_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonProperties_Pu(\Dstore\Engine\Pm_GetPersonProperties_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonProperties_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonProperties_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonRelationships_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonRelationships_Ad(\Dstore\Engine\Pm_GetPersonRelationships_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonRelationships_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonRelationships_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonRelationships_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonRelationships_Pu(\Dstore\Engine\Pm_GetPersonRelationships_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonRelationships_Pu',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonRelationships_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonTypeMetaInfo_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonTypeMetaInfo_Ad(\Dstore\Engine\Pm_GetPersonTypeMetaInfo_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonTypeMetaInfo_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonTypeMetaInfo_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonTypeSettingEntry\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonTypeSettingEntry(\Dstore\Engine\Pm_GetPersonTypeSettingEntry\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonTypeSettingEntry',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonTypeSettingEntry\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonTypeSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonTypeSettings_Ad(\Dstore\Engine\Pm_GetPersonTypeSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonTypeSettings_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonTypeSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersonTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersonTypes_Ad(\Dstore\Engine\Pm_GetPersonTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersonTypes_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersonTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersons_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersons_Ad(\Dstore\Engine\Pm_GetPersons_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersons_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersons_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPersons_Conditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPersons_Conditions_Ad(\Dstore\Engine\Pm_GetPersons_Conditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPersons_Conditions_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPersons_Conditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetPossibleDuplicates_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetPossibleDuplicates_Ad(\Dstore\Engine\Pm_GetPossibleDuplicates_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetPossibleDuplicates_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetPossibleDuplicates_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetRelationAccessLevels\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetRelationAccessLevels(\Dstore\Engine\Pm_GetRelationAccessLevels\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetRelationAccessLevels',
      $argument,
      ['\Dstore\Engine\Pm_GetRelationAccessLevels\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetRelationshipSettingEntry\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetRelationshipSettingEntry(\Dstore\Engine\Pm_GetRelationshipSettingEntry\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetRelationshipSettingEntry',
      $argument,
      ['\Dstore\Engine\Pm_GetRelationshipSettingEntry\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetRelationshipSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetRelationshipSettings_Ad(\Dstore\Engine\Pm_GetRelationshipSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetRelationshipSettings_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetRelationshipSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_GetRelationships_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_GetRelationships_Ad(\Dstore\Engine\Pm_GetRelationships_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_GetRelationships_Ad',
      $argument,
      ['\Dstore\Engine\Pm_GetRelationships_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ImportPersonData_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ImportPersonData_Ad(\Dstore\Engine\Pm_ImportPersonData_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ImportPersonData_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ImportPersonData_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_InsertNewPerson_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_InsertNewPerson_Ad(\Dstore\Engine\Pm_InsertNewPerson_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_InsertNewPerson_Ad',
      $argument,
      ['\Dstore\Engine\Pm_InsertNewPerson_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_InsertNewPerson_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_InsertNewPerson_Pu(\Dstore\Engine\Pm_InsertNewPerson_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_InsertNewPerson_Pu',
      $argument,
      ['\Dstore\Engine\Pm_InsertNewPerson_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyBinariesForPersons_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyBinariesForPersons_Ad(\Dstore\Engine\Pm_ModifyBinariesForPersons_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyBinariesForPersons_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyBinariesForPersons_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyBinariesForPersons_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyBinariesForPersons_Pu(\Dstore\Engine\Pm_ModifyBinariesForPersons_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyBinariesForPersons_Pu',
      $argument,
      ['\Dstore\Engine\Pm_ModifyBinariesForPersons_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyConditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyConditions_Ad(\Dstore\Engine\Pm_ModifyConditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyConditions_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyConditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyGroupConditions_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyGroupConditions_Ad(\Dstore\Engine\Pm_ModifyGroupConditions_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyGroupConditions_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyGroupConditions_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyGroups_Ad(\Dstore\Engine\Pm_ModifyGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyGroups_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyLockedPersonTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyLockedPersonTypes_Ad(\Dstore\Engine\Pm_ModifyLockedPersonTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyLockedPersonTypes_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyLockedPersonTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPChAccResForGroup_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPChAccResForGroup_Ad(\Dstore\Engine\Pm_ModifyPChAccResForGroup_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPChAccResForGroup_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPChAccResForGroup_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPChAccResForUser_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPChAccResForUser_Ad(\Dstore\Engine\Pm_ModifyPChAccResForUser_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPChAccResForUser_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPChAccResForUser_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPeriodsForPredVals_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPeriodsForPredVals_Ad(\Dstore\Engine\Pm_ModifyPeriodsForPredVals_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPeriodsForPredVals_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPeriodsForPredVals_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonCharacCats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonCharacCats_Ad(\Dstore\Engine\Pm_ModifyPersonCharacCats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonCharacCats_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonCharacCats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonCharacDescr_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonCharacDescr_Ad(\Dstore\Engine\Pm_ModifyPersonCharacDescr_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonCharacDescr_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonCharacDescr_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonCharacsInCat_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonCharacsInCat_Ad(\Dstore\Engine\Pm_ModifyPersonCharacsInCat_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonCharacsInCat_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonCharacsInCat_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonCharacs_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonCharacs_Ad(\Dstore\Engine\Pm_ModifyPersonCharacs_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonCharacs_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonCharacs_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonData_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonData_Ad(\Dstore\Engine\Pm_ModifyPersonData_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonData_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonData_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonData_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonData_Pu(\Dstore\Engine\Pm_ModifyPersonData_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonData_Pu',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonData_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonDetails_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonDetails_Ad(\Dstore\Engine\Pm_ModifyPersonDetails_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonDetails_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonDetails_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonDetails_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonDetails_Pu(\Dstore\Engine\Pm_ModifyPersonDetails_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonDetails_Pu',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonDetails_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonPredefVals_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonPredefVals_Ad(\Dstore\Engine\Pm_ModifyPersonPredefVals_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonPredefVals_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonPredefVals_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonRelationship_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonRelationship_Ad(\Dstore\Engine\Pm_ModifyPersonRelationship_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonRelationship_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonRelationship_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonRelationship_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonRelationship_Pu(\Dstore\Engine\Pm_ModifyPersonRelationship_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonRelationship_Pu',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonRelationship_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonTypeSettings_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonTypeSettings_Ad(\Dstore\Engine\Pm_ModifyPersonTypeSettings_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonTypeSettings_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonTypeSettings_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonTypes_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonTypes_Ad(\Dstore\Engine\Pm_ModifyPersonTypes_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonTypes_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonTypes_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyPersonsInGroups_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyPersonsInGroups_Ad(\Dstore\Engine\Pm_ModifyPersonsInGroups_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyPersonsInGroups_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyPersonsInGroups_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyRelationshipSetts_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyRelationshipSetts_Ad(\Dstore\Engine\Pm_ModifyRelationshipSetts_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyRelationshipSetts_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyRelationshipSetts_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_ModifyRelationships_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_ModifyRelationships_Ad(\Dstore\Engine\Pm_ModifyRelationships_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_ModifyRelationships_Ad',
      $argument,
      ['\Dstore\Engine\Pm_ModifyRelationships_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_MovePersonCharacValue_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_MovePersonCharacValue_Ad(\Dstore\Engine\Pm_MovePersonCharacValue_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_MovePersonCharacValue_Ad',
      $argument,
      ['\Dstore\Engine\Pm_MovePersonCharacValue_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_PostleitzahlenZumOrt_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_PostleitzahlenZumOrt_Pu(\Dstore\Engine\Pm_PostleitzahlenZumOrt_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_PostleitzahlenZumOrt_Pu',
      $argument,
      ['\Dstore\Engine\Pm_PostleitzahlenZumOrt_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_PrioritizeARelationship_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_PrioritizeARelationship_Pu(\Dstore\Engine\Pm_PrioritizeARelationship_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_PrioritizeARelationship_Pu',
      $argument,
      ['\Dstore\Engine\Pm_PrioritizeARelationship_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_RemoveDuplicate_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_RemoveDuplicate_Ad(\Dstore\Engine\Pm_RemoveDuplicate_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_RemoveDuplicate_Ad',
      $argument,
      ['\Dstore\Engine\Pm_RemoveDuplicate_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_RemovePossibleDuplicates_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_RemovePossibleDuplicates_Ad(\Dstore\Engine\Pm_RemovePossibleDuplicates_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_RemovePossibleDuplicates_Ad',
      $argument,
      ['\Dstore\Engine\Pm_RemovePossibleDuplicates_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_SetPropertyOfOnePerson_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_SetPropertyOfOnePerson_Pu(\Dstore\Engine\Pm_SetPropertyOfOnePerson_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_SetPropertyOfOnePerson_Pu',
      $argument,
      ['\Dstore\Engine\Pm_SetPropertyOfOnePerson_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\Pm_UpdatePossibleDuplicates_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function pm_UpdatePossibleDuplicates_Ad(\Dstore\Engine\Pm_UpdatePossibleDuplicates_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/pm_UpdatePossibleDuplicates_Ad',
      $argument,
      ['\Dstore\Engine\Pm_UpdatePossibleDuplicates_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_CopyFromOLTPtoDSS_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_CopyFromOLTPtoDSS_Ad(\Dstore\Engine\St_CopyFromOLTPtoDSS_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_CopyFromOLTPtoDSS_Ad',
      $argument,
      ['\Dstore\Engine\St_CopyFromOLTPtoDSS_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetBasicCharacteristics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetBasicCharacteristics_Ad(\Dstore\Engine\St_GetBasicCharacteristics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetBasicCharacteristics_Ad',
      $argument,
      ['\Dstore\Engine\St_GetBasicCharacteristics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetClickStream_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetClickStream_Ad(\Dstore\Engine\St_GetClickStream_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetClickStream_Ad',
      $argument,
      ['\Dstore\Engine\St_GetClickStream_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetDSS_Index_Frequency_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetDSS_Index_Frequency_Ad(\Dstore\Engine\St_GetDSS_Index_Frequency_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetDSS_Index_Frequency_Ad',
      $argument,
      ['\Dstore\Engine\St_GetDSS_Index_Frequency_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetDSS_Index_Trend_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetDSS_Index_Trend_Ad(\Dstore\Engine\St_GetDSS_Index_Trend_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetDSS_Index_Trend_Ad',
      $argument,
      ['\Dstore\Engine\St_GetDSS_Index_Trend_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetDirectSuccessors_Tree_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetDirectSuccessors_Tree_Ad(\Dstore\Engine\St_GetDirectSuccessors_Tree_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetDirectSuccessors_Tree_Ad',
      $argument,
      ['\Dstore\Engine\St_GetDirectSuccessors_Tree_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetHTreeNodeStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetHTreeNodeStatistics_Ad(\Dstore\Engine\St_GetHTreeNodeStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetHTreeNodeStatistics_Ad',
      $argument,
      ['\Dstore\Engine\St_GetHTreeNodeStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetPHStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetPHStatistics_Ad(\Dstore\Engine\St_GetPHStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetPHStatistics_Ad',
      $argument,
      ['\Dstore\Engine\St_GetPHStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetPageCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetPageCategories_Ad(\Dstore\Engine\St_GetPageCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetPageCategories_Ad',
      $argument,
      ['\Dstore\Engine\St_GetPageCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetPageVisits_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetPageVisits_Ad(\Dstore\Engine\St_GetPageVisits_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetPageVisits_Ad',
      $argument,
      ['\Dstore\Engine\St_GetPageVisits_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetPagesInCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetPagesInCategories_Ad(\Dstore\Engine\St_GetPagesInCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetPagesInCategories_Ad',
      $argument,
      ['\Dstore\Engine\St_GetPagesInCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetPages_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetPages_Ad(\Dstore\Engine\St_GetPages_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetPages_Ad',
      $argument,
      ['\Dstore\Engine\St_GetPages_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetPeriodsToKeepStats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetPeriodsToKeepStats_Ad(\Dstore\Engine\St_GetPeriodsToKeepStats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetPeriodsToKeepStats_Ad',
      $argument,
      ['\Dstore\Engine\St_GetPeriodsToKeepStats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetPersonPDStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetPersonPDStatistics_Ad(\Dstore\Engine\St_GetPersonPDStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetPersonPDStatistics_Ad',
      $argument,
      ['\Dstore\Engine\St_GetPersonPDStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetPersonPMStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetPersonPMStatistics_Ad(\Dstore\Engine\St_GetPersonPMStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetPersonPMStatistics_Ad',
      $argument,
      ['\Dstore\Engine\St_GetPersonPMStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetSales_ByInformation_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetSales_ByInformation_Ad(\Dstore\Engine\St_GetSales_ByInformation_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetSales_ByInformation_Ad',
      $argument,
      ['\Dstore\Engine\St_GetSales_ByInformation_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetTreeNodePDStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetTreeNodePDStatistics_Ad(\Dstore\Engine\St_GetTreeNodePDStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetTreeNodePDStatistics_Ad',
      $argument,
      ['\Dstore\Engine\St_GetTreeNodePDStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetTreeNodePMStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetTreeNodePMStatistics_Ad(\Dstore\Engine\St_GetTreeNodePMStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetTreeNodePMStatistics_Ad',
      $argument,
      ['\Dstore\Engine\St_GetTreeNodePMStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetTreeNodePWStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetTreeNodePWStatistics_Ad(\Dstore\Engine\St_GetTreeNodePWStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetTreeNodePWStatistics_Ad',
      $argument,
      ['\Dstore\Engine\St_GetTreeNodePWStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetVisitorInfoStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetVisitorInfoStatistics_Ad(\Dstore\Engine\St_GetVisitorInfoStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetVisitorInfoStatistics_Ad',
      $argument,
      ['\Dstore\Engine\St_GetVisitorInfoStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetVisitorInformation_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetVisitorInformation_Ad(\Dstore\Engine\St_GetVisitorInformation_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetVisitorInformation_Ad',
      $argument,
      ['\Dstore\Engine\St_GetVisitorInformation_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetVisitorPersons_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetVisitorPersons_Ad(\Dstore\Engine\St_GetVisitorPersons_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetVisitorPersons_Ad',
      $argument,
      ['\Dstore\Engine\St_GetVisitorPersons_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_GetVisits_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_GetVisits_Ad(\Dstore\Engine\St_GetVisits_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_GetVisits_Ad',
      $argument,
      ['\Dstore\Engine\St_GetVisits_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_InsertPageHit_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_InsertPageHit_Pu(\Dstore\Engine\St_InsertPageHit_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_InsertPageHit_Pu',
      $argument,
      ['\Dstore\Engine\St_InsertPageHit_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_InsertTreeNodeHits_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_InsertTreeNodeHits_Pu(\Dstore\Engine\St_InsertTreeNodeHits_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_InsertTreeNodeHits_Pu',
      $argument,
      ['\Dstore\Engine\St_InsertTreeNodeHits_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_LogPageVisits_Pu\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_LogPageVisits_Pu(\Dstore\Engine\St_LogPageVisits_Pu\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_LogPageVisits_Pu',
      $argument,
      ['\Dstore\Engine\St_LogPageVisits_Pu\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_ModifyPageCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_ModifyPageCategories_Ad(\Dstore\Engine\St_ModifyPageCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_ModifyPageCategories_Ad',
      $argument,
      ['\Dstore\Engine\St_ModifyPageCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_ModifyPagesInCategories_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_ModifyPagesInCategories_Ad(\Dstore\Engine\St_ModifyPagesInCategories_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_ModifyPagesInCategories_Ad',
      $argument,
      ['\Dstore\Engine\St_ModifyPagesInCategories_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_ModifyPages_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_ModifyPages_Ad(\Dstore\Engine\St_ModifyPages_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_ModifyPages_Ad',
      $argument,
      ['\Dstore\Engine\St_ModifyPages_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_ModifyPeriodsToKeepStats_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_ModifyPeriodsToKeepStats_Ad(\Dstore\Engine\St_ModifyPeriodsToKeepStats_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_ModifyPeriodsToKeepStats_Ad',
      $argument,
      ['\Dstore\Engine\St_ModifyPeriodsToKeepStats_Ad\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Engine\St_UpdateStatistics_Ad\Parameters $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function st_UpdateStatistics_Ad(\Dstore\Engine\St_UpdateStatistics_Ad\Parameters $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.EngineProc/st_UpdateStatistics_Ad',
      $argument,
      ['\Dstore\Engine\St_UpdateStatistics_Ad\Response', 'decode'],
      $metadata, $options);
    }

  }

}
