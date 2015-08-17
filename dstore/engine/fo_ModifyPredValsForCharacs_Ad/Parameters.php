<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_ModifyPredValsForCharacs_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\fo_ModifyPredValsForCharacs_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $posting_characteristic_id = null;
    
    /**  @var boolean */
    public $posting_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $old_value = null;
    
    /**  @var boolean */
    public $old_value_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var boolean */
    public $value_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $only_valid_for_forum_id = null;
    
    /**  @var boolean */
    public $only_valid_for_forum_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_ModifyPredValsForCharacs_Ad.Parameters');

      // OPTIONAL MESSAGE posting_characteristic_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "posting_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL posting_characteristic_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "posting_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE old_value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "old_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL old_value_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "old_value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_valid_for_forum_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "only_valid_for_forum_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_valid_for_forum_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "only_valid_for_forum_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "country_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <posting_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPostingCharacteristicId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <posting_characteristic_id> value
     *
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function clearPostingCharacteristicId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <posting_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPostingCharacteristicId(){
      return $this->_get(1);
    }
    
    /**
     * Set <posting_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function setPostingCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <posting_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPostingCharacteristicIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <posting_characteristic_id_null> value
     *
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function clearPostingCharacteristicIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <posting_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPostingCharacteristicIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <posting_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function setPostingCharacteristicIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <old_value> has a value
     *
     * @return boolean
     */
    public function hasOldValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <old_value> value
     *
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function clearOldValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <old_value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOldValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <old_value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function setOldValue(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <old_value_null> has a value
     *
     * @return boolean
     */
    public function hasOldValueNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <old_value_null> value
     *
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function clearOldValueNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <old_value_null> value
     *
     * @return boolean
     */
    public function getOldValueNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <old_value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function setOldValueNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(3);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function clearValue(){
      return $this->_clear(3);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(3);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <value_null> has a value
     *
     * @return boolean
     */
    public function hasValueNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <value_null> value
     *
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function clearValueNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <value_null> value
     *
     * @return boolean
     */
    public function getValueNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function setValueNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <only_valid_for_forum_id> has a value
     *
     * @return boolean
     */
    public function hasOnlyValidForForumId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <only_valid_for_forum_id> value
     *
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function clearOnlyValidForForumId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <only_valid_for_forum_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOnlyValidForForumId(){
      return $this->_get(4);
    }
    
    /**
     * Set <only_valid_for_forum_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function setOnlyValidForForumId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <only_valid_for_forum_id_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyValidForForumIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <only_valid_for_forum_id_null> value
     *
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function clearOnlyValidForForumIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <only_valid_for_forum_id_null> value
     *
     * @return boolean
     */
    public function getOnlyValidForForumIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <only_valid_for_forum_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function setOnlyValidForForumIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(5);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function clearCountry(){
      return $this->_clear(5);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCountry(){
      return $this->_get(5);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function setCountry(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_ModifyPredValsForCharacs_Ad\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

