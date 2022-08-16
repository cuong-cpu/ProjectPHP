var chuaNhap = "Mục này bắt buộc (*)"
var nhapSai = "Vui lòng nhập link video nhúng từ youtube (*)";

var regex_src_video = /(?:https?:\/\/)?(?:www\.)?youtu\.?be(?:\.com)?\/?.*(?:watch|embed)?(?:.*v=|v\/|\/)([\w\-_]+)\&?/;
var regex_phone = /^0[0-9]{9}$/;

function validateVideo () {
    var flag = 0;

    // name video
    var errorNameVideo = document.getElementById('error_name_video');
    var nameVideo = document.getElementById('name_video').value;    
    if (nameVideo.length == 0 ) {
        errorNameVideo.innerHTML = chuaNhap;
        flag++;
    }
    else {
        errorNameVideo.innerHTML = "";
    }

    // link video
    var errorLinkVideo = document.getElementById("error_link_video");
    var linkVideo = document.getElementById("link_video").value;
    var result_video = regex_src_video.test(linkVideo);
    if (linkVideo.length == 0 ) {
        errorLinkVideo.innerHTML = chuaNhap;
        flag++;
    }
    else if(result_video == false) {
        errorLinkVideo.innerHTML = nhapSai;
        flag++;
    }
    else {
        errorLinkVideo.innerHTML = "";
    }

    // return funtion
    if (flag == 0) {
        return true;
    }
    else {
        return false;
    }
}

function validateInsert_user() {
    var flag = 0;

    // name user
    var errorNameUser = document.getElementById('error_name_new_user');
    var nameUser = document.getElementById('name_new_user').value;
    if (nameUser.length == 0) {
        errorNameUser.innerHTML = chuaNhap;
        flag++;
    }
    else {
        errorNameUser.innerHTML = "";
    }

    // phone user
    var errorPhoneUser = document.getElementById('error_phone_new_user');
    var phoneUser = document.getElementById('phone_new_user').value;
    var result_phone = regex_phone.test(phoneUser);
    if (phoneUser.length == 0) {
        errorPhoneUser.innerHTML = chuaNhap;
        flag++;
    }
    else if (result_phone == false) {
        errorPhoneUser.innerHTML = "Nhập sai định dạng (*)";
        flag++;
    }
    else {
        errorPhoneUser.innerHTML = "";
    }

    // pass user
    var errorPassUser = document.getElementById('error_pass_new_user');
    var passUser = document.getElementById('pass_new_user').value;
    if (passUser.length == 0) {
        errorPassUser.innerHTML = chuaNhap;
        flag++;
    }
    else if (passUser.length < 8) {
        errorPassUser.innerHTML = "Mật khẩu phải ít nhất đủ 8 kỹ tự (*)";
        flag++;
    }
    else {
        errorPassUser.innerHTML = "";
    }

    // access rights
    var errorAccessRights = document.querySelector('#error_access_rights');
    var access_rights = document.getElementById("access_rights").value;
    if(access_rights == 2) {
        errorAccessRights.innerHTML = "Vui long chọn quyền truy cập (*)";
        flag++;
    }
    else {
        errorAccessRights.innerHTML="";
    }

    //return function
    if (flag == 0) {
        return true;
    }

    else {
        return false;
    }
}

function validateUpdate_user() {
    var flag = 0;

    // name user
    var errorNameUser = document.getElementById('error_name_new_user');
    var nameUser = document.getElementById('name_new_user').value;
    if (nameUser.length == 0) {
        errorNameUser.innerHTML = chuaNhap;
        flag++;
    }
    else {
        errorNameUser.innerHTML = "";
    }

    // pass user
    var errorPassUser = document.getElementById('error_pass_new_user');
    var passUser = document.getElementById('pass_new_user').value;
    if (passUser.length == 0) {
        errorPassUser.innerHTML = chuaNhap;
        flag++;
    }
    else if (passUser.length < 8) {
        errorPassUser.innerHTML = "Mật khẩu phải ít nhất đủ 8 kỹ tự (*)";
        flag++;
    }
    else {
        errorPassUser.innerHTML = "";
    }

    // access rights
    var errorAccessRights = document.querySelector('#error_access_rights');
    var access_rights = document.getElementById("access_rights").value;
    if(access_rights == 2) {
        errorAccessRights.innerHTML = "Vui long chọn quyền truy cập (*)";
        flag++;
    }
    else {
        errorAccessRights.innerHTML="";
    }

    //return function
    if (flag == 0) {
        return true;
    }

    else {
        return false;
    }
}