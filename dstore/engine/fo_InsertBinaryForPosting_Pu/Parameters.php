<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_InsertBinaryForPosting_Pu.proto
//   Date: 2016-05-19 08:07:41

namespace dstore\engine\fo_InsertBinaryForPosting_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\values\integerValue */
    public $posting_id = null;
    
    /**  @var boolean */
    public $posting_id_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $content_type = null;
    
    /**  @var boolean */
    public $content_type_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $filename = null;
    
    /**  @var boolean */
    public $filename_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $description = null;
    
    /**  @var boolean */
    public $description_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $posting_binary_identifier = null;
    
    /**  @var boolean */
    public $posting_binary_identifier_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $separator_in_ident_vals = null;
    
    /**  @var boolean */
    public $separator_in_ident_vals_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_InsertBinaryForPosting_Pu.Parameters');

      // OPTIONAL MESSAGE person_identification_values = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unique_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE posting_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "posting_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL posting_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "posting_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE content_type = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "content_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL content_type_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "content_type_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE filename = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "filename";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL filename_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "filename_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE description = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "description";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL description_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "description_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE posting_binary_identifier = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "posting_binary_identifier";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL posting_binary_identifier_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "posting_binary_identifier_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_ident_vals = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "separator_in_ident_vals";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_ident_vals_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "separator_in_ident_vals_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(1);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(1);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(1);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(3);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setUniqueId(\dstore\values\stringValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <posting_id> has a value
     *
     * @return boolean
     */
    public function hasPostingId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <posting_id> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearPostingId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <posting_id> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPostingId(){
      return $this->_get(4);
    }
    
    /**
     * Set <posting_id> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setPostingId(\dstore\values\integerValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <posting_id_null> has a value
     *
     * @return boolean
     */
    public function hasPostingIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <posting_id_null> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearPostingIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <posting_id_null> value
     *
     * @return boolean
     */
    public function getPostingIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <posting_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setPostingIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <content_type> has a value
     *
     * @return boolean
     */
    public function hasContentType(){
      return $this->_has(5);
    }
    
    /**
     * Clear <content_type> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearContentType(){
      return $this->_clear(5);
    }
    
    /**
     * Get <content_type> value
     *
     * @return \dstore\values\stringValue
     */
    public function getContentType(){
      return $this->_get(5);
    }
    
    /**
     * Set <content_type> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setContentType(\dstore\values\stringValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <content_type_null> has a value
     *
     * @return boolean
     */
    public function hasContentTypeNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <content_type_null> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearContentTypeNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <content_type_null> value
     *
     * @return boolean
     */
    public function getContentTypeNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <content_type_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setContentTypeNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <filename> has a value
     *
     * @return boolean
     */
    public function hasFilename(){
      return $this->_has(6);
    }
    
    /**
     * Clear <filename> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearFilename(){
      return $this->_clear(6);
    }
    
    /**
     * Get <filename> value
     *
     * @return \dstore\values\stringValue
     */
    public function getFilename(){
      return $this->_get(6);
    }
    
    /**
     * Set <filename> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setFilename(\dstore\values\stringValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <filename_null> has a value
     *
     * @return boolean
     */
    public function hasFilenameNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <filename_null> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearFilenameNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <filename_null> value
     *
     * @return boolean
     */
    public function getFilenameNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <filename_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setFilenameNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <description> has a value
     *
     * @return boolean
     */
    public function hasDescription(){
      return $this->_has(7);
    }
    
    /**
     * Clear <description> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearDescription(){
      return $this->_clear(7);
    }
    
    /**
     * Get <description> value
     *
     * @return \dstore\values\stringValue
     */
    public function getDescription(){
      return $this->_get(7);
    }
    
    /**
     * Set <description> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setDescription(\dstore\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <description_null> has a value
     *
     * @return boolean
     */
    public function hasDescriptionNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <description_null> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearDescriptionNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <description_null> value
     *
     * @return boolean
     */
    public function getDescriptionNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <description_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setDescriptionNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <posting_binary_identifier> has a value
     *
     * @return boolean
     */
    public function hasPostingBinaryIdentifier(){
      return $this->_has(8);
    }
    
    /**
     * Clear <posting_binary_identifier> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearPostingBinaryIdentifier(){
      return $this->_clear(8);
    }
    
    /**
     * Get <posting_binary_identifier> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPostingBinaryIdentifier(){
      return $this->_get(8);
    }
    
    /**
     * Set <posting_binary_identifier> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setPostingBinaryIdentifier(\dstore\values\stringValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <posting_binary_identifier_null> has a value
     *
     * @return boolean
     */
    public function hasPostingBinaryIdentifierNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <posting_binary_identifier_null> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearPostingBinaryIdentifierNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <posting_binary_identifier_null> value
     *
     * @return boolean
     */
    public function getPostingBinaryIdentifierNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <posting_binary_identifier_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setPostingBinaryIdentifierNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentVals(){
      return $this->_has(9);
    }
    
    /**
     * Clear <separator_in_ident_vals> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearSeparatorInIdentVals(){
      return $this->_clear(9);
    }
    
    /**
     * Get <separator_in_ident_vals> value
     *
     * @return \dstore\values\stringValue
     */
    public function getSeparatorInIdentVals(){
      return $this->_get(9);
    }
    
    /**
     * Set <separator_in_ident_vals> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setSeparatorInIdentVals(\dstore\values\stringValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentValsNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <separator_in_ident_vals_null> value
     *
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function clearSeparatorInIdentValsNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <separator_in_ident_vals_null> value
     *
     * @return boolean
     */
    public function getSeparatorInIdentValsNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <separator_in_ident_vals_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertBinaryForPosting_Pu\Parameters
     */
    public function setSeparatorInIdentValsNull( $value){
      return $this->_set(1009, $value);
    }
  }
}

