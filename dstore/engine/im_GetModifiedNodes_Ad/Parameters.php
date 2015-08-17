<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetModifiedNodes_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetModifiedNodes_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\timestampValue */
    public $from_date_and_time = null;
    
    /**  @var boolean */
    public $from_date_and_time_null = null;
    
    /**  @var \dstore\engine\values\timestampValue */
    public $to_date_and_time = null;
    
    /**  @var boolean */
    public $to_date_and_time_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $domain_tree_node_id = null;
    
    /**  @var boolean */
    public $domain_tree_node_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_tree_node_ids = null;
    
    /**  @var boolean */
    public $get_tree_node_ids_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $filter_ids_in_one_id = null;
    
    /**  @var boolean */
    public $filter_ids_in_one_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $output_into_one_id = null;
    
    /**  @var boolean */
    public $output_into_one_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $include_deactivated_nodes = null;
    
    /**  @var boolean */
    public $include_deactivated_nodes_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $level_id = null;
    
    /**  @var boolean */
    public $level_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $node_modif_def_meta_info_type_ids = null;
    
    /**  @var boolean */
    public $node_modif_def_meta_info_type_ids_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $t_node_modif_def_meta_info_type_ids = null;
    
    /**  @var boolean */
    public $t_node_modif_def_meta_info_type_ids_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $start_at_row_no = null;
    
    /**  @var boolean */
    public $start_at_row_no_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $row_count = null;
    
    /**  @var boolean */
    public $row_count_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetModifiedNodes_Ad.Parameters');

      // OPTIONAL MESSAGE from_date_and_time = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "from_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL from_date_and_time_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "from_date_and_time_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE to_date_and_time = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "to_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\timestampValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL to_date_and_time_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "to_date_and_time_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE domain_tree_node_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "domain_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL domain_tree_node_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "domain_tree_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_tree_node_ids = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "get_tree_node_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_tree_node_ids_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "get_tree_node_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE filter_ids_in_one_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "filter_ids_in_one_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL filter_ids_in_one_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "filter_ids_in_one_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE output_into_one_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "output_into_one_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL output_into_one_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "output_into_one_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE include_deactivated_nodes = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "include_deactivated_nodes";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL include_deactivated_nodes_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "include_deactivated_nodes_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE level_id = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "level_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL level_id_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "level_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_modif_def_meta_info_type_ids = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "node_modif_def_meta_info_type_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_modif_def_meta_info_type_ids_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "node_modif_def_meta_info_type_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE t_node_modif_def_meta_info_type_ids = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "t_node_modif_def_meta_info_type_ids";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL t_node_modif_def_meta_info_type_ids_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "t_node_modif_def_meta_info_type_ids_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE start_at_row_no = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "start_at_row_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL start_at_row_no_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "start_at_row_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE row_count = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "row_count";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL row_count_null = 1012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1012;
      $f->name      = "row_count_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <from_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasFromDateAndTime(){
      return $this->_has(1);
    }
    
    /**
     * Clear <from_date_and_time> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearFromDateAndTime(){
      return $this->_clear(1);
    }
    
    /**
     * Get <from_date_and_time> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getFromDateAndTime(){
      return $this->_get(1);
    }
    
    /**
     * Set <from_date_and_time> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setFromDateAndTime(\dstore\engine\values\timestampValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <from_date_and_time_null> has a value
     *
     * @return boolean
     */
    public function hasFromDateAndTimeNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <from_date_and_time_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearFromDateAndTimeNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <from_date_and_time_null> value
     *
     * @return boolean
     */
    public function getFromDateAndTimeNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <from_date_and_time_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setFromDateAndTimeNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <to_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasToDateAndTime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <to_date_and_time> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearToDateAndTime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <to_date_and_time> value
     *
     * @return \dstore\engine\values\timestampValue
     */
    public function getToDateAndTime(){
      return $this->_get(2);
    }
    
    /**
     * Set <to_date_and_time> value
     *
     * @param \dstore\engine\values\timestampValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setToDateAndTime(\dstore\engine\values\timestampValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <to_date_and_time_null> has a value
     *
     * @return boolean
     */
    public function hasToDateAndTimeNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <to_date_and_time_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearToDateAndTimeNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <to_date_and_time_null> value
     *
     * @return boolean
     */
    public function getToDateAndTimeNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <to_date_and_time_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setToDateAndTimeNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <domain_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasDomainTreeNodeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <domain_tree_node_id> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearDomainTreeNodeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <domain_tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getDomainTreeNodeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <domain_tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setDomainTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <domain_tree_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasDomainTreeNodeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <domain_tree_node_id_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearDomainTreeNodeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <domain_tree_node_id_null> value
     *
     * @return boolean
     */
    public function getDomainTreeNodeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <domain_tree_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setDomainTreeNodeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <get_tree_node_ids> has a value
     *
     * @return boolean
     */
    public function hasGetTreeNodeIds(){
      return $this->_has(4);
    }
    
    /**
     * Clear <get_tree_node_ids> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearGetTreeNodeIds(){
      return $this->_clear(4);
    }
    
    /**
     * Get <get_tree_node_ids> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetTreeNodeIds(){
      return $this->_get(4);
    }
    
    /**
     * Set <get_tree_node_ids> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setGetTreeNodeIds(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <get_tree_node_ids_null> has a value
     *
     * @return boolean
     */
    public function hasGetTreeNodeIdsNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <get_tree_node_ids_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearGetTreeNodeIdsNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <get_tree_node_ids_null> value
     *
     * @return boolean
     */
    public function getGetTreeNodeIdsNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <get_tree_node_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setGetTreeNodeIdsNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <filter_ids_in_one_id> has a value
     *
     * @return boolean
     */
    public function hasFilterIdsInOneId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <filter_ids_in_one_id> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearFilterIdsInOneId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <filter_ids_in_one_id> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getFilterIdsInOneId(){
      return $this->_get(5);
    }
    
    /**
     * Set <filter_ids_in_one_id> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setFilterIdsInOneId(\dstore\engine\values\booleanValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <filter_ids_in_one_id_null> has a value
     *
     * @return boolean
     */
    public function hasFilterIdsInOneIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <filter_ids_in_one_id_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearFilterIdsInOneIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <filter_ids_in_one_id_null> value
     *
     * @return boolean
     */
    public function getFilterIdsInOneIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <filter_ids_in_one_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setFilterIdsInOneIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <output_into_one_id> has a value
     *
     * @return boolean
     */
    public function hasOutputIntoOneId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <output_into_one_id> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearOutputIntoOneId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <output_into_one_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOutputIntoOneId(){
      return $this->_get(6);
    }
    
    /**
     * Set <output_into_one_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setOutputIntoOneId(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <output_into_one_id_null> has a value
     *
     * @return boolean
     */
    public function hasOutputIntoOneIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <output_into_one_id_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearOutputIntoOneIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <output_into_one_id_null> value
     *
     * @return boolean
     */
    public function getOutputIntoOneIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <output_into_one_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setOutputIntoOneIdNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <include_deactivated_nodes> has a value
     *
     * @return boolean
     */
    public function hasIncludeDeactivatedNodes(){
      return $this->_has(7);
    }
    
    /**
     * Clear <include_deactivated_nodes> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearIncludeDeactivatedNodes(){
      return $this->_clear(7);
    }
    
    /**
     * Get <include_deactivated_nodes> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIncludeDeactivatedNodes(){
      return $this->_get(7);
    }
    
    /**
     * Set <include_deactivated_nodes> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setIncludeDeactivatedNodes(\dstore\engine\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <include_deactivated_nodes_null> has a value
     *
     * @return boolean
     */
    public function hasIncludeDeactivatedNodesNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <include_deactivated_nodes_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearIncludeDeactivatedNodesNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <include_deactivated_nodes_null> value
     *
     * @return boolean
     */
    public function getIncludeDeactivatedNodesNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <include_deactivated_nodes_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setIncludeDeactivatedNodesNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <level_id> has a value
     *
     * @return boolean
     */
    public function hasLevelId(){
      return $this->_has(8);
    }
    
    /**
     * Clear <level_id> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearLevelId(){
      return $this->_clear(8);
    }
    
    /**
     * Get <level_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLevelId(){
      return $this->_get(8);
    }
    
    /**
     * Set <level_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setLevelId(\dstore\engine\values\integerValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <level_id_null> has a value
     *
     * @return boolean
     */
    public function hasLevelIdNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <level_id_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearLevelIdNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <level_id_null> value
     *
     * @return boolean
     */
    public function getLevelIdNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <level_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setLevelIdNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <node_modif_def_meta_info_type_ids> has a value
     *
     * @return boolean
     */
    public function hasNodeModifDefMetaInfoTypeIds(){
      return $this->_has(9);
    }
    
    /**
     * Clear <node_modif_def_meta_info_type_ids> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearNodeModifDefMetaInfoTypeIds(){
      return $this->_clear(9);
    }
    
    /**
     * Get <node_modif_def_meta_info_type_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getNodeModifDefMetaInfoTypeIds(){
      return $this->_get(9);
    }
    
    /**
     * Set <node_modif_def_meta_info_type_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setNodeModifDefMetaInfoTypeIds(\dstore\engine\values\stringValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <node_modif_def_meta_info_type_ids_null> has a value
     *
     * @return boolean
     */
    public function hasNodeModifDefMetaInfoTypeIdsNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <node_modif_def_meta_info_type_ids_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearNodeModifDefMetaInfoTypeIdsNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <node_modif_def_meta_info_type_ids_null> value
     *
     * @return boolean
     */
    public function getNodeModifDefMetaInfoTypeIdsNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <node_modif_def_meta_info_type_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setNodeModifDefMetaInfoTypeIdsNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <t_node_modif_def_meta_info_type_ids> has a value
     *
     * @return boolean
     */
    public function hasTNodeModifDefMetaInfoTypeIds(){
      return $this->_has(10);
    }
    
    /**
     * Clear <t_node_modif_def_meta_info_type_ids> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearTNodeModifDefMetaInfoTypeIds(){
      return $this->_clear(10);
    }
    
    /**
     * Get <t_node_modif_def_meta_info_type_ids> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getTNodeModifDefMetaInfoTypeIds(){
      return $this->_get(10);
    }
    
    /**
     * Set <t_node_modif_def_meta_info_type_ids> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setTNodeModifDefMetaInfoTypeIds(\dstore\engine\values\stringValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <t_node_modif_def_meta_info_type_ids_null> has a value
     *
     * @return boolean
     */
    public function hasTNodeModifDefMetaInfoTypeIdsNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <t_node_modif_def_meta_info_type_ids_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearTNodeModifDefMetaInfoTypeIdsNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <t_node_modif_def_meta_info_type_ids_null> value
     *
     * @return boolean
     */
    public function getTNodeModifDefMetaInfoTypeIdsNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <t_node_modif_def_meta_info_type_ids_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setTNodeModifDefMetaInfoTypeIdsNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <start_at_row_no> has a value
     *
     * @return boolean
     */
    public function hasStartAtRowNo(){
      return $this->_has(11);
    }
    
    /**
     * Clear <start_at_row_no> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearStartAtRowNo(){
      return $this->_clear(11);
    }
    
    /**
     * Get <start_at_row_no> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getStartAtRowNo(){
      return $this->_get(11);
    }
    
    /**
     * Set <start_at_row_no> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setStartAtRowNo(\dstore\engine\values\integerValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <start_at_row_no_null> has a value
     *
     * @return boolean
     */
    public function hasStartAtRowNoNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <start_at_row_no_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearStartAtRowNoNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <start_at_row_no_null> value
     *
     * @return boolean
     */
    public function getStartAtRowNoNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <start_at_row_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setStartAtRowNoNull( $value){
      return $this->_set(1011, $value);
    }
    
    /**
     * Check if <row_count> has a value
     *
     * @return boolean
     */
    public function hasRowCount(){
      return $this->_has(12);
    }
    
    /**
     * Clear <row_count> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearRowCount(){
      return $this->_clear(12);
    }
    
    /**
     * Get <row_count> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRowCount(){
      return $this->_get(12);
    }
    
    /**
     * Set <row_count> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setRowCount(\dstore\engine\values\integerValue $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <row_count_null> has a value
     *
     * @return boolean
     */
    public function hasRowCountNull(){
      return $this->_has(1012);
    }
    
    /**
     * Clear <row_count_null> value
     *
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function clearRowCountNull(){
      return $this->_clear(1012);
    }
    
    /**
     * Get <row_count_null> value
     *
     * @return boolean
     */
    public function getRowCountNull(){
      return $this->_get(1012);
    }
    
    /**
     * Set <row_count_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetModifiedNodes_Ad\Parameters
     */
    public function setRowCountNull( $value){
      return $this->_set(1012, $value);
    }
  }
}

