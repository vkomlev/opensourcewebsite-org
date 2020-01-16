<?php

namespace app\modules\groupBot;

use app\modules\bot\Module as BaseModule;
use app\modules\bot\telegram\BotApiClient;
use yii\base\InvalidRouteException;
use yii\base\InvalidConfigException;
use app\modules\bot\models\BotOutsideMessage;

/**
 * admin module definition class
 */
class Module extends BaseModule
{

    /**
     * @param BotApiClient $botApi
     */
    public function initBotComponents($botApi)
    {
        $this->botApi = $botApi;

        $botConfig = require(\Yii::getAlias('@app/modules/groupBot/config') . '/bot.php');
        \Yii::configure(\Yii::$app, $botConfig);

        if ($botApi->getMessage()) {
            \Yii::$app->requestMessage->setMessage($botApi->getMessage());
        } elseif ($callbackQuery = $botApi->getCallbackQuery()) {
            $messageData = $callbackQuery['message'];
            $messageData['from'] = $callbackQuery['from'];
            \Yii::$app->requestMessage->map($messageData);
        }

        if ($botApi->getMessage() && !$botApi->getMessage()->getFrom()->isBot()) {
            /** @var Module $botModule */
            $botApi->bot_client_id = $botApi->saveClientInfo();
            $botApi->type = $botApi->getMessage()->isBotCommand() ? BotOutsideMessage::TYPE_COMMAND
                : BotOutsideMessage::TYPE_ORDINARY_TEXT;

            BotOutsideMessage::saveMessage($botApi);
        }

        /** @var BotClient $botClient */
        if ($botClient = \Yii::$app->botClient->getModel()) {
            \Yii::$app->language = $botClient->language_code;
        }
    }
}
