<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetImportErrors_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetImportErrors_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_no = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_characteristic_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $date_and_time = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $error_code = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $identifying_value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetImportErrors_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_no = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "person_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_characteristic_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "person_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE date_and_time = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE error_code = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "error_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE identifying_value = 20001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20001;
      $f->name      = "identifying_value";
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
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
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
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <person_no> has a value
     *
     * @return boolean
     */
    public function hasPersonNo(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <person_no> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function clearPersonNo(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <person_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonNo(){
      return $this->_get(10001);
    }
    
    /**
     * Set <person_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function setPersonNo(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function clearPersonId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <person_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <person_characteristic_id> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function clearPersonCharacteristicId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <person_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacteristicId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <person_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function setPersonCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(10004);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <date_and_time> has a value
     *
     * @return boolean
     */
    public function hasDateAndTime(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <date_and_time> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function clearDateAndTime(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <date_and_time> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getDateAndTime(){
      return $this->_get(10005);
    }
    
    /**
     * Set <date_and_time> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function setDateAndTime(\dstore\engine\values\timestampValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <error_code> has a value
     *
     * @return boolean
     */
    public function hasErrorCode(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <error_code> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function clearErrorCode(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <error_code> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getErrorCode(){
      return $this->_get(10006);
    }
    
    /**
     * Set <error_code> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function setErrorCode(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <identifying_value> has a value
     *
     * @return boolean
     */
    public function hasIdentifyingValue(){
      return $this->_has(20001);
    }
    
    /**
     * Clear <identifying_value> value
     *
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function clearIdentifyingValue(){
      return $this->_clear(20001);
    }
    
    /**
     * Get <identifying_value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getIdentifyingValue(){
      return $this->_get(20001);
    }
    
    /**
     * Set <identifying_value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetImportErrors_Ad\Response\Row
     */
    public function setIdentifyingValue(\dstore\engine\values\stringValue $value){
      return $this->_set(20001, $value);
    }
  }
}

