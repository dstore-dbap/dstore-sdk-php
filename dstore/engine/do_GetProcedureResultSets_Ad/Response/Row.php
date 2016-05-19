<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetProcedureResultSets_Ad.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\do_GetProcedureResultSets_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $condition = null;
    
    /**  @var \dstore\values\integerValue */
    public $procedure_result_condition_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $description_valid_since_version = null;
    
    /**  @var \dstore\values\stringValue */
    public $description = null;
    
    /**  @var \dstore\values\integerValue */
    public $precision_value = null;
    
    /**  @var \dstore\values\stringValue */
    public $parameter_name = null;
    
    /**  @var \dstore\values\integerValue */
    public $scale = null;
    
    /**  @var \dstore\values\integerValue */
    public $sort_no = null;
    
    /**  @var \dstore\values\stringValue */
    public $result_column_name = null;
    
    /**  @var \dstore\values\integerValue */
    public $length = null;
    
    /**  @var \dstore\values\timestampValue */
    public $description_last_edited = null;
    
    /**  @var \dstore\values\stringValue */
    public $introduced_indstore_version = null;
    
    /**  @var \dstore\values\stringValue */
    public $data_type = null;
    
    /**  @var \dstore\values\stringValue */
    public $proc_result_cond_description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetProcedureResultSets_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "condition";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_result_condition_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "procedure_result_condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description_valid_since_version = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "description_valid_since_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precision_value = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "precision_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE parameter_name = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "parameter_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE scale = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "scale";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE result_column_name = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "result_column_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE length = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "length";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description_last_edited = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "description_last_edited";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE introduced_indstore_version = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "introduced_indstore_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE data_type = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "data_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE proc_result_cond_description = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "proc_result_cond_description";
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
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
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
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <condition> has a value
     *
     * @return boolean
     */
    public function hasCondition(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <condition> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearCondition(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <condition> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCondition(){
      return $this->_get(10001);
    }
    
    /**
     * Set <condition> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setCondition(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <procedure_result_condition_id> has a value
     *
     * @return boolean
     */
    public function hasProcedureResultConditionId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <procedure_result_condition_id> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearProcedureResultConditionId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <procedure_result_condition_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getProcedureResultConditionId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <procedure_result_condition_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setProcedureResultConditionId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <description_valid_since_version> has a value
     *
     * @return boolean
     */
    public function hasDescriptionValidSinceVersion(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <description_valid_since_version> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearDescriptionValidSinceVersion(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <description_valid_since_version> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDescriptionValidSinceVersion(){
      return $this->_get(10003);
    }
    
    /**
     * Set <description_valid_since_version> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setDescriptionValidSinceVersion(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <description> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearDescription(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDescription(){
      return $this->_get(10004);
    }
    
    /**
     * Set <description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setDescription(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <precision_value> has a value
     *
     * @return boolean
     */
    public function hasPrecisionValue(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <precision_value> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearPrecisionValue(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <precision_value> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPrecisionValue(){
      return $this->_get(10005);
    }
    
    /**
     * Set <precision_value> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setPrecisionValue(\dstore\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <parameter_name> has a value
     *
     * @return boolean
     */
    public function hasParameterName(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <parameter_name> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearParameterName(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <parameter_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getParameterName(){
      return $this->_get(10006);
    }
    
    /**
     * Set <parameter_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setParameterName(\dstore\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <scale> has a value
     *
     * @return boolean
     */
    public function hasScale(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <scale> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearScale(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <scale> value
     *
     * @return \dstore\values\integerValue
     */
    public function getScale(){
      return $this->_get(10007);
    }
    
    /**
     * Set <scale> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setScale(\dstore\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearSortNo(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(10008);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setSortNo(\dstore\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <result_column_name> has a value
     *
     * @return boolean
     */
    public function hasResultColumnName(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <result_column_name> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearResultColumnName(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <result_column_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getResultColumnName(){
      return $this->_get(10009);
    }
    
    /**
     * Set <result_column_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setResultColumnName(\dstore\values\stringValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <length> has a value
     *
     * @return boolean
     */
    public function hasLength(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <length> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearLength(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <length> value
     *
     * @return \dstore\values\integerValue
     */
    public function getLength(){
      return $this->_get(10010);
    }
    
    /**
     * Set <length> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setLength(\dstore\values\integerValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <description_last_edited> has a value
     *
     * @return boolean
     */
    public function hasDescriptionLastEdited(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <description_last_edited> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearDescriptionLastEdited(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <description_last_edited> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getDescriptionLastEdited(){
      return $this->_get(10011);
    }
    
    /**
     * Set <description_last_edited> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setDescriptionLastEdited(\dstore\values\timestampValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <introduced_indstore_version> has a value
     *
     * @return boolean
     */
    public function hasIntroducedIndstoreVersion(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <introduced_indstore_version> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearIntroducedIndstoreVersion(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <introduced_indstore_version> value
     *
     * @return \dstore\values\stringValue
     */
    public function getIntroducedIndstoreVersion(){
      return $this->_get(10012);
    }
    
    /**
     * Set <introduced_indstore_version> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setIntroducedIndstoreVersion(\dstore\values\stringValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <data_type> has a value
     *
     * @return boolean
     */
    public function hasDataType(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <data_type> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearDataType(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <data_type> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDataType(){
      return $this->_get(10013);
    }
    
    /**
     * Set <data_type> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setDataType(\dstore\values\stringValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <proc_result_cond_description> has a value
     *
     * @return boolean
     */
    public function hasProcResultCondDescription(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <proc_result_cond_description> value
     *
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function clearProcResultCondDescription(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <proc_result_cond_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProcResultCondDescription(){
      return $this->_get(10014);
    }
    
    /**
     * Set <proc_result_cond_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureResultSets_Ad\Response\Row
     */
    public function setProcResultCondDescription(\dstore\values\stringValue $value){
      return $this->_set(10014, $value);
    }
  }
}

