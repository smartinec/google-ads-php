<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/asset_group_top_combination_view.proto

namespace Google\Ads\GoogleAds\V15\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A view on the usage of ad group ad asset combination.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.AssetGroupTopCombinationView</code>
 */
class AssetGroupTopCombinationView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the asset group top combination view.
     * AssetGroup Top Combination view resource names have the form:
     * `"customers/{customer_id}/assetGroupTopCombinationViews/{asset_group_id}~{asset_combination_category}"
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The top combinations of assets that served together.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.resources.AssetGroupAssetCombinationData asset_group_top_combinations = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $asset_group_top_combinations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the asset group top combination view.
     *           AssetGroup Top Combination view resource names have the form:
     *           `"customers/{customer_id}/assetGroupTopCombinationViews/{asset_group_id}~{asset_combination_category}"
     *     @type array<\Google\Ads\GoogleAds\V15\Resources\AssetGroupAssetCombinationData>|\Google\Protobuf\Internal\RepeatedField $asset_group_top_combinations
     *           Output only. The top combinations of assets that served together.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\AssetGroupTopCombinationView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the asset group top combination view.
     * AssetGroup Top Combination view resource names have the form:
     * `"customers/{customer_id}/assetGroupTopCombinationViews/{asset_group_id}~{asset_combination_category}"
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the asset group top combination view.
     * AssetGroup Top Combination view resource names have the form:
     * `"customers/{customer_id}/assetGroupTopCombinationViews/{asset_group_id}~{asset_combination_category}"
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
     * Output only. The top combinations of assets that served together.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.resources.AssetGroupAssetCombinationData asset_group_top_combinations = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetGroupTopCombinations()
    {
        return $this->asset_group_top_combinations;
    }

    /**
     * Output only. The top combinations of assets that served together.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v15.resources.AssetGroupAssetCombinationData asset_group_top_combinations = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Ads\GoogleAds\V15\Resources\AssetGroupAssetCombinationData>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetGroupTopCombinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V15\Resources\AssetGroupAssetCombinationData::class);
        $this->asset_group_top_combinations = $arr;

        return $this;
    }

}

