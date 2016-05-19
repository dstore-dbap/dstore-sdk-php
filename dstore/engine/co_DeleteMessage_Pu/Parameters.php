<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_DeleteMessage_Pu.proto
//   Date: 2016-05-19 08:07:39

namespace dstore\engine\co_DeleteMessage_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\timestampValue */
    public $message_date_and_time = null;
    
    /**  @var boolean */
    public $message_date_and_time_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $from_community_member_id = null;
    
    /**  @var boolean */
    public $from_community_member_id_null = null;
    
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
    public $message_no = null;
    
    /**  @var boolean */
    public $message_no_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $separator_in_ident_vals = null;
    
    /**  @var boolean */
    public $separator_in_ident_vals_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_DeleteMessage_Pu.Parameters');

      // OPTIONAL MESSAGE message_date_and_time = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "message_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL message_date_and_time_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "message_date_and_time_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_community_member_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "from_community_member_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_community_member_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "from_community_member_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unique_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_identification_values = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE community_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "community_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "community_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE message_no = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "message_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL message_no_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "message_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_ident_vals = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "separator_in_ident_vals";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_ident_vals_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
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
     * Check if <message_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasMessageDateAndTime(){
      return $this->_has(1);
    }
    
    /**
     * Clear <message_date_and_time> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearMessageDateAndTime(){
      return $this->_clear(1);
    }
    
    /**
     * Get <message_date_and_time> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getMessageDateAndTime(){
      return $this->_get(1);
    }
    
    /**
     * Set <message_date_and_time> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setMessageDateAndTime(\dstore\values\timestampValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <message_date_and_time_null> has a value
     *
     * @return boolean
     */
    public function hasMessageDateAndTimeNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <message_date_and_time_null> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearMessageDateAndTimeNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <message_date_and_time_null> value
     *
     * @return boolean
     */
    public function getMessageDateAndTimeNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <message_date_and_time_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setMessageDateAndTimeNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <from_community_member_id> has a value
     *
     * @return boolean
     */
    public function hasFromCommunityMemberId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <from_community_member_id> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearFromCommunityMemberId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <from_community_member_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getFromCommunityMemberId(){
      return $this->_get(2);
    }
    
    /**
     * Set <from_community_member_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setFromCommunityMemberId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <from_community_member_id_null> has a value
     *
     * @return boolean
     */
    public function hasFromCommunityMemberIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <from_community_member_id_null> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearFromCommunityMemberIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <from_community_member_id_null> value
     *
     * @return boolean
     */
    public function getFromCommunityMemberIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <from_community_member_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setFromCommunityMemberIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(3);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setUniqueId(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(4);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(4);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(4);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <community_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <community_id> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearCommunityId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <community_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCommunityId(){
      return $this->_get(5);
    }
    
    /**
     * Set <community_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setCommunityId(\dstore\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <community_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <community_id_null> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearCommunityIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <community_id_null> value
     *
     * @return boolean
     */
    public function getCommunityIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <community_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setCommunityIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <message_no> has a value
     *
     * @return boolean
     */
    public function hasMessageNo(){
      return $this->_has(6);
    }
    
    /**
     * Clear <message_no> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearMessageNo(){
      return $this->_clear(6);
    }
    
    /**
     * Get <message_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getMessageNo(){
      return $this->_get(6);
    }
    
    /**
     * Set <message_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setMessageNo(\dstore\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <message_no_null> has a value
     *
     * @return boolean
     */
    public function hasMessageNoNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <message_no_null> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearMessageNoNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <message_no_null> value
     *
     * @return boolean
     */
    public function getMessageNoNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <message_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setMessageNoNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentVals(){
      return $this->_has(7);
    }
    
    /**
     * Clear <separator_in_ident_vals> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearSeparatorInIdentVals(){
      return $this->_clear(7);
    }
    
    /**
     * Get <separator_in_ident_vals> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSeparatorInIdentVals(){
      return $this->_get(7);
    }
    
    /**
     * Set <separator_in_ident_vals> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setSeparatorInIdentVals(\dstore\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentValsNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <separator_in_ident_vals_null> value
     *
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function clearSeparatorInIdentValsNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <separator_in_ident_vals_null> value
     *
     * @return boolean
     */
    public function getSeparatorInIdentValsNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <separator_in_ident_vals_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_DeleteMessage_Pu\Parameters
     */
    public function setSeparatorInIdentValsNull( $value){
      return $this->_set(1007, $value);
    }
  }
}

