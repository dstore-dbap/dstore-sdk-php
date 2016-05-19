<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetNodeCharacteristics_Ad.proto
//   Date: 2016-05-19 08:07:42

namespace dstore\engine\im_GetNodeCharacteristics_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\booleanValue */
    public $deleteable = null;
    
    /**  @var \dstore\values\integerValue */
    public $predecessor_category_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $characteristic_description = null;
    
    /**  @var \dstore\values\stringValue */
    public $value_language = null;
    
    /**  @var \dstore\values\integerValue */
    public $field_type_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $sort_no = null;
    
    /**  @var \dstore\values\integerValue */
    public $keep_properties_history_in_hours = null;
    
    /**  @var \dstore\values\booleanValue */
    public $predefined_values = null;
    
    /**  @var \dstore\values\integerValue */
    public $node_charac_category_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $has_currency_unit_vals_are_net_vals = null;
    
    /**  @var \dstore\values\integerValue */
    public $category_sort_no = null;
    
    /**  @var \dstore\values\integerValue */
    public $unit_id = null;
    
    /**  @var \dstore\values\booleanValue */
    public $is_unique = null;
    
    /**  @var \dstore\values\integerValue */
    public $value_language_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $category_description = null;
    
    /**  @var \dstore\values\booleanValue */
    public $recursive = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetNodeCharacteristics_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE deleteable = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "deleteable";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predecessor_category_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "predecessor_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_description = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "characteristic_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_language = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "value_language";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE keep_properties_history_in_hours = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "keep_properties_history_in_hours";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE predefined_values = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "predefined_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_charac_category_id = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "node_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE has_currency_unit_vals_are_net_vals = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "has_currency_unit_vals_are_net_vals";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE category_sort_no = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "category_sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unit_id = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "unit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_unique = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "is_unique";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_language_id = 10015
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10015;
      $f->name      = "value_language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE category_description = 10016
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10016;
      $f->name      = "category_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE recursive = 10017
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10017;
      $f->name      = "recursive";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <row_id> has a value
     *
     * @return boolean
     */
    public function hasRowId(){
      return $this->_has(10000);
    }
    
    /**
     * Clear <row_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearRowId(){
      return $this->_clear(10000);
    }
    
    /**
     * Get <row_id> value
     *
     * @return int
     */
    public function getRowId(){
      return $this->_get(10000);
    }
    
    /**
     * Set <row_id> value
     *
     * @param int $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <deleteable> has a value
     *
     * @return boolean
     */
    public function hasDeleteable(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <deleteable> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearDeleteable(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <deleteable> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDeleteable(){
      return $this->_get(10001);
    }
    
    /**
     * Set <deleteable> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setDeleteable(\dstore\values\booleanValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <predecessor_category_id> has a value
     *
     * @return boolean
     */
    public function hasPredecessorCategoryId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <predecessor_category_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearPredecessorCategoryId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <predecessor_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPredecessorCategoryId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <predecessor_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setPredecessorCategoryId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <characteristic_description> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicDescription(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <characteristic_description> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearCharacteristicDescription(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <characteristic_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCharacteristicDescription(){
      return $this->_get(10003);
    }
    
    /**
     * Set <characteristic_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setCharacteristicDescription(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <value_language> has a value
     *
     * @return boolean
     */
    public function hasValueLanguage(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <value_language> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearValueLanguage(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <value_language> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValueLanguage(){
      return $this->_get(10004);
    }
    
    /**
     * Set <value_language> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setValueLanguage(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <field_type_id> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <field_type_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearFieldTypeId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <field_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getFieldTypeId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <field_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setFieldTypeId(\dstore\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setNodeCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearSortNo(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(10007);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setSortNo(\dstore\values\integerValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <keep_properties_history_in_hours> has a value
     *
     * @return boolean
     */
    public function hasKeepPropertiesHistoryInHours(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <keep_properties_history_in_hours> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearKeepPropertiesHistoryInHours(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <keep_properties_history_in_hours> value
     *
     * @return \dstore\values\integerValue
     */
    public function getKeepPropertiesHistoryInHours(){
      return $this->_get(10008);
    }
    
    /**
     * Set <keep_properties_history_in_hours> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setKeepPropertiesHistoryInHours(\dstore\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <predefined_values> has a value
     *
     * @return boolean
     */
    public function hasPredefinedValues(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <predefined_values> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearPredefinedValues(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <predefined_values> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getPredefinedValues(){
      return $this->_get(10009);
    }
    
    /**
     * Set <predefined_values> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setPredefinedValues(\dstore\values\booleanValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <node_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacCategoryId(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <node_charac_category_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearNodeCharacCategoryId(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <node_charac_category_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getNodeCharacCategoryId(){
      return $this->_get(10010);
    }
    
    /**
     * Set <node_charac_category_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setNodeCharacCategoryId(\dstore\values\integerValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <has_currency_unit_vals_are_net_vals> has a value
     *
     * @return boolean
     */
    public function hasHasCurrencyUnitValsAreNetVals(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <has_currency_unit_vals_are_net_vals> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearHasCurrencyUnitValsAreNetVals(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <has_currency_unit_vals_are_net_vals> value
     *
     * @return \dstore\values\integerValue
     */
    public function getHasCurrencyUnitValsAreNetVals(){
      return $this->_get(10011);
    }
    
    /**
     * Set <has_currency_unit_vals_are_net_vals> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setHasCurrencyUnitValsAreNetVals(\dstore\values\integerValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <category_sort_no> has a value
     *
     * @return boolean
     */
    public function hasCategorySortNo(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <category_sort_no> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearCategorySortNo(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <category_sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCategorySortNo(){
      return $this->_get(10012);
    }
    
    /**
     * Set <category_sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setCategorySortNo(\dstore\values\integerValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <unit_id> has a value
     *
     * @return boolean
     */
    public function hasUnitId(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <unit_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearUnitId(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <unit_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getUnitId(){
      return $this->_get(10013);
    }
    
    /**
     * Set <unit_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setUnitId(\dstore\values\integerValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <is_unique> has a value
     *
     * @return boolean
     */
    public function hasIsUnique(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <is_unique> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearIsUnique(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <is_unique> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getIsUnique(){
      return $this->_get(10014);
    }
    
    /**
     * Set <is_unique> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setIsUnique(\dstore\values\booleanValue $value){
      return $this->_set(10014, $value);
    }
    
    /**
     * Check if <value_language_id> has a value
     *
     * @return boolean
     */
    public function hasValueLanguageId(){
      return $this->_has(10015);
    }
    
    /**
     * Clear <value_language_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearValueLanguageId(){
      return $this->_clear(10015);
    }
    
    /**
     * Get <value_language_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getValueLanguageId(){
      return $this->_get(10015);
    }
    
    /**
     * Set <value_language_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setValueLanguageId(\dstore\values\integerValue $value){
      return $this->_set(10015, $value);
    }
    
    /**
     * Check if <category_description> has a value
     *
     * @return boolean
     */
    public function hasCategoryDescription(){
      return $this->_has(10016);
    }
    
    /**
     * Clear <category_description> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearCategoryDescription(){
      return $this->_clear(10016);
    }
    
    /**
     * Get <category_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCategoryDescription(){
      return $this->_get(10016);
    }
    
    /**
     * Set <category_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setCategoryDescription(\dstore\values\stringValue $value){
      return $this->_set(10016, $value);
    }
    
    /**
     * Check if <recursive> has a value
     *
     * @return boolean
     */
    public function hasRecursive(){
      return $this->_has(10017);
    }
    
    /**
     * Clear <recursive> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function clearRecursive(){
      return $this->_clear(10017);
    }
    
    /**
     * Get <recursive> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getRecursive(){
      return $this->_get(10017);
    }
    
    /**
     * Set <recursive> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Ad\Response\Row
     */
    public function setRecursive(\dstore\values\booleanValue $value){
      return $this->_set(10017, $value);
    }
  }
}

