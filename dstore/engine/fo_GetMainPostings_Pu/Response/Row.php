<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/fo_GetMainPostings_Pu.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\fo_GetMainPostings_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $already_read = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $small_body = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $posting_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $posting_id_of_latest_posting = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $subject = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $postings_in_thread = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $e_mail_of_author = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $author_person_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $visible = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $has_binaries = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $author = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $main_posting_post_date = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $latest_posting_post_date = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $post_date = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $new_postings_in_thread = null;
    
    /**  @var \dstore\engine\values\stringValue */
    public $body = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.fo_GetMainPostings_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE already_read = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "already_read";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE small_body = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "small_body";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE posting_id = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "posting_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE posting_id_of_latest_posting = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "posting_id_of_latest_posting";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE subject = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "subject";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE postings_in_thread = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "postings_in_thread";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE e_mail_of_author = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "e_mail_of_author";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE author_person_id = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "author_person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE visible = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "visible";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE has_binaries = 10010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10010;
      $f->name      = "has_binaries";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE author = 10011
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10011;
      $f->name      = "author";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE main_posting_post_date = 10012
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10012;
      $f->name      = "main_posting_post_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE latest_posting_post_date = 10013
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10013;
      $f->name      = "latest_posting_post_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE post_date = 10014
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10014;
      $f->name      = "post_date";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE new_postings_in_thread = 10015
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10015;
      $f->name      = "new_postings_in_thread";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE body = 10016
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10016;
      $f->name      = "body";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
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
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
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
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <already_read> has a value
     *
     * @return boolean
     */
    public function hasAlreadyRead(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <already_read> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearAlreadyRead(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <already_read> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getAlreadyRead(){
      return $this->_get(10001);
    }
    
    /**
     * Set <already_read> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setAlreadyRead(\dstore\engine\values\booleanValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <small_body> has a value
     *
     * @return boolean
     */
    public function hasSmallBody(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <small_body> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearSmallBody(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <small_body> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSmallBody(){
      return $this->_get(10002);
    }
    
    /**
     * Set <small_body> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setSmallBody(\dstore\engine\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <posting_id> has a value
     *
     * @return boolean
     */
    public function hasPostingId(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <posting_id> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearPostingId(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <posting_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPostingId(){
      return $this->_get(10003);
    }
    
    /**
     * Set <posting_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setPostingId(\dstore\engine\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <posting_id_of_latest_posting> has a value
     *
     * @return boolean
     */
    public function hasPostingIdOfLatestPosting(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <posting_id_of_latest_posting> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearPostingIdOfLatestPosting(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <posting_id_of_latest_posting> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPostingIdOfLatestPosting(){
      return $this->_get(10004);
    }
    
    /**
     * Set <posting_id_of_latest_posting> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setPostingIdOfLatestPosting(\dstore\engine\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <subject> has a value
     *
     * @return boolean
     */
    public function hasSubject(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <subject> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearSubject(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <subject> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSubject(){
      return $this->_get(10005);
    }
    
    /**
     * Set <subject> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setSubject(\dstore\engine\values\stringValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <postings_in_thread> has a value
     *
     * @return boolean
     */
    public function hasPostingsInThread(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <postings_in_thread> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearPostingsInThread(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <postings_in_thread> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPostingsInThread(){
      return $this->_get(10006);
    }
    
    /**
     * Set <postings_in_thread> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setPostingsInThread(\dstore\engine\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <e_mail_of_author> has a value
     *
     * @return boolean
     */
    public function hasEMailOfAuthor(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <e_mail_of_author> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearEMailOfAuthor(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <e_mail_of_author> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getEMailOfAuthor(){
      return $this->_get(10007);
    }
    
    /**
     * Set <e_mail_of_author> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setEMailOfAuthor(\dstore\engine\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <author_person_id> has a value
     *
     * @return boolean
     */
    public function hasAuthorPersonId(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <author_person_id> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearAuthorPersonId(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <author_person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getAuthorPersonId(){
      return $this->_get(10008);
    }
    
    /**
     * Set <author_person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setAuthorPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <visible> has a value
     *
     * @return boolean
     */
    public function hasVisible(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <visible> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearVisible(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <visible> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getVisible(){
      return $this->_get(10009);
    }
    
    /**
     * Set <visible> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setVisible(\dstore\engine\values\integerValue $value){
      return $this->_set(10009, $value);
    }
    
    /**
     * Check if <has_binaries> has a value
     *
     * @return boolean
     */
    public function hasHasBinaries(){
      return $this->_has(10010);
    }
    
    /**
     * Clear <has_binaries> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearHasBinaries(){
      return $this->_clear(10010);
    }
    
    /**
     * Get <has_binaries> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getHasBinaries(){
      return $this->_get(10010);
    }
    
    /**
     * Set <has_binaries> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setHasBinaries(\dstore\engine\values\booleanValue $value){
      return $this->_set(10010, $value);
    }
    
    /**
     * Check if <author> has a value
     *
     * @return boolean
     */
    public function hasAuthor(){
      return $this->_has(10011);
    }
    
    /**
     * Clear <author> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearAuthor(){
      return $this->_clear(10011);
    }
    
    /**
     * Get <author> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getAuthor(){
      return $this->_get(10011);
    }
    
    /**
     * Set <author> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setAuthor(\dstore\engine\values\stringValue $value){
      return $this->_set(10011, $value);
    }
    
    /**
     * Check if <main_posting_post_date> has a value
     *
     * @return boolean
     */
    public function hasMainPostingPostDate(){
      return $this->_has(10012);
    }
    
    /**
     * Clear <main_posting_post_date> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearMainPostingPostDate(){
      return $this->_clear(10012);
    }
    
    /**
     * Get <main_posting_post_date> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getMainPostingPostDate(){
      return $this->_get(10012);
    }
    
    /**
     * Set <main_posting_post_date> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setMainPostingPostDate(\dstore\engine\values\stringValue $value){
      return $this->_set(10012, $value);
    }
    
    /**
     * Check if <latest_posting_post_date> has a value
     *
     * @return boolean
     */
    public function hasLatestPostingPostDate(){
      return $this->_has(10013);
    }
    
    /**
     * Clear <latest_posting_post_date> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearLatestPostingPostDate(){
      return $this->_clear(10013);
    }
    
    /**
     * Get <latest_posting_post_date> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getLatestPostingPostDate(){
      return $this->_get(10013);
    }
    
    /**
     * Set <latest_posting_post_date> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setLatestPostingPostDate(\dstore\engine\values\stringValue $value){
      return $this->_set(10013, $value);
    }
    
    /**
     * Check if <post_date> has a value
     *
     * @return boolean
     */
    public function hasPostDate(){
      return $this->_has(10014);
    }
    
    /**
     * Clear <post_date> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearPostDate(){
      return $this->_clear(10014);
    }
    
    /**
     * Get <post_date> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getPostDate(){
      return $this->_get(10014);
    }
    
    /**
     * Set <post_date> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setPostDate(\dstore\engine\values\stringValue $value){
      return $this->_set(10014, $value);
    }
    
    /**
     * Check if <new_postings_in_thread> has a value
     *
     * @return boolean
     */
    public function hasNewPostingsInThread(){
      return $this->_has(10015);
    }
    
    /**
     * Clear <new_postings_in_thread> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearNewPostingsInThread(){
      return $this->_clear(10015);
    }
    
    /**
     * Get <new_postings_in_thread> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getNewPostingsInThread(){
      return $this->_get(10015);
    }
    
    /**
     * Set <new_postings_in_thread> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setNewPostingsInThread(\dstore\engine\values\integerValue $value){
      return $this->_set(10015, $value);
    }
    
    /**
     * Check if <body> has a value
     *
     * @return boolean
     */
    public function hasBody(){
      return $this->_has(10016);
    }
    
    /**
     * Clear <body> value
     *
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function clearBody(){
      return $this->_clear(10016);
    }
    
    /**
     * Get <body> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getBody(){
      return $this->_get(10016);
    }
    
    /**
     * Set <body> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\fo_GetMainPostings_Pu\Response\Row
     */
    public function setBody(\dstore\engine\values\stringValue $value){
      return $this->_set(10016, $value);
    }
  }
}

