<?php
$pageTitle = "Contact Us | B-Lab";
$pageDescription = "Contact BIID Innovation Lab (B-Lab).";
$activePage = "contact";
require __DIR__ . '/includes/header.php';
?>

<main>
<section class="page-hero"><div class="container"><div class="page-kicker"><i class="ti ti-mail"></i> Get In Touch</div><h1>Contact Us</h1><p>Contact BIID Innovation Lab for questions about entrepreneurship support, finance access, training and platform services.</p></div></section>
<section class="section section-alt">
  <div class="container contact-grid">
    <div class="card contact-card">
      <h2>Send us a message</h2>
      <p>Complete the form below and your message will be submitted through the existing B-Lab contact service.</p>
      <form action="https://formsubmit.co/digitalistic.net@gmail.com" id="contact-form" method="POST">
        <div class="form-group"><label for="name">Name</label><input class="field" id="name" name="name" required type="text"></div>
        <div class="form-group"><label for="email">Email</label><input class="field" id="email" name="email" required type="email"></div>
        <div class="form-group"><label for="message">Message</label><textarea class="field" id="message" name="message" required></textarea></div>
        <input name="_captcha" type="hidden" value="false">
        <input name="_template" type="hidden" value="table">
        <input name="_next" type="hidden" value="https://www.biid.org.bd/b-lab/Contact_Us.php">
        <button class="btn btn-green" type="submit"><i class="ti ti-send"></i> Send Message</button>
      </form>
    </div>
    <div class="card contact-card">
      <h2>BIID Innovation Lab</h2><p>Bangladesh Institute of ICT in Development (BIID)</p>
      <div class="contact-item"><i class="ti ti-map-pin"></i><span>House No. 174, Level-2, Apt. B3, Road No. 02, Mohakhali DOHS, Dhaka-1206, Bangladesh.</span></div>
      <div class="contact-item"><i class="ti ti-phone"></i><span>(+880) 2 8714169, (+880) 2 9845909</span></div>
      <div class="contact-item"><i class="ti ti-printer"></i><span>(+880) 2 8714168</span></div>
      <div class="contact-item"><i class="ti ti-mail"></i><a href="mailto:info@biid.org.bd">info@biid.org.bd</a></div>
    </div>
  </div>
</section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
