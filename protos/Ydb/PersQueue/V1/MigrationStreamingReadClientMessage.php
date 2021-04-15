<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_v1.proto

namespace Ydb\PersQueue\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.PersQueue.V1.MigrationStreamingReadClientMessage</code>
 */
class MigrationStreamingReadClientMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * User credentials if update is needed or empty string.
     *
     * Generated from protobuf field <code>bytes token = 20;</code>
     */
    protected $token = '';
    protected $request;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest $init_request
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Read $read
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\StartRead $start_read
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Commit $commit
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Released $released
     *     @type \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Status $status
     *     @type string $token
     *           User credentials if update is needed or empty string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueV1::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest init_request = 1;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest
     */
    public function getInitRequest()
    {
        return $this->readOneof(1);
    }

    public function hasInitRequest()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.InitRequest init_request = 1;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest $var
     * @return $this
     */
    public function setInitRequest($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\InitRequest::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.Read read = 2;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Read
     */
    public function getRead()
    {
        return $this->readOneof(2);
    }

    public function hasRead()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.Read read = 2;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Read $var
     * @return $this
     */
    public function setRead($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Read::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.StartRead start_read = 3;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\StartRead
     */
    public function getStartRead()
    {
        return $this->readOneof(3);
    }

    public function hasStartRead()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.StartRead start_read = 3;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\StartRead $var
     * @return $this
     */
    public function setStartRead($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\StartRead::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.Commit commit = 4;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Commit
     */
    public function getCommit()
    {
        return $this->readOneof(4);
    }

    public function hasCommit()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.Commit commit = 4;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Commit $var
     * @return $this
     */
    public function setCommit($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Commit::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.Released released = 5;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Released
     */
    public function getReleased()
    {
        return $this->readOneof(5);
    }

    public function hasReleased()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.Released released = 5;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Released $var
     * @return $this
     */
    public function setReleased($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Released::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.Status status = 6;</code>
     * @return \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Status
     */
    public function getStatus()
    {
        return $this->readOneof(6);
    }

    public function hasStatus()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.Ydb.PersQueue.V1.MigrationStreamingReadClientMessage.Status status = 6;</code>
     * @param \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Ydb\PersQueue\V1\MigrationStreamingReadClientMessage\Status::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * User credentials if update is needed or empty string.
     *
     * Generated from protobuf field <code>bytes token = 20;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * User credentials if update is needed or empty string.
     *
     * Generated from protobuf field <code>bytes token = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->token = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequest()
    {
        return $this->whichOneof("request");
    }

}

