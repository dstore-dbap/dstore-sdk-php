<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetCommonNodeProperties_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetCommonNodeProperties_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\booleanValue */
    public $tree_node_ids = null;
    
    /**  @var boolean */
    public $tree_node_ids_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $inherit_depth = null;
    
    /**  @var boolean */
    public $inherit_depth_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $order_by = null;
    
    /**  @var boolean */
    public $order_by_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $recursive_evaluation = null;
    
    /**  @var boolean */
    public $recursive_evaluation_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $date_format = null;
    
    /**  @var boolean */
    public $date_format_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_id_list = null;
    
    /**  @var boolean */
    public $characteristic_id_list_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetCommonNodeProperties_Ad.Parameters');

      // OPTIONAL MESSAGE tree_node_ids = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "tree_node_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL tree_node_ids_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "tree_node_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE inherit_depth = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "inherit_depth";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL inherit_depth_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "inherit_depth_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_by = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "order_by";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_by_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "order_by_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE recursive_evaluation = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "recursive_evaluation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL recursive_evaluation_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "recursive_evaluation_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE date_format = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "date_format";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL date_format_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "date_format_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_id_list = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "characteristic_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_list_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
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
     * Check if <tree_node_ids> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeIds(){
      return $this->_has(1);
    }
    
    /**
     * Clear <tree_node_ids> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearTreeNodeIds(){
      return $this->_clear(1);
    }
    
    /**
     * Get <tree_node_ids> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getTreeNodeIds(){
      return $this->_get(1);
    }
    
    /**
     * Set <tree_node_ids> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setTreeNodeIds(\dstore\engine\values\booleanValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <tree_node_ids_null> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeIdsNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <tree_node_ids_null> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearTreeNodeIdsNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <tree_node_ids_null> value
     *
     * @return boolean
     */
    public function getTreeNodeIdsNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <tree_node_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setTreeNodeIdsNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(2);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <inherit_depth> has a value
     *
     * @return boolean
     */
    public function hasInheritDepth(){
      return $this->_has(3);
    }
    
    /**
     * Clear <inherit_depth> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearInheritDepth(){
      return $this->_clear(3);
    }
    
    /**
     * Get <inherit_depth> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInheritDepth(){
      return $this->_get(3);
    }
    
    /**
     * Set <inherit_depth> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setInheritDepth(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <inherit_depth_null> has a value
     *
     * @return boolean
     */
    public function hasInheritDepthNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <inherit_depth_null> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearInheritDepthNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <inherit_depth_null> value
     *
     * @return boolean
     */
    public function getInheritDepthNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <inherit_depth_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setInheritDepthNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <order_by> has a value
     *
     * @return boolean
     */
    public function hasOrderBy(){
      return $this->_has(4);
    }
    
    /**
     * Clear <order_by> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearOrderBy(){
      return $this->_clear(4);
    }
    
    /**
     * Get <order_by> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOrderBy(){
      return $this->_get(4);
    }
    
    /**
     * Set <order_by> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setOrderBy(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <order_by_null> has a value
     *
     * @return boolean
     */
    public function hasOrderByNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <order_by_null> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearOrderByNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <order_by_null> value
     *
     * @return boolean
     */
    public function getOrderByNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <order_by_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setOrderByNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <recursive_evaluation> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluation(){
      return $this->_has(5);
    }
    
    /**
     * Clear <recursive_evaluation> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearRecursiveEvaluation(){
      return $this->_clear(5);
    }
    
    /**
     * Get <recursive_evaluation> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRecursiveEvaluation(){
      return $this->_get(5);
    }
    
    /**
     * Set <recursive_evaluation> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setRecursiveEvaluation(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <recursive_evaluation_null> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluationNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <recursive_evaluation_null> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearRecursiveEvaluationNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <recursive_evaluation_null> value
     *
     * @return boolean
     */
    public function getRecursiveEvaluationNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <recursive_evaluation_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setRecursiveEvaluationNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <date_format> has a value
     *
     * @return boolean
     */
    public function hasDateFormat(){
      return $this->_has(6);
    }
    
    /**
     * Clear <date_format> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearDateFormat(){
      return $this->_clear(6);
    }
    
    /**
     * Get <date_format> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDateFormat(){
      return $this->_get(6);
    }
    
    /**
     * Set <date_format> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setDateFormat(\dstore\engine\values\stringValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <date_format_null> has a value
     *
     * @return boolean
     */
    public function hasDateFormatNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <date_format_null> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearDateFormatNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <date_format_null> value
     *
     * @return boolean
     */
    public function getDateFormatNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <date_format_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setDateFormatNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <characteristic_id_list> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList(){
      return $this->_has(7);
    }
    
    /**
     * Clear <characteristic_id_list> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearCharacteristicIdList(){
      return $this->_clear(7);
    }
    
    /**
     * Get <characteristic_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicIdList(){
      return $this->_get(7);
    }
    
    /**
     * Set <characteristic_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setCharacteristicIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <characteristic_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdListNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <characteristic_id_list_null> value
     *
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function clearCharacteristicIdListNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <characteristic_id_list_null> value
     *
     * @return boolean
     */
    public function getCharacteristicIdListNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <characteristic_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetCommonNodeProperties_Ad\Parameters
     */
    public function setCharacteristicIdListNull( $value){
      return $this->_set(1007, $value);
    }
  }
}

