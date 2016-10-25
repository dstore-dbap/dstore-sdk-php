<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_CheckStatistics_Ad.proto

namespace Dstore\Engine\Co_CheckStatistics_Ad;

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
    private $statistic_information_id_list = null;
    private $statistic_information_id_list_null = false;
    private $from_date = null;
    private $from_date_null = false;
    private $to_date = null;
    private $to_date_null = false;
    private $return_all_variations = null;
    private $return_all_variations_null = false;

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

    public function getStatisticInformationIdList()
    {
        return $this->statistic_information_id_list;
    }

    public function setStatisticInformationIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->statistic_information_id_list = $var;
    }

    public function getStatisticInformationIdListNull()
    {
        return $this->statistic_information_id_list_null;
    }

    public function setStatisticInformationIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->statistic_information_id_list_null = $var;
    }

    public function getFromDate()
    {
        return $this->from_date;
    }

    public function setFromDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->from_date = $var;
    }

    public function getFromDateNull()
    {
        return $this->from_date_null;
    }

    public function setFromDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_date_null = $var;
    }

    public function getToDate()
    {
        return $this->to_date;
    }

    public function setToDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->to_date = $var;
    }

    public function getToDateNull()
    {
        return $this->to_date_null;
    }

    public function setToDateNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_date_null = $var;
    }

    public function getReturnAllVariations()
    {
        return $this->return_all_variations;
    }

    public function setReturnAllVariations(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->return_all_variations = $var;
    }

    public function getReturnAllVariationsNull()
    {
        return $this->return_all_variations_null;
    }

    public function setReturnAllVariationsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->return_all_variations_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Co_CheckStatistics_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $community_id = null;
    private $calculated_value = null;
    private $community_name = null;
    private $statistic_information_id = null;
    private $statistic_information = null;
    private $stored_value = null;
    private $day = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getCalculatedValue()
    {
        return $this->calculated_value;
    }

    public function setCalculatedValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->calculated_value = $var;
    }

    public function getCommunityName()
    {
        return $this->community_name;
    }

    public function setCommunityName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->community_name = $var;
    }

    public function getStatisticInformationId()
    {
        return $this->statistic_information_id;
    }

    public function setStatisticInformationId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->statistic_information_id = $var;
    }

    public function getStatisticInformation()
    {
        return $this->statistic_information;
    }

    public function setStatisticInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->statistic_information = $var;
    }

    public function getStoredValue()
    {
        return $this->stored_value;
    }

    public function setStoredValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->stored_value = $var;
    }

    public function getDay()
    {
        return $this->day;
    }

    public function setDay(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->day = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab20a0a346473746f72652f656e67696e652f70726f636564757265732f" .
    "636f5f436865636b537461746973746963735f41642e70726f746f122364" .
    "73746f72652e656e67696e652e636f5f436865636b537461746973746963" .
    "735f41641a136473746f72652f76616c7565732e70726f746f1a1b647374" .
    "6f72652f656e67696e652f6d6573736167652e70726f746f1a236473746f" .
    "72652f656e67696e652f6d657461696e666f726d6174696f6e2e70726f74" .
    "6f22be030a0a506172616d657465727312310a0c636f6d6d756e6974795f" .
    "696418012001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565121a0a11636f6d6d756e6974795f69645f6e756c6c18e9" .
    "072001280812410a1d7374617469737469635f696e666f726d6174696f6e" .
    "5f69645f6c69737418022001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c7565122b0a227374617469737469635f696e666f" .
    "726d6174696f6e5f69645f6c6973745f6e756c6c18ea072001280812300a" .
    "0966726f6d5f6461746518032001280b321d2e6473746f72652e76616c75" .
    "65732e74696d657374616d7056616c756512170a0e66726f6d5f64617465" .
    "5f6e756c6c18eb0720012808122e0a07746f5f6461746518042001280b32" .
    "1d2e6473746f72652e76616c7565732e74696d657374616d7056616c7565" .
    "12150a0c746f5f646174655f6e756c6c18ec0720012808123a0a15726574" .
    "75726e5f616c6c5f766172696174696f6e7318052001280b321b2e647374" .
    "6f72652e76616c7565732e626f6f6c65616e56616c756512230a1a726574" .
    "75726e5f616c6c5f766172696174696f6e735f6e756c6c18ed0720012808" .
    "22dc040a08526573706f6e736512480a106d6574615f696e666f726d6174" .
    "696f6e18022003280b322e2e6473746f72652e656e67696e652e6d657461" .
    "696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a" .
    "076d65737361676518032003280b321e2e6473746f72652e656e67696e65" .
    "2e6d6573736167652e4d657373616765123e0a03726f7718042003280b32" .
    "312e6473746f72652e656e67696e652e636f5f436865636b537461746973" .
    "746963735f41642e526573706f6e73652e526f771a94030a03526f77120f" .
    "0a06726f775f696418904e2001280512320a0c636f6d6d756e6974795f69" .
    "6418914e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c756512360a1063616c63756c617465645f76616c756518924e" .
    "2001280b321b2e6473746f72652e76616c7565732e646563696d616c5661" .
    "6c756512330a0e636f6d6d756e6974795f6e616d6518934e2001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c7565123e0a18" .
    "7374617469737469635f696e666f726d6174696f6e5f696418944e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "123a0a157374617469737469635f696e666f726d6174696f6e18954e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12320a0c73746f7265645f76616c756518964e2001280b321b2e6473746f" .
    "72652e76616c7565732e646563696d616c56616c7565122b0a0364617918" .
    "974e2001280b321d2e6473746f72652e76616c7565732e74696d65737461" .
    "6d7056616c756542560a1b696f2e6473746f72652e656e67696e652e7072" .
    "6f636564757265735a37676f73646b2e6473746f72652e64652f656e6769" .
    "6e652f70726f636564757265732f636f5f436865636b5374617469737469" .
    "63735f4164620670726f746f33"
));

