<?php
namespace frontend\controllers;

use backend\models\Products;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class ProductController extends Controller
{
    public function actionView( $id )
    {
        $product = Products::find()->where(['id' => $id, 'status' => 1])->one();
        $data = [
            'product' => $product
        ];
        return $this->render('view', $data);
    }


}
