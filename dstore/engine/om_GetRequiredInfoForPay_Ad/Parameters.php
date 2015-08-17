<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetRequiredInfoForPay_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetRequiredInfoForPay_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $payment_for_shipping_id = null;
    
    /**  @var boolean */
    public $payment_for_shipping_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetRequiredInfoForPay_Ad.Parameters');

      // OPTIONAL MESSAGE payment_for_shipping_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "payment_for_shipping_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL payment_for_shipping_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "payment_for_shipping_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <payment_for_shipping_id> has a value
     *
     * @return boolean
     */
    public function hasPaymentForShippingId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <payment_for_shipping_id> value
     *
     * @return \dstore\engine\om_GetRequiredInfoForPay_Ad\Parameters
     */
    public function clearPaymentForShippingId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <payment_for_shipping_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPaymentForShippingId(){
      return $this->_get(1);
    }
    
    /**
     * Set <payment_for_shipping_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetRequiredInfoForPay_Ad\Parameters
     */
    public function setPaymentForShippingId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <payment_for_shipping_id_null> has a value
     *
     * @return boolean
     */
    public function hasPaymentForShippingIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <payment_for_shipping_id_null> value
     *
     * @return \dstore\engine\om_GetRequiredInfoForPay_Ad\Parameters
     */
    public function clearPaymentForShippingIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <payment_for_shipping_id_null> value
     *
     * @return boolean
     */
    public function getPaymentForShippingIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <payment_for_shipping_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetRequiredInfoForPay_Ad\Parameters
     */
    public function setPaymentForShippingIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

