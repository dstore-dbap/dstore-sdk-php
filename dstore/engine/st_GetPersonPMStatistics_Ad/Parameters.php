<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetPersonPMStatistics_Ad.proto
//   Date: 2016-05-19 08:07:57

namespace dstore\engine\st_GetPersonPMStatistics_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $person_ids = null;
    
    /**  @var boolean */
    public $person_ids_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $from_month = null;
    
    /**  @var boolean */
    public $from_month_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $from_year = null;
    
    /**  @var boolean */
    public $from_year_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $to_month = null;
    
    /**  @var boolean */
    public $to_month_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $to_year = null;
    
    /**  @var boolean */
    public $to_year_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $basic_characteristic_numbers = null;
    
    /**  @var boolean */
    public $basic_characteristic_numbers_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $h_tree_node_ids = null;
    
    /**  @var boolean */
    public $h_tree_node_ids_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $summarize_months = null;
    
    /**  @var boolean */
    public $summarize_months_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $get_top_x = null;
    
    /**  @var boolean */
    public $get_top_x_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetPersonPMStatistics_Ad.Parameters');

      // OPTIONAL MESSAGE person_ids = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_ids_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_month = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "from_month";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_month_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "from_month_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_year = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "from_year";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_year_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "from_year_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_month = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "to_month";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_month_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "to_month_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_year = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "to_year";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_year_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "to_year_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_characteristic_numbers = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "basic_characteristic_numbers";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL basic_characteristic_numbers_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "basic_characteristic_numbers_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE h_tree_node_ids = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "h_tree_node_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL h_tree_node_ids_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "h_tree_node_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE summarize_months = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "summarize_months";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL summarize_months_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "summarize_months_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_top_x = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "get_top_x";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_top_x_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "get_top_x_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_ids> has a value
     *
     * @return boolean
     */
    public function hasPersonIds(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_ids> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearPersonIds(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_ids> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPersonIds(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_ids> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setPersonIds(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_ids_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdsNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_ids_null> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearPersonIdsNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_ids_null> value
     *
     * @return boolean
     */
    public function getPersonIdsNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setPersonIdsNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <from_month> has a value
     *
     * @return boolean
     */
    public function hasFromMonth(){
      return $this->_has(2);
    }
    
    /**
     * Clear <from_month> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearFromMonth(){
      return $this->_clear(2);
    }
    
    /**
     * Get <from_month> value
     *
     * @return \dstore\values\integerValue
     */
    public function getFromMonth(){
      return $this->_get(2);
    }
    
    /**
     * Set <from_month> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setFromMonth(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <from_month_null> has a value
     *
     * @return boolean
     */
    public function hasFromMonthNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <from_month_null> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearFromMonthNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <from_month_null> value
     *
     * @return boolean
     */
    public function getFromMonthNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <from_month_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setFromMonthNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <from_year> has a value
     *
     * @return boolean
     */
    public function hasFromYear(){
      return $this->_has(3);
    }
    
    /**
     * Clear <from_year> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearFromYear(){
      return $this->_clear(3);
    }
    
    /**
     * Get <from_year> value
     *
     * @return \dstore\values\integerValue
     */
    public function getFromYear(){
      return $this->_get(3);
    }
    
    /**
     * Set <from_year> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setFromYear(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <from_year_null> has a value
     *
     * @return boolean
     */
    public function hasFromYearNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <from_year_null> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearFromYearNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <from_year_null> value
     *
     * @return boolean
     */
    public function getFromYearNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <from_year_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setFromYearNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <to_month> has a value
     *
     * @return boolean
     */
    public function hasToMonth(){
      return $this->_has(4);
    }
    
    /**
     * Clear <to_month> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearToMonth(){
      return $this->_clear(4);
    }
    
    /**
     * Get <to_month> value
     *
     * @return \dstore\values\integerValue
     */
    public function getToMonth(){
      return $this->_get(4);
    }
    
    /**
     * Set <to_month> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setToMonth(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <to_month_null> has a value
     *
     * @return boolean
     */
    public function hasToMonthNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <to_month_null> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearToMonthNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <to_month_null> value
     *
     * @return boolean
     */
    public function getToMonthNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <to_month_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setToMonthNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <to_year> has a value
     *
     * @return boolean
     */
    public function hasToYear(){
      return $this->_has(5);
    }
    
    /**
     * Clear <to_year> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearToYear(){
      return $this->_clear(5);
    }
    
    /**
     * Get <to_year> value
     *
     * @return \dstore\values\integerValue
     */
    public function getToYear(){
      return $this->_get(5);
    }
    
    /**
     * Set <to_year> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setToYear(\dstore\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <to_year_null> has a value
     *
     * @return boolean
     */
    public function hasToYearNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <to_year_null> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearToYearNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <to_year_null> value
     *
     * @return boolean
     */
    public function getToYearNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <to_year_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setToYearNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <basic_characteristic_numbers> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumbers(){
      return $this->_has(6);
    }
    
    /**
     * Clear <basic_characteristic_numbers> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearBasicCharacteristicNumbers(){
      return $this->_clear(6);
    }
    
    /**
     * Get <basic_characteristic_numbers> value
     *
     * @return \dstore\values\stringValue
     */
    public function getBasicCharacteristicNumbers(){
      return $this->_get(6);
    }
    
    /**
     * Set <basic_characteristic_numbers> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setBasicCharacteristicNumbers(\dstore\values\stringValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <basic_characteristic_numbers_null> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumbersNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <basic_characteristic_numbers_null> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearBasicCharacteristicNumbersNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <basic_characteristic_numbers_null> value
     *
     * @return boolean
     */
    public function getBasicCharacteristicNumbersNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <basic_characteristic_numbers_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setBasicCharacteristicNumbersNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <h_tree_node_ids> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeIds(){
      return $this->_has(7);
    }
    
    /**
     * Clear <h_tree_node_ids> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearHTreeNodeIds(){
      return $this->_clear(7);
    }
    
    /**
     * Get <h_tree_node_ids> value
     *
     * @return \dstore\values\stringValue
     */
    public function getHTreeNodeIds(){
      return $this->_get(7);
    }
    
    /**
     * Set <h_tree_node_ids> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setHTreeNodeIds(\dstore\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <h_tree_node_ids_null> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeIdsNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <h_tree_node_ids_null> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearHTreeNodeIdsNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <h_tree_node_ids_null> value
     *
     * @return boolean
     */
    public function getHTreeNodeIdsNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <h_tree_node_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setHTreeNodeIdsNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <summarize_months> has a value
     *
     * @return boolean
     */
    public function hasSummarizeMonths(){
      return $this->_has(8);
    }
    
    /**
     * Clear <summarize_months> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearSummarizeMonths(){
      return $this->_clear(8);
    }
    
    /**
     * Get <summarize_months> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getSummarizeMonths(){
      return $this->_get(8);
    }
    
    /**
     * Set <summarize_months> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setSummarizeMonths(\dstore\values\booleanValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <summarize_months_null> has a value
     *
     * @return boolean
     */
    public function hasSummarizeMonthsNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <summarize_months_null> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearSummarizeMonthsNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <summarize_months_null> value
     *
     * @return boolean
     */
    public function getSummarizeMonthsNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <summarize_months_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setSummarizeMonthsNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <get_top_x> has a value
     *
     * @return boolean
     */
    public function hasGetTopX(){
      return $this->_has(9);
    }
    
    /**
     * Clear <get_top_x> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearGetTopX(){
      return $this->_clear(9);
    }
    
    /**
     * Get <get_top_x> value
     *
     * @return \dstore\values\integerValue
     */
    public function getGetTopX(){
      return $this->_get(9);
    }
    
    /**
     * Set <get_top_x> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setGetTopX(\dstore\values\integerValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <get_top_x_null> has a value
     *
     * @return boolean
     */
    public function hasGetTopXNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <get_top_x_null> value
     *
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function clearGetTopXNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <get_top_x_null> value
     *
     * @return boolean
     */
    public function getGetTopXNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <get_top_x_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPersonPMStatistics_Ad\Parameters
     */
    public function setGetTopXNull( $value){
      return $this->_set(1009, $value);
    }
  }
}

