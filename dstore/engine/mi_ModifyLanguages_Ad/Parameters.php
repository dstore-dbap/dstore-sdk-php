<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_ModifyLanguages_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_ModifyLanguages_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $language = null;
    
    /**  @var boolean */
    public $language_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $language_symbol = null;
    
    /**  @var boolean */
    public $language_symbol_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_language = null;
    
    /**  @var boolean */
    public $delete_language_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $local_language_name = null;
    
    /**  @var boolean */
    public $local_language_name_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_ModifyLanguages_Ad.Parameters');

      // OPTIONAL MESSAGE language_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "language";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "language_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_symbol = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "language_symbol";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_symbol_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "language_symbol_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_language = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete_language";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_language_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_language_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE local_language_name = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "local_language_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL local_language_name_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "local_language_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(1);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <language> has a value
     *
     * @return boolean
     */
    public function hasLanguage(){
      return $this->_has(2);
    }
    
    /**
     * Clear <language> value
     *
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function clearLanguage(){
      return $this->_clear(2);
    }
    
    /**
     * Get <language> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLanguage(){
      return $this->_get(2);
    }
    
    /**
     * Set <language> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function setLanguage(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <language_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <language_null> value
     *
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function clearLanguageNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <language_null> value
     *
     * @return boolean
     */
    public function getLanguageNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <language_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function setLanguageNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <language_symbol> has a value
     *
     * @return boolean
     */
    public function hasLanguageSymbol(){
      return $this->_has(3);
    }
    
    /**
     * Clear <language_symbol> value
     *
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function clearLanguageSymbol(){
      return $this->_clear(3);
    }
    
    /**
     * Get <language_symbol> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLanguageSymbol(){
      return $this->_get(3);
    }
    
    /**
     * Set <language_symbol> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function setLanguageSymbol(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <language_symbol_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageSymbolNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <language_symbol_null> value
     *
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function clearLanguageSymbolNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <language_symbol_null> value
     *
     * @return boolean
     */
    public function getLanguageSymbolNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <language_symbol_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function setLanguageSymbolNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete_language> has a value
     *
     * @return boolean
     */
    public function hasDeleteLanguage(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete_language> value
     *
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function clearDeleteLanguage(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete_language> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteLanguage(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete_language> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function setDeleteLanguage(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_language_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteLanguageNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_language_null> value
     *
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function clearDeleteLanguageNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_language_null> value
     *
     * @return boolean
     */
    public function getDeleteLanguageNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_language_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function setDeleteLanguageNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <local_language_name> has a value
     *
     * @return boolean
     */
    public function hasLocalLanguageName(){
      return $this->_has(5);
    }
    
    /**
     * Clear <local_language_name> value
     *
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function clearLocalLanguageName(){
      return $this->_clear(5);
    }
    
    /**
     * Get <local_language_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLocalLanguageName(){
      return $this->_get(5);
    }
    
    /**
     * Set <local_language_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function setLocalLanguageName(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <local_language_name_null> has a value
     *
     * @return boolean
     */
    public function hasLocalLanguageNameNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <local_language_name_null> value
     *
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function clearLocalLanguageNameNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <local_language_name_null> value
     *
     * @return boolean
     */
    public function getLocalLanguageNameNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <local_language_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyLanguages_Ad\Parameters
     */
    public function setLocalLanguageNameNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

