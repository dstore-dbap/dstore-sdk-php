<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetForumSettings_Ad.proto

namespace Dstore\Engine\Fo_GetForumSettings_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $forum_id = null;
    private $forum_id_null = false;
    private $key_variable = null;
    private $key_variable_null = false;
    private $value = null;
    private $value_null = false;
    private $person_id = null;
    private $person_id_null = false;

    public function getForumId()
    {
        return $this->forum_id;
    }

    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->forum_id = $var;
    }

    public function getForumIdNull()
    {
        return $this->forum_id_null;
    }

    public function setForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_id_null = $var;
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

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_id = $var;
    }

    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetForumSettings_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $person_id = null;
    private $forum_id = null;
    private $value = null;
    private $key_variable = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_id = $var;
    }

    public function getForumId()
    {
        return $this->forum_id;
    }

    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->forum_id = $var;
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

    public function getKeyVariable()
    {
        return $this->key_variable;
    }

    public function setKeyVariable(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->key_variable = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae4070a356473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f476574466f72756d53657474696e67735f41642e70726f746f1224" .
    "6473746f72652e656e67696e652e666f5f476574466f72756d5365747469" .
    "6e67735f41641a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22aa020a0a506172616d6574657273122d0a08666f72756d5f6964" .
    "18012001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512160a0d666f72756d5f69645f6e756c6c18e9072001280812" .
    "300a0c6b65795f7661726961626c6518022001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565121a0a116b65795f766172" .
    "6961626c655f6e756c6c18ea072001280812290a0576616c756518032001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12130a0a76616c75655f6e756c6c18eb0720012808122e0a09706572736f" .
    "6e5f696418042001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c756512170a0e706572736f6e5f69645f6e756c6c18ec07" .
    "20012808229f030a08526573706f6e736512480a106d6574615f696e666f" .
    "726d6174696f6e18022003280b322e2e6473746f72652e656e67696e652e" .
    "6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174696f" .
    "6e122f0a076d65737361676518032003280b321e2e6473746f72652e656e" .
    "67696e652e6d6573736167652e4d657373616765123f0a03726f77180420" .
    "03280b32322e6473746f72652e656e67696e652e666f5f476574466f7275" .
    "6d53657474696e67735f41642e526573706f6e73652e526f771ad6010a03" .
    "526f77120f0a06726f775f696418904e20012805122f0a09706572736f6e" .
    "5f696418914e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c7565122e0a08666f72756d5f696418924e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565122a0a" .
    "0576616c756518934e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c756512310a0c6b65795f7661726961626c6518944e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "756542570a1b696f2e6473746f72652e656e67696e652e70726f63656475" .
    "7265735a38676f73646b2e6473746f72652e64652f656e67696e652f7072" .
    "6f636564757265732f666f5f476574466f72756d53657474696e67735f41" .
    "64620670726f746f33"
));
