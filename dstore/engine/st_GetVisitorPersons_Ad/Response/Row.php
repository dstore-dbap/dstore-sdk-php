<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetVisitorPersons_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\st_GetVisitorPersons_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $charac_val2_restr_by_pattern = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visitor_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $valid_to = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $valid_from = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $person_type = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_value2 = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $charac_val1_restr_by_pattern = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_value1 = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetVisitorPersons_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE charac_val2_restr_by_pattern = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "charac_val2_restr_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visitor_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "visitor_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE valid_to = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "valid_to";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE valid_from = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "valid_from";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "person_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_value2 = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "characteristic_value2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE charac_val1_restr_by_pattern = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "charac_val1_restr_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_value1 = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "characteristic_value1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
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
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <charac_val2_restr_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasCharacVal2RestrByPattern(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <charac_val2_restr_by_pattern> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function clearCharacVal2RestrByPattern(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <charac_val2_restr_by_pattern> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacVal2RestrByPattern(){
      return $this->_get(10001);
    }
    
    /**
     * Set <charac_val2_restr_by_pattern> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setCharacVal2RestrByPattern(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <visitor_id> has a value
     *
     * @return boolean
     */
    public function hasVisitorId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <visitor_id> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function clearVisitorId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <visitor_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisitorId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <visitor_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setVisitorId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function clearPersonId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <valid_to> has a value
     *
     * @return boolean
     */
    public function hasValidTo(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <valid_to> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function clearValidTo(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <valid_to> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValidTo(){
      return $this->_get(10004);
    }
    
    /**
     * Set <valid_to> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setValidTo(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <valid_from> has a value
     *
     * @return boolean
     */
    public function hasValidFrom(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <valid_from> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function clearValidFrom(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <valid_from> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValidFrom(){
      return $this->_get(10005);
    }
    
    /**
     * Set <valid_from> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setValidFrom(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <person_type> has a value
     *
     * @return boolean
     */
    public function hasPersonType(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <person_type> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function clearPersonType(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <person_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPersonType(){
      return $this->_get(10006);
    }
    
    /**
     * Set <person_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setPersonType(\dstore\engine\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <characteristic_value2> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicValue2(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <characteristic_value2> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function clearCharacteristicValue2(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <characteristic_value2> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicValue2(){
      return $this->_get(10007);
    }
    
    /**
     * Set <characteristic_value2> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setCharacteristicValue2(\dstore\engine\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <charac_val1_restr_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasCharacVal1RestrByPattern(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <charac_val1_restr_by_pattern> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function clearCharacVal1RestrByPattern(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <charac_val1_restr_by_pattern> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacVal1RestrByPattern(){
      return $this->_get(10008);
    }
    
    /**
     * Set <charac_val1_restr_by_pattern> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setCharacVal1RestrByPattern(\dstore\engine\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <characteristic_value1> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicValue1(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <characteristic_value1> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function clearCharacteristicValue1(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <characteristic_value1> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicValue1(){
      return $this->_get(10009);
    }
    
    /**
     * Set <characteristic_value1> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setCharacteristicValue1(\dstore\engine\values\stringValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function clearPersonTypeId(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(10010);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\st_GetVisitorPersons_Ad\Response\Row
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10010, $value);
    }
  }
}

