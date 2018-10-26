<?php

return [
    [
        'id' => 100,
        'username' => 'admin',
        'auth_key' => 'test100key',
        'password_hash' => Yii::$app->security->generatePasswordHash('admin'),
        'email' => 'admin@example.com',
        'is_email_confirmed' => 1,
        'status' => 10,
        'created_at' => time(),
        'updated_at' => time(),
    ],
    [
        'id' => 101,
        'username' => 'webmaster',
        'auth_key' => 'test101key',
        'password_hash' => Yii::$app->security->generatePasswordHash('webmaster'),
        'email' => 'demo@example.com',
        'is_email_confirmed' => 1,
        'status' => 10,
        'created_at' => time(),
        'updated_at' => time(),
    ],
    [
        'id' => 102,
        'username' => 'newuser',
        'auth_key' => 'test102key',
        'password_hash' => Yii::$app->security->generatePasswordHash('newuser'),
        'email' => 'newuser@example.com',
        'is_email_confirmed' => 0,
        'status' => 10,
        'created_at' => time(),
        'updated_at' => time(),
    ]
];
