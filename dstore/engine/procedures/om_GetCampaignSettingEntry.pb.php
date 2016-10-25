<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignSettingEntry.proto

namespace Dstore\Engine\Om_GetCampaignSettingEntry;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $campaign_id = null;
    private $campaign_id_null = false;
    private $key_variable = null;
    private $key_variable_null = false;
    private $setting_value = null;
    private $setting_value_null = false;
    private $select_result = null;
    private $select_result_null = false;
    private $print_error_msg_if_entry_is_missing = null;
    private $print_error_msg_if_entry_is_missing_null = false;

    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    public function setCampaignId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->campaign_id = $var;
    }

    public function getCampaignIdNull()
    {
        return $this->campaign_id_null;
    }

    public function setCampaignIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->campaign_id_null = $var;
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

    public function getSettingValue()
    {
        return $this->setting_value;
    }

    public function setSettingValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->setting_value = $var;
    }

    public function getSettingValueNull()
    {
        return $this->setting_value_null;
    }

    public function setSettingValueNull($var)
    {
        GPBUtil::checkBool($var);
        $this->setting_value_null = $var;
    }

    public function getSelectResult()
    {
        return $this->select_result;
    }

    public function setSelectResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->select_result = $var;
    }

    public function getSelectResultNull()
    {
        return $this->select_result_null;
    }

    public function setSelectResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->select_result_null = $var;
    }

    public function getPrintErrorMsgIfEntryIsMissing()
    {
        return $this->print_error_msg_if_entry_is_missing;
    }

    public function setPrintErrorMsgIfEntryIsMissing(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->print_error_msg_if_entry_is_missing = $var;
    }

    public function getPrintErrorMsgIfEntryIsMissingNull()
    {
        return $this->print_error_msg_if_entry_is_missing_null;
    }

    public function setPrintErrorMsgIfEntryIsMissingNull($var)
    {
        GPBUtil::checkBool($var);
        $this->print_error_msg_if_entry_is_missing_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $setting_value = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCampaignSettingEntry\Response_Row::class);
        $this->row = $var;
    }

    public function getSettingValue()
    {
        return $this->setting_value;
    }

    public function setSettingValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->setting_value = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $setting_value = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getSettingValue()
    {
        return $this->setting_value;
    }

    public function setSettingValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->setting_value = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab5080a396473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657443616d706169676e53657474696e67456e7472792e70726f" .
    "746f12286473746f72652e656e67696e652e6f6d5f47657443616d706169" .
    "676e53657474696e67456e7472791a136473746f72652f76616c7565732e" .
    "70726f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70" .
    "726f746f1a236473746f72652f656e67696e652f6d657461696e666f726d" .
    "6174696f6e2e70726f746f22c5030a0a506172616d657465727312300a0b" .
    "63616d706169676e5f696418012001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512190a1063616d706169676e5f69" .
    "645f6e756c6c18e9072001280812300a0c6b65795f7661726961626c6518" .
    "022001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c7565121a0a116b65795f7661726961626c655f6e756c6c18ea07200128" .
    "0812310a0d73657474696e675f76616c756518032001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565121b0a1273657474" .
    "696e675f76616c75655f6e756c6c18eb072001280812320a0d73656c6563" .
    "745f726573756c7418042001280b321b2e6473746f72652e76616c756573" .
    "2e626f6f6c65616e56616c7565121b0a1273656c6563745f726573756c74" .
    "5f6e756c6c18ec072001280812480a237072696e745f6572726f725f6d73" .
    "675f69665f656e7472795f69735f6d697373696e6718052001280b321b2e" .
    "6473746f72652e76616c7565732e626f6f6c65616e56616c756512310a28" .
    "7072696e745f6572726f725f6d73675f69665f656e7472795f69735f6d69" .
    "7373696e675f6e756c6c18ed072001280822c9020a08526573706f6e7365" .
    "12480a106d6574615f696e666f726d6174696f6e18022003280b322e2e64" .
    "73746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d" .
    "657461496e666f726d6174696f6e122f0a076d6573736167651803200328" .
    "0b321e2e6473746f72652e656e67696e652e6d6573736167652e4d657373" .
    "61676512430a03726f7718042003280b32362e6473746f72652e656e6769" .
    "6e652e6f6d5f47657443616d706169676e53657474696e67456e7472792e" .
    "526573706f6e73652e526f7712310a0d73657474696e675f76616c756518" .
    "652001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c75651a4a0a03526f77120f0a06726f775f696418904e2001280512320a" .
    "0d73657474696e675f76616c756518914e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565425b0a1b696f2e6473746f" .
    "72652e656e67696e652e70726f636564757265735a3c676f73646b2e6473" .
    "746f72652e64652f656e67696e652f70726f636564757265732f6f6d5f47" .
    "657443616d706169676e53657474696e67456e747279620670726f746f33"
));
