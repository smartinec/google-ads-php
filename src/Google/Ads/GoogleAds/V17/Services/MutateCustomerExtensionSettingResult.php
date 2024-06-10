<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/customer_extension_setting_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the customer extension setting mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.MutateCustomerExtensionSettingResult</code>
 */
class MutateCustomerExtensionSettingResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated CustomerExtensionSetting with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerExtensionSetting customer_extension_setting = 2;</code>
     */
    protected $customer_extension_setting = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V17\Resources\CustomerExtensionSetting $customer_extension_setting
     *           The mutated CustomerExtensionSetting with only mutable fields after mutate.
     *           The field will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\CustomerExtensionSettingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
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
     * The mutated CustomerExtensionSetting with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerExtensionSetting customer_extension_setting = 2;</code>
     * @return \Google\Ads\GoogleAds\V17\Resources\CustomerExtensionSetting|null
     */
    public function getCustomerExtensionSetting()
    {
        return $this->customer_extension_setting;
    }

    public function hasCustomerExtensionSetting()
    {
        return isset($this->customer_extension_setting);
    }

    public function clearCustomerExtensionSetting()
    {
        unset($this->customer_extension_setting);
    }

    /**
     * The mutated CustomerExtensionSetting with only mutable fields after mutate.
     * The field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerExtensionSetting customer_extension_setting = 2;</code>
     * @param \Google\Ads\GoogleAds\V17\Resources\CustomerExtensionSetting $var
     * @return $this
     */
    public function setCustomerExtensionSetting($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\CustomerExtensionSetting::class);
        $this->customer_extension_setting = $var;

        return $this;
    }

}

