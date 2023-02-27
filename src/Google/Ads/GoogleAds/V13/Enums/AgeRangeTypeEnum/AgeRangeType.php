<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/age_range_type.proto

namespace Google\Ads\GoogleAds\V13\Enums\AgeRangeTypeEnum;

use UnexpectedValueException;

/**
 * The type of demographic age ranges (for example, between 18 and 24 years
 * old).
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.AgeRangeTypeEnum.AgeRangeType</code>
 */
class AgeRangeType
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
     * Between 18 and 24 years old.
     *
     * Generated from protobuf enum <code>AGE_RANGE_18_24 = 503001;</code>
     */
    const AGE_RANGE_18_24 = 503001;
    /**
     * Between 25 and 34 years old.
     *
     * Generated from protobuf enum <code>AGE_RANGE_25_34 = 503002;</code>
     */
    const AGE_RANGE_25_34 = 503002;
    /**
     * Between 35 and 44 years old.
     *
     * Generated from protobuf enum <code>AGE_RANGE_35_44 = 503003;</code>
     */
    const AGE_RANGE_35_44 = 503003;
    /**
     * Between 45 and 54 years old.
     *
     * Generated from protobuf enum <code>AGE_RANGE_45_54 = 503004;</code>
     */
    const AGE_RANGE_45_54 = 503004;
    /**
     * Between 55 and 64 years old.
     *
     * Generated from protobuf enum <code>AGE_RANGE_55_64 = 503005;</code>
     */
    const AGE_RANGE_55_64 = 503005;
    /**
     * 65 years old and beyond.
     *
     * Generated from protobuf enum <code>AGE_RANGE_65_UP = 503006;</code>
     */
    const AGE_RANGE_65_UP = 503006;
    /**
     * Undetermined age range.
     *
     * Generated from protobuf enum <code>AGE_RANGE_UNDETERMINED = 503999;</code>
     */
    const AGE_RANGE_UNDETERMINED = 503999;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::AGE_RANGE_18_24 => 'AGE_RANGE_18_24',
        self::AGE_RANGE_25_34 => 'AGE_RANGE_25_34',
        self::AGE_RANGE_35_44 => 'AGE_RANGE_35_44',
        self::AGE_RANGE_45_54 => 'AGE_RANGE_45_54',
        self::AGE_RANGE_55_64 => 'AGE_RANGE_55_64',
        self::AGE_RANGE_65_UP => 'AGE_RANGE_65_UP',
        self::AGE_RANGE_UNDETERMINED => 'AGE_RANGE_UNDETERMINED',
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
class_alias(AgeRangeType::class, \Google\Ads\GoogleAds\V13\Enums\AgeRangeTypeEnum_AgeRangeType::class);

