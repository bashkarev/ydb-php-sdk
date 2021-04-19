<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_export.proto

namespace Ydb\Export\ExportToYtSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Export.ExportToYtSettings.Item</code>
 */
class Item extends \Google\Protobuf\Internal\Message
{
    /**
     * Database path to a table to be exported
     *
     * Generated from protobuf field <code>string source_path = 1 [(.Ydb.required) = true];</code>
     */
    protected $source_path = '';
    /**
     * Generated from protobuf field <code>string destination_path = 2 [(.Ydb.required) = true];</code>
     */
    protected $destination_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_path
     *           Database path to a table to be exported
     *     @type string $destination_path
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbExport::initOnce();
        parent::__construct($data);
    }

    /**
     * Database path to a table to be exported
     *
     * Generated from protobuf field <code>string source_path = 1 [(.Ydb.required) = true];</code>
     * @return string
     */
    public function getSourcePath()
    {
        return $this->source_path;
    }

    /**
     * Database path to a table to be exported
     *
     * Generated from protobuf field <code>string source_path = 1 [(.Ydb.required) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setSourcePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string destination_path = 2 [(.Ydb.required) = true];</code>
     * @return string
     */
    public function getDestinationPath()
    {
        return $this->destination_path;
    }

    /**
     * Generated from protobuf field <code>string destination_path = 2 [(.Ydb.required) = true];</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_path = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Item::class, \Ydb\Export\ExportToYtSettings_Item::class);
