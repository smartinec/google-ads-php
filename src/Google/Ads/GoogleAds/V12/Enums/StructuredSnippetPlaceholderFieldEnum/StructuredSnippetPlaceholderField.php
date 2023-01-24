<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/structured_snippet_placeholder_field.proto

namespace Google\Ads\GoogleAds\V12\Enums\StructuredSnippetPlaceholderFieldEnum;

use UnexpectedValueException;

/**
 * Possible values for Structured Snippet placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v12.enums.StructuredSnippetPlaceholderFieldEnum.StructuredSnippetPlaceholderField</code>
 */
class StructuredSnippetPlaceholderField
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
     * Data Type: STRING. The category of snippet of your products/services.
     * Must match exactly one of the predefined structured snippets headers.
     * For a list, visit
     * https://developers.google.com/adwords/api/docs/appendix/structured-snippet-headers
     *
     * Generated from protobuf enum <code>HEADER = 2;</code>
     */
    const HEADER = 2;
    /**
     * Data Type: STRING_LIST. Text values that describe your products/services.
     * All text must be family safe. Special or non-ASCII characters are not
     * permitted. A snippet can be at most 25 characters.
     *
     * Generated from protobuf enum <code>SNIPPETS = 3;</code>
     */
    const SNIPPETS = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::HEADER => 'HEADER',
        self::SNIPPETS => 'SNIPPETS',
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
class_alias(StructuredSnippetPlaceholderField::class, \Google\Ads\GoogleAds\V12\Enums\StructuredSnippetPlaceholderFieldEnum_StructuredSnippetPlaceholderField::class);

