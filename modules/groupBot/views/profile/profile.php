<b><?= \Yii::t('groupBot', 'Your Profile') ?></b><br/><br/>
<?php
/** @var \TelegramBot\Api\Types\User $profile */
if (!empty($profile->getFirstName())) {
    echo \Yii::t('groupBot', 'First Name') . ": " . $profile->getFirstName() . "<br/>";
}
if (!empty($profile->getLastName())) {
    echo \Yii::t('groupBot', 'Last Name') . ": " . $profile->getLastName() . "<br/>";
}
if (!empty($profile->getUsername())) {
    echo \Yii::t('groupBot', 'Telegram Username') . ": @" . $profile->getUsername() . "<br/>";
}
