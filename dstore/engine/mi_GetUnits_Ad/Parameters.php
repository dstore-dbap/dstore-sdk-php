<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetUnits_Ad.proto
//   Date: 2016-05-19 08:07:46

namespace dstore\engine\mi_GetUnits_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $unit_id = null;
    
    /**  @var boolean */
    public $unit_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $unit_category_id = null;
    
    /**  @var boolean */
    public $unit_category_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $active = null;
    
    /**  @var boolean */
    public $active_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetUnits_Ad.Parameters');

      // OPTIONAL MESSAGE unit_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "unit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unit_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "unit_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_category_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "unit_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unit_category_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "unit_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE active = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL active_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "active_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <unit_id> has a value
     *
     * @return boolean
     */
    public function hasUnitId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <unit_id> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function clearUnitId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <unit_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getUnitId(){
      return $this->_get(1);
    }
    
    /**
     * Set <unit_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function setUnitId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <unit_id_null> has a value
     *
     * @return boolean
     */
    public function hasUnitIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <unit_id_null> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function clearUnitIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <unit_id_null> value
     *
     * @return boolean
     */
    public function getUnitIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <unit_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function setUnitIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <unit_category_id> has a value
     *
     * @return boolean
     */
    public function hasUnitCategoryId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <unit_category_id> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function clearUnitCategoryId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <unit_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getUnitCategoryId(){
      return $this->_get(2);
    }
    
    /**
     * Set <unit_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function setUnitCategoryId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <unit_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasUnitCategoryIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <unit_category_id_null> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function clearUnitCategoryIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <unit_category_id_null> value
     *
     * @return boolean
     */
    public function getUnitCategoryIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <unit_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function setUnitCategoryIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(3);
    }
    
    /**
     * Clear <active> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function clearActive(){
      return $this->_clear(3);
    }
    
    /**
     * Get <active> value
     *
     * @return \dstore\values\integerValue
     */
    public function getActive(){
      return $this->_get(3);
    }
    
    /**
     * Set <active> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function setActive(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <active_null> has a value
     *
     * @return boolean
     */
    public function hasActiveNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <active_null> value
     *
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function clearActiveNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <active_null> value
     *
     * @return boolean
     */
    public function getActiveNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <active_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetUnits_Ad\Parameters
     */
    public function setActiveNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

