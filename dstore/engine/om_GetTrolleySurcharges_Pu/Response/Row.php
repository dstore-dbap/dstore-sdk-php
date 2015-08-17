<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetTrolleySurcharges_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetTrolleySurcharges_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $surcharge_generated_by_camp_ids = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $applied_surcharge_value = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $absolute_net_surcharge = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $surcharge_applied_on_gross_sum = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $absolute_gross_surcharge = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $position_no = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $surcharge_type_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $surcharge_type_id = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $surcharge_applied_on_net_sum = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $taxes_multiplier = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetTrolleySurcharges_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_generated_by_camp_ids = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "surcharge_generated_by_camp_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE applied_surcharge_value = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "applied_surcharge_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE absolute_net_surcharge = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "absolute_net_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_applied_on_gross_sum = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "surcharge_applied_on_gross_sum";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE absolute_gross_surcharge = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "absolute_gross_surcharge";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE position_no = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "position_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_description = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "surcharge_type_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_id = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_applied_on_net_sum = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "surcharge_applied_on_net_sum";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE taxes_multiplier = 20002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20002;
      $f->name      = "taxes_multiplier";
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
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
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
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <surcharge_generated_by_camp_ids> has a value
     *
     * @return boolean
     */
    public function hasSurchargeGeneratedByCampIds(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <surcharge_generated_by_camp_ids> value
     *
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function clearSurchargeGeneratedByCampIds(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <surcharge_generated_by_camp_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSurchargeGeneratedByCampIds(){
      return $this->_get(10001);
    }
    
    /**
     * Set <surcharge_generated_by_camp_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setSurchargeGeneratedByCampIds(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <applied_surcharge_value> has a value
     *
     * @return boolean
     */
    public function hasAppliedSurchargeValue(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <applied_surcharge_value> value
     *
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function clearAppliedSurchargeValue(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <applied_surcharge_value> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getAppliedSurchargeValue(){
      return $this->_get(10002);
    }
    
    /**
     * Set <applied_surcharge_value> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setAppliedSurchargeValue(\dstore\engine\values\decimalValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <absolute_net_surcharge> has a value
     *
     * @return boolean
     */
    public function hasAbsoluteNetSurcharge(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <absolute_net_surcharge> value
     *
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function clearAbsoluteNetSurcharge(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <absolute_net_surcharge> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getAbsoluteNetSurcharge(){
      return $this->_get(10003);
    }
    
    /**
     * Set <absolute_net_surcharge> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setAbsoluteNetSurcharge(\dstore\engine\values\decimalValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <surcharge_applied_on_gross_sum> has a value
     *
     * @return boolean
     */
    public function hasSurchargeAppliedOnGrossSum(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <surcharge_applied_on_gross_sum> value
     *
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function clearSurchargeAppliedOnGrossSum(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <surcharge_applied_on_gross_sum> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getSurchargeAppliedOnGrossSum(){
      return $this->_get(10004);
    }
    
    /**
     * Set <surcharge_applied_on_gross_sum> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setSurchargeAppliedOnGrossSum(\dstore\engine\values\decimalValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <absolute_gross_surcharge> has a value
     *
     * @return boolean
     */
    public function hasAbsoluteGrossSurcharge(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <absolute_gross_surcharge> value
     *
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function clearAbsoluteGrossSurcharge(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <absolute_gross_surcharge> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getAbsoluteGrossSurcharge(){
      return $this->_get(10005);
    }
    
    /**
     * Set <absolute_gross_surcharge> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setAbsoluteGrossSurcharge(\dstore\engine\values\decimalValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <position_no> has a value
     *
     * @return boolean
     */
    public function hasPositionNo(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <position_no> value
     *
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function clearPositionNo(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <position_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPositionNo(){
      return $this->_get(10006);
    }
    
    /**
     * Set <position_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setPositionNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <surcharge_type_description> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeDescription(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <surcharge_type_description> value
     *
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function clearSurchargeTypeDescription(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <surcharge_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSurchargeTypeDescription(){
      return $this->_get(10007);
    }
    
    /**
     * Set <surcharge_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setSurchargeTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeId(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <surcharge_type_id> value
     *
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function clearSurchargeTypeId(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <surcharge_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSurchargeTypeId(){
      return $this->_get(10008);
    }
    
    /**
     * Set <surcharge_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setSurchargeTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <surcharge_applied_on_net_sum> has a value
     *
     * @return boolean
     */
    public function hasSurchargeAppliedOnNetSum(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <surcharge_applied_on_net_sum> value
     *
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function clearSurchargeAppliedOnNetSum(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <surcharge_applied_on_net_sum> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getSurchargeAppliedOnNetSum(){
      return $this->_get(10009);
    }
    
    /**
     * Set <surcharge_applied_on_net_sum> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setSurchargeAppliedOnNetSum(\dstore\engine\values\decimalValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <taxes_multiplier> has a value
     *
     * @return boolean
     */
    public function hasTaxesMultiplier(){
      return $this->_has(20002);
    }
    
    /**
     * Clear <taxes_multiplier> value
     *
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function clearTaxesMultiplier(){
      return $this->_clear(20002);
    }
    
    /**
     * Get <taxes_multiplier> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getTaxesMultiplier(){
      return $this->_get(20002);
    }
    
    /**
     * Set <taxes_multiplier> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_GetTrolleySurcharges_Pu\Response\Row
     */
    public function setTaxesMultiplier(\dstore\engine\values\decimalValue $value){
      return $this->_set(20002, $value);
    }
  }
}

