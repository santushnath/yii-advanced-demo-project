<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="container py-8">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="text-center mb-7">
                <h1><?= Html::encode($this->title) ?></h1>
                <p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.</p>
            </div>

            <div class="contact-form" id="contact-page">
<!--                    <h2 class="title text-center">Get In Touch</h2>-->
                <div class="status alert alert-success" style="display: none"></div>

                <?php $form = ActiveForm::begin(['id' => 'contact-form', 'class' => 'contact-form row']); ?>
                <div class="col-md-6">
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'placeholder' => 'Full Name'])->label(false) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'email')->input('email', ['placeholder' => "Email Address"])->label(false) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'subject')->textInput(['placeholder' => 'Subject'])->label(false) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'body')->textarea(['rows' => 6, 'id' => 'message', 'placeholder' => 'Message'])->label(false) ?>
                </div>
                <div class="col-md-12">
                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ])->label(false) ?>
                </div>
                <div class="col-md-12">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary pull-right', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>

        </div>
    </div>
</section>
