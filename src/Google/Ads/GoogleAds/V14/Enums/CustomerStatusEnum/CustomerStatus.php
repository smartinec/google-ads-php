<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/customer_status.proto

namespace Google\Ads\GoogleAds\V14\Enums\CustomerStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a customer.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.CustomerStatusEnum.CustomerStatus</code>
 */
class CustomerStatus
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
     * Indicates an active account able to serve ads.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * Indicates a canceled account unable to serve ads.
     * Can be reactivated by an admin user.
     *
     * Generated from protobuf enum <code>CANCELED = 3;</code>
     */
    const CANCELED = 3;
    /**
     * Indicates a suspended account unable to serve ads.
     * May only be activated by Google support.
     *
     * Generated from protobuf enum <code>SUSPENDED = 4;</code>
     */
    const SUSPENDED = 4;
    /**
     * Indicates a closed account unable to serve ads.
     * Test account will also have CLOSED status.
     * Status is permanent and may not be reopened.
     *
     * Generated from protobuf enum <code>CLOSED = 5;</code>
     */
    const CLOSED = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ENABLED => 'ENABLED',
        self::CANCELED => 'CANCELED',
        self::SUSPENDED => 'SUSPENDED',
        self::CLOSED => 'CLOSED',
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
class_alias(CustomerStatus::class, \Google\Ads\GoogleAds\V14\Enums\CustomerStatusEnum_CustomerStatus::class);

