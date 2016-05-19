<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyCampaigns_Ad.proto
//   Date: 2016-05-19 08:07:52

namespace dstore\engine\om_ModifyCampaigns_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $campaign_name = null;
    
    /**  @var boolean */
    public $campaign_name_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $campaign_description = null;
    
    /**  @var boolean */
    public $campaign_description_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $campaign_type_id = null;
    
    /**  @var boolean */
    public $campaign_type_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $active = null;
    
    /**  @var boolean */
    public $active_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $delete_campaign = null;
    
    /**  @var boolean */
    public $delete_campaign_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $force_delete = null;
    
    /**  @var boolean */
    public $force_delete_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyCampaigns_Ad.Parameters');

      // OPTIONAL MESSAGE campaign_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "campaign_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL campaign_name_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "campaign_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE campaign_description = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "campaign_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL campaign_description_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "campaign_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE campaign_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "campaign_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL campaign_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "campaign_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE active = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "active";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL active_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "active_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_campaign = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "delete_campaign";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_campaign_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "delete_campaign_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE force_delete = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "force_delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL force_delete_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "force_delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <campaign_name> has a value
     *
     * @return boolean
     */
    public function hasCampaignName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <campaign_name> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearCampaignName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <campaign_name> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCampaignName(){
      return $this->_get(1);
    }
    
    /**
     * Set <campaign_name> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setCampaignName(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <campaign_name_null> has a value
     *
     * @return boolean
     */
    public function hasCampaignNameNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <campaign_name_null> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearCampaignNameNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <campaign_name_null> value
     *
     * @return boolean
     */
    public function getCampaignNameNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <campaign_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setCampaignNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <campaign_description> has a value
     *
     * @return boolean
     */
    public function hasCampaignDescription(){
      return $this->_has(2);
    }
    
    /**
     * Clear <campaign_description> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearCampaignDescription(){
      return $this->_clear(2);
    }
    
    /**
     * Get <campaign_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCampaignDescription(){
      return $this->_get(2);
    }
    
    /**
     * Set <campaign_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setCampaignDescription(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <campaign_description_null> has a value
     *
     * @return boolean
     */
    public function hasCampaignDescriptionNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <campaign_description_null> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearCampaignDescriptionNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <campaign_description_null> value
     *
     * @return boolean
     */
    public function getCampaignDescriptionNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <campaign_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setCampaignDescriptionNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <campaign_type_id> has a value
     *
     * @return boolean
     */
    public function hasCampaignTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <campaign_type_id> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearCampaignTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <campaign_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getCampaignTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <campaign_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setCampaignTypeId(\dstore\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <campaign_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasCampaignTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <campaign_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearCampaignTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <campaign_type_id_null> value
     *
     * @return boolean
     */
    public function getCampaignTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <campaign_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setCampaignTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <active> has a value
     *
     * @return boolean
     */
    public function hasActive(){
      return $this->_has(4);
    }
    
    /**
     * Clear <active> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearActive(){
      return $this->_clear(4);
    }
    
    /**
     * Get <active> value
     *
     * @return \dstore\values\integerValue
     */
    public function getActive(){
      return $this->_get(4);
    }
    
    /**
     * Set <active> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setActive(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <active_null> has a value
     *
     * @return boolean
     */
    public function hasActiveNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <active_null> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearActiveNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <active_null> value
     *
     * @return boolean
     */
    public function getActiveNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <active_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setActiveNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <delete_campaign> has a value
     *
     * @return boolean
     */
    public function hasDeleteCampaign(){
      return $this->_has(5);
    }
    
    /**
     * Clear <delete_campaign> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearDeleteCampaign(){
      return $this->_clear(5);
    }
    
    /**
     * Get <delete_campaign> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getDeleteCampaign(){
      return $this->_get(5);
    }
    
    /**
     * Set <delete_campaign> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setDeleteCampaign(\dstore\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <delete_campaign_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteCampaignNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <delete_campaign_null> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearDeleteCampaignNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <delete_campaign_null> value
     *
     * @return boolean
     */
    public function getDeleteCampaignNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <delete_campaign_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setDeleteCampaignNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <force_delete> has a value
     *
     * @return boolean
     */
    public function hasForceDelete(){
      return $this->_has(6);
    }
    
    /**
     * Clear <force_delete> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearForceDelete(){
      return $this->_clear(6);
    }
    
    /**
     * Get <force_delete> value
     *
     * @return \dstore\values\integerValue
     */
    public function getForceDelete(){
      return $this->_get(6);
    }
    
    /**
     * Set <force_delete> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setForceDelete(\dstore\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <force_delete_null> has a value
     *
     * @return boolean
     */
    public function hasForceDeleteNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <force_delete_null> value
     *
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function clearForceDeleteNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <force_delete_null> value
     *
     * @return boolean
     */
    public function getForceDeleteNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <force_delete_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyCampaigns_Ad\Parameters
     */
    public function setForceDeleteNull( $value){
      return $this->_set(1006, $value);
    }
  }
}

