function showForm() {
    document.getElementById('formContainer').style.display = 'flex';
    document.getElementById('openButton').style.display = 'none';
}

document.getElementById('registrationForm').onsubmit = function(event) {
    event.preventDefault();

    const alertBox = document.createElement('div');
    alertBox.className = 'alert-box';

    const alertMessage = document.createElement('p');
    alertMessage.id = 'alertMessage';
    alertMessage.textContent = 'Login Verified Successfully!';

    alertBox.appendChild(alertMessage);

    document.querySelector('.container').appendChild(alertBox);

    alertBox.style.display = 'block';

    setTimeout(function() {
        alertBox.style.display = 'none';
    }, 3000);
};
