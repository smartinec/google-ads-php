<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/asset_set.proto

namespace Google\Ads\GoogleAds\V10\Resources\AssetSet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Merchant ID and Feed Label from Google Merchant Center.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.resources.AssetSet.MerchantCenterFeed</code>
 */
class MerchantCenterFeed extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Merchant ID from Google Merchant Center
     *
     * Generated from protobuf field <code>int64 merchant_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $merchant_id = 0;
    /**
     * Optional. Feed Label from Google Merchant Center.
     *
     * Generated from protobuf field <code>optional string feed_label = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $feed_label = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $merchant_id
     *           Required. Merchant ID from Google Merchant Center
     *     @type string $feed_label
     *           Optional. Feed Label from Google Merchant Center.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Resources\AssetSet::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Merchant ID from Google Merchant Center
     *
     * Generated from protobuf field <code>int64 merchant_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * Required. Merchant ID from Google Merchant Center
     *
     * Generated from protobuf field <code>int64 merchant_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setMerchantId($var)
    {
        GPBUtil::checkInt64($var);
        $this->merchant_id = $var;

        return $this;
    }

    /**
     * Optional. Feed Label from Google Merchant Center.
     *
     * Generated from protobuf field <code>optional string feed_label = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFeedLabel()
    {
        return isset($this->feed_label) ? $this->feed_label : '';
    }

    public function hasFeedLabel()
    {
        return isset($this->feed_label);
    }

    public function clearFeedLabel()
    {
        unset($this->feed_label);
    }

    /**
     * Optional. Feed Label from Google Merchant Center.
     *
     * Generated from protobuf field <code>optional string feed_label = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFeedLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->feed_label = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MerchantCenterFeed::class, \Google\Ads\GoogleAds\V10\Resources\AssetSet_MerchantCenterFeed::class);

