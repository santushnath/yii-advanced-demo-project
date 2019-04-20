<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_email:email',
            'name',
            'description:ntext',
            'ikey',
            'amount',
            'quantity',
            'availability',
            'prod_condition',
            'brand',
            'stock',
            'image',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

    <ul class="nav nav-tabs border-0">
        <?php foreach ($model->pictures as $picture) : ?>
            <li class="p-3 border mr-1 mb-1">
                <?= $picture->image ?>
            </li>
        <?php endforeach;?>
    </ul>

</div>
