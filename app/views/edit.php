<?php $this->layout('master', ['title' => 'Edit']) ?>


  <h2>Editar Usuário</h2>
  <div><?php echo getFlash('message')?></div>
<div 
    style="display: flex; flex-direction: column; 
             justify-content:center;
            align-items: center;
            justify-content:center;
            height:400px;
        ">
    <form action="/user/update" method="post" 
            style="display: flex; flex-direction: column; gap: 10px;">
            <input type="hidden" name="id" value="<?=$user->id ?>">

        <div style="display: flex; flex-direction: column;">
            <label for="firstName">Nome:</label>
            <input style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px;"
                type="text" name="firstName" placeholder="Seu nome" value="<?=$user->firstName ?>">
            <?php echo getFlash('firstName')?>
        </div>
        
        <div style="display: flex; flex-direction: column;">
            <label for="lastName">Sobrenome:</label>
            <input style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px;"
            type="text" name="lastName" placeholder="Seu sobrenome" value="<?=$user->lastName ?>">
            <?php echo getFlash('lastName')?>
        </div>
        
        <div style="display: flex; flex-direction: column;">
            <label for="email">E-mail:</label>
            <input style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px;"
            type="text" name="email" placeholder="Seu e-mail" value="<?=$user->email ?>" readonly>
            <?php echo getFlash('email')?>            
        </div>
        
        <div style="display: flex; flex-direction: column;">
            <label for="password">Senha:</label>
            <input style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px;"
            type="password" name="password" placeholder="Sua senha">
            <?php echo getFlash('password')?>            
        </div>


        <button style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px; cursor:pointer; background:#30b8e9;"
            type="submit">Update</button>
    </form>
</div>
