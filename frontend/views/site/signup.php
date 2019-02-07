<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="form" class="pt-7 pb-7 m-0"><!--form-->
    <div class="container">
        <div class="row ">
            <div class="col-sm-6 col-sm-offset-3 ">
                <div class="login-form bg-100 p-4"><!--login form-->
                    <div class="mb-5">
                        <h1 class="mt-0 mb-0"><?= Html::encode($this->title) ?></h1>
                        <p class="mb-0">Please fill out the following fields to signup:</p>
                    </div>
                    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                    <?= $form->field($model, 'username')->textInput(['class' => 'input_field', 'autofocus' => true, 'placeholder' => "Name"])->label(false); ?>
                    <?= $form->field($model, 'email')->input('email', ['class' => 'input_field', 'placeholder' => "Email Address"])->label(false); ?>
                    <?= $form->field($model, 'password')->passwordInput(['class' => 'input_field', 'placeholder' => "Password"])->label(false); ?>
                    <div class="btn-form text-center">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div><!--/login form-->
            </div>
        </div>
    </div>
</section><!--/form-->
