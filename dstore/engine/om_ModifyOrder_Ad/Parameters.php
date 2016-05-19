<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyOrder_Ad.proto
//   Date: 2016-05-19 08:07:52

namespace dstore\engine\om_ModifyOrder_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $order_id = null;
    
    /**  @var boolean */
    public $order_id_null = null;
    
    /**  @var \dstore\values\timestampValue */
    public $delivery_date_and_time = null;
    
    /**  @var boolean */
    public $delivery_date_and_time_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $order_no = null;
    
    /**  @var boolean */
    public $order_no_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyOrder_Ad.Parameters');

      // OPTIONAL MESSAGE order_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "order_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "order_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delivery_date_and_time = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "delivery_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delivery_date_and_time_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "delivery_date_and_time_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_no = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "order_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_no_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "order_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <order_id> has a value
     *
     * @return boolean
     */
    public function hasOrderId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <order_id> value
     *
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function clearOrderId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <order_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrderId(){
      return $this->_get(1);
    }
    
    /**
     * Set <order_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function setOrderId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <order_id_null> has a value
     *
     * @return boolean
     */
    public function hasOrderIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <order_id_null> value
     *
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function clearOrderIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <order_id_null> value
     *
     * @return boolean
     */
    public function getOrderIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <order_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function setOrderIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <delivery_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasDeliveryDateAndTime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <delivery_date_and_time> value
     *
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function clearDeliveryDateAndTime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <delivery_date_and_time> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getDeliveryDateAndTime(){
      return $this->_get(2);
    }
    
    /**
     * Set <delivery_date_and_time> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function setDeliveryDateAndTime(\dstore\values\timestampValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <delivery_date_and_time_null> has a value
     *
     * @return boolean
     */
    public function hasDeliveryDateAndTimeNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <delivery_date_and_time_null> value
     *
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function clearDeliveryDateAndTimeNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <delivery_date_and_time_null> value
     *
     * @return boolean
     */
    public function getDeliveryDateAndTimeNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <delivery_date_and_time_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function setDeliveryDateAndTimeNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <order_no> has a value
     *
     * @return boolean
     */
    public function hasOrderNo(){
      return $this->_has(3);
    }
    
    /**
     * Clear <order_no> value
     *
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function clearOrderNo(){
      return $this->_clear(3);
    }
    
    /**
     * Get <order_no> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOrderNo(){
      return $this->_get(3);
    }
    
    /**
     * Set <order_no> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function setOrderNo(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <order_no_null> has a value
     *
     * @return boolean
     */
    public function hasOrderNoNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <order_no_null> value
     *
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function clearOrderNoNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <order_no_null> value
     *
     * @return boolean
     */
    public function getOrderNoNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <order_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyOrder_Ad\Parameters
     */
    public function setOrderNoNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

