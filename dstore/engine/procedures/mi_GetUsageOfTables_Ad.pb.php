<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetUsageOfTables_Ad.proto

namespace Dstore\Engine\Mi_GetUsageOfTables_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $tables_list = null;
    private $tables_list_null = false;
    private $separator_in_tables_list = null;
    private $separator_in_tables_list_null = false;
    private $search_only_object_type = null;
    private $search_only_object_type_null = false;
    private $get_distinct_object_names_only = null;
    private $get_distinct_object_names_only_null = false;
    private $number_of_results = null;
    private $number_of_results_null = false;

    public function getTablesList()
    {
        return $this->tables_list;
    }

    public function setTablesList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->tables_list = $var;
    }

    public function getTablesListNull()
    {
        return $this->tables_list_null;
    }

    public function setTablesListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->tables_list_null = $var;
    }

    public function getSeparatorInTablesList()
    {
        return $this->separator_in_tables_list;
    }

    public function setSeparatorInTablesList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator_in_tables_list = $var;
    }

    public function getSeparatorInTablesListNull()
    {
        return $this->separator_in_tables_list_null;
    }

    public function setSeparatorInTablesListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_tables_list_null = $var;
    }

    public function getSearchOnlyObjectType()
    {
        return $this->search_only_object_type;
    }

    public function setSearchOnlyObjectType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->search_only_object_type = $var;
    }

    public function getSearchOnlyObjectTypeNull()
    {
        return $this->search_only_object_type_null;
    }

    public function setSearchOnlyObjectTypeNull($var)
    {
        GPBUtil::checkBool($var);
        $this->search_only_object_type_null = $var;
    }

    public function getGetDistinctObjectNamesOnly()
    {
        return $this->get_distinct_object_names_only;
    }

    public function setGetDistinctObjectNamesOnly(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_distinct_object_names_only = $var;
    }

    public function getGetDistinctObjectNamesOnlyNull()
    {
        return $this->get_distinct_object_names_only_null;
    }

    public function setGetDistinctObjectNamesOnlyNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_distinct_object_names_only_null = $var;
    }

    public function getNumberOfResults()
    {
        return $this->number_of_results;
    }

    public function setNumberOfResults(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_results = $var;
    }

    public function getNumberOfResultsNull()
    {
        return $this->number_of_results_null;
    }

    public function setNumberOfResultsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->number_of_results_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $number_of_results = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetUsageOfTables_Ad\Response_Row::class);
        $this->row = $var;
    }

    public function getNumberOfResults()
    {
        return $this->number_of_results;
    }

    public function setNumberOfResults(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->number_of_results = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $table_name = null;
    private $object_type = null;
    private $code_line_number = null;
    private $code_line = null;
    private $object_name = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTableName()
    {
        return $this->table_name;
    }

    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->table_name = $var;
    }

    public function getObjectType()
    {
        return $this->object_type;
    }

    public function setObjectType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->object_type = $var;
    }

    public function getCodeLineNumber()
    {
        return $this->code_line_number;
    }

    public function setCodeLineNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->code_line_number = $var;
    }

    public function getCodeLine()
    {
        return $this->code_line;
    }

    public function setCodeLine(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->code_line = $var;
    }

    public function getObjectName()
    {
        return $this->object_name;
    }

    public function setObjectName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->object_name = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a9d0a0a356473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f47657455736167654f665461626c65735f41642e70726f746f1224" .
    "6473746f72652e656e67696e652e6d695f47657455736167654f66546162" .
    "6c65735f41641a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22ee030a0a506172616d6574657273122f0a0b7461626c65735f6c" .
    "69737418012001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c756512190a107461626c65735f6c6973745f6e756c6c18e907" .
    "20012808123c0a18736570617261746f725f696e5f7461626c65735f6c69" .
    "737418022001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512260a1d736570617261746f725f696e5f7461626c65735f" .
    "6c6973745f6e756c6c18ea0720012808123b0a177365617263685f6f6e6c" .
    "795f6f626a6563745f7479706518032001280b321a2e6473746f72652e76" .
    "616c7565732e737472696e6756616c756512250a1c7365617263685f6f6e" .
    "6c795f6f626a6563745f747970655f6e756c6c18eb072001280812430a1e" .
    "6765745f64697374696e63745f6f626a6563745f6e616d65735f6f6e6c79" .
    "18042001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c7565122c0a236765745f64697374696e63745f6f626a6563745f6e" .
    "616d65735f6f6e6c795f6e756c6c18ec072001280812360a116e756d6265" .
    "725f6f665f726573756c747318052001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565121f0a166e756d6265725f6f66" .
    "5f726573756c74735f6e756c6c18ed07200128082294040a08526573706f" .
    "6e736512480a106d6574615f696e666f726d6174696f6e18022003280b32" .
    "2e2e6473746f72652e656e67696e652e6d657461696e666f726d6174696f" .
    "6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167651803" .
    "2003280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d" .
    "657373616765123f0a03726f7718042003280b32322e6473746f72652e65" .
    "6e67696e652e6d695f47657455736167654f665461626c65735f41642e52" .
    "6573706f6e73652e526f7712360a116e756d6265725f6f665f726573756c" .
    "747318652001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c75651a93020a03526f77120f0a06726f775f696418904e2001" .
    "2805122f0a0a7461626c655f6e616d6518914e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512300a0b6f626a6563" .
    "745f7479706518924e2001280b321a2e6473746f72652e76616c7565732e" .
    "737472696e6756616c756512360a10636f64655f6c696e655f6e756d6265" .
    "7218934e2001280b321b2e6473746f72652e76616c7565732e696e746567" .
    "657256616c7565122e0a09636f64655f6c696e6518944e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512300a0b6f" .
    "626a6563745f6e616d6518954e2001280b321a2e6473746f72652e76616c" .
    "7565732e737472696e6756616c756542570a1b696f2e6473746f72652e65" .
    "6e67696e652e70726f636564757265735a38676f73646b2e6473746f7265" .
    "2e64652f656e67696e652f70726f636564757265732f6d695f4765745573" .
    "6167654f665461626c65735f4164620670726f746f33"
));

