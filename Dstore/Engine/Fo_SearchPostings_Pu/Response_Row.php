<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_SearchPostings_Pu.proto

namespace Dstore\Engine\Fo_SearchPostings_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.fo_SearchPostings_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Hier erscheint der Beitrag selbst, falls er weniger als 256 Zeichen enthält UND "UseSmallBody" in "ForumSettings" auf "1" gesetzt UND "&#64;IncludePostingBodies = 1" ist. D.h. mindestens EINE der Rückgabespalten "SmallBody" und "Body" ist IMMER "NULL".
     * </pre>
     *
     * <code>.dstore.values.StringValue small_body = 10001;</code>
     */
    private $small_body = null;
    /**
     * <pre>
     * eMail des Verfassers "Author"
     * </pre>
     *
     * <code>.dstore.values.StringValue e_mail_of_author = 10002;</code>
     */
    private $e_mail_of_author = null;
    /**
     * <pre>
     * ID eines Beitrags, der von "&#64;PersonID" geschrieben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue posting_id = 10003;</code>
     */
    private $posting_id = null;
    /**
     * <pre>
     * (Person)ID des Verfassers "Author" - "0" bedeutet, daß der Verfasser anonym ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue author_person_id = 10004;</code>
     */
    private $author_person_id = null;
    /**
     * <pre>
     * ID des Haupt-Beitrages zu "PostingID" (also sozusagen das Wurzel-Element des gesamten "Threads" zu dem "PostingID" gehört)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue main_posting_id = 10005;</code>
     */
    private $main_posting_id = null;
    /**
     * <pre>
     * Sichtbarkeits-Status des Postings "PostingID" - mögliche Werte : siehe "fo_GetPostingVisibilities"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue visible = 10006;</code>
     */
    private $visible = null;
    /**
     * <pre>
     * ID des Postings, auf das "PostingID" eine Antwort darstellt. Falls gleich "PostingID", handelt es sich um einen Haupt-Beitrag, sprich "MainPosting"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue reply_to_posting_id = 10007;</code>
     */
    private $reply_to_posting_id = null;
    /**
     * <pre>
     * Name des Verfassers ("&#64;PersonID") des Beitrags "PostingID", also die Eigenschaft(en) des Autors "&#64;PersonID" zu der (den) Merkmal-ID(s), die in "ForumSettings" zum Schlüssel "CharacteristicIDsForAuthor_&lt;PersonTypeID von &#64;PersonID&gt;" hinterlegt ist (sind)
     * </pre>
     *
     * <code>.dstore.values.StringValue author = 10008;</code>
     */
    private $author = null;
    /**
     * <pre>
     * Wann wurde der Beitrag "PostingID" erstellt ?
     * </pre>
     *
     * <code>.dstore.values.TimestampValue post_date = 10009;</code>
     */
    private $post_date = null;
    /**
     * <pre>
     * Der Beitrag selbst - immer "NULL" falls "&#64;IncludePostingBodies = 0" oder wenn "SmallBody" NICHT "NULL" ist
     * </pre>
     *
     * <code>.dstore.values.StringValue body = 10010;</code>
     */
    private $body = null;
    /**
     * <pre>
     * Der Titel des Beitrags "PostingID"
     * </pre>
     *
     * <code>.dstore.values.StringValue subject = 10011;</code>
     */
    private $subject = null;
    /**
     * <pre>
     * Wurde das Posting vor "HoursAfterPostingsAreRegardedAsRead" (Eintrag in "ForumSettings") Stunden verfaßt ODER gibt es zur Person, die diese Prozedur aufruft, einen Eintrag in "ReadPostingsPerPerson", steht hier der Wert "1"
     * </pre>
     *
     * <code>.dstore.values.BooleanValue already_read = 20001;</code>
     */
    private $already_read = null;
    /**
     * <pre>
     * Sind "Binaries" zu dem Posting "PostingID" vorhanden ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_binaries = 20009;</code>
     */
    private $has_binaries = null;
    /**
     * <pre>
     * Gibt es wenigstens eine Antwort auf "PostingID" ? Dabei zählen nur Beiträge, die einen "&#64;Visibility" entsprechenden "Sichtbarkeits-Status" haben bzw. unbestätigt sind, falls "&#64;GetOwnNotApprovedPosting = 1" und der Autor die identifizierte Person ist !
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_successors = 20012;</code>
     */
    private $has_successors = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\FoSearchPostingsPu::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function getRowId()
    {
        return $this->row_id;
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    /**
     * <pre>
     * Hier erscheint der Beitrag selbst, falls er weniger als 256 Zeichen enthält UND "UseSmallBody" in "ForumSettings" auf "1" gesetzt UND "&#64;IncludePostingBodies = 1" ist. D.h. mindestens EINE der Rückgabespalten "SmallBody" und "Body" ist IMMER "NULL".
     * </pre>
     *
     * <code>.dstore.values.StringValue small_body = 10001;</code>
     */
    public function getSmallBody()
    {
        return $this->small_body;
    }

    /**
     * <pre>
     * Hier erscheint der Beitrag selbst, falls er weniger als 256 Zeichen enthält UND "UseSmallBody" in "ForumSettings" auf "1" gesetzt UND "&#64;IncludePostingBodies = 1" ist. D.h. mindestens EINE der Rückgabespalten "SmallBody" und "Body" ist IMMER "NULL".
     * </pre>
     *
     * <code>.dstore.values.StringValue small_body = 10001;</code>
     */
    public function setSmallBody(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->small_body = $var;
    }

    /**
     * <pre>
     * eMail des Verfassers "Author"
     * </pre>
     *
     * <code>.dstore.values.StringValue e_mail_of_author = 10002;</code>
     */
    public function getEMailOfAuthor()
    {
        return $this->e_mail_of_author;
    }

    /**
     * <pre>
     * eMail des Verfassers "Author"
     * </pre>
     *
     * <code>.dstore.values.StringValue e_mail_of_author = 10002;</code>
     */
    public function setEMailOfAuthor(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->e_mail_of_author = $var;
    }

    /**
     * <pre>
     * ID eines Beitrags, der von "&#64;PersonID" geschrieben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue posting_id = 10003;</code>
     */
    public function getPostingId()
    {
        return $this->posting_id;
    }

    /**
     * <pre>
     * ID eines Beitrags, der von "&#64;PersonID" geschrieben wurde
     * </pre>
     *
     * <code>.dstore.values.IntegerValue posting_id = 10003;</code>
     */
    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->posting_id = $var;
    }

    /**
     * <pre>
     * (Person)ID des Verfassers "Author" - "0" bedeutet, daß der Verfasser anonym ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue author_person_id = 10004;</code>
     */
    public function getAuthorPersonId()
    {
        return $this->author_person_id;
    }

    /**
     * <pre>
     * (Person)ID des Verfassers "Author" - "0" bedeutet, daß der Verfasser anonym ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue author_person_id = 10004;</code>
     */
    public function setAuthorPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->author_person_id = $var;
    }

    /**
     * <pre>
     * ID des Haupt-Beitrages zu "PostingID" (also sozusagen das Wurzel-Element des gesamten "Threads" zu dem "PostingID" gehört)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue main_posting_id = 10005;</code>
     */
    public function getMainPostingId()
    {
        return $this->main_posting_id;
    }

    /**
     * <pre>
     * ID des Haupt-Beitrages zu "PostingID" (also sozusagen das Wurzel-Element des gesamten "Threads" zu dem "PostingID" gehört)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue main_posting_id = 10005;</code>
     */
    public function setMainPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->main_posting_id = $var;
    }

    /**
     * <pre>
     * Sichtbarkeits-Status des Postings "PostingID" - mögliche Werte : siehe "fo_GetPostingVisibilities"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue visible = 10006;</code>
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * <pre>
     * Sichtbarkeits-Status des Postings "PostingID" - mögliche Werte : siehe "fo_GetPostingVisibilities"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue visible = 10006;</code>
     */
    public function setVisible(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->visible = $var;
    }

    /**
     * <pre>
     * ID des Postings, auf das "PostingID" eine Antwort darstellt. Falls gleich "PostingID", handelt es sich um einen Haupt-Beitrag, sprich "MainPosting"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue reply_to_posting_id = 10007;</code>
     */
    public function getReplyToPostingId()
    {
        return $this->reply_to_posting_id;
    }

    /**
     * <pre>
     * ID des Postings, auf das "PostingID" eine Antwort darstellt. Falls gleich "PostingID", handelt es sich um einen Haupt-Beitrag, sprich "MainPosting"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue reply_to_posting_id = 10007;</code>
     */
    public function setReplyToPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->reply_to_posting_id = $var;
    }

    /**
     * <pre>
     * Name des Verfassers ("&#64;PersonID") des Beitrags "PostingID", also die Eigenschaft(en) des Autors "&#64;PersonID" zu der (den) Merkmal-ID(s), die in "ForumSettings" zum Schlüssel "CharacteristicIDsForAuthor_&lt;PersonTypeID von &#64;PersonID&gt;" hinterlegt ist (sind)
     * </pre>
     *
     * <code>.dstore.values.StringValue author = 10008;</code>
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * <pre>
     * Name des Verfassers ("&#64;PersonID") des Beitrags "PostingID", also die Eigenschaft(en) des Autors "&#64;PersonID" zu der (den) Merkmal-ID(s), die in "ForumSettings" zum Schlüssel "CharacteristicIDsForAuthor_&lt;PersonTypeID von &#64;PersonID&gt;" hinterlegt ist (sind)
     * </pre>
     *
     * <code>.dstore.values.StringValue author = 10008;</code>
     */
    public function setAuthor(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->author = $var;
    }

    /**
     * <pre>
     * Wann wurde der Beitrag "PostingID" erstellt ?
     * </pre>
     *
     * <code>.dstore.values.TimestampValue post_date = 10009;</code>
     */
    public function getPostDate()
    {
        return $this->post_date;
    }

    /**
     * <pre>
     * Wann wurde der Beitrag "PostingID" erstellt ?
     * </pre>
     *
     * <code>.dstore.values.TimestampValue post_date = 10009;</code>
     */
    public function setPostDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->post_date = $var;
    }

    /**
     * <pre>
     * Der Beitrag selbst - immer "NULL" falls "&#64;IncludePostingBodies = 0" oder wenn "SmallBody" NICHT "NULL" ist
     * </pre>
     *
     * <code>.dstore.values.StringValue body = 10010;</code>
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * <pre>
     * Der Beitrag selbst - immer "NULL" falls "&#64;IncludePostingBodies = 0" oder wenn "SmallBody" NICHT "NULL" ist
     * </pre>
     *
     * <code>.dstore.values.StringValue body = 10010;</code>
     */
    public function setBody(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->body = $var;
    }

    /**
     * <pre>
     * Der Titel des Beitrags "PostingID"
     * </pre>
     *
     * <code>.dstore.values.StringValue subject = 10011;</code>
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * <pre>
     * Der Titel des Beitrags "PostingID"
     * </pre>
     *
     * <code>.dstore.values.StringValue subject = 10011;</code>
     */
    public function setSubject(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->subject = $var;
    }

    /**
     * <pre>
     * Wurde das Posting vor "HoursAfterPostingsAreRegardedAsRead" (Eintrag in "ForumSettings") Stunden verfaßt ODER gibt es zur Person, die diese Prozedur aufruft, einen Eintrag in "ReadPostingsPerPerson", steht hier der Wert "1"
     * </pre>
     *
     * <code>.dstore.values.BooleanValue already_read = 20001;</code>
     */
    public function getAlreadyRead()
    {
        return $this->already_read;
    }

    /**
     * <pre>
     * Wurde das Posting vor "HoursAfterPostingsAreRegardedAsRead" (Eintrag in "ForumSettings") Stunden verfaßt ODER gibt es zur Person, die diese Prozedur aufruft, einen Eintrag in "ReadPostingsPerPerson", steht hier der Wert "1"
     * </pre>
     *
     * <code>.dstore.values.BooleanValue already_read = 20001;</code>
     */
    public function setAlreadyRead(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->already_read = $var;
    }

    /**
     * <pre>
     * Sind "Binaries" zu dem Posting "PostingID" vorhanden ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_binaries = 20009;</code>
     */
    public function getHasBinaries()
    {
        return $this->has_binaries;
    }

    /**
     * <pre>
     * Sind "Binaries" zu dem Posting "PostingID" vorhanden ?
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_binaries = 20009;</code>
     */
    public function setHasBinaries(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->has_binaries = $var;
    }

    /**
     * <pre>
     * Gibt es wenigstens eine Antwort auf "PostingID" ? Dabei zählen nur Beiträge, die einen "&#64;Visibility" entsprechenden "Sichtbarkeits-Status" haben bzw. unbestätigt sind, falls "&#64;GetOwnNotApprovedPosting = 1" und der Autor die identifizierte Person ist !
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_successors = 20012;</code>
     */
    public function getHasSuccessors()
    {
        return $this->has_successors;
    }

    /**
     * <pre>
     * Gibt es wenigstens eine Antwort auf "PostingID" ? Dabei zählen nur Beiträge, die einen "&#64;Visibility" entsprechenden "Sichtbarkeits-Status" haben bzw. unbestätigt sind, falls "&#64;GetOwnNotApprovedPosting = 1" und der Autor die identifizierte Person ist !
     * </pre>
     *
     * <code>.dstore.values.BooleanValue has_successors = 20012;</code>
     */
    public function setHasSuccessors(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->has_successors = $var;
    }

}
