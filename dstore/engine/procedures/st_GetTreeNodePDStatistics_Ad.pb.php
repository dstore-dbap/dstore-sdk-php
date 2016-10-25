<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetTreeNodePDStatistics_Ad.proto

namespace Dstore\Engine\St_GetTreeNodePDStatistics_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $from_date = null;
    private $from_date_null = false;
    private $to_date = null;
    private $to_date_null = false;
    private $basic_characteristic_numbers = null;
    private $basic_characteristic_numbers_null = false;
    private $h_tree_node_ids = null;
    private $h_tree_node_ids_null = false;
    private $summarize_days = null;
    private $summarize_days_null = false;

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

    public function getBasicCharacteristicNumbers()
    {
        return $this->basic_characteristic_numbers;
    }

    public function setBasicCharacteristicNumbers(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->basic_characteristic_numbers = $var;
    }

    public function getBasicCharacteristicNumbersNull()
    {
        return $this->basic_characteristic_numbers_null;
    }

    public function setBasicCharacteristicNumbersNull($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_characteristic_numbers_null = $var;
    }

    public function getHTreeNodeIds()
    {
        return $this->h_tree_node_ids;
    }

    public function setHTreeNodeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->h_tree_node_ids = $var;
    }

    public function getHTreeNodeIdsNull()
    {
        return $this->h_tree_node_ids_null;
    }

    public function setHTreeNodeIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->h_tree_node_ids_null = $var;
    }

    public function getSummarizeDays()
    {
        return $this->summarize_days;
    }

    public function setSummarizeDays(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->summarize_days = $var;
    }

    public function getSummarizeDaysNull()
    {
        return $this->summarize_days_null;
    }

    public function setSummarizeDaysNull($var)
    {
        GPBUtil::checkBool($var);
        $this->summarize_days_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\St_GetTreeNodePDStatistics_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $total_value = null;
    private $h_tree_node_id = null;
    private $direct_value = null;
    private $date = null;
    private $basic_characteristic_number = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTotalValue()
    {
        return $this->total_value;
    }

    public function setTotalValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->total_value = $var;
    }

    public function getHTreeNodeId()
    {
        return $this->h_tree_node_id;
    }

    public function setHTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->h_tree_node_id = $var;
    }

    public function getDirectValue()
    {
        return $this->direct_value;
    }

    public function setDirectValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\decimalValue::class);
        $this->direct_value = $var;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->date = $var;
    }

    public function getBasicCharacteristicNumber()
    {
        return $this->basic_characteristic_number;
    }

    public function setBasicCharacteristicNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->basic_characteristic_number = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad7090a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "73745f476574547265654e6f64655044537461746973746963735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e73745f476574547265" .
    "654e6f64655044537461746973746963735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22b3030a0a506172616d657465" .
    "727312300a0966726f6d5f6461746518012001280b321d2e6473746f7265" .
    "2e76616c7565732e74696d657374616d7056616c756512170a0e66726f6d" .
    "5f646174655f6e756c6c18e90720012808122e0a07746f5f646174651802" .
    "2001280b321d2e6473746f72652e76616c7565732e74696d657374616d70" .
    "56616c756512150a0c746f5f646174655f6e756c6c18ea07200128081240" .
    "0a1c62617369635f63686172616374657269737469635f6e756d62657273" .
    "18032001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565122a0a2162617369635f63686172616374657269737469635f6e" .
    "756d626572735f6e756c6c18eb072001280812330a0f685f747265655f6e" .
    "6f64655f69647318042001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565121d0a14685f747265655f6e6f64655f696473" .
    "5f6e756c6c18ec072001280812330a0e73756d6d6172697a655f64617973" .
    "18052001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c7565121c0a1373756d6d6172697a655f646179735f6e756c6c18ed" .
    "072001280822f4030a08526573706f6e736512480a106d6574615f696e66" .
    "6f726d6174696f6e18022003280b322e2e6473746f72652e656e67696e65" .
    "2e6d657461696e666f726d6174696f6e2e4d657461496e666f726d617469" .
    "6f6e122f0a076d65737361676518032003280b321e2e6473746f72652e65" .
    "6e67696e652e6d6573736167652e4d65737361676512460a03726f771804" .
    "2003280b32392e6473746f72652e656e67696e652e73745f476574547265" .
    "654e6f64655044537461746973746963735f41642e526573706f6e73652e" .
    "526f771aa4020a03526f77120f0a06726f775f696418904e200128051231" .
    "0a0b746f74616c5f76616c756518914e2001280b321b2e6473746f72652e" .
    "76616c7565732e646563696d616c56616c756512340a0e685f747265655f" .
    "6e6f64655f696418924e2001280b321b2e6473746f72652e76616c756573" .
    "2e696e746567657256616c756512320a0c6469726563745f76616c756518" .
    "934e2001280b321b2e6473746f72652e76616c7565732e646563696d616c" .
    "56616c7565122c0a046461746518944e2001280b321d2e6473746f72652e" .
    "76616c7565732e74696d657374616d7056616c756512410a1b6261736963" .
    "5f63686172616374657269737469635f6e756d62657218954e2001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565425e" .
    "0a1b696f2e6473746f72652e656e67696e652e70726f636564757265735a" .
    "3f676f73646b2e6473746f72652e64652f656e67696e652f70726f636564" .
    "757265732f73745f476574547265654e6f64655044537461746973746963" .
    "735f4164620670726f746f33"
));

