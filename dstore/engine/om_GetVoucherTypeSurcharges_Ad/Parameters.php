<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetVoucherTypeSurcharges_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetVoucherTypeSurcharges_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $voucher_type_id = null;
    
    /**  @var boolean */
    public $voucher_type_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $surcharge_type_id = null;
    
    /**  @var boolean */
    public $surcharge_type_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetVoucherTypeSurcharges_Ad.Parameters');

      // OPTIONAL MESSAGE voucher_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "voucher_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL voucher_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "voucher_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE surcharge_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "surcharge_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL surcharge_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "surcharge_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <voucher_type_id> has a value
     *
     * @return boolean
     */
    public function hasVoucherTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <voucher_type_id> value
     *
     * @return \dstore\engine\om_GetVoucherTypeSurcharges_Ad\Parameters
     */
    public function clearVoucherTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <voucher_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVoucherTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <voucher_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetVoucherTypeSurcharges_Ad\Parameters
     */
    public function setVoucherTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <voucher_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasVoucherTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <voucher_type_id_null> value
     *
     * @return \dstore\engine\om_GetVoucherTypeSurcharges_Ad\Parameters
     */
    public function clearVoucherTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <voucher_type_id_null> value
     *
     * @return boolean
     */
    public function getVoucherTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <voucher_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetVoucherTypeSurcharges_Ad\Parameters
     */
    public function setVoucherTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <surcharge_type_id> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <surcharge_type_id> value
     *
     * @return \dstore\engine\om_GetVoucherTypeSurcharges_Ad\Parameters
     */
    public function clearSurchargeTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <surcharge_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSurchargeTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <surcharge_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetVoucherTypeSurcharges_Ad\Parameters
     */
    public function setSurchargeTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <surcharge_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasSurchargeTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <surcharge_type_id_null> value
     *
     * @return \dstore\engine\om_GetVoucherTypeSurcharges_Ad\Parameters
     */
    public function clearSurchargeTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <surcharge_type_id_null> value
     *
     * @return boolean
     */
    public function getSurchargeTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <surcharge_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetVoucherTypeSurcharges_Ad\Parameters
     */
    public function setSurchargeTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

