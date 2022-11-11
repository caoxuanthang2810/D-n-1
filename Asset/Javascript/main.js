function checkFormLogin(){
    var userName = document.getElementsByName("userName");
    var password = document.getElementsByName("password");
    var passwordcheck = document.getElementsByName("passwordcheck");

    var msgErrorEmail = document.getElementById("msg-error-email");
    var msgErrorPass = document.getElementById("msg-error-pass");

    //onclick="return checkFormLogin()"

    if(userName.value != ""){
        if(userName.value.length < 8){
            alert("Vui lòng nhập tài khoản >= 8 kí tự");
            userName.focus();
            document.getElementById("msg-error-email").innerHTML = "<img src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập tên đăng nhập";
            return false;
        }
    }else{
        alert("Vui lòng nhập tài khoản");
        userName.focus();
        return false;
    }

    if(password.value != ""){
        if(password.value.length < 8){
            alert("Vui lòng nhập mật khẩu >= 8 kí tự");
            password.focus();
            return false;
        }
    }else{
        alert("Vui lòng nhập mật khẩu");
        password.focus();
        return false;
    }

    if(passwordcheck.value != ""){
        if(password.value != passwordcheck.value){
            alert("Mật khẩu không trùng khớp");
            passwordcheck.focus();
            return false;
        }
    }else{
        alert("Vui lòng nhập lại mật khẩu");
        passwordcheck.focus();
        return false;
    }
}