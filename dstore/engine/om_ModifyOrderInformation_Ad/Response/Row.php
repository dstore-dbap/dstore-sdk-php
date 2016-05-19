<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyOrderInformation_Ad.proto
//   Date: 2016-05-19 08:07:52

namespace dstore\engine\om_ModifyOrderInformation_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $information_type_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $error_code = null;
    
    /**  @var \dstore\values\integerValue */
    public $order_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyOrderInformation_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE error_code = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "error_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "order_id";
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
     * @return \dstore\engine\om_ModifyOrderInformation_Ad\Response\Row
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
     * @return \dstore\engine\om_ModifyOrderInformation_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\om_ModifyOrderInformation_Ad\Response\Row
     */
    public function clearInformationTypeId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrderInformation_Ad\Response\Row
     */
    public function setInformationTypeId(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <error_code> has a value
     *
     * @return boolean
     */
    public function hasErrorCode(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <error_code> value
     *
     * @return \dstore\engine\om_ModifyOrderInformation_Ad\Response\Row
     */
    public function clearErrorCode(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <error_code> value
     *
     * @return \dstore\values\integerValue
     */
    public function getErrorCode(){
      return $this->_get(10002);
    }
    
    /**
     * Set <error_code> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrderInformation_Ad\Response\Row
     */
    public function setErrorCode(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <order_id> has a value
     *
     * @return boolean
     */
    public function hasOrderId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <order_id> value
     *
     * @return \dstore\engine\om_ModifyOrderInformation_Ad\Response\Row
     */
    public function clearOrderId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <order_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrderId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <order_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrderInformation_Ad\Response\Row
     */
    public function setOrderId(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
  }
}

