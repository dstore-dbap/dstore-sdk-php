<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/st_ModifyPages_Ad.proto
//   Date: 2016-05-19 08:07:57

namespace dstore\engine\st_ModifyPages_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $page = null;
    
    /**  @var boolean */
    public $page_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $filename = null;
    
    /**  @var boolean */
    public $filename_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.st_ModifyPages_Ad.Parameters');

      // OPTIONAL MESSAGE page = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "page";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL page_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "page_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE filename = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "filename";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL filename_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "filename_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <page> has a value
     *
     * @return boolean
     */
    public function hasPage(){
      return $this->_has(1);
    }
    
    /**
     * Clear <page> value
     *
     * @return \dstore\engine\st_ModifyPages_Ad\Parameters
     */
    public function clearPage(){
      return $this->_clear(1);
    }
    
    /**
     * Get <page> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPage(){
      return $this->_get(1);
    }
    
    /**
     * Set <page> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\st_ModifyPages_Ad\Parameters
     */
    public function setPage(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <page_null> has a value
     *
     * @return boolean
     */
    public function hasPageNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <page_null> value
     *
     * @return \dstore\engine\st_ModifyPages_Ad\Parameters
     */
    public function clearPageNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <page_null> value
     *
     * @return boolean
     */
    public function getPageNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <page_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_ModifyPages_Ad\Parameters
     */
    public function setPageNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <filename> has a value
     *
     * @return boolean
     */
    public function hasFilename(){
      return $this->_has(2);
    }
    
    /**
     * Clear <filename> value
     *
     * @return \dstore\engine\st_ModifyPages_Ad\Parameters
     */
    public function clearFilename(){
      return $this->_clear(2);
    }
    
    /**
     * Get <filename> value
     *
     * @return \dstore\values\stringValue
     */
    public function getFilename(){
      return $this->_get(2);
    }
    
    /**
     * Set <filename> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\st_ModifyPages_Ad\Parameters
     */
    public function setFilename(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <filename_null> has a value
     *
     * @return boolean
     */
    public function hasFilenameNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <filename_null> value
     *
     * @return \dstore\engine\st_ModifyPages_Ad\Parameters
     */
    public function clearFilenameNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <filename_null> value
     *
     * @return boolean
     */
    public function getFilenameNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <filename_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\st_ModifyPages_Ad\Parameters
     */
    public function setFilenameNull( $value){
      return $this->_set(1002, $value);
    }
  }
}

