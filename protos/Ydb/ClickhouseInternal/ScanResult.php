<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_clickhouse_internal.proto

namespace Ydb\ClickhouseInternal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.ClickhouseInternal.ScanResult</code>
 */
class ScanResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated bytes blocks = 1;</code>
     */
    private $blocks;
    /**
     * no more rows
     *
     * Generated from protobuf field <code>bool eos = 2;</code>
     */
    protected $eos = false;
    /**
     * Generated from protobuf field <code>bytes last_key = 3;</code>
     */
    protected $last_key = '';
    /**
     * Generated from protobuf field <code>bool last_key_inclusive = 4;</code>
     */
    protected $last_key_inclusive = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $blocks
     *     @type bool $eos
     *           no more rows
     *     @type string $last_key
     *     @type bool $last_key_inclusive
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbClickhouseInternal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated bytes blocks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * Generated from protobuf field <code>repeated bytes blocks = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->blocks = $arr;

        return $this;
    }

    /**
     * no more rows
     *
     * Generated from protobuf field <code>bool eos = 2;</code>
     * @return bool
     */
    public function getEos()
    {
        return $this->eos;
    }

    /**
     * no more rows
     *
     * Generated from protobuf field <code>bool eos = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEos($var)
    {
        GPBUtil::checkBool($var);
        $this->eos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes last_key = 3;</code>
     * @return string
     */
    public function getLastKey()
    {
        return $this->last_key;
    }

    /**
     * Generated from protobuf field <code>bytes last_key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLastKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->last_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool last_key_inclusive = 4;</code>
     * @return bool
     */
    public function getLastKeyInclusive()
    {
        return $this->last_key_inclusive;
    }

    /**
     * Generated from protobuf field <code>bool last_key_inclusive = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setLastKeyInclusive($var)
    {
        GPBUtil::checkBool($var);
        $this->last_key_inclusive = $var;

        return $this;
    }

}
