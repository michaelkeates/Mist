const discount__img = document.getElementById('discount__img');
const form = document.getElementById('form');
const username = document.getElementById('uid');
const loginemail = document.getElementById('email');
const password = document.getElementById('pwd');
const password2 = document.getElementById('pwdrepeat');

const usernamelogin = document.getElementById('uidlogin');
const userpasswordlogin = document.getElementById('pwdlogin');

const usernamecontact = document.getElementById('name');
const useremailcontact = document.getElementById('email');
const usermessagecontact = document.getElementById('field-efaa9081ad87dd5');

form.addEventListener('submit', e => {
    e.preventDefault();

    checkRegistrationInputs();
});

function checkRegistrationInputs() {
    // trim to remove the whitespaces
    const usernameValue = username.value.trim();
    const emailValue = loginemail.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if (usernameValue == '') {
        setErrorFor(username, 'Username cannot be blank');
    } else {
        setSuccessFor(username);
    }

    if (emailValue == '') {
        setErrorFor(loginemail, 'Email cannot be blank');
    } else if (!isEmail(emailValue)) {
        setErrorFor(loginemail, 'Not a valid email');
    } else {
        setSuccessFor(loginemail);
    }

    if (passwordValue == '') {
        setErrorFor(password, 'Password cannot be blank');
    } else {
        setSuccessFor(password);
    }

    if (password2Value == '') {
        setErrorFor(password2, 'Password Check cannot be blank');
    } else if (passwordValue !== password2Value) {
        setErrorFor(password2, 'Passwords does not match');
    } else {
        setSuccessFor(password2);
    }

    if (usernameValue != '' && emailValue != '' && isEmail(emailValue) && passwordValue != '' && password2Value != '') {
        setAccountCreated();
    }
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

form.addEventListener('login', e => {
    e.preventDefault();

    checkLoginInputs();
});


function checkLoginInputs() {
    // trim to remove the whitespaces
    const usernameloginValue = usernamelogin.value.trim();
    const passwordloginValue = userpasswordlogin.value.trim();

    if (usernameloginValue == '') {
        setErrorFor(usernamelogin, 'Username cannot be blank');
    } else {
        setSuccessFor(usernamelogin);
    }

    if (passwordloginValue == '') {
        setErrorFor(userpasswordlogin, 'Password cannot be blank');
    } else {
        setSuccessFor(userpasswordlogin);
    }
}

function checkContactInputs() {
    // trim to remove the whitespaces
    const usernamecontactvalue = usernamecontact.value.trim();
    const useremailcontactvalue = useremailcontact.value.trim();
    const usermessagecontactvalue = usermessagecontact.value.trim();


    if (usernamecontactvalue == '') {
        setErrorFor(usernamecontact, 'Name cannot be blank');
    } else {
        setSuccessFor(usernamecontact);
    }

    if (useremailcontactvalue == '') {
        setErrorFor(useremailcontact, 'Email cannot be blank');
    } else if (!isEmail(useremailcontactvalue)) {
        setErrorFor(useremailcontact, 'Not a valid email');
    } else {
        setSuccessFor(useremailcontact);
    }

    if (usermessagecontactvalue == '') {
        setErrorFor(usermessagecontact, 'Message cannot be blank');
    } else {
        setSuccessFor(usermessagecontact);
    }

    if (usernamecontactvalue != '' && useremailcontactvalue != '' && usermessagecontactvalue != '' && isEmail(useremailcontactvalue)) {
        setMessageSubmitted();
    }

}

//outcomes

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function setMessageSent(input) {
    Swal.fire('Any fool can use a computer')
}

function setLoginSuccessFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control success2';
    small.innerText = message;
}

function setAccountCreated() {
    Swal.fire({
        title: 'Account Created!',
        text: "You have successfully created a new account. Click Ok to go to the home page.",
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ok'
    }).then((result) => {
        if (result.isConfirmed) {
            self.location = "home.html";
        }
    })
}

function setMessageSubmitted() {
    Swal.fire({
        title: 'Message Sent!',
        text: "You have successfully submitted your message. We will reply to you as soon as possible.",
        icon: 'success',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Ok'
    }).then((result) => {
        function setValue(id, newvalue) {
            var s = document.getElementById(id);
            s.value = newvalue;
        }
        window.onload = function () {
            setValue("message", " Submit Form ");
        }
    })
}

function setLoginSuccessBothFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
    //SweetAlert section
    let timerInterval
    Swal.fire({
        title: 'Success!',
        html: 'You have successfully logged in! Please wait for <b></b> milliseconds.',
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft()
            }, 100)
        },
        willClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            self.location = "home.html"
        }
    })
    //self.location="home.html";
}