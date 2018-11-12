<?php use_stylesheet('tovar.css') ?>
<?php if (!$sf_user->isAuthenticated()): ?>
    <?php echo get_component('sfGuardAuth', 'signin_form') ?>
<?php endif ?>

<?php if ($sf_user->isAuthenticated()): ?>
    <h1>New Shop main</h1>
<?php include_partial('form', array('form' => $form)) ?>
<?php endif ?>