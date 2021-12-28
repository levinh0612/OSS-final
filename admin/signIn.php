


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
      <link href="../assets/img/your-logo.png" rel="icon">

    <!-- this is font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- link css -->
    <link rel="stylesheet" href="../assets/css/signInUp.css">

</head>
<body>
    <div class="container">
        <div class="title">
            <h1 class= "bold">Đăng nhập | Admin</h1>
        </div>

        <div class="signIn">
            <form action="./signIn-Handle.php" method="POST" id="form-sign-in">
                <div class="formGroup">
                    <input type="text" name="username" id="username" placeholder=" ">
                    <label for="email" class="form__label">Tài khoản</label>
                    <span class="errorMess"></span>
                </div>

                <div class="formGroup">
                    <input type="password" name="password" id="password" placeholder=" ">
                    <label for="password" class="form__label">Mật khẩu</label>
                    <span class="errorMess"></span>
                </div>

                <div class="options">
                    <div class="options__savePass">
                        <input type="checkbox" name="keepMe" id="keepMe">
                        <label for="keepMe">Lưu mật khẩu</label>
                    </div>
                    <a href="#" class="bold">Quên mật khẩu</a>
                </div>
                <button type="submit" id="btn--signIn">Đăng nhập</button>
            </form>
        </div>
    </div>
</body>
</html>