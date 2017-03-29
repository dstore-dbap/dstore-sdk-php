<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPredValsForCharacs_Pu.proto

namespace Dstore\Engine\Fo_GetPredValsForCharacs_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_GetPredValsForCharacs_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue person_identification_values = 1;</code>
     */
    private $person_identification_values = null;
    /**
     * <code>bool person_identification_values_null = 1001;</code>
     */
    private $person_identification_values_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 2;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1002;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    private $unique_id = null;
    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    private $unique_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue forum_id = 4;</code>
     */
    private $forum_id = null;
    /**
     * <code>bool forum_id_null = 1004;</code>
     */
    private $forum_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 5;</code>
     */
    private $posting_characteristic_id = null;
    /**
     * <code>bool posting_characteristic_id_null = 1005;</code>
     */
    private $posting_characteristic_id_null = false;
    /**
     * <code>.dstore.values.StringValue date_format = 6;</code>
     */
    private $date_format = null;
    /**
     * <code>bool date_format_null = 1006;</code>
     */
    private $date_format_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 7;</code>
     */
    private $separator_in_ident_vals = null;
    /**
     * <code>bool separator_in_ident_vals_null = 1007;</code>
     */
    private $separator_in_ident_vals_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoGetPredValsForCharacsPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 1;</code>
     */
    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 1;</code>
     */
    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->person_identification_values = $var;
    }

    /**
     * <code>bool person_identification_values_null = 1001;</code>
     */
    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    /**
     * <code>bool person_identification_values_null = 1001;</code>
     */
    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 2;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 2;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1002;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1002;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * <code>.dstore.values.StringValue unique_id = 3;</code>
     */
    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unique_id = $var;
    }

    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    /**
     * <code>bool unique_id_null = 1003;</code>
     */
    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue forum_id = 4;</code>
     */
    public function getForumId()
    {
        return $this->forum_id;
    }

    /**
     * <code>.dstore.values.IntegerValue forum_id = 4;</code>
     */
    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->forum_id = $var;
    }

    /**
     * <code>bool forum_id_null = 1004;</code>
     */
    public function getForumIdNull()
    {
        return $this->forum_id_null;
    }

    /**
     * <code>bool forum_id_null = 1004;</code>
     */
    public function setForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 5;</code>
     */
    public function getPostingCharacteristicId()
    {
        return $this->posting_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue posting_characteristic_id = 5;</code>
     */
    public function setPostingCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->posting_characteristic_id = $var;
    }

    /**
     * <code>bool posting_characteristic_id_null = 1005;</code>
     */
    public function getPostingCharacteristicIdNull()
    {
        return $this->posting_characteristic_id_null;
    }

    /**
     * <code>bool posting_characteristic_id_null = 1005;</code>
     */
    public function setPostingCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 6;</code>
     */
    public function getDateFormat()
    {
        return $this->date_format;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 6;</code>
     */
    public function setDateFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->date_format = $var;
    }

    /**
     * <code>bool date_format_null = 1006;</code>
     */
    public function getDateFormatNull()
    {
        return $this->date_format_null;
    }

    /**
     * <code>bool date_format_null = 1006;</code>
     */
    public function setDateFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_format_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 7;</code>
     */
    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 7;</code>
     */
    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1007;</code>
     */
    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1007;</code>
     */
    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
    }

}

