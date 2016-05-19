<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ModifyTrolleyContentInfo_Pu.proto
//   Date: 2016-05-19 08:07:53

namespace dstore\engine\om_ModifyTrolleyContentInfo_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $nesting_level_for_input_data = null;
    
    /**  @var boolean */
    public $nesting_level_for_input_data_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $change_all_or_nothing = null;
    
    /**  @var boolean */
    public $change_all_or_nothing_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $only_new_data = null;
    
    /**  @var boolean */
    public $only_new_data_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $h_tree_node_id = null;
    
    /**  @var boolean */
    public $h_tree_node_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $information_type_id = null;
    
    /**  @var boolean */
    public $information_type_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $information = null;
    
    /**  @var boolean */
    public $information_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ModifyTrolleyContentInfo_Pu.Parameters');

      // OPTIONAL MESSAGE unique_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE nesting_level_for_input_data = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "nesting_level_for_input_data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL nesting_level_for_input_data_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "nesting_level_for_input_data_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE change_all_or_nothing = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "change_all_or_nothing";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL change_all_or_nothing_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "change_all_or_nothing_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE only_new_data = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "only_new_data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL only_new_data_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "only_new_data_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "country_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE h_tree_node_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "h_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL h_tree_node_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "h_tree_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type_id = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_type_id_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "information_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "information";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL information_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "information_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(1);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setUniqueId(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <nesting_level_for_input_data> has a value
     *
     * @return boolean
     */
    public function hasNestingLevelForInputData(){
      return $this->_has(2);
    }
    
    /**
     * Clear <nesting_level_for_input_data> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearNestingLevelForInputData(){
      return $this->_clear(2);
    }
    
    /**
     * Get <nesting_level_for_input_data> value
     *
     * @return \dstore\values\integerValue
     */
    public function getNestingLevelForInputData(){
      return $this->_get(2);
    }
    
    /**
     * Set <nesting_level_for_input_data> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setNestingLevelForInputData(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <nesting_level_for_input_data_null> has a value
     *
     * @return boolean
     */
    public function hasNestingLevelForInputDataNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <nesting_level_for_input_data_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearNestingLevelForInputDataNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <nesting_level_for_input_data_null> value
     *
     * @return boolean
     */
    public function getNestingLevelForInputDataNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <nesting_level_for_input_data_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setNestingLevelForInputDataNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <change_all_or_nothing> has a value
     *
     * @return boolean
     */
    public function hasChangeAllOrNothing(){
      return $this->_has(3);
    }
    
    /**
     * Clear <change_all_or_nothing> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearChangeAllOrNothing(){
      return $this->_clear(3);
    }
    
    /**
     * Get <change_all_or_nothing> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getChangeAllOrNothing(){
      return $this->_get(3);
    }
    
    /**
     * Set <change_all_or_nothing> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setChangeAllOrNothing(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <change_all_or_nothing_null> has a value
     *
     * @return boolean
     */
    public function hasChangeAllOrNothingNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <change_all_or_nothing_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearChangeAllOrNothingNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <change_all_or_nothing_null> value
     *
     * @return boolean
     */
    public function getChangeAllOrNothingNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <change_all_or_nothing_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setChangeAllOrNothingNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <only_new_data> has a value
     *
     * @return boolean
     */
    public function hasOnlyNewData(){
      return $this->_has(4);
    }
    
    /**
     * Clear <only_new_data> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearOnlyNewData(){
      return $this->_clear(4);
    }
    
    /**
     * Get <only_new_data> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getOnlyNewData(){
      return $this->_get(4);
    }
    
    /**
     * Set <only_new_data> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setOnlyNewData(\dstore\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <only_new_data_null> has a value
     *
     * @return boolean
     */
    public function hasOnlyNewDataNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <only_new_data_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearOnlyNewDataNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <only_new_data_null> value
     *
     * @return boolean
     */
    public function getOnlyNewDataNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <only_new_data_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setOnlyNewDataNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(5);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearCountry(){
      return $this->_clear(5);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\values\stringValue
     */
    public function getCountry(){
      return $this->_get(5);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setCountry(\dstore\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <h_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <h_tree_node_id> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearHTreeNodeId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <h_tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getHTreeNodeId(){
      return $this->_get(6);
    }
    
    /**
     * Set <h_tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setHTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <h_tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <h_tree_node_id_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearHTreeNodeIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <h_tree_node_id_null> value
     *
     * @return boolean
     */
    public function getHTreeNodeIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <h_tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setHTreeNodeIdNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(7);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearInformationTypeId(){
      return $this->_clear(7);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(7);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setInformationTypeId(\dstore\values\integerValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <information_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeIdNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <information_type_id_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearInformationTypeIdNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <information_type_id_null> value
     *
     * @return boolean
     */
    public function getInformationTypeIdNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <information_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setInformationTypeIdNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <information> has a value
     *
     * @return boolean
     */
    public function hasInformation(){
      return $this->_has(8);
    }
    
    /**
     * Clear <information> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearInformation(){
      return $this->_clear(8);
    }
    
    /**
     * Get <information> value
     *
     * @return \dstore\values\stringValue
     */
    public function getInformation(){
      return $this->_get(8);
    }
    
    /**
     * Set <information> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setInformation(\dstore\values\stringValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <information_null> has a value
     *
     * @return boolean
     */
    public function hasInformationNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <information_null> value
     *
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function clearInformationNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <information_null> value
     *
     * @return boolean
     */
    public function getInformationNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <information_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_ModifyTrolleyContentInfo_Pu\Parameters
     */
    public function setInformationNull( $value){
      return $this->_set(1008, $value);
    }
  }
}

