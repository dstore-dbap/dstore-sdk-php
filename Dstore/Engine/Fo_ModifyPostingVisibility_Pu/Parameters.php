<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_ModifyPostingVisibility_Pu.proto

namespace Dstore\Engine\Fo_ModifyPostingVisibility_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_ModifyPostingVisibility_Pu.Parameters</code>
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
     * <code>.dstore.values.IntegerValue posting_id = 4;</code>
     */
    private $posting_id = null;
    /**
     * <code>bool posting_id_null = 1004;</code>
     */
    private $posting_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue visible = 5;</code>
     */
    private $visible = null;
    /**
     * <code>bool visible_null = 1005;</code>
     */
    private $visible_null = false;
    /**
     * <code>.dstore.values.BooleanValue recursive = 6;</code>
     */
    private $recursive = null;
    /**
     * <code>bool recursive_null = 1006;</code>
     */
    private $recursive_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 7;</code>
     */
    private $separator_in_ident_vals = null;
    /**
     * <code>bool separator_in_ident_vals_null = 1007;</code>
     */
    private $separator_in_ident_vals_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoModifyPostingVisibilityPu::initOnce();
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
     * <code>.dstore.values.IntegerValue posting_id = 4;</code>
     */
    public function getPostingId()
    {
        return $this->posting_id;
    }

    /**
     * <code>.dstore.values.IntegerValue posting_id = 4;</code>
     */
    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->posting_id = $var;
    }

    /**
     * <code>bool posting_id_null = 1004;</code>
     */
    public function getPostingIdNull()
    {
        return $this->posting_id_null;
    }

    /**
     * <code>bool posting_id_null = 1004;</code>
     */
    public function setPostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue visible = 5;</code>
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * <code>.dstore.values.IntegerValue visible = 5;</code>
     */
    public function setVisible(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->visible = $var;
    }

    /**
     * <code>bool visible_null = 1005;</code>
     */
    public function getVisibleNull()
    {
        return $this->visible_null;
    }

    /**
     * <code>bool visible_null = 1005;</code>
     */
    public function setVisibleNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visible_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue recursive = 6;</code>
     */
    public function getRecursive()
    {
        return $this->recursive;
    }

    /**
     * <code>.dstore.values.BooleanValue recursive = 6;</code>
     */
    public function setRecursive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->recursive = $var;
    }

    /**
     * <code>bool recursive_null = 1006;</code>
     */
    public function getRecursiveNull()
    {
        return $this->recursive_null;
    }

    /**
     * <code>bool recursive_null = 1006;</code>
     */
    public function setRecursiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->recursive_null = $var;
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

