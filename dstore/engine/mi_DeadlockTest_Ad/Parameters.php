<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: dstore/engine/procedures/mi_DeadlockTest_Ad.proto
//   Date: 2016-05-19 08:07:44

namespace dstore\engine\mi_DeadlockTest_Ad {

  class Parameters extends \DrSlump\Protobuf\Message {


    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'dstore.engine.mi_DeadlockTest_Ad.Parameters');

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }
  }
}

