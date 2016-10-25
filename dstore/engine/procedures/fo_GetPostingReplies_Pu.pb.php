<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPostingReplies_Pu.proto

namespace Dstore\Engine\Fo_GetPostingReplies_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_identification_values = null;
    private $person_identification_values_null = false;
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $unique_id = null;
    private $unique_id_null = false;
    private $posting_id = null;
    private $posting_id_null = false;
    private $include_posting_id = null;
    private $include_posting_id_null = false;
    private $only_replies_up_to_level = null;
    private $only_replies_up_to_level_null = false;
    private $number_of_replies = null;
    private $number_of_replies_null = false;
    private $main_posting_id = null;
    private $main_posting_id_null = false;
    private $order_desc = null;
    private $order_desc_null = false;
    private $from_row_number = null;
    private $from_row_number_null = false;
    private $max_number_of_postings = null;
    private $max_number_of_postings_null = false;
    private $visibility = null;
    private $visibility_null = false;
    private $get_own_not_approved_postings = null;
    private $get_own_not_approved_postings_null = false;
    private $include_posting_bodies = null;
    private $include_posting_bodies_null = false;
    private $output_into_one_id = null;
    private $output_into_one_id_null = false;
    private $separator_in_ident_vals = null;
    private $separator_in_ident_vals_null = false;

    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->person_identification_values = $var;
    }

    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_type_id = $var;
    }

    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    public function getUniqueId()
    {
        return $this->unique_id;
    }

    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unique_id = $var;
    }

    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    public function getPostingId()
    {
        return $this->posting_id;
    }

    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_id = $var;
    }

    public function getPostingIdNull()
    {
        return $this->posting_id_null;
    }

    public function setPostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_id_null = $var;
    }

    public function getIncludePostingId()
    {
        return $this->include_posting_id;
    }

    public function setIncludePostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_posting_id = $var;
    }

    public function getIncludePostingIdNull()
    {
        return $this->include_posting_id_null;
    }

    public function setIncludePostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_posting_id_null = $var;
    }

    public function getOnlyRepliesUpToLevel()
    {
        return $this->only_replies_up_to_level;
    }

    public function setOnlyRepliesUpToLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->only_replies_up_to_level = $var;
    }

    public function getOnlyRepliesUpToLevelNull()
    {
        return $this->only_replies_up_to_level_null;
    }

    public function setOnlyRepliesUpToLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_replies_up_to_level_null = $var;
    }

    public function getNumberOfReplies()
    {
        return $this->number_of_replies;
    }

    public function setNumberOfReplies(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_replies = $var;
    }

    public function getNumberOfRepliesNull()
    {
        return $this->number_of_replies_null;
    }

    public function setNumberOfRepliesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->number_of_replies_null = $var;
    }

    public function getMainPostingId()
    {
        return $this->main_posting_id;
    }

    public function setMainPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->main_posting_id = $var;
    }

    public function getMainPostingIdNull()
    {
        return $this->main_posting_id_null;
    }

    public function setMainPostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->main_posting_id_null = $var;
    }

    public function getOrderDesc()
    {
        return $this->order_desc;
    }

    public function setOrderDesc(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->order_desc = $var;
    }

    public function getOrderDescNull()
    {
        return $this->order_desc_null;
    }

    public function setOrderDescNull($var)
    {
        GPBUtil::checkBool($var);
        $this->order_desc_null = $var;
    }

    public function getFromRowNumber()
    {
        return $this->from_row_number;
    }

    public function setFromRowNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_row_number = $var;
    }

    public function getFromRowNumberNull()
    {
        return $this->from_row_number_null;
    }

    public function setFromRowNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_row_number_null = $var;
    }

    public function getMaxNumberOfPostings()
    {
        return $this->max_number_of_postings;
    }

    public function setMaxNumberOfPostings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_postings = $var;
    }

    public function getMaxNumberOfPostingsNull()
    {
        return $this->max_number_of_postings_null;
    }

    public function setMaxNumberOfPostingsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_postings_null = $var;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function setVisibility(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visibility = $var;
    }

    public function getVisibilityNull()
    {
        return $this->visibility_null;
    }

    public function setVisibilityNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visibility_null = $var;
    }

    public function getGetOwnNotApprovedPostings()
    {
        return $this->get_own_not_approved_postings;
    }

    public function setGetOwnNotApprovedPostings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_own_not_approved_postings = $var;
    }

    public function getGetOwnNotApprovedPostingsNull()
    {
        return $this->get_own_not_approved_postings_null;
    }

    public function setGetOwnNotApprovedPostingsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_own_not_approved_postings_null = $var;
    }

    public function getIncludePostingBodies()
    {
        return $this->include_posting_bodies;
    }

    public function setIncludePostingBodies(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_posting_bodies = $var;
    }

    public function getIncludePostingBodiesNull()
    {
        return $this->include_posting_bodies_null;
    }

    public function setIncludePostingBodiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_posting_bodies_null = $var;
    }

    public function getOutputIntoOneId()
    {
        return $this->output_into_one_id;
    }

    public function setOutputIntoOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->output_into_one_id = $var;
    }

    public function getOutputIntoOneIdNull()
    {
        return $this->output_into_one_id_null;
    }

    public function setOutputIntoOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_into_one_id_null = $var;
    }

    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $number_of_replies = null;
    private $main_posting_id = null;

    public function getMetaInformation()
    {
        return $this->meta_information;
    }

    public function setMetaInformation(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Metainformation\MetaInformation::class);
        $this->meta_information = $var;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Message\Message::class);
        $this->message = $var;
    }

    public function getRow()
    {
        return $this->row;
    }

    public function setRow(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetPostingReplies_Pu\Response_Row::class);
        $this->row = $var;
    }

    public function getNumberOfReplies()
    {
        return $this->number_of_replies;
    }

    public function setNumberOfReplies(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_replies = $var;
    }

    public function getMainPostingId()
    {
        return $this->main_posting_id;
    }

    public function setMainPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->main_posting_id = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $small_body = null;
    private $already_read = null;
    private $posting_id = null;
    private $reply_to_posting_id = null;
    private $subject = null;
    private $e_mail_of_author = null;
    private $author_person_id = null;
    private $post_date_char = null;
    private $visible = null;
    private $has_binaries = null;
    private $author = null;
    private $post_date = null;
    private $body = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getSmallBody()
    {
        return $this->small_body;
    }

    public function setSmallBody(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->small_body = $var;
    }

    public function getAlreadyRead()
    {
        return $this->already_read;
    }

    public function setAlreadyRead(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->already_read = $var;
    }

    public function getPostingId()
    {
        return $this->posting_id;
    }

    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_id = $var;
    }

    public function getReplyToPostingId()
    {
        return $this->reply_to_posting_id;
    }

    public function setReplyToPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->reply_to_posting_id = $var;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->subject = $var;
    }

    public function getEMailOfAuthor()
    {
        return $this->e_mail_of_author;
    }

    public function setEMailOfAuthor(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->e_mail_of_author = $var;
    }

    public function getAuthorPersonId()
    {
        return $this->author_person_id;
    }

    public function setAuthorPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->author_person_id = $var;
    }

    public function getPostDateChar()
    {
        return $this->post_date_char;
    }

    public function setPostDateChar(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->post_date_char = $var;
    }

    public function getVisible()
    {
        return $this->visible;
    }

    public function setVisible(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visible = $var;
    }

    public function getHasBinaries()
    {
        return $this->has_binaries;
    }

    public function setHasBinaries(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->has_binaries = $var;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->author = $var;
    }

    public function getPostDate()
    {
        return $this->post_date;
    }

    public function setPostDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->post_date = $var;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->body = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aaf150a366473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f476574506f7374696e675265706c6965735f50752e70726f746f12" .
    "256473746f72652e656e67696e652e666f5f476574506f7374696e675265" .
    "706c6965735f50751a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f22b10b0a0a506172616d657465727312400a1c706572736f6e" .
    "5f6964656e74696669636174696f6e5f76616c75657318012001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c7565122a0a21" .
    "706572736f6e5f6964656e74696669636174696f6e5f76616c7565735f6e" .
    "756c6c18e9072001280812330a0e706572736f6e5f747970655f69641802" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c7565121c0a13706572736f6e5f747970655f69645f6e756c6c18ea0720" .
    "012808122d0a09756e697175655f696418032001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512170a0e756e69717565" .
    "5f69645f6e756c6c18eb0720012808122f0a0a706f7374696e675f696418" .
    "042001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512180a0f706f7374696e675f69645f6e756c6c18ec0720012808" .
    "12370a12696e636c7564655f706f7374696e675f696418052001280b321b" .
    "2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512200a" .
    "17696e636c7564655f706f7374696e675f69645f6e756c6c18ed07200128" .
    "08123d0a186f6e6c795f7265706c6965735f75705f746f5f6c6576656c18" .
    "062001280b321b2e6473746f72652e76616c7565732e696e746567657256" .
    "616c756512260a1d6f6e6c795f7265706c6965735f75705f746f5f6c6576" .
    "656c5f6e756c6c18ee072001280812360a116e756d6265725f6f665f7265" .
    "706c69657318072001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565121f0a166e756d6265725f6f665f7265706c6965" .
    "735f6e756c6c18ef072001280812340a0f6d61696e5f706f7374696e675f" .
    "696418082001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565121d0a146d61696e5f706f7374696e675f69645f6e756c" .
    "6c18f00720012808122f0a0a6f726465725f6465736318092001280b321b" .
    "2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512180a" .
    "0f6f726465725f646573635f6e756c6c18f1072001280812340a0f66726f" .
    "6d5f726f775f6e756d626572180a2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565121d0a1466726f6d5f726f775f" .
    "6e756d6265725f6e756c6c18f20720012808123b0a166d61785f6e756d62" .
    "65725f6f665f706f7374696e6773180b2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512240a1b6d61785f6e756d" .
    "6265725f6f665f706f7374696e67735f6e756c6c18f30720012808122f0a" .
    "0a7669736962696c697479180c2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512180a0f7669736962696c697479" .
    "5f6e756c6c18f4072001280812420a1d6765745f6f776e5f6e6f745f6170" .
    "70726f7665645f706f7374696e6773180d2001280b321b2e6473746f7265" .
    "2e76616c7565732e626f6f6c65616e56616c7565122b0a226765745f6f77" .
    "6e5f6e6f745f617070726f7665645f706f7374696e67735f6e756c6c18f5" .
    "0720012808123b0a16696e636c7564655f706f7374696e675f626f646965" .
    "73180e2001280b321b2e6473746f72652e76616c7565732e626f6f6c6561" .
    "6e56616c756512240a1b696e636c7564655f706f7374696e675f626f6469" .
    "65735f6e756c6c18f6072001280812370a126f75747075745f696e746f5f" .
    "6f6e655f6964180f2001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c756512200a176f75747075745f696e746f5f6f6e65" .
    "5f69645f6e756c6c18f70720012808123b0a17736570617261746f725f69" .
    "6e5f6964656e745f76616c7318102001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c756512250a1c736570617261746f725f" .
    "696e5f6964656e745f76616c735f6e756c6c18f8072001280822e0070a08" .
    "526573706f6e736512480a106d6574615f696e666f726d6174696f6e1802" .
    "2003280b322e2e6473746f72652e656e67696e652e6d657461696e666f72" .
    "6d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d657373" .
    "61676518032003280b321e2e6473746f72652e656e67696e652e6d657373" .
    "6167652e4d65737361676512400a03726f7718042003280b32332e647374" .
    "6f72652e656e67696e652e666f5f476574506f7374696e675265706c6965" .
    "735f50752e526573706f6e73652e526f7712360a116e756d6265725f6f66" .
    "5f7265706c69657318652001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512340a0f6d61696e5f706f7374696e675f" .
    "696418662001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c75651aa8050a03526f77120f0a06726f775f696418904e2001" .
    "2805122f0a0a736d616c6c5f626f647918914e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512320a0c616c726561" .
    "64795f7265616418924e2001280b321b2e6473746f72652e76616c756573" .
    "2e626f6f6c65616e56616c756512300a0a706f7374696e675f696418934e" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512390a137265706c795f746f5f706f7374696e675f696418944e20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565122c0a077375626a65637418954e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c756512350a10655f6d61696c5f6f" .
    "665f617574686f7218964e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c756512360a10617574686f725f706572736f6e" .
    "5f696418974e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c756512330a0e706f73745f646174655f6368617218984e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565122d0a0776697369626c6518994e2001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c756512320a0c6861735f62696e" .
    "6172696573189a4e2001280b321b2e6473746f72652e76616c7565732e62" .
    "6f6f6c65616e56616c7565122b0a06617574686f72189b4e2001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512310a09" .
    "706f73745f64617465189c4e2001280b321d2e6473746f72652e76616c75" .
    "65732e74696d657374616d7056616c756512290a04626f6479189d4e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "42580a1b696f2e6473746f72652e656e67696e652e70726f636564757265" .
    "735a39676f73646b2e6473746f72652e64652f656e67696e652f70726f63" .
    "6564757265732f666f5f476574506f7374696e675265706c6965735f5075" .
    "620670726f746f33"
));

