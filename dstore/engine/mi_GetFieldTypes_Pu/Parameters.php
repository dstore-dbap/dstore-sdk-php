<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetFieldTypes_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetFieldTypes_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $field_type_id = null;
    
    /**  @var boolean */
    public $field_type_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetFieldTypes_Pu.Parameters');

      // OPTIONAL MESSAGE field_type_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "field_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL field_type_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "field_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <field_type_id> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <field_type_id> value
     *
     * @return \dstore\engine\mi_GetFieldTypes_Pu\Parameters
     */
    public function clearFieldTypeId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <field_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getFieldTypeId(){
      return $this->_get(1);
    }
    
    /**
     * Set <field_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetFieldTypes_Pu\Parameters
     */
    public function setFieldTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <field_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasFieldTypeIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <field_type_id_null> value
     *
     * @return \dstore\engine\mi_GetFieldTypes_Pu\Parameters
     */
    public function clearFieldTypeIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <field_type_id_null> value
     *
     * @return boolean
     */
    public function getFieldTypeIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <field_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetFieldTypes_Pu\Parameters
     */
    public function setFieldTypeIdNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

