<?php
    use  yii\helpers\Url;
?>

<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
            <div class="productinfo text-center">
                <img src="<?= Url::to('@web/images/products/'.$model->image); ?>" alt="" />
                <h2>$<?= $model->amount; ?></h2>
                <p><?= $model->name; ?></p>
                <div class="mb-2">
                    <a class="btn btn-default add-to-cart mb-2" href="<?= Url::to(['/product/view', 'id' => $model->id])?>"><i class="fa fa-plus-square"></i>View Details</a>
                    <form class="d-inline-block" action="<?= Url::to(['/site/cart']); ?>" method="post">
                        <input type="hidden" name="pid" value="<?= $model->id; ?>">
                        <button href="#" class="btn btn-default add-to-cart mb-2"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                    </form>
                </div>
            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>$<?= $model->amount; ?></h2>
                    <p><?= $model->name; ?></p>
                    <div class="mb-2">
                        <a class="btn btn-default add-to-cart mb-2" href="<?= Url::to(['/product/view', 'id' => $model->id])?>"><i class="fa fa-plus-square"></i>View Details</a>
                        <form class="d-inline-block" action="<?= Url::to(['/site/cart']); ?>" method="post">
                            <input type="hidden" name="pid" value="<?= $model->id; ?>">
                            <button href="#" class="btn btn-default add-to-cart mb-2"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
        </div>
    </div>
</div>
