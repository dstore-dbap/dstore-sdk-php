<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_GetNewestMembers_Pu.proto

namespace Dstore\Engine\Co_GetNewestMembers_Pu;

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
    private $person_identification_values = null;
    private $person_identification_values_null = false;
    private $community_id = null;
    private $community_id_null = false;
    private $row_number = null;
    private $row_number_null = false;
    private $date_time_format = null;
    private $date_time_format_null = false;
    private $output_characteristic_id1 = null;
    private $output_characteristic_id1_null = false;
    private $output_characteristic_id2 = null;
    private $output_characteristic_id2_null = false;
    private $output_characteristic_id3 = null;
    private $output_characteristic_id3_null = false;
    private $avg_minutes_until_new_membership = null;
    private $avg_minutes_until_new_membership_null = false;
    private $community_binary_category_id = null;
    private $community_binary_category_id_null = false;
    private $online_status_instead_of_is_online = null;
    private $online_status_instead_of_is_online_null = false;
    private $separator_in_ident_vals = null;
    private $separator_in_ident_vals_null = false;

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

    public function getCommunityId()
    {
        return $this->community_id;
    }

    public function setCommunityId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->community_id = $var;
    }

    public function getCommunityIdNull()
    {
        return $this->community_id_null;
    }

    public function setCommunityIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_id_null = $var;
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

    public function getDateTimeFormat()
    {
        return $this->date_time_format;
    }

    public function setDateTimeFormat(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->date_time_format = $var;
    }

    public function getDateTimeFormatNull()
    {
        return $this->date_time_format_null;
    }

    public function setDateTimeFormatNull($var)
    {
        GPBUtil::checkBool($var);
        $this->date_time_format_null = $var;
    }

    public function getOutputCharacteristicId1()
    {
        return $this->output_characteristic_id1;
    }

    public function setOutputCharacteristicId1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->output_characteristic_id1 = $var;
    }

    public function getOutputCharacteristicId1Null()
    {
        return $this->output_characteristic_id1_null;
    }

    public function setOutputCharacteristicId1Null($var)
    {
        GPBUtil::checkBool($var);
        $this->output_characteristic_id1_null = $var;
    }

    public function getOutputCharacteristicId2()
    {
        return $this->output_characteristic_id2;
    }

    public function setOutputCharacteristicId2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->output_characteristic_id2 = $var;
    }

    public function getOutputCharacteristicId2Null()
    {
        return $this->output_characteristic_id2_null;
    }

    public function setOutputCharacteristicId2Null($var)
    {
        GPBUtil::checkBool($var);
        $this->output_characteristic_id2_null = $var;
    }

    public function getOutputCharacteristicId3()
    {
        return $this->output_characteristic_id3;
    }

    public function setOutputCharacteristicId3(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->output_characteristic_id3 = $var;
    }

    public function getOutputCharacteristicId3Null()
    {
        return $this->output_characteristic_id3_null;
    }

    public function setOutputCharacteristicId3Null($var)
    {
        GPBUtil::checkBool($var);
        $this->output_characteristic_id3_null = $var;
    }

    public function getAvgMinutesUntilNewMembership()
    {
        return $this->avg_minutes_until_new_membership;
    }

    public function setAvgMinutesUntilNewMembership(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->avg_minutes_until_new_membership = $var;
    }

    public function getAvgMinutesUntilNewMembershipNull()
    {
        return $this->avg_minutes_until_new_membership_null;
    }

    public function setAvgMinutesUntilNewMembershipNull($var)
    {
        GPBUtil::checkBool($var);
        $this->avg_minutes_until_new_membership_null = $var;
    }

    public function getCommunityBinaryCategoryId()
    {
        return $this->community_binary_category_id;
    }

    public function setCommunityBinaryCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->community_binary_category_id = $var;
    }

    public function getCommunityBinaryCategoryIdNull()
    {
        return $this->community_binary_category_id_null;
    }

    public function setCommunityBinaryCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->community_binary_category_id_null = $var;
    }

    public function getOnlineStatusInsteadOfIsOnline()
    {
        return $this->online_status_instead_of_is_online;
    }

    public function setOnlineStatusInsteadOfIsOnline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->online_status_instead_of_is_online = $var;
    }

    public function getOnlineStatusInsteadOfIsOnlineNull()
    {
        return $this->online_status_instead_of_is_online_null;
    }

    public function setOnlineStatusInsteadOfIsOnlineNull($var)
    {
        GPBUtil::checkBool($var);
        $this->online_status_instead_of_is_online_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Co_GetNewestMembers_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $value1_restricted_by_pattern = null;
    private $binary_id = null;
    private $value2_restricted_by_pattern = null;
    private $community_member_id = null;
    private $value3 = null;
    private $online_status = null;
    private $member_since = null;
    private $value1 = null;
    private $value2 = null;
    private $value3_restricted_by_pattern = null;
    private $nickname = null;
    private $is_online = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getValue1RestrictedByPattern()
    {
        return $this->value1_restricted_by_pattern;
    }

    public function setValue1RestrictedByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value1_restricted_by_pattern = $var;
    }

    public function getBinaryId()
    {
        return $this->binary_id;
    }

    public function setBinaryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->binary_id = $var;
    }

    public function getValue2RestrictedByPattern()
    {
        return $this->value2_restricted_by_pattern;
    }

    public function setValue2RestrictedByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value2_restricted_by_pattern = $var;
    }

    public function getCommunityMemberId()
    {
        return $this->community_member_id;
    }

    public function setCommunityMemberId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->community_member_id = $var;
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

    public function getOnlineStatus()
    {
        return $this->online_status;
    }

    public function setOnlineStatus(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->online_status = $var;
    }

    public function getMemberSince()
    {
        return $this->member_since;
    }

    public function setMemberSince(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\timestampValue::class);
        $this->member_since = $var;
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

    public function getValue3RestrictedByPattern()
    {
        return $this->value3_restricted_by_pattern;
    }

    public function setValue3RestrictedByPattern(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->value3_restricted_by_pattern = $var;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function setNickname(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->nickname = $var;
    }

    public function getIsOnline()
    {
        return $this->is_online;
    }

    public function setIsOnline(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->is_online = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab4120a356473746f72652f656e67696e652f70726f636564757265732f" .
    "636f5f4765744e65776573744d656d626572735f50752e70726f746f1224" .
    "6473746f72652e656e67696e652e636f5f4765744e65776573744d656d62" .
    "6572735f50751a136473746f72652f76616c7565732e70726f746f1a1b64" .
    "73746f72652f656e67696e652f6d6573736167652e70726f746f1a236473" .
    "746f72652f656e67696e652f6d657461696e666f726d6174696f6e2e7072" .
    "6f746f22b3090a0a506172616d6574657273122d0a09756e697175655f69" .
    "6418012001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512170a0e756e697175655f69645f6e756c6c18e90720012808" .
    "12400a1c706572736f6e5f6964656e74696669636174696f6e5f76616c75" .
    "657318022001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565122a0a21706572736f6e5f6964656e74696669636174696f" .
    "6e5f76616c7565735f6e756c6c18ea072001280812310a0c636f6d6d756e" .
    "6974795f696418032001280b321b2e6473746f72652e76616c7565732e69" .
    "6e746567657256616c7565121a0a11636f6d6d756e6974795f69645f6e75" .
    "6c6c18eb0720012808122f0a0a726f775f6e756d62657218042001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651218" .
    "0a0f726f775f6e756d6265725f6e756c6c18ec072001280812350a106461" .
    "74655f74696d655f666f726d617418052001280b321b2e6473746f72652e" .
    "76616c7565732e696e746567657256616c7565121e0a15646174655f7469" .
    "6d655f666f726d61745f6e756c6c18ed0720012808123e0a196f75747075" .
    "745f63686172616374657269737469635f69643118062001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512270a1e6f" .
    "75747075745f63686172616374657269737469635f6964315f6e756c6c18" .
    "ee0720012808123e0a196f75747075745f63686172616374657269737469" .
    "635f69643218072001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512270a1e6f75747075745f636861726163746572" .
    "69737469635f6964325f6e756c6c18ef0720012808123e0a196f75747075" .
    "745f63686172616374657269737469635f69643318082001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512270a1e6f" .
    "75747075745f63686172616374657269737469635f6964335f6e756c6c18" .
    "f0072001280812450a206176675f6d696e757465735f756e74696c5f6e65" .
    "775f6d656d6265727368697018092001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c7565122e0a256176675f6d696e7574" .
    "65735f756e74696c5f6e65775f6d656d626572736869705f6e756c6c18f1" .
    "072001280812410a1c636f6d6d756e6974795f62696e6172795f63617465" .
    "676f72795f6964180a2001280b321b2e6473746f72652e76616c7565732e" .
    "696e746567657256616c7565122a0a21636f6d6d756e6974795f62696e61" .
    "72795f63617465676f72795f69645f6e756c6c18f2072001280812470a22" .
    "6f6e6c696e655f7374617475735f696e73746561645f6f665f69735f6f6e" .
    "6c696e65180b2001280b321b2e6473746f72652e76616c7565732e626f6f" .
    "6c65616e56616c756512300a276f6e6c696e655f7374617475735f696e73" .
    "746561645f6f665f69735f6f6e6c696e655f6e756c6c18f3072001280812" .
    "3b0a17736570617261746f725f696e5f6964656e745f76616c73180c2001" .
    "280b321a2e6473746f72652e76616c7565732e737472696e6756616c7565" .
    "12250a1c736570617261746f725f696e5f6964656e745f76616c735f6e75" .
    "6c6c18f4072001280822e6060a08526573706f6e736512480a106d657461" .
    "5f696e666f726d6174696f6e18022003280b322e2e6473746f72652e656e" .
    "67696e652e6d657461696e666f726d6174696f6e2e4d657461496e666f72" .
    "6d6174696f6e122f0a076d65737361676518032003280b321e2e6473746f" .
    "72652e656e67696e652e6d6573736167652e4d657373616765123f0a0372" .
    "6f7718042003280b32322e6473746f72652e656e67696e652e636f5f4765" .
    "744e65776573744d656d626572735f50752e526573706f6e73652e526f77" .
    "1a9d050a03526f77120f0a06726f775f696418904e2001280512410a1c76" .
    "616c7565315f726573747269637465645f62795f7061747465726e18914e" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "7565122f0a0962696e6172795f696418924e2001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512410a1c76616c7565" .
    "325f726573747269637465645f62795f7061747465726e18934e2001280b" .
    "321a2e6473746f72652e76616c7565732e737472696e6756616c75651239" .
    "0a13636f6d6d756e6974795f6d656d6265725f696418944e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c7565122b0a" .
    "0676616c75653318954e2001280b321a2e6473746f72652e76616c756573" .
    "2e737472696e6756616c756512330a0d6f6e6c696e655f73746174757318" .
    "964e2001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512340a0c6d656d6265725f73696e636518974e2001280b321d" .
    "2e6473746f72652e76616c7565732e74696d657374616d7056616c756512" .
    "2b0a0676616c75653118984e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c7565122b0a0676616c75653218994e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "410a1c76616c7565335f726573747269637465645f62795f706174746572" .
    "6e189a4e2001280b321a2e6473746f72652e76616c7565732e737472696e" .
    "6756616c7565122d0a086e69636b6e616d65189b4e2001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565122f0a0969735f" .
    "6f6e6c696e65189c4e2001280b321b2e6473746f72652e76616c7565732e" .
    "626f6f6c65616e56616c756542570a1b696f2e6473746f72652e656e6769" .
    "6e652e70726f636564757265735a38676f73646b2e6473746f72652e6465" .
    "2f656e67696e652f70726f636564757265732f636f5f4765744e65776573" .
    "744d656d626572735f5075620670726f746f33"
));
