<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetTrolleyAsMatrix_Pu.proto

namespace Dstore\Engine\Om_GetTrolleyAsMatrix_Pu;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetTrolleyAsMatrix_Pu.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das eine Variante von "ProductTreeNodeID" darstellt. "NULL", falls "ProductTreeNodeID" keine Varianten hat oder die Variante mit den Eigenschaften "YAxisValues" und "XAxisValue" nicht existiert bzw. im Warenkorb liegt.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue variant_tree_node_id = 10001;</code>
     */
    private $variant_tree_node_id = null;
    /**
     * <pre>
     * ID eines Elementes im Artikelbaum (aus dem Warenkorb des Besuchers "&#64;UniqueID"). Wichtiger Hinweis : siehe Beschreibung !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue product_tree_node_id = 10002;</code>
     */
    private $product_tree_node_id = null;
    /**
     * <pre>
     * ID des Merkmals; die Eigenschaft von "NodeID" zu diesem Merkmal hat den Preis ("UnitNettoPrice") bestimmt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue price_node_characteristic_id = 10003;</code>
     */
    private $price_node_characteristic_id = null;
    /**
     * <pre>
     * Liste von "CampaignID"s der Verkaufsaktionen, die zur Rabattierung der Position geführt haben. Immer "NULL", wenn "&#64;CalculatePrices &lt; 2" ist !
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_generated_by_camp_ids = 10004;</code>
     */
    private $surcharge_generated_by_camp_ids = null;
    /**
     * <pre>
     * Die zu den Eigenschaften "YAxisValues" korrespondierenden "ValueID"s (ebenfalls durch '¶' getrennt)
     * </pre>
     *
     * <code>.dstore.values.StringValue y_axis_value_ids = 10005;</code>
     */
    private $y_axis_value_ids = null;
    /**
     * <pre>
     * Zeitpunkt, zu dem der Besucher "&#64;UniqueID" das Element "ProductTreeNodeID" bzw. "VariantTreeNodeID" in den Warenkorb gelegt hat. Gibt es mehrere Varianten zur "ProductTreeNodeID" ist dieser Wert für alle Varianten gleich (der kleinste aller Varianten).
     * </pre>
     *
     * <code>.dstore.values.TimestampValue input_date_and_time = 10006;</code>
     */
    private $input_date_and_time = null;
    /**
     * <pre>
     * Netto-Verkaufspreis (für das Produkt "ProductTreeNodeID" bzw. für die Produkt-Variante "VariantTreeNodeID") pro Stück in der vom Besucher "&#64;UniqueID" bevorzugten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue unit_netto_price = 10007;</code>
     */
    private $unit_netto_price = null;
    /**
     * <pre>
     * Absoluter Netto-Rabatt (negativer Wert) bzw. -Aufschlag (positiver Wert) pro Stück. Entspricht also "UnitNettoPrice * RelativeSurcharge / 100". Falls KEINE "&#64;PersonID" angegeben wurde, steht hier immer "0" (bzw. "NULL") !
     * </pre>
     *
     * <code>.dstore.values.DecimalValue absolute_unit_netto_surcharge = 10008;</code>
     */
    private $absolute_unit_netto_surcharge = null;
    /**
     * <pre>
     * Anzahl des Produktes "ProductTreeNodeID" bzw. der Produkt-Variante "VariantTreeNodeID", die der Besucher "&#64;UniqueID" in seinen "Warenkorb gelegt" hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue quantity = 10009;</code>
     */
    private $quantity = null;
    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) der Währung, die der Besucher "&#64;UniqueID" bevorzugt und in der die Werte "UnitNettoPrice" usw. angegeben sind
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_symbol = 10010;</code>
     */
    private $unit_symbol = null;
    /**
     * <pre>
     * "&lt;&gt; 0", wenn "&#64;HTreeNodeID" entfernt wurde:* 1: Allg. Grund* 2: Keine aktive "Campaign" zur "BonusItemForItemSetID"* 3: Bonus Art. erfüllt keine der Bedingungen* 4: Zu viele Bonus Art. aus einem Set* 5: Komb. von Bon-Art. unters. Sets nicht möglich
     * </pre>
     *
     * <code>.dstore.values.IntegerValue removed = 10011;</code>
     */
    private $removed = null;
    /**
     * <pre>
     * Brutto-Verkaufspreis (für das Produkt "ProductTreeNodeID" bzw. für die Produkt-Variante "VariantTreeNodeID") pro Stück in der vom Besucher "&#64;UniqueID" bevorzugten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue unit_brutto_price = 10012;</code>
     */
    private $unit_brutto_price = null;
    /**
     * <pre>
     * Eigenschaften (durch '¶' getrennt) von "VariantTreeNodeID" zu den "Varianten-Merkmalen" (bis auf das letzte Merkmal, siehe "XAxisValue"), die als Eigenschaft zur Merkmal-ID "17" zum Element "ProductTreeNodeID" hinterlegt sind
     * </pre>
     *
     * <code>.dstore.values.StringValue y_axis_values = 10013;</code>
     */
    private $y_axis_values = null;
    /**
     * <pre>
     * "Grund" für einen evtl. vorhandenen Rabatt (z.B. ein "Aktionsname", der letztlich von der individuellen Rabatt-Ermittlung durch "_ac_om_GetSurcharges" stammt). Immer "NULL", wenn "&#64;CalculatePrices &lt; 2" ist !
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_reason = 10014;</code>
     */
    private $surcharge_reason = null;
    /**
     * <pre>
     * Eigenschaft von "VariantTreeNodeID" zum letzten "Varianten-Merkmal" der Merkmale, die als Eigenschaft zur Merkmal-ID "17" zum Element "ProductTreeNodeID" hinterlegt sind
     * </pre>
     *
     * <code>.dstore.values.StringValue x_axis_value = 10015;</code>
     */
    private $x_axis_value = null;
    /**
     * <pre>
     * Absoluter Brutto-Rabatt (negativer Wert) bzw. -Aufschlag (positiver Wert) pro Stück. Entspricht also "UnitBruttoPrice * RelativeSurcharge / 100". Falls KEINE "&#64;PersonID" angegeben wurde, steht hier immer "0" (bzw. "NULL") !
     * </pre>
     *
     * <code>.dstore.values.DecimalValue absolute_unit_brutto_surcharge = 10016;</code>
     */
    private $absolute_unit_brutto_surcharge = null;
    /**
     * <pre>
     * Bezeichnung der "ProductTreeNodeID" in der Sprache, die der Besucher "&#64;UniqueID" bevorzugt (falls vorhanden steht hier evtl. die Eigenschaft zum Merkmal "Produktbezeichnung", s.a. "im_GetNodeDescriptions_Pu")
     * </pre>
     *
     * <code>.dstore.values.StringValue product_description = 10017;</code>
     */
    private $product_description = null;
    /**
     * <pre>
     * Die zur Eigenschaft "XAxisValue" korrespondierende "ValueID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue x_axis_value_id = 10018;</code>
     */
    private $x_axis_value_id = null;
    /**
     * <pre>
     * Relativer Rabatt/Aufschlag in Prozent. Ein negativer Wert bedeutet einen Rabatt, sonst beinhaltet der Verkaufspreis einen Aufschlag. Falls KEINE "&#64;PersonID" angegeben wurde, steht hier immer "0" (bzw. "NULL") !
     * </pre>
     *
     * <code>.dstore.values.DecimalValue relative_surcharge = 10019;</code>
     */
    private $relative_surcharge = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetTrolleyAsMatrixPu::initOnce();
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
     * ID eines Elementes im Artikelbaum, das eine Variante von "ProductTreeNodeID" darstellt. "NULL", falls "ProductTreeNodeID" keine Varianten hat oder die Variante mit den Eigenschaften "YAxisValues" und "XAxisValue" nicht existiert bzw. im Warenkorb liegt.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue variant_tree_node_id = 10001;</code>
     */
    public function getVariantTreeNodeId()
    {
        return $this->variant_tree_node_id;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum, das eine Variante von "ProductTreeNodeID" darstellt. "NULL", falls "ProductTreeNodeID" keine Varianten hat oder die Variante mit den Eigenschaften "YAxisValues" und "XAxisValue" nicht existiert bzw. im Warenkorb liegt.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue variant_tree_node_id = 10001;</code>
     */
    public function setVariantTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->variant_tree_node_id = $var;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum (aus dem Warenkorb des Besuchers "&#64;UniqueID"). Wichtiger Hinweis : siehe Beschreibung !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue product_tree_node_id = 10002;</code>
     */
    public function getProductTreeNodeId()
    {
        return $this->product_tree_node_id;
    }

    /**
     * <pre>
     * ID eines Elementes im Artikelbaum (aus dem Warenkorb des Besuchers "&#64;UniqueID"). Wichtiger Hinweis : siehe Beschreibung !
     * </pre>
     *
     * <code>.dstore.values.IntegerValue product_tree_node_id = 10002;</code>
     */
    public function setProductTreeNodeId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->product_tree_node_id = $var;
    }

    /**
     * <pre>
     * ID des Merkmals; die Eigenschaft von "NodeID" zu diesem Merkmal hat den Preis ("UnitNettoPrice") bestimmt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue price_node_characteristic_id = 10003;</code>
     */
    public function getPriceNodeCharacteristicId()
    {
        return $this->price_node_characteristic_id;
    }

    /**
     * <pre>
     * ID des Merkmals; die Eigenschaft von "NodeID" zu diesem Merkmal hat den Preis ("UnitNettoPrice") bestimmt
     * </pre>
     *
     * <code>.dstore.values.IntegerValue price_node_characteristic_id = 10003;</code>
     */
    public function setPriceNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->price_node_characteristic_id = $var;
    }

    /**
     * <pre>
     * Liste von "CampaignID"s der Verkaufsaktionen, die zur Rabattierung der Position geführt haben. Immer "NULL", wenn "&#64;CalculatePrices &lt; 2" ist !
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_generated_by_camp_ids = 10004;</code>
     */
    public function getSurchargeGeneratedByCampIds()
    {
        return $this->surcharge_generated_by_camp_ids;
    }

    /**
     * <pre>
     * Liste von "CampaignID"s der Verkaufsaktionen, die zur Rabattierung der Position geführt haben. Immer "NULL", wenn "&#64;CalculatePrices &lt; 2" ist !
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_generated_by_camp_ids = 10004;</code>
     */
    public function setSurchargeGeneratedByCampIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->surcharge_generated_by_camp_ids = $var;
    }

    /**
     * <pre>
     * Die zu den Eigenschaften "YAxisValues" korrespondierenden "ValueID"s (ebenfalls durch '¶' getrennt)
     * </pre>
     *
     * <code>.dstore.values.StringValue y_axis_value_ids = 10005;</code>
     */
    public function getYAxisValueIds()
    {
        return $this->y_axis_value_ids;
    }

    /**
     * <pre>
     * Die zu den Eigenschaften "YAxisValues" korrespondierenden "ValueID"s (ebenfalls durch '¶' getrennt)
     * </pre>
     *
     * <code>.dstore.values.StringValue y_axis_value_ids = 10005;</code>
     */
    public function setYAxisValueIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->y_axis_value_ids = $var;
    }

    /**
     * <pre>
     * Zeitpunkt, zu dem der Besucher "&#64;UniqueID" das Element "ProductTreeNodeID" bzw. "VariantTreeNodeID" in den Warenkorb gelegt hat. Gibt es mehrere Varianten zur "ProductTreeNodeID" ist dieser Wert für alle Varianten gleich (der kleinste aller Varianten).
     * </pre>
     *
     * <code>.dstore.values.TimestampValue input_date_and_time = 10006;</code>
     */
    public function getInputDateAndTime()
    {
        return $this->input_date_and_time;
    }

    /**
     * <pre>
     * Zeitpunkt, zu dem der Besucher "&#64;UniqueID" das Element "ProductTreeNodeID" bzw. "VariantTreeNodeID" in den Warenkorb gelegt hat. Gibt es mehrere Varianten zur "ProductTreeNodeID" ist dieser Wert für alle Varianten gleich (der kleinste aller Varianten).
     * </pre>
     *
     * <code>.dstore.values.TimestampValue input_date_and_time = 10006;</code>
     */
    public function setInputDateAndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\TimestampValue::class);
        $this->input_date_and_time = $var;
    }

    /**
     * <pre>
     * Netto-Verkaufspreis (für das Produkt "ProductTreeNodeID" bzw. für die Produkt-Variante "VariantTreeNodeID") pro Stück in der vom Besucher "&#64;UniqueID" bevorzugten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue unit_netto_price = 10007;</code>
     */
    public function getUnitNettoPrice()
    {
        return $this->unit_netto_price;
    }

    /**
     * <pre>
     * Netto-Verkaufspreis (für das Produkt "ProductTreeNodeID" bzw. für die Produkt-Variante "VariantTreeNodeID") pro Stück in der vom Besucher "&#64;UniqueID" bevorzugten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue unit_netto_price = 10007;</code>
     */
    public function setUnitNettoPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->unit_netto_price = $var;
    }

    /**
     * <pre>
     * Absoluter Netto-Rabatt (negativer Wert) bzw. -Aufschlag (positiver Wert) pro Stück. Entspricht also "UnitNettoPrice * RelativeSurcharge / 100". Falls KEINE "&#64;PersonID" angegeben wurde, steht hier immer "0" (bzw. "NULL") !
     * </pre>
     *
     * <code>.dstore.values.DecimalValue absolute_unit_netto_surcharge = 10008;</code>
     */
    public function getAbsoluteUnitNettoSurcharge()
    {
        return $this->absolute_unit_netto_surcharge;
    }

    /**
     * <pre>
     * Absoluter Netto-Rabatt (negativer Wert) bzw. -Aufschlag (positiver Wert) pro Stück. Entspricht also "UnitNettoPrice * RelativeSurcharge / 100". Falls KEINE "&#64;PersonID" angegeben wurde, steht hier immer "0" (bzw. "NULL") !
     * </pre>
     *
     * <code>.dstore.values.DecimalValue absolute_unit_netto_surcharge = 10008;</code>
     */
    public function setAbsoluteUnitNettoSurcharge(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->absolute_unit_netto_surcharge = $var;
    }

    /**
     * <pre>
     * Anzahl des Produktes "ProductTreeNodeID" bzw. der Produkt-Variante "VariantTreeNodeID", die der Besucher "&#64;UniqueID" in seinen "Warenkorb gelegt" hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue quantity = 10009;</code>
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * <pre>
     * Anzahl des Produktes "ProductTreeNodeID" bzw. der Produkt-Variante "VariantTreeNodeID", die der Besucher "&#64;UniqueID" in seinen "Warenkorb gelegt" hat
     * </pre>
     *
     * <code>.dstore.values.IntegerValue quantity = 10009;</code>
     */
    public function setQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->quantity = $var;
    }

    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) der Währung, die der Besucher "&#64;UniqueID" bevorzugt und in der die Werte "UnitNettoPrice" usw. angegeben sind
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_symbol = 10010;</code>
     */
    public function getUnitSymbol()
    {
        return $this->unit_symbol;
    }

    /**
     * <pre>
     * Symbol (im Regelfall der ISO-Code) der Währung, die der Besucher "&#64;UniqueID" bevorzugt und in der die Werte "UnitNettoPrice" usw. angegeben sind
     * </pre>
     *
     * <code>.dstore.values.StringValue unit_symbol = 10010;</code>
     */
    public function setUnitSymbol(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->unit_symbol = $var;
    }

    /**
     * <pre>
     * "&lt;&gt; 0", wenn "&#64;HTreeNodeID" entfernt wurde:* 1: Allg. Grund* 2: Keine aktive "Campaign" zur "BonusItemForItemSetID"* 3: Bonus Art. erfüllt keine der Bedingungen* 4: Zu viele Bonus Art. aus einem Set* 5: Komb. von Bon-Art. unters. Sets nicht möglich
     * </pre>
     *
     * <code>.dstore.values.IntegerValue removed = 10011;</code>
     */
    public function getRemoved()
    {
        return $this->removed;
    }

    /**
     * <pre>
     * "&lt;&gt; 0", wenn "&#64;HTreeNodeID" entfernt wurde:* 1: Allg. Grund* 2: Keine aktive "Campaign" zur "BonusItemForItemSetID"* 3: Bonus Art. erfüllt keine der Bedingungen* 4: Zu viele Bonus Art. aus einem Set* 5: Komb. von Bon-Art. unters. Sets nicht möglich
     * </pre>
     *
     * <code>.dstore.values.IntegerValue removed = 10011;</code>
     */
    public function setRemoved(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->removed = $var;
    }

    /**
     * <pre>
     * Brutto-Verkaufspreis (für das Produkt "ProductTreeNodeID" bzw. für die Produkt-Variante "VariantTreeNodeID") pro Stück in der vom Besucher "&#64;UniqueID" bevorzugten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue unit_brutto_price = 10012;</code>
     */
    public function getUnitBruttoPrice()
    {
        return $this->unit_brutto_price;
    }

    /**
     * <pre>
     * Brutto-Verkaufspreis (für das Produkt "ProductTreeNodeID" bzw. für die Produkt-Variante "VariantTreeNodeID") pro Stück in der vom Besucher "&#64;UniqueID" bevorzugten Währung
     * </pre>
     *
     * <code>.dstore.values.DecimalValue unit_brutto_price = 10012;</code>
     */
    public function setUnitBruttoPrice(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->unit_brutto_price = $var;
    }

    /**
     * <pre>
     * Eigenschaften (durch '¶' getrennt) von "VariantTreeNodeID" zu den "Varianten-Merkmalen" (bis auf das letzte Merkmal, siehe "XAxisValue"), die als Eigenschaft zur Merkmal-ID "17" zum Element "ProductTreeNodeID" hinterlegt sind
     * </pre>
     *
     * <code>.dstore.values.StringValue y_axis_values = 10013;</code>
     */
    public function getYAxisValues()
    {
        return $this->y_axis_values;
    }

    /**
     * <pre>
     * Eigenschaften (durch '¶' getrennt) von "VariantTreeNodeID" zu den "Varianten-Merkmalen" (bis auf das letzte Merkmal, siehe "XAxisValue"), die als Eigenschaft zur Merkmal-ID "17" zum Element "ProductTreeNodeID" hinterlegt sind
     * </pre>
     *
     * <code>.dstore.values.StringValue y_axis_values = 10013;</code>
     */
    public function setYAxisValues(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->y_axis_values = $var;
    }

    /**
     * <pre>
     * "Grund" für einen evtl. vorhandenen Rabatt (z.B. ein "Aktionsname", der letztlich von der individuellen Rabatt-Ermittlung durch "_ac_om_GetSurcharges" stammt). Immer "NULL", wenn "&#64;CalculatePrices &lt; 2" ist !
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_reason = 10014;</code>
     */
    public function getSurchargeReason()
    {
        return $this->surcharge_reason;
    }

    /**
     * <pre>
     * "Grund" für einen evtl. vorhandenen Rabatt (z.B. ein "Aktionsname", der letztlich von der individuellen Rabatt-Ermittlung durch "_ac_om_GetSurcharges" stammt). Immer "NULL", wenn "&#64;CalculatePrices &lt; 2" ist !
     * </pre>
     *
     * <code>.dstore.values.StringValue surcharge_reason = 10014;</code>
     */
    public function setSurchargeReason(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->surcharge_reason = $var;
    }

    /**
     * <pre>
     * Eigenschaft von "VariantTreeNodeID" zum letzten "Varianten-Merkmal" der Merkmale, die als Eigenschaft zur Merkmal-ID "17" zum Element "ProductTreeNodeID" hinterlegt sind
     * </pre>
     *
     * <code>.dstore.values.StringValue x_axis_value = 10015;</code>
     */
    public function getXAxisValue()
    {
        return $this->x_axis_value;
    }

    /**
     * <pre>
     * Eigenschaft von "VariantTreeNodeID" zum letzten "Varianten-Merkmal" der Merkmale, die als Eigenschaft zur Merkmal-ID "17" zum Element "ProductTreeNodeID" hinterlegt sind
     * </pre>
     *
     * <code>.dstore.values.StringValue x_axis_value = 10015;</code>
     */
    public function setXAxisValue(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->x_axis_value = $var;
    }

    /**
     * <pre>
     * Absoluter Brutto-Rabatt (negativer Wert) bzw. -Aufschlag (positiver Wert) pro Stück. Entspricht also "UnitBruttoPrice * RelativeSurcharge / 100". Falls KEINE "&#64;PersonID" angegeben wurde, steht hier immer "0" (bzw. "NULL") !
     * </pre>
     *
     * <code>.dstore.values.DecimalValue absolute_unit_brutto_surcharge = 10016;</code>
     */
    public function getAbsoluteUnitBruttoSurcharge()
    {
        return $this->absolute_unit_brutto_surcharge;
    }

    /**
     * <pre>
     * Absoluter Brutto-Rabatt (negativer Wert) bzw. -Aufschlag (positiver Wert) pro Stück. Entspricht also "UnitBruttoPrice * RelativeSurcharge / 100". Falls KEINE "&#64;PersonID" angegeben wurde, steht hier immer "0" (bzw. "NULL") !
     * </pre>
     *
     * <code>.dstore.values.DecimalValue absolute_unit_brutto_surcharge = 10016;</code>
     */
    public function setAbsoluteUnitBruttoSurcharge(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->absolute_unit_brutto_surcharge = $var;
    }

    /**
     * <pre>
     * Bezeichnung der "ProductTreeNodeID" in der Sprache, die der Besucher "&#64;UniqueID" bevorzugt (falls vorhanden steht hier evtl. die Eigenschaft zum Merkmal "Produktbezeichnung", s.a. "im_GetNodeDescriptions_Pu")
     * </pre>
     *
     * <code>.dstore.values.StringValue product_description = 10017;</code>
     */
    public function getProductDescription()
    {
        return $this->product_description;
    }

    /**
     * <pre>
     * Bezeichnung der "ProductTreeNodeID" in der Sprache, die der Besucher "&#64;UniqueID" bevorzugt (falls vorhanden steht hier evtl. die Eigenschaft zum Merkmal "Produktbezeichnung", s.a. "im_GetNodeDescriptions_Pu")
     * </pre>
     *
     * <code>.dstore.values.StringValue product_description = 10017;</code>
     */
    public function setProductDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->product_description = $var;
    }

    /**
     * <pre>
     * Die zur Eigenschaft "XAxisValue" korrespondierende "ValueID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue x_axis_value_id = 10018;</code>
     */
    public function getXAxisValueId()
    {
        return $this->x_axis_value_id;
    }

    /**
     * <pre>
     * Die zur Eigenschaft "XAxisValue" korrespondierende "ValueID"
     * </pre>
     *
     * <code>.dstore.values.IntegerValue x_axis_value_id = 10018;</code>
     */
    public function setXAxisValueId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->x_axis_value_id = $var;
    }

    /**
     * <pre>
     * Relativer Rabatt/Aufschlag in Prozent. Ein negativer Wert bedeutet einen Rabatt, sonst beinhaltet der Verkaufspreis einen Aufschlag. Falls KEINE "&#64;PersonID" angegeben wurde, steht hier immer "0" (bzw. "NULL") !
     * </pre>
     *
     * <code>.dstore.values.DecimalValue relative_surcharge = 10019;</code>
     */
    public function getRelativeSurcharge()
    {
        return $this->relative_surcharge;
    }

    /**
     * <pre>
     * Relativer Rabatt/Aufschlag in Prozent. Ein negativer Wert bedeutet einen Rabatt, sonst beinhaltet der Verkaufspreis einen Aufschlag. Falls KEINE "&#64;PersonID" angegeben wurde, steht hier immer "0" (bzw. "NULL") !
     * </pre>
     *
     * <code>.dstore.values.DecimalValue relative_surcharge = 10019;</code>
     */
    public function setRelativeSurcharge(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\DecimalValue::class);
        $this->relative_surcharge = $var;
    }

}

