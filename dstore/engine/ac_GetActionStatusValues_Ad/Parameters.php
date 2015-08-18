<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/ac_GetActionStatusValues_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\ac_GetActionStatusValues_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $command_id = null;
    
    /**  @var boolean */
    public $command_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $status_category_id = null;
    
    /**  @var boolean */
    public $status_category_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.ac_GetActionStatusValues_Ad.Parameters');

      // OPTIONAL MESSAGE command_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "command_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL command_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "command_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE status_category_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "status_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL status_category_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "status_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <command_id> has a value
     *
     * @return boolean
     */
    public function hasCommandId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <command_id> value
     *
     * @return \dstore\engine\ac_GetActionStatusValues_Ad\Parameters
     */
    public function clearCommandId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <command_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCommandId(){
      return $this->_get(1);
    }
    
    /**
     * Set <command_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\ac_GetActionStatusValues_Ad\Parameters
     */
    public function setCommandId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <command_id_null> has a value
     *
     * @return boolean
     */
    public function hasCommandIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <command_id_null> value
     *
     * @return \dstore\engine\ac_GetActionStatusValues_Ad\Parameters
     */
    public function clearCommandIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <command_id_null> value
     *
     * @return boolean
     */
    public function getCommandIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <command_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\ac_GetActionStatusValues_Ad\Parameters
     */
    public function setCommandIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <status_category_id> has a value
     *
     * @return boolean
     */
    public function hasStatusCategoryId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <status_category_id> value
     *
     * @return \dstore\engine\ac_GetActionStatusValues_Ad\Parameters
     */
    public function clearStatusCategoryId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <status_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getStatusCategoryId(){
      return $this->_get(2);
    }
    
    /**
     * Set <status_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\ac_GetActionStatusValues_Ad\Parameters
     */
    public function setStatusCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <status_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasStatusCategoryIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <status_category_id_null> value
     *
     * @return \dstore\engine\ac_GetActionStatusValues_Ad\Parameters
     */
    public function clearStatusCategoryIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <status_category_id_null> value
     *
     * @return boolean
     */
    public function getStatusCategoryIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <status_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\ac_GetActionStatusValues_Ad\Parameters
     */
    public function setStatusCategoryIdNull( $value){
      return $this->_set(1002, $value);
    }
  }
}
