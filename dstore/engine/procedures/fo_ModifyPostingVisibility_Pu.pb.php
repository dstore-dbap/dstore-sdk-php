<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_ModifyPostingVisibility_Pu.proto

namespace Dstore\Engine\Fo_ModifyPostingVisibility_Pu;

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
    private $posting_id = null;
    private $posting_id_null = false;
    private $visible = null;
    private $visible_null = false;
    private $recursive = null;
    private $recursive_null = false;
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

    public function getPostingId()
    {
        return $this->posting_id;
    }

    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\integerValue::class);
        $this->posting_id = $var;
    }

    public function getPostingIdNull()
    {
        return $this->posting_id_null;
    }

    public function setPostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_id_null = $var;
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

    public function getVisibleNull()
    {
        return $this->visible_null;
    }

    public function setVisibleNull($var)
    {
        GPBUtil::checkBool($var);
        $this->visible_null = $var;
    }

    public function getRecursive()
    {
        return $this->recursive;
    }

    public function setRecursive(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->recursive = $var;
    }

    public function getRecursiveNull()
    {
        return $this->recursive_null;
    }

    public function setRecursiveNull($var)
    {
        GPBUtil::checkBool($var);
        $this->recursive_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Fo_ModifyPostingVisibility_Pu\Response_Row::class);
        $this->row = $var;
    }

}

class Response_Row extends \Google\Protobuf\Internal\Message
{
    private $row_id = 0;

    public function getRowId()
    {
        return $this->row_id;
    }

    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ae7080a3c6473746f72652f656e67696e652f70726f636564757265732f" .
    "666f5f4d6f64696679506f7374696e675669736962696c6974795f50752e" .
    "70726f746f122b6473746f72652e656e67696e652e666f5f4d6f64696679" .
    "506f7374696e675669736962696c6974795f50751a136473746f72652f76" .
    "616c7565732e70726f746f1a1b6473746f72652f656e67696e652f6d6573" .
    "736167652e70726f746f1a236473746f72652f656e67696e652f6d657461" .
    "696e666f726d6174696f6e2e70726f746f22d2040a0a506172616d657465" .
    "727312400a1c706572736f6e5f6964656e74696669636174696f6e5f7661" .
    "6c75657318012001280b321a2e6473746f72652e76616c7565732e737472" .
    "696e6756616c7565122a0a21706572736f6e5f6964656e74696669636174" .
    "696f6e5f76616c7565735f6e756c6c18e9072001280812330a0e70657273" .
    "6f6e5f747970655f696418022001280b321b2e6473746f72652e76616c75" .
    "65732e696e746567657256616c7565121c0a13706572736f6e5f74797065" .
    "5f69645f6e756c6c18ea0720012808122d0a09756e697175655f69641803" .
    "2001280b321a2e6473746f72652e76616c7565732e737472696e6756616c" .
    "756512170a0e756e697175655f69645f6e756c6c18eb0720012808122f0a" .
    "0a706f7374696e675f696418042001280b321b2e6473746f72652e76616c" .
    "7565732e696e746567657256616c756512180a0f706f7374696e675f6964" .
    "5f6e756c6c18ec0720012808122c0a0776697369626c6518052001280b32" .
    "1b2e6473746f72652e76616c7565732e696e746567657256616c75651215" .
    "0a0c76697369626c655f6e756c6c18ed0720012808122e0a097265637572" .
    "7369766518062001280b321b2e6473746f72652e76616c7565732e626f6f" .
    "6c65616e56616c756512170a0e7265637572736976655f6e756c6c18ee07" .
    "20012808123b0a17736570617261746f725f696e5f6964656e745f76616c" .
    "7318072001280b321a2e6473746f72652e76616c7565732e737472696e67" .
    "56616c756512250a1c736570617261746f725f696e5f6964656e745f7661" .
    "6c735f6e756c6c18ef072001280822e5010a08526573706f6e736512480a" .
    "106d6574615f696e666f726d6174696f6e18022003280b322e2e6473746f" .
    "72652e656e67696e652e6d657461696e666f726d6174696f6e2e4d657461" .
    "496e666f726d6174696f6e122f0a076d65737361676518032003280b321e" .
    "2e6473746f72652e656e67696e652e6d6573736167652e4d657373616765" .
    "12460a03726f7718042003280b32392e6473746f72652e656e67696e652e" .
    "666f5f4d6f64696679506f7374696e675669736962696c6974795f50752e" .
    "526573706f6e73652e526f771a160a03526f77120f0a06726f775f696418" .
    "904e20012805425e0a1b696f2e6473746f72652e656e67696e652e70726f" .
    "636564757265735a3f676f73646b2e6473746f72652e64652f656e67696e" .
    "652f70726f636564757265732f666f5f4d6f64696679506f7374696e6756" .
    "69736962696c6974795f5075620670726f746f33"
));

