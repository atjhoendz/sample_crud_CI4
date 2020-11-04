<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer</title>
</head>

<body>
  <a href="/customer/add">Add New Customer</a>
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($customers as $customer) : ?>
        <tr>
          <td><?= $customer->first_name ?></td>
          <td><?= $customer->last_name ?></td>
          <td><a href="/customer/edit/<?= $customer->id ?>">Edit</a></td>
          <td><a href="/customer/delete/<?= $customer->id ?>">Delete</a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>