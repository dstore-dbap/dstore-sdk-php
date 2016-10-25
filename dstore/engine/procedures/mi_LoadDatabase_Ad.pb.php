<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_LoadDatabase_Ad.proto

namespace Dstore\Engine\Mi_LoadDatabase_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $database_name = null;
    private $database_name_null = false;
    private $device_names = null;
    private $device_names_null = false;
    private $device_names_separated_by = null;
    private $device_names_separated_by_null = false;
    private $device_path = null;
    private $device_path_null = false;
    private $kill_processes_on_d_b_first = null;
    private $kill_processes_on_d_b_first_null = false;
    private $online_database_after_load = null;
    private $online_database_after_load_null = false;
    private $adjust_d_b_user_to_logins = null;
    private $adjust_d_b_user_to_logins_null = false;
    private $compress_level = null;
    private $compress_level_null = false;

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

    public function getDeviceNames()
    {
        return $this->device_names;
    }

    public function setDeviceNames(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->device_names = $var;
    }

    public function getDeviceNamesNull()
    {
        return $this->device_names_null;
    }

    public function setDeviceNamesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->device_names_null = $var;
    }

    public function getDeviceNamesSeparatedBy()
    {
        return $this->device_names_separated_by;
    }

    public function setDeviceNamesSeparatedBy(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->device_names_separated_by = $var;
    }

    public function getDeviceNamesSeparatedByNull()
    {
        return $this->device_names_separated_by_null;
    }

    public function setDeviceNamesSeparatedByNull($var)
    {
        GPBUtil::checkBool($var);
        $this->device_names_separated_by_null = $var;
    }

    public function getDevicePath()
    {
        return $this->device_path;
    }

    public function setDevicePath(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->device_path = $var;
    }

    public function getDevicePathNull()
    {
        return $this->device_path_null;
    }

    public function setDevicePathNull($var)
    {
        GPBUtil::checkBool($var);
        $this->device_path_null = $var;
    }

    public function getKillProcessesOnDBFirst()
    {
        return $this->kill_processes_on_d_b_first;
    }

    public function setKillProcessesOnDBFirst(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->kill_processes_on_d_b_first = $var;
    }

    public function getKillProcessesOnDBFirstNull()
    {
        return $this->kill_processes_on_d_b_first_null;
    }

    public function setKillProcessesOnDBFirstNull($var)
    {
        GPBUtil::checkBool($var);
        $this->kill_processes_on_d_b_first_null = $var;
    }

    public function getOnlineDatabaseAfterLoad()
    {
        return $this->online_database_after_load;
    }

    public function setOnlineDatabaseAfterLoad(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->online_database_after_load = $var;
    }

    public function getOnlineDatabaseAfterLoadNull()
    {
        return $this->online_database_after_load_null;
    }

    public function setOnlineDatabaseAfterLoadNull($var)
    {
        GPBUtil::checkBool($var);
        $this->online_database_after_load_null = $var;
    }

    public function getAdjustDBUserToLogins()
    {
        return $this->adjust_d_b_user_to_logins;
    }

    public function setAdjustDBUserToLogins(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->adjust_d_b_user_to_logins = $var;
    }

    public function getAdjustDBUserToLoginsNull()
    {
        return $this->adjust_d_b_user_to_logins_null;
    }

    public function setAdjustDBUserToLoginsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->adjust_d_b_user_to_logins_null = $var;
    }

    public function getCompressLevel()
    {
        return $this->compress_level;
    }

    public function setCompressLevel(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->compress_level = $var;
    }

    public function getCompressLevelNull()
    {
        return $this->compress_level_null;
    }

    public function setCompressLevelNull($var)
    {
        GPBUtil::checkBool($var);
        $this->compress_level_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_LoadDatabase_Ad\Response_Row::class);
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
    "0adb090a316473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f4c6f616444617461626173655f41642e70726f746f12206473746f" .
    "72652e656e67696e652e6d695f4c6f616444617461626173655f41641a13" .
    "6473746f72652f76616c7565732e70726f746f1a1b6473746f72652f656e" .
    "67696e652f6d6573736167652e70726f746f1a236473746f72652f656e67" .
    "696e652f6d657461696e666f726d6174696f6e2e70726f746f22f2050a0a" .
    "506172616d657465727312310a0d64617461626173655f6e616d65180120" .
    "01280b321a2e6473746f72652e76616c7565732e737472696e6756616c75" .
    "65121b0a1264617461626173655f6e616d655f6e756c6c18e90720012808" .
    "12300a0c6465766963655f6e616d657318022001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c7565121a0a11646576696365" .
    "5f6e616d65735f6e756c6c18ea0720012808123d0a196465766963655f6e" .
    "616d65735f7365706172617465645f627918032001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512270a1e6465766963" .
    "655f6e616d65735f7365706172617465645f62795f6e756c6c18eb072001" .
    "2808122f0a0b6465766963655f7061746818042001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512190a106465766963" .
    "655f706174685f6e756c6c18ec072001280812400a1b6b696c6c5f70726f" .
    "6365737365735f6f6e5f645f625f666972737418052001280b321b2e6473" .
    "746f72652e76616c7565732e626f6f6c65616e56616c756512290a206b69" .
    "6c6c5f70726f6365737365735f6f6e5f645f625f66697273745f6e756c6c" .
    "18ed0720012808123f0a1a6f6e6c696e655f64617461626173655f616674" .
    "65725f6c6f616418062001280b321b2e6473746f72652e76616c7565732e" .
    "626f6f6c65616e56616c756512280a1f6f6e6c696e655f64617461626173" .
    "655f61667465725f6c6f61645f6e756c6c18ee0720012808123e0a196164" .
    "6a7573745f645f625f757365725f746f5f6c6f67696e7318072001280b32" .
    "1b2e6473746f72652e76616c7565732e626f6f6c65616e56616c75651227" .
    "0a1e61646a7573745f645f625f757365725f746f5f6c6f67696e735f6e75" .
    "6c6c18ef072001280812330a0e636f6d70726573735f6c6576656c180820" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "7565121c0a13636f6d70726573735f6c6576656c5f6e756c6c18f0072001" .
    "280822da010a08526573706f6e736512480a106d6574615f696e666f726d" .
    "6174696f6e18022003280b322e2e6473746f72652e656e67696e652e6d65" .
    "7461696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e12" .
    "2f0a076d65737361676518032003280b321e2e6473746f72652e656e6769" .
    "6e652e6d6573736167652e4d657373616765123b0a03726f771804200328" .
    "0b322e2e6473746f72652e656e67696e652e6d695f4c6f61644461746162" .
    "6173655f41642e526573706f6e73652e526f771a160a03526f77120f0a06" .
    "726f775f696418904e2001280542530a1b696f2e6473746f72652e656e67" .
    "696e652e70726f636564757265735a34676f73646b2e6473746f72652e64" .
    "652f656e67696e652f70726f636564757265732f6d695f4c6f6164446174" .
    "61626173655f4164620670726f746f33"
));

