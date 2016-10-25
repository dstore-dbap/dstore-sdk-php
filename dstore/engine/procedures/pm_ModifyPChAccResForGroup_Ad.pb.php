<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_ModifyPChAccResForGroup_Ad.proto

namespace Dstore\Engine\Pm_ModifyPChAccResForGroup_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $user_group_id = null;
    private $user_group_id_null = false;
    private $person_characteristic_id = null;
    private $person_characteristic_id_null = false;
    private $access_restriction = null;
    private $access_restriction_null = false;
    private $read_access_restriction_pattern = null;
    private $read_access_restriction_pattern_null = false;
    private $delete = null;
    private $delete_null = false;

    public function getUserGroupId()
    {
        return $this->user_group_id;
    }

    public function setUserGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->user_group_id = $var;
    }

    public function getUserGroupIdNull()
    {
        return $this->user_group_id_null;
    }

    public function setUserGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->user_group_id_null = $var;
    }

    public function getPersonCharacteristicId()
    {
        return $this->person_characteristic_id;
    }

    public function setPersonCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_characteristic_id = $var;
    }

    public function getPersonCharacteristicIdNull()
    {
        return $this->person_characteristic_id_null;
    }

    public function setPersonCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_characteristic_id_null = $var;
    }

    public function getAccessRestriction()
    {
        return $this->access_restriction;
    }

    public function setAccessRestriction(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->access_restriction = $var;
    }

    public function getAccessRestrictionNull()
    {
        return $this->access_restriction_null;
    }

    public function setAccessRestrictionNull($var)
    {
        GPBUtil::checkBool($var);
        $this->access_restriction_null = $var;
    }

    public function getReadAccessRestrictionPattern()
    {
        return $this->read_access_restriction_pattern;
    }

    public function setReadAccessRestrictionPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->read_access_restriction_pattern = $var;
    }

    public function getReadAccessRestrictionPatternNull()
    {
        return $this->read_access_restriction_pattern_null;
    }

    public function setReadAccessRestrictionPatternNull($var)
    {
        GPBUtil::checkBool($var);
        $this->read_access_restriction_pattern_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_ModifyPChAccResForGroup_Ad\Response_Row::class);
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
    "0aeb070a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f4d6f64696679504368416363526573466f7247726f75705f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e706d5f4d6f64696679" .
    "504368416363526573466f7247726f75705f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22d6030a0a506172616d657465" .
    "727312320a0d757365725f67726f75705f696418012001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c7565121b0a127573" .
    "65725f67726f75705f69645f6e756c6c18e90720012808123d0a18706572" .
    "736f6e5f63686172616374657269737469635f696418022001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512260a1d" .
    "706572736f6e5f63686172616374657269737469635f69645f6e756c6c18" .
    "ea072001280812370a126163636573735f7265737472696374696f6e1803" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512200a176163636573735f7265737472696374696f6e5f6e756c6c" .
    "18eb072001280812430a1f726561645f6163636573735f72657374726963" .
    "74696f6e5f7061747465726e18042001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c7565122d0a24726561645f6163636573" .
    "735f7265737472696374696f6e5f7061747465726e5f6e756c6c18ec0720" .
    "012808122b0a0664656c65746518052001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c756512140a0b64656c6574655f6e" .
    "756c6c18ed072001280822e5010a08526573706f6e736512480a106d6574" .
    "615f696e666f726d6174696f6e18022003280b322e2e6473746f72652e65" .
    "6e67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f" .
    "726d6174696f6e122f0a076d65737361676518032003280b321e2e647374" .
    "6f72652e656e67696e652e6d6573736167652e4d65737361676512460a03" .
    "726f7718042003280b32392e6473746f72652e656e67696e652e706d5f4d" .
    "6f64696679504368416363526573466f7247726f75705f41642e52657370" .
    "6f6e73652e526f771a160a03526f77120f0a06726f775f696418904e2001" .
    "2805425e0a1b696f2e6473746f72652e656e67696e652e70726f63656475" .
    "7265735a3f676f73646b2e6473746f72652e64652f656e67696e652f7072" .
    "6f636564757265732f706d5f4d6f64696679504368416363526573466f72" .
    "47726f75705f4164620670726f746f33"
));

