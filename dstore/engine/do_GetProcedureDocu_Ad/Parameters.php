<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetProcedureDocu_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\do_GetProcedureDocu_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $procedure_name = null;
    
    /**  @var boolean */
    public $procedure_name_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $version = null;
    
    /**  @var boolean */
    public $version_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $get_procedure_header = null;
    
    /**  @var boolean */
    public $get_procedure_header_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetProcedureDocu_Ad.Parameters');

      // OPTIONAL MESSAGE procedure_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "procedure_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL procedure_name_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "procedure_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE version = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL version_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "version_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE get_procedure_header = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "get_procedure_header";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_procedure_header_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "get_procedure_header_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <procedure_name> has a value
     *
     * @return boolean
     */
    public function hasProcedureName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <procedure_name> value
     *
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function clearProcedureName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <procedure_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getProcedureName(){
      return $this->_get(1);
    }
    
    /**
     * Set <procedure_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function setProcedureName(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <procedure_name_null> has a value
     *
     * @return boolean
     */
    public function hasProcedureNameNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <procedure_name_null> value
     *
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function clearProcedureNameNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <procedure_name_null> value
     *
     * @return boolean
     */
    public function getProcedureNameNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <procedure_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function setProcedureNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <version> has a value
     *
     * @return boolean
     */
    public function hasVersion(){
      return $this->_has(2);
    }
    
    /**
     * Clear <version> value
     *
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function clearVersion(){
      return $this->_clear(2);
    }
    
    /**
     * Get <version> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getVersion(){
      return $this->_get(2);
    }
    
    /**
     * Set <version> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function setVersion(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <version_null> has a value
     *
     * @return boolean
     */
    public function hasVersionNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <version_null> value
     *
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function clearVersionNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <version_null> value
     *
     * @return boolean
     */
    public function getVersionNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <version_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function setVersionNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <get_procedure_header> has a value
     *
     * @return boolean
     */
    public function hasGetProcedureHeader(){
      return $this->_has(3);
    }
    
    /**
     * Clear <get_procedure_header> value
     *
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function clearGetProcedureHeader(){
      return $this->_clear(3);
    }
    
    /**
     * Get <get_procedure_header> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getGetProcedureHeader(){
      return $this->_get(3);
    }
    
    /**
     * Set <get_procedure_header> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function setGetProcedureHeader(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <get_procedure_header_null> has a value
     *
     * @return boolean
     */
    public function hasGetProcedureHeaderNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <get_procedure_header_null> value
     *
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function clearGetProcedureHeaderNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <get_procedure_header_null> value
     *
     * @return boolean
     */
    public function getGetProcedureHeaderNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <get_procedure_header_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetProcedureDocu_Ad\Parameters
     */
    public function setGetProcedureHeaderNull( $value){
      return $this->_set(1003, $value);
    }
  }
}
