<?php

use app\modules\groupBot\components\CommandRouter;
use app\modules\bot\components\RequestMessage;
use app\modules\bot\components\ResponseMessage;
use app\modules\groupBot\components\BotClient;

return [
    'components' => [
        'commandRouter' => [
            'class' => CommandRouter::className(),
            'invalidRouteRedirect' => 'error/command-not-found',
            'rules' => [
                '/filter_<action:\w+>' => 'filter/<action:\w+>', //list, connect, disconnect, add, remove, flush
            ],
        ],
        'requestMessage' => [
            'class' => RequestMessage::className(),
        ],
        'responseMessage' => [
            'class' => ResponseMessage::className(),
        ],
        'botClient' => [
            'class' => BotClient::className(),
        ],
    ],
];