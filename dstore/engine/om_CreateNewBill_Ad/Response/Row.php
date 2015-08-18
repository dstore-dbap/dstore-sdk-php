<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_CreateNewBill_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_CreateNewBill_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $table_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $information_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $table_key_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $error_code = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_CreateNewBill_Ad.Response.Row');

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
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_key_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "table_key_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE error_code = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "error_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
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
     * @return \dstore\engine\om_CreateNewBill_Ad\Response\Row
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
     * @return \dstore\engine\om_CreateNewBill_Ad\Response\Row
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
     * @return \dstore\engine\om_CreateNewBill_Ad\Response\Row
     */
    public function clearTableId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <table_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTableId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <table_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_CreateNewBill_Ad\Response\Row
     */
    public function setTableId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\om_CreateNewBill_Ad\Response\Row
     */
    public function clearInformationTypeId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_CreateNewBill_Ad\Response\Row
     */
    public function setInformationTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <table_key_id> has a value
     *
     * @return boolean
     */
    public function hasTableKeyId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <table_key_id> value
     *
     * @return \dstore\engine\om_CreateNewBill_Ad\Response\Row
     */
    public function clearTableKeyId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <table_key_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTableKeyId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <table_key_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_CreateNewBill_Ad\Response\Row
     */
    public function setTableKeyId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <error_code> has a value
     *
     * @return boolean
     */
    public function hasErrorCode(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <error_code> value
     *
     * @return \dstore\engine\om_CreateNewBill_Ad\Response\Row
     */
    public function clearErrorCode(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <error_code> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getErrorCode(){
      return $this->_get(10004);
    }
    
    /**
     * Set <error_code> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_CreateNewBill_Ad\Response\Row
     */
    public function setErrorCode(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
  }
}
