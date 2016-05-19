<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetProcedureCode_Ad.proto
//   Date: 2016-05-19 08:07:45

namespace dstore\engine\mi_GetProcedureCode_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $procedure_name = null;
    
    /**  @var boolean */
    public $procedure_name_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $only_proc_header = null;
    
    /**  @var boolean */
    public $only_proc_header_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $ignore_comments = null;
    
    /**  @var boolean */
    public $ignore_comments_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $get_code_lines_as_result_set = null;
    
    /**  @var boolean */
    public $get_code_lines_as_result_set_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $include_statements_for_creation = null;
    
    /**  @var boolean */
    public $include_statements_for_creation_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $database_name = null;
    
    /**  @var boolean */
    public $database_name_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetProcedureCode_Ad.Parameters');

      // OPTIONAL MESSAGE procedure_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "procedure_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL procedure_name_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "procedure_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_proc_header = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "only_proc_header";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_proc_header_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "only_proc_header_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE ignore_comments = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "ignore_comments";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL ignore_comments_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "ignore_comments_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_code_lines_as_result_set = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "get_code_lines_as_result_set";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_code_lines_as_result_set_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "get_code_lines_as_result_set_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_statements_for_creation = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "include_statements_for_creation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_statements_for_creation_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "include_statements_for_creation_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE database_name = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "database_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL database_name_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "database_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <procedure_name> has a value
     *
     * @return boolean
     */
    public function hasProcedureName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <procedure_name> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearProcedureName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <procedure_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProcedureName(){
      return $this->_get(1);
    }
    
    /**
     * Set <procedure_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setProcedureName(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <procedure_name_null> has a value
     *
     * @return boolean
     */
    public function hasProcedureNameNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <procedure_name_null> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearProcedureNameNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <procedure_name_null> value
     *
     * @return boolean
     */
    public function getProcedureNameNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <procedure_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setProcedureNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <only_proc_header> has a value
     *
     * @return boolean
     */
    public function hasOnlyProcHeader(){
      return $this->_has(2);
    }
    
    /**
     * Clear <only_proc_header> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearOnlyProcHeader(){
      return $this->_clear(2);
    }
    
    /**
     * Get <only_proc_header> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getOnlyProcHeader(){
      return $this->_get(2);
    }
    
    /**
     * Set <only_proc_header> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setOnlyProcHeader(\dstore\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <only_proc_header_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyProcHeaderNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <only_proc_header_null> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearOnlyProcHeaderNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <only_proc_header_null> value
     *
     * @return boolean
     */
    public function getOnlyProcHeaderNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <only_proc_header_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setOnlyProcHeaderNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <ignore_comments> has a value
     *
     * @return boolean
     */
    public function hasIgnoreComments(){
      return $this->_has(3);
    }
    
    /**
     * Clear <ignore_comments> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearIgnoreComments(){
      return $this->_clear(3);
    }
    
    /**
     * Get <ignore_comments> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getIgnoreComments(){
      return $this->_get(3);
    }
    
    /**
     * Set <ignore_comments> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setIgnoreComments(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <ignore_comments_null> has a value
     *
     * @return boolean
     */
    public function hasIgnoreCommentsNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <ignore_comments_null> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearIgnoreCommentsNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <ignore_comments_null> value
     *
     * @return boolean
     */
    public function getIgnoreCommentsNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <ignore_comments_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setIgnoreCommentsNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <get_code_lines_as_result_set> has a value
     *
     * @return boolean
     */
    public function hasGetCodeLinesAsResultSet(){
      return $this->_has(4);
    }
    
    /**
     * Clear <get_code_lines_as_result_set> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearGetCodeLinesAsResultSet(){
      return $this->_clear(4);
    }
    
    /**
     * Get <get_code_lines_as_result_set> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getGetCodeLinesAsResultSet(){
      return $this->_get(4);
    }
    
    /**
     * Set <get_code_lines_as_result_set> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setGetCodeLinesAsResultSet(\dstore\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <get_code_lines_as_result_set_null> has a value
     *
     * @return boolean
     */
    public function hasGetCodeLinesAsResultSetNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <get_code_lines_as_result_set_null> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearGetCodeLinesAsResultSetNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <get_code_lines_as_result_set_null> value
     *
     * @return boolean
     */
    public function getGetCodeLinesAsResultSetNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <get_code_lines_as_result_set_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setGetCodeLinesAsResultSetNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <include_statements_for_creation> has a value
     *
     * @return boolean
     */
    public function hasIncludeStatementsForCreation(){
      return $this->_has(5);
    }
    
    /**
     * Clear <include_statements_for_creation> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearIncludeStatementsForCreation(){
      return $this->_clear(5);
    }
    
    /**
     * Get <include_statements_for_creation> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getIncludeStatementsForCreation(){
      return $this->_get(5);
    }
    
    /**
     * Set <include_statements_for_creation> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setIncludeStatementsForCreation(\dstore\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <include_statements_for_creation_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeStatementsForCreationNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <include_statements_for_creation_null> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearIncludeStatementsForCreationNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <include_statements_for_creation_null> value
     *
     * @return boolean
     */
    public function getIncludeStatementsForCreationNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <include_statements_for_creation_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setIncludeStatementsForCreationNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <database_name> has a value
     *
     * @return boolean
     */
    public function hasDatabaseName(){
      return $this->_has(6);
    }
    
    /**
     * Clear <database_name> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearDatabaseName(){
      return $this->_clear(6);
    }
    
    /**
     * Get <database_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDatabaseName(){
      return $this->_get(6);
    }
    
    /**
     * Set <database_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setDatabaseName(\dstore\values\stringValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <database_name_null> has a value
     *
     * @return boolean
     */
    public function hasDatabaseNameNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <database_name_null> value
     *
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function clearDatabaseNameNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <database_name_null> value
     *
     * @return boolean
     */
    public function getDatabaseNameNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <database_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetProcedureCode_Ad\Parameters
     */
    public function setDatabaseNameNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

