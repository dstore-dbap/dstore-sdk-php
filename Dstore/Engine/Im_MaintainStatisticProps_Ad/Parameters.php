<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/im_MaintainStatisticProps_Ad.proto

namespace Dstore\Engine\Im_MaintainStatisticProps_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.im_MaintainStatisticProps_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 1;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <code>bool node_characteristic_id_null = 1001;</code>
     */
    private $node_characteristic_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue level_id = 2;</code>
     */
    private $level_id = null;
    /**
     * <code>bool level_id_null = 1002;</code>
     */
    private $level_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue number_of_days = 3;</code>
     */
    private $number_of_days = null;
    /**
     * <code>bool number_of_days_null = 1003;</code>
     */
    private $number_of_days_null = false;
    /**
     * <code>.dstore.values.IntegerValue domain_tree_node_id = 4;</code>
     */
    private $domain_tree_node_id = null;
    /**
     * <code>bool domain_tree_node_id_null = 1004;</code>
     */
    private $domain_tree_node_id_null = false;
    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no = 5;</code>
     */
    private $basic_characteristic_no = null;
    /**
     * <code>bool basic_characteristic_no_null = 1005;</code>
     */
    private $basic_characteristic_no_null = false;
    /**
     * <code>.dstore.values.IntegerValue max_nodes_to_process = 6;</code>
     */
    private $max_nodes_to_process = null;
    /**
     * <code>bool max_nodes_to_process_null = 1006;</code>
     */
    private $max_nodes_to_process_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\ImMaintainStatisticPropsAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 1;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <code>.dstore.values.IntegerValue node_characteristic_id = 1;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <code>bool node_characteristic_id_null = 1001;</code>
     */
    public function getNodeCharacteristicIdNull()
    {
        return $this->node_characteristic_id_null;
    }

    /**
     * <code>bool node_characteristic_id_null = 1001;</code>
     */
    public function setNodeCharacteristicIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->node_characteristic_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue level_id = 2;</code>
     */
    public function getLevelId()
    {
        return $this->level_id;
    }

    /**
     * <code>.dstore.values.IntegerValue level_id = 2;</code>
     */
    public function setLevelId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->level_id = $var;
    }

    /**
     * <code>bool level_id_null = 1002;</code>
     */
    public function getLevelIdNull()
    {
        return $this->level_id_null;
    }

    /**
     * <code>bool level_id_null = 1002;</code>
     */
    public function setLevelIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->level_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_days = 3;</code>
     */
    public function getNumberOfDays()
    {
        return $this->number_of_days;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_days = 3;</code>
     */
    public function setNumberOfDays(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->number_of_days = $var;
    }

    /**
     * <code>bool number_of_days_null = 1003;</code>
     */
    public function getNumberOfDaysNull()
    {
        return $this->number_of_days_null;
    }

    /**
     * <code>bool number_of_days_null = 1003;</code>
     */
    public function setNumberOfDaysNull($var)
    {
        GPBUtil::checkBool($var);
        $this->number_of_days_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue domain_tree_node_id = 4;</code>
     */
    public function getDomainTreeNodeId()
    {
        return $this->domain_tree_node_id;
    }

    /**
     * <code>.dstore.values.IntegerValue domain_tree_node_id = 4;</code>
     */
    public function setDomainTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->domain_tree_node_id = $var;
    }

    /**
     * <code>bool domain_tree_node_id_null = 1004;</code>
     */
    public function getDomainTreeNodeIdNull()
    {
        return $this->domain_tree_node_id_null;
    }

    /**
     * <code>bool domain_tree_node_id_null = 1004;</code>
     */
    public function setDomainTreeNodeIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->domain_tree_node_id_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no = 5;</code>
     */
    public function getBasicCharacteristicNo()
    {
        return $this->basic_characteristic_no;
    }

    /**
     * <code>.dstore.values.IntegerValue basic_characteristic_no = 5;</code>
     */
    public function setBasicCharacteristicNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->basic_characteristic_no = $var;
    }

    /**
     * <code>bool basic_characteristic_no_null = 1005;</code>
     */
    public function getBasicCharacteristicNoNull()
    {
        return $this->basic_characteristic_no_null;
    }

    /**
     * <code>bool basic_characteristic_no_null = 1005;</code>
     */
    public function setBasicCharacteristicNoNull($var)
    {
        GPBUtil::checkBool($var);
        $this->basic_characteristic_no_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue max_nodes_to_process = 6;</code>
     */
    public function getMaxNodesToProcess()
    {
        return $this->max_nodes_to_process;
    }

    /**
     * <code>.dstore.values.IntegerValue max_nodes_to_process = 6;</code>
     */
    public function setMaxNodesToProcess(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->max_nodes_to_process = $var;
    }

    /**
     * <code>bool max_nodes_to_process_null = 1006;</code>
     */
    public function getMaxNodesToProcessNull()
    {
        return $this->max_nodes_to_process_null;
    }

    /**
     * <code>bool max_nodes_to_process_null = 1006;</code>
     */
    public function setMaxNodesToProcessNull($var)
    {
        GPBUtil::checkBool($var);
        $this->max_nodes_to_process_null = $var;
    }

}

