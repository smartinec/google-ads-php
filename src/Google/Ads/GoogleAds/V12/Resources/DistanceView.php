<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/distance_view.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A distance view with metrics aggregated by the user's distance from an
 * advertiser's location extensions. Each DistanceBucket includes all
 * impressions that fall within its distance and a single impression will
 * contribute to the metrics for all DistanceBuckets that include the user's
 * distance.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.DistanceView</code>
 */
class DistanceView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the distance view.
     * Distance view resource names have the form:
     * `customers/{customer_id}/distanceViews/1~{distance_bucket}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Grouping of user distance from location extensions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.DistanceBucketEnum.DistanceBucket distance_bucket = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $distance_bucket = 0;
    /**
     * Output only. True if the DistanceBucket is using the metric system, false otherwise.
     *
     * Generated from protobuf field <code>optional bool metric_system = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $metric_system = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the distance view.
     *           Distance view resource names have the form:
     *           `customers/{customer_id}/distanceViews/1~{distance_bucket}`
     *     @type int $distance_bucket
     *           Output only. Grouping of user distance from location extensions.
     *     @type bool $metric_system
     *           Output only. True if the DistanceBucket is using the metric system, false otherwise.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\DistanceView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the distance view.
     * Distance view resource names have the form:
     * `customers/{customer_id}/distanceViews/1~{distance_bucket}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the distance view.
     * Distance view resource names have the form:
     * `customers/{customer_id}/distanceViews/1~{distance_bucket}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. Grouping of user distance from location extensions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.DistanceBucketEnum.DistanceBucket distance_bucket = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDistanceBucket()
    {
        return $this->distance_bucket;
    }

    /**
     * Output only. Grouping of user distance from location extensions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.enums.DistanceBucketEnum.DistanceBucket distance_bucket = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDistanceBucket($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V12\Enums\DistanceBucketEnum\DistanceBucket::class);
        $this->distance_bucket = $var;

        return $this;
    }

    /**
     * Output only. True if the DistanceBucket is using the metric system, false otherwise.
     *
     * Generated from protobuf field <code>optional bool metric_system = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getMetricSystem()
    {
        return isset($this->metric_system) ? $this->metric_system : false;
    }

    public function hasMetricSystem()
    {
        return isset($this->metric_system);
    }

    public function clearMetricSystem()
    {
        unset($this->metric_system);
    }

    /**
     * Output only. True if the DistanceBucket is using the metric system, false otherwise.
     *
     * Generated from protobuf field <code>optional bool metric_system = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setMetricSystem($var)
    {
        GPBUtil::checkBool($var);
        $this->metric_system = $var;

        return $this;
    }

}

