<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'bbk',
            'udk',
            'author_mark',
            'entry_heading',
            // 'main_title',
            // 'title_title',
            // 'author_info',
            // 'edition',
            // 'publisher_location',
            // 'publisher_name',
            // 'publication_year',
            // 'page_number',
            // 'illustration_info',
            // 'attachment_info',
            // 'series_info',
            // 'isbn',
            // 'binding',
            // 'price',
            // 'circulation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
