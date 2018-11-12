<td class="sf_admin_text sf_admin_list_td_item_name">
  <?php echo link_to($shop_main->getItemName(), 'shop_main_edit', $shop_main) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_city">
  <?php echo $shop_main->getCity() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $shop_main->getLocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_type">
  <?php echo $shop_main->getType() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_activated">
  <?php echo get_partial('shop/list_field_boolean', array('value' => $shop_main->getIsActivated())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $shop_main->getEmail() ?>
</td>
