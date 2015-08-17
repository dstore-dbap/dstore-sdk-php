<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_DumpDatabase_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_DumpDatabase_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $database_name = null;
    
    /**  @var boolean */
    public $database_name_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_size_per_dump_file_m_b = null;
    
    /**  @var boolean */
    public $max_size_per_dump_file_m_b_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $use_predefined_devices_pattern = null;
    
    /**  @var boolean */
    public $use_predefined_devices_pattern_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $truncate_transaction_log = null;
    
    /**  @var boolean */
    public $truncate_transaction_log_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $compress_level = null;
    
    /**  @var boolean */
    public $compress_level_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $number_of_devices = null;
    
    /**  @var boolean */
    public $number_of_devices_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_DumpDatabase_Ad.Parameters');

      // OPTIONAL MESSAGE database_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "database_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL database_name_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "database_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_size_per_dump_file_m_b = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "max_size_per_dump_file_m_b";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL max_size_per_dump_file_m_b_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "max_size_per_dump_file_m_b_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE use_predefined_devices_pattern = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "use_predefined_devices_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL use_predefined_devices_pattern_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "use_predefined_devices_pattern_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE truncate_transaction_log = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "truncate_transaction_log";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL truncate_transaction_log_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "truncate_transaction_log_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE compress_level = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "compress_level";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL compress_level_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "compress_level_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE number_of_devices = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "number_of_devices";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL number_of_devices_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "number_of_devices_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <database_name> has a value
     *
     * @return boolean
     */
    public function hasDatabaseName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <database_name> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearDatabaseName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <database_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDatabaseName(){
      return $this->_get(1);
    }
    
    /**
     * Set <database_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setDatabaseName(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <database_name_null> has a value
     *
     * @return boolean
     */
    public function hasDatabaseNameNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <database_name_null> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearDatabaseNameNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <database_name_null> value
     *
     * @return boolean
     */
    public function getDatabaseNameNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <database_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setDatabaseNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <max_size_per_dump_file_m_b> has a value
     *
     * @return boolean
     */
    public function hasMaxSizePerDumpFileMB(){
      return $this->_has(2);
    }
    
    /**
     * Clear <max_size_per_dump_file_m_b> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearMaxSizePerDumpFileMB(){
      return $this->_clear(2);
    }
    
    /**
     * Get <max_size_per_dump_file_m_b> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMaxSizePerDumpFileMB(){
      return $this->_get(2);
    }
    
    /**
     * Set <max_size_per_dump_file_m_b> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setMaxSizePerDumpFileMB(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <max_size_per_dump_file_m_b_null> has a value
     *
     * @return boolean
     */
    public function hasMaxSizePerDumpFileMBNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <max_size_per_dump_file_m_b_null> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearMaxSizePerDumpFileMBNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <max_size_per_dump_file_m_b_null> value
     *
     * @return boolean
     */
    public function getMaxSizePerDumpFileMBNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <max_size_per_dump_file_m_b_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setMaxSizePerDumpFileMBNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <use_predefined_devices_pattern> has a value
     *
     * @return boolean
     */
    public function hasUsePredefinedDevicesPattern(){
      return $this->_has(3);
    }
    
    /**
     * Clear <use_predefined_devices_pattern> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearUsePredefinedDevicesPattern(){
      return $this->_clear(3);
    }
    
    /**
     * Get <use_predefined_devices_pattern> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUsePredefinedDevicesPattern(){
      return $this->_get(3);
    }
    
    /**
     * Set <use_predefined_devices_pattern> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setUsePredefinedDevicesPattern(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <use_predefined_devices_pattern_null> has a value
     *
     * @return boolean
     */
    public function hasUsePredefinedDevicesPatternNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <use_predefined_devices_pattern_null> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearUsePredefinedDevicesPatternNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <use_predefined_devices_pattern_null> value
     *
     * @return boolean
     */
    public function getUsePredefinedDevicesPatternNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <use_predefined_devices_pattern_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setUsePredefinedDevicesPatternNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <truncate_transaction_log> has a value
     *
     * @return boolean
     */
    public function hasTruncateTransactionLog(){
      return $this->_has(4);
    }
    
    /**
     * Clear <truncate_transaction_log> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearTruncateTransactionLog(){
      return $this->_clear(4);
    }
    
    /**
     * Get <truncate_transaction_log> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getTruncateTransactionLog(){
      return $this->_get(4);
    }
    
    /**
     * Set <truncate_transaction_log> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setTruncateTransactionLog(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <truncate_transaction_log_null> has a value
     *
     * @return boolean
     */
    public function hasTruncateTransactionLogNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <truncate_transaction_log_null> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearTruncateTransactionLogNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <truncate_transaction_log_null> value
     *
     * @return boolean
     */
    public function getTruncateTransactionLogNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <truncate_transaction_log_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setTruncateTransactionLogNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <compress_level> has a value
     *
     * @return boolean
     */
    public function hasCompressLevel(){
      return $this->_has(5);
    }
    
    /**
     * Clear <compress_level> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearCompressLevel(){
      return $this->_clear(5);
    }
    
    /**
     * Get <compress_level> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCompressLevel(){
      return $this->_get(5);
    }
    
    /**
     * Set <compress_level> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setCompressLevel(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <compress_level_null> has a value
     *
     * @return boolean
     */
    public function hasCompressLevelNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <compress_level_null> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearCompressLevelNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <compress_level_null> value
     *
     * @return boolean
     */
    public function getCompressLevelNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <compress_level_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setCompressLevelNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <number_of_devices> has a value
     *
     * @return boolean
     */
    public function hasNumberOfDevices(){
      return $this->_has(6);
    }
    
    /**
     * Clear <number_of_devices> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearNumberOfDevices(){
      return $this->_clear(6);
    }
    
    /**
     * Get <number_of_devices> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNumberOfDevices(){
      return $this->_get(6);
    }
    
    /**
     * Set <number_of_devices> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setNumberOfDevices(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <number_of_devices_null> has a value
     *
     * @return boolean
     */
    public function hasNumberOfDevicesNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <number_of_devices_null> value
     *
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function clearNumberOfDevicesNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <number_of_devices_null> value
     *
     * @return boolean
     */
    public function getNumberOfDevicesNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <number_of_devices_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_DumpDatabase_Ad\Parameters
     */
    public function setNumberOfDevicesNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

