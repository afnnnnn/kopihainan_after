// validation.js
var validationRules = {
    name: /^[A-Za-z\s]+$/,
    email: /^.+@gmail.com$/,
};

function validateForm() {
    var name = document.getElementById('name').value;
    if (!validationRules.name.test(name)) {
        alert('Invalid name');
        return false;
    }

    var email = document.getElementById('email').value;
    if (!validationRules.email.test(email)) {
        alert('Invalid email');
        return false;
    }

    // If all validations pass
    return true;
}