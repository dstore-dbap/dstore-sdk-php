<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_AlphabetizeCharacValues_Ad.proto
//   Date: 2016-05-19 08:07:53

namespace dstore\engine\pm_AlphabetizeCharacValues_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $characteristic_id = null;
    
    /**  @var boolean */
    public $characteristic_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $descending = null;
    
    /**  @var boolean */
    public $descending_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $case_sensitive = null;
    
    /**  @var boolean */
    public $case_sensitive_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_AlphabetizeCharacValues_Ad.Parameters');

      // OPTIONAL MESSAGE characteristic_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL characteristic_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE descending = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "descending";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL descending_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "descending_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE case_sensitive = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "case_sensitive";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL case_sensitive_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "case_sensitive_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <characteristic_id> value
     *
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function clearCharacteristicId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCharacteristicId(){
      return $this->_get(1);
    }
    
    /**
     * Set <characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function setCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasCharacteristicIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <characteristic_id_null> value
     *
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function clearCharacteristicIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <characteristic_id_null> value
     *
     * @return boolean
     */
    public function getCharacteristicIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function setCharacteristicIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <descending> has a value
     *
     * @return boolean
     */
    public function hasDescending(){
      return $this->_has(2);
    }
    
    /**
     * Clear <descending> value
     *
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function clearDescending(){
      return $this->_clear(2);
    }
    
    /**
     * Get <descending> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDescending(){
      return $this->_get(2);
    }
    
    /**
     * Set <descending> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function setDescending(\dstore\values\booleanValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <descending_null> has a value
     *
     * @return boolean
     */
    public function hasDescendingNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <descending_null> value
     *
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function clearDescendingNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <descending_null> value
     *
     * @return boolean
     */
    public function getDescendingNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <descending_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function setDescendingNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <case_sensitive> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitive(){
      return $this->_has(3);
    }
    
    /**
     * Clear <case_sensitive> value
     *
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function clearCaseSensitive(){
      return $this->_clear(3);
    }
    
    /**
     * Get <case_sensitive> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getCaseSensitive(){
      return $this->_get(3);
    }
    
    /**
     * Set <case_sensitive> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function setCaseSensitive(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <case_sensitive_null> has a value
     *
     * @return boolean
     */
    public function hasCaseSensitiveNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <case_sensitive_null> value
     *
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function clearCaseSensitiveNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <case_sensitive_null> value
     *
     * @return boolean
     */
    public function getCaseSensitiveNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <case_sensitive_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_AlphabetizeCharacValues_Ad\Parameters
     */
    public function setCaseSensitiveNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

