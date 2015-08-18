<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_ModifyValueDetails_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_ModifyValueDetails_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $value_id = null;
    
    /**  @var boolean */
    public $value_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_no = null;
    
    /**  @var boolean */
    public $sort_no_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_ModifyValueDetails_Ad.Parameters');

      // OPTIONAL MESSAGE value_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "value_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_no_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "sort_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\im_ModifyValueDetails_Ad\Parameters
     */
    public function clearValueId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getValueId(){
      return $this->_get(1);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_ModifyValueDetails_Ad\Parameters
     */
    public function setValueId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value_id_null> has a value
     *
     * @return boolean
     */
    public function hasValueIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <value_id_null> value
     *
     * @return \dstore\engine\im_ModifyValueDetails_Ad\Parameters
     */
    public function clearValueIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <value_id_null> value
     *
     * @return boolean
     */
    public function getValueIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <value_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyValueDetails_Ad\Parameters
     */
    public function setValueIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(2);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\im_ModifyValueDetails_Ad\Parameters
     */
    public function clearSortNo(){
      return $this->_clear(2);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(2);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_ModifyValueDetails_Ad\Parameters
     */
    public function setSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <sort_no_null> has a value
     *
     * @return boolean
     */
    public function hasSortNoNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <sort_no_null> value
     *
     * @return \dstore\engine\im_ModifyValueDetails_Ad\Parameters
     */
    public function clearSortNoNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <sort_no_null> value
     *
     * @return boolean
     */
    public function getSortNoNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <sort_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_ModifyValueDetails_Ad\Parameters
     */
    public function setSortNoNull( $value){
      return $this->_set(1002, $value);
    }
  }
}
