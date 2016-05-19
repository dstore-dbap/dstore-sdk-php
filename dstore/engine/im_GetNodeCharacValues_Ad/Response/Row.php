<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetNodeCharacValues_Ad.proto
//   Date: 2016-05-19 08:07:42

namespace dstore\engine\im_GetNodeCharacValues_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\booleanValue */
    public $has_details = null;
    
    /**  @var \dstore\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\values\booleanValue */
    public $has_binaries = null;
    
    /**  @var \dstore\values\booleanValue */
    public $is_used = null;
    
    /**  @var \dstore\values\integerValue */
    public $value_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $sort_no = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetNodeCharacValues_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE has_details = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "has_details";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_characteristic_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE has_binaries = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "has_binaries";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_used = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "is_used";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value_id = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "value_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE sort_no = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "sort_no";
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
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
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
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <has_details> has a value
     *
     * @return boolean
     */
    public function hasHasDetails(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <has_details> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function clearHasDetails(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <has_details> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getHasDetails(){
      return $this->_get(10001);
    }
    
    /**
     * Set <has_details> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function setHasDetails(\dstore\values\booleanValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function setNodeCharacteristicId(\dstore\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\values\stringValue
     */
    public function getValue(){
      return $this->_get(10003);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function setValue(\dstore\values\stringValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <has_binaries> has a value
     *
     * @return boolean
     */
    public function hasHasBinaries(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <has_binaries> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function clearHasBinaries(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <has_binaries> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getHasBinaries(){
      return $this->_get(10004);
    }
    
    /**
     * Set <has_binaries> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function setHasBinaries(\dstore\values\booleanValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <is_used> has a value
     *
     * @return boolean
     */
    public function hasIsUsed(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <is_used> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function clearIsUsed(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <is_used> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getIsUsed(){
      return $this->_get(10005);
    }
    
    /**
     * Set <is_used> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function setIsUsed(\dstore\values\booleanValue $value){
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
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
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
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function setValueId(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <sort_no> has a value
     *
     * @return boolean
     */
    public function hasSortNo(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <sort_no> value
     *
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function clearSortNo(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getSortNo(){
      return $this->_get(10007);
    }
    
    /**
     * Set <sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacValues_Ad\Response\Row
     */
    public function setSortNo(\dstore\values\integerValue $value){
      return $this->_set(10007, $value);
    }
  }
}

