<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_DeleteInactiveMembers_Ad.proto

namespace Dstore\Engine\Co_DeleteInactiveMembers_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $community_id = null;
    private $community_id_null = false;
    private $last_login_x_month_ago = null;
    private $last_login_x_month_ago_null = false;
    private $do_not_delete_but_log_only = null;
    private $do_not_delete_but_log_only_null = false;
    private $only_members_without_login_stats = null;
    private $only_members_without_login_stats_null = false;
    private $max_number_of_members_to_delete = null;
    private $max_number_of_members_to_delete_null = false;
    private $print_errors = null;
    private $print_errors_null = false;
    private $additional_information = null;
    private $additional_information_null = false;

    public function getCommunityId()
    {
        return $this->community_id;
    }

    public function setCommunityId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->community_id = $var;
    }

    public function getCommunityIdNull()
    {
        return $this->community_id_null;
    }

    public function setCommunityIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_id_null = $var;
    }

    public function getLastLoginXMonthAgo()
    {
        return $this->last_login_x_month_ago;
    }

    public function setLastLoginXMonthAgo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->last_login_x_month_ago = $var;
    }

    public function getLastLoginXMonthAgoNull()
    {
        return $this->last_login_x_month_ago_null;
    }

    public function setLastLoginXMonthAgoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->last_login_x_month_ago_null = $var;
    }

    public function getDoNotDeleteButLogOnly()
    {
        return $this->do_not_delete_but_log_only;
    }

    public function setDoNotDeleteButLogOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->do_not_delete_but_log_only = $var;
    }

    public function getDoNotDeleteButLogOnlyNull()
    {
        return $this->do_not_delete_but_log_only_null;
    }

    public function setDoNotDeleteButLogOnlyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->do_not_delete_but_log_only_null = $var;
    }

    public function getOnlyMembersWithoutLoginStats()
    {
        return $this->only_members_without_login_stats;
    }

    public function setOnlyMembersWithoutLoginStats(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->only_members_without_login_stats = $var;
    }

    public function getOnlyMembersWithoutLoginStatsNull()
    {
        return $this->only_members_without_login_stats_null;
    }

    public function setOnlyMembersWithoutLoginStatsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_members_without_login_stats_null = $var;
    }

    public function getMaxNumberOfMembersToDelete()
    {
        return $this->max_number_of_members_to_delete;
    }

    public function setMaxNumberOfMembersToDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->max_number_of_members_to_delete = $var;
    }

    public function getMaxNumberOfMembersToDeleteNull()
    {
        return $this->max_number_of_members_to_delete_null;
    }

    public function setMaxNumberOfMembersToDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_number_of_members_to_delete_null = $var;
    }

    public function getPrintErrors()
    {
        return $this->print_errors;
    }

    public function setPrintErrors(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->print_errors = $var;
    }

    public function getPrintErrorsNull()
    {
        return $this->print_errors_null;
    }

    public function setPrintErrorsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->print_errors_null = $var;
    }

    public function getAdditionalInformation()
    {
        return $this->additional_information;
    }

    public function setAdditionalInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->additional_information = $var;
    }

    public function getAdditionalInformationNull()
    {
        return $this->additional_information_null;
    }

    public function setAdditionalInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->additional_information_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Co_DeleteInactiveMembers_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $community_member_id = null;
    private $last_login = null;
    private $nickname = null;
    private $creation_date_and_time = null;
    private $number_of_postings = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getCommunityMemberId()
    {
        return $this->community_member_id;
    }

    public function setCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->community_member_id = $var;
    }

    public function getLastLogin()
    {
        return $this->last_login;
    }

    public function setLastLogin(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->last_login = $var;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function setNickname(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->nickname = $var;
    }

    public function getCreationDateAndTime()
    {
        return $this->creation_date_and_time;
    }

    public function setCreationDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->creation_date_and_time = $var;
    }

    public function getNumberOfPostings()
    {
        return $this->number_of_postings;
    }

    public function setNumberOfPostings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_postings = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aef0b0a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "636f5f44656c657465496e6163746976654d656d626572735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e636f5f44656c657465496e" .
    "6163746976654d656d626572735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22c7050a0a506172616d65746572731231" .
    "0a0c636f6d6d756e6974795f696418012001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565121a0a11636f6d6d756e69" .
    "74795f69645f6e756c6c18e90720012808123b0a166c6173745f6c6f6769" .
    "6e5f785f6d6f6e74685f61676f18022001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512240a1b6c6173745f6c6f67" .
    "696e5f785f6d6f6e74685f61676f5f6e756c6c18ea0720012808123f0a1a" .
    "646f5f6e6f745f64656c6574655f6275745f6c6f675f6f6e6c7918032001" .
    "280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75" .
    "6512280a1f646f5f6e6f745f64656c6574655f6275745f6c6f675f6f6e6c" .
    "795f6e756c6c18eb072001280812450a206f6e6c795f6d656d626572735f" .
    "776974686f75745f6c6f67696e5f737461747318042001280b321b2e6473" .
    "746f72652e76616c7565732e626f6f6c65616e56616c7565122e0a256f6e" .
    "6c795f6d656d626572735f776974686f75745f6c6f67696e5f7374617473" .
    "5f6e756c6c18ec072001280812440a1f6d61785f6e756d6265725f6f665f" .
    "6d656d626572735f746f5f64656c65746518052001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c7565122d0a246d61785f" .
    "6e756d6265725f6f665f6d656d626572735f746f5f64656c6574655f6e75" .
    "6c6c18ed072001280812310a0c7072696e745f6572726f72731806200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "121a0a117072696e745f6572726f72735f6e756c6c18ee0720012808123b" .
    "0a166164646974696f6e616c5f696e666f726d6174696f6e18072001280b" .
    "321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512" .
    "240a1b6164646974696f6e616c5f696e666f726d6174696f6e5f6e756c6c" .
    "18ef072001280822fe030a08526573706f6e736512480a106d6574615f69" .
    "6e666f726d6174696f6e18022003280b322e2e6473746f72652e656e6769" .
    "6e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d61" .
    "74696f6e122f0a076d65737361676518032003280b321e2e6473746f7265" .
    "2e656e67696e652e6d6573736167652e4d65737361676512440a03726f77" .
    "18042003280b32372e6473746f72652e656e67696e652e636f5f44656c65" .
    "7465496e6163746976654d656d626572735f41642e526573706f6e73652e" .
    "526f771ab0020a03526f77120f0a06726f775f696418904e200128051239" .
    "0a13636f6d6d756e6974795f6d656d6265725f696418914e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512320a" .
    "0a6c6173745f6c6f67696e18924e2001280b321d2e6473746f72652e7661" .
    "6c7565732e74696d657374616d7056616c7565122d0a086e69636b6e616d" .
    "6518934e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565123f0a166372656174696f6e5f646174655f616e645f7469" .
    "6d6518a39c012001280b321d2e6473746f72652e76616c7565732e74696d" .
    "657374616d7056616c756512390a126e756d6265725f6f665f706f737469" .
    "6e677318a49c012001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565425c0a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a3d676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f636f5f44656c657465496e6163" .
    "746976654d656d626572735f4164620670726f746f33"
));

