<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetVCodeOriginTypes_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetVCodeOriginTypes_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $v_code_origin_type = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $v_code_origin_type_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $v_code_origin_type_description = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetVCodeOriginTypes_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE v_code_origin_type = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "v_code_origin_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE v_code_origin_type_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "v_code_origin_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE v_code_origin_type_description = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "v_code_origin_type_description";
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
     * @return \dstore\engine\om_GetVCodeOriginTypes_Ad\Response\Row
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
     * @return \dstore\engine\om_GetVCodeOriginTypes_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <v_code_origin_type> has a value
     *
     * @return boolean
     */
    public function hasVCodeOriginType(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <v_code_origin_type> value
     *
     * @return \dstore\engine\om_GetVCodeOriginTypes_Ad\Response\Row
     */
    public function clearVCodeOriginType(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <v_code_origin_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getVCodeOriginType(){
      return $this->_get(10001);
    }
    
    /**
     * Set <v_code_origin_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetVCodeOriginTypes_Ad\Response\Row
     */
    public function setVCodeOriginType(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <v_code_origin_type_id> has a value
     *
     * @return boolean
     */
    public function hasVCodeOriginTypeId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <v_code_origin_type_id> value
     *
     * @return \dstore\engine\om_GetVCodeOriginTypes_Ad\Response\Row
     */
    public function clearVCodeOriginTypeId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <v_code_origin_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVCodeOriginTypeId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <v_code_origin_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetVCodeOriginTypes_Ad\Response\Row
     */
    public function setVCodeOriginTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <v_code_origin_type_description> has a value
     *
     * @return boolean
     */
    public function hasVCodeOriginTypeDescription(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <v_code_origin_type_description> value
     *
     * @return \dstore\engine\om_GetVCodeOriginTypes_Ad\Response\Row
     */
    public function clearVCodeOriginTypeDescription(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <v_code_origin_type_description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getVCodeOriginTypeDescription(){
      return $this->_get(10003);
    }
    
    /**
     * Set <v_code_origin_type_description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetVCodeOriginTypes_Ad\Response\Row
     */
    public function setVCodeOriginTypeDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
  }
}

