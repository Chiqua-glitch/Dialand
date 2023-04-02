<?php
ob_start();
?>

<section class="formRegister">
  <div class="title">
    <h1>create account</h1>
    <p><a href="/">home</a> / create account</p>
  </div>
  <form action="/register/" method="post">
    <div>
      <label for="username">first name</label>
      <input type="text" name="username" id="username" placeholder="First Name">
      <?php if (!empty(error("username"))) : ?>
        <p class="error"><?= error("username") ?></p>
      <?php endif ?>
    </div>
    <div>
      <label for="lastname">last name</label>
      <input type="text" name="lastName" id="lastname" placeholder="Last Name">
      <?php if (!empty(error("lastName"))) : ?>
        <p class="error"><?= error("lastName") ?></p>
      <?php endif ?>
    </div>
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
    <div>
      <label for="passwordConfirm">password</label>
      <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm Password">
      <?php if (!empty(error("confirm"))) : ?>
        <p class="error"><?= error("confirm") ?></p>
      <?php endif ?>
    </div>
    <input type="submit" value="create">
    <a href="/shop">Return to Store</a>
  </form>

  <div class="more">
    <p>Vous avez déjà un compte ? <a href="/login">Enregistrez vous !</a></p>
  </div>
</section>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
