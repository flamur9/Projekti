<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in-page</title>
    <link rel="stylesheet" href="Sign-in-page.css">
</head>
<body>
    <div class="full-form">
        <div class="uppertext">
            <b>WELCOME! SIGN IN HERE, AND NEVER MISS THE LATEST SPORT NEWS.</b>
        </div>
        <div class="signin">
            <form class="formstyle" action="get" onsubmit="return validateForm()">
                <label class="user" for="">
                    <b>Username/Email :</b>
                    <input id="username" type="text" name="Username" required>
                    <div class="error-message" id="nameError"></div>
                </label>
                <label class="passw" for="">
                    <b>Password: </b>
                    <input id="password" type="password" name="Password" required>
                    <div class="error-message" id="passwordError"></div>
                </label>
                <button class="signin-button" type="submit"><b>Sign in</b></button>
                <hr width="200px">
                <div class="icons">
                    <a href="https://accounts.google.com/InteractiveLogin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=AVQVeyzCxsRmG_2nhOEvd1EtzpP_W8lIinl9CehQOYOmLD7iBPN8Z71E1KKo19W9lOpIKS0sl0tJ6w&theme=glif&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="blank">
                        <img class="gmail-icon" src="gmail-icon.webp" alt=""> 
                    </a>
                    <a href="https://www.microsoft.com/en-us/microsoft-365/outlook/email-and-calendar-software-microsoft-outlook?deeplink=%2fowa%2f&sdf=0" target="_blank">
                        <img class="outlook-icon" src="outlook-img.png" alt="">
                    </a>  
                </div>
                <hr width="200px">
                <div class="signuptext">
                    <label for=""><b>Don't have an account? </b><a id="signup" href="sign-up-page.html">Sign up.</a></label>
                </div>
            </form>
        </div>
    </div>

    <script>
        let nameRegex = /^[A-Z][a-z]{3,8}$/;
        let passwordRegex = /^[A-Za-z\d]{6,20}$/;
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        function validateForm() {
            let username = document.getElementById('username').value.trim();
            let password = document.getElementById('password').value.trim();
            let nameError = document.getElementById('nameError');
            let passwordError = document.getElementById('passwordError');

            nameError.innerText = '';
            passwordError.innerText = '';

            if (!nameRegex.test(username) && !emailRegex.test(username)) {
                nameError.innerText = 'Enter a valid username or email address.';
                return false;
            }

            if (!passwordRegex.test(password)) {
                passwordError.innerText = 'Password must be 6 to 20 characters and include at least one letter and one number.';
                return false;
            }

            window.location.href = 'main-page.html';

           
            return false;
        }
    </script>
</body>
</html>