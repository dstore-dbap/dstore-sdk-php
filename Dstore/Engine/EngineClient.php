<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Dstore\Engine {

  class EngineClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Dstore\Engine\Procedure\Call $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ExecProcedure(\Dstore\Engine\Procedure\Call $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.Engine/ExecProcedure',
      $argument,
      ['\Dstore\Engine\Procedure\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ExecBatch($metadata = [], $options = []) {
      return $this->_bidiRequest('/dstore.engine.Engine/ExecBatch',
      ['\Dstore\Engine\Procedure\Response','decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Values\StringValue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateUniqueID(\Dstore\Values\StringValue $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/dstore.engine.Engine/CreateUniqueID',
      $argument,
      ['\Dstore\Values\StringValue', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Values\StringValue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function IsValidUniqueID(\Dstore\Values\StringValue $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/dstore.engine.Engine/IsValidUniqueID',
      $argument,
      ['\Dstore\Values\BooleanValue', 'decode'],
      $metadata, $options);
    }

  }

}
