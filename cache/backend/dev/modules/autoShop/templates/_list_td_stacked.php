<td colspan="6">
  <?php echo __('%%is_activated%% <small>%%shop_category%%</small> - %%type%% (<em>%%email%%</em>) is looking for a %%item_name%% (%%location%%)', array('%%is_activated%%' => get_partial('shop/list_field_boolean', array('value' => $shop_main->getIsActivated())), '%%shop_category%%' => $shop_main->getShopCategory(), '%%type%%' => $shop_main->getType(), '%%email%%' => $shop_main->getEmail(), '%%item_name%%' => link_to($shop_main->getItemName(), 'shop_main_edit', $shop_main), '%%location%%' => $shop_main->getLocation()), 'messages') ?>
</td>
