<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetApplicationSettings_Pu.proto

namespace Dstore\Engine\Mi_GetApplicationSettings_Pu;

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
    private $key_variable = null;
    private $key_variable_null = false;
    private $search_for_key_variable_with_like = null;
    private $search_for_key_variable_with_like_null = false;
    private $get_values_for_global_user = null;
    private $get_values_for_global_user_null = false;

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

    public function getSearchForKeyVariableWithLike()
    {
        return $this->search_for_key_variable_with_like;
    }

    public function setSearchForKeyVariableWithLike(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->search_for_key_variable_with_like = $var;
    }

    public function getSearchForKeyVariableWithLikeNull()
    {
        return $this->search_for_key_variable_with_like_null;
    }

    public function setSearchForKeyVariableWithLikeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_for_key_variable_with_like_null = $var;
    }

    public function getGetValuesForGlobalUser()
    {
        return $this->get_values_for_global_user;
    }

    public function setGetValuesForGlobalUser(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->get_values_for_global_user = $var;
    }

    public function getGetValuesForGlobalUserNull()
    {
        return $this->get_values_for_global_user_null;
    }

    public function setGetValuesForGlobalUserNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_values_for_global_user_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetApplicationSettings_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $value = null;
    private $key_variable = null;
    private $value_derived_from_global_user = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getValueDerivedFromGlobalUser()
    {
        return $this->value_derived_from_global_user;
    }

    public function setValueDerivedFromGlobalUser(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->value_derived_from_global_user = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ac8080a3b6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4765744170706c69636174696f6e53657474696e67735f50752e70" .
    "726f746f122a6473746f72652e656e67696e652e6d695f4765744170706c" .
    "69636174696f6e53657474696e67735f50751a136473746f72652f76616c" .
    "7565732e70726f746f1a1b6473746f72652f656e67696e652f6d65737361" .
    "67652e70726f746f1a236473746f72652f656e67696e652f6d657461696e" .
    "666f726d6174696f6e2e70726f746f2291030a0a506172616d6574657273" .
    "12330a0e6170706c69636174696f6e5f696418012001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565121c0a13617070" .
    "6c69636174696f6e5f69645f6e756c6c18e9072001280812300a0c6b6579" .
    "5f7661726961626c6518022001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c7565121a0a116b65795f7661726961626c655f" .
    "6e756c6c18ea072001280812460a217365617263685f666f725f6b65795f" .
    "7661726961626c655f776974685f6c696b6518032001280b321b2e647374" .
    "6f72652e76616c7565732e626f6f6c65616e56616c7565122f0a26736561" .
    "7263685f666f725f6b65795f7661726961626c655f776974685f6c696b65" .
    "5f6e756c6c18eb0720012808123f0a1a6765745f76616c7565735f666f72" .
    "5f676c6f62616c5f7573657218042001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512280a1f6765745f76616c7565" .
    "735f666f725f676c6f62616c5f757365725f6e756c6c18ec072001280822" .
    "8a030a08526573706f6e736512480a106d6574615f696e666f726d617469" .
    "6f6e18022003280b322e2e6473746f72652e656e67696e652e6d65746169" .
    "6e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a07" .
    "6d65737361676518032003280b321e2e6473746f72652e656e67696e652e" .
    "6d6573736167652e4d65737361676512450a03726f7718042003280b3238" .
    "2e6473746f72652e656e67696e652e6d695f4765744170706c6963617469" .
    "6f6e53657474696e67735f50752e526573706f6e73652e526f771abb010a" .
    "03526f77120f0a06726f775f696418904e20012805122a0a0576616c7565" .
    "18914e2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512310a0c6b65795f7661726961626c6518924e2001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512440a1e" .
    "76616c75655f646572697665645f66726f6d5f676c6f62616c5f75736572" .
    "18934e2001280b321b2e6473746f72652e76616c7565732e626f6f6c6561" .
    "6e56616c7565425d0a1b696f2e6473746f72652e656e67696e652e70726f" .
    "636564757265735a3e676f73646b2e6473746f72652e64652f656e67696e" .
    "652f70726f636564757265732f6d695f4765744170706c69636174696f6e" .
    "53657474696e67735f5075620670726f746f33"
));
