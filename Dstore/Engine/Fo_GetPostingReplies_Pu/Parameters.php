<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPostingReplies_Pu.proto

namespace Dstore\Engine\Fo_GetPostingReplies_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_GetPostingReplies_Pu.Parameters</code>
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
     * <code>.dstore.values.BooleanValue include_posting_id = 5;</code>
     */
    private $include_posting_id = null;
    /**
     * <code>bool include_posting_id_null = 1005;</code>
     */
    private $include_posting_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue only_replies_up_to_level = 6;</code>
     */
    private $only_replies_up_to_level = null;
    /**
     * <code>bool only_replies_up_to_level_null = 1006;</code>
     */
    private $only_replies_up_to_level_null = false;
    /**
     * <code>.dstore.values.IntegerValue number_of_replies = 7;</code>
     */
    private $number_of_replies = null;
    /**
     * <code>bool number_of_replies_null = 1007;</code>
     */
    private $number_of_replies_null = false;
    /**
     * <code>.dstore.values.IntegerValue main_posting_id = 8;</code>
     */
    private $main_posting_id = null;
    /**
     * <code>bool main_posting_id_null = 1008;</code>
     */
    private $main_posting_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue order_desc = 9;</code>
     */
    private $order_desc = null;
    /**
     * <code>bool order_desc_null = 1009;</code>
     */
    private $order_desc_null = false;
    /**
     * <code>.dstore.values.IntegerValue from_row_number = 10;</code>
     */
    private $from_row_number = null;
    /**
     * <code>bool from_row_number_null = 1010;</code>
     */
    private $from_row_number_null = false;
    /**
     * <code>.dstore.values.IntegerValue max_number_of_postings = 11;</code>
     */
    private $max_number_of_postings = null;
    /**
     * <code>bool max_number_of_postings_null = 1011;</code>
     */
    private $max_number_of_postings_null = false;
    /**
     * <code>.dstore.values.IntegerValue visibility = 12;</code>
     */
    private $visibility = null;
    /**
     * <code>bool visibility_null = 1012;</code>
     */
    private $visibility_null = false;
    /**
     * <code>.dstore.values.BooleanValue get_own_not_approved_postings = 13;</code>
     */
    private $get_own_not_approved_postings = null;
    /**
     * <code>bool get_own_not_approved_postings_null = 1013;</code>
     */
    private $get_own_not_approved_postings_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_posting_bodies = 14;</code>
     */
    private $include_posting_bodies = null;
    /**
     * <code>bool include_posting_bodies_null = 1014;</code>
     */
    private $include_posting_bodies_null = false;
    /**
     * <code>.dstore.values.IntegerValue output_into_one_id = 15;</code>
     */
    private $output_into_one_id = null;
    /**
     * <code>bool output_into_one_id_null = 1015;</code>
     */
    private $output_into_one_id_null = false;
    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 16;</code>
     */
    private $separator_in_ident_vals = null;
    /**
     * <code>bool separator_in_ident_vals_null = 1016;</code>
     */
    private $separator_in_ident_vals_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoGetPostingRepliesPu::initOnce();
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
     * <code>.dstore.values.BooleanValue include_posting_id = 5;</code>
     */
    public function getIncludePostingId()
    {
        return $this->include_posting_id;
    }

    /**
     * <code>.dstore.values.BooleanValue include_posting_id = 5;</code>
     */
    public function setIncludePostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_posting_id = $var;
    }

    /**
     * <code>bool include_posting_id_null = 1005;</code>
     */
    public function getIncludePostingIdNull()
    {
        return $this->include_posting_id_null;
    }

    /**
     * <code>bool include_posting_id_null = 1005;</code>
     */
    public function setIncludePostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_posting_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue only_replies_up_to_level = 6;</code>
     */
    public function getOnlyRepliesUpToLevel()
    {
        return $this->only_replies_up_to_level;
    }

    /**
     * <code>.dstore.values.IntegerValue only_replies_up_to_level = 6;</code>
     */
    public function setOnlyRepliesUpToLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->only_replies_up_to_level = $var;
    }

    /**
     * <code>bool only_replies_up_to_level_null = 1006;</code>
     */
    public function getOnlyRepliesUpToLevelNull()
    {
        return $this->only_replies_up_to_level_null;
    }

    /**
     * <code>bool only_replies_up_to_level_null = 1006;</code>
     */
    public function setOnlyRepliesUpToLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_replies_up_to_level_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_replies = 7;</code>
     */
    public function getNumberOfReplies()
    {
        return $this->number_of_replies;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_replies = 7;</code>
     */
    public function setNumberOfReplies(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->number_of_replies = $var;
    }

    /**
     * <code>bool number_of_replies_null = 1007;</code>
     */
    public function getNumberOfRepliesNull()
    {
        return $this->number_of_replies_null;
    }

    /**
     * <code>bool number_of_replies_null = 1007;</code>
     */
    public function setNumberOfRepliesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->number_of_replies_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue main_posting_id = 8;</code>
     */
    public function getMainPostingId()
    {
        return $this->main_posting_id;
    }

    /**
     * <code>.dstore.values.IntegerValue main_posting_id = 8;</code>
     */
    public function setMainPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->main_posting_id = $var;
    }

    /**
     * <code>bool main_posting_id_null = 1008;</code>
     */
    public function getMainPostingIdNull()
    {
        return $this->main_posting_id_null;
    }

    /**
     * <code>bool main_posting_id_null = 1008;</code>
     */
    public function setMainPostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->main_posting_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue order_desc = 9;</code>
     */
    public function getOrderDesc()
    {
        return $this->order_desc;
    }

    /**
     * <code>.dstore.values.BooleanValue order_desc = 9;</code>
     */
    public function setOrderDesc(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->order_desc = $var;
    }

    /**
     * <code>bool order_desc_null = 1009;</code>
     */
    public function getOrderDescNull()
    {
        return $this->order_desc_null;
    }

    /**
     * <code>bool order_desc_null = 1009;</code>
     */
    public function setOrderDescNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_desc_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue from_row_number = 10;</code>
     */
    public function getFromRowNumber()
    {
        return $this->from_row_number;
    }

    /**
     * <code>.dstore.values.IntegerValue from_row_number = 10;</code>
     */
    public function setFromRowNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->from_row_number = $var;
    }

    /**
     * <code>bool from_row_number_null = 1010;</code>
     */
    public function getFromRowNumberNull()
    {
        return $this->from_row_number_null;
    }

    /**
     * <code>bool from_row_number_null = 1010;</code>
     */
    public function setFromRowNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_row_number_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue max_number_of_postings = 11;</code>
     */
    public function getMaxNumberOfPostings()
    {
        return $this->max_number_of_postings;
    }

    /**
     * <code>.dstore.values.IntegerValue max_number_of_postings = 11;</code>
     */
    public function setMaxNumberOfPostings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->max_number_of_postings = $var;
    }

    /**
     * <code>bool max_number_of_postings_null = 1011;</code>
     */
    public function getMaxNumberOfPostingsNull()
    {
        return $this->max_number_of_postings_null;
    }

    /**
     * <code>bool max_number_of_postings_null = 1011;</code>
     */
    public function setMaxNumberOfPostingsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_postings_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue visibility = 12;</code>
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * <code>.dstore.values.IntegerValue visibility = 12;</code>
     */
    public function setVisibility(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->visibility = $var;
    }

    /**
     * <code>bool visibility_null = 1012;</code>
     */
    public function getVisibilityNull()
    {
        return $this->visibility_null;
    }

    /**
     * <code>bool visibility_null = 1012;</code>
     */
    public function setVisibilityNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visibility_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue get_own_not_approved_postings = 13;</code>
     */
    public function getGetOwnNotApprovedPostings()
    {
        return $this->get_own_not_approved_postings;
    }

    /**
     * <code>.dstore.values.BooleanValue get_own_not_approved_postings = 13;</code>
     */
    public function setGetOwnNotApprovedPostings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_own_not_approved_postings = $var;
    }

    /**
     * <code>bool get_own_not_approved_postings_null = 1013;</code>
     */
    public function getGetOwnNotApprovedPostingsNull()
    {
        return $this->get_own_not_approved_postings_null;
    }

    /**
     * <code>bool get_own_not_approved_postings_null = 1013;</code>
     */
    public function setGetOwnNotApprovedPostingsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_own_not_approved_postings_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_posting_bodies = 14;</code>
     */
    public function getIncludePostingBodies()
    {
        return $this->include_posting_bodies;
    }

    /**
     * <code>.dstore.values.BooleanValue include_posting_bodies = 14;</code>
     */
    public function setIncludePostingBodies(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_posting_bodies = $var;
    }

    /**
     * <code>bool include_posting_bodies_null = 1014;</code>
     */
    public function getIncludePostingBodiesNull()
    {
        return $this->include_posting_bodies_null;
    }

    /**
     * <code>bool include_posting_bodies_null = 1014;</code>
     */
    public function setIncludePostingBodiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_posting_bodies_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue output_into_one_id = 15;</code>
     */
    public function getOutputIntoOneId()
    {
        return $this->output_into_one_id;
    }

    /**
     * <code>.dstore.values.IntegerValue output_into_one_id = 15;</code>
     */
    public function setOutputIntoOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->output_into_one_id = $var;
    }

    /**
     * <code>bool output_into_one_id_null = 1015;</code>
     */
    public function getOutputIntoOneIdNull()
    {
        return $this->output_into_one_id_null;
    }

    /**
     * <code>bool output_into_one_id_null = 1015;</code>
     */
    public function setOutputIntoOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_into_one_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 16;</code>
     */
    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    /**
     * <code>.dstore.values.StringValue separator_in_ident_vals = 16;</code>
     */
    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1016;</code>
     */
    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    /**
     * <code>bool separator_in_ident_vals_null = 1016;</code>
     */
    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
    }

}

