<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifySetsForBonItBenefs_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\om_ModifySetsForBonItBenefs_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $benefit_id = null;
    
    /**  @var boolean */
    public $benefit_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $item_set_id = null;
    
    /**  @var boolean */
    public $item_set_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $sort_no = null;
    
    /**  @var boolean */
    public $sort_no_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_combination = null;
    
    /**  @var boolean */
    public $delete_combination_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifySetsForBonItBenefs_Ad.Parameters');

      // OPTIONAL MESSAGE benefit_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "benefit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL benefit_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "benefit_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE item_set_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "item_set_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL item_set_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "item_set_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_no_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "sort_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_combination = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete_combination";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_combination_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_combination_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <benefit_id> has a value
     *
     * @return boolean
     */
    public function hasBenefitId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <benefit_id> value
     *
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function clearBenefitId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <benefit_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBenefitId(){
      return $this->_get(1);
    }
    
    /**
     * Set <benefit_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function setBenefitId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <benefit_id_null> has a value
     *
     * @return boolean
     */
    public function hasBenefitIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <benefit_id_null> value
     *
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function clearBenefitIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <benefit_id_null> value
     *
     * @return boolean
     */
    public function getBenefitIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <benefit_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function setBenefitIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <item_set_id> has a value
     *
     * @return boolean
     */
    public function hasItemSetId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <item_set_id> value
     *
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function clearItemSetId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <item_set_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getItemSetId(){
      return $this->_get(2);
    }
    
    /**
     * Set <item_set_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function setItemSetId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <item_set_id_null> has a value
     *
     * @return boolean
     */
    public function hasItemSetIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <item_set_id_null> value
     *
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function clearItemSetIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <item_set_id_null> value
     *
     * @return boolean
     */
    public function getItemSetIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <item_set_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function setItemSetIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(3);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function clearSortNo(){
      return $this->_clear(3);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(3);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function setSortNo(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sort_no_null> has a value
     *
     * @return boolean
     */
    public function hasSortNoNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <sort_no_null> value
     *
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function clearSortNoNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <sort_no_null> value
     *
     * @return boolean
     */
    public function getSortNoNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <sort_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function setSortNoNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete_combination> has a value
     *
     * @return boolean
     */
    public function hasDeleteCombination(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete_combination> value
     *
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function clearDeleteCombination(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete_combination> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteCombination(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete_combination> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function setDeleteCombination(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_combination_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteCombinationNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_combination_null> value
     *
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function clearDeleteCombinationNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_combination_null> value
     *
     * @return boolean
     */
    public function getDeleteCombinationNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_combination_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifySetsForBonItBenefs_Ad\Parameters
     */
    public function setDeleteCombinationNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

