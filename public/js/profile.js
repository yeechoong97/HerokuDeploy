let profileName = document.getElementById('profile-name');
let profilePhone = document.getElementById('profile-phone');
let profileEmail = document.getElementById('profile-email');
let messageName = document.getElementById('error-msg-name');
let messagePhone = document.getElementById('error-msg-phone');
let messageEmail = document.getElementById('error-msg-email');
let currentPassword = document.getElementById('current-password');
let newPassword = document.getElementById('new-password');
let confirmPassword = document.getElementById('confirm-password');
let messageCurrentPassword = document.getElementById('error-msg-current-password');
let messageNewPassword = document.getElementById('error-msg-new-password');

function validateProfile() {
    let regexEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let regexName = /^[a-zA-Z\s]*$/;
    messageEmail.innerHTML = (profileEmail.value.match(regexEmail) ? "" : "Invalid email is entered");
    messageName.innerHTML = (profileName.value.match(regexName) && profileName.value != "") ? "" : "Invalid name is entered";
    messagePhone.innerHTML = (profilePhone.value.length < 10) ? "Invalid phone number is entered" : "";
    if (messageEmail.innerHTML == "" && messageName.innerHTML == "" && messagePhone.innerHTML == "")
        document.getElementById('profileEditForm').submit();
}

function appendProfileAlert(message) {
    Swal.fire({
        title: 'Success',
        text: message,
        icon: 'success',
        confirmButtonText: 'OK',
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });
}

function dismissErrorMessageProfile() {
    messageName.innerHTML = "";
    messagePhone.innerHTML = "";
    messageEmail.innerHTML = "";
}

function dismissErrorMessagePassword() {
    currentPassword.value = "";
    newPassword.value = "";
    confirmPassword.value = "";
    if (messageCurrentPassword != null)
        messageCurrentPassword.innerHTML = "";
    if (messageNewPassword != null)
        messageNewPassword.innerHTML = "";
}

function assignProfileValue(name, email, phone) {
    profileName.value = name;
    profileEmail.value = email;
    profilePhone.value = phone;
}