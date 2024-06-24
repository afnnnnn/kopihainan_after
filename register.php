<?php

// Set the Content-Security-Policy header(only allow scripts from the same domain)
header("Content-Security-Policy: script-src 'self'");
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .register-form {
            width: 300px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #00000033;
        }
        .register-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .register-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .register-form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: #fff;
        }
        .login-link {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
        input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        }
    </style>
</head>
<body>
<script src="validation.js"></script>
    <div class="register-form">
        <h2>Registration Page</h2>
        <form action="form_handler.php" method="post"  onsubmit="return validateForm()">
            <input type="text" name="name" placeholder="your Name" pattern="^[a-zA-Z0-9]*$" required>
            <input type="email" name="email" placeholder="Email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
            <input type="password" name="password" placeholder="Password (must be 8 characters long and contain at least one letter, one number, or one special character)" pattern="^(?=.*[A-Za-z\d@$!%*#?&]).{8,}$" required>
            <button type="submit">Register</button>
        </form>
        <a href="login.php" class="login-link">Already have an account? Login here</a>
    </div>

    <script>
                // FILEPATH: /C:/xampp/htdocs/webappsecasg/form.html
                document.addEventListener('DOMContentLoaded', function() {
                    const form = document.querySelector('form');
                    const nameInput = document.getElementById('name');
                    const emailInput = document.getElementById('email');
                    const passwordInput = document.getElementById('password');

                    form.addEventListener('submit', function(event) {
                        event.preventDefault();
                        let isValid = true;

                        // Reset error messages
                        const errorMessages = document.querySelectorAll('.error-message');
                        errorMessages.forEach(function(errorMessage) {
                            errorMessage.remove();
                        });


                        // Validate name
                        if (nameInput.value.trim() === '') {
                            displayErrorMessage(nameInput, 'Name is required');
                            isValid = false;
                        }

                        // Validate email
                        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                        if (!emailRegex.test(emailInput.value)) {
                            displayErrorMessage(emailInput, 'Invalid email format');
                            isValid = false;
                        }


                        // Validate password
                        if (passwordInput.value.trim() === '') {
                            displayErrorMessage(passwordInput, 'Password is required');
                            isValid = false;
                        }

                        if (isValid) {
                            // Submit the form if all inputs are valid
                            form.submit();
                        }
                    });

                    function displayErrorMessage(input, message) {
                        const errorMessage = document.createElement('span');
                        errorMessage.classList.add('error-message');
                        errorMessage.textContent = message;
                        input.parentNode.appendChild(errorMessage);
                    }
                });
            </script>
</body>
</html>
