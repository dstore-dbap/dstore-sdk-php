<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_InsertNewPerson_Pu.proto

namespace Dstore\Engine\Pm_InsertNewPerson_Pu;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $unique_id = null;
    private $unique_id_null = false;
    private $characteristic_id_list1 = null;
    private $characteristic_id_list1_null = false;
    private $value_list1 = null;
    private $value_list1_null = false;
    private $characteristic_id_list2 = null;
    private $characteristic_id_list2_null = false;
    private $value_list2 = null;
    private $value_list2_null = false;
    private $person_charac_category_id = null;
    private $person_charac_category_id_null = false;
    private $person_id = null;
    private $person_id_null = false;
    private $error_id_list = null;
    private $error_id_list_null = false;
    private $result_in_error_id_list = null;
    private $result_in_error_id_list_null = false;
    private $value_ids_for_predefined_characs = null;
    private $value_ids_for_predefined_characs_null = false;
    private $generate_password = null;
    private $generate_password_null = false;
    private $password = null;
    private $password_null = false;
    private $generate_customer_no = null;
    private $generate_customer_no_null = false;
    private $customer_no = null;
    private $customer_no_null = false;
    private $cancel_on_error = null;
    private $cancel_on_error_null = false;
    private $separator_in_lists = null;
    private $separator_in_lists_null = false;
    private $update_visitor_persons = null;
    private $update_visitor_persons_null = false;
    private $person_type_id = null;
    private $person_type_id_null = false;
    private $country = null;
    private $country_null = false;

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

    public function getCharacteristicIdList1()
    {
        return $this->characteristic_id_list1;
    }

    public function setCharacteristicIdList1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_id_list1 = $var;
    }

    public function getCharacteristicIdList1Null()
    {
        return $this->characteristic_id_list1_null;
    }

    public function setCharacteristicIdList1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list1_null = $var;
    }

    public function getValueList1()
    {
        return $this->value_list1;
    }

    public function setValueList1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value_list1 = $var;
    }

    public function getValueList1Null()
    {
        return $this->value_list1_null;
    }

    public function setValueList1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->value_list1_null = $var;
    }

    public function getCharacteristicIdList2()
    {
        return $this->characteristic_id_list2;
    }

    public function setCharacteristicIdList2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->characteristic_id_list2 = $var;
    }

    public function getCharacteristicIdList2Null()
    {
        return $this->characteristic_id_list2_null;
    }

    public function setCharacteristicIdList2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->characteristic_id_list2_null = $var;
    }

    public function getValueList2()
    {
        return $this->value_list2;
    }

    public function setValueList2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value_list2 = $var;
    }

    public function getValueList2Null()
    {
        return $this->value_list2_null;
    }

    public function setValueList2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->value_list2_null = $var;
    }

    public function getPersonCharacCategoryId()
    {
        return $this->person_charac_category_id;
    }

    public function setPersonCharacCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->person_charac_category_id = $var;
    }

    public function getPersonCharacCategoryIdNull()
    {
        return $this->person_charac_category_id_null;
    }

    public function setPersonCharacCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->person_charac_category_id_null = $var;
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

    public function getErrorIdList()
    {
        return $this->error_id_list;
    }

    public function setErrorIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->error_id_list = $var;
    }

    public function getErrorIdListNull()
    {
        return $this->error_id_list_null;
    }

    public function setErrorIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->error_id_list_null = $var;
    }

    public function getResultInErrorIdList()
    {
        return $this->result_in_error_id_list;
    }

    public function setResultInErrorIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->result_in_error_id_list = $var;
    }

    public function getResultInErrorIdListNull()
    {
        return $this->result_in_error_id_list_null;
    }

    public function setResultInErrorIdListNull($var)
    {
        GPBUtil::checkBool($var);
        $this->result_in_error_id_list_null = $var;
    }

    public function getValueIdsForPredefinedCharacs()
    {
        return $this->value_ids_for_predefined_characs;
    }

    public function setValueIdsForPredefinedCharacs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->value_ids_for_predefined_characs = $var;
    }

    public function getValueIdsForPredefinedCharacsNull()
    {
        return $this->value_ids_for_predefined_characs_null;
    }

    public function setValueIdsForPredefinedCharacsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->value_ids_for_predefined_characs_null = $var;
    }

    public function getGeneratePassword()
    {
        return $this->generate_password;
    }

    public function setGeneratePassword(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->generate_password = $var;
    }

    public function getGeneratePasswordNull()
    {
        return $this->generate_password_null;
    }

    public function setGeneratePasswordNull($var)
    {
        GPBUtil::checkBool($var);
        $this->generate_password_null = $var;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->password = $var;
    }

    public function getPasswordNull()
    {
        return $this->password_null;
    }

    public function setPasswordNull($var)
    {
        GPBUtil::checkBool($var);
        $this->password_null = $var;
    }

    public function getGenerateCustomerNo()
    {
        return $this->generate_customer_no;
    }

    public function setGenerateCustomerNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->generate_customer_no = $var;
    }

    public function getGenerateCustomerNoNull()
    {
        return $this->generate_customer_no_null;
    }

    public function setGenerateCustomerNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->generate_customer_no_null = $var;
    }

    public function getCustomerNo()
    {
        return $this->customer_no;
    }

    public function setCustomerNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->customer_no = $var;
    }

    public function getCustomerNoNull()
    {
        return $this->customer_no_null;
    }

    public function setCustomerNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->customer_no_null = $var;
    }

    public function getCancelOnError()
    {
        return $this->cancel_on_error;
    }

    public function setCancelOnError(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->cancel_on_error = $var;
    }

    public function getCancelOnErrorNull()
    {
        return $this->cancel_on_error_null;
    }

    public function setCancelOnErrorNull($var)
    {
        GPBUtil::checkBool($var);
        $this->cancel_on_error_null = $var;
    }

    public function getSeparatorInLists()
    {
        return $this->separator_in_lists;
    }

    public function setSeparatorInLists(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->separator_in_lists = $var;
    }

    public function getSeparatorInListsNull()
    {
        return $this->separator_in_lists_null;
    }

    public function setSeparatorInListsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->separator_in_lists_null = $var;
    }

    public function getUpdateVisitorPersons()
    {
        return $this->update_visitor_persons;
    }

    public function setUpdateVisitorPersons(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->update_visitor_persons = $var;
    }

    public function getUpdateVisitorPersonsNull()
    {
        return $this->update_visitor_persons_null;
    }

    public function setUpdateVisitorPersonsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->update_visitor_persons_null = $var;
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

}

class Response extends \Google\Protobuf\Internal\Message
{
    private $meta_information;
    private $message;
    private $row;
    private $person_id = null;
    private $error_id_list = null;
    private $password = null;
    private $customer_no = null;

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Pm_InsertNewPerson_Pu\Response_Row::class);
        $this->row = $var;
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

    public function getErrorIdList()
    {
        return $this->error_id_list;
    }

    public function setErrorIdList(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->error_id_list = $var;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->password = $var;
    }

    public function getCustomerNo()
    {
        return $this->customer_no;
    }

    public function setCustomerNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->customer_no = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $person_characteristic_id = null;
    private $result_code = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
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

    public function getResultCode()
    {
        return $this->result_code;
    }

    public function setResultCode(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->result_code = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab0130a346473746f72652f656e67696e652f70726f636564757265732f" .
    "706d5f496e736572744e6577506572736f6e5f50752e70726f746f122364" .
    "73746f72652e656e67696e652e706d5f496e736572744e6577506572736f" .
    "6e5f50751a136473746f72652f76616c7565732e70726f746f1a1b647374" .
    "6f72652f656e67696e652f6d6573736167652e70726f746f1a236473746f" .
    "72652f656e67696e652f6d657461696e666f726d6174696f6e2e70726f74" .
    "6f22850d0a0a506172616d6574657273122d0a09756e697175655f696418" .
    "012001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512170a0e756e697175655f69645f6e756c6c18e90720012808123b" .
    "0a1763686172616374657269737469635f69645f6c697374311802200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "250a1c63686172616374657269737469635f69645f6c697374315f6e756c" .
    "6c18ea0720012808122f0a0b76616c75655f6c6973743118032001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c756512190a" .
    "1076616c75655f6c697374315f6e756c6c18eb0720012808123b0a176368" .
    "6172616374657269737469635f69645f6c6973743218042001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c756512250a1c63" .
    "686172616374657269737469635f69645f6c697374325f6e756c6c18ec07" .
    "20012808122f0a0b76616c75655f6c6973743218052001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c756512190a1076616c" .
    "75655f6c697374325f6e756c6c18ed0720012808123e0a19706572736f6e" .
    "5f6368617261635f63617465676f72795f696418062001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512270a1e7065" .
    "72736f6e5f6368617261635f63617465676f72795f69645f6e756c6c18ee" .
    "0720012808122e0a09706572736f6e5f696418072001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512170a0e706572" .
    "736f6e5f69645f6e756c6c18ef072001280812310a0d6572726f725f6964" .
    "5f6c69737418082001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c7565121b0a126572726f725f69645f6c6973745f6e756c" .
    "6c18f00720012808123c0a17726573756c745f696e5f6572726f725f6964" .
    "5f6c69737418092001280b321b2e6473746f72652e76616c7565732e626f" .
    "6f6c65616e56616c756512250a1c726573756c745f696e5f6572726f725f" .
    "69645f6c6973745f6e756c6c18f1072001280812450a2076616c75655f69" .
    "64735f666f725f707265646566696e65645f63686172616373180a200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "122e0a2576616c75655f6964735f666f725f707265646566696e65645f63" .
    "6861726163735f6e756c6c18f2072001280812360a1167656e6572617465" .
    "5f70617373776f7264180b2001280b321b2e6473746f72652e76616c7565" .
    "732e626f6f6c65616e56616c7565121f0a1667656e65726174655f706173" .
    "73776f72645f6e756c6c18f30720012808122c0a0870617373776f726418" .
    "0c2001280b321a2e6473746f72652e76616c7565732e737472696e675661" .
    "6c756512160a0d70617373776f72645f6e756c6c18f4072001280812390a" .
    "1467656e65726174655f637573746f6d65725f6e6f180d2001280b321b2e" .
    "6473746f72652e76616c7565732e626f6f6c65616e56616c756512220a19" .
    "67656e65726174655f637573746f6d65725f6e6f5f6e756c6c18f5072001" .
    "2808122f0a0b637573746f6d65725f6e6f180e2001280b321a2e6473746f" .
    "72652e76616c7565732e737472696e6756616c756512190a10637573746f" .
    "6d65725f6e6f5f6e756c6c18f6072001280812340a0f63616e63656c5f6f" .
    "6e5f6572726f72180f2001280b321b2e6473746f72652e76616c7565732e" .
    "626f6f6c65616e56616c7565121d0a1463616e63656c5f6f6e5f6572726f" .
    "725f6e756c6c18f7072001280812360a12736570617261746f725f696e5f" .
    "6c6973747318102001280b321a2e6473746f72652e76616c7565732e7374" .
    "72696e6756616c756512200a17736570617261746f725f696e5f6c697374" .
    "735f6e756c6c18f80720012808123b0a167570646174655f76697369746f" .
    "725f706572736f6e7318112001280b321b2e6473746f72652e76616c7565" .
    "732e626f6f6c65616e56616c756512240a1b7570646174655f7669736974" .
    "6f725f706572736f6e735f6e756c6c18f9072001280812330a0e70657273" .
    "6f6e5f747970655f696418122001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565121c0a13706572736f6e5f74797065" .
    "5f69645f6e756c6c18fa0720012808122b0a07636f756e74727918132001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12150a0c636f756e7472795f6e756c6c18fb07200128082293040a085265" .
    "73706f6e736512480a106d6574615f696e666f726d6174696f6e18022003" .
    "280b322e2e6473746f72652e656e67696e652e6d657461696e666f726d61" .
    "74696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167" .
    "6518032003280b321e2e6473746f72652e656e67696e652e6d6573736167" .
    "652e4d657373616765123e0a03726f7718042003280b32312e6473746f72" .
    "652e656e67696e652e706d5f496e736572744e6577506572736f6e5f5075" .
    "2e526573706f6e73652e526f77122e0a09706572736f6e5f696418652001" .
    "280b321b2e6473746f72652e76616c7565732e696e746567657256616c75" .
    "6512310a0d6572726f725f69645f6c69737418662001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565122c0a0870617373" .
    "776f726418672001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c7565122f0a0b637573746f6d65725f6e6f18682001280b32" .
    "1a2e6473746f72652e76616c7565732e737472696e6756616c75651a8901" .
    "0a03526f77120f0a06726f775f696418904e20012805123e0a1870657273" .
    "6f6e5f63686172616374657269737469635f696418914e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512310a0b" .
    "726573756c745f636f646518924e2001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756542560a1b696f2e6473746f7265" .
    "2e656e67696e652e70726f636564757265735a37676f73646b2e6473746f" .
    "72652e64652f656e67696e652f70726f636564757265732f706d5f496e73" .
    "6572744e6577506572736f6e5f5075620670726f746f33"
));

