<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetOrderInformation_Ad.proto
//   Date: 2016-05-19 08:07:49

namespace dstore\engine\om_GetOrderInformation_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $created_by_user_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $information_type_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_characteristic_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $order_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $information_type = null;
    
    /**  @var \dstore\values\stringValue */
    public $information = null;
    
    /**  @var \dstore\values\timestampValue */
    public $created_at_date_and_time = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetOrderInformation_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE created_by_user_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "created_by_user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_characteristic_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "person_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "order_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "information_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "information";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE created_at_date_and_time = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "created_at_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
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
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
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
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <created_by_user_id> has a value
     *
     * @return boolean
     */
    public function hasCreatedByUserId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <created_by_user_id> value
     *
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function clearCreatedByUserId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <created_by_user_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCreatedByUserId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <created_by_user_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function setCreatedByUserId(\dstore\values\integerValue $value){
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
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function clearInformationTypeId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function setInformationTypeId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <person_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <person_characteristic_id> value
     *
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function clearPersonCharacteristicId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <person_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonCharacteristicId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <person_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function setPersonCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <order_id> has a value
     *
     * @return boolean
     */
    public function hasOrderId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <order_id> value
     *
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function clearOrderId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <order_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrderId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <order_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function setOrderId(\dstore\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <information_type> has a value
     *
     * @return boolean
     */
    public function hasInformationType(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <information_type> value
     *
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function clearInformationType(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <information_type> value
     *
     * @return \dstore\values\stringValue
     */
    public function getInformationType(){
      return $this->_get(10005);
    }
    
    /**
     * Set <information_type> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function setInformationType(\dstore\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <information> has a value
     *
     * @return boolean
     */
    public function hasInformation(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <information> value
     *
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function clearInformation(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <information> value
     *
     * @return \dstore\values\stringValue
     */
    public function getInformation(){
      return $this->_get(10006);
    }
    
    /**
     * Set <information> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function setInformation(\dstore\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <created_at_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasCreatedAtDateAndTime(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <created_at_date_and_time> value
     *
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function clearCreatedAtDateAndTime(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <created_at_date_and_time> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getCreatedAtDateAndTime(){
      return $this->_get(10007);
    }
    
    /**
     * Set <created_at_date_and_time> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\engine\om_GetOrderInformation_Ad\Response\Row
     */
    public function setCreatedAtDateAndTime(\dstore\values\timestampValue $value){
      return $this->_set(10007, $value);
    }
  }
}

