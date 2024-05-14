<?php

return [
    'login' => [
        'name' => 'The user name cannot be empty',
        'password' => 'The password cannot be empty',
        'email' => 'The mailbox contains a maximum of 128 characters',
        'empty' => 'The administrator cannot be empty',
        'array' => 'Administrators must be arrays'
    ],
    'product' => [
        'name' => 'The product name cannot exceed 128 characters',
        'bar_code' => 'The bar code cannot exceed 128 characters',
        'selling_price' => 'The selling price cannot be less than 0',
        'buying_price' => 'The cost price cannot be less than 0',
        'allergy' => 'The length of the allergy name cannot exceed 128 characters',
        'empty' => 'Goods cannot be empty',
        'array' => 'Items must be arrays',
        'remark' => 'Note cannot exceed 128 characters',
    ],
    'order' => [
        'count' => 'Purchases exceed inventory',
        'lessen_count' => 'The quantity exceeds the purchased quantity',
        'price' => 'Over order price',
        'payment' => 'Order paid',
        'payment_refund' => 'Order unpaid',
        'refund_price' => 'The refund amount must be numerical',
        'cancel' => 'Order cancelled',
        'exceed' => 'Overorder amount',


        'empty' => 'No goods',
        'id_null' => 'No goods',
        'count_null' => 'No quantity',
        'remark' => 'Note The value contains a maximum of 255 characters',
        'discount_null' => 'Order discounts cannot be empty',
        'discount_between' => 'The order discount must be an integer between 0 and 100',
        'discount_gt' => 'Order discount must be greater than 0',
        'discount_numeric' => 'Order discounts must be numerical',
    ],
    'allergy' => [
        'name' => 'The length of the allergy name cannot exceed 128 characters',
    ],
    'category' => [
        'name' => 'The category name cannot exceed 128 characters',
    ],
    'spicy' => [
        'name' => 'The spiciness name cannot be longer than 128 characters',
        'grade' => 'The spiciness rating cannot exceed 128 digits',
    ],
    'tag' => [
        'name' => 'The label name contains a maximum of 128 characters',
    ],
    'taste' => [
        'name' => 'The flavor name cannot be longer than 128 characters',
    ],
    'combo' => [
        'name' => 'Package name length cannot exceed 128 characters',
        'price' => 'The amount of package sold cannot be less than 0',
        'empty' => 'The package cannot be empty',
        'array' => 'Package must be array'
    ],
    'spec' => [
        'name' => 'The specification name cannot exceed 128 characters',
        'price' => 'The amount of package sold cannot be less than 0',
    ],
    'store' => [
        'name' => 'The store name cannot exceed 128 characters',
    ],
    'user' => [
        'name' => 'The administrator name contains a maximum of 128 characters',
        'password' => 'The password contains a maximum of 128 characters',
        'email' => 'The mailbox contains a maximum of 128 characters',
        'email_format' => 'The mailbox format is incorrect',
        'phone' => 'The length of the phone number cannot exceed 11 characters',
        'phone_format' => 'The format of the mobile phone number is incorrect',
        'password_update' => 'Enter this item to change the password',
    ],
    'kitchen' => [
        'name' => 'The category name cannot exceed 128 characters',
    ],
    'device' => [
        'name' => 'Device name',
    ],
    'payment' => [
        'method' => 'The payment method cannot be empty',
        'payment_price' => 'The payment amount cannot be empty',
        'payment_price_numeric' => 'The payment amount must be a figure',
        'payment_price_gt' => 'The payment must be greater than zero',
        'have_paid' => 'Order paid',
    ],
];
