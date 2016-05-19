<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_LoginIntoCommunity_Pu.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\co_LoginIntoCommunity_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $community_id = null;
    
    /**  @var boolean */
    public $community_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $separator_in_ident_vals = null;
    
    /**  @var boolean */
    public $separator_in_ident_vals_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_LoginIntoCommunity_Pu.Parameters');

      // OPTIONAL MESSAGE community_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "community_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL community_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "community_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unique_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_identification_values = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_ident_vals = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "separator_in_ident_vals";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_ident_vals_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
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
     * Check if <community_id> has a value
     *
     * @return boolean
     */
    public function hasCommunityId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <community_id> value
     *
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function clearCommunityId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <community_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCommunityId(){
      return $this->_get(1);
    }
    
    /**
     * Set <community_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function setCommunityId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <community_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommunityIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <community_id_null> value
     *
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function clearCommunityIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <community_id_null> value
     *
     * @return boolean
     */
    public function getCommunityIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <community_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function setCommunityIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(2);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function setUniqueId(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(3);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(3);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(3);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentVals(){
      return $this->_has(4);
    }
    
    /**
     * Clear <separator_in_ident_vals> value
     *
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function clearSeparatorInIdentVals(){
      return $this->_clear(4);
    }
    
    /**
     * Get <separator_in_ident_vals> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSeparatorInIdentVals(){
      return $this->_get(4);
    }
    
    /**
     * Set <separator_in_ident_vals> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function setSeparatorInIdentVals(\dstore\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentValsNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <separator_in_ident_vals_null> value
     *
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function clearSeparatorInIdentValsNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <separator_in_ident_vals_null> value
     *
     * @return boolean
     */
    public function getSeparatorInIdentValsNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <separator_in_ident_vals_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\co_LoginIntoCommunity_Pu\Parameters
     */
    public function setSeparatorInIdentValsNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

