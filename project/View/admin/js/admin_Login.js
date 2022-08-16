// validate đăng nhập và đăng ký

var chuaNhap = "Mục bắt buộc, vui lòng nhập(*)";

// validate đăng nhập
function validateFormLogin () {
    var flag = 0;

    // phone number 
    var error_phone = document.getElementById("error_phone");
    var phone = document.getElementById("phone").value;
    var regex_phone = /^0[0-9]{9}$/;
    var kq_phone = regex_phone.test(phone);

    if (phone.length == 0) {
        error_phone.innerHTML = chuaNhap;
        flag++;
    }
    else if (kq_phone == false) {
        error_phone.innerHTML = saiDinhDang;
        flag++;
    }
    else {
        error_phone.innerHTML = "";
    }


    // pass login
    var errorPassLogin = document.getElementById("error_pass_login");
    var passLogin = document.getElementById("password").value;

    if (passLogin.length == 0) {
        errorPassLogin.innerHTML = chuaNhap;
        flag++;
    }
    else {
        errorPassLogin.innerHTML = "";
    }

    // return function
    if (flag == 0) {
        return true;
    }
    else return false;
}