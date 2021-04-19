<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_coordination.proto

namespace Ydb\Coordination;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Describes the state of a semaphore
 *
 * Generated from protobuf message <code>Ydb.Coordination.SemaphoreDescription</code>
 */
class SemaphoreDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the semaphore
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * User-defined data attached to the semaphore
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    protected $data = '';
    /**
     * Number of tokens currently acquired by owners
     *
     * Generated from protobuf field <code>uint64 count = 7;</code>
     */
    protected $count = 0;
    /**
     * Maximum number of tokens that may acquired
     *
     * Generated from protobuf field <code>uint64 limit = 3;</code>
     */
    protected $limit = 0;
    /**
     * Ephemeral semaphores are deleted when released by all owners and waiters
     *
     * Generated from protobuf field <code>bool ephemeral = 4;</code>
     */
    protected $ephemeral = false;
    /**
     * A list of current owners of the semaphore
     *
     * Generated from protobuf field <code>repeated .Ydb.Coordination.SemaphoreSession owners = 5;</code>
     */
    private $owners;
    /**
     * A list of current waiters on the semaphore
     *
     * Generated from protobuf field <code>repeated .Ydb.Coordination.SemaphoreSession waiters = 6;</code>
     */
    private $waiters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the semaphore
     *     @type string $data
     *           User-defined data attached to the semaphore
     *     @type int|string $count
     *           Number of tokens currently acquired by owners
     *     @type int|string $limit
     *           Maximum number of tokens that may acquired
     *     @type bool $ephemeral
     *           Ephemeral semaphores are deleted when released by all owners and waiters
     *     @type \Ydb\Coordination\SemaphoreSession[]|\Google\Protobuf\Internal\RepeatedField $owners
     *           A list of current owners of the semaphore
     *     @type \Ydb\Coordination\SemaphoreSession[]|\Google\Protobuf\Internal\RepeatedField $waiters
     *           A list of current waiters on the semaphore
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbCoordination::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the semaphore
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the semaphore
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * User-defined data attached to the semaphore
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * User-defined data attached to the semaphore
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Number of tokens currently acquired by owners
     *
     * Generated from protobuf field <code>uint64 count = 7;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of tokens currently acquired by owners
     *
     * Generated from protobuf field <code>uint64 count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Maximum number of tokens that may acquired
     *
     * Generated from protobuf field <code>uint64 limit = 3;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Maximum number of tokens that may acquired
     *
     * Generated from protobuf field <code>uint64 limit = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkUint64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Ephemeral semaphores are deleted when released by all owners and waiters
     *
     * Generated from protobuf field <code>bool ephemeral = 4;</code>
     * @return bool
     */
    public function getEphemeral()
    {
        return $this->ephemeral;
    }

    /**
     * Ephemeral semaphores are deleted when released by all owners and waiters
     *
     * Generated from protobuf field <code>bool ephemeral = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setEphemeral($var)
    {
        GPBUtil::checkBool($var);
        $this->ephemeral = $var;

        return $this;
    }

    /**
     * A list of current owners of the semaphore
     *
     * Generated from protobuf field <code>repeated .Ydb.Coordination.SemaphoreSession owners = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOwners()
    {
        return $this->owners;
    }

    /**
     * A list of current owners of the semaphore
     *
     * Generated from protobuf field <code>repeated .Ydb.Coordination.SemaphoreSession owners = 5;</code>
     * @param \Ydb\Coordination\SemaphoreSession[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOwners($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Coordination\SemaphoreSession::class);
        $this->owners = $arr;

        return $this;
    }

    /**
     * A list of current waiters on the semaphore
     *
     * Generated from protobuf field <code>repeated .Ydb.Coordination.SemaphoreSession waiters = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWaiters()
    {
        return $this->waiters;
    }

    /**
     * A list of current waiters on the semaphore
     *
     * Generated from protobuf field <code>repeated .Ydb.Coordination.SemaphoreSession waiters = 6;</code>
     * @param \Ydb\Coordination\SemaphoreSession[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWaiters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Coordination\SemaphoreSession::class);
        $this->waiters = $arr;

        return $this;
    }

}
