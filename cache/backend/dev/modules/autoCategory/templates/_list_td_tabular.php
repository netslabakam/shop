<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($shop_category->getId(), 'shop_category_edit', $shop_category) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $shop_category->getName() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($shop_category->getCreatedAt()) ? format_date($shop_category->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($shop_category->getUpdatedAt()) ? format_date($shop_category->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
