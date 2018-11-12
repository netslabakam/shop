<?php include_javascripts() ?>
<?php include_stylesheets() ?>

<?php slot('title') ?>
<?php echo sprintf('%s is looking for a %s', $shop->getCity(), $shop->getLocation()) ?>
<?php end_slot(); ?>

<div id="job">
    <h1><?php echo $shop->getCity() ?></h1>
    <h2><?php echo $shop->getType() ?></h2>
    <h3>
        <?php echo $shop->getItemName() ?>
        <small> - <?php echo $shop->getLocation() ?></small>
    </h3>

    <?php if ($shop->getImg()): ?>
        <div class="logo">
            <a href="<?php echo $shop->getImg() ?>">
                <img src="/uploads/shop_img/<?php echo $shop->getImg() ?>"
                     alt="<?php echo $shop->getCity() ?> logo" />
            </a>
        </div>
    <?php endif; ?>

    <div class="description">
        <?php echo $shop->getDescription() ?>
    </div>

    <h4>Phone</h4>

    <p class="how_to_apply"><?php echo $shop->getPhone() ?></p>

    <div class="meta">
        <small>posted on <?php echo $shop->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
    </div>

    <div style="padding: 20px 0">
        <a href="<?php echo url_for('shop/index') ?>" class="btn btn-success">List</a>
    </div>
</div>

