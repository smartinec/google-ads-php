<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/enums/campaign_primary_status.proto

namespace Google\Ads\GoogleAds\V16\Enums\CampaignPrimaryStatusEnum;

use UnexpectedValueException;

/**
 * Enum describing the possible campaign primary status. Provides insight into
 * why a campaign is not serving or not serving optimally. Modification to the
 * campaign and its related entities might take a while to be reflected in
 * this status.
 *
 * Protobuf type <code>google.ads.googleads.v16.enums.CampaignPrimaryStatusEnum.CampaignPrimaryStatus</code>
 */
class CampaignPrimaryStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The campaign is eligible to serve.
     *
     * Generated from protobuf enum <code>ELIGIBLE = 2;</code>
     */
    const ELIGIBLE = 2;
    /**
     * The user-specified campaign status is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 3;</code>
     */
    const PAUSED = 3;
    /**
     * The user-specified campaign status is removed.
     *
     * Generated from protobuf enum <code>REMOVED = 4;</code>
     */
    const REMOVED = 4;
    /**
     * The user-specified time for this campaign to end has passed.
     *
     * Generated from protobuf enum <code>ENDED = 5;</code>
     */
    const ENDED = 5;
    /**
     * The campaign may serve in the future.
     *
     * Generated from protobuf enum <code>PENDING = 6;</code>
     */
    const PENDING = 6;
    /**
     * The campaign or its associated entities have incorrect user-specified
     * settings.
     *
     * Generated from protobuf enum <code>MISCONFIGURED = 7;</code>
     */
    const MISCONFIGURED = 7;
    /**
     * The campaign or its associated entities are limited by user-specified
     * settings.
     *
     * Generated from protobuf enum <code>LIMITED = 8;</code>
     */
    const LIMITED = 8;
    /**
     * The automated bidding system is adjusting to user-specified changes to
     * the campaign or associated entities.
     *
     * Generated from protobuf enum <code>LEARNING = 9;</code>
     */
    const LEARNING = 9;
    /**
     * The campaign is not eligible to serve.
     *
     * Generated from protobuf enum <code>NOT_ELIGIBLE = 10;</code>
     */
    const NOT_ELIGIBLE = 10;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ELIGIBLE => 'ELIGIBLE',
        self::PAUSED => 'PAUSED',
        self::REMOVED => 'REMOVED',
        self::ENDED => 'ENDED',
        self::PENDING => 'PENDING',
        self::MISCONFIGURED => 'MISCONFIGURED',
        self::LIMITED => 'LIMITED',
        self::LEARNING => 'LEARNING',
        self::NOT_ELIGIBLE => 'NOT_ELIGIBLE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignPrimaryStatus::class, \Google\Ads\GoogleAds\V16\Enums\CampaignPrimaryStatusEnum_CampaignPrimaryStatus::class);

