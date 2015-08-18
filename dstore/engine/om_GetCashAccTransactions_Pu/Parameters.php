<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCashAccTransactions_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetCashAccTransactions_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $cash_account_type_id = null;
    
    /**  @var boolean */
    public $cash_account_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $separator_in_ident_vals = null;
    
    /**  @var boolean */
    public $separator_in_ident_vals_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $only_transactions_since = null;
    
    /**  @var boolean */
    public $only_transactions_since_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCashAccTransactions_Pu.Parameters');

      // OPTIONAL MESSAGE person_identification_values = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unique_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE cash_account_type_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "cash_account_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL cash_account_type_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "cash_account_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_ident_vals = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "separator_in_ident_vals";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_ident_vals_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "separator_in_ident_vals_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_transactions_since = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "only_transactions_since";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_transactions_since_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "only_transactions_since_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(3);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setUniqueId(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <cash_account_type_id> has a value
     *
     * @return boolean
     */
    public function hasCashAccountTypeId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <cash_account_type_id> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearCashAccountTypeId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <cash_account_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCashAccountTypeId(){
      return $this->_get(4);
    }
    
    /**
     * Set <cash_account_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setCashAccountTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <cash_account_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasCashAccountTypeIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <cash_account_type_id_null> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearCashAccountTypeIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <cash_account_type_id_null> value
     *
     * @return boolean
     */
    public function getCashAccountTypeIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <cash_account_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setCashAccountTypeIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentVals(){
      return $this->_has(5);
    }
    
    /**
     * Clear <separator_in_ident_vals> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearSeparatorInIdentVals(){
      return $this->_clear(5);
    }
    
    /**
     * Get <separator_in_ident_vals> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSeparatorInIdentVals(){
      return $this->_get(5);
    }
    
    /**
     * Set <separator_in_ident_vals> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setSeparatorInIdentVals(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentValsNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <separator_in_ident_vals_null> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearSeparatorInIdentValsNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <separator_in_ident_vals_null> value
     *
     * @return boolean
     */
    public function getSeparatorInIdentValsNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <separator_in_ident_vals_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setSeparatorInIdentValsNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <only_transactions_since> has a value
     *
     * @return boolean
     */
    public function hasOnlyTransactionsSince(){
      return $this->_has(6);
    }
    
    /**
     * Clear <only_transactions_since> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearOnlyTransactionsSince(){
      return $this->_clear(6);
    }
    
    /**
     * Get <only_transactions_since> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getOnlyTransactionsSince(){
      return $this->_get(6);
    }
    
    /**
     * Set <only_transactions_since> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setOnlyTransactionsSince(\dstore\engine\values\timestampValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <only_transactions_since_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyTransactionsSinceNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <only_transactions_since_null> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function clearOnlyTransactionsSinceNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <only_transactions_since_null> value
     *
     * @return boolean
     */
    public function getOnlyTransactionsSinceNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <only_transactions_since_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCashAccTransactions_Pu\Parameters
     */
    public function setOnlyTransactionsSinceNull( $value){
      return $this->_set(1006, $value);
    }
  }
}
