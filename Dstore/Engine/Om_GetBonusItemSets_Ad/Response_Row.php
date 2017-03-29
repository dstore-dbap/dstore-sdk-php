<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_GetBonusItemSets_Ad.proto

namespace Dstore\Engine\Om_GetBonusItemSets_Ad;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>dstore.engine.om_GetBonusItemSets_Ad.Response.Row</code>
 */
class Response_Row extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>int32 row_id = 10000;</code>
     */
    private $row_id = 0;
    /**
     * <pre>
     * Bestimmt die Reihenfolge von "ItemConditionGroupID" innerhalb aller der Artikel-Bedingung "ItemConditionID" zugeordneten Bedingungs-Gruppen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_group_sort_no = 10001;</code>
     */
    private $item_group_sort_no = null;
    /**
     * <pre>
     * Operator für die Bedingung "Condition1"
     * </pre>
     *
     * <code>.dstore.values.StringValue operator1 = 10002;</code>
     */
    private $operator1 = null;
    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator1" anzuwenden ist ("NULL", falls "Operator1" den Wert "E" oder "!E" hat)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition1 = 10003;</code>
     */
    private $condition1 = null;
    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator2" anzuwenden ist (nur belegt, wenn "Operator2" den Wert "&lt;" oder "&lt;=" enthält)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition2 = 10004;</code>
     */
    private $condition2 = null;
    /**
     * <pre>
     * Operator für die Bedingung "Condition2". Sonderfall : falls "Operator1" "IN" oder "!I" enthält, steht hier das Trennzeichen für die in "Condition1" angegebene Werte-Menge.
     * </pre>
     *
     * <code>.dstore.values.StringValue operator2 = 10005;</code>
     */
    private $operator2 = null;
    /**
     * <pre>
     * Bezeichnung der Bedingungs-Gruppe "ItemConditionGroupID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_group_description = 10006;</code>
     */
    private $item_condition_group_description = null;
    /**
     * <pre>
     * Gibt an, ob die der "ItemConditionGroupID" zugeordneten Bedingungs-Teile logisch mit UND verknüpft werden ("1") oder mit ODER ("0")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue combine_parts_with_a_n_d_operator = 10007;</code>
     */
    private $combine_parts_with_a_n_d_operator = null;
    /**
     * <pre>
     * Was soll zwecks Prüfung der Bedingung zu "NodeCharacteristicID" (wenn rekursiv) gewählt werden ?"0" : direkte Eigenschaft (also eine Merkmal-ID)"1" : rekursiv ausgewertete Eigenschaft"2" : zugehör. Beschreibung der Eigenschaft (also der Merkmal-ID)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue recursive_evaluation = 10008;</code>
     */
    private $recursive_evaluation = null;
    /**
     * <pre>
     * Bestimmt die Reihenfolge von "ItemConditionPartID" innerhalb aller der Bedingungs-Gruppe "ItemConditionGroupID" zugeordneten Bedingungs-Teile
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_part_sort_no = 10009;</code>
     */
    private $item_part_sort_no = null;
    /**
     * <pre>
     * ID eines Bonus-Artikel-Sets - natürlich identisch mit "&#64;ItemSetID" wenn angegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_set_id = 10010;</code>
     */
    private $item_set_id = null;
    /**
     * <pre>
     * Um "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum ein Vorgänger-Element besitzen, dessen "TreeNodeID" aus der hier angegebenen Menge von IDs kommt. Sonderfall ",," bedeutet "beliebiger Vorgänger".
     * </pre>
     *
     * <code>.dstore.values.StringValue domain_tree_node_ids = 10011;</code>
     */
    private $domain_tree_node_ids = null;
    /**
     * <pre>
     * Um "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum eine Eigenschaft zu diesem Merkmal besitzen, die der durch "Operator1" bis "Condition2" formulierten Bedingung genügt. Sonderfall "-1" : "KEINE Eigenschafts-Bedingung" (immer erfüllt).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10012;</code>
     */
    private $node_characteristic_id = null;
    /**
     * <pre>
     * ID eines Bedingungs-Teils, das Bestandteil von "ItemConditionGroupID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_part_id = 10013;</code>
     */
    private $item_condition_part_id = null;
    /**
     * <pre>
     * ID der Artikel-Bedingung, die das Set "ItemSetID" definiert (die genaue Definition ergibt sich durch die Rückgabespalten "CombineGroupsWithANDOperator" bis "RecursiveEvaluation")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_id = 10014;</code>
     */
    private $item_condition_id = null;
    /**
     * <pre>
     * Gibt an, ob die Bedingungs-Gruppen, die der Bedingung "ItemConditionID" zugeordnet sind, mit "UND" ("1") oder "ODER" ("0") verknüpft sind
     * </pre>
     *
     * <code>.dstore.values.BooleanValue combine_groups_with_a_n_d_operator = 10015;</code>
     */
    private $combine_groups_with_a_n_d_operator = null;
    /**
     * <pre>
     * Bezeichnung des Bedingungs-Teils "ItemConditionPartID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_part_description = 10016;</code>
     */
    private $item_condition_part_description = null;
    /**
     * <pre>
     * Um "ItemConditionPartID" zu erfüllen, muß die Hierarchie ("LevelID") eines Artikel-Elementes aus der hier angegebenen Menge der Hierarchien ("LevelID"s) kommen. Sonderfall ",," bedeutet "beliebige Hierarchie".
     * </pre>
     *
     * <code>.dstore.values.StringValue level_ids = 10017;</code>
     */
    private $level_ids = null;
    /**
     * <pre>
     * ID einer Bedingungs-Gruppe, die Bestandteil von "ItemConditionID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_group_id = 10018;</code>
     */
    private $item_condition_group_id = null;
    /**
     * <pre>
     * Wieviele Artikel der Kunde maximal aus dem Set auswählen darf, die er kostenlos erhält (sofern die Bedingungen der Verkaufs-Aktion erfüllt sind)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue max_quantity = 10019;</code>
     */
    private $max_quantity = null;
    /**
     * <pre>
     * Bezeichnung der Artikel-Bedingung "ItemConditionID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_description = 10020;</code>
     */
    private $item_condition_description = null;
    /**
     * <pre>
     * Welche Eigenschaften zu "NodeCharacteristicID" hinsichtlich Vererbung sollen bei Prüfung der Eigenschafts-Bedingung beachtet werden :"-1" : Alle"0" : unvererbte"1" : direkte u. einfach geerbte"2" : direkte u. einfach oder zweifach geerbteusw.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue inherit_depth = 10021;</code>
     */
    private $inherit_depth = null;

    public function __construct() {
        \GPBMetadata\Dstore\Engine\Procedures\OmGetBonusItemSetsAd::initOnce();
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
     * Bestimmt die Reihenfolge von "ItemConditionGroupID" innerhalb aller der Artikel-Bedingung "ItemConditionID" zugeordneten Bedingungs-Gruppen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_group_sort_no = 10001;</code>
     */
    public function getItemGroupSortNo()
    {
        return $this->item_group_sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "ItemConditionGroupID" innerhalb aller der Artikel-Bedingung "ItemConditionID" zugeordneten Bedingungs-Gruppen
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_group_sort_no = 10001;</code>
     */
    public function setItemGroupSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_group_sort_no = $var;
    }

    /**
     * <pre>
     * Operator für die Bedingung "Condition1"
     * </pre>
     *
     * <code>.dstore.values.StringValue operator1 = 10002;</code>
     */
    public function getOperator1()
    {
        return $this->operator1;
    }

    /**
     * <pre>
     * Operator für die Bedingung "Condition1"
     * </pre>
     *
     * <code>.dstore.values.StringValue operator1 = 10002;</code>
     */
    public function setOperator1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->operator1 = $var;
    }

    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator1" anzuwenden ist ("NULL", falls "Operator1" den Wert "E" oder "!E" hat)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition1 = 10003;</code>
     */
    public function getCondition1()
    {
        return $this->condition1;
    }

    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator1" anzuwenden ist ("NULL", falls "Operator1" den Wert "E" oder "!E" hat)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition1 = 10003;</code>
     */
    public function setCondition1(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition1 = $var;
    }

    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator2" anzuwenden ist (nur belegt, wenn "Operator2" den Wert "&lt;" oder "&lt;=" enthält)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition2 = 10004;</code>
     */
    public function getCondition2()
    {
        return $this->condition2;
    }

    /**
     * <pre>
     * Bedingung, die in Verbindung mit "Operator2" anzuwenden ist (nur belegt, wenn "Operator2" den Wert "&lt;" oder "&lt;=" enthält)
     * </pre>
     *
     * <code>.dstore.values.StringValue condition2 = 10004;</code>
     */
    public function setCondition2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->condition2 = $var;
    }

    /**
     * <pre>
     * Operator für die Bedingung "Condition2". Sonderfall : falls "Operator1" "IN" oder "!I" enthält, steht hier das Trennzeichen für die in "Condition1" angegebene Werte-Menge.
     * </pre>
     *
     * <code>.dstore.values.StringValue operator2 = 10005;</code>
     */
    public function getOperator2()
    {
        return $this->operator2;
    }

    /**
     * <pre>
     * Operator für die Bedingung "Condition2". Sonderfall : falls "Operator1" "IN" oder "!I" enthält, steht hier das Trennzeichen für die in "Condition1" angegebene Werte-Menge.
     * </pre>
     *
     * <code>.dstore.values.StringValue operator2 = 10005;</code>
     */
    public function setOperator2(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->operator2 = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Bedingungs-Gruppe "ItemConditionGroupID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_group_description = 10006;</code>
     */
    public function getItemConditionGroupDescription()
    {
        return $this->item_condition_group_description;
    }

    /**
     * <pre>
     * Bezeichnung der Bedingungs-Gruppe "ItemConditionGroupID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_group_description = 10006;</code>
     */
    public function setItemConditionGroupDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->item_condition_group_description = $var;
    }

    /**
     * <pre>
     * Gibt an, ob die der "ItemConditionGroupID" zugeordneten Bedingungs-Teile logisch mit UND verknüpft werden ("1") oder mit ODER ("0")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue combine_parts_with_a_n_d_operator = 10007;</code>
     */
    public function getCombinePartsWithANDOperator()
    {
        return $this->combine_parts_with_a_n_d_operator;
    }

    /**
     * <pre>
     * Gibt an, ob die der "ItemConditionGroupID" zugeordneten Bedingungs-Teile logisch mit UND verknüpft werden ("1") oder mit ODER ("0")
     * </pre>
     *
     * <code>.dstore.values.BooleanValue combine_parts_with_a_n_d_operator = 10007;</code>
     */
    public function setCombinePartsWithANDOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->combine_parts_with_a_n_d_operator = $var;
    }

    /**
     * <pre>
     * Was soll zwecks Prüfung der Bedingung zu "NodeCharacteristicID" (wenn rekursiv) gewählt werden ?"0" : direkte Eigenschaft (also eine Merkmal-ID)"1" : rekursiv ausgewertete Eigenschaft"2" : zugehör. Beschreibung der Eigenschaft (also der Merkmal-ID)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue recursive_evaluation = 10008;</code>
     */
    public function getRecursiveEvaluation()
    {
        return $this->recursive_evaluation;
    }

    /**
     * <pre>
     * Was soll zwecks Prüfung der Bedingung zu "NodeCharacteristicID" (wenn rekursiv) gewählt werden ?"0" : direkte Eigenschaft (also eine Merkmal-ID)"1" : rekursiv ausgewertete Eigenschaft"2" : zugehör. Beschreibung der Eigenschaft (also der Merkmal-ID)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue recursive_evaluation = 10008;</code>
     */
    public function setRecursiveEvaluation(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->recursive_evaluation = $var;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "ItemConditionPartID" innerhalb aller der Bedingungs-Gruppe "ItemConditionGroupID" zugeordneten Bedingungs-Teile
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_part_sort_no = 10009;</code>
     */
    public function getItemPartSortNo()
    {
        return $this->item_part_sort_no;
    }

    /**
     * <pre>
     * Bestimmt die Reihenfolge von "ItemConditionPartID" innerhalb aller der Bedingungs-Gruppe "ItemConditionGroupID" zugeordneten Bedingungs-Teile
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_part_sort_no = 10009;</code>
     */
    public function setItemPartSortNo(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_part_sort_no = $var;
    }

    /**
     * <pre>
     * ID eines Bonus-Artikel-Sets - natürlich identisch mit "&#64;ItemSetID" wenn angegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_set_id = 10010;</code>
     */
    public function getItemSetId()
    {
        return $this->item_set_id;
    }

    /**
     * <pre>
     * ID eines Bonus-Artikel-Sets - natürlich identisch mit "&#64;ItemSetID" wenn angegeben
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_set_id = 10010;</code>
     */
    public function setItemSetId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_set_id = $var;
    }

    /**
     * <pre>
     * Um "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum ein Vorgänger-Element besitzen, dessen "TreeNodeID" aus der hier angegebenen Menge von IDs kommt. Sonderfall ",," bedeutet "beliebiger Vorgänger".
     * </pre>
     *
     * <code>.dstore.values.StringValue domain_tree_node_ids = 10011;</code>
     */
    public function getDomainTreeNodeIds()
    {
        return $this->domain_tree_node_ids;
    }

    /**
     * <pre>
     * Um "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum ein Vorgänger-Element besitzen, dessen "TreeNodeID" aus der hier angegebenen Menge von IDs kommt. Sonderfall ",," bedeutet "beliebiger Vorgänger".
     * </pre>
     *
     * <code>.dstore.values.StringValue domain_tree_node_ids = 10011;</code>
     */
    public function setDomainTreeNodeIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->domain_tree_node_ids = $var;
    }

    /**
     * <pre>
     * Um "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum eine Eigenschaft zu diesem Merkmal besitzen, die der durch "Operator1" bis "Condition2" formulierten Bedingung genügt. Sonderfall "-1" : "KEINE Eigenschafts-Bedingung" (immer erfüllt).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10012;</code>
     */
    public function getNodeCharacteristicId()
    {
        return $this->node_characteristic_id;
    }

    /**
     * <pre>
     * Um "ItemConditionPartID" zu erfüllen, muß ein Element im Artikelbaum eine Eigenschaft zu diesem Merkmal besitzen, die der durch "Operator1" bis "Condition2" formulierten Bedingung genügt. Sonderfall "-1" : "KEINE Eigenschafts-Bedingung" (immer erfüllt).
     * </pre>
     *
     * <code>.dstore.values.IntegerValue node_characteristic_id = 10012;</code>
     */
    public function setNodeCharacteristicId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->node_characteristic_id = $var;
    }

    /**
     * <pre>
     * ID eines Bedingungs-Teils, das Bestandteil von "ItemConditionGroupID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_part_id = 10013;</code>
     */
    public function getItemConditionPartId()
    {
        return $this->item_condition_part_id;
    }

    /**
     * <pre>
     * ID eines Bedingungs-Teils, das Bestandteil von "ItemConditionGroupID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_part_id = 10013;</code>
     */
    public function setItemConditionPartId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_condition_part_id = $var;
    }

    /**
     * <pre>
     * ID der Artikel-Bedingung, die das Set "ItemSetID" definiert (die genaue Definition ergibt sich durch die Rückgabespalten "CombineGroupsWithANDOperator" bis "RecursiveEvaluation")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_id = 10014;</code>
     */
    public function getItemConditionId()
    {
        return $this->item_condition_id;
    }

    /**
     * <pre>
     * ID der Artikel-Bedingung, die das Set "ItemSetID" definiert (die genaue Definition ergibt sich durch die Rückgabespalten "CombineGroupsWithANDOperator" bis "RecursiveEvaluation")
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_id = 10014;</code>
     */
    public function setItemConditionId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_condition_id = $var;
    }

    /**
     * <pre>
     * Gibt an, ob die Bedingungs-Gruppen, die der Bedingung "ItemConditionID" zugeordnet sind, mit "UND" ("1") oder "ODER" ("0") verknüpft sind
     * </pre>
     *
     * <code>.dstore.values.BooleanValue combine_groups_with_a_n_d_operator = 10015;</code>
     */
    public function getCombineGroupsWithANDOperator()
    {
        return $this->combine_groups_with_a_n_d_operator;
    }

    /**
     * <pre>
     * Gibt an, ob die Bedingungs-Gruppen, die der Bedingung "ItemConditionID" zugeordnet sind, mit "UND" ("1") oder "ODER" ("0") verknüpft sind
     * </pre>
     *
     * <code>.dstore.values.BooleanValue combine_groups_with_a_n_d_operator = 10015;</code>
     */
    public function setCombineGroupsWithANDOperator(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\BooleanValue::class);
        $this->combine_groups_with_a_n_d_operator = $var;
    }

    /**
     * <pre>
     * Bezeichnung des Bedingungs-Teils "ItemConditionPartID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_part_description = 10016;</code>
     */
    public function getItemConditionPartDescription()
    {
        return $this->item_condition_part_description;
    }

    /**
     * <pre>
     * Bezeichnung des Bedingungs-Teils "ItemConditionPartID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_part_description = 10016;</code>
     */
    public function setItemConditionPartDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->item_condition_part_description = $var;
    }

    /**
     * <pre>
     * Um "ItemConditionPartID" zu erfüllen, muß die Hierarchie ("LevelID") eines Artikel-Elementes aus der hier angegebenen Menge der Hierarchien ("LevelID"s) kommen. Sonderfall ",," bedeutet "beliebige Hierarchie".
     * </pre>
     *
     * <code>.dstore.values.StringValue level_ids = 10017;</code>
     */
    public function getLevelIds()
    {
        return $this->level_ids;
    }

    /**
     * <pre>
     * Um "ItemConditionPartID" zu erfüllen, muß die Hierarchie ("LevelID") eines Artikel-Elementes aus der hier angegebenen Menge der Hierarchien ("LevelID"s) kommen. Sonderfall ",," bedeutet "beliebige Hierarchie".
     * </pre>
     *
     * <code>.dstore.values.StringValue level_ids = 10017;</code>
     */
    public function setLevelIds(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->level_ids = $var;
    }

    /**
     * <pre>
     * ID einer Bedingungs-Gruppe, die Bestandteil von "ItemConditionID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_group_id = 10018;</code>
     */
    public function getItemConditionGroupId()
    {
        return $this->item_condition_group_id;
    }

    /**
     * <pre>
     * ID einer Bedingungs-Gruppe, die Bestandteil von "ItemConditionID" ist
     * </pre>
     *
     * <code>.dstore.values.IntegerValue item_condition_group_id = 10018;</code>
     */
    public function setItemConditionGroupId(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->item_condition_group_id = $var;
    }

    /**
     * <pre>
     * Wieviele Artikel der Kunde maximal aus dem Set auswählen darf, die er kostenlos erhält (sofern die Bedingungen der Verkaufs-Aktion erfüllt sind)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue max_quantity = 10019;</code>
     */
    public function getMaxQuantity()
    {
        return $this->max_quantity;
    }

    /**
     * <pre>
     * Wieviele Artikel der Kunde maximal aus dem Set auswählen darf, die er kostenlos erhält (sofern die Bedingungen der Verkaufs-Aktion erfüllt sind)
     * </pre>
     *
     * <code>.dstore.values.IntegerValue max_quantity = 10019;</code>
     */
    public function setMaxQuantity(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->max_quantity = $var;
    }

    /**
     * <pre>
     * Bezeichnung der Artikel-Bedingung "ItemConditionID"
     * </pre>
     *
     * <code>.dstore.values.StringValue item_condition_description = 10020;</code>
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
     * <code>.dstore.values.StringValue item_condition_description = 10020;</code>
     */
    public function setItemConditionDescription(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\StringValue::class);
        $this->item_condition_description = $var;
    }

    /**
     * <pre>
     * Welche Eigenschaften zu "NodeCharacteristicID" hinsichtlich Vererbung sollen bei Prüfung der Eigenschafts-Bedingung beachtet werden :"-1" : Alle"0" : unvererbte"1" : direkte u. einfach geerbte"2" : direkte u. einfach oder zweifach geerbteusw.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue inherit_depth = 10021;</code>
     */
    public function getInheritDepth()
    {
        return $this->inherit_depth;
    }

    /**
     * <pre>
     * Welche Eigenschaften zu "NodeCharacteristicID" hinsichtlich Vererbung sollen bei Prüfung der Eigenschafts-Bedingung beachtet werden :"-1" : Alle"0" : unvererbte"1" : direkte u. einfach geerbte"2" : direkte u. einfach oder zweifach geerbteusw.
     * </pre>
     *
     * <code>.dstore.values.IntegerValue inherit_depth = 10021;</code>
     */
    public function setInheritDepth(&$var)
    {
        GPBUtil::checkMessage($var, \Dstore\Values\IntegerValue::class);
        $this->inherit_depth = $var;
    }

}

