<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPossibleDuplicates_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\pm_GetPossibleDuplicates_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $output_characteristic_id = null;
    
    /**  @var boolean */
    public $output_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $row_count = null;
    
    /**  @var boolean */
    public $row_count_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPossibleDuplicates_Ad.Parameters');

      // OPTIONAL MESSAGE person_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE output_characteristic_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "output_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL output_characteristic_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "output_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE row_count = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "row_count";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL row_count_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "row_count_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <output_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasOutputCharacteristicId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <output_characteristic_id> value
     *
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function clearOutputCharacteristicId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <output_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOutputCharacteristicId(){
      return $this->_get(2);
    }
    
    /**
     * Set <output_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function setOutputCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <output_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasOutputCharacteristicIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <output_characteristic_id_null> value
     *
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function clearOutputCharacteristicIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <output_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getOutputCharacteristicIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <output_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function setOutputCharacteristicIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <row_count> has a value
     *
     * @return boolean
     */
    public function hasRowCount(){
      return $this->_has(3);
    }
    
    /**
     * Clear <row_count> value
     *
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function clearRowCount(){
      return $this->_clear(3);
    }
    
    /**
     * Get <row_count> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRowCount(){
      return $this->_get(3);
    }
    
    /**
     * Set <row_count> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function setRowCount(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <row_count_null> has a value
     *
     * @return boolean
     */
    public function hasRowCountNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <row_count_null> value
     *
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function clearRowCountNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <row_count_null> value
     *
     * @return boolean
     */
    public function getRowCountNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <row_count_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_GetPossibleDuplicates_Ad\Parameters
     */
    public function setRowCountNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

