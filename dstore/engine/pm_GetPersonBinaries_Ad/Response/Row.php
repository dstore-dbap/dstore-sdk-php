<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_GetPersonBinaries_Ad.proto
//   Date: 2016-05-19 08:07:54

namespace dstore\engine\pm_GetPersonBinaries_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $binary_description = null;
    
    /**  @var \dstore\values\integerValue */
    public $binary_code_id = null;
    
    /**  @var \dstore\values\bytesValue */
    public $thumbnail_code = null;
    
    /**  @var \dstore\values\bytesValue */
    public $binary_code = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_GetPersonBinaries_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_description = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "binary_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_code_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "binary_code_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE thumbnail_code = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "thumbnail_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\bytesValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE binary_code = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "binary_code";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\bytesValue';
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
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
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
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function clearPersonId(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(10001);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function setPersonId(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <binary_description> has a value
     *
     * @return boolean
     */
    public function hasBinaryDescription(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <binary_description> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function clearBinaryDescription(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <binary_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getBinaryDescription(){
      return $this->_get(10002);
    }
    
    /**
     * Set <binary_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function setBinaryDescription(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <binary_code_id> has a value
     *
     * @return boolean
     */
    public function hasBinaryCodeId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <binary_code_id> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function clearBinaryCodeId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <binary_code_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getBinaryCodeId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <binary_code_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function setBinaryCodeId(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <thumbnail_code> has a value
     *
     * @return boolean
     */
    public function hasThumbnailCode(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <thumbnail_code> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function clearThumbnailCode(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <thumbnail_code> value
     *
     * @return \dstore\values\bytesValue
     */
    public function getThumbnailCode(){
      return $this->_get(10004);
    }
    
    /**
     * Set <thumbnail_code> value
     *
     * @param \dstore\values\bytesValue $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function setThumbnailCode(\dstore\values\bytesValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <binary_code> has a value
     *
     * @return boolean
     */
    public function hasBinaryCode(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <binary_code> value
     *
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function clearBinaryCode(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <binary_code> value
     *
     * @return \dstore\values\bytesValue
     */
    public function getBinaryCode(){
      return $this->_get(10005);
    }
    
    /**
     * Set <binary_code> value
     *
     * @param \dstore\values\bytesValue $value
     * @return \dstore\engine\pm_GetPersonBinaries_Ad\Response\Row
     */
    public function setBinaryCode(\dstore\values\bytesValue $value){
      return $this->_set(10005, $value);
    }
  }
}

