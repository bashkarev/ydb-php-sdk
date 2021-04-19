<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * One client message representation.
 * Client lib must send commit right now for all skipped data (from it's read offset till first offset in range).
 *
 * Generated from protobuf message <code>Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.PartitionData</code>
 */
class PartitionData extends \Google\Protobuf\Internal\Message
{
    /**
     * Data inside this message is from partition stream with this identifier.
     *
     * Generated from protobuf field <code>int64 partition_stream_id = 1;</code>
     */
    protected $partition_stream_id = 0;
    /**
     * Offsets in partition that assigned for messages.
     * Unique value for clientside deduplication - (topic, cluster, partition_id, offset).
     *
     * Generated from protobuf field <code>repeated int64 offsets = 2;</code>
     */
    private $offsets;
    /**
     * Sequence numbers that provided with messages on write from client.
     * Same size as offsets.
     * Unique value for clientside deduplication - (topic, cluster, message_group_id, sequence_number).
     *
     * Generated from protobuf field <code>repeated int64 sequence_numbers = 3;</code>
     */
    private $sequence_numbers;
    /**
     * Timestamps of creation of messages provided on write from client.
     * Same size as offsets.
     *
     * Generated from protobuf field <code>repeated int64 created_at_ms = 4;</code>
     */
    private $created_at_ms;
    /**
     * Timestamps of writing in partition for client messages.
     * Same size as offsets.
     *
     * Generated from protobuf field <code>repeated int64 written_at_ms = 5;</code>
     */
    private $written_at_ms;
    /**
     * New messageGroupIds for updating cache.
     * Size of vector is the same as number of negative values in message_group_id_indexes.
     *
     * Generated from protobuf field <code>repeated string message_group_ids = 6;</code>
     */
    private $message_group_ids;
    /**
     * Indexes of messageGroupIds.
     * same size as offsets.
     * Negative values (-X) means - put first not used messageGroupId from message_group_ids on index X in cache and use it for this client message.
     * Positive values (X) means -use element by index X from cache for this client message. Do not change state of cache.
     * Assumptions:
     *      - Server will use positive values only for proposed before indexes.
     *      - Each value is from 1 to max_meta_cache_size by abs.
     *      - Do not make assumptions about choosing algorihm.
     *      - There is separate caches of size max_meta_cache_size for different partition and different metadata fileds - message_group_id, ip and session_meta_data.
     *      - Number of negative values in message_group_id_indexes vector is the same as length of message_group_ids vector.
     * Example:
     *                max_meta_cache_size :  2
     *                      Cache indexes :  1  2
     *      Cache state before processing :  s0,? // ? means not set yet.
     *                  message_group_ids :  s1 s2 s3 s1
     *           message_group_id_indexes :  -1    -2    1     2     1     1     -1    2     -2
     *                        cache state :  s1,?  s1,s2 s1,s2 s1,s2 s1,s2 s1,s2 s3,s2 s3,s2 s3,s1
     *             real message group ids :  s1    s2    s1    s2    s1    s1    s3    s2    s1
     *                      Cache indexes :  1  2
     *       Cache state after processing :  s3,s1
     *
     * Generated from protobuf field <code>repeated sint64 message_group_id_indexes = 7;</code>
     */
    private $message_group_id_indexes;
    /**
     * New ips for updating ip cache.
     *
     * Generated from protobuf field <code>repeated string ips = 8;</code>
     */
    private $ips;
    /**
     * Same as message_group_id_indexes but for ips.
     *
     * Generated from protobuf field <code>repeated sint64 ip_indexes = 9;</code>
     */
    private $ip_indexes;
    /**
     * New session meta datas for updating cache.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.SessionMetaValue message_session_meta = 10;</code>
     */
    private $message_session_meta;
    /**
     * Same as message_group_id_indexes but for session meta data.
     *
     * Generated from protobuf field <code>repeated sint64 message_session_meta_indexes = 11;</code>
     */
    private $message_session_meta_indexes;
    /**
     * Client messages sizes.
     * Same size as offsets.
     *
     * Generated from protobuf field <code>repeated int64 message_sizes = 12;</code>
     */
    private $message_sizes;
    /**
     * Block must contain whole client message when it's size is not bigger that max_block_size.
     * If message is bigger than max_block_size - it will be transferred as SIZE/max_block_size blocks. All of this blocks will be with block_count = 0 but not the last one - last one's block_count will be 0;
     * Blocks can be reordered upto provided by client uncompressed free buffer size.
     * blocks:      A A A B B B CDE
     * offset:      1 1 1 4 4 4 6
     * part_number: 0 1 2 0 1 2 0
     * count:       0 0 1 0 0 1 3
     * Offset will be the same as in Offsets.
     *
     * Generated from protobuf field <code>repeated int64 blocks_offsets = 13;</code>
     */
    private $blocks_offsets;
    /**
     * Generated from protobuf field <code>repeated int64 blocks_part_numbers = 14;</code>
     */
    private $blocks_part_numbers;
    /**
     * How many complete messages and imcomplete messages end parts (one at most) this block contains
     *
     * Generated from protobuf field <code>repeated int64 blocks_message_counts = 15;</code>
     */
    private $blocks_message_counts;
    /**
     * Generated from protobuf field <code>repeated int64 blocks_uncompressed_sizes = 16;</code>
     */
    private $blocks_uncompressed_sizes;
    /**
     * In block format version 0 each byte contains only block codec identifier
     *
     * Generated from protobuf field <code>repeated bytes blocks_headers = 17;</code>
     */
    private $blocks_headers;
    /**
     * Generated from protobuf field <code>repeated bytes blocks_data = 18;</code>
     */
    private $blocks_data;
    /**
     * Zero if this is not first portion of data after resume or provided by client cookie otherwise.
     *
     * Generated from protobuf field <code>int64 resume_cookie = 50;</code>
     */
    protected $resume_cookie = 0;
    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.PartitionData.ReadStatistics read_statistics = 100;</code>
     */
    protected $read_statistics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $partition_stream_id
     *           Data inside this message is from partition stream with this identifier.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $offsets
     *           Offsets in partition that assigned for messages.
     *           Unique value for clientside deduplication - (topic, cluster, partition_id, offset).
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $sequence_numbers
     *           Sequence numbers that provided with messages on write from client.
     *           Same size as offsets.
     *           Unique value for clientside deduplication - (topic, cluster, message_group_id, sequence_number).
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $created_at_ms
     *           Timestamps of creation of messages provided on write from client.
     *           Same size as offsets.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $written_at_ms
     *           Timestamps of writing in partition for client messages.
     *           Same size as offsets.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $message_group_ids
     *           New messageGroupIds for updating cache.
     *           Size of vector is the same as number of negative values in message_group_id_indexes.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $message_group_id_indexes
     *           Indexes of messageGroupIds.
     *           same size as offsets.
     *           Negative values (-X) means - put first not used messageGroupId from message_group_ids on index X in cache and use it for this client message.
     *           Positive values (X) means -use element by index X from cache for this client message. Do not change state of cache.
     *           Assumptions:
     *                - Server will use positive values only for proposed before indexes.
     *                - Each value is from 1 to max_meta_cache_size by abs.
     *                - Do not make assumptions about choosing algorihm.
     *                - There is separate caches of size max_meta_cache_size for different partition and different metadata fileds - message_group_id, ip and session_meta_data.
     *                - Number of negative values in message_group_id_indexes vector is the same as length of message_group_ids vector.
     *           Example:
     *                          max_meta_cache_size :  2
     *                                Cache indexes :  1  2
     *                Cache state before processing :  s0,? // ? means not set yet.
     *                            message_group_ids :  s1 s2 s3 s1
     *                     message_group_id_indexes :  -1    -2    1     2     1     1     -1    2     -2
     *                                  cache state :  s1,?  s1,s2 s1,s2 s1,s2 s1,s2 s1,s2 s3,s2 s3,s2 s3,s1
     *                       real message group ids :  s1    s2    s1    s2    s1    s1    s3    s2    s1
     *                                Cache indexes :  1  2
     *                 Cache state after processing :  s3,s1
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ips
     *           New ips for updating ip cache.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $ip_indexes
     *           Same as message_group_id_indexes but for ips.
     *     @type \Ydb\PersQueue\V1\SessionMetaValue[]|\Google\Protobuf\Internal\RepeatedField $message_session_meta
     *           New session meta datas for updating cache.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $message_session_meta_indexes
     *           Same as message_group_id_indexes but for session meta data.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $message_sizes
     *           Client messages sizes.
     *           Same size as offsets.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $blocks_offsets
     *           Block must contain whole client message when it's size is not bigger that max_block_size.
     *           If message is bigger than max_block_size - it will be transferred as SIZE/max_block_size blocks. All of this blocks will be with block_count = 0 but not the last one - last one's block_count will be 0;
     *           Blocks can be reordered upto provided by client uncompressed free buffer size.
     *           blocks:      A A A B B B CDE
     *           offset:      1 1 1 4 4 4 6
     *           part_number: 0 1 2 0 1 2 0
     *           count:       0 0 1 0 0 1 3
     *           Offset will be the same as in Offsets.
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $blocks_part_numbers
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $blocks_message_counts
     *           How many complete messages and imcomplete messages end parts (one at most) this block contains
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $blocks_uncompressed_sizes
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $blocks_headers
     *           In block format version 0 each byte contains only block codec identifier
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $blocks_data
     *     @type int|string $resume_cookie
     *           Zero if this is not first portion of data after resume or provided by client cookie otherwise.
     *     @type \Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\PartitionData\ReadStatistics $read_statistics
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Data inside this message is from partition stream with this identifier.
     *
     * Generated from protobuf field <code>int64 partition_stream_id = 1;</code>
     * @return int|string
     */
    public function getPartitionStreamId()
    {
        return $this->partition_stream_id;
    }

    /**
     * Data inside this message is from partition stream with this identifier.
     *
     * Generated from protobuf field <code>int64 partition_stream_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionStreamId($var)
    {
        GPBUtil::checkInt64($var);
        $this->partition_stream_id = $var;

        return $this;
    }

    /**
     * Offsets in partition that assigned for messages.
     * Unique value for clientside deduplication - (topic, cluster, partition_id, offset).
     *
     * Generated from protobuf field <code>repeated int64 offsets = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOffsets()
    {
        return $this->offsets;
    }

    /**
     * Offsets in partition that assigned for messages.
     * Unique value for clientside deduplication - (topic, cluster, partition_id, offset).
     *
     * Generated from protobuf field <code>repeated int64 offsets = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOffsets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->offsets = $arr;

        return $this;
    }

    /**
     * Sequence numbers that provided with messages on write from client.
     * Same size as offsets.
     * Unique value for clientside deduplication - (topic, cluster, message_group_id, sequence_number).
     *
     * Generated from protobuf field <code>repeated int64 sequence_numbers = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSequenceNumbers()
    {
        return $this->sequence_numbers;
    }

    /**
     * Sequence numbers that provided with messages on write from client.
     * Same size as offsets.
     * Unique value for clientside deduplication - (topic, cluster, message_group_id, sequence_number).
     *
     * Generated from protobuf field <code>repeated int64 sequence_numbers = 3;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSequenceNumbers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->sequence_numbers = $arr;

        return $this;
    }

    /**
     * Timestamps of creation of messages provided on write from client.
     * Same size as offsets.
     *
     * Generated from protobuf field <code>repeated int64 created_at_ms = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCreatedAtMs()
    {
        return $this->created_at_ms;
    }

    /**
     * Timestamps of creation of messages provided on write from client.
     * Same size as offsets.
     *
     * Generated from protobuf field <code>repeated int64 created_at_ms = 4;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCreatedAtMs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->created_at_ms = $arr;

        return $this;
    }

    /**
     * Timestamps of writing in partition for client messages.
     * Same size as offsets.
     *
     * Generated from protobuf field <code>repeated int64 written_at_ms = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWrittenAtMs()
    {
        return $this->written_at_ms;
    }

    /**
     * Timestamps of writing in partition for client messages.
     * Same size as offsets.
     *
     * Generated from protobuf field <code>repeated int64 written_at_ms = 5;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWrittenAtMs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->written_at_ms = $arr;

        return $this;
    }

    /**
     * New messageGroupIds for updating cache.
     * Size of vector is the same as number of negative values in message_group_id_indexes.
     *
     * Generated from protobuf field <code>repeated string message_group_ids = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageGroupIds()
    {
        return $this->message_group_ids;
    }

    /**
     * New messageGroupIds for updating cache.
     * Size of vector is the same as number of negative values in message_group_id_indexes.
     *
     * Generated from protobuf field <code>repeated string message_group_ids = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessageGroupIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->message_group_ids = $arr;

        return $this;
    }

    /**
     * Indexes of messageGroupIds.
     * same size as offsets.
     * Negative values (-X) means - put first not used messageGroupId from message_group_ids on index X in cache and use it for this client message.
     * Positive values (X) means -use element by index X from cache for this client message. Do not change state of cache.
     * Assumptions:
     *      - Server will use positive values only for proposed before indexes.
     *      - Each value is from 1 to max_meta_cache_size by abs.
     *      - Do not make assumptions about choosing algorihm.
     *      - There is separate caches of size max_meta_cache_size for different partition and different metadata fileds - message_group_id, ip and session_meta_data.
     *      - Number of negative values in message_group_id_indexes vector is the same as length of message_group_ids vector.
     * Example:
     *                max_meta_cache_size :  2
     *                      Cache indexes :  1  2
     *      Cache state before processing :  s0,? // ? means not set yet.
     *                  message_group_ids :  s1 s2 s3 s1
     *           message_group_id_indexes :  -1    -2    1     2     1     1     -1    2     -2
     *                        cache state :  s1,?  s1,s2 s1,s2 s1,s2 s1,s2 s1,s2 s3,s2 s3,s2 s3,s1
     *             real message group ids :  s1    s2    s1    s2    s1    s1    s3    s2    s1
     *                      Cache indexes :  1  2
     *       Cache state after processing :  s3,s1
     *
     * Generated from protobuf field <code>repeated sint64 message_group_id_indexes = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageGroupIdIndexes()
    {
        return $this->message_group_id_indexes;
    }

    /**
     * Indexes of messageGroupIds.
     * same size as offsets.
     * Negative values (-X) means - put first not used messageGroupId from message_group_ids on index X in cache and use it for this client message.
     * Positive values (X) means -use element by index X from cache for this client message. Do not change state of cache.
     * Assumptions:
     *      - Server will use positive values only for proposed before indexes.
     *      - Each value is from 1 to max_meta_cache_size by abs.
     *      - Do not make assumptions about choosing algorihm.
     *      - There is separate caches of size max_meta_cache_size for different partition and different metadata fileds - message_group_id, ip and session_meta_data.
     *      - Number of negative values in message_group_id_indexes vector is the same as length of message_group_ids vector.
     * Example:
     *                max_meta_cache_size :  2
     *                      Cache indexes :  1  2
     *      Cache state before processing :  s0,? // ? means not set yet.
     *                  message_group_ids :  s1 s2 s3 s1
     *           message_group_id_indexes :  -1    -2    1     2     1     1     -1    2     -2
     *                        cache state :  s1,?  s1,s2 s1,s2 s1,s2 s1,s2 s1,s2 s3,s2 s3,s2 s3,s1
     *             real message group ids :  s1    s2    s1    s2    s1    s1    s3    s2    s1
     *                      Cache indexes :  1  2
     *       Cache state after processing :  s3,s1
     *
     * Generated from protobuf field <code>repeated sint64 message_group_id_indexes = 7;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessageGroupIdIndexes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::SINT64);
        $this->message_group_id_indexes = $arr;

        return $this;
    }

    /**
     * New ips for updating ip cache.
     *
     * Generated from protobuf field <code>repeated string ips = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIps()
    {
        return $this->ips;
    }

    /**
     * New ips for updating ip cache.
     *
     * Generated from protobuf field <code>repeated string ips = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ips = $arr;

        return $this;
    }

    /**
     * Same as message_group_id_indexes but for ips.
     *
     * Generated from protobuf field <code>repeated sint64 ip_indexes = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpIndexes()
    {
        return $this->ip_indexes;
    }

    /**
     * Same as message_group_id_indexes but for ips.
     *
     * Generated from protobuf field <code>repeated sint64 ip_indexes = 9;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpIndexes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::SINT64);
        $this->ip_indexes = $arr;

        return $this;
    }

    /**
     * New session meta datas for updating cache.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.SessionMetaValue message_session_meta = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageSessionMeta()
    {
        return $this->message_session_meta;
    }

    /**
     * New session meta datas for updating cache.
     *
     * Generated from protobuf field <code>repeated .Ydb.PersQueue.V1.SessionMetaValue message_session_meta = 10;</code>
     * @param \Ydb\PersQueue\V1\SessionMetaValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessageSessionMeta($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\PersQueue\V1\SessionMetaValue::class);
        $this->message_session_meta = $arr;

        return $this;
    }

    /**
     * Same as message_group_id_indexes but for session meta data.
     *
     * Generated from protobuf field <code>repeated sint64 message_session_meta_indexes = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageSessionMetaIndexes()
    {
        return $this->message_session_meta_indexes;
    }

    /**
     * Same as message_group_id_indexes but for session meta data.
     *
     * Generated from protobuf field <code>repeated sint64 message_session_meta_indexes = 11;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessageSessionMetaIndexes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::SINT64);
        $this->message_session_meta_indexes = $arr;

        return $this;
    }

    /**
     * Client messages sizes.
     * Same size as offsets.
     *
     * Generated from protobuf field <code>repeated int64 message_sizes = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageSizes()
    {
        return $this->message_sizes;
    }

    /**
     * Client messages sizes.
     * Same size as offsets.
     *
     * Generated from protobuf field <code>repeated int64 message_sizes = 12;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessageSizes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->message_sizes = $arr;

        return $this;
    }

    /**
     * Block must contain whole client message when it's size is not bigger that max_block_size.
     * If message is bigger than max_block_size - it will be transferred as SIZE/max_block_size blocks. All of this blocks will be with block_count = 0 but not the last one - last one's block_count will be 0;
     * Blocks can be reordered upto provided by client uncompressed free buffer size.
     * blocks:      A A A B B B CDE
     * offset:      1 1 1 4 4 4 6
     * part_number: 0 1 2 0 1 2 0
     * count:       0 0 1 0 0 1 3
     * Offset will be the same as in Offsets.
     *
     * Generated from protobuf field <code>repeated int64 blocks_offsets = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocksOffsets()
    {
        return $this->blocks_offsets;
    }

    /**
     * Block must contain whole client message when it's size is not bigger that max_block_size.
     * If message is bigger than max_block_size - it will be transferred as SIZE/max_block_size blocks. All of this blocks will be with block_count = 0 but not the last one - last one's block_count will be 0;
     * Blocks can be reordered upto provided by client uncompressed free buffer size.
     * blocks:      A A A B B B CDE
     * offset:      1 1 1 4 4 4 6
     * part_number: 0 1 2 0 1 2 0
     * count:       0 0 1 0 0 1 3
     * Offset will be the same as in Offsets.
     *
     * Generated from protobuf field <code>repeated int64 blocks_offsets = 13;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocksOffsets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->blocks_offsets = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 blocks_part_numbers = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocksPartNumbers()
    {
        return $this->blocks_part_numbers;
    }

    /**
     * Generated from protobuf field <code>repeated int64 blocks_part_numbers = 14;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocksPartNumbers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->blocks_part_numbers = $arr;

        return $this;
    }

    /**
     * How many complete messages and imcomplete messages end parts (one at most) this block contains
     *
     * Generated from protobuf field <code>repeated int64 blocks_message_counts = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocksMessageCounts()
    {
        return $this->blocks_message_counts;
    }

    /**
     * How many complete messages and imcomplete messages end parts (one at most) this block contains
     *
     * Generated from protobuf field <code>repeated int64 blocks_message_counts = 15;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocksMessageCounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->blocks_message_counts = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 blocks_uncompressed_sizes = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocksUncompressedSizes()
    {
        return $this->blocks_uncompressed_sizes;
    }

    /**
     * Generated from protobuf field <code>repeated int64 blocks_uncompressed_sizes = 16;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocksUncompressedSizes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->blocks_uncompressed_sizes = $arr;

        return $this;
    }

    /**
     * In block format version 0 each byte contains only block codec identifier
     *
     * Generated from protobuf field <code>repeated bytes blocks_headers = 17;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocksHeaders()
    {
        return $this->blocks_headers;
    }

    /**
     * In block format version 0 each byte contains only block codec identifier
     *
     * Generated from protobuf field <code>repeated bytes blocks_headers = 17;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocksHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->blocks_headers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated bytes blocks_data = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocksData()
    {
        return $this->blocks_data;
    }

    /**
     * Generated from protobuf field <code>repeated bytes blocks_data = 18;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocksData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->blocks_data = $arr;

        return $this;
    }

    /**
     * Zero if this is not first portion of data after resume or provided by client cookie otherwise.
     *
     * Generated from protobuf field <code>int64 resume_cookie = 50;</code>
     * @return int|string
     */
    public function getResumeCookie()
    {
        return $this->resume_cookie;
    }

    /**
     * Zero if this is not first portion of data after resume or provided by client cookie otherwise.
     *
     * Generated from protobuf field <code>int64 resume_cookie = 50;</code>
     * @param int|string $var
     * @return $this
     */
    public function setResumeCookie($var)
    {
        GPBUtil::checkInt64($var);
        $this->resume_cookie = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.PartitionData.ReadStatistics read_statistics = 100;</code>
     * @return \Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\PartitionData\ReadStatistics
     */
    public function getReadStatistics()
    {
        return isset($this->read_statistics) ? $this->read_statistics : null;
    }

    public function hasReadStatistics()
    {
        return isset($this->read_statistics);
    }

    public function clearReadStatistics()
    {
        unset($this->read_statistics);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.StreamingReadServerMessageNew.BatchReadResponse.PartitionData.ReadStatistics read_statistics = 100;</code>
     * @param \Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\PartitionData\ReadStatistics $var
     * @return $this
     */
    public function setReadStatistics($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\StreamingReadServerMessageNew\BatchReadResponse\PartitionData\ReadStatistics::class);
        $this->read_statistics = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PartitionData::class, \Ydb\PersQueue\V1\StreamingReadServerMessageNew_BatchReadResponse_PartitionData::class);
