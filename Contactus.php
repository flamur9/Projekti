<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="ContactUs.css">
</head>
<body>
    <div class="full-form">
        <div class="page1">
            <form class="forma" action="process_form.php" method="post">
                <h2>Write us</h2>
                <label class="form-text" for=""><b>Name </b></label>
                <input type="text" name="name" required>
            
                <label class="form-text" for=""><b>Email</b></label>
                <input type="email" name="email" required>
                
                <label class="form-text" for=""> <b>Subject</b></label>
                <input type="text" name="subject" required>
                
                <label class="form-text" for=""><b>Message</b></label>
                <textarea class="tekstarea" name="message" cols="5" rows="5"></textarea>
        
                <button id="submiti" type="submit"> Send Message </button>
            </form>
        </div>
    </div>
    <div class="part2">
        <h1>Contact information</h1>
        <p>We are open for any suggestion or just to have a chat</p>

        <img class="location" src="location.png" alt="">
        <b>Location: Prishtinë</b>

        <img class="phone" src="phone.png" alt="">
        <b>Phone: 043-840-345</b>

        <img class="email" src="email.png" alt="">
        <b>Email: fk67828@ubt-uni.net</b>

        <img class="website" src="website.png" alt="">
        <b>Website</b>
    </div>
</body>
</html>
