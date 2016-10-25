<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_RestoreDefaultValues_Ad.proto

namespace Dstore\Engine\Mi_RestoreDefaultValues_Ad;

require_once('dstore/values.pb.php');
require_once('dstore/engine/message.pb.php');
require_once('dstore/engine/metainformation.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Parameters extends \Google\Protobuf\Internal\Message
{
    private $create_sup_adm_person_with_passwd = null;
    private $create_sup_adm_person_with_passwd_null = false;
    private $skip_tables_for_development = null;
    private $skip_tables_for_development_null = false;
    private $generate_item_test_data_scenario = null;
    private $generate_item_test_data_scenario_null = false;
    private $generate_pers_test_data_scenario = null;
    private $generate_pers_test_data_scenario_null = false;
    private $gener_forum_test_data_scenario = null;
    private $gener_forum_test_data_scenario_null = false;
    private $gener_order_test_data_scenario = null;
    private $gener_order_test_data_scenario_null = false;

    public function getCreateSupAdmPersonWithPasswd()
    {
        return $this->create_sup_adm_person_with_passwd;
    }

    public function setCreateSupAdmPersonWithPasswd(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->create_sup_adm_person_with_passwd = $var;
    }

    public function getCreateSupAdmPersonWithPasswdNull()
    {
        return $this->create_sup_adm_person_with_passwd_null;
    }

    public function setCreateSupAdmPersonWithPasswdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->create_sup_adm_person_with_passwd_null = $var;
    }

    public function getSkipTablesForDevelopment()
    {
        return $this->skip_tables_for_development;
    }

    public function setSkipTablesForDevelopment(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\booleanValue::class);
        $this->skip_tables_for_development = $var;
    }

    public function getSkipTablesForDevelopmentNull()
    {
        return $this->skip_tables_for_development_null;
    }

    public function setSkipTablesForDevelopmentNull($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_tables_for_development_null = $var;
    }

    public function getGenerateItemTestDataScenario()
    {
        return $this->generate_item_test_data_scenario;
    }

    public function setGenerateItemTestDataScenario(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->generate_item_test_data_scenario = $var;
    }

    public function getGenerateItemTestDataScenarioNull()
    {
        return $this->generate_item_test_data_scenario_null;
    }

    public function setGenerateItemTestDataScenarioNull($var)
    {
        GPBUtil::checkBool($var);
        $this->generate_item_test_data_scenario_null = $var;
    }

    public function getGeneratePersTestDataScenario()
    {
        return $this->generate_pers_test_data_scenario;
    }

    public function setGeneratePersTestDataScenario(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->generate_pers_test_data_scenario = $var;
    }

    public function getGeneratePersTestDataScenarioNull()
    {
        return $this->generate_pers_test_data_scenario_null;
    }

    public function setGeneratePersTestDataScenarioNull($var)
    {
        GPBUtil::checkBool($var);
        $this->generate_pers_test_data_scenario_null = $var;
    }

    public function getGenerForumTestDataScenario()
    {
        return $this->gener_forum_test_data_scenario;
    }

    public function setGenerForumTestDataScenario(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->gener_forum_test_data_scenario = $var;
    }

    public function getGenerForumTestDataScenarioNull()
    {
        return $this->gener_forum_test_data_scenario_null;
    }

    public function setGenerForumTestDataScenarioNull($var)
    {
        GPBUtil::checkBool($var);
        $this->gener_forum_test_data_scenario_null = $var;
    }

    public function getGenerOrderTestDataScenario()
    {
        return $this->gener_order_test_data_scenario;
    }

    public function setGenerOrderTestDataScenario(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\stringValue::class);
        $this->gener_order_test_data_scenario = $var;
    }

    public function getGenerOrderTestDataScenarioNull()
    {
        return $this->gener_order_test_data_scenario_null;
    }

    public function setGenerOrderTestDataScenarioNull($var)
    {
        GPBUtil::checkBool($var);
        $this->gener_order_test_data_scenario_null = $var;
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
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Dstore\Engine\Mi_RestoreDefaultValues_Ad\Response_Row::class);
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
    "0aca090a396473746f72652f656e67696e652f70726f636564757265732f" .
    "6d695f526573746f726544656661756c7456616c7565735f41642e70726f" .
    "746f12286473746f72652e656e67696e652e6d695f526573746f72654465" .
    "6661756c7456616c7565735f41641a136473746f72652f76616c7565732e" .
    "70726f746f1a1b6473746f72652f656e67696e652f6d6573736167652e70" .
    "726f746f1a236473746f72652f656e67696e652f6d657461696e666f726d" .
    "6174696f6e2e70726f746f22c1050a0a506172616d657465727312450a21" .
    "6372656174655f7375705f61646d5f706572736f6e5f776974685f706173" .
    "73776418012001280b321a2e6473746f72652e76616c7565732e73747269" .
    "6e6756616c7565122f0a266372656174655f7375705f61646d5f70657273" .
    "6f6e5f776974685f7061737377645f6e756c6c18e9072001280812400a1b" .
    "736b69705f7461626c65735f666f725f646576656c6f706d656e74180220" .
    "01280b321b2e6473746f72652e76616c7565732e626f6f6c65616e56616c" .
    "756512290a20736b69705f7461626c65735f666f725f646576656c6f706d" .
    "656e745f6e756c6c18ea072001280812440a2067656e65726174655f6974" .
    "656d5f746573745f646174615f7363656e6172696f18032001280b321a2e" .
    "6473746f72652e76616c7565732e737472696e6756616c7565122e0a2567" .
    "656e65726174655f6974656d5f746573745f646174615f7363656e617269" .
    "6f5f6e756c6c18eb072001280812440a2067656e65726174655f70657273" .
    "5f746573745f646174615f7363656e6172696f18042001280b321a2e6473" .
    "746f72652e76616c7565732e737472696e6756616c7565122e0a2567656e" .
    "65726174655f706572735f746573745f646174615f7363656e6172696f5f" .
    "6e756c6c18ec072001280812420a1e67656e65725f666f72756d5f746573" .
    "745f646174615f7363656e6172696f18052001280b321a2e6473746f7265" .
    "2e76616c7565732e737472696e6756616c7565122c0a2367656e65725f66" .
    "6f72756d5f746573745f646174615f7363656e6172696f5f6e756c6c18ed" .
    "072001280812420a1e67656e65725f6f726465725f746573745f64617461" .
    "5f7363656e6172696f18062001280b321a2e6473746f72652e76616c7565" .
    "732e737472696e6756616c7565122c0a2367656e65725f6f726465725f74" .
    "6573745f646174615f7363656e6172696f5f6e756c6c18ee072001280822" .
    "e2010a08526573706f6e736512480a106d6574615f696e666f726d617469" .
    "6f6e18022003280b322e2e6473746f72652e656e67696e652e6d65746169" .
    "6e666f726d6174696f6e2e4d657461496e666f726d6174696f6e122f0a07" .
    "6d65737361676518032003280b321e2e6473746f72652e656e67696e652e" .
    "6d6573736167652e4d65737361676512430a03726f7718042003280b3236" .
    "2e6473746f72652e656e67696e652e6d695f526573746f72654465666175" .
    "6c7456616c7565735f41642e526573706f6e73652e526f771a160a03526f" .
    "77120f0a06726f775f696418904e20012805425b0a1b696f2e6473746f72" .
    "652e656e67696e652e70726f636564757265735a3c676f73646b2e647374" .
    "6f72652e64652f656e67696e652f70726f636564757265732f6d695f5265" .
    "73746f726544656661756c7456616c7565735f4164620670726f746f33"
));

