<?php use_helper('I18N', 'Date') ?>
<?php include_partial('shop/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Editing item "%%type%% is looking for a %%type%%"', array('%%type%%' => $shop_main->getType()), 'messages') ?></h1>

  <?php include_partial('shop/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('shop/form_header', array('shop_main' => $shop_main, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('shop/form', array('shop_main' => $shop_main, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('shop/form_footer', array('shop_main' => $shop_main, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
