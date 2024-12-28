<?php $this->layout('master', ['title' => 'Home']) ?>

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
     <?php foreach($users as $user): ?>

    <tr>
      <th scope="row"><?= $user->id;?></th>
      <td><?= $user->firstName;?></td>
      <td><?= $user->lastName;?></td>
      <td><?= $user->email;?></td>
      <td>
        <div style="display: flex; justify-content: space-between; gap:10px; ">
        <a style="color: black;font-size:15px;" href="/user/create">
          <i class="fa-solid fa-plus"></i>
        </a>

        <a style="color: black;font-size:15px;" href="/user/<?= $user->id;?>">
          <i class="fa-solid fa-eye"></i>
        </a>
        
        <a style="color: orange;font-size:15px;" href="/edit/user/<?= $user->id;?>">
          <i class="fa-solid fa-pen"></i>
        </a>

        <a style="color: red;font-size:15px;" href="/delete/user/<?= $user->id;?>">
          <i class="fa-solid fa-trash"></i>
        </a>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>   
  </tbody>
  </table>
</div>

<?php $this->start('scripts') ?>
    <!--<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.4/axios.min.js" integrity="sha512-lTLt+W7MrmDfKam+r3D2LURu0F47a3QaW5nF0c6Hl0JDZ57ruei+ovbg7BrZ+0bjVJ5YgzsAWE+RreERbpPE1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        axios.defaults.headers = {
            responseType: 'json',
            responseEncoding: 'utf8',
            xsrfCookieName: 'XSRF-TOKEN',
            xsrfHeaderName: 'X-XSRF-TOKEN',
            'X-Requested-With': 'XMLHttpRequest',
            'content-type': 'Application/json'

        }


        async function loadUser(){
            try {
                const {data} =  await axios.get('/users');
                console.log(data);

            }catch (e) {
                console.log(e);
            }
        }
        loadUser();
    </script>

<?php $this->stop() ?>