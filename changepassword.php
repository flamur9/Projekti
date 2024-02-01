<?php
// Include necessary files and configurations
require_once 'dbconnect.php';

// Initialize variables for messages
$errorMessage = $successMessage = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $username = $_POST["username"];
    $oldPassword = $_POST["oldpassword"];
    $newPassword = $_POST["newpassword"];

    // Validate user input
    // ... (you might want to perform additional validation)

    // Retrieve the current hashed password from the database
    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();
    $stmt->close();

    // Verify the old password
    if (password_verify($oldPassword, $hashedPassword)) {
        // Hash the new password
        $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Update the password in the database
        $updateStmt = $conn->prepare("UPDATE users SET password = ? WHERE username = ?");
        $updateStmt->bind_param("ss", $newHashedPassword, $username);
        $updateStmt->execute();
        $updateStmt->close();

        // Set success message
        $successMessage = "Password successfully changed!";
        
        // Redirect to the main page after successful password change
        header("Location: main-page.php");
        exit();
    } else {
        // Set error message
        $errorMessage = "Incorrect old password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="changepassword.css">
</head>
<body>
    <div class="changepw">
        <form class="formstyle" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm()">
            
            <label class="user">
                <b>USERNAME:</b>
                <input id="username" type="text" name="username" required>
                <div class="error-message" id="usernameError"></div>
                
                <b>OLD PASSWORD:</b>
                <input id="oldpassword" type="password" name="oldpassword" required>
                <div class="error-message" id="oldpasswordError"></div>
                
                <b>NEW PASSWORD: </b>
                <input id="newpassword" type="password" name="newpassword" required>
                <div class="error-message" id="newpasswordError"></div>
            </label>

            <input class="changepw-button" type="submit" value="Change Password">
            
            <!-- Display error message if set -->
            <?php if (!empty($errorMessage)): ?>
                <div class="error-message"><?php echo $errorMessage; ?></div>
            <?php endif; ?>

            <!-- Display success message if set -->
            <?php if (!empty($successMessage)): ?>
                <div class="success-message"><?php echo $successMessage; ?></div>
            <?php endif; ?>
        </form>

        <script>
            let passwordRegex = /^[A-Za-z\d]{6,20}$/;

            function validateForm() {
                let username = document.getElementById('username').value.trim();
                let oldPassword = document.getElementById('oldpassword').value.trim();
                let newPassword = document.getElementById('newpassword').value.trim();

                let usernameError = document.getElementById('usernameError');
                let oldpasswordError = document.getElementById('oldpasswordError');
                let newpasswordError = document.getElementById('newpasswordError');

                usernameError.innerText = '';
                oldpasswordError.innerText = '';
                newpasswordError.innerText = '';

                if (!passwordRegex.test(oldPassword)) {
                    oldpasswordError.innerText = 'Old password must be 6 to 20 characters.';
                    return false;
                }

                if (!passwordRegex.test(newPassword)) {
                    newpasswordError.innerText = 'New password must be 6 to 20 characters.';
                    return false;
                }

                return true;
            }
        </script>
    </div>
</body>
</html>
