<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $shop_main->getId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $shop_main->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>City:</th>
      <td><?php echo $shop_main->getCity() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $shop_main->getType() ?></td>
    </tr>
    <tr>
      <th>Item name:</th>
      <td><?php echo $shop_main->getItemName() ?></td>
    </tr>
    <tr>
      <th>Img:</th>
      <td><?php echo $shop_main->getImg() ?></td>
    </tr>
    <tr>
      <th>Location:</th>
      <td><?php echo $shop_main->getLocation() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $shop_main->getDescription() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $shop_main->getToken() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $shop_main->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $shop_main->getEmail() ?></td>
    </tr>
    <tr>
      <th>Phone:</th>
      <td><?php echo $shop_main->getPhone() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $shop_main->getExpiresAt() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $shop_main->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $shop_main->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('user/edit?id='.$shop_main->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('user/index') ?>">List</a>
