<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_GetPages_Ad.proto
//   Date: 2016-05-19 08:07:56

namespace dstore\engine\st_GetPages_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\integerValue */
    public $page_no = null;
    
    /**  @var boolean */
    public $page_no_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_GetPages_Ad.Parameters');

      // OPTIONAL MESSAGE page_no = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "page_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL page_no_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
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
     * Check if <page_no> has a value
     *
     * @return boolean
     */
    public function hasPageNo(){
      return $this->_has(1);
    }
    
    /**
     * Clear <page_no> value
     *
     * @return \dstore\engine\st_GetPages_Ad\Parameters
     */
    public function clearPageNo(){
      return $this->_clear(1);
    }
    
    /**
     * Get <page_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPageNo(){
      return $this->_get(1);
    }
    
    /**
     * Set <page_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\st_GetPages_Ad\Parameters
     */
    public function setPageNo(\dstore\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <page_no_null> has a value
     *
     * @return boolean
     */
    public function hasPageNoNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <page_no_null> value
     *
     * @return \dstore\engine\st_GetPages_Ad\Parameters
     */
    public function clearPageNoNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <page_no_null> value
     *
     * @return boolean
     */
    public function getPageNoNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <page_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_GetPages_Ad\Parameters
     */
    public function setPageNoNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

