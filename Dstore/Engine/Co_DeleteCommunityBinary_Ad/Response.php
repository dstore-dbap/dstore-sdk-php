<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/co_DeleteCommunityBinary_Ad.proto

namespace Dstore\Engine\Co_DeleteCommunityBinary_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.co_DeleteCommunityBinary_Ad.Response</code>
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
     * <pre>
     * no output parameters
     * </pre>
     *
     * <code>repeated .dstore.engine.co_DeleteCommunityBinary_Ad.Response.Row row = 4;</code>
     */
    private $row;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\CoDeleteCommunityBinaryAd::initOnce();
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
     * <pre>
     * no output parameters
     * </pre>
     *
     * <code>repeated .dstore.engine.co_DeleteCommunityBinary_Ad.Response.Row row = 4;</code>
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * <pre>
     * no output parameters
     * </pre>
     *
     * <code>repeated .dstore.engine.co_DeleteCommunityBinary_Ad.Response.Row row = 4;</code>
     */
    public function setRow(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Dstore\Engine\Co_DeleteCommunityBinary_Ad\Response_Row::class);
        $this->row = $var;
    }

}

