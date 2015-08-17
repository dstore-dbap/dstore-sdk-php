<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_ModifyTemplates_Ad.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_ModifyTemplates_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $template_id = null;
    
    /**  @var boolean */
    public $template_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $description = null;
    
    /**  @var boolean */
    public $description_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $language_id = null;
    
    /**  @var boolean */
    public $language_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $frame_name = null;
    
    /**  @var boolean */
    public $frame_name_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $file_name = null;
    
    /**  @var boolean */
    public $file_name_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $can_be_source_template = null;
    
    /**  @var boolean */
    public $can_be_source_template_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $is_real_time_template = null;
    
    /**  @var boolean */
    public $is_real_time_template_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $delete_template = null;
    
    /**  @var boolean */
    public $delete_template_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_ModifyTemplates_Ad.Parameters');

      // OPTIONAL MESSAGE template_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "template_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL template_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "template_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL description_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE language_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "language_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL language_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "language_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE frame_name = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "frame_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL frame_name_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "frame_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE file_name = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "file_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL file_name_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "file_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE can_be_source_template = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "can_be_source_template";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL can_be_source_template_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "can_be_source_template_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE is_real_time_template = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "is_real_time_template";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL is_real_time_template_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "is_real_time_template_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delete_template = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "delete_template";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delete_template_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "delete_template_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <template_id> has a value
     *
     * @return boolean
     */
    public function hasTemplateId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <template_id> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearTemplateId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <template_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getTemplateId(){
      return $this->_get(1);
    }
    
    /**
     * Set <template_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setTemplateId(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <template_id_null> has a value
     *
     * @return boolean
     */
    public function hasTemplateIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <template_id_null> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearTemplateIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <template_id_null> value
     *
     * @return boolean
     */
    public function getTemplateIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <template_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setTemplateIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(2);
    }
    
    /**
     * Clear <description> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearDescription(){
      return $this->_clear(2);
    }
    
    /**
     * Get <description> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getDescription(){
      return $this->_get(2);
    }
    
    /**
     * Set <description> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setDescription(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <description_null> has a value
     *
     * @return boolean
     */
    public function hasDescriptionNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <description_null> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearDescriptionNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <description_null> value
     *
     * @return boolean
     */
    public function getDescriptionNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setDescriptionNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <language_id> has a value
     *
     * @return boolean
     */
    public function hasLanguageId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <language_id> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearLanguageId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <language_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getLanguageId(){
      return $this->_get(3);
    }
    
    /**
     * Set <language_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setLanguageId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <language_id_null> has a value
     *
     * @return boolean
     */
    public function hasLanguageIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <language_id_null> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearLanguageIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <language_id_null> value
     *
     * @return boolean
     */
    public function getLanguageIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <language_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setLanguageIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <frame_name> has a value
     *
     * @return boolean
     */
    public function hasFrameName(){
      return $this->_has(4);
    }
    
    /**
     * Clear <frame_name> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearFrameName(){
      return $this->_clear(4);
    }
    
    /**
     * Get <frame_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFrameName(){
      return $this->_get(4);
    }
    
    /**
     * Set <frame_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setFrameName(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <frame_name_null> has a value
     *
     * @return boolean
     */
    public function hasFrameNameNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <frame_name_null> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearFrameNameNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <frame_name_null> value
     *
     * @return boolean
     */
    public function getFrameNameNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <frame_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setFrameNameNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <file_name> has a value
     *
     * @return boolean
     */
    public function hasFileName(){
      return $this->_has(5);
    }
    
    /**
     * Clear <file_name> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearFileName(){
      return $this->_clear(5);
    }
    
    /**
     * Get <file_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getFileName(){
      return $this->_get(5);
    }
    
    /**
     * Set <file_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setFileName(\dstore\engine\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <file_name_null> has a value
     *
     * @return boolean
     */
    public function hasFileNameNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <file_name_null> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearFileNameNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <file_name_null> value
     *
     * @return boolean
     */
    public function getFileNameNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <file_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setFileNameNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <can_be_source_template> has a value
     *
     * @return boolean
     */
    public function hasCanBeSourceTemplate(){
      return $this->_has(6);
    }
    
    /**
     * Clear <can_be_source_template> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearCanBeSourceTemplate(){
      return $this->_clear(6);
    }
    
    /**
     * Get <can_be_source_template> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCanBeSourceTemplate(){
      return $this->_get(6);
    }
    
    /**
     * Set <can_be_source_template> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setCanBeSourceTemplate(\dstore\engine\values\booleanValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <can_be_source_template_null> has a value
     *
     * @return boolean
     */
    public function hasCanBeSourceTemplateNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <can_be_source_template_null> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearCanBeSourceTemplateNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <can_be_source_template_null> value
     *
     * @return boolean
     */
    public function getCanBeSourceTemplateNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <can_be_source_template_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setCanBeSourceTemplateNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <is_real_time_template> has a value
     *
     * @return boolean
     */
    public function hasIsRealTimeTemplate(){
      return $this->_has(7);
    }
    
    /**
     * Clear <is_real_time_template> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearIsRealTimeTemplate(){
      return $this->_clear(7);
    }
    
    /**
     * Get <is_real_time_template> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getIsRealTimeTemplate(){
      return $this->_get(7);
    }
    
    /**
     * Set <is_real_time_template> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setIsRealTimeTemplate(\dstore\engine\values\booleanValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <is_real_time_template_null> has a value
     *
     * @return boolean
     */
    public function hasIsRealTimeTemplateNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <is_real_time_template_null> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearIsRealTimeTemplateNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <is_real_time_template_null> value
     *
     * @return boolean
     */
    public function getIsRealTimeTemplateNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <is_real_time_template_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setIsRealTimeTemplateNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <delete_template> has a value
     *
     * @return boolean
     */
    public function hasDeleteTemplate(){
      return $this->_has(8);
    }
    
    /**
     * Clear <delete_template> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearDeleteTemplate(){
      return $this->_clear(8);
    }
    
    /**
     * Get <delete_template> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getDeleteTemplate(){
      return $this->_get(8);
    }
    
    /**
     * Set <delete_template> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setDeleteTemplate(\dstore\engine\values\booleanValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <delete_template_null> has a value
     *
     * @return boolean
     */
    public function hasDeleteTemplateNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <delete_template_null> value
     *
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function clearDeleteTemplateNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <delete_template_null> value
     *
     * @return boolean
     */
    public function getDeleteTemplateNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <delete_template_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\mi_ModifyTemplates_Ad\Parameters
     */
    public function setDeleteTemplateNull( $value){
      return $this->_set(1008, $value);
    }
  }
}

