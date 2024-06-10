<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V17\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The text ad recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.Recommendation.TextAdRecommendation</code>
 */
class TextAdRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Recommended ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad = null;
    /**
     * Output only. Creation date of the recommended ad.
     * YYYY-MM-DD format, for example, 2018-04-17.
     *
     * Generated from protobuf field <code>optional string creation_date = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $creation_date = null;
    /**
     * Output only. Date, if present, is the earliest when the recommendation
     * will be auto applied. YYYY-MM-DD format, for example, 2018-04-17.
     *
     * Generated from protobuf field <code>optional string auto_apply_date = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $auto_apply_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V17\Resources\Ad $ad
     *           Output only. Recommended ad.
     *     @type string $creation_date
     *           Output only. Creation date of the recommended ad.
     *           YYYY-MM-DD format, for example, 2018-04-17.
     *     @type string $auto_apply_date
     *           Output only. Date, if present, is the earliest when the recommendation
     *           will be auto applied. YYYY-MM-DD format, for example, 2018-04-17.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Recommended ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V17\Resources\Ad|null
     */
    public function getAd()
    {
        return $this->ad;
    }

    public function hasAd()
    {
        return isset($this->ad);
    }

    public function clearAd()
    {
        unset($this->ad);
    }

    /**
     * Output only. Recommended ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad ad = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V17\Resources\Ad $var
     * @return $this
     */
    public function setAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\Ad::class);
        $this->ad = $var;

        return $this;
    }

    /**
     * Output only. Creation date of the recommended ad.
     * YYYY-MM-DD format, for example, 2018-04-17.
     *
     * Generated from protobuf field <code>optional string creation_date = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCreationDate()
    {
        return isset($this->creation_date) ? $this->creation_date : '';
    }

    public function hasCreationDate()
    {
        return isset($this->creation_date);
    }

    public function clearCreationDate()
    {
        unset($this->creation_date);
    }

    /**
     * Output only. Creation date of the recommended ad.
     * YYYY-MM-DD format, for example, 2018-04-17.
     *
     * Generated from protobuf field <code>optional string creation_date = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCreationDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_date = $var;

        return $this;
    }

    /**
     * Output only. Date, if present, is the earliest when the recommendation
     * will be auto applied. YYYY-MM-DD format, for example, 2018-04-17.
     *
     * Generated from protobuf field <code>optional string auto_apply_date = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getAutoApplyDate()
    {
        return isset($this->auto_apply_date) ? $this->auto_apply_date : '';
    }

    public function hasAutoApplyDate()
    {
        return isset($this->auto_apply_date);
    }

    public function clearAutoApplyDate()
    {
        unset($this->auto_apply_date);
    }

    /**
     * Output only. Date, if present, is the earliest when the recommendation
     * will be auto applied. YYYY-MM-DD format, for example, 2018-04-17.
     *
     * Generated from protobuf field <code>optional string auto_apply_date = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setAutoApplyDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->auto_apply_date = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TextAdRecommendation::class, \Google\Ads\GoogleAds\V17\Resources\Recommendation_TextAdRecommendation::class);

