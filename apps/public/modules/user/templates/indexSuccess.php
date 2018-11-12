<h1>Shop mains List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>City</th>
      <th>Type</th>
      <th>Item name</th>
      <th>Img</th>
      <th>Location</th>
      <th>Description</th>
      <th>Token</th>
      <th>Is activated</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($shop_mains as $shop_main): ?>
    <tr>
      <td><a href="<?php echo url_for('user/show?id='.$shop_main->getId()) ?>"><?php echo $shop_main->getId() ?></a></td>
      <td><?php echo $shop_main->getCategoryId() ?></td>
      <td><?php echo $shop_main->getCity() ?></td>
      <td><?php echo $shop_main->getType() ?></td>
      <td><?php echo $shop_main->getItemName() ?></td>
      <td><?php echo $shop_main->getImg() ?></td>
      <td><?php echo $shop_main->getLocation() ?></td>
      <td><?php echo $shop_main->getDescription() ?></td>
      <td><?php echo $shop_main->getToken() ?></td>
      <td><?php echo $shop_main->getIsActivated() ?></td>
      <td><?php echo $shop_main->getEmail() ?></td>
      <td><?php echo $shop_main->getPhone() ?></td>
      <td><?php echo $shop_main->getExpiresAt() ?></td>
      <td><?php echo $shop_main->getCreatedAt() ?></td>
      <td><?php echo $shop_main->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
