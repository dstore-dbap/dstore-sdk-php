<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetProcedureNames_Ad.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\do_GetProcedureNames_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $procedure_type = null;
    
    /**  @var \dstore\values\integerValue */
    public $procedure_category_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $procedure_function = null;
    
    /**  @var \dstore\values\stringValue */
    public $procedure_category = null;
    
    /**  @var \dstore\values\stringValue */
    public $actualdstore_version = null;
    
    /**  @var \dstore\values\integerValue */
    public $procedure_type_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $last_edited_at_char = null;
    
    /**  @var \dstore\values\stringValue */
    public $procedure_name = null;
    
    /**  @var \dstore\values\stringValue */
    public $firstdstore_version = null;
    
    /**  @var \dstore\values\stringValue */
    public $author = null;
    
    /**  @var \dstore\values\stringValue */
    public $first_created_at_char = null;
    
    /**  @var \dstore\values\stringValue */
    public $alias_procedure_name = null;
    
    /**  @var \dstore\values\booleanValue */
    public $registered_for_docu = null;
    
    /**  @var \dstore\values\stringValue */
    public $last_created_at_char = null;
    
    /**  @var \dstore\values\booleanValue */
    public $docu_exists = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetProcedureNames_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_type = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "procedure_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_category_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "procedure_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_function = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "procedure_function";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_category = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "procedure_category";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE actualdstore_version = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "actualdstore_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_type_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "procedure_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE last_edited_at_char = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "last_edited_at_char";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_name = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "procedure_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE firstdstore_version = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "firstdstore_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE author = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "author";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE first_created_at_char = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "first_created_at_char";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE alias_procedure_name = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "alias_procedure_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE registered_for_docu = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "registered_for_docu";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE last_created_at_char = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "last_created_at_char";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE docu_exists = 10015
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10015;
      $f->name      = "docu_exists";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
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
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
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
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <procedure_type> has a value
     *
     * @return boolean
     */
    public function hasProcedureType(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <procedure_type> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearProcedureType(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <procedure_type> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProcedureType(){
      return $this->_get(10001);
    }
    
    /**
     * Set <procedure_type> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setProcedureType(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <procedure_category_id> has a value
     *
     * @return boolean
     */
    public function hasProcedureCategoryId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <procedure_category_id> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearProcedureCategoryId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <procedure_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getProcedureCategoryId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <procedure_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setProcedureCategoryId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <procedure_function> has a value
     *
     * @return boolean
     */
    public function hasProcedureFunction(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <procedure_function> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearProcedureFunction(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <procedure_function> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProcedureFunction(){
      return $this->_get(10003);
    }
    
    /**
     * Set <procedure_function> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setProcedureFunction(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <procedure_category> has a value
     *
     * @return boolean
     */
    public function hasProcedureCategory(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <procedure_category> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearProcedureCategory(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <procedure_category> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProcedureCategory(){
      return $this->_get(10004);
    }
    
    /**
     * Set <procedure_category> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setProcedureCategory(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <actualdstore_version> has a value
     *
     * @return boolean
     */
    public function hasActualdstoreVersion(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <actualdstore_version> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearActualdstoreVersion(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <actualdstore_version> value
     *
     * @return \dstore\values\stringValue
     */
    public function getActualdstoreVersion(){
      return $this->_get(10005);
    }
    
    /**
     * Set <actualdstore_version> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setActualdstoreVersion(\dstore\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <procedure_type_id> has a value
     *
     * @return boolean
     */
    public function hasProcedureTypeId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <procedure_type_id> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearProcedureTypeId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <procedure_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getProcedureTypeId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <procedure_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setProcedureTypeId(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <last_edited_at_char> has a value
     *
     * @return boolean
     */
    public function hasLastEditedAtChar(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <last_edited_at_char> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearLastEditedAtChar(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <last_edited_at_char> value
     *
     * @return \dstore\values\stringValue
     */
    public function getLastEditedAtChar(){
      return $this->_get(10007);
    }
    
    /**
     * Set <last_edited_at_char> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setLastEditedAtChar(\dstore\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <procedure_name> has a value
     *
     * @return boolean
     */
    public function hasProcedureName(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <procedure_name> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearProcedureName(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <procedure_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProcedureName(){
      return $this->_get(10008);
    }
    
    /**
     * Set <procedure_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setProcedureName(\dstore\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <firstdstore_version> has a value
     *
     * @return boolean
     */
    public function hasFirstdstoreVersion(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <firstdstore_version> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearFirstdstoreVersion(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <firstdstore_version> value
     *
     * @return \dstore\values\stringValue
     */
    public function getFirstdstoreVersion(){
      return $this->_get(10009);
    }
    
    /**
     * Set <firstdstore_version> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setFirstdstoreVersion(\dstore\values\stringValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <author> has a value
     *
     * @return boolean
     */
    public function hasAuthor(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <author> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearAuthor(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <author> value
     *
     * @return \dstore\values\stringValue
     */
    public function getAuthor(){
      return $this->_get(10010);
    }
    
    /**
     * Set <author> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setAuthor(\dstore\values\stringValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <first_created_at_char> has a value
     *
     * @return boolean
     */
    public function hasFirstCreatedAtChar(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <first_created_at_char> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearFirstCreatedAtChar(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <first_created_at_char> value
     *
     * @return \dstore\values\stringValue
     */
    public function getFirstCreatedAtChar(){
      return $this->_get(10011);
    }
    
    /**
     * Set <first_created_at_char> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setFirstCreatedAtChar(\dstore\values\stringValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <alias_procedure_name> has a value
     *
     * @return boolean
     */
    public function hasAliasProcedureName(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <alias_procedure_name> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearAliasProcedureName(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <alias_procedure_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getAliasProcedureName(){
      return $this->_get(10012);
    }
    
    /**
     * Set <alias_procedure_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setAliasProcedureName(\dstore\values\stringValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <registered_for_docu> has a value
     *
     * @return boolean
     */
    public function hasRegisteredForDocu(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <registered_for_docu> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearRegisteredForDocu(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <registered_for_docu> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getRegisteredForDocu(){
      return $this->_get(10013);
    }
    
    /**
     * Set <registered_for_docu> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setRegisteredForDocu(\dstore\values\booleanValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <last_created_at_char> has a value
     *
     * @return boolean
     */
    public function hasLastCreatedAtChar(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <last_created_at_char> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearLastCreatedAtChar(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <last_created_at_char> value
     *
     * @return \dstore\values\stringValue
     */
    public function getLastCreatedAtChar(){
      return $this->_get(10014);
    }
    
    /**
     * Set <last_created_at_char> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setLastCreatedAtChar(\dstore\values\stringValue $value){
      return $this->_set(10014, $value);
    }
    
    /**
     * Check if <docu_exists> has a value
     *
     * @return boolean
     */
    public function hasDocuExists(){
      return $this->_has(10015);
    }
    
    /**
     * Clear <docu_exists> value
     *
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function clearDocuExists(){
      return $this->_clear(10015);
    }
    
    /**
     * Get <docu_exists> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDocuExists(){
      return $this->_get(10015);
    }
    
    /**
     * Set <docu_exists> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\do_GetProcedureNames_Ad\Response\Row
     */
    public function setDocuExists(\dstore\values\booleanValue $value){
      return $this->_set(10015, $value);
    }
  }
}

