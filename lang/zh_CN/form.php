<?php

return [
    'product' => [
        'name' => '名称',
        'bar_code' => '条码',
        'category' => '分类',
        'selling_price' => '售价',
        'buying_price' => '进价',
        'taste' => '口味',
        'spicy' => '辣度',
        'tag' => '标签',
        'allergy' => '过敏源',
        'remark' => '备注',
        'status' => '状态',
        'file' => '封面图片',
        'spec' => '商品规格',
        'stock' => '商品库存',
        'kitchen' => '厨打分类',
        'time' => '时间段',
    ],
    'combo' => [
        'logo' => 'LOGO',
        'name' => '套餐名称',
        //'file' => '套餐图片',
        'price' => '价格',
        'status' => '状态',
        'product' => '套餐商品',
        //'stock' => '套餐库存',
    ],
    'spec' => [
        'name' => '名称',
        'price' => '价格',
        'status' => '状态',
    ],
    'allergy' => [
        'name' => '名称',
        'image' => '图片',
    ],
    'category' => [
        'name' => '名称',
    ],
    'spicy' => [
        'name' => '名称',
        'grade' => '等级',
    ],
    'tag' => [
        'name' => '名称',
    ],
    'taste' => [
        'name' => '口味组名称',
        'taste' => '口味名称',
        'required' => '是否必选',
        'check' => '是否多选',
        'price' => '价格',
        'sort' => '排序',
    ],
    'user' => [
        'name' => '账号',
        'password' => '密码',
        'email' => '邮箱',
        'phone' => '手机号',
    ],
    'client_category' => [
        'name' => '分类名称',
        'file' => '激活状态图标',
        'grey' => '未激活状态图标',
    ],
    'store' => [
        'name' => '门店名称',
        'user' => '门店管理员',
    ],
    'kitchen' => [
        'name' => '分类名称',
        'device' => '绑定设备',
        'relation_product' => '关联商品'
    ],
    'order' => [
        'payment_total_price' => '支付总金额',
        'payment_price' => '已支付金额',
        'payable_price' => '应付金额',
        'refund_price' => '退款金额',
        'user_num' => '支付人数',
    ],
    'device' => [
        'device_type' => '设备类型',
        'device_id' => '设备ID',
        'name' => '名称',
    ],
    'set_time' => [
        'name' => '名称',
        'start' => '开始时间',
        'end' => '结束时间',
    ],
    'carousel' => [
        'name' => '轮播图名称',
        'logo' => '轮播图标识',
        'img' => '轮播图',
    ],
    'config' => [
        'default_language' => '默认语言',
    ]
];
