<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTableDDL_Ad.proto

namespace Dstore\Engine\Mi_GetTableDDL_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $only_table_name = null;
    private $only_table_name_null = false;
    private $database_name = null;
    private $database_name_null = false;
    private $get_only_column_def_as_result = null;
    private $get_only_column_def_as_result_null = false;
    private $fully_qualified_name_in_output = null;
    private $fully_qualified_name_in_output_null = false;

    public function getOnlyTableName()
    {
        return $this->only_table_name;
    }

    public function setOnlyTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->only_table_name = $var;
    }

    public function getOnlyTableNameNull()
    {
        return $this->only_table_name_null;
    }

    public function setOnlyTableNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_table_name_null = $var;
    }

    public function getDatabaseName()
    {
        return $this->database_name;
    }

    public function setDatabaseName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->database_name = $var;
    }

    public function getDatabaseNameNull()
    {
        return $this->database_name_null;
    }

    public function setDatabaseNameNull($var)
    {
        GPBUtil::checkBool($var);
        $this->database_name_null = $var;
    }

    public function getGetOnlyColumnDefAsResult()
    {
        return $this->get_only_column_def_as_result;
    }

    public function setGetOnlyColumnDefAsResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_only_column_def_as_result = $var;
    }

    public function getGetOnlyColumnDefAsResultNull()
    {
        return $this->get_only_column_def_as_result_null;
    }

    public function setGetOnlyColumnDefAsResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_only_column_def_as_result_null = $var;
    }

    public function getFullyQualifiedNameInOutput()
    {
        return $this->fully_qualified_name_in_output;
    }

    public function setFullyQualifiedNameInOutput(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->fully_qualified_name_in_output = $var;
    }

    public function getFullyQualifiedNameInOutputNull()
    {
        return $this->fully_qualified_name_in_output_null;
    }

    public function setFullyQualifiedNameInOutputNull($var)
    {
        GPBUtil::checkBool($var);
        $this->fully_qualified_name_in_output_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetTableDDL_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $column_name = null;
    private $length = null;
    private $data_type = null;
    private $precision_value = null;
    private $scale = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getColumnName()
    {
        return $this->column_name;
    }

    public function setColumnName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->column_name = $var;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->length = $var;
    }

    public function getDataType()
    {
        return $this->data_type;
    }

    public function setDataType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->data_type = $var;
    }

    public function getPrecisionValue()
    {
        return $this->precision_value;
    }

    public function setPrecisionValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->precision_value = $var;
    }

    public function getScale()
    {
        return $this->scale;
    }

    public function setScale(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->scale = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aee080a306473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4765745461626c6544444c5f41642e70726f746f121f6473746f72" .
    "652e656e67696e652e6d695f4765745461626c6544444c5f41641a136473" .
    "746f72652f76616c7565732e70726f746f1a1b6473746f72652f656e6769" .
    "6e652f6d6573736167652e70726f746f1a236473746f72652f656e67696e" .
    "652f6d657461696e666f726d6174696f6e2e70726f746f2294030a0a5061" .
    "72616d657465727312330a0f6f6e6c795f7461626c655f6e616d65180120" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "65121d0a146f6e6c795f7461626c655f6e616d655f6e756c6c18e9072001" .
    "280812310a0d64617461626173655f6e616d6518022001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565121b0a12646174" .
    "61626173655f6e616d655f6e756c6c18ea072001280812420a1d6765745f" .
    "6f6e6c795f636f6c756d6e5f6465665f61735f726573756c741803200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "122b0a226765745f6f6e6c795f636f6c756d6e5f6465665f61735f726573" .
    "756c745f6e756c6c18eb072001280812430a1e66756c6c795f7175616c69" .
    "666965645f6e616d655f696e5f6f757470757418042001280b321b2e6473" .
    "746f72652e76616c7565732e626f6f6c65616e56616c7565122c0a236675" .
    "6c6c795f7175616c69666965645f6e616d655f696e5f6f75747075745f6e" .
    "756c6c18ec072001280822ce030a08526573706f6e736512480a106d6574" .
    "615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e65" .
    "6e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f" .
    "726d6174696f6e122f0a076d65737361676518032003280b321e2e647374" .
    "6f72652e656e67696e652e6d6573736167652e4d657373616765123a0a03" .
    "726f7718042003280b322d2e6473746f72652e656e67696e652e6d695f47" .
    "65745461626c6544444c5f41642e526573706f6e73652e526f771a8a020a" .
    "03526f77120f0a06726f775f696418904e2001280512300a0b636f6c756d" .
    "6e5f6e616d6518914e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c7565122c0a066c656e67746818924e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565122e0a" .
    "09646174615f7479706518934e2001280b321a2e6473746f72652e76616c" .
    "7565732e737472696e6756616c756512350a0f707265636973696f6e5f76" .
    "616c756518944e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565122b0a057363616c6518954e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756542520a1b69" .
    "6f2e6473746f72652e656e67696e652e70726f636564757265735a33676f" .
    "73646b2e6473746f72652e64652f656e67696e652f70726f636564757265" .
    "732f6d695f4765745461626c6544444c5f4164620670726f746f33"
));
