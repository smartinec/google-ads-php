<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/asset_set_asset.proto

namespace Google\Ads\GoogleAds\V10\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AssetSetAsset is the link between an asset and an asset set.
 * Adding an AssetSetAsset links an asset with an asset set.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.resources.AssetSetAsset</code>
 */
class AssetSetAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the asset set asset.
     * Asset set asset resource names have the form:
     * `customers/{customer_id}/assetSetAssets/{asset_set_id}~{asset_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The asset set which this asset set asset is linking to.
     *
     * Generated from protobuf field <code>string asset_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $asset_set = '';
    /**
     * Immutable. The asset which this asset set asset is linking to.
     *
     * Generated from protobuf field <code>string asset = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $asset = '';
    /**
     * Output only. The status of the asset set asset. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.AssetSetAssetStatusEnum.AssetSetAssetStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the asset set asset.
     *           Asset set asset resource names have the form:
     *           `customers/{customer_id}/assetSetAssets/{asset_set_id}~{asset_id}`
     *     @type string $asset_set
     *           Immutable. The asset set which this asset set asset is linking to.
     *     @type string $asset
     *           Immutable. The asset which this asset set asset is linking to.
     *     @type int $status
     *           Output only. The status of the asset set asset. Read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Resources\AssetSetAsset::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the asset set asset.
     * Asset set asset resource names have the form:
     * `customers/{customer_id}/assetSetAssets/{asset_set_id}~{asset_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the asset set asset.
     * Asset set asset resource names have the form:
     * `customers/{customer_id}/assetSetAssets/{asset_set_id}~{asset_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Immutable. The asset set which this asset set asset is linking to.
     *
     * Generated from protobuf field <code>string asset_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAssetSet()
    {
        return $this->asset_set;
    }

    /**
     * Immutable. The asset set which this asset set asset is linking to.
     *
     * Generated from protobuf field <code>string asset_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAssetSet($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset_set = $var;

        return $this;
    }

    /**
     * Immutable. The asset which this asset set asset is linking to.
     *
     * Generated from protobuf field <code>string asset = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Immutable. The asset which this asset set asset is linking to.
     *
     * Generated from protobuf field <code>string asset = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset = $var;

        return $this;
    }

    /**
     * Output only. The status of the asset set asset. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.AssetSetAssetStatusEnum.AssetSetAssetStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. The status of the asset set asset. Read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v10.enums.AssetSetAssetStatusEnum.AssetSetAssetStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V10\Enums\AssetSetAssetStatusEnum\AssetSetAssetStatus::class);
        $this->status = $var;

        return $this;
    }

}

