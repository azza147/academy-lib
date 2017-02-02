<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">    
    <div class="row">
        <div class="col-sm-6">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'bbk')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'udk')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'author_mark')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'entry_heading')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'main_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'title_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'author_info')->textArea() ?>

            <?= $form->field($model, 'edition')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'publisher_location')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'publisher_name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'publication_year')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'page_number')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'illustration_info')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'attachment_info')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'series_info')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'binding')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'circulation')->textInput(['maxlength' => true]) ?>
            
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
