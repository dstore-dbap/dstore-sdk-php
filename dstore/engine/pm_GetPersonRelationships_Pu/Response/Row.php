<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonRelationships_Pu.proto
//   Date: 2016-05-19 08:07:55

namespace dstore\engine\pm_GetPersonRelationships_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $output_charac_id3 = null;
    
    /**  @var \dstore\values\stringValue */
    public $value1_restricted_by_pattern = null;
    
    /**  @var \dstore\values\integerValue */
    public $related_person_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value2_restricted_by_pattern = null;
    
    /**  @var \dstore\values\stringValue */
    public $value3 = null;
    
    /**  @var \dstore\values\stringValue */
    public $value1 = null;
    
    /**  @var \dstore\values\stringValue */
    public $value2 = null;
    
    /**  @var \dstore\values\integerValue */
    public $access_level = null;
    
    /**  @var \dstore\values\integerValue */
    public $output_charac_id1 = null;
    
    /**  @var \dstore\values\integerValue */
    public $output_charac_id2 = null;
    
    /**  @var \dstore\values\integerValue */
    public $related_person_type_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $relationship_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value3_restricted_by_pattern = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonRelationships_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE output_charac_id3 = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "output_charac_id3";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value1_restricted_by_pattern = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "value1_restricted_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE related_person_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "related_person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value2_restricted_by_pattern = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "value2_restricted_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value3 = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "value3";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value1 = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "value1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value2 = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "value2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE access_level = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "access_level";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE output_charac_id1 = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "output_charac_id1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE output_charac_id2 = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "output_charac_id2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE related_person_type_id = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "related_person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE relationship_id = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "relationship_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value3_restricted_by_pattern = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "value3_restricted_by_pattern";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
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
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
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
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <output_charac_id3> has a value
     *
     * @return boolean
     */
    public function hasOutputCharacId3(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <output_charac_id3> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearOutputCharacId3(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <output_charac_id3> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOutputCharacId3(){
      return $this->_get(10001);
    }
    
    /**
     * Set <output_charac_id3> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setOutputCharacId3(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <value1_restricted_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasValue1RestrictedByPattern(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <value1_restricted_by_pattern> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearValue1RestrictedByPattern(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <value1_restricted_by_pattern> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue1RestrictedByPattern(){
      return $this->_get(10002);
    }
    
    /**
     * Set <value1_restricted_by_pattern> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setValue1RestrictedByPattern(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <related_person_id> has a value
     *
     * @return boolean
     */
    public function hasRelatedPersonId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <related_person_id> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearRelatedPersonId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <related_person_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getRelatedPersonId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <related_person_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setRelatedPersonId(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <value2_restricted_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasValue2RestrictedByPattern(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <value2_restricted_by_pattern> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearValue2RestrictedByPattern(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <value2_restricted_by_pattern> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue2RestrictedByPattern(){
      return $this->_get(10004);
    }
    
    /**
     * Set <value2_restricted_by_pattern> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setValue2RestrictedByPattern(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <value3> has a value
     *
     * @return boolean
     */
    public function hasValue3(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <value3> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearValue3(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <value3> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue3(){
      return $this->_get(10005);
    }
    
    /**
     * Set <value3> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setValue3(\dstore\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <value1> has a value
     *
     * @return boolean
     */
    public function hasValue1(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <value1> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearValue1(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <value1> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue1(){
      return $this->_get(10006);
    }
    
    /**
     * Set <value1> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setValue1(\dstore\values\stringValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <value2> has a value
     *
     * @return boolean
     */
    public function hasValue2(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <value2> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearValue2(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <value2> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue2(){
      return $this->_get(10007);
    }
    
    /**
     * Set <value2> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setValue2(\dstore\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <access_level> has a value
     *
     * @return boolean
     */
    public function hasAccessLevel(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <access_level> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearAccessLevel(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <access_level> value
     *
     * @return \dstore\values\integerValue
     */
    public function getAccessLevel(){
      return $this->_get(10008);
    }
    
    /**
     * Set <access_level> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setAccessLevel(\dstore\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <output_charac_id1> has a value
     *
     * @return boolean
     */
    public function hasOutputCharacId1(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <output_charac_id1> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearOutputCharacId1(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <output_charac_id1> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOutputCharacId1(){
      return $this->_get(10009);
    }
    
    /**
     * Set <output_charac_id1> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setOutputCharacId1(\dstore\values\integerValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <output_charac_id2> has a value
     *
     * @return boolean
     */
    public function hasOutputCharacId2(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <output_charac_id2> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearOutputCharacId2(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <output_charac_id2> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOutputCharacId2(){
      return $this->_get(10010);
    }
    
    /**
     * Set <output_charac_id2> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setOutputCharacId2(\dstore\values\integerValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <related_person_type_id> has a value
     *
     * @return boolean
     */
    public function hasRelatedPersonTypeId(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <related_person_type_id> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearRelatedPersonTypeId(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <related_person_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getRelatedPersonTypeId(){
      return $this->_get(10011);
    }
    
    /**
     * Set <related_person_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setRelatedPersonTypeId(\dstore\values\integerValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <relationship_id> has a value
     *
     * @return boolean
     */
    public function hasRelationshipId(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <relationship_id> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearRelationshipId(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <relationship_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getRelationshipId(){
      return $this->_get(10012);
    }
    
    /**
     * Set <relationship_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setRelationshipId(\dstore\values\integerValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <value3_restricted_by_pattern> has a value
     *
     * @return boolean
     */
    public function hasValue3RestrictedByPattern(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <value3_restricted_by_pattern> value
     *
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function clearValue3RestrictedByPattern(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <value3_restricted_by_pattern> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue3RestrictedByPattern(){
      return $this->_get(10013);
    }
    
    /**
     * Set <value3_restricted_by_pattern> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonRelationships_Pu\Response\Row
     */
    public function setValue3RestrictedByPattern(\dstore\values\stringValue $value){
      return $this->_set(10013, $value);
    }
  }
}

