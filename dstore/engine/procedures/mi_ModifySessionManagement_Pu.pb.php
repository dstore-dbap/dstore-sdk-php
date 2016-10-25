<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifySessionManagement_Pu.proto

namespace Dstore\Engine\Mi_ModifySessionManagement_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $session_id = null;
    private $session_id_null = false;
    private $key_variable = null;
    private $key_variable_null = false;
    private $value = null;
    private $value_null = false;

    public function getSessionId()
    {
        return $this->session_id;
    }

    public function setSessionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->session_id = $var;
    }

    public function getSessionIdNull()
    {
        return $this->session_id_null;
    }

    public function setSessionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->session_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_ModifySessionManagement_Pu\Response_Row::class);
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
    "0af9050a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4d6f6469667953657373696f6e4d616e6167656d656e745f50752e" .
    "70726f746f122b6473746f72652e656e67696e652e6d695f4d6f64696679" .
    "53657373696f6e4d616e6167656d656e745f50751a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22e4010a0a506172616d657465" .
    "7273122e0a0a73657373696f6e5f696418012001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512180a0f73657373696f" .
    "6e5f69645f6e756c6c18e9072001280812300a0c6b65795f766172696162" .
    "6c6518022001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565121a0a116b65795f7661726961626c655f6e756c6c18ea07" .
    "2001280812290a0576616c756518032001280b321a2e6473746f72652e76" .
    "616c7565732e737472696e6756616c756512130a0a76616c75655f6e756c" .
    "6c18eb072001280822e5010a08526573706f6e736512480a106d6574615f" .
    "696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e67" .
    "696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d" .
    "6174696f6e122f0a076d65737361676518032003280b321e2e6473746f72" .
    "652e656e67696e652e6d6573736167652e4d65737361676512460a03726f" .
    "7718042003280b32392e6473746f72652e656e67696e652e6d695f4d6f64" .
    "69667953657373696f6e4d616e6167656d656e745f50752e526573706f6e" .
    "73652e526f771a160a03526f77120f0a06726f775f696418904e20012805" .
    "425e0a1b696f2e6473746f72652e656e67696e652e70726f636564757265" .
    "735a3f676f73646b2e6473746f72652e64652f656e67696e652f70726f63" .
    "6564757265732f6d695f4d6f6469667953657373696f6e4d616e6167656d" .
    "656e745f5075620670726f746f33"
));

