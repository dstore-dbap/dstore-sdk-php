<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonPredefinedVals_Pu.proto
//   Date: 2016-05-19 08:07:54

namespace dstore\engine\pm_GetPersonPredefinedVals_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $table_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value_restricted_by_pattern = null;
    
    /**  @var \dstore\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\values\booleanValue */
    public $is_currently_valid = null;
    
    /**  @var \dstore\values\integerValue */
    public $table_key_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $value_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $sort_no = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonPredefinedVals_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "table_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_restricted_by_pattern = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "value_restricted_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_currently_valid = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "is_currently_valid";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_key_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "table_key_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
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
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
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
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <table_id> has a value
     *
     * @return boolean
     */
    public function hasTableId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <table_id> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function clearTableId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <table_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTableId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <table_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function setTableId(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <value_restricted_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasValueRestrictedByPattern(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <value_restricted_by_pattern> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function clearValueRestrictedByPattern(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <value_restricted_by_pattern> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValueRestrictedByPattern(){
      return $this->_get(10002);
    }
    
    /**
     * Set <value_restricted_by_pattern> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function setValueRestrictedByPattern(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue(){
      return $this->_get(10003);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function setValue(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <is_currently_valid> has a value
     *
     * @return boolean
     */
    public function hasIsCurrentlyValid(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <is_currently_valid> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function clearIsCurrentlyValid(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <is_currently_valid> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getIsCurrentlyValid(){
      return $this->_get(10004);
    }
    
    /**
     * Set <is_currently_valid> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function setIsCurrentlyValid(\dstore\values\booleanValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <table_key_id> has a value
     *
     * @return boolean
     */
    public function hasTableKeyId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <table_key_id> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function clearTableKeyId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <table_key_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTableKeyId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <table_key_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function setTableKeyId(\dstore\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function clearValueId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getValueId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function setValueId(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function clearSortNo(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(10007);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonPredefinedVals_Pu\Response\Row
     */
    public function setSortNo(\dstore\values\integerValue $value){
      return $this->_set(10007, $value);
    }
  }
}

