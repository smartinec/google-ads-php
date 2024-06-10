<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/smart_campaign_setting_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details related to removed Smart campaigns.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.SmartCampaignRemovedDetails</code>
 */
class SmartCampaignRemovedDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The timestamp of when the campaign was removed.
     * The timestamp is in the customer’s timezone and in
     * “yyyy-MM-dd HH:mm:ss” format.
     *
     * Generated from protobuf field <code>optional string removed_date_time = 1;</code>
     */
    protected $removed_date_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $removed_date_time
     *           The timestamp of when the campaign was removed.
     *           The timestamp is in the customer’s timezone and in
     *           “yyyy-MM-dd HH:mm:ss” format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\SmartCampaignSettingService::initOnce();
        parent::__construct($data);
    }

    /**
     * The timestamp of when the campaign was removed.
     * The timestamp is in the customer’s timezone and in
     * “yyyy-MM-dd HH:mm:ss” format.
     *
     * Generated from protobuf field <code>optional string removed_date_time = 1;</code>
     * @return string
     */
    public function getRemovedDateTime()
    {
        return isset($this->removed_date_time) ? $this->removed_date_time : '';
    }

    public function hasRemovedDateTime()
    {
        return isset($this->removed_date_time);
    }

    public function clearRemovedDateTime()
    {
        unset($this->removed_date_time);
    }

    /**
     * The timestamp of when the campaign was removed.
     * The timestamp is in the customer’s timezone and in
     * “yyyy-MM-dd HH:mm:ss” format.
     *
     * Generated from protobuf field <code>optional string removed_date_time = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRemovedDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->removed_date_time = $var;

        return $this;
    }

}

