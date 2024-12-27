<?php $this->layout('master', ['title' => 'Login']) ?>

<?php if(!logged()): ?>

<h2>Login</h2>

<?= getFlash('message'); ?>

<form style="display: flex; flex-direction: column; gap: 10px;"
    action="/login" method="post" >
    <input style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px;"
        type="text" name="email" placeholder="E-mail" value="john.doe@example.com"> 
    <input style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px;"
        type="password" name="password" placeholder="Password" value="password">
    <button style="padding: 5px; margin-top:3px; outline:none; border-radius: 5px; cursor:pointer; background:#30b8e9;"
    type="submit">Login</button>
</form>

<?php else: ?>

<h2>Olá <?php echo user()->firstName; ?>, você já está logado!</h2>

<?php endif; ?>  