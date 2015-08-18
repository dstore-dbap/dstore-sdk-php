<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetBillContentInfo_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetBillContentInfo_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $bill_content_id = null;
    
    /**  @var boolean */
    public $bill_content_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $information_type_id_list = null;
    
    /**  @var boolean */
    public $information_type_id_list_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetBillContentInfo_Ad.Parameters');

      // OPTIONAL MESSAGE bill_content_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "bill_content_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL bill_content_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "bill_content_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type_id_list = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "information_type_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_id_list_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "information_type_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <bill_content_id> has a value
     *
     * @return boolean
     */
    public function hasBillContentId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <bill_content_id> value
     *
     * @return \dstore\engine\om_GetBillContentInfo_Ad\Parameters
     */
    public function clearBillContentId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <bill_content_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBillContentId(){
      return $this->_get(1);
    }
    
    /**
     * Set <bill_content_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetBillContentInfo_Ad\Parameters
     */
    public function setBillContentId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <bill_content_id_null> has a value
     *
     * @return boolean
     */
    public function hasBillContentIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <bill_content_id_null> value
     *
     * @return \dstore\engine\om_GetBillContentInfo_Ad\Parameters
     */
    public function clearBillContentIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <bill_content_id_null> value
     *
     * @return boolean
     */
    public function getBillContentIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <bill_content_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetBillContentInfo_Ad\Parameters
     */
    public function setBillContentIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <information_type_id_list> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeIdList(){
      return $this->_has(2);
    }
    
    /**
     * Clear <information_type_id_list> value
     *
     * @return \dstore\engine\om_GetBillContentInfo_Ad\Parameters
     */
    public function clearInformationTypeIdList(){
      return $this->_clear(2);
    }
    
    /**
     * Get <information_type_id_list> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getInformationTypeIdList(){
      return $this->_get(2);
    }
    
    /**
     * Set <information_type_id_list> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetBillContentInfo_Ad\Parameters
     */
    public function setInformationTypeIdList(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <information_type_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeIdListNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <information_type_id_list_null> value
     *
     * @return \dstore\engine\om_GetBillContentInfo_Ad\Parameters
     */
    public function clearInformationTypeIdListNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <information_type_id_list_null> value
     *
     * @return boolean
     */
    public function getInformationTypeIdListNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <information_type_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetBillContentInfo_Ad\Parameters
     */
    public function setInformationTypeIdListNull( $value){
      return $this->_set(1002, $value);
    }
  }
}
