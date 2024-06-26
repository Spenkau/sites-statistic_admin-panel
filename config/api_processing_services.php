<?php

return [
    'Addresses' => [
        [
            'uri' => 'address',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            'title' => 'Москва'
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'address',
            'method' => 'POST',
            'form_params' => [
                'title' => 'Гродно123',
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "title" => "Москва"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'address/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 3
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            'title' => 'Москва'
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'address/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1
            ],
            'form_params' => [
                'title' => 'MOSCOW123'
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'address/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'Transactions' => [
        [
            'uri' => 'showcase/balance/general/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        [
                            "id" => 1,
                            "user_id" => 1,
                            "client_id" => 1,
                            "amount" => 1,
                            "operation" => 1,
                            "status" => 1,
                            "comment" => "1",
                            "space_item_id" => 1
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'balances/general',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        [
                            "id" => 1,
                            "user_id" => 1,
                            "client_id" => 1,
                            "amount" => 1,
                            "operation" => 1,
                            "status" => 1,
                            "comment" => "1",
                            "space_item_id" => 1
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'transaction',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [

                        "id" => 1,
                        "user_id" => 1,
                        "client_id" => 1,
                        "amount" => 1,
                        "operation" => 1,
                        "status" => 1,
                        "comment" => "1",
                        "space_item_id" => 1

                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ],
        ],
        [
            'uri' => 'transaction',
            'method' => 'POST',
            'form_params' => [
                'user_id' => 1,
                'client_id' => 5,
                'amount' => 5,
                'operation' => 5,
                'status' => 5,
                'comment' => 5,
                'space_item_id' => 5,
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "user_id" => 1,
                        "client_id" => 1,
                        "amount" => 1,
                        "operation" => 1,
                        "status" => 1,
                        "comment" => "1",
                        "space_item_id" => 1
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'transaction/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "user_id" => 1,
                        "client_id" => 1,
                        "amount" => 1,
                        "operation" => 1,
                        "status" => 1,
                        "comment" => "1",
                        "space_item_id" => 1
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'transaction/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1
            ],
            'form_params' => [
                "user_id" => 1,
                "client_id" => 1,
                "amount" => 1,
                "operation" => 1,
                "status" => 1,
                "comment" => "1",
                "space_item_id" => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'transaction/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'transaction/paykeeper/link',
            'method' => 'GET',
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => "https=>//vpodarok-1.server.paykeeper.ru/create/"
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'Cities' => [
        [
            'uri' => 'city',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            'country_id' => 1,
                            'title' => 'Москва'
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'city',
            'method' => 'POST',
            'form_params' => [
                'country_id' => 1,
                'title' => 'Hrodna'
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                        'country_id' => 1,
                        'title' => 'Hrodna'
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'city/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                        'country_id' => 1,
                        'title' => 'Hrodna'
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'city/{id}',
            'method' => 'PUT',
            'form_params' => [
                'id' => 1,
                'country_id' => 1,
                'city' => 'Hrodna2'
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'city/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'Clients' => [
        [
            'uri' => 'client/phone/{phone}',
            'method' => 'GET',
            'path_params' => [
                'phone' => 375291919876,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "name" => "Иван",
                        "last_name" => "Иванов",
                        "surname" => "Иванович",
                        "email" => "example@vpodarok.ru",
                        "phone" => "79991112223",
                        "sex" => 1,
                        "type" => 1,
                        "address_id" => 1,
                        "birthday" => "2022-11-11",
                        "identification_ndfl" => 1,
                        "ip_address" => "127.0.0.1",
                        "is_possible_fraud" => true,
                        "image" => "https=>//vpodarok.ru/image",
                        "balances" => [
                            [
                                "space_item_id" => 1,
                                "balance" => 1,
                                "space_name" => "site",
                                "space_slug" => "site",
                                "space_image" => "https://vpodarok.ru/image",
                                "status" => true
                            ]
                        ],
                        "created_at" => "2022-11-11 18:18:20",
                        "updated_at" => "2022-11-11 18:18:20",
                        "email_verified_at" => "2022-11-11 18:18:20",
                        "email_verified" => true
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 1,
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        [
                            "id" => 1,
                            "name" => "Иван",
                            "last_name" => "Иванов",
                            "surname" => "Иванович",
                            "email" => "example@vpodarok.ru",
                            "phone" => "79991112223",
                            "sex" => 1,
                            "type" => 1,
                            "address_id" => 1,
                            "birthday" => "2022-11-11",
                            "identification_ndfl" => 1,
                            "ip_address" => "127.0.0.1",
                            "is_possible_fraud" => true,
                            "image" => "https://vpodarok.ru/image",
                            "balances" => [
                                [
                                    "space_item_id" => 1,
                                    "balance" => 1,
                                    "space_name" => "site",
                                    "space_slug" => "site",
                                    "space_image" => "https://vpodarok.ru/image",
                                    "status" => true
                                ]
                            ],
                            "created_at" => "2022-11-11 18:18:20",
                            "updated_at" => "2022-11-11 18:18:20",
                            "email_verified_at" => "2022-11-11 18:18:20",
                            "email_verified" => true
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client',
            'method' => 'POST',
            'form_params' => [
                'name' => 'alexey',
                'surname' => 'andreev',
                'lastname' => 'romanovich',
                'email' => 'andreev123@gmail.com',
                'phone' => '375291919876',
                'sex' => 1,
                'type' => 1,
                'address_id' => 1,
                'birthday' => '2000-06-25',
                'identification_ndfl' => 0,
                'ip_address' => '192.168.123.132',
                'is_possible_fraud' => 0
            ],
            'response' => [
                'success' => [
                    'name' => 'alexey',
                    'surname' => 'andreev',
                    'lastname' => 'romanovich',
                    'email' => 'andreev123@gmail.com',
                    'phone' => '375291919876',
                    'sex' => 1,
                    'type' => 1,
                    'address_id' => 1,
                    'birthday' => '2000-06-25',
                    'identification_ndfl' => 0,
                    'ip_address' => '192.168.123.132',
                    'is_possible_fraud' => 0
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "name" => "Иван",
                        "last_name" => "Иванов",
                        "surname" => "Иванович",
                        "email" => "example@vpodarok.ru",
                        "phone" => "79991112223",
                        "sex" => 1,
                        "type" => 1,
                        "address_id" => 1,
                        "birthday" => "2022-11-11",
                        "identification_ndfl" => 1,
                        "ip_address" => "127.0.0.1",
                        "is_possible_fraud" => true,
                        "image" => "https://vpodarok.ru/image",
                        "balances" => [
                            [
                                "space_item_id" => 1,
                                "balance" => 1,
                                "space_name" => "site",
                                "space_slug" => "site",
                                "space_image" => "https://vpodarok.ru/image",
                                "status" => true
                            ]
                        ],
                        "created_at" => "2022-11-11 18:18:20",
                        "updated_at" => "2022-11-11 18:18:20",
                        "email_verified_at" => "2022-11-11 18:18:20",
                        "email_verified" => true
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1
            ],
            'form_params' => [
                'name' => 'alexey',
                'surname' => 'andreev',
                'lastname' => 'romanovich',
                'email' => 'andreev123@gmail.com',
                'phone' => '375291919876',
                'sex' => 1,
                'type' => 1,
                'address_id' => 1,
                'birthday' => '2000-06-25',
                'identification_ndfl' => 0,
                'ip_address' => '192.168.123.132',
                'is_possible_fraud' => 0
            ],
            'response' => [
                'success' => [
                    'name' => 'alexey',
                    'surname' => 'andreev',
                    'lastname' => 'romanovich',
                    'email' => 'andreev123@gmail.com',
                    'phone' => '375291919876',
                    'sex' => 1,
                    'type' => 1,
                    'address_id' => 1,
                    'birthday' => '2000-06-25',
                    'identification_ndfl' => 0,
                    'ip_address' => '192.168.123.132',
                    'is_possible_fraud' => 0
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/space/items',
            'method' => 'POST',
            'form_params' => [
                'space' => 'showcase',
                'slug' => 1,
                'role_id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => null
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/space/item/active',
            'method' => 'POST',
            'form_params' => [
                'space' => 'showcase',
                'slug' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => null
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'DataConnector' => [
        [
            'uri' => 'client/space/item',
            'method' => 'POST',
            'form_params' => [
                'space' => 'showcase',
                'slug' => '1',
                'role_id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => null
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/space/item/active',
            'method' => 'POST',
            'form_params' => [
                'space' => 'showcase',
                'slug' => '1',
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => null
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ]
    ],
    'Countries' => [
        [
            'uri' => 'country',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            'title' => 'Нигермания'
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'country',
            'method' => 'POST',
            'form_params' => [
                'title' => 'Нигермания',
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            'title' => 'Нигермания'
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'country',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true,
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'country',
            'method' => 'DELETE',
            'form_params' => [
                'id' => 1,
                'title' => 'Нигермания',
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            'title' => 'Нигермания'
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'Currencies' => [
        [
            'uri' => 'currency',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            [
                                "id" => 1,
                                "title" => "Рубли",
                                "iso_code" => 643,
                                "value" => "1000"
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'currency',
            'method' => 'POST',
            'form_params' => [
                "id" => 1,
                "title" => "Рубли",
                "iso_code" => 643,
                "value" => "1000"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            [
                                "id" => 1,
                                "title" => "Рубли",
                                "iso_code" => 643,
                                "value" => "1000"
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'currency/{id}',
            'method' => 'GET',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            [
                                "id" => 1,
                                "title" => "Рубли",
                                "iso_code" => 643,
                                "value" => "1000"
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'currency/{id}',
            'method' => 'PUT',
            'path_params' => [
                "id" => 1
            ],
            'form_params' => [
                "id" => 1,
                "title" => "Доллары",
                "iso_code" => 555,
                "value" => "2222"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'currency/{id}',
            'method' => 'DELETE',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            [
                                "id" => 1,
                                "title" => "Рубли",
                                "iso_code" => 643,
                                "value" => "1000"
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'Mobile Funds' => [
        [
            'uri' => 'mobile/fund',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            [
                                "id" => 1,
                                "title" => "Сбор средств на охладитель Димасику",
                                "timestamp" => "2024-01-01 00:00:00",
                                "status" => 1,
                                "recommended_sum" => 100,
                                "sum" => 500,
                                "price" => 1000,
                                "image" => "path/to/img"
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'mobile/fund',
            'method' => 'POST',
            'form_params' => [
                "title" => "Сбор средств на охладитель Димасику",
                "timestamp" => "2024-01-01 00:00:00",
                "product_id" => 1,
                "price" => 1000,
                "recommended_sum" => 100,
                "order_id" => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "title" => "Сбор средств на подарок",
                        "text" => "Тут поздравление...",
                        "timestamp" => "2024-01-01 00:00:00",
                        "status" => 1,
                        "recommended_sum" => 100,
                        "sum" => 500,
                        "price" => 1000,
                        "count" => 1,
                        "product" => "#/components/schemas/ProductResource",
                        "organiser" => [
                            "id" => 1,
                            "name" => "Иван",
                            "last_name" => "Иванов",
                            "surname" => "Иванович",
                            "email" => "example@vpodarok.ru",
                            "phone" => "79991112223",
                            "sex" => 1,
                            "type" => 1,
                            "address_id" => 1,
                            "birthday" => "2022-11-11",
                            "identification_ndfl" => 1,
                            "ip_address" => "127.0.0.1",
                            "is_possible_fraud" => true,
                            "image" => "https://vpodarok.ru/image",
                            "balances" => [
                                [
                                    "space_item_id" => 1,
                                    "balance" => 1,
                                    "space_name" => "site",
                                    "space_slug" => "site",
                                    "space_image" => "https://vpodarok.ru/image",
                                    "status" => true
                                ]
                            ],
                            "created_at" => "2022-11-11 18:18:20",
                            "updated_at" => "2022-11-11 18:18:20",
                            "email_verified_at" => "2022-11-11 18:18:20",
                            "email_verified" => true
                        ],
                        "donation" => 100,
                        "order" => [
                            "id" => 1,
                            "to" => "example@vpodarok.ru",
                            "transaction_id" => 1,
                            "recipient_id" => 1,
                            "status" => 1,
                            "comment" => "Поздравляю",
                            "external_id" => 2,
                            "priority" => 12,
                            "link" => "",
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ],
                        "image" => "path/to/image",
                        "deeplink" => "hehehe"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'mobile/fund/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "title" => "Сбор средств на подарок",
                        "text" => "Тут поздравление...",
                        "timestamp" => "2024-01-01 00:00:00",
                        "status" => 1,
                        "recommended_sum" => 100,
                        "sum" => 500,
                        "price" => 1000,
                        "count" => 1,
                        "product" => "#/components/schemas/ProductResource",
                        "organiser" => [
                            "id" => 1,
                            "name" => "Иван",
                            "last_name" => "Иванов",
                            "surname" => "Иванович",
                            "email" => "example@vpodarok.ru",
                            "phone" => "79991112223",
                            "sex" => 1,
                            "type" => 1,
                            "address_id" => 1,
                            "birthday" => "2022-11-11",
                            "identification_ndfl" => 1,
                            "ip_address" => "127.0.0.1",
                            "is_possible_fraud" => true,
                            "image" => "https://vpodarok.ru/image",
                            "balances" => [
                                [
                                    "space_item_id" => 1,
                                    "balance" => 1,
                                    "space_name" => "site",
                                    "space_slug" => "site",
                                    "space_image" => "https://vpodarok.ru/image",
                                    "status" => true
                                ]
                            ],
                            "created_at" => "2022-11-11 18:18:20",
                            "updated_at" => "2022-11-11 18:18:20",
                            "email_verified_at" => "2022-11-11 18:18:20",
                            "email_verified" => true
                        ],
                        "donation" => 100,
                        "order" => [
                            "id" => 1,
                            "to" => "example@vpodarok.ru",
                            "transaction_id" => 1,
                            "recipient_id" => 1,
                            "status" => 1,
                            "comment" => "Поздравляю",
                            "external_id" => 2,
                            "priority" => 12,
                            "link" => "",
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ],
                        "image" => "path/to/image",
                        "deeplink" => "hehehe"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'mobile/fund/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1
            ],
            'form_params' => [
                "title" => "Сбор средств на охладитель Димасику",
                "timestamp" => "2024-01-01 00:00:00",
                "product_id" => 1,
                "price" => 1000,
                "recommended_sum" => 100,
                "order_id" => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "title" => "Сбор средств на подарок",
                        "text" => "Тут поздравление...",
                        "timestamp" => "2024-01-01 00:00:00",
                        "status" => 1,
                        "recommended_sum" => 100,
                        "sum" => 500,
                        "price" => 1000,
                        "count" => 1,
                        "product" => "#/components/schemas/ProductResource",
                        "organiser" => [
                            "id" => 1,
                            "name" => "Иван",
                            "last_name" => "Иванов",
                            "surname" => "Иванович",
                            "email" => "example@vpodarok.ru",
                            "phone" => "79991112223",
                            "sex" => 1,
                            "type" => 1,
                            "address_id" => 1,
                            "birthday" => "2022-11-11",
                            "identification_ndfl" => 1,
                            "ip_address" => "127.0.0.1",
                            "is_possible_fraud" => true,
                            "image" => "https://vpodarok.ru/image",
                            "balances" => [
                                [
                                    "space_item_id" => 1,
                                    "balance" => 1,
                                    "space_name" => "site",
                                    "space_slug" => "site",
                                    "space_image" => "https://vpodarok.ru/image",
                                    "status" => true
                                ]
                            ],
                            "created_at" => "2022-11-11 18:18:20",
                            "updated_at" => "2022-11-11 18:18:20",
                            "email_verified_at" => "2022-11-11 18:18:20",
                            "email_verified" => true
                        ],
                        "donation" => 100,
                        "order" => [
                            "id" => 1,
                            "to" => "example@vpodarok.ru",
                            "transaction_id" => 1,
                            "recipient_id" => 1,
                            "status" => 1,
                            "comment" => "Поздравляю",
                            "external_id" => 2,
                            "priority" => 12,
                            "link" => "",
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ],
                        "image" => "path/to/image",
                        "deeplink" => "hehehe"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'mobile/fund/{id}',
            'method' => 'PATCH',
            'path_params' => [
                'id' => 1
            ],
            'form_params' => [
                "title" => "Сбор средств на охладитель Димасику",
                "timestamp" => "2024-01-01 00:00:00",
                "product_id" => 1,
                "price" => 1000,
                "recommended_sum" => 100,
                "order_id" => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "title" => "Сбор средств на подарок",
                        "text" => "Тут поздравление...",
                        "timestamp" => "2024-01-01 00:00:00",
                        "status" => 1,
                        "recommended_sum" => 100,
                        "sum" => 500,
                        "price" => 1000,
                        "count" => 1,
                        "product" => "#/components/schemas/ProductResource",
                        "organiser" => [
                            "id" => 1,
                            "name" => "Иван",
                            "last_name" => "Иванов",
                            "surname" => "Иванович",
                            "email" => "example@vpodarok.ru",
                            "phone" => "79991112223",
                            "sex" => 1,
                            "type" => 1,
                            "address_id" => 1,
                            "birthday" => "2022-11-11",
                            "identification_ndfl" => 1,
                            "ip_address" => "127.0.0.1",
                            "is_possible_fraud" => true,
                            "image" => "https://vpodarok.ru/image",
                            "balances" => [
                                [
                                    "space_item_id" => 1,
                                    "balance" => 1,
                                    "space_name" => "site",
                                    "space_slug" => "site",
                                    "space_image" => "https://vpodarok.ru/image",
                                    "status" => true
                                ]
                            ],
                            "created_at" => "2022-11-11 18:18:20",
                            "updated_at" => "2022-11-11 18:18:20",
                            "email_verified_at" => "2022-11-11 18:18:20",
                            "email_verified" => true
                        ],
                        "donation" => 100,
                        "order" => [
                            "id" => 1,
                            "to" => "example@vpodarok.ru",
                            "transaction_id" => 1,
                            "recipient_id" => 1,
                            "status" => 1,
                            "comment" => "Поздравляю",
                            "external_id" => 2,
                            "priority" => 12,
                            "link" => "",
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ],
                        "image" => "path/to/image",
                        "deeplink" => "hehehe"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'mobile/fund/{id}/join',
            'method' => 'POST',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => null,
                    'error' => [
                        'success' => false,
                        'message' => 'Unauthorized'
                    ]
                ]
            ],
        ],
        [
            'uri' => 'mobile/fund/{id}/close',
            'method' => 'PATCH',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "title" => "Сбор средств на подарок",
                        "text" => "Тут поздравление...",
                        "timestamp" => "2024-01-01 00:00:00",
                        "status" => 1,
                        "recommended_sum" => 100,
                        "sum" => 500,
                        "price" => 1000,
                        "count" => 1,
                        "product" => "#/components/schemas/ProductResource",
                        "organiser" => [
                            "id" => 1,
                            "name" => "Иван",
                            "last_name" => "Иванов",
                            "surname" => "Иванович",
                            "email" => "example@vpodarok.ru",
                            "phone" => "79991112223",
                            "sex" => 1,
                            "type" => 1,
                            "address_id" => 1,
                            "birthday" => "2022-11-11",
                            "identification_ndfl" => 1,
                            "ip_address" => "127.0.0.1",
                            "is_possible_fraud" => true,
                            "image" => "https://vpodarok.ru/image",
                            "balances" => [
                                [
                                    "space_item_id" => 1,
                                    "balance" => 1,
                                    "space_name" => "site",
                                    "space_slug" => "site",
                                    "space_image" => "https://vpodarok.ru/image",
                                    "status" => true
                                ]
                            ],
                            "created_at" => "2022-11-11 18:18:20",
                            "updated_at" => "2022-11-11 18:18:20",
                            "email_verified_at" => "2022-11-11 18:18:20",
                            "email_verified" => true
                        ],
                        "donation" => 100,
                        "order" => [
                            "id" => 1,
                            "to" => "example@vpodarok.ru",
                            "transaction_id" => 1,
                            "recipient_id" => 1,
                            "status" => 1,
                            "comment" => "Поздравляю",
                            "external_id" => 2,
                            "priority" => 12,
                            "link" => "",
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ],
                        "image" => "path/to/image",
                        "deeplink" => "hehehe"
                    ],
                    'error' => [
                        'success' => false,
                        'message' => 'Unauthorized'
                    ]
                ]
            ]
        ],
        [
            'uri' => 'mobile/fund/{id}/donations',
            'method' => 'GET',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "title" => "Сбор средств на подарок",
                        "text" => "Тут поздравление...",
                        "timestamp" => "2024-01-01 00:00:00",
                        "status" => 1,
                        "recommended_sum" => 100,
                        "sum" => 500,
                        "price" => 1000,
                        "count" => 1,
                        "product" => "#/components/schemas/ProductResource",
                        "organiser" => [
                            "id" => 1,
                            "name" => "Иван",
                            "last_name" => "Иванов",
                            "surname" => "Иванович",
                            "email" => "example@vpodarok.ru",
                            "phone" => "79991112223",
                            "sex" => 1,
                            "type" => 1,
                            "address_id" => 1,
                            "birthday" => "2022-11-11",
                            "identification_ndfl" => 1,
                            "ip_address" => "127.0.0.1",
                            "is_possible_fraud" => true,
                            "image" => "https://vpodarok.ru/image",
                            "balances" => [
                                [
                                    "space_item_id" => 1,
                                    "balance" => 1,
                                    "space_name" => "site",
                                    "space_slug" => "site",
                                    "space_image" => "https://vpodarok.ru/image",
                                    "status" => true
                                ]
                            ],
                            "created_at" => "2022-11-11 18:18:20",
                            "updated_at" => "2022-11-11 18:18:20",
                            "email_verified_at" => "2022-11-11 18:18:20",
                            "email_verified" => true
                        ],
                        "donation" => 100,
                        "order" => [
                            "id" => 1,
                            "to" => "example@vpodarok.ru",
                            "transaction_id" => 1,
                            "recipient_id" => 1,
                            "status" => 1,
                            "comment" => "Поздравляю",
                            "external_id" => 2,
                            "priority" => 12,
                            "link" => "",
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ],
                        "image" => "path/to/image",
                        "deeplink" => "hehehe"
                    ],
                    'error' => [
                        'success' => false,
                        'message' => 'Unauthorized'
                    ]
                ]
            ]
        ],
        [
            'uri' => 'mobile/fund/{id}/prolong',
            'method' => 'PATCH',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "title" => "Сбор средств на подарок",
                        "text" => "Тут поздравление...",
                        "timestamp" => "2024-01-01 00:00:00",
                        "status" => 1,
                        "recommended_sum" => 100,
                        "sum" => 500,
                        "price" => 1000,
                        "count" => 1,
                        "product" => "#/components/schemas/ProductResource",
                        "organiser" => [
                            "id" => 1,
                            "name" => "Иван",
                            "last_name" => "Иванов",
                            "surname" => "Иванович",
                            "email" => "example@vpodarok.ru",
                            "phone" => "79991112223",
                            "sex" => 1,
                            "type" => 1,
                            "address_id" => 1,
                            "birthday" => "2022-11-11",
                            "identification_ndfl" => 1,
                            "ip_address" => "127.0.0.1",
                            "is_possible_fraud" => true,
                            "image" => "https://vpodarok.ru/image",
                            "balances" => [
                                [
                                    "space_item_id" => 1,
                                    "balance" => 1,
                                    "space_name" => "site",
                                    "space_slug" => "site",
                                    "space_image" => "https://vpodarok.ru/image",
                                    "status" => true
                                ]
                            ],
                            "created_at" => "2022-11-11 18:18:20",
                            "updated_at" => "2022-11-11 18:18:20",
                            "email_verified_at" => "2022-11-11 18:18:20",
                            "email_verified" => true
                        ],
                        "donation" => 100,
                        "order" => [
                            "id" => 1,
                            "to" => "example@vpodarok.ru",
                            "transaction_id" => 1,
                            "recipient_id" => 1,
                            "status" => 1,
                            "comment" => "Поздравляю",
                            "external_id" => 2,
                            "priority" => 12,
                            "link" => "",
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ],
                        "image" => "path/to/image",
                        "deeplink" => "hehehe"
                    ],
                    'error' => [
                        'success' => false,
                        'message' => 'Unauthorized'
                    ]
                ]
            ]
        ],
        [
            'uri' => 'mobile/fund/{id}/client/{client}/comment',
            'method' => 'PATCH',
            'path_params' => [
                'id' => 1,
                'client' => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "title" => "Сбор средств на подарок",
                        "text" => "Тут поздравление...",
                        "timestamp" => "2024-01-01 00:00:00",
                        "status" => 1,
                        "recommended_sum" => 100,
                        "sum" => 500,
                        "price" => 1000,
                        "count" => 1,
                        "product" => "#/components/schemas/ProductResource",
                        "organiser" => [
                            "id" => 1,
                            "name" => "Иван",
                            "last_name" => "Иванов",
                            "surname" => "Иванович",
                            "email" => "example@vpodarok.ru",
                            "phone" => "79991112223",
                            "sex" => 1,
                            "type" => 1,
                            "address_id" => 1,
                            "birthday" => "2022-11-11",
                            "identification_ndfl" => 1,
                            "ip_address" => "127.0.0.1",
                            "is_possible_fraud" => true,
                            "image" => "https://vpodarok.ru/image",
                            "balances" => [
                                [
                                    "space_item_id" => 1,
                                    "balance" => 1,
                                    "space_name" => "site",
                                    "space_slug" => "site",
                                    "space_image" => "https://vpodarok.ru/image",
                                    "status" => true
                                ]
                            ],
                            "created_at" => "2022-11-11 18:18:20",
                            "updated_at" => "2022-11-11 18:18:20",
                            "email_verified_at" => "2022-11-11 18:18:20",
                            "email_verified" => true
                        ],
                        "donation" => 100,
                        "order" => [
                            "id" => 1,
                            "to" => "example@vpodarok.ru",
                            "transaction_id" => 1,
                            "recipient_id" => 1,
                            "status" => 1,
                            "comment" => "Поздравляю",
                            "external_id" => 2,
                            "priority" => 12,
                            "link" => "",
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ],
                        "image" => "path/to/image",
                        "deeplink" => "hehehe"
                    ],
                    'error' => [
                        'success' => false,
                        'message' => 'Unauthorized'
                    ]
                ]
            ]
        ],
        [
            'uri' => 'mobile/fund/{id}/donations/file',
            'method' => 'GET',
            'query_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => "https://storage.yandexcloud.net/dev.processing.ru/storage/app/public/fund/donations/b7454933d1e2525ea21a83f65519573e.xls"
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'mobile/fund/{id}/pay',
            'method' => 'POST',
            'query_params' => [
                'id' => 1
            ],
            'form_params' => [
                'comment' => 'comment',
                'type' => [
                    'bc' => 100,
                    'uk' => 100
                ]
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "link" => "http://paykeeper.link",
                        "body" => [
                            "sum" => 100,
                            "clientid" => 1,
                            "orderid" => 12,
                            "client_email" => "example@mail.ru",
                            "client_phone" => 70000000000
                        ],
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'TestGeneration' => [
        [
            'uri' => 'generation/test',
            'method' => 'POST',
            'query_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'link' => "https://....zip"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ]
    ],
    'Mobile ClientNdflData' => [
        [
            'uri' => 'client/ndfl/act',
            'method' => 'GET',
            'query_params' => [
                'space' => 'showcase',
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'space' => 'showcase',
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/ndfl/act/upload',
            'method' => 'POST',
            'form_params' => [
                'space' => 'showcase',
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => null
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/ndfl/data/active',
            'method' => 'POST',
            'form_params' => [
                'space' => 'showcase',
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "client_id" => 1,
                        "space_id" => 1,
                        "name" => "Дмитрий",
                        "surname" => "Рудачков",
                        "lastname" => "Валерьевич",
                        "email" => "email@mail.ru",
                        "phone" => 88005553535,
                        "birthday" => "2000-01-01",
                        "inn" => "1",
                        "snils" => "1",
                        "passport_series" => "KH",
                        "passport_number" => "11111",
                        "issued_by" => "11111",
                        "department_code" => 1,
                        "issued_date" => "2025-01-01",
                        "address" => "1",
                        "status" => "1",
                        "comment" => "1",
                        "files" => [
                            [
                                "id" => 1,
                                "type" => 1
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/ndfl/data',
            'method' => 'POST',
            'form_params' => [
                "space" => "showcase",
                "name" => "Дмитрий",
                "surname" => "Рудачков",
                "lastname" => "Валерьевич",
                "email" => "email@mail.ru",
                "phone" => 88005553535,
                "birthday" => "2000-01-01",
                "inn" => "1",
                "snils" => "1",
                "passport_series" => "KH",
                "passport_number" => "11111",
                "issued_by" => "11111",
                "department_code" => 1,
                "address" => "1"
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "client_id" => 1,
                        "space_id" => 1,
                        "name" => "Дмитрий",
                        "surname" => "Рудачков",
                        "lastname" => "Валерьевич",
                        "email" => "email@mail.ru",
                        "phone" => 88005553535,
                        "birthday" => "2000-01-01",
                        "inn" => "1",
                        "snils" => "1",
                        "passport_series" => "KH",
                        "passport_number" => "11111",
                        "issued_by" => "11111",
                        "department_code" => 1,
                        "issued_date" => "2025-01-01",
                        "address" => "1",
                        "status" => "1",
                        "comment" => "1",
                        "files" => [
                            [
                                "id" => 1,
                                "type" => 1
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/ndfl/data/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1,
            ],
            'form_params' => [
                "space" => "showcase",
                "name" => "Дмитрий",
                "surname" => "Рудачков",
                "lastname" => "Валерьевич",
                "email" => "email@mail.ru",
                "phone" => 88005553535,
                "birthday" => "2000-01-01",
                "inn" => "1",
                "snils" => "1",
                "passport_series" => "KH",
                "passport_number" => "11111",
                "issued_by" => "11111",
                "department_code" => 1,
                "address" => "1"
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "client_id" => 1,
                        "space_id" => 1,
                        "name" => "Дмитрий",
                        "surname" => "Рудачков",
                        "lastname" => "Валерьевич",
                        "email" => "email@mail.ru",
                        "phone" => 88005553535,
                        "birthday" => "2000-01-01",
                        "inn" => "1",
                        "snils" => "1",
                        "passport_series" => "KH",
                        "passport_number" => "11111",
                        "issued_by" => "11111",
                        "department_code" => 1,
                        "issued_date" => "2025-01-01",
                        "address" => "1",
                        "status" => "1",
                        "comment" => "1",
                        "files" => [
                            [
                                "id" => 1,
                                "type" => 1
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/ndfl/data/file/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => "base64_encoded_file_content"
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/ndfl/data/file/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => null
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'client/ndfl/data/file',
            'method' => 'DELETE',
            'form_params' => [
                'space' => 'showcase',
                'type' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => null
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'Orders' => [
        [
            'uri' => 'order',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "to" => "example@vpodarok.ru",
                        "transaction_id" => 1,
                        "recipient_id" => 1,
                        "status" => 1,
                        "comment" => "Поздравляю",
                        "external_id" => 2,
                        "priority" => 12,
                        "link" => "",
                        "created_at" => "2021-05-20 12:00:00",
                        "updated_at" => "2021-05-20 12:00:00"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order',
            'method' => 'POST',
            'form_params' => [
                "transaction_id" => 1,
                "to" => "example@vpodarok.ru",
                "recipient_id" => 1,
                "status" => 1,
                "comment" => "Comment",
                "external_id" => 1,
                "priority" => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "to" => "example@vpodarok.ru",
                        "transaction_id" => 1,
                        "recipient_id" => 1,
                        "status" => 1,
                        "comment" => "Поздравляю",
                        "external_id" => 2,
                        "priority" => 12,
                        "link" => "",
                        "created_at" => "2021-05-20 12:00:00",
                        "updated_at" => "2021-05-20 12:00:00"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order',
            'method' => 'POST',
            'form_params' => [
                "transaction_id" => 1,
                "to" => "example@vpodarok.ru",
                "recipient_id" => 1,
                "status" => 1,
                "comment" => "Comment",
                "external_id" => 1,
                "priority" => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "to" => "example@vpodarok.ru",
                        "transaction_id" => 1,
                        "recipient_id" => 1,
                        "status" => 1,
                        "comment" => "Поздравляю",
                        "external_id" => 2,
                        "priority" => 12,
                        "link" => "",
                        "created_at" => "2021-05-20 12:00:00",
                        "updated_at" => "2021-05-20 12:00:00"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "to" => "example@vpodarok.ru",
                        "transaction_id" => 1,
                        "recipient_id" => 1,
                        "status" => 1,
                        "comment" => "Поздравляю",
                        "external_id" => 2,
                        "priority" => 12,
                        "link" => "",
                        "created_at" => "2021-05-20 12:00:00",
                        "updated_at" => "2021-05-20 12:00:00"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/{id}',
            'method' => 'PUT',
            'form_params' => [
                "transaction_id" => 1,
                "to" => "example@vpodarok.ru",
                "recipient_id" => 1,
                "status" => 1,
                "comment" => "Comment",
                "external_id" => 1,
                "priority" => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/buy',
            'method' => 'POST',
            'form_params' => [
                "client" => [
                    "phone" => "79999999999",
                    "name" => "Имя"
                ],
                "priority" => 1,
                "space_item_id" => 1,
                "type_sending" => 1,
                "fund_id" => 1,
                "comment" => "Комментарий",
                "submit" => true,
                "to" => "email@mail.ru",
                "to_name" => "Иван",
                "to_phone" => "+79991111111",
                "sended_at" => "2023-11-11 21:00:31",
                "type" => 1,
                "auto_generate" => true,
                "order_items" => [
                    [
                        "product_id" => 1,
                        "amount" => 100,
                        "quantity" => 1
                    ]
                ],
                "sender_user" => [
                    "name" => "Name",
                    "email" => "email@gmail.com",
                    "phone" => "+7777777777"
                ]
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 3123
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/{id}/regenerate',
            'method' => 'POST',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ]

    ],
    'Mobile Order' => [
        [
            'uri' => 'mobile/order/buy',
            'method' => 'POST',
            'form_params' => [

                "priority" => 1,
                "space_item_id" => 1,
                "type_sending" => 1,
                "fund_id" => 1,
                "comment" => "Комментарий",
                "submit" => true,
                "to" => "email@mail.ru",
                "to_name" => "Иван",
                "to_phone" => "+79991111111",
                "sended_at" => "2023-11-11 21:00:31",
                "type" => 1,
                "auto_generate" => true,
                "order_items" => [
                    [
                        "product_id" => 1,
                        "amount" => 100,
                        "quantity" => 3
                    ]
                ]

            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 3132,
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'mobile/order/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "to" => "79997777777",
                        "buyer" => [
                            "name" => "Иван",
                            "lastname" => "Иван",
                            "surname" => "Иван",
                            "phone" => "79997777777",
                            "email" => "dev@vpodarok.ru"
                        ],
                        "recipient" => [
                            "name" => "Иван",
                            "lastname" => "Иван",
                            "surname" => "Иван",
                            "phone" => "79997777777",
                            "email" => "dev@vpodarok.ru"
                        ],
                        "products" => [
                            [
                                "id" => 1,
                                "name" => "Универсальная карта Vpodarok",
                                "images" => [
                                    [
                                        "main" => "https://vpodarok.ru/images/certificate.png",
                                        "other" => [
                                            "string"
                                        ]
                                    ]
                                ],
                                "nominal" => 1000,
                                "markup" => [
                                    "type" => 1,
                                    "value" => 7
                                ]
                            ]
                        ],
                        "order_data" => [
                            [
                                "key" => "recipient.email",
                                "value" => "dev@vpodarok.ru"
                            ]
                        ],
                        "quantity" => 15,
                        "fund_id" => 1,
                        "total" => 15000,
                        "type" => "buy",
                        "sended_at" => "2021-05-20 12:00:00",
                        "status" => 1,
                        "payment_types" => [
                            [
                                "id" => 1,
                                "title" => "Банковская карта"
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ]
    ],
    'OrderItems' => [
        [
            'uri' => 'order/item',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        [
                            "id" => 1,
                            "order_id" => 1,
                            "product_id" => 1,
                            "amount" => 1,
                            "total" => 1,
                            "markup_type" => 1,
                            "markup_value" => 1,
                            "status" => 1,
                            "supplier_id" => 1,
                            "pull_card_id" => 1,
                            "supplier_external_id" => 1,
                            "supplier_code" => "1",
                            "attempts" => 1
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/item',
            'method' => 'POST',
            'form_params' => [
                "id" => 1,
                "order_id" => 1,
                "product_id" => 1,
                "amount" => 1,
                "total" => 1,
                "markup_type" => 1,
                "markup_value" => 1,
                "status" => 1,
                "supplier_id" => 1,
                "pull_card_id" => 1,
                "supplier_external_id" => 1,
                "supplier_code" => "1",
                "attempts" => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        [
                            "id" => 1,
                            "order_id" => 1,
                            "product_id" => 1,
                            "amount" => 1,
                            "total" => 1,
                            "markup_type" => 1,
                            "markup_value" => 1,
                            "status" => 1,
                            "supplier_id" => 1,
                            "pull_card_id" => 1,
                            "supplier_external_id" => 1,
                            "supplier_code" => "1",
                            "attempts" => 1
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/item/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => [
                        "id" => 1,
                        "order_id" => 1,
                        "product_id" => 1,
                        "amount" => 1,
                        "total" => 1,
                        "markup_type" => 1,
                        "markup_value" => 1,
                        "status" => 1,
                        "supplier_id" => 1,
                        "pull_card_id" => 1,
                        "supplier_external_id" => 1,
                        "supplier_code" => "1",
                        "attempts" => 1
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/item/{id}',
            'method' => 'PUT',
            'form_params' => [
                "id" => 1,
                "order_id" => 1,
                "product_id" => 1,
                "amount" => 1,
                "total" => 1,
                "markup_type" => 1,
                "markup_value" => 1,
                "status" => 1,
                "supplier_id" => 1,
                "pull_card_id" => 1,
                "supplier_external_id" => 1,
                "supplier_code" => "1",
                "attempts" => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/item/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    "success" => true,
                    "data" => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'OrderItemsDatas' => [
        [
            'uri' => 'order/item/data',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            "order_item_id" => 1,
                            "name" => "Name",
                            "slug" => "Slug",
                            "value" => 1
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/item/data',
            'method' => 'POST',
            'form_params' => [
                'order_item_id' => 1,
                'name' => "NAME",
                'slug' => 'name',
                'value' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            "order_item_id" => 1,
                            "name" => "NAME",
                            "slug" => "Slug",
                            "value" => 1
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/item/data/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            "order_item_id" => 1,
                            "name" => "NAME",
                            "slug" => "Slug",
                            "value" => 1
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/item/data/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1,
            ],
            'form_params' => [
                'id' => 1,
                'order_item_id' => 1,
                'name' => "NAME",
                'slug' => 'name',
                'value' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => "1"
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'order/item/data/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'Products' => [
        [
            'uri' => 'product',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    "data" => [
                        "items" => [
                            [
                                "id" => 1,
                                "name" => "Универсальная карта",
                                "slug" => "universalnaya-karta",
                                "description" => "null",
                                "type" => "1",
                                "priority" => 0,
                                "markup" => [
                                    "string"
                                ],
                                "data" => [
                                    "string"
                                ],
                                "prices" => [
                                    [
                                        "value" => 100,
                                        "min_value" => null,
                                        "max_value" => null,
                                        "step_value" => null
                                    ]
                                ],
                                "images" => [
                                    [
                                        "main" => "https://vpodarok.ru/image.png",
                                        "other" => [
                                            "string"
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        "meta" => [
                            "per_page" => 15,
                            "current_page" => 1,
                            "last_page" => 10,
                            "from" => 1,
                            "to" => 15,
                            "total" => 150
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product',
            'method' => 'POST',
            'form_params' => [
                "id" => 1,
                "name" => "Универсальная карта",
                "slug" => "universalnaya-karta",
                "description" => "null",
                "type" => "1",
                "priority" => 0,
                "data" => [
                    'name' => 'on_main',
                    'value' => 1
                ]
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    "data" => [
                        [
                            "id" => 1,
                            "name" => "Универсальная карта",
                            "slug" => "universalnaya-karta",
                            "description" => "null",
                            "type" => "1",
                            "priority" => 0,
                            "markup" => [
                                "string"
                            ],
                            "data" => [
                                "string"
                            ],
                            "prices" => [
                                [
                                    "value" => 100,
                                    "min_value" => null,
                                    "max_value" => null,
                                    "step_value" => null
                                ]
                            ],
                            "images" => [
                                [
                                    "main" => "https://vpodarok.ru/image.png",
                                    "other" => [
                                        "string"
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/{id}',
            'method' => 'GET',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    "data" => [
                        [
                            "id" => 1,
                            "name" => "Универсальная карта",
                            "slug" => "universalnaya-karta",
                            "description" => "null",
                            "type" => "1",
                            "priority" => 0,
                            "markup" => [
                                "string"
                            ],
                            "data" => [
                                "string"
                            ],
                            "prices" => [
                                [
                                    "value" => 100,
                                    "min_value" => null,
                                    "max_value" => null,
                                    "step_value" => null
                                ]
                            ],
                            "images" => [
                                [
                                    "main" => "https://vpodarok.ru/image.png",
                                    "other" => [
                                        "string"
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/{id}',
            'method' => 'PUT',
            'path_params' => [
                "id" => 1,
            ],
            'form_params' => [
                "id" => 1,
                "name" => "Универсальная карта",
                "slug" => "universalnaya-karta",
                "description" => "null",
                "type" => "1",
                "priority" => 0,
                "data" => [
                    'name' => 'on_main',
                    'value' => 1
                ]
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    "data" => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/{id}',
            'method' => 'DELETE',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    "data" => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/{id}/uploadImage',
            'method' => 'POST',
            'form_params' => [
                "id" => 1,
                'image' => "https://vpodarok.ru/image.png"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    "data" => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/{id}/product',
            'method' => 'POST',
            'form_params' => [
                "name" => "Универсальная карта",
                "image" => "https://vpodarok.ru/image.png",
                "prices" => [
                    [
                        "value" => 100,
                        "min_value" => null,
                        "max_value" => null,
                        "step_value" => null
                    ]
                ]
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    "data" => [
                        "id" => 1,
                        "name" => "Универсальная карта",
                        "slug" => "universalnaya-karta",
                        "description" => "null",
                        "type" => "1",
                        "priority" => 0,
                        "markup" => [
                            "string"
                        ],
                        "data" => [
                            "string"
                        ],
                        "prices" => [
                            [
                                "value" => 100,
                                "min_value" => null,
                                "max_value" => null,
                                "step_value" => null
                            ]
                        ],
                        "images" => [
                            [
                                "main" => "https://vpodarok.ru/image.png",
                                "other" => [
                                    "string"
                                ]
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'ProductsDatas' => [
        [
            'uri' => 'product/data',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            'product_id' => 1,
                            'name' => "Name",
                            'value' => 1000
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/data',
            'method' => 'POST',
            'form_params' => [
                'product_id' => 1,
                'name' => "Name",
                'value' => 1000
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                        'product_id' => 1,
                        'name' => "Name",
                        'value' => 1000
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/data/{id}',
            'method' => 'POST',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                        'product_id' => 1,
                        'name' => "Name",
                        'value' => 1000
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/data/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1,
            ],
            'form_params' => [
                'product_id' => 1,
                'name' => "Name",
                'value' => 1000
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/data/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'ProductsPrices' => [
        [
            'uri' => 'product/price',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "product_id" => 1,
                            "supplier_id" => 1,
                            "currency_id" => 1,
                            "value" => 100,
                            "min_value" => 1,
                            "max_value" => 10,
                            "step_value" => 1,
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/price',
            'method' => 'POST',
            'form_params' => [
                "id" => 1,
                "product_id" => 1,
                "supplier_id" => 1,
                "currency_id" => 1,
                "value" => 100,
                "min_value" => 1,
                "max_value" => 10,
                "step_value" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/price/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "product_id" => 1,
                        "supplier_id" => 1,
                        "currency_id" => 1,
                        "value" => 100,
                        "min_value" => 1,
                        "max_value" => 10,
                        "step_value" => 1,
                        "created_at" => "2021-05-20 12:00:00",
                        "updated_at" => "2021-05-20 12:00:00"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/price/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "product_id" => 1,
                        "supplier_id" => 1,
                        "currency_id" => 1,
                        "value" => 100,
                        "min_value" => 1,
                        "max_value" => 10,
                        "step_value" => 1,
                        "created_at" => "2021-05-20 12:00:00",
                        "updated_at" => "2021-05-20 12:00:00"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/price/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1,
            ],
            'form_params' => [
                "id" => 1,
                "product_id" => 1,
                "supplier_id" => 1,
                "currency_id" => 1,
                "value" => 100,
                "min_value" => 1,
                "max_value" => 10,
                "step_value" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "product_id" => 1,
                        "supplier_id" => 1,
                        "currency_id" => 1,
                        "value" => 100,
                        "min_value" => 1,
                        "max_value" => 10,
                        "step_value" => 1,
                        "created_at" => "2021-05-20 12:00:00",
                        "updated_at" => "2021-05-20 12:00:00"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/price/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/price/sync',
            'method' => 'DELETE',
            'form_params' => [
                "product_id" => 1,
                "supplier_id" => 1,
                "currency_id" => 1,
                "value" => 100,
                "min_value" => 1,
                "max_value" => 10,
                "step_value" => 1,],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'ProductsUserSettings' => [
        [
            'uri' => 'product/user/setting',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "product_id" => 1,
                            "user_id" => 1,
                            "space_item_id" => 1,
                            "supplier_id" => 1,
                            "template" => "default",
                            "paper" => "portrait",
                            "markup_type" => 1,
                            "markup_value" => 1,
                            "nominal_in_pull" => false
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/user/setting',
            'method' => 'POST',
            'form_params' => [
                "id" => 1,
                "product_id" => 1,
                "user_id" => 1,
                "space_item_id" => 1,
                "supplier_id" => 1,
                "template" => "default",
                "paper" => "portrait",
                "markup_type" => 1,
                "markup_value" => 1,
                "nominal_in_pull" => false
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "product_id" => 1,
                        "user_id" => 1,
                        "space_item_id" => 1,
                        "supplier_id" => 1,
                        "template" => "default",
                        "paper" => "portrait",
                        "markup_type" => 1,
                        "markup_value" => 1,
                        "nominal_in_pull" => false
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/user/setting/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "product_id" => 1,
                        "user_id" => 1,
                        "space_item_id" => 1,
                        "supplier_id" => 1,
                        "template" => "default",
                        "paper" => "portrait",
                        "markup_type" => 1,
                        "markup_value" => 1,
                        "nominal_in_pull" => false
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/user/setting/{id}',
            'method' => 'PUT',
            'form_params' => [
                "id" => 1,
                "product_id" => 1,
                "user_id" => 1,
                "space_item_id" => 1,
                "supplier_id" => 1,
                "template" => "default",
                "paper" => "portrait",
                "markup_type" => 1,
                "markup_value" => 1,
                "nominal_in_pull" => false
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "product_id" => 1,
                        "user_id" => 1,
                        "space_item_id" => 1,
                        "supplier_id" => 1,
                        "template" => "default",
                        "paper" => "portrait",
                        "markup_type" => 1,
                        "markup_value" => 1,
                        "nominal_in_pull" => false
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'product/user/setting/{id}',
            'method' => 'PUT',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'PullCards' => [
        [
            'uri' => 'pull/card/disable',
            'method' => 'PATCH',
            'form_params' => [
                'number' => '1',
                'code' => '1',
                'product_id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "card_number" => "1",
                        "additional_number" => "1",
                        "card_code" => "1",
                        "nominal" => 1,
                        "product_id" => 1
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/card',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "number" => 1,
                            "additional_number" => 123,
                            "code" => 123,
                            "nominal" => 100,
                            "reserved_at" => "12.12.2012",
                            "activation_date" => "12.12.2012",
                            "expires_date" => "12.12.2012",
                            "disable_date" => "12.12.2012",
                            "product_id" => 1,
                            "status" => 1,
                            "currency_id" => 1,
                            "comment" => "Comment",
                            "supplier_id" => 1,
                            "external_id" => 1,
                            "transaction_id" => 1,
                            "company_text" => "Text"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/card',
            'method' => 'POST',
            'form_params' => [
                "id" => 1,
                "number" => "1481225562",
                "additional_number" => 123,
                "code" => 123,
                "nominal" => 100,
                "reserved_at" => "12.12.2012",
                "activation_date" => "12.12.2012",
                "expires_date" => "12.12.2012",
                "disable_date" => "12.12.2012",
                "product_id" => 1,
                "status" => 1,
                "currency_id" => 1,
                "comment" => "Comment",
                "supplier_id" => 1,
                "user_id" => 1,
                "external_id" => 1,
                "transaction_id" => 1,
                "company_text" => "Text",
                "spaces" => [
                    [
                        "space" => "showcase",
                        "space_item_id" => 123
                    ]
                ]
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "number" => 1,
                            "additional_number" => 123,
                            "code" => 123,
                            "nominal" => 100,
                            "reserved_at" => "12.12.2012",
                            "activation_date" => "12.12.2012",
                            "expires_date" => "12.12.2012",
                            "disable_date" => "12.12.2012",
                            "product_id" => 1,
                            "status" => 1,
                            "currency_id" => 1,
                            "comment" => "Comment",
                            "supplier_id" => 1,
                            "external_id" => 1,
                            "transaction_id" => 1,
                            "company_text" => "Text"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/card/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "number" => 1,
                            "additional_number" => 123,
                            "code" => 123,
                            "nominal" => 100,
                            "reserved_at" => "12.12.2012",
                            "activation_date" => "12.12.2012",
                            "expires_date" => "12.12.2012",
                            "disable_date" => "12.12.2012",
                            "product_id" => 1,
                            "status" => 1,
                            "currency_id" => 1,
                            "comment" => "Comment",
                            "supplier_id" => 1,
                            "external_id" => 1,
                            "transaction_id" => 1,
                            "company_text" => "Text"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/card/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1,
            ],
            'form_params' => [
                "id" => 1,
                "number" => "1481225562",
                "additional_number" => 123,
                "code" => 123,
                "nominal" => 100,
                "reserved_at" => "12.12.2012",
                "activation_date" => "12.12.2012",
                "expires_date" => "12.12.2012",
                "disable_date" => "12.12.2012",
                "product_id" => 1,
                "status" => 1,
                "currency_id" => 1,
                "comment" => "Comment",
                "supplier_id" => 1,
                "user_id" => 1,
                "external_id" => 1,
                "transaction_id" => 1,
                "company_text" => "Text",
                "spaces" => [
                    [
                        "space" => "showcase",
                        "space_item_id" => 123
                    ]
                ]
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => '1'
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/card/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/card/generate',
            'method' => 'POST',
            'form_params' => [
                'space_item_id' => 1,
                'pull_cards' => [
                    [
                        'number' => "546255427",
                        "code" => "1234",
                        "product_id" => 10
                    ]
                ]
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "name" => "Name",
                        "path" => "Path",
                        "path_type" => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'PullGenerates' => [
        [
            'uri' => 'pull/generate',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "pull_card_id" => 1,
                            "pull_generate_group_id" => 1,
                            "path" => "1",
                            "comment" => "1",
                            "type_barcode" => "1"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate',
            'method' => 'POST',
            'form_params' => [
                "pull_card_id" => 1,
                "pull_generate_group_id" => 1,
                "path" => "1",
                "comment" => "1",
                "type_barcode" => "1"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "pull_card_id" => 1,
                        "pull_generate_group_id" => 1,
                        "path" => "1",
                        "comment" => "1",
                        "type_barcode" => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "pull_card_id" => 1,
                        "pull_generate_group_id" => 1,
                        "path" => "1",
                        "comment" => "1",
                        "type_barcode" => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1,
            ],
            'form_params' => [
                "pull_card_id" => 1,
                "pull_generate_group_id" => 1,
                "path" => "1",
                "comment" => "1",
                "type_barcode" => "1"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => '1'
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate/{id}/pdf',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'query_params' => [
                'hash' => ''
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => []
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate/{id}/template',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'query_params' => [
                'hash' => ''
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => []
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'PullGenerateGroups' => [
        [
            'uri' => 'pull/generate/group',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            'name' => 'Name',
                            "path" => "Path",
                            "path_type" => "1"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate/group',
            'method' => 'POST',
            'form_params' => [
                'id' => 1,
                'name' => 'Name',
                "path" => "Path",
                "path_type" => "1"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                        'name' => 'Name',
                        "path" => "Path",
                        "path_type" => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate/group/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                        'name' => 'Name',
                        "path" => "Path",
                        "path_type" => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate/group/{id}',
            'method' => 'PUT',
            'form_params' => [
                'name' => 'Name',
                "path" => "Path",
                "path_type" => "1"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate/group/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/generate/group/{id}/archive',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
                'hash' => '123'
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => []
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'PullToTypeOfSpaces' => [
        [
            'uri' => 'pull/to/type/of/space',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            'pull_card_id' => 1,
                            'space_item_id' => 1
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/to/type/of/space',
            'method' => 'POST',
            'form_params' => [
                'id' => 1,
                'pull_card_id' => 1,
                'space_item_id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                        'pull_card_id' => 1,
                        'space_item_id' => 1
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/to/type/of/space/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                        'pull_card_id' => 1,
                        'space_item_id' => 1
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/to/type/of/space/{id}',
            'method' => 'PUT',
            'form_params' => [
                'id' => 1,
                'pull_card_id' => 1,
                'space_item_id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'pull/to/type/of/space/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'Reports' => [
        [
            'uri' => 'report',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                            'type' => "1"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'report',
            'method' => 'POST',
            'form_params' => [
                'type' => '1',
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                        'type' => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'report/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                        'type' => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'report/{id}',
            'method' => 'PUT',
            'form_params' => [
                'type' => '1',
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => '1'
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'report/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'Roles' => [
        [
            'uri' => 'role',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'role',
            'method' => 'POST',
            'form_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'role/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'role/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1
            ],
            'form_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'role/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'ShortUrls' => [
        [
            'uri' => 'short/url',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "code" => "888",
                            "url" => "url",
                            "type" => "1"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'short/url',
            'method' => 'POST',
            'form_params' => [
                "id" => 1,
                "code" => "888",
                "url" => "url",
                "type" => "1"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "code" => "888",
                        "url" => "url",
                        "type" => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'short/url/{id}',
            'method' => 'GET',
            'query_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "code" => "888",
                        "url" => "url",
                        "type" => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'short/url/{id}',
            'method' => 'PUT',
            'form_params' => [
                "id" => 1,
                "code" => "888",
                "url" => "url",
                "type" => "1"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'short/url/{id}',
            'method' => 'PUT',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'SmsSendings' => [
        [
            'uri' => 'sms/sending',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            'id' => 1,
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'sms/sending',
            'method' => 'POST',
            'form_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'sms/sending/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'sms/sending/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1
            ],
            'form_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        'id' => 1,
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'sms/sending/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'SpaceItems' => [
        [
            'uri' => 'space/item',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "space" => "b2b",
                            "slug" => "vpodarok",
                            "title" => "Vpodarok",
                            "description" => "Vpodarok - универсальный подарочные карты"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'space/item',
            'method' => 'POST',
            'form_params' => [
                "space" => "b2b",
                "slug" => "vpodarok",
                "title" => "Vpodarok",
                "description" => "Vpodarok - универсальный подарочные карты"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "space" => "b2b",
                        "slug" => "vpodarok",
                        "title" => "Vpodarok",
                        "description" => "Vpodarok - универсальный подарочные карты"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'space/item/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "space" => "b2b",
                        "slug" => "vpodarok",
                        "title" => "Vpodarok",
                        "description" => "Vpodarok - универсальный подарочные карты"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'space/item/{id}',
            'method' => 'PUT',
            'path_params' => [
                'id' => 1
            ],
            'form_params' => [
                "space" => "b2b",
                "slug" => "vpodarok",
                "title" => "Vpodarok",
                "description" => "Vpodarok - универсальный подарочные карты"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'space/item/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'Suppliers' => [
        [
            'uri' => 'supplier/{id}/balance',
            'method' => 'GET',
            'path_params' => [
                'id' => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'suppliers/list',
            'method' => 'GET',
            'response' => [
                'success' => [
                    'success' => true,
                    "code" => 200,
                    "data" => [
                        [
                            "id" => 1,
                            "name" => "Supplier Name",
                            "slug" => "supplier-name"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'code' => 500,
                    'message' => 'Server error occured'
                ]
            ]
        ],
    ],
    'SupplierOffice' => [
        [
            'uri' => 'suppliers',
            'method' => 'GET',
            'response' => [
                'success' => [
                    'success' => true,
                    'code' => 200,
                    'data' => [
                        [
                            "id" => 1,
                            "email" => "example@vpodarok.ru",
                            "phone" => "+71111111111",
                            "name" => "exampleName",
                            "space" => "cpa",
                            "active" => false,
                            "password" => "123456789",
                            "description" => "description",
                            "role_id" => 1,
                            "slug" => "example-name",
                            "external_id" => 55,
                            "refer_to_webhook" => true,
                            "remember_token" => "$2y$10$66O46KrSM.St16eECYXOxukx4i3rT9LV4dCg3px1Fv",
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00",
                            "user_data" => [
                                "id" => 1,
                                "user_id" => 1,
                                "name" => "John Doe",
                                "value" => "value",
                                "user_type" => "1",
                                "logo_path" => "/path/to/logo",
                                "is_full_report" => true,
                                "created_at" => "2021-05-20 12:00:00",
                                "updated_at" => "2021-05-20 12:00:00"
                            ]
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'suppliers',
            'method' => 'POST',
            'form_params' => [
                "name" => "John",
                "phone" => "+1234567890",
                "company_external_id" => 123,
                "role_id" => 1,
                "type" => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'code' => 200,
                    'data' => [
                        "id" => 1,
                        "email" => "example@vpodarok.ru",
                        "phone" => "+71111111111",
                        "name" => "exampleName",
                        "space" => "cpa",
                        "active" => false,
                        "password" => "123456789",
                        "description" => "description",
                        "role_id" => 1,
                        "slug" => "example-name",
                        "external_id" => 55,
                        "refer_to_webhook" => true,
                        "remember_token" => "$2y$10$66O46KrSM.St16eECYXOxukx4i3rT9LV4dCg3px1Fv",
                        "created_at" => "2021-05-20 12:00:00",
                        "updated_at" => "2021-05-20 12:00:00",
                        "user_data" => [
                            "id" => 1,
                            "user_id" => 1,
                            "name" => "John Doe",
                            "value" => "value",
                            "user_type" => "1",
                            "logo_path" => "/path/to/logo",
                            "is_full_report" => true,
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'suppliers/{id}',
            'method' => 'GET',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'code' => 200,
                    'data' => [
                        "id" => 1,
                        "email" => "example@vpodarok.ru",
                        "phone" => "+71111111111",
                        "name" => "exampleName",
                        "space" => "cpa",
                        "active" => false,
                        "password" => "123456789",
                        "description" => "description",
                        "role_id" => 1,
                        "slug" => "example-name",
                        "external_id" => 55,
                        "refer_to_webhook" => true,
                        "remember_token" => "$2y$10$66O46KrSM.St16eECYXOxukx4i3rT9LV4dCg3px1Fv",
                        "created_at" => "2021-05-20 12:00:00",
                        "updated_at" => "2021-05-20 12:00:00",
                        "user_data" => [
                            "id" => 1,
                            "user_id" => 1,
                            "name" => "John Doe",
                            "value" => "value",
                            "user_type" => "1",
                            "logo_path" => "/path/to/logo",
                            "is_full_report" => true,
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'code' => 404,
                    'message' => 'Supplier Office not found'
                ]
            ]
        ],
        [
            'uri' => 'suppliers/{id}',
            'method' => 'DELETE',
            'path_params' => [
                'id' => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'code' => 200,
                ],
                'error' => [
                    'success' => false,
                    'code' => 404,
                    'message' => 'Supplier Office not found'
                ]
            ]
        ],
        [
            'uri' => 'suppliers/{id}',
            'method' => 'PATCH',
            'path_params' => [
                'id' => 1
            ],
            'form_params' => [
                "name" => "John",
                "phone" => "+1234567890",
                "company_external_id" => 123,
                "role_id" => 1,
                "type" => 1
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'code' => 200,
                    'data' => [
                        "id" => 1,
                        "email" => "example@vpodarok.ru",
                        "phone" => "+71111111111",
                        "name" => "exampleName",
                        "space" => "cpa",
                        "active" => false,
                        "password" => "123456789",
                        "description" => "description",
                        "role_id" => 1,
                        "slug" => "example-name",
                        "external_id" => 55,
                        "refer_to_webhook" => true,
                        "remember_token" => "$2y$10$66O46KrSM.St16eECYXOxukx4i3rT9LV4dCg3px1Fv",
                        "created_at" => "2021-05-20 12:00:00",
                        "updated_at" => "2021-05-20 12:00:00",
                        "user_data" => [
                            "id" => 1,
                            "user_id" => 1,
                            "name" => "John Doe",
                            "value" => "value",
                            "user_type" => "1",
                            "logo_path" => "/path/to/logo",
                            "is_full_report" => true,
                            "created_at" => "2021-05-20 12:00:00",
                            "updated_at" => "2021-05-20 12:00:00"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'code' => 404,
                    'message' => 'Supplier Office not found'
                ]
            ]
        ],
    ],
    'Users' => [
        [
            'uri' => 'user',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "email" => "user@user.com",
                            "phone" => "88005553535",
                            "password" => "user",
                            "role_id" => 1,
                            "space" => "uk",
                            "refer_to_webhook" => false,
                            "remember_token" => "123"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user',
            'method' => 'POST',
            'form_params' => [
                "email" => "user@user.com",
                "phone" => "88005553535",
                "name" => "Name",
                "description" => "Description",
                "password" => "user",
                "role_id" => 1,
                "space" => "uk",
                "refer_to_webhook" => false
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "email" => "user@user.com",
                        "phone" => "88005553535",
                        "password" => "user",
                        "role_id" => 1,
                        "space" => "uk",
                        "refer_to_webhook" => false,
                        "remember_token" => "123"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/{id}',
            'method' => 'GET',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "email" => "user@user.com",
                        "phone" => "88005553535",
                        "password" => "user",
                        "role_id" => 1,
                        "space" => "uk",
                        "refer_to_webhook" => false,
                        "remember_token" => "123"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/{id}',
            'method' => 'PUT',
            'path_params' => [
                "id" => 1,
            ],
            'form_params' => [
                "email" => "user@user.com",
                "phone" => "88005553535",
                "name" => "Name",
                "description" => "Description",
                "password" => "user",
                "role_id" => 1,
                "space" => "uk",
                "refer_to_webhook" => false
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => "1"
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/{id}',
            'method' => 'DELETE',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/{id}',
            'method' => 'PATCH',
            'path_params' => [
                "id" => 1,
            ],
            'form_params' => [
                "email" => "user@user.com",
                "phone" => "88005553535",
                "name" => "Name",
                "description" => "Description",
                "password" => "user",
                "role_id" => 1,
                "space" => "uk",
                "refer_to_webhook" => false
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => "1"
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'UserIpAddresses' => [
        [
            'uri' => 'user/ip/address',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "country_id" => 1,
                            "ip" => "123"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/ip/address',
            'method' => 'POST',
            'form_params' => [
                "country_id" => 1,
                "ip" => "123"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "country_id" => 1,
                        "ip" => "123"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/ip/address/{id}',
            'method' => 'GET',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "country_id" => 1,
                        "ip" => "123"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/ip/address/{id}',
            'method' => 'PUT',
            'form_params' => [
                "country_id" => 1,
                "ip" => "123"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/ip/address/{id}',
            'method' => 'DELETE',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
    'UserWebhooks' => [
        [
            'uri' => 'user/webhook',
            'method' => 'GET',
            'query_params' => [
                'page' => 1,
                'limit' => 5
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        [
                            "id" => 1,
                            "entity" => 1,
                            "type" => 1,
                            "user_id" => 1,
                            "webhook" => "1",
                            "token" => "1"
                        ]
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/webhook',
            'method' => 'POST',
            'form_params' => [
                "entity" => 1,
                "type" => 1,
                "user_id" => 1,
                "webhook" => "1",
                "token" => "1"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "entity" => 1,
                        "type" => 1,
                        "user_id" => 1,
                        "webhook" => "1",
                        "token" => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/webhook/{id}',
            'method' => 'GET',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => [
                        "id" => 1,
                        "entity" => 1,
                        "type" => 1,
                        "user_id" => 1,
                        "webhook" => "1",
                        "token" => "1"
                    ]
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/webhook/{id}',
            'method' => 'PUT',
            'path_params' => [
                "id" => 1,
            ],
            'form_params' => [
                "entity" => 1,
                "type" => 1,
                "user_id" => 1,
                "webhook" => "1",
                "token" => "1"
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => 1
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
        [
            'uri' => 'user/webhook/{id}',
            'method' => 'PUT',
            'path_params' => [
                "id" => 1,
            ],
            'response' => [
                'success' => [
                    'success' => true,
                    'data' => true
                ],
                'error' => [
                    'success' => false,
                    'message' => 'Unauthorized'
                ]
            ]
        ],
    ],
//    'SupplierOffice users' => [
//        'uri' => 'address',
//        'method' => 'GET',
//        'query_params' => [
//            'page' => 1,
//            'limit' => 5
//        ],
//        'response' => [
//            'success' => [
//                'success' => true,
//                'data' => [
//                    [
//                        'id' => 1,
//                        'title' => 'Москва'
//                    ]
//                ]
//            ],
//            'error' => [
//                'success' => false,
//                'message' => 'Unauthorized'
//            ]
//        ]
//    ],
//    'Mobile Auth' => [
//        'uri' => 'address',
//        'method' => 'GET',
//        'query_params' => [
//            'page' => 1,
//            'limit' => 5
//        ],
//        'response' => [
//            'success' => [
//                'success' => true,
//                'data' => [
//                    [
//                        'id' => 1,
//                        'title' => 'Москва'
//                    ]
//                ]
//            ],
//            'error' => [
//                'success' => false,
//                'message' => 'Unauthorized'
//            ]
//        ]
//    ],
//    'Mobile SMS' => [
//        'uri' => 'address',
//        'method' => 'GET',
//        'query_params' => [
//            'page' => 1,
//            'limit' => 5
//        ],
//        'response' => [
//            'success' => [
//                'success' => true,
//                'data' => [
//                    [
//                        'id' => 1,
//                        'title' => 'Москва'
//                    ]
//                ]
//            ],
//            'error' => [
//                'success' => false,
//                'message' => 'Unauthorized'
//            ]
//        ]
//    ],
//    'Mobile Activate UK' => [
//        'uri' => 'address',
//        'method' => 'GET',
//        'query_params' => [
//            'page' => 1,
//            'limit' => 5
//        ],
//        'response' => [
//            'success' => [
//                'success' => true,
//                'data' => [
//                    [
//                        'id' => 1,
//                        'title' => 'Москва'
//                    ]
//                ]
//            ],
//            'error' => [
//                'success' => false,
//                'message' => 'Unauthorized'
//            ]
//        ]
//    ],
//    'Mobile Profile' => [
//        'uri' => 'address',
//        'method' => 'GET',
//        'query_params' => [
//            'page' => 1,
//            'limit' => 5
//        ],
//        'response' => [
//            'success' => [
//                'success' => true,
//                'data' => [
//                    [
//                        'id' => 1,
//                        'title' => 'Москва'
//                    ]
//                ]
//            ],
//            'error' => [
//                'success' => false,
//                'message' => 'Unauthorized'
//            ]
//        ]
//    ],
//    'Mobile Email' => [
//        'uri' => 'address',
//        'method' => 'GET',
//        'query_params' => [
//            'page' => 1,
//            'limit' => 5
//        ],
//        'response' => [
//            'success' => [
//                'success' => true,
//                'data' => [
//                    [
//                        'id' => 1,
//                        'title' => 'Москва'
//                    ]
//                ]
//            ],
//            'error' => [
//                'success' => false,
//                'message' => 'Unauthorized'
//            ]
//        ]
//    ],
//    'Mobile Payment' => [
//        'uri' => 'address',
//        'method' => 'GET',
//        'query_params' => [
//            'page' => 1,
//            'limit' => 5
//        ],
//        'response' => [
//            'success' => [
//                'success' => true,
//                'data' => [
//                    [
//                        'id' => 1,
//                        'title' => 'Москва'
//                    ]
//                ]
//            ],
//            'error' => [
//                'success' => false,
//                'message' => 'Unauthorized'
//            ]
//        ]
//    ],
//    'Mobile Products' => [
//        'uri' => 'address',
//        'method' => 'GET',
//        'query_params' => [
//            'page' => 1,
//            'limit' => 5
//        ],
//        'response' => [
//            'success' => [
//                'success' => true,
//                'data' => [
//                    [
//                        'id' => 1,
//                        'title' => 'Москва'
//                    ]
//                ]
//            ],
//            'error' => [
//                'success' => false,
//                'message' => 'Unauthorized'
//            ]
//        ]
//    ],
//    'Mobile Showcase' => [
//        'uri' => 'address',
//        'method' => 'GET',
//        'query_params' => [
//            'page' => 1,
//            'limit' => 5
//        ],
//        'response' => [
//            'success' => [
//                'success' => true,
//                'data' => [
//                    [
//                        'id' => 1,
//                        'title' => 'Москва'
//                    ]
//                ]
//            ],
//            'error' => [
//                'success' => false,
//                'message' => 'Unauthorized'
//            ]
//        ]
//    ],
//    'Mobile Transaction' => [
//        'uri' => 'address',
//        'method' => 'GET',
//        'query_params' => [
//            'page' => 1,
//            'limit' => 5
//        ],
//        'response' => [
//            'success' => [
//                'success' => true,
//                'data' => [
//                    [
//                        'id' => 1,
//                        'title' => 'Москва'
//                    ]
//                ]
//            ],
//            'error' => [
//                'success' => false,
//                'message' => 'Unauthorized'
//            ]
//        ]
//    ],
];
