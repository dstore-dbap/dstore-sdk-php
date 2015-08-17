<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetNodePropertiesHistory_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetNodePropertiesHistory_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $node_id = null;
    
    /**  @var boolean */
    public $node_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var boolean */
    public $node_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $from_date = null;
    
    /**  @var boolean */
    public $from_date_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $to_date = null;
    
    /**  @var boolean */
    public $to_date_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_id_list = null;
    
    /**  @var boolean */
    public $characteristic_id_list_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetNodePropertiesHistory_Ad.Parameters');

      // OPTIONAL MESSAGE node_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_characteristic_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "node_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_date = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "from_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_date_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "from_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_date = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "to_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_date_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "to_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_id_list = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "characteristic_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_list_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "characteristic_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <node_id> has a value
     *
     * @return boolean
     */
    public function hasNodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <node_id> value
     *
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function clearNodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function setNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <node_id_null> has a value
     *
     * @return boolean
     */
    public function hasNodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <node_id_null> value
     *
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function clearNodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <node_id_null> value
     *
     * @return boolean
     */
    public function getNodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function setNodeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(2);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function setNodeCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <node_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <node_characteristic_id_null> value
     *
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function clearNodeCharacteristicIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <node_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getNodeCharacteristicIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <node_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function setNodeCharacteristicIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <from_date> has a value
     *
     * @return boolean
     */
    public function hasFromDate(){
      return $this->_has(3);
    }
    
    /**
     * Clear <from_date> value
     *
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function clearFromDate(){
      return $this->_clear(3);
    }
    
    /**
     * Get <from_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getFromDate(){
      return $this->_get(3);
    }
    
    /**
     * Set <from_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function setFromDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <from_date_null> has a value
     *
     * @return boolean
     */
    public function hasFromDateNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <from_date_null> value
     *
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function clearFromDateNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <from_date_null> value
     *
     * @return boolean
     */
    public function getFromDateNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <from_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function setFromDateNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <to_date> has a value
     *
     * @return boolean
     */
    public function hasToDate(){
      return $this->_has(4);
    }
    
    /**
     * Clear <to_date> value
     *
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function clearToDate(){
      return $this->_clear(4);
    }
    
    /**
     * Get <to_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getToDate(){
      return $this->_get(4);
    }
    
    /**
     * Set <to_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function setToDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <to_date_null> has a value
     *
     * @return boolean
     */
    public function hasToDateNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <to_date_null> value
     *
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function clearToDateNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <to_date_null> value
     *
     * @return boolean
     */
    public function getToDateNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <to_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function setToDateNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <characteristic_id_list> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList(){
      return $this->_has(5);
    }
    
    /**
     * Clear <characteristic_id_list> value
     *
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function clearCharacteristicIdList(){
      return $this->_clear(5);
    }
    
    /**
     * Get <characteristic_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicIdList(){
      return $this->_get(5);
    }
    
    /**
     * Set <characteristic_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function setCharacteristicIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <characteristic_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdListNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <characteristic_id_list_null> value
     *
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function clearCharacteristicIdListNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <characteristic_id_list_null> value
     *
     * @return boolean
     */
    public function getCharacteristicIdListNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <characteristic_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodePropertiesHistory_Ad\Parameters
     */
    public function setCharacteristicIdListNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

