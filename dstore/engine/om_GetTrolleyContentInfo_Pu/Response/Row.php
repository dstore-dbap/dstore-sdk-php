<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetTrolleyContentInfo_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetTrolleyContentInfo_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visitor_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $information_type_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $h_tree_node_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $information = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetTrolleyContentInfo_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visitor_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "visitor_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information_type_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "information_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE h_tree_node_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "h_tree_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE information = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "information";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
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
     * @return \dstore\engine\om_GetTrolleyContentInfo_Pu\Response\Row
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
     * @return \dstore\engine\om_GetTrolleyContentInfo_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <visitor_id> has a value
     *
     * @return boolean
     */
    public function hasVisitorId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <visitor_id> value
     *
     * @return \dstore\engine\om_GetTrolleyContentInfo_Pu\Response\Row
     */
    public function clearVisitorId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <visitor_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisitorId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <visitor_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleyContentInfo_Pu\Response\Row
     */
    public function setVisitorId(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <information_type_id> has a value
     *
     * @return boolean
     */
    public function hasInformationTypeId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <information_type_id> value
     *
     * @return \dstore\engine\om_GetTrolleyContentInfo_Pu\Response\Row
     */
    public function clearInformationTypeId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <information_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getInformationTypeId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <information_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleyContentInfo_Pu\Response\Row
     */
    public function setInformationTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <h_tree_node_id> has a value
     *
     * @return boolean
     */
    public function hasHTreeNodeId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <h_tree_node_id> value
     *
     * @return \dstore\engine\om_GetTrolleyContentInfo_Pu\Response\Row
     */
    public function clearHTreeNodeId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <h_tree_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getHTreeNodeId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <h_tree_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleyContentInfo_Pu\Response\Row
     */
    public function setHTreeNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <information> has a value
     *
     * @return boolean
     */
    public function hasInformation(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <information> value
     *
     * @return \dstore\engine\om_GetTrolleyContentInfo_Pu\Response\Row
     */
    public function clearInformation(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <information> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getInformation(){
      return $this->_get(10004);
    }
    
    /**
     * Set <information> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetTrolleyContentInfo_Pu\Response\Row
     */
    public function setInformation(\dstore\engine\values\stringValue $value){
      return $this->_set(10004, $value);
    }
  }
}

