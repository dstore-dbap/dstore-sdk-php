<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_ModifyPersonData_Ad.proto
//   Date: 2016-05-19 08:07:55

namespace dstore\engine\pm_ModifyPersonData_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $characteristic_id_list = null;
    
    /**  @var boolean */
    public $characteristic_id_list_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $value_list = null;
    
    /**  @var boolean */
    public $value_list_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_charac_category_id = null;
    
    /**  @var boolean */
    public $person_charac_category_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete_charac_category_id = null;
    
    /**  @var boolean */
    public $delete_charac_category_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $result_in_error_id_list = null;
    
    /**  @var boolean */
    public $result_in_error_id_list_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $value_ids_for_predefined_characs = null;
    
    /**  @var boolean */
    public $value_ids_for_predefined_characs_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $change_all_or_nothing = null;
    
    /**  @var boolean */
    public $change_all_or_nothing_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $separator_in_value_list = null;
    
    /**  @var boolean */
    public $separator_in_value_list_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_ModifyPersonData_Ad.Parameters');

      // OPTIONAL MESSAGE person_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_id_list = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "characteristic_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_list_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "characteristic_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_list = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "value_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_list_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "value_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_charac_category_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "person_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_charac_category_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "person_charac_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_charac_category_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "delete_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_charac_category_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "delete_charac_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE result_in_error_id_list = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "result_in_error_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL result_in_error_id_list_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "result_in_error_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_ids_for_predefined_characs = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "value_ids_for_predefined_characs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_ids_for_predefined_characs_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "value_ids_for_predefined_characs_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE change_all_or_nothing = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "change_all_or_nothing";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL change_all_or_nothing_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "change_all_or_nothing_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "country_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_value_list = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "separator_in_value_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_value_list_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "separator_in_value_list_null";
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
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setPersonId(\dstore\values\integerValue $value){
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
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
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
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setPersonIdNull( $value){
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
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearCharacteristicIdList(){
      return $this->_clear(2);
    }
    
    /**
     * Get <characteristic_id_list> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCharacteristicIdList(){
      return $this->_get(2);
    }
    
    /**
     * Set <characteristic_id_list> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setCharacteristicIdList(\dstore\values\stringValue $value){
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
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
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
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setCharacteristicIdListNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <value_list> has a value
     *
     * @return boolean
     */
    public function hasValueList(){
      return $this->_has(3);
    }
    
    /**
     * Clear <value_list> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearValueList(){
      return $this->_clear(3);
    }
    
    /**
     * Get <value_list> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValueList(){
      return $this->_get(3);
    }
    
    /**
     * Set <value_list> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setValueList(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <value_list_null> has a value
     *
     * @return boolean
     */
    public function hasValueListNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <value_list_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearValueListNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <value_list_null> value
     *
     * @return boolean
     */
    public function getValueListNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <value_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setValueListNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <person_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <person_charac_category_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearPersonCharacCategoryId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <person_charac_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonCharacCategoryId(){
      return $this->_get(4);
    }
    
    /**
     * Set <person_charac_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setPersonCharacCategoryId(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <person_charac_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacCategoryIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <person_charac_category_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearPersonCharacCategoryIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <person_charac_category_id_null> value
     *
     * @return boolean
     */
    public function getPersonCharacCategoryIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <person_charac_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setPersonCharacCategoryIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <delete_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasDeleteCharacCategoryId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <delete_charac_category_id> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearDeleteCharacCategoryId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <delete_charac_category_id> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDeleteCharacCategoryId(){
      return $this->_get(5);
    }
    
    /**
     * Set <delete_charac_category_id> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setDeleteCharacCategoryId(\dstore\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <delete_charac_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteCharacCategoryIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <delete_charac_category_id_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearDeleteCharacCategoryIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <delete_charac_category_id_null> value
     *
     * @return boolean
     */
    public function getDeleteCharacCategoryIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <delete_charac_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setDeleteCharacCategoryIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <result_in_error_id_list> has a value
     *
     * @return boolean
     */
    public function hasResultInErrorIdList(){
      return $this->_has(6);
    }
    
    /**
     * Clear <result_in_error_id_list> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearResultInErrorIdList(){
      return $this->_clear(6);
    }
    
    /**
     * Get <result_in_error_id_list> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getResultInErrorIdList(){
      return $this->_get(6);
    }
    
    /**
     * Set <result_in_error_id_list> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setResultInErrorIdList(\dstore\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <result_in_error_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasResultInErrorIdListNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <result_in_error_id_list_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearResultInErrorIdListNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <result_in_error_id_list_null> value
     *
     * @return boolean
     */
    public function getResultInErrorIdListNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <result_in_error_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setResultInErrorIdListNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <value_ids_for_predefined_characs> has a value
     *
     * @return boolean
     */
    public function hasValueIdsForPredefinedCharacs(){
      return $this->_has(7);
    }
    
    /**
     * Clear <value_ids_for_predefined_characs> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearValueIdsForPredefinedCharacs(){
      return $this->_clear(7);
    }
    
    /**
     * Get <value_ids_for_predefined_characs> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getValueIdsForPredefinedCharacs(){
      return $this->_get(7);
    }
    
    /**
     * Set <value_ids_for_predefined_characs> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setValueIdsForPredefinedCharacs(\dstore\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <value_ids_for_predefined_characs_null> has a value
     *
     * @return boolean
     */
    public function hasValueIdsForPredefinedCharacsNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <value_ids_for_predefined_characs_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearValueIdsForPredefinedCharacsNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <value_ids_for_predefined_characs_null> value
     *
     * @return boolean
     */
    public function getValueIdsForPredefinedCharacsNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <value_ids_for_predefined_characs_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setValueIdsForPredefinedCharacsNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <change_all_or_nothing> has a value
     *
     * @return boolean
     */
    public function hasChangeAllOrNothing(){
      return $this->_has(8);
    }
    
    /**
     * Clear <change_all_or_nothing> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearChangeAllOrNothing(){
      return $this->_clear(8);
    }
    
    /**
     * Get <change_all_or_nothing> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getChangeAllOrNothing(){
      return $this->_get(8);
    }
    
    /**
     * Set <change_all_or_nothing> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setChangeAllOrNothing(\dstore\values\booleanValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <change_all_or_nothing_null> has a value
     *
     * @return boolean
     */
    public function hasChangeAllOrNothingNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <change_all_or_nothing_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearChangeAllOrNothingNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <change_all_or_nothing_null> value
     *
     * @return boolean
     */
    public function getChangeAllOrNothingNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <change_all_or_nothing_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setChangeAllOrNothingNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(9);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearCountry(){
      return $this->_clear(9);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCountry(){
      return $this->_get(9);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setCountry(\dstore\values\stringValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <separator_in_value_list> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInValueList(){
      return $this->_has(10);
    }
    
    /**
     * Clear <separator_in_value_list> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearSeparatorInValueList(){
      return $this->_clear(10);
    }
    
    /**
     * Get <separator_in_value_list> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSeparatorInValueList(){
      return $this->_get(10);
    }
    
    /**
     * Set <separator_in_value_list> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setSeparatorInValueList(\dstore\values\stringValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <separator_in_value_list_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInValueListNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <separator_in_value_list_null> value
     *
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function clearSeparatorInValueListNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <separator_in_value_list_null> value
     *
     * @return boolean
     */
    public function getSeparatorInValueListNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <separator_in_value_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_ModifyPersonData_Ad\Parameters
     */
    public function setSeparatorInValueListNull( $value){
      return $this->_set(1010, $value);
    }
  }
}

