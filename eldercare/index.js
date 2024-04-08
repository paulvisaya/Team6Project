function fun(){
    var mob_nav = document.querySelector(".navbar");
    mob_nav.classList.toggle("active");
}


const passwordField = document.getElementById("password");
const togglePassword = document.querySelector(".password-toggle-icon i");

togglePassword.addEventListener("click", function () {
  if (passwordField.type === "password") {
    passwordField.type = "text";
    togglePassword.classList.remove("fa-eye");
    togglePassword.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    togglePassword.classList.remove("fa-eye-slash");
    togglePassword.classList.add("fa-eye");
  }
});

function solve() {
  const username = document.getElementById("first").value;
  const password = document.getElementById("password").value;

  // Check if username and password are correct
  if (username === "admin" && password === "admin") {
    // Redirect to home.html
    window.location.href = "index.html";
    
  } else {
    // Display error message
    alert("Wrong username or password");
 
  }
}


