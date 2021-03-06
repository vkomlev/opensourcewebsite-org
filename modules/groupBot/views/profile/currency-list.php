<?php
/** @var \app\models\Currency[] $currencies */
/** @var \yii\data\Pagination $pagination */
echo '<b>' . \Yii::t('groupBot', 'Please choose your currency') . ':</b>' . '<br/><br/>';

foreach ($currencies as $currency) {
    echo '/my_currency_' . $currency->code . ' - ' . $currency->name . ' (' . strtoupper($currency->code) . ')<br/>';
}
?>
<br/><?= \Yii::t('groupBot', 'Page {page} of {total}',
    ['page' => $pagination->page + 1, 'total' => $pagination->pageCount]); ?><br/>
