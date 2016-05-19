<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_GetMemberStatistics_Pu.proto
//   Date: 2016-05-19 08:07:39

namespace dstore\engine\co_GetMemberStatistics_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $community_id = null;
    
    /**  @var boolean */
    public $community_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $get_stats_for_community_member_id = null;
    
    /**  @var boolean */
    public $get_stats_for_community_member_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $list_of_statistic_information_ids = null;
    
    /**  @var boolean */
    public $list_of_statistic_information_ids_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $online_time_during_last_x_minutes = null;
    
    /**  @var boolean */
    public $online_time_during_last_x_minutes_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $date_format = null;
    
    /**  @var boolean */
    public $date_format_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $forum_id = null;
    
    /**  @var boolean */
    public $forum_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $separator_in_ident_vals = null;
    
    /**  @var boolean */
    public $separator_in_ident_vals_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_GetMemberStatistics_Pu.Parameters');

      // OPTIONAL MESSAGE unique_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_identification_values = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE community_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "community_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "community_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_stats_for_community_member_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "get_stats_for_community_member_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_stats_for_community_member_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "get_stats_for_community_member_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE list_of_statistic_information_ids = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "list_of_statistic_information_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL list_of_statistic_information_ids_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "list_of_statistic_information_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE online_time_during_last_x_minutes = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "online_time_during_last_x_minutes";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL online_time_during_last_x_minutes_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "online_time_during_last_x_minutes_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE date_format = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "date_format";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL date_format_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "date_format_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE forum_id = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "forum_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL forum_id_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "forum_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_ident_vals = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "separator_in_ident_vals";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_ident_vals_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "separator_in_ident_vals_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(1);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setUniqueId(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <community_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <community_id> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearCommunityId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <community_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCommunityId(){
      return $this->_get(3);
    }
    
    /**
     * Set <community_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setCommunityId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <community_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <community_id_null> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearCommunityIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <community_id_null> value
     *
     * @return boolean
     */
    public function getCommunityIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <community_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setCommunityIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <get_stats_for_community_member_id> has a value
     *
     * @return boolean
     */
    public function hasGetStatsForCommunityMemberId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <get_stats_for_community_member_id> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearGetStatsForCommunityMemberId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <get_stats_for_community_member_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getGetStatsForCommunityMemberId(){
      return $this->_get(4);
    }
    
    /**
     * Set <get_stats_for_community_member_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setGetStatsForCommunityMemberId(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <get_stats_for_community_member_id_null> has a value
     *
     * @return boolean
     */
    public function hasGetStatsForCommunityMemberIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <get_stats_for_community_member_id_null> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearGetStatsForCommunityMemberIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <get_stats_for_community_member_id_null> value
     *
     * @return boolean
     */
    public function getGetStatsForCommunityMemberIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <get_stats_for_community_member_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setGetStatsForCommunityMemberIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <list_of_statistic_information_ids> has a value
     *
     * @return boolean
     */
    public function hasListOfStatisticInformationIds(){
      return $this->_has(5);
    }
    
    /**
     * Clear <list_of_statistic_information_ids> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearListOfStatisticInformationIds(){
      return $this->_clear(5);
    }
    
    /**
     * Get <list_of_statistic_information_ids> value
     *
     * @return \dstore\values\stringValue
     */
    public function getListOfStatisticInformationIds(){
      return $this->_get(5);
    }
    
    /**
     * Set <list_of_statistic_information_ids> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setListOfStatisticInformationIds(\dstore\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <list_of_statistic_information_ids_null> has a value
     *
     * @return boolean
     */
    public function hasListOfStatisticInformationIdsNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <list_of_statistic_information_ids_null> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearListOfStatisticInformationIdsNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <list_of_statistic_information_ids_null> value
     *
     * @return boolean
     */
    public function getListOfStatisticInformationIdsNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <list_of_statistic_information_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setListOfStatisticInformationIdsNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <online_time_during_last_x_minutes> has a value
     *
     * @return boolean
     */
    public function hasOnlineTimeDuringLastXMinutes(){
      return $this->_has(6);
    }
    
    /**
     * Clear <online_time_during_last_x_minutes> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearOnlineTimeDuringLastXMinutes(){
      return $this->_clear(6);
    }
    
    /**
     * Get <online_time_during_last_x_minutes> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOnlineTimeDuringLastXMinutes(){
      return $this->_get(6);
    }
    
    /**
     * Set <online_time_during_last_x_minutes> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setOnlineTimeDuringLastXMinutes(\dstore\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <online_time_during_last_x_minutes_null> has a value
     *
     * @return boolean
     */
    public function hasOnlineTimeDuringLastXMinutesNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <online_time_during_last_x_minutes_null> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearOnlineTimeDuringLastXMinutesNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <online_time_during_last_x_minutes_null> value
     *
     * @return boolean
     */
    public function getOnlineTimeDuringLastXMinutesNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <online_time_during_last_x_minutes_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setOnlineTimeDuringLastXMinutesNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <date_format> has a value
     *
     * @return boolean
     */
    public function hasDateFormat(){
      return $this->_has(7);
    }
    
    /**
     * Clear <date_format> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearDateFormat(){
      return $this->_clear(7);
    }
    
    /**
     * Get <date_format> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDateFormat(){
      return $this->_get(7);
    }
    
    /**
     * Set <date_format> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setDateFormat(\dstore\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <date_format_null> has a value
     *
     * @return boolean
     */
    public function hasDateFormatNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <date_format_null> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearDateFormatNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <date_format_null> value
     *
     * @return boolean
     */
    public function getDateFormatNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <date_format_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setDateFormatNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <forum_id> has a value
     *
     * @return boolean
     */
    public function hasForumId(){
      return $this->_has(8);
    }
    
    /**
     * Clear <forum_id> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearForumId(){
      return $this->_clear(8);
    }
    
    /**
     * Get <forum_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getForumId(){
      return $this->_get(8);
    }
    
    /**
     * Set <forum_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setForumId(\dstore\values\integerValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <forum_id_null> has a value
     *
     * @return boolean
     */
    public function hasForumIdNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <forum_id_null> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearForumIdNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <forum_id_null> value
     *
     * @return boolean
     */
    public function getForumIdNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <forum_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setForumIdNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentVals(){
      return $this->_has(9);
    }
    
    /**
     * Clear <separator_in_ident_vals> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearSeparatorInIdentVals(){
      return $this->_clear(9);
    }
    
    /**
     * Get <separator_in_ident_vals> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSeparatorInIdentVals(){
      return $this->_get(9);
    }
    
    /**
     * Set <separator_in_ident_vals> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setSeparatorInIdentVals(\dstore\values\stringValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentValsNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <separator_in_ident_vals_null> value
     *
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function clearSeparatorInIdentValsNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <separator_in_ident_vals_null> value
     *
     * @return boolean
     */
    public function getSeparatorInIdentValsNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <separator_in_ident_vals_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMemberStatistics_Pu\Parameters
     */
    public function setSeparatorInIdentValsNull( $value){
      return $this->_set(1009, $value);
    }
  }
}

