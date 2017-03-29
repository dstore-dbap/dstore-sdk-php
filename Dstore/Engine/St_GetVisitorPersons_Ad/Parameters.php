<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetVisitorPersons_Ad.proto

namespace Dstore\Engine\St_GetVisitorPersons_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.st_GetVisitorPersons_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue visitor_id = 1;</code>
     */
    private $visitor_id = null;
    /**
     * <code>bool visitor_id_null = 1001;</code>
     */
    private $visitor_id_null = false;
    /**
     * <code>.dstore.values.TimestampValue from_date = 2;</code>
     */
    private $from_date = null;
    /**
     * <code>bool from_date_null = 1002;</code>
     */
    private $from_date_null = false;
    /**
     * <code>.dstore.values.TimestampValue to_date = 3;</code>
     */
    private $to_date = null;
    /**
     * <code>bool to_date_null = 1003;</code>
     */
    private $to_date_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_id = 4;</code>
     */
    private $person_id = null;
    /**
     * <code>bool person_id_null = 1004;</code>
     */
    private $person_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue visitor_or_person_ids_in_one_id = 5;</code>
     */
    private $visitor_or_person_ids_in_one_id = null;
    /**
     * <code>bool visitor_or_person_ids_in_one_id_null = 1005;</code>
     */
    private $visitor_or_person_ids_in_one_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue output_into_one_id = 6;</code>
     */
    private $output_into_one_id = null;
    /**
     * <code>bool output_into_one_id_null = 1006;</code>
     */
    private $output_into_one_id_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\StGetVisitorPersonsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue visitor_id = 1;</code>
     */
    public function getVisitorId()
    {
        return $this->visitor_id;
    }

    /**
     * <code>.dstore.values.IntegerValue visitor_id = 1;</code>
     */
    public function setVisitorId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->visitor_id = $var;
    }

    /**
     * <code>bool visitor_id_null = 1001;</code>
     */
    public function getVisitorIdNull()
    {
        return $this->visitor_id_null;
    }

    /**
     * <code>bool visitor_id_null = 1001;</code>
     */
    public function setVisitorIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visitor_id_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 2;</code>
     */
    public function getFromDate()
    {
        return $this->from_date;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 2;</code>
     */
    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_date = $var;
    }

    /**
     * <code>bool from_date_null = 1002;</code>
     */
    public function getFromDateNull()
    {
        return $this->from_date_null;
    }

    /**
     * <code>bool from_date_null = 1002;</code>
     */
    public function setFromDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 3;</code>
     */
    public function getToDate()
    {
        return $this->to_date;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 3;</code>
     */
    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_date = $var;
    }

    /**
     * <code>bool to_date_null = 1003;</code>
     */
    public function getToDateNull()
    {
        return $this->to_date_null;
    }

    /**
     * <code>bool to_date_null = 1003;</code>
     */
    public function setToDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 4;</code>
     */
    public function getPersonId()
    {
        return $this->person_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_id = 4;</code>
     */
    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_id = $var;
    }

    /**
     * <code>bool person_id_null = 1004;</code>
     */
    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    /**
     * <code>bool person_id_null = 1004;</code>
     */
    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue visitor_or_person_ids_in_one_id = 5;</code>
     */
    public function getVisitorOrPersonIdsInOneId()
    {
        return $this->visitor_or_person_ids_in_one_id;
    }

    /**
     * <code>.dstore.values.IntegerValue visitor_or_person_ids_in_one_id = 5;</code>
     */
    public function setVisitorOrPersonIdsInOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->visitor_or_person_ids_in_one_id = $var;
    }

    /**
     * <code>bool visitor_or_person_ids_in_one_id_null = 1005;</code>
     */
    public function getVisitorOrPersonIdsInOneIdNull()
    {
        return $this->visitor_or_person_ids_in_one_id_null;
    }

    /**
     * <code>bool visitor_or_person_ids_in_one_id_null = 1005;</code>
     */
    public function setVisitorOrPersonIdsInOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visitor_or_person_ids_in_one_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue output_into_one_id = 6;</code>
     */
    public function getOutputIntoOneId()
    {
        return $this->output_into_one_id;
    }

    /**
     * <code>.dstore.values.BooleanValue output_into_one_id = 6;</code>
     */
    public function setOutputIntoOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->output_into_one_id = $var;
    }

    /**
     * <code>bool output_into_one_id_null = 1006;</code>
     */
    public function getOutputIntoOneIdNull()
    {
        return $this->output_into_one_id_null;
    }

    /**
     * <code>bool output_into_one_id_null = 1006;</code>
     */
    public function setOutputIntoOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_into_one_id_null = $var;
    }

}

