<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/st_GetTreeNodePMStatistics_Ad.proto

namespace Dstore\Engine\St_GetTreeNodePMStatistics_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $from_month = null;
    private $from_month_null = false;
    private $from_year = null;
    private $from_year_null = false;
    private $to_month = null;
    private $to_month_null = false;
    private $to_year = null;
    private $to_year_null = false;
    private $basic_characteristic_numbers = null;
    private $basic_characteristic_numbers_null = false;
    private $h_tree_node_ids = null;
    private $h_tree_node_ids_null = false;
    private $summarize_months = null;
    private $summarize_months_null = false;

    public function getFromMonth()
    {
        return $this->from_month;
    }

    public function setFromMonth(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_month = $var;
    }

    public function getFromMonthNull()
    {
        return $this->from_month_null;
    }

    public function setFromMonthNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_month_null = $var;
    }

    public function getFromYear()
    {
        return $this->from_year;
    }

    public function setFromYear(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->from_year = $var;
    }

    public function getFromYearNull()
    {
        return $this->from_year_null;
    }

    public function setFromYearNull($var)
    {
        GPBUtil::checkBool($var);
        $this->from_year_null = $var;
    }

    public function getToMonth()
    {
        return $this->to_month;
    }

    public function setToMonth(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_month = $var;
    }

    public function getToMonthNull()
    {
        return $this->to_month_null;
    }

    public function setToMonthNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_month_null = $var;
    }

    public function getToYear()
    {
        return $this->to_year;
    }

    public function setToYear(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->to_year = $var;
    }

    public function getToYearNull()
    {
        return $this->to_year_null;
    }

    public function setToYearNull($var)
    {
        GPBUtil::checkBool($var);
        $this->to_year_null = $var;
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

    public function getSummarizeMonths()
    {
        return $this->summarize_months;
    }

    public function setSummarizeMonths(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->summarize_months = $var;
    }

    public function getSummarizeMonthsNull()
    {
        return $this->summarize_months_null;
    }

    public function setSummarizeMonthsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->summarize_months_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\St_GetTreeNodePMStatistics_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $month = null;
    private $total_value = null;
    private $year = null;
    private $h_tree_node_id = null;
    private $direct_value = null;
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

    public function getMonth()
    {
        return $this->month;
    }

    public function setMonth(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->month = $var;
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

    public function getYear()
    {
        return $this->year;
    }

    public function setYear(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->year = $var;
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
    "0a940b0a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "73745f476574547265654e6f6465504d537461746973746963735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e73745f476574547265" .
    "654e6f6465504d537461746973746963735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22c5040a0a506172616d657465" .
    "7273122f0a0a66726f6d5f6d6f6e746818012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512180a0f66726f6d5f" .
    "6d6f6e74685f6e756c6c18e90720012808122e0a0966726f6d5f79656172" .
    "18022001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512170a0e66726f6d5f796561725f6e756c6c18ea0720012808" .
    "122d0a08746f5f6d6f6e746818032001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512160a0d746f5f6d6f6e74685f" .
    "6e756c6c18eb0720012808122c0a07746f5f7965617218042001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512150a" .
    "0c746f5f796561725f6e756c6c18ec072001280812400a1c62617369635f" .
    "63686172616374657269737469635f6e756d6265727318052001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c7565122a0a21" .
    "62617369635f63686172616374657269737469635f6e756d626572735f6e" .
    "756c6c18ed072001280812330a0f685f747265655f6e6f64655f69647318" .
    "062001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c7565121d0a14685f747265655f6e6f64655f6964735f6e756c6c18ee07" .
    "2001280812350a1073756d6d6172697a655f6d6f6e74687318072001280b" .
    "321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c756512" .
    "1e0a1573756d6d6172697a655f6d6f6e7468735f6e756c6c18ef07200128" .
    "08229f040a08526573706f6e736512480a106d6574615f696e666f726d61" .
    "74696f6e18022003280b322e2e6473746f72652e656e67696e652e6d6574" .
    "61696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f" .
    "0a076d65737361676518032003280b321e2e6473746f72652e656e67696e" .
    "652e6d6573736167652e4d65737361676512460a03726f7718042003280b" .
    "32392e6473746f72652e656e67696e652e73745f476574547265654e6f64" .
    "65504d537461746973746963735f41642e526573706f6e73652e526f771a" .
    "cf020a03526f77120f0a06726f775f696418904e20012805122b0a056d6f" .
    "6e746818914e2001280b321b2e6473746f72652e76616c7565732e696e74" .
    "6567657256616c756512310a0b746f74616c5f76616c756518924e200128" .
    "0b321b2e6473746f72652e76616c7565732e646563696d616c56616c7565" .
    "122a0a047965617218934e2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512340a0e685f747265655f6e6f64655f" .
    "696418944e2001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512320a0c6469726563745f76616c756518954e200128" .
    "0b321b2e6473746f72652e76616c7565732e646563696d616c56616c7565" .
    "12410a1b62617369635f63686172616374657269737469635f6e756d6265" .
    "7218964e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565425e0a1b696f2e6473746f72652e656e67696e652e7072" .
    "6f636564757265735a3f676f73646b2e6473746f72652e64652f656e6769" .
    "6e652f70726f636564757265732f73745f476574547265654e6f6465504d" .
    "537461746973746963735f4164620670726f746f33"
));
