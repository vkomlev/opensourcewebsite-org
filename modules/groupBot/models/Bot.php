<?php

namespace app\modules\groupBot\models;

use Yii;
use \app\modules\bot\models\Bot as BaseModel;

/**
 * This is the model class for table "bot".
 *
 * @property int $id
 * @property string $name
 * @property string $token
 * @property string $type
 * @property integer $status
 *
 * @property BotClient[] $botClients
 * @property BotInsideMessage[] $insideMessages
 * @property BotOutsideMessage[] $outsideMessages
 */
class Bot extends BaseModel
{
    const BOT_TYPE = 'group';
}
