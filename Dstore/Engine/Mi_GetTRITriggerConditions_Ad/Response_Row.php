<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTRITriggerConditions_Ad.proto

namespace Dstore\Engine\Mi_GetTRITriggerConditions_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_GetTRITriggerConditions_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Wie "StrToCompare" und "Condition" verglichen werden sollen
     * </pre>
     *
     * <code>.dstore.values.StringValue operator = 10001;</code>
     */
    private $operator = null;
    /**
     * <pre>
     * "TRI-Ausdruck" mit dem "StrToCompare" anhand des in "Operator" angegebenen Operators verglichen wird
     * </pre>
     *
     * <code>.dstore.values.StringValue condition = 10002;</code>
     */
    private $condition = null;
    /**
     * <pre>
     * Gibt an, ob der Vergleich von "StrToCompare" und "Condition" wahr sein muß ("0") oder nicht ("1"), damit die Bedingung "ConditionNumber" als erfüllt gilt
     * </pre>
     *
     * <code>.dstore.values.BooleanValue negate_condition = 10003;</code>
     */
    private $negate_condition = null;
    /**
     * <pre>
     * Soll die Bedingung für ALLE IDs, die vom Trigger betroffen sind, geprüft werden ("1") oder sollen die IDs durchlaufen werden, bis bei einer die Bedingung erfüllt ist ("0").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue check_each_affected_id = 10004;</code>
     */
    private $check_each_affected_id = null;
    /**
     * <pre>
     * X-te Bedingung (bei "1" angefangen, maximal "255"). Bedingungen zur gleichen "WorkStepNo" werden mit "AND" verknüpft. Die Nummer bestimmt die Reihenfolge, in der die Bedingung innerhalb aller Bedingungen zum Arbeitsschritt ausgewertet wird.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_number = 10005;</code>
     */
    private $condition_number = null;
    /**
     * <pre>
     * "TRI-Ausdruck", der anhand des in "Operator" angegebenen Operators mit "Condition" verglichen wird
     * </pre>
     *
     * <code>.dstore.values.StringValue str_to_compare = 10006;</code>
     */
    private $str_to_compare = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiGetTRITriggerConditionsAd::initOnce();
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
     * Wie "StrToCompare" und "Condition" verglichen werden sollen
     * </pre>
     *
     * <code>.dstore.values.StringValue operator = 10001;</code>
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * <pre>
     * Wie "StrToCompare" und "Condition" verglichen werden sollen
     * </pre>
     *
     * <code>.dstore.values.StringValue operator = 10001;</code>
     */
    public function setOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->operator = $var;
    }

    /**
     * <pre>
     * "TRI-Ausdruck" mit dem "StrToCompare" anhand des in "Operator" angegebenen Operators verglichen wird
     * </pre>
     *
     * <code>.dstore.values.StringValue condition = 10002;</code>
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * <pre>
     * "TRI-Ausdruck" mit dem "StrToCompare" anhand des in "Operator" angegebenen Operators verglichen wird
     * </pre>
     *
     * <code>.dstore.values.StringValue condition = 10002;</code>
     */
    public function setCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition = $var;
    }

    /**
     * <pre>
     * Gibt an, ob der Vergleich von "StrToCompare" und "Condition" wahr sein muß ("0") oder nicht ("1"), damit die Bedingung "ConditionNumber" als erfüllt gilt
     * </pre>
     *
     * <code>.dstore.values.BooleanValue negate_condition = 10003;</code>
     */
    public function getNegateCondition()
    {
        return $this->negate_condition;
    }

    /**
     * <pre>
     * Gibt an, ob der Vergleich von "StrToCompare" und "Condition" wahr sein muß ("0") oder nicht ("1"), damit die Bedingung "ConditionNumber" als erfüllt gilt
     * </pre>
     *
     * <code>.dstore.values.BooleanValue negate_condition = 10003;</code>
     */
    public function setNegateCondition(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->negate_condition = $var;
    }

    /**
     * <pre>
     * Soll die Bedingung für ALLE IDs, die vom Trigger betroffen sind, geprüft werden ("1") oder sollen die IDs durchlaufen werden, bis bei einer die Bedingung erfüllt ist ("0").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue check_each_affected_id = 10004;</code>
     */
    public function getCheckEachAffectedId()
    {
        return $this->check_each_affected_id;
    }

    /**
     * <pre>
     * Soll die Bedingung für ALLE IDs, die vom Trigger betroffen sind, geprüft werden ("1") oder sollen die IDs durchlaufen werden, bis bei einer die Bedingung erfüllt ist ("0").
     * </pre>
     *
     * <code>.dstore.values.BooleanValue check_each_affected_id = 10004;</code>
     */
    public function setCheckEachAffectedId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->check_each_affected_id = $var;
    }

    /**
     * <pre>
     * X-te Bedingung (bei "1" angefangen, maximal "255"). Bedingungen zur gleichen "WorkStepNo" werden mit "AND" verknüpft. Die Nummer bestimmt die Reihenfolge, in der die Bedingung innerhalb aller Bedingungen zum Arbeitsschritt ausgewertet wird.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_number = 10005;</code>
     */
    public function getConditionNumber()
    {
        return $this->condition_number;
    }

    /**
     * <pre>
     * X-te Bedingung (bei "1" angefangen, maximal "255"). Bedingungen zur gleichen "WorkStepNo" werden mit "AND" verknüpft. Die Nummer bestimmt die Reihenfolge, in der die Bedingung innerhalb aller Bedingungen zum Arbeitsschritt ausgewertet wird.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue condition_number = 10005;</code>
     */
    public function setConditionNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->condition_number = $var;
    }

    /**
     * <pre>
     * "TRI-Ausdruck", der anhand des in "Operator" angegebenen Operators mit "Condition" verglichen wird
     * </pre>
     *
     * <code>.dstore.values.StringValue str_to_compare = 10006;</code>
     */
    public function getStrToCompare()
    {
        return $this->str_to_compare;
    }

    /**
     * <pre>
     * "TRI-Ausdruck", der anhand des in "Operator" angegebenen Operators mit "Condition" verglichen wird
     * </pre>
     *
     * <code>.dstore.values.StringValue str_to_compare = 10006;</code>
     */
    public function setStrToCompare(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->str_to_compare = $var;
    }

}

