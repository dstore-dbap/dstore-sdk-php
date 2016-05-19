<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_InsertPosting_Pu.proto
//   Date: 2016-05-19 08:07:41

namespace dstore\engine\fo_InsertPosting_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $posting_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $posting_characteristic_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\values\integerValue */
    public $error_code = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_InsertPosting_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE posting_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "posting_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE posting_characteristic_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "posting_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE error_code = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "error_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
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
     * @return \dstore\engine\fo_InsertPosting_Pu\Response\Row
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
     * @return \dstore\engine\fo_InsertPosting_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <posting_id> has a value
     *
     * @return boolean
     */
    public function hasPostingId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <posting_id> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Response\Row
     */
    public function clearPostingId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <posting_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPostingId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <posting_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Response\Row
     */
    public function setPostingId(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <posting_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPostingCharacteristicId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <posting_characteristic_id> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Response\Row
     */
    public function clearPostingCharacteristicId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <posting_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPostingCharacteristicId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <posting_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Response\Row
     */
    public function setPostingCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue(){
      return $this->_get(10003);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Response\Row
     */
    public function setValue(\dstore\values\stringValue $value){
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
     * @return \dstore\engine\fo_InsertPosting_Pu\Response\Row
     */
    public function clearErrorCode(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <error_code> value
     *
     * @return \dstore\values\integerValue
     */
    public function getErrorCode(){
      return $this->_get(10004);
    }
    
    /**
     * Set <error_code> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Response\Row
     */
    public function setErrorCode(\dstore\values\integerValue $value){
      return $this->_set(10004, $value);
    }
  }
}

