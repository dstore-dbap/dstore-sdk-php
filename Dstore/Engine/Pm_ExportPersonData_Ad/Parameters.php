<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ExportPersonData_Ad.proto

namespace Dstore\Engine\Pm_ExportPersonData_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_ExportPersonData_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    private $person_type_id = null;
    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    private $person_type_id_null = false;
    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 2;</code>
     */
    private $characteristic_id_list = null;
    /**
     * <code>bool characteristic_id_list_null = 1002;</code>
     */
    private $characteristic_id_list_null = false;
    /**
     * <code>.dstore.values.StringValue separator = 3;</code>
     */
    private $separator = null;
    /**
     * <code>bool separator_null = 1003;</code>
     */
    private $separator_null = false;
    /**
     * <code>.dstore.values.StringValue char_strings_in_props_to_replace = 4;</code>
     */
    private $char_strings_in_props_to_replace = null;
    /**
     * <code>bool char_strings_in_props_to_replace_null = 1004;</code>
     */
    private $char_strings_in_props_to_replace_null = false;
    /**
     * <code>.dstore.values.StringValue replace_char_strings_in_props_by = 5;</code>
     */
    private $replace_char_strings_in_props_by = null;
    /**
     * <code>bool replace_char_strings_in_props_by_null = 1005;</code>
     */
    private $replace_char_strings_in_props_by_null = false;
    /**
     * <code>.dstore.values.IntegerValue row_count = 6;</code>
     */
    private $row_count = null;
    /**
     * <code>bool row_count_null = 1006;</code>
     */
    private $row_count_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_person_id = 7;</code>
     */
    private $include_person_id = null;
    /**
     * <code>bool include_person_id_null = 1007;</code>
     */
    private $include_person_id_null = false;
    /**
     * <code>.dstore.values.StringValue string_for_no_property = 8;</code>
     */
    private $string_for_no_property = null;
    /**
     * <code>bool string_for_no_property_null = 1008;</code>
     */
    private $string_for_no_property_null = false;
    /**
     * <code>.dstore.values.StringValue date_format = 9;</code>
     */
    private $date_format = null;
    /**
     * <code>bool date_format_null = 1009;</code>
     */
    private $date_format_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_creation_date = 10;</code>
     */
    private $include_creation_date = null;
    /**
     * <code>bool include_creation_date_null = 1010;</code>
     */
    private $include_creation_date_null = false;
    /**
     * <code>.dstore.values.BooleanValue include_last_edited_date = 11;</code>
     */
    private $include_last_edited_date = null;
    /**
     * <code>bool include_last_edited_date_null = 1011;</code>
     */
    private $include_last_edited_date_null = false;
    /**
     * <code>.dstore.values.StringValue last_edited_info_for_charac_ids = 12;</code>
     */
    private $last_edited_info_for_charac_ids = null;
    /**
     * <code>bool last_edited_info_for_charac_ids_null = 1012;</code>
     */
    private $last_edited_info_for_charac_ids_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmExportPersonDataAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    /**
     * <code>.dstore.values.IntegerValue person_type_id = 1;</code>
     */
    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->person_type_id = $var;
    }

    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    /**
     * <code>bool person_type_id_null = 1001;</code>
     */
    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 2;</code>
     */
    public function getCharacteristicIdList()
    {
        return $this->characteristic_id_list;
    }

    /**
     * <code>.dstore.values.StringValue characteristic_id_list = 2;</code>
     */
    public function setCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->characteristic_id_list = $var;
    }

    /**
     * <code>bool characteristic_id_list_null = 1002;</code>
     */
    public function getCharacteristicIdListNull()
    {
        return $this->characteristic_id_list_null;
    }

    /**
     * <code>bool characteristic_id_list_null = 1002;</code>
     */
    public function setCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue separator = 3;</code>
     */
    public function getSeparator()
    {
        return $this->separator;
    }

    /**
     * <code>.dstore.values.StringValue separator = 3;</code>
     */
    public function setSeparator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->separator = $var;
    }

    /**
     * <code>bool separator_null = 1003;</code>
     */
    public function getSeparatorNull()
    {
        return $this->separator_null;
    }

    /**
     * <code>bool separator_null = 1003;</code>
     */
    public function setSeparatorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue char_strings_in_props_to_replace = 4;</code>
     */
    public function getCharStringsInPropsToReplace()
    {
        return $this->char_strings_in_props_to_replace;
    }

    /**
     * <code>.dstore.values.StringValue char_strings_in_props_to_replace = 4;</code>
     */
    public function setCharStringsInPropsToReplace(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->char_strings_in_props_to_replace = $var;
    }

    /**
     * <code>bool char_strings_in_props_to_replace_null = 1004;</code>
     */
    public function getCharStringsInPropsToReplaceNull()
    {
        return $this->char_strings_in_props_to_replace_null;
    }

    /**
     * <code>bool char_strings_in_props_to_replace_null = 1004;</code>
     */
    public function setCharStringsInPropsToReplaceNull($var)
    {
        GPBUtil::checkBool($var);
        $this->char_strings_in_props_to_replace_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue replace_char_strings_in_props_by = 5;</code>
     */
    public function getReplaceCharStringsInPropsBy()
    {
        return $this->replace_char_strings_in_props_by;
    }

    /**
     * <code>.dstore.values.StringValue replace_char_strings_in_props_by = 5;</code>
     */
    public function setReplaceCharStringsInPropsBy(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->replace_char_strings_in_props_by = $var;
    }

    /**
     * <code>bool replace_char_strings_in_props_by_null = 1005;</code>
     */
    public function getReplaceCharStringsInPropsByNull()
    {
        return $this->replace_char_strings_in_props_by_null;
    }

    /**
     * <code>bool replace_char_strings_in_props_by_null = 1005;</code>
     */
    public function setReplaceCharStringsInPropsByNull($var)
    {
        GPBUtil::checkBool($var);
        $this->replace_char_strings_in_props_by_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue row_count = 6;</code>
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * <code>.dstore.values.IntegerValue row_count = 6;</code>
     */
    public function setRowCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->row_count = $var;
    }

    /**
     * <code>bool row_count_null = 1006;</code>
     */
    public function getRowCountNull()
    {
        return $this->row_count_null;
    }

    /**
     * <code>bool row_count_null = 1006;</code>
     */
    public function setRowCountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->row_count_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_person_id = 7;</code>
     */
    public function getIncludePersonId()
    {
        return $this->include_person_id;
    }

    /**
     * <code>.dstore.values.BooleanValue include_person_id = 7;</code>
     */
    public function setIncludePersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_person_id = $var;
    }

    /**
     * <code>bool include_person_id_null = 1007;</code>
     */
    public function getIncludePersonIdNull()
    {
        return $this->include_person_id_null;
    }

    /**
     * <code>bool include_person_id_null = 1007;</code>
     */
    public function setIncludePersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_person_id_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue string_for_no_property = 8;</code>
     */
    public function getStringForNoProperty()
    {
        return $this->string_for_no_property;
    }

    /**
     * <code>.dstore.values.StringValue string_for_no_property = 8;</code>
     */
    public function setStringForNoProperty(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->string_for_no_property = $var;
    }

    /**
     * <code>bool string_for_no_property_null = 1008;</code>
     */
    public function getStringForNoPropertyNull()
    {
        return $this->string_for_no_property_null;
    }

    /**
     * <code>bool string_for_no_property_null = 1008;</code>
     */
    public function setStringForNoPropertyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->string_for_no_property_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 9;</code>
     */
    public function getDateFormat()
    {
        return $this->date_format;
    }

    /**
     * <code>.dstore.values.StringValue date_format = 9;</code>
     */
    public function setDateFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->date_format = $var;
    }

    /**
     * <code>bool date_format_null = 1009;</code>
     */
    public function getDateFormatNull()
    {
        return $this->date_format_null;
    }

    /**
     * <code>bool date_format_null = 1009;</code>
     */
    public function setDateFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_format_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_creation_date = 10;</code>
     */
    public function getIncludeCreationDate()
    {
        return $this->include_creation_date;
    }

    /**
     * <code>.dstore.values.BooleanValue include_creation_date = 10;</code>
     */
    public function setIncludeCreationDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_creation_date = $var;
    }

    /**
     * <code>bool include_creation_date_null = 1010;</code>
     */
    public function getIncludeCreationDateNull()
    {
        return $this->include_creation_date_null;
    }

    /**
     * <code>bool include_creation_date_null = 1010;</code>
     */
    public function setIncludeCreationDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_creation_date_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue include_last_edited_date = 11;</code>
     */
    public function getIncludeLastEditedDate()
    {
        return $this->include_last_edited_date;
    }

    /**
     * <code>.dstore.values.BooleanValue include_last_edited_date = 11;</code>
     */
    public function setIncludeLastEditedDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->include_last_edited_date = $var;
    }

    /**
     * <code>bool include_last_edited_date_null = 1011;</code>
     */
    public function getIncludeLastEditedDateNull()
    {
        return $this->include_last_edited_date_null;
    }

    /**
     * <code>bool include_last_edited_date_null = 1011;</code>
     */
    public function setIncludeLastEditedDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_last_edited_date_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue last_edited_info_for_charac_ids = 12;</code>
     */
    public function getLastEditedInfoForCharacIds()
    {
        return $this->last_edited_info_for_charac_ids;
    }

    /**
     * <code>.dstore.values.StringValue last_edited_info_for_charac_ids = 12;</code>
     */
    public function setLastEditedInfoForCharacIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->last_edited_info_for_charac_ids = $var;
    }

    /**
     * <code>bool last_edited_info_for_charac_ids_null = 1012;</code>
     */
    public function getLastEditedInfoForCharacIdsNull()
    {
        return $this->last_edited_info_for_charac_ids_null;
    }

    /**
     * <code>bool last_edited_info_for_charac_ids_null = 1012;</code>
     */
    public function setLastEditedInfoForCharacIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->last_edited_info_for_charac_ids_null = $var;
    }

}

