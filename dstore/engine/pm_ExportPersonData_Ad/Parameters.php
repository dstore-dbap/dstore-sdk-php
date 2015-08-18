<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_ExportPersonData_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_ExportPersonData_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_id_list = null;
    
    /**  @var boolean */
    public $characteristic_id_list_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $separator = null;
    
    /**  @var boolean */
    public $separator_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $char_strings_in_props_to_replace = null;
    
    /**  @var boolean */
    public $char_strings_in_props_to_replace_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $replace_char_strings_in_props_by = null;
    
    /**  @var boolean */
    public $replace_char_strings_in_props_by_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $row_count = null;
    
    /**  @var boolean */
    public $row_count_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $include_person_id = null;
    
    /**  @var boolean */
    public $include_person_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $string_for_no_property = null;
    
    /**  @var boolean */
    public $string_for_no_property_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $date_format = null;
    
    /**  @var boolean */
    public $date_format_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $include_creation_date = null;
    
    /**  @var boolean */
    public $include_creation_date_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $include_last_edited_date = null;
    
    /**  @var boolean */
    public $include_last_edited_date_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $last_edited_info_for_charac_ids = null;
    
    /**  @var boolean */
    public $last_edited_info_for_charac_ids_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_ExportPersonData_Ad.Parameters');

      // OPTIONAL MESSAGE person_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_id_list = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "characteristic_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_list_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "characteristic_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "separator";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "separator_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE char_strings_in_props_to_replace = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "char_strings_in_props_to_replace";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL char_strings_in_props_to_replace_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "char_strings_in_props_to_replace_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE replace_char_strings_in_props_by = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "replace_char_strings_in_props_by";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL replace_char_strings_in_props_by_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "replace_char_strings_in_props_by_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE row_count = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "row_count";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL row_count_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "row_count_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_person_id = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "include_person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_person_id_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "include_person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE string_for_no_property = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "string_for_no_property";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL string_for_no_property_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "string_for_no_property_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE date_format = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "date_format";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL date_format_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "date_format_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_creation_date = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "include_creation_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_creation_date_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "include_creation_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_last_edited_date = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "include_last_edited_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_last_edited_date_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "include_last_edited_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE last_edited_info_for_charac_ids = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "last_edited_info_for_charac_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL last_edited_info_for_charac_ids_null = 1012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1012;
      $f->name      = "last_edited_info_for_charac_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <characteristic_id_list> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList(){
      return $this->_has(2);
    }
    
    /**
     * Clear <characteristic_id_list> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearCharacteristicIdList(){
      return $this->_clear(2);
    }
    
    /**
     * Get <characteristic_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicIdList(){
      return $this->_get(2);
    }
    
    /**
     * Set <characteristic_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setCharacteristicIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <characteristic_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdListNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <characteristic_id_list_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearCharacteristicIdListNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <characteristic_id_list_null> value
     *
     * @return boolean
     */
    public function getCharacteristicIdListNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <characteristic_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setCharacteristicIdListNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <separator> has a value
     *
     * @return boolean
     */
    public function hasSeparator(){
      return $this->_has(3);
    }
    
    /**
     * Clear <separator> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearSeparator(){
      return $this->_clear(3);
    }
    
    /**
     * Get <separator> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSeparator(){
      return $this->_get(3);
    }
    
    /**
     * Set <separator> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setSeparator(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <separator_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <separator_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearSeparatorNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <separator_null> value
     *
     * @return boolean
     */
    public function getSeparatorNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <separator_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setSeparatorNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <char_strings_in_props_to_replace> has a value
     *
     * @return boolean
     */
    public function hasCharStringsInPropsToReplace(){
      return $this->_has(4);
    }
    
    /**
     * Clear <char_strings_in_props_to_replace> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearCharStringsInPropsToReplace(){
      return $this->_clear(4);
    }
    
    /**
     * Get <char_strings_in_props_to_replace> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharStringsInPropsToReplace(){
      return $this->_get(4);
    }
    
    /**
     * Set <char_strings_in_props_to_replace> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setCharStringsInPropsToReplace(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <char_strings_in_props_to_replace_null> has a value
     *
     * @return boolean
     */
    public function hasCharStringsInPropsToReplaceNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <char_strings_in_props_to_replace_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearCharStringsInPropsToReplaceNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <char_strings_in_props_to_replace_null> value
     *
     * @return boolean
     */
    public function getCharStringsInPropsToReplaceNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <char_strings_in_props_to_replace_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setCharStringsInPropsToReplaceNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <replace_char_strings_in_props_by> has a value
     *
     * @return boolean
     */
    public function hasReplaceCharStringsInPropsBy(){
      return $this->_has(5);
    }
    
    /**
     * Clear <replace_char_strings_in_props_by> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearReplaceCharStringsInPropsBy(){
      return $this->_clear(5);
    }
    
    /**
     * Get <replace_char_strings_in_props_by> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getReplaceCharStringsInPropsBy(){
      return $this->_get(5);
    }
    
    /**
     * Set <replace_char_strings_in_props_by> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setReplaceCharStringsInPropsBy(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <replace_char_strings_in_props_by_null> has a value
     *
     * @return boolean
     */
    public function hasReplaceCharStringsInPropsByNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <replace_char_strings_in_props_by_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearReplaceCharStringsInPropsByNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <replace_char_strings_in_props_by_null> value
     *
     * @return boolean
     */
    public function getReplaceCharStringsInPropsByNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <replace_char_strings_in_props_by_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setReplaceCharStringsInPropsByNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <row_count> has a value
     *
     * @return boolean
     */
    public function hasRowCount(){
      return $this->_has(6);
    }
    
    /**
     * Clear <row_count> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearRowCount(){
      return $this->_clear(6);
    }
    
    /**
     * Get <row_count> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRowCount(){
      return $this->_get(6);
    }
    
    /**
     * Set <row_count> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setRowCount(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <row_count_null> has a value
     *
     * @return boolean
     */
    public function hasRowCountNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <row_count_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearRowCountNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <row_count_null> value
     *
     * @return boolean
     */
    public function getRowCountNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <row_count_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setRowCountNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <include_person_id> has a value
     *
     * @return boolean
     */
    public function hasIncludePersonId(){
      return $this->_has(7);
    }
    
    /**
     * Clear <include_person_id> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearIncludePersonId(){
      return $this->_clear(7);
    }
    
    /**
     * Get <include_person_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludePersonId(){
      return $this->_get(7);
    }
    
    /**
     * Set <include_person_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setIncludePersonId(\dstore\engine\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <include_person_id_null> has a value
     *
     * @return boolean
     */
    public function hasIncludePersonIdNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <include_person_id_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearIncludePersonIdNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <include_person_id_null> value
     *
     * @return boolean
     */
    public function getIncludePersonIdNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <include_person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setIncludePersonIdNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <string_for_no_property> has a value
     *
     * @return boolean
     */
    public function hasStringForNoProperty(){
      return $this->_has(8);
    }
    
    /**
     * Clear <string_for_no_property> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearStringForNoProperty(){
      return $this->_clear(8);
    }
    
    /**
     * Get <string_for_no_property> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getStringForNoProperty(){
      return $this->_get(8);
    }
    
    /**
     * Set <string_for_no_property> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setStringForNoProperty(\dstore\engine\values\stringValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <string_for_no_property_null> has a value
     *
     * @return boolean
     */
    public function hasStringForNoPropertyNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <string_for_no_property_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearStringForNoPropertyNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <string_for_no_property_null> value
     *
     * @return boolean
     */
    public function getStringForNoPropertyNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <string_for_no_property_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setStringForNoPropertyNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <date_format> has a value
     *
     * @return boolean
     */
    public function hasDateFormat(){
      return $this->_has(9);
    }
    
    /**
     * Clear <date_format> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearDateFormat(){
      return $this->_clear(9);
    }
    
    /**
     * Get <date_format> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDateFormat(){
      return $this->_get(9);
    }
    
    /**
     * Set <date_format> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setDateFormat(\dstore\engine\values\stringValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <date_format_null> has a value
     *
     * @return boolean
     */
    public function hasDateFormatNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <date_format_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearDateFormatNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <date_format_null> value
     *
     * @return boolean
     */
    public function getDateFormatNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <date_format_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setDateFormatNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <include_creation_date> has a value
     *
     * @return boolean
     */
    public function hasIncludeCreationDate(){
      return $this->_has(10);
    }
    
    /**
     * Clear <include_creation_date> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearIncludeCreationDate(){
      return $this->_clear(10);
    }
    
    /**
     * Get <include_creation_date> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludeCreationDate(){
      return $this->_get(10);
    }
    
    /**
     * Set <include_creation_date> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setIncludeCreationDate(\dstore\engine\values\booleanValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <include_creation_date_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeCreationDateNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <include_creation_date_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearIncludeCreationDateNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <include_creation_date_null> value
     *
     * @return boolean
     */
    public function getIncludeCreationDateNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <include_creation_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setIncludeCreationDateNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <include_last_edited_date> has a value
     *
     * @return boolean
     */
    public function hasIncludeLastEditedDate(){
      return $this->_has(11);
    }
    
    /**
     * Clear <include_last_edited_date> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearIncludeLastEditedDate(){
      return $this->_clear(11);
    }
    
    /**
     * Get <include_last_edited_date> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludeLastEditedDate(){
      return $this->_get(11);
    }
    
    /**
     * Set <include_last_edited_date> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setIncludeLastEditedDate(\dstore\engine\values\booleanValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <include_last_edited_date_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeLastEditedDateNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <include_last_edited_date_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearIncludeLastEditedDateNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <include_last_edited_date_null> value
     *
     * @return boolean
     */
    public function getIncludeLastEditedDateNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <include_last_edited_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setIncludeLastEditedDateNull( $value){
      return $this->_set(1011, $value);
    }
    
    /**
     * Check if <last_edited_info_for_charac_ids> has a value
     *
     * @return boolean
     */
    public function hasLastEditedInfoForCharacIds(){
      return $this->_has(12);
    }
    
    /**
     * Clear <last_edited_info_for_charac_ids> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearLastEditedInfoForCharacIds(){
      return $this->_clear(12);
    }
    
    /**
     * Get <last_edited_info_for_charac_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLastEditedInfoForCharacIds(){
      return $this->_get(12);
    }
    
    /**
     * Set <last_edited_info_for_charac_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setLastEditedInfoForCharacIds(\dstore\engine\values\stringValue $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <last_edited_info_for_charac_ids_null> has a value
     *
     * @return boolean
     */
    public function hasLastEditedInfoForCharacIdsNull(){
      return $this->_has(1012);
    }
    
    /**
     * Clear <last_edited_info_for_charac_ids_null> value
     *
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function clearLastEditedInfoForCharacIdsNull(){
      return $this->_clear(1012);
    }
    
    /**
     * Get <last_edited_info_for_charac_ids_null> value
     *
     * @return boolean
     */
    public function getLastEditedInfoForCharacIdsNull(){
      return $this->_get(1012);
    }
    
    /**
     * Set <last_edited_info_for_charac_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ExportPersonData_Ad\Parameters
     */
    public function setLastEditedInfoForCharacIdsNull( $value){
      return $this->_set(1012, $value);
    }
  }
}
