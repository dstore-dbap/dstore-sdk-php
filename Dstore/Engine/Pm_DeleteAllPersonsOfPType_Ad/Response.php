<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/pm_DeleteAllPersonsOfPType_Ad.proto

namespace Dstore\Engine\Pm_DeleteAllPersonsOfPType_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.pm_DeleteAllPersonsOfPType_Ad.Response</code>
 */
class Response extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .dstore.engine.MetaInformation meta_information = 2;</code>
     */
    private $meta_information;
    /**
     * <code>repeated .dstore.engine.Message message = 3;</code>
     */
    private $message;
    /**
     * <code>repeated .dstore.engine.pm_DeleteAllPersonsOfPType_Ad.Response.Row row = 4;</code>
     */
    private $row;
    /**
     * <code>.dstore.values.IntegerValue number_of_deleted_persons = 101;</code>
     */
    private $number_of_deleted_persons = null;
    /**
     * <code>.dstore.values.IntegerValue number_of_not_deleted_persons = 102;</code>
     */
    private $number_of_not_deleted_persons = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\PmDeleteAllPersonsOfPTypeAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .dstore.engine.MetaInformation meta_information = 2;</code>
     */
    public function getMetaInformation()
    {
        return $this->meta_information;
    }

    /**
     * <code>repeated .dstore.engine.MetaInformation meta_information = 2;</code>
     */
    public function setMetaInformation(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Engine\MetaInformation::class);
        $this->meta_information = $var;
    }

    /**
     * <code>repeated .dstore.engine.Message message = 3;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <code>repeated .dstore.engine.Message message = 3;</code>
     */
    public function setMessage(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Engine\Message::class);
        $this->message = $var;
    }

    /**
     * <code>repeated .dstore.engine.pm_DeleteAllPersonsOfPType_Ad.Response.Row row = 4;</code>
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * <code>repeated .dstore.engine.pm_DeleteAllPersonsOfPType_Ad.Response.Row row = 4;</code>
     */
    public function setRow(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Engine\Pm_DeleteAllPersonsOfPType_Ad\Response_Row::class);
        $this->row = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_deleted_persons = 101;</code>
     */
    public function getNumberOfDeletedPersons()
    {
        return $this->number_of_deleted_persons;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_deleted_persons = 101;</code>
     */
    public function setNumberOfDeletedPersons(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->number_of_deleted_persons = $var;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_not_deleted_persons = 102;</code>
     */
    public function getNumberOfNotDeletedPersons()
    {
        return $this->number_of_not_deleted_persons;
    }

    /**
     * <code>.dstore.values.IntegerValue number_of_not_deleted_persons = 102;</code>
     */
    public function setNumberOfNotDeletedPersons(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->number_of_not_deleted_persons = $var;
    }

}

