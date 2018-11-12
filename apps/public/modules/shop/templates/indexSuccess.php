<?php include_stylesheets() ?>
<?php include_javascripts() ?>



<?php //if ($sf_user->isAuthenticated()): ?>
<div class="container-fluid d-flex align-items-center justify-content-center">
    <div class="row text-center">
        <h2 class="col-md-12 font-weight-bold black-text pt-2 mb-2">Tovari</h2>
        <hr class="hr-light my-2">
        <?php foreach ($shop_mains as $i => $shop): ?>
        <div class="card card-cascade col-md-3 narrower m-5">

            <div class="view view-cascade overlay">
                <a href="<?php echo $shop->getImg() ?>">
                    <img class="card-img-top" src="/uploads/shop_img/<?php echo $shop->getImg() ?>"
                         alt="<?php echo $shop->getCity() ?> logo" />
                </a>
            </div>
            <div class="card-body card-body-cascade">
                <h5 class="pink-text pb-2 pt-1"><?php echo $shop->getCity() ?></h5>
                <h4 class="font-weight-bold card-title"><?php echo $shop->getItemName() ?></h4>
                <p class="card-text"><?php echo $shop->getDescription() ?></p>
                <a class="btn btn-unique" href="<?php echo url_for('shop_show_item', $shop, true)?>">Buy</a>
            </div>
         </div>
         <?php endforeach; ?>

    </div>
</div>
<?php //endif ?>
