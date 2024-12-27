<?php $this->layout('master', ['title' => 'Create']) ?>

<h2>Create User</h2>
<div><?php echo getFlash('message')?></div>
<div 
    style="display: flex; flex-direction: column; 
             justify-content:center;
            align-items: center;
            justify-content:center;
            height:400px;
        ">
    <form action="/user/store" method="post" 
            style="display: flex; flex-direction: column; gap: 10px;">

        <div style="display: flex; flex-direction: column;">
            <label for="firstName">Nome:</label>
            <input style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px;"
                type="text" name="firstName" placeholder="Seu nome">
            <?php echo getFlash('firstName')?>
        </div>
        
        <div style="display: flex; flex-direction: column;">
            <label for="lastName">Sobrenome:</label>
            <input style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px;"
            type="text" name="lastName" placeholder="Seu sobrenome">
            <?php echo getFlash('lastName')?>
        </div>
        
        <div style="display: flex; flex-direction: column;">
            <label for="email">E-mail:</label>
            <input style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px;"
            type="text" name="email" placeholder="Seu e-mail">
            <?php echo getFlash('email')?>            
        </div>
        
        <div style="display: flex; flex-direction: column;">
            <label for="password">Senha:</label>
            <input style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px;"
            type="password" name="password" placeholder="Sua senha">
            <?php echo getFlash('password')?>            
        </div>


        <button style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px; cursor:pointer; background:#30b8e9;"
            type="submit">Create</button>
    </form>
</div>