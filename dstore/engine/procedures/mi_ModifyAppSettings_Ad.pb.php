<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_ModifyAppSettings_Ad.proto

namespace Dstore\Engine\Mi_ModifyAppSettings_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $application_id = null;
    private $application_id_null = false;
    private $user_id = null;
    private $user_id_null = false;
    private $key_variable = null;
    private $key_variable_null = false;
    private $value = null;
    private $value_null = false;
    private $delete = null;
    private $delete_null = false;
    private $key_value_pairs_in_tempdb = null;
    private $key_value_pairs_in_tempdb_null = false;

    public function getApplicationId()
    {
        return $this->application_id;
    }

    public function setApplicationId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->application_id = $var;
    }

    public function getApplicationIdNull()
    {
        return $this->application_id_null;
    }

    public function setApplicationIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->application_id_null = $var;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_id = $var;
    }

    public function getUserIdNull()
    {
        return $this->user_id_null;
    }

    public function setUserIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_id_null = $var;
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

    public function getDelete()
    {
        return $this->delete;
    }

    public function setDelete(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->delete = $var;
    }

    public function getDeleteNull()
    {
        return $this->delete_null;
    }

    public function setDeleteNull($var)
    {
        GPBUtil::checkBool($var);
        $this->delete_null = $var;
    }

    public function getKeyValuePairsInTempdb()
    {
        return $this->key_value_pairs_in_tempdb;
    }

    public function setKeyValuePairsInTempdb(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->key_value_pairs_in_tempdb = $var;
    }

    public function getKeyValuePairsInTempdbNull()
    {
        return $this->key_value_pairs_in_tempdb_null;
    }

    public function setKeyValuePairsInTempdbNull($var)
    {
        GPBUtil::checkBool($var);
        $this->key_value_pairs_in_tempdb_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_ModifyAppSettings_Ad\Response_Row::class);
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
    "0adb070a366473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4d6f6469667941707053657474696e67735f41642e70726f746f12" .
    "256473746f72652e656e67696e652e6d695f4d6f64696679417070536574" .
    "74696e67735f41641a136473746f72652f76616c7565732e70726f746f1a" .
    "1b6473746f72652f656e67696e652f6d6573736167652e70726f746f1a23" .
    "6473746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e" .
    "70726f746f22de030a0a506172616d657465727312330a0e6170706c6963" .
    "6174696f6e5f696418012001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c7565121c0a136170706c69636174696f6e5f69" .
    "645f6e756c6c18e90720012808122c0a07757365725f696418022001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "150a0c757365725f69645f6e756c6c18ea072001280812300a0c6b65795f" .
    "7661726961626c6518032001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c7565121a0a116b65795f7661726961626c655f6e" .
    "756c6c18eb072001280812290a0576616c756518042001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c756512130a0a76616c" .
    "75655f6e756c6c18ec0720012808122b0a0664656c65746518052001280b" .
    "321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512" .
    "140a0b64656c6574655f6e756c6c18ed0720012808123e0a196b65795f76" .
    "616c75655f70616972735f696e5f74656d70646218062001280b321b2e64" .
    "73746f72652e76616c7565732e626f6f6c65616e56616c756512270a1e6b" .
    "65795f76616c75655f70616972735f696e5f74656d7064625f6e756c6c18" .
    "ee072001280822df010a08526573706f6e736512480a106d6574615f696e" .
    "666f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e" .
    "652e6d657461696e666f726d6174696f6e2e4d657461496e666f726d6174" .
    "696f6e122f0a076d65737361676518032003280b321e2e6473746f72652e" .
    "656e67696e652e6d6573736167652e4d65737361676512400a03726f7718" .
    "042003280b32332e6473746f72652e656e67696e652e6d695f4d6f646966" .
    "7941707053657474696e67735f41642e526573706f6e73652e526f771a16" .
    "0a03526f77120f0a06726f775f696418904e2001280542580a1b696f2e64" .
    "73746f72652e656e67696e652e70726f636564757265735a39676f73646b" .
    "2e6473746f72652e64652f656e67696e652f70726f636564757265732f6d" .
    "695f4d6f6469667941707053657474696e67735f4164620670726f746f33"
));

