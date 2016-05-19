<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetPrices_Pu.proto
//   Date: 2016-05-19 08:07:50

namespace dstore\engine\om_GetPrices_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\decimalValue */
    public $precise_abs_unit_gross_surcharge = null;
    
    /**  @var \dstore\values\integerValue */
    public $price_node_characteristic_id = null;
    
    /**  @var \dstore\values\decimalValue */
    public $unit_gross_price = null;
    
    /**  @var \dstore\values\decimalValue */
    public $absolute_total_net_surcharge = null;
    
    /**  @var \dstore\values\decimalValue */
    public $absolute_total_gross_surcharge = null;
    
    /**  @var \dstore\values\decimalValue */
    public $precise_unit_gross_price = null;
    
    /**  @var \dstore\values\decimalValue */
    public $unit_net_price = null;
    
    /**  @var \dstore\values\decimalValue */
    public $precise_abs_unit_net_surcharge = null;
    
    /**  @var \dstore\values\stringValue */
    public $surcharge_reason = null;
    
    /**  @var \dstore\values\integerValue */
    public $node_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var \dstore\values\decimalValue */
    public $relative_surcharge = null;
    
    /**  @var \dstore\values\stringValue */
    public $surcharge_generated_by_camp_ids = null;
    
    /**  @var \dstore\values\decimalValue */
    public $precise_total_gross_price = null;
    
    /**  @var \dstore\values\decimalValue */
    public $taxes_multiplier = null;
    
    /**  @var \dstore\values\decimalValue */
    public $precise_abs_total_gross_surcharge = null;
    
    /**  @var \dstore\values\decimalValue */
    public $precise_abs_total_net_surcharge = null;
    
    /**  @var \dstore\values\decimalValue */
    public $total_net_price = null;
    
    /**  @var \dstore\values\integerValue */
    public $quantity = null;
    
    /**  @var \dstore\values\stringValue */
    public $quantity_per_bundle_item_set_id_list = null;
    
    /**  @var \dstore\values\decimalValue */
    public $surcharge_value = null;
    
    /**  @var \dstore\values\decimalValue */
    public $absolute_unit_net_surcharge = null;
    
    /**  @var \dstore\values\decimalValue */
    public $absolute_unit_gross_surcharge = null;
    
    /**  @var \dstore\values\decimalValue */
    public $precise_total_net_price = null;
    
    /**  @var \dstore\values\integerValue */
    public $surcharge_type_id = null;
    
    /**  @var \dstore\values\decimalValue */
    public $precise_unit_net_price = null;
    
    /**  @var \dstore\values\decimalValue */
    public $total_gross_price = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetPrices_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precise_abs_unit_gross_surcharge = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "precise_abs_unit_gross_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE price_node_characteristic_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "price_node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_gross_price = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "unit_gross_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE absolute_total_net_surcharge = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "absolute_total_net_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE absolute_total_gross_surcharge = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "absolute_total_gross_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precise_unit_gross_price = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "precise_unit_gross_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_net_price = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "unit_net_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precise_abs_unit_net_surcharge = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "precise_abs_unit_net_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_reason = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "surcharge_reason";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_id = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tree_node_id = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE relative_surcharge = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "relative_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_generated_by_camp_ids = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "surcharge_generated_by_camp_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precise_total_gross_price = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "precise_total_gross_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE taxes_multiplier = 10015
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10015;
      $f->name      = "taxes_multiplier";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precise_abs_total_gross_surcharge = 10016
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10016;
      $f->name      = "precise_abs_total_gross_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precise_abs_total_net_surcharge = 10017
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10017;
      $f->name      = "precise_abs_total_net_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE total_net_price = 10018
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10018;
      $f->name      = "total_net_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE quantity = 10019
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10019;
      $f->name      = "quantity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE quantity_per_bundle_item_set_id_list = 10020
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10020;
      $f->name      = "quantity_per_bundle_item_set_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_value = 10021
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10021;
      $f->name      = "surcharge_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE absolute_unit_net_surcharge = 10022
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10022;
      $f->name      = "absolute_unit_net_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE absolute_unit_gross_surcharge = 10023
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10023;
      $f->name      = "absolute_unit_gross_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precise_total_net_price = 10024
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10024;
      $f->name      = "precise_total_net_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_id = 10025
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10025;
      $f->name      = "surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE precise_unit_net_price = 10026
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10026;
      $f->name      = "precise_unit_net_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE total_gross_price = 10027
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10027;
      $f->name      = "total_gross_price";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
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
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
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
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <precise_abs_unit_gross_surcharge> has a value
     *
     * @return boolean
     */
    public function hasPreciseAbsUnitGrossSurcharge(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <precise_abs_unit_gross_surcharge> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearPreciseAbsUnitGrossSurcharge(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <precise_abs_unit_gross_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getPreciseAbsUnitGrossSurcharge(){
      return $this->_get(10001);
    }
    
    /**
     * Set <precise_abs_unit_gross_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setPreciseAbsUnitGrossSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <price_node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPriceNodeCharacteristicId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <price_node_characteristic_id> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearPriceNodeCharacteristicId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <price_node_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPriceNodeCharacteristicId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <price_node_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setPriceNodeCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <unit_gross_price> has a value
     *
     * @return boolean
     */
    public function hasUnitGrossPrice(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <unit_gross_price> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearUnitGrossPrice(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <unit_gross_price> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getUnitGrossPrice(){
      return $this->_get(10003);
    }
    
    /**
     * Set <unit_gross_price> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setUnitGrossPrice(\dstore\values\decimalValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <absolute_total_net_surcharge> has a value
     *
     * @return boolean
     */
    public function hasAbsoluteTotalNetSurcharge(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <absolute_total_net_surcharge> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearAbsoluteTotalNetSurcharge(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <absolute_total_net_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getAbsoluteTotalNetSurcharge(){
      return $this->_get(10004);
    }
    
    /**
     * Set <absolute_total_net_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setAbsoluteTotalNetSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <absolute_total_gross_surcharge> has a value
     *
     * @return boolean
     */
    public function hasAbsoluteTotalGrossSurcharge(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <absolute_total_gross_surcharge> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearAbsoluteTotalGrossSurcharge(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <absolute_total_gross_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getAbsoluteTotalGrossSurcharge(){
      return $this->_get(10005);
    }
    
    /**
     * Set <absolute_total_gross_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setAbsoluteTotalGrossSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <precise_unit_gross_price> has a value
     *
     * @return boolean
     */
    public function hasPreciseUnitGrossPrice(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <precise_unit_gross_price> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearPreciseUnitGrossPrice(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <precise_unit_gross_price> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getPreciseUnitGrossPrice(){
      return $this->_get(10006);
    }
    
    /**
     * Set <precise_unit_gross_price> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setPreciseUnitGrossPrice(\dstore\values\decimalValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <unit_net_price> has a value
     *
     * @return boolean
     */
    public function hasUnitNetPrice(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <unit_net_price> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearUnitNetPrice(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <unit_net_price> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getUnitNetPrice(){
      return $this->_get(10007);
    }
    
    /**
     * Set <unit_net_price> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setUnitNetPrice(\dstore\values\decimalValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <precise_abs_unit_net_surcharge> has a value
     *
     * @return boolean
     */
    public function hasPreciseAbsUnitNetSurcharge(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <precise_abs_unit_net_surcharge> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearPreciseAbsUnitNetSurcharge(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <precise_abs_unit_net_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getPreciseAbsUnitNetSurcharge(){
      return $this->_get(10008);
    }
    
    /**
     * Set <precise_abs_unit_net_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setPreciseAbsUnitNetSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <surcharge_reason> has a value
     *
     * @return boolean
     */
    public function hasSurchargeReason(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <surcharge_reason> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearSurchargeReason(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <surcharge_reason> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSurchargeReason(){
      return $this->_get(10009);
    }
    
    /**
     * Set <surcharge_reason> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setSurchargeReason(\dstore\values\stringValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <node_id> has a value
     *
     * @return boolean
     */
    public function hasNodeId(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <node_id> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearNodeId(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getNodeId(){
      return $this->_get(10010);
    }
    
    /**
     * Set <node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setNodeId(\dstore\values\integerValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeId(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <tree_node_id> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearTreeNodeId(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTreeNodeId(){
      return $this->_get(10011);
    }
    
    /**
     * Set <tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <relative_surcharge> has a value
     *
     * @return boolean
     */
    public function hasRelativeSurcharge(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <relative_surcharge> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearRelativeSurcharge(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <relative_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getRelativeSurcharge(){
      return $this->_get(10012);
    }
    
    /**
     * Set <relative_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setRelativeSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <surcharge_generated_by_camp_ids> has a value
     *
     * @return boolean
     */
    public function hasSurchargeGeneratedByCampIds(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <surcharge_generated_by_camp_ids> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearSurchargeGeneratedByCampIds(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <surcharge_generated_by_camp_ids> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSurchargeGeneratedByCampIds(){
      return $this->_get(10013);
    }
    
    /**
     * Set <surcharge_generated_by_camp_ids> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setSurchargeGeneratedByCampIds(\dstore\values\stringValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <precise_total_gross_price> has a value
     *
     * @return boolean
     */
    public function hasPreciseTotalGrossPrice(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <precise_total_gross_price> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearPreciseTotalGrossPrice(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <precise_total_gross_price> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getPreciseTotalGrossPrice(){
      return $this->_get(10014);
    }
    
    /**
     * Set <precise_total_gross_price> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setPreciseTotalGrossPrice(\dstore\values\decimalValue $value){
      return $this->_set(10014, $value);
    }
    
    /**
     * Check if <taxes_multiplier> has a value
     *
     * @return boolean
     */
    public function hasTaxesMultiplier(){
      return $this->_has(10015);
    }
    
    /**
     * Clear <taxes_multiplier> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearTaxesMultiplier(){
      return $this->_clear(10015);
    }
    
    /**
     * Get <taxes_multiplier> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getTaxesMultiplier(){
      return $this->_get(10015);
    }
    
    /**
     * Set <taxes_multiplier> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setTaxesMultiplier(\dstore\values\decimalValue $value){
      return $this->_set(10015, $value);
    }
    
    /**
     * Check if <precise_abs_total_gross_surcharge> has a value
     *
     * @return boolean
     */
    public function hasPreciseAbsTotalGrossSurcharge(){
      return $this->_has(10016);
    }
    
    /**
     * Clear <precise_abs_total_gross_surcharge> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearPreciseAbsTotalGrossSurcharge(){
      return $this->_clear(10016);
    }
    
    /**
     * Get <precise_abs_total_gross_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getPreciseAbsTotalGrossSurcharge(){
      return $this->_get(10016);
    }
    
    /**
     * Set <precise_abs_total_gross_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setPreciseAbsTotalGrossSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10016, $value);
    }
    
    /**
     * Check if <precise_abs_total_net_surcharge> has a value
     *
     * @return boolean
     */
    public function hasPreciseAbsTotalNetSurcharge(){
      return $this->_has(10017);
    }
    
    /**
     * Clear <precise_abs_total_net_surcharge> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearPreciseAbsTotalNetSurcharge(){
      return $this->_clear(10017);
    }
    
    /**
     * Get <precise_abs_total_net_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getPreciseAbsTotalNetSurcharge(){
      return $this->_get(10017);
    }
    
    /**
     * Set <precise_abs_total_net_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setPreciseAbsTotalNetSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10017, $value);
    }
    
    /**
     * Check if <total_net_price> has a value
     *
     * @return boolean
     */
    public function hasTotalNetPrice(){
      return $this->_has(10018);
    }
    
    /**
     * Clear <total_net_price> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearTotalNetPrice(){
      return $this->_clear(10018);
    }
    
    /**
     * Get <total_net_price> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getTotalNetPrice(){
      return $this->_get(10018);
    }
    
    /**
     * Set <total_net_price> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setTotalNetPrice(\dstore\values\decimalValue $value){
      return $this->_set(10018, $value);
    }
    
    /**
     * Check if <quantity> has a value
     *
     * @return boolean
     */
    public function hasQuantity(){
      return $this->_has(10019);
    }
    
    /**
     * Clear <quantity> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearQuantity(){
      return $this->_clear(10019);
    }
    
    /**
     * Get <quantity> value
     *
     * @return \dstore\values\integerValue
     */
    public function getQuantity(){
      return $this->_get(10019);
    }
    
    /**
     * Set <quantity> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setQuantity(\dstore\values\integerValue $value){
      return $this->_set(10019, $value);
    }
    
    /**
     * Check if <quantity_per_bundle_item_set_id_list> has a value
     *
     * @return boolean
     */
    public function hasQuantityPerBundleItemSetIdList(){
      return $this->_has(10020);
    }
    
    /**
     * Clear <quantity_per_bundle_item_set_id_list> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearQuantityPerBundleItemSetIdList(){
      return $this->_clear(10020);
    }
    
    /**
     * Get <quantity_per_bundle_item_set_id_list> value
     *
     * @return \dstore\values\stringValue
     */
    public function getQuantityPerBundleItemSetIdList(){
      return $this->_get(10020);
    }
    
    /**
     * Set <quantity_per_bundle_item_set_id_list> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setQuantityPerBundleItemSetIdList(\dstore\values\stringValue $value){
      return $this->_set(10020, $value);
    }
    
    /**
     * Check if <surcharge_value> has a value
     *
     * @return boolean
     */
    public function hasSurchargeValue(){
      return $this->_has(10021);
    }
    
    /**
     * Clear <surcharge_value> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearSurchargeValue(){
      return $this->_clear(10021);
    }
    
    /**
     * Get <surcharge_value> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getSurchargeValue(){
      return $this->_get(10021);
    }
    
    /**
     * Set <surcharge_value> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setSurchargeValue(\dstore\values\decimalValue $value){
      return $this->_set(10021, $value);
    }
    
    /**
     * Check if <absolute_unit_net_surcharge> has a value
     *
     * @return boolean
     */
    public function hasAbsoluteUnitNetSurcharge(){
      return $this->_has(10022);
    }
    
    /**
     * Clear <absolute_unit_net_surcharge> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearAbsoluteUnitNetSurcharge(){
      return $this->_clear(10022);
    }
    
    /**
     * Get <absolute_unit_net_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getAbsoluteUnitNetSurcharge(){
      return $this->_get(10022);
    }
    
    /**
     * Set <absolute_unit_net_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setAbsoluteUnitNetSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10022, $value);
    }
    
    /**
     * Check if <absolute_unit_gross_surcharge> has a value
     *
     * @return boolean
     */
    public function hasAbsoluteUnitGrossSurcharge(){
      return $this->_has(10023);
    }
    
    /**
     * Clear <absolute_unit_gross_surcharge> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearAbsoluteUnitGrossSurcharge(){
      return $this->_clear(10023);
    }
    
    /**
     * Get <absolute_unit_gross_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getAbsoluteUnitGrossSurcharge(){
      return $this->_get(10023);
    }
    
    /**
     * Set <absolute_unit_gross_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setAbsoluteUnitGrossSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10023, $value);
    }
    
    /**
     * Check if <precise_total_net_price> has a value
     *
     * @return boolean
     */
    public function hasPreciseTotalNetPrice(){
      return $this->_has(10024);
    }
    
    /**
     * Clear <precise_total_net_price> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearPreciseTotalNetPrice(){
      return $this->_clear(10024);
    }
    
    /**
     * Get <precise_total_net_price> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getPreciseTotalNetPrice(){
      return $this->_get(10024);
    }
    
    /**
     * Set <precise_total_net_price> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setPreciseTotalNetPrice(\dstore\values\decimalValue $value){
      return $this->_set(10024, $value);
    }
    
    /**
     * Check if <surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeId(){
      return $this->_has(10025);
    }
    
    /**
     * Clear <surcharge_type_id> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearSurchargeTypeId(){
      return $this->_clear(10025);
    }
    
    /**
     * Get <surcharge_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSurchargeTypeId(){
      return $this->_get(10025);
    }
    
    /**
     * Set <surcharge_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setSurchargeTypeId(\dstore\values\integerValue $value){
      return $this->_set(10025, $value);
    }
    
    /**
     * Check if <precise_unit_net_price> has a value
     *
     * @return boolean
     */
    public function hasPreciseUnitNetPrice(){
      return $this->_has(10026);
    }
    
    /**
     * Clear <precise_unit_net_price> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearPreciseUnitNetPrice(){
      return $this->_clear(10026);
    }
    
    /**
     * Get <precise_unit_net_price> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getPreciseUnitNetPrice(){
      return $this->_get(10026);
    }
    
    /**
     * Set <precise_unit_net_price> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setPreciseUnitNetPrice(\dstore\values\decimalValue $value){
      return $this->_set(10026, $value);
    }
    
    /**
     * Check if <total_gross_price> has a value
     *
     * @return boolean
     */
    public function hasTotalGrossPrice(){
      return $this->_has(10027);
    }
    
    /**
     * Clear <total_gross_price> value
     *
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function clearTotalGrossPrice(){
      return $this->_clear(10027);
    }
    
    /**
     * Get <total_gross_price> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getTotalGrossPrice(){
      return $this->_get(10027);
    }
    
    /**
     * Set <total_gross_price> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetPrices_Pu\Response\Row
     */
    public function setTotalGrossPrice(\dstore\values\decimalValue $value){
      return $this->_set(10027, $value);
    }
  }
}

