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
    public function execProcedure(\Dstore\Engine\Procedure\Call $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.engine.Engine/execProcedure',
      $argument,
      ['\Dstore\Engine\Procedure\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function execBatch($metadata = [], $options = []) {
      return $this->_bidiRequest('/dstore.engine.Engine/execBatch',
      ['\Dstore\Engine\Procedure\Response','decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Values\StringValue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function createUniqueID(\Dstore\Values\StringValue $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/dstore.engine.Engine/createUniqueID',
      $argument,
      ['\Dstore\Values\StringValue', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Values\StringValue $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function isValidUniqueID(\Dstore\Values\StringValue $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/dstore.engine.Engine/isValidUniqueID',
      $argument,
      ['\Dstore\Values\BooleanValue', 'decode'],
      $metadata, $options);
    }

  }

}
