<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetVariantMatrix_Ad.proto
//   Date: 2016-05-19 08:07:43

namespace dstore\engine\im_GetVariantMatrix_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $y_axis_value_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $h_tree_node_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $tree_node_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\values\stringValue */
    public $x_axis_value = null;
    
    /**  @var \dstore\values\integerValue */
    public $value_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $y_axis_value = null;
    
    /**  @var \dstore\values\integerValue */
    public $x_axis_value_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetVariantMatrix_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE y_axis_value_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "y_axis_value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE h_tree_node_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "h_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE tree_node_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE x_axis_value = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "x_axis_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE y_axis_value = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "y_axis_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE x_axis_value_id = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "x_axis_value_id";
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
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
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
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <y_axis_value_id> has a value
     *
     * @return boolean
     */
    public function hasYAxisValueId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <y_axis_value_id> value
     *
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function clearYAxisValueId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <y_axis_value_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getYAxisValueId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <y_axis_value_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function setYAxisValueId(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <h_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <h_tree_node_id> value
     *
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function clearHTreeNodeId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <h_tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getHTreeNodeId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <h_tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function setHTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasTreeNodeId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <tree_node_id> value
     *
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function clearTreeNodeId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <tree_node_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getTreeNodeId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <tree_node_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function setTreeNodeId(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue(){
      return $this->_get(10004);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function setValue(\dstore\values\stringValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <x_axis_value> has a value
     *
     * @return boolean
     */
    public function hasXAxisValue(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <x_axis_value> value
     *
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function clearXAxisValue(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <x_axis_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getXAxisValue(){
      return $this->_get(10005);
    }
    
    /**
     * Set <x_axis_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function setXAxisValue(\dstore\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <value_id> has a value
     *
     * @return boolean
     */
    public function hasValueId(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <value_id> value
     *
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function clearValueId(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <value_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getValueId(){
      return $this->_get(10006);
    }
    
    /**
     * Set <value_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function setValueId(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <y_axis_value> has a value
     *
     * @return boolean
     */
    public function hasYAxisValue(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <y_axis_value> value
     *
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function clearYAxisValue(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <y_axis_value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getYAxisValue(){
      return $this->_get(10007);
    }
    
    /**
     * Set <y_axis_value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function setYAxisValue(\dstore\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <x_axis_value_id> has a value
     *
     * @return boolean
     */
    public function hasXAxisValueId(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <x_axis_value_id> value
     *
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function clearXAxisValueId(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <x_axis_value_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getXAxisValueId(){
      return $this->_get(10008);
    }
    
    /**
     * Set <x_axis_value_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetVariantMatrix_Ad\Response\Row
     */
    public function setXAxisValueId(\dstore\values\integerValue $value){
      return $this->_set(10008, $value);
    }
  }
}

