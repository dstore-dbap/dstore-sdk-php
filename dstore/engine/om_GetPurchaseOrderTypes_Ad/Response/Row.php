<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetPurchaseOrderTypes_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetPurchaseOrderTypes_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $order_type_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $order_type_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetPurchaseOrderTypes_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_type_description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "order_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_type_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "order_type_id";
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
     * @return \dstore\engine\om_GetPurchaseOrderTypes_Ad\Response\Row
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
     * @return \dstore\engine\om_GetPurchaseOrderTypes_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <order_type_description> has a value
     *
     * @return boolean
     */
    public function hasOrderTypeDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <order_type_description> value
     *
     * @return \dstore\engine\om_GetPurchaseOrderTypes_Ad\Response\Row
     */
    public function clearOrderTypeDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <order_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOrderTypeDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <order_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetPurchaseOrderTypes_Ad\Response\Row
     */
    public function setOrderTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <order_type_id> has a value
     *
     * @return boolean
     */
    public function hasOrderTypeId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <order_type_id> value
     *
     * @return \dstore\engine\om_GetPurchaseOrderTypes_Ad\Response\Row
     */
    public function clearOrderTypeId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <order_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOrderTypeId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <order_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPurchaseOrderTypes_Ad\Response\Row
     */
    public function setOrderTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
  }
}

