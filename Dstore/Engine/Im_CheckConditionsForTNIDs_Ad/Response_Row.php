<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_CheckConditionsForTNIDs_Ad.proto

namespace Dstore\Engine\Im_CheckConditionsForTNIDs_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_CheckConditionsForTNIDs_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines der in "&#64;ItemConditionIDs" angegebenen Bedingungen. Anmerkung : Es wird garantiert für JEDE in "&#64;ItemConditionIDs" angegebene Bedingung ein Datensatz geliefert !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_id = 10001;</code>
     */
    private $item_condition_id = null;
    /**
     * <pre>
     * Die IDs aus "&#64;TreeNodeIDList" (durch "," getrennt), die "ItemConditionID" erfüllen. "NULL" bedeutet, daß KEINE der "TreeNodeID"s die Bedingung erfüllt.
     * </pre>
     *
     * <code>.dstore.values.StringValue t_n_ids_fulfilling_condition = 10002;</code>
     */
    private $t_n_ids_fulfilling_condition = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImCheckConditionsForTNIDsAd::initOnce();
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
     * ID eines der in "&#64;ItemConditionIDs" angegebenen Bedingungen. Anmerkung : Es wird garantiert für JEDE in "&#64;ItemConditionIDs" angegebene Bedingung ein Datensatz geliefert !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_id = 10001;</code>
     */
    public function getItemConditionId()
    {
        return $this->item_condition_id;
    }

    /**
     * <pre>
     * ID eines der in "&#64;ItemConditionIDs" angegebenen Bedingungen. Anmerkung : Es wird garantiert für JEDE in "&#64;ItemConditionIDs" angegebene Bedingung ein Datensatz geliefert !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_id = 10001;</code>
     */
    public function setItemConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_condition_id = $var;
    }

    /**
     * <pre>
     * Die IDs aus "&#64;TreeNodeIDList" (durch "," getrennt), die "ItemConditionID" erfüllen. "NULL" bedeutet, daß KEINE der "TreeNodeID"s die Bedingung erfüllt.
     * </pre>
     *
     * <code>.dstore.values.StringValue t_n_ids_fulfilling_condition = 10002;</code>
     */
    public function getTNIdsFulfillingCondition()
    {
        return $this->t_n_ids_fulfilling_condition;
    }

    /**
     * <pre>
     * Die IDs aus "&#64;TreeNodeIDList" (durch "," getrennt), die "ItemConditionID" erfüllen. "NULL" bedeutet, daß KEINE der "TreeNodeID"s die Bedingung erfüllt.
     * </pre>
     *
     * <code>.dstore.values.StringValue t_n_ids_fulfilling_condition = 10002;</code>
     */
    public function setTNIdsFulfillingCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->t_n_ids_fulfilling_condition = $var;
    }

}

