<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampaignBenefits_Ad.proto
//   Date: 2015-08-17 11:45:23

namespace dstore\engine\om_ModifyCampaignBenefits_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $campaign_id = null;
    
    /**  @var boolean */
    public $campaign_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $benefit_id = null;
    
    /**  @var boolean */
    public $benefit_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $benefit_type_id = null;
    
    /**  @var boolean */
    public $benefit_type_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete = null;
    
    /**  @var boolean */
    public $delete_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampaignBenefits_Ad.Parameters');

      // OPTIONAL MESSAGE campaign_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "campaign_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL campaign_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "campaign_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE benefit_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "benefit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL benefit_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "benefit_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE benefit_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "benefit_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL benefit_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "benefit_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <campaign_id> has a value
     *
     * @return boolean
     */
    public function hasCampaignId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <campaign_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function clearCampaignId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <campaign_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCampaignId(){
      return $this->_get(1);
    }
    
    /**
     * Set <campaign_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function setCampaignId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <campaign_id_null> has a value
     *
     * @return boolean
     */
    public function hasCampaignIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <campaign_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function clearCampaignIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <campaign_id_null> value
     *
     * @return boolean
     */
    public function getCampaignIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <campaign_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function setCampaignIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <benefit_id> has a value
     *
     * @return boolean
     */
    public function hasBenefitId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <benefit_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function clearBenefitId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <benefit_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBenefitId(){
      return $this->_get(2);
    }
    
    /**
     * Set <benefit_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function setBenefitId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <benefit_id_null> has a value
     *
     * @return boolean
     */
    public function hasBenefitIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <benefit_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function clearBenefitIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <benefit_id_null> value
     *
     * @return boolean
     */
    public function getBenefitIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <benefit_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function setBenefitIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <benefit_type_id> has a value
     *
     * @return boolean
     */
    public function hasBenefitTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <benefit_type_id> value
     *
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function clearBenefitTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <benefit_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getBenefitTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <benefit_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function setBenefitTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <benefit_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasBenefitTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <benefit_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function clearBenefitTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <benefit_type_id_null> value
     *
     * @return boolean
     */
    public function getBenefitTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <benefit_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function setBenefitTypeIdNull( $value){
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
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function clearDelete(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDelete(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function setDelete(\dstore\engine\values\booleanValue $value){
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
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
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
     * @return \dstore\engine\om_ModifyCampaignBenefits_Ad\Parameters
     */
    public function setDeleteNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

