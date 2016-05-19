<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_InsertNewPerson_Ad.proto
//   Date: 2016-05-19 08:07:55

namespace dstore\engine\pm_InsertNewPerson_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $characteristic_id_list1 = null;
    
    /**  @var boolean */
    public $characteristic_id_list1_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $value_list1 = null;
    
    /**  @var boolean */
    public $value_list1_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $characteristic_id_list2 = null;
    
    /**  @var boolean */
    public $characteristic_id_list2_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $value_list2 = null;
    
    /**  @var boolean */
    public $value_list2_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_charac_category_id = null;
    
    /**  @var boolean */
    public $person_charac_category_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $result_in_error_id_list = null;
    
    /**  @var boolean */
    public $result_in_error_id_list_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $value_ids_for_predefined_characs = null;
    
    /**  @var boolean */
    public $value_ids_for_predefined_characs_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $cancel_on_error = null;
    
    /**  @var boolean */
    public $cancel_on_error_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $separator_in_lists = null;
    
    /**  @var boolean */
    public $separator_in_lists_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_InsertNewPerson_Ad.Parameters');

      // OPTIONAL MESSAGE characteristic_id_list1 = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "characteristic_id_list1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_list1_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "characteristic_id_list1_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_list1 = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value_list1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_list1_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "value_list1_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_id_list2 = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "characteristic_id_list2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_list2_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "characteristic_id_list2_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_list2 = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "value_list2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL value_list2_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "value_list2_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_charac_category_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "person_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_charac_category_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "person_charac_category_id_null";
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

      // OPTIONAL MESSAGE cancel_on_error = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "cancel_on_error";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL cancel_on_error_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "cancel_on_error_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_lists = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "separator_in_lists";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_lists_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "separator_in_lists_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "country_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <characteristic_id_list1> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList1(){
      return $this->_has(1);
    }
    
    /**
     * Clear <characteristic_id_list1> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearCharacteristicIdList1(){
      return $this->_clear(1);
    }
    
    /**
     * Get <characteristic_id_list1> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCharacteristicIdList1(){
      return $this->_get(1);
    }
    
    /**
     * Set <characteristic_id_list1> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setCharacteristicIdList1(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <characteristic_id_list1_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList1Null(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <characteristic_id_list1_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearCharacteristicIdList1Null(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <characteristic_id_list1_null> value
     *
     * @return boolean
     */
    public function getCharacteristicIdList1Null(){
      return $this->_get(1001);
    }
    
    /**
     * Set <characteristic_id_list1_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setCharacteristicIdList1Null( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <value_list1> has a value
     *
     * @return boolean
     */
    public function hasValueList1(){
      return $this->_has(2);
    }
    
    /**
     * Clear <value_list1> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearValueList1(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value_list1> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValueList1(){
      return $this->_get(2);
    }
    
    /**
     * Set <value_list1> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setValueList1(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <value_list1_null> has a value
     *
     * @return boolean
     */
    public function hasValueList1Null(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <value_list1_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearValueList1Null(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <value_list1_null> value
     *
     * @return boolean
     */
    public function getValueList1Null(){
      return $this->_get(1002);
    }
    
    /**
     * Set <value_list1_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setValueList1Null( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <characteristic_id_list2> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList2(){
      return $this->_has(3);
    }
    
    /**
     * Clear <characteristic_id_list2> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearCharacteristicIdList2(){
      return $this->_clear(3);
    }
    
    /**
     * Get <characteristic_id_list2> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCharacteristicIdList2(){
      return $this->_get(3);
    }
    
    /**
     * Set <characteristic_id_list2> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setCharacteristicIdList2(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <characteristic_id_list2_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdList2Null(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <characteristic_id_list2_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearCharacteristicIdList2Null(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <characteristic_id_list2_null> value
     *
     * @return boolean
     */
    public function getCharacteristicIdList2Null(){
      return $this->_get(1003);
    }
    
    /**
     * Set <characteristic_id_list2_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setCharacteristicIdList2Null( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <value_list2> has a value
     *
     * @return boolean
     */
    public function hasValueList2(){
      return $this->_has(4);
    }
    
    /**
     * Clear <value_list2> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearValueList2(){
      return $this->_clear(4);
    }
    
    /**
     * Get <value_list2> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValueList2(){
      return $this->_get(4);
    }
    
    /**
     * Set <value_list2> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setValueList2(\dstore\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <value_list2_null> has a value
     *
     * @return boolean
     */
    public function hasValueList2Null(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <value_list2_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearValueList2Null(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <value_list2_null> value
     *
     * @return boolean
     */
    public function getValueList2Null(){
      return $this->_get(1004);
    }
    
    /**
     * Set <value_list2_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setValueList2Null( $value){
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearPersonCharacCategoryId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <person_charac_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonCharacCategoryId(){
      return $this->_get(5);
    }
    
    /**
     * Set <person_charac_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setPersonCharacCategoryId(\dstore\values\integerValue $value){
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setPersonCharacCategoryIdNull( $value){
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
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
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setValueIdsForPredefinedCharacsNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <cancel_on_error> has a value
     *
     * @return boolean
     */
    public function hasCancelOnError(){
      return $this->_has(8);
    }
    
    /**
     * Clear <cancel_on_error> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearCancelOnError(){
      return $this->_clear(8);
    }
    
    /**
     * Get <cancel_on_error> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getCancelOnError(){
      return $this->_get(8);
    }
    
    /**
     * Set <cancel_on_error> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setCancelOnError(\dstore\values\booleanValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <cancel_on_error_null> has a value
     *
     * @return boolean
     */
    public function hasCancelOnErrorNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <cancel_on_error_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearCancelOnErrorNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <cancel_on_error_null> value
     *
     * @return boolean
     */
    public function getCancelOnErrorNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <cancel_on_error_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setCancelOnErrorNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <separator_in_lists> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInLists(){
      return $this->_has(9);
    }
    
    /**
     * Clear <separator_in_lists> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearSeparatorInLists(){
      return $this->_clear(9);
    }
    
    /**
     * Get <separator_in_lists> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSeparatorInLists(){
      return $this->_get(9);
    }
    
    /**
     * Set <separator_in_lists> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setSeparatorInLists(\dstore\values\stringValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <separator_in_lists_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInListsNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <separator_in_lists_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearSeparatorInListsNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <separator_in_lists_null> value
     *
     * @return boolean
     */
    public function getSeparatorInListsNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <separator_in_lists_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setSeparatorInListsNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(10);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(10);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(10);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setPersonTypeId(\dstore\values\integerValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(11);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearCountry(){
      return $this->_clear(11);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCountry(){
      return $this->_get(11);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setCountry(\dstore\values\stringValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_InsertNewPerson_Ad\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1011, $value);
    }
  }
}

