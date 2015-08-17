<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetPaymentAndShipping_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetPaymentAndShipping_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $region_id__payment_type = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $payment_for_shipping_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $shipping_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $payment_for_shipping_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $payment_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $region_id__shipping_type = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_charac_category_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $error_code = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $payment_cost = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $shipping_cost = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetPaymentAndShipping_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE region_id__payment_type = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "region_id__payment_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE payment_for_shipping_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "payment_for_shipping_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE shipping_type_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "shipping_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE payment_for_shipping_description = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "payment_for_shipping_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE payment_type_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "payment_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE region_id__shipping_type = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "region_id__shipping_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_charac_category_id = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "person_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE error_code = 20001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20001;
      $f->name      = "error_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE payment_cost = 30001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 30001;
      $f->name      = "payment_cost";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE shipping_cost = 30004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 30004;
      $f->name      = "shipping_cost";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
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
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
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
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <region_id__payment_type> has a value
     *
     * @return boolean
     */
    public function hasRegionId_PaymentType(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <region_id__payment_type> value
     *
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function clearRegionId_PaymentType(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <region_id__payment_type> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRegionId_PaymentType(){
      return $this->_get(10001);
    }
    
    /**
     * Set <region_id__payment_type> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setRegionId_PaymentType(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
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
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setPaymentForShippingId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <shipping_type_id> has a value
     *
     * @return boolean
     */
    public function hasShippingTypeId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <shipping_type_id> value
     *
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function clearShippingTypeId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <shipping_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getShippingTypeId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <shipping_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setShippingTypeId(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
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
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setPaymentForShippingDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <payment_type_id> has a value
     *
     * @return boolean
     */
    public function hasPaymentTypeId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <payment_type_id> value
     *
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function clearPaymentTypeId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <payment_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPaymentTypeId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <payment_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setPaymentTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <region_id__shipping_type> has a value
     *
     * @return boolean
     */
    public function hasRegionId_ShippingType(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <region_id__shipping_type> value
     *
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function clearRegionId_ShippingType(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <region_id__shipping_type> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRegionId_ShippingType(){
      return $this->_get(10006);
    }
    
    /**
     * Set <region_id__shipping_type> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setRegionId_ShippingType(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <person_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryId(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <person_charac_category_id> value
     *
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function clearPersonCharacCategoryId(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <person_charac_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacCategoryId(){
      return $this->_get(10007);
    }
    
    /**
     * Set <person_charac_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setPersonCharacCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <error_code> has a value
     *
     * @return boolean
     */
    public function hasErrorCode(){
      return $this->_has(20001);
    }
    
    /**
     * Clear <error_code> value
     *
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function clearErrorCode(){
      return $this->_clear(20001);
    }
    
    /**
     * Get <error_code> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getErrorCode(){
      return $this->_get(20001);
    }
    
    /**
     * Set <error_code> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setErrorCode(\dstore\engine\values\integerValue $value){
      return $this->_set(20001, $value);
    }
    
    /**
     * Check if <payment_cost> has a value
     *
     * @return boolean
     */
    public function hasPaymentCost(){
      return $this->_has(30001);
    }
    
    /**
     * Clear <payment_cost> value
     *
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function clearPaymentCost(){
      return $this->_clear(30001);
    }
    
    /**
     * Get <payment_cost> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getPaymentCost(){
      return $this->_get(30001);
    }
    
    /**
     * Set <payment_cost> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setPaymentCost(\dstore\engine\values\decimalValue $value){
      return $this->_set(30001, $value);
    }
    
    /**
     * Check if <shipping_cost> has a value
     *
     * @return boolean
     */
    public function hasShippingCost(){
      return $this->_has(30004);
    }
    
    /**
     * Clear <shipping_cost> value
     *
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function clearShippingCost(){
      return $this->_clear(30004);
    }
    
    /**
     * Get <shipping_cost> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getShippingCost(){
      return $this->_get(30004);
    }
    
    /**
     * Set <shipping_cost> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetPaymentAndShipping_Pu\Response\Row
     */
    public function setShippingCost(\dstore\engine\values\decimalValue $value){
      return $this->_set(30004, $value);
    }
  }
}

