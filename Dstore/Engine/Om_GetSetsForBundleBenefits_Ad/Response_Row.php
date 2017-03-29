<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetSetsForBundleBenefits_Ad.proto

namespace Dstore\Engine\Om_GetSetsForBundleBenefits_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetSetsForBundleBenefits_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID der Artikel-Bedingung, die das Set "ItemSetID" definiert. Die genaue Definition der Bedingung erhält man durch "im_GetItemConditions_Ad".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_id = 10001;</code>
     */
    private $item_condition_id = null;
    /**
     * <pre>
     * ID eines Benefits vom Typ "Bundle-Preis"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_id = 10002;</code>
     */
    private $benefit_id = null;
    /**
     * <pre>
     * ID eines Bundle-Preis-Sets, das Teil des Benefits "BenefitID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_set_id = 10003;</code>
     */
    private $item_set_id = null;
    /**
     * <pre>
     * Wieviele Artikel der Kunde aus dem Set auswählen muss, damit der Bundle-Preis gewährt wird.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue quantity = 10004;</code>
     */
    private $quantity = null;
    /**
     * <pre>
     * Bezeichnung der Artikel-Bedingung "ItemConditionID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_description = 10005;</code>
     */
    private $item_condition_description = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge von "ItemSetID" innerhalb aller "BenefitID" zugeordneten Sets
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10006;</code>
     */
    private $sort_no = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetSetsForBundleBenefitsAd::initOnce();
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
     * ID der Artikel-Bedingung, die das Set "ItemSetID" definiert. Die genaue Definition der Bedingung erhält man durch "im_GetItemConditions_Ad".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_id = 10001;</code>
     */
    public function getItemConditionId()
    {
        return $this->item_condition_id;
    }

    /**
     * <pre>
     * ID der Artikel-Bedingung, die das Set "ItemSetID" definiert. Die genaue Definition der Bedingung erhält man durch "im_GetItemConditions_Ad".
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_id = 10001;</code>
     */
    public function setItemConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_condition_id = $var;
    }

    /**
     * <pre>
     * ID eines Benefits vom Typ "Bundle-Preis"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_id = 10002;</code>
     */
    public function getBenefitId()
    {
        return $this->benefit_id;
    }

    /**
     * <pre>
     * ID eines Benefits vom Typ "Bundle-Preis"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue benefit_id = 10002;</code>
     */
    public function setBenefitId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->benefit_id = $var;
    }

    /**
     * <pre>
     * ID eines Bundle-Preis-Sets, das Teil des Benefits "BenefitID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_set_id = 10003;</code>
     */
    public function getItemSetId()
    {
        return $this->item_set_id;
    }

    /**
     * <pre>
     * ID eines Bundle-Preis-Sets, das Teil des Benefits "BenefitID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_set_id = 10003;</code>
     */
    public function setItemSetId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_set_id = $var;
    }

    /**
     * <pre>
     * Wieviele Artikel der Kunde aus dem Set auswählen muss, damit der Bundle-Preis gewährt wird.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue quantity = 10004;</code>
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <pre>
     * Wieviele Artikel der Kunde aus dem Set auswählen muss, damit der Bundle-Preis gewährt wird.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue quantity = 10004;</code>
     */
    public function setQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->quantity = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Artikel-Bedingung "ItemConditionID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_description = 10005;</code>
     */
    public function getItemConditionDescription()
    {
        return $this->item_condition_description;
    }

    /**
     * <pre>
     * Bezeichnung der Artikel-Bedingung "ItemConditionID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_description = 10005;</code>
     */
    public function setItemConditionDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->item_condition_description = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "ItemSetID" innerhalb aller "BenefitID" zugeordneten Sets
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10006;</code>
     */
    public function getSortNo()
    {
        return $this->sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "ItemSetID" innerhalb aller "BenefitID" zugeordneten Sets
     * </pre>
     *
     * <code>.dstore.values.IntegerValue sort_no = 10006;</code>
     */
    public function setSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->sort_no = $var;
    }

}

