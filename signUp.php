<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
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
        <div class="signUp__title">
            <h1 class= "bold">Tạo tài khoản</h1>


        </div>

        <div class="signUp">
            <form action="" method="POST" id="form-sign-up">
                <h4>Thông tin cá nhân</h4>
                <div class="formGroup">
                    <input type="text" name="Ho" id="Ho" placeholder=" ">
                    <label for="Ho" class="form__label">Họ</label>
                    <span class="errorMess"></span>
                </div>

                <div class="formGroup">
                    <input type="text" name="Ten" id="Ten" placeholder=" ">
                    <label for="Ten" class="form__label">Tên</label>
                    <span class="errorMess"></span>
                </div>

                <h4>Thông tin tài khoản</h4>
                <div class="formGroup">
                    <input type="email" name="email" id="email" placeholder=" ">
                    <label for="email" class="form__label">Email</label>
                    <span class="errorMess"></span>
                </div>

                <div class="formGroup">
                    <input type="password" name="password" id="password" placeholder=" ">
                    <label for="password" class="form__label">Mật khẩu</label>
                    <span class="errorMess"></span>
                </div>



                <h4>Để nhận thêm nhiều phần quà hấp dẫn khác</h4>
                <p class="left">Email là nơi mà chúng tôi sẽ gửi thông báo cho bạn.</p>
                <div class="options">
                    <div class="options__savePass">
                        <input type="checkbox" name="yesIlike" id="yesIlike">
                        <label for="yesIlike">Vâng, tôi sẽ nhận thông báo qua email.</label>
                    </div>
                    <a href="#" class="bold">Biết thêm những chính sách khác của chúng tôi.</a>
                </div>
                <h4>Điều khoản sử dụng</h4>
                <div class="formGroup left" id="spec">
                    <input type="checkbox" name="agree" id="agree">
                    <label for="agree">
                        <span class="specSpan"> Tôi sẽ đồng ý với <a href="#">điều khoản này</a>
                        </span>
                    </label>
                    <span class="errorMess"></span>
                </div>
                <button type="submit" id="btn--signUp">Đăng ký</button>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="./js/validator.js"></script>
    <script>
        validator({
            form: '#form-sign-up',
            formGroupSelector: '.formGroup',
            errorSelector : '.errorMess',
            rules: [

            validator.isRequired('#Ho', 'Vui lòng nhập Họ'),
            validator.isRequired('#Ten', 'Vui lòng nhập Tên'),
            validator.isRequired('#email', 'Vui lòng nhập email'),
            validator.isRequired('#password', 'Vui lòng nhập password'),
            validator.isRequired('#agree','Vui lòng đồng ý điều khoản của chúng tôi'),



            validator.minLength('#password',6,'Vui lòng nhập password đủ 6 ký tự'),
            validator.isEmail('#email', 'Vui lòng nhập email hợp lệ'),

            ],
            // Lưu lại thông tin của user sau khi bấm vào btn
            onSubmit: function (data) {
            // Call API
            console.log(data)
            }
        })

    </script>

</body>
</html>