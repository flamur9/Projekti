<<<<<<< HEAD
<?php
require_once 'dbconnect.php';
require_once 'rolet.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    // Validate
    if (empty($username) || empty($password)) {
        echo "All fields are required.";
        exit;
    }

    
    $sql = "SELECT id, emri, mbiemri, password FROM users WHERE username = ?";

    if ($stmt = $conn->prepare($sql)) {
    
        $stmt->bind_param("s", $param_username);

        
        $param_username = $username;

        
        if ($stmt->execute()) {
      
            $stmt->store_result();

            // Nese username ekziston, verifiko passwordin
            if ($stmt->num_rows > 0) {
                
                $stmt->bind_result($id, $emri, $mbiemri, $hashed_password);
                if ($stmt->fetch()) {
                 
                    if (password_verify($password, $hashed_password)) {
                  
                        session_start();

                       
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["emri"] = $emri;
                        $_SESSION["mbiemri"] = $mbiemri;
                        $_SESSION["role"] = getUserRole($conn, $id, $username);

                       
                        header("location: main-page.php");
                    } else {
                     
                        echo "Passwordi nuk eshte valid.";
                        
                    }
                }
            } else {
                
                echo "<script>alert('Ky user nuk ekziston, ju lutem regjistrohu ne sign up page.');</script>";
                header("refresh:0; url=Sign-in-page.php");
           
            }
        } else {
            echo "Error.";
        }

        
        $stmt->close();
    }


    $conn->close();
}
?>


=======
>>>>>>> 6b96220c7b1061945195d98b3077dd382a3f256d
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
<<<<<<< HEAD
            <form class="formstyle" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return validateForm()">
=======
            <form class="formstyle" action="" method="post" onsubmit="return validateForm()">
>>>>>>> 6b96220c7b1061945195d98b3077dd382a3f256d
                <label class="user" for="">
                    <b>Email :</b>
                    <input id="username" type="text" name="Username" required>
                    <div class="error-message" id="nameError"></div>
                </label>
                <label class="passw" for="">
                    <b>Password: </b>
                    <input id="password" type="password" name="Password" required>
                    <div class="error-message" id="passwordError"></div>
                </label>
                <button class="signin-button" type="submit" name="signin-button"><b>Sign in</b></button>
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
<<<<<<< HEAD
                    <label for=""><b>Don't have an account? </b><a id="signup" href="signup.php">Sign up.</a></label>
=======
                    <label for=""><b>Don't have an account? </b><a id="signup" href="sign-up-page.html">Sign up.</a></label>
>>>>>>> 6b96220c7b1061945195d98b3077dd382a3f256d
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

<<<<<<< HEAD
            return true;
        }
    </script>


    
=======
         

           
            return false;
        }
    </script>

<?php
  if(isset($_POST['signin-button'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
      echo "Please fill the required fields!";
    }else{
        //validate
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once 'users.php';
        $i=0;
        
        foreach($users as $user){
          if($user['username'] == $username && $user['password'] == $password){
            session_start();
      
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("location:main-page.php");
            exit();
          }else{
            $i++;
            if($i == sizeof($users)) {
              echo "Incorrect Username or Password!";
              exit();
            }
          }
        }
    }
  }
?>    
>>>>>>> 6b96220c7b1061945195d98b3077dd382a3f256d
</body>
</html>