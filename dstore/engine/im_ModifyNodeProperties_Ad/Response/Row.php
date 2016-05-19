<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_ModifyNodeProperties_Ad.proto
//   Date: 2016-05-19 08:07:43

namespace dstore\engine\im_ModifyNodeProperties_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $node_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $error_code = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_ModifyNodeProperties_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE error_code = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
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
     * @return \dstore\engine\im_ModifyNodeProperties_Ad\Response\Row
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
     * @return \dstore\engine\im_ModifyNodeProperties_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <node_id> has a value
     *
     * @return boolean
     */
    public function hasNodeId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <node_id> value
     *
     * @return \dstore\engine\im_ModifyNodeProperties_Ad\Response\Row
     */
    public function clearNodeId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getNodeId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_ModifyNodeProperties_Ad\Response\Row
     */
    public function setNodeId(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\im_ModifyNodeProperties_Ad\Response\Row
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_ModifyNodeProperties_Ad\Response\Row
     */
    public function setNodeCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <error_code> has a value
     *
     * @return boolean
     */
    public function hasErrorCode(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <error_code> value
     *
     * @return \dstore\engine\im_ModifyNodeProperties_Ad\Response\Row
     */
    public function clearErrorCode(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <error_code> value
     *
     * @return \dstore\values\integerValue
     */
    public function getErrorCode(){
      return $this->_get(10003);
    }
    
    /**
     * Set <error_code> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_ModifyNodeProperties_Ad\Response\Row
     */
    public function setErrorCode(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
  }
}

