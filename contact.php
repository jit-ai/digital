<?php include 'header.php'; ?>

<?php 
$msg = "";
$error = "";
if(isset($_POST['submit'])) {
    print_r($_POST);
    $to = 'jit.jitendra008@gmail.com';
    $subject = 'Binschema Software Request For quote';

    $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= "CC: jit.jitendra008@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = '<html><body>';
    $message .= '<img src="http://binschema.com/img/binschema_title.jpg" alt="Binschema software" style="width: 50%;" />';
    $message .= '<table rules="all" style="border-color: #666;border:1px solid" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Full Name:</strong> </td><td>" . strip_tags($_POST['fname']) . "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
    $message .= "<tr><td><strong>Phone:</strong> </td><td>" . $_POST['phone'] . "</td></tr>";
    $message .= "<tr><td><strong>Service:</strong> </td><td>" . $_POST['services'] . "</td></tr>";
    $message .= "<tr><td><strong>Subject:</strong> </td><td>" . $_POST['subject'] . "</td></tr>";
    $message .= "<tr><td><strong>Message:</strong> </td><td>" . $_POST['message'] . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    if (mail($to, $subject, $message, $headers)) {
        $msg = "Your details have been sent. A representative will be in touch soon.";
    } else {
        $error = "Mail not sent. Please try again later.";
    }
}
?>

<!-- ✅ Success message display -->
<?php if (!empty($msg)) : ?>
    <p class="nkmail" style="color: green; font-weight: bold; text-align:center;"><?php echo $msg; ?></p>
<?php elseif (!empty($error)) : ?>
    <p class="nkmail" style="color: red; font-weight: bold; text-align:center;"><?php echo $error; ?></p>
<?php endif; ?>

        <!-- Contact-form-wrapper starts
    ======================================= -->
        <div class="contact-form-wrapper padding-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-wrapper contact-page-form-wrapper">
                            <div class="form-wrapper">
                                <h3>Send Us a Message</h3>
                               <form class="contact-form" method="post">
                            <div class="row">
                                <div class="col-md-12 col-lg-6">
                                    <input type="text" name="fname" placeholder="Full Name" required>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>

                                <div class="col-md-12 col-lg-6">
                                    <input type="text" name="services" placeholder="Services">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>

                                <div class="col-md-12">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="btn-wrapper">
                                    <button type="submit" name="submit" class="custom-btn btn-big grad-style-ef">CONTACT US NOW</button>
                                </div>
                            </div>
                        </form>
                                <!-- End of .contact-form -->
                            </div>
                            <!-- End of .form-wrapper -->
                        </div>
                        <!-- End of .contact-form -->
                    </div>
                    <!-- End of .col-lg-7 -->

                    <div class="col-lg-6">
                        <div class="contact-info floating-contact-info">
                            <h5>What’s Next?</h5>

                            <div class="whats-next-wrapper">
                                <p>
                                    <i class="ml-symone-68-arrow-left-right-up-down-increase-decrease"></i>Reach out to us for innovative solutions and expert guidance in digital transformation. We're here to help your business thrive.</p>
                               
                            </div>
                            <!-- End of .whats-next-wrapper -->
                            <!-- End of .address -->

                            <div class="social-icons-wrapper">
                                <p>Follow us on</p>
                                <ul class="social-icons">
                                    <li>
                                        <a href="https://www.linkedin.com/company/cnai-technologies/about/" target="_blank" rel="noopener">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                                <!-- End of .social-icons -->
                            </div>
                        </div>
                        <!-- End of .contact-info -->
                    </div>
                    <!-- End of .col-lg-5 -->
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .container -->
        </div>
        <!-- End of .contact-form-wrapper -->

        <!-- work-places
    ======================================= -->
        <section class="work-places section-padding">
            <svg class="bg-shape shape-work-places reveal-from-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="779px" height="759px">
                <defs>
                    <linearGradient id="PSgrad_045" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                        <stop offset="0%" stop-color="rgb(237,247,255)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(237,247,255)" stop-opacity="0" />
                    </linearGradient>

                </defs>
                <path fill-rule="evenodd" fill="url(#PSgrad_045)" d="M111.652,578.171 L218.141,672.919 C355.910,795.500 568.207,784.561 692.320,648.484 C816.434,512.409 805.362,302.726 667.592,180.144 L561.104,85.396 C423.334,-37.184 211.037,-26.245 86.924,109.832 C-37.189,245.908 -26.118,455.590 111.652,578.171 Z"
                />
            </svg>
            <div class="container">
                <h2 class="text-center">Visit Our Work Places</h2>

                <div class="location-process-tab">
                    <ul class="nav nav-tabs location-tab-nav" id="location-tab-nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="process-nav-1" data-bs-toggle="tab" href="#process-tab-1" role="tab" aria-controls="process-tab-1"
                                aria-selected="true">
                                <img src="images/icon/map-1.png" alt="New York Map">
                                <span>Location</span>
                                <p>Edison, New Jersey 08820
                                    <br>9 AM - 5 PM </p>
                            </a>
                        </li>
                    </ul>
                    <!-- End of .service-tab-nav -->
                    <div class="tab-content location-tab-content" id="location-tab">
                        <div class="tab-pane fade show active" id="process-tab-1" role="tabpanel" aria-labelledby="process-nav-1">
                            <div class="map-wrapper">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230240.95716433253!2d-74.14210908967785!3d40.69297082637538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1530711929548"
                                    width="600" height="450" allowfullscreen></iframe>
                            </div>
                            <!-- End of .map-wrapper -->
                        </div>
                        <!-- End of .tab-pane -->

                        <div class="tab-pane fade" id="process-tab-2" role="tabpanel" aria-labelledby="process-nav-2">
                            <div class="map-wrapper">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.703034857812!2d90.40407911552505!3d23.79358698456803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70e90bb671d%3A0x7eab77d0896252c0!2sBanani+Super+Market!5e0!3m2!1sen!2sbd!4v1530712354667"
                                    width="600" height="450" allowfullscreen></iframe>
                            </div>
                            <!-- End of .map-wrapper -->
                        </div>
                        <!-- End of .tab-pane -->

                        <div class="tab-pane fade" id="process-tab-3" role="tabpanel" aria-labelledby="process-nav-3">
                            <div class="map-wrapper">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223994.25249690443!2d76.95126668887372!3d28.692332879013097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d047309fff32f%3A0xfc5606ed1b5d46c3!2sDelhi%2C+India!5e0!3m2!1sen!2sbd!4v1530712422885"
                                    width="600" height="450" allowfullscreen></iframe>
                            </div>
                            <!-- End of .map-wrapper -->
                        </div>
                        <!-- End of .tab-pane -->
                    </div>
                    <!-- End of .service-tab-content -->
                </div>
                <!-- End of .location-process-tab -->
            </div>
            <!-- End of .container -->
        </section>
        <!-- End of .work-places -->

        <!-- Newsletter starts
    ======================================= -->
        <section class="newsletter">
            <div class="container">
                <h3 class="text-center">Sign up for our newsletter to stay up to
                    <br>date with tech news!</h3>

                <form action="#" class="newsletter-form" method="POST">
                    <div class="row justify-content-between">
                        <div class="col-md">
                            <input type="text" name="fname" placeholder="Your Name">
                        </div>
                        <div class="col-md">
                            <input type="text" name="email" placeholder="Your Email Address">
                        </div>

                        <div class="col-md-auto">
                            <a href="#" class="custom-btn btn-big grad-style-ef">SIGN UP FOR FREE</a>
                        </div>
                    </div>
                    <!-- End of .row -->
                </form>
                <!-- End of .newsletter-form -->
            </div>
            <!-- End of .container -->
        </section>
        <!-- End of .newsletter -->

   <?php include 'footer.php'; ?>
   <style>
    .padding-top{
  margin-top: 115px !important;
}
</style>

<!-- ✅ Reset Form After Successful Submission -->
<?php if (!empty($msg)) : ?>
<script>
    setTimeout(function () {
        document.querySelector('.contact-form').reset();
    }, 100);
</script>
<?php endif; ?>