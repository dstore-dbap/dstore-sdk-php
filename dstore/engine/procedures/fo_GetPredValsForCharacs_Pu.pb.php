<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPredValsForCharacs_Pu.proto

namespace Dstore\Engine\Fo_GetPredValsForCharacs_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $person_identification_values = null;
    private $person_identification_values_null = false;
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $unique_id = null;
    private $unique_id_null = false;
    private $forum_id = null;
    private $forum_id_null = false;
    private $posting_characteristic_id = null;
    private $posting_characteristic_id_null = false;
    private $date_format = null;
    private $date_format_null = false;
    private $separator_in_ident_vals = null;
    private $separator_in_ident_vals_null = false;

    public function getPersonIdentificationValues()
    {
        return $this->person_identification_values;
    }

    public function setPersonIdentificationValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->person_identification_values = $var;
    }

    public function getPersonIdentificationValuesNull()
    {
        return $this->person_identification_values_null;
    }

    public function setPersonIdentificationValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_identification_values_null = $var;
    }

    public function getPersonTypeId()
    {
        return $this->person_type_id;
    }

    public function setPersonTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_type_id = $var;
    }

    public function getPersonTypeIdNull()
    {
        return $this->person_type_id_null;
    }

    public function setPersonTypeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_type_id_null = $var;
    }

    public function getUniqueId()
    {
        return $this->unique_id;
    }

    public function setUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->unique_id = $var;
    }

    public function getUniqueIdNull()
    {
        return $this->unique_id_null;
    }

    public function setUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->unique_id_null = $var;
    }

    public function getForumId()
    {
        return $this->forum_id;
    }

    public function setForumId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->forum_id = $var;
    }

    public function getForumIdNull()
    {
        return $this->forum_id_null;
    }

    public function setForumIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_id_null = $var;
    }

    public function getPostingCharacteristicId()
    {
        return $this->posting_characteristic_id;
    }

    public function setPostingCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_characteristic_id = $var;
    }

    public function getPostingCharacteristicIdNull()
    {
        return $this->posting_characteristic_id_null;
    }

    public function setPostingCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_characteristic_id_null = $var;
    }

    public function getDateFormat()
    {
        return $this->date_format;
    }

    public function setDateFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->date_format = $var;
    }

    public function getDateFormatNull()
    {
        return $this->date_format_null;
    }

    public function setDateFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_format_null = $var;
    }

    public function getSeparatorInIdentVals()
    {
        return $this->separator_in_ident_vals;
    }

    public function setSeparatorInIdentVals(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator_in_ident_vals = $var;
    }

    public function getSeparatorInIdentValsNull()
    {
        return $this->separator_in_ident_vals_null;
    }

    public function setSeparatorInIdentValsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_ident_vals_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetPredValsForCharacs_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $value_in_internal_format = null;
    private $value = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getValueInInternalFormat()
    {
        return $this->value_in_internal_format;
    }

    public function setValueInInternalFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value_in_internal_format = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aee090a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f4765745072656456616c73466f72436861726163735f50752e7072" .
    "6f746f12296473746f72652e656e67696e652e666f5f4765745072656456" .
    "616c73466f72436861726163735f50751a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22f5040a0a506172616d65746572731240" .
    "0a1c706572736f6e5f6964656e74696669636174696f6e5f76616c756573" .
    "18012001280b321a2e6473746f72652e76616c7565732e737472696e6756" .
    "616c7565122a0a21706572736f6e5f6964656e74696669636174696f6e5f" .
    "76616c7565735f6e756c6c18e9072001280812330a0e706572736f6e5f74" .
    "7970655f696418022001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565121c0a13706572736f6e5f747970655f69645f" .
    "6e756c6c18ea0720012808122d0a09756e697175655f696418032001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75651217" .
    "0a0e756e697175655f69645f6e756c6c18eb0720012808122d0a08666f72" .
    "756d5f696418042001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512160a0d666f72756d5f69645f6e756c6c18ec07" .
    "20012808123e0a19706f7374696e675f6368617261637465726973746963" .
    "5f696418052001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512270a1e706f7374696e675f63686172616374657269" .
    "737469635f69645f6e756c6c18ed0720012808122f0a0b646174655f666f" .
    "726d617418062001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c756512190a10646174655f666f726d61745f6e756c6c18ee" .
    "0720012808123b0a17736570617261746f725f696e5f6964656e745f7661" .
    "6c7318072001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c756512250a1c736570617261746f725f696e5f6964656e745f76" .
    "616c735f6e756c6c18ef072001280822cf020a08526573706f6e73651248" .
    "0a106d6574615f696e666f726d6174696f6e18022003280b322e2e647374" .
    "6f72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d6574" .
    "61496e666f726d6174696f6e122f0a076d65737361676518032003280b32" .
    "1e2e6473746f72652e656e67696e652e6d6573736167652e4d6573736167" .
    "6512440a03726f7718042003280b32372e6473746f72652e656e67696e65" .
    "2e666f5f4765745072656456616c73466f72436861726163735f50752e52" .
    "6573706f6e73652e526f771a81010a03526f77120f0a06726f775f696418" .
    "904e20012805123d0a1876616c75655f696e5f696e7465726e616c5f666f" .
    "726d617418914e2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565122a0a0576616c756518924e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565425c0a1b696f2e" .
    "6473746f72652e656e67696e652e70726f636564757265735a3d676f7364" .
    "6b2e6473746f72652e64652f656e67696e652f70726f636564757265732f" .
    "666f5f4765745072656456616c73466f72436861726163735f5075620670" .
    "726f746f33"
));
