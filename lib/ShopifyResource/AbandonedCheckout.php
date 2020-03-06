<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at 8/18/16 9:50 AM UTC+06:00
 *
 * @see https://help.shopify.com/api/reference/abandoned_checkouts Shopify API Reference for Abandoned checkouts
 */

namespace PHPShopify\ShopifyResource;

use PHPShopify\ShopifyResource;

class AbandonedCheckout extends ShopifyResource
{
    protected $resourceKey = 'checkout';
}
