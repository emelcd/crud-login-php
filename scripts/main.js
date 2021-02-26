const formLogin = document.getElementById('login-form');
const formRegister = document.getElementById('register-form');
const toggleButton = document.getElementById('toggle-button');
console.log(toggleButton.textContent);
function toggleView() {
    let stateButton = toggleButton.textContent;
    console.log(stateButton);
    if(stateButton == "Register") {
        formLogin.style.display = "none";
        formRegister.style.display = "block";
        toggleButton.textContent = "Login";
    } else {
        formLogin.style.display = "block";
        formRegister.style.display = "none";
        toggleButton.textContent = "Register";

    }
}