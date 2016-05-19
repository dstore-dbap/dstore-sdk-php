<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetTreeNodePMStatistics_Ad.proto
//   Date: 2016-05-19 08:07:57

namespace dstore\engine\st_GetTreeNodePMStatistics_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $month = null;
    
    /**  @var \dstore\values\decimalValue */
    public $total_value = null;
    
    /**  @var \dstore\values\integerValue */
    public $year = null;
    
    /**  @var \dstore\values\integerValue */
    public $h_tree_node_id = null;
    
    /**  @var \dstore\values\decimalValue */
    public $direct_value = null;
    
    /**  @var \dstore\values\integerValue */
    public $basic_characteristic_number = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetTreeNodePMStatistics_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE month = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "month";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE total_value = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "total_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE year = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "year";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE h_tree_node_id = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "h_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE direct_value = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "direct_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE basic_characteristic_number = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "basic_characteristic_number";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <row_id> has a value
     *
     * @return boolean
     */
    public function hasRowId(){
      return $this->_has(10000);
    }
    
    /**
     * Clear <row_id> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function clearRowId(){
      return $this->_clear(10000);
    }
    
    /**
     * Get <row_id> value
     *
     * @return int
     */
    public function getRowId(){
      return $this->_get(10000);
    }
    
    /**
     * Set <row_id> value
     *
     * @param int $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <month> has a value
     *
     * @return boolean
     */
    public function hasMonth(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <month> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function clearMonth(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <month> value
     *
     * @return \dstore\values\integerValue
     */
    public function getMonth(){
      return $this->_get(10001);
    }
    
    /**
     * Set <month> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function setMonth(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <total_value> has a value
     *
     * @return boolean
     */
    public function hasTotalValue(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <total_value> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function clearTotalValue(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <total_value> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getTotalValue(){
      return $this->_get(10002);
    }
    
    /**
     * Set <total_value> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function setTotalValue(\dstore\values\decimalValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <year> has a value
     *
     * @return boolean
     */
    public function hasYear(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <year> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function clearYear(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <year> value
     *
     * @return \dstore\values\integerValue
     */
    public function getYear(){
      return $this->_get(10003);
    }
    
    /**
     * Set <year> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function setYear(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <h_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeId(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <h_tree_node_id> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function clearHTreeNodeId(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <h_tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getHTreeNodeId(){
      return $this->_get(10004);
    }
    
    /**
     * Set <h_tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function setHTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <direct_value> has a value
     *
     * @return boolean
     */
    public function hasDirectValue(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <direct_value> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function clearDirectValue(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <direct_value> value
     *
     * @return \dstore\values\decimalValue
     */
    public function getDirectValue(){
      return $this->_get(10005);
    }
    
    /**
     * Set <direct_value> value
     *
     * @param \dstore\values\decimalValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function setDirectValue(\dstore\values\decimalValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <basic_characteristic_number> has a value
     *
     * @return boolean
     */
    public function hasBasicCharacteristicNumber(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <basic_characteristic_number> value
     *
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function clearBasicCharacteristicNumber(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <basic_characteristic_number> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBasicCharacteristicNumber(){
      return $this->_get(10006);
    }
    
    /**
     * Set <basic_characteristic_number> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetTreeNodePMStatistics_Ad\Response\Row
     */
    public function setBasicCharacteristicNumber(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
  }
}

