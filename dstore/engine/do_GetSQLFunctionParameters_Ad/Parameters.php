<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/do_GetSQLFunctionParameters_Ad.proto
//   Date: 2015-08-17 11:45:21

namespace dstore\engine\do_GetSQLFunctionParameters_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {

    /**  @var \dstore\engine\values\stringValue */
    public $s_q_l_function_name = null;
    
    /**  @var boolean */
    public $s_q_l_function_name_null = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.do_GetSQLFunctionParameters_Ad.Parameters');

      // OPTIONAL MESSAGE s_q_l_function_name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "s_q_l_function_name";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\dstore\engine\values\stringValue';
      $descriptor->addField($f);

      // OPTIONAL BOOL s_q_l_function_name_null = 1001
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1001;
      $f->name      = "s_q_l_function_name_null";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <s_q_l_function_name> has a value
     *
     * @return boolean
     */
    public function hasSQLFunctionName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <s_q_l_function_name> value
     *
     * @return \dstore\engine\do_GetSQLFunctionParameters_Ad\Parameters
     */
    public function clearSQLFunctionName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <s_q_l_function_name> value
     *
     * @return \dstore\engine\values\stringValue
     */
    public function getSQLFunctionName(){
      return $this->_get(1);
    }
    
    /**
     * Set <s_q_l_function_name> value
     *
     * @param \dstore\engine\values\stringValue $value
     * @return \dstore\engine\do_GetSQLFunctionParameters_Ad\Parameters
     */
    public function setSQLFunctionName(\dstore\engine\values\stringValue $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <s_q_l_function_name_null> has a value
     *
     * @return boolean
     */
    public function hasSQLFunctionNameNull(){
      return $this->_has(1001);
    }
    
    /**
     * Clear <s_q_l_function_name_null> value
     *
     * @return \dstore\engine\do_GetSQLFunctionParameters_Ad\Parameters
     */
    public function clearSQLFunctionNameNull(){
      return $this->_clear(1001);
    }
    
    /**
     * Get <s_q_l_function_name_null> value
     *
     * @return boolean
     */
    public function getSQLFunctionNameNull(){
      return $this->_get(1001);
    }
    
    /**
     * Set <s_q_l_function_name_null> value
     *
     * @param boolean $value
     * @return \dstore\engine\do_GetSQLFunctionParameters_Ad\Parameters
     */
    public function setSQLFunctionNameNull( $value){
      return $this->_set(1001, $value);
    }
  }
}

