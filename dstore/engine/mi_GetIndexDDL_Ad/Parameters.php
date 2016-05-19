<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetIndexDDL_Ad.proto
//   Date: 2016-05-19 08:07:45

namespace dstore\engine\mi_GetIndexDDL_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $table_name = null;
    
    /**  @var boolean */
    public $table_name_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $index_name = null;
    
    /**  @var boolean */
    public $index_name_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $database_name = null;
    
    /**  @var boolean */
    public $database_name_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetIndexDDL_Ad.Parameters');

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

      // OPTIONAL MESSAGE index_name = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "index_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL index_name_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "index_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE database_name = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "database_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL database_name_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "database_name_null";
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
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
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
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
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
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
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
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
     */
    public function setTableNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <index_name> has a value
     *
     * @return boolean
     */
    public function hasIndexName(){
      return $this->_has(2);
    }
    
    /**
     * Clear <index_name> value
     *
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
     */
    public function clearIndexName(){
      return $this->_clear(2);
    }
    
    /**
     * Get <index_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getIndexName(){
      return $this->_get(2);
    }
    
    /**
     * Set <index_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
     */
    public function setIndexName(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <index_name_null> has a value
     *
     * @return boolean
     */
    public function hasIndexNameNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <index_name_null> value
     *
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
     */
    public function clearIndexNameNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <index_name_null> value
     *
     * @return boolean
     */
    public function getIndexNameNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <index_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
     */
    public function setIndexNameNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <database_name> has a value
     *
     * @return boolean
     */
    public function hasDatabaseName(){
      return $this->_has(3);
    }
    
    /**
     * Clear <database_name> value
     *
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
     */
    public function clearDatabaseName(){
      return $this->_clear(3);
    }
    
    /**
     * Get <database_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDatabaseName(){
      return $this->_get(3);
    }
    
    /**
     * Set <database_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
     */
    public function setDatabaseName(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <database_name_null> has a value
     *
     * @return boolean
     */
    public function hasDatabaseNameNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <database_name_null> value
     *
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
     */
    public function clearDatabaseNameNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <database_name_null> value
     *
     * @return boolean
     */
    public function getDatabaseNameNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <database_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetIndexDDL_Ad\Parameters
     */
    public function setDatabaseNameNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

