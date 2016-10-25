<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_CreateNewMessage_Pu.proto

namespace Dstore\Engine\Co_CreateNewMessage_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $unique_id = null;
    private $unique_id_null = false;
    private $person_identification_values = null;
    private $person_identification_values_null = false;
    private $community_id = null;
    private $community_id_null = false;
    private $to_community_member_id = null;
    private $to_community_member_id_null = false;
    private $message = null;
    private $message_null = false;
    private $message_status = null;
    private $message_status_null = false;
    private $separator_in_ident_vals = null;
    private $separator_in_ident_vals_null = false;

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

    public function getToCommunityMemberId()
    {
        return $this->to_community_member_id;
    }

    public function setToCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_community_member_id = $var;
    }

    public function getToCommunityMemberIdNull()
    {
        return $this->to_community_member_id_null;
    }

    public function setToCommunityMemberIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_community_member_id_null = $var;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->message = $var;
    }

    public function getMessageNull()
    {
        return $this->message_null;
    }

    public function setMessageNull($var)
    {
        GPBUtil::checkBool($var);
        $this->message_null = $var;
    }

    public function getMessageStatus()
    {
        return $this->message_status;
    }

    public function setMessageStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->message_status = $var;
    }

    public function getMessageStatusNull()
    {
        return $this->message_status_null;
    }

    public function setMessageStatusNull($var)
    {
        GPBUtil::checkBool($var);
        $this->message_status_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Co_CreateNewMessage_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae8080a356473746f72652f656e67696e652f70726f636564757265732f" .
    "636f5f4372656174654e65774d6573736167655f50752e70726f746f1224" .
    "6473746f72652e656e67696e652e636f5f4372656174654e65774d657373" .
    "6167655f50751a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22ef040a0a506172616d6574657273122d0a09756e697175655f69" .
    "6418012001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512170a0e756e697175655f69645f6e756c6c18e90720012808" .
    "12400a1c706572736f6e5f6964656e74696669636174696f6e5f76616c75" .
    "657318022001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565122a0a21706572736f6e5f6964656e74696669636174696f" .
    "6e5f76616c7565735f6e756c6c18ea072001280812310a0c636f6d6d756e" .
    "6974795f696418032001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565121a0a11636f6d6d756e6974795f69645f6e75" .
    "6c6c18eb0720012808123b0a16746f5f636f6d6d756e6974795f6d656d62" .
    "65725f696418042001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512240a1b746f5f636f6d6d756e6974795f6d656d" .
    "6265725f69645f6e756c6c18ec0720012808122b0a076d65737361676518" .
    "052001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512150a0c6d6573736167655f6e756c6c18ed072001280812330a0e" .
    "6d6573736167655f73746174757318062001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565121c0a136d657373616765" .
    "5f7374617475735f6e756c6c18ee0720012808123b0a1773657061726174" .
    "6f725f696e5f6964656e745f76616c7318072001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512250a1c736570617261" .
    "746f725f696e5f6964656e745f76616c735f6e756c6c18ef072001280822" .
    "de010a08526573706f6e736512480a106d6574615f696e666f726d617469" .
    "6f6e18022003280b322e2e6473746f72652e656e67696e652e6d65746169" .
    "6e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a07" .
    "6d65737361676518032003280b321e2e6473746f72652e656e67696e652e" .
    "6d6573736167652e4d657373616765123f0a03726f7718042003280b3232" .
    "2e6473746f72652e656e67696e652e636f5f4372656174654e65774d6573" .
    "736167655f50752e526573706f6e73652e526f771a160a03526f77120f0a" .
    "06726f775f696418904e2001280542570a1b696f2e6473746f72652e656e" .
    "67696e652e70726f636564757265735a38676f73646b2e6473746f72652e" .
    "64652f656e67696e652f70726f636564757265732f636f5f437265617465" .
    "4e65774d6573736167655f5075620670726f746f33"
));

