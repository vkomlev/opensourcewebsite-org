<?php

namespace app\modules\groupBot\controllers;

use app\modules\groupBot\CommandController;

/**
 * Class ExempleController
 *
 * @package app\modules\bot\controllers
 */
class ErrorController extends CommandController
{

    /**
     * @return string
     */
    public function actionCommandNotFound() {
        return 'Command not found!';
    }
}