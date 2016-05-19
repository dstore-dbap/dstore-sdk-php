<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_AdressenCheck_Pu.proto
//   Date: 2016-05-19 08:07:53

namespace dstore\engine\pm_AdressenCheck_Pu\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\values\stringValue */
    public $ort = null;
    
    /**  @var \dstore\values\stringValue */
    public $ort_zusatz = null;
    
    /**  @var \dstore\values\integerValue */
    public $p_l_z_status = null;
    
    /**  @var \dstore\values\integerValue */
    public $strasse_status = null;
    
    /**  @var \dstore\values\integerValue */
    public $hausnummer_status = null;
    
    /**  @var \dstore\values\integerValue */
    public $ort_status = null;
    
    /**  @var \dstore\values\stringValue */
    public $strasse = null;
    
    /**  @var \dstore\values\stringValue */
    public $hausnummer = null;
    
    /**  @var \dstore\values\stringValue */
    public $p_l_z = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_AdressenCheck_Pu.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE ort = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "ort";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE ort_zusatz = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "ort_zusatz";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE p_l_z_status = 10003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10003;
      $f->name      = "p_l_z_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE strasse_status = 10004
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10004;
      $f->name      = "strasse_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE hausnummer_status = 10005
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10005;
      $f->name      = "hausnummer_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE ort_status = 10006
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10006;
      $f->name      = "ort_status";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE strasse = 10007
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10007;
      $f->name      = "strasse";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE hausnummer = 10008
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10008;
      $f->name      = "hausnummer";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE p_l_z = 10009
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10009;
      $f->name      = "p_l_z";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <row_id> has a value
     *
     * @return boolean
     */
    public function hasRowId(){
      return $this->_has(10000);
    }
    
    /**
     * Clear <row_id> value
     *
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function clearRowId(){
      return $this->_clear(10000);
    }
    
    /**
     * Get <row_id> value
     *
     * @return int
     */
    public function getRowId(){
      return $this->_get(10000);
    }
    
    /**
     * Set <row_id> value
     *
     * @param int $value
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <ort> has a value
     *
     * @return boolean
     */
    public function hasOrt(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <ort> value
     *
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function clearOrt(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <ort> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOrt(){
      return $this->_get(10001);
    }
    
    /**
     * Set <ort> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function setOrt(\dstore\values\stringValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <ort_zusatz> has a value
     *
     * @return boolean
     */
    public function hasOrtZusatz(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <ort_zusatz> value
     *
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function clearOrtZusatz(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <ort_zusatz> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOrtZusatz(){
      return $this->_get(10002);
    }
    
    /**
     * Set <ort_zusatz> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function setOrtZusatz(\dstore\values\stringValue $value){
      return $this->_set(10002, $value);
    }
    
    /**
     * Check if <p_l_z_status> has a value
     *
     * @return boolean
     */
    public function hasPLZStatus(){
      return $this->_has(10003);
    }
    
    /**
     * Clear <p_l_z_status> value
     *
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function clearPLZStatus(){
      return $this->_clear(10003);
    }
    
    /**
     * Get <p_l_z_status> value
     *
     * @return \dstore\values\integerValue
     */
    public function getPLZStatus(){
      return $this->_get(10003);
    }
    
    /**
     * Set <p_l_z_status> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function setPLZStatus(\dstore\values\integerValue $value){
      return $this->_set(10003, $value);
    }
    
    /**
     * Check if <strasse_status> has a value
     *
     * @return boolean
     */
    public function hasStrasseStatus(){
      return $this->_has(10004);
    }
    
    /**
     * Clear <strasse_status> value
     *
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function clearStrasseStatus(){
      return $this->_clear(10004);
    }
    
    /**
     * Get <strasse_status> value
     *
     * @return \dstore\values\integerValue
     */
    public function getStrasseStatus(){
      return $this->_get(10004);
    }
    
    /**
     * Set <strasse_status> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function setStrasseStatus(\dstore\values\integerValue $value){
      return $this->_set(10004, $value);
    }
    
    /**
     * Check if <hausnummer_status> has a value
     *
     * @return boolean
     */
    public function hasHausnummerStatus(){
      return $this->_has(10005);
    }
    
    /**
     * Clear <hausnummer_status> value
     *
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function clearHausnummerStatus(){
      return $this->_clear(10005);
    }
    
    /**
     * Get <hausnummer_status> value
     *
     * @return \dstore\values\integerValue
     */
    public function getHausnummerStatus(){
      return $this->_get(10005);
    }
    
    /**
     * Set <hausnummer_status> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function setHausnummerStatus(\dstore\values\integerValue $value){
      return $this->_set(10005, $value);
    }
    
    /**
     * Check if <ort_status> has a value
     *
     * @return boolean
     */
    public function hasOrtStatus(){
      return $this->_has(10006);
    }
    
    /**
     * Clear <ort_status> value
     *
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function clearOrtStatus(){
      return $this->_clear(10006);
    }
    
    /**
     * Get <ort_status> value
     *
     * @return \dstore\values\integerValue
     */
    public function getOrtStatus(){
      return $this->_get(10006);
    }
    
    /**
     * Set <ort_status> value
     *
     * @param \dstore\values\integerValue $value
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function setOrtStatus(\dstore\values\integerValue $value){
      return $this->_set(10006, $value);
    }
    
    /**
     * Check if <strasse> has a value
     *
     * @return boolean
     */
    public function hasStrasse(){
      return $this->_has(10007);
    }
    
    /**
     * Clear <strasse> value
     *
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function clearStrasse(){
      return $this->_clear(10007);
    }
    
    /**
     * Get <strasse> value
     *
     * @return \dstore\values\stringValue
     */
    public function getStrasse(){
      return $this->_get(10007);
    }
    
    /**
     * Set <strasse> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function setStrasse(\dstore\values\stringValue $value){
      return $this->_set(10007, $value);
    }
    
    /**
     * Check if <hausnummer> has a value
     *
     * @return boolean
     */
    public function hasHausnummer(){
      return $this->_has(10008);
    }
    
    /**
     * Clear <hausnummer> value
     *
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function clearHausnummer(){
      return $this->_clear(10008);
    }
    
    /**
     * Get <hausnummer> value
     *
     * @return \dstore\values\stringValue
     */
    public function getHausnummer(){
      return $this->_get(10008);
    }
    
    /**
     * Set <hausnummer> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function setHausnummer(\dstore\values\stringValue $value){
      return $this->_set(10008, $value);
    }
    
    /**
     * Check if <p_l_z> has a value
     *
     * @return boolean
     */
    public function hasPLZ(){
      return $this->_has(10009);
    }
    
    /**
     * Clear <p_l_z> value
     *
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function clearPLZ(){
      return $this->_clear(10009);
    }
    
    /**
     * Get <p_l_z> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPLZ(){
      return $this->_get(10009);
    }
    
    /**
     * Set <p_l_z> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_AdressenCheck_Pu\Response\Row
     */
    public function setPLZ(\dstore\values\stringValue $value){
      return $this->_set(10009, $value);
    }
  }
}

