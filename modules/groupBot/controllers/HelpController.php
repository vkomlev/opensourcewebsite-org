<?php

namespace app\modules\groupBot\controllers;

use app\modules\groupBot\CommandController;

/**
 * Class HelpController
 *
 * @package app\controllers\bot
 */
class HelpController extends CommandController
{

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}