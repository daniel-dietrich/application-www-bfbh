// Okienka rejestracji i logowania -------------------------------------------
const register_box = document.getElementById('register-box');
const register_button = document.getElementById("account-register");
const close_register_button = document.getElementsByClassName("close-register")[0];

const login_box = document.getElementById('login-box');
const login_button = document.getElementById("account-login");
const close_login_button = document.getElementsByClassName("close-login")[0];

register_button.onclick = () => {
    register_box.style.display = "block";
}

close_register_button.onclick = () => {
    register_box.style.display = "none";
}

login_button.onclick = () => {
    login_box.style.display = "block";
}

close_login_button.onclick = () => {
    login_box.style.display = "none";
}

window.onclick = event => {
    if (event.target === login_box) {
        login_box.style.display = "none";
    } else if (event.target === register_box) {
        register_box.style.display = "none";
    }
}
// -------------------------------------------------------------------------

// Dynamiczna nawigacja ----------------------------------------------------
let prevScrollPos = window.pageYOffset;

window.onscroll = function () {
    const currentScrollPos = window.pageYOffset;
    if (prevScrollPos > currentScrollPos) {
        document.getElementById("top-section").style.top = "0";
    } else {
        document.getElementById("top-section").style.top = "-10%";
    }
    prevScrollPos = currentScrollPos;
}
// -------------------------------------------------------------------------