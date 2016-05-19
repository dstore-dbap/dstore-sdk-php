<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/ac_GetActions_Ad.proto
//   Date: 2016-05-19 08:07:39

namespace dstore\engine\ac_GetActions_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $status = null;
    
    /**  @var \dstore\values\integerValue */
    public $action_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $command = null;
    
    /**  @var \dstore\values\timestampValue */
    public $date_and_time = null;
    
    /**  @var \dstore\values\integerValue */
    public $command_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $parameter_value = null;
    
    /**  @var \dstore\values\stringValue */
    public $parameter_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.ac_GetActions_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE status = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE action_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "action_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE command = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "command";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE date_and_time = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE command_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "command_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE parameter_value = 20003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20003;
      $f->name      = "parameter_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE parameter_name = 20006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20006;
      $f->name      = "parameter_name";
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
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
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
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <status> has a value
     *
     * @return boolean
     */
    public function hasStatus(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <status> value
     *
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function clearStatus(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <status> value
     *
     * @return \dstore\values\integerValue
     */
    public function getStatus(){
      return $this->_get(10001);
    }
    
    /**
     * Set <status> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function setStatus(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <action_id> has a value
     *
     * @return boolean
     */
    public function hasActionId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <action_id> value
     *
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function clearActionId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <action_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getActionId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <action_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function setActionId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <command> has a value
     *
     * @return boolean
     */
    public function hasCommand(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <command> value
     *
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function clearCommand(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <command> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCommand(){
      return $this->_get(10003);
    }
    
    /**
     * Set <command> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function setCommand(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <date_and_time> has a value
     *
     * @return boolean
     */
    public function hasDateAndTime(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <date_and_time> value
     *
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function clearDateAndTime(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <date_and_time> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getDateAndTime(){
      return $this->_get(10004);
    }
    
    /**
     * Set <date_and_time> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function setDateAndTime(\dstore\values\timestampValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <command_id> has a value
     *
     * @return boolean
     */
    public function hasCommandId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <command_id> value
     *
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function clearCommandId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <command_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCommandId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <command_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function setCommandId(\dstore\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <parameter_value> has a value
     *
     * @return boolean
     */
    public function hasParameterValue(){
      return $this->_has(20003);
    }
    
    /**
     * Clear <parameter_value> value
     *
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function clearParameterValue(){
      return $this->_clear(20003);
    }
    
    /**
     * Get <parameter_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getParameterValue(){
      return $this->_get(20003);
    }
    
    /**
     * Set <parameter_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function setParameterValue(\dstore\values\stringValue $value){
      return $this->_set(20003, $value);
    }
    
    /**
     * Check if <parameter_name> has a value
     *
     * @return boolean
     */
    public function hasParameterName(){
      return $this->_has(20006);
    }
    
    /**
     * Clear <parameter_name> value
     *
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function clearParameterName(){
      return $this->_clear(20006);
    }
    
    /**
     * Get <parameter_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getParameterName(){
      return $this->_get(20006);
    }
    
    /**
     * Set <parameter_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\ac_GetActions_Ad\Response\Row
     */
    public function setParameterName(\dstore\values\stringValue $value){
      return $this->_set(20006, $value);
    }
  }
}

