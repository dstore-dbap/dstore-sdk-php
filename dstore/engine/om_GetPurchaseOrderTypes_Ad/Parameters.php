<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetPurchaseOrderTypes_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetPurchaseOrderTypes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $order_type_id = null;
    
    /**  @var boolean */
    public $order_type_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetPurchaseOrderTypes_Ad.Parameters');

      // OPTIONAL MESSAGE order_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "order_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "order_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <order_type_id> has a value
     *
     * @return boolean
     */
    public function hasOrderTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <order_type_id> value
     *
     * @return \dstore\engine\om_GetPurchaseOrderTypes_Ad\Parameters
     */
    public function clearOrderTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <order_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOrderTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <order_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPurchaseOrderTypes_Ad\Parameters
     */
    public function setOrderTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <order_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasOrderTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <order_type_id_null> value
     *
     * @return \dstore\engine\om_GetPurchaseOrderTypes_Ad\Parameters
     */
    public function clearOrderTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <order_type_id_null> value
     *
     * @return boolean
     */
    public function getOrderTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <order_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPurchaseOrderTypes_Ad\Parameters
     */
    public function setOrderTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

