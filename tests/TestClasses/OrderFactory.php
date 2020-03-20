<?php
namespace Tests\TestClasses;
use App\Order;

/**
 * Class OrderFactory
 * @package Tests\TestClasses
 */
class OrderFactory
{
    /**
     * @param $shipping_country
     * @param $status
     * @return Order
     */
    public static function create($shipping_country,$status)
    {
      return new Order([
          'shipping_country'=>$shipping_country,
          'status'=>$status
      ]);
    }
}
