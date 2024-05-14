<?php

return [
    'product' => [
        'name' => 'product',
        'bar_code' => 'bar code',
        'category' => 'category',
        'selling_price' => 'selling price',
        'buying_price' => 'buyingPrice',
        'taste' => 'taste',
        'spicy' => 'spicy',
        'tag' => 'tag',
        'allergy' => 'allergy',
        'remark' => 'remark',
        'status' => 'status',
        'file' => 'file',
        'spec' => 'spec',
        'stock' => 'stock',
        'kitchen' => 'kitchen',
        'time' => 'time',
    ],
    'combo' => [
        'logo' => 'LOGO',
        'name' => 'combo',
        //'file' => '套餐图片',
        'price' => 'price',
        'status' => 'status',
        'product' => 'product',
        //'stock' => '套餐库存',
    ],
    'spec' => [
        'name' => 'spec',
        'price' => 'price',
        'status' => 'status',
    ],
    'allergy' => [
        'name' => 'allergy',
        'image' => 'image',
    ],
    'category' => [
        'name' => 'category',
    ],
    'spicy' => [
        'name' => 'spicy',
        'grade' => 'grade',
    ],
    'tag' => [
        'name' => 'tag',
    ],
    'taste' => [
        'name' => 'taste group',
        'taste' => 'taste',
        'required' => 'required',
        'check' => 'check',
        'price' => 'price',
        'sort' => 'sort',
    ],
    'user' => [
        'name' => 'user',
        'password' => 'password',
        'email' => 'email',
        'phone' => 'phone',
    ],
    'store' => [
        'name' => 'store',
        'user' => 'user',
    ],
    'kitchen' => [
        'name' => 'kitchen',
        'relation_product' => 'product'
    ],
    'order' => [
        'payment_total_price' => 'total money',
        'payment_price' => 'have paid',
        'payable_price' => 'deal with',
        'refund_price' => 'refund amount',
        'user_num' => 'user num',
    ],
    'device' => [
        'device_type' => 'device type',
        'device_id' => 'device id',
        'name' => 'name',
    ],
    'set_time' => [
        'name' => 'time',
        'start' => 'start',
        'end' => 'v',
    ],
    'client_category' => [
        'name' => 'client',
    ],
];
