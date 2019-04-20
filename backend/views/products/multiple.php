<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $upload backend\models\Products */
/* @var $form yii\widgets\ActiveForm */
/* @var $products array */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
<!--
    <?= $form->field($upload, 'image[]')->fileInput(['multiple' => true]) ?>-->
    <?= $form->field($upload, 'image[]')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*', 'multiple' => true],
    ]) ?>

    <?= $form->field($upload, 'product_id')->dropDownList($products) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
