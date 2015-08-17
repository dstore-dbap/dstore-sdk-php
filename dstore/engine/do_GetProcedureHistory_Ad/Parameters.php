<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetProcedureHistory_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\do_GetProcedureHistory_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $procedure_name = null;
    
    /**  @var boolean */
    public $procedure_name_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $dstore_version = null;
    
    /**  @var boolean */
    public $dstore_version_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetProcedureHistory_Ad.Parameters');

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

      // OPTIONAL MESSAGE dstore_version = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "dstore_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL dstore_version_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "dstore_version_null";
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
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Parameters
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
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Parameters
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
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Parameters
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
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Parameters
     */
    public function setProcedureNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <dstore_version> has a value
     *
     * @return boolean
     */
    public function hasDstoreVersion(){
      return $this->_has(2);
    }
    
    /**
     * Clear <dstore_version> value
     *
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Parameters
     */
    public function clearDstoreVersion(){
      return $this->_clear(2);
    }
    
    /**
     * Get <dstore_version> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDstoreVersion(){
      return $this->_get(2);
    }
    
    /**
     * Set <dstore_version> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Parameters
     */
    public function setDstoreVersion(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <dstore_version_null> has a value
     *
     * @return boolean
     */
    public function hasDstoreVersionNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <dstore_version_null> value
     *
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Parameters
     */
    public function clearDstoreVersionNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <dstore_version_null> value
     *
     * @return boolean
     */
    public function getDstoreVersionNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <dstore_version_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetProcedureHistory_Ad\Parameters
     */
    public function setDstoreVersionNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

