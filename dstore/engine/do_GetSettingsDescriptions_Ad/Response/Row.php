<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetSettingsDescriptions_Ad.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\do_GetSettingsDescriptions_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $settings_entry_category_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $settings_table = null;
    
    /**  @var \dstore\values\stringValue */
    public $description = null;
    
    /**  @var \dstore\values\booleanValue */
    public $required = null;
    
    /**  @var \dstore\values\stringValue */
    public $dstore_version = null;
    
    /**  @var \dstore\values\booleanValue */
    public $user_dependent = null;
    
    /**  @var \dstore\values\stringValue */
    public $key_variable = null;
    
    /**  @var \dstore\values\stringValue */
    public $settings_entry_category = null;
    
    /**  @var \dstore\values\stringValue */
    public $data_type_for_value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetSettingsDescriptions_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE settings_entry_category_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "settings_entry_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE settings_table = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "settings_table";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE required = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "required";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE dstore_version = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "dstore_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE user_dependent = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "user_dependent";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE key_variable = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "key_variable";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE settings_entry_category = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "settings_entry_category";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE data_type_for_value = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "data_type_for_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
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
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
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
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <settings_entry_category_id> has a value
     *
     * @return boolean
     */
    public function hasSettingsEntryCategoryId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <settings_entry_category_id> value
     *
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function clearSettingsEntryCategoryId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <settings_entry_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSettingsEntryCategoryId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <settings_entry_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function setSettingsEntryCategoryId(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <settings_table> has a value
     *
     * @return boolean
     */
    public function hasSettingsTable(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <settings_table> value
     *
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function clearSettingsTable(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <settings_table> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSettingsTable(){
      return $this->_get(10002);
    }
    
    /**
     * Set <settings_table> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function setSettingsTable(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <description> value
     *
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function clearDescription(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDescription(){
      return $this->_get(10003);
    }
    
    /**
     * Set <description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function setDescription(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <required> has a value
     *
     * @return boolean
     */
    public function hasRequired(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <required> value
     *
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function clearRequired(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <required> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getRequired(){
      return $this->_get(10004);
    }
    
    /**
     * Set <required> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function setRequired(\dstore\values\booleanValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <dstore_version> has a value
     *
     * @return boolean
     */
    public function hasDstoreVersion(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <dstore_version> value
     *
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function clearDstoreVersion(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <dstore_version> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDstoreVersion(){
      return $this->_get(10005);
    }
    
    /**
     * Set <dstore_version> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function setDstoreVersion(\dstore\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <user_dependent> has a value
     *
     * @return boolean
     */
    public function hasUserDependent(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <user_dependent> value
     *
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function clearUserDependent(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <user_dependent> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getUserDependent(){
      return $this->_get(10006);
    }
    
    /**
     * Set <user_dependent> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function setUserDependent(\dstore\values\booleanValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <key_variable> has a value
     *
     * @return boolean
     */
    public function hasKeyVariable(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <key_variable> value
     *
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function clearKeyVariable(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <key_variable> value
     *
     * @return \dstore\values\stringValue
     */
    public function getKeyVariable(){
      return $this->_get(10007);
    }
    
    /**
     * Set <key_variable> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function setKeyVariable(\dstore\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <settings_entry_category> has a value
     *
     * @return boolean
     */
    public function hasSettingsEntryCategory(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <settings_entry_category> value
     *
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function clearSettingsEntryCategory(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <settings_entry_category> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSettingsEntryCategory(){
      return $this->_get(10008);
    }
    
    /**
     * Set <settings_entry_category> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function setSettingsEntryCategory(\dstore\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <data_type_for_value> has a value
     *
     * @return boolean
     */
    public function hasDataTypeForValue(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <data_type_for_value> value
     *
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function clearDataTypeForValue(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <data_type_for_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDataTypeForValue(){
      return $this->_get(10009);
    }
    
    /**
     * Set <data_type_for_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetSettingsDescriptions_Ad\Response\Row
     */
    public function setDataTypeForValue(\dstore\values\stringValue $value){
      return $this->_set(10009, $value);
    }
  }
}

