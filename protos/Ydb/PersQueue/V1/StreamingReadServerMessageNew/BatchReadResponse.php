<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\StreamingReadServerMessageNew;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Readed data.
 *
 * Generated from protobuf message <code>Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse</code>
 */
class BatchReadResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.SkipRange skip_range = 1;</code>
     */
    private $skip_range;
    /**
     * Per-partition data.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.PartitionData partitions = 2;</code>
     */
    private $partitions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\SkipRange[]|\Google\Protobuf\Internal\RepeatedField $skip_range
     *     @type \Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\PartitionData[]|\Google\Protobuf\Internal\RepeatedField $partitions
     *           Per-partition data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.SkipRange skip_range = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSkipRange()
    {
        return $this->skip_range;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.SkipRange skip_range = 1;</code>
     * @param \Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\SkipRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSkipRange($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\SkipRange::class);
        $this->skip_range = $arr;

        return $this;
    }

    /**
     * Per-partition data.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.PartitionData partitions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitions()
    {
        return $this->partitions;
    }

    /**
     * Per-partition data.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.PartitionData partitions = 2;</code>
     * @param \Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\PartitionData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\PartitionData::class);
        $this->partitions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BatchReadResponse::class, \Ydb\PersQueue\V1\StreamingReadServerMessageNew_BatchReadResponse::class);

