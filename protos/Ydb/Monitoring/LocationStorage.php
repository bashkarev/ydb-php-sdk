<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_monitoring.proto

namespace Ydb\Monitoring;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Monitoring.LocationStorage</code>
 */
class LocationStorage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.LocationNode node = 1;</code>
     */
    protected $node = null;
    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.LocationStoragePool pool = 2;</code>
     */
    protected $pool = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Monitoring\LocationNode $node
     *     @type \Ydb\Monitoring\LocationStoragePool $pool
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.LocationNode node = 1;</code>
     * @return \Ydb\Monitoring\LocationNode
     */
    public function getNode()
    {
        return isset($this->node) ? $this->node : null;
    }

    public function hasNode()
    {
        return isset($this->node);
    }

    public function clearNode()
    {
        unset($this->node);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.LocationNode node = 1;</code>
     * @param \Ydb\Monitoring\LocationNode $var
     * @return $this
     */
    public function setNode($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Monitoring\LocationNode::class);
        $this->node = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.LocationStoragePool pool = 2;</code>
     * @return \Ydb\Monitoring\LocationStoragePool
     */
    public function getPool()
    {
        return isset($this->pool) ? $this->pool : null;
    }

    public function hasPool()
    {
        return isset($this->pool);
    }

    public function clearPool()
    {
        unset($this->pool);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Monitoring.LocationStoragePool pool = 2;</code>
     * @param \Ydb\Monitoring\LocationStoragePool $var
     * @return $this
     */
    public function setPool($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Monitoring\LocationStoragePool::class);
        $this->pool = $var;

        return $this;
    }

}

