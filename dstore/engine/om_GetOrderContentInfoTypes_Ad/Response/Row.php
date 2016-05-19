<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetOrderContentInfoTypes_Ad.proto
//   Date: 2016-05-19 08:07:49

namespace dstore\engine\om_GetOrderContentInfoTypes_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $order_content_information_type_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $field_type_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $information_type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetOrderContentInfoTypes_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_content_information_type_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "order_content_information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "information_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
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
     * @return \dstore\engine\om_GetOrderContentInfoTypes_Ad\Response\Row
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
     * @return \dstore\engine\om_GetOrderContentInfoTypes_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <order_content_information_type_id> has a value
     *
     * @return boolean
     */
    public function hasOrderContentInformationTypeId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <order_content_information_type_id> value
     *
     * @return \dstore\engine\om_GetOrderContentInfoTypes_Ad\Response\Row
     */
    public function clearOrderContentInformationTypeId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <order_content_information_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrderContentInformationTypeId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <order_content_information_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderContentInfoTypes_Ad\Response\Row
     */
    public function setOrderContentInformationTypeId(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <field_type_id> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <field_type_id> value
     *
     * @return \dstore\engine\om_GetOrderContentInfoTypes_Ad\Response\Row
     */
    public function clearFieldTypeId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <field_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getFieldTypeId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <field_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderContentInfoTypes_Ad\Response\Row
     */
    public function setFieldTypeId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <information_type> has a value
     *
     * @return boolean
     */
    public function hasInformationType(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <information_type> value
     *
     * @return \dstore\engine\om_GetOrderContentInfoTypes_Ad\Response\Row
     */
    public function clearInformationType(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <information_type> value
     *
     * @return \dstore\values\stringValue
     */
    public function getInformationType(){
      return $this->_get(10003);
    }
    
    /**
     * Set <information_type> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderContentInfoTypes_Ad\Response\Row
     */
    public function setInformationType(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
  }
}

