<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_GetMD5ForBinaryID_Pu.proto
//   Date: 2016-05-19 08:07:39

namespace dstore\engine\co_GetMD5ForBinaryID_Pu {

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
    public $community_member_id = null;
    
    /**  @var boolean */
    public $community_member_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $binary_id = null;
    
    /**  @var boolean */
    public $binary_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $additional_binary_information = null;
    
    /**  @var boolean */
    public $additional_binary_information_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $separator_in_ident_vals = null;
    
    /**  @var boolean */
    public $separator_in_ident_vals_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_GetMD5ForBinaryID_Pu.Parameters');

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

      // OPTIONAL MESSAGE community_member_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "community_member_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_member_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "community_member_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "binary_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL binary_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "binary_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE additional_binary_information = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "additional_binary_information";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL additional_binary_information_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "additional_binary_information_null";
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function setCommunityIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <community_member_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityMemberId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <community_member_id> value
     *
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function clearCommunityMemberId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <community_member_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCommunityMemberId(){
      return $this->_get(4);
    }
    
    /**
     * Set <community_member_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function setCommunityMemberId(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <community_member_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityMemberIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <community_member_id_null> value
     *
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function clearCommunityMemberIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <community_member_id_null> value
     *
     * @return boolean
     */
    public function getCommunityMemberIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <community_member_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function setCommunityMemberIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <binary_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <binary_id> value
     *
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function clearBinaryId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <binary_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBinaryId(){
      return $this->_get(5);
    }
    
    /**
     * Set <binary_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function setBinaryId(\dstore\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <binary_id_null> has a value
     *
     * @return boolean
     */
    public function hasBinaryIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <binary_id_null> value
     *
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function clearBinaryIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <binary_id_null> value
     *
     * @return boolean
     */
    public function getBinaryIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <binary_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function setBinaryIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <additional_binary_information> has a value
     *
     * @return boolean
     */
    public function hasAdditionalBinaryInformation(){
      return $this->_has(6);
    }
    
    /**
     * Clear <additional_binary_information> value
     *
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function clearAdditionalBinaryInformation(){
      return $this->_clear(6);
    }
    
    /**
     * Get <additional_binary_information> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getAdditionalBinaryInformation(){
      return $this->_get(6);
    }
    
    /**
     * Set <additional_binary_information> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function setAdditionalBinaryInformation(\dstore\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <additional_binary_information_null> has a value
     *
     * @return boolean
     */
    public function hasAdditionalBinaryInformationNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <additional_binary_information_null> value
     *
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function clearAdditionalBinaryInformationNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <additional_binary_information_null> value
     *
     * @return boolean
     */
    public function getAdditionalBinaryInformationNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <additional_binary_information_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function setAdditionalBinaryInformationNull( $value){
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
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
     * @return \dstore\engine\co_GetMD5ForBinaryID_Pu\Parameters
     */
    public function setSeparatorInIdentValsNull( $value){
      return $this->_set(1007, $value);
    }
  }
}

