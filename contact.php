<?php 
$pageTitle = "Contact Us - Scrap Venture";
include 'includes/header.php'; 
?>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
            <p>Have questions or need assistance? Reach out to our team</p>
        </div>
        
        <div class="contact-form">
            <form action="process-contact.php" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" class="form-control" required></textarea>
                </div>
                
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
        
        <div class="contact-info" style="margin-top: 50px; text-align: center;">
            <h3>Other Ways to Reach Us</h3>
            <div style="display: flex; justify-content: center; margin-top: 20px;">
                <div style="margin: 0 20px;">
                    <i class="fas fa-phone-alt" style="font-size: 24px; color: var(--primary); margin-bottom: 10px;"></i>
                    <p>+8801234567890</p>
                </div>
                <div style="margin: 0 20px;">
                    <i class="fas fa-envelope" style="font-size: 24px; color: var(--primary); margin-bottom: 10px;"></i>
                    <p>support@scrapventure.com</p>
                </div>
                <div style="margin: 0 20px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 24px; color: var(--primary); margin-bottom: 10px;"></i>
                    <p>Mirpur DOHS, Dhaka</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>