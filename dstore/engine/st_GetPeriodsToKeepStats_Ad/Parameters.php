<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetPeriodsToKeepStats_Ad.proto
//   Date: 2016-05-19 08:07:56

namespace dstore\engine\st_GetPeriodsToKeepStats_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $table_name = null;
    
    /**  @var boolean */
    public $table_name_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $level_no = null;
    
    /**  @var boolean */
    public $level_no_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $basic_characteristic_number = null;
    
    /**  @var boolean */
    public $basic_characteristic_number_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetPeriodsToKeepStats_Ad.Parameters');

      // OPTIONAL MESSAGE table_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "table_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL table_name_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "table_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_no = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "level_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL level_no_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "level_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_characteristic_number = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "basic_characteristic_number";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL basic_characteristic_number_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "basic_characteristic_number_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <table_name> has a value
     *
     * @return boolean
     */
    public function hasTableName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <table_name> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function clearTableName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <table_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getTableName(){
      return $this->_get(1);
    }
    
    /**
     * Set <table_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function setTableName(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <table_name_null> has a value
     *
     * @return boolean
     */
    public function hasTableNameNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <table_name_null> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function clearTableNameNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <table_name_null> value
     *
     * @return boolean
     */
    public function getTableNameNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <table_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function setTableNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <level_no> has a value
     *
     * @return boolean
     */
    public function hasLevelNo(){
      return $this->_has(2);
    }
    
    /**
     * Clear <level_no> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function clearLevelNo(){
      return $this->_clear(2);
    }
    
    /**
     * Get <level_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getLevelNo(){
      return $this->_get(2);
    }
    
    /**
     * Set <level_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function setLevelNo(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <level_no_null> has a value
     *
     * @return boolean
     */
    public function hasLevelNoNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <level_no_null> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function clearLevelNoNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <level_no_null> value
     *
     * @return boolean
     */
    public function getLevelNoNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <level_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function setLevelNoNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <basic_characteristic_number> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumber(){
      return $this->_has(3);
    }
    
    /**
     * Clear <basic_characteristic_number> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function clearBasicCharacteristicNumber(){
      return $this->_clear(3);
    }
    
    /**
     * Get <basic_characteristic_number> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBasicCharacteristicNumber(){
      return $this->_get(3);
    }
    
    /**
     * Set <basic_characteristic_number> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function setBasicCharacteristicNumber(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <basic_characteristic_number_null> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumberNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <basic_characteristic_number_null> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function clearBasicCharacteristicNumberNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <basic_characteristic_number_null> value
     *
     * @return boolean
     */
    public function getBasicCharacteristicNumberNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <basic_characteristic_number_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Parameters
     */
    public function setBasicCharacteristicNumberNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

