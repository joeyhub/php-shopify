<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at 8/18/16 3:18 PM UTC+06:00
 *
 * @see https://help.shopify.com/api/reference/article Shopify API Reference for Article
 */

namespace PHPShopify\ShopifyResource;

use PHPShopify\ShopifyResource;

/**
 * --------------------------------------------------------------------------
 * Article -> Child Resources
 * --------------------------------------------------------------------------
 * @property-read Event $Event
 * @property-read Metafield $Metafield
 *
 * @method Event Event(integer $id = null)
 * @method Metafield Metafield(integer $id = null)
 */
class Article extends ShopifyResource
{
    protected $resourceKey = 'article';

    protected $childResource = [
        'Event',
        'Metafield',
    ];
}
