<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetBillContentInfo_Ad.proto

namespace Dstore\Engine\Om_GetBillContentInfo_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetBillContentInfo_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID des "dStore"-Benutzers (der in "UserInfo" registriert ist) der die Information hinterlegt hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue created_by_user_id = 10001;</code>
     */
    private $created_by_user_id = null;
    /**
     * <pre>
     * ID einer Rechnungs-Position (die auf einer Auftrags-Position basiert)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue bill_content_id = 10002;</code>
     */
    private $bill_content_id = null;
    /**
     * <pre>
     * ID eines Informationstyps, also um was es sich bei der Zusatz-Information "Information" handelt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10003;</code>
     */
    private $information_type_id = null;
    /**
     * <pre>
     * Bezeichnung der "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10004;</code>
     */
    private $information_type = null;
    /**
     * <pre>
     * Die zur Rechnungs-Position "BillContentID" hinterlegt Information des Typs "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information = 10005;</code>
     */
    private $information = null;
    /**
     * <pre>
     * Wann wurde die Information "Information" zur "BillContentID" hinterlegt ?
     * </pre>
     *
     * <code>.dstore.values.TimestampValue created_at_date_and_time = 10006;</code>
     */
    private $created_at_date_and_time = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetBillContentInfoAd::initOnce();
        parent::__construct();
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function getRowId()
    {
        return $this->row_id;
    }

    /**
     * <code>int32 row_id = 10000;</code>
     */
    public function setRowId($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_id = $var;
    }

    /**
     * <pre>
     * ID des "dStore"-Benutzers (der in "UserInfo" registriert ist) der die Information hinterlegt hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue created_by_user_id = 10001;</code>
     */
    public function getCreatedByUserId()
    {
        return $this->created_by_user_id;
    }

    /**
     * <pre>
     * ID des "dStore"-Benutzers (der in "UserInfo" registriert ist) der die Information hinterlegt hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue created_by_user_id = 10001;</code>
     */
    public function setCreatedByUserId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->created_by_user_id = $var;
    }

    /**
     * <pre>
     * ID einer Rechnungs-Position (die auf einer Auftrags-Position basiert)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue bill_content_id = 10002;</code>
     */
    public function getBillContentId()
    {
        return $this->bill_content_id;
    }

    /**
     * <pre>
     * ID einer Rechnungs-Position (die auf einer Auftrags-Position basiert)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue bill_content_id = 10002;</code>
     */
    public function setBillContentId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->bill_content_id = $var;
    }

    /**
     * <pre>
     * ID eines Informationstyps, also um was es sich bei der Zusatz-Information "Information" handelt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10003;</code>
     */
    public function getInformationTypeId()
    {
        return $this->information_type_id;
    }

    /**
     * <pre>
     * ID eines Informationstyps, also um was es sich bei der Zusatz-Information "Information" handelt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue information_type_id = 10003;</code>
     */
    public function setInformationTypeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->information_type_id = $var;
    }

    /**
     * <pre>
     * Bezeichnung der "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10004;</code>
     */
    public function getInformationType()
    {
        return $this->information_type;
    }

    /**
     * <pre>
     * Bezeichnung der "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information_type = 10004;</code>
     */
    public function setInformationType(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->information_type = $var;
    }

    /**
     * <pre>
     * Die zur Rechnungs-Position "BillContentID" hinterlegt Information des Typs "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information = 10005;</code>
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * <pre>
     * Die zur Rechnungs-Position "BillContentID" hinterlegt Information des Typs "InformationTypeID"
     * </pre>
     *
     * <code>.dstore.values.StringValue information = 10005;</code>
     */
    public function setInformation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->information = $var;
    }

    /**
     * <pre>
     * Wann wurde die Information "Information" zur "BillContentID" hinterlegt ?
     * </pre>
     *
     * <code>.dstore.values.TimestampValue created_at_date_and_time = 10006;</code>
     */
    public function getCreatedAtDateAndTime()
    {
        return $this->created_at_date_and_time;
    }

    /**
     * <pre>
     * Wann wurde die Information "Information" zur "BillContentID" hinterlegt ?
     * </pre>
     *
     * <code>.dstore.values.TimestampValue created_at_date_and_time = 10006;</code>
     */
    public function setCreatedAtDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->created_at_date_and_time = $var;
    }

}
