<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetSimpleProductInfo_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetSimpleProductInfo_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $product_tree_node_id = null;
    
    /**  @var boolean */
    public $product_tree_node_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $information_id_list = null;
    
    /**  @var boolean */
    public $information_id_list_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $type_of_information = null;
    
    /**  @var boolean */
    public $type_of_information_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetSimpleProductInfo_Pu.Parameters');

      // OPTIONAL MESSAGE product_tree_node_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "product_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL product_tree_node_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "product_tree_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_id_list = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "information_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_id_list_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "information_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE type_of_information = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "type_of_information";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL type_of_information_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "type_of_information_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <product_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasProductTreeNodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <product_tree_node_id> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function clearProductTreeNodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <product_tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getProductTreeNodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <product_tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function setProductTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <product_tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasProductTreeNodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <product_tree_node_id_null> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function clearProductTreeNodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <product_tree_node_id_null> value
     *
     * @return boolean
     */
    public function getProductTreeNodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <product_tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function setProductTreeNodeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <information_id_list> has a value
     *
     * @return boolean
     */
    public function hasInformationIdList(){
      return $this->_has(2);
    }
    
    /**
     * Clear <information_id_list> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function clearInformationIdList(){
      return $this->_clear(2);
    }
    
    /**
     * Get <information_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getInformationIdList(){
      return $this->_get(2);
    }
    
    /**
     * Set <information_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function setInformationIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <information_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasInformationIdListNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <information_id_list_null> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function clearInformationIdListNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <information_id_list_null> value
     *
     * @return boolean
     */
    public function getInformationIdListNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <information_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function setInformationIdListNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <type_of_information> has a value
     *
     * @return boolean
     */
    public function hasTypeOfInformation(){
      return $this->_has(3);
    }
    
    /**
     * Clear <type_of_information> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function clearTypeOfInformation(){
      return $this->_clear(3);
    }
    
    /**
     * Get <type_of_information> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTypeOfInformation(){
      return $this->_get(3);
    }
    
    /**
     * Set <type_of_information> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function setTypeOfInformation(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <type_of_information_null> has a value
     *
     * @return boolean
     */
    public function hasTypeOfInformationNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <type_of_information_null> value
     *
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function clearTypeOfInformationNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <type_of_information_null> value
     *
     * @return boolean
     */
    public function getTypeOfInformationNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <type_of_information_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetSimpleProductInfo_Pu\Parameters
     */
    public function setTypeOfInformationNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

