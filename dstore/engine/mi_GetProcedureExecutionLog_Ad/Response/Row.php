<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetProcedureExecutionLog_Ad.proto
//   Date: 2016-05-19 08:07:45

namespace dstore\engine\mi_GetProcedureExecutionLog_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\timestampValue */
    public $execution_date_and_time = null;
    
    /**  @var \dstore\values\stringValue */
    public $unique_value = null;
    
    /**  @var \dstore\values\integerValue */
    public $executed_by_user_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $executed_by_user_name = null;
    
    /**  @var \dstore\values\integerValue */
    public $engine_number = null;
    
    /**  @var \dstore\values\integerValue */
    public $return_code = null;
    
    /**  @var \dstore\values\stringValue */
    public $execution_date_and_time_char = null;
    
    /**  @var \dstore\values\integerValue */
    public $server_process_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $execution_timems = null;
    
    /**  @var \dstore\values\stringValue */
    public $program_name = null;
    
    /**  @var \dstore\values\integerValue */
    public $executed_on_nesting_level = null;
    
    /**  @var \dstore\values\stringValue */
    public $host_name = null;
    
    /**  @var \dstore\values\stringValue */
    public $parameter_value = null;
    
    /**  @var \dstore\values\stringValue */
    public $parameter_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetProcedureExecutionLog_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE execution_date_and_time = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "execution_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unique_value = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "unique_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE executed_by_user_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "executed_by_user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE executed_by_user_name = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "executed_by_user_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE engine_number = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "engine_number";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE return_code = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "return_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE execution_date_and_time_char = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "execution_date_and_time_char";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE server_process_id = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "server_process_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE execution_timems = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "execution_timems";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE program_name = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "program_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE executed_on_nesting_level = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "executed_on_nesting_level";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE host_name = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "host_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE parameter_value = 20004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20004;
      $f->name      = "parameter_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE parameter_name = 20005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20005;
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
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <execution_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasExecutionDateAndTime(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <execution_date_and_time> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearExecutionDateAndTime(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <execution_date_and_time> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getExecutionDateAndTime(){
      return $this->_get(10001);
    }
    
    /**
     * Set <execution_date_and_time> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setExecutionDateAndTime(\dstore\values\timestampValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <unique_value> has a value
     *
     * @return boolean
     */
    public function hasUniqueValue(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <unique_value> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearUniqueValue(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <unique_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUniqueValue(){
      return $this->_get(10002);
    }
    
    /**
     * Set <unique_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setUniqueValue(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <executed_by_user_id> has a value
     *
     * @return boolean
     */
    public function hasExecutedByUserId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <executed_by_user_id> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearExecutedByUserId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <executed_by_user_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getExecutedByUserId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <executed_by_user_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setExecutedByUserId(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <executed_by_user_name> has a value
     *
     * @return boolean
     */
    public function hasExecutedByUserName(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <executed_by_user_name> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearExecutedByUserName(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <executed_by_user_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getExecutedByUserName(){
      return $this->_get(10004);
    }
    
    /**
     * Set <executed_by_user_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setExecutedByUserName(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <engine_number> has a value
     *
     * @return boolean
     */
    public function hasEngineNumber(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <engine_number> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearEngineNumber(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <engine_number> value
     *
     * @return \dstore\values\integerValue
     */
    public function getEngineNumber(){
      return $this->_get(10005);
    }
    
    /**
     * Set <engine_number> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setEngineNumber(\dstore\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <return_code> has a value
     *
     * @return boolean
     */
    public function hasReturnCode(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <return_code> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearReturnCode(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <return_code> value
     *
     * @return \dstore\values\integerValue
     */
    public function getReturnCode(){
      return $this->_get(10006);
    }
    
    /**
     * Set <return_code> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setReturnCode(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <execution_date_and_time_char> has a value
     *
     * @return boolean
     */
    public function hasExecutionDateAndTimeChar(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <execution_date_and_time_char> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearExecutionDateAndTimeChar(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <execution_date_and_time_char> value
     *
     * @return \dstore\values\stringValue
     */
    public function getExecutionDateAndTimeChar(){
      return $this->_get(10007);
    }
    
    /**
     * Set <execution_date_and_time_char> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setExecutionDateAndTimeChar(\dstore\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <server_process_id> has a value
     *
     * @return boolean
     */
    public function hasServerProcessId(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <server_process_id> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearServerProcessId(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <server_process_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getServerProcessId(){
      return $this->_get(10008);
    }
    
    /**
     * Set <server_process_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setServerProcessId(\dstore\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <execution_timems> has a value
     *
     * @return boolean
     */
    public function hasExecutionTimems(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <execution_timems> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearExecutionTimems(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <execution_timems> value
     *
     * @return \dstore\values\integerValue
     */
    public function getExecutionTimems(){
      return $this->_get(10009);
    }
    
    /**
     * Set <execution_timems> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setExecutionTimems(\dstore\values\integerValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <program_name> has a value
     *
     * @return boolean
     */
    public function hasProgramName(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <program_name> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearProgramName(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <program_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProgramName(){
      return $this->_get(10010);
    }
    
    /**
     * Set <program_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setProgramName(\dstore\values\stringValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <executed_on_nesting_level> has a value
     *
     * @return boolean
     */
    public function hasExecutedOnNestingLevel(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <executed_on_nesting_level> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearExecutedOnNestingLevel(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <executed_on_nesting_level> value
     *
     * @return \dstore\values\integerValue
     */
    public function getExecutedOnNestingLevel(){
      return $this->_get(10011);
    }
    
    /**
     * Set <executed_on_nesting_level> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setExecutedOnNestingLevel(\dstore\values\integerValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <host_name> has a value
     *
     * @return boolean
     */
    public function hasHostName(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <host_name> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearHostName(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <host_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getHostName(){
      return $this->_get(10012);
    }
    
    /**
     * Set <host_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setHostName(\dstore\values\stringValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <parameter_value> has a value
     *
     * @return boolean
     */
    public function hasParameterValue(){
      return $this->_has(20004);
    }
    
    /**
     * Clear <parameter_value> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearParameterValue(){
      return $this->_clear(20004);
    }
    
    /**
     * Get <parameter_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getParameterValue(){
      return $this->_get(20004);
    }
    
    /**
     * Set <parameter_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setParameterValue(\dstore\values\stringValue $value){
      return $this->_set(20004, $value);
    }
    
    /**
     * Check if <parameter_name> has a value
     *
     * @return boolean
     */
    public function hasParameterName(){
      return $this->_has(20005);
    }
    
    /**
     * Clear <parameter_name> value
     *
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function clearParameterName(){
      return $this->_clear(20005);
    }
    
    /**
     * Get <parameter_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getParameterName(){
      return $this->_get(20005);
    }
    
    /**
     * Set <parameter_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetProcedureExecutionLog_Ad\Response\Row
     */
    public function setParameterName(\dstore\values\stringValue $value){
      return $this->_set(20005, $value);
    }
  }
}

