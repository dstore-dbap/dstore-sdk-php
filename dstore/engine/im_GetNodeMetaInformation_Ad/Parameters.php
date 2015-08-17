<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetNodeMetaInformation_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetNodeMetaInformation_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $node_id = null;
    
    /**  @var boolean */
    public $node_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $meta_information_type_id_list = null;
    
    /**  @var boolean */
    public $meta_information_type_id_list_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetNodeMetaInformation_Ad.Parameters');

      // OPTIONAL MESSAGE node_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE meta_information_type_id_list = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "meta_information_type_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL meta_information_type_id_list_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "meta_information_type_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <node_id> has a value
     *
     * @return boolean
     */
    public function hasNodeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <node_id> value
     *
     * @return \dstore\engine\im_GetNodeMetaInformation_Ad\Parameters
     */
    public function clearNodeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetNodeMetaInformation_Ad\Parameters
     */
    public function setNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <node_id_null> has a value
     *
     * @return boolean
     */
    public function hasNodeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <node_id_null> value
     *
     * @return \dstore\engine\im_GetNodeMetaInformation_Ad\Parameters
     */
    public function clearNodeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <node_id_null> value
     *
     * @return boolean
     */
    public function getNodeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeMetaInformation_Ad\Parameters
     */
    public function setNodeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <meta_information_type_id_list> has a value
     *
     * @return boolean
     */
    public function hasMetaInformationTypeIdList(){
      return $this->_has(2);
    }
    
    /**
     * Clear <meta_information_type_id_list> value
     *
     * @return \dstore\engine\im_GetNodeMetaInformation_Ad\Parameters
     */
    public function clearMetaInformationTypeIdList(){
      return $this->_clear(2);
    }
    
    /**
     * Get <meta_information_type_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getMetaInformationTypeIdList(){
      return $this->_get(2);
    }
    
    /**
     * Set <meta_information_type_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetNodeMetaInformation_Ad\Parameters
     */
    public function setMetaInformationTypeIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <meta_information_type_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasMetaInformationTypeIdListNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <meta_information_type_id_list_null> value
     *
     * @return \dstore\engine\im_GetNodeMetaInformation_Ad\Parameters
     */
    public function clearMetaInformationTypeIdListNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <meta_information_type_id_list_null> value
     *
     * @return boolean
     */
    public function getMetaInformationTypeIdListNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <meta_information_type_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeMetaInformation_Ad\Parameters
     */
    public function setMetaInformationTypeIdListNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

