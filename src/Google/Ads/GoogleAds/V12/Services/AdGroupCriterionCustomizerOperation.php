<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/ad_group_criterion_customizer_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (create, remove) on an customizer attribute.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.AdGroupCriterionCustomizerOperation</code>
 */
class AdGroupCriterionCustomizerOperation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V12\Resources\AdGroupCriterionCustomizer $create
     *           Create operation: No resource name is expected for the new ad group
     *           criterion customizer.
     *     @type string $remove
     *           Remove operation: A resource name for the removed ad group criterion
     *           customizer is expected, in this format:
     *           `customers/{customer_id}/adGroupCriterionCustomizers/{ad_group_id}~{criterion_id}~{customizer_attribute_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\AdGroupCriterionCustomizerService::initOnce();
        parent::__construct($data);
    }

    /**
     * Create operation: No resource name is expected for the new ad group
     * criterion customizer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.AdGroupCriterionCustomizer create = 1;</code>
     * @return \Google\Ads\GoogleAds\V12\Resources\AdGroupCriterionCustomizer|null
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    public function hasCreate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new ad group
     * criterion customizer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.AdGroupCriterionCustomizer create = 1;</code>
     * @param \Google\Ads\GoogleAds\V12\Resources\AdGroupCriterionCustomizer $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Resources\AdGroupCriterionCustomizer::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed ad group criterion
     * customizer is expected, in this format:
     * `customers/{customer_id}/adGroupCriterionCustomizers/{ad_group_id}~{criterion_id}~{customizer_attribute_id}`
     *
     * Generated from protobuf field <code>string remove = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(2);
    }

    public function hasRemove()
    {
        return $this->hasOneof(2);
    }

    /**
     * Remove operation: A resource name for the removed ad group criterion
     * customizer is expected, in this format:
     * `customers/{customer_id}/adGroupCriterionCustomizers/{ad_group_id}~{criterion_id}~{customizer_attribute_id}`
     *
     * Generated from protobuf field <code>string remove = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

