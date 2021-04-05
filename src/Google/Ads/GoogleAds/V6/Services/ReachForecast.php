<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A point on reach curve.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.ReachForecast</code>
 */
class ReachForecast extends \Google\Protobuf\Internal\Message
{
    /**
     * The cost in micros.
     *
     * Generated from protobuf field <code>int64 cost_micros = 5;</code>
     */
    protected $cost_micros = 0;
    /**
     * Forecasted traffic metrics for this point.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.Forecast forecast = 2;</code>
     */
    protected $forecast = null;
    /**
     * The forecasted allocation and traffic metrics for each planned product
     * at this point on the reach curve.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.services.PlannedProductReachForecast planned_product_reach_forecasts = 4;</code>
     */
    private $planned_product_reach_forecasts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $cost_micros
     *           The cost in micros.
     *     @type \Google\Ads\GoogleAds\V6\Services\Forecast $forecast
     *           Forecasted traffic metrics for this point.
     *     @type \Google\Ads\GoogleAds\V6\Services\PlannedProductReachForecast[]|\Google\Protobuf\Internal\RepeatedField $planned_product_reach_forecasts
     *           The forecasted allocation and traffic metrics for each planned product
     *           at this point on the reach curve.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The cost in micros.
     *
     * Generated from protobuf field <code>int64 cost_micros = 5;</code>
     * @return int|string
     */
    public function getCostMicros()
    {
        return $this->cost_micros;
    }

    /**
     * The cost in micros.
     *
     * Generated from protobuf field <code>int64 cost_micros = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCostMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cost_micros = $var;

        return $this;
    }

    /**
     * Forecasted traffic metrics for this point.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.Forecast forecast = 2;</code>
     * @return \Google\Ads\GoogleAds\V6\Services\Forecast|null
     */
    public function getForecast()
    {
        return isset($this->forecast) ? $this->forecast : null;
    }

    public function hasForecast()
    {
        return isset($this->forecast);
    }

    public function clearForecast()
    {
        unset($this->forecast);
    }

    /**
     * Forecasted traffic metrics for this point.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.Forecast forecast = 2;</code>
     * @param \Google\Ads\GoogleAds\V6\Services\Forecast $var
     * @return $this
     */
    public function setForecast($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Services\Forecast::class);
        $this->forecast = $var;

        return $this;
    }

    /**
     * The forecasted allocation and traffic metrics for each planned product
     * at this point on the reach curve.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.services.PlannedProductReachForecast planned_product_reach_forecasts = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlannedProductReachForecasts()
    {
        return $this->planned_product_reach_forecasts;
    }

    /**
     * The forecasted allocation and traffic metrics for each planned product
     * at this point on the reach curve.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.services.PlannedProductReachForecast planned_product_reach_forecasts = 4;</code>
     * @param \Google\Ads\GoogleAds\V6\Services\PlannedProductReachForecast[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlannedProductReachForecasts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V6\Services\PlannedProductReachForecast::class);
        $this->planned_product_reach_forecasts = $arr;

        return $this;
    }

}

