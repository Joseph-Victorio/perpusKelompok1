<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login Admin </title>
  <link rel="stylesheet" href="../public/css/login.css">
  <link rel="stylesheet" href="<?= BOOTSTRAP ?>">
  <link rel="stylesheet" href="<?= BASEURL ?>/css/style.css">
</head>

<body>
  <div class="center">
    <div class="img-container w-75 ">
      <img src="<?= BASEURL ?>/img/booksWithLogoCS.png" class="w-100" alt="" sizes="32x32">
    </div>
    <h1>Login Admin </h1>
    <form method="post" action="login/processLogin">
      <div class="txt_field">
        <input type="text" required name="username">
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" required name="password">
        <span></span>
        <label>Password</label>
      </div>
      <input type="submit" value="Login">
      <br></br>
  </div>
  </form>
  </div>
  <img src="<?= BASEURL ?>/img/curve.svg" class="w-100 z-1" alt="">
  <script src="../public/js/script.js"></script>
</body>
</html>