<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/om_GetTrolleyAsMatrix_Pu.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\om_GetTrolleyAsMatrix_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $unique_id = null;
    
    /**  @var boolean */
    public $unique_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $person_id = null;
    
    /**  @var boolean */
    public $person_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $calculate_prices = null;
    
    /**  @var boolean */
    public $calculate_prices_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $check_availability = null;
    
    /**  @var boolean */
    public $check_availability_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $price_node_characteristic_id = null;
    
    /**  @var boolean */
    public $price_node_characteristic_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $repair_entries_with_same_node_id = null;
    
    /**  @var boolean */
    public $repair_entries_with_same_node_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $delivery_person_id = null;
    
    /**  @var boolean */
    public $delivery_person_id_null = null;
    
    /**  @var \dstore\engine\values\booleanValue */
    public $output_into_trolley_surch_interf = null;
    
    /**  @var boolean */
    public $output_into_trolley_surch_interf_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $payment_type_id = null;
    
    /**  @var boolean */
    public $payment_type_id_null = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $shipping_type_id = null;
    
    /**  @var boolean */
    public $shipping_type_id_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.om_GetTrolleyAsMatrix_Pu.Parameters');

      // OPTIONAL MESSAGE unique_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "unique_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL unique_id_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "unique_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE person_id = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL person_id_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE calculate_prices = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "calculate_prices";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL calculate_prices_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "calculate_prices_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE check_availability = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "check_availability";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL check_availability_null = 1004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1004;
      $f->name      = "check_availability_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE price_node_characteristic_id = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "price_node_characteristic_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL price_node_characteristic_id_null = 1005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1005;
      $f->name      = "price_node_characteristic_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE repair_entries_with_same_node_id = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "repair_entries_with_same_node_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL repair_entries_with_same_node_id_null = 1006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1006;
      $f->name      = "repair_entries_with_same_node_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE delivery_person_id = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "delivery_person_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL delivery_person_id_null = 1007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1007;
      $f->name      = "delivery_person_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE output_into_trolley_surch_interf = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "output_into_trolley_surch_interf";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL output_into_trolley_surch_interf_null = 1008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1008;
      $f->name      = "output_into_trolley_surch_interf_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE payment_type_id = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "payment_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL payment_type_id_null = 1009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1009;
      $f->name      = "payment_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE shipping_type_id = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "shipping_type_id";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL shipping_type_id_null = 1010
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1010;
      $f->name      = "shipping_type_id_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <unique_id> has a value
     *
     * @return boolean
     */
    public function hasUniqueId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <unique_id> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearUniqueId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <unique_id> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getUniqueId(){
      return $this->_get(1);
    }
    
    /**
     * Set <unique_id> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setUniqueId(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <unique_id_null> has a value
     *
     * @return boolean
     */
    public function hasUniqueIdNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <unique_id_null> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearUniqueIdNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <unique_id_null> value
     *
     * @return boolean
     */
    public function getUniqueIdNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <unique_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setUniqueIdNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <person_id> has a value
     *
     * @return boolean
     */
    public function hasPersonId(){
      return $this->_has(2);
    }
    
    /**
     * Clear <person_id> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearPersonId(){
      return $this->_clear(2);
    }
    
    /**
     * Get <person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPersonId(){
      return $this->_get(2);
    }
    
    /**
     * Set <person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <person_id_null> has a value
     *
     * @return boolean
     */
    public function hasPersonIdNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <person_id_null> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearPersonIdNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <person_id_null> value
     *
     * @return boolean
     */
    public function getPersonIdNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setPersonIdNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <calculate_prices> has a value
     *
     * @return boolean
     */
    public function hasCalculatePrices(){
      return $this->_has(3);
    }
    
    /**
     * Clear <calculate_prices> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearCalculatePrices(){
      return $this->_clear(3);
    }
    
    /**
     * Get <calculate_prices> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCalculatePrices(){
      return $this->_get(3);
    }
    
    /**
     * Set <calculate_prices> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setCalculatePrices(\dstore\engine\values\integerValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <calculate_prices_null> has a value
     *
     * @return boolean
     */
    public function hasCalculatePricesNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <calculate_prices_null> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearCalculatePricesNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <calculate_prices_null> value
     *
     * @return boolean
     */
    public function getCalculatePricesNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <calculate_prices_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setCalculatePricesNull( $value){
      return $this->_set(1003, $value);
    }
    
    /**
     * Check if <check_availability> has a value
     *
     * @return boolean
     */
    public function hasCheckAvailability(){
      return $this->_has(4);
    }
    
    /**
     * Clear <check_availability> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearCheckAvailability(){
      return $this->_clear(4);
    }
    
    /**
     * Get <check_availability> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getCheckAvailability(){
      return $this->_get(4);
    }
    
    /**
     * Set <check_availability> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setCheckAvailability(\dstore\engine\values\booleanValue $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <check_availability_null> has a value
     *
     * @return boolean
     */
    public function hasCheckAvailabilityNull(){
      return $this->_has(1004);
    }
    
    /**
     * Clear <check_availability_null> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearCheckAvailabilityNull(){
      return $this->_clear(1004);
    }
    
    /**
     * Get <check_availability_null> value
     *
     * @return boolean
     */
    public function getCheckAvailabilityNull(){
      return $this->_get(1004);
    }
    
    /**
     * Set <check_availability_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setCheckAvailabilityNull( $value){
      return $this->_set(1004, $value);
    }
    
    /**
     * Check if <price_node_characteristic_id> has a value
     *
     * @return boolean
     */
    public function hasPriceNodeCharacteristicId(){
      return $this->_has(5);
    }
    
    /**
     * Clear <price_node_characteristic_id> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearPriceNodeCharacteristicId(){
      return $this->_clear(5);
    }
    
    /**
     * Get <price_node_characteristic_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPriceNodeCharacteristicId(){
      return $this->_get(5);
    }
    
    /**
     * Set <price_node_characteristic_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setPriceNodeCharacteristicId(\dstore\engine\values\integerValue $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <price_node_characteristic_id_null> has a value
     *
     * @return boolean
     */
    public function hasPriceNodeCharacteristicIdNull(){
      return $this->_has(1005);
    }
    
    /**
     * Clear <price_node_characteristic_id_null> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearPriceNodeCharacteristicIdNull(){
      return $this->_clear(1005);
    }
    
    /**
     * Get <price_node_characteristic_id_null> value
     *
     * @return boolean
     */
    public function getPriceNodeCharacteristicIdNull(){
      return $this->_get(1005);
    }
    
    /**
     * Set <price_node_characteristic_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setPriceNodeCharacteristicIdNull( $value){
      return $this->_set(1005, $value);
    }
    
    /**
     * Check if <repair_entries_with_same_node_id> has a value
     *
     * @return boolean
     */
    public function hasRepairEntriesWithSameNodeId(){
      return $this->_has(6);
    }
    
    /**
     * Clear <repair_entries_with_same_node_id> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearRepairEntriesWithSameNodeId(){
      return $this->_clear(6);
    }
    
    /**
     * Get <repair_entries_with_same_node_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getRepairEntriesWithSameNodeId(){
      return $this->_get(6);
    }
    
    /**
     * Set <repair_entries_with_same_node_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setRepairEntriesWithSameNodeId(\dstore\engine\values\integerValue $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <repair_entries_with_same_node_id_null> has a value
     *
     * @return boolean
     */
    public function hasRepairEntriesWithSameNodeIdNull(){
      return $this->_has(1006);
    }
    
    /**
     * Clear <repair_entries_with_same_node_id_null> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearRepairEntriesWithSameNodeIdNull(){
      return $this->_clear(1006);
    }
    
    /**
     * Get <repair_entries_with_same_node_id_null> value
     *
     * @return boolean
     */
    public function getRepairEntriesWithSameNodeIdNull(){
      return $this->_get(1006);
    }
    
    /**
     * Set <repair_entries_with_same_node_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setRepairEntriesWithSameNodeIdNull( $value){
      return $this->_set(1006, $value);
    }
    
    /**
     * Check if <delivery_person_id> has a value
     *
     * @return boolean
     */
    public function hasDeliveryPersonId(){
      return $this->_has(7);
    }
    
    /**
     * Clear <delivery_person_id> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearDeliveryPersonId(){
      return $this->_clear(7);
    }
    
    /**
     * Get <delivery_person_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getDeliveryPersonId(){
      return $this->_get(7);
    }
    
    /**
     * Set <delivery_person_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setDeliveryPersonId(\dstore\engine\values\integerValue $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <delivery_person_id_null> has a value
     *
     * @return boolean
     */
    public function hasDeliveryPersonIdNull(){
      return $this->_has(1007);
    }
    
    /**
     * Clear <delivery_person_id_null> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearDeliveryPersonIdNull(){
      return $this->_clear(1007);
    }
    
    /**
     * Get <delivery_person_id_null> value
     *
     * @return boolean
     */
    public function getDeliveryPersonIdNull(){
      return $this->_get(1007);
    }
    
    /**
     * Set <delivery_person_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setDeliveryPersonIdNull( $value){
      return $this->_set(1007, $value);
    }
    
    /**
     * Check if <output_into_trolley_surch_interf> has a value
     *
     * @return boolean
     */
    public function hasOutputIntoTrolleySurchInterf(){
      return $this->_has(8);
    }
    
    /**
     * Clear <output_into_trolley_surch_interf> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearOutputIntoTrolleySurchInterf(){
      return $this->_clear(8);
    }
    
    /**
     * Get <output_into_trolley_surch_interf> value
     *
     * @return \dstore\engine\values\booleanValue
     */
    public function getOutputIntoTrolleySurchInterf(){
      return $this->_get(8);
    }
    
    /**
     * Set <output_into_trolley_surch_interf> value
     *
     * @param \dstore\engine\values\booleanValue $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setOutputIntoTrolleySurchInterf(\dstore\engine\values\booleanValue $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <output_into_trolley_surch_interf_null> has a value
     *
     * @return boolean
     */
    public function hasOutputIntoTrolleySurchInterfNull(){
      return $this->_has(1008);
    }
    
    /**
     * Clear <output_into_trolley_surch_interf_null> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearOutputIntoTrolleySurchInterfNull(){
      return $this->_clear(1008);
    }
    
    /**
     * Get <output_into_trolley_surch_interf_null> value
     *
     * @return boolean
     */
    public function getOutputIntoTrolleySurchInterfNull(){
      return $this->_get(1008);
    }
    
    /**
     * Set <output_into_trolley_surch_interf_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setOutputIntoTrolleySurchInterfNull( $value){
      return $this->_set(1008, $value);
    }
    
    /**
     * Check if <payment_type_id> has a value
     *
     * @return boolean
     */
    public function hasPaymentTypeId(){
      return $this->_has(9);
    }
    
    /**
     * Clear <payment_type_id> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearPaymentTypeId(){
      return $this->_clear(9);
    }
    
    /**
     * Get <payment_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPaymentTypeId(){
      return $this->_get(9);
    }
    
    /**
     * Set <payment_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setPaymentTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <payment_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasPaymentTypeIdNull(){
      return $this->_has(1009);
    }
    
    /**
     * Clear <payment_type_id_null> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearPaymentTypeIdNull(){
      return $this->_clear(1009);
    }
    
    /**
     * Get <payment_type_id_null> value
     *
     * @return boolean
     */
    public function getPaymentTypeIdNull(){
      return $this->_get(1009);
    }
    
    /**
     * Set <payment_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setPaymentTypeIdNull( $value){
      return $this->_set(1009, $value);
    }
    
    /**
     * Check if <shipping_type_id> has a value
     *
     * @return boolean
     */
    public function hasShippingTypeId(){
      return $this->_has(10);
    }
    
    /**
     * Clear <shipping_type_id> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearShippingTypeId(){
      return $this->_clear(10);
    }
    
    /**
     * Get <shipping_type_id> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getShippingTypeId(){
      return $this->_get(10);
    }
    
    /**
     * Set <shipping_type_id> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setShippingTypeId(\dstore\engine\values\integerValue $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <shipping_type_id_null> has a value
     *
     * @return boolean
     */
    public function hasShippingTypeIdNull(){
      return $this->_has(1010);
    }
    
    /**
     * Clear <shipping_type_id_null> value
     *
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function clearShippingTypeIdNull(){
      return $this->_clear(1010);
    }
    
    /**
     * Get <shipping_type_id_null> value
     *
     * @return boolean
     */
    public function getShippingTypeIdNull(){
      return $this->_get(1010);
    }
    
    /**
     * Set <shipping_type_id_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\om_GetTrolleyAsMatrix_Pu\Parameters
     */
    public function setShippingTypeIdNull( $value){
      return $this->_set(1010, $value);
    }
  }
}
