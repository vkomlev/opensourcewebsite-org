<?php

namespace app\modules\groupBot\controllers;

use app\modules\groupBot\CommandController;

/**
 * Class StartController
 *
 * @package app\controllers\bot
 */
class StartController extends CommandController
{

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}