<td colspan="4">
  <?php echo __('%%id%% - %%name%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($shop_category->getId(), 'shop_category_edit', $shop_category), '%%name%%' => $shop_category->getName(), '%%created_at%%' => false !== strtotime($shop_category->getCreatedAt()) ? format_date($shop_category->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($shop_category->getUpdatedAt()) ? format_date($shop_category->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
