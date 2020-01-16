<?php
/** @var \app\models\Language $languageModel */
/** @var string $currentCode */
/** @var string $currentName */

if ($languageModel) { ?>
    <?= $languageModel->hasErrors() ? \Yii::t('groupBot', 'Sorry, it looks like something went wrong.') : NULL ?><br/>
<?php } ?>

<b><?= \Yii::t('groupBot', 'Your Language') ?></b><br/><br/>
<?= $currentName ?> (<?= strtoupper($currentCode) ?>)
