<?php
header("Content-Type: text/html; charset=utf-8");

require('vendor/autoload.php');

use SilaBgDistro\Order;

define('API_TOKEN', '');

$order = new Order(API_TOKEN);

try {

    // $orderList = $order->getList();
    // print_r($orderList);

    // $orderDetail = $order->getDetail(null);
    // print_r($orderDetail);

    // $deliveryTypes = $order->getDeliveryTypes();
    // print_r($deliveryTypes);

    $orderData = array(
        'delivery_type' => null,
        'office' => null,
        'invoice' => null,
        'data' => array(
            array(
                "ean" => null,
                "qtty" => 1
            ),
        )
    );

    $stockOrder = $order->createOrder($orderData);
    print_r($stockOrder);
} catch (\Exception $e) {
    echo $e->getCode();
    echo $e->getMessage();
}
