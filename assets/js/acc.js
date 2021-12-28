document.querySelector('.img-btn').addEventListener('click',function()
{
    document.querySelector('.cont').classList.toggle('s-signup')
}
)

function checklogin() {
    var e = document.getElementById("email");
    var p = document.getElementById("password");
    if (e.value == "") {
        // alert("Bạn chưa nhập email đăng nhập !!!");
        document.getElementById("error-mess").innerHTML = "Bạn chưa nhập email";
        document.getElementById("error-mess").classList.add("error-mess");
        e.focus();
        return false;
    } else if (p.value == "") {
        //   alert("Bạn chưa nhập mật khẩu !!!");
        document.getElementById("error-mess").innerHTML = "Bạn chưa nhập mật khẩu";
        e.focus();
        e.focus();
        return false;
    }
    else {
        alert("Bạn đã đăng nhập thành công");

    }
}

function Dangky() {
    alert("Bạn đã đăng ký thành công, mời đăng nhập !!!");
}

