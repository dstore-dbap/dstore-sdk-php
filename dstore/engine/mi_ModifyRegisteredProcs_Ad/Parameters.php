<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_ModifyRegisteredProcs_Ad.proto
//   Date: 2016-05-19 08:07:47

namespace dstore\engine\mi_ModifyRegisteredProcs_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $procedure_id = null;
    
    /**  @var boolean */
    public $procedure_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $procedure_name = null;
    
    /**  @var boolean */
    public $procedure_name_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete_procedure = null;
    
    /**  @var boolean */
    public $delete_procedure_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $check_for_execution_restrictions = null;
    
    /**  @var boolean */
    public $check_for_execution_restrictions_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $log_executions = null;
    
    /**  @var boolean */
    public $log_executions_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_ModifyRegisteredProcs_Ad.Parameters');

      // OPTIONAL MESSAGE procedure_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "procedure_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL procedure_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "procedure_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "procedure_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL procedure_name_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "procedure_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_procedure = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "delete_procedure";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_procedure_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "delete_procedure_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE check_for_execution_restrictions = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "check_for_execution_restrictions";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL check_for_execution_restrictions_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "check_for_execution_restrictions_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE log_executions = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "log_executions";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL log_executions_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "log_executions_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <procedure_id> has a value
     *
     * @return boolean
     */
    public function hasProcedureId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <procedure_id> value
     *
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function clearProcedureId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <procedure_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getProcedureId(){
      return $this->_get(1);
    }
    
    /**
     * Set <procedure_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function setProcedureId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <procedure_id_null> has a value
     *
     * @return boolean
     */
    public function hasProcedureIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <procedure_id_null> value
     *
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function clearProcedureIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <procedure_id_null> value
     *
     * @return boolean
     */
    public function getProcedureIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <procedure_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function setProcedureIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <procedure_name> has a value
     *
     * @return boolean
     */
    public function hasProcedureName(){
      return $this->_has(2);
    }
    
    /**
     * Clear <procedure_name> value
     *
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function clearProcedureName(){
      return $this->_clear(2);
    }
    
    /**
     * Get <procedure_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProcedureName(){
      return $this->_get(2);
    }
    
    /**
     * Set <procedure_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function setProcedureName(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <procedure_name_null> has a value
     *
     * @return boolean
     */
    public function hasProcedureNameNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <procedure_name_null> value
     *
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function clearProcedureNameNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <procedure_name_null> value
     *
     * @return boolean
     */
    public function getProcedureNameNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <procedure_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function setProcedureNameNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <delete_procedure> has a value
     *
     * @return boolean
     */
    public function hasDeleteProcedure(){
      return $this->_has(3);
    }
    
    /**
     * Clear <delete_procedure> value
     *
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function clearDeleteProcedure(){
      return $this->_clear(3);
    }
    
    /**
     * Get <delete_procedure> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDeleteProcedure(){
      return $this->_get(3);
    }
    
    /**
     * Set <delete_procedure> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function setDeleteProcedure(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <delete_procedure_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteProcedureNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <delete_procedure_null> value
     *
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function clearDeleteProcedureNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <delete_procedure_null> value
     *
     * @return boolean
     */
    public function getDeleteProcedureNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <delete_procedure_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function setDeleteProcedureNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <check_for_execution_restrictions> has a value
     *
     * @return boolean
     */
    public function hasCheckForExecutionRestrictions(){
      return $this->_has(4);
    }
    
    /**
     * Clear <check_for_execution_restrictions> value
     *
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function clearCheckForExecutionRestrictions(){
      return $this->_clear(4);
    }
    
    /**
     * Get <check_for_execution_restrictions> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCheckForExecutionRestrictions(){
      return $this->_get(4);
    }
    
    /**
     * Set <check_for_execution_restrictions> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function setCheckForExecutionRestrictions(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <check_for_execution_restrictions_null> has a value
     *
     * @return boolean
     */
    public function hasCheckForExecutionRestrictionsNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <check_for_execution_restrictions_null> value
     *
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function clearCheckForExecutionRestrictionsNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <check_for_execution_restrictions_null> value
     *
     * @return boolean
     */
    public function getCheckForExecutionRestrictionsNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <check_for_execution_restrictions_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function setCheckForExecutionRestrictionsNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <log_executions> has a value
     *
     * @return boolean
     */
    public function hasLogExecutions(){
      return $this->_has(5);
    }
    
    /**
     * Clear <log_executions> value
     *
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function clearLogExecutions(){
      return $this->_clear(5);
    }
    
    /**
     * Get <log_executions> value
     *
     * @return \dstore\values\integerValue
     */
    public function getLogExecutions(){
      return $this->_get(5);
    }
    
    /**
     * Set <log_executions> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function setLogExecutions(\dstore\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <log_executions_null> has a value
     *
     * @return boolean
     */
    public function hasLogExecutionsNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <log_executions_null> value
     *
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function clearLogExecutionsNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <log_executions_null> value
     *
     * @return boolean
     */
    public function getLogExecutionsNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <log_executions_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyRegisteredProcs_Ad\Parameters
     */
    public function setLogExecutionsNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

