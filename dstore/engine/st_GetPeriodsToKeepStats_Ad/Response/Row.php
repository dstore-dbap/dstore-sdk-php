<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetPeriodsToKeepStats_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\st_GetPeriodsToKeepStats_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $table_name = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $level_no = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $level_description = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $basic_characteristic = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $keep_statistics = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $time_unit = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $basic_characteristic_number = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetPeriodsToKeepStats_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_name = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "table_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_no = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "level_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_description = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "level_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_characteristic = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "basic_characteristic";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE keep_statistics = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "keep_statistics";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE time_unit = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "time_unit";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_characteristic_number = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "basic_characteristic_number";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <row_id> has a value
     *
     * @return boolean
     */
    public function hasRowId(){
      return $this->_has(10000);
    }
    
    /**
     * Clear <row_id> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function clearRowId(){
      return $this->_clear(10000);
    }
    
    /**
     * Get <row_id> value
     *
     * @return int
     */
    public function getRowId(){
      return $this->_get(10000);
    }
    
    /**
     * Set <row_id> value
     *
     * @param int $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <table_name> has a value
     *
     * @return boolean
     */
    public function hasTableName(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <table_name> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function clearTableName(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <table_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getTableName(){
      return $this->_get(10001);
    }
    
    /**
     * Set <table_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function setTableName(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <level_no> has a value
     *
     * @return boolean
     */
    public function hasLevelNo(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <level_no> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function clearLevelNo(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <level_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLevelNo(){
      return $this->_get(10002);
    }
    
    /**
     * Set <level_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function setLevelNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <level_description> has a value
     *
     * @return boolean
     */
    public function hasLevelDescription(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <level_description> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function clearLevelDescription(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <level_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLevelDescription(){
      return $this->_get(10003);
    }
    
    /**
     * Set <level_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function setLevelDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <basic_characteristic> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristic(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <basic_characteristic> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function clearBasicCharacteristic(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <basic_characteristic> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getBasicCharacteristic(){
      return $this->_get(10004);
    }
    
    /**
     * Set <basic_characteristic> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function setBasicCharacteristic(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <keep_statistics> has a value
     *
     * @return boolean
     */
    public function hasKeepStatistics(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <keep_statistics> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function clearKeepStatistics(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <keep_statistics> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getKeepStatistics(){
      return $this->_get(10005);
    }
    
    /**
     * Set <keep_statistics> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function setKeepStatistics(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <time_unit> has a value
     *
     * @return boolean
     */
    public function hasTimeUnit(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <time_unit> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function clearTimeUnit(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <time_unit> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getTimeUnit(){
      return $this->_get(10006);
    }
    
    /**
     * Set <time_unit> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function setTimeUnit(\dstore\engine\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <basic_characteristic_number> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumber(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <basic_characteristic_number> value
     *
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function clearBasicCharacteristicNumber(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <basic_characteristic_number> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBasicCharacteristicNumber(){
      return $this->_get(10007);
    }
    
    /**
     * Set <basic_characteristic_number> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetPeriodsToKeepStats_Ad\Response\Row
     */
    public function setBasicCharacteristicNumber(\dstore\engine\values\integerValue $value){
      return $this->_set(10007, $value);
    }
  }
}

