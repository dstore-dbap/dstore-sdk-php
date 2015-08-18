<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetPaymentForShipping_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetPaymentForShipping_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $payment_type_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $payment_for_shipping_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $shipping_type_description = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $payment_for_shipping_description = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $detailed_description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetPaymentForShipping_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE payment_type_description = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "payment_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE payment_for_shipping_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "payment_for_shipping_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE shipping_type_description = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "shipping_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE payment_for_shipping_description = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "payment_for_shipping_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE detailed_description = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "detailed_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
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
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
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
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <payment_type_description> has a value
     *
     * @return boolean
     */
    public function hasPaymentTypeDescription(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <payment_type_description> value
     *
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function clearPaymentTypeDescription(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <payment_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPaymentTypeDescription(){
      return $this->_get(10001);
    }
    
    /**
     * Set <payment_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function setPaymentTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <payment_for_shipping_id> has a value
     *
     * @return boolean
     */
    public function hasPaymentForShippingId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <payment_for_shipping_id> value
     *
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function clearPaymentForShippingId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <payment_for_shipping_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPaymentForShippingId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <payment_for_shipping_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function setPaymentForShippingId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <shipping_type_description> has a value
     *
     * @return boolean
     */
    public function hasShippingTypeDescription(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <shipping_type_description> value
     *
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function clearShippingTypeDescription(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <shipping_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getShippingTypeDescription(){
      return $this->_get(10003);
    }
    
    /**
     * Set <shipping_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function setShippingTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <payment_for_shipping_description> has a value
     *
     * @return boolean
     */
    public function hasPaymentForShippingDescription(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <payment_for_shipping_description> value
     *
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function clearPaymentForShippingDescription(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <payment_for_shipping_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPaymentForShippingDescription(){
      return $this->_get(10004);
    }
    
    /**
     * Set <payment_for_shipping_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function setPaymentForShippingDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <detailed_description> has a value
     *
     * @return boolean
     */
    public function hasDetailedDescription(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <detailed_description> value
     *
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function clearDetailedDescription(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <detailed_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDetailedDescription(){
      return $this->_get(10005);
    }
    
    /**
     * Set <detailed_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetPaymentForShipping_Pu\Response\Row
     */
    public function setDetailedDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
  }
}
