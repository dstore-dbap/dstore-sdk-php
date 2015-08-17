<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetConvertFactor.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetConvertFactor {

  class Response extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\error\Error */
    public $error = null;
    
    /**  @var \dstore\engine\message\Message[]  */
    public $message = array();
    
    /**  @var \dstore\engine\mi_GetConvertFactor\Response\Row[]  */
    public $row = array();
    
    /**  @var \dstore\engine\values\decimalValue */
    public $factor1 = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $factor2 = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $divisor1 = null;
    
    /**  @var \dstore\engine\values\decimalValue */
    public $divisor2 = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetConvertFactor.Response');

      // OPTIONAL MESSAGE error = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "error";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\error\Error';
      $descriptor->addField($f);

      // REPEATED MESSAGE message = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "message";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\engine\message\Message';
      $descriptor->addField($f);

      // REPEATED MESSAGE row = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "row";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\engine\mi_GetConvertFactor\Response\Row';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE factor1 = 101
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 101;
      $f->name      = "factor1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE factor2 = 102
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 102;
      $f->name      = "factor2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE divisor1 = 103
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 103;
      $f->name      = "divisor1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\decimalValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE divisor2 = 104
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 104;
      $f->name      = "divisor2";
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
     * Check if <error> has a value
     *
     * @return boolean
     */
    public function hasError(){
      return $this->_has(1);
    }
    
    /**
     * Clear <error> value
     *
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function clearError(){
      return $this->_clear(1);
    }
    
    /**
     * Get <error> value
     *
     * @return \dstore\engine\error\Error
     */
    public function getError(){
      return $this->_get(1);
    }
    
    /**
     * Set <error> value
     *
     * @param \dstore\engine\error\Error $value
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function setError(\dstore\engine\error\Error $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <message> has a value
     *
     * @return boolean
     */
    public function hasMessage(){
      return $this->_has(3);
    }
    
    /**
     * Clear <message> value
     *
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function clearMessage(){
      return $this->_clear(3);
    }
    
    /**
     * Get <message> value
     *
     * @param int $idx
     * @return \dstore\engine\message\Message
     */
    public function getMessage($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <message> value
     *
     * @param \dstore\engine\message\Message $value
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function setMessage(\dstore\engine\message\Message $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <message>
     *
     * @return \dstore\engine\message\Message[]
     */
    public function getMessageList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <message>
     *
     * @param \dstore\engine\message\Message $value
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function addMessage(\dstore\engine\message\Message $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <row> has a value
     *
     * @return boolean
     */
    public function hasRow(){
      return $this->_has(4);
    }
    
    /**
     * Clear <row> value
     *
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function clearRow(){
      return $this->_clear(4);
    }
    
    /**
     * Get <row> value
     *
     * @param int $idx
     * @return \dstore\engine\mi_GetConvertFactor\Response\Row
     */
    public function getRow($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <row> value
     *
     * @param \dstore\engine\mi_GetConvertFactor\Response\Row $value
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function setRow(\dstore\engine\mi_GetConvertFactor\Response\Row $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <row>
     *
     * @return \dstore\engine\mi_GetConvertFactor\Response\Row[]
     */
    public function getRowList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <row>
     *
     * @param \dstore\engine\mi_GetConvertFactor\Response\Row $value
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function addRow(\dstore\engine\mi_GetConvertFactor\Response\Row $value){
     return $this->_add(4, $value);
    }
    
    /**
     * Check if <factor1> has a value
     *
     * @return boolean
     */
    public function hasFactor1(){
      return $this->_has(101);
    }
    
    /**
     * Clear <factor1> value
     *
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function clearFactor1(){
      return $this->_clear(101);
    }
    
    /**
     * Get <factor1> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getFactor1(){
      return $this->_get(101);
    }
    
    /**
     * Set <factor1> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function setFactor1(\dstore\engine\values\decimalValue $value){
      return $this->_set(101, $value);
    }
    
    /**
     * Check if <factor2> has a value
     *
     * @return boolean
     */
    public function hasFactor2(){
      return $this->_has(102);
    }
    
    /**
     * Clear <factor2> value
     *
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function clearFactor2(){
      return $this->_clear(102);
    }
    
    /**
     * Get <factor2> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getFactor2(){
      return $this->_get(102);
    }
    
    /**
     * Set <factor2> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function setFactor2(\dstore\engine\values\decimalValue $value){
      return $this->_set(102, $value);
    }
    
    /**
     * Check if <divisor1> has a value
     *
     * @return boolean
     */
    public function hasDivisor1(){
      return $this->_has(103);
    }
    
    /**
     * Clear <divisor1> value
     *
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function clearDivisor1(){
      return $this->_clear(103);
    }
    
    /**
     * Get <divisor1> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getDivisor1(){
      return $this->_get(103);
    }
    
    /**
     * Set <divisor1> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function setDivisor1(\dstore\engine\values\decimalValue $value){
      return $this->_set(103, $value);
    }
    
    /**
     * Check if <divisor2> has a value
     *
     * @return boolean
     */
    public function hasDivisor2(){
      return $this->_has(104);
    }
    
    /**
     * Clear <divisor2> value
     *
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function clearDivisor2(){
      return $this->_clear(104);
    }
    
    /**
     * Get <divisor2> value
     *
     * @return \dstore\engine\values\decimalValue
     */
    public function getDivisor2(){
      return $this->_get(104);
    }
    
    /**
     * Set <divisor2> value
     *
     * @param \dstore\engine\values\decimalValue $value
     * @return \dstore\engine\mi_GetConvertFactor\Response
     */
    public function setDivisor2(\dstore\engine\values\decimalValue $value){
      return $this->_set(104, $value);
    }
  }
}

