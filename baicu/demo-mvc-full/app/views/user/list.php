<a href="index.php?page=user-create">Create ADD new user</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($users) || !empty($users)):?>
    <?php foreach ($users as $user):?>
    <tr>
        <td><?php echo $user->id?></td>
        <td><?php echo $user->name?></td>
        <td><?php echo $user->email?></td>
        <td><?php echo $user->country?></td>
        <td><a href="index.php?page=user-delete&id=<?php echo $user->id?>">Delete</a></td>
        <td><a href="index.php?page=user-update&id=<?php echo $user->id?>">Update</a></td>
    </tr>
    <?php endforeach;?>
    <?php else:?>
    <tr><td colspan="4">Khong co du lieu</td></tr>
    <?php endif;?>
    </tbody>
</table>

