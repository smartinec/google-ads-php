<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/campaign.proto

namespace Google\Ads\GoogleAds\V17\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Optimization goal setting for this campaign, which includes a set of
 * optimization goal types.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.Campaign.OptimizationGoalSetting</code>
 */
class OptimizationGoalSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of optimization goal types.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.OptimizationGoalTypeEnum.OptimizationGoalType optimization_goal_types = 1;</code>
     */
    private $optimization_goal_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $optimization_goal_types
     *           The list of optimization goal types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of optimization goal types.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.OptimizationGoalTypeEnum.OptimizationGoalType optimization_goal_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptimizationGoalTypes()
    {
        return $this->optimization_goal_types;
    }

    /**
     * The list of optimization goal types.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.OptimizationGoalTypeEnum.OptimizationGoalType optimization_goal_types = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptimizationGoalTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V17\Enums\OptimizationGoalTypeEnum\OptimizationGoalType::class);
        $this->optimization_goal_types = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OptimizationGoalSetting::class, \Google\Ads\GoogleAds\V17\Resources\Campaign_OptimizationGoalSetting::class);

