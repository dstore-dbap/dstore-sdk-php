<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetPurchasePrices_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetPurchasePrices_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $tree_node_or_node_id = null;
    
    /**  @var boolean */
    public $tree_node_or_node_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $is_tree_node_id = null;
    
    /**  @var boolean */
    public $is_tree_node_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $quantity = null;
    
    /**  @var boolean */
    public $quantity_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $supplier_id = null;
    
    /**  @var boolean */
    public $supplier_id_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $date_for_property_determination = null;
    
    /**  @var boolean */
    public $date_for_property_determination_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var boolean */
    public $node_characteristic_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetPurchasePrices_Ad.Parameters');

      // OPTIONAL MESSAGE tree_node_or_node_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "tree_node_or_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL tree_node_or_node_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "tree_node_or_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_tree_node_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "is_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL is_tree_node_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "is_tree_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE quantity = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL quantity_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "quantity_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE supplier_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "supplier_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL supplier_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "supplier_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE date_for_property_determination = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "date_for_property_determination";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL date_for_property_determination_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "date_for_property_determination_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_characteristic_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "node_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <tree_node_or_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeOrNodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <tree_node_or_node_id> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearTreeNodeOrNodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <tree_node_or_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTreeNodeOrNodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <tree_node_or_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setTreeNodeOrNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <tree_node_or_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeOrNodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <tree_node_or_node_id_null> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearTreeNodeOrNodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <tree_node_or_node_id_null> value
     *
     * @return boolean
     */
    public function getTreeNodeOrNodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <tree_node_or_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setTreeNodeOrNodeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <is_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasIsTreeNodeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <is_tree_node_id> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearIsTreeNodeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <is_tree_node_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIsTreeNodeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <is_tree_node_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setIsTreeNodeId(\dstore\engine\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <is_tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasIsTreeNodeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <is_tree_node_id_null> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearIsTreeNodeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <is_tree_node_id_null> value
     *
     * @return boolean
     */
    public function getIsTreeNodeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <is_tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setIsTreeNodeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <quantity> has a value
     *
     * @return boolean
     */
    public function hasQuantity(){
      return $this->_has(3);
    }
    
    /**
     * Clear <quantity> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearQuantity(){
      return $this->_clear(3);
    }
    
    /**
     * Get <quantity> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getQuantity(){
      return $this->_get(3);
    }
    
    /**
     * Set <quantity> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setQuantity(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <quantity_null> has a value
     *
     * @return boolean
     */
    public function hasQuantityNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <quantity_null> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearQuantityNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <quantity_null> value
     *
     * @return boolean
     */
    public function getQuantityNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <quantity_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setQuantityNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <supplier_id> has a value
     *
     * @return boolean
     */
    public function hasSupplierId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <supplier_id> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearSupplierId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <supplier_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSupplierId(){
      return $this->_get(4);
    }
    
    /**
     * Set <supplier_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setSupplierId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <supplier_id_null> has a value
     *
     * @return boolean
     */
    public function hasSupplierIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <supplier_id_null> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearSupplierIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <supplier_id_null> value
     *
     * @return boolean
     */
    public function getSupplierIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <supplier_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setSupplierIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <date_for_property_determination> has a value
     *
     * @return boolean
     */
    public function hasDateForPropertyDetermination(){
      return $this->_has(5);
    }
    
    /**
     * Clear <date_for_property_determination> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearDateForPropertyDetermination(){
      return $this->_clear(5);
    }
    
    /**
     * Get <date_for_property_determination> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getDateForPropertyDetermination(){
      return $this->_get(5);
    }
    
    /**
     * Set <date_for_property_determination> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setDateForPropertyDetermination(\dstore\engine\values\timestampValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <date_for_property_determination_null> has a value
     *
     * @return boolean
     */
    public function hasDateForPropertyDeterminationNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <date_for_property_determination_null> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearDateForPropertyDeterminationNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <date_for_property_determination_null> value
     *
     * @return boolean
     */
    public function getDateForPropertyDeterminationNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <date_for_property_determination_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setDateForPropertyDeterminationNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(6);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setNodeCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <node_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <node_characteristic_id_null> value
     *
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function clearNodeCharacteristicIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <node_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getNodeCharacteristicIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <node_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetPurchasePrices_Ad\Parameters
     */
    public function setNodeCharacteristicIdNull( $value){
      return $this->_set(1006, $value);
    }
  }
}
