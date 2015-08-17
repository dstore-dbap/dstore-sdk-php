<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetProcedureHistory_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\do_GetProcedureHistory_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $comment = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $version_sort_no = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $dstore_version = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $procedure_name = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $main_docu_updated = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetProcedureHistory_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE comment = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "comment";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE version_sort_no = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "version_sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE dstore_version = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "dstore_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_name = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "procedure_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE main_docu_updated = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "main_docu_updated";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
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
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
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
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <comment> has a value
     *
     * @return boolean
     */
    public function hasComment(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <comment> value
     *
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function clearComment(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <comment> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getComment(){
      return $this->_get(10001);
    }
    
    /**
     * Set <comment> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function setComment(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <version_sort_no> has a value
     *
     * @return boolean
     */
    public function hasVersionSortNo(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <version_sort_no> value
     *
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function clearVersionSortNo(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <version_sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVersionSortNo(){
      return $this->_get(10002);
    }
    
    /**
     * Set <version_sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function setVersionSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <dstore_version> has a value
     *
     * @return boolean
     */
    public function hasDstoreVersion(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <dstore_version> value
     *
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function clearDstoreVersion(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <dstore_version> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDstoreVersion(){
      return $this->_get(10003);
    }
    
    /**
     * Set <dstore_version> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function setDstoreVersion(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <procedure_name> has a value
     *
     * @return boolean
     */
    public function hasProcedureName(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <procedure_name> value
     *
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function clearProcedureName(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <procedure_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getProcedureName(){
      return $this->_get(10004);
    }
    
    /**
     * Set <procedure_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function setProcedureName(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <main_docu_updated> has a value
     *
     * @return boolean
     */
    public function hasMainDocuUpdated(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <main_docu_updated> value
     *
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function clearMainDocuUpdated(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <main_docu_updated> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getMainDocuUpdated(){
      return $this->_get(10005);
    }
    
    /**
     * Set <main_docu_updated> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Response\Row
     */
    public function setMainDocuUpdated(\dstore\engine\values\booleanValue $value){
      return $this->_set(10005, $value);
    }
  }
}

