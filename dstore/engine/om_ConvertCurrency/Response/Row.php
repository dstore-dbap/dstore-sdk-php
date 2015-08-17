<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_ConvertCurrency.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_ConvertCurrency\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $converted_value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_ConvertCurrency.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE converted_value = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "converted_value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
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
     * @return \dstore\engine\om_ConvertCurrency\Response\Row
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
     * @return \dstore\engine\om_ConvertCurrency\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <converted_value> has a value
     *
     * @return boolean
     */
    public function hasConvertedValue(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <converted_value> value
     *
     * @return \dstore\engine\om_ConvertCurrency\Response\Row
     */
    public function clearConvertedValue(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <converted_value> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getConvertedValue(){
      return $this->_get(10001);
    }
    
    /**
     * Set <converted_value> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\om_ConvertCurrency\Response\Row
     */
    public function setConvertedValue(\dstore\engine\values\decimalValue $value){
      return $this->_set(10001, $value);
    }
  }
}

