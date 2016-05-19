<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_RemoveDuplicate_Ad.proto
//   Date: 2016-05-19 08:07:56

namespace dstore\engine\pm_RemoveDuplicate_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $duplicate_person_id = null;
    
    /**  @var boolean */
    public $duplicate_person_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_RemoveDuplicate_Ad.Parameters');

      // OPTIONAL MESSAGE duplicate_person_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "duplicate_person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL duplicate_person_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "duplicate_person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <duplicate_person_id> has a value
     *
     * @return boolean
     */
    public function hasDuplicatePersonId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <duplicate_person_id> value
     *
     * @return \dstore\engine\pm_RemoveDuplicate_Ad\Parameters
     */
    public function clearDuplicatePersonId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <duplicate_person_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getDuplicatePersonId(){
      return $this->_get(1);
    }
    
    /**
     * Set <duplicate_person_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_RemoveDuplicate_Ad\Parameters
     */
    public function setDuplicatePersonId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <duplicate_person_id_null> has a value
     *
     * @return boolean
     */
    public function hasDuplicatePersonIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <duplicate_person_id_null> value
     *
     * @return \dstore\engine\pm_RemoveDuplicate_Ad\Parameters
     */
    public function clearDuplicatePersonIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <duplicate_person_id_null> value
     *
     * @return boolean
     */
    public function getDuplicatePersonIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <duplicate_person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_RemoveDuplicate_Ad\Parameters
     */
    public function setDuplicatePersonIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\pm_RemoveDuplicate_Ad\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_RemoveDuplicate_Ad\Parameters
     */
    public function setPersonId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\pm_RemoveDuplicate_Ad\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_RemoveDuplicate_Ad\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

