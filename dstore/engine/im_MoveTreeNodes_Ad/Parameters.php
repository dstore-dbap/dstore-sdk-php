<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_MoveTreeNodes_Ad.proto
//   Date: 2016-05-19 08:07:43

namespace dstore\engine\im_MoveTreeNodes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $target_tree_node_id = null;
    
    /**  @var boolean */
    public $target_tree_node_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $resort = null;
    
    /**  @var boolean */
    public $resort_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_MoveTreeNodes_Ad.Parameters');

      // OPTIONAL MESSAGE target_tree_node_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "target_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL target_tree_node_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "target_tree_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE resort = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "resort";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL resort_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "resort_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <target_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTargetTreeNodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <target_tree_node_id> value
     *
     * @return \dstore\engine\im_MoveTreeNodes_Ad\Parameters
     */
    public function clearTargetTreeNodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <target_tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTargetTreeNodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <target_tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_MoveTreeNodes_Ad\Parameters
     */
    public function setTargetTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <target_tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasTargetTreeNodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <target_tree_node_id_null> value
     *
     * @return \dstore\engine\im_MoveTreeNodes_Ad\Parameters
     */
    public function clearTargetTreeNodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <target_tree_node_id_null> value
     *
     * @return boolean
     */
    public function getTargetTreeNodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <target_tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_MoveTreeNodes_Ad\Parameters
     */
    public function setTargetTreeNodeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <resort> has a value
     *
     * @return boolean
     */
    public function hasResort(){
      return $this->_has(2);
    }
    
    /**
     * Clear <resort> value
     *
     * @return \dstore\engine\im_MoveTreeNodes_Ad\Parameters
     */
    public function clearResort(){
      return $this->_clear(2);
    }
    
    /**
     * Get <resort> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getResort(){
      return $this->_get(2);
    }
    
    /**
     * Set <resort> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_MoveTreeNodes_Ad\Parameters
     */
    public function setResort(\dstore\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <resort_null> has a value
     *
     * @return boolean
     */
    public function hasResortNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <resort_null> value
     *
     * @return \dstore\engine\im_MoveTreeNodes_Ad\Parameters
     */
    public function clearResortNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <resort_null> value
     *
     * @return boolean
     */
    public function getResortNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <resort_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_MoveTreeNodes_Ad\Parameters
     */
    public function setResortNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

