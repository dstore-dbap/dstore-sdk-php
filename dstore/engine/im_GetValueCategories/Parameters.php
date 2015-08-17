<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetValueCategories.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetValueCategories {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var boolean */
    public $node_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $value_category_id = null;
    
    /**  @var boolean */
    public $value_category_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetValueCategories.Parameters');

      // OPTIONAL MESSAGE node_characteristic_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
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
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_category_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "value_category_id_null";
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
     * @return \dstore\engine\im_GetValueCategories\Parameters
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(1);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetValueCategories\Parameters
     */
    public function setNodeCharacteristicId(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\im_GetValueCategories\Parameters
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
     * @return \dstore\engine\im_GetValueCategories\Parameters
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
     * @return \dstore\engine\im_GetValueCategories\Parameters
     */
    public function clearValueCategoryId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValueCategoryId(){
      return $this->_get(2);
    }
    
    /**
     * Set <value_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetValueCategories\Parameters
     */
    public function setValueCategoryId(\dstore\engine\values\integerValue $value){
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
     * @return \dstore\engine\im_GetValueCategories\Parameters
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
     * @return \dstore\engine\im_GetValueCategories\Parameters
     */
    public function setValueCategoryIdNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

