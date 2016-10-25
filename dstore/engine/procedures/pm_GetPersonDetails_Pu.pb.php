<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersonDetails_Pu.proto

namespace Dstore\Engine\Pm_GetPersonDetails_Pu;

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
    private $case_sensitive = null;
    private $case_sensitive_null = false;
    private $characteristic_id_list = null;
    private $characteristic_id_list_null = false;
    private $person_id = null;
    private $person_id_null = false;
    private $sorted_result = null;
    private $sorted_result_null = false;
    private $include_characs_with_no_details = null;
    private $include_characs_with_no_details_null = false;
    private $details_related_to_unique_id = null;
    private $details_related_to_unique_id_null = false;

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

    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    public function setCaseSensitive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->case_sensitive = $var;
    }

    public function getCaseSensitiveNull()
    {
        return $this->case_sensitive_null;
    }

    public function setCaseSensitiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive_null = $var;
    }

    public function getCharacteristicIdList()
    {
        return $this->characteristic_id_list;
    }

    public function setCharacteristicIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_id_list = $var;
    }

    public function getCharacteristicIdListNull()
    {
        return $this->characteristic_id_list_null;
    }

    public function setCharacteristicIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list_null = $var;
    }

    public function getPersonId()
    {
        return $this->person_id;
    }

    public function setPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_id = $var;
    }

    public function getPersonIdNull()
    {
        return $this->person_id_null;
    }

    public function setPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_id_null = $var;
    }

    public function getSortedResult()
    {
        return $this->sorted_result;
    }

    public function setSortedResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->sorted_result = $var;
    }

    public function getSortedResultNull()
    {
        return $this->sorted_result_null;
    }

    public function setSortedResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sorted_result_null = $var;
    }

    public function getIncludeCharacsWithNoDetails()
    {
        return $this->include_characs_with_no_details;
    }

    public function setIncludeCharacsWithNoDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->include_characs_with_no_details = $var;
    }

    public function getIncludeCharacsWithNoDetailsNull()
    {
        return $this->include_characs_with_no_details_null;
    }

    public function setIncludeCharacsWithNoDetailsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->include_characs_with_no_details_null = $var;
    }

    public function getDetailsRelatedToUniqueId()
    {
        return $this->details_related_to_unique_id;
    }

    public function setDetailsRelatedToUniqueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->details_related_to_unique_id = $var;
    }

    public function getDetailsRelatedToUniqueIdNull()
    {
        return $this->details_related_to_unique_id_null;
    }

    public function setDetailsRelatedToUniqueIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->details_related_to_unique_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersonDetails_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $details = null;
    private $characteristic_description = null;
    private $characteristic_id = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->details = $var;
    }

    public function getCharacteristicDescription()
    {
        return $this->characteristic_description;
    }

    public function setCharacteristicDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_description = $var;
    }

    public function getCharacteristicId()
    {
        return $this->characteristic_id;
    }

    public function setCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->characteristic_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa10b0a356473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e44657461696c735f50752e70726f746f1224" .
    "6473746f72652e656e67696e652e706d5f476574506572736f6e44657461" .
    "696c735f50751a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22ff050a0a506172616d657465727312400a1c706572736f6e5f69" .
    "64656e74696669636174696f6e5f76616c75657318012001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c7565122a0a217065" .
    "72736f6e5f6964656e74696669636174696f6e5f76616c7565735f6e756c" .
    "6c18e9072001280812330a0e706572736f6e5f747970655f696418022001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65121c0a13706572736f6e5f747970655f69645f6e756c6c18ea07200128" .
    "0812330a0e636173655f73656e73697469766518032001280b321b2e6473" .
    "746f72652e76616c7565732e626f6f6c65616e56616c7565121c0a136361" .
    "73655f73656e7369746976655f6e756c6c18eb0720012808123a0a166368" .
    "6172616374657269737469635f69645f6c69737418042001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c756512240a1b6368" .
    "6172616374657269737469635f69645f6c6973745f6e756c6c18ec072001" .
    "2808122e0a09706572736f6e5f696418052001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c756512170a0e706572736f6e" .
    "5f69645f6e756c6c18ed072001280812320a0d736f727465645f72657375" .
    "6c7418062001280b321b2e6473746f72652e76616c7565732e626f6f6c65" .
    "616e56616c7565121b0a12736f727465645f726573756c745f6e756c6c18" .
    "ee072001280812440a1f696e636c7564655f636861726163735f77697468" .
    "5f6e6f5f64657461696c7318072001280b321b2e6473746f72652e76616c" .
    "7565732e626f6f6c65616e56616c7565122d0a24696e636c7564655f6368" .
    "61726163735f776974685f6e6f5f64657461696c735f6e756c6c18ef0720" .
    "01280812400a1c64657461696c735f72656c617465645f746f5f756e6971" .
    "75655f696418082001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565122a0a2164657461696c735f72656c617465645f74" .
    "6f5f756e697175655f69645f6e756c6c18f007200128082287030a085265" .
    "73706f6e736512480a106d6574615f696e666f726d6174696f6e18022003" .
    "280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d61" .
    "74696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167" .
    "6518032003280b321e2e6473746f72652e656e67696e652e6d6573736167" .
    "652e4d657373616765123f0a03726f7718042003280b32322e6473746f72" .
    "652e656e67696e652e706d5f476574506572736f6e44657461696c735f50" .
    "752e526573706f6e73652e526f771abe010a03526f77120f0a06726f775f" .
    "696418904e20012805122c0a0764657461696c7318914e2001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c7565123f0a1a63" .
    "686172616374657269737469635f6465736372697074696f6e18924e2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12370a1163686172616374657269737469635f696418934e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756542570a" .
    "1b696f2e6473746f72652e656e67696e652e70726f636564757265735a38" .
    "676f73646b2e6473746f72652e64652f656e67696e652f70726f63656475" .
    "7265732f706d5f476574506572736f6e44657461696c735f507562067072" .
    "6f746f33"
));

