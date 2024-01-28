<?php
require_once 'dbconnect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $emri = $_POST["Emri"];
    $mbiemri = $_POST["Mbiemri"];
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    // Validate user input
    if (empty($emri) || empty($mbiemri) || empty($username) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    // Determine the user's role based on a condition (e.g., user with ID 7 is an admin)
    $roli = ($username == 'ab12345@ubt-uni.net') ? 'admin' : 'user';

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare an insert statement
    $sql = "INSERT INTO users (emri, mbiemri, username, password, roli) VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssss", $param_emri, $param_mbiemri, $param_username, $param_password, $param_roli);

        // Set parameters
        $param_emri = $emri;
        $param_mbiemri = $mbiemri;
        $param_username = $username;
        $param_password = $hashed_password; // Use the hashed password
        $param_roli = $roli;

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect user to welcome page
            header("location: Sign-in-page.php");
        } else {
            echo "Ju lutem provoni me vone...";
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $conn->close();
}
?>




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>

<div class="full-form">
    <div class="uppertext"></div>
    <div class="signup">
        <form class="formstyle" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
            
            <label class="user">
                <b>Emri:</b>
                <input id="emri" type="text" name="Emri" required>
                <div class="error-message" id="emriError"></div>
                
                <b>Mbiemri:</b>
                <input id="mbiemri" type="text" name="Mbiemri" required>
                <div class="error-message" id="mbiemriError"></div>
                
                <b>Email :</b>
                <input id="username" type="text" name="Username" required>
                <div class="error-message" id="usernameError"></div>
            </label>
            
            <label class="passw">
                <b>Password: </b>
                <input id="password" type="password" name="Password" required>
                <div class="error-message" id="passwordError"></div>
            </label>
            
            <input id="signup" type="submit" value="Sign up">
            <hr width="200px">
            
            <div class="icons">
                <a href="https://accounts.google.com/InteractiveLogin/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&
                followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&osid=1&passive=1209600&service=mail&ifkv=AVQVeyzCxsRmG_2nhOEvd1EtzpP_W
                8lIinl9CehQOYOmLD7iBPN8Z71E1KKo19W9lOpIKS0sl0tJ6w&theme=glif&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="blank">
                    <img class="gmail-icon" src="gmail.gif" alt=""> 
                </a>
                <a href="https://www.microsoft.com/en-us/microsoft-365/outlook/email-and-calendar-software-microsoft-outlook?deeplink=
                %2fowa%2f&sdf=0" target="_blank">
                    <img class="outlook-icon" src="outlook.png" alt="">
                </a>  
            </div>
        </form>
    </div>
</div>

<script>
    let nameRegex = /^[A-Z][a-z]{3,8}$/;
    let passwordRegex = /^[A-Za-z\d]{6,20}$/;
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    function validateForm() {
        let emri = document.getElementById('emri').value.trim();
        let mbiemri = document.getElementById('mbiemri').value.trim();
        let username = document.getElementById('username').value.trim();
        let password = document.getElementById('password').value.trim();

        let emriError = document.getElementById('emriError');
        let mbiemriError = document.getElementById('mbiemriError');
        let usernameError = document.getElementById('usernameError');
        let passwordError = document.getElementById('passwordError');

        emriError.innerText = '';
        mbiemriError.innerText = '';
        usernameError.innerText= '';
        passwordError.innerText = '';

        if (!nameRegex.test(emri)) {
            emriError.innerText = 'Enter a valid name';
            return false;
        }

        if (!nameRegex.test(mbiemri)) {
            mbiemriError.innerText = 'Enter a valid surname.';
            return false;
        }

        if (!nameRegex.test(username) && !emailRegex.test(username)) {
            usernameError.innerText = 'Enter a valid username or email address.';
            return false;
        }

        if (!passwordRegex.test(password)) {
            passwordError.innerText = 'Password must be 6 to 20 characters and include at least one letter and one number.';
            return false;
        }

        return true;
    }
</script>

</body>
</html>