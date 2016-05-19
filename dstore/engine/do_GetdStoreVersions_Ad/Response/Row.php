<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetdStoreVersions_Ad.proto
//   Date: 2016-05-19 08:07:40

namespace dstore\engine\do_GetdStoreVersions_Ad\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\integerValue */
    public $version_sort_no = null;
    
    /**  @var \dstore\values\stringValue */
    public $dstore_version = null;
    
    /**  @var \dstore\values\timestampValue */
    public $release_date_and_time = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetdStoreVersions_Ad.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE version_sort_no = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "version_sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE dstore_version = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "dstore_version";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE release_date_and_time = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "release_date_and_time";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\timestampValue';
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
     * @return \dstore\engine\do_GetdStoreVersions_Ad\Response\Row
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
     * @return \dstore\engine\do_GetdStoreVersions_Ad\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <version_sort_no> has a value
     *
     * @return boolean
     */
    public function hasVersionSortNo(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <version_sort_no> value
     *
     * @return \dstore\engine\do_GetdStoreVersions_Ad\Response\Row
     */
    public function clearVersionSortNo(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <version_sort_no> value
     *
     * @return \dstore\values\integerValue
     */
    public function getVersionSortNo(){
      return $this->_get(10001);
    }
    
    /**
     * Set <version_sort_no> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\do_GetdStoreVersions_Ad\Response\Row
     */
    public function setVersionSortNo(\dstore\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <dstore_version> has a value
     *
     * @return boolean
     */
    public function hasDstoreVersion(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <dstore_version> value
     *
     * @return \dstore\engine\do_GetdStoreVersions_Ad\Response\Row
     */
    public function clearDstoreVersion(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <dstore_version> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDstoreVersion(){
      return $this->_get(10002);
    }
    
    /**
     * Set <dstore_version> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\do_GetdStoreVersions_Ad\Response\Row
     */
    public function setDstoreVersion(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <release_date_and_time> has a value
     *
     * @return boolean
     */
    public function hasReleaseDateAndTime(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <release_date_and_time> value
     *
     * @return \dstore\engine\do_GetdStoreVersions_Ad\Response\Row
     */
    public function clearReleaseDateAndTime(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <release_date_and_time> value
     *
     * @return \dstore\values\timestampValue
     */
    public function getReleaseDateAndTime(){
      return $this->_get(10003);
    }
    
    /**
     * Set <release_date_and_time> value
     *
     * @param \dstore\values\timestampValue $value
     * @return \dstore\engine\do_GetdStoreVersions_Ad\Response\Row
     */
    public function setReleaseDateAndTime(\dstore\values\timestampValue $value){
      return $this->_set(10003, $value);
    }
  }
}

