<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccountingBooksSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accounting-books-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'book_title') ?>

    <?= $form->field($model, 'book_author') ?>

    <?= $form->field($model, 'book_article') ?>

    <?= $form->field($model, 'book_photo') ?>

    <?php  echo $form->field($model, 'publisher_title') ?>

    <?php  echo $form->field($model, 'publisher_phone') ?>

    <?php  echo $form->field($model, 'publisher_address') ?>

    <?php  echo $form->field($model, 'published_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
