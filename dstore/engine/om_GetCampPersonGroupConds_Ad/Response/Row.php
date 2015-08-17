<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCampPersonGroupConds_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetCampPersonGroupConds_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $filter_by_person_group_ids = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $any_id_in_filter = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $condition_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $negate_filter = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCampPersonGroupConds_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE filter_by_person_group_ids = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "filter_by_person_group_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE any_id_in_filter = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "any_id_in_filter";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE condition_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "condition_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE negate_filter = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "negate_filter";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
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
     * @return \dstore\engine\om_GetCampPersonGroupConds_Ad\Response\Row
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
     * @return \dstore\engine\om_GetCampPersonGroupConds_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <filter_by_person_group_ids> has a value
     *
     * @return boolean
     */
    public function hasFilterByPersonGroupIds(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <filter_by_person_group_ids> value
     *
     * @return \dstore\engine\om_GetCampPersonGroupConds_Ad\Response\Row
     */
    public function clearFilterByPersonGroupIds(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <filter_by_person_group_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFilterByPersonGroupIds(){
      return $this->_get(10001);
    }
    
    /**
     * Set <filter_by_person_group_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetCampPersonGroupConds_Ad\Response\Row
     */
    public function setFilterByPersonGroupIds(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <any_id_in_filter> has a value
     *
     * @return boolean
     */
    public function hasAnyIdInFilter(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <any_id_in_filter> value
     *
     * @return \dstore\engine\om_GetCampPersonGroupConds_Ad\Response\Row
     */
    public function clearAnyIdInFilter(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <any_id_in_filter> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getAnyIdInFilter(){
      return $this->_get(10002);
    }
    
    /**
     * Set <any_id_in_filter> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_GetCampPersonGroupConds_Ad\Response\Row
     */
    public function setAnyIdInFilter(\dstore\engine\values\booleanValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <condition_id> has a value
     *
     * @return boolean
     */
    public function hasConditionId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <condition_id> value
     *
     * @return \dstore\engine\om_GetCampPersonGroupConds_Ad\Response\Row
     */
    public function clearConditionId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <condition_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getConditionId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <condition_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetCampPersonGroupConds_Ad\Response\Row
     */
    public function setConditionId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <negate_filter> has a value
     *
     * @return boolean
     */
    public function hasNegateFilter(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <negate_filter> value
     *
     * @return \dstore\engine\om_GetCampPersonGroupConds_Ad\Response\Row
     */
    public function clearNegateFilter(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <negate_filter> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getNegateFilter(){
      return $this->_get(10004);
    }
    
    /**
     * Set <negate_filter> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_GetCampPersonGroupConds_Ad\Response\Row
     */
    public function setNegateFilter(\dstore\engine\values\booleanValue $value){
      return $this->_set(10004, $value);
    }
  }
}

