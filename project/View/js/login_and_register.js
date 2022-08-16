// validate đăng nhập và đăng ký

var chuaNhap = "Mục bắt buộc, vui lòng nhập(*)";
var saiDinhDang = "Nhập sai định dạng (*)";
var mkToiThieu = "Mật khẩu phải có ít nhất 8 ký tự (*)";

// validate đăng ký
function validateRegister() {
    var flag = 0;

    // fullname new user 
    var errorfullname = document.getElementById("error_fullname");
    var fullname = document.getElementById("fullname").value;
    var regex_fullname = /^[aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ\s]*$/;
    var kq_fullname = regex_fullname.test(fullname);

    if (fullname.length == 0) {
        errorfullname.innerHTML = chuaNhap;
        flag++;
    }
    else if (fullname.length < 6) {
        errorfullname.innerHTML = "Vui lòng nhập đầy đủ họ và tên (*)"
        flag++;
    }
    else if (kq_fullname == false) {
        errorfullname.innerHTML = saiDinhDang;
        flag++;
    }
    else {
        errorfullname.innerHTML = "";
    }
    
    // phone
    var errrorPhone = document.getElementById('error_phoneNb')
    var phone = document.getElementById("phoneNb_Register").value;
    var regex_phone = /^0[0-9]{9}$/;
    var result_phone = regex_phone.test(phone);
    if(phone.length == 0) {
        errrorPhone.innerHTML = chuaNhap;
        flag++;
    }
    else if(result_phone == false) {
        errrorPhone.innerHTML = saiDinhDang;
        flag++;
    }
    else {
        errrorPhone.innerHTML = "";
    }

    // pass
    var errorPass = document.getElementById('error_password');
    var pass = document.getElementById('password_Register').value;
    if(pass.length == 0) {
        errorPass.innerHTML = chuaNhap;
        flag++;
    }
    else if (pass.length < 8) {
        errorPass.innerHTML = mkToiThieu;
        flag++;
    }
    else {
        errorPass.innerHTML = "";
    }


    //return function
    if (flag == 0) {
        return true;
    }

    else {
        return false;
    }
}

// validate đăng nhập
function validateLogin() {
    var flag = 0;

    // phone number login
    var errorPhonenbLogin = document.getElementById("error_phoneNb_login");
    var phonenbLogin = document.getElementById("phoneNb_login").value;
    var regex_phonenbLogin = /^0[0-9]{9}$/;
    var kq_phonenbLogin = regex_phonenbLogin.test(phonenbLogin);

    if (phonenbLogin.length == 0) {
        errorPhonenbLogin.innerHTML = chuaNhap;
        flag++;
    }
    else if (kq_phonenbLogin == false) {
        errorPhonenbLogin.innerHTML = saiDinhDang;
        flag++;
    }
    else {
        errorPhonenbLogin.innerHTML = "";
    }


    // pass login
    var errorPassLogin = document.getElementById("error_password_login");
    var passLogin = document.getElementById("password_login").value;

    if (passLogin.length == 0) {
        errorPassLogin.innerHTML = chuaNhap;
        flag++;
    }
    else if (passLogin.length < 8) {
        errorPassLogin.innerHTML = mkToiThieu;
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