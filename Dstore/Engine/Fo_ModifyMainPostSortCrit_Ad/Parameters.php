<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_ModifyMainPostSortCrit_Ad.proto

namespace Dstore\Engine\Fo_ModifyMainPostSortCrit_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_ModifyMainPostSortCrit_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue forum_id = 1;</code>
     */
    private $forum_id = null;
    /**
     * <code>bool forum_id_null = 1001;</code>
     */
    private $forum_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue sorting_criteria_no = 2;</code>
     */
    private $sorting_criteria_no = null;
    /**
     * <code>bool sorting_criteria_no_null = 1002;</code>
     */
    private $sorting_criteria_no_null = false;
    /**
     * <code>.dstore.values.IntegerValue sorting_criteriafirst = 3;</code>
     */
    private $sorting_criteriafirst = null;
    /**
     * <code>bool sorting_criteriafirst_null = 1003;</code>
     */
    private $sorting_criteriafirst_null = false;
    /**
     * <code>.dstore.values.IntegerValue sorting_optionsfirst = 4;</code>
     */
    private $sorting_optionsfirst = null;
    /**
     * <code>bool sorting_optionsfirst_null = 1004;</code>
     */
    private $sorting_optionsfirst_null = false;
    /**
     * <code>.dstore.values.IntegerValue sorting_criteriasecond = 5;</code>
     */
    private $sorting_criteriasecond = null;
    /**
     * <code>bool sorting_criteriasecond_null = 1005;</code>
     */
    private $sorting_criteriasecond_null = false;
    /**
     * <code>.dstore.values.IntegerValue sorting_optionssecond = 6;</code>
     */
    private $sorting_optionssecond = null;
    /**
     * <code>bool sorting_optionssecond_null = 1006;</code>
     */
    private $sorting_optionssecond_null = false;
    /**
     * <code>.dstore.values.IntegerValue sorting_criteriathird = 7;</code>
     */
    private $sorting_criteriathird = null;
    /**
     * <code>bool sorting_criteriathird_null = 1007;</code>
     */
    private $sorting_criteriathird_null = false;
    /**
     * <code>.dstore.values.IntegerValue sorting_optionsthird = 8;</code>
     */
    private $sorting_optionsthird = null;
    /**
     * <code>bool sorting_optionsthird_null = 1008;</code>
     */
    private $sorting_optionsthird_null = false;
    /**
     * <code>.dstore.values.BooleanValue activate_criteria = 9;</code>
     */
    private $activate_criteria = null;
    /**
     * <code>bool activate_criteria_null = 1009;</code>
     */
    private $activate_criteria_null = false;
    /**
     * <code>.dstore.values.BooleanValue delete_criteria = 10;</code>
     */
    private $delete_criteria = null;
    /**
     * <code>bool delete_criteria_null = 1010;</code>
     */
    private $delete_criteria_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoModifyMainPostSortCritAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue forum_id = 1;</code>
     */
    public function getForumId()
    {
        return $this->forum_id;
    }

    /**
     * <code>.dstore.values.IntegerValue forum_id = 1;</code>
     */
    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->forum_id = $var;
    }

    /**
     * <code>bool forum_id_null = 1001;</code>
     */
    public function getForumIdNull()
    {
        return $this->forum_id_null;
    }

    /**
     * <code>bool forum_id_null = 1001;</code>
     */
    public function setForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_criteria_no = 2;</code>
     */
    public function getSortingCriteriaNo()
    {
        return $this->sorting_criteria_no;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_criteria_no = 2;</code>
     */
    public function setSortingCriteriaNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_criteria_no = $var;
    }

    /**
     * <code>bool sorting_criteria_no_null = 1002;</code>
     */
    public function getSortingCriteriaNoNull()
    {
        return $this->sorting_criteria_no_null;
    }

    /**
     * <code>bool sorting_criteria_no_null = 1002;</code>
     */
    public function setSortingCriteriaNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sorting_criteria_no_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_criteriafirst = 3;</code>
     */
    public function getSortingCriteriafirst()
    {
        return $this->sorting_criteriafirst;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_criteriafirst = 3;</code>
     */
    public function setSortingCriteriafirst(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_criteriafirst = $var;
    }

    /**
     * <code>bool sorting_criteriafirst_null = 1003;</code>
     */
    public function getSortingCriteriafirstNull()
    {
        return $this->sorting_criteriafirst_null;
    }

    /**
     * <code>bool sorting_criteriafirst_null = 1003;</code>
     */
    public function setSortingCriteriafirstNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sorting_criteriafirst_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_optionsfirst = 4;</code>
     */
    public function getSortingOptionsfirst()
    {
        return $this->sorting_optionsfirst;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_optionsfirst = 4;</code>
     */
    public function setSortingOptionsfirst(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_optionsfirst = $var;
    }

    /**
     * <code>bool sorting_optionsfirst_null = 1004;</code>
     */
    public function getSortingOptionsfirstNull()
    {
        return $this->sorting_optionsfirst_null;
    }

    /**
     * <code>bool sorting_optionsfirst_null = 1004;</code>
     */
    public function setSortingOptionsfirstNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sorting_optionsfirst_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_criteriasecond = 5;</code>
     */
    public function getSortingCriteriasecond()
    {
        return $this->sorting_criteriasecond;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_criteriasecond = 5;</code>
     */
    public function setSortingCriteriasecond(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_criteriasecond = $var;
    }

    /**
     * <code>bool sorting_criteriasecond_null = 1005;</code>
     */
    public function getSortingCriteriasecondNull()
    {
        return $this->sorting_criteriasecond_null;
    }

    /**
     * <code>bool sorting_criteriasecond_null = 1005;</code>
     */
    public function setSortingCriteriasecondNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sorting_criteriasecond_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_optionssecond = 6;</code>
     */
    public function getSortingOptionssecond()
    {
        return $this->sorting_optionssecond;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_optionssecond = 6;</code>
     */
    public function setSortingOptionssecond(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_optionssecond = $var;
    }

    /**
     * <code>bool sorting_optionssecond_null = 1006;</code>
     */
    public function getSortingOptionssecondNull()
    {
        return $this->sorting_optionssecond_null;
    }

    /**
     * <code>bool sorting_optionssecond_null = 1006;</code>
     */
    public function setSortingOptionssecondNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sorting_optionssecond_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_criteriathird = 7;</code>
     */
    public function getSortingCriteriathird()
    {
        return $this->sorting_criteriathird;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_criteriathird = 7;</code>
     */
    public function setSortingCriteriathird(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_criteriathird = $var;
    }

    /**
     * <code>bool sorting_criteriathird_null = 1007;</code>
     */
    public function getSortingCriteriathirdNull()
    {
        return $this->sorting_criteriathird_null;
    }

    /**
     * <code>bool sorting_criteriathird_null = 1007;</code>
     */
    public function setSortingCriteriathirdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sorting_criteriathird_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_optionsthird = 8;</code>
     */
    public function getSortingOptionsthird()
    {
        return $this->sorting_optionsthird;
    }

    /**
     * <code>.dstore.values.IntegerValue sorting_optionsthird = 8;</code>
     */
    public function setSortingOptionsthird(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sorting_optionsthird = $var;
    }

    /**
     * <code>bool sorting_optionsthird_null = 1008;</code>
     */
    public function getSortingOptionsthirdNull()
    {
        return $this->sorting_optionsthird_null;
    }

    /**
     * <code>bool sorting_optionsthird_null = 1008;</code>
     */
    public function setSortingOptionsthirdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sorting_optionsthird_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue activate_criteria = 9;</code>
     */
    public function getActivateCriteria()
    {
        return $this->activate_criteria;
    }

    /**
     * <code>.dstore.values.BooleanValue activate_criteria = 9;</code>
     */
    public function setActivateCriteria(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->activate_criteria = $var;
    }

    /**
     * <code>bool activate_criteria_null = 1009;</code>
     */
    public function getActivateCriteriaNull()
    {
        return $this->activate_criteria_null;
    }

    /**
     * <code>bool activate_criteria_null = 1009;</code>
     */
    public function setActivateCriteriaNull($var)
    {
        GPBUtil::checkBool($var);
        $this->activate_criteria_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_criteria = 10;</code>
     */
    public function getDeleteCriteria()
    {
        return $this->delete_criteria;
    }

    /**
     * <code>.dstore.values.BooleanValue delete_criteria = 10;</code>
     */
    public function setDeleteCriteria(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->delete_criteria = $var;
    }

    /**
     * <code>bool delete_criteria_null = 1010;</code>
     */
    public function getDeleteCriteriaNull()
    {
        return $this->delete_criteria_null;
    }

    /**
     * <code>bool delete_criteria_null = 1010;</code>
     */
    public function setDeleteCriteriaNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_criteria_null = $var;
    }

}

