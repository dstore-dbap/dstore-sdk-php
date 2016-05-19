<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/pm_PostleitzahlenZumOrt_Pu.proto
//   Date: 2016-05-19 08:07:56

namespace dstore\engine\pm_PostleitzahlenZumOrt_Pu {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\values\stringValue */
    public $ort = null;
    
    /**  @var boolean */
    public $ort_null = null;
    
    /**  @var \dstore\values\stringValue */
    public $p_l_z = null;
    
    /**  @var boolean */
    public $p_l_z_null = null;
    
    /**  @var \dstore\values\booleanValue */
    public $return_result = null;
    
    /**  @var boolean */
    public $return_result_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.pm_PostleitzahlenZumOrt_Pu.Parameters');

      // OPTIONAL MESSAGE ort = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "ort";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL ort_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "ort_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE p_l_z = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "p_l_z";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL p_l_z_null = 1002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1002;
      $f->name      = "p_l_z_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE return_result = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "return_result";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\values\booleanValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL return_result_null = 1003
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1003;
      $f->name      = "return_result_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <ort> has a value
     *
     * @return boolean
     */
    public function hasOrt(){
      return $this->_has(1);
    }
    
    /**
     * Clear <ort> value
     *
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function clearOrt(){
      return $this->_clear(1);
    }
    
    /**
     * Get <ort> value
     *
     * @return \dstore\values\stringValue
     */
    public function getOrt(){
      return $this->_get(1);
    }
    
    /**
     * Set <ort> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function setOrt(\dstore\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <ort_null> has a value
     *
     * @return boolean
     */
    public function hasOrtNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <ort_null> value
     *
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function clearOrtNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <ort_null> value
     *
     * @return boolean
     */
    public function getOrtNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <ort_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function setOrtNull( $value){
      return $this->_set(1001, $value);
    }
    
    /**
     * Check if <p_l_z> has a value
     *
     * @return boolean
     */
    public function hasPLZ(){
      return $this->_has(2);
    }
    
    /**
     * Clear <p_l_z> value
     *
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function clearPLZ(){
      return $this->_clear(2);
    }
    
    /**
     * Get <p_l_z> value
     *
     * @return \dstore\values\stringValue
     */
    public function getPLZ(){
      return $this->_get(2);
    }
    
    /**
     * Set <p_l_z> value
     *
     * @param \dstore\values\stringValue $value
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function setPLZ(\dstore\values\stringValue $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <p_l_z_null> has a value
     *
     * @return boolean
     */
    public function hasPLZNull(){
      return $this->_has(1002);
    }
    
    /**
     * Clear <p_l_z_null> value
     *
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function clearPLZNull(){
      return $this->_clear(1002);
    }
    
    /**
     * Get <p_l_z_null> value
     *
     * @return boolean
     */
    public function getPLZNull(){
      return $this->_get(1002);
    }
    
    /**
     * Set <p_l_z_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function setPLZNull( $value){
      return $this->_set(1002, $value);
    }
    
    /**
     * Check if <return_result> has a value
     *
     * @return boolean
     */
    public function hasReturnResult(){
      return $this->_has(3);
    }
    
    /**
     * Clear <return_result> value
     *
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function clearReturnResult(){
      return $this->_clear(3);
    }
    
    /**
     * Get <return_result> value
     *
     * @return \dstore\values\booleanValue
     */
    public function getReturnResult(){
      return $this->_get(3);
    }
    
    /**
     * Set <return_result> value
     *
     * @param \dstore\values\booleanValue $value
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function setReturnResult(\dstore\values\booleanValue $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <return_result_null> has a value
     *
     * @return boolean
     */
    public function hasReturnResultNull(){
      return $this->_has(1003);
    }
    
    /**
     * Clear <return_result_null> value
     *
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function clearReturnResultNull(){
      return $this->_clear(1003);
    }
    
    /**
     * Get <return_result_null> value
     *
     * @return boolean
     */
    public function getReturnResultNull(){
      return $this->_get(1003);
    }
    
    /**
     * Set <return_result_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\pm_PostleitzahlenZumOrt_Pu\Parameters
     */
    public function setReturnResultNull( $value){
      return $this->_set(1003, $value);
    }
  }
}

