<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetTreeNodePMStatistics_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\st_GetTreeNodePMStatistics_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $from_month = null;
    
    /**  @var boolean */
    public $from_month_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $from_year = null;
    
    /**  @var boolean */
    public $from_year_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $to_month = null;
    
    /**  @var boolean */
    public $to_month_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $to_year = null;
    
    /**  @var boolean */
    public $to_year_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $basic_characteristic_numbers = null;
    
    /**  @var boolean */
    public $basic_characteristic_numbers_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $h_tree_node_ids = null;
    
    /**  @var boolean */
    public $h_tree_node_ids_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $summarize_months = null;
    
    /**  @var boolean */
    public $summarize_months_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetTreeNodePMStatistics_Ad.Parameters');

      // OPTIONAL MESSAGE from_month = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "from_month";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_month_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "from_month_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_year = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "from_year";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_year_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "from_year_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_month = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "to_month";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_month_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "to_month_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_year = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "to_year";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_year_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "to_year_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_characteristic_numbers = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "basic_characteristic_numbers";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL basic_characteristic_numbers_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "basic_characteristic_numbers_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE h_tree_node_ids = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "h_tree_node_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL h_tree_node_ids_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "h_tree_node_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE summarize_months = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "summarize_months";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL summarize_months_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "summarize_months_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <from_month> has a value
     *
     * @return boolean
     */
    public function hasFromMonth(){
      return $this->_has(1);
    }
    
    /**
     * Clear <from_month> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearFromMonth(){
      return $this->_clear(1);
    }
    
    /**
     * Get <from_month> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFromMonth(){
      return $this->_get(1);
    }
    
    /**
     * Set <from_month> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setFromMonth(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <from_month_null> has a value
     *
     * @return boolean
     */
    public function hasFromMonthNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <from_month_null> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearFromMonthNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <from_month_null> value
     *
     * @return boolean
     */
    public function getFromMonthNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <from_month_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setFromMonthNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <from_year> has a value
     *
     * @return boolean
     */
    public function hasFromYear(){
      return $this->_has(2);
    }
    
    /**
     * Clear <from_year> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearFromYear(){
      return $this->_clear(2);
    }
    
    /**
     * Get <from_year> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFromYear(){
      return $this->_get(2);
    }
    
    /**
     * Set <from_year> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setFromYear(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <from_year_null> has a value
     *
     * @return boolean
     */
    public function hasFromYearNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <from_year_null> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearFromYearNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <from_year_null> value
     *
     * @return boolean
     */
    public function getFromYearNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <from_year_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setFromYearNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <to_month> has a value
     *
     * @return boolean
     */
    public function hasToMonth(){
      return $this->_has(3);
    }
    
    /**
     * Clear <to_month> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearToMonth(){
      return $this->_clear(3);
    }
    
    /**
     * Get <to_month> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getToMonth(){
      return $this->_get(3);
    }
    
    /**
     * Set <to_month> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setToMonth(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <to_month_null> has a value
     *
     * @return boolean
     */
    public function hasToMonthNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <to_month_null> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearToMonthNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <to_month_null> value
     *
     * @return boolean
     */
    public function getToMonthNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <to_month_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setToMonthNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <to_year> has a value
     *
     * @return boolean
     */
    public function hasToYear(){
      return $this->_has(4);
    }
    
    /**
     * Clear <to_year> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearToYear(){
      return $this->_clear(4);
    }
    
    /**
     * Get <to_year> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getToYear(){
      return $this->_get(4);
    }
    
    /**
     * Set <to_year> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setToYear(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <to_year_null> has a value
     *
     * @return boolean
     */
    public function hasToYearNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <to_year_null> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearToYearNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <to_year_null> value
     *
     * @return boolean
     */
    public function getToYearNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <to_year_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setToYearNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <basic_characteristic_numbers> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumbers(){
      return $this->_has(5);
    }
    
    /**
     * Clear <basic_characteristic_numbers> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearBasicCharacteristicNumbers(){
      return $this->_clear(5);
    }
    
    /**
     * Get <basic_characteristic_numbers> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getBasicCharacteristicNumbers(){
      return $this->_get(5);
    }
    
    /**
     * Set <basic_characteristic_numbers> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setBasicCharacteristicNumbers(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <basic_characteristic_numbers_null> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumbersNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <basic_characteristic_numbers_null> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearBasicCharacteristicNumbersNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <basic_characteristic_numbers_null> value
     *
     * @return boolean
     */
    public function getBasicCharacteristicNumbersNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <basic_characteristic_numbers_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setBasicCharacteristicNumbersNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <h_tree_node_ids> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeIds(){
      return $this->_has(6);
    }
    
    /**
     * Clear <h_tree_node_ids> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearHTreeNodeIds(){
      return $this->_clear(6);
    }
    
    /**
     * Get <h_tree_node_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getHTreeNodeIds(){
      return $this->_get(6);
    }
    
    /**
     * Set <h_tree_node_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setHTreeNodeIds(\dstore\engine\values\stringValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <h_tree_node_ids_null> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeIdsNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <h_tree_node_ids_null> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearHTreeNodeIdsNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <h_tree_node_ids_null> value
     *
     * @return boolean
     */
    public function getHTreeNodeIdsNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <h_tree_node_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setHTreeNodeIdsNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <summarize_months> has a value
     *
     * @return boolean
     */
    public function hasSummarizeMonths(){
      return $this->_has(7);
    }
    
    /**
     * Clear <summarize_months> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearSummarizeMonths(){
      return $this->_clear(7);
    }
    
    /**
     * Get <summarize_months> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getSummarizeMonths(){
      return $this->_get(7);
    }
    
    /**
     * Set <summarize_months> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setSummarizeMonths(\dstore\engine\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <summarize_months_null> has a value
     *
     * @return boolean
     */
    public function hasSummarizeMonthsNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <summarize_months_null> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function clearSummarizeMonthsNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <summarize_months_null> value
     *
     * @return boolean
     */
    public function getSummarizeMonthsNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <summarize_months_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Parameters
     */
    public function setSummarizeMonthsNull( $value){
      return $this->_set(1007, $value);
    }
  }
}

