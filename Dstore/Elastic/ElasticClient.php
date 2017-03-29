<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Dstore\Elastic {

  class ElasticClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
      parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Dstore\Elastic\Item\Item_get\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ItemGet(\Dstore\Elastic\Item\Item_get\Request $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.elastic.Elastic/ItemGet',
      $argument,
      ['\Dstore\Elastic\Item\Item_get\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Elastic\Item\Item_suggest\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ItemSuggest(\Dstore\Elastic\Item\Item_suggest\Request $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/dstore.elastic.Elastic/ItemSuggest',
      $argument,
      ['\Dstore\Elastic\Item\Item_suggest\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Elastic\Item\Item_export\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ItemExport(\Dstore\Elastic\Item\Item_export\Request $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.elastic.Elastic/ItemExport',
      $argument,
      ['\Dstore\Elastic\Item\Item_export\Response', 'decode'],
      $metadata, $options);
    }

    /**
     * @param \Dstore\Elastic\Forum\Posting_get\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostingGet(\Dstore\Elastic\Forum\Posting_get\Request $argument,
      $metadata = [], $options = []) {
      return $this->_serverStreamRequest('/dstore.elastic.Elastic/PostingGet',
      $argument,
      ['\Dstore\Elastic\Forum\Posting_get\Response', 'decode'],
      $metadata, $options);
    }

  }

}
