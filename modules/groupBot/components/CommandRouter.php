<?php

namespace app\modules\groupBot\components;

use app\modules\bot\components\CommandRouter as BaseModel;

/**
 * Class CommandRouter
 *
 * @package app\modules\bot\components
 */
class CommandRouter extends BaseModel
{

    /**
     * @var string
     */
    public $controllerNamespace = 'app\\controllers\\groupBot';

}