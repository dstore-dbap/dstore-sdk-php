<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetBatchJobs_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetBatchJobs_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $procedure_name = null;
    
    /**  @var boolean */
    public $procedure_name_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $order_by_column = null;
    
    /**  @var boolean */
    public $order_by_column_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $order_desc = null;
    
    /**  @var boolean */
    public $order_desc_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetBatchJobs_Ad.Parameters');

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

      // OPTIONAL MESSAGE order_by_column = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "order_by_column";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_by_column_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "order_by_column_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_desc = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "order_desc";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_desc_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "order_desc_null";
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
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
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
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
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
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
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
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
     */
    public function setProcedureNameNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <order_by_column> has a value
     *
     * @return boolean
     */
    public function hasOrderByColumn(){
      return $this->_has(2);
    }
    
    /**
     * Clear <order_by_column> value
     *
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
     */
    public function clearOrderByColumn(){
      return $this->_clear(2);
    }
    
    /**
     * Get <order_by_column> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getOrderByColumn(){
      return $this->_get(2);
    }
    
    /**
     * Set <order_by_column> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
     */
    public function setOrderByColumn(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <order_by_column_null> has a value
     *
     * @return boolean
     */
    public function hasOrderByColumnNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <order_by_column_null> value
     *
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
     */
    public function clearOrderByColumnNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <order_by_column_null> value
     *
     * @return boolean
     */
    public function getOrderByColumnNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <order_by_column_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
     */
    public function setOrderByColumnNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <order_desc> has a value
     *
     * @return boolean
     */
    public function hasOrderDesc(){
      return $this->_has(3);
    }
    
    /**
     * Clear <order_desc> value
     *
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
     */
    public function clearOrderDesc(){
      return $this->_clear(3);
    }
    
    /**
     * Get <order_desc> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getOrderDesc(){
      return $this->_get(3);
    }
    
    /**
     * Set <order_desc> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
     */
    public function setOrderDesc(\dstore\engine\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <order_desc_null> has a value
     *
     * @return boolean
     */
    public function hasOrderDescNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <order_desc_null> value
     *
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
     */
    public function clearOrderDescNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <order_desc_null> value
     *
     * @return boolean
     */
    public function getOrderDescNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <order_desc_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_GetBatchJobs_Ad\Parameters
     */
    public function setOrderDescNull( $value){
      return $this->_set(1003, $value);
    }
  }
}
