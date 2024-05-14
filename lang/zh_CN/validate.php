<?php

return [
    'login' => [
        'name' => '用户名不能为空',
        'password' => '密码不能为空',
        'email' => '邮箱长度不能超过128位',
        'empty' => '管理员不能为空',
        'array' => '管理员必须是数组'
    ],
    'product' => [
        'name' => '商品名称长度不能超过128位',
        'bar_code' => '条码长度不能超过128位',
        'selling_price' => '售价金额不能小于0',
        'buying_price' => '成本价金额不能小于0',
        'allergy' => '过敏名称长度不能超过128位',
        'empty' => '商品不能为空',
        'array' => '商品必须是数组',
        'remark' => '备注不得超过128位',
        'client_category' => '该商品已有分类',
    ],
    'order' => [
        'count' => '购买数量超出库存',
        'lessen_count' => '数量超出购买数量',
        'price' => '超出订单价格',
        'payment' => '订单已支付',
        'payment_refund' => '订单未支付',
        'refund_price' => '退款金额必须是数字',
        'cancel' => '订单已取消',
        'exceed' => '超出订单金额',


        'empty' => '没有商品',
        'id_null' => '没有商品',
        'count_null' => '没有数量',
        'spec_null' => '没有规格',
        'taste_array' => '口味必须为一个数组',
        'taste_empty' => '口味不能为空',
        'allergy_array' => '过敏必须为一个数组',
        'allergy_numeric' => '过敏必须为数字',
        'remark' => '备注字符长度不能超过255位',
        'dine_way' => '就餐方式必须是数字',
        'dine_way_between' => '不支持的就餐方式',
        'discount_null' => '订单折扣不能为空',
        'discount_between' => '订单折扣必须是介于0和100之间的整数',
        'discount_gt' => '订单折扣必须大于0',
        'discount_numeric' => '订单折扣必须为数字',
    ],
    'allergy' => [
        'name' => '过敏名称长度不能超过128位',
    ],
    'category' => [
        'name' => '分类名称长度不能超过128位',
    ],
    'spicy' => [
        'name' => '辣度名称长度不能超过128位',
        'grade' => '辣度等级长度不能超过128位',
    ],
    'tag' => [
        'name' => '标签名称长度不能超过128位',
    ],
    'taste' => [
        'name' => '口味名称长度不能超过128位',
    ],
    'combo' => [
        'name' => '套餐名称长度不能超过128位',
        'price' => '售套餐金额不能小于0',
        'empty' => '套餐不能为空',
        'array' => '套餐必须是数组'
    ],
    'spec' => [
        'name' => '规格名称长度不能超过128位',
        'price' => '售套餐金额不能小于0',
    ],
    'store' => [
        'name' => '门店名称长度不能超过128位',
    ],
    'user' => [
        'name' => '管理员名称长度不能超过128位',
        'password' => '密码长度不能超过128位',
        'email' => '邮箱长度不能超过128位',
        'email_format' => '邮箱格式不正确',
        'phone' => '手机号长度不能超过11位',
        'phone_format' => '手机号格式不正确',
        'password_update' => '输入此项将修改密码',
    ],
    'kitchen' => [
        'name' => '分类名称长度不能超过128位',
    ],
    'device' => [
        'name' => '设备名称',
    ],
    'payment' => [
        'method' => '支付方式不能为空',
        'payment_price' => '支付金额不能为空',
        'payment_price_numeric' => '支付金额必须为数字',
        'payment_price_gt' => '支付金额必须大于零',
        'have_paid' => '订单已支付',
    ],
    'carousel' => [
        'name' => '轮播图名称过长',
        'logo' => '轮播图标识过长',
    ],
];
