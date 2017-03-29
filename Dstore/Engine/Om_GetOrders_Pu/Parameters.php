<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetOrders_Pu.proto

namespace Dstore\Engine\Om_GetOrders_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetOrders_Pu.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.BooleanValue get_a_certain_order = 1;</code>
     */
    private $get_a_certain_order = null;
    /**
     * <code>bool get_a_certain_order_null = 1001;</code>
     */
    private $get_a_certain_order_null = false;
    /**
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    private $person_identification_values = null;
    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    private $person_identification_values_null = false;
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 3;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1003;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue date_and_time_format = 4;</code>
     */
    private $date_and_time_format = null;
    /**
     * <code>bool date_and_time_format_null = 1004;</code>
     */
    private $date_and_time_format_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_time = 5;</code>
     */
    private $include_time = null;
    /**
     * <code>bool include_time_null = 1005;</code>
     */
    private $include_time_null = false;
    /**
     * <code>.dstore.values.TimestampValue from_date = 6;</code>
     */
    private $from_date = null;
    /**
     * <code>bool from_date_null = 1006;</code>
     */
    private $from_date_null = false;
    /**
     * <code>.dstore.values.TimestampValue to_date = 7;</code>
     */
    private $to_date = null;
    /**
     * <code>bool to_date_null = 1007;</code>
     */
    private $to_date_null = false;
    /**
     * <code>.dstore.values.StringValue order_state_list = 8;</code>
     */
    private $order_state_list = null;
    /**
     * <code>bool order_state_list_null = 1008;</code>
     */
    private $order_state_list_null = false;
    /**
     * <code>.dstore.values.BooleanValue skip_o_having_different_o_states = 9;</code>
     */
    private $skip_o_having_different_o_states = null;
    /**
     * <code>bool skip_o_having_different_o_states_null = 1009;</code>
     */
    private $skip_o_having_different_o_states_null = false;
    /**
     * <code>.dstore.values.IntegerValue order_id = 10;</code>
     */
    private $order_id = null;
    /**
     * <code>bool order_id_null = 1010;</code>
     */
    private $order_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue rowcount = 11;</code>
     */
    private $rowcount = null;
    /**
     * <code>bool rowcount_null = 1011;</code>
     */
    private $rowcount_null = false;
    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 12;</code>
     */
    private $case_sensitive = null;
    /**
     * <code>bool case_sensitive_null = 1012;</code>
     */
    private $case_sensitive_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_item_no = 13;</code>
     */
    private $include_item_no = null;
    /**
     * <code>bool include_item_no_null = 1013;</code>
     */
    private $include_item_no_null = false;
    /**
     * <code>.dstore.values.BooleanValue order_desc = 14;</code>
     */
    private $order_desc = null;
    /**
     * <code>bool order_desc_null = 1014;</code>
     */
    private $order_desc_null = false;
    /**
     * <code>.dstore.values.IntegerValue information_type_id = 15;</code>
     */
    private $information_type_id = null;
    /**
     * <code>bool information_type_id_null = 1015;</code>
     */
    private $information_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue information = 16;</code>
     */
    private $information = null;
    /**
     * <code>bool information_null = 1016;</code>
     */
    private $information_null = false;
    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 17;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <code>bool node_characteristic_id_null = 1017;</code>
     */
    private $node_characteristic_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue language_id = 18;</code>
     */
    private $language_id = null;
    /**
     * <code>bool language_id_null = 1018;</code>
     */
    private $language_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue purchase_order = 19;</code>
     */
    private $purchase_order = null;
    /**
     * <code>bool purchase_order_null = 1019;</code>
     */
    private $purchase_order_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetOrdersPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.BooleanValue get_a_certain_order = 1;</code>
     */
    public function getGetACertainOrder()
    {
        return $this->get_a_certain_order;
    }

    /**
     * <code>.dstore.values.BooleanValue get_a_certain_order = 1;</code>
     */
    public function setGetACertainOrder(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->get_a_certain_order = $var;
    }

    /**
     * <code>bool get_a_certain_order_null = 1001;</code>
     */
    public function getGetACertainOrderNull()
    {
        return $this->get_a_certain_order_null;
    }

    /**
     * <code>bool get_a_certain_order_null = 1001;</code>
     */
    public function setGetACertainOrderNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_a_certain_order_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    /**
     * <code>.dstore.values.StringValue person_identification_values = 2;</code>
     */
    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->person_identification_values = $var;
    }

    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    /**
     * <code>bool person_identification_values_null = 1002;</code>
     */
    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 3;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 3;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1003;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1003;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue date_and_time_format = 4;</code>
     */
    public function getDateAndTimeFormat()
    {
        return $this->date_and_time_format;
    }

    /**
     * <code>.dstore.values.IntegerValue date_and_time_format = 4;</code>
     */
    public function setDateAndTimeFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->date_and_time_format = $var;
    }

    /**
     * <code>bool date_and_time_format_null = 1004;</code>
     */
    public function getDateAndTimeFormatNull()
    {
        return $this->date_and_time_format_null;
    }

    /**
     * <code>bool date_and_time_format_null = 1004;</code>
     */
    public function setDateAndTimeFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_and_time_format_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_time = 5;</code>
     */
    public function getIncludeTime()
    {
        return $this->include_time;
    }

    /**
     * <code>.dstore.values.BooleanValue include_time = 5;</code>
     */
    public function setIncludeTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_time = $var;
    }

    /**
     * <code>bool include_time_null = 1005;</code>
     */
    public function getIncludeTimeNull()
    {
        return $this->include_time_null;
    }

    /**
     * <code>bool include_time_null = 1005;</code>
     */
    public function setIncludeTimeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_time_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 6;</code>
     */
    public function getFromDate()
    {
        return $this->from_date;
    }

    /**
     * <code>.dstore.values.TimestampValue from_date = 6;</code>
     */
    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->from_date = $var;
    }

    /**
     * <code>bool from_date_null = 1006;</code>
     */
    public function getFromDateNull()
    {
        return $this->from_date_null;
    }

    /**
     * <code>bool from_date_null = 1006;</code>
     */
    public function setFromDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_null = $var;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 7;</code>
     */
    public function getToDate()
    {
        return $this->to_date;
    }

    /**
     * <code>.dstore.values.TimestampValue to_date = 7;</code>
     */
    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->to_date = $var;
    }

    /**
     * <code>bool to_date_null = 1007;</code>
     */
    public function getToDateNull()
    {
        return $this->to_date_null;
    }

    /**
     * <code>bool to_date_null = 1007;</code>
     */
    public function setToDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue order_state_list = 8;</code>
     */
    public function getOrderStateList()
    {
        return $this->order_state_list;
    }

    /**
     * <code>.dstore.values.StringValue order_state_list = 8;</code>
     */
    public function setOrderStateList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->order_state_list = $var;
    }

    /**
     * <code>bool order_state_list_null = 1008;</code>
     */
    public function getOrderStateListNull()
    {
        return $this->order_state_list_null;
    }

    /**
     * <code>bool order_state_list_null = 1008;</code>
     */
    public function setOrderStateListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_state_list_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue skip_o_having_different_o_states = 9;</code>
     */
    public function getSkipOHavingDifferentOStates()
    {
        return $this->skip_o_having_different_o_states;
    }

    /**
     * <code>.dstore.values.BooleanValue skip_o_having_different_o_states = 9;</code>
     */
    public function setSkipOHavingDifferentOStates(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->skip_o_having_different_o_states = $var;
    }

    /**
     * <code>bool skip_o_having_different_o_states_null = 1009;</code>
     */
    public function getSkipOHavingDifferentOStatesNull()
    {
        return $this->skip_o_having_different_o_states_null;
    }

    /**
     * <code>bool skip_o_having_different_o_states_null = 1009;</code>
     */
    public function setSkipOHavingDifferentOStatesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_o_having_different_o_states_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue order_id = 10;</code>
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * <code>.dstore.values.IntegerValue order_id = 10;</code>
     */
    public function setOrderId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->order_id = $var;
    }

    /**
     * <code>bool order_id_null = 1010;</code>
     */
    public function getOrderIdNull()
    {
        return $this->order_id_null;
    }

    /**
     * <code>bool order_id_null = 1010;</code>
     */
    public function setOrderIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue rowcount = 11;</code>
     */
    public function getRowcount()
    {
        return $this->rowcount;
    }

    /**
     * <code>.dstore.values.IntegerValue rowcount = 11;</code>
     */
    public function setRowcount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->rowcount = $var;
    }

    /**
     * <code>bool rowcount_null = 1011;</code>
     */
    public function getRowcountNull()
    {
        return $this->rowcount_null;
    }

    /**
     * <code>bool rowcount_null = 1011;</code>
     */
    public function setRowcountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->rowcount_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 12;</code>
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * <code>.dstore.values.BooleanValue case_sensitive = 12;</code>
     */
    public function setCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->case_sensitive = $var;
    }

    /**
     * <code>bool case_sensitive_null = 1012;</code>
     */
    public function getCaseSensitiveNull()
    {
        return $this->case_sensitive_null;
    }

    /**
     * <code>bool case_sensitive_null = 1012;</code>
     */
    public function setCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_item_no = 13;</code>
     */
    public function getIncludeItemNo()
    {
        return $this->include_item_no;
    }

    /**
     * <code>.dstore.values.BooleanValue include_item_no = 13;</code>
     */
    public function setIncludeItemNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_item_no = $var;
    }

    /**
     * <code>bool include_item_no_null = 1013;</code>
     */
    public function getIncludeItemNoNull()
    {
        return $this->include_item_no_null;
    }

    /**
     * <code>bool include_item_no_null = 1013;</code>
     */
    public function setIncludeItemNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_item_no_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue order_desc = 14;</code>
     */
    public function getOrderDesc()
    {
        return $this->order_desc;
    }

    /**
     * <code>.dstore.values.BooleanValue order_desc = 14;</code>
     */
    public function setOrderDesc(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->order_desc = $var;
    }

    /**
     * <code>bool order_desc_null = 1014;</code>
     */
    public function getOrderDescNull()
    {
        return $this->order_desc_null;
    }

    /**
     * <code>bool order_desc_null = 1014;</code>
     */
    public function setOrderDescNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_desc_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 15;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue information_type_id = 15;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <code>bool information_type_id_null = 1015;</code>
     */
    public function getInformationTypeIdNull()
    {
        return $this->information_type_id_null;
    }

    /**
     * <code>bool information_type_id_null = 1015;</code>
     */
    public function setInformationTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue information = 16;</code>
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * <code>.dstore.values.StringValue information = 16;</code>
     */
    public function setInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->information = $var;
    }

    /**
     * <code>bool information_null = 1016;</code>
     */
    public function getInformationNull()
    {
        return $this->information_null;
    }

    /**
     * <code>bool information_null = 1016;</code>
     */
    public function setInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 17;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 17;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <code>bool node_characteristic_id_null = 1017;</code>
     */
    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    /**
     * <code>bool node_characteristic_id_null = 1017;</code>
     */
    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 18;</code>
     */
    public function getLanguageId()
    {
        return $this->language_id;
    }

    /**
     * <code>.dstore.values.IntegerValue language_id = 18;</code>
     */
    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->language_id = $var;
    }

    /**
     * <code>bool language_id_null = 1018;</code>
     */
    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    /**
     * <code>bool language_id_null = 1018;</code>
     */
    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue purchase_order = 19;</code>
     */
    public function getPurchaseOrder()
    {
        return $this->purchase_order;
    }

    /**
     * <code>.dstore.values.BooleanValue purchase_order = 19;</code>
     */
    public function setPurchaseOrder(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->purchase_order = $var;
    }

    /**
     * <code>bool purchase_order_null = 1019;</code>
     */
    public function getPurchaseOrderNull()
    {
        return $this->purchase_order_null;
    }

    /**
     * <code>bool purchase_order_null = 1019;</code>
     */
    public function setPurchaseOrderNull($var)
    {
        GPBUtil::checkBool($var);
        $this->purchase_order_null = $var;
    }

}
