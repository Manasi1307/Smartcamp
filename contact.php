<?php
 include("Header.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SmartCampus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <!-- Main Contact Section -->
    <section class="contact-page-container">

        <h2 class="contact-page-title">Get in Touch</h2>

        <div class="contact-content">

            <!-- Left: Details -->
            <div class="contact-details-box">
                <h3>Contact Information</h3>

                <p><strong>📍 Address:</strong><br>
                    VP Institute of Management Studies & Research,<br>
                    Sangli, Maharashtra</p>

                <p><strong>📞 Phone:</strong><br> +91 9876543210</p>

                <p><strong>📧 Email:</strong><br> info@vpimsr.edu.in</p>

                <p><strong>⏰ Timings:</strong><br> Monday – Saturday | 10 AM – 5 PM</p>
            </div>

            <!-- Right: Form -->
            <div class="contact-form-box">
                <h3>Send Us a Message</h3>

                <form class="contact-form">
                    <input type="text" placeholder="Your Name" class="contact-input" required>
                    <input type="email" placeholder="Your Email" class="contact-input" required>
                    <textarea placeholder="Your Message" class="contact-textarea" required></textarea>

                    <button type="submit" class="contact-btn">Send Message</button>
                </form>
            </div>

        </div>
    </section>

</body>
</html>
