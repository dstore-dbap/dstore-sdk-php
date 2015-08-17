<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_GetPostingsOfOnePerson_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\fo_GetPostingsOfOnePerson_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $forum_id = null;
    
    /**  @var boolean */
    public $forum_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $from_date = null;
    
    /**  @var boolean */
    public $from_date_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $to_date = null;
    
    /**  @var boolean */
    public $to_date_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $include_bodies = null;
    
    /**  @var boolean */
    public $include_bodies_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $row_count = null;
    
    /**  @var boolean */
    public $row_count_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $include_additional_infos = null;
    
    /**  @var boolean */
    public $include_additional_infos_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $order_criteria = null;
    
    /**  @var boolean */
    public $order_criteria_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visibility = null;
    
    /**  @var boolean */
    public $visibility_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_own_not_approved_postings = null;
    
    /**  @var boolean */
    public $get_own_not_approved_postings_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $separator_in_ident_vals = null;
    
    /**  @var boolean */
    public $separator_in_ident_vals_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_GetPostingsOfOnePerson_Pu.Parameters');

      // OPTIONAL MESSAGE person_identification_values = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unique_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE forum_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "forum_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL forum_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "forum_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE from_date = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "from_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_date_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "from_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_date = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "to_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_date_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "to_date_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_bodies = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "include_bodies";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_bodies_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "include_bodies_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE row_count = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "row_count";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL row_count_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "row_count_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_additional_infos = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "include_additional_infos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_additional_infos_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "include_additional_infos_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_criteria = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "order_criteria";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_criteria_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "order_criteria_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visibility = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "visibility";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL visibility_null = 1012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1012;
      $f->name      = "visibility_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_own_not_approved_postings = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "get_own_not_approved_postings";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_own_not_approved_postings_null = 1013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1013;
      $f->name      = "get_own_not_approved_postings_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_ident_vals = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "separator_in_ident_vals";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_ident_vals_null = 1014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1014;
      $f->name      = "separator_in_ident_vals_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(3);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setUniqueId(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <forum_id> has a value
     *
     * @return boolean
     */
    public function hasForumId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <forum_id> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearForumId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <forum_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getForumId(){
      return $this->_get(4);
    }
    
    /**
     * Set <forum_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setForumId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <forum_id_null> has a value
     *
     * @return boolean
     */
    public function hasForumIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <forum_id_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearForumIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <forum_id_null> value
     *
     * @return boolean
     */
    public function getForumIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <forum_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setForumIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(5);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <from_date> has a value
     *
     * @return boolean
     */
    public function hasFromDate(){
      return $this->_has(6);
    }
    
    /**
     * Clear <from_date> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearFromDate(){
      return $this->_clear(6);
    }
    
    /**
     * Get <from_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getFromDate(){
      return $this->_get(6);
    }
    
    /**
     * Set <from_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setFromDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <from_date_null> has a value
     *
     * @return boolean
     */
    public function hasFromDateNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <from_date_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearFromDateNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <from_date_null> value
     *
     * @return boolean
     */
    public function getFromDateNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <from_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setFromDateNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <to_date> has a value
     *
     * @return boolean
     */
    public function hasToDate(){
      return $this->_has(7);
    }
    
    /**
     * Clear <to_date> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearToDate(){
      return $this->_clear(7);
    }
    
    /**
     * Get <to_date> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getToDate(){
      return $this->_get(7);
    }
    
    /**
     * Set <to_date> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setToDate(\dstore\engine\values\timestampValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <to_date_null> has a value
     *
     * @return boolean
     */
    public function hasToDateNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <to_date_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearToDateNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <to_date_null> value
     *
     * @return boolean
     */
    public function getToDateNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <to_date_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setToDateNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <include_bodies> has a value
     *
     * @return boolean
     */
    public function hasIncludeBodies(){
      return $this->_has(8);
    }
    
    /**
     * Clear <include_bodies> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearIncludeBodies(){
      return $this->_clear(8);
    }
    
    /**
     * Get <include_bodies> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludeBodies(){
      return $this->_get(8);
    }
    
    /**
     * Set <include_bodies> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setIncludeBodies(\dstore\engine\values\booleanValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <include_bodies_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeBodiesNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <include_bodies_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearIncludeBodiesNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <include_bodies_null> value
     *
     * @return boolean
     */
    public function getIncludeBodiesNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <include_bodies_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setIncludeBodiesNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <row_count> has a value
     *
     * @return boolean
     */
    public function hasRowCount(){
      return $this->_has(9);
    }
    
    /**
     * Clear <row_count> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearRowCount(){
      return $this->_clear(9);
    }
    
    /**
     * Get <row_count> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRowCount(){
      return $this->_get(9);
    }
    
    /**
     * Set <row_count> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setRowCount(\dstore\engine\values\integerValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <row_count_null> has a value
     *
     * @return boolean
     */
    public function hasRowCountNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <row_count_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearRowCountNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <row_count_null> value
     *
     * @return boolean
     */
    public function getRowCountNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <row_count_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setRowCountNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <include_additional_infos> has a value
     *
     * @return boolean
     */
    public function hasIncludeAdditionalInfos(){
      return $this->_has(10);
    }
    
    /**
     * Clear <include_additional_infos> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearIncludeAdditionalInfos(){
      return $this->_clear(10);
    }
    
    /**
     * Get <include_additional_infos> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludeAdditionalInfos(){
      return $this->_get(10);
    }
    
    /**
     * Set <include_additional_infos> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setIncludeAdditionalInfos(\dstore\engine\values\booleanValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <include_additional_infos_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeAdditionalInfosNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <include_additional_infos_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearIncludeAdditionalInfosNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <include_additional_infos_null> value
     *
     * @return boolean
     */
    public function getIncludeAdditionalInfosNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <include_additional_infos_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setIncludeAdditionalInfosNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <order_criteria> has a value
     *
     * @return boolean
     */
    public function hasOrderCriteria(){
      return $this->_has(11);
    }
    
    /**
     * Clear <order_criteria> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearOrderCriteria(){
      return $this->_clear(11);
    }
    
    /**
     * Get <order_criteria> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOrderCriteria(){
      return $this->_get(11);
    }
    
    /**
     * Set <order_criteria> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setOrderCriteria(\dstore\engine\values\integerValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <order_criteria_null> has a value
     *
     * @return boolean
     */
    public function hasOrderCriteriaNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <order_criteria_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearOrderCriteriaNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <order_criteria_null> value
     *
     * @return boolean
     */
    public function getOrderCriteriaNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <order_criteria_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setOrderCriteriaNull( $value){
      return $this->_set(1011, $value);
    }
    
    /**
     * Check if <visibility> has a value
     *
     * @return boolean
     */
    public function hasVisibility(){
      return $this->_has(12);
    }
    
    /**
     * Clear <visibility> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearVisibility(){
      return $this->_clear(12);
    }
    
    /**
     * Get <visibility> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisibility(){
      return $this->_get(12);
    }
    
    /**
     * Set <visibility> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setVisibility(\dstore\engine\values\integerValue $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <visibility_null> has a value
     *
     * @return boolean
     */
    public function hasVisibilityNull(){
      return $this->_has(1012);
    }
    
    /**
     * Clear <visibility_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearVisibilityNull(){
      return $this->_clear(1012);
    }
    
    /**
     * Get <visibility_null> value
     *
     * @return boolean
     */
    public function getVisibilityNull(){
      return $this->_get(1012);
    }
    
    /**
     * Set <visibility_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setVisibilityNull( $value){
      return $this->_set(1012, $value);
    }
    
    /**
     * Check if <get_own_not_approved_postings> has a value
     *
     * @return boolean
     */
    public function hasGetOwnNotApprovedPostings(){
      return $this->_has(13);
    }
    
    /**
     * Clear <get_own_not_approved_postings> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearGetOwnNotApprovedPostings(){
      return $this->_clear(13);
    }
    
    /**
     * Get <get_own_not_approved_postings> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetOwnNotApprovedPostings(){
      return $this->_get(13);
    }
    
    /**
     * Set <get_own_not_approved_postings> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setGetOwnNotApprovedPostings(\dstore\engine\values\booleanValue $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <get_own_not_approved_postings_null> has a value
     *
     * @return boolean
     */
    public function hasGetOwnNotApprovedPostingsNull(){
      return $this->_has(1013);
    }
    
    /**
     * Clear <get_own_not_approved_postings_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearGetOwnNotApprovedPostingsNull(){
      return $this->_clear(1013);
    }
    
    /**
     * Get <get_own_not_approved_postings_null> value
     *
     * @return boolean
     */
    public function getGetOwnNotApprovedPostingsNull(){
      return $this->_get(1013);
    }
    
    /**
     * Set <get_own_not_approved_postings_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setGetOwnNotApprovedPostingsNull( $value){
      return $this->_set(1013, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentVals(){
      return $this->_has(14);
    }
    
    /**
     * Clear <separator_in_ident_vals> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearSeparatorInIdentVals(){
      return $this->_clear(14);
    }
    
    /**
     * Get <separator_in_ident_vals> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSeparatorInIdentVals(){
      return $this->_get(14);
    }
    
    /**
     * Set <separator_in_ident_vals> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setSeparatorInIdentVals(\dstore\engine\values\stringValue $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentValsNull(){
      return $this->_has(1014);
    }
    
    /**
     * Clear <separator_in_ident_vals_null> value
     *
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function clearSeparatorInIdentValsNull(){
      return $this->_clear(1014);
    }
    
    /**
     * Get <separator_in_ident_vals_null> value
     *
     * @return boolean
     */
    public function getSeparatorInIdentValsNull(){
      return $this->_get(1014);
    }
    
    /**
     * Set <separator_in_ident_vals_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetPostingsOfOnePerson_Pu\Parameters
     */
    public function setSeparatorInIdentValsNull( $value){
      return $this->_set(1014, $value);
    }
  }
}

