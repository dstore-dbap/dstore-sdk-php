<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetOrderSurcharges_Pu.proto
//   Date: 2016-05-19 08:07:49

namespace dstore\engine\om_GetOrderSurcharges_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\decimalValue */
    public $taxes_multiplier = null;
    
    /**  @var \dstore\values\decimalValue */
    public $absolute_net_surcharge = null;
    
    /**  @var \dstore\values\decimalValue */
    public $absolute_gross_surcharge = null;
    
    /**  @var \dstore\values\integerValue */
    public $position_no = null;
    
    /**  @var \dstore\values\stringValue */
    public $category_description = null;
    
    /**  @var \dstore\values\stringValue */
    public $surcharge_type_description = null;
    
    /**  @var \dstore\values\integerValue */
    public $surcharge_type_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $surcharge_type_category_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $currency_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $currency_symbol = null;
    
    /**  @var \dstore\values\decimalValue */
    public $original_surcharge_value = null;
    
    /**  @var \dstore\values\integerValue */
    public $orig_surch_val_unit_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $orig_surch_val_unit_symbol = null;
    
    /**  @var \dstore\values\decimalValue */
    public $applied_on_net_sum = null;
    
    /**  @var \dstore\values\decimalValue */
    public $applied_on_gross_sum = null;
    
    /**  @var \dstore\values\integerValue */
    public $orig_surch_val_is_absolute = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetOrderSurcharges_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE taxes_multiplier = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "taxes_multiplier";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE absolute_net_surcharge = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "absolute_net_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE absolute_gross_surcharge = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "absolute_gross_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE position_no = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "position_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE category_description = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "category_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_description = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "surcharge_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_id = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_category_id = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "surcharge_type_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE currency_id = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "currency_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE currency_symbol = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "currency_symbol";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE original_surcharge_value = 20001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20001;
      $f->name      = "original_surcharge_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE orig_surch_val_unit_id = 20002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20002;
      $f->name      = "orig_surch_val_unit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE orig_surch_val_unit_symbol = 20003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20003;
      $f->name      = "orig_surch_val_unit_symbol";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE applied_on_net_sum = 20004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20004;
      $f->name      = "applied_on_net_sum";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE applied_on_gross_sum = 20008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20008;
      $f->name      = "applied_on_gross_sum";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE orig_surch_val_is_absolute = 20011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20011;
      $f->name      = "orig_surch_val_is_absolute";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
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
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
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
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <taxes_multiplier> has a value
     *
     * @return boolean
     */
    public function hasTaxesMultiplier(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <taxes_multiplier> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearTaxesMultiplier(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <taxes_multiplier> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getTaxesMultiplier(){
      return $this->_get(10001);
    }
    
    /**
     * Set <taxes_multiplier> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setTaxesMultiplier(\dstore\values\decimalValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <absolute_net_surcharge> has a value
     *
     * @return boolean
     */
    public function hasAbsoluteNetSurcharge(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <absolute_net_surcharge> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearAbsoluteNetSurcharge(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <absolute_net_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getAbsoluteNetSurcharge(){
      return $this->_get(10002);
    }
    
    /**
     * Set <absolute_net_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setAbsoluteNetSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <absolute_gross_surcharge> has a value
     *
     * @return boolean
     */
    public function hasAbsoluteGrossSurcharge(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <absolute_gross_surcharge> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearAbsoluteGrossSurcharge(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <absolute_gross_surcharge> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getAbsoluteGrossSurcharge(){
      return $this->_get(10003);
    }
    
    /**
     * Set <absolute_gross_surcharge> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setAbsoluteGrossSurcharge(\dstore\values\decimalValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <position_no> has a value
     *
     * @return boolean
     */
    public function hasPositionNo(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <position_no> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearPositionNo(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <position_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPositionNo(){
      return $this->_get(10004);
    }
    
    /**
     * Set <position_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setPositionNo(\dstore\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <category_description> has a value
     *
     * @return boolean
     */
    public function hasCategoryDescription(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <category_description> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearCategoryDescription(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <category_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCategoryDescription(){
      return $this->_get(10005);
    }
    
    /**
     * Set <category_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setCategoryDescription(\dstore\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <surcharge_type_description> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeDescription(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <surcharge_type_description> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearSurchargeTypeDescription(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <surcharge_type_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSurchargeTypeDescription(){
      return $this->_get(10006);
    }
    
    /**
     * Set <surcharge_type_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setSurchargeTypeDescription(\dstore\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeId(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <surcharge_type_id> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearSurchargeTypeId(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <surcharge_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSurchargeTypeId(){
      return $this->_get(10007);
    }
    
    /**
     * Set <surcharge_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setSurchargeTypeId(\dstore\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <surcharge_type_category_id> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeCategoryId(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <surcharge_type_category_id> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearSurchargeTypeCategoryId(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <surcharge_type_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSurchargeTypeCategoryId(){
      return $this->_get(10008);
    }
    
    /**
     * Set <surcharge_type_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setSurchargeTypeCategoryId(\dstore\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <currency_id> has a value
     *
     * @return boolean
     */
    public function hasCurrencyId(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <currency_id> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearCurrencyId(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <currency_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCurrencyId(){
      return $this->_get(10009);
    }
    
    /**
     * Set <currency_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setCurrencyId(\dstore\values\integerValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <currency_symbol> has a value
     *
     * @return boolean
     */
    public function hasCurrencySymbol(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <currency_symbol> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearCurrencySymbol(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <currency_symbol> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCurrencySymbol(){
      return $this->_get(10010);
    }
    
    /**
     * Set <currency_symbol> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setCurrencySymbol(\dstore\values\stringValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <original_surcharge_value> has a value
     *
     * @return boolean
     */
    public function hasOriginalSurchargeValue(){
      return $this->_has(20001);
    }
    
    /**
     * Clear <original_surcharge_value> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearOriginalSurchargeValue(){
      return $this->_clear(20001);
    }
    
    /**
     * Get <original_surcharge_value> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getOriginalSurchargeValue(){
      return $this->_get(20001);
    }
    
    /**
     * Set <original_surcharge_value> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setOriginalSurchargeValue(\dstore\values\decimalValue $value){
      return $this->_set(20001, $value);
    }
    
    /**
     * Check if <orig_surch_val_unit_id> has a value
     *
     * @return boolean
     */
    public function hasOrigSurchValUnitId(){
      return $this->_has(20002);
    }
    
    /**
     * Clear <orig_surch_val_unit_id> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearOrigSurchValUnitId(){
      return $this->_clear(20002);
    }
    
    /**
     * Get <orig_surch_val_unit_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrigSurchValUnitId(){
      return $this->_get(20002);
    }
    
    /**
     * Set <orig_surch_val_unit_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setOrigSurchValUnitId(\dstore\values\integerValue $value){
      return $this->_set(20002, $value);
    }
    
    /**
     * Check if <orig_surch_val_unit_symbol> has a value
     *
     * @return boolean
     */
    public function hasOrigSurchValUnitSymbol(){
      return $this->_has(20003);
    }
    
    /**
     * Clear <orig_surch_val_unit_symbol> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearOrigSurchValUnitSymbol(){
      return $this->_clear(20003);
    }
    
    /**
     * Get <orig_surch_val_unit_symbol> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOrigSurchValUnitSymbol(){
      return $this->_get(20003);
    }
    
    /**
     * Set <orig_surch_val_unit_symbol> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setOrigSurchValUnitSymbol(\dstore\values\stringValue $value){
      return $this->_set(20003, $value);
    }
    
    /**
     * Check if <applied_on_net_sum> has a value
     *
     * @return boolean
     */
    public function hasAppliedOnNetSum(){
      return $this->_has(20004);
    }
    
    /**
     * Clear <applied_on_net_sum> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearAppliedOnNetSum(){
      return $this->_clear(20004);
    }
    
    /**
     * Get <applied_on_net_sum> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getAppliedOnNetSum(){
      return $this->_get(20004);
    }
    
    /**
     * Set <applied_on_net_sum> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setAppliedOnNetSum(\dstore\values\decimalValue $value){
      return $this->_set(20004, $value);
    }
    
    /**
     * Check if <applied_on_gross_sum> has a value
     *
     * @return boolean
     */
    public function hasAppliedOnGrossSum(){
      return $this->_has(20008);
    }
    
    /**
     * Clear <applied_on_gross_sum> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearAppliedOnGrossSum(){
      return $this->_clear(20008);
    }
    
    /**
     * Get <applied_on_gross_sum> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getAppliedOnGrossSum(){
      return $this->_get(20008);
    }
    
    /**
     * Set <applied_on_gross_sum> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setAppliedOnGrossSum(\dstore\values\decimalValue $value){
      return $this->_set(20008, $value);
    }
    
    /**
     * Check if <orig_surch_val_is_absolute> has a value
     *
     * @return boolean
     */
    public function hasOrigSurchValIsAbsolute(){
      return $this->_has(20011);
    }
    
    /**
     * Clear <orig_surch_val_is_absolute> value
     *
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function clearOrigSurchValIsAbsolute(){
      return $this->_clear(20011);
    }
    
    /**
     * Get <orig_surch_val_is_absolute> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrigSurchValIsAbsolute(){
      return $this->_get(20011);
    }
    
    /**
     * Set <orig_surch_val_is_absolute> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetOrderSurcharges_Pu\Response\Row
     */
    public function setOrigSurchValIsAbsolute(\dstore\values\integerValue $value){
      return $this->_set(20011, $value);
    }
  }
}

