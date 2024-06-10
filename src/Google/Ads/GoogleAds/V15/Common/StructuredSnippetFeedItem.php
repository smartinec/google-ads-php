<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/common/extensions.proto

namespace Google\Ads\GoogleAds\V15\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a structured snippet extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.common.StructuredSnippetFeedItem</code>
 */
class StructuredSnippetFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The header of the snippet.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string header = 3;</code>
     */
    protected $header = null;
    /**
     * The values in the snippet.
     * The maximum size of this collection is 10.
     *
     * Generated from protobuf field <code>repeated string values = 4;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $header
     *           The header of the snippet.
     *           This string must not be empty.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $values
     *           The values in the snippet.
     *           The maximum size of this collection is 10.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The header of the snippet.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string header = 3;</code>
     * @return string
     */
    public function getHeader()
    {
        return isset($this->header) ? $this->header : '';
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * The header of the snippet.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>optional string header = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->header = $var;

        return $this;
    }

    /**
     * The values in the snippet.
     * The maximum size of this collection is 10.
     *
     * Generated from protobuf field <code>repeated string values = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * The values in the snippet.
     * The maximum size of this collection is 10.
     *
     * Generated from protobuf field <code>repeated string values = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->values = $arr;

        return $this;
    }

}

