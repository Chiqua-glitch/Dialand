<?php
ob_start();
?>

<section class="formLogin">
  <div class="title">
    <h1>accout</h1>
    <p><a href="/">home</a> / accout</p>
  </div>
  <form action="/login" method="post">
    <div>
      <label for="email">email</label>
      <input type="email" name="email" id="email" placeholder="Email">
      <?php if (!empty(error("email"))) : ?>
        <p class="error"><?= error("email") ?></p>
      <?php endif ?>
    </div>
    <div>
      <label for="password">password</label>
      <input type="password" name="password" id="password" placeholder="Password">
      <?php if (!empty(error("password"))) : ?>
        <p class="error"><?= error("password") ?></p>
      <?php endif ?>
    </div>
    <input type="submit" value="sign in">
    <ul>
      <li><a href="/shop">Forgot your password ?</a></li>
      <li><a href="/shop">Return to Store</a></li>
    </ul>
  </form>

  <div class="more">
    <p>Vous n'avez pas de compte ? <a href="/register">Inscrivez vous !</a></p>
  </div>
</section>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
