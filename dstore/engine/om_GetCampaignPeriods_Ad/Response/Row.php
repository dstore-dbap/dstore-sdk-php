<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCampaignPeriods_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetCampaignPeriods_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $campaign_id = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $period_end_date_and_time = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $period_definition_name = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $period_definition_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $period_end_date_and_time_char = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $period_status = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $period_start_date_and_time = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $period_start_date_and_time_char = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $active = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $campaign_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $campaign_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $campaign_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCampaignPeriods_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE campaign_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "campaign_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_end_date_and_time = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "period_end_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_definition_name = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "period_definition_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_definition_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "period_definition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_end_date_and_time_char = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "period_end_date_and_time_char";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_status = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "period_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_start_date_and_time = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "period_start_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE period_start_date_and_time_char = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "period_start_date_and_time_char";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE active = 20001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20001;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE campaign_description = 20003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20003;
      $f->name      = "campaign_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE campaign_type_id = 20004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20004;
      $f->name      = "campaign_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE campaign_name = 20007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20007;
      $f->name      = "campaign_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <row_id> has a value
     *
     * @return boolean
     */
    public function hasRowId(){
      return $this->_has(10000);
    }
    
    /**
     * Clear <row_id> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearRowId(){
      return $this->_clear(10000);
    }
    
    /**
     * Get <row_id> value
     *
     * @return int
     */
    public function getRowId(){
      return $this->_get(10000);
    }
    
    /**
     * Set <row_id> value
     *
     * @param int $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <campaign_id> has a value
     *
     * @return boolean
     */
    public function hasCampaignId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <campaign_id> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearCampaignId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <campaign_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCampaignId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <campaign_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setCampaignId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <period_end_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasPeriodEndDateAndTime(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <period_end_date_and_time> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearPeriodEndDateAndTime(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <period_end_date_and_time> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getPeriodEndDateAndTime(){
      return $this->_get(10002);
    }
    
    /**
     * Set <period_end_date_and_time> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setPeriodEndDateAndTime(\dstore\engine\values\timestampValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <period_definition_name> has a value
     *
     * @return boolean
     */
    public function hasPeriodDefinitionName(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <period_definition_name> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearPeriodDefinitionName(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <period_definition_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPeriodDefinitionName(){
      return $this->_get(10003);
    }
    
    /**
     * Set <period_definition_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setPeriodDefinitionName(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <period_definition_id> has a value
     *
     * @return boolean
     */
    public function hasPeriodDefinitionId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <period_definition_id> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearPeriodDefinitionId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <period_definition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPeriodDefinitionId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <period_definition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setPeriodDefinitionId(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <period_end_date_and_time_char> has a value
     *
     * @return boolean
     */
    public function hasPeriodEndDateAndTimeChar(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <period_end_date_and_time_char> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearPeriodEndDateAndTimeChar(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <period_end_date_and_time_char> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPeriodEndDateAndTimeChar(){
      return $this->_get(10005);
    }
    
    /**
     * Set <period_end_date_and_time_char> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setPeriodEndDateAndTimeChar(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <period_status> has a value
     *
     * @return boolean
     */
    public function hasPeriodStatus(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <period_status> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearPeriodStatus(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <period_status> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPeriodStatus(){
      return $this->_get(10006);
    }
    
    /**
     * Set <period_status> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setPeriodStatus(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <period_start_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasPeriodStartDateAndTime(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <period_start_date_and_time> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearPeriodStartDateAndTime(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <period_start_date_and_time> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getPeriodStartDateAndTime(){
      return $this->_get(10007);
    }
    
    /**
     * Set <period_start_date_and_time> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setPeriodStartDateAndTime(\dstore\engine\values\timestampValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <period_start_date_and_time_char> has a value
     *
     * @return boolean
     */
    public function hasPeriodStartDateAndTimeChar(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <period_start_date_and_time_char> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearPeriodStartDateAndTimeChar(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <period_start_date_and_time_char> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPeriodStartDateAndTimeChar(){
      return $this->_get(10008);
    }
    
    /**
     * Set <period_start_date_and_time_char> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setPeriodStartDateAndTimeChar(\dstore\engine\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(20001);
    }
    
    /**
     * Clear <active> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearActive(){
      return $this->_clear(20001);
    }
    
    /**
     * Get <active> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getActive(){
      return $this->_get(20001);
    }
    
    /**
     * Set <active> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setActive(\dstore\engine\values\integerValue $value){
      return $this->_set(20001, $value);
    }
    
    /**
     * Check if <campaign_description> has a value
     *
     * @return boolean
     */
    public function hasCampaignDescription(){
      return $this->_has(20003);
    }
    
    /**
     * Clear <campaign_description> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearCampaignDescription(){
      return $this->_clear(20003);
    }
    
    /**
     * Get <campaign_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCampaignDescription(){
      return $this->_get(20003);
    }
    
    /**
     * Set <campaign_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setCampaignDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(20003, $value);
    }
    
    /**
     * Check if <campaign_type_id> has a value
     *
     * @return boolean
     */
    public function hasCampaignTypeId(){
      return $this->_has(20004);
    }
    
    /**
     * Clear <campaign_type_id> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearCampaignTypeId(){
      return $this->_clear(20004);
    }
    
    /**
     * Get <campaign_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCampaignTypeId(){
      return $this->_get(20004);
    }
    
    /**
     * Set <campaign_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setCampaignTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(20004, $value);
    }
    
    /**
     * Check if <campaign_name> has a value
     *
     * @return boolean
     */
    public function hasCampaignName(){
      return $this->_has(20007);
    }
    
    /**
     * Clear <campaign_name> value
     *
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function clearCampaignName(){
      return $this->_clear(20007);
    }
    
    /**
     * Get <campaign_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCampaignName(){
      return $this->_get(20007);
    }
    
    /**
     * Set <campaign_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignPeriods_Ad\Response\Row
     */
    public function setCampaignName(\dstore\engine\values\stringValue $value){
      return $this->_set(20007, $value);
    }
  }
}

