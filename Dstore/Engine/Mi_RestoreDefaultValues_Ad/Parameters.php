<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/mi_RestoreDefaultValues_Ad.proto

namespace Dstore\Engine\Mi_RestoreDefaultValues_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.mi_RestoreDefaultValues_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.StringValue create_sup_adm_person_with_passwd = 1;</code>
     */
    private $create_sup_adm_person_with_passwd = null;
    /**
     * <code>bool create_sup_adm_person_with_passwd_null = 1001;</code>
     */
    private $create_sup_adm_person_with_passwd_null = false;
    /**
     * <code>.dstore.values.BooleanValue skip_tables_for_development = 2;</code>
     */
    private $skip_tables_for_development = null;
    /**
     * <code>bool skip_tables_for_development_null = 1002;</code>
     */
    private $skip_tables_for_development_null = false;
    /**
     * <code>.dstore.values.StringValue generate_item_test_data_scenario = 3;</code>
     */
    private $generate_item_test_data_scenario = null;
    /**
     * <code>bool generate_item_test_data_scenario_null = 1003;</code>
     */
    private $generate_item_test_data_scenario_null = false;
    /**
     * <code>.dstore.values.StringValue generate_pers_test_data_scenario = 4;</code>
     */
    private $generate_pers_test_data_scenario = null;
    /**
     * <code>bool generate_pers_test_data_scenario_null = 1004;</code>
     */
    private $generate_pers_test_data_scenario_null = false;
    /**
     * <code>.dstore.values.StringValue gener_forum_test_data_scenario = 5;</code>
     */
    private $gener_forum_test_data_scenario = null;
    /**
     * <code>bool gener_forum_test_data_scenario_null = 1005;</code>
     */
    private $gener_forum_test_data_scenario_null = false;
    /**
     * <code>.dstore.values.StringValue gener_order_test_data_scenario = 6;</code>
     */
    private $gener_order_test_data_scenario = null;
    /**
     * <code>bool gener_order_test_data_scenario_null = 1006;</code>
     */
    private $gener_order_test_data_scenario_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\MiRestoreDefaultValuesAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.StringValue create_sup_adm_person_with_passwd = 1;</code>
     */
    public function getCreateSupAdmPersonWithPasswd()
    {
        return $this->create_sup_adm_person_with_passwd;
    }

    /**
     * <code>.dstore.values.StringValue create_sup_adm_person_with_passwd = 1;</code>
     */
    public function setCreateSupAdmPersonWithPasswd(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->create_sup_adm_person_with_passwd = $var;
    }

    /**
     * <code>bool create_sup_adm_person_with_passwd_null = 1001;</code>
     */
    public function getCreateSupAdmPersonWithPasswdNull()
    {
        return $this->create_sup_adm_person_with_passwd_null;
    }

    /**
     * <code>bool create_sup_adm_person_with_passwd_null = 1001;</code>
     */
    public function setCreateSupAdmPersonWithPasswdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->create_sup_adm_person_with_passwd_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue skip_tables_for_development = 2;</code>
     */
    public function getSkipTablesForDevelopment()
    {
        return $this->skip_tables_for_development;
    }

    /**
     * <code>.dstore.values.BooleanValue skip_tables_for_development = 2;</code>
     */
    public function setSkipTablesForDevelopment(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->skip_tables_for_development = $var;
    }

    /**
     * <code>bool skip_tables_for_development_null = 1002;</code>
     */
    public function getSkipTablesForDevelopmentNull()
    {
        return $this->skip_tables_for_development_null;
    }

    /**
     * <code>bool skip_tables_for_development_null = 1002;</code>
     */
    public function setSkipTablesForDevelopmentNull($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_tables_for_development_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue generate_item_test_data_scenario = 3;</code>
     */
    public function getGenerateItemTestDataScenario()
    {
        return $this->generate_item_test_data_scenario;
    }

    /**
     * <code>.dstore.values.StringValue generate_item_test_data_scenario = 3;</code>
     */
    public function setGenerateItemTestDataScenario(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->generate_item_test_data_scenario = $var;
    }

    /**
     * <code>bool generate_item_test_data_scenario_null = 1003;</code>
     */
    public function getGenerateItemTestDataScenarioNull()
    {
        return $this->generate_item_test_data_scenario_null;
    }

    /**
     * <code>bool generate_item_test_data_scenario_null = 1003;</code>
     */
    public function setGenerateItemTestDataScenarioNull($var)
    {
        GPBUtil::checkBool($var);
        $this->generate_item_test_data_scenario_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue generate_pers_test_data_scenario = 4;</code>
     */
    public function getGeneratePersTestDataScenario()
    {
        return $this->generate_pers_test_data_scenario;
    }

    /**
     * <code>.dstore.values.StringValue generate_pers_test_data_scenario = 4;</code>
     */
    public function setGeneratePersTestDataScenario(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->generate_pers_test_data_scenario = $var;
    }

    /**
     * <code>bool generate_pers_test_data_scenario_null = 1004;</code>
     */
    public function getGeneratePersTestDataScenarioNull()
    {
        return $this->generate_pers_test_data_scenario_null;
    }

    /**
     * <code>bool generate_pers_test_data_scenario_null = 1004;</code>
     */
    public function setGeneratePersTestDataScenarioNull($var)
    {
        GPBUtil::checkBool($var);
        $this->generate_pers_test_data_scenario_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue gener_forum_test_data_scenario = 5;</code>
     */
    public function getGenerForumTestDataScenario()
    {
        return $this->gener_forum_test_data_scenario;
    }

    /**
     * <code>.dstore.values.StringValue gener_forum_test_data_scenario = 5;</code>
     */
    public function setGenerForumTestDataScenario(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->gener_forum_test_data_scenario = $var;
    }

    /**
     * <code>bool gener_forum_test_data_scenario_null = 1005;</code>
     */
    public function getGenerForumTestDataScenarioNull()
    {
        return $this->gener_forum_test_data_scenario_null;
    }

    /**
     * <code>bool gener_forum_test_data_scenario_null = 1005;</code>
     */
    public function setGenerForumTestDataScenarioNull($var)
    {
        GPBUtil::checkBool($var);
        $this->gener_forum_test_data_scenario_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue gener_order_test_data_scenario = 6;</code>
     */
    public function getGenerOrderTestDataScenario()
    {
        return $this->gener_order_test_data_scenario;
    }

    /**
     * <code>.dstore.values.StringValue gener_order_test_data_scenario = 6;</code>
     */
    public function setGenerOrderTestDataScenario(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->gener_order_test_data_scenario = $var;
    }

    /**
     * <code>bool gener_order_test_data_scenario_null = 1006;</code>
     */
    public function getGenerOrderTestDataScenarioNull()
    {
        return $this->gener_order_test_data_scenario_null;
    }

    /**
     * <code>bool gener_order_test_data_scenario_null = 1006;</code>
     */
    public function setGenerOrderTestDataScenarioNull($var)
    {
        GPBUtil::checkBool($var);
        $this->gener_order_test_data_scenario_null = $var;
    }

}

