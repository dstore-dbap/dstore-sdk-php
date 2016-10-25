<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_ModifyCommunitySettings_Ad.proto

namespace Dstore\Engine\Co_ModifyCommunitySettings_Ad;

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
    private $key_variable = null;
    private $key_variable_null = false;
    private $value = null;
    private $value_null = false;

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

    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->key_variable = $var;
    }

    public function getKeyVariableNull()
    {
        return $this->key_variable_null;
    }

    public function setKeyVariableNull($var)
    {
        GPBUtil::checkBool($var);
        $this->key_variable_null = $var;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value = $var;
    }

    public function getValueNull()
    {
        return $this->value_null;
    }

    public function setValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Co_ModifyCommunitySettings_Ad\Response_Row::class);
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
    "0afe050a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "636f5f4d6f64696679436f6d6d756e69747953657474696e67735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e636f5f4d6f64696679" .
    "436f6d6d756e69747953657474696e67735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22e9010a0a506172616d657465" .
    "727312310a0c636f6d6d756e6974795f696418012001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565121a0a11636f6d" .
    "6d756e6974795f69645f6e756c6c18e9072001280812300a0c6b65795f76" .
    "61726961626c6518022001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565121a0a116b65795f7661726961626c655f6e75" .
    "6c6c18ea072001280812290a0576616c756518032001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c756512130a0a76616c75" .
    "655f6e756c6c18eb072001280822e5010a08526573706f6e736512480a10" .
    "6d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f72" .
    "652e656e67696e652e6d657461696e666f726d6174696f6e2e4d65746149" .
    "6e666f726d6174696f6e122f0a076d65737361676518032003280b321e2e" .
    "6473746f72652e656e67696e652e6d6573736167652e4d65737361676512" .
    "460a03726f7718042003280b32392e6473746f72652e656e67696e652e63" .
    "6f5f4d6f64696679436f6d6d756e69747953657474696e67735f41642e52" .
    "6573706f6e73652e526f771a160a03526f77120f0a06726f775f69641890" .
    "4e20012805425e0a1b696f2e6473746f72652e656e67696e652e70726f63" .
    "6564757265735a3f676f73646b2e6473746f72652e64652f656e67696e65" .
    "2f70726f636564757265732f636f5f4d6f64696679436f6d6d756e697479" .
    "53657474696e67735f4164620670726f746f33"
));
