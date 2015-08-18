<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetApplicationParts_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetApplicationParts_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $application_id = null;
    
    /**  @var boolean */
    public $application_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $application_part = null;
    
    /**  @var boolean */
    public $application_part_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $search_for_app_part_with_like = null;
    
    /**  @var boolean */
    public $search_for_app_part_with_like_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $get_parts_for_global_user = null;
    
    /**  @var boolean */
    public $get_parts_for_global_user_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $output_into_one_id = null;
    
    /**  @var boolean */
    public $output_into_one_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetApplicationParts_Pu.Parameters');

      // OPTIONAL MESSAGE application_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "application_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL application_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "application_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE application_part = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "application_part";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL application_part_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "application_part_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE search_for_app_part_with_like = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "search_for_app_part_with_like";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL search_for_app_part_with_like_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "search_for_app_part_with_like_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_parts_for_global_user = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "get_parts_for_global_user";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_parts_for_global_user_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "get_parts_for_global_user_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE output_into_one_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "output_into_one_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL output_into_one_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "output_into_one_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <application_id> has a value
     *
     * @return boolean
     */
    public function hasApplicationId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <application_id> value
     *
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function clearApplicationId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <application_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getApplicationId(){
      return $this->_get(1);
    }
    
    /**
     * Set <application_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function setApplicationId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <application_id_null> has a value
     *
     * @return boolean
     */
    public function hasApplicationIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <application_id_null> value
     *
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function clearApplicationIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <application_id_null> value
     *
     * @return boolean
     */
    public function getApplicationIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <application_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function setApplicationIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <application_part> has a value
     *
     * @return boolean
     */
    public function hasApplicationPart(){
      return $this->_has(2);
    }
    
    /**
     * Clear <application_part> value
     *
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function clearApplicationPart(){
      return $this->_clear(2);
    }
    
    /**
     * Get <application_part> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getApplicationPart(){
      return $this->_get(2);
    }
    
    /**
     * Set <application_part> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function setApplicationPart(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <application_part_null> has a value
     *
     * @return boolean
     */
    public function hasApplicationPartNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <application_part_null> value
     *
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function clearApplicationPartNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <application_part_null> value
     *
     * @return boolean
     */
    public function getApplicationPartNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <application_part_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function setApplicationPartNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <search_for_app_part_with_like> has a value
     *
     * @return boolean
     */
    public function hasSearchForAppPartWithLike(){
      return $this->_has(3);
    }
    
    /**
     * Clear <search_for_app_part_with_like> value
     *
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function clearSearchForAppPartWithLike(){
      return $this->_clear(3);
    }
    
    /**
     * Get <search_for_app_part_with_like> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getSearchForAppPartWithLike(){
      return $this->_get(3);
    }
    
    /**
     * Set <search_for_app_part_with_like> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function setSearchForAppPartWithLike(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <search_for_app_part_with_like_null> has a value
     *
     * @return boolean
     */
    public function hasSearchForAppPartWithLikeNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <search_for_app_part_with_like_null> value
     *
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function clearSearchForAppPartWithLikeNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <search_for_app_part_with_like_null> value
     *
     * @return boolean
     */
    public function getSearchForAppPartWithLikeNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <search_for_app_part_with_like_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function setSearchForAppPartWithLikeNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <get_parts_for_global_user> has a value
     *
     * @return boolean
     */
    public function hasGetPartsForGlobalUser(){
      return $this->_has(4);
    }
    
    /**
     * Clear <get_parts_for_global_user> value
     *
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function clearGetPartsForGlobalUser(){
      return $this->_clear(4);
    }
    
    /**
     * Get <get_parts_for_global_user> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getGetPartsForGlobalUser(){
      return $this->_get(4);
    }
    
    /**
     * Set <get_parts_for_global_user> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function setGetPartsForGlobalUser(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <get_parts_for_global_user_null> has a value
     *
     * @return boolean
     */
    public function hasGetPartsForGlobalUserNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <get_parts_for_global_user_null> value
     *
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function clearGetPartsForGlobalUserNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <get_parts_for_global_user_null> value
     *
     * @return boolean
     */
    public function getGetPartsForGlobalUserNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <get_parts_for_global_user_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function setGetPartsForGlobalUserNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <output_into_one_id> has a value
     *
     * @return boolean
     */
    public function hasOutputIntoOneId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <output_into_one_id> value
     *
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function clearOutputIntoOneId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <output_into_one_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOutputIntoOneId(){
      return $this->_get(5);
    }
    
    /**
     * Set <output_into_one_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function setOutputIntoOneId(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <output_into_one_id_null> has a value
     *
     * @return boolean
     */
    public function hasOutputIntoOneIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <output_into_one_id_null> value
     *
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function clearOutputIntoOneIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <output_into_one_id_null> value
     *
     * @return boolean
     */
    public function getOutputIntoOneIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <output_into_one_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetApplicationParts_Pu\Parameters
     */
    public function setOutputIntoOneIdNull( $value){
      return $this->_set(1005, $value);
    }
  }
}
