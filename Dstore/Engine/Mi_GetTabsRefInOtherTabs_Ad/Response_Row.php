<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTabsRefInOtherTabs_Ad.proto

namespace Dstore\Engine\Mi_GetTabsRefInOtherTabs_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetTabsRefInOtherTabs_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID der Tabelle "TableName"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_id = 10001;</code>
     */
    private $table_id = null;
    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "SearchItemLacks" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_search_item_lacks = 10002;</code>
     */
    private $used_in_search_item_lacks = null;
    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "RatingValues" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_rating_values = 10003;</code>
     */
    private $used_in_rating_values = null;
    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "PredefinedBillContent" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_predefined_bill_content = 10004;</code>
     */
    private $used_in_predefined_bill_content = null;
    /**
     * <pre>
     * Name der (dStore-)Tabelle
     * </pre>
     *
     * <code>.dstore.values.StringValue table_name = 10005;</code>
     */
    private $table_name = null;
    /**
     * <pre>
     * Spaltenname(n) aus denen der Primärschlüssel der Tabelle besteht
     * </pre>
     *
     * <code>.dstore.values.StringValue primary_key_column_name = 10006;</code>
     */
    private $primary_key_column_name = null;
    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "SearchItems" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_search_items = 10007;</code>
     */
    private $used_in_search_items = null;
    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "PersonCharacValueReferences" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_person_charac_value_refs = 10008;</code>
     */
    private $used_in_person_charac_value_refs = null;
    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "MetaInformationTypes" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_meta_information_types = 10009;</code>
     */
    private $used_in_meta_information_types = null;
    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "RatingSubjects" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_rating_subjects = 10010;</code>
     */
    private $used_in_rating_subjects = null;
    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "CashAccountTransactions" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_cash_acc_transactions = 10011;</code>
     */
    private $used_in_cash_acc_transactions = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetTabsRefInOtherTabsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function getRowId()
    {
        return $this->row_id;
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    /**
     * <pre>
     * ID der Tabelle "TableName"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_id = 10001;</code>
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * <pre>
     * ID der Tabelle "TableName"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue table_id = 10001;</code>
     */
    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->table_id = $var;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "SearchItemLacks" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_search_item_lacks = 10002;</code>
     */
    public function getUsedInSearchItemLacks()
    {
        return $this->used_in_search_item_lacks;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "SearchItemLacks" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_search_item_lacks = 10002;</code>
     */
    public function setUsedInSearchItemLacks(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->used_in_search_item_lacks = $var;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "RatingValues" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_rating_values = 10003;</code>
     */
    public function getUsedInRatingValues()
    {
        return $this->used_in_rating_values;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "RatingValues" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_rating_values = 10003;</code>
     */
    public function setUsedInRatingValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->used_in_rating_values = $var;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "PredefinedBillContent" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_predefined_bill_content = 10004;</code>
     */
    public function getUsedInPredefinedBillContent()
    {
        return $this->used_in_predefined_bill_content;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "PredefinedBillContent" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_predefined_bill_content = 10004;</code>
     */
    public function setUsedInPredefinedBillContent(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->used_in_predefined_bill_content = $var;
    }

    /**
     * <pre>
     * Name der (dStore-)Tabelle
     * </pre>
     *
     * <code>.dstore.values.StringValue table_name = 10005;</code>
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * <pre>
     * Name der (dStore-)Tabelle
     * </pre>
     *
     * <code>.dstore.values.StringValue table_name = 10005;</code>
     */
    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->table_name = $var;
    }

    /**
     * <pre>
     * Spaltenname(n) aus denen der Primärschlüssel der Tabelle besteht
     * </pre>
     *
     * <code>.dstore.values.StringValue primary_key_column_name = 10006;</code>
     */
    public function getPrimaryKeyColumnName()
    {
        return $this->primary_key_column_name;
    }

    /**
     * <pre>
     * Spaltenname(n) aus denen der Primärschlüssel der Tabelle besteht
     * </pre>
     *
     * <code>.dstore.values.StringValue primary_key_column_name = 10006;</code>
     */
    public function setPrimaryKeyColumnName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->primary_key_column_name = $var;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "SearchItems" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_search_items = 10007;</code>
     */
    public function getUsedInSearchItems()
    {
        return $this->used_in_search_items;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "SearchItems" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_search_items = 10007;</code>
     */
    public function setUsedInSearchItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->used_in_search_items = $var;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "PersonCharacValueReferences" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_person_charac_value_refs = 10008;</code>
     */
    public function getUsedInPersonCharacValueRefs()
    {
        return $this->used_in_person_charac_value_refs;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "PersonCharacValueReferences" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_person_charac_value_refs = 10008;</code>
     */
    public function setUsedInPersonCharacValueRefs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->used_in_person_charac_value_refs = $var;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "MetaInformationTypes" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_meta_information_types = 10009;</code>
     */
    public function getUsedInMetaInformationTypes()
    {
        return $this->used_in_meta_information_types;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "MetaInformationTypes" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_meta_information_types = 10009;</code>
     */
    public function setUsedInMetaInformationTypes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->used_in_meta_information_types = $var;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "RatingSubjects" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_rating_subjects = 10010;</code>
     */
    public function getUsedInRatingSubjects()
    {
        return $this->used_in_rating_subjects;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "RatingSubjects" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_rating_subjects = 10010;</code>
     */
    public function setUsedInRatingSubjects(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->used_in_rating_subjects = $var;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "CashAccountTransactions" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_cash_acc_transactions = 10011;</code>
     */
    public function getUsedInCashAccTransactions()
    {
        return $this->used_in_cash_acc_transactions;
    }

    /**
     * <pre>
     * "1" falls die "TableID" in der Spalte "TableID" von "CashAccountTransactions" referenziert werden kann
     * </pre>
     *
     * <code>.dstore.values.BooleanValue used_in_cash_acc_transactions = 10011;</code>
     */
    public function setUsedInCashAccTransactions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->used_in_cash_acc_transactions = $var;
    }

}

