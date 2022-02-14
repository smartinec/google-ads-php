<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/common/policy.proto

namespace Google\Ads\GoogleAds\V10\Common\PolicyTopicConstraint;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of countries where a resource's serving is constrained.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.common.PolicyTopicConstraint.CountryConstraintList</code>
 */
class CountryConstraintList extends \Google\Protobuf\Internal\Message
{
    /**
     * Total number of countries targeted by the resource.
     *
     * Generated from protobuf field <code>optional int32 total_targeted_countries = 3;</code>
     */
    protected $total_targeted_countries = null;
    /**
     * Countries in which serving is restricted.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v10.common.PolicyTopicConstraint.CountryConstraint countries = 2;</code>
     */
    private $countries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total_targeted_countries
     *           Total number of countries targeted by the resource.
     *     @type \Google\Ads\GoogleAds\V10\Common\PolicyTopicConstraint\CountryConstraint[]|\Google\Protobuf\Internal\RepeatedField $countries
     *           Countries in which serving is restricted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Total number of countries targeted by the resource.
     *
     * Generated from protobuf field <code>optional int32 total_targeted_countries = 3;</code>
     * @return int
     */
    public function getTotalTargetedCountries()
    {
        return isset($this->total_targeted_countries) ? $this->total_targeted_countries : 0;
    }

    public function hasTotalTargetedCountries()
    {
        return isset($this->total_targeted_countries);
    }

    public function clearTotalTargetedCountries()
    {
        unset($this->total_targeted_countries);
    }

    /**
     * Total number of countries targeted by the resource.
     *
     * Generated from protobuf field <code>optional int32 total_targeted_countries = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalTargetedCountries($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_targeted_countries = $var;

        return $this;
    }

    /**
     * Countries in which serving is restricted.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v10.common.PolicyTopicConstraint.CountryConstraint countries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Countries in which serving is restricted.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v10.common.PolicyTopicConstraint.CountryConstraint countries = 2;</code>
     * @param \Google\Ads\GoogleAds\V10\Common\PolicyTopicConstraint\CountryConstraint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V10\Common\PolicyTopicConstraint\CountryConstraint::class);
        $this->countries = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CountryConstraintList::class, \Google\Ads\GoogleAds\V10\Common\PolicyTopicConstraint_CountryConstraintList::class);

