<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetGroupSurcharges_Ad.proto
//   Date: 2016-05-19 08:07:49

namespace dstore\engine\om_GetGroupSurcharges_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $group_id = null;
    
    /**  @var boolean */
    public $group_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var boolean */
    public $tree_node_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetGroupSurcharges_Ad.Parameters');

      // OPTIONAL MESSAGE group_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "group_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL group_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "group_id_null";
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

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <group_id> has a value
     *
     * @return boolean
     */
    public function hasGroupId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <group_id> value
     *
     * @return \dstore\engine\om_GetGroupSurcharges_Ad\Parameters
     */
    public function clearGroupId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <group_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getGroupId(){
      return $this->_get(1);
    }
    
    /**
     * Set <group_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetGroupSurcharges_Ad\Parameters
     */
    public function setGroupId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <group_id_null> has a value
     *
     * @return boolean
     */
    public function hasGroupIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <group_id_null> value
     *
     * @return \dstore\engine\om_GetGroupSurcharges_Ad\Parameters
     */
    public function clearGroupIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <group_id_null> value
     *
     * @return boolean
     */
    public function getGroupIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <group_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetGroupSurcharges_Ad\Parameters
     */
    public function setGroupIdNull( $value){
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
     * @return \dstore\engine\om_GetGroupSurcharges_Ad\Parameters
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
     * @return \dstore\engine\om_GetGroupSurcharges_Ad\Parameters
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
     * @return \dstore\engine\om_GetGroupSurcharges_Ad\Parameters
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
     * @return \dstore\engine\om_GetGroupSurcharges_Ad\Parameters
     */
    public function setTreeNodeIdNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

