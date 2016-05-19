<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetPrices_Ad.proto
//   Date: 2016-05-19 08:07:50

namespace dstore\engine\om_GetPrices_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var boolean */
    public $tree_node_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $currency_id = null;
    
    /**  @var boolean */
    public $currency_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $price_node_characteristic_id = null;
    
    /**  @var boolean */
    public $price_node_characteristic_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetPrices_Ad.Parameters');

      // OPTIONAL MESSAGE tree_node_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL tree_node_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "tree_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE currency_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "currency_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL currency_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "currency_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE price_node_characteristic_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "price_node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL price_node_characteristic_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "price_node_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <tree_node_id> value
     *
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function clearTreeNodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTreeNodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function setTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <tree_node_id_null> value
     *
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function clearTreeNodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <tree_node_id_null> value
     *
     * @return boolean
     */
    public function getTreeNodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function setTreeNodeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function setPersonId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <currency_id> has a value
     *
     * @return boolean
     */
    public function hasCurrencyId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <currency_id> value
     *
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function clearCurrencyId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <currency_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCurrencyId(){
      return $this->_get(3);
    }
    
    /**
     * Set <currency_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function setCurrencyId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <currency_id_null> has a value
     *
     * @return boolean
     */
    public function hasCurrencyIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <currency_id_null> value
     *
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function clearCurrencyIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <currency_id_null> value
     *
     * @return boolean
     */
    public function getCurrencyIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <currency_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function setCurrencyIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <price_node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPriceNodeCharacteristicId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <price_node_characteristic_id> value
     *
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function clearPriceNodeCharacteristicId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <price_node_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPriceNodeCharacteristicId(){
      return $this->_get(4);
    }
    
    /**
     * Set <price_node_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function setPriceNodeCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <price_node_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPriceNodeCharacteristicIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <price_node_characteristic_id_null> value
     *
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function clearPriceNodeCharacteristicIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <price_node_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPriceNodeCharacteristicIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <price_node_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPrices_Ad\Parameters
     */
    public function setPriceNodeCharacteristicIdNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

