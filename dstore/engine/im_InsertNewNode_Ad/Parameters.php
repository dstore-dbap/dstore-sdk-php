<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_InsertNewNode_Ad.proto
//   Date: 2016-05-19 08:07:43

namespace dstore\engine\im_InsertNewNode_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $predecessor = null;
    
    /**  @var boolean */
    public $predecessor_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $node_description = null;
    
    /**  @var boolean */
    public $node_description_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $level_id = null;
    
    /**  @var boolean */
    public $level_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $model_node = null;
    
    /**  @var boolean */
    public $model_node_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $clone = null;
    
    /**  @var boolean */
    public $clone_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $include_sub_nodes = null;
    
    /**  @var boolean */
    public $include_sub_nodes_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_InsertNewNode_Ad.Parameters');

      // OPTIONAL MESSAGE predecessor = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "predecessor";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL predecessor_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "predecessor_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_description = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "node_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_description_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "node_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "level_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL level_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "level_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE model_node = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "model_node";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL model_node_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "model_node_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE clone = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "clone";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL clone_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "clone_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_sub_nodes = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "include_sub_nodes";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_sub_nodes_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "include_sub_nodes_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <predecessor> has a value
     *
     * @return boolean
     */
    public function hasPredecessor(){
      return $this->_has(1);
    }
    
    /**
     * Clear <predecessor> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearPredecessor(){
      return $this->_clear(1);
    }
    
    /**
     * Get <predecessor> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPredecessor(){
      return $this->_get(1);
    }
    
    /**
     * Set <predecessor> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setPredecessor(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <predecessor_null> has a value
     *
     * @return boolean
     */
    public function hasPredecessorNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <predecessor_null> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearPredecessorNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <predecessor_null> value
     *
     * @return boolean
     */
    public function getPredecessorNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <predecessor_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setPredecessorNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <node_description> has a value
     *
     * @return boolean
     */
    public function hasNodeDescription(){
      return $this->_has(2);
    }
    
    /**
     * Clear <node_description> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearNodeDescription(){
      return $this->_clear(2);
    }
    
    /**
     * Get <node_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getNodeDescription(){
      return $this->_get(2);
    }
    
    /**
     * Set <node_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setNodeDescription(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <node_description_null> has a value
     *
     * @return boolean
     */
    public function hasNodeDescriptionNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <node_description_null> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearNodeDescriptionNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <node_description_null> value
     *
     * @return boolean
     */
    public function getNodeDescriptionNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <node_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setNodeDescriptionNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <level_id> has a value
     *
     * @return boolean
     */
    public function hasLevelId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <level_id> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearLevelId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <level_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getLevelId(){
      return $this->_get(3);
    }
    
    /**
     * Set <level_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setLevelId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <level_id_null> has a value
     *
     * @return boolean
     */
    public function hasLevelIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <level_id_null> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearLevelIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <level_id_null> value
     *
     * @return boolean
     */
    public function getLevelIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <level_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setLevelIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <model_node> has a value
     *
     * @return boolean
     */
    public function hasModelNode(){
      return $this->_has(4);
    }
    
    /**
     * Clear <model_node> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearModelNode(){
      return $this->_clear(4);
    }
    
    /**
     * Get <model_node> value
     *
     * @return \dstore\values\integerValue
     */
    public function getModelNode(){
      return $this->_get(4);
    }
    
    /**
     * Set <model_node> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setModelNode(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <model_node_null> has a value
     *
     * @return boolean
     */
    public function hasModelNodeNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <model_node_null> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearModelNodeNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <model_node_null> value
     *
     * @return boolean
     */
    public function getModelNodeNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <model_node_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setModelNodeNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <clone> has a value
     *
     * @return boolean
     */
    public function hasClone(){
      return $this->_has(5);
    }
    
    /**
     * Clear <clone> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearClone(){
      return $this->_clear(5);
    }
    
    /**
     * Get <clone> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getClone(){
      return $this->_get(5);
    }
    
    /**
     * Set <clone> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setClone(\dstore\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <clone_null> has a value
     *
     * @return boolean
     */
    public function hasCloneNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <clone_null> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearCloneNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <clone_null> value
     *
     * @return boolean
     */
    public function getCloneNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <clone_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setCloneNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <include_sub_nodes> has a value
     *
     * @return boolean
     */
    public function hasIncludeSubNodes(){
      return $this->_has(6);
    }
    
    /**
     * Clear <include_sub_nodes> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearIncludeSubNodes(){
      return $this->_clear(6);
    }
    
    /**
     * Get <include_sub_nodes> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getIncludeSubNodes(){
      return $this->_get(6);
    }
    
    /**
     * Set <include_sub_nodes> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setIncludeSubNodes(\dstore\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <include_sub_nodes_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeSubNodesNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <include_sub_nodes_null> value
     *
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function clearIncludeSubNodesNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <include_sub_nodes_null> value
     *
     * @return boolean
     */
    public function getIncludeSubNodesNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <include_sub_nodes_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_InsertNewNode_Ad\Parameters
     */
    public function setIncludeSubNodesNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

