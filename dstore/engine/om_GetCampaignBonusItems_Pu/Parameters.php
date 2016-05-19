<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetCampaignBonusItems_Pu.proto
//   Date: 2016-05-19 08:07:48

namespace dstore\engine\om_GetCampaignBonusItems_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $benefit_id = null;
    
    /**  @var boolean */
    public $benefit_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $only_definition = null;
    
    /**  @var boolean */
    public $only_definition_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $sort_by_characteristic_id_list = null;
    
    /**  @var boolean */
    public $sort_by_characteristic_id_list_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $sort_option_list = null;
    
    /**  @var boolean */
    public $sort_option_list_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $inherit_depth_option_list = null;
    
    /**  @var boolean */
    public $inherit_depth_option_list_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $recursive_evaluation_option_list = null;
    
    /**  @var boolean */
    public $recursive_evaluation_option_list_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $get_values_for_sort_by_characs = null;
    
    /**  @var boolean */
    public $get_values_for_sort_by_characs_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetCampaignBonusItems_Pu.Parameters');

      // OPTIONAL MESSAGE benefit_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "benefit_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL benefit_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "benefit_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_definition = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "only_definition";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_definition_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "only_definition_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_by_characteristic_id_list = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "sort_by_characteristic_id_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_by_characteristic_id_list_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "sort_by_characteristic_id_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_option_list = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sort_option_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL sort_option_list_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "sort_option_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE inherit_depth_option_list = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "inherit_depth_option_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL inherit_depth_option_list_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "inherit_depth_option_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE recursive_evaluation_option_list = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "recursive_evaluation_option_list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL recursive_evaluation_option_list_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "recursive_evaluation_option_list_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_values_for_sort_by_characs = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "get_values_for_sort_by_characs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_values_for_sort_by_characs_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "get_values_for_sort_by_characs_null";
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
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearBenefitId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <benefit_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBenefitId(){
      return $this->_get(1);
    }
    
    /**
     * Set <benefit_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setBenefitId(\dstore\values\integerValue $value){
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
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
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
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setBenefitIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <only_definition> has a value
     *
     * @return boolean
     */
    public function hasOnlyDefinition(){
      return $this->_has(2);
    }
    
    /**
     * Clear <only_definition> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearOnlyDefinition(){
      return $this->_clear(2);
    }
    
    /**
     * Get <only_definition> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOnlyDefinition(){
      return $this->_get(2);
    }
    
    /**
     * Set <only_definition> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setOnlyDefinition(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <only_definition_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyDefinitionNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <only_definition_null> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearOnlyDefinitionNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <only_definition_null> value
     *
     * @return boolean
     */
    public function getOnlyDefinitionNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <only_definition_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setOnlyDefinitionNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <sort_by_characteristic_id_list> has a value
     *
     * @return boolean
     */
    public function hasSortByCharacteristicIdList(){
      return $this->_has(3);
    }
    
    /**
     * Clear <sort_by_characteristic_id_list> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearSortByCharacteristicIdList(){
      return $this->_clear(3);
    }
    
    /**
     * Get <sort_by_characteristic_id_list> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSortByCharacteristicIdList(){
      return $this->_get(3);
    }
    
    /**
     * Set <sort_by_characteristic_id_list> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setSortByCharacteristicIdList(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sort_by_characteristic_id_list_null> has a value
     *
     * @return boolean
     */
    public function hasSortByCharacteristicIdListNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <sort_by_characteristic_id_list_null> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearSortByCharacteristicIdListNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <sort_by_characteristic_id_list_null> value
     *
     * @return boolean
     */
    public function getSortByCharacteristicIdListNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <sort_by_characteristic_id_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setSortByCharacteristicIdListNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <sort_option_list> has a value
     *
     * @return boolean
     */
    public function hasSortOptionList(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sort_option_list> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearSortOptionList(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sort_option_list> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSortOptionList(){
      return $this->_get(4);
    }
    
    /**
     * Set <sort_option_list> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setSortOptionList(\dstore\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <sort_option_list_null> has a value
     *
     * @return boolean
     */
    public function hasSortOptionListNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <sort_option_list_null> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearSortOptionListNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <sort_option_list_null> value
     *
     * @return boolean
     */
    public function getSortOptionListNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <sort_option_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setSortOptionListNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <inherit_depth_option_list> has a value
     *
     * @return boolean
     */
    public function hasInheritDepthOptionList(){
      return $this->_has(5);
    }
    
    /**
     * Clear <inherit_depth_option_list> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearInheritDepthOptionList(){
      return $this->_clear(5);
    }
    
    /**
     * Get <inherit_depth_option_list> value
     *
     * @return \dstore\values\stringValue
     */
    public function getInheritDepthOptionList(){
      return $this->_get(5);
    }
    
    /**
     * Set <inherit_depth_option_list> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setInheritDepthOptionList(\dstore\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <inherit_depth_option_list_null> has a value
     *
     * @return boolean
     */
    public function hasInheritDepthOptionListNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <inherit_depth_option_list_null> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearInheritDepthOptionListNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <inherit_depth_option_list_null> value
     *
     * @return boolean
     */
    public function getInheritDepthOptionListNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <inherit_depth_option_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setInheritDepthOptionListNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <recursive_evaluation_option_list> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluationOptionList(){
      return $this->_has(6);
    }
    
    /**
     * Clear <recursive_evaluation_option_list> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearRecursiveEvaluationOptionList(){
      return $this->_clear(6);
    }
    
    /**
     * Get <recursive_evaluation_option_list> value
     *
     * @return \dstore\values\stringValue
     */
    public function getRecursiveEvaluationOptionList(){
      return $this->_get(6);
    }
    
    /**
     * Set <recursive_evaluation_option_list> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setRecursiveEvaluationOptionList(\dstore\values\stringValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <recursive_evaluation_option_list_null> has a value
     *
     * @return boolean
     */
    public function hasRecursiveEvaluationOptionListNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <recursive_evaluation_option_list_null> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearRecursiveEvaluationOptionListNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <recursive_evaluation_option_list_null> value
     *
     * @return boolean
     */
    public function getRecursiveEvaluationOptionListNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <recursive_evaluation_option_list_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setRecursiveEvaluationOptionListNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <get_values_for_sort_by_characs> has a value
     *
     * @return boolean
     */
    public function hasGetValuesForSortByCharacs(){
      return $this->_has(7);
    }
    
    /**
     * Clear <get_values_for_sort_by_characs> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearGetValuesForSortByCharacs(){
      return $this->_clear(7);
    }
    
    /**
     * Get <get_values_for_sort_by_characs> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getGetValuesForSortByCharacs(){
      return $this->_get(7);
    }
    
    /**
     * Set <get_values_for_sort_by_characs> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setGetValuesForSortByCharacs(\dstore\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <get_values_for_sort_by_characs_null> has a value
     *
     * @return boolean
     */
    public function hasGetValuesForSortByCharacsNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <get_values_for_sort_by_characs_null> value
     *
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function clearGetValuesForSortByCharacsNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <get_values_for_sort_by_characs_null> value
     *
     * @return boolean
     */
    public function getGetValuesForSortByCharacsNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <get_values_for_sort_by_characs_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetCampaignBonusItems_Pu\Parameters
     */
    public function setGetValuesForSortByCharacsNull( $value){
      return $this->_set(1007, $value);
    }
  }
}

