<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_GetPersons_Conditions_Ad.proto

namespace Dstore\Engine\Pm_GetPersons_Conditions_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $sort_order1 = null;
    private $sort_order1_null = false;
    private $sort_order2 = null;
    private $sort_order2_null = false;
    private $sort_order3 = null;
    private $sort_order3_null = false;
    private $output_characteristic_ids = null;
    private $output_characteristic_ids_null = false;
    private $count = null;
    private $count_null = false;
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $last_values = null;
    private $last_values_null = false;
    private $last_person_id = null;
    private $last_person_id_null = false;
    private $next = null;
    private $next_null = false;
    private $row_number = null;
    private $row_number_null = false;
    private $group_id = null;
    private $group_id_null = false;
    private $characteristic_id_list = null;
    private $characteristic_id_list_null = false;
    private $condition_list = null;
    private $condition_list_null = false;
    private $country = null;
    private $country_null = false;
    private $output_into_one_id = null;
    private $output_into_one_id_null = false;
    private $separator_in_last_values = null;
    private $separator_in_last_values_null = false;
    private $separator_in_condition_list = null;
    private $separator_in_condition_list_null = false;

    public function getSortOrder1()
    {
        return $this->sort_order1;
    }

    public function setSortOrder1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->sort_order1 = $var;
    }

    public function getSortOrder1Null()
    {
        return $this->sort_order1_null;
    }

    public function setSortOrder1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_order1_null = $var;
    }

    public function getSortOrder2()
    {
        return $this->sort_order2;
    }

    public function setSortOrder2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->sort_order2 = $var;
    }

    public function getSortOrder2Null()
    {
        return $this->sort_order2_null;
    }

    public function setSortOrder2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_order2_null = $var;
    }

    public function getSortOrder3()
    {
        return $this->sort_order3;
    }

    public function setSortOrder3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->sort_order3 = $var;
    }

    public function getSortOrder3Null()
    {
        return $this->sort_order3_null;
    }

    public function setSortOrder3Null($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_order3_null = $var;
    }

    public function getOutputCharacteristicIds()
    {
        return $this->output_characteristic_ids;
    }

    public function setOutputCharacteristicIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->output_characteristic_ids = $var;
    }

    public function getOutputCharacteristicIdsNull()
    {
        return $this->output_characteristic_ids_null;
    }

    public function setOutputCharacteristicIdsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_characteristic_ids_null = $var;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->count = $var;
    }

    public function getCountNull()
    {
        return $this->count_null;
    }

    public function setCountNull($var)
    {
        GPBUtil::checkBool($var);
        $this->count_null = $var;
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

    public function getLastValues()
    {
        return $this->last_values;
    }

    public function setLastValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->last_values = $var;
    }

    public function getLastValuesNull()
    {
        return $this->last_values_null;
    }

    public function setLastValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->last_values_null = $var;
    }

    public function getLastPersonId()
    {
        return $this->last_person_id;
    }

    public function setLastPersonId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->last_person_id = $var;
    }

    public function getLastPersonIdNull()
    {
        return $this->last_person_id_null;
    }

    public function setLastPersonIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->last_person_id_null = $var;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setNext(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->next = $var;
    }

    public function getNextNull()
    {
        return $this->next_null;
    }

    public function setNextNull($var)
    {
        GPBUtil::checkBool($var);
        $this->next_null = $var;
    }

    public function getRowNumber()
    {
        return $this->row_number;
    }

    public function setRowNumber(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->row_number = $var;
    }

    public function getRowNumberNull()
    {
        return $this->row_number_null;
    }

    public function setRowNumberNull($var)
    {
        GPBUtil::checkBool($var);
        $this->row_number_null = $var;
    }

    public function getGroupId()
    {
        return $this->group_id;
    }

    public function setGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->group_id = $var;
    }

    public function getGroupIdNull()
    {
        return $this->group_id_null;
    }

    public function setGroupIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->group_id_null = $var;
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

    public function getConditionList()
    {
        return $this->condition_list;
    }

    public function setConditionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->condition_list = $var;
    }

    public function getConditionListNull()
    {
        return $this->condition_list_null;
    }

    public function setConditionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->condition_list_null = $var;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->country = $var;
    }

    public function getCountryNull()
    {
        return $this->country_null;
    }

    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

    public function getOutputIntoOneId()
    {
        return $this->output_into_one_id;
    }

    public function setOutputIntoOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->output_into_one_id = $var;
    }

    public function getOutputIntoOneIdNull()
    {
        return $this->output_into_one_id_null;
    }

    public function setOutputIntoOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->output_into_one_id_null = $var;
    }

    public function getSeparatorInLastValues()
    {
        return $this->separator_in_last_values;
    }

    public function setSeparatorInLastValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator_in_last_values = $var;
    }

    public function getSeparatorInLastValuesNull()
    {
        return $this->separator_in_last_values_null;
    }

    public function setSeparatorInLastValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_last_values_null = $var;
    }

    public function getSeparatorInConditionList()
    {
        return $this->separator_in_condition_list;
    }

    public function setSeparatorInConditionList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator_in_condition_list = $var;
    }

    public function getSeparatorInConditionListNull()
    {
        return $this->separator_in_condition_list_null;
    }

    public function setSeparatorInConditionListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_condition_list_null = $var;
    }

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $count = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_GetPersons_Conditions_Ad\Response_Row::class);
        $this->row = $var;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->count = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $person_id = null;
    private $value1 = null;
    private $value2 = null;
    private $value3 = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getValue1()
    {
        return $this->value1;
    }

    public function setValue1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value1 = $var;
    }

    public function getValue2()
    {
        return $this->value2;
    }

    public function setValue2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value2 = $var;
    }

    public function getValue3()
    {
        return $this->value3;
    }

    public function setValue3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value3 = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af9100a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f476574506572736f6e735f436f6e646974696f6e735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e706d5f476574506572736f" .
    "6e735f436f6e646974696f6e735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22840b0a0a506172616d65746572731230" .
    "0a0b736f72745f6f726465723118012001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c756512190a10736f72745f6f7264" .
    "6572315f6e756c6c18e9072001280812300a0b736f72745f6f7264657232" .
    "18022001280b321b2e6473746f72652e76616c7565732e626f6f6c65616e" .
    "56616c756512190a10736f72745f6f72646572325f6e756c6c18ea072001" .
    "280812300a0b736f72745f6f726465723318032001280b321b2e6473746f" .
    "72652e76616c7565732e626f6f6c65616e56616c756512190a10736f7274" .
    "5f6f72646572335f6e756c6c18eb0720012808123d0a196f75747075745f" .
    "63686172616374657269737469635f69647318042001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c756512270a1e6f757470" .
    "75745f63686172616374657269737469635f6964735f6e756c6c18ec0720" .
    "012808122a0a05636f756e7418052001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512130a0a636f756e745f6e756c" .
    "6c18ed072001280812330a0e706572736f6e5f747970655f696418062001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "65121c0a13706572736f6e5f747970655f69645f6e756c6c18ee07200128" .
    "08122f0a0b6c6173745f76616c75657318072001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512190a106c6173745f76" .
    "616c7565735f6e756c6c18ef072001280812330a0e6c6173745f70657273" .
    "6f6e5f696418082001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565121c0a136c6173745f706572736f6e5f69645f6e" .
    "756c6c18f0072001280812290a046e65787418092001280b321b2e647374" .
    "6f72652e76616c7565732e626f6f6c65616e56616c756512120a096e6578" .
    "745f6e756c6c18f10720012808122f0a0a726f775f6e756d626572180a20" .
    "01280b321b2e6473746f72652e76616c7565732e696e746567657256616c" .
    "756512180a0f726f775f6e756d6265725f6e756c6c18f20720012808122d" .
    "0a0867726f75705f6964180b2001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512160a0d67726f75705f69645f6e75" .
    "6c6c18f30720012808123a0a1663686172616374657269737469635f6964" .
    "5f6c697374180c2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c756512240a1b63686172616374657269737469635f6964" .
    "5f6c6973745f6e756c6c18f4072001280812320a0e636f6e646974696f6e" .
    "5f6c697374180d2001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565121c0a13636f6e646974696f6e5f6c6973745f6e75" .
    "6c6c18f50720012808122b0a07636f756e747279180e2001280b321a2e64" .
    "73746f72652e76616c7565732e737472696e6756616c756512150a0c636f" .
    "756e7472795f6e756c6c18f6072001280812370a126f75747075745f696e" .
    "746f5f6f6e655f6964180f2001280b321b2e6473746f72652e76616c7565" .
    "732e696e746567657256616c756512200a176f75747075745f696e746f5f" .
    "6f6e655f69645f6e756c6c18f70720012808123c0a18736570617261746f" .
    "725f696e5f6c6173745f76616c75657318102001280b321a2e6473746f72" .
    "652e76616c7565732e737472696e6756616c756512260a1d736570617261" .
    "746f725f696e5f6c6173745f76616c7565735f6e756c6c18f80720012808" .
    "123f0a1b736570617261746f725f696e5f636f6e646974696f6e5f6c6973" .
    "7418112001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512290a20736570617261746f725f696e5f636f6e646974696f" .
    "6e5f6c6973745f6e756c6c18f9072001280822cb030a08526573706f6e73" .
    "6512480a106d6574615f696e666f726d6174696f6e18022003280b322e2e" .
    "6473746f72652e656e67696e652e6d657461696e666f726d6174696f6e2e" .
    "4d657461496e666f726d6174696f6e122f0a076d65737361676518032003" .
    "280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d6573" .
    "7361676512440a03726f7718042003280b32372e6473746f72652e656e67" .
    "696e652e706d5f476574506572736f6e735f436f6e646974696f6e735f41" .
    "642e526573706f6e73652e526f77122a0a05636f756e7418652001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651ad1" .
    "010a03526f77120f0a06726f775f696418904e20012805122f0a09706572" .
    "736f6e5f696418914e2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565122c0a0676616c75653118a29c012001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c7565122c" .
    "0a0676616c75653218b3ea012001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122c0a0676616c75653318c2b8022001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "425c0a1b696f2e6473746f72652e656e67696e652e70726f636564757265" .
    "735a3d676f73646b2e6473746f72652e64652f656e67696e652f70726f63" .
    "6564757265732f706d5f476574506572736f6e735f436f6e646974696f6e" .
    "735f4164620670726f746f33"
));

