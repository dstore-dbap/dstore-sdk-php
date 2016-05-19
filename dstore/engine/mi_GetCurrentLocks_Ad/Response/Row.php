<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetCurrentLocks_Ad.proto
//   Date: 2016-05-19 08:07:44

namespace dstore\engine\mi_GetCurrentLocks_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $page_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $login_name = null;
    
    /**  @var \dstore\values\stringValue */
    public $table_name = null;
    
    /**  @var \dstore\values\stringValue */
    public $process_status = null;
    
    /**  @var \dstore\values\stringValue */
    public $command = null;
    
    /**  @var \dstore\values\integerValue */
    public $blocking_process_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $server_process_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $database_name = null;
    
    /**  @var \dstore\values\stringValue */
    public $lock_class = null;
    
    /**  @var \dstore\values\stringValue */
    public $lock_type = null;
    
    /**  @var \dstore\values\stringValue */
    public $host_name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetCurrentLocks_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE page_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "page_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE login_name = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "login_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_name = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "table_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE process_status = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "process_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE command = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "command";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE blocking_process_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "blocking_process_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE server_process_id = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "server_process_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE database_name = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "database_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE lock_class = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "lock_class";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE lock_type = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "lock_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE host_name = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "host_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
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
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <page_id> has a value
     *
     * @return boolean
     */
    public function hasPageId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <page_id> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearPageId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <page_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPageId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <page_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setPageId(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <login_name> has a value
     *
     * @return boolean
     */
    public function hasLoginName(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <login_name> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearLoginName(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <login_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getLoginName(){
      return $this->_get(10002);
    }
    
    /**
     * Set <login_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setLoginName(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <table_name> has a value
     *
     * @return boolean
     */
    public function hasTableName(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <table_name> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearTableName(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <table_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getTableName(){
      return $this->_get(10003);
    }
    
    /**
     * Set <table_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setTableName(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <process_status> has a value
     *
     * @return boolean
     */
    public function hasProcessStatus(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <process_status> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearProcessStatus(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <process_status> value
     *
     * @return \dstore\values\stringValue
     */
    public function getProcessStatus(){
      return $this->_get(10004);
    }
    
    /**
     * Set <process_status> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setProcessStatus(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <command> has a value
     *
     * @return boolean
     */
    public function hasCommand(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <command> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearCommand(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <command> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCommand(){
      return $this->_get(10005);
    }
    
    /**
     * Set <command> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setCommand(\dstore\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <blocking_process_id> has a value
     *
     * @return boolean
     */
    public function hasBlockingProcessId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <blocking_process_id> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearBlockingProcessId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <blocking_process_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBlockingProcessId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <blocking_process_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setBlockingProcessId(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <server_process_id> has a value
     *
     * @return boolean
     */
    public function hasServerProcessId(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <server_process_id> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearServerProcessId(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <server_process_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getServerProcessId(){
      return $this->_get(10007);
    }
    
    /**
     * Set <server_process_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setServerProcessId(\dstore\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <database_name> has a value
     *
     * @return boolean
     */
    public function hasDatabaseName(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <database_name> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearDatabaseName(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <database_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDatabaseName(){
      return $this->_get(10008);
    }
    
    /**
     * Set <database_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setDatabaseName(\dstore\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <lock_class> has a value
     *
     * @return boolean
     */
    public function hasLockClass(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <lock_class> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearLockClass(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <lock_class> value
     *
     * @return \dstore\values\stringValue
     */
    public function getLockClass(){
      return $this->_get(10009);
    }
    
    /**
     * Set <lock_class> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setLockClass(\dstore\values\stringValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <lock_type> has a value
     *
     * @return boolean
     */
    public function hasLockType(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <lock_type> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearLockType(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <lock_type> value
     *
     * @return \dstore\values\stringValue
     */
    public function getLockType(){
      return $this->_get(10010);
    }
    
    /**
     * Set <lock_type> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setLockType(\dstore\values\stringValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <host_name> has a value
     *
     * @return boolean
     */
    public function hasHostName(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <host_name> value
     *
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function clearHostName(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <host_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getHostName(){
      return $this->_get(10011);
    }
    
    /**
     * Set <host_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetCurrentLocks_Ad\Response\Row
     */
    public function setHostName(\dstore\values\stringValue $value){
      return $this->_set(10011, $value);
    }
  }
}

