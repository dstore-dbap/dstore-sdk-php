<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_SearchProductTreeNodes_Ad.proto
//   Date: 2016-05-19 08:07:44

namespace dstore\engine\im_SearchProductTreeNodes_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\booleanValue */
    public $active = null;
    
    /**  @var \dstore\values\integerValue */
    public $predecessors_level_no = null;
    
    /**  @var \dstore\values\stringValue */
    public $matching_value = null;
    
    /**  @var \dstore\values\integerValue */
    public $pre_predecessors_level_no = null;
    
    /**  @var \dstore\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $node_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $pre_predecessors_description = null;
    
    /**  @var \dstore\values\stringValue */
    public $product = null;
    
    /**  @var \dstore\values\integerValue */
    public $pre_predecessors_tree_node_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $predecessors_tree_node_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $predecessors_description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_SearchProductTreeNodes_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE active = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predecessors_level_no = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "predecessors_level_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE matching_value = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "matching_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE pre_predecessors_level_no = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "pre_predecessors_level_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tree_node_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE pre_predecessors_description = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "pre_predecessors_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE product = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "product";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE pre_predecessors_tree_node_id = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "pre_predecessors_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predecessors_tree_node_id = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "predecessors_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predecessors_description = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "predecessors_description";
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
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
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
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <active> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearActive(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <active> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getActive(){
      return $this->_get(10001);
    }
    
    /**
     * Set <active> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setActive(\dstore\values\booleanValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <predecessors_level_no> has a value
     *
     * @return boolean
     */
    public function hasPredecessorsLevelNo(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <predecessors_level_no> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearPredecessorsLevelNo(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <predecessors_level_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPredecessorsLevelNo(){
      return $this->_get(10002);
    }
    
    /**
     * Set <predecessors_level_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setPredecessorsLevelNo(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <matching_value> has a value
     *
     * @return boolean
     */
    public function hasMatchingValue(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <matching_value> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearMatchingValue(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <matching_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getMatchingValue(){
      return $this->_get(10003);
    }
    
    /**
     * Set <matching_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setMatchingValue(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <pre_predecessors_level_no> has a value
     *
     * @return boolean
     */
    public function hasPrePredecessorsLevelNo(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <pre_predecessors_level_no> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearPrePredecessorsLevelNo(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <pre_predecessors_level_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPrePredecessorsLevelNo(){
      return $this->_get(10004);
    }
    
    /**
     * Set <pre_predecessors_level_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setPrePredecessorsLevelNo(\dstore\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <tree_node_id> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearTreeNodeId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTreeNodeId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <node_id> has a value
     *
     * @return boolean
     */
    public function hasNodeId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <node_id> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearNodeId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getNodeId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setNodeId(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <pre_predecessors_description> has a value
     *
     * @return boolean
     */
    public function hasPrePredecessorsDescription(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <pre_predecessors_description> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearPrePredecessorsDescription(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <pre_predecessors_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPrePredecessorsDescription(){
      return $this->_get(10007);
    }
    
    /**
     * Set <pre_predecessors_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setPrePredecessorsDescription(\dstore\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <product> has a value
     *
     * @return boolean
     */
    public function hasProduct(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <product> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearProduct(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <product> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProduct(){
      return $this->_get(10008);
    }
    
    /**
     * Set <product> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setProduct(\dstore\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <pre_predecessors_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasPrePredecessorsTreeNodeId(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <pre_predecessors_tree_node_id> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearPrePredecessorsTreeNodeId(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <pre_predecessors_tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPrePredecessorsTreeNodeId(){
      return $this->_get(10009);
    }
    
    /**
     * Set <pre_predecessors_tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setPrePredecessorsTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <predecessors_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasPredecessorsTreeNodeId(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <predecessors_tree_node_id> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearPredecessorsTreeNodeId(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <predecessors_tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPredecessorsTreeNodeId(){
      return $this->_get(10010);
    }
    
    /**
     * Set <predecessors_tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setPredecessorsTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <predecessors_description> has a value
     *
     * @return boolean
     */
    public function hasPredecessorsDescription(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <predecessors_description> value
     *
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function clearPredecessorsDescription(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <predecessors_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPredecessorsDescription(){
      return $this->_get(10011);
    }
    
    /**
     * Set <predecessors_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_SearchProductTreeNodes_Ad\Response\Row
     */
    public function setPredecessorsDescription(\dstore\values\stringValue $value){
      return $this->_set(10011, $value);
    }
  }
}

