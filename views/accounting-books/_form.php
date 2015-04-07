<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AccountingBooks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="accounting-books-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'book_title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'book_author')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'book_article')->textInput(['maxlength' => 50]) ?>

<!--    --><?//= $form->field($model, 'book_photo')->textInput(['maxlength' => 255]) ?>

<!--    --><?//= $form->field($model, 'file')->fileInput() ?>
<!---->
<!--        --><?//= $form->field($model, 'book_photo')->textInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'book_photo')->fileInput() ?>

    <?= $form->field($model, 'publisher_title')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'publisher_phone')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'publisher_address')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'published_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
