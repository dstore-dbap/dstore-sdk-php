<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_GetForumCategories_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\fo_GetForumCategories_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $forum_category_id = null;
    
    /**  @var boolean */
    public $forum_category_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $do_not_check_access_rights = null;
    
    /**  @var boolean */
    public $do_not_check_access_rights_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $separator_in_ident_vals = null;
    
    /**  @var boolean */
    public $separator_in_ident_vals_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_GetForumCategories_Pu.Parameters');

      // OPTIONAL MESSAGE person_identification_values = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unique_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE forum_category_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "forum_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL forum_category_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "forum_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE do_not_check_access_rights = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "do_not_check_access_rights";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL do_not_check_access_rights_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "do_not_check_access_rights_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_ident_vals = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "separator_in_ident_vals";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_ident_vals_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "separator_in_ident_vals_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(3);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setUniqueId(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <forum_category_id> has a value
     *
     * @return boolean
     */
    public function hasForumCategoryId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <forum_category_id> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearForumCategoryId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <forum_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getForumCategoryId(){
      return $this->_get(4);
    }
    
    /**
     * Set <forum_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setForumCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <forum_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasForumCategoryIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <forum_category_id_null> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearForumCategoryIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <forum_category_id_null> value
     *
     * @return boolean
     */
    public function getForumCategoryIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <forum_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setForumCategoryIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <do_not_check_access_rights> has a value
     *
     * @return boolean
     */
    public function hasDoNotCheckAccessRights(){
      return $this->_has(5);
    }
    
    /**
     * Clear <do_not_check_access_rights> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearDoNotCheckAccessRights(){
      return $this->_clear(5);
    }
    
    /**
     * Get <do_not_check_access_rights> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDoNotCheckAccessRights(){
      return $this->_get(5);
    }
    
    /**
     * Set <do_not_check_access_rights> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setDoNotCheckAccessRights(\dstore\engine\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <do_not_check_access_rights_null> has a value
     *
     * @return boolean
     */
    public function hasDoNotCheckAccessRightsNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <do_not_check_access_rights_null> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearDoNotCheckAccessRightsNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <do_not_check_access_rights_null> value
     *
     * @return boolean
     */
    public function getDoNotCheckAccessRightsNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <do_not_check_access_rights_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setDoNotCheckAccessRightsNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentVals(){
      return $this->_has(6);
    }
    
    /**
     * Clear <separator_in_ident_vals> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearSeparatorInIdentVals(){
      return $this->_clear(6);
    }
    
    /**
     * Get <separator_in_ident_vals> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSeparatorInIdentVals(){
      return $this->_get(6);
    }
    
    /**
     * Set <separator_in_ident_vals> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setSeparatorInIdentVals(\dstore\engine\values\stringValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentValsNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <separator_in_ident_vals_null> value
     *
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function clearSeparatorInIdentValsNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <separator_in_ident_vals_null> value
     *
     * @return boolean
     */
    public function getSeparatorInIdentValsNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <separator_in_ident_vals_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_GetForumCategories_Pu\Parameters
     */
    public function setSeparatorInIdentValsNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

