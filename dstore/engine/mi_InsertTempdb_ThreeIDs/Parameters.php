<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_InsertTempdb_ThreeIDs.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_InsertTempdb_ThreeIDs {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $id_list1 = null;
    
    /**  @var boolean */
    public $id_list1_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $id_list2 = null;
    
    /**  @var boolean */
    public $id_list2_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $id_list3 = null;
    
    /**  @var boolean */
    public $id_list3_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete = null;
    
    /**  @var boolean */
    public $delete_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_InsertTempdb_ThreeIDs.Parameters');

      // OPTIONAL MESSAGE id_list1 = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id_list1";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL id_list1_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "id_list1_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE id_list2 = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "id_list2";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL id_list2_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "id_list2_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE id_list3 = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "id_list3";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL id_list3_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "id_list3_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "delete";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "delete_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id_list1> has a value
     *
     * @return boolean
     */
    public function hasIdList1(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id_list1> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function clearIdList1(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id_list1> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getIdList1(){
      return $this->_get(1);
    }
    
    /**
     * Set <id_list1> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function setIdList1(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <id_list1_null> has a value
     *
     * @return boolean
     */
    public function hasIdList1Null(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <id_list1_null> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function clearIdList1Null(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <id_list1_null> value
     *
     * @return boolean
     */
    public function getIdList1Null(){
      return $this->_get(1001);
    }
    
    /**
     * Set <id_list1_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function setIdList1Null( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <id_list2> has a value
     *
     * @return boolean
     */
    public function hasIdList2(){
      return $this->_has(2);
    }
    
    /**
     * Clear <id_list2> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function clearIdList2(){
      return $this->_clear(2);
    }
    
    /**
     * Get <id_list2> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getIdList2(){
      return $this->_get(2);
    }
    
    /**
     * Set <id_list2> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function setIdList2(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <id_list2_null> has a value
     *
     * @return boolean
     */
    public function hasIdList2Null(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <id_list2_null> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function clearIdList2Null(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <id_list2_null> value
     *
     * @return boolean
     */
    public function getIdList2Null(){
      return $this->_get(1002);
    }
    
    /**
     * Set <id_list2_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function setIdList2Null( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <id_list3> has a value
     *
     * @return boolean
     */
    public function hasIdList3(){
      return $this->_has(3);
    }
    
    /**
     * Clear <id_list3> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function clearIdList3(){
      return $this->_clear(3);
    }
    
    /**
     * Get <id_list3> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getIdList3(){
      return $this->_get(3);
    }
    
    /**
     * Set <id_list3> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function setIdList3(\dstore\engine\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <id_list3_null> has a value
     *
     * @return boolean
     */
    public function hasIdList3Null(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <id_list3_null> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function clearIdList3Null(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <id_list3_null> value
     *
     * @return boolean
     */
    public function getIdList3Null(){
      return $this->_get(1003);
    }
    
    /**
     * Set <id_list3_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function setIdList3Null( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <delete> has a value
     *
     * @return boolean
     */
    public function hasDelete(){
      return $this->_has(4);
    }
    
    /**
     * Clear <delete> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function clearDelete(){
      return $this->_clear(4);
    }
    
    /**
     * Get <delete> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDelete(){
      return $this->_get(4);
    }
    
    /**
     * Set <delete> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function setDelete(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <delete_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <delete_null> value
     *
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function clearDeleteNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <delete_null> value
     *
     * @return boolean
     */
    public function getDeleteNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <delete_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_InsertTempdb_ThreeIDs\Parameters
     */
    public function setDeleteNull( $value){
      return $this->_set(1004, $value);
    }
  }
}

