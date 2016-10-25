<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Dstore\Elastic {

  class ElasticServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Dstore\Elastic\Facetednavigation\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function facetedNavigation(\Dstore\Elastic\Facetednavigation\Request $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.elastic.ElasticService/facetedNavigation',
      $argument,
      ['\Dstore\Elastic\Facetednavigation\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Elastic\Suggest\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function itemSuggest(\Dstore\Elastic\Suggest\Request $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/dstore.elastic.ElasticService/itemSuggest',
      $argument,
      ['\Dstore\Elastic\Suggest\Response', 'decode'],
      $metadata, $options);
    }

  }

}
