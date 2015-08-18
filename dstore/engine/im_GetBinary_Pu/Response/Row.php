<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetBinary_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetBinary_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $binary_type = null;
    
    /**  @var \dstore\engine\values\byteValue */
    public $binary_code = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetBinary_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_type = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "binary_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_code = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "binary_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\byteValue';
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
     * @return \dstore\engine\im_GetBinary_Pu\Response\Row
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
     * @return \dstore\engine\im_GetBinary_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <binary_type> has a value
     *
     * @return boolean
     */
    public function hasBinaryType(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <binary_type> value
     *
     * @return \dstore\engine\im_GetBinary_Pu\Response\Row
     */
    public function clearBinaryType(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <binary_type> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getBinaryType(){
      return $this->_get(10001);
    }
    
    /**
     * Set <binary_type> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\im_GetBinary_Pu\Response\Row
     */
    public function setBinaryType(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <binary_code> has a value
     *
     * @return boolean
     */
    public function hasBinaryCode(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <binary_code> value
     *
     * @return \dstore\engine\im_GetBinary_Pu\Response\Row
     */
    public function clearBinaryCode(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <binary_code> value
     *
     * @return \dstore\engine\values\byteValue
     */
    public function getBinaryCode(){
      return $this->_get(10002);
    }
    
    /**
     * Set <binary_code> value
     *
     * @param \dstore\engine\values\byteValue $value
     * @return \dstore\engine\im_GetBinary_Pu\Response\Row
     */
    public function setBinaryCode(\dstore\engine\values\byteValue $value){
      return $this->_set(10002, $value);
    }
  }
}
