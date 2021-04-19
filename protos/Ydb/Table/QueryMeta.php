<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Holds query id and type of parameters
 *
 * Generated from protobuf message <code>Ydb.Table.QueryMeta</code>
 */
class QueryMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * Query identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Type of parameters
     *
     * Generated from protobuf field <code>map<string, .Ydb.Type> parameters_types = 2;</code>
     */
    private $parameters_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Query identifier
     *     @type array|\Google\Protobuf\Internal\MapField $parameters_types
     *           Type of parameters
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Query identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Query identifier
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Type of parameters
     *
     * Generated from protobuf field <code>map<string, .Ydb.Type> parameters_types = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParametersTypes()
    {
        return $this->parameters_types;
    }

    /**
     * Type of parameters
     *
     * Generated from protobuf field <code>map<string, .Ydb.Type> parameters_types = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParametersTypes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Type::class);
        $this->parameters_types = $arr;

        return $this;
    }

}
