<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetProcedureNames_Ad.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\do_GetProcedureNames_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $procedure_category_id = null;
    
    /**  @var boolean */
    public $procedure_category_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $procedure_type_id = null;
    
    /**  @var boolean */
    public $procedure_type_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $actual_version = null;
    
    /**  @var boolean */
    public $actual_version_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $procedure_name = null;
    
    /**  @var boolean */
    public $procedure_name_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $get_procs_with_missing_docu = null;
    
    /**  @var boolean */
    public $get_procs_with_missing_docu_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetProcedureNames_Ad.Parameters');

      // OPTIONAL MESSAGE procedure_category_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "procedure_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL procedure_category_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "procedure_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "procedure_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL procedure_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "procedure_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE actual_version = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "actual_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL actual_version_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "actual_version_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_name = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "procedure_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL procedure_name_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "procedure_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_procs_with_missing_docu = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "get_procs_with_missing_docu";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_procs_with_missing_docu_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "get_procs_with_missing_docu_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <procedure_category_id> has a value
     *
     * @return boolean
     */
    public function hasProcedureCategoryId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <procedure_category_id> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function clearProcedureCategoryId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <procedure_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getProcedureCategoryId(){
      return $this->_get(1);
    }
    
    /**
     * Set <procedure_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function setProcedureCategoryId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <procedure_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasProcedureCategoryIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <procedure_category_id_null> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function clearProcedureCategoryIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <procedure_category_id_null> value
     *
     * @return boolean
     */
    public function getProcedureCategoryIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <procedure_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function setProcedureCategoryIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <procedure_type_id> has a value
     *
     * @return boolean
     */
    public function hasProcedureTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <procedure_type_id> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function clearProcedureTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <procedure_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getProcedureTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <procedure_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function setProcedureTypeId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <procedure_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasProcedureTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <procedure_type_id_null> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function clearProcedureTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <procedure_type_id_null> value
     *
     * @return boolean
     */
    public function getProcedureTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <procedure_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function setProcedureTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <actual_version> has a value
     *
     * @return boolean
     */
    public function hasActualVersion(){
      return $this->_has(3);
    }
    
    /**
     * Clear <actual_version> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function clearActualVersion(){
      return $this->_clear(3);
    }
    
    /**
     * Get <actual_version> value
     *
     * @return \dstore\values\stringValue
     */
    public function getActualVersion(){
      return $this->_get(3);
    }
    
    /**
     * Set <actual_version> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function setActualVersion(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <actual_version_null> has a value
     *
     * @return boolean
     */
    public function hasActualVersionNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <actual_version_null> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function clearActualVersionNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <actual_version_null> value
     *
     * @return boolean
     */
    public function getActualVersionNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <actual_version_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function setActualVersionNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <procedure_name> has a value
     *
     * @return boolean
     */
    public function hasProcedureName(){
      return $this->_has(4);
    }
    
    /**
     * Clear <procedure_name> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function clearProcedureName(){
      return $this->_clear(4);
    }
    
    /**
     * Get <procedure_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProcedureName(){
      return $this->_get(4);
    }
    
    /**
     * Set <procedure_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function setProcedureName(\dstore\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <procedure_name_null> has a value
     *
     * @return boolean
     */
    public function hasProcedureNameNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <procedure_name_null> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function clearProcedureNameNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <procedure_name_null> value
     *
     * @return boolean
     */
    public function getProcedureNameNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <procedure_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function setProcedureNameNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <get_procs_with_missing_docu> has a value
     *
     * @return boolean
     */
    public function hasGetProcsWithMissingDocu(){
      return $this->_has(5);
    }
    
    /**
     * Clear <get_procs_with_missing_docu> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function clearGetProcsWithMissingDocu(){
      return $this->_clear(5);
    }
    
    /**
     * Get <get_procs_with_missing_docu> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getGetProcsWithMissingDocu(){
      return $this->_get(5);
    }
    
    /**
     * Set <get_procs_with_missing_docu> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function setGetProcsWithMissingDocu(\dstore\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <get_procs_with_missing_docu_null> has a value
     *
     * @return boolean
     */
    public function hasGetProcsWithMissingDocuNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <get_procs_with_missing_docu_null> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function clearGetProcsWithMissingDocuNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <get_procs_with_missing_docu_null> value
     *
     * @return boolean
     */
    public function getGetProcsWithMissingDocuNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <get_procs_with_missing_docu_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Parameters
     */
    public function setGetProcsWithMissingDocuNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

