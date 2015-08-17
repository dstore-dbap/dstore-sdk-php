<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersons_Conditions_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetPersons_Conditions_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value1 = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value2 = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value3 = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersons_Conditions_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value1 = 20002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20002;
      $f->name      = "value1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value2 = 30003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 30003;
      $f->name      = "value2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value3 = 40002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 40002;
      $f->name      = "value3";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
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
     * @return \dstore\engine\pm_GetPersons_Conditions_Ad\Response\Row
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
     * @return \dstore\engine\pm_GetPersons_Conditions_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\pm_GetPersons_Conditions_Ad\Response\Row
     */
    public function clearPersonId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersons_Conditions_Ad\Response\Row
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <value1> has a value
     *
     * @return boolean
     */
    public function hasValue1(){
      return $this->_has(20002);
    }
    
    /**
     * Clear <value1> value
     *
     * @return \dstore\engine\pm_GetPersons_Conditions_Ad\Response\Row
     */
    public function clearValue1(){
      return $this->_clear(20002);
    }
    
    /**
     * Get <value1> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue1(){
      return $this->_get(20002);
    }
    
    /**
     * Set <value1> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersons_Conditions_Ad\Response\Row
     */
    public function setValue1(\dstore\engine\values\stringValue $value){
      return $this->_set(20002, $value);
    }
    
    /**
     * Check if <value2> has a value
     *
     * @return boolean
     */
    public function hasValue2(){
      return $this->_has(30003);
    }
    
    /**
     * Clear <value2> value
     *
     * @return \dstore\engine\pm_GetPersons_Conditions_Ad\Response\Row
     */
    public function clearValue2(){
      return $this->_clear(30003);
    }
    
    /**
     * Get <value2> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue2(){
      return $this->_get(30003);
    }
    
    /**
     * Set <value2> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersons_Conditions_Ad\Response\Row
     */
    public function setValue2(\dstore\engine\values\stringValue $value){
      return $this->_set(30003, $value);
    }
    
    /**
     * Check if <value3> has a value
     *
     * @return boolean
     */
    public function hasValue3(){
      return $this->_has(40002);
    }
    
    /**
     * Clear <value3> value
     *
     * @return \dstore\engine\pm_GetPersons_Conditions_Ad\Response\Row
     */
    public function clearValue3(){
      return $this->_clear(40002);
    }
    
    /**
     * Get <value3> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue3(){
      return $this->_get(40002);
    }
    
    /**
     * Set <value3> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersons_Conditions_Ad\Response\Row
     */
    public function setValue3(\dstore\engine\values\stringValue $value){
      return $this->_set(40002, $value);
    }
  }
}

