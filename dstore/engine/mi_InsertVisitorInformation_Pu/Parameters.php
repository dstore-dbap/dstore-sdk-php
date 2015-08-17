<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_InsertVisitorInformation_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_InsertVisitorInformation_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visitor_information_type_id = null;
    
    /**  @var boolean */
    public $visitor_information_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $visitor_information = null;
    
    /**  @var boolean */
    public $visitor_information_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_InsertVisitorInformation_Pu.Parameters');

      // OPTIONAL MESSAGE unique_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visitor_information_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "visitor_information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL visitor_information_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "visitor_information_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visitor_information = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "visitor_information";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL visitor_information_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "visitor_information_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(1);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function setUniqueId(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <visitor_information_type_id> has a value
     *
     * @return boolean
     */
    public function hasVisitorInformationTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <visitor_information_type_id> value
     *
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function clearVisitorInformationTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <visitor_information_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisitorInformationTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <visitor_information_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function setVisitorInformationTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <visitor_information_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasVisitorInformationTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <visitor_information_type_id_null> value
     *
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function clearVisitorInformationTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <visitor_information_type_id_null> value
     *
     * @return boolean
     */
    public function getVisitorInformationTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <visitor_information_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function setVisitorInformationTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <visitor_information> has a value
     *
     * @return boolean
     */
    public function hasVisitorInformation(){
      return $this->_has(3);
    }
    
    /**
     * Clear <visitor_information> value
     *
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function clearVisitorInformation(){
      return $this->_clear(3);
    }
    
    /**
     * Get <visitor_information> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getVisitorInformation(){
      return $this->_get(3);
    }
    
    /**
     * Set <visitor_information> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function setVisitorInformation(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <visitor_information_null> has a value
     *
     * @return boolean
     */
    public function hasVisitorInformationNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <visitor_information_null> value
     *
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function clearVisitorInformationNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <visitor_information_null> value
     *
     * @return boolean
     */
    public function getVisitorInformationNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <visitor_information_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertVisitorInformation_Pu\Parameters
     */
    public function setVisitorInformationNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

