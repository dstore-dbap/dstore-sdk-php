<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCashAccTransactions_Ad.proto
//   Date: 2016-05-19 08:07:49

namespace dstore\engine\om_GetCashAccTransactions_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $transaction_type = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_id = null;
    
    /**  @var \dstore\values\timestampValue */
    public $transaction_date_and_time = null;
    
    /**  @var \dstore\values\decimalValue */
    public $transaction_value = null;
    
    /**  @var \dstore\values\stringValue */
    public $transaction_comment = null;
    
    /**  @var \dstore\values\integerValue */
    public $transaction_type_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $cash_account_type_id = null;
    
    /**  @var \dstore\values\timestampValue */
    public $suspended_until = null;
    
    /**  @var \dstore\values\integerValue */
    public $transaction_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCashAccTransactions_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE transaction_type = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "transaction_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE transaction_date_and_time = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "transaction_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE transaction_value = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "transaction_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE transaction_comment = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "transaction_comment";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE transaction_type_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "transaction_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE cash_account_type_id = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "cash_account_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE suspended_until = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "suspended_until";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE transaction_id = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "transaction_id";
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
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
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
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <transaction_type> has a value
     *
     * @return boolean
     */
    public function hasTransactionType(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <transaction_type> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function clearTransactionType(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <transaction_type> value
     *
     * @return \dstore\values\stringValue
     */
    public function getTransactionType(){
      return $this->_get(10001);
    }
    
    /**
     * Set <transaction_type> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function setTransactionType(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function clearPersonId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function setPersonId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <transaction_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasTransactionDateAndTime(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <transaction_date_and_time> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function clearTransactionDateAndTime(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <transaction_date_and_time> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getTransactionDateAndTime(){
      return $this->_get(10003);
    }
    
    /**
     * Set <transaction_date_and_time> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function setTransactionDateAndTime(\dstore\values\timestampValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <transaction_value> has a value
     *
     * @return boolean
     */
    public function hasTransactionValue(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <transaction_value> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function clearTransactionValue(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <transaction_value> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getTransactionValue(){
      return $this->_get(10004);
    }
    
    /**
     * Set <transaction_value> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function setTransactionValue(\dstore\values\decimalValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <transaction_comment> has a value
     *
     * @return boolean
     */
    public function hasTransactionComment(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <transaction_comment> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function clearTransactionComment(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <transaction_comment> value
     *
     * @return \dstore\values\stringValue
     */
    public function getTransactionComment(){
      return $this->_get(10005);
    }
    
    /**
     * Set <transaction_comment> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function setTransactionComment(\dstore\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <transaction_type_id> has a value
     *
     * @return boolean
     */
    public function hasTransactionTypeId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <transaction_type_id> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function clearTransactionTypeId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <transaction_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTransactionTypeId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <transaction_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function setTransactionTypeId(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <cash_account_type_id> has a value
     *
     * @return boolean
     */
    public function hasCashAccountTypeId(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <cash_account_type_id> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function clearCashAccountTypeId(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <cash_account_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCashAccountTypeId(){
      return $this->_get(10007);
    }
    
    /**
     * Set <cash_account_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function setCashAccountTypeId(\dstore\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <suspended_until> has a value
     *
     * @return boolean
     */
    public function hasSuspendedUntil(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <suspended_until> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function clearSuspendedUntil(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <suspended_until> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getSuspendedUntil(){
      return $this->_get(10008);
    }
    
    /**
     * Set <suspended_until> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function setSuspendedUntil(\dstore\values\timestampValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <transaction_id> has a value
     *
     * @return boolean
     */
    public function hasTransactionId(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <transaction_id> value
     *
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function clearTransactionId(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <transaction_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTransactionId(){
      return $this->_get(10009);
    }
    
    /**
     * Set <transaction_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCashAccTransactions_Ad\Response\Row
     */
    public function setTransactionId(\dstore\values\integerValue $value){
      return $this->_set(10009, $value);
    }
  }
}

