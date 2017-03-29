<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_CheckForumAccess_Pu.proto

namespace Dstore\Engine\Fo_CheckForumAccess_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_CheckForumAccess_Pu.Parameters</code>
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
     * <code>.dstore.values.IntegerValue access_level = 4;</code>
     */
    private $access_level = null;
    /**
     * <code>bool access_level_null = 1004;</code>
     */
    private $access_level_null = false;
    /**
     * <code>.dstore.values.IntegerValue forum_id = 5;</code>
     */
    private $forum_id = null;
    /**
     * <code>bool forum_id_null = 1005;</code>
     */
    private $forum_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue check_forum_ids_in_one_id = 6;</code>
     */
    private $check_forum_ids_in_one_id = null;
    /**
     * <code>bool check_forum_ids_in_one_id_null = 1006;</code>
     */
    private $check_forum_ids_in_one_id_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 7;</code>
     */
    private $separator_in_ident_vals = null;
    /**
     * <code>bool separator_in_ident_vals_null = 1007;</code>
     */
    private $separator_in_ident_vals_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoCheckForumAccessPu::initOnce();
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
     * <code>.dstore.values.IntegerValue access_level = 4;</code>
     */
    public function getAccessLevel()
    {
        return $this->access_level;
    }

    /**
     * <code>.dstore.values.IntegerValue access_level = 4;</code>
     */
    public function setAccessLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->access_level = $var;
    }

    /**
     * <code>bool access_level_null = 1004;</code>
     */
    public function getAccessLevelNull()
    {
        return $this->access_level_null;
    }

    /**
     * <code>bool access_level_null = 1004;</code>
     */
    public function setAccessLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->access_level_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue forum_id = 5;</code>
     */
    public function getForumId()
    {
        return $this->forum_id;
    }

    /**
     * <code>.dstore.values.IntegerValue forum_id = 5;</code>
     */
    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->forum_id = $var;
    }

    /**
     * <code>bool forum_id_null = 1005;</code>
     */
    public function getForumIdNull()
    {
        return $this->forum_id_null;
    }

    /**
     * <code>bool forum_id_null = 1005;</code>
     */
    public function setForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue check_forum_ids_in_one_id = 6;</code>
     */
    public function getCheckForumIdsInOneId()
    {
        return $this->check_forum_ids_in_one_id;
    }

    /**
     * <code>.dstore.values.BooleanValue check_forum_ids_in_one_id = 6;</code>
     */
    public function setCheckForumIdsInOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->check_forum_ids_in_one_id = $var;
    }

    /**
     * <code>bool check_forum_ids_in_one_id_null = 1006;</code>
     */
    public function getCheckForumIdsInOneIdNull()
    {
        return $this->check_forum_ids_in_one_id_null;
    }

    /**
     * <code>bool check_forum_ids_in_one_id_null = 1006;</code>
     */
    public function setCheckForumIdsInOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_forum_ids_in_one_id_null = $var;
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

