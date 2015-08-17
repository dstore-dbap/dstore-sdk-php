<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetOrderInformationTypes_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetOrderInformationTypes_Ad {

  class Response extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\error\Error */
    public $error = null;
    
    /**  @var \dstore\engine\message\Message[]  */
    public $message = array();
    
    /**  @var \dstore\engine\om_GetOrderInformationTypes_Ad\Response\Row[]  */
    public $row = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetOrderInformationTypes_Ad.Response');

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
      $f->reference = '\dstore\engine\om_GetOrderInformationTypes_Ad\Response\Row';
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
     * @return \dstore\engine\om_GetOrderInformationTypes_Ad\Response
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
     * @return \dstore\engine\om_GetOrderInformationTypes_Ad\Response
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
     * @return \dstore\engine\om_GetOrderInformationTypes_Ad\Response
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
     * @return \dstore\engine\om_GetOrderInformationTypes_Ad\Response
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
     * @return \dstore\engine\om_GetOrderInformationTypes_Ad\Response
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
     * @return \dstore\engine\om_GetOrderInformationTypes_Ad\Response
     */
    public function clearRow(){
      return $this->_clear(4);
    }
    
    /**
     * Get <row> value
     *
     * @param int $idx
     * @return \dstore\engine\om_GetOrderInformationTypes_Ad\Response\Row
     */
    public function getRow($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <row> value
     *
     * @param \dstore\engine\om_GetOrderInformationTypes_Ad\Response\Row $value
     * @return \dstore\engine\om_GetOrderInformationTypes_Ad\Response
     */
    public function setRow(\dstore\engine\om_GetOrderInformationTypes_Ad\Response\Row $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <row>
     *
     * @return \dstore\engine\om_GetOrderInformationTypes_Ad\Response\Row[]
     */
    public function getRowList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <row>
     *
     * @param \dstore\engine\om_GetOrderInformationTypes_Ad\Response\Row $value
     * @return \dstore\engine\om_GetOrderInformationTypes_Ad\Response
     */
    public function addRow(\dstore\engine\om_GetOrderInformationTypes_Ad\Response\Row $value){
     return $this->_add(4, $value);
    }
  }
}

