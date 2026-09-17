<!-- ============================================================
     CONTACT
     ============================================================ -->
<section id="contact">
    <div class="section-wrapper">
        <div class="section-head">
            <p class="eyebrow">Get In Touch</p>
            <h1 class="section-title">Contact Us</h1>
            <p class="section-sub">Leave us a message and we'll get back to you.</p>
        </div>

        <div class="contact-grid">
            <!-- Form -->
            <div class="contact-form-wrap">
                <h3>Send a Message</h3>

                <?php if ($mail_success): ?>
                    <div class="alert alert-success">&#10003; Your message has been sent successfully! Thank you for your feedback.</div>
                <?php endif; ?>
                <?php if ($mail_error): ?>
                    <div class="alert alert-error">&#9888; There was a problem sending your email. Please try again later.</div>
                <?php endif; ?>

                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Message subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Write your message..." required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            <!-- Info -->
            <div class="contact-info-wrap">
                <h3>Contact Details</h3>
                <div class="contact-info-item">
                    <i class="ti ti-map-pin"></i>
                    <span>Bangladesh Institute of ICT in Development (BIID)<br>House No. 174, Level-2, Apt. B3, Road No. 02,<br>Mohakhali DOHS, Dhaka-1206, Bangladesh</span>
                </div>
                <div class="contact-info-item">
                    <i class="ti ti-phone"></i>
                    <span>(+880) 2 8714169 &nbsp;|&nbsp; (+880) 2 9845909</span>
                </div>
                <div class="contact-info-item">
                    <i class="ti ti-printer"></i>
                    <span>Fax: (+880) 2 8714168</span>
                </div>
                <div class="contact-info-item">
                    <i class="ti ti-mail"></i>
                    <a href="mailto:info@biid.org.bd">info@biid.org.bd</a>
                </div>
                <div class="map-embed">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.7393673261544!2d90.39725246953445!3d23.784528798665434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7000bcfe04d%3A0xca51ece6e1c119ff!2sBangladesh%20Institution%20of%20ICT%20in%20Development(BIID)-Head%20Office!5e0!3m2!1sen!2sbd!4v1772085302288!5m2!1sen!2sbd"
                        width="100%"
                        height="220"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
