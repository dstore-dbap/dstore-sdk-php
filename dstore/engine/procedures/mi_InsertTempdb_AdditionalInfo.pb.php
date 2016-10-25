<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_InsertTempdb_AdditionalInfo.proto

namespace Dstore\Engine\Mi_InsertTempdb_AdditionalInfo;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $table_id_list = null;
    private $table_id_list_null = false;
    private $table_key_id_list = null;
    private $table_key_id_list_null = false;
    private $information_type_id_list = null;
    private $information_type_id_list_null = false;
    private $information_list = null;
    private $information_list_null = false;
    private $delete = null;
    private $delete_null = false;
    private $separator = null;
    private $separator_null = false;
    private $check_byte_length_for_strings = null;
    private $check_byte_length_for_strings_null = false;

    public function getTableIdList()
    {
        return $this->table_id_list;
    }

    public function setTableIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->table_id_list = $var;
    }

    public function getTableIdListNull()
    {
        return $this->table_id_list_null;
    }

    public function setTableIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_id_list_null = $var;
    }

    public function getTableKeyIdList()
    {
        return $this->table_key_id_list;
    }

    public function setTableKeyIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->table_key_id_list = $var;
    }

    public function getTableKeyIdListNull()
    {
        return $this->table_key_id_list_null;
    }

    public function setTableKeyIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_key_id_list_null = $var;
    }

    public function getInformationTypeIdList()
    {
        return $this->information_type_id_list;
    }

    public function setInformationTypeIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->information_type_id_list = $var;
    }

    public function getInformationTypeIdListNull()
    {
        return $this->information_type_id_list_null;
    }

    public function setInformationTypeIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_type_id_list_null = $var;
    }

    public function getInformationList()
    {
        return $this->information_list;
    }

    public function setInformationList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->information_list = $var;
    }

    public function getInformationListNull()
    {
        return $this->information_list_null;
    }

    public function setInformationListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->information_list_null = $var;
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

    public function getSeparator()
    {
        return $this->separator;
    }

    public function setSeparator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator = $var;
    }

    public function getSeparatorNull()
    {
        return $this->separator_null;
    }

    public function setSeparatorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_null = $var;
    }

    public function getCheckByteLengthForStrings()
    {
        return $this->check_byte_length_for_strings;
    }

    public function setCheckByteLengthForStrings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->check_byte_length_for_strings = $var;
    }

    public function getCheckByteLengthForStringsNull()
    {
        return $this->check_byte_length_for_strings_null;
    }

    public function setCheckByteLengthForStringsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->check_byte_length_for_strings_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_InsertTempdb_AdditionalInfo\Response_Row::class);
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
    "0a85090a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f496e7365727454656d7064625f4164646974696f6e616c496e666f" .
    "2e70726f746f122c6473746f72652e656e67696e652e6d695f496e736572" .
    "7454656d7064625f4164646974696f6e616c496e666f1a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22ec040a0a506172616d65" .
    "7465727312310a0d7461626c655f69645f6c69737418012001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c7565121b0a1274" .
    "61626c655f69645f6c6973745f6e756c6c18e9072001280812350a117461" .
    "626c655f6b65795f69645f6c69737418022001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565121f0a167461626c655f6b" .
    "65795f69645f6c6973745f6e756c6c18ea0720012808123c0a18696e666f" .
    "726d6174696f6e5f747970655f69645f6c69737418032001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c756512260a1d696e" .
    "666f726d6174696f6e5f747970655f69645f6c6973745f6e756c6c18eb07" .
    "2001280812340a10696e666f726d6174696f6e5f6c69737418042001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c7565121e" .
    "0a15696e666f726d6174696f6e5f6c6973745f6e756c6c18ec0720012808" .
    "122b0a0664656c65746518052001280b321b2e6473746f72652e76616c75" .
    "65732e626f6f6c65616e56616c756512140a0b64656c6574655f6e756c6c" .
    "18ed0720012808122d0a09736570617261746f7218062001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c756512170a0e7365" .
    "70617261746f725f6e756c6c18ee072001280812420a1d636865636b5f62" .
    "7974655f6c656e6774685f666f725f737472696e677318072001280b321b" .
    "2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565122b0a" .
    "22636865636b5f627974655f6c656e6774685f666f725f737472696e6773" .
    "5f6e756c6c18ef072001280822e6010a08526573706f6e736512480a106d" .
    "6574615f696e666f726d6174696f6e18022003280b322e2e6473746f7265" .
    "2e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e" .
    "666f726d6174696f6e122f0a076d65737361676518032003280b321e2e64" .
    "73746f72652e656e67696e652e6d6573736167652e4d6573736167651247" .
    "0a03726f7718042003280b323a2e6473746f72652e656e67696e652e6d69" .
    "5f496e7365727454656d7064625f4164646974696f6e616c496e666f2e52" .
    "6573706f6e73652e526f771a160a03526f77120f0a06726f775f69641890" .
    "4e20012805425f0a1b696f2e6473746f72652e656e67696e652e70726f63" .
    "6564757265735a40676f73646b2e6473746f72652e64652f656e67696e65" .
    "2f70726f636564757265732f6d695f496e7365727454656d7064625f4164" .
    "646974696f6e616c496e666f620670726f746f33"
));
