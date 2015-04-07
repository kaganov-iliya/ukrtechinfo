<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AccountingBooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Accounting Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accounting-books-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Accounting Books', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'book_title',
            'book_author',
            'book_article',
            'book_photo',
             'publisher_title',
             'publisher_phone',
             'publisher_address',
             'published_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
