<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyTrolleyCInfoTypes_Ad.proto
//   Date: 2016-05-19 08:07:53

namespace dstore\engine\om_ModifyTrolleyCInfoTypes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $information_type_id = null;
    
    /**  @var boolean */
    public $information_type_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $information_type = null;
    
    /**  @var boolean */
    public $information_type_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $field_type_id = null;
    
    /**  @var boolean */
    public $field_type_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete = null;
    
    /**  @var boolean */
    public $delete_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $corresp_order_cont_info_type_id = null;
    
    /**  @var boolean */
    public $corresp_order_cont_info_type_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyTrolleyCInfoTypes_Ad.Parameters');

      // OPTIONAL MESSAGE information_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "information_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "information_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "information_type_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE field_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL field_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "field_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE corresp_order_cont_info_type_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "corresp_order_cont_info_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL corresp_order_cont_info_type_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "corresp_order_cont_info_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function clearInformationTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function setInformationTypeId(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <information_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <information_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function clearInformationTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <information_type_id_null> value
     *
     * @return boolean
     */
    public function getInformationTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <information_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function setInformationTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <information_type> has a value
     *
     * @return boolean
     */
    public function hasInformationType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <information_type> value
     *
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function clearInformationType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <information_type> value
     *
     * @return \dstore\values\stringValue
     */
    public function getInformationType(){
      return $this->_get(2);
    }
    
    /**
     * Set <information_type> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function setInformationType(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <information_type_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <information_type_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function clearInformationTypeNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <information_type_null> value
     *
     * @return boolean
     */
    public function getInformationTypeNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <information_type_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function setInformationTypeNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <field_type_id> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <field_type_id> value
     *
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function clearFieldTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <field_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getFieldTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <field_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function setFieldTypeId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <field_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <field_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function clearFieldTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <field_type_id_null> value
     *
     * @return boolean
     */
    public function getFieldTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <field_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function setFieldTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete> has a value
     *
     * @return boolean
     */
    public function hasDelete(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete> value
     *
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function clearDelete(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDelete(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function setDelete(\dstore\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function clearDeleteNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_null> value
     *
     * @return boolean
     */
    public function getDeleteNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function setDeleteNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <corresp_order_cont_info_type_id> has a value
     *
     * @return boolean
     */
    public function hasCorrespOrderContInfoTypeId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <corresp_order_cont_info_type_id> value
     *
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function clearCorrespOrderContInfoTypeId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <corresp_order_cont_info_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCorrespOrderContInfoTypeId(){
      return $this->_get(5);
    }
    
    /**
     * Set <corresp_order_cont_info_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function setCorrespOrderContInfoTypeId(\dstore\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <corresp_order_cont_info_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasCorrespOrderContInfoTypeIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <corresp_order_cont_info_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function clearCorrespOrderContInfoTypeIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <corresp_order_cont_info_type_id_null> value
     *
     * @return boolean
     */
    public function getCorrespOrderContInfoTypeIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <corresp_order_cont_info_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyCInfoTypes_Ad\Parameters
     */
    public function setCorrespOrderContInfoTypeIdNull( $value){
      return $this->_set(1005, $value);
    }
  }
}

