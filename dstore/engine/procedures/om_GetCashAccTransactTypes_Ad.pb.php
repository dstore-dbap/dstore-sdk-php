<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetCashAccTransactTypes_Ad.proto

namespace Dstore\Engine\Om_GetCashAccTransactTypes_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{

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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Om_GetCashAccTransactTypes_Ad\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $transaction_type = null;
    private $account_holder_transactions = null;
    private $transaction_type_id = null;
    private $positive_transaction_values = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getTransactionType()
    {
        return $this->transaction_type;
    }

    public function setTransactionType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->transaction_type = $var;
    }

    public function getAccountHolderTransactions()
    {
        return $this->account_holder_transactions;
    }

    public function setAccountHolderTransactions(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->account_holder_transactions = $var;
    }

    public function getTransactionTypeId()
    {
        return $this->transaction_type_id;
    }

    public function setTransactionTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->transaction_type_id = $var;
    }

    public function getPositiveTransactionValues()
    {
        return $this->positive_transaction_values;
    }

    public function setPositiveTransactionValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->positive_transaction_values = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a99060a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "6f6d5f476574436173684163635472616e7361637454797065735f41642e" .
    "70726f746f122b6473746f72652e656e67696e652e6f6d5f476574436173" .
    "684163635472616e7361637454797065735f41641a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f220c0a0a506172616d65746572" .
    "7322de030a08526573706f6e736512480a106d6574615f696e666f726d61" .
    "74696f6e18022003280b322e2e6473746f72652e656e67696e652e6d6574" .
    "61696e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f" .
    "0a076d65737361676518032003280b321e2e6473746f72652e656e67696e" .
    "652e6d6573736167652e4d65737361676512460a03726f7718042003280b" .
    "32392e6473746f72652e656e67696e652e6f6d5f47657443617368416363" .
    "5472616e7361637454797065735f41642e526573706f6e73652e526f771a" .
    "8e020a03526f77120f0a06726f775f696418904e2001280512350a107472" .
    "616e73616374696f6e5f7479706518914e2001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c756512410a1b6163636f756e74" .
    "5f686f6c6465725f7472616e73616374696f6e7318924e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c756512390a13" .
    "7472616e73616374696f6e5f747970655f696418934e2001280b321b2e64" .
    "73746f72652e76616c7565732e696e746567657256616c756512410a1b70" .
    "6f7369746976655f7472616e73616374696f6e5f76616c75657318944e20" .
    "01280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c" .
    "7565425e0a1b696f2e6473746f72652e656e67696e652e70726f63656475" .
    "7265735a3f676f73646b2e6473746f72652e64652f656e67696e652f7072" .
    "6f636564757265732f6f6d5f476574436173684163635472616e73616374" .
    "54797065735f4164620670726f746f33"
));
