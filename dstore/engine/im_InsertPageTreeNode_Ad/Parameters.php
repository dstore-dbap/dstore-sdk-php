<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_InsertPageTreeNode_Ad.proto
//   Date: 2016-05-19 08:07:43

namespace dstore\engine\im_InsertPageTreeNode_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $page_description = null;
    
    /**  @var boolean */
    public $page_description_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_InsertPageTreeNode_Ad.Parameters');

      // OPTIONAL MESSAGE page_description = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "page_description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL page_description_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "page_description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <page_description> has a value
     *
     * @return boolean
     */
    public function hasPageDescription(){
      return $this->_has(1);
    }
    
    /**
     * Clear <page_description> value
     *
     * @return \dstore\engine\im_InsertPageTreeNode_Ad\Parameters
     */
    public function clearPageDescription(){
      return $this->_clear(1);
    }
    
    /**
     * Get <page_description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPageDescription(){
      return $this->_get(1);
    }
    
    /**
     * Set <page_description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\im_InsertPageTreeNode_Ad\Parameters
     */
    public function setPageDescription(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <page_description_null> has a value
     *
     * @return boolean
     */
    public function hasPageDescriptionNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <page_description_null> value
     *
     * @return \dstore\engine\im_InsertPageTreeNode_Ad\Parameters
     */
    public function clearPageDescriptionNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <page_description_null> value
     *
     * @return boolean
     */
    public function getPageDescriptionNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <page_description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_InsertPageTreeNode_Ad\Parameters
     */
    public function setPageDescriptionNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

