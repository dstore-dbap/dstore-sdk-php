<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_InsertPosting_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\fo_InsertPosting_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\integerValue */
    public $result = null;
    
    /**  @var boolean */
    public $result_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $person_identification_values = null;
    
    /**  @var boolean */
    public $person_identification_values_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_type_id = null;
    
    /**  @var boolean */
    public $person_type_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $forum_id = null;
    
    /**  @var boolean */
    public $forum_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $reply_to_posting_id = null;
    
    /**  @var boolean */
    public $reply_to_posting_id_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $author = null;
    
    /**  @var boolean */
    public $author_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $e_mail_of_author = null;
    
    /**  @var boolean */
    public $e_mail_of_author_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $subject = null;
    
    /**  @var boolean */
    public $subject_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $select_result = null;
    
    /**  @var boolean */
    public $select_result_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $maintain_search_postings = null;
    
    /**  @var boolean */
    public $maintain_search_postings_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $save_posting_properties = null;
    
    /**  @var boolean */
    public $save_posting_properties_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $country = null;
    
    /**  @var boolean */
    public $country_null = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $separator_in_ident_vals = null;
    
    /**  @var boolean */
    public $separator_in_ident_vals_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $new_posting_as_not_approved = null;
    
    /**  @var boolean */
    public $new_posting_as_not_approved_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_InsertPosting_Pu.Parameters');

      // OPTIONAL MESSAGE result = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "result";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL result_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "result_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_identification_values = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_identification_values";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_identification_values_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_identification_values_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_type_id = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "person_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_type_id_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "person_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE unique_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE forum_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "forum_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL forum_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "forum_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE reply_to_posting_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "reply_to_posting_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL reply_to_posting_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "reply_to_posting_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE author = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "author";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL author_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "author_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE e_mail_of_author = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "e_mail_of_author";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL e_mail_of_author_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "e_mail_of_author_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE subject = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "subject";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL subject_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "subject_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE select_result = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "select_result";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL select_result_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "select_result_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE maintain_search_postings = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "maintain_search_postings";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL maintain_search_postings_null = 1011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1011;
      $f->name      = "maintain_search_postings_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE save_posting_properties = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "save_posting_properties";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL save_posting_properties_null = 1012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1012;
      $f->name      = "save_posting_properties_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE country = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "country";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL country_null = 1013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1013;
      $f->name      = "country_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE separator_in_ident_vals = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "separator_in_ident_vals";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL separator_in_ident_vals_null = 1014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1014;
      $f->name      = "separator_in_ident_vals_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE new_posting_as_not_approved = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "new_posting_as_not_approved";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL new_posting_as_not_approved_null = 1015
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1015;
      $f->name      = "new_posting_as_not_approved_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <result> has a value
     *
     * @return boolean
     */
    public function hasResult(){
      return $this->_has(1);
    }
    
    /**
     * Clear <result> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearResult(){
      return $this->_clear(1);
    }
    
    /**
     * Get <result> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getResult(){
      return $this->_get(1);
    }
    
    /**
     * Set <result> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setResult(\dstore\engine\values\integerValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <result_null> has a value
     *
     * @return boolean
     */
    public function hasResultNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <result_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearResultNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <result_null> value
     *
     * @return boolean
     */
    public function getResultNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <result_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setResultNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_identification_values> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValues(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_identification_values> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearPersonIdentificationValues(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_identification_values> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPersonIdentificationValues(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_identification_values> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setPersonIdentificationValues(\dstore\engine\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_identification_values_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdentificationValuesNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_identification_values_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearPersonIdentificationValuesNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_identification_values_null> value
     *
     * @return boolean
     */
    public function getPersonIdentificationValuesNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_identification_values_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setPersonIdentificationValuesNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <person_type_id> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeId(){
      return $this->_has(3);
    }
    
    /**
     * Clear <person_type_id> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearPersonTypeId(){
      return $this->_clear(3);
    }
    
    /**
     * Get <person_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonTypeId(){
      return $this->_get(3);
    }
    
    /**
     * Set <person_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setPersonTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <person_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonTypeIdNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <person_type_id_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearPersonTypeIdNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <person_type_id_null> value
     *
     * @return boolean
     */
    public function getPersonTypeIdNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <person_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setPersonTypeIdNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(4);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setUniqueId(\dstore\engine\values\stringValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <forum_id> has a value
     *
     * @return boolean
     */
    public function hasForumId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <forum_id> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearForumId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <forum_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getForumId(){
      return $this->_get(5);
    }
    
    /**
     * Set <forum_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setForumId(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <forum_id_null> has a value
     *
     * @return boolean
     */
    public function hasForumIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <forum_id_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearForumIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <forum_id_null> value
     *
     * @return boolean
     */
    public function getForumIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <forum_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setForumIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <reply_to_posting_id> has a value
     *
     * @return boolean
     */
    public function hasReplyToPostingId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <reply_to_posting_id> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearReplyToPostingId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <reply_to_posting_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getReplyToPostingId(){
      return $this->_get(6);
    }
    
    /**
     * Set <reply_to_posting_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setReplyToPostingId(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <reply_to_posting_id_null> has a value
     *
     * @return boolean
     */
    public function hasReplyToPostingIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <reply_to_posting_id_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearReplyToPostingIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <reply_to_posting_id_null> value
     *
     * @return boolean
     */
    public function getReplyToPostingIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <reply_to_posting_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setReplyToPostingIdNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <author> has a value
     *
     * @return boolean
     */
    public function hasAuthor(){
      return $this->_has(7);
    }
    
    /**
     * Clear <author> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearAuthor(){
      return $this->_clear(7);
    }
    
    /**
     * Get <author> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getAuthor(){
      return $this->_get(7);
    }
    
    /**
     * Set <author> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setAuthor(\dstore\engine\values\stringValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <author_null> has a value
     *
     * @return boolean
     */
    public function hasAuthorNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <author_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearAuthorNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <author_null> value
     *
     * @return boolean
     */
    public function getAuthorNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <author_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setAuthorNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <e_mail_of_author> has a value
     *
     * @return boolean
     */
    public function hasEMailOfAuthor(){
      return $this->_has(8);
    }
    
    /**
     * Clear <e_mail_of_author> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearEMailOfAuthor(){
      return $this->_clear(8);
    }
    
    /**
     * Get <e_mail_of_author> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getEMailOfAuthor(){
      return $this->_get(8);
    }
    
    /**
     * Set <e_mail_of_author> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setEMailOfAuthor(\dstore\engine\values\stringValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <e_mail_of_author_null> has a value
     *
     * @return boolean
     */
    public function hasEMailOfAuthorNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <e_mail_of_author_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearEMailOfAuthorNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <e_mail_of_author_null> value
     *
     * @return boolean
     */
    public function getEMailOfAuthorNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <e_mail_of_author_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setEMailOfAuthorNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <subject> has a value
     *
     * @return boolean
     */
    public function hasSubject(){
      return $this->_has(9);
    }
    
    /**
     * Clear <subject> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearSubject(){
      return $this->_clear(9);
    }
    
    /**
     * Get <subject> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSubject(){
      return $this->_get(9);
    }
    
    /**
     * Set <subject> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setSubject(\dstore\engine\values\stringValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <subject_null> has a value
     *
     * @return boolean
     */
    public function hasSubjectNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <subject_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearSubjectNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <subject_null> value
     *
     * @return boolean
     */
    public function getSubjectNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <subject_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setSubjectNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <select_result> has a value
     *
     * @return boolean
     */
    public function hasSelectResult(){
      return $this->_has(10);
    }
    
    /**
     * Clear <select_result> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearSelectResult(){
      return $this->_clear(10);
    }
    
    /**
     * Get <select_result> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getSelectResult(){
      return $this->_get(10);
    }
    
    /**
     * Set <select_result> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setSelectResult(\dstore\engine\values\booleanValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <select_result_null> has a value
     *
     * @return boolean
     */
    public function hasSelectResultNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <select_result_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearSelectResultNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <select_result_null> value
     *
     * @return boolean
     */
    public function getSelectResultNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <select_result_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setSelectResultNull( $value){
      return $this->_set(1010, $value);
    }
    
    /**
     * Check if <maintain_search_postings> has a value
     *
     * @return boolean
     */
    public function hasMaintainSearchPostings(){
      return $this->_has(11);
    }
    
    /**
     * Clear <maintain_search_postings> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearMaintainSearchPostings(){
      return $this->_clear(11);
    }
    
    /**
     * Get <maintain_search_postings> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getMaintainSearchPostings(){
      return $this->_get(11);
    }
    
    /**
     * Set <maintain_search_postings> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setMaintainSearchPostings(\dstore\engine\values\booleanValue $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <maintain_search_postings_null> has a value
     *
     * @return boolean
     */
    public function hasMaintainSearchPostingsNull(){
      return $this->_has(1011);
    }
    
    /**
     * Clear <maintain_search_postings_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearMaintainSearchPostingsNull(){
      return $this->_clear(1011);
    }
    
    /**
     * Get <maintain_search_postings_null> value
     *
     * @return boolean
     */
    public function getMaintainSearchPostingsNull(){
      return $this->_get(1011);
    }
    
    /**
     * Set <maintain_search_postings_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setMaintainSearchPostingsNull( $value){
      return $this->_set(1011, $value);
    }
    
    /**
     * Check if <save_posting_properties> has a value
     *
     * @return boolean
     */
    public function hasSavePostingProperties(){
      return $this->_has(12);
    }
    
    /**
     * Clear <save_posting_properties> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearSavePostingProperties(){
      return $this->_clear(12);
    }
    
    /**
     * Get <save_posting_properties> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getSavePostingProperties(){
      return $this->_get(12);
    }
    
    /**
     * Set <save_posting_properties> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setSavePostingProperties(\dstore\engine\values\integerValue $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <save_posting_properties_null> has a value
     *
     * @return boolean
     */
    public function hasSavePostingPropertiesNull(){
      return $this->_has(1012);
    }
    
    /**
     * Clear <save_posting_properties_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearSavePostingPropertiesNull(){
      return $this->_clear(1012);
    }
    
    /**
     * Get <save_posting_properties_null> value
     *
     * @return boolean
     */
    public function getSavePostingPropertiesNull(){
      return $this->_get(1012);
    }
    
    /**
     * Set <save_posting_properties_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setSavePostingPropertiesNull( $value){
      return $this->_set(1012, $value);
    }
    
    /**
     * Check if <country> has a value
     *
     * @return boolean
     */
    public function hasCountry(){
      return $this->_has(13);
    }
    
    /**
     * Clear <country> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearCountry(){
      return $this->_clear(13);
    }
    
    /**
     * Get <country> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getCountry(){
      return $this->_get(13);
    }
    
    /**
     * Set <country> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setCountry(\dstore\engine\values\stringValue $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <country_null> has a value
     *
     * @return boolean
     */
    public function hasCountryNull(){
      return $this->_has(1013);
    }
    
    /**
     * Clear <country_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearCountryNull(){
      return $this->_clear(1013);
    }
    
    /**
     * Get <country_null> value
     *
     * @return boolean
     */
    public function getCountryNull(){
      return $this->_get(1013);
    }
    
    /**
     * Set <country_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setCountryNull( $value){
      return $this->_set(1013, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentVals(){
      return $this->_has(14);
    }
    
    /**
     * Clear <separator_in_ident_vals> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearSeparatorInIdentVals(){
      return $this->_clear(14);
    }
    
    /**
     * Get <separator_in_ident_vals> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSeparatorInIdentVals(){
      return $this->_get(14);
    }
    
    /**
     * Set <separator_in_ident_vals> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setSeparatorInIdentVals(\dstore\engine\values\stringValue $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <separator_in_ident_vals_null> has a value
     *
     * @return boolean
     */
    public function hasSeparatorInIdentValsNull(){
      return $this->_has(1014);
    }
    
    /**
     * Clear <separator_in_ident_vals_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearSeparatorInIdentValsNull(){
      return $this->_clear(1014);
    }
    
    /**
     * Get <separator_in_ident_vals_null> value
     *
     * @return boolean
     */
    public function getSeparatorInIdentValsNull(){
      return $this->_get(1014);
    }
    
    /**
     * Set <separator_in_ident_vals_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setSeparatorInIdentValsNull( $value){
      return $this->_set(1014, $value);
    }
    
    /**
     * Check if <new_posting_as_not_approved> has a value
     *
     * @return boolean
     */
    public function hasNewPostingAsNotApproved(){
      return $this->_has(15);
    }
    
    /**
     * Clear <new_posting_as_not_approved> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearNewPostingAsNotApproved(){
      return $this->_clear(15);
    }
    
    /**
     * Get <new_posting_as_not_approved> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getNewPostingAsNotApproved(){
      return $this->_get(15);
    }
    
    /**
     * Set <new_posting_as_not_approved> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setNewPostingAsNotApproved(\dstore\engine\values\booleanValue $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <new_posting_as_not_approved_null> has a value
     *
     * @return boolean
     */
    public function hasNewPostingAsNotApprovedNull(){
      return $this->_has(1015);
    }
    
    /**
     * Clear <new_posting_as_not_approved_null> value
     *
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function clearNewPostingAsNotApprovedNull(){
      return $this->_clear(1015);
    }
    
    /**
     * Get <new_posting_as_not_approved_null> value
     *
     * @return boolean
     */
    public function getNewPostingAsNotApprovedNull(){
      return $this->_get(1015);
    }
    
    /**
     * Set <new_posting_as_not_approved_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\fo_InsertPosting_Pu\Parameters
     */
    public function setNewPostingAsNotApprovedNull( $value){
      return $this->_set(1015, $value);
    }
  }
}

