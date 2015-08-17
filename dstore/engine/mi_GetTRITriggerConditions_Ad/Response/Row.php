<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetTRITriggerConditions_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetTRITriggerConditions_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $operator = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $condition = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $negate_condition = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $check_each_affected_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $condition_number = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $str_to_compare = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetTRITriggerConditions_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE operator = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "operator";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "condition";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE negate_condition = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "negate_condition";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE check_each_affected_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "check_each_affected_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition_number = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "condition_number";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE str_to_compare = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "str_to_compare";
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
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <operator> has a value
     *
     * @return boolean
     */
    public function hasOperator(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <operator> value
     *
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function clearOperator(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <operator> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOperator(){
      return $this->_get(10001);
    }
    
    /**
     * Set <operator> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function setOperator(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <condition> has a value
     *
     * @return boolean
     */
    public function hasCondition(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <condition> value
     *
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function clearCondition(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <condition> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCondition(){
      return $this->_get(10002);
    }
    
    /**
     * Set <condition> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function setCondition(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <negate_condition> has a value
     *
     * @return boolean
     */
    public function hasNegateCondition(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <negate_condition> value
     *
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function clearNegateCondition(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <negate_condition> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getNegateCondition(){
      return $this->_get(10003);
    }
    
    /**
     * Set <negate_condition> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function setNegateCondition(\dstore\engine\values\booleanValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <check_each_affected_id> has a value
     *
     * @return boolean
     */
    public function hasCheckEachAffectedId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <check_each_affected_id> value
     *
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function clearCheckEachAffectedId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <check_each_affected_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCheckEachAffectedId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <check_each_affected_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function setCheckEachAffectedId(\dstore\engine\values\booleanValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <condition_number> has a value
     *
     * @return boolean
     */
    public function hasConditionNumber(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <condition_number> value
     *
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function clearConditionNumber(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <condition_number> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getConditionNumber(){
      return $this->_get(10005);
    }
    
    /**
     * Set <condition_number> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function setConditionNumber(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <str_to_compare> has a value
     *
     * @return boolean
     */
    public function hasStrToCompare(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <str_to_compare> value
     *
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function clearStrToCompare(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <str_to_compare> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getStrToCompare(){
      return $this->_get(10006);
    }
    
    /**
     * Set <str_to_compare> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTRITriggerConditions_Ad\Response\Row
     */
    public function setStrToCompare(\dstore\engine\values\stringValue $value){
      return $this->_set(10006, $value);
    }
  }
}

