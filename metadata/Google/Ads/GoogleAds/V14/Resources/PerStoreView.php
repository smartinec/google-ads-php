<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/resources/per_store_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V14\Resources;

class PerStoreView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v14/resources/per_store_view.proto"google.ads.googleads.v14.resourcesgoogle/api/resource.proto"�
PerStoreViewD
resource_name (	B-�A�A\'
%googleads.googleapis.com/PerStoreView
place_id (	B�A:\\�AY
%googleads.googleapis.com/PerStoreView0customers/{customer_id}/perStoreViews/{place_id}B�
&com.google.ads.googleads.v14.resourcesBPerStoreViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v14/resources;resources�GAA�"Google.Ads.GoogleAds.V14.Resources�"Google\\Ads\\GoogleAds\\V14\\Resources�&Google::Ads::GoogleAds::V14::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

