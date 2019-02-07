<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="form" class="pt-7 pb-7 m-0"><!--form-->
    <div class="container">
        <div class="row ">
            <div class="col-sm-4 col-sm-offset-4 ">
                <div class="login-form bg-100 p-4">
                    <div class="mb-5">
                        <h1 class="mt-0 mb-0"><?= Html::encode($this->title) ?></h1>
                    </div>
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                        <?= $form->field($model, 'username')->textInput(['class' => 'input_field', 'autofocus' => true, 'placeholder' => "Name"])->label(false); ?>
                        <?= $form->field($model, 'password')->passwordInput(['class' => 'input_field', 'placeholder' => "Password"])->label(false); ?>
                        <span>
                            <?= $form->field($model, 'rememberMe')->checkbox(['class' => "checkbox input_field"])->label('Keep me signed in'); ?>
                        </span>
                        <div class="btn-form">
                            <button type="submit" class="btn btn-default d-inline-block mt-0">Login</button>
                        </div>
                        <div class="text-600 mt-3">
                            If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                        </div>
                    <?php ActiveForm::end(); ?>
                </div><!--/login form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<!--
<div class="container">
    <div class="site-login">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to login:</p>

        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
-->
