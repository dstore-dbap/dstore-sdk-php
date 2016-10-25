<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_GetTabsRefInOtherTabs_Ad.proto

namespace Dstore\Engine\Mi_GetTabsRefInOtherTabs_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $table_id = null;
    private $table_id_null = false;
    private $used_in_search_items = null;
    private $used_in_search_items_null = false;
    private $used_in_search_item_lacks = null;
    private $used_in_search_item_lacks_null = false;
    private $used_in_rating_values = null;
    private $used_in_rating_values_null = false;
    private $used_in_rating_subjects = null;
    private $used_in_rating_subjects_null = false;
    private $used_in_meta_information_types = null;
    private $used_in_meta_information_types_null = false;
    private $used_in_person_charac_value_refs = null;
    private $used_in_person_charac_value_refs_null = false;
    private $used_in_predefined_bill_content = null;
    private $used_in_predefined_bill_content_null = false;
    private $used_in_cash_acc_transactions = null;
    private $used_in_cash_acc_transactions_null = false;

    public function getTableId()
    {
        return $this->table_id;
    }

    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->table_id = $var;
    }

    public function getTableIdNull()
    {
        return $this->table_id_null;
    }

    public function setTableIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->table_id_null = $var;
    }

    public function getUsedInSearchItems()
    {
        return $this->used_in_search_items;
    }

    public function setUsedInSearchItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->used_in_search_items = $var;
    }

    public function getUsedInSearchItemsNull()
    {
        return $this->used_in_search_items_null;
    }

    public function setUsedInSearchItemsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->used_in_search_items_null = $var;
    }

    public function getUsedInSearchItemLacks()
    {
        return $this->used_in_search_item_lacks;
    }

    public function setUsedInSearchItemLacks(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->used_in_search_item_lacks = $var;
    }

    public function getUsedInSearchItemLacksNull()
    {
        return $this->used_in_search_item_lacks_null;
    }

    public function setUsedInSearchItemLacksNull($var)
    {
        GPBUtil::checkBool($var);
        $this->used_in_search_item_lacks_null = $var;
    }

    public function getUsedInRatingValues()
    {
        return $this->used_in_rating_values;
    }

    public function setUsedInRatingValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->used_in_rating_values = $var;
    }

    public function getUsedInRatingValuesNull()
    {
        return $this->used_in_rating_values_null;
    }

    public function setUsedInRatingValuesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->used_in_rating_values_null = $var;
    }

    public function getUsedInRatingSubjects()
    {
        return $this->used_in_rating_subjects;
    }

    public function setUsedInRatingSubjects(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->used_in_rating_subjects = $var;
    }

    public function getUsedInRatingSubjectsNull()
    {
        return $this->used_in_rating_subjects_null;
    }

    public function setUsedInRatingSubjectsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->used_in_rating_subjects_null = $var;
    }

    public function getUsedInMetaInformationTypes()
    {
        return $this->used_in_meta_information_types;
    }

    public function setUsedInMetaInformationTypes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->used_in_meta_information_types = $var;
    }

    public function getUsedInMetaInformationTypesNull()
    {
        return $this->used_in_meta_information_types_null;
    }

    public function setUsedInMetaInformationTypesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->used_in_meta_information_types_null = $var;
    }

    public function getUsedInPersonCharacValueRefs()
    {
        return $this->used_in_person_charac_value_refs;
    }

    public function setUsedInPersonCharacValueRefs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->used_in_person_charac_value_refs = $var;
    }

    public function getUsedInPersonCharacValueRefsNull()
    {
        return $this->used_in_person_charac_value_refs_null;
    }

    public function setUsedInPersonCharacValueRefsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->used_in_person_charac_value_refs_null = $var;
    }

    public function getUsedInPredefinedBillContent()
    {
        return $this->used_in_predefined_bill_content;
    }

    public function setUsedInPredefinedBillContent(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->used_in_predefined_bill_content = $var;
    }

    public function getUsedInPredefinedBillContentNull()
    {
        return $this->used_in_predefined_bill_content_null;
    }

    public function setUsedInPredefinedBillContentNull($var)
    {
        GPBUtil::checkBool($var);
        $this->used_in_predefined_bill_content_null = $var;
    }

    public function getUsedInCashAccTransactions()
    {
        return $this->used_in_cash_acc_transactions;
    }

    public function setUsedInCashAccTransactions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->used_in_cash_acc_transactions = $var;
    }

    public function getUsedInCashAccTransactionsNull()
    {
        return $this->used_in_cash_acc_transactions_null;
    }

    public function setUsedInCashAccTransactionsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->used_in_cash_acc_transactions_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_GetTabsRefInOtherTabs_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $table_id = null;
    private $used_in_search_item_lacks = null;
    private $used_in_rating_values = null;
    private $used_in_predefined_bill_content = null;
    private $table_name = null;
    private $primary_key_column_name = null;
    private $used_in_search_items = null;
    private $used_in_person_charac_value_refs = null;
    private $used_in_meta_information_types = null;
    private $used_in_rating_subjects = null;
    private $used_in_cash_acc_transactions = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTableId()
    {
        return $this->table_id;
    }

    public function setTableId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->table_id = $var;
    }

    public function getUsedInSearchItemLacks()
    {
        return $this->used_in_search_item_lacks;
    }

    public function setUsedInSearchItemLacks(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->used_in_search_item_lacks = $var;
    }

    public function getUsedInRatingValues()
    {
        return $this->used_in_rating_values;
    }

    public function setUsedInRatingValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->used_in_rating_values = $var;
    }

    public function getUsedInPredefinedBillContent()
    {
        return $this->used_in_predefined_bill_content;
    }

    public function setUsedInPredefinedBillContent(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->used_in_predefined_bill_content = $var;
    }

    public function getTableName()
    {
        return $this->table_name;
    }

    public function setTableName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->table_name = $var;
    }

    public function getPrimaryKeyColumnName()
    {
        return $this->primary_key_column_name;
    }

    public function setPrimaryKeyColumnName(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->primary_key_column_name = $var;
    }

    public function getUsedInSearchItems()
    {
        return $this->used_in_search_items;
    }

    public function setUsedInSearchItems(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->used_in_search_items = $var;
    }

    public function getUsedInPersonCharacValueRefs()
    {
        return $this->used_in_person_charac_value_refs;
    }

    public function setUsedInPersonCharacValueRefs(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->used_in_person_charac_value_refs = $var;
    }

    public function getUsedInMetaInformationTypes()
    {
        return $this->used_in_meta_information_types;
    }

    public function setUsedInMetaInformationTypes(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->used_in_meta_information_types = $var;
    }

    public function getUsedInRatingSubjects()
    {
        return $this->used_in_rating_subjects;
    }

    public function setUsedInRatingSubjects(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->used_in_rating_subjects = $var;
    }

    public function getUsedInCashAccTransactions()
    {
        return $this->used_in_cash_acc_transactions;
    }

    public function setUsedInCashAccTransactions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->used_in_cash_acc_transactions = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0af1100a3a6473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f47657454616273526566496e4f74686572546162735f41642e7072" .
    "6f746f12296473746f72652e656e67696e652e6d695f4765745461627352" .
    "6566496e4f74686572546162735f41641a136473746f72652f76616c7565" .
    "732e70726f746f1a1b6473746f72652f656e67696e652f6d657373616765" .
    "2e70726f746f1a236473746f72652f656e67696e652f6d657461696e666f" .
    "726d6174696f6e2e70726f746f22b1070a0a506172616d6574657273122d" .
    "0a087461626c655f696418012001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c756512160a0d7461626c655f69645f6e75" .
    "6c6c18e9072001280812390a14757365645f696e5f7365617263685f6974" .
    "656d7318022001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512220a19757365645f696e5f7365617263685f697465" .
    "6d735f6e756c6c18ea0720012808123e0a19757365645f696e5f73656172" .
    "63685f6974656d5f6c61636b7318032001280b321b2e6473746f72652e76" .
    "616c7565732e696e746567657256616c756512270a1e757365645f696e5f" .
    "7365617263685f6974656d5f6c61636b735f6e756c6c18eb072001280812" .
    "3a0a15757365645f696e5f726174696e675f76616c75657318042001280b" .
    "321b2e6473746f72652e76616c7565732e696e746567657256616c756512" .
    "230a1a757365645f696e5f726174696e675f76616c7565735f6e756c6c18" .
    "ec0720012808123c0a17757365645f696e5f726174696e675f7375626a65" .
    "63747318052001280b321b2e6473746f72652e76616c7565732e696e7465" .
    "67657256616c756512250a1c757365645f696e5f726174696e675f737562" .
    "6a656374735f6e756c6c18ed072001280812430a1e757365645f696e5f6d" .
    "6574615f696e666f726d6174696f6e5f747970657318062001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c7565122c0a23" .
    "757365645f696e5f6d6574615f696e666f726d6174696f6e5f7479706573" .
    "5f6e756c6c18ee072001280812450a20757365645f696e5f706572736f6e" .
    "5f6368617261635f76616c75655f7265667318072001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c7565122e0a25757365" .
    "645f696e5f706572736f6e5f6368617261635f76616c75655f726566735f" .
    "6e756c6c18ef072001280812440a1f757365645f696e5f70726564656669" .
    "6e65645f62696c6c5f636f6e74656e7418082001280b321b2e6473746f72" .
    "652e76616c7565732e696e746567657256616c7565122d0a24757365645f" .
    "696e5f707265646566696e65645f62696c6c5f636f6e74656e745f6e756c" .
    "6c18f0072001280812420a1d757365645f696e5f636173685f6163635f74" .
    "72616e73616374696f6e7318092001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c7565122b0a22757365645f696e5f6361" .
    "73685f6163635f7472616e73616374696f6e735f6e756c6c18f107200128" .
    "082296070a08526573706f6e736512480a106d6574615f696e666f726d61" .
    "74696f6e18022003280b322e2e6473746f72652e656e67696e652e6d6574" .
    "61696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f" .
    "0a076d65737361676518032003280b321e2e6473746f72652e656e67696e" .
    "652e6d6573736167652e4d65737361676512440a03726f7718042003280b" .
    "32372e6473746f72652e656e67696e652e6d695f47657454616273526566" .
    "496e4f74686572546162735f41642e526573706f6e73652e526f771ac805" .
    "0a03526f77120f0a06726f775f696418904e20012805122e0a087461626c" .
    "655f696418914e2001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c7565123f0a19757365645f696e5f7365617263685f69" .
    "74656d5f6c61636b7318924e2001280b321b2e6473746f72652e76616c75" .
    "65732e626f6f6c65616e56616c7565123b0a15757365645f696e5f726174" .
    "696e675f76616c75657318934e2001280b321b2e6473746f72652e76616c" .
    "7565732e626f6f6c65616e56616c756512450a1f757365645f696e5f7072" .
    "65646566696e65645f62696c6c5f636f6e74656e7418944e2001280b321b" .
    "2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565122f0a" .
    "0a7461626c655f6e616d6518954e2001280b321a2e6473746f72652e7661" .
    "6c7565732e737472696e6756616c7565123c0a177072696d6172795f6b65" .
    "795f636f6c756d6e5f6e616d6518964e2001280b321a2e6473746f72652e" .
    "76616c7565732e737472696e6756616c7565123a0a14757365645f696e5f" .
    "7365617263685f6974656d7318974e2001280b321b2e6473746f72652e76" .
    "616c7565732e626f6f6c65616e56616c756512460a20757365645f696e5f" .
    "706572736f6e5f6368617261635f76616c75655f7265667318984e200128" .
    "0b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c7565" .
    "12440a1e757365645f696e5f6d6574615f696e666f726d6174696f6e5f74" .
    "7970657318994e2001280b321b2e6473746f72652e76616c7565732e626f" .
    "6f6c65616e56616c7565123d0a17757365645f696e5f726174696e675f73" .
    "75626a65637473189a4e2001280b321b2e6473746f72652e76616c756573" .
    "2e626f6f6c65616e56616c756512430a1d757365645f696e5f636173685f" .
    "6163635f7472616e73616374696f6e73189b4e2001280b321b2e6473746f" .
    "72652e76616c7565732e626f6f6c65616e56616c7565425c0a1b696f2e64" .
    "73746f72652e656e67696e652e70726f636564757265735a3d676f73646b" .
    "2e6473746f72652e64652f656e67696e652f70726f636564757265732f6d" .
    "695f47657454616273526566496e4f74686572546162735f416462067072" .
    "6f746f33"
));

