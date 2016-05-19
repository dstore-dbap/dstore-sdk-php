<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCampaignBundlePricing_Ad.proto
//   Date: 2016-05-19 08:07:48

namespace dstore\engine\om_GetCampaignBundlePricing_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $campaign_id = null;
    
    /**  @var boolean */
    public $campaign_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $benefit_id = null;
    
    /**  @var boolean */
    public $benefit_id_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $get_assigned_sets = null;
    
    /**  @var boolean */
    public $get_assigned_sets_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCampaignBundlePricing_Ad.Parameters');

      // OPTIONAL MESSAGE campaign_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "campaign_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
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
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL benefit_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "benefit_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_assigned_sets = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "get_assigned_sets";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_assigned_sets_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "get_assigned_sets_null";
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
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
     */
    public function clearCampaignId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <campaign_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCampaignId(){
      return $this->_get(1);
    }
    
    /**
     * Set <campaign_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
     */
    public function setCampaignId(\dstore\values\integerValue $value){
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
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
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
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
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
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
     */
    public function clearBenefitId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <benefit_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBenefitId(){
      return $this->_get(2);
    }
    
    /**
     * Set <benefit_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
     */
    public function setBenefitId(\dstore\values\integerValue $value){
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
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
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
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
     */
    public function setBenefitIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <get_assigned_sets> has a value
     *
     * @return boolean
     */
    public function hasGetAssignedSets(){
      return $this->_has(3);
    }
    
    /**
     * Clear <get_assigned_sets> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
     */
    public function clearGetAssignedSets(){
      return $this->_clear(3);
    }
    
    /**
     * Get <get_assigned_sets> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getGetAssignedSets(){
      return $this->_get(3);
    }
    
    /**
     * Set <get_assigned_sets> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
     */
    public function setGetAssignedSets(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <get_assigned_sets_null> has a value
     *
     * @return boolean
     */
    public function hasGetAssignedSetsNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <get_assigned_sets_null> value
     *
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
     */
    public function clearGetAssignedSetsNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <get_assigned_sets_null> value
     *
     * @return boolean
     */
    public function getGetAssignedSetsNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <get_assigned_sets_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCampaignBundlePricing_Ad\Parameters
     */
    public function setGetAssignedSetsNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

