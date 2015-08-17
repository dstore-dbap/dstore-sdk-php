<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_GetRessourceUsage.proto
//   Date: 2015-08-17 11:45:22

namespace dstore\engine\mi_GetRessourceUsage\Response {

  class Row extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $row_id = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $c_p_u = null;
    
    /**  @var \dstore\engine\values\integerValue */
    public $physical__i_o = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_GetRessourceUsage.Response.Row');

      // OPTIONAL INT32 row_id = 10000
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10000;
      $f->name      = "row_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE c_p_u = 10001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10001;
      $f->name      = "c_p_u";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE physical__i_o = 10002
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10002;
      $f->name      = "physical__i_o";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\integerValue';
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
     * @return \dstore\engine\mi_GetRessourceUsage\Response\Row
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
     * @return \dstore\engine\mi_GetRessourceUsage\Response\Row
     */
    public function setRowId( $value){
      return $this->_set(10000, $value);
    }
    
    /**
     * Check if <c_p_u> has a value
     *
     * @return boolean
     */
    public function hasCPU(){
      return $this->_has(10001);
    }
    
    /**
     * Clear <c_p_u> value
     *
     * @return \dstore\engine\mi_GetRessourceUsage\Response\Row
     */
    public function clearCPU(){
      return $this->_clear(10001);
    }
    
    /**
     * Get <c_p_u> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getCPU(){
      return $this->_get(10001);
    }
    
    /**
     * Set <c_p_u> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetRessourceUsage\Response\Row
     */
    public function setCPU(\dstore\engine\values\integerValue $value){
      return $this->_set(10001, $value);
    }
    
    /**
     * Check if <physical__i_o> has a value
     *
     * @return boolean
     */
    public function hasPhysical_IO(){
      return $this->_has(10002);
    }
    
    /**
     * Clear <physical__i_o> value
     *
     * @return \dstore\engine\mi_GetRessourceUsage\Response\Row
     */
    public function clearPhysical_IO(){
      return $this->_clear(10002);
    }
    
    /**
     * Get <physical__i_o> value
     *
     * @return \dstore\engine\values\integerValue
     */
    public function getPhysical_IO(){
      return $this->_get(10002);
    }
    
    /**
     * Set <physical__i_o> value
     *
     * @param \dstore\engine\values\integerValue $value
     * @return \dstore\engine\mi_GetRessourceUsage\Response\Row
     */
    public function setPhysical_IO(\dstore\engine\values\integerValue $value){
      return $this->_set(10002, $value);
    }
  }
}

