<?php
/** @var \app\models\currency $currencyModel */
/** @var string $currentCode */
/** @var string $currentName */

if ($currencyModel) { ?>
    <?= $currencyModel->hasErrors() ? \Yii::t('groupBot', 'Sorry, it looks like something went wrong.') : NULL ?><br/>
<?php } ?>

<b><?= \Yii::t('groupBot', 'Your Currency') ?></b><br/><br/>
<?= $currentName ?> (<?= strtoupper($currentCode) ?>)
