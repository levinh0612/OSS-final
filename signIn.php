<?php
session_start();
$username = $_POST['email_login'] ?? '';
$password = $_POST['password_login'] ?? '';
$_SESSION['submit_login'] = $username;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
      <link href="assets/img/your-logo.png" rel="icon">

    <!-- this is font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- link css -->
    <link rel="stylesheet" href="./assets/css/signInUp.css">

</head>
<body>
    <div class="container">
        <div class="title">
            <h1 class= "bold">Đăng nhập</h1>
        </div>

        <div class="signIn">
            <a href="./admin/index.php">Đăng nhập với tư cách là admin.</a>

            <form action="./signIn-Handle-user.php" method="post" id="form-sign-in">
                <div class="formGroup">
                    <input type="email" name="email_login" id="email" placeholder=" ">
                    <label for="email" class="form__label">Email</label>
                    <span class="errorMess"></span>
                </div>

                <div class="formGroup">
                    <input type="password" name="password_login" id="password" placeholder=" ">
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
                <input type="submit" name="submit_login" id="btn--signIn" value="Đăng Nhập"></input>
            </form>
        </div>

        <div class="signUp--move">
            <h4>Đăng ký thành viên</h4>
            <p>Gia nhập với chúng tôi để có được nhiều ưu đãi hấp dẫn hơn.</p>
            <h3><a href="./signUp.php">Tham gia</a></h3>
        </div>
    </div>
    <script type="text/javascript" src="./js/validator.js"></script>
    <!-- <script>
        validator({
            form: '#form-sign-in',
            formGroupSelector: '.formGroup',
            errorSelector : '.errorMess',
            rules: [

            // rule bắt buộc nhập
                validator.isRequired('#email', 'Vui lòng nhập email'),

            // rule kiểm tra email
                validator.isEmail('#email', 'Vui lòng nhập email hợp lệ '),
                validator.isRequired('#password', 'Vui lòng nhập mật khẩu '),

            ],
            // Lưu lại thông tin của user sau khi bấm vào btn
            onSubmit: function (data) {
            // Call API
            console.log(data)
            }
        })

    </script> -->
</body>
</html>