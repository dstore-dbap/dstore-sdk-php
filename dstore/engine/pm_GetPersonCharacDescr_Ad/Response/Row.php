<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonCharacDescr_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetPersonCharacDescr_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $language_symbol = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $language = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $characteristic_description = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $translated_description = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_characteristic_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonCharacDescr_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_symbol = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "language_symbol";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "language";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE characteristic_description = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "characteristic_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE translated_description = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "translated_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_characteristic_id = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "person_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "language_id";
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
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
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
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <language_symbol> has a value
     *
     * @return boolean
     */
    public function hasLanguageSymbol(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <language_symbol> value
     *
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function clearLanguageSymbol(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <language_symbol> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLanguageSymbol(){
      return $this->_get(10001);
    }
    
    /**
     * Set <language_symbol> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function setLanguageSymbol(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <language> has a value
     *
     * @return boolean
     */
    public function hasLanguage(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <language> value
     *
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function clearLanguage(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <language> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLanguage(){
      return $this->_get(10002);
    }
    
    /**
     * Set <language> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function setLanguage(\dstore\engine\values\stringValue $value){
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
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function clearCharacteristicDescription(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <characteristic_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCharacteristicDescription(){
      return $this->_get(10003);
    }
    
    /**
     * Set <characteristic_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function setCharacteristicDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <translated_description> has a value
     *
     * @return boolean
     */
    public function hasTranslatedDescription(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <translated_description> value
     *
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function clearTranslatedDescription(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <translated_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getTranslatedDescription(){
      return $this->_get(10004);
    }
    
    /**
     * Set <translated_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function setTranslatedDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <person_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPersonCharacteristicId(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <person_characteristic_id> value
     *
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function clearPersonCharacteristicId(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <person_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonCharacteristicId(){
      return $this->_get(10005);
    }
    
    /**
     * Set <person_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function setPersonCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function clearLanguageId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonCharacDescr_Ad\Response\Row
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
  }
}
