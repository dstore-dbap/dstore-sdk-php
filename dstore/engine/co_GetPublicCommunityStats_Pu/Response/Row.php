<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/co_GetPublicCommunityStats_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\co_GetPublicCommunityStats_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $value = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $statistic_information_id = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $statistic_information = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.co_GetPublicCommunityStats_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE value = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE statistic_information_id = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "statistic_information_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE statistic_information = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "statistic_information";
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
     * @return \dstore\engine\co_GetPublicCommunityStats_Pu\Response\Row
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
     * @return \dstore\engine\co_GetPublicCommunityStats_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <value> value
     *
     * @return \dstore\engine\co_GetPublicCommunityStats_Pu\Response\Row
     */
    public function clearValue(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <value> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getValue(){
      return $this->_get(10001);
    }
    
    /**
     * Set <value> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\co_GetPublicCommunityStats_Pu\Response\Row
     */
    public function setValue(\dstore\engine\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <statistic_information_id> has a value
     *
     * @return boolean
     */
    public function hasStatisticInformationId(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <statistic_information_id> value
     *
     * @return \dstore\engine\co_GetPublicCommunityStats_Pu\Response\Row
     */
    public function clearStatisticInformationId(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <statistic_information_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getStatisticInformationId(){
      return $this->_get(10002);
    }
    
    /**
     * Set <statistic_information_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\co_GetPublicCommunityStats_Pu\Response\Row
     */
    public function setStatisticInformationId(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <statistic_information> has a value
     *
     * @return boolean
     */
    public function hasStatisticInformation(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <statistic_information> value
     *
     * @return \dstore\engine\co_GetPublicCommunityStats_Pu\Response\Row
     */
    public function clearStatisticInformation(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <statistic_information> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getStatisticInformation(){
      return $this->_get(10003);
    }
    
    /**
     * Set <statistic_information> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\co_GetPublicCommunityStats_Pu\Response\Row
     */
    public function setStatisticInformation(\dstore\engine\values\stringValue $value){
      return $this->_set(10003, $value);
    }
  }
}

