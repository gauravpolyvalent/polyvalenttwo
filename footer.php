 <?php
  include("db.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $stmt = $conn->prepare("INSERT INTO subscribe (`email`) VALUES (?)");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
      echo "<script>alert('Message sent successfully!'); window.location.href='thankyou.php';</script>";
    } else {
      echo "<script>alert('Failed to send message.');</script>";
    }

    $stmt->close();
    $conn->close();
  }

  ?>
 <!-- footer section start -->
 <footer class="section-data pt-5">
   <div class="container">
     <div class="row justify-content-between align-items-start">
       <!-- Subscribe Section -->
       <div class="col-md-6 mb-4">
         <h6 class="mb-3 fw-semibold  wow animate__animated animate__fadeInDown">Subscribe for Marketing Insights!</h6>
         <form class="d-flex form-data" method="POST" action="" onsubmit="return validateForm(event);">
           <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email..." />
           <button type="submit"  class="btn btn-primary shadow-sm">Subscribe</button>
          </form>
          <span id="error"  class="text-danger"></span>
       </div>

       <!-- Links Section -->
       <div class="col-md-5 mb-4">
         <div class="" style="display: flex; justify-content: flex-end; gap: 105px;">
           <div class="">
             <h6 class="fw-bold mb-3  wow animate__animated animate__fadeInDown">Company</h6>
             <ul class="list-unstyled">
               <li><a href="index.php" class="text-decoration-none  heading-line  wow animate__animated animate__fadeInDown">Home</a></li>
               <li><a href="aboutus.php" class="text-decoration-none  heading-line  wow animate__animated animate__fadeInDown">About</a></li>
               <li><a href="blogs.php" class="text-decoration-none  heading-line  wow animate__animated animate__fadeInDown">Blog</a></li>
               <li><a href="service.php" class="text-decoration-none  heading-line  wow animate__animated animate__fadeInDown">Services</a></li>
               <li><a href="contactus.php" class="text-decoration-none  heading-line  wow animate__animated animate__fadeInDown">Contact Us</a></li>
             </ul>
           </div>
           <div class="">
             <h6 class="fw-bold mb-3  wow animate__animated animate__fadeInDown">Socials</h6>
             <ul class="list-unstyled">
               <li><a href="https://www.facebook.com/polyvalentdigitalservices/" class="text-decoration-none  heading-line  wow animate__animated animate__fadeInDown">Facebook</a></li>
               <li><a href="https://www.instagram.com/polyvalentdigital/" class="text-decoration-none  heading-line  wow animate__animated animate__fadeInDown">Instagram</a></li>
               <li><a href="https://www.linkedin.com/company/polyvalent-digital-services/posts/?feedView=all" class="text-decoration-none  heading-line  wow animate__animated animate__fadeInDown">LinkedIn</a></li>
             </ul>
           </div>
         </div>
       </div>
     </div>

     <!-- Copyright -->
     <div class="text-left border-top pt-3 pb-4">
       <small class="text-muted heading-line  wow animate__animated animate__fadeInDown">© 2025 Polyvalent Digital Services. All rights reserved.</small>
     </div>
   </div>
 </footer>
 <!-- footer section end -->
 <script>
  function validateForm(event) {
    event.preventDefault(); // Stop form from submitting

    const form = event.target;
    const emailInput = form.querySelector("#email");
    const email = emailInput.value.trim();
    const errorElement = document.getElementById("error");
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
      errorElement.textContent = "Please enter your email.";
      return false;
    }

    if (!emailPattern.test(email)) {
      errorElement.textContent = "Please enter a valid email address.";
      return false;
    }

    errorElement.textContent = ""; // Clear previous error
    form.submit(); // Now this works!
    return true;
  }
 </script>