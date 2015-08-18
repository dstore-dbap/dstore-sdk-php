<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetTrolleySurchargeInfo_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetTrolleySurchargeInfo_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $position_no = null;
    
    /**  @var boolean */
    public $position_no_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $information_type_id = null;
    
    /**  @var boolean */
    public $information_type_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetTrolleySurchargeInfo_Pu.Parameters');

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

      // OPTIONAL MESSAGE position_no = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "position_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL position_no_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "position_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "information_type_id_null";
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
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
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
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
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
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
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
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <position_no> has a value
     *
     * @return boolean
     */
    public function hasPositionNo(){
      return $this->_has(2);
    }
    
    /**
     * Clear <position_no> value
     *
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
     */
    public function clearPositionNo(){
      return $this->_clear(2);
    }
    
    /**
     * Get <position_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPositionNo(){
      return $this->_get(2);
    }
    
    /**
     * Set <position_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
     */
    public function setPositionNo(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <position_no_null> has a value
     *
     * @return boolean
     */
    public function hasPositionNoNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <position_no_null> value
     *
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
     */
    public function clearPositionNoNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <position_no_null> value
     *
     * @return boolean
     */
    public function getPositionNoNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <position_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
     */
    public function setPositionNoNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
     */
    public function clearInformationTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
     */
    public function setInformationTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <information_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <information_type_id_null> value
     *
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
     */
    public function clearInformationTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <information_type_id_null> value
     *
     * @return boolean
     */
    public function getInformationTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <information_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleySurchargeInfo_Pu\Parameters
     */
    public function setInformationTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
  }
}
