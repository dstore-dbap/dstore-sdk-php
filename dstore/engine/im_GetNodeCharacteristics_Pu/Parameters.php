<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/im_GetNodeCharacteristics_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\im_GetNodeCharacteristics_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $node_characteristic_id = null;
    
    /**  @var boolean */
    public $node_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id_for_charac_descript = null;
    
    /**  @var boolean */
    public $language_id_for_charac_descript_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $node_charac_category_id = null;
    
    /**  @var boolean */
    public $node_charac_category_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $order_by_sort_no = null;
    
    /**  @var boolean */
    public $order_by_sort_no_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.im_GetNodeCharacteristics_Pu.Parameters');

      // OPTIONAL MESSAGE node_characteristic_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_characteristic_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "node_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id_for_charac_descript = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "language_id_for_charac_descript";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_for_charac_descript_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "language_id_for_charac_descript_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE node_charac_category_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "node_charac_category_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL node_charac_category_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "node_charac_category_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE order_by_sort_no = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "order_by_sort_no";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL order_by_sort_no_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "order_by_sort_no_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <node_characteristic_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function clearNodeCharacteristicId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <node_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeCharacteristicId(){
      return $this->_get(1);
    }
    
    /**
     * Set <node_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function setNodeCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <node_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacteristicIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <node_characteristic_id_null> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function clearNodeCharacteristicIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <node_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getNodeCharacteristicIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <node_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function setNodeCharacteristicIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <language_id_for_charac_descript> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdForCharacDescript(){
      return $this->_has(2);
    }
    
    /**
     * Clear <language_id_for_charac_descript> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function clearLanguageIdForCharacDescript(){
      return $this->_clear(2);
    }
    
    /**
     * Get <language_id_for_charac_descript> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageIdForCharacDescript(){
      return $this->_get(2);
    }
    
    /**
     * Set <language_id_for_charac_descript> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function setLanguageIdForCharacDescript(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <language_id_for_charac_descript_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdForCharacDescriptNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <language_id_for_charac_descript_null> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function clearLanguageIdForCharacDescriptNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <language_id_for_charac_descript_null> value
     *
     * @return boolean
     */
    public function getLanguageIdForCharacDescriptNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <language_id_for_charac_descript_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function setLanguageIdForCharacDescriptNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <node_charac_category_id> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacCategoryId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <node_charac_category_id> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function clearNodeCharacCategoryId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <node_charac_category_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNodeCharacCategoryId(){
      return $this->_get(3);
    }
    
    /**
     * Set <node_charac_category_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function setNodeCharacCategoryId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <node_charac_category_id_null> has a value
     *
     * @return boolean
     */
    public function hasNodeCharacCategoryIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <node_charac_category_id_null> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function clearNodeCharacCategoryIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <node_charac_category_id_null> value
     *
     * @return boolean
     */
    public function getNodeCharacCategoryIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <node_charac_category_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function setNodeCharacCategoryIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <order_by_sort_no> has a value
     *
     * @return boolean
     */
    public function hasOrderBySortNo(){
      return $this->_has(4);
    }
    
    /**
     * Clear <order_by_sort_no> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function clearOrderBySortNo(){
      return $this->_clear(4);
    }
    
    /**
     * Get <order_by_sort_no> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getOrderBySortNo(){
      return $this->_get(4);
    }
    
    /**
     * Set <order_by_sort_no> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function setOrderBySortNo(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <order_by_sort_no_null> has a value
     *
     * @return boolean
     */
    public function hasOrderBySortNoNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <order_by_sort_no_null> value
     *
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function clearOrderBySortNoNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <order_by_sort_no_null> value
     *
     * @return boolean
     */
    public function getOrderBySortNoNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <order_by_sort_no_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\im_GetNodeCharacteristics_Pu\Parameters
     */
    public function setOrderBySortNoNull( $value){
      return $this->_set(1004, $value);
    }
  }
}
