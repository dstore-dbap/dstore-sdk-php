<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetForums_Ad.proto

namespace Dstore\Engine\Fo_GetForums_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $forum_id = null;
    private $forum_id_null = false;
    private $language_id = null;
    private $language_id_null = false;
    private $forum_category_id = null;
    private $forum_category_id_null = false;
    private $only_forum_categories_in_one_id = null;
    private $only_forum_categories_in_one_id_null = false;
    private $sort_order = null;
    private $sort_order_null = false;
    private $get_category_information = null;
    private $get_category_information_null = false;

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

    public function getLanguageId()
    {
        return $this->language_id;
    }

    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id = $var;
    }

    public function getLanguageIdNull()
    {
        return $this->language_id_null;
    }

    public function setLanguageIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->language_id_null = $var;
    }

    public function getForumCategoryId()
    {
        return $this->forum_category_id;
    }

    public function setForumCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->forum_category_id = $var;
    }

    public function getForumCategoryIdNull()
    {
        return $this->forum_category_id_null;
    }

    public function setForumCategoryIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->forum_category_id_null = $var;
    }

    public function getOnlyForumCategoriesInOneId()
    {
        return $this->only_forum_categories_in_one_id;
    }

    public function setOnlyForumCategoriesInOneId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->only_forum_categories_in_one_id = $var;
    }

    public function getOnlyForumCategoriesInOneIdNull()
    {
        return $this->only_forum_categories_in_one_id_null;
    }

    public function setOnlyForumCategoriesInOneIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->only_forum_categories_in_one_id_null = $var;
    }

    public function getSortOrder()
    {
        return $this->sort_order;
    }

    public function setSortOrder(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->sort_order = $var;
    }

    public function getSortOrderNull()
    {
        return $this->sort_order_null;
    }

    public function setSortOrderNull($var)
    {
        GPBUtil::checkBool($var);
        $this->sort_order_null = $var;
    }

    public function getGetCategoryInformation()
    {
        return $this->get_category_information;
    }

    public function setGetCategoryInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->get_category_information = $var;
    }

    public function getGetCategoryInformationNull()
    {
        return $this->get_category_information_null;
    }

    public function setGetCategoryInformationNull($var)
    {
        GPBUtil::checkBool($var);
        $this->get_category_information_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetForums_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $language = null;
    private $forum_id = null;
    private $forum_name = null;
    private $language_id = null;
    private $predecessor_category_id = null;
    private $forum_category_id = null;
    private $category_description = null;
    private $sort_no = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->language = $var;
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

    public function getForumName()
    {
        return $this->forum_name;
    }

    public function setForumName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->forum_name = $var;
    }

    public function getLanguageId()
    {
        return $this->language_id;
    }

    public function setLanguageId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->language_id = $var;
    }

    public function getPredecessorCategoryId()
    {
        return $this->predecessor_category_id;
    }

    public function setPredecessorCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->predecessor_category_id = $var;
    }

    public function getForumCategoryId()
    {
        return $this->forum_category_id;
    }

    public function setForumCategoryId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->forum_category_id = $var;
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

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0aa70b0a2e6473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f476574466f72756d735f41642e70726f746f121d6473746f72652e" .
    "656e67696e652e666f5f476574466f72756d735f41641a136473746f7265" .
    "2f76616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d" .
    "6573736167652e70726f746f1a236473746f72652f656e67696e652f6d65" .
    "7461696e666f726d6174696f6e2e70726f746f22a0040a0a506172616d65" .
    "74657273122d0a08666f72756d5f696418012001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c756512160a0d666f72756d" .
    "5f69645f6e756c6c18e9072001280812300a0b6c616e67756167655f6964" .
    "18022001280b321b2e6473746f72652e76616c7565732e696e7465676572" .
    "56616c756512190a106c616e67756167655f69645f6e756c6c18ea072001" .
    "280812360a11666f72756d5f63617465676f72795f696418032001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c7565121f" .
    "0a16666f72756d5f63617465676f72795f69645f6e756c6c18eb07200128" .
    "0812440a1f6f6e6c795f666f72756d5f63617465676f726965735f696e5f" .
    "6f6e655f696418042001280b321b2e6473746f72652e76616c7565732e62" .
    "6f6f6c65616e56616c7565122d0a246f6e6c795f666f72756d5f63617465" .
    "676f726965735f696e5f6f6e655f69645f6e756c6c18ec0720012808122f" .
    "0a0a736f72745f6f7264657218052001280b321b2e6473746f72652e7661" .
    "6c7565732e696e746567657256616c756512180a0f736f72745f6f726465" .
    "725f6e756c6c18ed0720012808123d0a186765745f63617465676f72795f" .
    "696e666f726d6174696f6e18062001280b321b2e6473746f72652e76616c" .
    "7565732e626f6f6c65616e56616c756512260a1d6765745f63617465676f" .
    "72795f696e666f726d6174696f6e5f6e756c6c18ee07200128082281050a" .
    "08526573706f6e736512480a106d6574615f696e666f726d6174696f6e18" .
    "022003280b322e2e6473746f72652e656e67696e652e6d657461696e666f" .
    "726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a076d6573" .
    "7361676518032003280b321e2e6473746f72652e656e67696e652e6d6573" .
    "736167652e4d65737361676512380a03726f7718042003280b322b2e6473" .
    "746f72652e656e67696e652e666f5f476574466f72756d735f41642e5265" .
    "73706f6e73652e526f771abf030a03526f77120f0a06726f775f69641890" .
    "4e20012805122d0a086c616e677561676518914e2001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565122e0a08666f7275" .
    "6d5f696418924e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565122f0a0a666f72756d5f6e616d6518934e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "310a0b6c616e67756167655f696418944e2001280b321b2e6473746f7265" .
    "2e76616c7565732e696e746567657256616c7565123e0a17707265646563" .
    "6573736f725f63617465676f72795f696418a29c012001280b321b2e6473" .
    "746f72652e76616c7565732e696e746567657256616c756512380a11666f" .
    "72756d5f63617465676f72795f696418a39c012001280b321b2e6473746f" .
    "72652e76616c7565732e696e746567657256616c7565123a0a1463617465" .
    "676f72795f6465736372697074696f6e18a69c012001280b321a2e647374" .
    "6f72652e76616c7565732e737472696e6756616c7565122e0a07736f7274" .
    "5f6e6f18a79c012001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756542500a1b696f2e6473746f72652e656e67696e65" .
    "2e70726f636564757265735a31676f73646b2e6473746f72652e64652f65" .
    "6e67696e652f70726f636564757265732f666f5f476574466f72756d735f" .
    "4164620670726f746f33"
));
