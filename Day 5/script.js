function toggleDropdown() {
    var dropdown = document.getElementById("dropdownMenu");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
}

function openSignupForm() {
    var signupForm = document.getElementById("signupForm");
    signupForm.style.display = "flex";
}

function closeSignupForm() {
    var signupForm = document.getElementById("signupForm");
    signupForm.style.display = "none";
}

window.onclick = function(event) {
    var signupForm = document.getElementById("signupForm");
    if (event.target === signupForm) {
        signupForm.style.display = "none";
    }
}
