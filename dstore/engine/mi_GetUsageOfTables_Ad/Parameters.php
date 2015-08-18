<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetUsageOfTables_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetUsageOfTables_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $tables_list = null;
    
    /**  @var boolean */
    public $tables_list_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $separator_in_tables_list = null;
    
    /**  @var boolean */
    public $separator_in_tables_list_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $search_only_object_type = null;
    
    /**  @var boolean */
    public $search_only_object_type_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_distinct_object_names_only = null;
    
    /**  @var boolean */
    public $get_distinct_object_names_only_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetUsageOfTables_Ad.Parameters');

      // OPTIONAL MESSAGE tables_list = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "tables_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL tables_list_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "tables_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_tables_list = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "separator_in_tables_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_tables_list_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "separator_in_tables_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE search_only_object_type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "search_only_object_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL search_only_object_type_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "search_only_object_type_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_distinct_object_names_only = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "get_distinct_object_names_only";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_distinct_object_names_only_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "get_distinct_object_names_only_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <tables_list> has a value
     *
     * @return boolean
     */
    public function hasTablesList(){
      return $this->_has(1);
    }
    
    /**
     * Clear <tables_list> value
     *
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function clearTablesList(){
      return $this->_clear(1);
    }
    
    /**
     * Get <tables_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getTablesList(){
      return $this->_get(1);
    }
    
    /**
     * Set <tables_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function setTablesList(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <tables_list_null> has a value
     *
     * @return boolean
     */
    public function hasTablesListNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <tables_list_null> value
     *
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function clearTablesListNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <tables_list_null> value
     *
     * @return boolean
     */
    public function getTablesListNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <tables_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function setTablesListNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <separator_in_tables_list> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInTablesList(){
      return $this->_has(2);
    }
    
    /**
     * Clear <separator_in_tables_list> value
     *
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function clearSeparatorInTablesList(){
      return $this->_clear(2);
    }
    
    /**
     * Get <separator_in_tables_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSeparatorInTablesList(){
      return $this->_get(2);
    }
    
    /**
     * Set <separator_in_tables_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function setSeparatorInTablesList(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <separator_in_tables_list_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInTablesListNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <separator_in_tables_list_null> value
     *
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function clearSeparatorInTablesListNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <separator_in_tables_list_null> value
     *
     * @return boolean
     */
    public function getSeparatorInTablesListNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <separator_in_tables_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function setSeparatorInTablesListNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <search_only_object_type> has a value
     *
     * @return boolean
     */
    public function hasSearchOnlyObjectType(){
      return $this->_has(3);
    }
    
    /**
     * Clear <search_only_object_type> value
     *
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function clearSearchOnlyObjectType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <search_only_object_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSearchOnlyObjectType(){
      return $this->_get(3);
    }
    
    /**
     * Set <search_only_object_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function setSearchOnlyObjectType(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <search_only_object_type_null> has a value
     *
     * @return boolean
     */
    public function hasSearchOnlyObjectTypeNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <search_only_object_type_null> value
     *
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function clearSearchOnlyObjectTypeNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <search_only_object_type_null> value
     *
     * @return boolean
     */
    public function getSearchOnlyObjectTypeNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <search_only_object_type_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function setSearchOnlyObjectTypeNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <get_distinct_object_names_only> has a value
     *
     * @return boolean
     */
    public function hasGetDistinctObjectNamesOnly(){
      return $this->_has(4);
    }
    
    /**
     * Clear <get_distinct_object_names_only> value
     *
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function clearGetDistinctObjectNamesOnly(){
      return $this->_clear(4);
    }
    
    /**
     * Get <get_distinct_object_names_only> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetDistinctObjectNamesOnly(){
      return $this->_get(4);
    }
    
    /**
     * Set <get_distinct_object_names_only> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function setGetDistinctObjectNamesOnly(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <get_distinct_object_names_only_null> has a value
     *
     * @return boolean
     */
    public function hasGetDistinctObjectNamesOnlyNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <get_distinct_object_names_only_null> value
     *
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function clearGetDistinctObjectNamesOnlyNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <get_distinct_object_names_only_null> value
     *
     * @return boolean
     */
    public function getGetDistinctObjectNamesOnlyNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <get_distinct_object_names_only_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetUsageOfTables_Ad\Parameters
     */
    public function setGetDistinctObjectNamesOnlyNull( $value){
      return $this->_set(1004, $value);
    }
  }
}
