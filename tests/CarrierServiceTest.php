<?php
/**
 * Created by PhpStorm.
 * @author Tareq Mahmood <tareqtms@yahoo.com>
 * Created at: 9/10/16 10:44 AM UTC+06:00
 */

namespace PHPShopify;


class CarrierServiceTest extends TestSimpleResource
{
    public $postArray = [
        "name" => "Shipping Rate Provider",
        "callback_url" => "http://shippingrateprovider.com",
        "service_discovery" => true
    ];
    public $putArray = [
        "name" => "Updated Shipping Rate Provider",
        "active" => false,
    ];
}