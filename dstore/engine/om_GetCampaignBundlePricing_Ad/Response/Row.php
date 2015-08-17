<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCampaignBundlePricing_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetCampaignBundlePricing_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $net_based_pricing = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $benefit_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $bundle_pricing_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $total_quantity = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $bundle_price_or_discount = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $item_condition_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $item_set_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $quantity = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $distinct_items_only = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $item_condition_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_no = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCampaignBundlePricing_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE net_based_pricing = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "net_based_pricing";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE benefit_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "benefit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE bundle_pricing_type_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "bundle_pricing_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE total_quantity = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "total_quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE bundle_price_or_discount = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "bundle_price_or_discount";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_id = 20002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20002;
      $f->name      = "item_condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_set_id = 20006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20006;
      $f->name      = "item_set_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE quantity = 20007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20007;
      $f->name      = "quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE distinct_items_only = 20008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20008;
      $f->name      = "distinct_items_only";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_condition_description = 20009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20009;
      $f->name      = "item_condition_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 20010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20010;
      $f->name      = "sort_no";
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
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
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
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <net_based_pricing> has a value
     *
     * @return boolean
     */
    public function hasNetBasedPricing(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <net_based_pricing> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearNetBasedPricing(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <net_based_pricing> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getNetBasedPricing(){
      return $this->_get(10001);
    }
    
    /**
     * Set <net_based_pricing> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setNetBasedPricing(\dstore\engine\values\booleanValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <benefit_id> has a value
     *
     * @return boolean
     */
    public function hasBenefitId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <benefit_id> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearBenefitId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <benefit_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBenefitId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <benefit_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setBenefitId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <bundle_pricing_type_id> has a value
     *
     * @return boolean
     */
    public function hasBundlePricingTypeId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <bundle_pricing_type_id> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearBundlePricingTypeId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <bundle_pricing_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBundlePricingTypeId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <bundle_pricing_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setBundlePricingTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <total_quantity> has a value
     *
     * @return boolean
     */
    public function hasTotalQuantity(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <total_quantity> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearTotalQuantity(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <total_quantity> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTotalQuantity(){
      return $this->_get(10004);
    }
    
    /**
     * Set <total_quantity> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setTotalQuantity(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <bundle_price_or_discount> has a value
     *
     * @return boolean
     */
    public function hasBundlePriceOrDiscount(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <bundle_price_or_discount> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearBundlePriceOrDiscount(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <bundle_price_or_discount> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getBundlePriceOrDiscount(){
      return $this->_get(10005);
    }
    
    /**
     * Set <bundle_price_or_discount> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setBundlePriceOrDiscount(\dstore\engine\values\decimalValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <item_condition_id> has a value
     *
     * @return boolean
     */
    public function hasItemConditionId(){
      return $this->_has(20002);
    }
    
    /**
     * Clear <item_condition_id> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearItemConditionId(){
      return $this->_clear(20002);
    }
    
    /**
     * Get <item_condition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getItemConditionId(){
      return $this->_get(20002);
    }
    
    /**
     * Set <item_condition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setItemConditionId(\dstore\engine\values\integerValue $value){
      return $this->_set(20002, $value);
    }
    
    /**
     * Check if <item_set_id> has a value
     *
     * @return boolean
     */
    public function hasItemSetId(){
      return $this->_has(20006);
    }
    
    /**
     * Clear <item_set_id> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearItemSetId(){
      return $this->_clear(20006);
    }
    
    /**
     * Get <item_set_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getItemSetId(){
      return $this->_get(20006);
    }
    
    /**
     * Set <item_set_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setItemSetId(\dstore\engine\values\integerValue $value){
      return $this->_set(20006, $value);
    }
    
    /**
     * Check if <quantity> has a value
     *
     * @return boolean
     */
    public function hasQuantity(){
      return $this->_has(20007);
    }
    
    /**
     * Clear <quantity> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearQuantity(){
      return $this->_clear(20007);
    }
    
    /**
     * Get <quantity> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getQuantity(){
      return $this->_get(20007);
    }
    
    /**
     * Set <quantity> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setQuantity(\dstore\engine\values\integerValue $value){
      return $this->_set(20007, $value);
    }
    
    /**
     * Check if <distinct_items_only> has a value
     *
     * @return boolean
     */
    public function hasDistinctItemsOnly(){
      return $this->_has(20008);
    }
    
    /**
     * Clear <distinct_items_only> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearDistinctItemsOnly(){
      return $this->_clear(20008);
    }
    
    /**
     * Get <distinct_items_only> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDistinctItemsOnly(){
      return $this->_get(20008);
    }
    
    /**
     * Set <distinct_items_only> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setDistinctItemsOnly(\dstore\engine\values\booleanValue $value){
      return $this->_set(20008, $value);
    }
    
    /**
     * Check if <item_condition_description> has a value
     *
     * @return boolean
     */
    public function hasItemConditionDescription(){
      return $this->_has(20009);
    }
    
    /**
     * Clear <item_condition_description> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearItemConditionDescription(){
      return $this->_clear(20009);
    }
    
    /**
     * Get <item_condition_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getItemConditionDescription(){
      return $this->_get(20009);
    }
    
    /**
     * Set <item_condition_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setItemConditionDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(20009, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(20010);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function clearSortNo(){
      return $this->_clear(20010);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(20010);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Response\Row
     */
    public function setSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(20010, $value);
    }
  }
}

