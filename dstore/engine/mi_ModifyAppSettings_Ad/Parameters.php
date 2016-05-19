<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_ModifyAppSettings_Ad.proto
//   Date: 2016-05-19 08:07:46

namespace dstore\engine\mi_ModifyAppSettings_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $application_id = null;
    
    /**  @var boolean */
    public $application_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $user_id = null;
    
    /**  @var boolean */
    public $user_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $key_variable = null;
    
    /**  @var boolean */
    public $key_variable_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $value = null;
    
    /**  @var boolean */
    public $value_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete = null;
    
    /**  @var boolean */
    public $delete_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $key_value_pairs_in_tempdb = null;
    
    /**  @var boolean */
    public $key_value_pairs_in_tempdb_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_ModifyAppSettings_Ad.Parameters');

      // OPTIONAL MESSAGE application_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "application_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL application_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "application_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE user_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL user_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "user_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_variable = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "key_variable";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL key_variable_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "key_variable_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_value_pairs_in_tempdb = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "key_value_pairs_in_tempdb";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL key_value_pairs_in_tempdb_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "key_value_pairs_in_tempdb_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <application_id> has a value
     *
     * @return boolean
     */
    public function hasApplicationId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <application_id> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearApplicationId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <application_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getApplicationId(){
      return $this->_get(1);
    }
    
    /**
     * Set <application_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setApplicationId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <application_id_null> has a value
     *
     * @return boolean
     */
    public function hasApplicationIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <application_id_null> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearApplicationIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <application_id_null> value
     *
     * @return boolean
     */
    public function getApplicationIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <application_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setApplicationIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <user_id> has a value
     *
     * @return boolean
     */
    public function hasUserId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <user_id> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearUserId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <user_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getUserId(){
      return $this->_get(2);
    }
    
    /**
     * Set <user_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setUserId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <user_id_null> has a value
     *
     * @return boolean
     */
    public function hasUserIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <user_id_null> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearUserIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <user_id_null> value
     *
     * @return boolean
     */
    public function getUserIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <user_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setUserIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <key_variable> has a value
     *
     * @return boolean
     */
    public function hasKeyVariable(){
      return $this->_has(3);
    }
    
    /**
     * Clear <key_variable> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearKeyVariable(){
      return $this->_clear(3);
    }
    
    /**
     * Get <key_variable> value
     *
     * @return \dstore\values\stringValue
     */
    public function getKeyVariable(){
      return $this->_get(3);
    }
    
    /**
     * Set <key_variable> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setKeyVariable(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <key_variable_null> has a value
     *
     * @return boolean
     */
    public function hasKeyVariableNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <key_variable_null> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearKeyVariableNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <key_variable_null> value
     *
     * @return boolean
     */
    public function getKeyVariableNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <key_variable_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setKeyVariableNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(4);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearValue(){
      return $this->_clear(4);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue(){
      return $this->_get(4);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setValue(\dstore\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <value_null> has a value
     *
     * @return boolean
     */
    public function hasValueNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <value_null> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearValueNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <value_null> value
     *
     * @return boolean
     */
    public function getValueNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setValueNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <delete> has a value
     *
     * @return boolean
     */
    public function hasDelete(){
      return $this->_has(5);
    }
    
    /**
     * Clear <delete> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearDelete(){
      return $this->_clear(5);
    }
    
    /**
     * Get <delete> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDelete(){
      return $this->_get(5);
    }
    
    /**
     * Set <delete> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setDelete(\dstore\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <delete_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <delete_null> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearDeleteNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <delete_null> value
     *
     * @return boolean
     */
    public function getDeleteNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <delete_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setDeleteNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <key_value_pairs_in_tempdb> has a value
     *
     * @return boolean
     */
    public function hasKeyValuePairsInTempdb(){
      return $this->_has(6);
    }
    
    /**
     * Clear <key_value_pairs_in_tempdb> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearKeyValuePairsInTempdb(){
      return $this->_clear(6);
    }
    
    /**
     * Get <key_value_pairs_in_tempdb> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getKeyValuePairsInTempdb(){
      return $this->_get(6);
    }
    
    /**
     * Set <key_value_pairs_in_tempdb> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setKeyValuePairsInTempdb(\dstore\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <key_value_pairs_in_tempdb_null> has a value
     *
     * @return boolean
     */
    public function hasKeyValuePairsInTempdbNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <key_value_pairs_in_tempdb_null> value
     *
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function clearKeyValuePairsInTempdbNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <key_value_pairs_in_tempdb_null> value
     *
     * @return boolean
     */
    public function getKeyValuePairsInTempdbNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <key_value_pairs_in_tempdb_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyAppSettings_Ad\Parameters
     */
    public function setKeyValuePairsInTempdbNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

