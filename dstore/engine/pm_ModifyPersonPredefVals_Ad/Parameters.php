<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_ModifyPersonPredefVals_Ad.proto
//   Date: 2016-05-19 08:07:56

namespace dstore\engine\pm_ModifyPersonPredefVals_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $value_id = null;
    
    /**  @var boolean */
    public $value_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_characteristic_id = null;
    
    /**  @var boolean */
    public $person_characteristic_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $value = null;
    
    /**  @var boolean */
    public $value_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $sort_no = null;
    
    /**  @var boolean */
    public $sort_no_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete_value = null;
    
    /**  @var boolean */
    public $delete_value_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $table_id = null;
    
    /**  @var boolean */
    public $table_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $table_key_id = null;
    
    /**  @var boolean */
    public $table_key_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $keep_references_if_value_changes = null;
    
    /**  @var boolean */
    public $keep_references_if_value_changes_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete_table_key_reference = null;
    
    /**  @var boolean */
    public $delete_table_key_reference_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_ModifyPersonPredefVals_Ad.Parameters');

      // OPTIONAL MESSAGE value_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "value_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_characteristic_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_characteristic_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_no_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "sort_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_value = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "delete_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_value_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "delete_value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_id = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "table_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL table_id_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "table_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_key_id = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "table_key_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL table_key_id_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "table_key_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE keep_references_if_value_changes = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "keep_references_if_value_changes";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL keep_references_if_value_changes_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "keep_references_if_value_changes_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_table_key_reference = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "delete_table_key_reference";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_table_key_reference_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "delete_table_key_reference_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearValueId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getValueId(){
      return $this->_get(1);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setValueId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value_id_null> has a value
     *
     * @return boolean
     */
    public function hasValueIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <value_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearValueIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <value_id_null> value
     *
     * @return boolean
     */
    public function getValueIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <value_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setValueIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_characteristic_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearPersonCharacteristicId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonCharacteristicId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setPersonCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearPersonCharacteristicIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacteristicIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setPersonCharacteristicIdNull( $value){
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
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearValue(){
      return $this->_clear(3);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue(){
      return $this->_get(3);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setValue(\dstore\values\stringValue $value){
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
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
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
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setValueNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(4);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setLanguageId(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(5);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearSortNo(){
      return $this->_clear(5);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(5);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setSortNo(\dstore\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <sort_no_null> has a value
     *
     * @return boolean
     */
    public function hasSortNoNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <sort_no_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearSortNoNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <sort_no_null> value
     *
     * @return boolean
     */
    public function getSortNoNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <sort_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setSortNoNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <delete_value> has a value
     *
     * @return boolean
     */
    public function hasDeleteValue(){
      return $this->_has(6);
    }
    
    /**
     * Clear <delete_value> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearDeleteValue(){
      return $this->_clear(6);
    }
    
    /**
     * Get <delete_value> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDeleteValue(){
      return $this->_get(6);
    }
    
    /**
     * Set <delete_value> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setDeleteValue(\dstore\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <delete_value_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteValueNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <delete_value_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearDeleteValueNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <delete_value_null> value
     *
     * @return boolean
     */
    public function getDeleteValueNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <delete_value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setDeleteValueNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <table_id> has a value
     *
     * @return boolean
     */
    public function hasTableId(){
      return $this->_has(7);
    }
    
    /**
     * Clear <table_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearTableId(){
      return $this->_clear(7);
    }
    
    /**
     * Get <table_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTableId(){
      return $this->_get(7);
    }
    
    /**
     * Set <table_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setTableId(\dstore\values\integerValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <table_id_null> has a value
     *
     * @return boolean
     */
    public function hasTableIdNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <table_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearTableIdNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <table_id_null> value
     *
     * @return boolean
     */
    public function getTableIdNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <table_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setTableIdNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <table_key_id> has a value
     *
     * @return boolean
     */
    public function hasTableKeyId(){
      return $this->_has(8);
    }
    
    /**
     * Clear <table_key_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearTableKeyId(){
      return $this->_clear(8);
    }
    
    /**
     * Get <table_key_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTableKeyId(){
      return $this->_get(8);
    }
    
    /**
     * Set <table_key_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setTableKeyId(\dstore\values\integerValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <table_key_id_null> has a value
     *
     * @return boolean
     */
    public function hasTableKeyIdNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <table_key_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearTableKeyIdNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <table_key_id_null> value
     *
     * @return boolean
     */
    public function getTableKeyIdNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <table_key_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setTableKeyIdNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <keep_references_if_value_changes> has a value
     *
     * @return boolean
     */
    public function hasKeepReferencesIfValueChanges(){
      return $this->_has(9);
    }
    
    /**
     * Clear <keep_references_if_value_changes> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearKeepReferencesIfValueChanges(){
      return $this->_clear(9);
    }
    
    /**
     * Get <keep_references_if_value_changes> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getKeepReferencesIfValueChanges(){
      return $this->_get(9);
    }
    
    /**
     * Set <keep_references_if_value_changes> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setKeepReferencesIfValueChanges(\dstore\values\booleanValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <keep_references_if_value_changes_null> has a value
     *
     * @return boolean
     */
    public function hasKeepReferencesIfValueChangesNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <keep_references_if_value_changes_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearKeepReferencesIfValueChangesNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <keep_references_if_value_changes_null> value
     *
     * @return boolean
     */
    public function getKeepReferencesIfValueChangesNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <keep_references_if_value_changes_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setKeepReferencesIfValueChangesNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <delete_table_key_reference> has a value
     *
     * @return boolean
     */
    public function hasDeleteTableKeyReference(){
      return $this->_has(10);
    }
    
    /**
     * Clear <delete_table_key_reference> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearDeleteTableKeyReference(){
      return $this->_clear(10);
    }
    
    /**
     * Get <delete_table_key_reference> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDeleteTableKeyReference(){
      return $this->_get(10);
    }
    
    /**
     * Set <delete_table_key_reference> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setDeleteTableKeyReference(\dstore\values\booleanValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <delete_table_key_reference_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteTableKeyReferenceNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <delete_table_key_reference_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function clearDeleteTableKeyReferenceNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <delete_table_key_reference_null> value
     *
     * @return boolean
     */
    public function getDeleteTableKeyReferenceNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <delete_table_key_reference_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonPredefVals_Ad\Parameters
     */
    public function setDeleteTableKeyReferenceNull( $value){
      return $this->_set(1010, $value);
    }
  }
}

