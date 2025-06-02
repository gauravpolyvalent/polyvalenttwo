<?php
include("db.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
   

    $fname = trim($_POST['name']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $mobile = trim($_POST['mobile']);
    $company = trim($_POST['company']);
    $message = trim($_POST['message']);
   

    $stmt = $conn->prepare("INSERT INTO lead (`name`, `lname`, `email`, `mobile`, `company`, `message`) VALUES (?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssssss", $fname, $lname, $email, $mobile, $company, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Message sent successfully!'); window.location.href='thankyou.php';</script>";
    } else {
        die("Execute failed: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body
    style="background: radial-gradient(50.13% 30.73% at 100% -0.58%, rgba(47, 102, 245, 0.20) 0%, rgba(255, 255, 255, 0.20) 100%), radial-gradient(59.48% 31.06% at 4.72% 38.72%, rgba(47, 102, 245, 0.20) 0%, rgba(255, 255, 255, 0.20) 100%), #FFF;">
    <!-- nav section start "-->

 <?php include("header.php")?>
    <!-- nav section end -->
    <!-- about us section start -->
    <section class="section-padding-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="time-wrapper wow animate__animated animate__fadeInDown">
                        <div class="time-number">
                            <p class="text-white">24/7</p>
                        </div>
                        <div>
                            <p>Let's Work Together</p>
                        </div>
                    </div>
                    <div class="section-title-two wow animate__animated animate__fadeInDown">
                        <h2 class="gradient-text text-center letter-spacing mt-3">Any Questions Rising?
                            We are All Here.s</h2>
                        <p class="text-center mt-3">
                            Whether you have a question, need assistance,
                            or want to start a new project, our team is here to help.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 wow animate__animated animate__fadeInDown">
                    <div class="contact-form-wrapper mt-5">
                         <form method="post" action="" id="contactForm">
                            <div class="d-flex gap-2 mt-4 label-data">
                                <div>
                                    <label class="fw-bold">First Name <sup>*</sup></label>
                                    <input type="text" class="form-control mt-2" name="name" placeholder="First Name"/>
                                    <span class="error text-danger" id="fnameError"></span><br>
                                </div>
                                <div>
                                    <label class="fw-bold">Last Name <sup>*</sup></label>
                                    <input type="text" class="form-control mt-2" name="lname" placeholder="Last Name"/>
                                    <span class="error text-danger" id="lnameError"></span><br>
                                </div>
                            </div>
                            
                            <div class="mt-2">
                                <label class="fw-bold">Email <sup>*</sup></label>
                                <input type="email" class="form-control mt-2" name="email" placeholder="Enter your Email"/>
                                <span class="error text-danger" id="emailError"></span><br>
                            </div>
                            <div class="d-flex gap-2 label-data-one">
                                <div class="mt-2">
                                    <label class="fw-bold">Phone No <sup>*</sup></label>
                                    <input type="text" class="form-control mt-2" name="mobile" placeholder="Enter your Number"/>
                                    <span class="error text-danger" id="phoneError"></span><br>
                                </div>
                                <div class="mt-2">
                                    <label class="fw-bold">What's the type of your company? <sup>*</sup></label>
                                    <select class="form-select data-select" name="company">
                                        <option>Product Company</option>
                                        <option>Service Company</option>
                                    </select>
                                    
                                </div>
                            </div>
                            
                            <div class="mt-2">
                                <label class="fw-bold">Message <sup>*</sup></label>
                                <textarea class="form-control mt-2" placeholder="Type Your Message...." rows="3" name="message">
                                </textarea>
                                <span class="error text-danger" id="messageError"></span><br>
                            </div>
                            <div class="">
                                <button type="submit" name="submit" class="btn btn-primary w-100 text-white mt-4" id="submitBtn">Submit</a>
                            </div>
                         </form>   
                    </div>
                </div>
                <div class="col-lg-4 wow animate__animated animate__fadeInDown">
                    <div class="contact-card">
                        <div class="contact-item mt-5">
                          <div class="icon-title">
                            <span><img src="assets/images/mail.png" alt="current-data"/></span>
                            <span>Email <span class="badge blue">24/7</span></span>
                          </div>
                          <div class="icon-border mt-3"></div>
                          <div class="mt-3">
                            <a href="mailto:hello@polyvalent.co.in" class="contact-text text-decoration-underline ">hello@polyvalent.co.in</a>
                        </div>
                          
                        </div>
                      
                        <div class="contact-item">
                          <div class="icon-title">
                            <span><img src="assets/images/smartphone.png" alt="current-data"/></span>
                            <span>Phone</span>
                          </div>
                          <div class="icon-border mt-3"></div>
                          <div class="mt-3">
                            <a href="tel:+9101245181101" class="contact-text">+91 01245181101</a>
                          </div>
                        </div>
                      
                        <div class="contact-item">
                          <div class="icon-title">
                            <span><img src="assets/images/map-pin.png" alt="current-data"/></span>
                            <span>Address <span class="badge blue">ON - SITE</span></span>
                          </div>
                          <div class="icon-border mt-3"></div>
                          <p class="contact-text mt-3">
                            Unit 303, 304, 305, Tower 4, DLF Corporate Greens,<br />
                            Sector 74 A, Gurugram, Haryana, 122004
                          </p>
                        </div>
                      </div>
                      
                </div>
            </div>

        </div>
    </section>
    <!-- about us section end -->
      <!-- footer section start -->
      <?php include("footer.php")?>
      
      <!-- footer section end -->
    <!-- cursoer code start here -->
    <div class="custom-cursor"></div>
    <!-- cursoer code end here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
      new WOW().init(); // initialize WOW
</script>
<script>

document.getElementById("contactForm").addEventListener("submit", function (e) {
    const form = e.target;

    const fname = form.querySelector("input[name='name']");
    const lname = form.querySelector("input[name='lname']");
    const email = form.querySelector("input[name='email']");
    const mobile = form.querySelector("input[name='mobile']");
    const message = form.querySelector("textarea[name='message']");

    const fnameError = document.getElementById("fnameError");
    const lnameError = document.getElementById("lnameError");
    const emailError = document.getElementById("emailError");
    const phoneError = document.getElementById("phoneError");
    const messageError = document.getElementById("messageError");

    let isValid = true;

    // Clear errors
    fnameError.textContent = "";
    lnameError.textContent = "";
    emailError.textContent = "";
    phoneError.textContent = "";
    messageError.textContent = "";

    // Validate fields
    if (!fname.value.trim()) {
        fnameError.textContent = "First name is required.";
        isValid = false;
    }
    if (!lname.value.trim()) {
        lnameError.textContent = "Last name is required.";
        isValid = false;
    }
    if (!email.value.trim() || !/^\S+@\S+\.\S+$/.test(email.value)) {
        emailError.textContent = "A valid email is required.";
        isValid = false;
    }
    if (!mobile.value.trim() || !/^\d{10}$/.test(mobile.value)) {
        phoneError.textContent = "A valid 10-digit phone number is required.";
        isValid = false;
    }
    if (!message.value.trim()) {
        messageError.textContent = "Message is required.";
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault();
    }
});



</script>

</body>

</html>