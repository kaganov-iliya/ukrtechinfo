<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AccountingBooks */

$this->title = 'Update Accounting Books: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Accounting Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="accounting-books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
