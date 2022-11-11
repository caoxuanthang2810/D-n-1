function checkFormRegister(){
    var CheckEmail = /^\w+@[a-zA-Z]{3,}\.com$/i;
    
    var email = document.getElementById("email");
    var userName = document.getElementById("userName");
    var password = document.getElementById("password");
    var passwordcheck = document.getElementById("passwordcheck");

    var msgErrorEmail = document.getElementById("msg-error-email");
    var msgErrorUserName = document.getElementById("msg-error-username");
    var msgErrorPass = document.getElementById("msg-error-pass");
    var msgErrorRePass = document.getElementById("msg-error-re-pass");
    var msgErrorPassSame1 = document.getElementById("msg-error-re-pass-same-1");
    var msgErrorPassSame2 = document.getElementById("msg-error-re-pass-same-2");

    if(email.value != ""){
        if(!CheckEmail.test(email.value)){
            msgErrorEmail.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập sai định dạng email";
            email.focus();
            return false;
        }else{
            msgErrorEmail.innerHTML = "";
            email.focus();
        }
    }else{
        msgErrorEmail.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập email";
        userName.focus();
        return false;
    }

    if(userName.value != ""){
        if(userName.value.length < 3){
            msgErrorUserName.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập tên tài khoản lớn hơn 3 kí tự";
            userName.focus();
            return false;
        }else{
            msgErrorUserName.innerHTML = "";
            userName.focus();
        }
    }else{
        msgErrorUserName.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập tên tài khoản";
        userName.focus();
        return false;
    }

    if(password.value != ""){
        if(password.value.length < 3){
            msgErrorPass.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập mật khẩu lớn hơn 3 kí tự";
            password.focus();
            return false;
        }else{
            msgErrorPass.innerHTML = "";
            password.focus();
        }
    }else{
        msgErrorPass.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập mật khẩu";
        password.focus();
        return false;
    }

    if(passwordcheck.value != ""){
        if(password.value != passwordcheck.value){
            msgErrorRePass.innerHTML = "";
            msgErrorPassSame1.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Mật khẩu không trùng khớp";
            msgErrorPassSame2.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Mật khẩu không trùng khớp";
            passwordcheck.focus();
            return false;
        }else{
            msgErrorPassSame1.innerHTML = "";
            msgErrorPassSame2.innerHTML = "";
            passwordcheck.focus();
        }
    }else{
        msgErrorRePass.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập lại mật khẩu";
        passwordcheck.focus();
        return false;
    }
}

function checkFormLogin(){
    var CheckEmail = /^\w+@[a-zA-Z]{3,}\.com$/i;
    
    var email = document.getElementById("email");
    var password = document.getElementById("password");

    var msgErrorEmail = document.getElementById("msg-error-email");
    var msgErrorPass = document.getElementById("msg-error-pass");

    if(email.value != ""){
        if(!CheckEmail.test(email.value)){
            msgErrorEmail.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập sai định dạng email";
            email.focus();
            return false;
        }else{
            msgErrorEmail.innerHTML = "";
            email.focus();
        }
        msgErrorEmail.innerHTML = "";
        email.focus();
    }else{
        msgErrorEmail.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập email";
        email.focus();
        return false;
    }

    if(password.value != ""){
        if(password.value.length < 3){
            msgErrorPass.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập mật khẩu lớn hơn 3 kí tự";
            password.focus();
            return false;
        }else{
            msgErrorPass.innerHTML = "";
            password.focus();
        }
    }else{
        msgErrorPass.innerHTML = "<img class='h-[10px] w-[10px] mr-1' src='../Asset/Image/logo/1200px-Nuvola_apps_error.svg.png'> Nhập mật khẩu";
        password.focus();
        return false;
    }
}