<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCampaignsInCategories_Ad.proto

namespace Dstore\Engine\Om_GetCampaignsInCategories_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $campaign_category_id = null;
    private $campaign_category_id_null = false;
    private $campaign_id = null;
    private $campaign_id_null = false;

    public function getCampaignCategoryId()
    {
        return $this->campaign_category_id;
    }

    public function setCampaignCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->campaign_category_id = $var;
    }

    public function getCampaignCategoryIdNull()
    {
        return $this->campaign_category_id_null;
    }

    public function setCampaignCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->campaign_category_id_null = $var;
    }

    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    public function setCampaignId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->campaign_id = $var;
    }

    public function getCampaignIdNull()
    {
        return $this->campaign_id_null;
    }

    public function setCampaignIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->campaign_id_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCampaignsInCategories_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $active = null;
    private $campaign_id = null;
    private $campaign_description = null;
    private $campaign_type_id = null;
    private $campaign_name = null;
    private $category_description = null;
    private $sort_no = null;
    private $campaign_category_id = null;
    private $campaign_type = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->active = $var;
    }

    public function getCampaignId()
    {
        return $this->campaign_id;
    }

    public function setCampaignId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->campaign_id = $var;
    }

    public function getCampaignDescription()
    {
        return $this->campaign_description;
    }

    public function setCampaignDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->campaign_description = $var;
    }

    public function getCampaignTypeId()
    {
        return $this->campaign_type_id;
    }

    public function setCampaignTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->campaign_type_id = $var;
    }

    public function getCampaignName()
    {
        return $this->campaign_name;
    }

    public function setCampaignName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->campaign_name = $var;
    }

    public function getCategoryDescription()
    {
        return $this->category_description;
    }

    public function setCategoryDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->category_description = $var;
    }

    public function getSortNo()
    {
        return $this->sort_no;
    }

    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_no = $var;
    }

    public function getCampaignCategoryId()
    {
        return $this->campaign_category_id;
    }

    public function setCampaignCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->campaign_category_id = $var;
    }

    public function getCampaignType()
    {
        return $this->campaign_type;
    }

    public function setCampaignType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->campaign_type = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ab4090a3d6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f47657443616d706169676e73496e43617465676f726965735f4164" .
    "2e70726f746f122c6473746f72652e656e67696e652e6f6d5f4765744361" .
    "6d706169676e73496e43617465676f726965735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22b8010a0a506172616d65" .
    "7465727312390a1463616d706169676e5f63617465676f72795f69641801" .
    "2001280b321b2e6473746f72652e76616c7565732e696e74656765725661" .
    "6c756512220a1963616d706169676e5f63617465676f72795f69645f6e75" .
    "6c6c18e9072001280812300a0b63616d706169676e5f696418022001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "190a1063616d706169676e5f69645f6e756c6c18ea072001280822c9050a" .
    "08526573706f6e736512480a106d6574615f696e666f726d6174696f6e18" .
    "022003280b322e2e6473746f72652e656e67696e652e6d657461696e666f" .
    "726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573" .
    "7361676518032003280b321e2e6473746f72652e656e67696e652e6d6573" .
    "736167652e4d65737361676512470a03726f7718042003280b323a2e6473" .
    "746f72652e656e67696e652e6f6d5f47657443616d706169676e73496e43" .
    "617465676f726965735f41642e526573706f6e73652e526f771af8030a03" .
    "526f77120f0a06726f775f696418904e20012805122c0a06616374697665" .
    "18914e2001280b321b2e6473746f72652e76616c7565732e696e74656765" .
    "7256616c756512310a0b63616d706169676e5f696418924e2001280b321b" .
    "2e6473746f72652e76616c7565732e696e746567657256616c756512390a" .
    "1463616d706169676e5f6465736372697074696f6e18934e2001280b321a" .
    "2e6473746f72652e76616c7565732e737472696e6756616c756512360a10" .
    "63616d706169676e5f747970655f696418944e2001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c756512320a0d63616d70" .
    "6169676e5f6e616d6518954e2001280b321a2e6473746f72652e76616c75" .
    "65732e737472696e6756616c756512390a1463617465676f72795f646573" .
    "6372697074696f6e18964e2001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c7565122d0a07736f72745f6e6f18974e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "123a0a1463616d706169676e5f63617465676f72795f696418984e200128" .
    "0b321b2e6473746f72652e76616c7565732e696e746567657256616c7565" .
    "12320a0d63616d706169676e5f7479706518994e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565425f0a1b696f2e64" .
    "73746f72652e656e67696e652e70726f636564757265735a40676f73646b" .
    "2e6473746f72652e64652f656e67696e652f70726f636564757265732f6f" .
    "6d5f47657443616d706169676e73496e43617465676f726965735f416462" .
    "0670726f746f33"
));

