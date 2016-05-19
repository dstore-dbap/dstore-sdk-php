<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_LogPageVisits_Pu.proto
//   Date: 2016-05-19 08:07:57

namespace dstore\engine\st_LogPageVisits_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $page_no = null;
    
    /**  @var boolean */
    public $page_no_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_LogPageVisits_Pu.Parameters');

      // OPTIONAL MESSAGE unique_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE page_no = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "page_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL page_no_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "page_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\st_LogPageVisits_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(1);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\st_LogPageVisits_Pu\Parameters
     */
    public function setUniqueId(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\st_LogPageVisits_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_LogPageVisits_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <page_no> has a value
     *
     * @return boolean
     */
    public function hasPageNo(){
      return $this->_has(2);
    }
    
    /**
     * Clear <page_no> value
     *
     * @return \dstore\engine\st_LogPageVisits_Pu\Parameters
     */
    public function clearPageNo(){
      return $this->_clear(2);
    }
    
    /**
     * Get <page_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPageNo(){
      return $this->_get(2);
    }
    
    /**
     * Set <page_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_LogPageVisits_Pu\Parameters
     */
    public function setPageNo(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <page_no_null> has a value
     *
     * @return boolean
     */
    public function hasPageNoNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <page_no_null> value
     *
     * @return \dstore\engine\st_LogPageVisits_Pu\Parameters
     */
    public function clearPageNoNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <page_no_null> value
     *
     * @return boolean
     */
    public function getPageNoNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <page_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_LogPageVisits_Pu\Parameters
     */
    public function setPageNoNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

