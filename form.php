<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $country_name = $_POST['country_name'];
    $mobile = $_POST['modal_my_mobile2'];

    // Set the recipient email address
    $to = "youremail@example.com"; // Replace with your email address
    $subject = "New Form Submission from Mantra Joypin";

    // Compose the email message
    $message = "
    <html>
    <head>
    <title>Form Submission</title>
    </head>
    <body>
    <h2>New Form Submission</h2>
    <p><strong>Name:</strong> $fname</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Country:</strong> $country_name</p>
    <p><strong>Phone:</strong> $mobile</p>
    </body>
    </html>
    ";

    // Set email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@mantrajoypin.com" . "\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission. We will get back to you soon!";
    } else {
        echo "There was an error. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Register Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file here -->
</head>
<body>

<div class="d-flex">
    <div class="flex-fill align-self-center flex-shrink-1 modal-highlight-bg d-none d-lg-block">
        <span class="modal-highlight-title">We Promise</span>
        <ul class="modal-highlight">
            <li><i class="mi mi-support-call"></i><span>Instant Call Back</span></li>
            <li><i class="mi mi-support-visit"></i><span>Free Site Visit</span></li>
            <li><i class="mi mi-support-price"></i><span>Unmatched Price</span></li>
        </ul>
    </div>
    <div class="flex-fill align-self-center">
        <span class="popup-logo"><img alt="Mantra Joypin Logo" src="images/mantra-logo-s.jpg" class="logo"></span>
        <span class="modal-title-secondary"> Register here and Avail the <span class="text-danger">Best Offers!!</span></span>
        
        <form action="form.php" method="post" class="form-side" id="pardotForm">
            <input type="text" id="fname" placeholder="Name" name="fname" class="form-control rounded-0 micro-form-field" required>
            <div class="error" id="name_error"></div>

            <input type="email" id="email" placeholder="Email Address" name="email" class="form-control rounded-0 micro-form-field" required>
            <div class="error" id="address_error"></div>

            <select class="my_country_name form-control rounded-0 micro-form-field" aria-label="countryname" name="country_name" required>
                <option value="India">India</option>
                <!-- Add more countries if needed -->
            </select>

            <input type="hidden" value="91" name="country_code" id="country_code" class="operations-supplierCapacity">

            <input name="modal_my_mobile2" class="form-control numeric rounded-0 micro-form-field" id="modal_my_mobile" pattern="^[_0-9]+" placeholder="Phone number" type="text" required="required" data-error="Please enter your valid mobile number" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">

            <input type="hidden" id="first_name" name="first_name">
            <input type="hidden" id="last_name" name="last_name">
            <input type="hidden" id="builder" name="builder" value="Magarpatta City Group">
            <input type="hidden" id="project" name="project" value="Mantra Joypin">
            <input type="hidden" id="lead_source" name="lead_source" value="Microsite">
            <input type="hidden" name="ip" id="ip" value="">
            <input type="hidden" name="mobile" id="modal_dg_mobile" class="mobileconcat">
            <input type="hidden" id="enquiredfor" name="enquiredfor" value="Get Instant Call Back Home Page Pop Up">
            <input type="hidden" name="home_url" value="https://www.mantrajoypin.com/">

            <button type="submit" class="btn btn-info micro-form-btn effetMoveGradient submitBtn" id="submitBtn" style="margin-top:10px;margin-bottom:10px">Pre-Register Now</button>
        </form>
    </div>
</div>

</body>
</html>
