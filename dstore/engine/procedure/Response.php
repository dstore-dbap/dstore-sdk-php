<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedure.proto
//   Date: 2016-05-19 08:08:09

namespace dstore\engine\procedure {

  class Response extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\error\Error */
    public $error = null;
    
    /**  @var \dstore\engine\message\Message[]  */
    public $message = array();
    
    /**  @var int */
    public $call_id = null;
    
    /**  @var \dstore\engine\procedure\Response\Row[]  */
    public $row = array();
    
    /**  @var \dstore\engine\procedure\Response\OutputParametersEntry[]  */
    public $output_parameters = array();
    
    /**  @var \dstore\engine\metainformation\MetaInformation[]  */
    public $meta_information = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.procedure.Response');

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

      // OPTIONAL INT32 call_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "call_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE row = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "row";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\engine\procedure\Response\Row';
      $descriptor->addField($f);

      // REPEATED MESSAGE output_parameters = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "output_parameters";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\engine\procedure\Response\OutputParametersEntry';
      $descriptor->addField($f);

      // REPEATED MESSAGE meta_information = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "meta_information";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\dstore\engine\metainformation\MetaInformation';
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
     * @return \dstore\engine\procedure\Response
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
     * @return \dstore\engine\procedure\Response
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
     * @return \dstore\engine\procedure\Response
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
     * @return \dstore\engine\procedure\Response
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
     * @return \dstore\engine\procedure\Response
     */
    public function addMessage(\dstore\engine\message\Message $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <call_id> has a value
     *
     * @return boolean
     */
    public function hasCallId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <call_id> value
     *
     * @return \dstore\engine\procedure\Response
     */
    public function clearCallId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <call_id> value
     *
     * @return int
     */
    public function getCallId(){
      return $this->_get(4);
    }
    
    /**
     * Set <call_id> value
     *
     * @param int $value
     * @return \dstore\engine\procedure\Response
     */
    public function setCallId( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <row> has a value
     *
     * @return boolean
     */
    public function hasRow(){
      return $this->_has(5);
    }
    
    /**
     * Clear <row> value
     *
     * @return \dstore\engine\procedure\Response
     */
    public function clearRow(){
      return $this->_clear(5);
    }
    
    /**
     * Get <row> value
     *
     * @param int $idx
     * @return \dstore\engine\procedure\Response\Row
     */
    public function getRow($idx = NULL){
      return $this->_get(5, $idx);
    }
    
    /**
     * Set <row> value
     *
     * @param \dstore\engine\procedure\Response\Row $value
     * @return \dstore\engine\procedure\Response
     */
    public function setRow(\dstore\engine\procedure\Response\Row $value, $idx = NULL){
      return $this->_set(5, $value, $idx);
    }
    
    /**
     * Get all elements of <row>
     *
     * @return \dstore\engine\procedure\Response\Row[]
     */
    public function getRowList(){
     return $this->_get(5);
    }
    
    /**
     * Add a new element to <row>
     *
     * @param \dstore\engine\procedure\Response\Row $value
     * @return \dstore\engine\procedure\Response
     */
    public function addRow(\dstore\engine\procedure\Response\Row $value){
     return $this->_add(5, $value);
    }
    
    /**
     * Check if <output_parameters> has a value
     *
     * @return boolean
     */
    public function hasOutputParameters(){
      return $this->_has(6);
    }
    
    /**
     * Clear <output_parameters> value
     *
     * @return \dstore\engine\procedure\Response
     */
    public function clearOutputParameters(){
      return $this->_clear(6);
    }
    
    /**
     * Get <output_parameters> value
     *
     * @param int $idx
     * @return \dstore\engine\procedure\Response\OutputParametersEntry
     */
    public function getOutputParameters($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <output_parameters> value
     *
     * @param \dstore\engine\procedure\Response\OutputParametersEntry $value
     * @return \dstore\engine\procedure\Response
     */
    public function setOutputParameters(\dstore\engine\procedure\Response\OutputParametersEntry $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <output_parameters>
     *
     * @return \dstore\engine\procedure\Response\OutputParametersEntry[]
     */
    public function getOutputParametersList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <output_parameters>
     *
     * @param \dstore\engine\procedure\Response\OutputParametersEntry $value
     * @return \dstore\engine\procedure\Response
     */
    public function addOutputParameters(\dstore\engine\procedure\Response\OutputParametersEntry $value){
     return $this->_add(6, $value);
    }
    
    /**
     * Check if <meta_information> has a value
     *
     * @return boolean
     */
    public function hasMetaInformation(){
      return $this->_has(7);
    }
    
    /**
     * Clear <meta_information> value
     *
     * @return \dstore\engine\procedure\Response
     */
    public function clearMetaInformation(){
      return $this->_clear(7);
    }
    
    /**
     * Get <meta_information> value
     *
     * @param int $idx
     * @return \dstore\engine\metainformation\MetaInformation
     */
    public function getMetaInformation($idx = NULL){
      return $this->_get(7, $idx);
    }
    
    /**
     * Set <meta_information> value
     *
     * @param \dstore\engine\metainformation\MetaInformation $value
     * @return \dstore\engine\procedure\Response
     */
    public function setMetaInformation(\dstore\engine\metainformation\MetaInformation $value, $idx = NULL){
      return $this->_set(7, $value, $idx);
    }
    
    /**
     * Get all elements of <meta_information>
     *
     * @return \dstore\engine\metainformation\MetaInformation[]
     */
    public function getMetaInformationList(){
     return $this->_get(7);
    }
    
    /**
     * Add a new element to <meta_information>
     *
     * @param \dstore\engine\metainformation\MetaInformation $value
     * @return \dstore\engine\procedure\Response
     */
    public function addMetaInformation(\dstore\engine\metainformation\MetaInformation $value){
     return $this->_add(7, $value);
    }
  }
}

