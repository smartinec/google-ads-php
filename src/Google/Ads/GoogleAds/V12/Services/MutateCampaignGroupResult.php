<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/campaign_group_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the campaign group mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.MutateCampaignGroupResult</code>
 */
class MutateCampaignGroupResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated campaign group with only mutable fields after mutate. The field
     * will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.CampaignGroup campaign_group = 2;</code>
     */
    protected $campaign_group = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Required. Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V12\Resources\CampaignGroup $campaign_group
     *           The mutated campaign group with only mutable fields after mutate. The field
     *           will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\CampaignGroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Required. Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated campaign group with only mutable fields after mutate. The field
     * will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.CampaignGroup campaign_group = 2;</code>
     * @return \Google\Ads\GoogleAds\V12\Resources\CampaignGroup|null
     */
    public function getCampaignGroup()
    {
        return $this->campaign_group;
    }

    public function hasCampaignGroup()
    {
        return isset($this->campaign_group);
    }

    public function clearCampaignGroup()
    {
        unset($this->campaign_group);
    }

    /**
     * The mutated campaign group with only mutable fields after mutate. The field
     * will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.CampaignGroup campaign_group = 2;</code>
     * @param \Google\Ads\GoogleAds\V12\Resources\CampaignGroup $var
     * @return $this
     */
    public function setCampaignGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Resources\CampaignGroup::class);
        $this->campaign_group = $var;

        return $this;
    }

}

