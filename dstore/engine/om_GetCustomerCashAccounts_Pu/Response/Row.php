<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCustomerCashAccounts_Pu.proto
//   Date: 2016-05-19 08:07:49

namespace dstore\engine\om_GetCustomerCashAccounts_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $account_status = null;
    
    /**  @var \dstore\values\stringValue */
    public $cash_account_type = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $cash_account_type_id = null;
    
    /**  @var \dstore\values\decimalValue */
    public $min_account_balance = null;
    
    /**  @var \dstore\values\integerValue */
    public $currency_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCustomerCashAccounts_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE account_status = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "account_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE cash_account_type = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "cash_account_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE cash_account_type_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "cash_account_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE min_account_balance = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "min_account_balance";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE currency_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "currency_id";
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
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
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
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <account_status> has a value
     *
     * @return boolean
     */
    public function hasAccountStatus(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <account_status> value
     *
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function clearAccountStatus(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <account_status> value
     *
     * @return \dstore\values\integerValue
     */
    public function getAccountStatus(){
      return $this->_get(10001);
    }
    
    /**
     * Set <account_status> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function setAccountStatus(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <cash_account_type> has a value
     *
     * @return boolean
     */
    public function hasCashAccountType(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <cash_account_type> value
     *
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function clearCashAccountType(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <cash_account_type> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCashAccountType(){
      return $this->_get(10002);
    }
    
    /**
     * Set <cash_account_type> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function setCashAccountType(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function clearPersonId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function setPersonId(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <cash_account_type_id> has a value
     *
     * @return boolean
     */
    public function hasCashAccountTypeId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <cash_account_type_id> value
     *
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function clearCashAccountTypeId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <cash_account_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCashAccountTypeId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <cash_account_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function setCashAccountTypeId(\dstore\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <min_account_balance> has a value
     *
     * @return boolean
     */
    public function hasMinAccountBalance(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <min_account_balance> value
     *
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function clearMinAccountBalance(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <min_account_balance> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getMinAccountBalance(){
      return $this->_get(10005);
    }
    
    /**
     * Set <min_account_balance> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function setMinAccountBalance(\dstore\values\decimalValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <currency_id> has a value
     *
     * @return boolean
     */
    public function hasCurrencyId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <currency_id> value
     *
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function clearCurrencyId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <currency_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCurrencyId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <currency_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCustomerCashAccounts_Pu\Response\Row
     */
    public function setCurrencyId(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
  }
}

