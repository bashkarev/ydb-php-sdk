<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_clickhouse_internal.proto

namespace Ydb\ClickhouseInternal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.ClickhouseInternal.DescribeTableResult</code>
 */
class DescribeTableResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.ColumnMeta columns = 2;</code>
     */
    private $columns;
    /**
     * Generated from protobuf field <code>repeated string primary_key = 3;</code>
     */
    private $primary_key;
    /**
     * Generated from protobuf field <code>repeated .Ydb.ClickhouseInternal.PartitionInfo partitions = 4;</code>
     */
    private $partitions;
    /**
     * Generated from protobuf field <code>bool is_virtual = 5;</code>
     */
    protected $is_virtual = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Table\ColumnMeta[]|\Google\Protobuf\Internal\RepeatedField $columns
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $primary_key
     *     @type \Ydb\ClickhouseInternal\PartitionInfo[]|\Google\Protobuf\Internal\RepeatedField $partitions
     *     @type bool $is_virtual
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbClickhouseInternal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.ColumnMeta columns = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Table.ColumnMeta columns = 2;</code>
     * @param \Ydb\Table\ColumnMeta[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Table\ColumnMeta::class);
        $this->columns = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string primary_key = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrimaryKey()
    {
        return $this->primary_key;
    }

    /**
     * Generated from protobuf field <code>repeated string primary_key = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrimaryKey($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->primary_key = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.ClickhouseInternal.PartitionInfo partitions = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitions()
    {
        return $this->partitions;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.ClickhouseInternal.PartitionInfo partitions = 4;</code>
     * @param \Ydb\ClickhouseInternal\PartitionInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\ClickhouseInternal\PartitionInfo::class);
        $this->partitions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_virtual = 5;</code>
     * @return bool
     */
    public function getIsVirtual()
    {
        return $this->is_virtual;
    }

    /**
     * Generated from protobuf field <code>bool is_virtual = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsVirtual($var)
    {
        GPBUtil::checkBool($var);
        $this->is_virtual = $var;

        return $this;
    }

}
