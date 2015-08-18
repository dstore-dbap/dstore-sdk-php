<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetTabsRefInOtherTabs_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $table_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $used_in_search_item_lacks = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $used_in_rating_values = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $used_in_predefined_bill_content = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $table_name = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $primary_key_column_name = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $used_in_search_items = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $used_in_person_charac_value_refs = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $used_in_meta_information_types = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $used_in_rating_subjects = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $used_in_cash_acc_transactions = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetTabsRefInOtherTabs_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "table_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_search_item_lacks = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "used_in_search_item_lacks";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_rating_values = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "used_in_rating_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_predefined_bill_content = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "used_in_predefined_bill_content";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE table_name = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "table_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE primary_key_column_name = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "primary_key_column_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_search_items = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "used_in_search_items";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_person_charac_value_refs = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "used_in_person_charac_value_refs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_meta_information_types = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "used_in_meta_information_types";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_rating_subjects = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "used_in_rating_subjects";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE used_in_cash_acc_transactions = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "used_in_cash_acc_transactions";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
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
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
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
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <table_id> has a value
     *
     * @return boolean
     */
    public function hasTableId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <table_id> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearTableId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <table_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTableId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <table_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setTableId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <used_in_search_item_lacks> has a value
     *
     * @return boolean
     */
    public function hasUsedInSearchItemLacks(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <used_in_search_item_lacks> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearUsedInSearchItemLacks(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <used_in_search_item_lacks> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUsedInSearchItemLacks(){
      return $this->_get(10002);
    }
    
    /**
     * Set <used_in_search_item_lacks> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setUsedInSearchItemLacks(\dstore\engine\values\booleanValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <used_in_rating_values> has a value
     *
     * @return boolean
     */
    public function hasUsedInRatingValues(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <used_in_rating_values> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearUsedInRatingValues(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <used_in_rating_values> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUsedInRatingValues(){
      return $this->_get(10003);
    }
    
    /**
     * Set <used_in_rating_values> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setUsedInRatingValues(\dstore\engine\values\booleanValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <used_in_predefined_bill_content> has a value
     *
     * @return boolean
     */
    public function hasUsedInPredefinedBillContent(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <used_in_predefined_bill_content> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearUsedInPredefinedBillContent(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <used_in_predefined_bill_content> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUsedInPredefinedBillContent(){
      return $this->_get(10004);
    }
    
    /**
     * Set <used_in_predefined_bill_content> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setUsedInPredefinedBillContent(\dstore\engine\values\booleanValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <table_name> has a value
     *
     * @return boolean
     */
    public function hasTableName(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <table_name> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearTableName(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <table_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getTableName(){
      return $this->_get(10005);
    }
    
    /**
     * Set <table_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setTableName(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <primary_key_column_name> has a value
     *
     * @return boolean
     */
    public function hasPrimaryKeyColumnName(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <primary_key_column_name> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearPrimaryKeyColumnName(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <primary_key_column_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPrimaryKeyColumnName(){
      return $this->_get(10006);
    }
    
    /**
     * Set <primary_key_column_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setPrimaryKeyColumnName(\dstore\engine\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <used_in_search_items> has a value
     *
     * @return boolean
     */
    public function hasUsedInSearchItems(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <used_in_search_items> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearUsedInSearchItems(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <used_in_search_items> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUsedInSearchItems(){
      return $this->_get(10007);
    }
    
    /**
     * Set <used_in_search_items> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setUsedInSearchItems(\dstore\engine\values\booleanValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <used_in_person_charac_value_refs> has a value
     *
     * @return boolean
     */
    public function hasUsedInPersonCharacValueRefs(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <used_in_person_charac_value_refs> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearUsedInPersonCharacValueRefs(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <used_in_person_charac_value_refs> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUsedInPersonCharacValueRefs(){
      return $this->_get(10008);
    }
    
    /**
     * Set <used_in_person_charac_value_refs> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setUsedInPersonCharacValueRefs(\dstore\engine\values\booleanValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <used_in_meta_information_types> has a value
     *
     * @return boolean
     */
    public function hasUsedInMetaInformationTypes(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <used_in_meta_information_types> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearUsedInMetaInformationTypes(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <used_in_meta_information_types> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUsedInMetaInformationTypes(){
      return $this->_get(10009);
    }
    
    /**
     * Set <used_in_meta_information_types> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setUsedInMetaInformationTypes(\dstore\engine\values\booleanValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <used_in_rating_subjects> has a value
     *
     * @return boolean
     */
    public function hasUsedInRatingSubjects(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <used_in_rating_subjects> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearUsedInRatingSubjects(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <used_in_rating_subjects> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUsedInRatingSubjects(){
      return $this->_get(10010);
    }
    
    /**
     * Set <used_in_rating_subjects> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setUsedInRatingSubjects(\dstore\engine\values\booleanValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <used_in_cash_acc_transactions> has a value
     *
     * @return boolean
     */
    public function hasUsedInCashAccTransactions(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <used_in_cash_acc_transactions> value
     *
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function clearUsedInCashAccTransactions(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <used_in_cash_acc_transactions> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getUsedInCashAccTransactions(){
      return $this->_get(10011);
    }
    
    /**
     * Set <used_in_cash_acc_transactions> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetTabsRefInOtherTabs_Ad\Response\Row
     */
    public function setUsedInCashAccTransactions(\dstore\engine\values\booleanValue $value){
      return $this->_set(10011, $value);
    }
  }
}
