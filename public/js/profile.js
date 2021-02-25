function validateProfile() {
    let regexEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let regexName = /^[a-zA-Z\s]*$/;

    messageEmail.innerHTML = (profileEmail.value.match(regexEmail) ? "" : "Invalid email is entered");
    messageName.innerHTML = (profileName.value.match(regexName)) ? "" : "Invalid name is entered";
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
    messageCurrentPassword.innerHTML = "";
    messageNewPassword.innerHTML = "";
}

function assignProfileValue(name, email, phone) {
    profileName.value = name;
    profileEmail.value = email;
    profilePhone.value = phone;
}