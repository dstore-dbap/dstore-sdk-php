<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPostingVisibilities.proto

namespace Dstore\Engine\Fo_GetPostingVisibilities;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $visible = null;
    private $visible_null = false;
    private $visible_get = null;
    private $visible_get_null = false;

    public function getVisible()
    {
        return $this->visible;
    }

    public function setVisible(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visible = $var;
    }

    public function getVisibleNull()
    {
        return $this->visible_null;
    }

    public function setVisibleNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visible_null = $var;
    }

    public function getVisibleGet()
    {
        return $this->visible_get;
    }

    public function setVisibleGet(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visible_get = $var;
    }

    public function getVisibleGetNull()
    {
        return $this->visible_get_null;
    }

    public function setVisibleGetNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visible_get_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_GetPostingVisibilities\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;
    private $description = null;
    private $visible = null;
    private $visibility = null;
    private $visible_get = null;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->description = $var;
    }

    public function getVisible()
    {
        return $this->visible;
    }

    public function setVisible(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visible = $var;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function setVisibility(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->visibility = $var;
    }

    public function getVisibleGet()
    {
        return $this->visible_get;
    }

    public function setVisibleGet(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->visible_get = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae9060a386473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f476574506f7374696e675669736962696c69746965732e70726f74" .
    "6f12276473746f72652e656e67696e652e666f5f476574506f7374696e67" .
    "5669736962696c69746965731a136473746f72652f76616c7565732e7072" .
    "6f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70726f" .
    "746f1a236473746f72652f656e67696e652f6d657461696e666f726d6174" .
    "696f6e2e70726f746f229e010a0a506172616d6574657273122c0a077669" .
    "7369626c6518012001280b321b2e6473746f72652e76616c7565732e696e" .
    "746567657256616c756512150a0c76697369626c655f6e756c6c18e90720" .
    "01280812300a0b76697369626c655f67657418022001280b321b2e647374" .
    "6f72652e76616c7565732e696e746567657256616c756512190a10766973" .
    "69626c655f6765745f6e756c6c18ea072001280822a7030a08526573706f" .
    "6e736512480a106d6574615f696e666f726d6174696f6e18022003280b32" .
    "2e2e6473746f72652e656e67696e652e6d657461696e666f726d6174696f" .
    "6e2e4d657461496e666f726d6174696f6e122f0a076d6573736167651803" .
    "2003280b321e2e6473746f72652e656e67696e652e6d6573736167652e4d" .
    "65737361676512420a03726f7718042003280b32352e6473746f72652e65" .
    "6e67696e652e666f5f476574506f7374696e675669736962696c69746965" .
    "732e526573706f6e73652e526f771adb010a03526f77120f0a06726f775f" .
    "696418904e2001280512300a0b6465736372697074696f6e18914e200128" .
    "0b321a2e6473746f72652e76616c7565732e737472696e6756616c756512" .
    "2d0a0776697369626c6518924e2001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c7565122f0a0a7669736962696c697479" .
    "18934e2001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512310a0b76697369626c655f67657418944e2001280b321b2e" .
    "6473746f72652e76616c7565732e696e746567657256616c7565425a0a1b" .
    "696f2e6473746f72652e656e67696e652e70726f636564757265735a3b67" .
    "6f73646b2e6473746f72652e64652f656e67696e652f70726f6365647572" .
    "65732f666f5f476574506f7374696e675669736962696c69746965736206" .
    "70726f746f33"
));

