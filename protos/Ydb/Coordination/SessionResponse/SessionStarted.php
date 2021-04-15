<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_coordination.proto

namespace Ydb\Coordination\SessionResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Used to report a successful session create/restore operation
 *
 * Generated from protobuf message <code>Ydb.Coordination.SessionResponse.SessionStarted</code>
 */
class SessionStarted extends \Google\Protobuf\Internal\Message
{
    /**
     * A server generation id that may be used for restoring the session
     *
     * Generated from protobuf field <code>uint64 session_id = 1;</code>
     */
    protected $session_id = 0;
    /**
     * Timeout in milliseconds that will be used by the server
     *
     * Generated from protobuf field <code>uint64 timeout_millis = 2;</code>
     */
    protected $timeout_millis = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $session_id
     *           A server generation id that may be used for restoring the session
     *     @type int|string $timeout_millis
     *           Timeout in milliseconds that will be used by the server
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbCoordination::initOnce();
        parent::__construct($data);
    }

    /**
     * A server generation id that may be used for restoring the session
     *
     * Generated from protobuf field <code>uint64 session_id = 1;</code>
     * @return int|string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * A server generation id that may be used for restoring the session
     *
     * Generated from protobuf field <code>uint64 session_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkUint64($var);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Timeout in milliseconds that will be used by the server
     *
     * Generated from protobuf field <code>uint64 timeout_millis = 2;</code>
     * @return int|string
     */
    public function getTimeoutMillis()
    {
        return $this->timeout_millis;
    }

    /**
     * Timeout in milliseconds that will be used by the server
     *
     * Generated from protobuf field <code>uint64 timeout_millis = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeoutMillis($var)
    {
        GPBUtil::checkUint64($var);
        $this->timeout_millis = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionStarted::class, \Ydb\Coordination\SessionResponse_SessionStarted::class);

