<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCampaignItemCondParts_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetCampaignItemCondParts_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $operator1 = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $condition1 = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $condition2 = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $operator2 = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $recursive_evaluation = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $domain_tree_node_ids = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $item_condition_part_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $extended_item_cond_part_descr = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $min_number_of_items = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $to_quantity = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $from_basic_price_sum = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $max_number_of_items = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $to_basic_price_sum = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $level_ids = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $condition_id = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $to_item_basic_price = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $from_quantity = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $inherit_depth = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $from_item_basic_price = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCampaignItemCondParts_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE operator1 = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "operator1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition1 = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "condition1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition2 = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "condition2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE operator2 = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "operator2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE recursive_evaluation = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "recursive_evaluation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE domain_tree_node_ids = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "domain_tree_node_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_part_id = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "item_condition_part_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE extended_item_cond_part_descr = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "extended_item_cond_part_descr";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE min_number_of_items = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "min_number_of_items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_quantity = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "to_quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_basic_price_sum = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "from_basic_price_sum";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE max_number_of_items = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "max_number_of_items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_basic_price_sum = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "to_basic_price_sum";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_ids = 10015
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10015;
      $f->name      = "level_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition_id = 10016
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10016;
      $f->name      = "condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_item_basic_price = 10017
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10017;
      $f->name      = "to_item_basic_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_quantity = 10018
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10018;
      $f->name      = "from_quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE inherit_depth = 10019
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10019;
      $f->name      = "inherit_depth";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_item_basic_price = 10020
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10020;
      $f->name      = "from_item_basic_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
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
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
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
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <operator1> has a value
     *
     * @return boolean
     */
    public function hasOperator1(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <operator1> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearOperator1(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <operator1> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOperator1(){
      return $this->_get(10001);
    }
    
    /**
     * Set <operator1> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setOperator1(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <condition1> has a value
     *
     * @return boolean
     */
    public function hasCondition1(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <condition1> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearCondition1(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <condition1> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCondition1(){
      return $this->_get(10002);
    }
    
    /**
     * Set <condition1> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setCondition1(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <condition2> has a value
     *
     * @return boolean
     */
    public function hasCondition2(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <condition2> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearCondition2(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <condition2> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCondition2(){
      return $this->_get(10003);
    }
    
    /**
     * Set <condition2> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setCondition2(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <operator2> has a value
     *
     * @return boolean
     */
    public function hasOperator2(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <operator2> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearOperator2(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <operator2> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getOperator2(){
      return $this->_get(10004);
    }
    
    /**
     * Set <operator2> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setOperator2(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <recursive_evaluation> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluation(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <recursive_evaluation> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearRecursiveEvaluation(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <recursive_evaluation> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRecursiveEvaluation(){
      return $this->_get(10005);
    }
    
    /**
     * Set <recursive_evaluation> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setRecursiveEvaluation(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <domain_tree_node_ids> has a value
     *
     * @return boolean
     */
    public function hasDomainTreeNodeIds(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <domain_tree_node_ids> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearDomainTreeNodeIds(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <domain_tree_node_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDomainTreeNodeIds(){
      return $this->_get(10006);
    }
    
    /**
     * Set <domain_tree_node_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setDomainTreeNodeIds(\dstore\engine\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(10007);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setNodeCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <item_condition_part_id> has a value
     *
     * @return boolean
     */
    public function hasItemConditionPartId(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <item_condition_part_id> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearItemConditionPartId(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <item_condition_part_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getItemConditionPartId(){
      return $this->_get(10008);
    }
    
    /**
     * Set <item_condition_part_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setItemConditionPartId(\dstore\engine\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <extended_item_cond_part_descr> has a value
     *
     * @return boolean
     */
    public function hasExtendedItemCondPartDescr(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <extended_item_cond_part_descr> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearExtendedItemCondPartDescr(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <extended_item_cond_part_descr> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getExtendedItemCondPartDescr(){
      return $this->_get(10009);
    }
    
    /**
     * Set <extended_item_cond_part_descr> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setExtendedItemCondPartDescr(\dstore\engine\values\stringValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <min_number_of_items> has a value
     *
     * @return boolean
     */
    public function hasMinNumberOfItems(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <min_number_of_items> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearMinNumberOfItems(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <min_number_of_items> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMinNumberOfItems(){
      return $this->_get(10010);
    }
    
    /**
     * Set <min_number_of_items> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setMinNumberOfItems(\dstore\engine\values\integerValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <to_quantity> has a value
     *
     * @return boolean
     */
    public function hasToQuantity(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <to_quantity> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearToQuantity(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <to_quantity> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getToQuantity(){
      return $this->_get(10011);
    }
    
    /**
     * Set <to_quantity> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setToQuantity(\dstore\engine\values\integerValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <from_basic_price_sum> has a value
     *
     * @return boolean
     */
    public function hasFromBasicPriceSum(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <from_basic_price_sum> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearFromBasicPriceSum(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <from_basic_price_sum> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getFromBasicPriceSum(){
      return $this->_get(10012);
    }
    
    /**
     * Set <from_basic_price_sum> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setFromBasicPriceSum(\dstore\engine\values\decimalValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <max_number_of_items> has a value
     *
     * @return boolean
     */
    public function hasMaxNumberOfItems(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <max_number_of_items> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearMaxNumberOfItems(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <max_number_of_items> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getMaxNumberOfItems(){
      return $this->_get(10013);
    }
    
    /**
     * Set <max_number_of_items> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setMaxNumberOfItems(\dstore\engine\values\integerValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <to_basic_price_sum> has a value
     *
     * @return boolean
     */
    public function hasToBasicPriceSum(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <to_basic_price_sum> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearToBasicPriceSum(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <to_basic_price_sum> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getToBasicPriceSum(){
      return $this->_get(10014);
    }
    
    /**
     * Set <to_basic_price_sum> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setToBasicPriceSum(\dstore\engine\values\decimalValue $value){
      return $this->_set(10014, $value);
    }
    
    /**
     * Check if <level_ids> has a value
     *
     * @return boolean
     */
    public function hasLevelIds(){
      return $this->_has(10015);
    }
    
    /**
     * Clear <level_ids> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearLevelIds(){
      return $this->_clear(10015);
    }
    
    /**
     * Get <level_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLevelIds(){
      return $this->_get(10015);
    }
    
    /**
     * Set <level_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setLevelIds(\dstore\engine\values\stringValue $value){
      return $this->_set(10015, $value);
    }
    
    /**
     * Check if <condition_id> has a value
     *
     * @return boolean
     */
    public function hasConditionId(){
      return $this->_has(10016);
    }
    
    /**
     * Clear <condition_id> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearConditionId(){
      return $this->_clear(10016);
    }
    
    /**
     * Get <condition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getConditionId(){
      return $this->_get(10016);
    }
    
    /**
     * Set <condition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setConditionId(\dstore\engine\values\integerValue $value){
      return $this->_set(10016, $value);
    }
    
    /**
     * Check if <to_item_basic_price> has a value
     *
     * @return boolean
     */
    public function hasToItemBasicPrice(){
      return $this->_has(10017);
    }
    
    /**
     * Clear <to_item_basic_price> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearToItemBasicPrice(){
      return $this->_clear(10017);
    }
    
    /**
     * Get <to_item_basic_price> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getToItemBasicPrice(){
      return $this->_get(10017);
    }
    
    /**
     * Set <to_item_basic_price> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setToItemBasicPrice(\dstore\engine\values\decimalValue $value){
      return $this->_set(10017, $value);
    }
    
    /**
     * Check if <from_quantity> has a value
     *
     * @return boolean
     */
    public function hasFromQuantity(){
      return $this->_has(10018);
    }
    
    /**
     * Clear <from_quantity> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearFromQuantity(){
      return $this->_clear(10018);
    }
    
    /**
     * Get <from_quantity> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFromQuantity(){
      return $this->_get(10018);
    }
    
    /**
     * Set <from_quantity> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setFromQuantity(\dstore\engine\values\integerValue $value){
      return $this->_set(10018, $value);
    }
    
    /**
     * Check if <inherit_depth> has a value
     *
     * @return boolean
     */
    public function hasInheritDepth(){
      return $this->_has(10019);
    }
    
    /**
     * Clear <inherit_depth> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearInheritDepth(){
      return $this->_clear(10019);
    }
    
    /**
     * Get <inherit_depth> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInheritDepth(){
      return $this->_get(10019);
    }
    
    /**
     * Set <inherit_depth> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setInheritDepth(\dstore\engine\values\integerValue $value){
      return $this->_set(10019, $value);
    }
    
    /**
     * Check if <from_item_basic_price> has a value
     *
     * @return boolean
     */
    public function hasFromItemBasicPrice(){
      return $this->_has(10020);
    }
    
    /**
     * Clear <from_item_basic_price> value
     *
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function clearFromItemBasicPrice(){
      return $this->_clear(10020);
    }
    
    /**
     * Get <from_item_basic_price> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getFromItemBasicPrice(){
      return $this->_get(10020);
    }
    
    /**
     * Set <from_item_basic_price> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetCampaignItemCondParts_Ad\Response\Row
     */
    public function setFromItemBasicPrice(\dstore\engine\values\decimalValue $value){
      return $this->_set(10020, $value);
    }
  }
}

