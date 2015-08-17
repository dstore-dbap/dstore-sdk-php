<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonProperties_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetPersonProperties_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_id_list = null;
    
    /**  @var boolean */
    public $characteristic_id_list_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $date_format = null;
    
    /**  @var boolean */
    public $date_format_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_charac_category_id = null;
    
    /**  @var boolean */
    public $person_charac_category_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $include_creation_date_and_time = null;
    
    /**  @var boolean */
    public $include_creation_date_and_time_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $include_person_charac_category_id = null;
    
    /**  @var boolean */
    public $include_person_charac_category_id_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $date_and_time = null;
    
    /**  @var boolean */
    public $date_and_time_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_actual_properties = null;
    
    /**  @var boolean */
    public $get_actual_properties_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_person_type_id_only = null;
    
    /**  @var boolean */
    public $get_person_type_id_only_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $ignore_bad_person_ids_in_one_id = null;
    
    /**  @var boolean */
    public $ignore_bad_person_ids_in_one_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $only_rows_for_existing_properties = null;
    
    /**  @var boolean */
    public $only_rows_for_existing_properties_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_details_info = null;
    
    /**  @var boolean */
    public $get_details_info_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonProperties_Ad.Parameters');

      // OPTIONAL MESSAGE person_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_id_list = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "characteristic_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_list_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "characteristic_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE date_format = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "date_format";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL date_format_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "date_format_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_charac_category_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "person_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_charac_category_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "person_charac_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_creation_date_and_time = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "include_creation_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_creation_date_and_time_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "include_creation_date_and_time_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_person_charac_category_id = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "include_person_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_person_charac_category_id_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "include_person_charac_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE date_and_time = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL date_and_time_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "date_and_time_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_actual_properties = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "get_actual_properties";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_actual_properties_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "get_actual_properties_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_person_type_id_only = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "get_person_type_id_only";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_person_type_id_only_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "get_person_type_id_only_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE ignore_bad_person_ids_in_one_id = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "ignore_bad_person_ids_in_one_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL ignore_bad_person_ids_in_one_id_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "ignore_bad_person_ids_in_one_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_rows_for_existing_properties = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "only_rows_for_existing_properties";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_rows_for_existing_properties_null = 1012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1012;
      $f->name      = "only_rows_for_existing_properties_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_details_info = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "get_details_info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_details_info_null = 1013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1013;
      $f->name      = "get_details_info_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(2);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <characteristic_id_list> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList(){
      return $this->_has(3);
    }
    
    /**
     * Clear <characteristic_id_list> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearCharacteristicIdList(){
      return $this->_clear(3);
    }
    
    /**
     * Get <characteristic_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicIdList(){
      return $this->_get(3);
    }
    
    /**
     * Set <characteristic_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setCharacteristicIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <characteristic_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdListNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <characteristic_id_list_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearCharacteristicIdListNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <characteristic_id_list_null> value
     *
     * @return boolean
     */
    public function getCharacteristicIdListNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <characteristic_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setCharacteristicIdListNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <date_format> has a value
     *
     * @return boolean
     */
    public function hasDateFormat(){
      return $this->_has(4);
    }
    
    /**
     * Clear <date_format> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearDateFormat(){
      return $this->_clear(4);
    }
    
    /**
     * Get <date_format> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDateFormat(){
      return $this->_get(4);
    }
    
    /**
     * Set <date_format> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setDateFormat(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <date_format_null> has a value
     *
     * @return boolean
     */
    public function hasDateFormatNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <date_format_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearDateFormatNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <date_format_null> value
     *
     * @return boolean
     */
    public function getDateFormatNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <date_format_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setDateFormatNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <person_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <person_charac_category_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearPersonCharacCategoryId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <person_charac_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacCategoryId(){
      return $this->_get(5);
    }
    
    /**
     * Set <person_charac_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setPersonCharacCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <person_charac_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <person_charac_category_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearPersonCharacCategoryIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <person_charac_category_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacCategoryIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <person_charac_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setPersonCharacCategoryIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <include_creation_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasIncludeCreationDateAndTime(){
      return $this->_has(6);
    }
    
    /**
     * Clear <include_creation_date_and_time> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearIncludeCreationDateAndTime(){
      return $this->_clear(6);
    }
    
    /**
     * Get <include_creation_date_and_time> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludeCreationDateAndTime(){
      return $this->_get(6);
    }
    
    /**
     * Set <include_creation_date_and_time> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setIncludeCreationDateAndTime(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <include_creation_date_and_time_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeCreationDateAndTimeNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <include_creation_date_and_time_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearIncludeCreationDateAndTimeNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <include_creation_date_and_time_null> value
     *
     * @return boolean
     */
    public function getIncludeCreationDateAndTimeNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <include_creation_date_and_time_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setIncludeCreationDateAndTimeNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <include_person_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasIncludePersonCharacCategoryId(){
      return $this->_has(7);
    }
    
    /**
     * Clear <include_person_charac_category_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearIncludePersonCharacCategoryId(){
      return $this->_clear(7);
    }
    
    /**
     * Get <include_person_charac_category_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludePersonCharacCategoryId(){
      return $this->_get(7);
    }
    
    /**
     * Set <include_person_charac_category_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setIncludePersonCharacCategoryId(\dstore\engine\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <include_person_charac_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasIncludePersonCharacCategoryIdNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <include_person_charac_category_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearIncludePersonCharacCategoryIdNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <include_person_charac_category_id_null> value
     *
     * @return boolean
     */
    public function getIncludePersonCharacCategoryIdNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <include_person_charac_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setIncludePersonCharacCategoryIdNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <date_and_time> has a value
     *
     * @return boolean
     */
    public function hasDateAndTime(){
      return $this->_has(8);
    }
    
    /**
     * Clear <date_and_time> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearDateAndTime(){
      return $this->_clear(8);
    }
    
    /**
     * Get <date_and_time> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getDateAndTime(){
      return $this->_get(8);
    }
    
    /**
     * Set <date_and_time> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setDateAndTime(\dstore\engine\values\timestampValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <date_and_time_null> has a value
     *
     * @return boolean
     */
    public function hasDateAndTimeNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <date_and_time_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearDateAndTimeNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <date_and_time_null> value
     *
     * @return boolean
     */
    public function getDateAndTimeNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <date_and_time_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setDateAndTimeNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <get_actual_properties> has a value
     *
     * @return boolean
     */
    public function hasGetActualProperties(){
      return $this->_has(9);
    }
    
    /**
     * Clear <get_actual_properties> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearGetActualProperties(){
      return $this->_clear(9);
    }
    
    /**
     * Get <get_actual_properties> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetActualProperties(){
      return $this->_get(9);
    }
    
    /**
     * Set <get_actual_properties> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setGetActualProperties(\dstore\engine\values\booleanValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <get_actual_properties_null> has a value
     *
     * @return boolean
     */
    public function hasGetActualPropertiesNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <get_actual_properties_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearGetActualPropertiesNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <get_actual_properties_null> value
     *
     * @return boolean
     */
    public function getGetActualPropertiesNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <get_actual_properties_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setGetActualPropertiesNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <get_person_type_id_only> has a value
     *
     * @return boolean
     */
    public function hasGetPersonTypeIdOnly(){
      return $this->_has(10);
    }
    
    /**
     * Clear <get_person_type_id_only> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearGetPersonTypeIdOnly(){
      return $this->_clear(10);
    }
    
    /**
     * Get <get_person_type_id_only> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetPersonTypeIdOnly(){
      return $this->_get(10);
    }
    
    /**
     * Set <get_person_type_id_only> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setGetPersonTypeIdOnly(\dstore\engine\values\booleanValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <get_person_type_id_only_null> has a value
     *
     * @return boolean
     */
    public function hasGetPersonTypeIdOnlyNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <get_person_type_id_only_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearGetPersonTypeIdOnlyNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <get_person_type_id_only_null> value
     *
     * @return boolean
     */
    public function getGetPersonTypeIdOnlyNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <get_person_type_id_only_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setGetPersonTypeIdOnlyNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <ignore_bad_person_ids_in_one_id> has a value
     *
     * @return boolean
     */
    public function hasIgnoreBadPersonIdsInOneId(){
      return $this->_has(11);
    }
    
    /**
     * Clear <ignore_bad_person_ids_in_one_id> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearIgnoreBadPersonIdsInOneId(){
      return $this->_clear(11);
    }
    
    /**
     * Get <ignore_bad_person_ids_in_one_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIgnoreBadPersonIdsInOneId(){
      return $this->_get(11);
    }
    
    /**
     * Set <ignore_bad_person_ids_in_one_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setIgnoreBadPersonIdsInOneId(\dstore\engine\values\booleanValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <ignore_bad_person_ids_in_one_id_null> has a value
     *
     * @return boolean
     */
    public function hasIgnoreBadPersonIdsInOneIdNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <ignore_bad_person_ids_in_one_id_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearIgnoreBadPersonIdsInOneIdNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <ignore_bad_person_ids_in_one_id_null> value
     *
     * @return boolean
     */
    public function getIgnoreBadPersonIdsInOneIdNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <ignore_bad_person_ids_in_one_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setIgnoreBadPersonIdsInOneIdNull( $value){
      return $this->_set(1011, $value);
    }
    
    /**
     * Check if <only_rows_for_existing_properties> has a value
     *
     * @return boolean
     */
    public function hasOnlyRowsForExistingProperties(){
      return $this->_has(12);
    }
    
    /**
     * Clear <only_rows_for_existing_properties> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearOnlyRowsForExistingProperties(){
      return $this->_clear(12);
    }
    
    /**
     * Get <only_rows_for_existing_properties> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getOnlyRowsForExistingProperties(){
      return $this->_get(12);
    }
    
    /**
     * Set <only_rows_for_existing_properties> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setOnlyRowsForExistingProperties(\dstore\engine\values\booleanValue $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <only_rows_for_existing_properties_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyRowsForExistingPropertiesNull(){
      return $this->_has(1012);
    }
    
    /**
     * Clear <only_rows_for_existing_properties_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearOnlyRowsForExistingPropertiesNull(){
      return $this->_clear(1012);
    }
    
    /**
     * Get <only_rows_for_existing_properties_null> value
     *
     * @return boolean
     */
    public function getOnlyRowsForExistingPropertiesNull(){
      return $this->_get(1012);
    }
    
    /**
     * Set <only_rows_for_existing_properties_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setOnlyRowsForExistingPropertiesNull( $value){
      return $this->_set(1012, $value);
    }
    
    /**
     * Check if <get_details_info> has a value
     *
     * @return boolean
     */
    public function hasGetDetailsInfo(){
      return $this->_has(13);
    }
    
    /**
     * Clear <get_details_info> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearGetDetailsInfo(){
      return $this->_clear(13);
    }
    
    /**
     * Get <get_details_info> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetDetailsInfo(){
      return $this->_get(13);
    }
    
    /**
     * Set <get_details_info> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setGetDetailsInfo(\dstore\engine\values\booleanValue $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <get_details_info_null> has a value
     *
     * @return boolean
     */
    public function hasGetDetailsInfoNull(){
      return $this->_has(1013);
    }
    
    /**
     * Clear <get_details_info_null> value
     *
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function clearGetDetailsInfoNull(){
      return $this->_clear(1013);
    }
    
    /**
     * Get <get_details_info_null> value
     *
     * @return boolean
     */
    public function getGetDetailsInfoNull(){
      return $this->_get(1013);
    }
    
    /**
     * Set <get_details_info_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPersonProperties_Ad\Parameters
     */
    public function setGetDetailsInfoNull( $value){
      return $this->_set(1013, $value);
    }
  }
}

