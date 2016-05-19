<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetTreeNodeInformation_Ad.proto
//   Date: 2016-05-19 08:07:43

namespace dstore\engine\im_GetTreeNodeInformation_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var boolean */
    public $tree_node_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $get_additional_information = null;
    
    /**  @var boolean */
    public $get_additional_information_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetTreeNodeInformation_Ad.Parameters');

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

      // OPTIONAL MESSAGE language_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_additional_information = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "get_additional_information";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_additional_information_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "get_additional_information_null";
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
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
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
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
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
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
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
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
     */
    public function setTreeNodeIdNull( $value){
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
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(2);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
     */
    public function setLanguageId(\dstore\values\integerValue $value){
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
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
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
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <get_additional_information> has a value
     *
     * @return boolean
     */
    public function hasGetAdditionalInformation(){
      return $this->_has(3);
    }
    
    /**
     * Clear <get_additional_information> value
     *
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
     */
    public function clearGetAdditionalInformation(){
      return $this->_clear(3);
    }
    
    /**
     * Get <get_additional_information> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getGetAdditionalInformation(){
      return $this->_get(3);
    }
    
    /**
     * Set <get_additional_information> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
     */
    public function setGetAdditionalInformation(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <get_additional_information_null> has a value
     *
     * @return boolean
     */
    public function hasGetAdditionalInformationNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <get_additional_information_null> value
     *
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
     */
    public function clearGetAdditionalInformationNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <get_additional_information_null> value
     *
     * @return boolean
     */
    public function getGetAdditionalInformationNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <get_additional_information_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetTreeNodeInformation_Ad\Parameters
     */
    public function setGetAdditionalInformationNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

