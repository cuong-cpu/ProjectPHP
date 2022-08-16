var chuaNhap = "Mục bắt buộc, vui lòng nhập(*)";
var saiDinhDang = "Nhập sai định dạng (*)";

// validate liên hệ
function validateLienHe () {
    var flag = 0;

    //email
    var errorEmail = document.getElementById('error-email');
    var email = document.getElementById('email').value;
    var regex_email = /^[a-zA-Z0-9]*@gmail.com{1}$/;
    var kq_email = regex_email.test(email);
    if (email.length == 0) {
        errorEmail.innerHTML = chuaNhap;
        flag++;
    }
    else if (kq_email == false) {
        errorEmail.innerHTML = saiDinhDang;
        flag++;
    }
    else {
        errorEmail.innerHTML ="";
    }


    // nội dung phản hồi
    var errorContent = document.getElementById('error-content');
    var content = document.getElementById('content').value;
    if (content.length == 0) {
        errorContent.innerHTML = "Vui lòng nhập nội dung phản hồi"
        flag++;
    }
    else {
        errorContent.innerHTML = "";
    }

    //return function
    if (flag == 0) {
        alert("Cảm ơn bạn đã liên hệ, chúng tôi sẽ sơm phảm hồi lại !");
        return true;
    }

    else {
        return false;
    }
}
