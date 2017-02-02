<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bbk') ?>

    <?= $form->field($model, 'udk') ?>

    <?= $form->field($model, 'author_mark') ?>

    <?= $form->field($model, 'entry_heading') ?>

    <?php // echo $form->field($model, 'main_title') ?>

    <?php // echo $form->field($model, 'title_title') ?>

    <?php // echo $form->field($model, 'author_info') ?>

    <?php // echo $form->field($model, 'edition') ?>

    <?php // echo $form->field($model, 'publisher_location') ?>

    <?php // echo $form->field($model, 'publisher_name') ?>

    <?php // echo $form->field($model, 'publication_year') ?>

    <?php // echo $form->field($model, 'page_number') ?>

    <?php // echo $form->field($model, 'illustration_info') ?>

    <?php // echo $form->field($model, 'attachment_info') ?>

    <?php // echo $form->field($model, 'series_info') ?>

    <?php // echo $form->field($model, 'isbn') ?>

    <?php // echo $form->field($model, 'binding') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'circulation') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
