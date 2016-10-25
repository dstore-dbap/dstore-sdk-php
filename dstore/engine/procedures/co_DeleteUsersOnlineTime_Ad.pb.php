<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_DeleteUsersOnlineTime_Ad.proto

namespace Dstore\Engine\Co_DeleteUsersOnlineTime_Ad;

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
    private $community_member_id = null;
    private $community_member_id_null = false;
    private $max_out_date = null;
    private $max_out_date_null = false;

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

    public function getCommunityMemberId()
    {
        return $this->community_member_id;
    }

    public function setCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->community_member_id = $var;
    }

    public function getCommunityMemberIdNull()
    {
        return $this->community_member_id_null;
    }

    public function setCommunityMemberIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_member_id_null = $var;
    }

    public function getMaxOutDate()
    {
        return $this->max_out_date;
    }

    public function setMaxOutDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->max_out_date = $var;
    }

    public function getMaxOutDateNull()
    {
        return $this->max_out_date_null;
    }

    public function setMaxOutDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_out_date_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Co_DeleteUsersOnlineTime_Ad\Response_Row::class);
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
    "0a96060a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "636f5f44656c65746555736572734f6e6c696e6554696d655f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e636f5f44656c6574655573" .
    "6572734f6e6c696e6554696d655f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f2289020a0a506172616d65746572731231" .
    "0a0c636f6d6d756e6974795f696418012001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565121a0a11636f6d6d756e69" .
    "74795f69645f6e756c6c18e9072001280812380a13636f6d6d756e697479" .
    "5f6d656d6265725f696418022001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512210a18636f6d6d756e6974795f6d" .
    "656d6265725f69645f6e756c6c18ea072001280812330a0c6d61785f6f75" .
    "745f6461746518032001280b321d2e6473746f72652e76616c7565732e74" .
    "696d657374616d7056616c7565121a0a116d61785f6f75745f646174655f" .
    "6e756c6c18eb072001280822e3010a08526573706f6e736512480a106d65" .
    "74615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e" .
    "656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e66" .
    "6f726d6174696f6e122f0a076d65737361676518032003280b321e2e6473" .
    "746f72652e656e67696e652e6d6573736167652e4d65737361676512440a" .
    "03726f7718042003280b32372e6473746f72652e656e67696e652e636f5f" .
    "44656c65746555736572734f6e6c696e6554696d655f41642e526573706f" .
    "6e73652e526f771a160a03526f77120f0a06726f775f696418904e200128" .
    "05425c0a1b696f2e6473746f72652e656e67696e652e70726f6365647572" .
    "65735a3d676f73646b2e6473746f72652e64652f656e67696e652f70726f" .
    "636564757265732f636f5f44656c65746555736572734f6e6c696e655469" .
    "6d655f4164620670726f746f33"
));

