<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyPersonSurcharges_Ad.proto
//   Date: 2016-05-19 08:07:52

namespace dstore\engine\om_ModifyPersonSurcharges_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var boolean */
    public $tree_node_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $surcharge_type_id = null;
    
    /**  @var boolean */
    public $surcharge_type_id_null = null;
    
    /**  @var \dstore\values\decimalValue */
    public $surcharge_value = null;
    
    /**  @var boolean */
    public $surcharge_value_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete_surcharge = null;
    
    /**  @var boolean */
    public $delete_surcharge_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyPersonSurcharges_Ad.Parameters');

      // OPTIONAL MESSAGE person_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tree_node_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL tree_node_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "tree_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL surcharge_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "surcharge_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_value = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "surcharge_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL surcharge_value_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "surcharge_value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_surcharge = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "delete_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_surcharge_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "delete_surcharge_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function setPersonId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <tree_node_id> value
     *
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function clearTreeNodeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTreeNodeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function setTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <tree_node_id_null> value
     *
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function clearTreeNodeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <tree_node_id_null> value
     *
     * @return boolean
     */
    public function getTreeNodeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function setTreeNodeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <surcharge_type_id> value
     *
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function clearSurchargeTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <surcharge_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSurchargeTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <surcharge_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function setSurchargeTypeId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <surcharge_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <surcharge_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function clearSurchargeTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <surcharge_type_id_null> value
     *
     * @return boolean
     */
    public function getSurchargeTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <surcharge_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function setSurchargeTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <surcharge_value> has a value
     *
     * @return boolean
     */
    public function hasSurchargeValue(){
      return $this->_has(4);
    }
    
    /**
     * Clear <surcharge_value> value
     *
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function clearSurchargeValue(){
      return $this->_clear(4);
    }
    
    /**
     * Get <surcharge_value> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getSurchargeValue(){
      return $this->_get(4);
    }
    
    /**
     * Set <surcharge_value> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function setSurchargeValue(\dstore\values\decimalValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <surcharge_value_null> has a value
     *
     * @return boolean
     */
    public function hasSurchargeValueNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <surcharge_value_null> value
     *
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function clearSurchargeValueNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <surcharge_value_null> value
     *
     * @return boolean
     */
    public function getSurchargeValueNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <surcharge_value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function setSurchargeValueNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <delete_surcharge> has a value
     *
     * @return boolean
     */
    public function hasDeleteSurcharge(){
      return $this->_has(5);
    }
    
    /**
     * Clear <delete_surcharge> value
     *
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function clearDeleteSurcharge(){
      return $this->_clear(5);
    }
    
    /**
     * Get <delete_surcharge> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDeleteSurcharge(){
      return $this->_get(5);
    }
    
    /**
     * Set <delete_surcharge> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function setDeleteSurcharge(\dstore\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <delete_surcharge_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteSurchargeNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <delete_surcharge_null> value
     *
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function clearDeleteSurchargeNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <delete_surcharge_null> value
     *
     * @return boolean
     */
    public function getDeleteSurchargeNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <delete_surcharge_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyPersonSurcharges_Ad\Parameters
     */
    public function setDeleteSurchargeNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

