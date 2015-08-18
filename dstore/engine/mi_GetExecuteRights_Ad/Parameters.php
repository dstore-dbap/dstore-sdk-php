<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetExecuteRights_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetExecuteRights_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $procedure_name = null;
    
    /**  @var boolean */
    public $procedure_name_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $get_admin_procedures_for_user_id = null;
    
    /**  @var boolean */
    public $get_admin_procedures_for_user_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $procedure_category_id = null;
    
    /**  @var boolean */
    public $procedure_category_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetExecuteRights_Ad.Parameters');

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

      // OPTIONAL MESSAGE get_admin_procedures_for_user_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "get_admin_procedures_for_user_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL get_admin_procedures_for_user_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "get_admin_procedures_for_user_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE procedure_category_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "procedure_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL procedure_category_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "procedure_category_id_null";
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
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
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
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
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
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
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
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
     */
    public function setProcedureNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <get_admin_procedures_for_user_id> has a value
     *
     * @return boolean
     */
    public function hasGetAdminProceduresForUserId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <get_admin_procedures_for_user_id> value
     *
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
     */
    public function clearGetAdminProceduresForUserId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <get_admin_procedures_for_user_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getGetAdminProceduresForUserId(){
      return $this->_get(2);
    }
    
    /**
     * Set <get_admin_procedures_for_user_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
     */
    public function setGetAdminProceduresForUserId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <get_admin_procedures_for_user_id_null> has a value
     *
     * @return boolean
     */
    public function hasGetAdminProceduresForUserIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <get_admin_procedures_for_user_id_null> value
     *
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
     */
    public function clearGetAdminProceduresForUserIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <get_admin_procedures_for_user_id_null> value
     *
     * @return boolean
     */
    public function getGetAdminProceduresForUserIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <get_admin_procedures_for_user_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
     */
    public function setGetAdminProceduresForUserIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <procedure_category_id> has a value
     *
     * @return boolean
     */
    public function hasProcedureCategoryId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <procedure_category_id> value
     *
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
     */
    public function clearProcedureCategoryId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <procedure_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getProcedureCategoryId(){
      return $this->_get(3);
    }
    
    /**
     * Set <procedure_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
     */
    public function setProcedureCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <procedure_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasProcedureCategoryIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <procedure_category_id_null> value
     *
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
     */
    public function clearProcedureCategoryIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <procedure_category_id_null> value
     *
     * @return boolean
     */
    public function getProcedureCategoryIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <procedure_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetExecuteRights_Ad\Parameters
     */
    public function setProcedureCategoryIdNull( $value){
      return $this->_set(1003, $value);
    }
  }
}
