<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetNodeCharacValues_Ad.proto
//   Date: 2016-05-19 08:07:42

namespace dstore\engine\im_GetNodeCharacValues_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var boolean */
    public $node_characteristic_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $value_category_id = null;
    
    /**  @var boolean */
    public $value_category_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $recursive_evaluation = null;
    
    /**  @var boolean */
    public $recursive_evaluation_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $value = null;
    
    /**  @var boolean */
    public $value_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $value_id = null;
    
    /**  @var boolean */
    public $value_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $get_values_like = null;
    
    /**  @var boolean */
    public $get_values_like_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetNodeCharacValues_Ad.Parameters');

      // OPTIONAL MESSAGE node_characteristic_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_characteristic_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "node_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_category_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_category_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "value_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE recursive_evaluation = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "recursive_evaluation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL recursive_evaluation_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "recursive_evaluation_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "value_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "value_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_values_like = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "get_values_like";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_values_like_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "get_values_like_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(1);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setNodeCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <node_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <node_characteristic_id_null> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearNodeCharacteristicIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <node_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getNodeCharacteristicIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <node_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setNodeCharacteristicIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <value_category_id> has a value
     *
     * @return boolean
     */
    public function hasValueCategoryId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <value_category_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearValueCategoryId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getValueCategoryId(){
      return $this->_get(2);
    }
    
    /**
     * Set <value_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setValueCategoryId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <value_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasValueCategoryIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <value_category_id_null> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearValueCategoryIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <value_category_id_null> value
     *
     * @return boolean
     */
    public function getValueCategoryIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <value_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setValueCategoryIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <recursive_evaluation> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluation(){
      return $this->_has(3);
    }
    
    /**
     * Clear <recursive_evaluation> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearRecursiveEvaluation(){
      return $this->_clear(3);
    }
    
    /**
     * Get <recursive_evaluation> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getRecursiveEvaluation(){
      return $this->_get(3);
    }
    
    /**
     * Set <recursive_evaluation> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setRecursiveEvaluation(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <recursive_evaluation_null> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluationNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <recursive_evaluation_null> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearRecursiveEvaluationNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <recursive_evaluation_null> value
     *
     * @return boolean
     */
    public function getRecursiveEvaluationNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <recursive_evaluation_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setRecursiveEvaluationNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(4);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearValue(){
      return $this->_clear(4);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue(){
      return $this->_get(4);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setValue(\dstore\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <value_null> has a value
     *
     * @return boolean
     */
    public function hasValueNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <value_null> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearValueNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <value_null> value
     *
     * @return boolean
     */
    public function getValueNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <value_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setValueNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearValueId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getValueId(){
      return $this->_get(5);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setValueId(\dstore\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <value_id_null> has a value
     *
     * @return boolean
     */
    public function hasValueIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <value_id_null> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearValueIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <value_id_null> value
     *
     * @return boolean
     */
    public function getValueIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <value_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setValueIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <get_values_like> has a value
     *
     * @return boolean
     */
    public function hasGetValuesLike(){
      return $this->_has(6);
    }
    
    /**
     * Clear <get_values_like> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearGetValuesLike(){
      return $this->_clear(6);
    }
    
    /**
     * Get <get_values_like> value
     *
     * @return \dstore\values\stringValue
     */
    public function getGetValuesLike(){
      return $this->_get(6);
    }
    
    /**
     * Set <get_values_like> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setGetValuesLike(\dstore\values\stringValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <get_values_like_null> has a value
     *
     * @return boolean
     */
    public function hasGetValuesLikeNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <get_values_like_null> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function clearGetValuesLikeNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <get_values_like_null> value
     *
     * @return boolean
     */
    public function getGetValuesLikeNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <get_values_like_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Parameters
     */
    public function setGetValuesLikeNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

