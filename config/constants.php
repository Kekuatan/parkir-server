<?php

return [
    'whatsapp-gateway' => [
        'server-ip' => '172.19.0.1',
        'query-ip' => '172.19.0.1',
        'query-key' => 'HivtgiSTDVtsefsDbfuyS93679'
    ],
    'tax-rate' => [
        'url' => 'https://fiskal.kemenkeu.go.id/informasi-publik/kurs-pajak',
        'home' => 'https://www.pajak.go.id/kurs-pajak'
    ],
    'pagination' => 10,
    'storage_path' => [
        'picture_vehicle_in' => 'picture-vehicle-in',
        'picture_vehicle_out' => 'picture-vehicle-out',
        'contact_us_attachment' => 'contact-us-attachments',
        'ticket_attachment' => 'ticket-attachments',
        'promotion' => 'promotions',
        'icon' => 'icons',
        'default' => 'default',
        'product' => 'products',
        'payment-method' => 'payment-methods',
        'consultation-attachment' => 'consultation-attachments',
        'consultation-chat-attachment' => 'consultation-chat-attachments',
    ],
    'date_time' => [
        'date_format' => 'd-m-Y'
    ],
    'key' => [
        'signature_key' => 'uPTduCM9aBfixqiuyriwueyfiuey836r9376jhsgvc382sjkhdyuegryurgyu4jfnbfnbfnbndvfuyryu4r'
    ],
    'cache' => [
        'products' => [
            'get' => 'get-products',
            'get-by-group' => 'get-products-by-groups',
            'resource-collection' => 'resource-collection-products'
        ],
        'user-transactions' => [
            'get-by-id' => 'get-user-transactions-by-id',
            'get-by-user' => 'get-user-transactions-by-user', // dont forget append with user id. (this value . 'user_id')
        ],
        'promotions' => [
            'get' => 'get-promotions'
        ]
    ]
];
