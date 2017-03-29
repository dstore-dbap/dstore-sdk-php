<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/ac_InsertActionLog_Ad.proto

namespace Dstore\Engine\Ac_InsertActionLog_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.ac_InsertActionLog_Ad.Parameters</code>
 */
class Parameters extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.dstore.values.IntegerValue result = 1;</code>
     */
    private $result = null;
    /**
     * <code>bool result_null = 1001;</code>
     */
    private $result_null = false;
    /**
     * <code>.dstore.values.IntegerValue action_id = 2;</code>
     */
    private $action_id = null;
    /**
     * <code>bool action_id_null = 1002;</code>
     */
    private $action_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue replace_last_log_part = 3;</code>
     */
    private $replace_last_log_part = null;
    /**
     * <code>bool replace_last_log_part_null = 1003;</code>
     */
    private $replace_last_log_part_null = false;
    /**
     * <code>.dstore.values.IntegerValue posting_id = 4;</code>
     */
    private $posting_id = null;
    /**
     * <code>bool posting_id_null = 1004;</code>
     */
    private $posting_id_null = false;
    /**
     * <code>.dstore.values.BooleanValue maintain_search_postings = 5;</code>
     */
    private $maintain_search_postings = null;
    /**
     * <code>bool maintain_search_postings_null = 1005;</code>
     */
    private $maintain_search_postings_null = false;
    /**
     * <code>.dstore.values.IntegerValue save_posting_properties = 6;</code>
     */
    private $save_posting_properties = null;
    /**
     * <code>bool save_posting_properties_null = 1006;</code>
     */
    private $save_posting_properties_null = false;
    /**
     * <code>.dstore.values.StringValue country = 7;</code>
     */
    private $country = null;
    /**
     * <code>bool country_null = 1007;</code>
     */
    private $country_null = false;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\AcInsertActionLogAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>.dstore.values.IntegerValue result = 1;</code>
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * <code>.dstore.values.IntegerValue result = 1;</code>
     */
    public function setResult(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->result = $var;
    }

    /**
     * <code>bool result_null = 1001;</code>
     */
    public function getResultNull()
    {
        return $this->result_null;
    }

    /**
     * <code>bool result_null = 1001;</code>
     */
    public function setResultNull($var)
    {
        GPBUtil::checkBool($var);
        $this->result_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue action_id = 2;</code>
     */
    public function getActionId()
    {
        return $this->action_id;
    }

    /**
     * <code>.dstore.values.IntegerValue action_id = 2;</code>
     */
    public function setActionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->action_id = $var;
    }

    /**
     * <code>bool action_id_null = 1002;</code>
     */
    public function getActionIdNull()
    {
        return $this->action_id_null;
    }

    /**
     * <code>bool action_id_null = 1002;</code>
     */
    public function setActionIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->action_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue replace_last_log_part = 3;</code>
     */
    public function getReplaceLastLogPart()
    {
        return $this->replace_last_log_part;
    }

    /**
     * <code>.dstore.values.BooleanValue replace_last_log_part = 3;</code>
     */
    public function setReplaceLastLogPart(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->replace_last_log_part = $var;
    }

    /**
     * <code>bool replace_last_log_part_null = 1003;</code>
     */
    public function getReplaceLastLogPartNull()
    {
        return $this->replace_last_log_part_null;
    }

    /**
     * <code>bool replace_last_log_part_null = 1003;</code>
     */
    public function setReplaceLastLogPartNull($var)
    {
        GPBUtil::checkBool($var);
        $this->replace_last_log_part_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue posting_id = 4;</code>
     */
    public function getPostingId()
    {
        return $this->posting_id;
    }

    /**
     * <code>.dstore.values.IntegerValue posting_id = 4;</code>
     */
    public function setPostingId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->posting_id = $var;
    }

    /**
     * <code>bool posting_id_null = 1004;</code>
     */
    public function getPostingIdNull()
    {
        return $this->posting_id_null;
    }

    /**
     * <code>bool posting_id_null = 1004;</code>
     */
    public function setPostingIdNull($var)
    {
        GPBUtil::checkBool($var);
        $this->posting_id_null = $var;
    }

    /**
     * <code>.dstore.values.BooleanValue maintain_search_postings = 5;</code>
     */
    public function getMaintainSearchPostings()
    {
        return $this->maintain_search_postings;
    }

    /**
     * <code>.dstore.values.BooleanValue maintain_search_postings = 5;</code>
     */
    public function setMaintainSearchPostings(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->maintain_search_postings = $var;
    }

    /**
     * <code>bool maintain_search_postings_null = 1005;</code>
     */
    public function getMaintainSearchPostingsNull()
    {
        return $this->maintain_search_postings_null;
    }

    /**
     * <code>bool maintain_search_postings_null = 1005;</code>
     */
    public function setMaintainSearchPostingsNull($var)
    {
        GPBUtil::checkBool($var);
        $this->maintain_search_postings_null = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue save_posting_properties = 6;</code>
     */
    public function getSavePostingProperties()
    {
        return $this->save_posting_properties;
    }

    /**
     * <code>.dstore.values.IntegerValue save_posting_properties = 6;</code>
     */
    public function setSavePostingProperties(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->save_posting_properties = $var;
    }

    /**
     * <code>bool save_posting_properties_null = 1006;</code>
     */
    public function getSavePostingPropertiesNull()
    {
        return $this->save_posting_properties_null;
    }

    /**
     * <code>bool save_posting_properties_null = 1006;</code>
     */
    public function setSavePostingPropertiesNull($var)
    {
        GPBUtil::checkBool($var);
        $this->save_posting_properties_null = $var;
    }

    /**
     * <code>.dstore.values.StringValue country = 7;</code>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <code>.dstore.values.StringValue country = 7;</code>
     */
    public function setCountry(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->country = $var;
    }

    /**
     * <code>bool country_null = 1007;</code>
     */
    public function getCountryNull()
    {
        return $this->country_null;
    }

    /**
     * <code>bool country_null = 1007;</code>
     */
    public function setCountryNull($var)
    {
        GPBUtil::checkBool($var);
        $this->country_null = $var;
    }

}

