<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>新規登録画面</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>姓</label>
            <input type="text" name="fname" placeholder="例）山田" required>
          </div>
          <div class="field input">
            <label>名</label>
            <input type="text" name="lname" placeholder="例）太郎" required>
          </div>
        </div>
        <div class="field input">
          <label>メールアドレス</label>
          <input type="text" name="email" placeholder="メールアドレスを入力してください" required>
        </div>
        <div class="field input">
          <label>パスワード</label>
          <input type="password" name="password" placeholder="パスワードを入力してください" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>画像</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="新規登録">
        </div>
      </form>
      <div class="link"><a href="login.php">ログイン画面</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
