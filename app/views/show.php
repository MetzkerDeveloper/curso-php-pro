<?php $this->layout('master', ['title' => 'Show']) ?>

<div class="user-content">
  <h2>Users</h2>
  <div style="margin-bottom: 10px;"><?php echo getFlash('message')?></div>
  <table>
  <caption>
    Curso PHP PRO 
  </caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody >
    <tr>
      <th scope="row"><?= $user->id;?></th>
      <td><?= $user->firstName;?></td>
      <td><?= $user->lastName;?></td>
      <td><?= $user->email;?></td>
      <td>
        <div style="display: flex; justify-content: space-around; ">       
        <a style="color: orange;font-size:15px;" href="/edit/user/<?= $user->id;?>">
          <i class="fa-solid fa-pen"></i>
        </a>

        <a style="color: red;font-size:15px;" href="/delete/user/<?= $user->id;?>">
          <i class="fa-solid fa-trash"></i>
        </a>
        </div>
      </td>
    </tr>
  </tbody>
  </table>
</div>


